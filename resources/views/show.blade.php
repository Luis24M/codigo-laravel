@extends('layout')

@section('title', 'Servicios | ' . $servicio->titulo)

@section('content')
@auth
<h1>{{ $servicio->titulo }}</h1>
<a href="{{ route('servicios.edit',$servicio) }}">Editar</a>
<form action="{{ route('servicios.destroy', $servicio) }}" method="post">
  @csrf @method('DELETE')
  <button>Eliminar</button>
<h2>{{ $servicio->descripcion }}</h2>
<h3>{{ $servicio->created_at->diffForHumans() }}</h3>
@endauth
@endsection