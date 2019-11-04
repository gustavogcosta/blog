@extends('template')

@section('title') Blog @endsection

@section('content')

<h1>Welcome {{Auth::user()->name}}!</h1>

<a href="{{route('blog.logout')}}">Logout</a>

@endsection
