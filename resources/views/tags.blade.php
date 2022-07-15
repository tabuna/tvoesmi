@extends('app')


@section('content')

    <div class="row">
        <div class="card-columns">
            @foreach($news as $new)
                <div class="card mb-4 rounded ">
                    @if($new->image)
                        <a href="{{ $new->link }}" target="_blank" rel="noopener">
                            <img src="{{ $new->image }}" class="card-img-top img-full"
                                 onerror="this.style.display='none';"
                                 onload="this.style.display='block';"
                                 style="display: none;"
                            >
                        </a>
                    @endif

                    <div class="card-body">
                        <div class="v-center mb-1">
                            <img src="{{ $new->favicon }}" class="me-2 favicon" alt="{{ $new->domain }}" loading="lazy">
                            <div>{{ $new->domain }}</div>
                        </div>

                        <h4 class="card-title">
                            <a href="{{ $new->link }}" target="_blank" rel="noopener">
                                {{ $new->title }}
                            </a>
                        </h4>

                        <p class="card-text">{{ Str::words(strip_tags(html_entity_decode($new->description)), 20) }}</p>

                        <time class="me-1 text-muted small" datetime="{{ $new->pubDate }}"
                              data-controller="news-time">
                            {{ $new->pubDate }}
                        </time>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
