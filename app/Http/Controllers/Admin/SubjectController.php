<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('grades:id,name')->paginate(25);
        return view('admin.subjects.index')->with([
            'subjects'  =>  $subjects
        ]);
    }

    public function create()
    {
        return view('admin.subjects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  =>  'required|unique:subjects,name'
        ]);

        Subject::create(['name' => $request->name]);
        return redirect()->route('admin.subjects.index')->withSuccess('New subject has been created.');
    }

    public function edit(Subject $subject)
    {
        return view('admin.subjects.edit')->with([
            'subject'   =>  $subject
        ]);
    }

    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'name'  =>  'required|unique:subjects,name,' . $subject->id
        ]);

        $subject->update(['name' => $request->name]);
        return back()->withSuccess('Subject has been updated.');
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();
        return back()->withSuccess('SUCCESS !! Subject has een deleted.');
    }
}
