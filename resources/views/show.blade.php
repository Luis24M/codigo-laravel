@extends('layout')

@section('title', 'Servicios | ' . $servicio->titulo)

@section('content')
@auth
<section class="border border-zinc-900 rounded-xl flex items-center flex-col w-1/3 mx-auto my-10">
  <div class="w-full">
    <img src="/storage/{{ $servicio->image }}" alt="{{ $servicio->titulo }}" class="w-full h-96 object-cover rounded-tl-xl rounded-se-xl">
  </div>
  <div class="p-4 w-full gap-3">
    <h1 class="text-3xl font-semibold">{{ $servicio->titulo }}</h1>
    <h2 class="text-slate-600">{{ $servicio->descripcion }}</h2>
    <div class="flex gap-3 my-3">
      <a class="bg-yellow-300 p-1 px-2 rounded-lg" href="{{ route('servicios.edit',$servicio) }}">Editar</a>
      <form action="{{ route('servicios.destroy', $servicio) }}" method="post">
        @csrf @method('DELETE')
        <button class="bg-red-400 p-1 px-2 rounded-lg">Eliminar</button>
      </form>
    </div>
    <h3>{{ $servicio->created_at->diffForHumans() }}</h3>
  </div>
</section>
@endauth
@endsection