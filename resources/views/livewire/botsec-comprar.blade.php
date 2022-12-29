<div>
    @if ($add)
        Eliminar
    @else
        <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none" 
            wire:click="kenny">
            Agregar carrito
        </button>
    @endif
    {{-- <button>Add</button> --}}

    @push('js')
        <script>
            function add_course(){
                Livewire.emit('add_course');
                console.log('aaaaaaaaaa');
            }
        </script>
    @endpush
</div>
