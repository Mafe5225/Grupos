<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cursos as CursoDB;

class Curso extends Component
{

    public $error = null;
    public $curso;
    public $cursos = null;

    public function mount()
    {
        $this->cursos = CursoDB::all();
    }

    public function render()
    {
        return view('livewire.curso');
    }

    public function save()
    {
        if($this->curso != null && $this->curso != '')
        {
            // Guardar el curso
            CursoDB::create([
                'nombre'=>$this->curso,
            ]);
            $this->curso = "";

            // Cargar todos los cursos
            $this->cursos = CursoDB::all();

        } else{
            $this->error = "Debe ingresar el nombre del curso";
        }
    }

    public function eliminar($id)
    {
        //Eliminar el curso
        $cursosEliminar = CursoDB::find($id);
        $cursosEliminar->delete();
        //Cargar todos los cursos
        $this->cursos = CursoDB::all();
    }
}

