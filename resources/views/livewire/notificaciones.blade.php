<div>
    {{-- Stop trying to control. --}}

    <button class="btn btn-primary" wire:click='sendNoty'>NOTY</button>

    <script>
        document.addEventListener('livewire:initialized', function(){
                @this.on('noty', (event) => {
                    console.log(event.msg)
                })
            })
    </script>



</div>