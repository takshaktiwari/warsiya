<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\Subject;
use App\Models\Board;
use App\Traits\ImageTrait;
use Str;


class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::get()->all();
        return view('admin.materials.index')->with(['materials' => $materials ]);
            
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

    public function getGrade(){

        $grades = Grade::get()->all();

        return $grades;
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'title'  =>  'required',
            'subjects'  =>  'required',
            'file_path'  =>  'required',
            'description'  =>  'required'

        ]);


        $material = Material::create([  
         
            'title'        =>  $request->post('title'), 
            'subject_id'   =>  $request->post('subjects') ,
            'file_path'  =>  'test path',
            'description'  =>  $request->post('description') 

        ]);

        $material->save();

        return redirect()->route('admin.materials.index')->withSuccess('SUCCESS !! Data successfully stored');
    }

    public function edit(Material $material){

        $subjects = Subject::get()->all();

        return view('admin.materials.edit')->with([
            'material'     =>  $material,
            'subjects'     =>  $subjects
        ]);
    }

    public function update(Request $request, Material $material){

        $request->validate([
           
            'title'         =>  'required',
            'subjects'      =>  'required',
            'file_path'     =>  'required',
            'description'   =>  'required'
        ]);

        $material->update([
            'title'        =>  $request->post('title'), 
            'subject_id'   =>  $request->post('subjects') ,
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
