<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ServiceData;
use App\Testimonials\TestimonialData;

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
        // end gallery carousel

        // service data section
        $servicesData = new ServiceData();
        $services = new \stdClass;
        $services->categories = $servicesData->getCategories();
        $services->services = $servicesData->getServices();
        $services->prices = $servicesData->getPrices();
        // end service data section

        // testimonials
        $testimonialsData = new TestimonialData();
        $testimonials = $testimonialsData->getTestimonials();
        
        // end testimonials

        return view('index',[
            'title' => 'Аппаратный массаж и коррекция фигуры',
            'description' => 'В наших силах вернуть естественный румянец, улучшить цвет и состояние кожи. Для натурального омоложения это самый приятный способ.',
            'image' => asset('/assets/images/og_image.jpg'),
            'galleryPairs' => $galleryPairs,
            'services' => $services,
            'testimonials' => $testimonials
        ]);
    }
}
