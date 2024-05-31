@extends('layout')

@section('title', 'Servicios')

@section('content')
    <h1 class="text-3xl text-center mt-5">Servicios</h1>
    <ul class="m-4">
      @if($servicios)
        @foreach($servicios as $item)
          <li>{{ $item['titulo'] }}</li>
        @endforeach
      @else
        <li>No hay servicios disponibles</li>
      @endif
    </ul>
@endsection