@extends('layouts.layout')
@section('content')
<form action="{{route('register.store')}}" method="POST">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name" value="{{old('name')}}">
    @error('name')
    <p>{{$message}}</p>
    @enderror
    <label for="">Email</label>
    <input type="text" name="email" value="{{old('email')}}">
    @error('email')
        <p>{{$message}}</p>
    @enderror
    <label for="">Password</label>
    <input type="password" name="password">
    @error('password')
        <p>{{$message}}</p>
    @enderror
    <input type="submit">
</form>
@endsection