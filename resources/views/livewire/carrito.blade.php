<div class="flex items-center">
    <x-jet-dropdown>
        <x-slot name="trigger">
            
            <div class="sm:ml-3  text-gray-500 dark:text-white-300  lg:block font-semibold  hover:text-indigo-500 rounded" >               
                @if (count($carrito)>0)
                    <span class="xl:absolute inline-flex items-center justify-center pt-1 px-2 py-1 mr-2 text-xs font-bold 
                        leading-none text-red-100 bg-red-600 rounded-full" style="bottom: -10px;right: -17px;">
                        {{count($carrito)}}</span>
                @else
                    <!--<span class="inline-block w-2 h-2 mr-2 pt-1 bg-red-600 rounded-full"></span> -->
                @endif
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
            </div>
            
        </x-slot>

        <x-slot name="content">
            <button class="xl:hidden absolute top-2 right-2" @click="open = ! open" >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
            </button>
            <ul>
                <div class="w-full text-2xl font-bold">Mi carrito ddd</div>
                <li class="mb-4">Tienes {{count($carrito)}} cursos en tu carrito</li>
                @forelse ($carrito as $item)
                    <li class="flex border-t border-gray-200 dark:border-bordercartdark">
                        <div class="py-1 mayu-card-price rounded-md w-full">

                            <div class="xl:relative mayu-card-price max-w-xs rounded overflow-hidden pt-1 pb-1">
                                <div class="space-y-1 space-x-0 mt-3 md:mt-1 ">
                                    <div class="space-y-0.8 flex">                     
                                        <img class="img-especialidad" src="{{asset(''.$item->options->img.'')}}" alt="$item->options->img">
                                        <div class="pl-2">
                                            <div class="">
                                                <h1 class="dark:text-whitetext w-11/12">{{$item->name}}</h1>
                                                <div class="mt-1 flex items-center">
                                                    <div class="dark:text-green text-sm font-bold">  {{$simbolo}} {{$item->price*$cambio}} {{$cod_iso}}</div>&nbsp;&nbsp;
                                                    <div class="strikero font-light text-sm">  {{$simbolo}} {{$item->options->desc*$cambio}} {{$cod_iso}}</div>   
                                                </div>                                                
                                            </div>
                                        </div>
                                        <button class="absolute right-3 top-8 outline-none" {{-- wire:click="delete('{{$item->rowId}}')" --}} 
                                            onclick="eliminar('{{$item->rowId}}','{{$item->id}}')">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </li>
                @empty
                    <li class=" px-4">
                        <div class="mb-8">
                            <div class="text-2xl text-center">¡Vaya! 😳</div>
                            <div class="text-sm text-center my-3 font-light">Tu carrito está vacío</div>
                        </div>
                        <div class="text-center">
                            <div>Refuerza tu carrera profesional</div>
                            <div class="flex justify-center mt-4">
                                <a href="{{ route('categoria','lean-six-sigma') }}" class="">
                                    <div class="btn-comenzarc">
                                        Ver cursos
                                    </div>   
                                </a>
                            </div> 
                            
                        </div>
                    </li>
                @endforelse
                
            </ul>
            @if (count($carrito) > 0)
                <div class="py-2 border-t border-gray-200 dark:border-bordercartdark">
                    <p class="text-lg dark:text-whitetext text-gray-700 mt-2 mb-3 "><span class="font-bold">Total :</span> 
                        <span class="text-blue font-bold">   {{$simbolo}} {{$total*$cambio}} {{$cod_iso}}</span></p>
                    <a href="{{ route('checkout', ['tipo' => 'EAIaIQobChMl', 'link' => '0','step' => 'first']) }}"> <div class="rounded transition duration-500 ease-in-out border-green border-2 dark:text-green hover:bg-green hover:text-whitetext dark:hover:text-whitetext text-center py-1 w-full text-xl">Ir al carrito <i class="fa fa-shopping-cart" aria-hidden="true"></i></div></a>
                </div>
            @endif
        </x-slot>
    </x-jet-dropdown>

    @push('js')
        <script>
            function eliminar(idRow,id){
                if(document.getElementById(`${id}_a`)){
                    document.getElementById(`${id}_a`).click();
                    console.log('aaaaaaa');
                }
                else {
                    Livewire.emit('delete',idRow)                
                    console.log('bbbbbbb');
                }
            }
        </script>
    @endpush
</div>
