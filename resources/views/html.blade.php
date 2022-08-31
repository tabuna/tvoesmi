<!doctype html>
<html lang="{{ app()->getLocale() }}" data-controller="html-load">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <title>@yield('title','Твоё СМИ - Новостной агрегатор')</title>
    <meta name="description"
          content="@yield('description','Самые горячие новости в России, в США, в мире. Последние события в мире новостей.')">
    <meta name="keywords"
          content="@yield('keywords','Новости, вести, события, последние, горячее, в мире, в России, в США.')">

    <link rel="stylesheet" type="text/css" href="{{mix('/css/light.css')}}" media="(prefers-color-scheme: light)">
    <link rel="stylesheet" type="text/css" href="{{mix('/css/dark.css')}}" media="(prefers-color-scheme: dark)">

    {{-- Open Graph --}}
    <meta property="og:title"
          content="@yield('title','Твоё СМИ - Новостной агрегатор. Самые последний и свежие новости в России, в сети, в мире. Узнавайте новости первыми.')"/>
    <meta property="og:description"
          content="@yield('description','Самые горячие новости в России, в США, в мире. Последние события в мире новостей.')"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="@yield('image',asset('/img/cover.jpg'))"/>
    <meta property="og:url" content="{{ url()->current() }}">
    {{-- /Open Graph --}}


    <meta property="fb:pages" content="107147134858113"/>
    <meta name="yandex-verification" content="0e693be926f4cc9c"/>

    @include('feed::links')
    @include('particles.pwa')

    <meta name="generated" content="{{ config('smi.generated') }}">
    <script src="{{ mix('/js/app.js')}}" type="text/javascript"></script>

    {{--
    @env('production')
        @include('particles.analytics')
        @include('particles.adsense')
    @endenv
     --}}
</head>

<body data-controller="main">

@yield('html')

<script id="news-template" type="text/template">
    @includeVerbatim('components.news')
</script>


</body>
</html>
