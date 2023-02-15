<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Subject;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::with('subjects:id,name')->paginate(25);
        return view('admin.grades.index')->with([
            'grades'    =>  $grades
        ]);
    }

    public function create()
    {
        $subjects = Subject::select('id', 'name')->get();
        return view('admin.grades.create')->with([
            'subjects'  =>  $subjects
        ]);
    }
}
