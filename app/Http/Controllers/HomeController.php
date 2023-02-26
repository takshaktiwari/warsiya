<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\Board;
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
        $subjects = $subjects = Subject::with('grades:id,name')->limit(20)->get();
        return view('grade')->with([
            'grade' => $grade,
            'subjects' => $subjects,
        ]);
    }

    public function subject(Subject $subject)
    {
        $materials = Material::select('id','title')->limit(20)->get();
        return view('subject')->with([
                'subject' => $subject,
                'materials' => $materials

        ]);
    }

    public function material(Material $material)
    {
        $grades =Grade::get();
        return view('material')->with([
            'material' => $material,
            'grades'   => $grades

        ]);
    }

    public function board(Board $board)
    {
        $grades =Grade::get();
        return view('board')->with([
            'board' => $board,
            'grades'   => $grades

        ]);
    }
}
