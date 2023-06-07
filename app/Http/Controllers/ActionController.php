<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function send(Request $request){
        dd($request->query());
    }
}
