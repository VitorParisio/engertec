<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter_model;
use Session;
       
class Newsletter extends Controller
{
    public function store(Request $request)
    {
        Newsletter_model::create([
            'email' => $request->email
        ]);

        Session::flash('message', "Special message goes here");
        return redirect()->back(); 
    }
}
