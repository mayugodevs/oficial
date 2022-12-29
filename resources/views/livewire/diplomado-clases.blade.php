<div class="dark:bg-gray-300 bg-white-300 xl:w-9/12 ml:w-9/12 md:w-9/12 lg:w-9/12 sm:w-full px-5  m-auto " x-data="{open :false}">

    <!--    <div class="text-white-500 text-left font-serif px-3 py-2">
        {{ $today }}
    </div>-->
    <div class="dark:bg-gray-300 bg-white-300 ">


        @foreach ($semanas as $semana)

            @php
                $estado = $today > $semana->fecha_inicio ? ($today > $semana->fecha_fin ? 'Finalizo' : 'Activo') : 'Proceso';
                $finalizo = $today > $semana->fecha_inicio ? ($today > $semana->fecha_fin ? true : false) : false;
                // $estad2 = 5 == 5 ? () : 'es falso';
            @endphp
            <!-- Line that connecting the box with the vertical line -->
            @if ($estado =='Activo')
                <div
                    class="dark:text-white-500 text-gray-700    text-left  flex justify-between
              px-6 py-2 dark:bg-greenactivo bg-white-900 text-white rounded mb-2  font-serif  ">
                    <div class=" ml:text-base lg:text-base md:text-base xl:text-base text-xs ">
                        Semana N° {{ $semana->semana }}
                        <span class="px-2 dark:bg-bdarkgreen bg-yellow-500 text-sm text-white-500 rounded-md mx-3">
                            {{ $estado }} </span>
                    </div>

                    <div class="text-right ">
                        <button class=" h-7 w-7 rounded-full focus:outline-none dark:bg-gray4 bg-gray100 " id="play"
                            x-on:click="open= !open">
                            <div><i class="fas fa-plus" id="icon"></i></div>

                        </button>
                    </div>


                </div>


            @else
                <div class="dark:text-white-500 text-gray-700    text-left  flex justify-between items-center
            xl:px-6  ml:px-6  lg:px-6  md:px-6 px-2   py-2 dark:bg-gray-900  bg-white-900 text-white rounded mb-2  font-serif text-base ">
                    <div class=" ml:text-base lg:text-base md:text-base xl:text-base text-base ">
                        Semana N° {{ $semana->semana }}
                        <span class="px-2 dark:bg-gray-600 bg-yellow-500 xl:text-sm ml:text-sm md:text-sm lg:text-sm text-sm text-white-500  rounded-md mx-3">
                            {{ $estado }} </span>
                    </div>

                    <div class="text-right  ml:text-base lg:text-base md:text-base xl:text-base text-xs ">
                        <button class=" h-7 w-7 rounded-full focus:outline-none dark:bg-gray4 bg-gray100 " id="play"
                            x-on:click="open= !open">
                            <div><i class="fas fa-plus" id="icon"></i></div>

                        </button>
                    </div>


                </div>


            @endif



            <div class=" mt-0 ">
                <nav x-show="open" x-on:click.away="open=false">

                    <div class="dark:bg-gray4 bg-white-700 rounded-md  ">

                        <div class="text-left my-2 py- px-2">
                            <div class="text-left text-xs inline   dark:text-white-500 text-gray-700 font-semibold">
                                Fecha Inicio {{ $semana->fecha_inicio }}
                            </div>
                            <span class="text-left inline dark:text-white-500 text-gray-700">/</span>
                            <div class="text-left text-xs inline  dark:text-white-500 text-gray-700 font-semibold">
                                Fecha Limite {{ $semana->fecha_fin }}
                            </div>
                        </div>

                        <div class="my-2 flex justify-between items-center w-full dark:bg-gray4 bg-white-900 py-1">
                            <div class=" py-2">
                                <div
                                    class="text-left  font-serif px-2  xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs dark:text-white-500 text-gray-700 rounded-md">
                                    Clase {{ $semana->semana }}
                                </div>
                                <div>
                                    @if (!$finalizo)
                                        <span class="px-2 bg-gray-800 rounded-md mx-3">
                                            En la semana correspondiente estara visible los materiales y clases
                                        </span>
                                    @endif
                                </div>

                            </div>
                            <div class="px-2  flex justify-between items-center py-1">
                                @foreach ($semana->diplomadoVivos as $vivo)
                                    @if ($finalizo)

                                        <div class="px-2">
                                            <button
                                                class="dark:bg-blueintense bg-blueintense font-semibold xl:text-sm ml:text-sm md:text-sm lg:text-sm text-xs text-white-500 rounded-md px-3 py-1.5 ">
                                                <a href="{{ $vivo->url }}" target="_bank">ver
                                                    Clase</a>
                                            </button>
                                        </div>
                                        <div class="xl:px-2 ml:px-2 lg:px-2 md:px-2 ">
                                            <button
                                                class="bg-green_hover   text-white-500 rounded-md xl:px-3 ml:px-3 lg:px-3 md:px-3 px-2 xl:py-1 ml:py-1  md:py-1  lg:py-1 py-0.5 font-semibold ">
                                                <a href="{{ $vivo->urlmaterial }}" target="_bank" class="xl:text-sm ml:text-sm md:text-sm lg:text-sm text-xs">recursos<i
                                                        class="fas fa-cloud-download-alt  text-white-500 "></i>
                                                </a>
                                            </button>
                                        </div>



                                    @endif
                                @endforeach

                            </div>



                        </div>


                    </div>
                </nav>
            </div>

    
        @endforeach
    </div>
    <script>
        document.getElementById('play').addEventListener('click', function() {
            var icon = document.getElementById('icon');
            icon.classList.toggle('fa-plus');
            icon.classList.toggle('fa-minus');
        })
    </script>

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
<br>
<br>
