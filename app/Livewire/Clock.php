<?php

namespace App\Livewire;

use Livewire\Component;

class Clock extends Component
{

    public $time;

    protected $listeners = ['tick'];


    function mount()
    {
        $this->time = now()->format('H:i:s');
    }





    function tick()
    {
        $this->time = now()->format('H:i:s');
    }


    public function render()
    {
        return <<<'HTML'
        <div>
          {{ $time }}
        </div>
        <script>
            document.addEventListener('livewire:initialized', function(){
                setInterval(() => {
                    @this.dispatch('tick')
                }, 1000);
            })
        </script>
        HTML;
    }
}
