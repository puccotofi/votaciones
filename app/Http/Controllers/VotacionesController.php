<?php

namespace App\Http\Controllers;

use App\Models\Voto;
use Illuminate\Http\Request;

class VotacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('votaciones.index');
    }

/**
     * Display a listing of the resource.
     */
    public function salir()
    {
        //
        return redirect()->away('https://www.issstezac.gob.mx');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {        
        // dd('Probando Conexion de la funcion y el formulario');
        // validaciones del formulario
        /*
        $this->validate($request,[
            'titulo'=>'required|max:255',
            'descripcion'=> 'required',
            'imagen'=> 'required'
        ]);*/
        // para almacenar en la base de datos dejamos que eloucuent use el modelo y le pasamos los parametros
        Voto::create([
            'voto1' => $request->voto1,
            'voto2' => $request->voto2,
            'voto3' => $request->voto3,
            'voto4' => $request->voto4
            
        ]);
    return redirect()->route('votar.votado');   
     
    }
     /**
     * Comprobante del Voto
     */
    public function votado()
    {
        return view('votaciones.votado'); 
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
