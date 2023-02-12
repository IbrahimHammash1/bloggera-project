@extends('layouts.layout',['title'=>'login'])
@section('content')
<form action="{{route('login.verify_user')}}" method="post">
    @csrf
    <label for="">Email</label>
    <input type="text" name="email" value="{{old('email')}}">
    @error('email')
        <p>{{$message}}</p>
    @enderror
    <label for="">Password</label>
    <input type="Password" name="password">
    <input type="submit">
</form>
@endsection