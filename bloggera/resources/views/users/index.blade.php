@extends('layouts.layout',['title'=>'people'])
@section('content')

@foreach($users as $user)
    <div>{{$user->name}}</div>
@endforeach

@endsection