<!DOCTYPE html>
<html lang="ru-RU">
<head>
   <meta charset="utf-8">
   <meta name="robots" content="index,follow">
   <meta name="yandex-verification" content="793ff86e7d7e79ba" />
   <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title ?? 'Заголовок не задан' }} - {{ env('APP_NAME')}} </title>
  <meta name="description" content="{{ $description ?? 'Описание не задано' }}">
  {{-- favicon --}}
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/assets/images/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('/assets/images/favicon/android-chrome-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="512x512"  href="{{ asset('/assets/images/favicon/android-chrome-512x512.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/images/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/images/favicon/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('/assets/images/favicon/site.webmanifest') }}">
  <meta name="msapplication-TileColor" content="#272627">
  <meta name="msapplication-TileImage" content="{{ asset('/assets/images/favicon/mstile-150x150.png') }}">
  <meta name="theme-color" content="#272627">
  {{-- end favicon --}}
  {{-- HEY META tags --}}

  {{-- end HEY META tags --}}
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Andrew Korobkov (http://code-me.ru)">
  <meta name="keywords" content="">
  <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css')}}">
  <link rel="stylesheet" href="{{ asset('/assets/css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{ asset('/assets/css/owl.theme.css')}}">
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}{{ '?ver='.env('ASSET_VERSION') ?? "ver=1.0" }}">
  <link rel="stylesheet" href="{{ asset('/assets/css/user.css')}}{{ '?ver='.env('ASSET_VERSION') ?? "ver=1.0" }}">
   <!-- Yandex.Metrika counter -->
      <script type="text/javascript" >
         (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
         m[i].l=1*new Date();
         for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
         k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
         (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

         ym(93926164, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
         });
      </script>
      <noscript><div><img src="https://mc.yandex.ru/watch/93926164" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
   <!-- /Yandex.Metrika counter -->
</head>
<body id="index" class="wide_layout position-relative">
  <div class="loader">
     <div class="loader-logo">
        <object data="{{ asset('/assets/icons/loader-icon.svg') }}" alt="Загрузчик {{ env('APP_NAME') }}" type=""></object>
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
