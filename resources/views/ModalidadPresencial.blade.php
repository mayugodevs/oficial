@extends('layout')
@section('content')
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />


    <div class="dark:bg-gray14 h-full bg-whiteheader ">
        <div class="containermygo mx-auto sm:pt-40 pt-14">
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-x-8">
                <div class=" lg:order-1 order-2 ml:px-0 xl:px-0 lg:px-8 md:px-8 px-4">
                    <div class="flex items-start mb-1  text-left pt-10">
                        <div> <a href="{{ route('inicio') }}"
                                class="text-bgbtnblue  focus:text-bgbtnblue font-inter font-normal text-sm">Inicio</a>
                        </div>
                        <svg width="20" height="20" class="text-black mt-1 dark:text-white-100" viewBox="0 0 20 20"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.29279 14.7064C7.10532 14.5189 7 14.2646 7 13.9994C7 13.7343 7.10532 13.48 7.29279 13.2924L10.5858 9.99943L7.29279 6.70643C7.11063 6.51783 7.00983 6.26523 7.01211 6.00303C7.01439 5.74083 7.11956 5.49002 7.30497 5.30461C7.49038 5.1192 7.74119 5.01403 8.00339 5.01176C8.26558 5.00948 8.51818 5.11027 8.70679 5.29243L12.7068 9.29243C12.8943 9.47996 12.9996 9.73427 12.9996 9.99943C12.9996 10.2646 12.8943 10.5189 12.7068 10.7064L8.70679 14.7064C8.51926 14.8939 8.26495 14.9992 7.99979 14.9992C7.73462 14.9992 7.48031 14.8939 7.29279 14.7064Z"
                                fill="Currentcolor" />
                        </svg>

                        <div class="widtlith "> <a href=""
                                class="text-bgbtnblue  focus:text-bgbtnblue font-inter font-normal text-sm leading-none">Curso-presencial</a>
                        </div>
                        <svg width="20" height="20" class="text-black mt-1 dark:text-white-100" viewBox="0 0 20 20"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.29279 14.7064C7.10532 14.5189 7 14.2646 7 13.9994C7 13.7343 7.10532 13.48 7.29279 13.2924L10.5858 9.99943L7.29279 6.70643C7.11063 6.51783 7.00983 6.26523 7.01211 6.00303C7.01439 5.74083 7.11956 5.49002 7.30497 5.30461C7.49038 5.1192 7.74119 5.01403 8.00339 5.01176C8.26558 5.00948 8.51818 5.11027 8.70679 5.29243L12.7068 9.29243C12.8943 9.47996 12.9996 9.73427 12.9996 9.99943C12.9996 10.2646 12.8943 10.5189 12.7068 10.7064L8.70679 14.7064C8.51926 14.8939 8.26495 14.9992 7.99979 14.9992C7.73462 14.9992 7.48031 14.8939 7.29279 14.7064Z"
                                fill="Currentcolor" />
                        </svg>

                        <div class="widtlith ">
                            <a href="#"
                                class="dark:text-bgprogresb widtlith text-txtnamecomntpkyr dark:focus:text-bgbtnblue dark:hover:text-bgbtnblue font-inter font-normal text-sm leading-none">Ingeniería
                                de costos aplicados a la industria</a>
                        </div>

                    </div>
                    <div>
                        <div
                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter sm:text-4xl text-thirty-two font-bold pt-1">
                            Planificación y Control de la Producción
                        </div>
                        <div class="text-gray-600 dark:text-pricingdarkstudents text-sixteen font-inter font-normal pt-4">
                            Las industrias actuales demandan profesionales competentes; con las herramientas y prácticas
                            aprendidas en este curso podrás desarrollarte como ingeniero o analista de costos en cualquier
                            tipo de industria.
                        </div>
                        <div class="flex sm:flex-row flex-col gap-x-4 pt-6">
                            <div class="w-full">

                                <input type="text" placeholder="Correo electrónico"
                                    class="bg-white-100 pl-4 placeholder-pricingdarkstudents text-gray-650 dark:text-white-100 text-sm  font-inter font-normal  focus:outline-none   w-full border-borderconcours dark:bg-black border dark:border-txtcommentply h-10 rounded-lg ">

                            </div>
                            <div class="sm:pt-0 pt-5">
                                <button class="bg-bgbtngreen text-btncomentresply h-10 rounded-lg sm:w-48 w-full px-4">
                                    Solicita información
                                </button>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="bg-contain lg:order-2 order-1">
                    <img class="w-full" src=" {{ asset('images/metodologia/presencial.png') }}">
                </div>

            </div>

            <div class="flex sm:flex-row flex-col lg:gap-x-44 gap-x-9 pt-20 pb-24 ml:px-0 xl:px-0 lg:px-8 md:px-8 px-4">
                <div class="flex ">
                    <svg class="text-pricingdarkstudents" width="32" height="32" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23.5425 22.2092C22.2937 23.458 19.6821 26.0696 17.8851 27.8666C16.8437 28.908 15.1569 28.9086 14.1155 27.8672C12.3498 26.1015 9.78883 23.5405 8.45757 22.2092C4.29198 18.0436 4.29198 11.2898 8.45757 7.12426C12.6232 2.95866 19.3769 2.95866 23.5425 7.12426C27.7081 11.2898 27.7081 18.0436 23.5425 22.2092Z"
                            stroke="#9AA4B2" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M20 14.6667C20 16.8759 18.2092 18.6667 16 18.6667C13.7909 18.6667 12 16.8759 12 14.6667C12 12.4576 13.7909 10.6667 16 10.6667C18.2092 10.6667 20 12.4576 20 14.6667Z"
                            stroke="#9AA4B2" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex flex-col pl-7">
                        <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-xl font-inter font-bold">
                            Ubicación
                        </div>
                        <div class="text-txtcommentply dark:text-borderconcours text-sm font-inter font-normal">
                            Jr Hallayco 123 <span class="text-blue"> <button>(Cómo llegar)</button></span>
                        </div>
                    </div>

                </div>
                <div class="flex sm:pt-0 pt-6">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 10.6666V15.9999L20 19.9999M28 15.9999C28 22.6274 22.6274 27.9999 16 27.9999C9.37258 27.9999 4 22.6274 4 15.9999C4 9.37252 9.37258 3.99994 16 3.99994C22.6274 3.99994 28 9.37252 28 15.9999Z"
                            stroke="#9AA4B2" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="flex flex-col pl-7">
                        <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-xl font-inter font-bold">
                            Horario
                        </div>
                        <div class="text-txtcommentply dark:text-borderconcours text-sm font-inter font-normal">
                            12 Diciembre / De 7-9 pm | GTM-5
                        </div>
                    </div>

                </div>
                <div class="flex sm:pt-0 pt-6">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.0002 22.6665L12.0002 26.6665L10.6669 27.9999H21.3336L20.0002 26.6665L19.0002 22.6665M4.00024 17.3332H28.0002M6.66691 22.6665H25.3336C26.8063 22.6665 28.0002 21.4726 28.0002 19.9999V6.66654C28.0002 5.19379 26.8063 3.99988 25.3336 3.99988H6.66691C5.19415 3.99988 4.00024 5.19379 4.00024 6.66654V19.9999C4.00024 21.4726 5.19415 22.6665 6.66691 22.6665Z"
                            stroke="#9AA4B2" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>


                    <div class="flex flex-col pl-7">
                        <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-xl font-inter font-bold">
                            Modalidad
                        </div>
                        <div class="text-txtcommentply dark:text-borderconcours text-sm font-inter font-normal">
                            Presencial </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="dark:bg-gray12 bg-white2">
        <div class="mx-auto containermygo pt-24 pb-24  ml:px-0 xl:px-0 lg:px-8 md:px-8 px-4">
            <div class="grid lg:grid-cols-3 grid-cols-2 gap-x-6">
                <div class=" lg:col-span-1 col-span-2">
                    <svg width="66" height="66" viewBox="0 0 66 66" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="5" y="5" width="56" height="56" rx="28"
                            fill="#145229" />
                        <path
                            d="M34.1667 21.3333L23.7757 33.8025C23.3688 34.2908 23.1653 34.535 23.1622 34.7412C23.1595 34.9205 23.2394 35.091 23.3788 35.2037C23.5392 35.3333 23.857 35.3333 24.4927 35.3333H33L31.8333 44.6666L42.2243 32.1975C42.6312 31.7092 42.8347 31.465 42.8378 31.2588C42.8405 31.0795 42.7606 30.909 42.6212 30.7963C42.4608 30.6666 42.143 30.6666 41.5073 30.6666H33L34.1667 21.3333Z"
                            stroke="#5CD685" stroke-width="2.33333" stroke-linecap="round" stroke-linejoin="round" />
                        <rect x="5" y="5" width="56" height="56" rx="28"
                            stroke="#0A2914" stroke-width="10" />
                    </svg>
                    <div
                        class="font-medium font-inter sm:text-4xl text-thirty-two dark:text-bordersec text-txtnamecomntpkyr pt-6">
                        ¿Por qué estudiar de manera presencial?
                    </div>
                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter text-sixteen font-normal pt-5">
                        La educación presencial te permite concentrarte más en tu aprendizaje porque hay menos distracciones
                        que en casa.
                    </div>

                </div>
                <div class="col-span-2 sm:grid-cols-2 grid-cols-1 grid gap-x-6 gap-y-8 pt-8">


                    <div class="p-6 dark:bg-gray11 bg-white1 rounded-lg">
                        <svg class=" dark:text-bgbtngreen text-bcklightbuscador " width="48" height="48"
                            viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="10" fill="Currentcolor" />
                            <path
                                d="M29 19.9999H31C32.1046 19.9999 33 20.8954 33 21.9999V27.9999C33 29.1045 32.1046 29.9999 31 29.9999H29V33.9999L25 29.9999H21C20.4477 29.9999 19.9477 29.7761 19.5858 29.4141M19.5858 29.4141L23 25.9999H27C28.1046 25.9999 29 25.1045 29 23.9999V17.9999C29 16.8954 28.1046 15.9999 27 15.9999H17C15.8954 15.9999 15 16.8954 15 17.9999V23.9999C15 25.1045 15.8954 25.9999 17 25.9999H19V29.9999L19.5858 29.4141Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="font-medium font-inter text-xl dark:text-bordersec text-txtnamecomntpkyr pt-16">
                            ¿Por qué estudiar de manera presencial?
                        </div>
                        <div class="dark:text-pricingdarkstudents text-gray-600 font-inter text-sixteen font-normal pt-5">
                            La educación presencial te permite concentrarte más en tu aprendizaje porque hay menos
                            distracciones que en casa.
                        </div>

                    </div>
                    <div class="p-6 dark:bg-gray11 bg-white1 rounded-lg">
                        <svg class=" dark:text-bgbtngreen text-bcklightbuscador " width="48" height="48"
                            viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="10" fill="Currentcolor" />
                            <path
                                d="M29 19.9999H31C32.1046 19.9999 33 20.8954 33 21.9999V27.9999C33 29.1045 32.1046 29.9999 31 29.9999H29V33.9999L25 29.9999H21C20.4477 29.9999 19.9477 29.7761 19.5858 29.4141M19.5858 29.4141L23 25.9999H27C28.1046 25.9999 29 25.1045 29 23.9999V17.9999C29 16.8954 28.1046 15.9999 27 15.9999H17C15.8954 15.9999 15 16.8954 15 17.9999V23.9999C15 25.1045 15.8954 25.9999 17 25.9999H19V29.9999L19.5858 29.4141Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="font-medium font-inter text-xl dark:text-bordersec text-txtnamecomntpkyr pt-16">
                            ¿Por qué estudiar de manera presencial?
                        </div>
                        <div class="dark:text-pricingdarkstudents text-gray-600 font-inter text-sixteen font-normal pt-5">
                            La educación presencial te permite concentrarte más en tu aprendizaje porque hay menos
                            distracciones que en casa.
                        </div>

                    </div>
                    <div class="p-6 dark:bg-gray11 bg-white1 rounded-lg">
                        <svg class=" dark:text-bgbtngreen text-bcklightbuscador " width="48" height="48"
                            viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="10" fill="Currentcolor" />
                            <path
                                d="M29 19.9999H31C32.1046 19.9999 33 20.8954 33 21.9999V27.9999C33 29.1045 32.1046 29.9999 31 29.9999H29V33.9999L25 29.9999H21C20.4477 29.9999 19.9477 29.7761 19.5858 29.4141M19.5858 29.4141L23 25.9999H27C28.1046 25.9999 29 25.1045 29 23.9999V17.9999C29 16.8954 28.1046 15.9999 27 15.9999H17C15.8954 15.9999 15 16.8954 15 17.9999V23.9999C15 25.1045 15.8954 25.9999 17 25.9999H19V29.9999L19.5858 29.4141Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="font-medium font-inter text-xl dark:text-bordersec text-txtnamecomntpkyr pt-16">
                            ¿Por qué estudiar de manera presencial?
                        </div>
                        <div class="dark:text-pricingdarkstudents text-gray-600 font-inter text-sixteen font-normal pt-5">
                            La educación presencial te permite concentrarte más en tu aprendizaje porque hay menos
                            distracciones que en casa.
                        </div>

                    </div>
                    <div class="p-6 dark:bg-gray11 bg-white1 rounded-lg">
                        <svg class=" dark:text-bgbtngreen text-bcklightbuscador " width="48" height="48"
                            viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="10" fill="Currentcolor" />
                            <path
                                d="M29 19.9999H31C32.1046 19.9999 33 20.8954 33 21.9999V27.9999C33 29.1045 32.1046 29.9999 31 29.9999H29V33.9999L25 29.9999H21C20.4477 29.9999 19.9477 29.7761 19.5858 29.4141M19.5858 29.4141L23 25.9999H27C28.1046 25.9999 29 25.1045 29 23.9999V17.9999C29 16.8954 28.1046 15.9999 27 15.9999H17C15.8954 15.9999 15 16.8954 15 17.9999V23.9999C15 25.1045 15.8954 25.9999 17 25.9999H19V29.9999L19.5858 29.4141Z"
                                stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="font-medium font-inter text-xl dark:text-bordersec text-txtnamecomntpkyr pt-16">
                            ¿Por qué estudiar de manera presencial?
                        </div>
                        <div class="dark:text-pricingdarkstudents text-gray-600 font-inter text-sixteen font-normal pt-5">
                            La educación presencial te permite concentrarte más en tu aprendizaje porque hay menos
                            distracciones que en casa.
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="dark:bg-gray14 h-full bg-whiteheader ">
        <div class="containermygo mx-auto lg:pt-40 pt-0">
            <div class="grid lg:grid-cols-5 grid-cols-1 sm:pb-40 pb-10 xl:px-0 lg:px-8 md:px-8 px-4">
                <div class="lg:col-span-3 col-span-1 ml:px-0 lg:pt-0 pt-12  lg:order-1 order-2">

                    <div>
                        <div class="grid grid-cols-1 carrousel">


                            <div class="overflow-hidden ">
                                <div class=" flex flex-row   grande deslis " id="deslis">

                                    <div class="sliderSeccion   " id="foto1">
                                        <img src="{{ asset('images/metodologia/presencial1.png') }}"
                                            class="sm:flex hidden">
                                        <img src="{{ asset('images/metodologia/Contentscritorio1.png') }}"
                                        class="sm:hidden flex">

                                    </div>

                                    <div class="sliderSeccion bg-cover" id="foto2">
                                        <img class="bg-cover h-full " 
                                        src="{{ asset('images/metodologia/Contentscritorio1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="sliderSeccion " id="foto3">
                                        <img class="h-full " src="{{ asset('images/metodologia/Imagehistoria.png') }}" alt="">
                                    </div>

                                    <div class="sliderSeccion " id="foto4">
                                        <img class="h-full" src="{{ asset('images/metodologia/Imagehome1.png') }}" alt="">
                                    </div>




                                </div>
                                <div class=" grid grid-cols-4  ">
                                    <label class=" difuso   bg-green py-0.5 cus" for="foto1" id="bc1">
                                        
                                    </label>
                                    <label class="difuso   py-0.5   bg-transparent " for="foto2" id="bc2">
                                        
                                    </label>
                                    <label class="difuso  py-0.5  bg-transparent " for="foto3" id="bc3">
                                        
                                    </label>
                                    <label class="difuso  py-0.5  bg-transparent " for="foto4" id="bc4">
                                       </label>
                                </div>

                            </div>
                            


                            <div class="lg:pt-12 pt-10    justify-between flex">

                                <div class="sm:pt-0 ">
                                    <div class="gap-x-3 grid grid-cols-4 puntos ">
                                        <label class=" difuso punto   bg-gray-400   punto cursor-pointer cis " for="foto1" id="bg1">
                                            <img class="h-full" src="{{ asset('images/metodologia/presencial1.png') }}" alt="">
                                        </label>
                                        <label class="  difuso punto    bg-gray-400 punto cursor-pointer" for="foto2" id="bg2">
                                            <img class="h-full" src="{{ asset('images/metodologia/Contentscritorio1.png') }}">
                                        </label>
                                        <label class=" difuso punto   bg-gray-400 punto cursor-pointer" for="foto3" id="bg3">
                                            <img class="h-full" src="{{ asset('images/metodologia/Imagehistoria.png') }}" alt="">
                                        </label>
                                        <label class=" difuso punto   bg-gray-400 punto cursor-pointer" for="foto4" id="bg4">
                                            <img class="h-full" src="{{ asset('images/metodologia/Imagehome1.png') }}" alt="">
                                        </label>
                                    </div>

                                </div>

                            </div>

                           {{--  <script>
                                var bg1= document.getElementById("bg1");
                                var bc1= document.getElementById("bc1");
                                bg1.addEventListener('click',function(){
                                   bc1.classList.toggle("bg-green");
                                      });
                                var bg2= document.getElementById("bg2");
                                var bc2= document.getElementById("bc2");
                                bg2.addEventListener('click',function(){
                                   bc2.classList.toggle("bg-green");
                                      });
                                var bg3= document.getElementById("bg3");
                                var bc3= document.getElementById("bc3");
                                bg3.addEventListener('click',function(){
                                   bc3.classList.toggle("bg-green");
                                      });
                                 var bg4= document.getElementById("bg4");
                                var bc4= document.getElementById("bc4");
                                bg4.addEventListener('click',function(){
                                   bc4.classList.toggle("bg-green");
                                      });

                            </script> --}}

                            <style>
                                .carrousel .grande {
                                    width: 400%;
                                    transition: all .5s ease;

                                    transform: translateX(0%);
                                }


                                .sliderSeccion {
                                    width: 100%;

                                }

                                .puntos .difuso {
                                    opacity: 0.5;

                                }

                                .puntos .circulo {
                                    border:;
                                    border-style: ;

                                }
                            </style>

                            <script>
                                const grande = document.querySelector('.grande');
                                const punto = document.querySelectorAll('.punto');

                                /* cambia cuando das click */
                                punto.forEach((cadaPunto, i) => {
                                    punto[i].addEventListener('click', () => {
                                        let posicion = i
                                        let operacion = posicion * (-25)

                                        grande.style.transform = `translateX(${operacion}%)`


                                        punto.forEach((cadaPunto, i) => {
                                            punto[i].classList.add('difuso')
                                            punto[i].classList.add('circulo')


                                        })
                                        punto[i].classList.remove('difuso')
                                        punto[i].classList.remove('circulo')

                                    })

                                });



                                /*   para seguiemiento mientras rota */

                                setTimeout(function() {
                                    for (var i = 0; i < punto.length; i++) {

                                        punto[0].style.backgroundColor = 'blue';
                                        i++
                                    }

                                }, 3000);
                            </script>

                             <script>
                               
                                let deslis =document.querySelector("#deslis");
                                let sliderSeccion = document.querySelectorAll(".sliderSeccion");
                                let sliderlast = sliderSeccion[sliderSeccion.length -1];
    
                                deslis.insertAdjacentElement('afterbegin', sliderlast);
    
                                function Next() {
                                    let sliderFirst = document.querySelectorAll(".sliderSeccion")[0];
    
                                    deslis.style.marginLeft = "-100%";
                                    deslis.style.transition = "all 0.5s";
                                    
                                    setTimeout(function() {
                                        deslis.style.transition = "none";
                                        deslis.insertAdjacentElement('beforeend', sliderFirst);
                                        deslis.style.marginLeft = "-100%";
    
                                    }, 500);
    
                                }
    
                                const btnrigth= document.querySelector("#btnrigth");
                                
                                btnrigth.addEventListener('click',function(){
                                    Next();
                                });
    
                                setInterval(function() {
                                    Next();
                                }, 1000);
                            </script>
                        </div>


                        {{-- <div>
                            <div class="grid grid-cols-2 carrousel">


                                <div class="overflow-hidden ">
                                    <div class=" flex flex-row   grande deslis " id="deslis">

                                        <div class="sliderSeccion  " id="foto1">

                                            <img src="../images/metodologia/Sectionfotovideo1.png" alt=""
                                                class="sm:flex hidden">
                                            <img src="../images/metodologia/imagehistoria.png" alt=""
                                                class="sm:hidden flex">

                                        </div>

                                        <div class="sliderSeccion " id="foto2">
                                            <img class="bg-cover"
                                                src="https://www.ipchile.cl/wp-content/uploads/2021/10/Ing.-Industrial.jpg"
                                                alt="">
                                        </div>
                                        <div class="sliderSeccion " id="foto3">
                                            <img src="https://boyacaestudiaenelexterior.co/wp-content/uploads/2021/05/Ingenieria-Industrial.jpg"
                                                alt="">
                                        </div>

                                        <div class="sliderSeccion " id="foto4">
                                            <img src="https://d11cuk1a0j5b57.cloudfront.net/blog/wp-content/uploads/2018/05/ingenieria-industrial-razones-estudiar-occeducacion-occmundial.jpg"
                                                alt="">
                                        </div>




                                    </div>
                                    <div class="">
                                        <button class="btnrigth text-white-300" id="btnrigth">
                                            siguiente
                                        </button>
                                    </div>
                                </div>



                                <div
                                    class="lg:pt-12 pt-10   mb-7 lg:mr-12 mr-8 lg:ml-0 ml-8 justify-between flex-col flex">
                                    <div>
                                        <div
                                            class="text-2xl   dark:text-white-500 text-gray-500 font-inter font-medium leading-8">
                                            "En MayuGo se aprende muchisimo el equipo de docentes que inparten las clases,
                                            la
                                            inparten
                                            de una manera que
                                            quedas muy satisfecho en querer seguir tomando mas conocimiento profecional"
                                        </div>
                                        <div class="flex sm:flex-row flex-col pt-9">
                                            <div
                                                class="font-inter  font-lg dark:text-borderconcours text-txtnamecomntpkyr">
                                                kenny espiriu
                                                falcon estudiante de</div>
                                            <div class="text-greenhover  font-semibold sm:px-2 px-0">MayuGo</div>
                                        </div>
                                    </div>
                                    <div class="sm:pt-0 ">
                                        <div class="gap-x-10 flex puntos ">
                                            <label class="w-8 h-8 difuso  rounded-full bg-gray-400  punto cursor-pointer "
                                                for="foto1"></label>
                                            <label class="w-8 h-8  difuso   rounded-full bg-gray-400 punto cursor-pointer"
                                                for="foto2"></label>
                                            <label class="w-8 h-8 difuso  rounded-full bg-gray-400 punto cursor-pointer"
                                                for="foto3"></label>
                                            <label class="w-8 h-8 difuso  rounded-full bg-gray-400 punto cursor-pointer"
                                                for="foto4"></label>
                                        </div>

                                    </div>

                                </div>



                                <style>
                                    .carrousel .grande {
                                        width: 400%;
                                        transition: all .5s ease;

                                        transform: translateX(0%);
                                    }


                                    .sliderSeccion {
                                        width: 100%;

                                    }

                                    .puntos .difuso {
                                        opacity: 0.1;

                                    }

                                    .puntos .circulo {
                                        border: #145229;
                                        border-style: solid;

                                    }
                                </style>

                                <script>
                                    const grande = document.querySelector('.grande');
                                    const punto = document.querySelectorAll('.punto');

                                    /* cambia cuando das click */
                                    punto.forEach((cadaPunto, i) => {
                                        punto[i].addEventListener('click', () => {
                                            let posicion = i
                                            let operacion = posicion * (-25)

                                            grande.style.transform = `translateX(${operacion}%)`


                                            punto.forEach((cadaPunto, i) => {
                                                punto[i].classList.add('difuso')
                                                punto[i].classList.add('circulo')


                                            })
                                            punto[i].classList.remove('difuso')
                                            punto[i].classList.remove('circulo')

                                        })

                                    });



                                    /*   para seguiemiento mientras rota */

                                    setTimeout(function() {
                                        for (var i = 0; i < punto.length; i++) {

                                            punto[0].style.backgroundColor = 'blue';
                                            i++
                                        }

                                    }, 3000);
                                </script>

                                <script>
                                    let deslis = document.querySelector("#deslis");
                                    let sliderSeccion = document.querySelectorAll(".sliderSeccion");
                                    let sliderlast = sliderSeccion[sliderSeccion.length - 1];

                                    deslis.insertAdjacentElement('afterbegin', sliderlast);

                                    function Next() {
                                        let sliderFirst = document.querySelectorAll(".sliderSeccion")[0];

                                        deslis.style.marginLeft = "-100%";
                                        deslis.style.transition = "all 0.5s";

                                        setTimeout(function() {
                                            deslis.style.transition = "none";
                                            deslis.insertAdjacentElement('beforeend', sliderFirst);
                                            deslis.style.marginLeft = "-100%";

                                        }, 500);

                                    }

                                    const btnrigth = document.querySelector("#btnrigth");

                                    btnrigth.addEventListener('click', function() {
                                        Next();
                                    });

                                    setInterval(function() {
                                        Next();
                                    }, 5000);
                                </script>
                            </div>

                        </div> --}}
                        <div>
                            <div class="single-item">
                                <div>your 1</div>
                                <div>your 2</div>
                                <div>your 3</div>
                                <div>your 4</div>
                                <div>your 5</div>
                            </div>

                            <script type="text/javascript">
                            
                                $(document).ready(function(){
                                    $('.single-item').slick();
                                });
                              </script>
                        </div>

                    </div>
                </div>
                <div class="lg:col-span-2 col-span-1 xl:pt-0 ml:pt-0 lg:pt-0 md:pt-20 pt-12 lg:order-2 order-1">
                    <div class="lg:pl-8 pl-0">
                        <div
                            class="dark:text-bgprogresb text-txtnamecomntpkyr md:text-left text-center font-inter font-semibold sm:text-4xl text-thirty-two">
                            Lugar adecuado para que aprendas mejor
                        </div>
                        <div
                            class="text-gray-600 dark:text-pricingdarkstudents md:text-left text-center font-inter text-sixteen font-normal pt-5">
                            El local de 4 estrellas se encuentra en el aeropuerto internacional Jorge Chávez de Lima.
                            Alberga el spa Express. La cadena hotelera Costa del Sol tiene hoteles en las 7 ciudades más
                            importantes de Perú.
                            <br>
                            El Costa del Sol Wyndham Lima Airport cuenta con habitaciones y suites cómodas con TV LCD de 40
                            pulgadas por cable, WiFi gratuita y baño de mármol.
                            Además, las suites incluyen sala de estar independiente y bañera de hidromasaje.
                        </div>
                        <div class="flex pt-6 items-center justify-center md:justify-start">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.66642 5.83309V2.49976M13.3331 5.83309V2.49976M5.83309 9.16642H14.1664M4.16642 17.4997H15.8331C16.7536 17.4997 17.4997 16.7536 17.4997 15.8331V5.83309C17.4997 4.91261 16.7536 4.16642 15.8331 4.16642H4.16642C3.24595 4.16642 2.49976 4.91261 2.49976 5.83309V15.8331C2.49976 16.7536 3.24595 17.4997 4.16642 17.4997Z"
                                    stroke="#FDB022" stroke-width="1.66667" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div class="text-yellowdetalle font-medium text-lg font-inter pl-3">
                                Lunes 25 de enero | 8:00 am - 4:00 pm
                            </div>


                        </div>
                        <div class="flex pt-6 items-center  justify-center md:justify-start">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.7144 13.8812C13.9339 14.6617 12.3017 16.2939 11.1786 17.4171C10.5277 18.0679 9.47347 18.0683 8.82259 17.4174C7.71902 16.3139 6.1184 14.7132 5.28636 13.8812C2.68287 11.2777 2.68287 7.0566 5.28636 4.45311C7.88985 1.84961 12.111 1.84961 14.7144 4.45311C17.3179 7.0566 17.3179 11.2777 14.7144 13.8812Z"
                                    stroke="#FDB022" stroke-width="1.66667" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M12.5004 9.16715C12.5004 10.5479 11.3811 11.6672 10.0004 11.6672C8.61969 11.6672 7.5004 10.5479 7.5004 9.16715C7.5004 7.78644 8.61969 6.66715 10.0004 6.66715C11.3811 6.66715 12.5004 7.78644 12.5004 9.16715Z"
                                    stroke="#FDB022" stroke-width="1.66667" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            <div class="text-yellowdetalle font-medium text-lg font-inter pl-3">
                                Jr huallayquito 123 <a href="#"><span class="text-blue">¿Cómo llegar?</span></a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

            <div
                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-semibold sm:text-4xl text-thirty-two pt-20 text-center xl:px-0 lg:px-8 md:px-8 px-4">
                Empieza a aprender, ¡es hora de mejorar tu futuro!
            </div>

            <div class="grid lg:grid-cols-5 grid-cols-1 pb-10 pt-12 xl:px-0 lg:px-8 md:px-8 px-4 ">
                <div class="lg:col-span-3 col-span-1">
                    <div class="flex sm:flex-row flex-col justify-between items-end">
                        <div
                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-semibold sm:text-twenty-eight text-2xl pt-5 text-center">
                            Contenido del curso presencial
                        </div>
                        <div class="sm:w-auto w-full sm:pt-0 pt-6">
                            <button class="bg-bgbtngreen text-center w-full rounded-lg flex px-5 focus:outline-none py-2">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.33301 13.3339L3.33301 14.1672C3.33301 15.5479 4.4523 16.6672 5.83301 16.6672L14.1663 16.6672C15.547 16.6672 16.6663 15.5479 16.6663 14.1672L16.6663 13.3339M13.333 10.0006L9.99967 13.3339M9.99967 13.3339L6.66634 10.0006M9.99967 13.3339L9.99967 3.33391"
                                        stroke="#145229" stroke-width="1.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="text-green_especialidad pl-2 text-sixteen font-inter text-center font-semibold">
                                    Descargar temario
                                </div>

                            </button>
                        </div>
                    </div>
                    <div class="pt-10">
                        <div class="bg-transparent ">
                            <div class="px-5 py-4 flex items-center rounded-lg dark:bg-gray11 bg-white1 cursor-pointer mb-4"
                                id="pl">
                                <div>
                                    <svg class="dark:text-bgprogresb text-txtnamecomntpkyr" width="25" height="24"
                                        viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.9769 9L12.9769 16L5.97693 9" stroke="currentcolor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <div class="flex flex-col pl-2">
                                    <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-lg font-inter font-medium">
                                        MÓDULO 1
                                    </div>
                                    <div class="text-bcklightbuscador  font-medium font-inter text-sixteen">
                                        Introducción a la PCP
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-6 hidden" id="cd">
                                <div class="flex pb-4 ">
                                    <svg class="dark:text-borderconcours text-txtcommentply" width="20"
                                        height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.16711 10.8335L7.50045 14.1668L15.8338 5.8335" stroke="currentcolor"
                                            stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply text-sixteen font-inter font-normal pl-2">
                                        Conceptos Producción, Planeación y Control
                                    </div>

                                </div>
                                <div class="flex pb-4 ">
                                    <svg class="dark:text-borderconcours text-txtcommentply" width="20"
                                        height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.16711 10.8335L7.50045 14.1668L15.8338 5.8335" stroke="currentcolor"
                                            stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply text-sixteen font-inter font-normal pl-2">
                                        Producción de Bienes y Producción de Servicios
                                    </div>

                                </div>
                                <div class="flex pb-4 ">
                                    <svg class="dark:text-borderconcours text-txtcommentply" width="20"
                                        height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.16711 10.8335L7.50045 14.1668L15.8338 5.8335" stroke="currentcolor"
                                            stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply text-sixteen font-inter font-normal pl-2">
                                        Entornos de Producción y Categorías de los Procesos de Producción
                                    </div>

                                </div>
                                <div class="flex pb-4 ">
                                    <svg class="dark:text-borderconcours text-txtcommentply" width="20"
                                        height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.16711 10.8335L7.50045 14.1668L15.8338 5.8335" stroke="currentcolor"
                                            stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply text-sixteen font-inter font-normal pl-2">
                                        Ciclo de Vida de un Producto/Servicio
                                    </div>

                                </div>
                                <div class="flex pb-4 ">
                                    <svg class="dark:text-borderconcours text-txtcommentply" width="20"
                                        height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.16711 10.8335L7.50045 14.1668L15.8338 5.8335" stroke="currentcolor"
                                            stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply text-sixteen font-inter font-normal pl-2">
                                        Niveles de planeación y modelo de negocio
                                    </div>

                                </div>
                            </div>
                            <script>
                                var cd = document.getElementById("cd");
                                var pl = document.getElementById("pl");

                                pl.addEventListener("click", function() {
                                    cd.classList.toggle("hidden");






                                });
                            </script>
                        </div>
                        <div class="px-5 py-4 flex items-center rounded-lg dark:bg-gray11 bg-white1 cursor-pointer mb-4">
                            <div>
                                <svg class="dark:text-bgprogresb text-txtnamecomntpkyr" width="25" height="24"
                                    viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.9769 9L12.9769 16L5.97693 9" stroke="currentcolor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                            <div class="flex flex-col pl-2">
                                <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-lg font-inter font-medium">
                                    MÓDULO 2
                                </div>
                                <div class="text-bcklightbuscador  font-medium font-inter text-sixteen">
                                    Introducción a la PCP
                                </div>
                            </div>
                        </div>
                        <div class="px-5 py-4 flex items-center rounded-lg dark:bg-gray11 bg-white1 cursor-pointer mb-4">
                            <div>
                                <svg class="dark:text-bgprogresb text-txtnamecomntpkyr" width="25" height="24"
                                    viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.9769 9L12.9769 16L5.97693 9" stroke="currentcolor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                            <div class="flex flex-col pl-2">
                                <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-lg font-inter font-medium">
                                    MÓDULO 3
                                </div>
                                <div class="text-bcklightbuscador  font-medium font-inter text-sixteen">
                                    Introducción a la PCP
                                </div>
                            </div>
                        </div>
                        <div class="px-5 py-4 flex items-center rounded-lg dark:bg-gray11 bg-white1 cursor-pointer mb-4">
                            <div>
                                <svg class="dark:text-bgprogresb text-txtnamecomntpkyr" width="25" height="24"
                                    viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.9769 9L12.9769 16L5.97693 9" stroke="currentcolor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                            <div class="flex flex-col pl-2">
                                <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-lg font-inter font-medium">
                                    MÓDULO 4
                                </div>
                                <div class="text-bcklightbuscador  font-medium font-inter text-sixteen">
                                    Introducción a la PCP
                                </div>
                            </div>
                        </div>
                        <div class="px-5 py-4 flex items-center rounded-lg dark:bg-gray11 bg-white1 cursor-pointer mb-4">
                            <div>
                                <svg class="dark:text-bgprogresb text-txtnamecomntpkyr" width="25" height="24"
                                    viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.9769 9L12.9769 16L5.97693 9" stroke="currentcolor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                            <div class="flex flex-col pl-2">
                                <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-lg font-inter font-medium">
                                    MÓDULO 5
                                </div>
                                <div class="text-bcklightbuscador  font-medium font-inter text-sixteen">
                                    Introducción a la PCP
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="lg:col-span-2 col-span-1">
                    <div class="xl:w-full ml:w-full lg:w-full md:w-2/3 w-full mx-auto">
                        <div class="sm:px-12 px-4 py-12 dark:bg-gray12 bg-white2 rounded-lg sm:ml-8 ml-0">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter pb-4 font-semibold sm:text-twenty-eight text-2xl  text-center">
                                Curso presencial Ingeniería de costos aplicado a la industria
                            </div>
                            <div class="bg-blue3 h-1 ">

                            </div>
                            <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-semibold text-sm pt-6">
                                PAGO ÚNICO
                            </div>
                            <div class="flex justify-center items-center">

                                <div
                                    class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter  font-semibold sm:text-4xl text-thirty-two ">
                                    $/. 59 USD
                                </div>
                                <div class="flex flex-col pl-6">
                                    <div
                                        class="dark:text-white-100 text-black font-inter font-normal sm:text-lg text-sixteen">


                                        $/. 59 USD
                                    </div>
                                    <div
                                        class="text-redtiket line-through font-inter font-normal sm:text-lg text-sixteen ">
                                        50% Dcto
                                    </div>
                                </div>
                            </div>
                            <div>


                                <script type="text/javascript">
                                    const getRemainingTime = deadline => {
                                        let now = new Date(),
                                            remainTime = (new Date(deadline) - now + 1000) / 1000,
                                            remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
                                            remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
                                            remainHours = ('0' + Math.floor(remainTime / 3600 % 2)).slice(-
                                                2), //ese % 2 se cambia por 24 para que funcione normal
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
                                            document.getElementById('hrs').innerHTML = `${t.remainHours}`;
                                            document.getElementById('min').innerHTML = `${t.remainMinutes}`;
                                            document.getElementById('sec').innerHTML = `${t.remainSeconds}`;

                                            if (t.remainTime <= 1) {
                                                clearInterval(timerUpdate);
                                                el.innerHTML = finalMessage;
                                            }
                                        }, 1000)
                                    };
                                    countdown('November 27 2024 23:59:00 GMT-0500', 'clock1', '¡Agotado!');
                                </script>

                                <div class="  pt-2  font-serif rounded">
                                    <div class="text-center text-redtiket text-sixteen font-inter font-medium pt-8 pb-1">la
                                        oferta termina
                                        en :</div>

                                    <div class="flex text-center items-center justify-between">
                                        <div class="">
                                            <p class="text-5xl text-redtiket font-bold">00</p>
                                            <p class="text-sm text-redtiket ">Días</p>
                                        </div>
                                        <div>
                                            <svg class="-mt-4" width="7" height="21" viewBox="0 0 7 21"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.72869 20.2812C2.95313 20.2812 2.28835 20.0085 1.73438 19.4631C1.1804 18.9176 0.907671 18.2528 0.916193 17.4688C0.907671 16.7017 1.1804 16.0455 1.73438 15.5C2.28835 14.9545 2.95313 14.6818 3.72869 14.6818C4.47869 14.6818 5.13068 14.9545 5.68466 15.5C6.24716 16.0455 6.53267 16.7017 6.54119 17.4688C6.53267 17.9886 6.39631 18.4616 6.1321 18.8878C5.87642 19.3139 5.53551 19.6548 5.10938 19.9105C4.69176 20.1577 4.23153 20.2812 3.72869 20.2812ZM3.72869 6.26989C2.95313 6.26989 2.28835 5.99716 1.73438 5.4517C1.1804 4.89773 0.907671 4.23295 0.916193 3.45739C0.907671 2.69034 1.1804 2.03409 1.73438 1.48864C2.28835 0.934659 2.95313 0.65767 3.72869 0.65767C4.47869 0.65767 5.13068 0.934659 5.68466 1.48864C6.24716 2.03409 6.53267 2.69034 6.54119 3.45739C6.53267 3.96875 6.39631 4.4375 6.1321 4.86364C5.87642 5.28977 5.53551 5.63068 5.10938 5.88636C4.69176 6.14204 4.23153 6.26989 3.72869 6.26989Z"
                                                    fill="#FF897A" />
                                            </svg>

                                        </div>
                                        <div class="">
                                            <p class="text-5xl text-redtiket font-bold" id="hrs">00</p>
                                            <p class="text-sm text-redtiket ">Horas</p>
                                        </div>
                                        <div>
                                            <svg class="-mt-4" width="7" height="21" viewBox="0 0 7 21"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.72869 20.2812C2.95313 20.2812 2.28835 20.0085 1.73438 19.4631C1.1804 18.9176 0.907671 18.2528 0.916193 17.4688C0.907671 16.7017 1.1804 16.0455 1.73438 15.5C2.28835 14.9545 2.95313 14.6818 3.72869 14.6818C4.47869 14.6818 5.13068 14.9545 5.68466 15.5C6.24716 16.0455 6.53267 16.7017 6.54119 17.4688C6.53267 17.9886 6.39631 18.4616 6.1321 18.8878C5.87642 19.3139 5.53551 19.6548 5.10938 19.9105C4.69176 20.1577 4.23153 20.2812 3.72869 20.2812ZM3.72869 6.26989C2.95313 6.26989 2.28835 5.99716 1.73438 5.4517C1.1804 4.89773 0.907671 4.23295 0.916193 3.45739C0.907671 2.69034 1.1804 2.03409 1.73438 1.48864C2.28835 0.934659 2.95313 0.65767 3.72869 0.65767C4.47869 0.65767 5.13068 0.934659 5.68466 1.48864C6.24716 2.03409 6.53267 2.69034 6.54119 3.45739C6.53267 3.96875 6.39631 4.4375 6.1321 4.86364C5.87642 5.28977 5.53551 5.63068 5.10938 5.88636C4.69176 6.14204 4.23153 6.26989 3.72869 6.26989Z"
                                                    fill="#FF897A" />
                                            </svg>

                                        </div>
                                        <div class="">
                                            <p class="text-5xl text-redtiket font-bold" id="min">00</p>
                                            <p class="text-sm text-redtiket ">Minutos</p>
                                        </div>
                                        <div>
                                            <svg class="-mt-4" width="7" height="21" viewBox="0 0 7 21"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.72869 20.2812C2.95313 20.2812 2.28835 20.0085 1.73438 19.4631C1.1804 18.9176 0.907671 18.2528 0.916193 17.4688C0.907671 16.7017 1.1804 16.0455 1.73438 15.5C2.28835 14.9545 2.95313 14.6818 3.72869 14.6818C4.47869 14.6818 5.13068 14.9545 5.68466 15.5C6.24716 16.0455 6.53267 16.7017 6.54119 17.4688C6.53267 17.9886 6.39631 18.4616 6.1321 18.8878C5.87642 19.3139 5.53551 19.6548 5.10938 19.9105C4.69176 20.1577 4.23153 20.2812 3.72869 20.2812ZM3.72869 6.26989C2.95313 6.26989 2.28835 5.99716 1.73438 5.4517C1.1804 4.89773 0.907671 4.23295 0.916193 3.45739C0.907671 2.69034 1.1804 2.03409 1.73438 1.48864C2.28835 0.934659 2.95313 0.65767 3.72869 0.65767C4.47869 0.65767 5.13068 0.934659 5.68466 1.48864C6.24716 2.03409 6.53267 2.69034 6.54119 3.45739C6.53267 3.96875 6.39631 4.4375 6.1321 4.86364C5.87642 5.28977 5.53551 5.63068 5.10938 5.88636C4.69176 6.14204 4.23153 6.26989 3.72869 6.26989Z"
                                                    fill="#FF897A" />
                                            </svg>

                                        </div>
                                        <div>
                                            <p class="text-5xl text-redtiket font-bold" id="sec">00</p>
                                            <p class="text-sm text-redtiket ">Seg</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="sm:w-auto w-full sm:pt-8 pt-6">
                                    <button
                                        class="bg-bgbtngreen text-center mx-auto  rounded-lg flex px-5 focus:outline-none py-2">

                                        <div
                                            class="text-green_especialidad pl-2 text-sixteen font-inter text-center font-semibold">
                                            Comprar ahora
                                        </div>

                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div
                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-semibold sm:text-4xl text-thirty-two pt-12 text-center">
                Aprende de nuestros mentores expertos
            </div>
            <div class="containermygo mx-auto sm:pt-40 pt-10">
                <div class="grid sm:grid-cols-2 grid-cols-1 pb-12 xl:px-0 lg:px-8 md:px-8 px-4">
                    <div>
                        <img class="mx-auto" src="{{ asset('images/metodologia/yugo.png') }}" alt="">

                    </div>
                    <div class="sm:pt-0 pt-6">
                        <div class="flex pl-3">
                            <svg class="dark:text-blue2 text-blue3" width="21" height="21" viewBox="0 0 21 21"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.7081 5.29315C17.0987 5.6837 17.0987 6.3169 16.7081 6.70745L8.70768 14.7079C8.31713 15.0984 7.68393 15.0984 7.29338 14.7079L3.29315 10.7077C2.90261 10.3171 2.90261 9.68393 3.29315 9.29338C3.6837 8.90284 4.3169 8.90284 4.70745 9.29338L8.00053 12.5865L15.2938 5.29315C15.6844 4.90261 16.3176 4.90261 16.7081 5.29315Z"
                                    fill="currentcolor" />
                            </svg>
                            <div class=" flex flex-col">
                                <div class="dark:text-bgbtngreen text-bcklightbuscador text-xl font-semibold font-inter">
                                    Especialidad
                                </div>
                                <div
                                    class="dark:text-borderconcours text-txtcommentply text-sixteen font-inter font-normal pt-2">
                                    Ingeniero de Sistemas
                                </div>
                            </div>

                        </div>
                        <div class="flex pl-3 pt-10">
                            <svg class="dark:text-blue2 text-blue3" width="21" height="21" viewBox="0 0 21 21"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.7081 5.29315C17.0987 5.6837 17.0987 6.3169 16.7081 6.70745L8.70768 14.7079C8.31713 15.0984 7.68393 15.0984 7.29338 14.7079L3.29315 10.7077C2.90261 10.3171 2.90261 9.68393 3.29315 9.29338C3.6837 8.90284 4.3169 8.90284 4.70745 9.29338L8.00053 12.5865L15.2938 5.29315C15.6844 4.90261 16.3176 4.90261 16.7081 5.29315Z"
                                    fill="currentcolor" />
                            </svg>
                            <div class=" flex flex-col">
                                <div class="dark:text-bgbtngreen text-bcklightbuscador text-xl font-semibold font-inter">
                                    Cargo
                                </div>
                                <div
                                    class="dark:text-borderconcours text-txtcommentply text-sixteen font-inter font-normal pt-2">
                                    Ingeniero de Sistemas y CEO en la Startup CREHAYUGO
                                </div>
                            </div>

                        </div>
                        <div class="flex pl-3 pt-10">
                            <svg class="dark:text-blue2 text-blue3" width="21" height="21" viewBox="0 0 21 21"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.7081 5.29315C17.0987 5.6837 17.0987 6.3169 16.7081 6.70745L8.70768 14.7079C8.31713 15.0984 7.68393 15.0984 7.29338 14.7079L3.29315 10.7077C2.90261 10.3171 2.90261 9.68393 3.29315 9.29338C3.6837 8.90284 4.3169 8.90284 4.70745 9.29338L8.00053 12.5865L15.2938 5.29315C15.6844 4.90261 16.3176 4.90261 16.7081 5.29315Z"
                                    fill="currentcolor" />
                            </svg>
                            <div class=" flex flex-col">
                                <div class="dark:text-bgbtngreen text-bcklightbuscador text-xl font-semibold font-inter">
                                    Experiencia
                                </div>
                                <div
                                    class="dark:text-borderconcours text-txtcommentply text-sixteen font-inter font-normal pt-2">
                                    Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint.
                                    Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt
                                    nostrud amet.
                                </div>
                            </div>

                        </div>

                    </div>


                </div>
            </div>


        </div>
        <div class="dark:bg-gray12 bg-white2 py-20">
            <div class="containermygo mx-auto">
                <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-bold text-center text-4xl pt-20">
                    ¿Tienes dudas acerca del curso presencial?
                </div>
                <div class="text-gray-600 dark:text-pricingdarkstudents font-inter text-lg font-normal pt-5 text-center">
                    Ponte en contacto con uno de nuestros asesores y te darán toda la información que necesites.
                </div>
                <div class="text-center pt-12 ">
                    <button
                        class="text-green_especialidad bg-bgbtngreen rounded-lg px-5 font-semibold font-inter mx-auto h-10 ">
                        Solicitar información
                    </button>
                </div>
            </div>

        </div>
        <div class="dark:bg-gray14 h-full bg-whiteheader ">
            <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-bold text-center text-4xl pt-20">
                Preguntas frecuentes
            </div>
            <div class="containermygo mx-auto pt-10 pb-20">
                <button
                    class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                    id="play1">

                    <div>
                        <svg id="icon1" class="text-graypricingstrike dark:text-pricingdarkstudents " width="24"
                            height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                                stroke="Currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>



                        <svg id="icon2" class="text-graypricingstrike dark:text-pricingdarkstudents hidden"
                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                                stroke="Currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <div>
                        <div class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                            ¿Tengo acceso ilimitado a las clases?

                        </div>
                        <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden"
                            id="card">
                            ¡Sí! Luego de que realices la compra vas a poder acceder a las clases cuando
                            y donde quieras. El curso se queda en tu cuenta de MayuGo para siempre.

                        </div>
                    </div>
                </button>


                <script>
                    var play1 = document.getElementById('play1');
                    var icon1 = document.getElementById('icon1');
                    var icon2 = document.getElementById('icon2');
                    var card = document.getElementById('card');



                    play1.addEventListener('click', function() {
                        // icon.classList.remove('hidden');
                        card.classList.toggle('hidden');
                    });


                    play1.addEventListener('click', function() {
                        // icon.classList.remove('hidden');
                        icon2.classList.toggle('hidden')
                        icon1.classList.toggle('hidden');
                    });
                </script>
                <button
                    class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none">

                    <div>
                        <svg class="text-graypricingstrike dark:text-pricingdarkstudents " width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                                stroke="Currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>



                        <svg class="text-graypricingstrike dark:text-pricingdarkstudents hidden" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                                stroke="Currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <div>
                        <div class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                            ¿Cuándo inicia el curso?

                        </div>

                    </div>
                </button>
                <button
                    class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none">

                    <div>
                        <svg class="text-graypricingstrike dark:text-pricingdarkstudents " width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                                stroke="Currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>



                        <svg class="text-graypricingstrike dark:text-pricingdarkstudents hidden" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                                stroke="Currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <div>
                        <div class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                            Cómo obtengo el certificado del curso?

                        </div>

                    </div>
                </button>
                <button
                    class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none">

                    <div>
                        <svg class="text-graypricingstrike dark:text-pricingdarkstudents " width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                                stroke="Currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>



                        <svg class="text-graypricingstrike dark:text-pricingdarkstudents hidden" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                                stroke="Currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <div>
                        <div class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                            ¿Son cursos grabados o en vivo?

                        </div>

                    </div>
                </button>
                <button
                    class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none">

                    <div>
                        <svg class="text-graypricingstrike dark:text-pricingdarkstudents " width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                                stroke="Currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>



                        <svg class="text-graypricingstrike dark:text-pricingdarkstudents hidden" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                                stroke="Currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <div>
                        <div class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                            ¿Si subo a PREMIUM tengo acceso a todos los cursos y certificaciones?

                        </div>

                    </div>
                </button>
            </div>
        </div>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js"></script>


    </div>
@endsection
