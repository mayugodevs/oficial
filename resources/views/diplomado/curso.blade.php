@extends('layout')


@section('content')
    <br>
    {{-- <style>
        .tamaño {
            line-height: 14px;

        }     lg:mx-11  xl:mx-11  ml:mx-11   md:mx-8 

    </style> --}}
    {{-- <style>
        .opacidad {
            z-index: 999;
        }

    </style> --}}
    <div class="xl:my-12 static  ml:my-12 md:my-12 lg:my-12 my-1 downUp " >
        <div class="grid sm:grid-cols-1 md:grid-cols-4 lg:grid-cols-4  ">
            <div
                class="col sm:col-span-1 md:col-span-3 lg:col-span-3   flex  items-center lg:mx-11 lg:px-8 md:px-3 md:mx-8 px-4 sm:px-10 sm:mx-8 lg:my-6 xl:my-6  md:my-6  ml:my-6 my-0.5 ">
                <button class=" focus:outline-none " id="play1" >
                    <div class="sm:px-10 sm:mx-7 lg:px-1 lg:mx-1 ">
                        <i
                            class="fa fa-bars text-white-500 w-13 h-11   text-xl rounded-full dark:bg-gray-600 bg-greenintense py-3 px-3"></i>
                    </div>
                </button>


                <div class=" flex-col justify-start px-1 ">
                    <div
                        class="dark:text-white-500 xl:text-lg ml:text-lg md:text-lg  lg:text-lg  text-sm leading-4 text-gray-700 dark font-serif  ">
                        {{ $diplomado_grupo->titulo }}
                    </div>

                    <div class=" text-xs w-14 bg-greenborder px-2  rounded-sm my-1  text-white-700 font-semibold">
                        proceso

                    </div>
                    <div class="   ">
                        <hr class="text-gray-500  ">
                    </div>
                </div>
            </div>


        </div>





        <div x-data="tipoboton()">
            <div class="grid xl:grid-cols-5 lg:grid-cols-5 md:grid-cols-5 ml:grid-cols-5 grid-cols-1 gap-2 text-center ">
                <div class=" col col-span-1   absolute lg:left-16 sm:mx-0.5 my-2 " id="icon1"  >
                    <ul class="  openClose   z-50 xl:dark:bg-gray-300 ml:dark:bg-gray-300 lg:dark:bg-gray-300 md:dark:bg-gray-300  dark:bg-gray7 xl:bg-white-300 ml:bg-white-300 lg:bg-white-300 md:bg-white-300  bg-white-900 "
                        id="esconder">
                        <div
                            class=" xl:w-48 ml:w-48 lg:w-48 md:w-48 w-full  h-10 rounded-r-lg mb-2  dark:bg-gray7 dark:focus:bg-gray3 dark:hover:bg-gray3 transition ease-in duration-500  bg-white-900 focus:bg-gray4 hover:bg-gray-400 xl:mx-5 ml:mx-5 md:mx-5 lg:mx-5 ">

                            <div class="text-left   ">
                                <button
                                    class="inline -my-1  dark:text-white-500 text-gray-800 hover:text-white-500
                                    font-semibold text-lg focus:outline-none    "
                                    x-on:click="showNow(1) ">
                                    <i
                                        class="fas fa-comments inline fiftypix py-2 px-2  rounded-full dark:bg-gray3 bg-greenintense   text-white-500 text-base  m-2"></i>Comentarios
                                </button>
                            </div>
                        </div>
                        <div
                            class=" w-48 h-10 rounded-r-lg mb-2  delay-100 dark:bg-gray7 dark:focus:bg-gray3 dark:hover:bg-gray3 transition ease-in duration-500  bg-white-900 focus:bg-gray4 hover:bg-gray-400 xl:mx-5 ml:mx-5 md:mx-5 lg:mx-5  ">

                            <div class="text-left  ">
                                <button
                                    class="inline -my-1  dark:text-white-500 text-gray-800 hover:text-white-500
                                    font-semibold text-lg focus:outline-none    "
                                    x-on:click="showNow(2) ">
                                    <i
                                        class="fa fa-cog inline fiftypix py-2 px-2  rounded-full dark:bg-gray3 bg-greenintense  text-white-500 text-base  m-2"></i>Mi
                                    Proyecto
                                </button>
                            </div>
                        </div>
                        <div
                            class=" w-48 h-10 rounded-r-lg mb-2 transition ease-in duration-500 dark:bg-gray7 dark:focus:bg-gray3 dark:hover:bg-gray3  bg-white-900 focus:bg-gray4 hover:bg-gray-400 xl:mx-5 ml:mx-5 md:mx-5 lg:mx-5  ">
                            <div class="text-left  ">
                                <button
                                    class="inline -my-1  dark:text-white-500 text-gray-800 hover:text-white-500
                                            font-semibold text-lg focus:outline-none    "
                                    x-on:click="showNow(3) ">
                                    <i
                                        class="fa fa-list inline fiftypix py-2 px-2  rounded-full dark:bg-gray3 bg-greenintense  text-white-500 text-base  m-2"></i>Mis
                                    Tareas
                                </button>
                            </div>
                        </div>
                        <div
                            class=" w-48 h-10 rounded-r-lg mb-2 transition ease-in duration-500 dark:bg-gray7 dark:focus:bg-gray3 dark:hover:bg-gray3  bg-white-900 focus:bg-gray4 hover:bg-gray-400   xl:mx-5 ml:mx-5 md:mx-5 lg:mx-5  ">
                            <div class="text-left  ">
                                <button
                                    class="inline -my-1  dark:text-white-500 text-gray-800 hover:text-white-500
                                            font-semibold text-lg focus:outline-none    "
                                    x-on:click="showNow(4) ">
                                    <i
                                        class="fas fa-video inline fiftypix py-2 px-2  rounded-full dark:bg-gray3 bg-greenintense  text-white-500 text-base  m-2"></i>Clases
                                    en vivo</button>
                            </div>
                        </div>
                        <div
                            class=" w-48 h-10 rounded-r-lg mb-2 transition ease-in duration-500 dark:bg-gray7 dark:focus:bg-gray3 dark:hover:bg-gray3  bg-white-900 focus:bg-gray4 hover:bg-gray-400 xl:mx-5 ml:mx-5 md:mx-5 lg:mx-5  ">


                            <div class="text-left  ">
                                <button
                                    class="inline -my-1  dark:text-white-500 text-gray-800 hover:text-white-500
                                font-semibold text-lg focus:outline-none    "
                                    x-on:click="showNow(5) ">

                                    <i
                                        class="far fa-file-alt inline fiftypix py-2 px-3  rounded-full dark:bg-gray3 bg-greenintense  text-white-500 text-base  m-2"></i>Mis
                                    Notas
                                </button>

                            </div>

                        </div>
                        <div
                            class=" w-48 h-10 rounded-r-lg mb-2 transition ease-in duration-500 dark:bg-gray7 dark:focus:bg-gray3 dark:hover:bg-gray3  bg-white-900 focus:bg-gray4 hover:bg-gray-400 xl:mx-5 ml:mx-5 md:mx-5 lg:mx-5  ">

                            <div class="text-left  ">
                                <button
                                    class="inline my-1  dark:text-white-500 text-gray-800 hover:text-white-500
                                            font-semibold text-lg focus:outline-none    "
                                    x-on:click="showNow(6) ">
                                    <i
                                        class="lnr lnr-film-play fiftypix py-2 px-2 my-5  rounded-full dark:bg-gray3 bg-greenintense  text-white-500 text-base  m-2"></i>Video
                                    Clases</button>
                            </div>
                        </div>

                        <div
                            class=" w-48 h-10 rounded-r-lg mb-2 transition ease-in duration-500 dark:bg-gray7 dark:focus:bg-gray3 dark:hover:bg-gray3  bg-white-900 focus:bg-gray4 hover:bg-gray-400 xl:mx-5 ml:mx-5 md:mx-5 lg:mx-5  ">
                            <div class="text-left  ">
                                <button
                                    class="inline -my-1  dark:text-white-500 text-gray-800 hover:text-white-500
                                    font-semibold text-lg focus:outline-none    "
                                    x-on:click="showNow(7) ">
                                    <i
                                        class="fas fa-certificate inline fiftypix py-2 px-2   rounded-full dark:bg-gray3 bg-greenintense  text-white-500 text-base  m-2"></i>
                                    Mi certificado</button>

                            </div>
                        </div>
                        <div
                            class=" w-48 h-10 rounded-r-lg mb-2 transition ease-in duration-500 dark:bg-gray7 dark:focus:bg-gray3 dark:hover:bg-gray3  bg-white-900 focus:bg-gray4 hover:bg-gray-400 xl:mx-5 ml:mx-5 md:mx-5 lg:mx-5  ">
                            <div class="text-left z-50  ">
                                <button
                                    class="inline -my-1  dark:text-white-500 text-gray-800 hover:text-white-500
                                    font-semibold text-lg focus:outline-none z-50   "
                                    x-on:click="showNow(8) ">
                                    <i
                                        class=" fas fa-user inline fiftypix py-2 px-2 z-50  rounded-full dark:bg-gray3 bg-greenintense  text-white-500 text-base  m-2"></i>
                                    ¿Te ayudamos?</button>

                            </div>
                        </div>
                        <div
                            class=" w-48 h-10 rounded-r-lg mb-2 dark:bg-green_hover dark:focus:bg-gray-600 dark:hover:bg-gray-600  bg-white-900 focus:bg-gray4 hover:bg-gray-400 xl:mx-5 ml:mx-5 md:mx-5 lg:mx-5  ">
                            <div class="text-left  ">
                                <button
                                    class="inline -my-1  dark:text-white-500 text-gray-800 hover:text-white-500
                                    font-semibold text-lg focus:outline-none    "
                                    x-on:click="showNow(9) ">
                                    <i
                                        class="far fa-star inline fiftypix py-2 px-2  rounded-full dark:bg-gray3 bg-greenintense  text-white-500 text-base  m-2"></i>
                                    Valoracion</button>

                            </div>
                        </div>




                    </ul>
                </div>
                <br>

                <div class="col col-span-4  ">

                    <template x-if="tipo == 1">
                        <div class="col-span-3 dark:bg-gray-300 bg-white-300  ">
                            <div class="text-white-500 ">

                                <div class="text-center "> @livewire('diplomado-comentarios', ['id_grupo' =>
                                    $diplomado_grupo->iddiplomado ])</div>
                            </div>
                        </div>
                    </template>
                    <template x-if="tipo == 2">
                        <div class="font-semibold dark:text-white-500 text-gray-700 ">

                            @livewire('diplomado-proyecto', ['id_grupo' => $diplomado_grupo->iddiplomado ])
                        </div>
                    </template>
                    <template x-if="tipo == 3">

                        <div class="font-semibold dark:text-white-500 text-gray-700 ">

                            @livewire('diplomado-tareas', ['id_grupo' => $diplomado_grupo->iddiplomado ])
                        </div>
                    </template>
                    <template x-if="tipo == 4">
                        <div class="font-semibold dark:text-white-500 text-gray-700 ">

                            @livewire('diplomado-clases', ['id_grupo' => $diplomado_grupo->iddiplomado ])

                        </div>
                    </template>
                    <template x-if="tipo == 5">
                        <div
                            class="font-bold dark:text-white-500 h-screen xl:w-9/12 ml:w-9/12 md:w-9/12 lg:w-9/12 sm:w-full px-5  m-auto  text-gray-700 dark:bg-gray-300 bg-white-300 ">
                            <div class="dark:bg-gray4   bg-white-700  rounded-md  ">
                                <br>
                                <div class="px-5 items-center ">
                                    <table class="w-full ">
                                        <tr class="items-center ">
                                            <td
                                                class="border-2 dark:border-white-500 border-blue py-1 text-green xl:text-2xl ml:text-2xl lg:text-2xl md:text-2xl text-medio">
                                                Actividad</td>
                                            <td
                                                class="border-2 dark:border-white-500 border-blue py-1 text-green xl:text-2xl ml:text-2xl lg:text-2xl md:text-2xl text-medio">
                                                Nota</td>
                                        </tr>
                                        @foreach ($diplomado_grupo->diplomadoSemanas as $semana)
                                            @foreach ($semana->diplomadoTareas as $tarea)
                                                @if ($tarea->tipo == 'Practica')
                                                    @foreach ($tarea->diplTareaEntregas as $entrega)
                                                        {{ $entrega->nota }}
                                                    @endforeach
                                                @endif
                                                <tr>
                                                    <th class="border-2 py-2 dark:border-white-500 border-blue "> promedio
                                                        tareas</th>
                                                    <th class="border-2 py-2 dark:border-white-500 border-blue ">0/100</th>
                                                </tr>

                                                @if ($tarea->tipo == 'Proyecto')
                                                    @foreach ($tarea->diplTareaEntregas as $entrega)
                                                        {{ $entrega->nota }} <br>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        @endforeach
                                        <tr>
                                            <td
                                                class="dark:bg-gray4 py-2 border-b-2  border-2 dark:border-white-500 border-blue">
                                                promedio</td>
                                            <td
                                                class="dark:bg-gray4 py-2 border-b-2  border-2 dark:border-white-500 border-blue">
                                                0/100</td>
                                        </tr>
                                    </table>
                                </div>
                                <br>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>


                        </div>
                    </template>
                    <template x-if="tipo == 6">
                        <div x-data="{}" x-init="window.Livewire.rescan($el)">
                            <div class="xl:w-9/12 ml:w-9/12 md:w-9/12 lg:w-9/12 sm:w-full px-5 h-screen  m-auto">

                                @include('modals.cursosLateral', [
                                    'ml' => 4,
                                    'lg' => 2,
                                    'xl' => 3,
                                    'sm' => 1,
                                    'md' => 2,
                                ])
                            </div>
                        </div>

                    </template>
                    <template x-if="tipo == 7">
                        <div class="xl:w-9/12 ml:w-9/12 md:w-9/12 lg:w-9/12 sm:w-full px-5  m-auto">

                            <x-certificado-user tipo="diplomado" insc="{{ $inscDiplomado->idpay }}" />
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </template>
                    <template x-if="tipo == 8">
                        <div
                            class=" xl:w-9/12 ml:w-9/12 md:w-9/12 lg:w-9/12 sm:w-full  xl:dark:bg-gray3 ml:dark:bg-gray3 lg:dark:bg-gray3 md:dark:bg-gray3  dark:bg-gray-300 bg-white-300 m-auto px-5 grid xl:grid-cols-3 ml:grid-cols-3 lg:grid-cols-3 md:grid-cols-3 grid-cols-1 rounded-lg">

                            {{-- ESTOS DE SOPORTES DEBE ESTAR EN UN CARD, minomo son 4 de soporte --}}
                            <div class="col xl:col-span-3 ml:col-span-3 lg:col-span-3 md:col-span-3 col-span-1 py-3"> <span
                                    class="xl:text-3xl  ml:text-3xl  lg:text-3xl md:text-3xl text-medio  font-bold dark:text-green text-gray-700">Conecta
                                    con
                                    nuestros asesores y tutores</span>
                            </div>
                            @foreach ($soportes as $soporte)
                                <div class="dark:bg-gray7  bg-white-900 rounded-md col col-span-1 mb-2 py-1 mr-2 my-2 px-2">
                                    <div class="flex justify-center my-4">
                                        <div>
                                            <img class="h-36 w-36 rounded-full"
                                                src="https://yt3.ggpht.com/ytc/AKedOLT0hVG8YLWaxIFKvkTyg08-OfYcEiBNJH2vOjCzSQ=s900-c-k-c0x00ffffff-no-rj"
                                                alt="">

                                        </div>
                                    </div>
                                    <div class="h-40">
                                        <div class="dark:bg-gray7  bg-white-900">
                                            <span
                                                class="bg-gray3 px-2 text-xs py-1 font-serif rounded-md text-white-500 ">{{ $soporte->rol }}</span>
                                        </div>
                                        <div class="">
                                            <span
                                                class="text-lg dark:text-white-500 text-gray-300 font-bold">{{ $soporte->trabajador->nombres }}</span>
                                        </div>
                                        <div class="">
                                            <span
                                                class="dark:text-celeste text-gray5 text-xs tracking-tighter leading-3 font-semibold">
                                                {{ $soporte->trabajador->especialidad }}</span>
                                        </div>
                                        <div class="">
                                            <span
                                                class="tamaño dark:text-white-500 text-gray-300 text-xs tracking-tighter  font-sans justify-center">{{ $soporte->descripcion }}
                                            </span>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="tamaño dark:text-white-500 text-gray-300 text-md font-medium">Horario
                                            de
                                            Atencion</span>
                                    </div>
                                    <div>
                                        <span
                                            class="dark:text-celeste text-gray5 text-sm font-serif">{{ $soporte->horario }}</span>
                                    </div>
                                    <div class="my-1">

                                        <button
                                            class="border-2 transition ease-in duration-500 px-2 py-1 rounded-md border-blue bg-transparent hover:bg-blue">
                                            <a class="dark:text-white-500 text-gray-300 dark:hover:text-white-500 hover:text-white-500"
                                                href="https://api.whatsapp.com/send?phone= {{ $soporte->trabajador->telf }}">
                                                Enviar Mensaje <i class="fas fa-comments"></i></a>

                                        </button>
                                    </div>


                                    <br>
                                </div>
                            @endforeach
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>

                        </div>


                    </template>
                    <template x-if="tipo == 9">
                        <div x-data="{}" x-init="window.Livewire.rescan($el)">
                            <div class="xl:w-9/12 ml:w-9/12 md:w-9/12 lg:w-9/12 sm:w-full px-5  m-auto">

                                @livewire('valorar-producto', [
                                'id_grupo' => $diplomado_grupo->iddiplomado,
                                'insc' =>$diplomado_grupo->diplomadopago->idpay ])
                                {{-- @livewire('valorar-producto', ['tipo' => 'diplomado',
                                        'idtipo' => $diplomado_grupo->iddiplomado,
                                        'insc' =>$diplomado_grupo->diplomadopago->idpay ]) --}}
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
            @if (Auth::user()->tipo == 2)
                @livewire('diplomado-grupo',['id_grupo' =>
                $diplomado_grupo->iddiplomado,'id_dipl'=>$diplomado_grupo->diplomado->iddiplomado ])
            @endif
        </div>

    </div>


    {{-- <script>
       document.getElementsByTagName("html")[0].style.overflow = "hidden";
        e.stopPropagation();
 </script> --}}


    <script>
        function tipoboton() {
            return {
                tipo: 1,
                showNow(type) {
                    this.tipo = type
                    console.log(this.tipo)
                },
            }
        }
    </script>

    <script>
        var play1 = document.getElementById('play1');
        var icon1 = document.getElementById('icon1');
       /*  var esconder = document.getElementById('esconder'); */



        play1.addEventListener('click', function() {
            // icon.classList.remove('hidden');
            icon1.classList.toggle('hidden');
        });


        document.addEventListener('click', function() {
            // icon.classList.remove('hidden');
            esconder.classList.toggle('hidden');


        });
       /*  document.getElementsByClassName('menu-bar-movil')[0].contains(event.target); */

        /*  document.getElementsByTagName("html")[0].style.overflow = "hidden";
         e.stopPropagation(); */
    </script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
        function open() {
  $('.downUp').next('.openClose').show();
  $('.downUp').addClass('open');
  // on añadiría el listener para siempre,
  // one hace que sólo sea hasta que se ejecute una vez
  $(document.body).one('click',close);
}

function close() {
  $('.downUp').next('.openClose').hide();
  $('.downUp').removeClass('open');
  
}

$('.downUp').click(function(e) {
  if (!$(this).hasClass('open')) {
    open();
    e.stopPropagation();
  }
  
});

//Abrimos menú en tablet
$('#imgburger').click(function() {
    if (($(window).width() <= 991)) {
        $('#smartBMH').slideToggle();
    };
});

close($('.downUp'));
    </script> --}}
@endsection
