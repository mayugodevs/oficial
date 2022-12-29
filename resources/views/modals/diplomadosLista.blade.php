
@foreach ($diplomados as $diplomado)
    @php
        $routeInfo = $diplomado->tipo_producto == 'free' ? 'diplomado.taller' : 'info.diplomado';
        $routeClases = $diplomado->tipo_producto == 'Vivo' ? 'diplomado.vivo' : ($diplomado->tipo_producto == 'Diplomado' ? 'diplomado.grabado' : false);
    @endphp
   
    <div class="mx-4 ml:mx-0 xl:mx-0 lg:mx-0 my-2">
        <div class="rounded-xl sm:col-span-1 my-1 md:col-span-4 ml:col-span-5 dark:bg-gray8 bg-white-900 overflow-hidden bg ">
            <div class="relative">
                <div class="w-full h-60 object-cover object-center    bg-gradient-to-t from-black via-gray-900  ">
                    <div class="w-full h-60 opacity-80">

                    <a class="img-shadow" href="taller/analisis-datos-minitab">
                       {{--  <img  class="w-full h-60 object-cover" src="{{asset(''.$diplomado->imagen.'')}}" alt="{{$diplomado->imagen}}">
                        --}} 
                        <img class="w-full h-60 object-cover"
                            src="https://www.mayugo.net/admin/images/miniaturas/lean-manufacturing.png"
                            alt="Sunset in the mountains">
                    </a>
                    </div>
                </div>
                <div class="flex absolute bottom-0 justify-between w-full descriptiondiplp px-4">
                    <div class="flex focus:outline-none bg-transparent  text-white-500 mr-2 mb-2">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.91642 4.83315V1.49982M12.5831 4.83315V1.49982M5.08309 8.16648H13.4164M3.41642 16.4998H15.0831C16.0036 16.4998 16.7497 15.7536 16.7497 14.8331V4.83315C16.7497 3.91267 16.0036 3.16648 15.0831 3.16648H3.41642C2.49595 3.16648 1.74976 3.91267 1.74976 4.83315V14.8331C1.74976 15.7536 2.49595 16.4998 3.41642 16.4998Z" stroke="#DFE2E6" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                    
                        <div class="ml-2.5">
                            <div>
                                 {{ $diplomado->inicio }}
                            </div>
                            <div>GMT-5</div>
                        </div>
                    </div>
                <div>
                    <div class="flex bg-transparent focus:outline-none   text-white-500 mr-2 ">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.24926 5.66602V8.99935L11.7493 11.4994M16.7493 8.99935C16.7493 13.1415 13.3914 16.4994 9.24926 16.4994C5.10713 16.4994 1.74927 13.1415 1.74927 8.99935C1.74927 4.85722 5.10713 1.49936 9.24926 1.49936C13.3914 1.49936 16.7493 4.85722 16.7493 8.99935Z" stroke="#DFE2E6" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="ml-2.5">
                        {{ $diplomado->diplomado->duracion }}
                        </div>
                         
                    </div>

                </div>
                </div>
                <div class=" absolute top-5 right-6 labeltwo">
                    <i class="fa fa-desktop text-xs px-2"></i> {{ $diplomado->tipo_producto }}

                </div>
            </div>
            <div class="px-4 py-4">
            <div class="">
                <div class="titledegreec dark:text-white-500 text-gray-700  mb-2 ">{{ $diplomado->titulo }}</div>
            </div>
            <div class="">
                <div class="text-white-500">
                    <div class="flex justify-star  h-20 instructordiplo">
                        <div class="flex ">
                         
                        @foreach ($diplomado->diplomadoDocentes as $key => $docente)
                            @if ($key < 2)
                                <img class="h-8 w-8 rounded-full object-cover object-center  "
                                    src="https://www.semana.com/resizer/vZ5eSmKN1HnGZKHY33FOX3bZytA=/1200x675/filters:format(jpg):quality(50)//cloudfront-us-east-1.images.arcpublishing.com/semana/OQLNNMLOQZGTNETRN4TP5YM5S4.jpg"
                                    alt="">
                                {{-- <img src="{{ asset($docente->trabajador->img) }}" alt=""> --}}
                            @else
                                <div class="h-8 w-8 rounded-full text-whitetext bg-bubleinstg flex items-center justify-center">+ {{ count($diplomado->diplomadoDocentes) - 2 }}</div>
                                    
                            @endif
                        @endforeach
                        </div>
                        <div class="dark:text-celeste text-gray-300 px-1 w-2/3"> Por
                            @foreach ($diplomado->diplomadoDocentes as $key => $docente)
                                @if ($key < 2)
                                    {{ $docente->trabajador->nombres }},
                                @else
                                    y {{ count($diplomado->diplomadoDocentes) - 2 }} instructores más.
                                @endif
                            @endforeach
                        </div>

                    </div>
                    <div>
                        @php
                            $info = substr($diplomado->diplomado->informacion, 0, 200) . '...';
                        @endphp
                        
                        <span class="dark:text-white-500 text-gray-700 descrpdiplomdo"> {{ $info }} </span>
                    </div>
                </div>

                <div class="text-right bg-transparent text-white-500 font-serif ">
                    <div class="  rounded-full px-3 py-1 text-lg font-semibold dark:text-celeste  text-gray-700 ">
                        {{$cod_iso}}  {{$simbolo}} {{ $diplomado->precio_venta*$cambio }}</div>
                    <div class="flex items-center">
                    <span class="pricecourseoffert">S/ 370 PEN</span>
                    <span class="price-dashed"> S/ 740 PEN </span>&nbsp;
                    <div class="badgedcto" style="margin-left:2px">
                        -50% Dcto
                    </div>
                    </div>
                </div>
                <div class="w-full ">
                    @if ($routeClases && in_array($diplomado->iddiplomado, $inscripciones))
                        <a href="{{ route($routeClases, ['id' => $diplomado->slug]) }}" target="_blank"
                            rel="noopener noreferrer">
                            <button
                                class="w-full transition ease-in focus:outline-none  duration-500  border-2 border-celeste hover:bg-celeste rounded-md text-celeste hover:text-gray-700  py-2 px-4">
                                Ver clases
                            </button>
                        </a>
                    @elseif ($routeClases || in_array($diplomado->iddiplomado, $inscripciones))
                    <div class="flex gap-2 mt-4">
                        <div class="w-3/6">
                        <a href="{{ route($routeInfo, ['id' => $diplomado->slug]) }}" target="_blank">
                            <button 
                                class="buttonbuy w-full transition ease-in focus:outline-none  duration-500   bg-green rounded-md text-whitetext">
                                Ver más
                            </button>
                            </a>
                        </div>
                        <div class="w-3/6">
                            <button wire:click="addDiplomado({{$diplomado->iddiplomado}})"
                                class="buttonbuy w-full transition ease-in focus:outline-none leading-3
                                  duration-500 text-sm font-inter font-semibold  border-2 border-celeste hover:bg-celeste rounded-md text-celeste hover:text-gray-700   px-1">
                                Comprar   {{-- {{$cod_iso}} {{$simbolo}} {{$cambio*$diplomado->precio_venta}} --}}
                            </button>
                        </div>
                    </div>                            
                    @else
                    <div class=" mt-4 flex gap-2 items-center">
                        <div class="w-3/6">
                            <a href="{{ route($routeInfo, ['id' => $diplomado->slug]) }}" target="_blank">
                            <button 
                                class="buttonbuy w-full transition ease-in focus:outline-none  duration-500   bg-green rounded-md text-whitetext">
                                Ver más
                            </button>
                            </a>
                            
                        </div>
                        <div class="w-3/6">
                            <button class="buttonbuy w-full transition ease-in duration-500 focus:outline-none  border-2 border-green hover:bg-green rounded-md text-green hover:text-gray-700 ">
                                Certificado <!-- {{$cod_iso}} {{$simbolo}} {{$cambio*15}} -->
                            </button>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            </div>
        </div>
    </div>
@endforeach
