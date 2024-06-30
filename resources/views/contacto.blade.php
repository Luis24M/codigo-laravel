@extends('layout')

@section('title', 'Contacto')

@section('content')
    <h1 class="text-center text-3xl mt-5">Contacto</h1>
    <form action="{{ route('contacto') }}" method="post">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" class="block w-full mt-1" placeholder="Nombre" value="{{ old('nombre') }}">
        {{ $errors->first('nombre') }}
        <label for="email">Correo:</label>
        <input type="email" name="email" class="block w-full mt-1" placeholder="Email" value="{{ old('email') }}">
        {{ $errors->first('correo') }}
        <label for="asunto">Asunto:</label>
        <input type="text" name="asunto" class="block w-full mt-1" placeholder="Asunto" value="{{ old('asunto') }}">
        {{ $errors->first('asunto') }}
        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" class="block w-full mt-1" placeholder="Mensaje" value="{{ old('mensaje') }}"></textarea>
        {{ $errors->first('mensaje') }}
        <button type="submit" class="block w-full mt-5 bg-blue-500 text-white p-3 rounded">Enviar</button>
    </form>
@endsection