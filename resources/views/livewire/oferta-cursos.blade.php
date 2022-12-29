<div> 
    <br>
    <br>
    <br>
    <br>
    <div class="text-center"> 
        Disfruta un precio especial
        En todos los cursos
        <div>
            CRONOMETRO
        </div>
    </div>
    <div class="grid grid-cols-5 text-center ">
        <div class="mt-3 ">
            <div class="bg-white-500 dark:bg-gray-500 dark:text-whitetext rounded-lg  py-2">
            Especialidades 
            <hr class="my-2 py-1">
            <ul class="  mx-1 font-serif ">

                @foreach ($categorias as $categoria)
                    <li class="hover:bg-white-300 dark:hover:bg-gray-600 rounded-md h-13 pb-2 pt-2">
                        <button  wire:click="showNow({{$categoria->idc}})" class="hover:border-transparent flex items-center px-1
                            dark:hover:text-white-500 transition-colors duration-200 
                            text-gray-900   dark:text-white-500  text-left focus:outline-none" >                            
                                <img class="h-8 w-8 mr-1" viewBox="0 0 24 24" src="{{asset('images/categoria/'.$categoria->img)}}" alt="{{$categoria->img}}">                            
                            {{$categoria->nombre}}
                        </button>
                    </li>
                @endforeach
            </ul>
            </div>
        </div>
        <div class="mt-3 col-span-3 ">
            {{$categoria_id}} <br>
            
            @include('modals.ofertascursos', ['ml' =>4,'lg' =>2,'xl' =>3,'sm' =>1,'md' =>1])
        </div>
        <div class="mt-3 ">
            @forelse ($carrito_oferta as $cartt)
                {{$cartt->name}} ::
                {{$cartt->price}} <br>
                <button class="bg-transparent p-1 py-1 px-1 hover:bg-red-600 text-gray-600 
                    hover:text-whitetext   border-red-600 dark:text-whitetext duration-200 border-2  
                    hover:border-transparent rounded" wire:click="listCart('{{$cartt->id}}')">
                    <p class="inline-flex font-semibold ">Quitar</p>
                </button>
                <hr>
            @empty
                vacio
            @endforelse
            @if (count($carrito_oferta)>0)
                PRECIO TOTAL : {{$subTotal}}
                <button wire:click="buyNow">COMPRAR AHORA</button>
            @endif
        </div>
    </div>
    
</div>
