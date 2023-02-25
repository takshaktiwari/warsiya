<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Query;

class QueryController extends Controller
{
    

    public function querystore(Request $request)
    {
        $request->validate([

            'name'  =>  'required',
            'email'  =>  'required',
        ]);

        $query = Query::create([


            'name'  =>  $request->post('name'),
            'email'  =>  $request->post('email'),
            'subject'  =>  $request->post('subject'),
            'message'  =>  $request->post('message'),
        ]);

        $query->save();

        return back()->withSuccess('SUCCESS !! Thanks for generate query');

    }

}
