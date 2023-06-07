<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function send(Request $request){
        $telegram = false;
        if ($telegram){
            echo 'some response from backend';
        } else {
            return false;
        }
    }
}
