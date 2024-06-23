@extends('layout')

@section('title', 'Editar Servicio')

@section('content')
<h1>Editar Servicio</h1>
@if($errors->any())
  <ul>
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
@endif
<form action="{{ route('servicios.update', $servicio) }}" method="post">
  @csrf @method('PATCH')
  <h2>Titulo</h2>
  <input type="text" name="titulo" value="{{ old('titulo', $servicio->titulo) }}">
  <h2>Descripción</h2>
  <input type="text" name="descripcion" value="{{ old('descripcion', $servicio->descripcion) }}">
</form>
@endsection