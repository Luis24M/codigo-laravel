@extends('layout')

@section('title', 'Editar Servicio')

@section('content')
@auth
<h1>Editar Servicio</h1>
@if($errors->any())
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
<form class="m-5" action="{{ route('servicios.update', $servicio) }}" method="post">
  @csrf @method('PATCH')
  <h2>Titulo</h2>
  <input class="border"
  type="text" name="titulo" value="{{ $servicio->titulo }}">
  <h2>Descripción</h2>
  <input class="border" type="text" name="descripcion" value="{{ $servicio->descripcion }}">
  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar</button>
</form>
@endauth
@endsection