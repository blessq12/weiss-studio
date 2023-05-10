<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index',[
            'title' => 'Заголовок для главной страницы',
            'description' => 'Описание для главной страницы',
            'image' => 'http://via.placeholder.com/1920x680'
        ]);
    }
}
