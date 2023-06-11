<!DOCTYPE html>
<html lang="ru-RU">
<head>
   <meta name="robots" content="index,follow">
   <meta name="yandex-verification" content="793ff86e7d7e79ba" />
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title ?? 'Заголовок не задан' }} - {{ env('APP_NAME')}} </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
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
  <div class="cta-claster">
      <div class="container">
         <div class="row">
            <div class="col d-flex justify-content-end">
               <div class="position-relative launcher-obj">
                  <div class="cta-list list-hide" aria-hidden="true">
                     <ul class="list-unstyled cta-links">
                        <a href="{{ $waLink }}" aria-label="WhatsApp" target="_blank" rel="nofollow">
                           <li>
                              <div class="list-item wa">
                                 <object data="{{ asset('/assets/icons/wa.svg') }}" alt="WhatsApp" type=""></object>
                              </div>
                           </li>
                        </a>
                        <a href="{{ $tgLink }}" aria-label="Telegram" target="_blank" rel="nofollow">
                           <li>
                              <div class="list-item tg">
                                 <object data="{{ asset('/assets/icons/telegram.svg') }}" alt="Telegram" type=""></object>
                              </div>
                           </li>
                        </a>
                        <a href="tel:{{ $phone }}" aria-label="Phone">
                           <li>
                              <div class="list-item cell">
                                 <object data="{{ asset('/assets/icons/phone-icon.svg') }}" alt="Phone" type=""></object>
                              </div>
                           </li>
                        </a>
                     </ul>
                  </div>
                  <div class="launcher position-relative">
                     <div class="launch-button position-relative" data-timeout="6000">
                        <span></span>
                        <object class="touch " data="{{ asset('/assets/icons/touch.svg') }}" alt="Открыть быстрое меню" type=""></object>
                        <object class="closeBtn d-none" data="{{ asset('/assets/icons/close-cta.svg') }}" alt="Закрыть быстрое меню" type=""></object>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
  </div>
