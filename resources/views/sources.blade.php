@extends('modal')

@section('title', 'Nachrichtenquellen')

@section('content')

    @foreach($items as $news)
        <div class="row row-cols-1">
            <x-news :news="$news" :direct="true"/>
        </div>
    @endforeach

@endsection
