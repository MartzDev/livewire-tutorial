<?php

namespace App\Livewire\Contador;

use Livewire\Component;

class ContadorComponente extends Component
{

    public $contador = 0;

    public function incrementarContador()
    {
        $this->contador++;
    }

    public function render()
    {
        return view('livewire.contador.contador-componente');
    }
}
