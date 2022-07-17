@extends('html')

@section('html')

    <div class="container">
        <main id="app" class="py-md-4 py-3">
            <div class="row" data-target="main.content">
                <div class="col-md-8 col-sm-12 news-ended">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

@endsection
