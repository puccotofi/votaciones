<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use App\Models\Voto;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('encuestas.index');
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
        Encuesta::create([
            'i1' => $request->i1,
            'i2' => $request->i2,
            'i3' => $request->i3,
            'p1' => $request->p1,
            'p2' => $request->p2,
            'p3' => $request->p3,
            'p4' => $request->p4,
            'p5' => $request->p5,
            'p6' => $request->p6,
            'p7' => $request->p7,
            'p8' => $request->p8,
            'p9' => $request->p9,
            'p10' => $request->p10,
            'p11' => $request->p11,
            'p12' => $request->p12,
            'p13' => $request->p13,
            'p14' => $request->p14,
            'p15' => $request->p15,
            'p16' => $request->p16,
            'p17' => $request->p17,
            'p18' => $request->p18,
            'p19' => $request->p19,
            'p20' => $request->p20,
            'p21' => $request->p21,
            'p22' => $request->p22,
            'p23' => $request->p23,
            
            
        ]);
    return redirect()->route('encuesta.completa');   
     
    }
     /**
     * Comprobante del Voto
     */
    public function completa()
    {
        return view('encuestas.encuestado'); 
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
