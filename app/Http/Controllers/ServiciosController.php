<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller
{
 #   /**
 #    * @param \Illuminate\Http\Request $request
 #    * @return \Illuminate\Http\Response
 #    */
    

    public function index(){
        $servicios = Servicio::get();
        $servicios = Servicio::orderBy('titulo', 'asc')->get();
        #$servicios = Servicio::latest()->paginate(2);
        return view('servicios', compact('servicios'));
    }
    public function show($id){
        return view('show',[
            'servicio' => Servicio::find($id)
        ]);
    }
}