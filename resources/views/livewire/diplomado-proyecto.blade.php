<div class="dark:bg-gray-300  bg-white-300 h-screen m-auto xl:w-9/12 ml:w-9/12 md:w-9/12 lg:w-9/12 sm:w-full  px-5"
    x-data="{open :false}">

    <div class="xl:dark:bg-gray6 lg:dark:bg-gray6 md:dark:bg-gray6 ml:dark:bg-gray6 dark:bg-gray-300  rounded-md  bg-white-700 xl:px-9 md:px-9 lg:px-9 ml:px-9 w-full  ">
        <div class="py-2">
            <span
                class="dark:text-greenhover text-green_hover xl:text-3xl ml:text-3xl  lg:text-3xl md:text-3xl text-lg  ">Avanza
                con tu Proceso de Certificación</span>
        </div>
        @foreach ($semanas as $semana)
            @foreach ($semana->diplomadoTareas->where('tipo', 'Proyecto') as $tarea)
                <div class="flex xl:flex-row ml:flex-row md:flex-row lg:flex-row flex-col  justify-around ">
                    <div class=" rounded-md dark:bg-gray5 hover:bg-blue bg-gray100  text-white-500  px-4 xl:py-5 ml:py-5 lg:py-5 md:py-5 py-1 my-1">
                        <a class="font-bold flex xl:flex-col ml:flex-col lg:flex-col md:flex-col flex-row items-center "
                            target="_bank" href="{{ $tarea->archivo }}">
                            <div>
                                <i class="fas fa-list-ul fiftypix text-white-500 xl:text-9xl ml:text-9xl  lg:text-9xl md:text-9xl text-3xl py-2"></i>
                            </div>
                            <div class="px-3">
                                formato de
                                solicitud
                            </div>
                        </a>

                    </div>

                    <div class=" rounded-md dark:bg-gray5 hover:bg-blue bg-gray100 text-white-500   xl:px-2  ml:px-2  lg:px-2  xmd:px-2 px-4 xl:py-5 ml:py-5 lg:py-5 md:py-5 py-1 my-1 ">
                        <a class="font-bold flex xl:flex-col ml:flex-col lg:flex-col md:flex-col flex-row items-center" target="_bank"
                            href="https://drive.google.com/drive/folders/1_Y6dENKkHleISDAKjHaCcNG_qe8OFkkg?usp=sharing">
                            <div>
                                <i  class="far fa-file-alt fiftypix text-white-500 xl:text-9xl ml:text-9xl  lg:text-9xl md:text-9xl text-3xl py-2"></i>
                            </div>
                            <div class="px-3">
                                instrucciones del
                                proyecto
                            </div>
                        </a>


                    </div>
                    <div class=" rounded-md dark:bg-gray5 hover:bg-blue bg-gray100 text-white-500  px-4 xl:py-5 ml:py-5 lg:py-5 md:py-5 py-1 my-1">
                        <a class="font-bold flex xl:flex-col ml:flex-col lg:flex-col md:flex-col flex-row items-center">
                           <div>
                            <i class="fas fa-user-graduate fiftypix text-white-500 xl:text-9xl ml:text-9xl  lg:text-9xl md:text-9xl text-3xl py-2"></i>
                           </div>
                           <div class="px-3">
                            Formato de
                            Solicitud
                           </div>
                        </a>

                    </div>
                </div>
                <div class="text-left py-1">
                    <span class="text-left font-semibold text-sm">
                        *Si desarrollas tu proyecto en alguna empresa aplica
                        <a class="dark:text-green text-greenborder font-semibold" target="_bank"
                            href="https://drive.google.com/file/d/1JevKewDtWWrGVruUBpNXl6eYt8eDfDLe/view">Términos y
                            Condiciones.</a>

                    </span>
                </div>


                <div class=" xl:px-5 ml:px-5 lg:px-5 md:px-5 px-2  dark:bg-gray-900 rounded-md bg-gray100 items-center xl:py-2 ml:py-2 lg:py-2 md:py-2 py-1 flex justify-between">

                    <div class="text-left leading-3">
                        <div class="dark:text-greenhover text-greenborder text-sm">100 puntos</div>
                        <div class="font-serif  xl:text-lg ml:text-lg lg:text-lg md:text-lg text-xs leading-3 inline">
                            Proyecto de certificación
                        </div>
                        <hr class="w-full">
                        <div class="font-semibold my-2  text-xs text-left flex justify-start items-center">
                            <div class="bg-red-500 text-white-500 h-5 px-1 rounded-md text-xs">pendiente </div>
                            <div class="text-gray3 xl:text-base ml:text-base lg:text-base md:text-base text-xs px-2">NOTA : 00/100</div>
                        </div>
                    </div>




                    <div class="text-right  ">

                        <!-- <div
                            class="my-4 py-3 w-36  dark:hover:bg-gray5 hover:bg-gray-400 border-2 dark:text-white-700 text-gray-700 hover:text-white-500 dark:border-white-500 border-blue focus:outline-none  rounded-md   ">
                            <button class=" focus:outline-none rounded-md px-3 w-36 dark:text-white-700 text-gray-700 hover:text-white-500  "
                                x-on:click="open= !open">agregar<i class="fas fa-plus   px-2"></i>
                            </button>
                        </div>-->
                        <div class="text-right ">
                            <button
                                class="xl:w-36 ml:w-36 lg:w-36 md:w-36 w-28 xl:h-12 ml:h-12 lg:h-12 md:h-12 h-9  dark:hover:bg-gray3 hover:bg-gray100 border-blue dark:border-white-500 inline border-2 dark:text-white-700 
                            text-gray-700 focus:outline-none  rounded-md xl:text-lg ml:text-lg  md:text-lg lg:text-lg text-xs"
                                id="play" x-on:click="open= !open"> ver mas
                                <div
                                    class="inline mx-3 px-1 rounded-full w-6 h-6 dark:bg-gray2 bg-gray3 hover:bg-gray-400 ">
                                    <i class="fas fa-plus" id="icon"></i>
                                </div>

                            </button>
                        </div>

                    </div>

                </div>
                <br>



                @if (count($tarea->diplTareaEntregas))
                    
                    <div class="py-2">
                        <button class="bg bg-red-700 focus:outline-none rounded-md px-2 text-white-500" wire:click="deleteT({{ $tarea->id }})">Eliminar envio</button>
               
                    </div>
                @else
                    <nav x-show="open" x-on:click.away="open=false">
                        <div class="dark:bg-gray2 bg-gray100  m-auto rounded-lg py-9">
                            <div class="w-3/5 h-40 m-auto border-dashed border-white-500 border-2">
                                <div class="text-center py-3">Estado | Enviad-No enviado</div> <br>
                                <br>
                                <div class="px-2 inline">
                                    <button class="bg dark:bg-gray-600 bg-blue text-white-500 px-2 rounded-md">Enviar
                                        Archivo<i class="fas fa-arrow-circle-up text-yellow-400 px-2"></i></button>

                                </div>
                                <div class="px-2 inline">
                                    <button
                                        class="bg dark:bg-gray-600 bg-blue px-2 text-white-500 rounded-md focus:outline-none "
                                        wire:click="modalLink(1,{{ $tarea->id }})">link | vinculo
                                        <i class="fas fa-external-link-square-alt px-1 text-yellow-500"></i></button>
                                    <br><br>

                                </div>
                                <!-- <span class="dark:bg-gray-900 bg-indigo-500  text-xs text-white-500  rounded-full  ">**
                                    Los archivos deben ser menor de 5MB, por lo contrario solo link| vinculo del
                                    archivo</span>-->
                            </div>
                        </div>
                    </nav>
                    <br>
                @endif
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

    <br>
    <br>
    <br>
    <br>


</div>
