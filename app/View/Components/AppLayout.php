<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Board;

class AppLayout extends Component
{
    public $boards;
    public $board_footers;

    public function __construct($value='')
    {
        $this->boards = Board::get();
        $this->board_footers = Board::select('id','short_name')->limit(4)->get();
    }
    
    public function render(): View
    {
        return view('layouts.app');
    }
}
