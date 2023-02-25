<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    public function index()
    {
        $boards = Board::get()->all();
        return view('admin.boards.index')->with(['boards'    => $boards  ]);

    }


    public function create()
    {

        return view('admin.boards.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            
            'short_name'  =>  'required|unique:boards,short_name',
            'name'  =>  'required'

        ]);

        $grade =Board::create([
            'short_name'  =>  $request->post('short_name'), 
            'name'  =>  $request->post('name') 
        ]);

        $grade->save();

        return redirect()->route('admin.boards.index')->withSuccess('SUCCESS !! Data successfully stored');
    }

    public function edit(Board $board){

        return view('admin.boards.edit')->with([
            'board'     =>  $board,
        ]);
    }

    public function update(Request $request, Board $board){

        $request->validate([
           
            'short_name'  =>  'required|unique:boards,short_name,'.$board->id,
            'name'  =>  'required'
        ]);

        $board->update([
            'short_name'  =>  $request->post('short_name'), 
            'name'  =>  $request->post('name') 
        ]);

        return back()->withSuccess('Board has been updated.');
    }

    public function destroy(Board $board)
    {
        $board->delete();
        return back()->withSuccess('SUCCESS !! Board has been deleted.');
    }
}
