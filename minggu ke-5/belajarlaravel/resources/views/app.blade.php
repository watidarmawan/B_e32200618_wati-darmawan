<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getlocale())}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-widh, initial-scale1.0">
    <meta http-equiv="X-UA-Compitable">
    <title>{{ config('app.name')}}</title>
</head>
</body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            @yield('content')
        </div>
    </div>
</body>
</html>

@extends('layouts.app')

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Halaman Home Page</h1>
            <p class="lead">This is a Home Page</p>
        </div> 
        <p>Nama : {{ $nama }}</p>
        <p>Mata Pelajaran</p>
        <ul>
            @forearch ($pelajaran as $p)
            <li>{{ $p }}</li>
            @endforeach
    </div>
@endsection