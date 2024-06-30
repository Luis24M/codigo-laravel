<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeRecibido;

class ContactoController extends Controller
{
    public function store(){
        $mensaje = request()->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required|min:3',
        ],[
            'nombre.required' => 'Ingresa tu nombre',
            'email.required' => 'Ingresa tu email',
            'asunto.required' => 'Ingresa un asunto',
            'mensaje.required' => 'Ingresa el mensaje',

        ]);
        Mail::to('luno2402@gmail.com')->send(new MensajeRecibido($mensaje));
        return new MensajeRecibido($mensaje);
        return 'Datos validados';
    }
}
