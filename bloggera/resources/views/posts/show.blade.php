@extends('layouts.layout',['title'=>$post->title])
@section('content')
<div>{{$post->title}}</div>
<div>{{$post->body}}</div>
@endsection