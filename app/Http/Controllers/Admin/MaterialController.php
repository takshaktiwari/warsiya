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
            ->select('id', 'title', 'grade_id', 'subject_id')
            ->with('subject:id,name')
            ->with(['grade' => function ($query) {
                $query->select('id', 'board_id', 'name');
                $query->with('board:id,short_name,name');
            }])
            ->withCount('materialItems')
            ->paginate(50);

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
            ->with('parent:id,name')
            ->whereHas('grades', fn ($q) => $q->where('grades.id', $request->grade_id))
            ->where(function ($query) {
                $query->whereNotNull('subject_id');
                $query->orDoesntHave('children');
            })
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
        $grade = Grade::where('id', $material->grade_id)->get();
        return view('admin.materials.info')->with([
            'material'     =>  $material,
            'grade'    =>  $grade
        ]);
    }

    public function edit(Material $material)
    {
        $boards = Board::get();
        $grades = Grade::query()
            ->with(['subjects' => fn ($q) => $q->with('parent:id,name')])
            ->where('board_id', $material->grade?->board?->id)
            ->get();

        return view('admin.materials.edit')->with([
            'material'     =>  $material,
            'boards'    =>  $boards,
            'grades'    =>  $grades,
        ]);
    }

    public function update(Request $request, Material $material)
    {
        $request->validate([
            'title'         =>  'required',
            'subject_id'      =>  'required',
            'file_path'     =>  'nullable|array',
            'file_path.*'     =>  'nullable|file',
            'description'   =>  'required'
        ]);

        $material->update([
            'title'        =>  $request->post('title'),
            'subject_id'   =>  $request->post('subject_id'),
            'description'  =>  $request->post('description')
        ]);

        if ($request->file('file_path')) {
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
        }

        return back()->withSuccess('Material has been updated.');
    }

    public function destroy(Material $material)
    {
        $material->delete();
        return back()->withSuccess('SUCCESS !! Material has been deleted.');
    }
}
