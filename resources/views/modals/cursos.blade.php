<div class="grid grid-cols-1  mx-0 sm:grid-cols-{{$sm}} md:grid-cols-{{$md}} lg:grid-cols-{{$lg}} xl:grid-cols-{{$xl}} ml:grid-cols-{{$ml}} text-center mt-3 justify-items-center">
    @forelse ($cursos as $curso)
        <div class="relative px-4  h-auto lg:w-56 w-72 bg-white-700 dark:bg-bluedark  rounded-xl pt-7 sm:pb-4 my-0 mb-2">
            <div class="bg-yellow-400 dark:bg-green badge-new absolute left-0 top-0 text-center rounded font-semibold px-1 text-whitetext ">
                Nuevo
            </div>
            <div class="content-center text-center space-y-1 space-x-0 px-0 sm:text-center">
                <div class="space-y-0.8 ">
                    <img class="block mx-auto lg:h-24 h-32 rounded-full  sm:flex-shrink-0" src="{{asset(''.$curso->img.'')}}" alt="{{$curso->img}}">
                    <br>
                    <p class="text-gray-900 text-sm font-medium dark:text-white-500" style="height:60px">
                        {{$curso->nom}}
                    </p>
                </div>

                <div class="dark:text-whitetext  flex lg:justify-between justify-around mb-2">
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
                    @auth
                        @livewire('like-curso', ['idAsig' => $curso->cursoAsignacion->idasig], key(rand()+rand()))
                    @else
                        <div class="flex items-center">
                            <button class="p-0 buttonlike rounded text-gray-600 
                            dark:text-whitetext hover:text-green dark:hover:text-green duration-200" >
                            <span class="lnr lnr-heart text-lg text-green"></span>
                        </button>
                    </div>
                    @endauth
                </div>

                <hr class="">
                @if (in_array($curso->idcur, $cursos_asig))
                    @if ($curso->validarCurso($curso->cursoAsignacion->idasig))
                        <div class="flex justify-between mt-0 w-100">
                            {{-- <a class="w-full" href="{{ route('curso',$curso->slug) }}"> --}}
                                {{ ultimo_video_curso_id($curso->cursoAsignacion->idasig, $user->idalum) }}
                            <a class="w-full" href="{{ route('curso.video',['asig_id' => $curso->cursoAsignacion->idasig, 'mat_id' => $curso->cursoAsignacion->cursoMateriales->first()->idmaterial]) }}"
                                target="_blank"
                                >{{-- PRUEBA NOMAS --}}
                                <div class="text-xs dark:text-whitetext">Mi progreso</div>
                                <x-historial-video cursoid="{{$curso->idcur}}" />
                                <button class="items-center flex justify-center w-full bg-transparent p-1 py-1 px-4  hover:bg-purple 
                                    text-gray-600 font-semibold hover:text-whitetext dark:text-whitetext duration-200 border-2  
                                    border-purple hover:border-transparent rounded">
                                    Ir a clase&nbsp;<span class="lnr lnr-arrow-right font-bold"></span>
                                </button>
                            </a>
                        </div>
                    @else
                        <div class="text-sm dark:text-whitetext mb-3">
                            <div class="flex justify-between">
                                <div>Precio normal </div>
                                <div class="strikero">{{$simbolo}} {{$curso->precio*$cambio}} {{$cod_iso}}</div>
                            </div>
                            <div class="mt-1 flex justify-between text-green">
                                <div>Precio oferta</div>
                                <div>{{$simbolo}} {{$curso->precio*$cambio}} {{$cod_iso}}</div>
                            </div>
                        </div>
                        <div class="flex justify-between mt-0 w-100">
                            @livewire('boton-comprar', ['curso' => $curso], key($curso->idcur))
                            <div class="inline">
                                <a class="inline" href="{{ route('curso',$curso->slug) }}" target="_blank">
                                    <button class="bg-transparent p-1 py-1 px-1 -mx-1  hover:bg-purple text-gray-600 font-semibold hover:text-whitetext dark:text-whitetext duration-200 border-2  border-purple hover:border-transparent rounded">
                                        Más info.
                                    </button>
                                </a>
                            </div>
                        </div> 
                    @endif
                @else
                    <div class="text-sm dark:text-whitetext mb-3 ">
                        <div class="flex lg:justify-between justify-around ">
                            <div>Precio normal </div>
                            <div class="strikero"> {{$simbolo}} {{$curso->predsct*$cambio}} {{$cod_iso}}</div>
                        </div>
                        <div class="mt-1 flex lg:justify-between justify-around text-green">
                            <div>Precio oferta</div>
                            <div> {{$simbolo}} {{$curso->precio*$cambio}} {{$cod_iso}}</div>
                        </div>
                    </div>
                    <div class="flex lg:justify-between justify-around mt-0 py-2 w-100">
                        @livewire('boton-comprar', ['curso' => $curso], key($curso->idcur))
                        <div class="inline">
                            <a class="inline" href="{{ route('curso',$curso->slug) }}">
                                <button class="bg-transparent p-1 py-1 lg:px-1 px-5 -mx-1  hover:bg-purple focus:outline-none text-gray-600 font-semibold hover:text-whitetext dark:text-whitetext duration-200 border-2  border-purple hover:border-transparent rounded text-sm">
                                    Más info.
                                </button>
                            </a>
                        </div>
                    </div> 
                @endif                
            </div>
        </div>
    @empty
        Sin cursos por el momento
    @endforelse
</div> 