<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Material;

class HomeController extends Controller
{
    public function dashboard()
    {
        if (auth()->user()->roles->contains('name', 'admin')) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('user.dashboard');
        }
    }

    public function grade(Grade $grade)
    {
        $subjects = $subjects = Subject::with('grades:id,name')->get();
        return view('grade')->with([
            'grade' => $grade,
            'subjects' => $subjects,
        ]);
    }

    public function subject(Subject $subject)
    {

        return view('subject')->with(['subject' => $subject]);
    }

    public function material(Material $material)
    {
        $grades =Grade::get();
        return view('material')->with([
            'material' => $material,
            'grades'   => $grades

        ]);
    }
}
