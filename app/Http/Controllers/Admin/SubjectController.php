<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('grades:id,name')->with('parent')->latest()->paginate(50);
        return view('admin.subjects.index')->with([
            'subjects'  =>  $subjects
        ]);
    }

    public function create()
    {
        $subjects = Subject::select('id', 'name')->orderBy('name')->get();
        return view('admin.subjects.create')->with([
            'subjects'  => $subjects
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  =>  'required|unique:subjects,name',
            'subject_id'    =>  'nullable|numeric'
        ]);

        Subject::create([
            'name' => $request->name,
            'subject_id'    =>  $request->post('subject_id')
        ]);
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
            'name'  =>  'required|unique:subjects,name,' . $subject->id,
            'subject_id'    =>  'nullable|numeric'
        ]);

        $subject->update([
            'name' => $request->name,
            'subject_id'    =>  $request->post('subject_id')
        ]);
        return back()->withSuccess('Subject has been updated.');
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();
        return back()->withSuccess('SUCCESS !! Subject has een deleted.');
    }
}
