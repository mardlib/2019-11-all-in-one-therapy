@extends('base')

@section('title', 'login')

@section('main')
    <form method="post" action="{{ route('authenticate')  }}">
        @csrf
        <p><input type="text" name="name" > </p>
        <p><input type="password" name="password"> </p>
        <p><button type="submit">Log In</button> </p>
    </form>
@endsection
