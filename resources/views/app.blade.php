@extends('html')

@section('html')
@include('particles.navigation')

<turbo-frame id="app">
    <div class="d-md-none sticky-top mt-2 bg-color">
        <div class="container">
            <div class="card">
                <div class="card-body p-2 text-center">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}"
                               href="/index.html" data-turbo-action="replace">Heute Wichtig</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ !request()->routeIs('index') ? 'active' : '' }}"
                               href="{{ App\Link::to('/list') }}" data-turbo-action="replace">Neueste Nachrichten</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container" data-controller="redirect" data-redirect-url="@yield('redirect')">

        <main id="app" class="py-md-4 py-3">

            <div class="{{ request()->routeIs('index') ? 'd-md-none' : 'd-none' }} card mb-3">
                <div class="card-body p-2 text-center">
                    <x-exchange/>
                </div>
            </div>

            <div class="news-ended">

                <div class="{{ request()->routeIs('index') ? 'd-none d-md-block' : ''}}">
                    <x-tags/>
                </div>

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
                                <h1 class="h5 text-muted font-weight-bold text-uppercase">Neueste Nachrichten</h1>
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
</turbo-frame>

@endsection
