<?php

namespace App\Livewire;

use App\Models\Sexo;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearServicio extends Component
{
    // campos  del formulario
    public $titulo;
    public $sexo;
    public $imagen;
    // reglas de validación
    use WithFileUploads;

    protected $rules=[
        'titulo'=>'string|required',
        'imagen'=>'required|image|max:1024'
    ];

    public function crearServicio(){
        $this -> validate();
    }

    public function render()
    {
        // consultar a la db
        $sexos = Sexo::all();
        return view('livewire.crear-servicio',[
            'sexos'=>$sexos
        ]);
    }
}
 