@extends('layout')

@section('title', 'Crear Servicio')

@section('content')
  <h1 class="text-center text-2xl">Crear nuevo servico</h1>
  <form class="mx-10" action="{{ route('servicios.store') }}" method="post">
      @csrf
      <label>
          Titulo del servicio <br>
          <input type="text" name="titulo" class="border">
          {{ $errors->first('titulo') }}
      </label>
      <br>
      <label>
          Descripción del servicio <br>
          <input type="text" name="descripcion" class="border">
          {{ $errors->first('descripcion') }}
      </label>
      <br>
      <button class="border bg-green-700 rounded-lg my-4 p-2">Guardar</button>
  </form>
@endsection
