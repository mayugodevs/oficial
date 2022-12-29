<div class="">
    {{-- hover:bg-green text-gray-600 hover:text-whitetext   
        border-green dark:text-whitetext --}}
    <button id="{{$curso->idcur}}_a" class="focus:outline-none p-1 py-2 bg-bgbtngreen text-green_especialidad  px-5  duration-200 text-sm  
        hover:border-transparent rounded " wire:click="agregarItem">
        <!--ICONO DE CARRITO-->
        {{-- <i class="fa-solid fa-trash-can"></i> --}}
        <i class="{{$textoBtn[1]}}" aria-hidden="true">
        </i><p class="inline-flex font-semibold pl-2 font-inter text-sixteen"> {{$textoBtn[0]}} </p>        
    </button>
</div>
