@extends('layout')

@section('title', 'Servicios')

@section('content')
    @auth
    <h1 class="text-3xl text-center mt-5">Servicios</h1>
    <a href="{{ route('servicios.create') }}">Nuevo Servicio</a>
    @endauth
    <ul class="m-4 flex gap-4">
      @if($servicios)
        @foreach($servicios as $servicio)
          <li class=""><a href="{{ route('servicios.show', $servicio)}}">{{ $servicio->titulo }}</a></li>
        @endforeach
      @else
        <li>No hay servicios disponibles</li>
      @endif
    </ul>
@endsection