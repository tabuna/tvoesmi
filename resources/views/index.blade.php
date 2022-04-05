@extends('app')

@section('content')

    @foreach($stories as $story)
        <x-story :story="$story" single="true"/>
    @endforeach

@endsection
