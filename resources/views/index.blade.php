@extends('app')

@section('title', 'Heute Wichtig')

@section('content')

    @foreach($stories as $key => $story)
        <x-story :story="$story" :key="$key" single="true"/>
    @endforeach

@endsection
