@extends('layouts.layout',['title'=>'create'])
@section('content')
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <label for="">Title</label>
    <input type="text" name="title">
    @error('title')
        <p>{{$message}}</p>
    @enderror
    <label for="">Body</label>
    <input type="text" name="body">
    @error('body')
        <p>{{$message}}</p>
    @enderror
    <input type="submit">
</form>
@endsection