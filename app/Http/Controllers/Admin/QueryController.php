<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Query;

class QueryController extends Controller
{
    
    public function index()
    {
        $queries = Query::get();
        return view('admin.query.index')->with([ 'queries'  => $queries]);

    }

    public function show(Query $query)
    {
        return view('admin.query.info')->with([ 'query'  => $query]);

    }

    public function destroy(Query $query)
    {
        $query->delete();
        return back()->withSuccess("SUCCESS !! Query successfully deleted");

    }
}
