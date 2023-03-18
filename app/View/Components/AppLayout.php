<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Board;

class AppLayout extends Component
{
    public $boards;

    public function __construct($value='')
    {
        $this->boards = Board::get();
    }

    public function render(): View
    {
        return view('layouts.app');
    }
}
