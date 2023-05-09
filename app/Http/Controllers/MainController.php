<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $pageVars = [
            'title' => 'Заголовок для главной страницы',
            'description' => 'Описание для главной страницы',
            'image' => 'http://via.placeholder.com/1920x680'
        ];
        return view('index',$pageVars);
    }
}
