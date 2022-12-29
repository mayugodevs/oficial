
<div class="grid grid-cols-1 couse-center sm:grid-cols-{{$sm}} md:grid-cols-{{$md}} lg:grid-cols-{{$lg}} xl:grid-cols-{{$xl}} ml:grid-cols-{{$ml}} mt-3 text-center">
    @foreach ($cursos as $curso)
        <div class="relative px-4  h-auto w-56 bg-white-700 dark:bg-bluedark  rounded-xl pt-7 sm:pb-4 mb-2">
            <div class="bg-yellow-400 dark:bg-green badge-new absolute left-0 top-0 text-center rounded font-semibold  text-whitetext ">
                Nuevo
            </div>
            <div class="content-center text-center space-y-1 space-x-0 px-0 sm:text-center">
                <div class="space-y-0.8 ">
                    <img class="block mx-auto h-24 rounded-full  sm:flex-shrink-0" src="{{asset(''.$curso->img.'')}}" alt="{{$curso->img}}">
                    <br>
                    <p class="text-gray-900 text-sm font-medium dark:text-white-500" style="height:60px">
                        {{$curso->nom}}
                    </p>
                </div>

                <div class="dark:text-whitetext  flex justify-between mb-2">
                    <div class="flex items-center">
                        <button class="p-0 buttonlike rounded hover:text-green text-gray-600   dark:text-whitetext dark:hover:text-green duration-200">
                            <span class="lnr lnr-users text-lg text-green "></span>
                        </button>
                        <x-detalle-curso  tipo="1" idAsig="{{$curso->cursoAsignacion->idasig}}" />
                    </div>
                    <div class="flex items-center">
                        <button  class=" p-0 buttonlike rounded hover:text-green text-gray-600 dark:text-whitetext dark:hover:text-green duration-200">
                            <span class="lnr lnr-star text-lg text-green "></span>
                        </button>
                        {{-- <x-detalle-curso  tipo="3" idAsig="{{$curso->cursoAsignacion->idasig}}" /> --}}
                        {{-- <span class="text-sm" style="margin-top:-3px">4.5</span> --}}
                    </div>
                    <div class="flex items-center">
                        <button  class="p-0 buttonlike rounded text-gray-600    dark:text-whitetext hover:text-green dark:hover:text-green duration-200">
                            <span class="lnr lnr-heart text-lg text-green "></span>
                        </button>
                        <x-detalle-curso  tipo="3" idAsig="{{$curso->cursoAsignacion->idasig}}" />
                    </div>
                </div>

                <hr class="">



                

                
                    @if (in_array($curso->idcur, $cursos_asig))
                    <div class="flex justify-between mt-0 w-100">
                        <a class="w-full" href="{{ route('curso',$curso) }}">
                            <div class="text-xs dark:text-whitetext">Mi progreso</div>
                                <x-historial-video cursoid="{{$curso->idcur}}" />
                                    {{-- {{$curso->idcur}} --}}
                                <button class="items-center flex justify-center w-full bg-transparent p-1 py-1 px-4  hover:bg-purple text-gray-600 font-semibold hover:text-whitetext dark:text-whitetext duration-200 border-2  border-purple hover:border-transparent rounded">
                                    Ir a clase&nbsp;<span class="lnr lnr-arrow-right font-bold"></span>
                                </button>
                        </a>
                    </div> 
                    @else
                    <div class="text-sm dark:text-whitetext mb-3">
                        <div class="flex justify-between">
                            <div>Precio normal </div>
                            <div class="strikero">USS {{$curso->precio}}</div>
                        </div>


                        <div class="mt-1 flex justify-between text-green">
                            <div>Precio oferta</div>
                            <div>US$  {{$curso->precio}}</div>
                        </div>
                    </div>
                    <div class="flex justify-between mt-0 w-100">
                        @livewire('boton-comprar', ['curso' => $curso], key($curso->idcur))
                        <div class="inline">
                            <a class="inline" href="{{ route('curso',$curso) }}">
                                <button class="bg-transparent p-1 py-1 px-1 -mx-1  hover:bg-purple text-gray-600 font-semibold hover:text-whitetext dark:text-whitetext duration-200 border-2  border-purple hover:border-transparent rounded">
                                    Más info.
                                </button>
                            </a>
                        </div>
                    </div> 
                    @endif
                
            </div>
        </div>
    @endforeach
</div> 