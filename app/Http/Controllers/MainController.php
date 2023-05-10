<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $photoGalleryPath = 'assets/images/gallery/';
        if (is_dir($photoGalleryPath)){
            $photoGallery = array_diff(scandir($photoGalleryPath), array('.', '..'));
        }
        dd($photoGallery);
        return view('index',[
            'title' => 'Аппаратный массаж и коррекция фигуры',
            'description' => 'Описание для главной страницы',
            'image' => 'http://via.placeholder.com/1920x680',
            'galleryImages' => $photoGallery
        ]);
    }
}
