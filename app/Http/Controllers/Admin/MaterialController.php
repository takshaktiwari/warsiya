<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Subject;
use App\Models\Board;
use App\Models\Grade;
use App\Models\MaterialItem;
use App\Traits\ImageTrait;
use Str;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::query()
            ->with('subject:id,name')
            ->with('grade:id,name')
            ->withCount('materialItems')
            ->paginate(25);

        return view('admin.materials.index')->with(['materials' => $materials]);
    }


    public function create()
    {
        $subjects = Subject::get()->all();
        $boards = Board::get()->all();
        return view('admin.materials.create')->with([

            'boards'    =>  $boards,
            'subjects'    =>  $subjects
        ]);
    }

    public function getGrades(Request $request)
    {
        $request->validate([
            'board_id'  =>  'required|numeric'
        ]);
        return Grade::where('board_id', $request->board_id)->get();
    }

    public function getSubjects(Request $request)
    {
        $request->validate([
            'grade_id'  =>  'required|numeric'
        ]);
        return Subject::query()
            ->whereHas('grades', fn ($q) => $q->where('grades.id', $request->grade_id))
            ->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'  =>  'required',
            'grade_id'  =>  'required',
            'subject_id'  =>  'required',
            'file_path'  =>  'required|array|min:1',
            'description'  =>  'nullable'
        ]);

        $material = new Material();
        $material->title = $request->title;
        $material->grade_id = $request->grade_id;
        $material->subject_id = $request->subject_id;
        $material->description = $request->description;
        $material->save();

        foreach ($request->file('file_path') as $file) {
            $fileName = str()->of(microtime())->slug('-')->append('.' . $file->extension());
            $path = $file->storeAs(
                'materials',
                $fileName,
                'public'
            );
            MaterialItem::create([
                'material_id'  => $material->id,
                'file_path' =>  $path
            ]);
        }

        return to_route('admin.materials.index')->withSuccess('Material is successfully added');
    }

    public function show(Material $material)
    {
        $grade = Grade::where('id',$material->grade_id)->get();
        //$board = Board::where('id')->get();
        return view('admin.materials.info')->with([
            'material'     =>  $material,
             'grade'    =>  $grade
        ]);
    }

    public function edit(Material $material)
    {
        $subjects = Subject::get()->all();
        $boards = Board::get()->all();

        return view('admin.materials.edit')->with([
            'material'     =>  $material,
            'subjects'     =>  $subjects,
             'boards'    =>  $boards
        ]);
    }

    public function update(Request $request, Material $material)
    {
        $request->validate([

            'title'         =>  'required',
            'subjects'      =>  'required',
            'file_path'     =>  'required',
            'description'   =>  'required'
        ]);

        $material->update([
            'title'        =>  $request->post('title'),
            'subject_id'   =>  $request->post('subjects'),
            'file_path'    =>  'test path',
            'description'  =>  $request->post('description')
        ]);

        return back()->withSuccess('Material has been updated.');
    }

    public function destroy(Material $material)
    {
        $material->delete();
        return back()->withSuccess('SUCCESS !! Material has been deleted.');
    }
}
