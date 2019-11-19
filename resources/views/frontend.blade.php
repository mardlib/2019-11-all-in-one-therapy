@extends('base')

@section('title', 'Willkommens')

@section('top-links')
    @auth
    <a href="/backend">Backend</a>
    @endauth
    @endsection

@section('main')
Welcome bei AIOT
@endsection
