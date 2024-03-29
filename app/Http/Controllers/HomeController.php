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





    public function material(Material $material)
    {
        $grades = Grade::get();
        return view('material')->with([
            'material' => $material,
            'grades'   => $grades

        ]);
    }

    public function board(Board $board)
    {
        $board->load('grades');
        $boards = Board::get();
        return view('board')->with([
            'board' => $board,
            'boards' => $boards,
        ]);
    }

    public function grade(Grade $grade)
    {
        $grades = Grade::query()
            ->where('board_id', $grade->board_id)
            ->with(['subjects' => function ($query) {
                $query->with('parent:id,name');
                $query->whereNotNull('subjects.subject_id');
                $query->orDoesntHave('children');
            }])
            ->get();
        return view('grade')->with([
            'grade' => $grade,
            'grades' => $grades,
        ]);
    }

    public function subject(Grade $grade, Subject $subject)
    {
        $materials = Material::query()
            ->with('materialItems')
            ->where('grade_id', $grade->id)
            ->where('subject_id', $subject->id)
            ->get();

        return view('subject')->with([
            'subject' => $subject,
            'grade' => $grade,
            'materials' => $materials
        ]);
    }
}
