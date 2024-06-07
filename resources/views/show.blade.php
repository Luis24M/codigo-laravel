@extends('layout')

@section('title', 'Servicios | ' . $servicio->titulo)

@section('content')
<h1>{{ $servicio->titulo }}</h1>
<h2>{{ $servicio->descripcion }}</h2>
<h3>{{ $servicio->created_at->diffForHumans() }}</h3>
@endsection