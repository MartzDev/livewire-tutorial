<?php

namespace App\Livewire\Propiedades;

use Livewire\Component;

class ListaComponente extends Component
{

    public $lista = '';

    public $listas = [];

    public function agregarLista()
    {
        $this->listas[] = $this->lista;
        $this->reset('lista');
    }

    public function render()
    {
        return view('livewire.propiedades.lista-componente');
    }
}
