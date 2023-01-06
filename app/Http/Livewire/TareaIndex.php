<?php

namespace App\Http\Livewire;

use App\Models\Tarea;
use Livewire\Component;

class TareaIndex extends Component
{
    public $busqueda = '';

    public function render()
    {
        $tareas = $this->consulta();
        $params = [
            'tareas' => $tareas->get(),
        ];
        return view('livewire.tarea-index',$params);
    }

    private function consulta(){
        $query = Tarea::orderByDesc('id');
        if($this->busqueda != ''){
            $query->where('nombre','LIKE','%'.$this->busqueda.'%');
        }
        return $query;
    }
}
