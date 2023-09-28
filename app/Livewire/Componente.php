<?php

namespace App\Livewire;

use Livewire\Component;

class Componente extends Component
{
    protected  $title = 'title';
    public function render()
    {
        $this->title = 1;
        return view('livewire.componente');
    }
}
