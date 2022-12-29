<div>
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <style>
        .letra {
            font-size: 6.8px
        }

        .clasebarra::-webkit-scrollbar {
            display: none;

        }
    </style>
    
    <div class="bg-whitetext dark:bg-gray14 sm:pt-20 pt-36 xl:pt-0 flex items-center flex-col w-full">
        <section class="bg-auto bg-no-repeat bg-center">
            <main class="mx-auto  containermygo">
                <div class="grid grid-cols-1 md:grid-cols-1 xl:grid-cols-2 gap-4 xl:px-0 ml:px-0 lg:px-6 md:px-0 px-4">
                    <div class="flex-col items-center self-center pb-10 md:pb-0  ">
                        <h3
                            class=" xl:pt-28 ml:pt-0 lg:pt-20 md:pt-20 pt-0  font-bold leading-12 lg:justify-left justify-center text-center xl:text-left tracking-tight font-inter text-gray-500 dark:text-whitetext sm:text-5xl text-4xl">
                            Certifícate en los cursos de mayor demanda en la industria
                        </h3>

                        <div
                            class="font-inter text-lg text-center leading-7 lg:text-left font-medium dark:text-borderconcours text-txtcommentply my-6 ">
                            Potencia tus habilidades tecnicas y esenciales con cursos efectivos de capacitacion
                            empresarial
                            online
                        </div>
                        {{-- CUANDO EL USUARIO ESTA LOGUEADO --}}

                        <div class="flex sm:flex-row flex-col lg:justify-start justify-center  mt-12 ">
                            <div class="sm:mr-2 mr-0 ">
                                <button
                                    class="rounded-md text-green_especialidad focus:outline-none bg-bgbtngreen py-2 px-5 w-full">
                                    Comienza gratis
                                </button>
                            </div>

                            <div class="sm:ml-2 ml-0 sm:pt-0 pt-4">
                                <button
                                    class="w-full font-medium rounded-md border-2 border-bgbtngreen focus:outline-none bg-transparent text-bgbtngreen px-5 py-1.5">
                                    Ver cursos
                                </button>
                            </div>
                        </div>
                        @auth
                            <div class="lg:text-left text-center lg:justify-center justify-center">
                                <x-usuario class="" iduser="{{ Auth::user()->idalum }}" tipo="home" />
                            </div>
                        @endauth
                    </div>
                    <div>
                        <div class="overflow-hidden sm:pb-0 pb-11 lg:flex hidden">

                            <img src=" {{ asset('images/metodologia/imageportada.png') }}"
                                style="clip-path: polygon(14% 0, 100% 0%, 100% 100%, 0% 100%);">
                        </div>
                    </div>
                </div>
            </main>
        </section>
       

    </div>
    <div class="lg:hidden flex">
        <img class="bg-cover" src="{{ asset('images/metodologia/imagehome1.png') }}" alt="">
    </div>

    <section class="bg-celestelanding dark:bg-pricingdark flex justify-center  md:px-0">
        <div class="flex containermygo">
            <div class="  sm:col-span-6 md:col-span-6 py-2 md:py-24 ">
                <div class="ml:px-0 xl:px-0 lg:px-4 md:px-8 sm:px-0 px-4">
                    <div
                        class="font-inter text-sixteen font-bold  text-center leading-7 dark:text-checkpricingdark text-bcklightbuscador sm:pt-0 pt-14 text-xl pb-3">
                        Educacion que si funciona
                    </div>

                    <div
                        class="font-inter font-bold text-txtnamecomntpkyr text-center dark:text-bgprogresb sm:text-4xl text-3xl pb-3">
                        ¡ No postergues mas tu educación !
                    </div>
                    <div
                        class="font-inter text-gray-600 font-normal leading-7 sm:text-lg text-sixteen text-center dark:text-gray-400  text-lg mb-10 sm:px-0 px-2">
                        Domina y potencia tus conocimientos en el sector de gestion e ingeniería
                    </div>
                </div>
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 justify-center items-center ml:px-0 xl:px-0 lg:px-4 md:px-8  px-0   ">
                    <div
                        class="col-span-1 sm:order-1 order-2 lg:mr-9 mr-0 bg-txtnamecomntpkyr sm:rounded-2xl rounded-none  sm:pt-11 pt-10   xl:pl-11 ml:pl-11 lg:pl-0 md:pl-0 pl-2 sm:pb-11 pb-10 sm:pr-0 pr-2 ">
                        <div class="grid grid-cols-3 gap-y-3 gap-x-3 ">
                            @foreach ($especialidades as $especialidad)
                                {{-- <a href="{{ route('categoria', $especialidad->slug) }}"> --}}
                                <div class="col-span-1   ">
                                    <div class="">
                                        <div class=" dark:bg-gray11  bg-white1 sm:p-3 p-2 rounded-xl ">
                                            <div class="flex justify-between">

                                                <div class="flex flex-col ml:w-40 xl:w-26 md:w-30 lg:w-30 w-30 "
                                                    style="width:calc(100% - 30px)">
                                                    <div
                                                        class="dark:text-gray-400 text-gray-650 lg:text-eight text-five font-medium dark:text-white">
                                                        Especialízate en
                                                    </div>
                                                    <div>
                                                        <h1
                                                            class="dark:text-whitetext text-gray-650  lg:text-ten text-seven font-inter font-bold ">
                                                            {{ $especialidad->nombre }}</h1>

                                                    </div>
                                                </div>
                                                <div class="px-1">
                                                    <img class="  ml:w-16 ml:h-13  xl:w-13 xl:h-13 lg:w-12 lg:h-12 w-10 h-8    rounded-full"
                                                        src="{{ asset('images/categoria/' . $especialidad->img . '') }}"
                                                        alt="{{ $especialidad->img }}">
                                                </div>


                                            </div>
                                            {{-- <div class="absolute top-0 right-0 text-sm "><x-curso-cantidad idesp="{{$especialidad->idc}}" /></div> --}}

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-span-1 sm:order-2 order-1 sm:ml-10 ml-3 mr-3 justify-center">


                        <div
                            class="font-bold text-3xl font-inter sm:text-left text-center text-txtnamecomntpkyr dark:text-white-500 sm:pb-0 mb-4">
                            Accede a + 80 cursos en 11 especializaciones
                        </div>
                        <div
                            class="font-normal leading-7 sm:text-left text-center font-inter text-lg dark:text-pricingdarkstudents text-gray-500 sm:mb-0 mb-9 ">
                            Aprende con nuesta metodologia de Microlearnig, con cursos agiles desde 2 horas y
                            conocimiento
                            que puedes aplicar de forma inmediata
                        </div>
                    </div>
                </div>

                <div class="grid sm:grid-cols-2 grid-cols-1 items-center pt-10  ml:px-0 xl:px-0 lg:px-4 md:px-8  px-0">
                    <div class="col-span-1 sm:mr-9 mr-3 ml-3 justify-center">


                        <div
                            class="font-bold text-3xl sm:text-left text-center font-inter text-txtnamecomntpkyr dark:text-bgprogresb mb-4">
                            Aprende donde sea
                        </div>
                        <div
                            class="font-normal leading-7 text-lg font-inter sm:text-left text-center dark:text-pricingdarkstudents text-gray-500 sm:mb-0 mb-9 ">
                            Accede por computadora o movil y estudia ala hora que quieras y desde cualquier parte del
                            mundo
                        </div>
                    </div>
                    <div class="sm:ml-9 ml-0">
                        <img src="../images/metodologia/Contentscritorio1.png" alt="">
                    </div>

                </div>

                <div class="grid sm:grid-cols-2 grid-cols-1 items-center pt-10 ml:px-0 xl:px-0 lg:px-4 md:px-8  px-0">
                    <div class="col-span-1 sm:order-1 order-2 mr-9 justify-center">

                        <div class="sm:mr-9 ml-6 ">
                            <img src="../images/metodologia/Macbook Pro 16 mockupscritorio4.png" alt="">
                        </div>
                    </div>
                    <div
                        class="col-span-1 sm:ml-9 ml-3 mr-3  sm:text-left text-center sm:order-2 order-1 justify-center">
                        <div
                            class="font-bold text-3xl font-inter sm:text-left text-center text-txtnamecomntpkyr dark:text-white-500 mb-4">
                            Aprendizaje basado en proyectos
                        </div>
                        <div
                            class="font-normal leading-7 font-inter sm:text-left text-centers dark:text-pricingdarkstudents text-gray-500 sm:mb-0 mb-9 text-lg">
                            Obten un certificado por cada curso que lleves,desaroolando actividades creando proyectos
                            revisados y validados por nuestros expertos Accede por computadora o movil y estudia ala
                            hora
                            que quieras y desde cualquier parte del mundo
                        </div>

                    </div>

                </div>
                <div
                    class="grid sm:grid-cols-2 grid-cols-1 items-center pt-10 pb-20 ml:px-0 xl:px-0 lg:px-4 md:px-8  px-0">
                    <div class="col-span-1 sm:mr-9 mr-3 ml-3 justify-center">


                        <div
                            class="font-bold sm:text-left text-center text-3xl font-inter text-txtnamecomntpkyr dark:text-white-500 mb-4">
                            Aprende de los mejores de latinoamerica
                        </div>
                        <div
                            class="font-normal leading-7 sm:text-left text-center font-inter text-lg dark:text-pricingdarkstudents text-gray-500 sm:mb-0 mb-9">
                            Aprenderás con lideres expertos con gran trayectoria en las empresas de ingeniería a nivel
                            global
                        </div>



                    </div>
                    <div class="sm:ml-9 ml-3 sm:mr-0 mr-3">
                        <div class="grid grid-cols-3 gap-x-3  ">
                            <div class="flex flex-col gap-y-3 ">
                                <div class=" ">
                                    <img class="h-full w-full rounded-l-lg" src="../images/metodologia/Avatarfoto2.png"
                                        alt="">
                                </div>
                                <div class=" ">
                                    <img class="h-full w-full rounded-l-lg" src="../images/metodologia/Avatarfoto1.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="">
                                <img class="h-full w-full" src="../images/metodologia/Avatarfoto3.png" alt="">
                            </div>
                            <div class="flex flex-col gap-y-3">
                                <div class=" ">
                                    <img class="w-full h-full rounded-r-lg" src="../images/metodologia/Avatarfoto4.png"
                                        alt="">
                                </div>
                                <div class=" ">
                                    <img class="w-full h-full rounded-r-lg" src="../images/metodologia/Avatarfoto5.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- <x-lista-cursos :curso="$cursos" ml="4" lg="2" xl="3" sm="1" md="2" /> --}}
            </div>
        </div>




    </section>
    <div class="dark:bg-gray14 bg-whiteheader pt-20  ">
        <div class="ml:px-0 xl:px-0 lg:px-4 md:px-6  px-0">
            <div class="text-center  ">

                <span
                    class="font-inter  py-1 text-center dark:text-bgbtngreen text-bcklightbuscador dark:bg-green_home bg-delesteicono rounded-lg  text-sm px-5 ">
                    Lo que te ofrecemos
                </span>
            </div>
            <div
                class="font-inter text-txtnamecomntpkyr font-bold text-center dark:text-whitetext sm:text-4xl text-3xl pb-5 pt-5">
                ¿Qué te ofrecemos en MayuGo?
            </div>
            <div class="font-inter text-gray-500 text-center dark:text-gray-400  text-lg mb-16">
                Domina y potencia tus conocimientos en el sector de gestion e ingeniería
            </div>
        </div>
        <div class="containermygo mx-auto  ml:px-0 xl:px-0 lg:px-4 md:px-6  px-0">

        
        

        <div class="containermygo mx-auto  ml:px-0 xl:px-0 lg:px-4 md:px-6  px-0" x-data="tipoboton()">
            <div class="flex flex-row items-start sm:pb-20 pb-10">
                <button x-on:click="showNow(1)" id="camila"
                    class="border-t-4 lict group dark:border-gray-600 play1 border-gray-400 dark:text-bgprogresb text-txtnamecomntpkyr dark:focus:text-bgbtngreen focus:text-bgbtngreen  dark:hover:border-bgbtngreen hover:border-bgbtngreen dark:focus:border-bgbtngreen focus:border-bgbtngreen focus:outline-none cursor-pointer">
                    <div id=""
                        class="text-center icon1  md:text-xl text-sixteen  text-xl font-inter font-bold  pt-6 ml-4 ">
                        Cursos

                    </div>
                    <div
                        class="px-2 sm:flex hidden  cursor-pointer leading-6  font-normal font-inter sm:visible invisible text-sixteen mt-2 ">
                        Actualizate, aprende nuevas habilidades y crece profecional mente
                    </div>

                </button>
                {{--   dark:text-borderconcours  leading-6 text-gray-500 --}}
                <button x-on:click="showNow(2)" id="adelina"
                    class="border-t-4 lict group dark:border-gray-600 play1 border-gray-400 dark:text-bgprogresb text-txtnamecomntpkyr dark:focus:text-bgbtngreen focus:text-bgbtngreen  dark:hover:border-bgbtngreen hover:border-bgbtngreen dark:focus:border-bgbtngreen focus:border-bgbtngreen focus:outline-none cursor-pointer">
                    <div class="text-center icon2   md:text-xl text-sixteen  text-xl font-inter font-bold  pt-6 ml-4 ">
                        Especializaciones
                    </div>
                    <div
                        class="px-2 sm:flex hidden leading-6  font-normal font-inter sm:visible invisible text-sixteen mt-2 ">
                        Actualizate, aprende nuevas habilidades y crece profecional mente
                    </div>
                </button>


                <button x-on:click="showNow(3)" id="gabriela"
                    class="border-t-4 lict group  dark:border-gray-600 play1 border-gray-400 dark:text-bgprogresb text-txtnamecomntpkyr dark:focus:text-bgbtngreen focus:text-bgbtngreen  dark:hover:border-bgbtngreen hover:border-bgbtngreen dark:focus:border-bgbtngreen focus:border-bgbtngreen focus:outline-none cursor-pointer">
                    <div class="text-center  md:text-xl text-sixteen text-xl lict   font-inter font-bold  break-words pt-6 px-2"
                        id="lcursosa">
                        Modalidad en vivo
                    </div>
                    <div
                        class="px-2 sm:flex hidden lict   leading-6 font-normal font-inter sm:visible  invisible text-sixteen mt-2 ">
                        Domina la tecnologia con rutas de aprendizaje creadas por expertos
                    </div>

                </button>
                <script>
                    document.getElementById("gabriela").classList.add('ophomeactiv');
                    gabriela.addEventListener('click', function() {
                        // icon.classList.remove('hidden');
                        document.getElementById("gabriela").classList.add('ophomeactiv');
                        document.getElementById("adelina").classList.add('ophome');
                        document.getElementById("camila").classList.add('ophome');
                    });
                    adelina.addEventListener('click', function() {
                        // icon.classList.remove('hidden');
                        document.getElementById("gabriela").classList.add('ophome');
                        document.getElementById("adelina").classList.add('ophomeactiv');
                        document.getElementById("camila").classList.add('ophome');
                    });
                    camila.addEventListener('click', function() {
                        // icon.classList.remove('hidden');
                        document.getElementById("gabriela").classList.add('ophome');
                        document.getElementById("adelina").classList.add('ophome');
                        document.getElementById("camila").classList.add('ophomeactiv');
                    });

                    var lict = document.querySelectorAll(".lict");

                    document.querySelectorAll(".lict").style.color = 'red';

                    lict.addEventListener('click', function() {
                        // icon.classList.remove('hidden');
                        console.log("si ppe si da");
                    });
                </script>

            </div>
            <template class="lictt" x-if="tipo == 1">
                
                {{-- @include('modals.cursos', ['ml' => 4, 'lg' => 2, 'xl' => 3, 'sm' => 1, 'md' => 2]) --}}
                <div>
                    {{-- ************************cursos disponibles version escritorio*********************** --}}
                    <div class=" lg:grid hidden lg:grid-cols-4 grid-cols-1 gap-x-6 gap-y-4 sm:px-0 px-4 ">
                        @foreach ($cursos as $curso)
                            <div>
                                <div class=" rounded-2xl">
                                    <img class="rounded-t-2xl"
                                        src="https://www.mayugo.net/admin/images/miniaturas/mejora-continua.jpg"
                                        alt="">
                                </div>
                                <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite px-3 pt-3 pb-8">
                                    <div
                                        class="font-inter font-medium text-lg dark:text-whiteheader text-txtnamecomntpkyr h-16 w-72">
                                        {{ $curso->nom }}
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="font-inter font-medium text-sm dark:text-gray-400 text-gray-500 ">
                                            Por :
                                        </div>
                                        <div class="italic font-medium text-sm text-greenhover px-2">
                                            {{ $curso->cursoAsignacion->trabajador->nombres }}
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-start font-inter font-medium text-sm pt-3 dark:text-gray-400 text-gray-500">
                                        <div class="flex items-center mr-4">
                                            <button class="focus:outline-none">
                                                <svg class="" width="14" height="15"
                                                    viewBox="0 0 14 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.36597 1.95109C6.56555 1.33692 7.43444 1.33692 7.63403 1.95109L8.64659 5.06703C8.73584 5.34169 8.99179 5.52765 9.28059 5.52766L12.5569 5.52778C13.2027 5.52781 13.4712 6.35418 12.9488 6.73378L10.2982 8.65966C10.0646 8.82942 9.96684 9.13031 10.0561 9.40498L11.0684 12.521C11.2679 13.1352 10.565 13.6459 10.0425 13.2663L7.39183 11.3407C7.15818 11.1709 6.84181 11.1709 6.60816 11.3407L3.95748 13.2663C3.43501 13.6459 2.73206 13.1352 2.9316 12.521L3.94392 9.40498C4.03316 9.13031 3.93539 8.82942 3.70176 8.65966L1.05122 6.73378C0.528779 6.35418 0.797282 5.52781 1.44307 5.52778L4.7194 5.52766C5.0082 5.52765 5.26415 5.34169 5.35341 5.06703L6.36597 1.95109Z"
                                                        stroke="currentcolor" stroke-width="1.33333" />
                                                </svg>
                    
                                            </button>
                                            <div class="px-2">
                                                5
                                            </div>
                                        </div>
                                        <div class="flex items-center mr-4">
                                            <button class="focus:outline-none">
                                                <svg width="14" height="14" viewBox="0 0 14 14"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.99914 4.33284V6.99951L8.99914 8.99951M12.9991 6.99951C12.9991 10.3132 10.3128 12.9995 6.99914 12.9995C3.68544 12.9995 0.999146 10.3132 0.999146 6.99951C0.999146 3.6858 3.68544 0.999512 6.99914 0.999512C10.3128 0.999512 12.9991 3.6858 12.9991 6.99951Z"
                                                        stroke="currentcolor" stroke-width="1.33333"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                    
                                            </button>
                                            <div class="px-2">
                                                1h:2m
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <button class="focus:outline-none">
                                                <svg width="16" height="12" viewBox="0 0 16 12"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.3335 11.3337H14.6668V10.0003C14.6668 8.89575 13.7714 8.00032 12.6668 8.00032C12.0298 8.00032 11.4623 8.29819 11.096 8.76225M11.3335 11.3337H4.66683M11.3335 11.3337V10.0003C11.3335 9.56283 11.2492 9.14502 11.096 8.76225M4.66683 11.3337H1.3335V10.0003C1.3335 8.89575 2.22893 8.00032 3.3335 8.00032C3.97057 8.00032 4.53807 8.29819 4.90432 8.76225M4.66683 11.3337V10.0003C4.66683 9.56283 4.75111 9.14502 4.90432 8.76225M4.90432 8.76225C5.39583 7.53434 6.5967 6.66699 8.00016 6.66699C9.40361 6.66699 10.6045 7.53434 11.096 8.76225M10.0002 2.66699C10.0002 3.77156 9.10473 4.66699 8.00016 4.66699C6.89559 4.66699 6.00016 3.77156 6.00016 2.66699C6.00016 1.56242 6.89559 0.666992 8.00016 0.666992C9.10473 0.666992 10.0002 1.56242 10.0002 2.66699ZM14.0002 4.66699C14.0002 5.40337 13.4032 6.00032 12.6668 6.00032C11.9304 6.00032 11.3335 5.40337 11.3335 4.66699C11.3335 3.93061 11.9304 3.33366 12.6668 3.33366C13.4032 3.33366 14.0002 3.93061 14.0002 4.66699ZM4.66683 4.66699C4.66683 5.40337 4.06987 6.00032 3.3335 6.00032C2.59712 6.00032 2.00016 5.40337 2.00016 4.66699C2.00016 3.93061 2.59712 3.33366 3.3335 3.33366C4.06987 3.33366 4.66683 3.93061 4.66683 4.66699Z"
                                                        stroke="currentcolor" stroke-width="1.33333"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                    
                                            </button>
                                            <div class="px-2">
                                                5
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
                                <div
                                    class="dark:bg-pricingdark bg-pricingcintawhite rounded-b-2xl  items-center flex justify-between p-3">
                                    <div class="flex flex-col font-inter font-medium text-lg ">
                                        <div
                                            class="dark:text-checkpricingdark  text-green_hover text-sixteen font-bold">
                                            {{ $simbolo }} {{ $curso->precio * $cambio }} {{ $cod_iso }}
                                        </div>
                                        <div class="text-gray-400 line-through text-sm font-normal">
                                            {{ $simbolo }} {{ $curso->predsct * $cambio }} {{ $cod_iso }}
                                        </div>
                                    </div>
                                    <div>
                                        @if (in_array($curso->idcur, $cursos_asig))
                                            <a href="http://" target="_blank" rel="noopener noreferrer">
                                                Ir a curso
                                            </a>
                                        @else
                                            <button 
                                               onclick="add_course({{$curso->idcur}})"
                                                class="flex h-9 rounded-md bg-bgbtngreen px-4 items-center focus:outline-none">
                    
                                                <svg class="text-btncomentresply" width="25" height="24"
                                                    viewBox="0 0 25 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M3.97684 2.99976H5.97684L6.37684 4.99975M7.97684 12.9998H17.9768L21.9768 4.99975H6.37684M7.97684 12.9998L6.37684 4.99975M7.97684 12.9998L5.68394 15.2926C5.05398 15.9226 5.50015 16.9997 6.39105 16.9997H17.9768M17.9768 16.9997C16.8723 16.9997 15.9768 17.8952 15.9768 18.9997C15.9768 20.1043 16.8723 20.9997 17.9768 20.9997C19.0814 20.9997 19.9768 20.1043 19.9768 18.9997C19.9768 17.8952 19.0814 16.9997 17.9768 16.9997ZM9.97683 18.9997C9.97683 20.1043 9.0814 20.9997 7.97684 20.9997C6.87227 20.9997 5.97684 20.1043 5.97684 18.9997C5.97684 17.8952 6.87227 16.9997 7.97684 16.9997C9.0814 16.9997 9.97683 17.8952 9.97683 18.9997Z"
                                                        stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                    
                                                <div class="pl-2 text-sixteen font-inter font-medium text-btncomentresply">
                                                    Agregar 
                                                </div>
                                            </button>
                    
                                            {{-- @livewire('boton-comprar-sec' , ['id_curso' => $curso->idcur], key($curso->idcur)) --}}
                                        @endif 
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- *********************    cursos disponibles version movil**************************************** --}}
                    <div class="flex flex-row overflow-x-scroll gap-x-6 gap-y-4 sm:px-0 px-4 clasebarra lg:hidden ">
                        @foreach ($cursos as $cursoM)
                            <div class=" ">
                                <div class=" rounded-2xl">
                                    <img class="rounded-t-2xl"
                                        src="https://www.mayugo.net/admin/images/miniaturas/mejora-continua.jpg"
                                        alt="">
                                </div>
                                <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite px-3 pt-3 pb-8">
                                    <div
                                        class="font-inter font-medium text-lg dark:text-whiteheader text-txtnamecomntpkyr h-16 w-72">
                                        {{$cursoM->nom }}
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="font-inter font-medium text-sm dark:text-gray-400 text-gray-500 ">
                                            Por :
                                        </div>
                                        <div class="italic font-medium text-sm text-greenhover px-2">
                                            {{ $cursoM->cursoAsignacion->trabajador->nombres }}
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-start font-inter font-medium text-sm pt-3 dark:text-gray-400 text-gray-500">
                                        <div class="flex items-center mr-4">
                                            <button class="focus:outline-none">
                                                <svg class="" width="14" height="15"
                                                    viewBox="0 0 14 15" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.36597 1.95109C6.56555 1.33692 7.43444 1.33692 7.63403 1.95109L8.64659 5.06703C8.73584 5.34169 8.99179 5.52765 9.28059 5.52766L12.5569 5.52778C13.2027 5.52781 13.4712 6.35418 12.9488 6.73378L10.2982 8.65966C10.0646 8.82942 9.96684 9.13031 10.0561 9.40498L11.0684 12.521C11.2679 13.1352 10.565 13.6459 10.0425 13.2663L7.39183 11.3407C7.15818 11.1709 6.84181 11.1709 6.60816 11.3407L3.95748 13.2663C3.43501 13.6459 2.73206 13.1352 2.9316 12.521L3.94392 9.40498C4.03316 9.13031 3.93539 8.82942 3.70176 8.65966L1.05122 6.73378C0.528779 6.35418 0.797282 5.52781 1.44307 5.52778L4.7194 5.52766C5.0082 5.52765 5.26415 5.34169 5.35341 5.06703L6.36597 1.95109Z"
                                                        stroke="currentcolor" stroke-width="1.33333" />
                                                </svg>

                                            </button>
                                            <div class="px-2">
                                                5
                                            </div>
                                        </div>
                                        <div class="flex items-center mr-4">
                                            <button class="focus:outline-none">
                                                <svg width="14" height="14" viewBox="0 0 14 14"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.99914 4.33284V6.99951L8.99914 8.99951M12.9991 6.99951C12.9991 10.3132 10.3128 12.9995 6.99914 12.9995C3.68544 12.9995 0.999146 10.3132 0.999146 6.99951C0.999146 3.6858 3.68544 0.999512 6.99914 0.999512C10.3128 0.999512 12.9991 3.6858 12.9991 6.99951Z"
                                                        stroke="currentcolor" stroke-width="1.33333"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                            </button>
                                            <div class="px-2">
                                                1h:2m
                                            </div>
                                        </div>
                                        <div class="flex items-center">
                                            <button class="focus:outline-none">
                                                <svg width="16" height="12" viewBox="0 0 16 12"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.3335 11.3337H14.6668V10.0003C14.6668 8.89575 13.7714 8.00032 12.6668 8.00032C12.0298 8.00032 11.4623 8.29819 11.096 8.76225M11.3335 11.3337H4.66683M11.3335 11.3337V10.0003C11.3335 9.56283 11.2492 9.14502 11.096 8.76225M4.66683 11.3337H1.3335V10.0003C1.3335 8.89575 2.22893 8.00032 3.3335 8.00032C3.97057 8.00032 4.53807 8.29819 4.90432 8.76225M4.66683 11.3337V10.0003C4.66683 9.56283 4.75111 9.14502 4.90432 8.76225M4.90432 8.76225C5.39583 7.53434 6.5967 6.66699 8.00016 6.66699C9.40361 6.66699 10.6045 7.53434 11.096 8.76225M10.0002 2.66699C10.0002 3.77156 9.10473 4.66699 8.00016 4.66699C6.89559 4.66699 6.00016 3.77156 6.00016 2.66699C6.00016 1.56242 6.89559 0.666992 8.00016 0.666992C9.10473 0.666992 10.0002 1.56242 10.0002 2.66699ZM14.0002 4.66699C14.0002 5.40337 13.4032 6.00032 12.6668 6.00032C11.9304 6.00032 11.3335 5.40337 11.3335 4.66699C11.3335 3.93061 11.9304 3.33366 12.6668 3.33366C13.4032 3.33366 14.0002 3.93061 14.0002 4.66699ZM4.66683 4.66699C4.66683 5.40337 4.06987 6.00032 3.3335 6.00032C2.59712 6.00032 2.00016 5.40337 2.00016 4.66699C2.00016 3.93061 2.59712 3.33366 3.3335 3.33366C4.06987 3.33366 4.66683 3.93061 4.66683 4.66699Z"
                                                        stroke="currentcolor" stroke-width="1.33333"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                            </button>
                                            <div class="px-2">
                                                5
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="dark:bg-pricingdark bg-pricingcintawhite rounded-b-2xl  items-center flex justify-between p-3">
                                    <div class="flex flex-col font-inter font-medium text-lg ">
                                        <div
                                            class="dark:text-checkpricingdark  text-green_hover text-sixteen font-bold">
                                            {{ $simbolo }} {{ $cursoM->precio * $cambio }} {{ $cod_iso }}
                                        </div>
                                        <div class="text-gray-400 line-through text-sm font-normal">
                                            {{ $simbolo }} {{ $cursoM->predsct * $cambio }} {{ $cod_iso }}
                                        </div>
                                    </div>
                                    <div>
                                        @if (in_array($cursoM->idcur, $cursos_asig))
                                            <a href="http://" target="_blank" rel="noopener noreferrer">Ir a
                                                curso</a>
                                        @else
                                            {{-- <button class="" 
                                        >
                                        
                                    </button> --}}
                                            <button
                                                class="flex h-9 rounded-md bg-bgbtngreen px-4 items-center focus:outline-none">

                                                <svg class="text-btncomentresply" width="25" height="24"
                                                    viewBox="0 0 25 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M3.97684 2.99976H5.97684L6.37684 4.99975M7.97684 12.9998H17.9768L21.9768 4.99975H6.37684M7.97684 12.9998L6.37684 4.99975M7.97684 12.9998L5.68394 15.2926C5.05398 15.9226 5.50015 16.9997 6.39105 16.9997H17.9768M17.9768 16.9997C16.8723 16.9997 15.9768 17.8952 15.9768 18.9997C15.9768 20.1043 16.8723 20.9997 17.9768 20.9997C19.0814 20.9997 19.9768 20.1043 19.9768 18.9997C19.9768 17.8952 19.0814 16.9997 17.9768 16.9997ZM9.97683 18.9997C9.97683 20.1043 9.0814 20.9997 7.97684 20.9997C6.87227 20.9997 5.97684 20.1043 5.97684 18.9997C5.97684 17.8952 6.87227 16.9997 7.97684 16.9997C9.0814 16.9997 9.97683 17.8952 9.97683 18.9997Z"
                                                        stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>

                                                <div
                                                    class="pl-2 text-sixteen font-inter font-medium text-btncomentresply">
                                                    Agregar </div>
                                            </button>
                                            {{-- @livewire('botsec-comprar' , ['id_curso' => $curso->idcur], key($curso->idcur)) --}}
                                        @endif
                                        {{-- dd --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class=" text-center pt-10 pb-10">
                        <button
                            class="rounded-lg bg-transparent font-inter font-normal border-greenhover border-2 text-greenhover px-4 py-2 focus:outline-none">
                            ver mas
                        </button>
                    </div>
                </div>

            </template>

            <template class="lictt" x-if="tipo == 2">
                <div
                    class="grid sm:grid-cols-3  ml:grid-cols-3 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 sm:gap-y-10 gap-y-5 sm:gap-x-8  gap-x-3  sm:px-0 px-2">
                    @foreach ($especialidades as $especialidad)
                        {{-- <a href="{{ route('categoria', $especialidad->slug) }}"> --}}
                        <div class="col-span-1   ">
                            <div class=" ">
                                <div class=" dark:bg-gray11 shadow-xl bg-celestelanding sm:p-4 p-4 rounded-xl  ">
                                    <div class="flex sm:justify-between justify-around sm:px-4 px-2">

                                        <div class="flex flex-col sm:w-full w-30 " style="width:calc(100% - 80px)">
                                            <div
                                                class="text-textpricingwhite dark:text-gray-400 ml:text-sixteen xl:text-xl lg:text-sm   font-semibold dark:text-white">
                                                Especialízate en
                                            </div>
                                            <div>
                                                <h1
                                                    class="dark:text-whitetext text-textpricingwhite ml:text-sixteen xl:text-xl lg:text-sm  font-inter font-bold  ">
                                                    {{ $especialidad->nombre }}</h1>

                                            </div>
                                        </div>
                                        <div class="sm:px-1 px-0.5">
                                            <img class="  sm:w-20 sm:h-20 h-16 w-16   rounded-full"
                                                src="{{ asset('images/categoria/' . $especialidad->img . '') }}"
                                                alt="{{ $especialidad->img }}">
                                        </div>


                                    </div>
                                    {{-- <div class="absolute top-0 right-0 text-sm "><x-curso-cantidad idesp="{{$especialidad->idc}}" /></div> --}}

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </template>

            <template class="lictt" x-if="tipo == 3">
                <div>
                    <div class="lg:grid hidden grid-cols-4 gap-x-6 gap-y-4 sm:px-0 px-4">
                        @foreach ($diplomados as $diplomado)
                            <div class=" ">
                                <div class=" rounded-2xl">
                                    <img class="rounded-t-2xl"
                                        src="https://www.mayugo.net/admin/images/miniaturas/mejora-continua.jpg"
                                        alt="">
                                </div>
                                <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite px-3 pt-3 pb-8 ">
                                    <div
                                        class="font-inter font-medium text-lg dark:text-whiteheader text-txtnamecomntpkyr w-72 h-16">
                                        {{ $diplomado->titulo }}
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="font-inter font-medium text-sm dark:text-gray-400 text-gray-500 ">
                                            por :
                                        </div>
                                        <div class="italic font-medium text-sm text-greenhover px-2">
                                            {{ $diplomado->diplomadoDocentes->first()->trabajador->nombres }}
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-start font-inter font-medium text-sm pt-3 dark:text-gray-400 text-gray-500">
                                        <div class="flex items-center mr-4">
                                            <button class="focus:outline-none">
                                                <svg width="14" height="14" viewBox="0 0 14 14"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.3333 3.66667V1M9.66663 3.66667V1M3.66663 6.33333H10.3333M2.3333 13H11.6666C12.403 13 13 12.403 13 11.6667V3.66667C13 2.93029 12.403 2.33333 11.6666 2.33333H2.3333C1.59692 2.33333 0.999969 2.93029 0.999969 3.66667V11.6667C0.999969 12.403 1.59692 13 2.3333 13Z"
                                                        stroke="currentcolor" stroke-width="1.33333"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>


                                            </button>
                                            <div class="px-2">
                                                5 de mayo
                                            </div>
                                        </div>
                                        <div class="flex items-center mr-4">
                                            <button class="focus:outline-none">
                                                <svg width="14" height="14" viewBox="0 0 14 14"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.9992 4.33284V6.99951L8.9992 8.99951M12.9992 6.99951C12.9992 10.3132 10.3129 12.9995 6.9992 12.9995C3.6855 12.9995 0.999207 10.3132 0.999207 6.99951C0.999207 3.6858 3.6855 0.999512 6.9992 0.999512C10.3129 0.999512 12.9992 3.6858 12.9992 6.99951Z"
                                                        stroke="currentcolor" stroke-width="1.33333"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>


                                            </button>
                                            <div class="px-2">
                                                2 meses
                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <div
                                    class="dark:bg-pricingdark bg-pricingcintawhite rounded-b-2xl  items-center flex justify-between p-3">
                                    <div class="flex flex-col font-inter font-medium ">
                                        @if ($diplomado->precio_venta > 0)
                                            <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                                {{ $simbolo }} {{ $diplomado->precio_venta * $cambio }}
                                                {{ $cod_iso }}
                                            </div>
                                            <div class="text-gray-400 line-through text-sm">
                                                {{ $simbolo }} {{ $diplomado->precio_venta * $cambio }}
                                                {{ $cod_iso }}
                                            </div>
                                        @else
                                            <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                                GRATIS
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        @if ($diplomado->precio_venta > 0)
                                            <button
                                                class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                                Comprar
                                            </button>
                                        @else
                                            INSCRIBIRSE
                                        @endif
                                    </div>
                                </div>




                            </div>
                        @endforeach
                    </div>
                    <div class="flex flex-row overflow-x-scroll gap-x-6 gap-y-4 sm:px-0 px-4 clasebarra lg:hidden">
                        @foreach ($diplomados as $diplomado)
                            <div class=" ">
                                <div class=" rounded-2xl">
                                    <img class="rounded-t-2xl"
                                        src="https://www.mayugo.net/admin/images/miniaturas/mejora-continua.jpg"
                                        alt="">
                                </div>
                                <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite px-3 pt-3 pb-8 ">
                                    <div
                                        class="font-inter font-medium text-lg dark:text-whiteheader text-txtnamecomntpkyr w-72 h-16">
                                        {{ $diplomado->titulo }}
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="font-inter font-medium text-sm dark:text-gray-400 text-gray-500 ">
                                            por :
                                        </div>
                                        <div class="italic font-medium text-sm text-greenhover px-2">
                                            {{ $diplomado->diplomadoDocentes->first()->trabajador->nombres }}
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-start font-inter font-medium text-sm pt-3 dark:text-gray-400 text-gray-500">
                                        <div class="flex items-center mr-4">
                                            <button class="focus:outline-none">
                                                <svg width="14" height="14" viewBox="0 0 14 14"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.3333 3.66667V1M9.66663 3.66667V1M3.66663 6.33333H10.3333M2.3333 13H11.6666C12.403 13 13 12.403 13 11.6667V3.66667C13 2.93029 12.403 2.33333 11.6666 2.33333H2.3333C1.59692 2.33333 0.999969 2.93029 0.999969 3.66667V11.6667C0.999969 12.403 1.59692 13 2.3333 13Z"
                                                        stroke="currentcolor" stroke-width="1.33333"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>


                                            </button>
                                            <div class="px-2">
                                                5 de mayo
                                            </div>
                                        </div>
                                        <div class="flex items-center mr-4">
                                            <button class="focus:outline-none">
                                                <svg width="14" height="14" viewBox="0 0 14 14"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6.9992 4.33284V6.99951L8.9992 8.99951M12.9992 6.99951C12.9992 10.3132 10.3129 12.9995 6.9992 12.9995C3.6855 12.9995 0.999207 10.3132 0.999207 6.99951C0.999207 3.6858 3.6855 0.999512 6.9992 0.999512C10.3129 0.999512 12.9992 3.6858 12.9992 6.99951Z"
                                                        stroke="currentcolor" stroke-width="1.33333"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>


                                            </button>
                                            <div class="px-2">
                                                2 meses
                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <div
                                    class="dark:bg-pricingdark bg-pricingcintawhite rounded-b-2xl  items-center flex justify-between p-3">
                                    <div class="flex flex-col font-inter font-medium ">
                                        @if ($diplomado->precio_venta > 0)
                                            <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                                {{ $simbolo }} {{ $diplomado->precio_venta * $cambio }}
                                                {{ $cod_iso }}
                                            </div>
                                            <div class="text-gray-400 line-through text-sm">
                                                {{ $simbolo }} {{ $diplomado->precio_venta * $cambio }}
                                                {{ $cod_iso }}
                                            </div>
                                        @else
                                            <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                                GRATIS
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        @if ($diplomado->precio_venta > 0)
                                            <button
                                                class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                                Comprar
                                            </button>
                                        @else
                                            INSCRIBIRSE
                                        @endif
                                    </div>
                                </div>




                            </div>
                        @endforeach
                    </div>
                    <div class=" text-center pt-10 pb-10">
                        <button
                            class="rounded-lg bg-transparent font-inter font-normal border-greenhover border-2 text-greenhover px-4 py-2 focus:outline-none">
                            ver mas
                        </button>
                    </div>
                </div>
            </template>

            <div class="">


                <div
                    class="font-inter text-txtnamecomntpkyr font-bold text-center dark:text-whitetext sm:text-4xl text-4xl pb-3 pt-10 sm:px-0 px-4">
                    ¿Qué dice nuestros estudiantes?
                </div>
                <div class="font-inter text-txtcommentply text-center dark:text-gray-400 pt-5 text-lg pb-16">
                    Ya hemos capacitado a estudiantes y profecionales de 24 países del mundo
                </div>

                <div class="dark:bg-gray14 bg-colheaderwhite sm:px-0 px-4">







                    <div
                        class="grid lg:grid-cols-2 grid-cols-1 gap-x-6 dark:bg-gray11 bg-celestelanding rounded-xl   overflow-hidden">
                        <div id="slideshow " class="overflow-hidden  sm:max-h-96 max-h-40 bg-cover">
                            <img style="clip-path: polygon(0 0, 88% 0, 100% 100%, 0% 100%);" src=""
                                alt="" class="" id="img1">
                            <img src="" alt="" class="" id="img2">
                        </div>
                        <div class="lg:pt-12 pt-10   mb-7 lg:mr-12 mr-8 lg:ml-0 ml-8  flex-col flex">
                            <div>
                                <div
                                    class="text-2xl sm:text-left text-center   dark:text-white-500 text-gray-500 font-inter font-medium leading-8">
                                    "En MayuGo se aprende muchisimo el equipo de docentes que inparten las clases, la
                                    inparten
                                    de una manera que
                                    quedas muy satisfecho en querer seguir tomando mas conocimiento profecional"
                                </div>
                                <div class="flex sm:flex-row flex-col pt-9">
                                    <div class="font-inter  font-lg dark:text-borderconcours text-txtnamecomntpkyr">
                                        kenny espiriu
                                        falcon estudiante de</div>
                                    <div class="text-greenhover  font-semibold sm:px-2 px-0">MayuGo</div>
                                </div>
                            </div>

                            <div class="sm:pt-15 pt-12">
                                <div class="hidden" id="progress-bar-container ">
                                    <div id="progress-bar">

                                    </div>
                                </div>
                                <div id="indicadores" class="flex">



                                </div>
                            </div>
                        </div>
                        <style>
                            .circles {
                                border: white 2px solid;
                                width: 32px;
                                height: 32px;
                                display: inline-block;
                                margin: 0 24px 0 5px;
                                background-color: transparent;
                                border-radius: 50%;

                            }

                            .altura {
                                height: 300px;
                            }

                            #progress-bar {
                                height: 100%;
                                background-color: rgba(228, 69, 69, 1);
                                border-radius: 0 3px 3px 0;

                            }

                            #img2 {
                                left: 100%;
                                opacity: 0;

                            }


                            .active {
                                left: 0 !important;
                                transition: 1s;

                            }

                            .resaltado {
                                background-color: rgb(120, 134, 146);
                                opacity: 1;
                                border: rgb(40, 179, 40) 2px solid;
                                border-radius: 50%;


                            }
                        </style>


                        <script>
                            addEventListener('DOMContentLoaded', () => {
                                const imagenes = ['images/metodologia/Imagehistoria.png',
                                    'https://www.ipchile.cl/wp-content/uploads/2021/10/Ing.-Industrial.jpg',
                                    'https://boyacaestudiaenelexterior.co/wp-content/uploads/2021/05/Ingenieria-Industrial.jpg',
                                    'https://d11cuk1a0j5b57.cloudfront.net/blog/wp-content/uploads/2018/05/ingenieria-industrial-razones-estudiar-occeducacion-occmundial.jpg'
                                ]
                                let i = 1
                                const img1 = document.querySelector('#img1')
                                const img2 = document.querySelector('#img2')
                                const progressbar = document.querySelector('#progress-bar')
                                const divIndicadores = document.querySelector('#indicadores')
                                let porcentaje_base = 100 / imagenes.length
                                let porcentaje_actual = porcentaje_base

                                for (let index = 0; index < imagenes.length; index++) {
                                    const div = document.createElement('div')
                                    div.classList.add('circles')

                                    div.id = index
                                    divIndicadores.appendChild(div)

                                }
                                progressbar.style.width = `${porcentaje_base}%`
                                img1.src = imagenes[0]
                                const circulos = document.querySelectorAll('.circles')
                                circulos[0].classList.add('resaltado')


                                const slideshow = () => {
                                    img2.src = imagenes[i]
                                    const circulo_actual = Array.from(circulos).find(el => el.id == i)
                                    Array.from(circulos).forEach(cir => cir.classList.remove('resaltado'))
                                    circulo_actual.classList.add('resaltado')

                                    img2.classList.add('active')
                                    i++
                                    porcentaje_actual += porcentaje_base
                                    progressbar.style.width = `${porcentaje_base}%`
                                    if (i == imagenes.length) {
                                        i = 0
                                        porcentaje_actual = porcentaje_base - porcentaje_base
                                    }


                                    setTimeout(() => {
                                        img1.src = img2.src
                                        img2.classList.remove('active')
                                    }, 500)
                                }



                                setInterval(slideshow, 5000)


                            })
                        </script>

                    </div>





                </div>



            </div>
        </div>
        {{--  ******************************************************************** --}}

        <div
            class="lg:dark:bg-pricingdark dark:bg-gray14 bg-pricingdark  sm:mt-20 mt-14 pb-20 ml:px-0 xl:px-0 lg:px-4 md:px-6  px-0">
            <div class="containermygo mx-auto ">
                <div
                    class="pt-16 font-inter dark:text-white-500 text-bgprogresb text-center font-bold  sm:text-4xl text-2xl">
                    Empresas que confian en nosotros
                </div>
                {{-- ************** version escritorio de los iconos de las empresas que respaldad ********** --}}
                <div class=" sm:grid hidden lg:grid-cols-6 grid-cols-2 gap-y-2 justify-between pt-9 sm:px-0 px-5   ">
                    <div class="dark:text-whiteheader text-blue3 mt-1 ">

                        <img src="https://www.mayugo.net/asset/img/logo/Logo-mario-caceres.png" class=" "
                            style="" alt="">
                        {{-- <svg class="" width="135" height="24" viewBox="0 0 135 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg ">
                            <path
                                d="M27.116 6.70035C22.2353 6.70035 18.4217 10.4054 18.4217 15.3654C18.4217 20.3254 22.1389 23.9988 27.116 23.9988C32.0931 23.9988 35.875 20.262 35.875 15.3337C35.875 10.4371 32.1577 6.70035 27.116 6.70035ZM27.1489 20.4242C24.3695 20.4242 22.3328 18.2656 22.3328 15.3666C22.3328 12.4348 24.3366 10.2774 27.116 10.2774C29.9283 10.2774 31.9638 12.4677 31.9638 15.3666C31.9638 18.2656 29.9283 20.4242 27.1489 20.4242ZM36.9409 10.47H39.3652V23.678H43.2435V7.02233H36.9409V10.47ZM8.66141 10.2761C10.6981 10.2761 12.314 11.5323 12.9275 13.4007H17.0326C16.2886 9.40658 12.9921 6.70035 8.69434 6.70035C3.8136 6.70035 0 10.4054 0 15.3666C0 20.3279 3.71726 24 8.69434 24C12.8958 24 16.2569 21.2938 17.0008 17.2667H12.9275C12.3457 19.1351 10.7298 20.4242 8.69314 20.4242C5.88079 20.4242 3.90994 18.2656 3.90994 15.3666C3.91117 12.4348 5.8503 10.2761 8.66141 10.2761ZM110.63 13.7556L107.786 13.3373C106.429 13.1446 105.459 12.6933 105.459 11.6299C105.459 10.47 106.72 9.89074 108.432 9.89074C110.307 9.89074 111.503 10.6957 111.762 12.0165H115.511C115.09 8.66629 112.504 6.70155 108.53 6.70155C104.425 6.70155 101.71 8.79559 101.71 11.7591C101.71 14.5934 103.488 16.2374 107.075 16.7521L109.919 17.1704C111.309 17.3631 112.085 17.9119 112.085 18.9424C112.085 20.2632 110.728 20.8108 108.853 20.8108C106.558 20.8108 105.265 19.8766 105.071 18.4595H101.257C101.614 21.7133 104.166 24 108.82 24C113.055 24 115.866 22.067 115.866 18.7485C115.866 15.7849 113.83 14.2385 110.63 13.7556ZM41.3044 0.160984C39.8824 0.160984 38.8155 1.19152 38.8155 2.60867C38.8155 4.02581 39.8812 5.05635 41.3044 5.05635C42.7264 5.05635 43.7936 4.02581 43.7936 2.60867C43.7936 1.19152 42.7264 0.160984 41.3044 0.160984ZM98.2196 12.725C98.2196 9.11753 96.0221 6.70155 91.368 6.70155C86.9726 6.70155 84.5163 8.92485 84.0311 12.3396H87.8775C88.0714 11.0189 89.1056 9.92366 91.3035 9.92366C93.2756 9.92366 94.245 10.7932 94.245 11.8567C94.245 13.2422 92.4667 13.5958 90.2692 13.8215C87.2959 14.1434 83.6115 15.1739 83.6115 19.04C83.6115 22.0365 85.842 23.9683 89.3974 23.9683C92.1765 23.9683 93.9217 22.8085 94.7951 20.9718C94.9245 22.6146 96.1526 23.678 97.866 23.678H100.128V20.2315H98.2207V12.725H98.2196ZM94.4059 16.9131C94.4059 19.1363 92.4667 20.7791 90.1069 20.7791C88.6522 20.7791 87.4241 20.1669 87.4241 18.879C87.4241 17.2362 89.3959 16.785 91.206 16.5923C92.9512 16.4313 93.9206 16.0447 94.4059 15.3032V16.9131ZM73.8184 6.70035C71.6524 6.70035 69.8426 7.60283 68.55 9.11633V0H64.6717V23.678H68.4851V21.4877C69.7777 23.0658 71.6209 24 73.8184 24C78.4721 24 81.9956 20.3279 81.9956 15.3666C81.9956 10.4054 78.4076 6.70035 73.8184 6.70035ZM73.2367 20.4242C70.4572 20.4242 68.4206 18.2656 68.4206 15.3666C68.4206 12.4677 70.4891 10.2774 73.2682 10.2774C76.0807 10.2774 78.0514 12.436 78.0514 15.3666C78.0514 18.2656 76.0159 20.4242 73.2367 20.4242ZM55.3954 6.70035C52.8746 6.70035 51.2257 7.73089 50.2564 9.18094V7.02233H46.4096V23.6768H50.2879V14.6252C50.2879 12.0799 51.9037 10.2761 54.2955 10.2761C56.526 10.2761 57.915 11.8543 57.915 14.1422V23.678H61.7932V13.8531C61.7947 9.6639 59.6299 6.70035 55.3954 6.70035ZM134.353 14.8191C134.353 10.0517 130.863 6.70155 126.176 6.70155C121.199 6.70155 117.546 10.4383 117.546 15.3666C117.546 20.5535 121.457 24 126.241 24C130.281 24 133.448 21.6157 134.256 18.2339H130.215C129.633 19.7156 128.211 20.5535 126.304 20.5535C123.815 20.5535 121.94 19.0071 121.521 16.3008H134.352V14.8191H134.353ZM121.747 13.53C122.362 11.2103 124.107 10.0835 126.111 10.0835C128.309 10.0835 129.99 11.3396 130.377 13.53H121.747Z"
                                fill="Currentcolor" />
                        </svg> --}}


                    </div>
                    <div class="mt-1 ">
                        <img src="https://www.mayugo.net/asset/img/logo/pucpwhite.png" class="max-h-40"
                            alt="">
                        {{-- <svg width="141" class="" height="48" viewBox="0 0 141 48" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1638_129111)">
                                <path
                                    d="M21.6727 3.07812C10.0747 3.07812 0.672272 12.4803 0.672272 24.0783C0.672272 35.6767 10.0747 45.0781 21.6727 45.0781C33.2719 45.0781 42.6733 35.6767 42.6733 24.0783C42.6733 12.4811 33.2719 3.07913 21.6724 3.07913L21.6727 3.07812ZM31.3033 33.3663C30.9271 33.9832 30.1197 34.1788 29.5028 33.8002C24.5721 30.7884 18.365 30.1063 11.055 31.7764C10.3506 31.9369 9.6484 31.4956 9.48791 30.7909C9.32666 30.0862 9.76626 29.3841 10.4724 29.2236C18.4721 27.396 25.3339 28.1829 30.8695 31.5658C31.4864 31.9445 31.682 32.7494 31.3033 33.3663ZM33.8737 27.6482C33.3997 28.4186 32.3916 28.6619 31.6218 28.1879C25.9769 24.7182 17.3722 23.7134 10.6954 25.7401C9.82946 26.0017 8.91489 25.5137 8.65208 24.6493C8.39128 23.7833 8.87953 22.8705 9.74394 22.6072C17.3707 20.2931 26.8521 21.4141 33.3345 25.3976C34.1044 25.8715 34.3477 26.8796 33.8737 27.6485V27.6482ZM34.0944 21.6939C27.3261 17.6738 16.1592 17.3042 9.69705 19.2654C8.65935 19.5802 7.56198 18.9944 7.24751 17.9567C6.93304 16.9185 7.51834 15.8218 8.55679 15.5064C15.9749 13.2544 28.3066 13.6895 36.0991 18.3155C37.0344 18.8695 37.3404 20.0749 36.7862 21.0071C36.2345 21.9404 35.0258 22.2481 34.0954 21.6939H34.0944ZM57.8074 22.4643C54.1812 21.5996 53.5367 20.9928 53.5367 19.7176C53.5367 18.5129 54.6702 17.7021 56.3579 17.7021C57.9929 17.7021 59.6129 18.3178 61.3132 19.5852C61.3633 19.6235 61.4285 19.6388 61.4912 19.6288C61.5564 19.6193 61.6116 19.5844 61.6492 19.532L63.4196 17.0363C63.4924 16.9335 63.4723 16.7918 63.3745 16.7133C61.3508 15.0901 59.0738 14.3009 56.4106 14.3009C52.496 14.3009 49.7601 16.6504 49.7601 20.012C49.7601 23.6168 52.1199 24.8933 56.1974 25.8785C59.6656 26.6777 60.2524 27.3473 60.2524 28.544C60.2524 29.8706 59.0688 30.6956 57.1629 30.6956C55.0464 30.6956 53.3186 29.9809 51.3876 28.3108C51.34 28.2681 51.2748 28.2506 51.2146 28.2531C51.1494 28.2581 51.0917 28.2882 51.0516 28.3359L49.0655 30.6981C48.9827 30.7984 48.9927 30.9439 49.088 31.0291C51.3349 33.0353 54.0985 34.0936 57.0826 34.0936C61.3006 34.0936 64.0265 31.789 64.0265 28.2205C64.034 25.2095 62.231 23.5419 57.8149 22.4675L57.8074 22.4643ZM73.5709 18.8883C71.7428 18.8883 70.2431 19.6085 69.0043 21.0843V19.4232C69.0043 19.292 68.899 19.1852 68.7686 19.1852H65.5211C65.3907 19.1852 65.2854 19.292 65.2854 19.4232V37.8802C65.2854 38.0106 65.3907 38.1185 65.5211 38.1185H68.7686C68.899 38.1185 69.0043 38.0106 69.0043 37.8802V32.0548C70.2431 33.4416 71.7428 34.1212 73.5709 34.1212C76.9688 34.1212 80.4094 31.5056 80.4094 26.5055C80.4145 21.5043 76.9739 18.888 73.5734 18.888L73.5709 18.8883ZM76.6328 26.5055C76.6328 29.0506 75.0655 30.8285 72.8186 30.8285C70.5992 30.8285 68.9241 28.9703 68.9241 26.5055C68.9241 24.0404 70.5992 22.1827 72.8186 22.1827C75.0279 22.1824 76.6328 24 76.6328 26.5052V26.5055ZM89.2241 18.8883C84.8481 18.8883 81.4201 22.2576 81.4201 26.5599C81.4201 30.816 84.8255 34.1487 89.1714 34.1487C93.5624 34.1487 97.0005 30.7909 97.0005 26.5055C97.0005 22.2346 93.585 18.8888 89.2241 18.8888V18.8883ZM89.2241 30.8536C86.8969 30.8536 85.1415 28.9828 85.1415 26.5042C85.1415 24.0143 86.8367 22.2075 89.1714 22.2075C91.5136 22.2075 93.2791 24.0775 93.2791 26.5586C93.2791 29.048 91.5738 30.8536 89.2241 30.8536ZM106.344 19.1852H102.771V15.5325C102.771 15.4015 102.665 15.2947 102.535 15.2947H99.2875C99.1571 15.2947 99.0493 15.4015 99.0493 15.5325V19.1852H97.4895C97.3591 19.1852 97.2538 19.292 97.2538 19.4232V22.2135C97.2538 22.3444 97.3591 22.4515 97.4895 22.4515H99.0493V29.6725C99.0493 32.5889 100.501 34.0685 103.368 34.0685C104.531 34.0685 105.497 33.8278 106.407 33.3112C106.482 33.271 106.527 33.1908 106.527 33.1055V30.4474C106.527 30.3671 106.485 30.2894 106.414 30.2467C106.344 30.2016 106.256 30.1991 106.184 30.2367C105.559 30.5502 104.955 30.6956 104.278 30.6956C103.237 30.6956 102.771 30.2217 102.771 29.1634V22.4527H106.344C106.475 22.4527 106.58 22.3459 106.58 22.2148V19.4247C106.585 19.2935 106.48 19.1867 106.347 19.1867L106.344 19.1852ZM118.793 19.1995V18.7509C118.793 17.431 119.299 16.8425 120.433 16.8425C121.11 16.8425 121.654 16.9769 122.263 17.18C122.338 17.2036 122.416 17.1918 122.476 17.1469C122.539 17.102 122.574 17.0301 122.574 16.9538V14.2179C122.574 14.1133 122.509 14.0208 122.406 13.99C121.764 13.7986 120.942 13.6023 119.708 13.6023C116.711 13.6023 115.124 15.291 115.124 18.484V19.1711H113.564C113.434 19.1711 113.326 19.278 113.326 19.4089V22.2135C113.326 22.3444 113.434 22.4515 113.564 22.4515H115.124V33.587C115.124 33.7199 115.232 33.8252 115.362 33.8252H118.607C118.74 33.8252 118.845 33.7199 118.845 33.587V22.4522H121.877L126.521 33.587C125.995 34.7556 125.476 34.9888 124.768 34.9888C124.197 34.9888 123.592 34.8183 122.978 34.4798C122.92 34.4497 122.85 34.4447 122.79 34.4622C122.727 34.4848 122.675 34.5299 122.649 34.5901L121.549 37.005C121.496 37.1204 121.541 37.2533 121.651 37.3135C122.8 37.9354 123.836 38.2012 125.117 38.2012C127.514 38.2012 128.841 37.0828 130.007 34.0785L135.639 19.5245C135.67 19.4513 135.659 19.3685 135.614 19.3036C135.572 19.2391 135.499 19.2002 135.421 19.2002H132.041C131.938 19.2002 131.848 19.2647 131.815 19.3597L128.352 29.2487L124.56 19.3532C124.525 19.2612 124.437 19.2002 124.34 19.2002H118.793V19.1995ZM111.575 19.1852H108.328C108.197 19.1852 108.09 19.292 108.09 19.4232V33.587C108.09 33.7199 108.197 33.8252 108.328 33.8252H111.575C111.706 33.8252 111.814 33.7199 111.814 33.587V19.4242C111.814 19.293 111.708 19.1862 111.575 19.1862V19.1852ZM109.97 12.7356C108.684 12.7356 107.641 13.7768 107.641 15.063C107.641 16.35 108.684 17.3924 109.97 17.3924C111.257 17.3924 112.298 16.35 112.298 15.063C112.298 13.7771 111.254 12.7356 109.97 12.7356ZM138.413 23.7395C137.129 23.7395 136.128 22.7075 136.128 21.4544C136.128 20.2013 137.142 19.1576 138.426 19.1576C139.709 19.1576 140.71 20.1893 140.71 21.4414C140.71 22.6945 139.697 23.7395 138.413 23.7395ZM138.426 19.3848C137.254 19.3848 136.369 20.3152 136.369 21.4544C136.369 22.5932 137.249 23.511 138.413 23.511C139.584 23.511 140.469 22.5814 140.469 21.4414C140.469 20.3026 139.589 19.3848 138.426 19.3848ZM138.932 21.6764L139.579 22.5811H139.032L138.451 21.7511H137.952V22.5811H137.495V20.1828H138.563C139.123 20.1828 139.489 20.4679 139.489 20.9479C139.491 21.3411 139.263 21.5813 138.935 21.6764H138.932ZM138.546 20.5943H137.952V21.3529H138.546C138.842 21.3529 139.02 21.2077 139.02 20.9732C139.02 20.7264 138.842 20.5943 138.546 20.5943Z"
                                    fill="Currentcolor" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1638_129111">
                                    <rect width="140" height="48" fill="Currentcolor"
                                        transform="translate(0.600006)" />
                                </clipPath>
                            </defs>
                        </svg> --}}



                    </div>
                    <div class="dark:text-whiteheader text-txtnamecomntpkyr ">
                        <img class="-mt-3" src="https://www.mayugo.net/asset/img/logo/cide-pucp-new.png"
                            class="max-h-40" alt="">
                        {{-- <svg width="122" height="48" viewBox="0 0 122 48" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1638_129113)">
                                <path class=" dark:text-whiteheader text-black"
                                    d="M38.1253 32.4265L39.5934 28.995C41.2009 30.1854 43.2976 30.8155 45.3947 30.8155C46.9325 30.8155 47.9109 30.2205 47.9109 29.3103C47.8758 26.7891 38.6496 28.7499 38.5794 22.4113C38.5443 19.1898 41.4104 16.7037 45.4649 16.7037C47.8758 16.7037 50.2878 17.2992 52 18.665L50.6281 22.1697C49.0527 21.1567 47.1069 20.4504 45.2549 20.4504C43.9968 20.4504 43.1577 21.0454 43.1577 21.8163C43.1928 24.3024 52.4897 22.9366 52.5945 28.995C52.5945 32.2866 49.7981 34.5978 45.8138 34.5978C42.8785 34.5978 40.1874 33.8976 38.1248 32.4265H38.1253ZM96.5834 27.7524C96.2128 28.4109 95.6737 28.9589 95.0215 29.3403C94.3692 29.7217 93.6273 29.9227 92.8717 29.9228C90.5169 29.9228 88.6082 28.0101 88.6082 25.6508C88.6082 23.2914 90.5169 21.3787 92.8717 21.3787C93.6273 21.3788 94.3692 21.5798 95.0215 21.9612C95.6737 22.3426 96.2128 22.8906 96.5834 23.5491L100.665 21.2835C99.1361 18.5513 96.22 16.7037 92.8717 16.7037C87.9401 16.7037 83.9422 20.7091 83.9422 25.6508C83.9422 30.5919 87.9401 34.5978 92.8717 34.5978C96.22 34.5978 99.1361 32.7502 100.665 30.018L96.5834 27.7524ZM55.243 34.2474H60.3456V9.25586H55.2435L55.243 34.2474ZM103.242 9.25586V34.2474H108.344V26.76L114.391 34.2474H120.913L113.224 25.3525L120.353 17.0526H114.111L108.344 23.9531V9.25586H103.242ZM76.0658 17.0536V19.0851C75.2272 17.6841 73.1651 16.7037 70.9983 16.7037C66.5248 16.7037 62.9951 20.661 62.9951 25.6332C62.9951 30.6055 66.5248 34.5978 70.9983 34.5978C73.1651 34.5978 75.2272 33.6174 76.0658 32.2164V34.2474H81.1684V17.0536H76.0658ZM76.0658 27.787C75.332 29.0125 73.7942 29.9223 72.082 29.9223C69.7267 29.9223 67.818 28.0101 67.818 25.6508C67.818 23.2914 69.7267 21.3787 72.082 21.3787C73.7942 21.3787 75.332 22.3241 76.0658 23.5842V27.787Z"
                                    fill="Currentcolor" />
                                <path class="dark:text-whiteheader text-green2"
                                    d="M11.1781 8.70312C9.52449 8.70312 8.18418 10.0464 8.18418 11.703C8.18379 12.0966 8.26092 12.4864 8.41116 12.8501C8.5614 13.2139 8.78182 13.5444 9.05982 13.823C9.33783 14.1016 9.66798 14.3227 10.0314 14.4736C10.3949 14.6246 10.7845 14.7025 11.1781 14.7029H14.1724V11.703C14.1731 10.9081 13.858 10.1456 13.2965 9.58299C12.7349 9.02041 11.9729 8.70392 11.1781 8.70312ZM11.1781 16.7028H3.19389C1.54031 16.7028 0.200012 18.0461 0.200012 19.7032C0.200012 21.3598 1.54031 22.7031 3.19389 22.7031H11.1786C12.8316 22.7031 14.1724 21.3598 14.1724 19.7032C14.1724 18.0461 12.8316 16.7028 11.1781 16.7028Z"
                                    fill="Currentcolor" />
                                <path class="dark:text-whiteheader text-blue4"
                                    d="M30.1412 19.7032C30.1412 18.0461 28.8004 16.7028 27.1468 16.7028C25.4932 16.7028 24.1529 18.0461 24.1529 19.7032V22.7031H27.1468C27.9417 22.7023 28.7037 22.3858 29.2652 21.8233C29.8268 21.2607 30.1419 20.4981 30.1412 19.7032ZM22.157 19.7032V11.703C22.1577 10.9081 21.8426 10.1456 21.2811 9.58299C20.7195 9.02041 19.9575 8.70392 19.1626 8.70312C17.5091 8.70312 16.1688 10.0464 16.1688 11.703V19.7027C16.1688 21.3603 17.5091 22.7036 19.1626 22.7036C19.9575 22.7028 20.7195 22.3863 21.2811 21.8238C21.8426 21.2612 22.1577 20.4986 22.157 19.7037"
                                    fill="Currentcolor" />
                                <path class="dark:text-whiteheader text-yellow-500"
                                    d="M19.1626 38.7031C19.9575 38.7023 20.7195 38.3858 21.2811 37.8233C21.8426 37.2607 22.1577 36.4981 22.157 35.7032C22.1577 34.9084 21.8426 34.1458 21.2811 33.5832C20.7195 33.0206 19.9575 32.7041 19.1626 32.7033H16.1688V35.7032C16.1688 37.3598 17.5091 38.7031 19.1626 38.7031ZM19.1626 30.7034H27.1473C28.8004 30.7034 30.1412 29.3601 30.1412 27.703C30.1419 26.9081 29.8268 26.1456 29.2652 25.583C28.7037 25.0204 27.9417 24.7039 27.1468 24.7031H19.1626C17.5091 24.7031 16.1688 26.0464 16.1688 27.703C16.1684 28.0966 16.2455 28.4864 16.3957 28.8501C16.546 29.2139 16.7664 29.5444 17.0444 29.823C17.3224 30.1016 17.6526 30.3227 18.016 30.4736C18.3795 30.6246 18.7691 30.7025 19.1626 30.7029"
                                    fill="Currentcolor" />
                                <path class="dark:text-whiteheader text-red-500"
                                    d="M0.200014 27.703C0.199619 28.0966 0.276744 28.4864 0.426987 28.8501C0.577229 29.2139 0.797647 29.5444 1.07565 29.823C1.35366 30.1016 1.68381 30.3227 2.04726 30.4736C2.41071 30.6246 2.80033 30.7025 3.19389 30.7029C3.98876 30.7021 4.75076 30.3856 5.3123 29.823C5.87384 29.2605 6.18893 28.4979 6.18827 27.703V24.7031H3.19389C1.54032 24.7031 0.200014 26.0464 0.200014 27.703ZM8.18419 27.703V35.7027C8.18419 37.3598 9.52449 38.7031 11.1781 38.7031C11.9729 38.7023 12.7349 38.3858 13.2965 37.8233C13.858 37.2607 14.1731 36.4981 14.1724 35.7032V27.703C14.1728 27.3094 14.0957 26.9196 13.9454 26.5558C13.7951 26.192 13.5747 25.8614 13.2966 25.5828C13.0186 25.3043 12.6884 25.0832 12.3248 24.9323C11.9613 24.7813 11.5717 24.7035 11.1781 24.7031C9.52449 24.7031 8.18419 26.0464 8.18419 27.703Z"
                                    fill="Currentcolor" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1638_129113">
                                    <rect width="121" height="48" fill="Currentcolor"
                                        transform="translate(0.200012)" />
                                </clipPath>
                            </defs>
                        </svg> --}}

                    </div>
                    <div class="dark:text-whiteheader text-txtnamecomntpkyr">
                        <img class="mt-7" src="https://www.mayugo.net/asset/img/logo/logo-white-nexum-new.png"
                            class="" alt="">
                        {{-- <svg width="164" height="48" viewBox="0 0 164 48" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1638_129119)">
                                <path class="dark:text-whiteheader text-black"
                                    d="M45.8503 14.0146H53.4724C58.3317 14.0146 62.346 16.8261 62.346 23.2456V24.5945C62.346 31.0628 58.5918 33.9719 53.6187 33.9719H45.8503V14.0146ZM50.1083 17.6387V30.3315H53.3749C56.1377 30.3315 57.9905 28.5275 57.9905 24.5133V23.4569C57.9905 19.4427 56.0402 17.6387 53.2286 17.6387H50.1083ZM64.605 17.8338H68.0179L68.5704 21.5879C69.2205 19.0364 70.8782 17.6712 73.8848 17.6712H74.9412V21.978H73.186C69.7243 21.978 68.8792 23.1806 68.8792 26.5935V34.0207H64.67V17.8338H64.605ZM75.7863 26.2522V25.7972C75.7863 20.3853 79.2479 17.4275 83.961 17.4275C88.7716 17.4275 92.1357 20.3853 92.1357 25.7972V26.2522C92.1357 31.5666 88.8691 34.427 83.961 34.427C78.7441 34.3782 75.7863 31.5829 75.7863 26.2522ZM87.8289 26.2035V25.7972C87.8289 22.7906 86.3175 20.9866 83.9122 20.9866C81.5557 20.9866 79.9955 22.6443 79.9955 25.7972V26.2035C79.9955 29.1126 81.507 30.7703 83.9122 30.7703C86.3175 30.7215 87.8289 29.1126 87.8289 26.2035ZM94.346 17.8338H97.8564L98.2627 20.8891C99.1078 18.8414 100.912 17.4275 103.577 17.4275C107.689 17.4275 110.403 20.3853 110.403 25.8622V26.3173C110.403 31.6316 107.396 34.4432 103.577 34.4432C101.026 34.4432 99.2703 33.2893 98.4089 31.4366V39.6113H94.2972L94.346 17.8338ZM106.129 26.2035V25.8459C106.129 22.6281 104.471 21.0354 102.261 21.0354C99.9041 21.0354 98.3439 22.8393 98.3439 25.8459V26.1547C98.3439 29.0151 99.8554 30.819 102.212 30.819C104.633 30.7703 106.129 29.2263 106.129 26.2035ZM116.627 31.0303L116.27 33.9881H112.662V12.4219H116.774V20.6941C117.684 18.5813 119.488 17.4275 122.039 17.4275C125.907 17.4762 128.768 20.1415 128.768 25.5047V26.0085C128.768 31.3716 126.053 34.4432 121.942 34.4432C119.228 34.3782 117.472 33.1268 116.627 31.0303ZM124.444 26.0085V25.6022C124.444 22.6443 122.836 20.9866 120.577 20.9866C118.269 20.9866 116.66 22.8393 116.66 25.6509V26.0085C116.66 29.0151 118.22 30.7703 120.528 30.7703C122.998 30.7703 124.444 29.2263 124.444 26.0085ZM130.571 26.2522V25.7972C130.571 20.3853 134.033 17.4275 138.746 17.4275C143.557 17.4275 146.921 20.3853 146.921 25.7972V26.2522C146.921 31.5666 143.605 34.427 138.746 34.427C133.529 34.3782 130.571 31.5829 130.571 26.2522ZM142.647 26.2035V25.7972C142.647 22.7906 141.135 20.9866 138.73 20.9866C136.373 20.9866 134.813 22.6443 134.813 25.7972V26.2035C134.813 29.1126 136.325 30.7703 138.73 30.7703C141.151 30.7215 142.647 29.1126 142.647 26.2035ZM152.43 25.6022L146.758 17.8338H151.618L154.884 22.6931L158.2 17.8338H163.01L157.257 25.5534L163.319 33.9881H158.557L154.852 28.625L151.244 33.9881H146.271L152.43 25.6022Z"
                                    fill="Currentcolor" />
                                <path class="dark:text-whiteheader text-bluefacebook"
                                    d="M19.6522 14.0132L10.2261 20.0264L19.6522 26.0396L10.2261 32.0528L0.799988 26.0071L10.2261 19.9939L0.799988 14.0132L10.2261 8L19.6522 14.0132ZM10.1773 33.9868L19.6034 27.9736L29.0295 33.9868L19.6034 40L10.1773 33.9868ZM19.6522 26.0071L29.0783 19.9939L19.6522 14.0132L29.0295 8L38.4557 14.0132L29.0295 20.0264L38.4557 26.0396L29.0295 32.0528L19.6522 26.0071Z"
                                    fill="Currentcolor" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1638_129119">
                                    <rect width="163" height="48" fill="Currentcolor"
                                        transform="translate(0.799988)" />
                                </clipPath>
                            </defs>
                        </svg> --}}

                    </div>
                    <div class="dark:text-whiteheader text-txtnamecomntpkyr ">
                        <img class="mt-3" src="https://www.mayugo.net/asset/img/logo/proinovate.png"
                            class="max-h-40" alt="">
                        {{-- <svg width="121" height="48" viewBox="0 0 121 48" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1638_129122)">
                                <path class="dark:text-whiteheader text-gray14"
                                    d="M38.9307 21.8009C38.9307 19.6682 36.798 17.3934 33.2435 17.3934C29.2625 17.3934 24.7127 20.3791 24.0018 26.3507C23.2909 32.3223 26.9876 35.0237 30.8264 35.0237C34.6653 35.0237 36.5136 33.6019 38.5042 31.6114C36.798 29.4787 34.5231 30.4739 34.0966 30.6161C33.67 30.9005 32.9591 31.1848 31.8217 31.1848C30.3999 31.1848 28.8359 30.4739 28.8359 27.7725C38.2198 26.7773 38.9307 23.9336 38.9307 21.8009ZM34.3809 22.0853C34.3809 22.7962 34.0966 23.9336 29.4046 24.5024C30.3999 20.9479 32.2482 20.6635 33.1013 20.6635C33.9544 20.8057 34.3809 21.3744 34.3809 22.0853ZM18.599 22.654C18.599 22.654 16.6084 28.91 16.4663 29.4787C16.4663 28.91 14.9023 17.6777 14.9023 17.6777C11.4899 17.6777 9.64161 20.0948 8.78853 22.654C8.78853 22.654 6.37147 28.91 6.22929 29.4787C6.08711 29.0521 5.80275 22.7962 5.80275 22.7962C5.51839 19.6682 2.67478 17.6777 0.399902 17.6777L3.2435 34.7393C6.79801 34.7393 8.78853 32.3223 9.78379 29.763C9.78379 29.763 11.9165 24.218 12.0587 23.9336C12.0587 24.218 13.6227 34.7393 13.6227 34.7393C17.1772 34.7393 19.1677 32.4645 20.1629 30.0474L25.1392 17.6777C21.4426 17.6777 19.5942 20.0948 18.599 22.654ZM52.1535 17.2512C50.0208 17.2512 48.3146 18.3886 46.8928 20.237L48.0302 10C45.0444 10 42.7696 12.5592 42.2008 16.2559L39.926 34.5972C41.6321 34.5972 43.3383 34.1706 44.3335 32.891C45.1866 34.0284 46.4663 34.8815 48.3146 34.8815C53.2909 34.8815 56.7032 29.1943 56.7032 23.7915C56.8454 18.8152 54.4283 17.2512 52.1535 17.2512ZM51.5847 26.0663C51.016 29.0521 49.452 31.0427 47.7459 31.0427C46.1819 31.0427 45.471 30.3318 45.471 30.3318C45.7554 27.7725 46.0397 26.0663 46.6084 24.6445C47.1771 23.2227 48.599 21.09 50.0208 21.09C51.4426 21.2322 52.1535 23.0806 51.5847 26.0663ZM69.2151 17.6777H65.8027V17.5355C66.0871 15.2607 66.5136 14.1232 68.362 13.981C69.4994 13.8389 70.0681 13.2701 70.2103 12.5592C70.3525 11.9905 70.6369 10.1422 70.6369 10.1422C63.67 10.1422 61.5373 13.128 60.9686 17.6777V17.8199H60.8264C59.689 17.8199 58.4094 19.0995 58.2672 20.6635L58.125 21.2322H60.3999L58.4094 37.1564L57.8407 40C57.9828 40 57.9828 40 58.125 40C61.3952 39.8578 63.3857 37.2986 63.9544 33.6019L65.5184 21.09H66.6558C67.6511 21.09 68.9307 20.0948 69.2151 18.2464V17.6777ZM87.1298 17.3934C83.1487 17.3934 79.452 20.3791 78.3146 24.9289C77.1771 29.4787 78.8833 35.0237 84.7127 35.0237C90.5421 35.0237 93.9544 29.3365 93.9544 24.6445C93.8122 19.9526 90.6843 17.3934 87.1298 17.3934ZM88.6937 25.9242C88.5515 28.0569 87.5563 31.1848 84.997 31.1848C82.4378 31.1848 82.8644 27.4882 83.0065 25.782C83.2909 23.9336 84.2862 21.2322 86.561 21.2322C88.6937 21.2322 88.9781 23.6493 88.6937 25.9242ZM113.575 22.654C113.575 22.654 111.585 28.91 111.443 29.4787C111.443 28.91 109.879 17.6777 109.879 17.6777C106.466 17.6777 104.618 20.0948 103.765 22.654C103.765 22.654 101.348 28.91 101.206 29.4787C101.206 29.0521 100.779 22.7962 100.779 22.7962C100.637 19.6682 97.6511 17.8199 95.3762 17.8199L98.2198 34.8815C101.774 34.8815 103.765 32.4645 104.76 29.9052C104.76 29.9052 106.893 24.3602 107.035 24.0758C107.035 24.3602 108.599 34.8815 108.599 34.8815C112.153 34.8815 114.144 32.6066 115.139 30.1896L119.831 17.6777C116.277 17.6777 114.428 20.0948 113.575 22.654ZM72.4852 10.1422L69.6416 33.4597L69.0729 36.3033C69.2151 36.3033 69.2151 36.3033 69.3572 36.3033C72.4852 36.3033 74.7601 33.4597 75.0444 30.0474L76.7506 16.6825C77.1771 12.7014 74.6179 10.1422 72.4852 10.1422Z"
                                    fill="Currentcolor" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1638_129122">
                                    <rect class="" width="120" height="48" fill="Currentcolor"
                                        transform="translate(0.399902)" />
                                </clipPath>
                            </defs>
                        </svg> --}}

                    </div>
                    <div class="dark:text-whiteheader text-blue ">
                        <img src="https://www.mayugo.net/asset/img/logo/ingneieros-industriales-logo.png"
                            class="max-h-40" alt="">
                        {{--  <svg width="94" height="48" viewBox="0 0 94 48" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M76.0842 21.2974C76.4414 21.9136 76.5583 22.6148 76.5969 23.4031L76.6476 24.4537V31.8007L76.6994 32.8524C76.803 34.5701 78.0698 35.8401 79.8007 35.9482L80.8469 36V24.4537L80.8987 23.4031C80.9417 22.6236 81.0575 21.9092 81.4202 21.2885C81.7898 20.6519 82.3204 20.1237 82.9587 19.757C83.597 19.3902 84.3205 19.1979 85.0567 19.1992C85.7928 19.2006 86.5157 19.3955 87.1526 19.7646C87.7896 20.1336 88.3183 20.6638 88.6855 21.3018C89.0427 21.9181 89.1541 22.6325 89.1971 23.4031L89.2489 24.4504V31.8007L89.3007 32.8524C89.4088 34.5789 90.6656 35.849 92.402 35.9482L93.4482 36V23.4031C93.4482 21.1756 92.5636 19.0393 90.9888 17.4639C89.4141 15.8886 87.2781 15.0031 85.0507 15.0022C83.8585 15.001 82.6797 15.2541 81.5932 15.7448C80.5066 16.2355 79.5373 16.9525 78.75 17.8477C77.9623 16.9528 76.993 16.2361 75.9065 15.7452C74.8201 15.2544 73.6415 15.0007 72.4493 15.0011C70.7052 15.0011 69.0868 15.5303 67.7462 16.4442C66.9281 15.5314 65.098 15.0011 64.0474 15.0011V36L65.098 35.9482C66.8554 35.8324 68.1254 34.5965 68.1938 32.8524L68.25 31.8007V24.4537L68.3018 23.4031C68.3459 22.6104 68.4562 21.9136 68.8145 21.2929C69.1844 20.6567 69.7147 20.1286 70.3526 19.7614C70.9904 19.3943 71.7134 19.2008 72.4493 19.2004C73.1859 19.2006 73.9094 19.3944 74.5474 19.7625C75.1854 20.1305 75.7154 20.6598 76.0842 21.2974ZM4.19934 35.9493L5.25 36H20.9989L20.9471 34.9526C20.8049 33.2262 19.5822 31.9649 17.8502 31.8525L16.7996 31.8007H7.35132L19.9482 19.1993L19.8964 18.1531C19.8148 16.409 18.5404 15.1488 16.7996 15.0529L15.7489 15.0055L0 15.0011L0.0518165 16.0518C0.189626 17.7617 1.42991 19.0494 3.14757 19.1486L4.19934 19.2004H13.6476L1.05066 31.8018L1.10248 32.8524C1.20611 34.5833 2.45522 35.8368 4.19934 35.9482V35.9493ZM59.9252 18.0748C60.9003 19.0498 61.6739 20.2072 62.2016 21.4812C62.7294 22.7551 63.001 24.1205 63.001 25.4994C63.001 26.8784 62.7294 28.2438 62.2016 29.5177C61.6739 30.7917 60.9003 31.9491 59.9252 32.9241C57.9551 34.8926 55.284 35.9984 52.4989 35.9984C49.7138 35.9984 47.0427 34.8926 45.0726 32.9241C40.9725 28.824 40.9725 22.1749 45.0726 18.0748C46.0469 17.1002 47.2036 16.327 48.4766 15.7994C49.7497 15.2719 51.1142 15.0002 52.4923 15C53.8726 14.999 55.2395 15.2702 56.5149 15.798C57.7904 16.3258 58.9492 17.0999 59.9252 18.0759V18.0748ZM56.954 21.0482C58.135 22.2301 58.7984 23.8325 58.7984 25.5033C58.7984 27.1741 58.135 28.7765 56.954 29.9584C55.7721 31.1394 54.1697 31.8028 52.4989 31.8028C50.8281 31.8028 49.2257 31.1394 48.0438 29.9584C46.8628 28.7765 46.1994 27.1741 46.1994 25.5033C46.1994 23.8325 46.8628 22.2301 48.0438 21.0482C49.2257 19.8672 50.8281 19.2038 52.4989 19.2038C54.1697 19.2038 55.7721 19.8672 56.954 21.0482ZM30.456 15C31.8341 15.0004 33.1987 15.2722 34.4717 15.8C35.7448 16.3277 36.9015 17.1011 37.8756 18.0759C41.9768 22.1749 41.9768 28.8251 37.8756 32.9241C35.9055 34.8926 33.2344 35.9984 30.4493 35.9984C27.6643 35.9984 24.9932 34.8926 23.023 32.9241C18.9229 28.824 18.9229 22.1749 23.023 18.0748C23.9973 17.1002 25.154 16.327 26.4271 15.7994C27.7001 15.2719 29.0647 15.0002 30.4427 15H30.456ZM34.9044 21.046C36.0858 22.2279 36.7494 23.8306 36.7494 25.5017C36.7494 27.1727 36.0858 28.7754 34.9044 29.9573C33.7226 31.1383 32.1201 31.8017 30.4493 31.8017C28.7785 31.8017 27.1761 31.1383 25.9942 29.9573C24.8132 28.7754 24.1498 27.173 24.1498 25.5022C24.1498 23.8314 24.8132 22.229 25.9942 21.0471C27.1761 19.8661 28.7785 19.2027 30.4493 19.2027C32.1201 19.2027 33.7226 19.8661 34.9044 21.0471V21.046Z"
                                fill="Currentcolor" />
                        </svg> --}}

                    </div>

                </div>
                {{-- /////////////// version movil de los iconos de empresas que respaldan///////////  --}}
                <div class="sm:hidden grid grid-cols-1">
                    <div class="sm:hidden flex  your-class ">
                        <div class="dark:text-whiteheader text-blue3 mt-1 ">

                            <img src="https://www.mayugo.net/asset/img/logo/Logo-mario-caceres.png" class=" "
                                alt="">
                            {{-- <svg class="" width="135" height="24" viewBox="0 0 135 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg ">
                                <path
                                    d="M27.116 6.70035C22.2353 6.70035 18.4217 10.4054 18.4217 15.3654C18.4217 20.3254 22.1389 23.9988 27.116 23.9988C32.0931 23.9988 35.875 20.262 35.875 15.3337C35.875 10.4371 32.1577 6.70035 27.116 6.70035ZM27.1489 20.4242C24.3695 20.4242 22.3328 18.2656 22.3328 15.3666C22.3328 12.4348 24.3366 10.2774 27.116 10.2774C29.9283 10.2774 31.9638 12.4677 31.9638 15.3666C31.9638 18.2656 29.9283 20.4242 27.1489 20.4242ZM36.9409 10.47H39.3652V23.678H43.2435V7.02233H36.9409V10.47ZM8.66141 10.2761C10.6981 10.2761 12.314 11.5323 12.9275 13.4007H17.0326C16.2886 9.40658 12.9921 6.70035 8.69434 6.70035C3.8136 6.70035 0 10.4054 0 15.3666C0 20.3279 3.71726 24 8.69434 24C12.8958 24 16.2569 21.2938 17.0008 17.2667H12.9275C12.3457 19.1351 10.7298 20.4242 8.69314 20.4242C5.88079 20.4242 3.90994 18.2656 3.90994 15.3666C3.91117 12.4348 5.8503 10.2761 8.66141 10.2761ZM110.63 13.7556L107.786 13.3373C106.429 13.1446 105.459 12.6933 105.459 11.6299C105.459 10.47 106.72 9.89074 108.432 9.89074C110.307 9.89074 111.503 10.6957 111.762 12.0165H115.511C115.09 8.66629 112.504 6.70155 108.53 6.70155C104.425 6.70155 101.71 8.79559 101.71 11.7591C101.71 14.5934 103.488 16.2374 107.075 16.7521L109.919 17.1704C111.309 17.3631 112.085 17.9119 112.085 18.9424C112.085 20.2632 110.728 20.8108 108.853 20.8108C106.558 20.8108 105.265 19.8766 105.071 18.4595H101.257C101.614 21.7133 104.166 24 108.82 24C113.055 24 115.866 22.067 115.866 18.7485C115.866 15.7849 113.83 14.2385 110.63 13.7556ZM41.3044 0.160984C39.8824 0.160984 38.8155 1.19152 38.8155 2.60867C38.8155 4.02581 39.8812 5.05635 41.3044 5.05635C42.7264 5.05635 43.7936 4.02581 43.7936 2.60867C43.7936 1.19152 42.7264 0.160984 41.3044 0.160984ZM98.2196 12.725C98.2196 9.11753 96.0221 6.70155 91.368 6.70155C86.9726 6.70155 84.5163 8.92485 84.0311 12.3396H87.8775C88.0714 11.0189 89.1056 9.92366 91.3035 9.92366C93.2756 9.92366 94.245 10.7932 94.245 11.8567C94.245 13.2422 92.4667 13.5958 90.2692 13.8215C87.2959 14.1434 83.6115 15.1739 83.6115 19.04C83.6115 22.0365 85.842 23.9683 89.3974 23.9683C92.1765 23.9683 93.9217 22.8085 94.7951 20.9718C94.9245 22.6146 96.1526 23.678 97.866 23.678H100.128V20.2315H98.2207V12.725H98.2196ZM94.4059 16.9131C94.4059 19.1363 92.4667 20.7791 90.1069 20.7791C88.6522 20.7791 87.4241 20.1669 87.4241 18.879C87.4241 17.2362 89.3959 16.785 91.206 16.5923C92.9512 16.4313 93.9206 16.0447 94.4059 15.3032V16.9131ZM73.8184 6.70035C71.6524 6.70035 69.8426 7.60283 68.55 9.11633V0H64.6717V23.678H68.4851V21.4877C69.7777 23.0658 71.6209 24 73.8184 24C78.4721 24 81.9956 20.3279 81.9956 15.3666C81.9956 10.4054 78.4076 6.70035 73.8184 6.70035ZM73.2367 20.4242C70.4572 20.4242 68.4206 18.2656 68.4206 15.3666C68.4206 12.4677 70.4891 10.2774 73.2682 10.2774C76.0807 10.2774 78.0514 12.436 78.0514 15.3666C78.0514 18.2656 76.0159 20.4242 73.2367 20.4242ZM55.3954 6.70035C52.8746 6.70035 51.2257 7.73089 50.2564 9.18094V7.02233H46.4096V23.6768H50.2879V14.6252C50.2879 12.0799 51.9037 10.2761 54.2955 10.2761C56.526 10.2761 57.915 11.8543 57.915 14.1422V23.678H61.7932V13.8531C61.7947 9.6639 59.6299 6.70035 55.3954 6.70035ZM134.353 14.8191C134.353 10.0517 130.863 6.70155 126.176 6.70155C121.199 6.70155 117.546 10.4383 117.546 15.3666C117.546 20.5535 121.457 24 126.241 24C130.281 24 133.448 21.6157 134.256 18.2339H130.215C129.633 19.7156 128.211 20.5535 126.304 20.5535C123.815 20.5535 121.94 19.0071 121.521 16.3008H134.352V14.8191H134.353ZM121.747 13.53C122.362 11.2103 124.107 10.0835 126.111 10.0835C128.309 10.0835 129.99 11.3396 130.377 13.53H121.747Z"
                                    fill="Currentcolor" />
                            </svg> --}}


                        </div>
                        <div class="mt-1 ">
                            <img src="https://www.mayugo.net/asset/img/logo/pucpwhite.png" class=""
                                alt="">
                            {{-- <svg width="141" class="" height="48" viewBox="0 0 141 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1638_129111)">
                                    <path
                                        d="M21.6727 3.07812C10.0747 3.07812 0.672272 12.4803 0.672272 24.0783C0.672272 35.6767 10.0747 45.0781 21.6727 45.0781C33.2719 45.0781 42.6733 35.6767 42.6733 24.0783C42.6733 12.4811 33.2719 3.07913 21.6724 3.07913L21.6727 3.07812ZM31.3033 33.3663C30.9271 33.9832 30.1197 34.1788 29.5028 33.8002C24.5721 30.7884 18.365 30.1063 11.055 31.7764C10.3506 31.9369 9.6484 31.4956 9.48791 30.7909C9.32666 30.0862 9.76626 29.3841 10.4724 29.2236C18.4721 27.396 25.3339 28.1829 30.8695 31.5658C31.4864 31.9445 31.682 32.7494 31.3033 33.3663ZM33.8737 27.6482C33.3997 28.4186 32.3916 28.6619 31.6218 28.1879C25.9769 24.7182 17.3722 23.7134 10.6954 25.7401C9.82946 26.0017 8.91489 25.5137 8.65208 24.6493C8.39128 23.7833 8.87953 22.8705 9.74394 22.6072C17.3707 20.2931 26.8521 21.4141 33.3345 25.3976C34.1044 25.8715 34.3477 26.8796 33.8737 27.6485V27.6482ZM34.0944 21.6939C27.3261 17.6738 16.1592 17.3042 9.69705 19.2654C8.65935 19.5802 7.56198 18.9944 7.24751 17.9567C6.93304 16.9185 7.51834 15.8218 8.55679 15.5064C15.9749 13.2544 28.3066 13.6895 36.0991 18.3155C37.0344 18.8695 37.3404 20.0749 36.7862 21.0071C36.2345 21.9404 35.0258 22.2481 34.0954 21.6939H34.0944ZM57.8074 22.4643C54.1812 21.5996 53.5367 20.9928 53.5367 19.7176C53.5367 18.5129 54.6702 17.7021 56.3579 17.7021C57.9929 17.7021 59.6129 18.3178 61.3132 19.5852C61.3633 19.6235 61.4285 19.6388 61.4912 19.6288C61.5564 19.6193 61.6116 19.5844 61.6492 19.532L63.4196 17.0363C63.4924 16.9335 63.4723 16.7918 63.3745 16.7133C61.3508 15.0901 59.0738 14.3009 56.4106 14.3009C52.496 14.3009 49.7601 16.6504 49.7601 20.012C49.7601 23.6168 52.1199 24.8933 56.1974 25.8785C59.6656 26.6777 60.2524 27.3473 60.2524 28.544C60.2524 29.8706 59.0688 30.6956 57.1629 30.6956C55.0464 30.6956 53.3186 29.9809 51.3876 28.3108C51.34 28.2681 51.2748 28.2506 51.2146 28.2531C51.1494 28.2581 51.0917 28.2882 51.0516 28.3359L49.0655 30.6981C48.9827 30.7984 48.9927 30.9439 49.088 31.0291C51.3349 33.0353 54.0985 34.0936 57.0826 34.0936C61.3006 34.0936 64.0265 31.789 64.0265 28.2205C64.034 25.2095 62.231 23.5419 57.8149 22.4675L57.8074 22.4643ZM73.5709 18.8883C71.7428 18.8883 70.2431 19.6085 69.0043 21.0843V19.4232C69.0043 19.292 68.899 19.1852 68.7686 19.1852H65.5211C65.3907 19.1852 65.2854 19.292 65.2854 19.4232V37.8802C65.2854 38.0106 65.3907 38.1185 65.5211 38.1185H68.7686C68.899 38.1185 69.0043 38.0106 69.0043 37.8802V32.0548C70.2431 33.4416 71.7428 34.1212 73.5709 34.1212C76.9688 34.1212 80.4094 31.5056 80.4094 26.5055C80.4145 21.5043 76.9739 18.888 73.5734 18.888L73.5709 18.8883ZM76.6328 26.5055C76.6328 29.0506 75.0655 30.8285 72.8186 30.8285C70.5992 30.8285 68.9241 28.9703 68.9241 26.5055C68.9241 24.0404 70.5992 22.1827 72.8186 22.1827C75.0279 22.1824 76.6328 24 76.6328 26.5052V26.5055ZM89.2241 18.8883C84.8481 18.8883 81.4201 22.2576 81.4201 26.5599C81.4201 30.816 84.8255 34.1487 89.1714 34.1487C93.5624 34.1487 97.0005 30.7909 97.0005 26.5055C97.0005 22.2346 93.585 18.8888 89.2241 18.8888V18.8883ZM89.2241 30.8536C86.8969 30.8536 85.1415 28.9828 85.1415 26.5042C85.1415 24.0143 86.8367 22.2075 89.1714 22.2075C91.5136 22.2075 93.2791 24.0775 93.2791 26.5586C93.2791 29.048 91.5738 30.8536 89.2241 30.8536ZM106.344 19.1852H102.771V15.5325C102.771 15.4015 102.665 15.2947 102.535 15.2947H99.2875C99.1571 15.2947 99.0493 15.4015 99.0493 15.5325V19.1852H97.4895C97.3591 19.1852 97.2538 19.292 97.2538 19.4232V22.2135C97.2538 22.3444 97.3591 22.4515 97.4895 22.4515H99.0493V29.6725C99.0493 32.5889 100.501 34.0685 103.368 34.0685C104.531 34.0685 105.497 33.8278 106.407 33.3112C106.482 33.271 106.527 33.1908 106.527 33.1055V30.4474C106.527 30.3671 106.485 30.2894 106.414 30.2467C106.344 30.2016 106.256 30.1991 106.184 30.2367C105.559 30.5502 104.955 30.6956 104.278 30.6956C103.237 30.6956 102.771 30.2217 102.771 29.1634V22.4527H106.344C106.475 22.4527 106.58 22.3459 106.58 22.2148V19.4247C106.585 19.2935 106.48 19.1867 106.347 19.1867L106.344 19.1852ZM118.793 19.1995V18.7509C118.793 17.431 119.299 16.8425 120.433 16.8425C121.11 16.8425 121.654 16.9769 122.263 17.18C122.338 17.2036 122.416 17.1918 122.476 17.1469C122.539 17.102 122.574 17.0301 122.574 16.9538V14.2179C122.574 14.1133 122.509 14.0208 122.406 13.99C121.764 13.7986 120.942 13.6023 119.708 13.6023C116.711 13.6023 115.124 15.291 115.124 18.484V19.1711H113.564C113.434 19.1711 113.326 19.278 113.326 19.4089V22.2135C113.326 22.3444 113.434 22.4515 113.564 22.4515H115.124V33.587C115.124 33.7199 115.232 33.8252 115.362 33.8252H118.607C118.74 33.8252 118.845 33.7199 118.845 33.587V22.4522H121.877L126.521 33.587C125.995 34.7556 125.476 34.9888 124.768 34.9888C124.197 34.9888 123.592 34.8183 122.978 34.4798C122.92 34.4497 122.85 34.4447 122.79 34.4622C122.727 34.4848 122.675 34.5299 122.649 34.5901L121.549 37.005C121.496 37.1204 121.541 37.2533 121.651 37.3135C122.8 37.9354 123.836 38.2012 125.117 38.2012C127.514 38.2012 128.841 37.0828 130.007 34.0785L135.639 19.5245C135.67 19.4513 135.659 19.3685 135.614 19.3036C135.572 19.2391 135.499 19.2002 135.421 19.2002H132.041C131.938 19.2002 131.848 19.2647 131.815 19.3597L128.352 29.2487L124.56 19.3532C124.525 19.2612 124.437 19.2002 124.34 19.2002H118.793V19.1995ZM111.575 19.1852H108.328C108.197 19.1852 108.09 19.292 108.09 19.4232V33.587C108.09 33.7199 108.197 33.8252 108.328 33.8252H111.575C111.706 33.8252 111.814 33.7199 111.814 33.587V19.4242C111.814 19.293 111.708 19.1862 111.575 19.1862V19.1852ZM109.97 12.7356C108.684 12.7356 107.641 13.7768 107.641 15.063C107.641 16.35 108.684 17.3924 109.97 17.3924C111.257 17.3924 112.298 16.35 112.298 15.063C112.298 13.7771 111.254 12.7356 109.97 12.7356ZM138.413 23.7395C137.129 23.7395 136.128 22.7075 136.128 21.4544C136.128 20.2013 137.142 19.1576 138.426 19.1576C139.709 19.1576 140.71 20.1893 140.71 21.4414C140.71 22.6945 139.697 23.7395 138.413 23.7395ZM138.426 19.3848C137.254 19.3848 136.369 20.3152 136.369 21.4544C136.369 22.5932 137.249 23.511 138.413 23.511C139.584 23.511 140.469 22.5814 140.469 21.4414C140.469 20.3026 139.589 19.3848 138.426 19.3848ZM138.932 21.6764L139.579 22.5811H139.032L138.451 21.7511H137.952V22.5811H137.495V20.1828H138.563C139.123 20.1828 139.489 20.4679 139.489 20.9479C139.491 21.3411 139.263 21.5813 138.935 21.6764H138.932ZM138.546 20.5943H137.952V21.3529H138.546C138.842 21.3529 139.02 21.2077 139.02 20.9732C139.02 20.7264 138.842 20.5943 138.546 20.5943Z"
                                        fill="Currentcolor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1638_129111">
                                        <rect width="140" height="48" fill="Currentcolor"
                                            transform="translate(0.600006)" />
                                    </clipPath>
                                </defs>
                            </svg> --}}



                        </div>
                        <div class="dark:text-whiteheader text-txtnamecomntpkyr ">
                            <img class="-mt-3" src="https://www.mayugo.net/asset/img/logo/cide-pucp-new.png"
                                class="" alt="">
                            {{-- <svg width="122" height="48" viewBox="0 0 122 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1638_129113)">
                                    <path class=" dark:text-whiteheader text-black"
                                        d="M38.1253 32.4265L39.5934 28.995C41.2009 30.1854 43.2976 30.8155 45.3947 30.8155C46.9325 30.8155 47.9109 30.2205 47.9109 29.3103C47.8758 26.7891 38.6496 28.7499 38.5794 22.4113C38.5443 19.1898 41.4104 16.7037 45.4649 16.7037C47.8758 16.7037 50.2878 17.2992 52 18.665L50.6281 22.1697C49.0527 21.1567 47.1069 20.4504 45.2549 20.4504C43.9968 20.4504 43.1577 21.0454 43.1577 21.8163C43.1928 24.3024 52.4897 22.9366 52.5945 28.995C52.5945 32.2866 49.7981 34.5978 45.8138 34.5978C42.8785 34.5978 40.1874 33.8976 38.1248 32.4265H38.1253ZM96.5834 27.7524C96.2128 28.4109 95.6737 28.9589 95.0215 29.3403C94.3692 29.7217 93.6273 29.9227 92.8717 29.9228C90.5169 29.9228 88.6082 28.0101 88.6082 25.6508C88.6082 23.2914 90.5169 21.3787 92.8717 21.3787C93.6273 21.3788 94.3692 21.5798 95.0215 21.9612C95.6737 22.3426 96.2128 22.8906 96.5834 23.5491L100.665 21.2835C99.1361 18.5513 96.22 16.7037 92.8717 16.7037C87.9401 16.7037 83.9422 20.7091 83.9422 25.6508C83.9422 30.5919 87.9401 34.5978 92.8717 34.5978C96.22 34.5978 99.1361 32.7502 100.665 30.018L96.5834 27.7524ZM55.243 34.2474H60.3456V9.25586H55.2435L55.243 34.2474ZM103.242 9.25586V34.2474H108.344V26.76L114.391 34.2474H120.913L113.224 25.3525L120.353 17.0526H114.111L108.344 23.9531V9.25586H103.242ZM76.0658 17.0536V19.0851C75.2272 17.6841 73.1651 16.7037 70.9983 16.7037C66.5248 16.7037 62.9951 20.661 62.9951 25.6332C62.9951 30.6055 66.5248 34.5978 70.9983 34.5978C73.1651 34.5978 75.2272 33.6174 76.0658 32.2164V34.2474H81.1684V17.0536H76.0658ZM76.0658 27.787C75.332 29.0125 73.7942 29.9223 72.082 29.9223C69.7267 29.9223 67.818 28.0101 67.818 25.6508C67.818 23.2914 69.7267 21.3787 72.082 21.3787C73.7942 21.3787 75.332 22.3241 76.0658 23.5842V27.787Z"
                                        fill="Currentcolor" />
                                    <path class="dark:text-whiteheader text-green2"
                                        d="M11.1781 8.70312C9.52449 8.70312 8.18418 10.0464 8.18418 11.703C8.18379 12.0966 8.26092 12.4864 8.41116 12.8501C8.5614 13.2139 8.78182 13.5444 9.05982 13.823C9.33783 14.1016 9.66798 14.3227 10.0314 14.4736C10.3949 14.6246 10.7845 14.7025 11.1781 14.7029H14.1724V11.703C14.1731 10.9081 13.858 10.1456 13.2965 9.58299C12.7349 9.02041 11.9729 8.70392 11.1781 8.70312ZM11.1781 16.7028H3.19389C1.54031 16.7028 0.200012 18.0461 0.200012 19.7032C0.200012 21.3598 1.54031 22.7031 3.19389 22.7031H11.1786C12.8316 22.7031 14.1724 21.3598 14.1724 19.7032C14.1724 18.0461 12.8316 16.7028 11.1781 16.7028Z"
                                        fill="Currentcolor" />
                                    <path class="dark:text-whiteheader text-blue4"
                                        d="M30.1412 19.7032C30.1412 18.0461 28.8004 16.7028 27.1468 16.7028C25.4932 16.7028 24.1529 18.0461 24.1529 19.7032V22.7031H27.1468C27.9417 22.7023 28.7037 22.3858 29.2652 21.8233C29.8268 21.2607 30.1419 20.4981 30.1412 19.7032ZM22.157 19.7032V11.703C22.1577 10.9081 21.8426 10.1456 21.2811 9.58299C20.7195 9.02041 19.9575 8.70392 19.1626 8.70312C17.5091 8.70312 16.1688 10.0464 16.1688 11.703V19.7027C16.1688 21.3603 17.5091 22.7036 19.1626 22.7036C19.9575 22.7028 20.7195 22.3863 21.2811 21.8238C21.8426 21.2612 22.1577 20.4986 22.157 19.7037"
                                        fill="Currentcolor" />
                                    <path class="dark:text-whiteheader text-yellow-500"
                                        d="M19.1626 38.7031C19.9575 38.7023 20.7195 38.3858 21.2811 37.8233C21.8426 37.2607 22.1577 36.4981 22.157 35.7032C22.1577 34.9084 21.8426 34.1458 21.2811 33.5832C20.7195 33.0206 19.9575 32.7041 19.1626 32.7033H16.1688V35.7032C16.1688 37.3598 17.5091 38.7031 19.1626 38.7031ZM19.1626 30.7034H27.1473C28.8004 30.7034 30.1412 29.3601 30.1412 27.703C30.1419 26.9081 29.8268 26.1456 29.2652 25.583C28.7037 25.0204 27.9417 24.7039 27.1468 24.7031H19.1626C17.5091 24.7031 16.1688 26.0464 16.1688 27.703C16.1684 28.0966 16.2455 28.4864 16.3957 28.8501C16.546 29.2139 16.7664 29.5444 17.0444 29.823C17.3224 30.1016 17.6526 30.3227 18.016 30.4736C18.3795 30.6246 18.7691 30.7025 19.1626 30.7029"
                                        fill="Currentcolor" />
                                    <path class="dark:text-whiteheader text-red-500"
                                        d="M0.200014 27.703C0.199619 28.0966 0.276744 28.4864 0.426987 28.8501C0.577229 29.2139 0.797647 29.5444 1.07565 29.823C1.35366 30.1016 1.68381 30.3227 2.04726 30.4736C2.41071 30.6246 2.80033 30.7025 3.19389 30.7029C3.98876 30.7021 4.75076 30.3856 5.3123 29.823C5.87384 29.2605 6.18893 28.4979 6.18827 27.703V24.7031H3.19389C1.54032 24.7031 0.200014 26.0464 0.200014 27.703ZM8.18419 27.703V35.7027C8.18419 37.3598 9.52449 38.7031 11.1781 38.7031C11.9729 38.7023 12.7349 38.3858 13.2965 37.8233C13.858 37.2607 14.1731 36.4981 14.1724 35.7032V27.703C14.1728 27.3094 14.0957 26.9196 13.9454 26.5558C13.7951 26.192 13.5747 25.8614 13.2966 25.5828C13.0186 25.3043 12.6884 25.0832 12.3248 24.9323C11.9613 24.7813 11.5717 24.7035 11.1781 24.7031C9.52449 24.7031 8.18419 26.0464 8.18419 27.703Z"
                                        fill="Currentcolor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1638_129113">
                                        <rect width="121" height="48" fill="Currentcolor"
                                            transform="translate(0.200012)" />
                                    </clipPath>
                                </defs>
                            </svg> --}}

                        </div>
                        <div class="dark:text-whiteheader text-txtnamecomntpkyr">
                            <img class="mt-7" src="https://www.mayugo.net/asset/img/logo/logo-white-nexum-new.png"
                                class="" alt="">
                            {{-- <svg width="164" height="48" viewBox="0 0 164 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1638_129119)">
                                    <path class="dark:text-whiteheader text-black"
                                        d="M45.8503 14.0146H53.4724C58.3317 14.0146 62.346 16.8261 62.346 23.2456V24.5945C62.346 31.0628 58.5918 33.9719 53.6187 33.9719H45.8503V14.0146ZM50.1083 17.6387V30.3315H53.3749C56.1377 30.3315 57.9905 28.5275 57.9905 24.5133V23.4569C57.9905 19.4427 56.0402 17.6387 53.2286 17.6387H50.1083ZM64.605 17.8338H68.0179L68.5704 21.5879C69.2205 19.0364 70.8782 17.6712 73.8848 17.6712H74.9412V21.978H73.186C69.7243 21.978 68.8792 23.1806 68.8792 26.5935V34.0207H64.67V17.8338H64.605ZM75.7863 26.2522V25.7972C75.7863 20.3853 79.2479 17.4275 83.961 17.4275C88.7716 17.4275 92.1357 20.3853 92.1357 25.7972V26.2522C92.1357 31.5666 88.8691 34.427 83.961 34.427C78.7441 34.3782 75.7863 31.5829 75.7863 26.2522ZM87.8289 26.2035V25.7972C87.8289 22.7906 86.3175 20.9866 83.9122 20.9866C81.5557 20.9866 79.9955 22.6443 79.9955 25.7972V26.2035C79.9955 29.1126 81.507 30.7703 83.9122 30.7703C86.3175 30.7215 87.8289 29.1126 87.8289 26.2035ZM94.346 17.8338H97.8564L98.2627 20.8891C99.1078 18.8414 100.912 17.4275 103.577 17.4275C107.689 17.4275 110.403 20.3853 110.403 25.8622V26.3173C110.403 31.6316 107.396 34.4432 103.577 34.4432C101.026 34.4432 99.2703 33.2893 98.4089 31.4366V39.6113H94.2972L94.346 17.8338ZM106.129 26.2035V25.8459C106.129 22.6281 104.471 21.0354 102.261 21.0354C99.9041 21.0354 98.3439 22.8393 98.3439 25.8459V26.1547C98.3439 29.0151 99.8554 30.819 102.212 30.819C104.633 30.7703 106.129 29.2263 106.129 26.2035ZM116.627 31.0303L116.27 33.9881H112.662V12.4219H116.774V20.6941C117.684 18.5813 119.488 17.4275 122.039 17.4275C125.907 17.4762 128.768 20.1415 128.768 25.5047V26.0085C128.768 31.3716 126.053 34.4432 121.942 34.4432C119.228 34.3782 117.472 33.1268 116.627 31.0303ZM124.444 26.0085V25.6022C124.444 22.6443 122.836 20.9866 120.577 20.9866C118.269 20.9866 116.66 22.8393 116.66 25.6509V26.0085C116.66 29.0151 118.22 30.7703 120.528 30.7703C122.998 30.7703 124.444 29.2263 124.444 26.0085ZM130.571 26.2522V25.7972C130.571 20.3853 134.033 17.4275 138.746 17.4275C143.557 17.4275 146.921 20.3853 146.921 25.7972V26.2522C146.921 31.5666 143.605 34.427 138.746 34.427C133.529 34.3782 130.571 31.5829 130.571 26.2522ZM142.647 26.2035V25.7972C142.647 22.7906 141.135 20.9866 138.73 20.9866C136.373 20.9866 134.813 22.6443 134.813 25.7972V26.2035C134.813 29.1126 136.325 30.7703 138.73 30.7703C141.151 30.7215 142.647 29.1126 142.647 26.2035ZM152.43 25.6022L146.758 17.8338H151.618L154.884 22.6931L158.2 17.8338H163.01L157.257 25.5534L163.319 33.9881H158.557L154.852 28.625L151.244 33.9881H146.271L152.43 25.6022Z"
                                        fill="Currentcolor" />
                                    <path class="dark:text-whiteheader text-bluefacebook"
                                        d="M19.6522 14.0132L10.2261 20.0264L19.6522 26.0396L10.2261 32.0528L0.799988 26.0071L10.2261 19.9939L0.799988 14.0132L10.2261 8L19.6522 14.0132ZM10.1773 33.9868L19.6034 27.9736L29.0295 33.9868L19.6034 40L10.1773 33.9868ZM19.6522 26.0071L29.0783 19.9939L19.6522 14.0132L29.0295 8L38.4557 14.0132L29.0295 20.0264L38.4557 26.0396L29.0295 32.0528L19.6522 26.0071Z"
                                        fill="Currentcolor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1638_129119">
                                        <rect width="163" height="48" fill="Currentcolor"
                                            transform="translate(0.799988)" />
                                    </clipPath>
                                </defs>
                            </svg> --}}

                        </div>
                        <div class="dark:text-whiteheader text-txtnamecomntpkyr ">
                            <img class="mt-3" src="https://www.mayugo.net/asset/img/logo/proinovate.png"
                                class="" alt="">
                            {{-- <svg width="121" height="48" viewBox="0 0 121 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1638_129122)">
                                    <path class="dark:text-whiteheader text-gray14"
                                        d="M38.9307 21.8009C38.9307 19.6682 36.798 17.3934 33.2435 17.3934C29.2625 17.3934 24.7127 20.3791 24.0018 26.3507C23.2909 32.3223 26.9876 35.0237 30.8264 35.0237C34.6653 35.0237 36.5136 33.6019 38.5042 31.6114C36.798 29.4787 34.5231 30.4739 34.0966 30.6161C33.67 30.9005 32.9591 31.1848 31.8217 31.1848C30.3999 31.1848 28.8359 30.4739 28.8359 27.7725C38.2198 26.7773 38.9307 23.9336 38.9307 21.8009ZM34.3809 22.0853C34.3809 22.7962 34.0966 23.9336 29.4046 24.5024C30.3999 20.9479 32.2482 20.6635 33.1013 20.6635C33.9544 20.8057 34.3809 21.3744 34.3809 22.0853ZM18.599 22.654C18.599 22.654 16.6084 28.91 16.4663 29.4787C16.4663 28.91 14.9023 17.6777 14.9023 17.6777C11.4899 17.6777 9.64161 20.0948 8.78853 22.654C8.78853 22.654 6.37147 28.91 6.22929 29.4787C6.08711 29.0521 5.80275 22.7962 5.80275 22.7962C5.51839 19.6682 2.67478 17.6777 0.399902 17.6777L3.2435 34.7393C6.79801 34.7393 8.78853 32.3223 9.78379 29.763C9.78379 29.763 11.9165 24.218 12.0587 23.9336C12.0587 24.218 13.6227 34.7393 13.6227 34.7393C17.1772 34.7393 19.1677 32.4645 20.1629 30.0474L25.1392 17.6777C21.4426 17.6777 19.5942 20.0948 18.599 22.654ZM52.1535 17.2512C50.0208 17.2512 48.3146 18.3886 46.8928 20.237L48.0302 10C45.0444 10 42.7696 12.5592 42.2008 16.2559L39.926 34.5972C41.6321 34.5972 43.3383 34.1706 44.3335 32.891C45.1866 34.0284 46.4663 34.8815 48.3146 34.8815C53.2909 34.8815 56.7032 29.1943 56.7032 23.7915C56.8454 18.8152 54.4283 17.2512 52.1535 17.2512ZM51.5847 26.0663C51.016 29.0521 49.452 31.0427 47.7459 31.0427C46.1819 31.0427 45.471 30.3318 45.471 30.3318C45.7554 27.7725 46.0397 26.0663 46.6084 24.6445C47.1771 23.2227 48.599 21.09 50.0208 21.09C51.4426 21.2322 52.1535 23.0806 51.5847 26.0663ZM69.2151 17.6777H65.8027V17.5355C66.0871 15.2607 66.5136 14.1232 68.362 13.981C69.4994 13.8389 70.0681 13.2701 70.2103 12.5592C70.3525 11.9905 70.6369 10.1422 70.6369 10.1422C63.67 10.1422 61.5373 13.128 60.9686 17.6777V17.8199H60.8264C59.689 17.8199 58.4094 19.0995 58.2672 20.6635L58.125 21.2322H60.3999L58.4094 37.1564L57.8407 40C57.9828 40 57.9828 40 58.125 40C61.3952 39.8578 63.3857 37.2986 63.9544 33.6019L65.5184 21.09H66.6558C67.6511 21.09 68.9307 20.0948 69.2151 18.2464V17.6777ZM87.1298 17.3934C83.1487 17.3934 79.452 20.3791 78.3146 24.9289C77.1771 29.4787 78.8833 35.0237 84.7127 35.0237C90.5421 35.0237 93.9544 29.3365 93.9544 24.6445C93.8122 19.9526 90.6843 17.3934 87.1298 17.3934ZM88.6937 25.9242C88.5515 28.0569 87.5563 31.1848 84.997 31.1848C82.4378 31.1848 82.8644 27.4882 83.0065 25.782C83.2909 23.9336 84.2862 21.2322 86.561 21.2322C88.6937 21.2322 88.9781 23.6493 88.6937 25.9242ZM113.575 22.654C113.575 22.654 111.585 28.91 111.443 29.4787C111.443 28.91 109.879 17.6777 109.879 17.6777C106.466 17.6777 104.618 20.0948 103.765 22.654C103.765 22.654 101.348 28.91 101.206 29.4787C101.206 29.0521 100.779 22.7962 100.779 22.7962C100.637 19.6682 97.6511 17.8199 95.3762 17.8199L98.2198 34.8815C101.774 34.8815 103.765 32.4645 104.76 29.9052C104.76 29.9052 106.893 24.3602 107.035 24.0758C107.035 24.3602 108.599 34.8815 108.599 34.8815C112.153 34.8815 114.144 32.6066 115.139 30.1896L119.831 17.6777C116.277 17.6777 114.428 20.0948 113.575 22.654ZM72.4852 10.1422L69.6416 33.4597L69.0729 36.3033C69.2151 36.3033 69.2151 36.3033 69.3572 36.3033C72.4852 36.3033 74.7601 33.4597 75.0444 30.0474L76.7506 16.6825C77.1771 12.7014 74.6179 10.1422 72.4852 10.1422Z"
                                        fill="Currentcolor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1638_129122">
                                        <rect class="" width="120" height="48" fill="Currentcolor"
                                            transform="translate(0.399902)" />
                                    </clipPath>
                                </defs>
                            </svg> --}}

                        </div>
                        <div class="dark:text-whiteheader text-blue ">
                            <img src="https://www.mayugo.net/asset/img/logo/ingneieros-industriales-logo.png"
                                class="" alt="">
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="pt-9  dark:bg-bordersec bg-txtcommentply ml:px-0 xl:px-0 lg:px-4 md:px-0  px-0">


            <div class="containermygo mx-auto">
                <div
                    class="font-bold  text-center text-4xl font-inter dark:text-txtnamecomntpkyr text-whiteheader  pt-9 sm:px-52 px-2">
                    No postergues mas tu educacion tu, ¡futuro te esta esperando!
                </div>
                <div
                    class="font-normal font-inter text-lg  text-center dark:text-txtnamecomntpkyr text-whiteheader pt-5  sm:px-52 px-2">
                    Un mejor empleo, mejor salario, mejor calidad de vida ¡todo lo puedes conseguir con educacion!
                    . Es momento de lograr lo que siempre has querido
                </div>
                <div class="sm:pt-12 pt-10 text-center pb-20 md:px-0 px-4">
                    <button
                        class="rounded-lg bg-greenhover font-medium md:w-auto w-full px-5 text-green_especialidad py-2 text-sm focus:outline-none">
                        Comienza a estudiar gratis
                    </button>
                </div>
            </div>



        </div>


        <script>
            function tipoboton() {
                return {
                    tipo: 3,
                    showNow(type) {
                        this.tipo = type
                        console.log(this.tipo)

                    },
                }

            }

            function add_course(id){
                livewire.emit('add_course', id);
            }
        </script>
        <script>
            $(document).ready(function() {
                $('.your-class').slick({
                    setting - name: setting - value
                });
            });
        </script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>
    </div>
</div>
