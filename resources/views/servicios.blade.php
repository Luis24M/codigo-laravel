@extends('layout')

@section('title', 'Servicios')

@section('content')
<section class="w-5/6 mx-auto">
  @auth
  <h1 class="text-3xl text-center mt-5">Servicios</h1>
  <a class="p-3 bg- bg-green-500 rounded-lg my-5" href="{{ route('servicios.create') }}">Nuevo Servicio</a>
  @endauth
  <ul class="m-4 flex flex-row gap-7 justify-center">
    @if($servicios)
      @foreach($servicios as $servicio)
        <li class="rounded-xl border border-neutral-900 text-center w-72 hover:bg-blue-200">
          @if($servicio->image)
            <img src="/storage/{{ $servicio->image }}" alt="{{ $servicio->titulo }}" class="w-full h-64 object-cover rounded-tl-xl rounded-se-xl">
          @endif
          <a href="{{ route('servicios.show', $servicio)}}" class="font-semibold text-2xl m-6 text-wrap">{{ $servicio->titulo }}</a>
        </li>
        @endforeach
      @else
      <li>No hay servicios disponibles</li>
    @endif
  </ul>
</section>
@endsection