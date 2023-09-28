<?php

namespace App\Livewire;

use Livewire\Component;

class Notificaciones extends Component
{

    public  $name = 'Luis Fax';


    public function render()
    {
        return view(
            'livewire.notificaciones',
            ['title' => 'Curso Master']
        )->with(['age' => 35]);
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
