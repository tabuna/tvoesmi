<!doctype html>
<html lang="{{ app()->getLocale() }}" data-controller="html-load">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <title>@yield('title','Titanson - Nachrichten-Aggregator')</title>
    <meta name="description"
          content="@yield('description','Die heißesten Nachrichten und die neuesten Entwicklungen in der Nachrichtenwelt.')">
    <meta name="keywords"
          content="@yield('keywords','Nachrichten, Ereignisse, aktuell, heiß, in der Welt.')">

    <link rel="stylesheet" type="text/css" href="{{mix('/css/light.css')}}" media="(prefers-color-scheme: light)">
    <link rel="stylesheet" type="text/css" href="{{mix('/css/dark.css')}}" media="(prefers-color-scheme: dark)">

    {{-- Open Graph --}}
    <meta property="og:title"
          content="@yield('title','Titanson - Nachrichten-Aggregator')"/>
    <meta property="og:description"
          content="@yield('description','Die heißesten Nachrichten und die neuesten Entwicklungen in der Nachrichtenwelt.')"/>
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
