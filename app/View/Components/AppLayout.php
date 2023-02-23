<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Grade;

class AppLayout extends Component
{
    public $grades;

    public function __construct($value='')
    {
        $this->grades = Grade::get();
    }
    
    public function render(): View
    {
        return view('layouts.app');
    }
}
