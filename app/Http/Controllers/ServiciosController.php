<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;

class ServiciosController extends Controller{
    public function index(){
        $servicios = [
            ['titulo' => 'Servicios 01'],
            ['titulo' => 'Servicios 02'],
            ['titulo' => 'Servicios 03'],
            ['titulo' => 'Servicios 04'],
            ['titulo' => 'Servicios 05']
        ];
        return view('servicios', compact('servicios'));
    }
}