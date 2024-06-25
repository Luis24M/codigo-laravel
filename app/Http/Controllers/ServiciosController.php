<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Http\Requests\CreateServicioRequest;

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

    public function create(){
        return view('create', [
            'servicio' => new Servicio
        ]);
    }

    public function store(CreateServicioRequest $request){
        
        Servicio::create($request->validated());
        return redirect()->route('servicios.index');
    }

    public function edit(Servicio $id){
        return view('edit',[
            'servicio' => $id
        ]);
    }

    public function update(Servicio $servicio, CreateServicioRequest $request){
        $servicio->update($request->validated());
        return redirect()->route('servicios.show', $servicio);
    }

    public function destroy(Servicio $servicio){
        $servicio->delete();
        
        return redirect()->route('servicios.index');
    }
        
}

