<footer class="footer mt-auto m-1">
    <turbo-frame id="footer" target="_top" data-turbo-action="advance">
            {{--
            <div class="text-dark mb-2">
                <x-logo/>
            </div>
            --}}
            <p class="text-muted">
                Мы агрегатор новостных сообщений.
                Каждые пять минут сервис собирает сообщения из различных источников и составляет новостную картину дня.
                Это происходит автоматически, без какого-либо вмешательства человека.
                Из сообщений сервис формирует сюжеты, каждый сюжет — это подборка новостей об одном и том же событии.
            </p>
            <p>
                <a href="{{ route('policy') }}">Политика конфиденциальности</a>
            </p>
            <p>
                <small class="border p-2 rounded"> 18+ </small>
                <small class="m-2 mb-2 text-muted">&copy; 2017-{{ date('Y') }}</small>
            </p>


        {{--
        <div class="col-6 col-md-2">
            <h5>Каналы</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="https://vk.com/xtsmi" target="_blank">Вконтакте</a></li>
                <li><a class="text-muted" href="https://twitter.com/xtsmi">Twitter</a></li>
            </ul>
        </div>

        @foreach(collect(config('smi.tags'))->chunk(4) as $tags)

            <div class="col-6 col-md-auto">

                <h5>@if($loop->first)Теги @else &nbsp @endif</h5>

                <ul class="list-unstyled text-small">
                    @foreach($tags as $tag)
                        <li><a class="text-muted" href="/tags/{{ $tag['slug'] }}"> {{ $tag['name'] }}</a></li>
                    @endforeach
                </ul>
            </div>

        @endforeach
--}}
    </turbo-frame>
    </div>

</footer>
