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
  <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('/assets/css/user.css')}}">
</head>
<body id="index" class="wide_layout">
  <div class="loader">
     <div class="loader-logo">
        <object data="{{ asset('/assets/icons/loader-icon.svg') }}" type=""></object>
        <hr>
     </div>
  </div>
