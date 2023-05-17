<!DOCTYPE html>
<html lang="RU-ru">
<head>
   <meta name="robots" content="noindex,nofollow">
  <title>{{ $title ?? 'Заголовок не задан' }} - {{ env('APP_NAME')}} </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="author" content="Andrew Korobkov (http://code-me.ru)">
  <meta name="keywords" content="">
  <meta name="description" content="{{ $description ?? 'Описание не задано' }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css')}}">
  <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{ asset('/assets/css/owl.theme.css')}}">
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}{{ '?ver='.env('ASSET_VERSION') ?? "ver=1.0" }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/user.css')}}{{ '?ver='.env('ASSET_VERSION') ?? "ver=1.0" }}">
</head>
<body id="index" class="wide_layout position-relative">
  <div class="loader">
     <div class="loader-logo">
        <object data="{{ asset('/assets/icons/loader-icon.svg') }}" type=""></object>
        <hr>
     </div>
  </div>

  {{-- cta bottom button --}}
  <style>
      .cta-claster{
         position: fixed;
         bottom: 50px;
         width: 100%;
         z-index: 99;
      }
      .launcher {
         position: absolute;
         width: 70px;
         height: 70px;
         border: 2px solid var(--beige);
         background: rgba(255,255,255,0.6);
         border-radius: 100%;
         bottom: 0;
         right: 0;
         color: #000;
         display: flex;
         justify-content: center;
         align-items: center;
         font-size: 42px;
         font-weight: bold;
         cursor: pointer;
      }
      .launch-button object{
         fill: #634846!important;
         height: 40px;
      }
      .launch-button span{
         position: absolute;
         height: 100%;
         width: 100%;
         top: 0;
         left: 0;
         z-index: 999;
      }
      .cta-list {
         position: absolute;
         left: 0;
         width: 100%;
         bottom: 75px;
         opacity: 1;
         transition: all 0.3s;
      }
      .list-hide{
         bottom: 0;
         opacity: 0;
      }
      .cta-links{
         padding: 0;
         margin: 0;
         display: block;
      }
      .cta-links li{
         display: flex;
         justify-content: center;
         align-items: center;
         padding: 5px 0;
      }
      .list-item{
         min-height: 25px;
         width: 100%;
         border:2px solid var(--beige);
         border-radius: 5px;
         display: flex;
         align-items: center;
         justify-content: center;
         padding: 15px 10px;
      }
      .list-item.wa{
         background: green;
      }
      .list-item.tg{
         background: blue;
      }
      .list-item.cell{
         background: var(--beige);
      }
      .list-item object{
         height: 25px;
         width: 25px;
      }
  </style>

  <div class="cta-claster">
      <div class="container">
         <div class="row">
            <div class="col d-flex justify-content-end">
               <div class="position-relative">
                  <div class="cta-list list-hide">
                     <ul class="list-unstyled cta-links">
                        <li>
                           <div class="list-item wa">
                              <object data="{{ asset('/assets/icons/wa.svg') }}" type=""></object>
                           </div>
                        </li>
                        <li>
                           <div class="list-item tg">
                              <object data="{{ asset('/assets/icons/telegram.svg') }}" type=""></object>
                           </div>
                        </li>
                        <li>
                           <div class="list-item cell">
                              <object data="{{ asset('/assets/icons/phone-icon.svg') }}" type=""></object>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="launcher position-relative" onclick="document.querySelector('.cta-list').classList.toggle('list-hide')">
                     <div class="launch-button position-relative">
                        <span></span>
                        <object data="{{ asset('/assets/icons/touch.svg') }}" type=""></object>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
  </div>
