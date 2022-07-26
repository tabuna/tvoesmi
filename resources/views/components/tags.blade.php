<nav class="row mb-3">
    <div class="col-12">
        @foreach(config('smi.tags') as $tag)

            @if(\Illuminate\Support\Str::endsWith(url()->current(), $tag['slug']))
                <a href="/list"
                   data-turbo-action="replace"
                   class="badge bg-success border text-decoration-none">
                    {{ $tag['name'] }}
                </a>
            @else
                <a href="/tags/{{ $tag['slug'] }}"
                   data-turbo-action="replace"
                   class="badge bg-secondary border text-decoration-none">
                    {{ $tag['name'] }}
                </a>
            @endif
        @endforeach
    </div>
</nav>
