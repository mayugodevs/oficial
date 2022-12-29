@foreach ($cursos as $curso)
    <div class="bg-bgfondopricingwhite rounded-md pt-3 px-3 pb-6">
        <div class="mx-auto justify-center text-center">
            <img class="h-16 w-16 mx-auto" viewBox="0 0 24 24"
                src="{{asset(''.$curso->img.'')}}" alt="{{$curso->img}}">
        </div>
        <div class="font-inter font-medium text-txtnamecomntpkyr h-14 text-lg text-left mt-6" title="{{$curso->nom}}">
            {{strlen($curso->nom) <= 30 ? $curso->nom : substr($curso->nom, 0, 30).'...' }}
        </div>
        <div class=" text-left mt-2">
           <span class="text-txtcommentply text-sm"> Por: </span ><span class="font-inter text-sm italic font-normal text-bcklightbuscador">{{$curso->cursoAsignacion->trabajador->nombres}}</span>
        </div>
        <div class="flex gap-x-4 mt-2">
            <div class="flex items-start">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.87782 4.21114C1.70625 5.38271 1.70625 7.2822 2.87782 8.45378L7.99918 13.5751L13.1205 8.45378C14.292 7.2822 14.292 5.38271 13.1205 4.21114C11.9489 3.03957 10.0494 3.03957 8.87782 4.21114L7.99918 5.08985L7.12046 4.21114C5.94889 3.03957 4.0494 3.03957 2.87782 4.21114Z" stroke="#4B5565" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="text-gray-600 font-normal text-sm font-inter pl-1">
                    <x-detalle-curso  tipo="3" idAsig="{{$curso->cursoAsignacion->idasig}}" />                    
                </div>                    
            </div>
            <div class="flex items-start">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.3335 13.3335H14.6668V12.0002C14.6668 10.8956 13.7714 10.0002 12.6668 10.0002C12.0298 10.0002 11.4623 10.2981 11.096 10.7621M11.3335 13.3335H4.66683M11.3335 13.3335V12.0002C11.3335 11.5627 11.2492 11.1449 11.096 10.7621M4.66683 13.3335H1.3335V12.0002C1.3335 10.8956 2.22893 10.0002 3.3335 10.0002C3.97057 10.0002 4.53807 10.2981 4.90432 10.7621M4.66683 13.3335V12.0002C4.66683 11.5627 4.75111 11.1449 4.90432 10.7621M4.90432 10.7621C5.39583 9.53422 6.5967 8.66687 8.00016 8.66687C9.40361 8.66687 10.6045 9.53422 11.096 10.7621M10.0002 4.66687C10.0002 5.77144 9.10473 6.66687 8.00016 6.66687C6.89559 6.66687 6.00016 5.77144 6.00016 4.66687C6.00016 3.5623 6.89559 2.66687 8.00016 2.66687C9.10473 2.66687 10.0002 3.5623 10.0002 4.66687ZM14.0002 6.66687C14.0002 7.40325 13.4032 8.0002 12.6668 8.0002C11.9304 8.0002 11.3335 7.40325 11.3335 6.66687C11.3335 5.93049 11.9304 5.33354 12.6668 5.33354C13.4032 5.33354 14.0002 5.93049 14.0002 6.66687ZM4.66683 6.66687C4.66683 7.40325 4.06987 8.0002 3.3335 8.0002C2.59712 8.0002 2.00016 7.40325 2.00016 6.66687C2.00016 5.93049 2.59712 5.33354 3.3335 5.33354C4.06987 5.33354 4.66683 5.93049 4.66683 6.66687Z" stroke="#4B5565" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="text-gray-600 font-normal text-sm font-inter pl-1">
                    <x-detalle-curso  tipo="1" idAsig="{{$curso->cursoAsignacion->idasig}}" />
                </div>                    
            </div>
        </div>
        
        <div class="mt-2">
            @if (in_array($curso->idcur, $cursos_asig))
                <div class="flex justify-between mt-0 w-100">
                    <a class="w-full" href="{{ route('curso',$curso) }}">
                        <div class="text-xs dark:text-whitetext">Mi progreso</div>
                        <x-historial-video cursoid="{{$curso->idcur}}" /> 
                        <button class="items-center focus:outline-none flex justify-center w-full bg-transparent p-1 py-1 px-4  hover:bg-purple text-gray-600 font-semibold hover:text-whitetext dark:text-whitetext duration-200 border-2  border-purple hover:border-transparent rounded">
                            Ir a clase&nbsp;<span class="lnr lnr-arrow-right font-bold"></span>
                        </button>
                    </a>
                </div> 
            @else
                <div class="flex mt-6 items-center gap-x-2">
                    <div class="text-pricingtextduowhite font-inter font-bold text-sixteen">
                        {{$simbolo}} {{$curso->precio*$cambio}} {{$cod_iso}}
                    </div>
                    <div class="font-inter font-normal text-sm text-gray-600 mr-2">
                        {{$simbolo}} {{$curso->predsct*$cambio}} {{$cod_iso}}
                    </div>
                </div> 
                <div class="flex justify-between sm:py-0 py-4 mt-3 w-100">
                    @if (in_array($curso->idcur, $cursos_pack))
                        <button class="rounded-md bg-borderconcours focus:outline-none justify-center text-gray-650 flex w-full py-2" wire:click="listarCarrito({{$curso->idcur}})">
                            <div>
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.1667 9.99963H3.83337" stroke="#202939" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    
                                    
                            </div>
                            <div class="font-inter font-medium text-sixteen ml-1">
                                Quitar del pack
                            </div>
                        </button> 
                    @else
                        @if ($contador >= $cantMax)
                            <div class="rounded-md bg bg-gray_panel focus:outline-none justify-center text-white-900 flex w-full py-2"{{--  wire:click="agregarPack({{$curso->idcur}})" --}}>
                                <div>
                                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.1667 9.99963H3.83337" stroke="#202939" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        
                                        
                                </div>
                                <div class="font-inter font-medium focus:outline-none text-sixteen ml-1">
                                    Añadir al pack
                                </div>
                            </div>
                        @else
                            <button class="rounded-md bg-bgbtngreen focus:outline-none justify-center text-green_especialidad flex w-full py-2" wire:click="agregarPack({{$curso->idcur}})">
                                <div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.0002 3.33368V16.667M16.6668 10.0003L3.3335 10.0003" stroke="#145229" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        
                                </div>
                                <div class="font-inter  font-medium text-sixteen ml-1">
                                    Añadir al pack
                                </div>
                            </button> 
                        @endif 
                    @endif
                    {{-- <div class="inline">
                        <a class="inline" href="{{ route('curso',$curso) }}" target="_blank">
                            <button class="bg-transparent p-1 py-1 sm:px-1 px-3 -mx-1 focus:outline-none  hover:bg-purple text-gray-600 font-semibold hover:text-whitetext dark:text-whitetext duration-200 border-2  border-purple hover:border-transparent rounded">
                                Más info.
                            </button>
                        </a>
                    </div> --}}
                </div> 
            @endif 
        </div>
    </div>
@endforeach  