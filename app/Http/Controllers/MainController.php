<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // gallery carousel 
        $photoGalleryPath = 'assets/images/gallery/';
        if (is_dir($photoGalleryPath)){
            $photoGallery = array_diff(scandir($photoGalleryPath), array('.', '..'));
        }
        $galleryPairs = [];
        foreach ($photoGallery as $key => $val){
            $name = explode('.',$val);
            $name = explode('_',$name[0]);
            $galleryPairs[$name[0]][] = $name[1];
        }
        // procedures list with price
        $procedures = [
            'faceProcedures' => [],
            'bodyProcedures' => [
                'title' => 'Вакуумно роликовый массаж',
                'excerpt' => 'один из самых эффективных методов в борьбе с лишними килограммами! Очень хорошо воздействует на жировую прослойку. Запускает лимфатическую систему. Избавит вас от целлюлита. Убирает до - 7 см в талии.',
                
            ],
            'complexProcedures' => [],
        ];
        return view('index',[
            'title' => 'Аппаратный массаж и коррекция фигуры',
            'description' => 'Описание для главной страницы',
            'image' => 'http://via.placeholder.com/1920x680',
            'galleryPairs' => $galleryPairs
        ]);
    }
}
