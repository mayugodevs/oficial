<div>
    @if ($add)
        Eliminar
    @else        
        {{$id_curso}}
        <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none" 
            wire:click="luisss">
            Agregar carrito
        </button>
    @endif
</div>
