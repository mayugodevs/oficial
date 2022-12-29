<div class="dark:bg-gray-300 bg-white-300 h-screen m-auto xl:w-9/12 ml:w-9/12 md:w-9/12 lg:w-9/12 sm:w-full  px-5 "
    x-data="{open :false}">
    <div class="dark:bg-gray-300 bg-white-300">
        @foreach ($semanas as $semana)
            @foreach ($semana->diplomadoTareas->where('tipo', 'Practica') as $tarea)
                <div
                    class="text-white-900   ml:px-6  lg:px-6 md:px-6  xl:px-6 px-2 py-1 dark:bg-gray-900 bg-white-900 text-white rounded mb-3
            ">
                    <div class=" justify-between  flex items-center">
                        <div class=" ">
                            <div class="text-red-400 xl:text-sm ml:text-sm md:text-sm lg:text-sm text-xs text-left">100
                                puntos</div>
                            <div
                                class="text-left  font-semibold  xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs dark:text-white-500 text-gray-700 ">
                                Tarea N°
                                {{ $tarea->tarea }}
                            </div>


                            <hr class="dark:text-white-500 text-gray1  xl:w-60 ml:w-60 lg:w-60 md:w-60 w-40">
                            <div class="flex justify-start items-center">
                                <div
                                    class="px-2 my-1 dark:bg-gray4 bg-red-400 text-white-500 dark:text-gray100 rounded-sm font-serif xl:text-sm ml:text-sm md:text-sm lg:text-sm text-xs
                             ">
                                    pendiente</div>
                                <div
                                    class="text-gray3 px-3 ml:text-base lg:text-base md:text-base xl:text-base text-xs  ">
                                    NOTA: 0/100</div>
                            </div>


                        </div>



                        <div class="">
                            <!--  <button x-on:click="open= !open" id="play"
                                class="w-36 h-12 dark:hover:bg-gray-400 hover:bg-gray100 border-blue dark:border-white-500 inline border-2 dark:text-white-700 
                                text-gray-700 focus:outline-none  rounded-md" >
                                ver mas
                                <div
                                    class=" inline mx-3 px-1 rounded-full w-6 h-6 dark:bg-gray2 bg-gray-400 hover:bg-gray-400 " >
                                    <i class="fas fa-plus" id="icon "></i>
                                </div>
                            </button>-->
                            <div class=" ">
                                <button
                                    class="xl:w-36 ml:w-36 lg:w-36 md:w-36 w-24 xl:h-12 ml:h-12 lg:h-12 md:h-12 h-9  dark:hover:bg-gray3 hover:bg-gray100 border-blue dark:border-white-500 inline border-2 dark:text-white-700 
                                text-gray-700 focus:outline-none xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs px-1  rounded-md"
                                    id="play" x-on:click="open= !open"> ver mas
                                    <div
                                        class="inline mx-1 px-1 rounded-full w-6 h-6 dark:bg-gray2 bg-gray3 hover:bg-gray-400 ">
                                        <i class="fas fa-plus" id="icon"></i></div>

                                </button>
                            </div>
                        </div>
                    </div>
                    <div
                        class="text-xs dark:bg-gray3 bg-gray-400 rounded-sm w-full text-center font-serif  my-1 py-1 dark:text-white-500 text-gray-700 ">
                        Subir actividad antes del {{ $tarea->fecha_entrega }}
                    </div>

                </div>



                {{-- @php
                $enviado = !empty($tarea->diplTareaEntregas) ? true : false;
            @endphp --}}
                <div class="text-left dark:bg-gray1 bg-gray100  rounded-md my-2 ">
                    <nav x-show="open" x-on:click.away="open=false " class="h-auto ">
                        <div class="py-1">
                            <div
                                class="px-4 xl:my-4 ml:my-4 lg:my-4 md:my-4 my-1  xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs font-semibold">
                                Tarea N°{{ $tarea->tarea }}
                                <hr>
                                <div class="font-serif ml:text-base lg:text-base md:text-base xl:text-base text-xs">
                                    Descargar el archivo adjunto para ver las
                                    instrucciones
                                </div>
                            </div>

                        </div>


                        @if (count($tarea->diplTareaEntregas))
                            <div class="mx-auto w-32 py-2 ">
                                <button
                                    class="bg bg-red-700 text-white-500 py-1 rounded-md px-2 xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs"
                                    wire:click="deleteT({{ $tarea->id }})">Eliminar
                                    envio</button>
                            </div>
                        @else
                            <div class="w-40 m-auto h-12 px-2 text-center">
                                <button
                                    class="bg bg-green rounded-md py-1 xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs px-3 focus:outline-none text-white-500 ">
                                    instrucciones <a href="{{ $tarea->archivo }}" target="_bank">
                                        <i class="fas fa-cloud-download-alt text-white-500 "></i></a>
                                </button>
                            </div>

                            <div
                                class="w-3/5 m-auto my-3 h-36  border-1 dark:bg-gray1 bg-gray100 border-dashed border-white-500 border-2">
                                <div class="text-center dark:text-white-500 text-gray-700">
                                    <span class=" mx-4  xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs"> Estado |
                                        Enviad-No enviado</span>
                                </div> <br>

                                <!-- <div class="mx-9 px-3">
                                    <button class="px-3 m-auto my-3 py-1 border-1 bg-blue rounded-md">
                                        <span class=""> agregar entrega</span> <br>
                        
                                    </button>
                                </div>-->






                                <!-- ** Los archivos deben ser menor de 5MB, por lo contrario solo link| vinculo del archivo-->
                                <div class="text-center">
                                    <div class="inline px-2 mb-2 text-center">
                                        <button
                                            class="bg bg-blue text-white-500 px-2 rounded-md focus:outline-none ">Subir
                                            Tarea<i class="fas fa-arrow-circle-up px-2"></i></button>
                                    </div>
                                    <div class="my-4"></div>
                                    <div class="inline px-2 mb-2 text-center">
                                        <button class="bg bg-blue px-2 text-white-500 rounded-md focus:outline-none "
                                            wire:click="modalLink(1,{{ $tarea->id }})">link de Curso<i
                                                class="fas fa-external-link-square-alt px-1 text-yellow-500"></i></button>
                                    </div>
                                </div>


                            </div>
                            <br>
                        @endif
                    </nav>
                </div>
            @endforeach
        @endforeach

    </div>
    <script>
        document.getElementById('play').addEventListener('click', function() {
            var icon = document.getElementById('icon');
            icon.classList.toggle('fa-plus');
            icon.classList.toggle('fa-minus');
        })
    </script>






    <style>
        .modal {
            width: 550px;
            height: 250px;
            position: absolute;
            left: 50%;
            top: 50%;
            margin-left: -150px;
            margin-top: -150px;
        }

    </style>
</div>
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
