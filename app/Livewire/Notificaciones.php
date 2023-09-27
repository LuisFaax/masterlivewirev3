<?php

namespace App\Livewire;

use Livewire\Component;

class Notificaciones extends Component
{
    public function render()
    {
        return view('livewire.notificaciones');
    }

    function noty($msg)
    {
        $this->dispatch('noty', msg: $msg);
    }

    function sendNoty()
    {
        $this->noty('HOLA DEVS');
    }
}
