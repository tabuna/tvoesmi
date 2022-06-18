<!doctype html>
<html lang="{{ app()->getLocale() }}" data-controller="html-load">
<head>
    <base href="{{ config('app.url') }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Твоё СМИ - Новостной агрегатор')</title>
    <meta name="description"
          content="@yield('description','Самые горячие новости в России, в США, в мире. Последние события в мире новостей.')">
    <meta name="keywords"
          content="@yield('keywords','Новости, вести, события, последние, горячее, в мире, в России, в США.')">
    <link rel="stylesheet" type="text/css" href="{{mix('/css/app.css')}}">

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
    <meta name="turbolinks-root" content="/">
    <meta http-equiv="X-DNS-Prefetch-Control" content="on"/>
    <link rel="dns-prefetch" href="{{ config('app.url') }}"/>
    <script src="{{ mix('/js/app.js')}}" type="text/javascript"></script>

    @env('production')
        @include('particles.analytics')
        @include('particles.adsense')
    @endenv
</head>
<body data-controller="main" class="pb-5 pt-5 pt-md-0 pb-md-0">

@include('particles.navigation')

<div class="container" data-controller="redirect" data-redirect-url="@yield('redirect')">

    <main id="app" class="py-md-4 py-3">
        <div class="d-md-none py-1">
            <x-exchange/>
        </div>

        <div class="news-ended">
            <x-tags/>

            <div class="row" data-target="main.content">
                <div class="col-md-8 col-sm-12 news-ended">
                    @yield('content')
                </div>

                <div class="col d-none d-md-block"
                     data-controller="news"
                     data-news-render="{{ config('smi.news.renderCount') }}"
                >
                    @isset($lastNews)
                        <div class="mb-3 mt-2">
                            <h1 class="h5 text-muted font-weight-bold text-uppercase">Последние новости</h1>
                        </div>

                        <div class="row row-cols-1" data-target="news.news">
                            @foreach($lastNews as $news)
                                <x-news :news="$news"/>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>


            @include('particles.footer')
        </div>
    </main>
</div>


<nav class="navbar fixed-bottom mobile-menu p-0 d-block d-xxl-none overflow-hidden min-vw-100 vw-100 border-end-0 d-block d-md-none" style="background: #36393f!important;">
   <div class="container">
    <div class="row d-flex align-items-center g-0 vw-100 mb-2 px-4">
        <div class="col text-center position-relative">
            <a href="{{ url('/') }}" class="pt-2 pb-3 d-block {{ request()->routeIs('index') ? 'text-success' : 'text-white' }}">

                <svg xmlns="http://www.w3.org/2000/svg" width="1.7em" height="1.7em" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                    <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                </svg>

                <small class="d-block user-select-none mt-1">Важное сегодня</small>
            </a>
        </div>
        <div class="col text-center">
            <a href="{{ url('/list') }}" class="pt-2 pb-3 d-block {{ request()->routeIs('list') ? 'text-success' : 'text-white' }}">

                <svg xmlns="http://www.w3.org/2000/svg" width="1.7em" height="1.7em" fill="currentColor" class="bi bi-collection" viewBox="0 0 16 16">
                    <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/>
                </svg>

                <small class="d-block user-select-none mt-1">Прямо сейчас</small>
            </a>
        </div>
    </div>
   </div>
</nav>

<script id="news-template" type="text/template">
    @includeVerbatim('components.news')
</script>


</body>
</html>
