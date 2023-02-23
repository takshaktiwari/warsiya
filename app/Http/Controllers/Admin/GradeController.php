<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use App\Models\Grade;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Board;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::with('board:id,name')->with('subjects:id,name')->paginate(25);
        return view('admin.grades.index')->with([
            'grades'    =>  $grades
        ]);
    }


    public function create()
    {
        $subjects = Subject::select('id', 'name')->get();
        $boards = Board::select('id', 'short_name')->get();

        return view('admin.grades.create')->with([
            'subjects'  =>  $subjects,
            'boards'  =>  $boards
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([

            'name'  =>  'required|unique:grades,name',
            'board_id'  =>  'required'

        ]);

        $grade =Grade::create([
            'name'  =>  $request->post('name'),
            'board_id'  =>  $request->post('board_id')
        ]);

        $subjects = $request->post('subjects');
        $grade->subjects()->sync($subjects);
        $grade->save();

        return redirect()->route('admin.grades.index')->withSuccess('SUCCESS !! Data successfully stored');
    }

    public function edit(Grade $grade)
    {
        $subjects = Subject::select('id', 'name')->get();
        $boards = Board::select('id', 'short_name')->get();

        return view('admin.grades.edit')->with([
            'grade'     =>  $grade,
            'subjects'  =>  $subjects,
            'boards'  =>  $boards

        ]);
    }

    public function update(Request $request, Grade $grade)
    {
        $request->validate([
            'name'  =>  'required|unique:grades,name,'.$grade->id,
            'board_id'  =>  'required'
        ]);

        $grade->update([
            'name'  =>  $request->post('name'),
            'board_id'  =>  $request->post('board_id')
        ]);
        $subjects = $request->post('subjects');
        $grade->subjects()->sync($subjects);
        return back()->withSuccess('Grade has been updated.');
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();
        return back()->withSuccess('SUCCESS !! Grade has been deleted.');
    }
}
