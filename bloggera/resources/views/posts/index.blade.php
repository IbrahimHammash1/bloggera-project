@extends('layouts.layout')
@section('content')
@foreach ($posts as $post )
    <div>
        <a href="{{route('posts.show',['post'=>$post])}}">{{$post->title}}</a>
    <div>{{$post->body}}</div>
@endforeach
@endsection