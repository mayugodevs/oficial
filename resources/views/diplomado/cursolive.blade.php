@extends('layout')

@section('content')

    {{-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> --}}


    {{-- <style>
        .snap-x {
            scroll-snap-type: x mandatory;

            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }

        .snap-start {
            scroll-snap-align: start;
        }

    </style> --}}
    {{-- <div class="text-white-500 text-2xl grid grid-cols-8 ">
     <div class="col-start-2 xl:col-span-2 ml:col-span-2 lg:col-span-2 col-span-1">
        Curso Profesional
     </div>
     <div class="col-start-2 xl:col-span-3 ml:col-span-3 lg:col-span-3 col-span-1">
        {{$diplomado_grupo->titulo}}
     </div>
 </div> --}}
    {{-- <div
        class=" xl:w-11/12 lg:w-10/12 ml:w-9/12 w-full  xl:mx-auto xl:px-0 
    ml:px-0 lg:px-0 px-0  sm:px-3 xl:text-3xl ml:text-3xl lg:text-3xl text-2xl text-white-500 font-semibold ">
        Curso Profesional
    </div>
    <div
        class="xl:w-11/12 lg:w-10/12 ml:w-9/12 w-full  xl:mx-auto xl:px-0 
    ml:px-0 lg:px-0 px-0  sm:px-3 xl:text-3xl ml:text-3xl lg:text-3xl text-2xl text-white-500 font-semibold ">
        {{ $diplomado_grupo->titulo }}
    </div> --}}


    <div class="dark:bg-gray12 bg-indigo-50 ">
        <div class="xl:py-11  ml:py-11xl:py-11 lg:py-11 md:py-11  py-0">
            <div class="xl:py-6 ml:py-6 lg:py-6 md:py-6 py-3 ">

            </div>

        </div>

        <div
            class="grid xl:grid-cols-4  ml:grid-cols-4  lg:grid-cols-4  md:grid-cols-4 grid-cols-1  ml:w-9/12 lg:w-10/12 xl:w-11/12 w-full mx-auto items-end py-5">
            <div
                class="xl:col-span-4 ml:col-span-4 lg:col-span-4 md:col-span-4 col-span-1 flex xl:flex-row ml:flex-row md:flex-row flex-col justify-between  my-5 ">
                <div
                    class="xl:w-1/2 ml:w-1/2 lg:w-full w-full md:w-full xl:order-1 ml:order-1 md:order-1 order-2 px-2 flex flex-col justify-between">
                    <div class="justify-start">
                        <div class="">
                            <div
                                class="my-2 px-2 xl:text-3xl ml:text-3xl  lg:text-3xl md:text-3xl text-3xl dark:text-white-500 text-gray-500 font-semibold">
                                Curso Profecional
                            </div>

                            <div
                                class=" px-2 xl:text-3xl ml:text-3xl lg:text-3xl text-3xl  dark:text-white-500 text-gray-500 font-semibold">
                                {{ $diplomado_grupo->titulo }}
                            </div>
                        </div>
                        <div
                            class="px-2  xl:text-lg ml:text-lg lg:text-lg md:text-lg text-lg my-6 dark:text-white1 text-gray-500 font-serif ">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore perspiciatis accusamus
                            reiciendis
                            sit
                            ipsa aspernatur fuga modi voluptatum
                            nisi accusantium quam alias suscipit, cum pariatur aut nesciunt vero minus fugiat?
                        </div>
                    </div>

                    <div class="px-2">
                        <button
                            class="rounded-md focus:outline-none hover:bg-green_hover bg-greenactivo  transition ease-in duration-500 text-white-500  font-semibold px-5 py-2"><i
                                class="fa fa-shopping-cart"></i>
                            Incribete ahora por 150$
                        </button>
                    </div>
                </div>
                <div
                    class="xl:w-1/2 ml:w-1/2 relative lg:w-full md:w-full xl:order-2 ml:order-2 md:order-2 order-1 w-full px-3 justify-end  ">
                    <img class=" xl:h-80 ml:h-80 md:h-80 lg:h-80 h-48 mx-auto w-full"
                        src="https://www.plaremesa.net/wp-content/uploads/2020/10/Industria-metalu%CC%81rgica-2.jpg" alt="">

                    <div
                        class="absolute xl:top-32 ml:top-32 lg:top-32 md:top-32 top-20   xl:left-80 ml:left-80 lg:left-80 md:left-80 left-44 ">

                        <i class="fas fa-play-circle text-5xl text-green"></i>
                    </div>
                </div>

            </div>


            <div
                class="col-span-4 flex xl:flex-row ml:flex-row lg:flex-row md:flex-row flex-col gap-4 justify-between px-3 py-3">
                <div class="flex flex-row items-start dark:bg-gray11 bg-white1 w-full border border-indigo-400 py-2 ">
                    <div class="text-center"> <i
                            class="fas fa-calendar-alt text-xl dark:text-white-500 text-gray-500 px-3 "></i> </div>
                    <div class="flex flex-col item-end px-2">
                        <div class="dark:text-white-500 text-gray-500 font-semibold text-lg"> inicio de clase </div>

                        <div class="dark:text-white1 text-gray-500 font-semibold text-sm">
                            {{ $diplomado_grupo->inicio }}</div>
                    </div>

                </div>
                <div class="flex flex-row items-start dark:bg-gray11 bg-white1  w-full border border-indigo-400  py-2">
                    <div class="text-center"><i class="far fa-clock text-xl dark:text-white-500 text-gray-500 px-3"></i>
                    </div>
                    <div class="flex flex-col items-start px-2">
                        <div class="dark:text-white-500 text-gray-500 font-semibold text-lg ">Duracion</div>
                        <div class="dark:text-white1 text-gray-500 font-semibold text-sm">{{ $diplomado->duracion }}
                            <a class="text-blue" href="#">ver temario</a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row items-start dark:bg-gray11 bg-white1   w-full border border-indigo-400 py-2">
                    <div class="text-center"><i class="fas fa-tv text-xl dark:text-white-500 text-gray-500 px-3"></i>
                    </div>
                    <div class="flex flex-col item-end px-2">
                        <div class="dark:text-white-500 text-gray-500 font-semibold text-lg"> Modalidad</div>
                        <div class="dark:text-white1 text-gray-500 font-semibold text-sm">
                            {{ $diplomado->modalidad }}</div>
                    </div>
                </div>

                <div class="flex flex-row items-start dark:bg-gray11 bg-white1  w-full border border-indigo-400  py-2">
                    <div class="text-center"><i
                            class="fas fa-certificate text-xl dark:text-white-500 text-gray-500  px-3"></i></div>
                    <div class="flex flex-col item-end px-2">
                        <div class="dark:text-white-500 text-gray-500 font-semibold text-lg">Certificacion</div>
                        <div class="dark:text-white1 text-gray-500 font-semibold text-sm">requisitos</div>
                        <div class="dark:text-white1 text-gray-500 font-semibold text-sm">
                            {{ $diplomado->certificacion }}</div>
                    </div>
                </div>

            </div>




        </div>
    </div>


    <div class="dark:bg-gray14 bg-whiteheader">
       
        <div
            class="grid   xl:grid-cols-6 ml:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 grid-cols-1 ml:w-9/12 lg:w-10/12 xl:w-11/12 w-full mx-auto">


            <div
                class="xl:order-1  ml:order-1 md:order-1 order-2  xl:col-span-4 ml:col-span-4 lg:col-span-4 md:col-span-4 col-span-1  dark:bg-gray14 text-white-300 rounded-lg px-3 justify-start  ">


                {{-- informacion lateral --}}


                <div
                    class="w-full lateral gap-2  grid xl:grid-cols-6 ml:grid-cols-6 lg:grid-cols-6 md:grid-cols-6 grid-cols-3 py-4 my-6 sticky z-50 top-24 dark:bg-gray14 bg-whiteheader text-white-300 rounded-md   ">


                   {{--  <div class="swiper-container w-56">
                        <div class="swiper-wrapper "> --}}
                            
                        {{-- </div>
                    </div> --}}
                   {{--  <div class="border-b-4 dark:text-white-500 text-gray-500 focus:border-blue">
                                
                    </div> --}}
                   
                        <div class="mb-1 col-span-1 ">
                            <a  href="mejora-vivo#iddescripcion"
                                class="dark:text-white-500 w-full text-gray-500 xl:dark:bg-gray14 ml:dark:bg-gray14 md:dark:bg-gray14 lg:dark:bg-gray14  dark:bg-gray11 xl:bg-whiteheader ml:bg-whiteheader md:bg-whiteheader lg:bg-whiteheader  bg-celeste xl:rounded-none lg:rounded-none md:rounded-none ml:rounded-none rounded-md xl:border-b-4 ml:border-b-4 lg:border-b-4 md:border-b-4 border-0 focus:border-blue py-1 
                                 xl:text-lg ml:text-lg lg:text-lg md:text-lg text-medio font-semibold focus:outline-none dark:focus:text-blue focus:text-blue px-3">
                                Descripcion
                            </a>

                            
                        </div>

                        <div class="mb-1 col-span-1  ">
                            <a    href="mejora-vivo#idinformacion"
                                class="dark:text-white-500 text-gray-500 sm:border-b-4  xl:dark:bg-gray14 ml:dark:bg-gray14 md:dark:bg-gray14 lg:dark:bg-gray14  dark:bg-gray11 xl:bg-whiteheader ml:bg-whiteheader md:bg-whiteheader lg:bg-whiteheader  bg-celeste xl:rounded-none lg:rounded-none md:rounded-none ml:rounded-none rounded-md focus:border-blue py-1 xl:text-lg ml:text-lg lg:text-lg md:text-lg text-medio dark:focus:text-blue font-semibold focus:outline-none focus:text-blue px-3">
                                Informacion
                            </a>
                        </div>

                        <div class="mb-1 col-span-1  ">
                            <a href="mejora-vivo#idmetodologia"
                                class="dark:text-white-500 w-full text-gray-500 sm:border-b-4  xl:dark:bg-gray14 ml:dark:bg-gray14 md:dark:bg-gray14 lg:dark:bg-gray14  dark:bg-gray11 xl:bg-whiteheader ml:bg-whiteheader md:bg-whiteheader lg:bg-whiteheader  bg-celeste xl:rounded-none lg:rounded-none md:rounded-none ml:rounded-none rounded-md   focus:border-blue py-1 xl:text-lg ml:text-lg lg:text-lg md:text-lg text-medio font-semibold dark:focus:text-blue focus:outline-none focus:text-blue px-2 ">
                                Metodología
                          
                            
                        </a>
                        </div>
                        <div class="mb-1  col-span-1 ">
                            <a href="mejora-vivo#idinstructor"
                                class="dark:text-white-500 text-gray-500 sm:border-b-4 xl:dark:bg-gray14 ml:dark:bg-gray14 md:dark:bg-gray14 lg:dark:bg-gray14  dark:bg-gray11 xl:bg-whiteheader ml:bg-whiteheader md:bg-whiteheader lg:bg-whiteheader  bg-celeste xl:rounded-none lg:rounded-none md:rounded-none ml:rounded-none rounded-md focus:border-blue py-1 xl:text-lg ml:text-lg lg:text-lg md:text-lg text-medio dark:focus:text-blue font-semibold focus:outline-none focus:text-blue px-3">
                                Instructores
                            </a>
                        </div>
                       
                        {{-- <div class="mb-1">
                            <button
                                class="text-white-500 xl:text-lg ml:text-lg lg:text-lg md:text-lg text-medio font-semibold focus:outline-none focus:text-blue">
                                Empresas que Respaldan
                            </button>
                              </div> --}}
                        <div class="mb-1 col-span-1  ">
                            <a  href="mejora-vivo#idtestimonios"
                                class="dark:text-white-500 text-gray-500 sm:border-b-4  xl:dark:bg-gray14 ml:dark:bg-gray14 md:dark:bg-gray14 lg:dark:bg-gray14  dark:bg-gray11 xl:bg-whiteheader ml:bg-whiteheader md:bg-whiteheader lg:bg-whiteheader  bg-celeste xl:rounded-none lg:rounded-none md:rounded-none ml:rounded-none rounded-md focus:border-blue py-1 xl:text-lg ml:text-lg lg:text-lg md:text-lg text-medio font-semibold dark:focus:text-blue  focus:outline-none focus:text-blue px-3">
                                Testimonios
                            </a>
                        </div>
                        <div class="mb-1  col-span-1  ">
                            <a  href="mejora-vivo#idpreguntas"
                                class="dark:text-white-500 text-gray-500 sm:border-b-4  xl:dark:bg-gray14 ml:dark:bg-gray14 md:dark:bg-gray14 lg:dark:bg-gray14  dark:bg-gray11 xl:bg-whiteheader ml:bg-whiteheader md:bg-whiteheader lg:bg-whiteheader  bg-celeste xl:rounded-none lg:rounded-none md:rounded-none ml:rounded-none rounded-md  focus:border-blue py-1 xl:text-lg ml:text-lg lg:text-lg md:text-lg text-medio font-semibold dark:focus:text-blue focus:outline-none focus:text-blue px-3">
                                Preguntas 
                            </a>
                        </div>
                   


                </div>


                {{-- descripcion de los cursos --}}

                <div class="dark:bg-gray15 bg-white2 rounded-lg px-6  py-3" id="iddescripcion">
                    <div class="mb-2">
                        <div
                            class="font-semibold font-inter xl:text-3xl ml:text-3xl lg:text-3xl md:text-2xl text-2xl dark:text-white-500 text-gray-500">
                            Información de la Especialidad
                        </div>
                        <div class="font-serif xl:text-lg ml:text-lg lg:text-lg md:text-lg text-sm text-celeste1 my-2 ">
                            {{ $diplomado->informacion }}
                        </div>
                    </div>
                    <div class="grid xl:grid-cols-2 ml:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 grid-cols-1  ">
                        <div class="col-span-1">
                            <div class="mb-2">
                                <div
                                    class="font-semibold xl:text-2xl ml:text-2xl lg:text-2xl md:text-2xl text-2xl dark:text-white-500 text-gray-500 py-3">
                                    Lo que aprenderas
                                </div>
                                <div class="font-serif xl:text-lg ml:text-lg lg:text-lg md:text-lg text-sm text-celeste1">
                                    {{ $diplomado->metodologia }}
                                </div>

                            </div>
                            <div class="mb-2">
                                <div class="font-serif xl:text-xl ml:text-xl lg:text-xl md:text-xl text-sm text-celeste1">
                                    <i class="fas fa-check text-green"></i> Planificacion de la produccion
                                </div>

                            </div>
                            <div class="mb-2">
                                <div class="font-serif xl:text-xl ml:text-xl lg:text-xl md:text-xl text-sm text-celeste1">
                                    <i class="fas fa-check text-green"></i> Planificacion de la produccion
                                </div>

                            </div>
                            <div class="mb-2">
                                <div class="font-serif xl:text-xl ml:text-xl lg:text-xl md:text-xl text-sm text-celeste1">
                                    <i class="fas fa-check text-green"></i> Planificacion de la produccion
                                </div>

                            </div>
                        </div>
                        <div class="col-span-1">
                            <div
                                class="font-semibold xl:text-2xl ml:text-2xl lg:text-2xl md:text-2xl text-2xl dark:text-white-500 text-gray-500 py-3">
                                Consideraciones Previas
                            </div>
                            <div class="flex flex-row justify-start items-center mb-4">
                                <div class="px-2">

                                    <i class="fas fa-user  text-green text-xl"></i>
                                </div>
                                <div class="flex flex-col px-2">
                                    <div class="dark:text-white-500 text-gray-500 font-semibold text-lg">
                                        ¿A quien esta dirigido?
                                    </div>
                                    <div class="text-celeste1 font-serif text-lg">
                                        A todo el mundo que quiera aprender
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row justify-start items-center mb-4">
                                <div class="px-2">

                                    <i class="fa fa-wrench text-green text-xl"
                                        aria-hidden="true"></i>
                                </div>
                                <div class="flex flex-col px-2 ">
                                    <div class="dark:text-white-500 text-gray-500 font-semibold text-lg">
                                        Herramienta
                                    </div>
                                    <div class="text-celeste1 font-serif text-lg">
                                        Excel
                                    </div>
                                    <div class="text-celeste1 font-serif text-lg">
                                        Paqueteria Office
                                    </div>
                                    <div class="text-celeste1 font-serif text-lg">
                                        Zoom
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-row justify-start items-center mb-2">
                                <div class="px-2">
                                    <i class="fas fa-lightbulb text-green text-xl"></i>

                                </div>
                                <div class="flex flex-col px-2">
                                    <div class="dark:text-white-500 text-gray-500 font-semibold text-lg">
                                        Conocimiento previo
                                    </div>
                                    <div class="text-celeste1 font-serif text-lg">
                                        No necesitas ningun conocimiento previo
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                {{-- informacion de enseñansa --}}
                <div class="dark:bg-gray15 bg-white2  my-5 px-6" id="idinformacion" >
                    <div class="py-2">
                        <div
                            class="font-semibold font-inter xl:text-3xl ml:text-3xl lg:text-3xl md:text-2xl text-2xl py-2 dark:text-white-500 text-gray-500">
                            Temario de la Especialidad
                        </div>
                        <div class="font-serif xl:text-lg ml:text-lg lg:text-lg md:text-lg text-sm text-celeste1">
                            {{ $diplomado->informacion }}
                        </div>


                        @forelse ($modulos as $modulo)
                            <div class="dark:bg-gray11 bg-white1 my-4 ">
                                <button
                                    class="font-serif xl:text-lg ml:text-lg py-2 px-2 w-full   lg:text-lg md:text-lg focus:outline-none text-lg text-white-500 "
                                    id="play1">
                                    <div class="flex justify-start items-center dark:text-white-500 text-gray-500">
                                        <i class="fas fa-angle-down" id="icon2"></i>
                                        <div class="px-1">{{ $modulo->modulo }}</div>
                                    </div>
                                </button>
                            </div>

                            @forelse ($modulo->diplomadoContenidos as $contenido)
                                <div class="font-serif xl:text-lg ml:text-lg lg:text-lg md:text-lg  text-lg text-celeste1 hidden"
                                    id="icon1">
                                    {{ $contenido->contenido }}
                                </div>

                            @empty
                                vvv
                            @endforelse

                        @empty
                            ss
                        @endforelse

                        <div class="py-3">
                            <button
                                class="text-white-500 text-lg font-semibold px-2 py-1 bg-blue rounded-lg focus:outline-none">
                                <i class="fas fa-file-download text-white-500 px-2 "></i> Quiero el temario
                            </button>
                        </div>


                    </div>
                </div>



                {{-- metodologia de aprendizaje --}}
                <div class="dark:bg-gray14 bg-whiteheader  "  id="idmetodologia">
                    <div class="py-3">
                        <div class="text-xs font-normal  dark:text-white-500 text-gray-500">METODOLOGIA QUE FUNCIONA
                        </div>
                        <div
                            class="font-semibold font-inter xl:text-3xl ml:text-3xl lg:text-3xl md:text-2xl text-2xl   dark:text-white-500 text-gray-500">
                            Metodología de aprendizaje
                        </div>
                    </div>
                    <div class="grid xl:grid-cols-3 ml:grid-cols-3 lg:grid-cols-3 md:grid-cols-3 grid-cols-1 gap-4 my-3 ">

                        <div class="col-span-1 dark:bg-gray15 bg-white2 px-4 ">
                            <div class="py-4  "><img class="h-10 w-10 rounded-full"
                                    src="../images/metodologia/Icon.jpg" alt="">
                            </div>
                            <div class="">
                                <div class="font-bold text-xl dark:text-white-500 text-gray-500">
                                    clases en vivo
                                </div>

                                <div class="font-serif text-medio dark:text-white-500 text-gray-500 flex my-3">
                                    <div><i class="fas fa-check"></i></div>
                                    <div class="px-3 text-celeste1"> 12 horas de class en vivo por zoom</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-span-1 dark:bg-gray15 bg-white2 px-4  ">
                            <div class=" py-4"><img class="h-10 w-10 rounded-full"
                                    src="../images/metodologia/Icon2.png" alt=""></div>
                            <div class="">
                                <div class="font-bold text-xl dark:text-white-500 text-gray-500">
                                    Mentoría personalizada
                                </div>
                                <div>
                                    <div class="font-serif  text-celeste1 my-3">
                                        Se desarrollará mediante clases en vivo y mentoría personalizada, y seguimiento
                                        continuo. Adicional a ello
                                        tendrás materiales de ayuda, plantillas, formatos y otros
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 dark:bg-gray15 bg-white2 px-4  ">
                            <div class=" py-4"><img class="h-10 w-10 rounded-full"
                                    src="../images/metodologia/Icon3.png" alt=""></div>
                            <div class="">
                                <div class="font-bold text-xl dark:text-white-500 text-gray-500">
                                    Seguimiento continuo
                                </div>
                                <div>
                                    <div class="font-serif text-medio text-celeste1 my-3">

                                        Contarás con un asesor asignado que estara acompañandote en tu formación
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 dark:bg-gray15 bg-white2 px-4  ">
                            <div class="py-4 "><img class="h-10 w-10 rounded-full"
                                    src="../images/metodologia/Icon4.png" alt=""></div>
                            <div class="">
                                <div class="font-bold text-xl dark:text-white-500 text-gray-500">
                                    Acceso a plataforma online
                                </div>
                                <div class="flex flex-col my-3">
                                    <div class="font-serif text-medio text-celeste1 flex">
                                        <div><i class="fas fa-check"></i></div>
                                        <div class="px-3"> Recursos descargables</div>
                                    </div>
                                    <div class="font-serif text-medio text-celeste1 flex">
                                        <div><i class="fas fa-check"></i></div>
                                        <div class="px-3">plantillas </div>
                                    </div>
                                    <div class="font-serif text-medio text-celeste1 flex ">
                                        <div>
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <div class="px-3">
                                            Documentos de apoyo para tu certificación
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 dark:bg-gray15 bg-white2 px-4  ">
                            <div class="py-4 "><img class="h-10 w-10 rounded-full"
                                    src="../images/metodologia/Icon5.png" alt=""></div>
                            <div class="">
                                <div class="font-bold text-xl dark:text-white-500 text-gray-500">
                                    Evaluacíon
                                </div>
                                <div>
                                    <div class="font-serif text-medio text-celeste1 my-3 ">
                                        Por cada semana de clase evaluaremos tu evolución mediante un examen
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 dark:bg-gray15 bg-white2 px-4  ">
                            <div class=" py-4"><img class="h-10 w-10 rounded-full"
                                    src="../images/metodologia/Icon6.png" alt=""></div>
                            <div class="">
                                <div class="font-bold text-xl dark:text-white-500 text-gray-500">
                                    Workshops grupales
                                </div>
                                <div>
                                    <div class="font-serif text-medio text-celeste1 my-3">
                                        Por cada semana de clase evaluaremos tu evolución mediante un examen
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                {{-- Instructores --}}

                <div class="dark:bg-gray14 bg-whiteheader  my-5 " id="idinstructor">
                    <div class="py-3">
                        <div class="text-xs font-normal font-nunito dark:text-white-500 text-gray-500">METODOLOGIA QUE FUNCIONA</div>
                        <div
                            class="font-semibold font-inter xl:text-3xl ml:text-3xl lg:text-3xl md:text-2xl text-2xl dark:text-white-500 text-gray-500">
                            Sobre nuestros especialistas
                        </div>
                    </div>
                    <div class="  my-9 ">

                        <div class=" flex xl:flex-row ml:flex-row lg:flex-row md:flex-row flex-col  rounded-lg  ">
                            @forelse ($docentes as $docente)
                                <div
                                    class="my-7 py-2 dark:bg-gray15 bg-white2 border-t-4 border-green  rounded-md xl:w-1/3 ml:w-1/3 lg:w-1/3 md:w-1/3 w-full mx-1 ">
                                    <div class="flex flex-col justify-center items-center relative ">
                                        <div class="px-2">
                                            <img class="xl:h-20 xl:w-20 ml:h-20 ml:w-20 absolute lg:h-20 lg:w-20 md:h-16 md:w-16 h-20 w-20  -top-12 xl:left-24 ml:left-24 lg:left-24 md:left-24 left-32  rounded-full  border-2 border-green"
                                                src="https://yt3.ggpht.com/ytc/AKedOLT0hVG8YLWaxIFKvkTyg08-OfYcEiBNJH2vOjCzSQ=s900-c-k-c0x00ffffff-no-rj"
                                                alt="">

                                        </div>
                                        <div class="flex flex-col justify-end h-24">
                                            <div class="font-serif text-sm dark:text-white-500 text-gray-500 my-2">
                                                {{ $docente->trabajador->nombres }}
                                            </div>

                                            <div class="dark:text-white-500 text-gray-500 font-serif text-sm text-center">
                                                cto Myugo
                                            </div>


                                        </div>
                                        <div class="px-2 xl:h-20 ml:h-20 lg:h-20 md:h-20 h-14 my-2  ">
                                            <div class="font-serif  text-sm dark:text-gray100 text-gray-500">
                                                {{ $docente->trabajador->especialidad }}
                                            </div>


                                        </div>
                                        <div class="text-center  py-4">
                                            <a href="#" class="text-blue"> ver perfil de linkedin</a>
                                        </div>
                                    </div>

                                </div>
                            @empty
                                vvv
                            @endforelse
                        </div>


                    </div>




                </div>

                {{-- comentario de estudiantes --}}
                <div class="dark:bg-gray14 bg-whiteheader " id="idtestimonios">

                    <div class="py-1">

                        <div
                            class="font-semibold font-inter  xl:text-3xl ml:text-3xl lg:text-3xl md:text-2xl text-2xl dark:text-white-500 text-gray-500">
                            Lo que nuestros estudantes dicen
                        </div>
                    </div>
                    <div class="grid xl:grid-cols-2 ml:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 my-5 gap-3">
                        <div class="col-span-1 dark:bg-gray15 bg-white2 ">
                            <div class="flex ">
                                <div class="w-1/5 mx-4 py-4">
                                    <img class="h-16 w-16 rounded-full"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgmtkUOtBbfsbjusLzAH1We1ipfD1Ygsvong&usqp=CAU"
                                        alt="">
                                </div>
                                <div class="w-4/5 flex flex-col my-4 ">
                                    <div class="px-1 justify-center dark:text-white-500 text-gray-500 ">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptas ad
                                        praesentium earum excepturi fugiat cumque veniam molestias!
                                    </div>
                                    <div class="my-3 dark:text-white-500 text-gray-500 font-semibold">
                                        graciela fenandez
                                    </div>

                                </div>


                            </div>

                        </div>
                        <div class="col-span-1 dark:bg-gray15 bg-white2 ">
                            <div class="flex ">
                                <div class="w-1/5 mx-4 py-4">
                                    <img class="h-16 w-16 rounded-full"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgmtkUOtBbfsbjusLzAH1We1ipfD1Ygsvong&usqp=CAU"
                                        alt="">
                                </div>
                                <div class="w-4/5 flex flex-col my-4 ">
                                    <div class="px-1 justify-center dark:text-white-500 text-gray-500">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, voluptas ad
                                        praesentiumm earumm excepturi fugiat cumque veniam molestias!
                                    </div>
                                    <div class="my-3 dark:text-white-500 text-gray-500 font-semibold">
                                        graciela fenandez
                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>
                </div>



                {{-- preguntas frecuentes --}}
                <div class="dark:bg-gray14 bg-whiteheader my-5 " id="idpreguntas">
                    <div
                        class="xl:text-3xl font-inter ml:text-3xl lg:text-3xl md:text-2xl text-2xl dark:bg-gray14 bg-white-300 dark:text-white-500 text-gray-500 font-semibold py-2 ">
                        Preguntas Frecuentes sobre los cursos en vivo
                    </div>
                    @forelse ($preguntasFrec as $pregunta)
                        <button
                            class="px-2 dark:bg-gray11 bg-white1 dark:text-white-500 text-gray-500 text-xl font-semibold py-2 w-full focus:outline-none my-4 flex justify-between"
                            id="play3">
                            <div class="text-left px-2 ">
                                {{ $pregunta->pregunta }}
                            </div>
                            <div>
                                <i class="fas fa-plus dark:text-white-500 text-gray-500 xl px-2" id="icon4"></i>
                            </div>
                        </button>

                        <div class="px-2 text-celeste1 font-serif  hidden  " id="icon3">
                            {{ $pregunta->rpta }}
                        </div>

                    @empty
                        pfff
                    @endforelse
                    <br>
                </div>



            </div>

            <div class="col-span-2 px-4 xl:order-2 ml:order-2 md:order-2 order-1 my-6">
                <div class="w-full px-4 py-4 dark:bg-gray15 bg-white2 rounded-xl">
                    <div class="flex justify-between sm:justify-start items-center ">

                        <div>
                            <span
                                class="dark:text-white-500 text-gray-300 font-semibold xl:text-3xl ml:text-3xl lg:text-3xl md:text-3xl text-3xl  ">100
                                USD</span>

                        </div>
                        <div>
                            <span
                                class="text-lg dark:text-white-500 text-gray-300 font-semibold line-through xl:px-4 ml:px-4 lg:px-4 md:px-4  px-2">S/
                                200</span>

                        </div>
                        <div>
                            <span
                                class="text-medio text-white-500  font-semibold rounded-md py-1 xl:px-4 ml:px-4 lg:px-4 md:px-4 px-2 bg-indigo-600 ">50%
                                Dcto</span>
                        </div>

                    </div>
                    <div class="flex justify-start items-center py-3">
                        <div
                            class="text-center text-celeste1 font font-semibold xl:text-xl ml:text-xl lg:text-xl md:text-xl text-sm  ">
                            <i
                                class="far fa-clock xl:text-xl ml:text-xl lg:text-xl md:text-xl text-sm  text-celeste1 px-1 "></i>la
                            oferta termina en:
                        </div>
                        <div class="text-celeste1 font-semibold xl:text-xl ml:text-xl lg:text-xl md:text-xl text-sm px-1 "
                            id="clock"></div>

                    </div>
                    <div class=" py-3">
                        <button
                            class="rounded-md w-full focus:outline-none hover:bg-green_hover bg-greenactivo  transition ease-in duration-500 text-white-500 font-semibold px-1 py-2">
                            Incribete ahora
                        </button>
                    </div>
                    <div class="dark:text-white-500 text-gray-300 text-medio font-semibold py-2">
                        ¿tienes dudas? ¿Quieres capacitar a tu equipo?
                    </div>
                    <div class=" py-2">
                        <button
                            class="rounded-md w-full focus:outline-none hover:text-gray-700 dark:hover:text-gray-500 dark:text-celeste text-gray-500 hover:bg-celeste bg-transparent text-lg border-celeste border-4 transition ease-in duration-500  font-semibold px-3 py-2">
                            <i class="fa fa-envelope dark:text-celeste text-gray-500 dark:hover:text-gray-700 "
                                aria-hidden="true"></i>
                            Comunicame con un asesor
                        </button>
                    </div>

                    <div class="  text-center">
                        <a class="text-gray100" href="">¿tienes un cupon?</a>
                    </div>



                </div>

                <div class="w-full  mx-auto">

                    <div class="">
                        <br>
                        <div class="px-5 dark:text-white-500 text-gray-300  font-inter font-normal text-lg"> Este Curso Incluye</div>
                        <br>
                        <div class="flex xl:px-5 ml:px-5 lg:px-5 md:px-5 px-2 mb-4">
                            <div class="px-3"> <i
                                    class="fas fa-file-download dark:text-white-500 text-gray-300 text-xl"></i></div>
                            <div class="dark:text-white-500  text-gray-500 font-inter font-normal text-lg px-3">21 horas de video bajo demanada
                            </div>

                        </div>
                        <div class="flex xl:px-5 ml:px-5 lg:px-5 md:px-5 px-2 mb-4">
                            <div class="px-3"> <i
                                    class="fas fa-file-download dark:text-white-500 text-gray-300 text-xl"></i></div>
                            <div class="dark:text-white-500  text-gray-500 font-inter font-normal text-lg px-3">recursos descargables</div>

                        </div>

                        <div class="flex items-end xl:px-5 ml:px-5 lg:px-5 md:px-5 px-2 mb-4">
                            <div class="px-3"> <i
                                    class="fas fa-user text-sm dark:text-white-500 text-gray-300"></i></div>
                            <div class="dark:text-white-500  text-gray-500 font-inter font-normal text-lg px-3">120 inscritos</div>

                            <div class="px-5">
                                <button
                                    class="rounded-md bg-red-500 text-white-500  font-semibold text-lg px-4 focus:outline-none">
                                    cupos limitados
                                </button>
                            </div>

                        </div>
                        <div class="flex xl:px-5 ml:px-5 lg:px-5 md:px-5 px-2 mb-4">
                            <div class="px-3"> <i
                                    class="fas fa-tv text-lg dark:text-white-500 text-gray-300 "></i></div>
                            <div class="dark:text-white-500  text-gray-500 font-inter font-normal text-lg px-2">modalidad</div>

                        </div>
                        <div class="dark:text-white-500 text-gray-300 text-2xl font-inter font-bold py-2">
                            VALORAMOS TU TIEMPO
                        </div>
                        <div class="px-2 py-2">
                            <img src="https://www.mayugo.net/asset/img/certif.png" alt="">
                        </div>
                        <div class="text-2xl font-inter font-bold dark:text-white-500  text-gray-500  py-2 my-2 ">
                            OTROS CURSOS EN VIVO
                        </div>

                        <div class="grid grid-cols-2 py-2">
                            <div class="col-span-1">
                                <div>
                                    <img src="https://www.mayugo.net/admin/images/miniaturas/finanzas.png" alt="">
                                </div>


                            </div>
                            <div class="flex flex-col justify-between col-span-1 px-2">
                                <div class="text-sm dark:text-white-500 text-gray-300 font-semibold">
                                    ingenieria de costos aplicado ala industria
                                </div>
                                <div class="flex items-center ">
                                    <div>
                                        <img class="xl:h-10 xl:w-10 ml:h-10 ml:w-10 md:h-10 md:w-10 lg:h-10 lg:w-10 h-7 w-7 rounded-full"
                                            src="https://pbs.twimg.com/profile_images/1153100137637588992/7WT3jPWx_400x400.jpg"
                                            alt="">
                                    </div>
                                    <div class="text-sm dark:text-white-500 text-gray-300 font-serif px-1">
                                        franklin espinoza
                                    </div>
                                </div>
                                <div class="flex items-center  py-1">
                                    <div class="text-center"> <i
                                            class="fas fa-calendar-alt xl:text-sm ml:text-sm lg:text-sm md:text-sm text-xs dark:text-white-500 text-gray-300 "></i>
                                    </div>
                                    <div class="xl:text-sm ml:text-sm lg:text-sm md:text-sm text-xs  dark:text-white-500 text-gray-300 font-serif px-2">
                                        12 de abril/7-9pm GTM-5
                                    </div>
                                </div>

                            </div>



                        </div>

                        <div class="grid grid-cols-2 py-2">
                            <div class="col-span-1">
                                <div class="">
                                    <img class="relative"
                                        src="https://www.mayugo.net/admin/images/miniaturas/lean-manufacturing.png" alt="">


                                </div>



                            </div>
                            <div class="flex flex-col justify-between col-span-1 px-2">
                                <div class="text-sm dark:text-white-500 text-gray-300 font-semibold">
                                    ingenieria de costos aplicado ala industria
                                </div>
                                <div class="flex items-center ">
                                    <div>
                                        <img class="xl:h-10 xl:w-10 ml:h-10 ml:w-10 md:h-10 md:w-10 lg:h-10 lg:w-10 h-7 w-7 rounded-full "
                                            src="https://pbs.twimg.com/profile_images/1153100137637588992/7WT3jPWx_400x400.jpg"
                                            alt="">
                                    </div>

                                    <div class="text-sm dark:text-white-500 text-gray-300 font-serif px-1">
                                        franklin espinoza
                                    </div>
                                </div>
                                <div class="flex items-center py-1">
                                    <div class="text-center"> <i
                                            class="fas fa-calendar-alt xl:text-sm ml:text-sm lg:text-sm md:text-sm text-xs  dark:text-white-500 text-gray-300 "></i>
                                    </div>
                                    <div class="xl:text-sm ml:text-sm lg:text-sm md:text-sm text-xs  dark:text-white-500 text-gray-300 font-serif px-2">
                                        12 de abril/7-9pm GTM-5
                                    </div>

                                </div>

                            </div>



                        </div>
                        <div class="grid grid-cols-2 py-2">
                            <div class="col-span-1">
                                <div>
                                    <img src="https://www.mayugo.net/admin/images/miniaturas/herramientas-de-calidad.png"
                                        alt="">
                                </div>


                            </div>
                            <div class="flex flex-col justify-between col-span-1 px-2">
                                <div class="text-sm dark:text-white-500 text-gray-300 font-semibold">
                                    ingenieria de costos aplicado ala industria
                                </div>
                                <div class="flex items-center ">
                                    <div>
                                        <img class="xl:h-10 xl:w-10 ml:h-10 ml:w-10 md:h-10 md:w-10 lg:h-10 lg:w-10 h-7 w-7 rounded-full"
                                            src="https://pbs.twimg.com/profile_images/1153100137637588992/7WT3jPWx_400x400.jpg"
                                            alt="">
                                    </div>
                                    <div class="text-sm dark:text-white-500 text-gray-300 font-serif px-1">
                                        franklin espinoza
                                    </div>
                                </div>
                                <div class="flex items-center py-1">
                                    <div class="text-center"> <i
                                            class="fas fa-calendar-alt xl:text-sm ml:text-sm lg:text-sm md:text-sm text-xs  dark:text-white-500 text-gray-300 "></i>
                                    </div>
                                    <div class="xl:text-sm ml:text-sm lg:text-sm md:text-sm text-xs  dark:text-white-500 text-gray-300 font-serif px-2">
                                        12 de abril/7-9pm GTM-5
                                    </div>
                                </div>

                            </div>



                        </div>

                    </div>

                </div>
            </div>
        </div>



        <script>
            var play1 = document.getElementById('play1');
            var icon1 = document.getElementById('icon1');
            var play3 = document.getElementById('play3');
            var icon3 = document.getElementById('icon3');
            var play2 = document.getElementById('play2');
            var icon2 = document.getElementById('icon2');
            var icon4 = document.getElementById('icon4');


            play1.addEventListener('click', function() {
                // icon.classList.remove('hidden');
                /*   icon1.classList.remove('hidden'); */
                icon1.classList.toggle('hidden');
                icon2.classList.toggle('fa-angle-up')

            });



            play3.addEventListener('click', function() {
                // icon.classList.remove('hidden');
                icon3.classList.toggle('hidden');
                icon4.classList.toggle('fa-minus')
            });



            /*   play3.addEventListener('click',function(){
                 // icon.classList.remove('hidden');
                  icon3.classList.toggle('hidden');});  */
        </script>



        <script>
            const getRemainingTime = deadline => {
                let now = new Date(),
                    remainTime = (new Date(deadline) - now + 1000) / 1000,
                    remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
                    remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
                    remainHours = ('0' + Math.floor(remainTime / 3600 % 24)).slice(-2),
                    remainDays = Math.floor(remainTime / (3600 * 24));

                return {
                    remainSeconds,
                    remainMinutes,
                    remainHours,
                    remainDays,
                    remainTime
                }
            };

            const countdown = (deadline, elem, finalMessage) => {
                const el = document.getElementById(elem);

                const timerUpdate = setInterval(() => {
                    let t = getRemainingTime(deadline);
                    el.innerHTML = `${t.remainDays}d:${t.remainHours}h:${t.remainMinutes}m:${t.remainSeconds}s`;

                    if (t.remainTime <= 1) {
                        clearInterval(timerUpdate);
                        el.innerHTML = finalMessage;
                    }

                }, 1000)
            };

            countdown('Dec 31 2022 21:34:40 GMT-0500', 'clock', '¡Ya empezó!');
        </script>

      {{--   <script>
            var mySwiper = new Swiper('.swiper-container');
        </script> --}}


    @endsection
