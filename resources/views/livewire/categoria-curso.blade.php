<div class="pt-10">
    <div class=" ">
        <div class=" pt-24 dark:bg-pricingdark bg-pricingcintawhite">
            <div class="grid lg:grid-cols-5 grid-cols-1 containermygo mx-auto gap-x-8 ">
                <div class="lg:col-span-3 col-span-1 md:px-8  xl:px-0 ml:px-0 lg:px-4  px-4">
                    <div class="flex items-start mb-1 text-left gap-x-4">
                        <div> <a href="{{ route('inicio') }}"
                                class="dark:text-bgprogresb text-txtnamecomntpkyr focus:text-bcklightbuscador  dark:focus:text-bgbtngreen font-inter font-normal text-sm">Inicio</a>
                        </div>
                        <svg class="dark:text-bgprogresb text-txtnamecomntpkyr" width="20" height="20"
                            viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.29279 14.7064C7.10532 14.5189 7 14.2646 7 13.9994C7 13.7343 7.10532 13.48 7.29279 13.2924L10.5858 9.99943L7.29279 6.70643C7.11063 6.51783 7.00983 6.26523 7.01211 6.00303C7.01439 5.74083 7.11956 5.49002 7.30497 5.30461C7.49038 5.1192 7.74119 5.01403 8.00339 5.01176C8.26558 5.00948 8.51818 5.11027 8.70679 5.29243L12.7068 9.29243C12.8943 9.47996 12.9996 9.73427 12.9996 9.99943C12.9996 10.2646 12.8943 10.5189 12.7068 10.7064L8.70679 14.7064C8.51926 14.8939 8.26495 14.9992 7.99979 14.9992C7.73462 14.9992 7.48031 14.8939 7.29279 14.7064Z"
                                fill="Currentcolor" />
                        </svg>

                        <div> <a href="#"
                                class="dark:text-bgprogresb text-txtnamecomntpkyr focus:text-bcklightbuscador  dark:focus:text-bgbtngreen font-inter font-normal text-sm">Especialidades</a>
                        </div>
                        <svg class="dark:text-bgprogresb text-txtnamecomntpkyr" width="20" height="20"
                            viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.29279 14.7064C7.10532 14.5189 7 14.2646 7 13.9994C7 13.7343 7.10532 13.48 7.29279 13.2924L10.5858 9.99943L7.29279 6.70643C7.11063 6.51783 7.00983 6.26523 7.01211 6.00303C7.01439 5.74083 7.11956 5.49002 7.30497 5.30461C7.49038 5.1192 7.74119 5.01403 8.00339 5.01176C8.26558 5.00948 8.51818 5.11027 8.70679 5.29243L12.7068 9.29243C12.8943 9.47996 12.9996 9.73427 12.9996 9.99943C12.9996 10.2646 12.8943 10.5189 12.7068 10.7064L8.70679 14.7064C8.51926 14.8939 8.26495 14.9992 7.99979 14.9992C7.73462 14.9992 7.48031 14.8939 7.29279 14.7064Z"
                                fill="Currentcolor" />
                        </svg>

                        <div> <a href="#"
                                class="dark:text-bgprogresb text-txtnamecomntpkyr focus:text-bcklightbuscador  dark:focus:text-bgbtngreen font-inter font-normal text-sm">{{ $categoria->nombre }}</a>
                        </div>
                    </div>

                    <div
                        class="font-bold  font-inter sm:text-thirty-two text-twenty-eight dark:text-bgprogresb text-txtnamecomntpkyr">
                        {{ $categoria->nombre }}
                    </div>
                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal pt-4 ">
                        La especialidad en gestión de operaciones es uno de los pilares de un modelo de negocios y
                        administración de empresas, nos centraremos en el sector servicios (sector terciario).

                        <br>
                        <br>

                        En el modelo de administración de empresas, se observa la particularidad de que el proceso
                        interactúa de manera directa con el cliente en tiempo real y de ahí su importancia de una
                        correcta ejecución de todas las actividades para
                        cumplir con las demandas requeridas así como lasfallas que puedan haber existido durante el
                        proceso, tales como demoras, unidades defectuosas, etc.
                    </div>

                    <div class="pt-6 sm:gap-x-4 gap-x-2 flex pb-10">
                        <button
                            class="dark:bg-colheaderdark bg-bgfondopricingwhite focus:outline-none border dark:border-txtcommentply border-borderconcours items-center rounded-lg flex p-3">
                            <div>
                                <svg class="dark:text-pricingdarkstudents text-txtcommentply" width="20"
                                    height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.2935 9.30625L9.62916 7.53002C9.07536 7.16082 8.33357 7.55782 8.33357 8.22339V11.7759C8.33357 12.4414 9.07536 12.8384 9.62916 12.4692L12.2935 10.693C12.7883 10.3632 12.7883 9.63611 12.2935 9.30625Z"
                                        stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M17.5002 9.99963C17.5002 14.1418 14.1424 17.4996 10.0002 17.4996C5.85811 17.4996 2.50024 14.1418 2.50024 9.99963C2.50024 5.8575 5.85811 2.49963 10.0002 2.49963C14.1424 2.49963 17.5002 5.8575 17.5002 9.99963Z"
                                        stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            </div>
                            <div
                                class="dark:text-borderconcours text-gray-600 pl-1.5 font-inter font-medium text-sm flex sm:flex-row flex-col">
                                <div>
                                    {{ $cursos->count() }}
                                </div>
                                <div>
                                    cursos
                                </div>
                            </div>

                        </button>
                        <button
                            class="dark:bg-colheaderdark bg-bgfondopricingwhite focus:outline-none border dark:border-txtcommentply border-borderconcours items-center rounded-lg flex p-3">
                            <div>
                                <svg class="dark:text-pricingdarkstudents text-txtcommentply" width="20"
                                    height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.99926 6.66602V9.99935L12.4993 12.4994M17.4993 9.99935C17.4993 14.1415 14.1414 17.4994 9.99926 17.4994C5.85713 17.4994 2.49927 14.1415 2.49927 9.99935C2.49927 5.85722 5.85713 2.49936 9.99926 2.49936C14.1414 2.49936 17.4993 5.85722 17.4993 9.99935Z"
                                        stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>


                            </div>
                            <div class="dark:text-borderconcours text-gray-600 pl-1.5 font-inter font-medium text-sm">
                                20 horas
                            </div>

                        </button>
                        <button
                            class="dark:bg-colheaderdark bg-bgfondopricingwhite focus:outline-none border dark:border-txtcommentply border-borderconcours items-center rounded-lg flex p-3">
                            <div>
                                <svg class="dark:text-pricingdarkstudents text-txtcommentply" width="20"
                                    height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.99975 11.6666L17.4997 7.49998L9.99975 3.33331L2.49976 7.49998L9.99975 11.6666ZM9.99975 11.6666L15.1323 8.81519C15.5845 9.95547 15.8331 11.1987 15.8331 12.4999C15.8331 13.0844 15.7829 13.6571 15.6867 14.214C13.5117 14.4255 11.5406 15.3338 9.99975 16.7129C8.45889 15.3338 6.48785 14.4255 4.31277 14.214C4.21656 13.6571 4.16642 13.0843 4.16642 12.4999C4.16642 11.1986 4.41496 9.95545 4.86715 8.81518L9.99975 11.6666ZM6.66642 16.6666V10.4166L9.99975 8.56479"
                                        stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>


                            </div>
                            <div class="dark:text-borderconcours text-gray-600 pl-1.5 font-inter font-medium text-sm">
                                Certificado al finalizar
                            </div>

                        </button>
                    </div>

                </div>
                <div class="lg:col-span-2 col-span-1 sm:px-0 px-4 lg:flex hidden overflow-y-hidden">

                    
                    {{--  comprar especialidad o plan --}}
                    @if ($estado_plan == 0 )
                        <div class="fixed top-32 animado banermax">
                            <img class="banermax  rounded-t-xl "
                                src="https://www.mayugo.net/admin/images/miniaturas/management-miniatura.jpg"
                                alt="">
                            <div class="absolute benermax ">
                                @include('livewire.include.banner_one')
                            </div>
                        </div>
                    {{--  continuar plan --}}
                    @elseif ($estado_plan == 1)
                        <div class="fixed top-32 animado banermax">
                            <img class="h-80 w-full rounded-t-xl"
                                src="https://www.mayugo.net/admin/images/miniaturas/management-miniatura.jpg"
                                alt="">
                            <div class="absolute inset-x-0">
                                @include('livewire.include.banner_thre')
                            </div>
                        </div>
                    {{--   empesar especialidad --}}
                    @else
                        <div class="fixed top-32 animado banermax">
                            <img class="h-80 w-full rounded-t-xl"
                                src="https://www.mayugo.net/admin/images/miniaturas/management-miniatura.jpg"
                                alt="">
                            @include('livewire.include.banner_two')
                        </div>
                    @endif                    
                </div>
            </div>
        </div>

        <div class="dark:bg-gray14 bg-whiteheader pt">
            <div class="containermygo mx-auto lg:grid-cols-5 sm:pt-14 pt-8   grid-cols-1 grid gap-x-8">
                {{-- version tablet y movil del baner --}}
                <div class="lg:hidden flex px-4 mb-16">
                    {{--  comprar especialidad o plan --}}
                    @if ($estado_plan == 0 )
                        <div class="">
                            <img class=" rounded-t-xl baneraltura"
                                src="https://www.mayugo.net/admin/images/miniaturas/management-miniatura.jpg"
                                alt="">
                            <div class="w-auto ">
                                @include('livewire.include.banner_one')
                            </div>
                        </div>
                     {{--  continuar plan --}}
                    @elseif ($estado_plan == 1)
                        <div class="">
                            <img class="baneraltura w-full rounded-t-xl"
                                src="https://www.mayugo.net/admin/images/miniaturas/management-miniatura.jpg"
                                alt="">
                            <div class=" inset-x-0">
                                @include('livewire.include.banner_thre')
                            </div>
                        </div>
                    {{--   empesar especialidad --}}
                    @else
                        <div class="">
                            <img class="baneraltura w-full rounded-t-xl"
                                src="https://www.mayugo.net/admin/images/miniaturas/management-miniatura.jpg"
                                alt="">
                            @include('livewire.include.banner_two')
                        </div>
                    @endif   

                </div>

                <div class=" lg:col-span-3 col-span-1 lg:px-0 px-4">
                    <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite rounded-xl sm:p-8 p-3 mb-16 altura">

                        <div class="font-bold font-inter sm:text-left text-center sm:text-twenty-eight text-2xl text-txtnamecomntpkyr dark:text-bgprogresb">
                            Cursos de especialidad
                        </div>
                        @foreach ($cursos as $curso)
                        
                            <div class="flex sm:flex-row flex-col  gap-x-4 pt-7 ">
                                <div class="mx-auto">
                                    <img src="{{ asset($curso->img) }}" alt="{{$curso->nom}}" srcset="" width="200px">
                                </div>
                                <div>
                                    <div
                                        class="font-bold font-inter text-lg text-txtnamecomntpkyr dark:text-bgprogresb sm:pt-0 pt-6">
                                        {{$curso->idcur}} : {{$curso->nom}}
                                    </div>
                                    <div
                                        class="dark:text-pricingdarkstudents text-sixteen font-inter font-normal text-gray-600 mt-3">
                                        {{substr($curso->descrip,0,200)}}...
                                    </div>

                                    <div class="flex sm:flex-row flex-col gap-y-3 gap-x-5 mt-6 ">

                                        <div class="flex gap-x-5">
                                            <div class="flex flex-row items-start gap-x-2">
                                                <div>
                                                    <img src="{{ asset('images/'.$curso->cursoAsignacion->trabajador->alumno->avatar) }}"
                                                        alt="" class="rounded-full mb-3  w-5 h-5 ">
                                                </div>
                                                <div
                                                    class="text-sm font-inter font-normal dark:text-pricingdarkstudents text-gray-600">
                                                    {{$curso->cursoAsignacion->trabajador->nombres}}
                                                </div>
                                            </div>

                                            <div class="flex    gap-x-2">
                                                <div class="text-txtcommentply dark:text-borderconcours ">
                                                    <svg class="" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7.49933 15.8336V10.8336C7.49933 9.9131 6.75313 9.16691 5.83266 9.16691H4.16599C3.24552 9.16691 2.49933 9.9131 2.49933 10.8336V15.8336C2.49933 16.754 3.24552 17.5002 4.16599 17.5002H5.83266C6.75313 17.5002 7.49933 16.754 7.49933 15.8336ZM7.49933 15.8336V7.50024C7.49933 6.57977 8.24552 5.83358 9.16599 5.83358H10.8327C11.7531 5.83358 12.4993 6.57977 12.4993 7.50024V15.8336M7.49933 15.8336C7.49933 16.754 8.24552 17.5002 9.16599 17.5002H10.8327C11.7531 17.5002 12.4993 16.754 12.4993 15.8336M12.4993 15.8336V4.16691C12.4993 3.24644 13.2455 2.50024 14.166 2.50024H15.8327C16.7531 2.50024 17.4993 3.24644 17.4993 4.16691V15.8336C17.4993 16.754 16.7531 17.5002 15.8327 17.5002H14.166C13.2455 17.5002 12.4993 16.754 12.4993 15.8336Z"
                                                            stroke="Currentcolor" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="text-sm font-inter font-normal dark:text-pricingdarkstudents text-gray-600">
                                                    Intemedio
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex gap-x-5">

                                            <div class="flex   gap-x-2">
                                                <div class="text-txtcommentply dark:text-borderconcours ">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99926 6.66599V9.99932L12.4993 12.4993M17.4993 9.99932C17.4993 14.1415 14.1414 17.4993 9.99926 17.4993C5.85713 17.4993 2.49927 14.1415 2.49927 9.99932C2.49927 5.85719 5.85713 2.49933 9.99926 2.49933C14.1414 2.49933 17.4993 5.85719 17.4993 9.99932Z"
                                                            stroke="Currentcolor" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="text-sm font-inter font-normal dark:text-pricingdarkstudents text-gray-600">
                                                    2h 30min
                                                </div>
                                            </div>
                                            <div class="flex   gap-x-2">
                                                <div class="text-txtcommentply dark:text-borderconcours ">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_3983_211973)">
                                                            <path
                                                                d="M9.20746 2.43892C9.45694 1.6712 10.5431 1.67121 10.7925 2.43892L12.0582 6.33385C12.1698 6.67717 12.4897 6.90962 12.8507 6.90964L16.9462 6.90979C17.7534 6.90982 18.089 7.94278 17.436 8.41729L14.1228 10.8246C13.8308 11.0368 13.7085 11.4129 13.8201 11.7563L15.0855 15.6513C15.3349 16.419 14.4562 17.0574 13.8031 16.583L10.4898 14.1759C10.1977 13.9637 9.80226 13.9637 9.5102 14.1759L6.19685 16.583C5.54376 17.0574 4.66508 16.419 4.9145 15.6513L6.1799 11.7563C6.29145 11.4129 6.16924 11.0368 5.87719 10.8246L2.56402 8.41729C1.91097 7.94278 2.2466 6.90982 3.05384 6.90979L7.14926 6.90964C7.51025 6.90962 7.83019 6.67717 7.94176 6.33385L9.20746 2.43892Z"
                                                                stroke="Currentcolor" stroke-width="1.66667" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_3983_211973">
                                                                <rect width="20" height="20" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                                <div
                                                    class="text-sm font-inter font-normal dark:text-pricingdarkstudents text-gray-600">
                                                    4.8
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="sm:pt-4 pt-5">
                                        @if (in_array($curso->idcur, $cursos_asig))  
                                            <a href="{{ route('curso', ['id' => $curso->slug]) }}" target="_blank"
                                                class="font-inter font-medium sm:text-sixteen text-sm dark:text-checkpricingdark text-pricingtextduowhite border border-green py-2.5 sm:px-6 px-6 mx-auto rounded-lg ">
                                                Continuar Curso
                                            </a>
                                        @else
                                            @livewire('boton-comprar', ['curso' => $curso], key($curso->idcur))
                                            {{-- <a href="{{ url('checkout-course') }}"
                                                class="font-inter font-medium sm:text-sixteen text-sm dark:text-checkpricingdark text-pricingtextduowhite border border-green py-2.5 sm:px-6 px-6 mx-auto rounded-lg ">
                                                Compra solo este curso a {{$simbolo}} {{$curso->precio*$cambio}} {{$cod_iso}} 
                                            </a> --}}
                                        @endif

                                    </div>
                                </div>
                            </div>                            
                        @endforeach
                    </div>

                </div>
                <div class="lg:col-span-2 col-span-1">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let animado = document.querySelectorAll(".animado");
    /*  let animado = document.getElementById('animado'); */
    function mostrardiv() {
        let scrollTop = document.documentElement.scrollTop;
        /*  let altura = animado.offsetTop; */
        /*  console.log(scrollTop); */

        for (var i = 0; i < animado.length; i++) {
            let altura = document.querySelectorAll(".altura")
            let distancia = altura[i].offsetTop;
            /*  console.log(altura); */

            /*  altura - 200 < scrollTop; */
            if (distancia + 600 < scrollTop) {
                console.log('si funciona');
                /* animado[i].style.remove('fixed'); */
                animado[i].classList.remove('fixed');
                /*  animado[i].classList.add('sticky');  */
                /*  animado[i].style.toggle('sticky');   */
                /* animado[i].style.opacity = 0; */
            }
            if (distancia + 600 > scrollTop) {
                console.log('si funciona');
                /*  animado[i].style.add('fixed'); */
                animado[i].classList.add('fixed');
                /*  animado[i].classList.add('static');  */
                /*  animado[i].style.toggle('sticky');   */
                /* animado[i].style.opacity = 0; */
            }

        }

    }

    window.addEventListener('scroll', mostrardiv);
</script>