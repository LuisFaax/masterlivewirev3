<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $numero = 5; // propiedad pública

    public function render()
    {
        return view('livewire.test');
    }
}
