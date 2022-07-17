@extends('app')

@section('title', 'Важное сегодня')

@section('content')

    @foreach($stories as $key => $story)
        <x-story :story="$story" :key="$key" single="true"/>
    @endforeach

@endsection
