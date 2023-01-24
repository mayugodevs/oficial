@extends('layout')

@section('content')
    <div class="dark:bg-gray14 h-full bg-whiteheader ">
        <div class="pt-32 mx-auto xl:h-full lg:h-full md:h-auto ul:h-full  h-auto containermygo">
            <div class="grid xl:grid-cols-3 lg:grid-cols-3 md:grid-cols-2 ul:grid-cols-4 grid-cols-1 gap-x-8 gap-y-12 ul:px-0 xl:px-0 lg:px-0 md:px-4 px-4 pb-10">
                <div>
                    <div class="relative rounded-t-xl ">
                        <img class="rounded-t-lg "
                            src="https://www.mayugo.net/admin/images/miniaturas/gestion-gerencial-de-costos.jpeg"
                            alt="">
                        <div class="absolute  top-3 right-3">
                            <button class="flex bg-bluefacebook px-2 h-7 rounded-lg items-center">
                                <svg class="text-white-100 font-inter font-medium text-sm " width="14" height="14"
                                    viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div class="text-white-100 font-inter font-medium text-xs pl-3">
                                    Clase presencial
                                </div>

                            </button>

                        </div>
                    </div>
                    <div class="dark:bg-colheaderdark bg-bgfondopricingwhite p-3 ">
                        <div class="text-lg dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium leading-7">
                            Estudio de métodos y mejora de procesos
                        </div>
                        <div class="font-inter font-normal text-sm">
                            <span class="dark:text-borderconcours text-gray-650"> Por:</span> <span class="italic text-greenactivo">Franklin
                                Espinoza</span>
                        </div>
                        <div class="flex gap-x-6 pt-2">
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.3333 4.6667V2.00003M10.6666 4.6667V2.00003M4.66663 7.33336H11.3333M3.3333 14H12.6666C13.403 14 14 13.4031 14 12.6667V4.6667C14 3.93032 13.403 3.33336 12.6666 3.33336H3.3333C2.59692 3.33336 1.99997 3.93032 1.99997 4.6667V12.6667C1.99997 13.4031 2.59692 14 3.3333 14Z"
                                        stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650  font-inter font-normal text-sm pl-2">
                                    03 Mayo
                                </div>

                            </div>
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650  font-inter font-medium text-sm "
                                    width="14" height="14" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650 font-inter font-normal text-sm pl-2">
                                    Presencial
                                </div>

                            </div>
                        </div>

                        <div
                            class="dark:text-pricingdarkstudents text-gray-650 font-inter font-medium text-sm flex gap-x-2 pt-2">
                            <svg class="" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.7713 11.1049C11.1469 11.7293 9.84111 13.0351 8.9426 13.9336C8.4219 14.4543 7.57852 14.4546 7.05782 13.9339C6.17497 13.051 4.89447 11.7705 4.22884 11.1049C2.14604 9.02211 2.14604 5.64523 4.22884 3.56243C6.31163 1.47964 9.68851 1.47964 11.7713 3.56243C13.8541 5.64523 13.8541 9.02211 11.7713 11.1049Z"
                                    stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M10.0001 7.33367C10.0001 8.43824 9.10464 9.33367 8.00007 9.33367C6.8955 9.33367 6.00007 8.43824 6.00007 7.33367C6.00007 6.2291 6.8955 5.33367 8.00007 5.33367C9.10464 5.33367 10.0001 6.2291 10.0001 7.33367Z"
                                    stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div>
                                Centro de Lima 123 <button class="text-blue"> (Cómo llegar)</button>
                            </div>

                        </div>



                    </div>
                    <div class="dark:bg-pricingdark bg-pricingcintawhite p-3 rounded-b-xl  items-center flex justify-between ">
                        <div class="flex flex-col font-inter font-medium ">

                            <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                370 PEN
                            </div>
                            <div class="text-gray-400 line-through text-sm">
                                740 PEN
                            </div>



                        </div>
                        <div>

                            <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                Comprar
                            </button>


                        </div>
                    </div>

                </div>
                <div>
                    <div class="relative rounded-t-xl ">
                        <img class="rounded-t-lg "
                            src="https://www.mayugo.net/admin/images/miniaturas/gestion-gerencial-de-costos.jpeg"
                            alt="">
                        <div class="absolute  top-3 right-3">
                            <button class="flex bg-bluefacebook px-2 h-7 rounded-lg items-center">
                                <svg class="text-white-100 font-inter font-medium text-sm " width="14" height="14"
                                    viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div class="text-white-100 font-inter font-medium text-xs pl-3">
                                    Clase presencial
                                </div>

                            </button>

                        </div>
                    </div>
                    <div class="dark:bg-colheaderdark bg-bgfondopricingwhite p-3 ">
                        <div class="text-lg dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium leading-7">
                            Estudio de métodos y mejora de procesos
                        </div>
                        <div class="font-inter font-normal text-sm">
                            <span class="dark:text-borderconcours text-gray-650"> Por:</span> <span class="italic text-greenactivo">Franklin
                                Espinoza</span>
                        </div>
                        <div class="flex gap-x-6 pt-2">
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.3333 4.6667V2.00003M10.6666 4.6667V2.00003M4.66663 7.33336H11.3333M3.3333 14H12.6666C13.403 14 14 13.4031 14 12.6667V4.6667C14 3.93032 13.403 3.33336 12.6666 3.33336H3.3333C2.59692 3.33336 1.99997 3.93032 1.99997 4.6667V12.6667C1.99997 13.4031 2.59692 14 3.3333 14Z"
                                        stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650  font-inter font-normal text-sm pl-2">
                                    03 Mayo
                                </div>

                            </div>
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650  font-inter font-medium text-sm "
                                    width="14" height="14" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650 font-inter font-normal text-sm pl-2">
                                    Presencial
                                </div>

                            </div>
                        </div>

                        <div
                            class="dark:text-pricingdarkstudents text-gray-650 font-inter font-medium text-sm flex gap-x-2 pt-2">
                            <svg class="" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.7713 11.1049C11.1469 11.7293 9.84111 13.0351 8.9426 13.9336C8.4219 14.4543 7.57852 14.4546 7.05782 13.9339C6.17497 13.051 4.89447 11.7705 4.22884 11.1049C2.14604 9.02211 2.14604 5.64523 4.22884 3.56243C6.31163 1.47964 9.68851 1.47964 11.7713 3.56243C13.8541 5.64523 13.8541 9.02211 11.7713 11.1049Z"
                                    stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M10.0001 7.33367C10.0001 8.43824 9.10464 9.33367 8.00007 9.33367C6.8955 9.33367 6.00007 8.43824 6.00007 7.33367C6.00007 6.2291 6.8955 5.33367 8.00007 5.33367C9.10464 5.33367 10.0001 6.2291 10.0001 7.33367Z"
                                    stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div>
                                Centro de Lima 123 <button class="text-blue"> (Cómo llegar)</button>
                            </div>

                        </div>



                    </div>
                    <div class="dark:bg-pricingdark bg-pricingcintawhite p-3 rounded-b-xl  items-center flex justify-between ">
                        <div class="flex flex-col font-inter font-medium ">

                            <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                370 PEN
                            </div>
                            <div class="text-gray-400 line-through text-sm">
                                740 PEN
                            </div>



                        </div>
                        <div>

                            <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                Comprar
                            </button>


                        </div>
                    </div>

                </div>
                <div>
                    <div class="relative rounded-t-xl ">
                        <img class="rounded-t-lg "
                            src="https://www.mayugo.net/admin/images/miniaturas/gestion-gerencial-de-costos.jpeg"
                            alt="">
                        <div class="absolute  top-3 right-3">
                            <button class="flex bg-bluefacebook px-2 h-7 rounded-lg items-center">
                                <svg class="text-white-100 font-inter font-medium text-sm " width="14" height="14"
                                    viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div class="text-white-100 font-inter font-medium text-xs pl-3">
                                    Clase presencial
                                </div>

                            </button>

                        </div>
                    </div>
                    <div class="dark:bg-colheaderdark bg-bgfondopricingwhite p-3 ">
                        <div class="text-lg dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium leading-7">
                            Estudio de métodos y mejora de procesos
                        </div>
                        <div class="font-inter font-normal text-sm">
                            <span class="dark:text-borderconcours text-gray-650"> Por:</span> <span class="italic text-greenactivo">Franklin
                                Espinoza</span>
                        </div>
                        <div class="flex gap-x-6 pt-2">
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.3333 4.6667V2.00003M10.6666 4.6667V2.00003M4.66663 7.33336H11.3333M3.3333 14H12.6666C13.403 14 14 13.4031 14 12.6667V4.6667C14 3.93032 13.403 3.33336 12.6666 3.33336H3.3333C2.59692 3.33336 1.99997 3.93032 1.99997 4.6667V12.6667C1.99997 13.4031 2.59692 14 3.3333 14Z"
                                        stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650  font-inter font-normal text-sm pl-2">
                                    03 Mayo
                                </div>

                            </div>
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650  font-inter font-medium text-sm "
                                    width="14" height="14" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650 font-inter font-normal text-sm pl-2">
                                    Presencial
                                </div>

                            </div>
                        </div>

                        <div
                            class="dark:text-pricingdarkstudents text-gray-650 font-inter font-medium text-sm flex gap-x-2 pt-2">
                            <svg class="" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.7713 11.1049C11.1469 11.7293 9.84111 13.0351 8.9426 13.9336C8.4219 14.4543 7.57852 14.4546 7.05782 13.9339C6.17497 13.051 4.89447 11.7705 4.22884 11.1049C2.14604 9.02211 2.14604 5.64523 4.22884 3.56243C6.31163 1.47964 9.68851 1.47964 11.7713 3.56243C13.8541 5.64523 13.8541 9.02211 11.7713 11.1049Z"
                                    stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M10.0001 7.33367C10.0001 8.43824 9.10464 9.33367 8.00007 9.33367C6.8955 9.33367 6.00007 8.43824 6.00007 7.33367C6.00007 6.2291 6.8955 5.33367 8.00007 5.33367C9.10464 5.33367 10.0001 6.2291 10.0001 7.33367Z"
                                    stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div>
                                Centro de Lima 123 <button class="text-blue"> (Cómo llegar)</button>
                            </div>

                        </div>



                    </div>
                    <div class="dark:bg-pricingdark bg-pricingcintawhite p-3 rounded-b-xl  items-center flex justify-between ">
                        <div class="flex flex-col font-inter font-medium ">

                            <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                370 PEN
                            </div>
                            <div class="text-gray-400 line-through text-sm">
                                740 PEN
                            </div>



                        </div>
                        <div>

                            <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                Comprar
                            </button>


                        </div>
                    </div>

                </div>
                <div>
                    <div class="relative rounded-t-xl ">
                        <img class="rounded-t-lg "
                            src="https://www.mayugo.net/admin/images/miniaturas/gestion-gerencial-de-costos.jpeg"
                            alt="">
                        <div class="absolute  top-3 right-3">
                            <button class="flex bg-bluefacebook px-2 h-7 rounded-lg items-center">
                                <svg class="text-white-100 font-inter font-medium text-sm " width="14" height="14"
                                    viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div class="text-white-100 font-inter font-medium text-xs pl-3">
                                    Clase presencial
                                </div>

                            </button>

                        </div>
                    </div>
                    <div class="dark:bg-colheaderdark bg-bgfondopricingwhite p-3 ">
                        <div class="text-lg dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium leading-7">
                            Estudio de métodos y mejora de procesos
                        </div>
                        <div class="font-inter font-normal text-sm">
                            <span class="dark:text-borderconcours text-gray-650"> Por:</span> <span class="italic text-greenactivo">Franklin
                                Espinoza</span>
                        </div>
                        <div class="flex gap-x-6 pt-2">
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.3333 4.6667V2.00003M10.6666 4.6667V2.00003M4.66663 7.33336H11.3333M3.3333 14H12.6666C13.403 14 14 13.4031 14 12.6667V4.6667C14 3.93032 13.403 3.33336 12.6666 3.33336H3.3333C2.59692 3.33336 1.99997 3.93032 1.99997 4.6667V12.6667C1.99997 13.4031 2.59692 14 3.3333 14Z"
                                        stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650  font-inter font-normal text-sm pl-2">
                                    03 Mayo
                                </div>

                            </div>
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650  font-inter font-medium text-sm "
                                    width="14" height="14" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650 font-inter font-normal text-sm pl-2">
                                    Presencial
                                </div>

                            </div>
                        </div>

                        <div
                            class="dark:text-pricingdarkstudents text-gray-650 font-inter font-medium text-sm flex gap-x-2 pt-2">
                            <svg class="" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.7713 11.1049C11.1469 11.7293 9.84111 13.0351 8.9426 13.9336C8.4219 14.4543 7.57852 14.4546 7.05782 13.9339C6.17497 13.051 4.89447 11.7705 4.22884 11.1049C2.14604 9.02211 2.14604 5.64523 4.22884 3.56243C6.31163 1.47964 9.68851 1.47964 11.7713 3.56243C13.8541 5.64523 13.8541 9.02211 11.7713 11.1049Z"
                                    stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M10.0001 7.33367C10.0001 8.43824 9.10464 9.33367 8.00007 9.33367C6.8955 9.33367 6.00007 8.43824 6.00007 7.33367C6.00007 6.2291 6.8955 5.33367 8.00007 5.33367C9.10464 5.33367 10.0001 6.2291 10.0001 7.33367Z"
                                    stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div>
                                Centro de Lima 123 <button class="text-blue"> (Cómo llegar)</button>
                            </div>

                        </div>



                    </div>
                    <div class="dark:bg-pricingdark bg-pricingcintawhite p-3 rounded-b-xl  items-center flex justify-between ">
                        <div class="flex flex-col font-inter font-medium ">

                            <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                370 PEN
                            </div>
                            <div class="text-gray-400 line-through text-sm">
                                740 PEN
                            </div>



                        </div>
                        <div>

                            <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                Comprar
                            </button>


                        </div>
                    </div>

                </div>
                <div>
                    <div class="relative rounded-t-xl ">
                        <img class="rounded-t-lg "
                            src="https://www.mayugo.net/admin/images/miniaturas/gestion-gerencial-de-costos.jpeg"
                            alt="">
                        <div class="absolute  top-3 right-3">
                            <button class="flex bg-bluefacebook px-2 h-7 rounded-lg items-center">
                                <svg class="text-white-100 font-inter font-medium text-sm " width="14" height="14"
                                    viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div class="text-white-100 font-inter font-medium text-xs pl-3">
                                    Clase presencial
                                </div>

                            </button>

                        </div>
                    </div>
                    <div class="dark:bg-colheaderdark bg-bgfondopricingwhite p-3 ">
                        <div class="text-lg dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium leading-7">
                            Estudio de métodos y mejora de procesos
                        </div>
                        <div class="font-inter font-normal text-sm">
                            <span class="dark:text-borderconcours text-gray-650"> Por:</span> <span class="italic text-greenactivo">Franklin
                                Espinoza</span>
                        </div>
                        <div class="flex gap-x-6 pt-2">
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.3333 4.6667V2.00003M10.6666 4.6667V2.00003M4.66663 7.33336H11.3333M3.3333 14H12.6666C13.403 14 14 13.4031 14 12.6667V4.6667C14 3.93032 13.403 3.33336 12.6666 3.33336H3.3333C2.59692 3.33336 1.99997 3.93032 1.99997 4.6667V12.6667C1.99997 13.4031 2.59692 14 3.3333 14Z"
                                        stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650  font-inter font-normal text-sm pl-2">
                                    03 Mayo
                                </div>

                            </div>
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650  font-inter font-medium text-sm "
                                    width="14" height="14" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650 font-inter font-normal text-sm pl-2">
                                    Presencial
                                </div>

                            </div>
                        </div>

                        <div
                            class="dark:text-pricingdarkstudents text-gray-650 font-inter font-medium text-sm flex gap-x-2 pt-2">
                            <svg class="" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.7713 11.1049C11.1469 11.7293 9.84111 13.0351 8.9426 13.9336C8.4219 14.4543 7.57852 14.4546 7.05782 13.9339C6.17497 13.051 4.89447 11.7705 4.22884 11.1049C2.14604 9.02211 2.14604 5.64523 4.22884 3.56243C6.31163 1.47964 9.68851 1.47964 11.7713 3.56243C13.8541 5.64523 13.8541 9.02211 11.7713 11.1049Z"
                                    stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M10.0001 7.33367C10.0001 8.43824 9.10464 9.33367 8.00007 9.33367C6.8955 9.33367 6.00007 8.43824 6.00007 7.33367C6.00007 6.2291 6.8955 5.33367 8.00007 5.33367C9.10464 5.33367 10.0001 6.2291 10.0001 7.33367Z"
                                    stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div>
                                Centro de Lima 123 <button class="text-blue"> (Cómo llegar)</button>
                            </div>

                        </div>



                    </div>
                    <div class="dark:bg-pricingdark bg-pricingcintawhite p-3 rounded-b-xl  items-center flex justify-between ">
                        <div class="flex flex-col font-inter font-medium ">

                            <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                370 PEN
                            </div>
                            <div class="text-gray-400 line-through text-sm">
                                740 PEN
                            </div>



                        </div>
                        <div>

                            <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                Comprar
                            </button>


                        </div>
                    </div>

                </div>
                <div>
                    <div class="relative rounded-t-xl ">
                        <img class="rounded-t-lg "
                            src="https://www.mayugo.net/admin/images/miniaturas/gestion-gerencial-de-costos.jpeg"
                            alt="">
                        <div class="absolute  top-3 right-3">
                            <button class="flex bg-bluefacebook px-2 h-7 rounded-lg items-center">
                                <svg class="text-white-100 font-inter font-medium text-sm " width="14" height="14"
                                    viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div class="text-white-100 font-inter font-medium text-xs pl-3">
                                    Clase presencial
                                </div>

                            </button>

                        </div>
                    </div>
                    <div class="dark:bg-colheaderdark bg-bgfondopricingwhite p-3 ">
                        <div class="text-lg dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium leading-7">
                            Estudio de métodos y mejora de procesos
                        </div>
                        <div class="font-inter font-normal text-sm">
                            <span class="dark:text-borderconcours text-gray-650"> Por:</span> <span class="italic text-greenactivo">Franklin
                                Espinoza</span>
                        </div>
                        <div class="flex gap-x-6 pt-2">
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.3333 4.6667V2.00003M10.6666 4.6667V2.00003M4.66663 7.33336H11.3333M3.3333 14H12.6666C13.403 14 14 13.4031 14 12.6667V4.6667C14 3.93032 13.403 3.33336 12.6666 3.33336H3.3333C2.59692 3.33336 1.99997 3.93032 1.99997 4.6667V12.6667C1.99997 13.4031 2.59692 14 3.3333 14Z"
                                        stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650  font-inter font-normal text-sm pl-2">
                                    03 Mayo
                                </div>

                            </div>
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650  font-inter font-medium text-sm "
                                    width="14" height="14" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650 font-inter font-normal text-sm pl-2">
                                    Presencial
                                </div>

                            </div>
                        </div>

                        <div
                            class="dark:text-pricingdarkstudents text-gray-650 font-inter font-medium text-sm flex gap-x-2 pt-2">
                            <svg class="" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.7713 11.1049C11.1469 11.7293 9.84111 13.0351 8.9426 13.9336C8.4219 14.4543 7.57852 14.4546 7.05782 13.9339C6.17497 13.051 4.89447 11.7705 4.22884 11.1049C2.14604 9.02211 2.14604 5.64523 4.22884 3.56243C6.31163 1.47964 9.68851 1.47964 11.7713 3.56243C13.8541 5.64523 13.8541 9.02211 11.7713 11.1049Z"
                                    stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M10.0001 7.33367C10.0001 8.43824 9.10464 9.33367 8.00007 9.33367C6.8955 9.33367 6.00007 8.43824 6.00007 7.33367C6.00007 6.2291 6.8955 5.33367 8.00007 5.33367C9.10464 5.33367 10.0001 6.2291 10.0001 7.33367Z"
                                    stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div>
                                Centro de Lima 123 <button class="text-blue"> (Cómo llegar)</button>
                            </div>

                        </div>



                    </div>
                    <div class="dark:bg-pricingdark bg-pricingcintawhite p-3 rounded-b-xl  items-center flex justify-between ">
                        <div class="flex flex-col font-inter font-medium ">

                            <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                370 PEN
                            </div>
                            <div class="text-gray-400 line-through text-sm">
                                740 PEN
                            </div>



                        </div>
                        <div>

                            <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                Comprar
                            </button>


                        </div>
                    </div>

                </div>
                <div>
                    <div class="relative rounded-t-xl ">
                        <img class="rounded-t-lg "
                            src="https://www.mayugo.net/admin/images/miniaturas/gestion-gerencial-de-costos.jpeg"
                            alt="">
                        <div class="absolute  top-3 right-3">
                            <button class="flex bg-bluefacebook px-2 h-7 rounded-lg items-center">
                                <svg class="text-white-100 font-inter font-medium text-sm " width="14" height="14"
                                    viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div class="text-white-100 font-inter font-medium text-xs pl-3">
                                    Clase presencial
                                </div>

                            </button>

                        </div>
                    </div>
                    <div class="dark:bg-colheaderdark bg-bgfondopricingwhite p-3 ">
                        <div class="text-lg dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium leading-7">
                            Estudio de métodos y mejora de procesos
                        </div>
                        <div class="font-inter font-normal text-sm">
                            <span class="dark:text-borderconcours text-gray-650"> Por:</span> <span class="italic text-greenactivo">Franklin
                                Espinoza</span>
                        </div>
                        <div class="flex gap-x-6 pt-2">
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.3333 4.6667V2.00003M10.6666 4.6667V2.00003M4.66663 7.33336H11.3333M3.3333 14H12.6666C13.403 14 14 13.4031 14 12.6667V4.6667C14 3.93032 13.403 3.33336 12.6666 3.33336H3.3333C2.59692 3.33336 1.99997 3.93032 1.99997 4.6667V12.6667C1.99997 13.4031 2.59692 14 3.3333 14Z"
                                        stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650  font-inter font-normal text-sm pl-2">
                                    03 Mayo
                                </div>

                            </div>
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650  font-inter font-medium text-sm "
                                    width="14" height="14" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650 font-inter font-normal text-sm pl-2">
                                    Presencial
                                </div>

                            </div>
                        </div>

                        <div
                            class="dark:text-pricingdarkstudents text-gray-650 font-inter font-medium text-sm flex gap-x-2 pt-2">
                            <svg class="" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.7713 11.1049C11.1469 11.7293 9.84111 13.0351 8.9426 13.9336C8.4219 14.4543 7.57852 14.4546 7.05782 13.9339C6.17497 13.051 4.89447 11.7705 4.22884 11.1049C2.14604 9.02211 2.14604 5.64523 4.22884 3.56243C6.31163 1.47964 9.68851 1.47964 11.7713 3.56243C13.8541 5.64523 13.8541 9.02211 11.7713 11.1049Z"
                                    stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M10.0001 7.33367C10.0001 8.43824 9.10464 9.33367 8.00007 9.33367C6.8955 9.33367 6.00007 8.43824 6.00007 7.33367C6.00007 6.2291 6.8955 5.33367 8.00007 5.33367C9.10464 5.33367 10.0001 6.2291 10.0001 7.33367Z"
                                    stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div>
                                Centro de Lima 123 <button class="text-blue"> (Cómo llegar)</button>
                            </div>

                        </div>



                    </div>
                    <div class="dark:bg-pricingdark bg-pricingcintawhite p-3 rounded-b-xl  items-center flex justify-between ">
                        <div class="flex flex-col font-inter font-medium ">

                            <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                370 PEN
                            </div>
                            <div class="text-gray-400 line-through text-sm">
                                740 PEN
                            </div>



                        </div>
                        <div>

                            <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                Comprar
                            </button>


                        </div>
                    </div>

                </div>
                <div>
                    <div class="relative rounded-t-xl ">
                        <img class="rounded-t-lg "
                            src="https://www.mayugo.net/admin/images/miniaturas/gestion-gerencial-de-costos.jpeg"
                            alt="">
                        <div class="absolute  top-3 right-3">
                            <button class="flex bg-bluefacebook px-2 h-7 rounded-lg items-center">
                                <svg class="text-white-100 font-inter font-medium text-sm " width="14" height="14"
                                    viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div class="text-white-100 font-inter font-medium text-xs pl-3">
                                    Clase presencial
                                </div>

                            </button>

                        </div>
                    </div>
                    <div class="dark:bg-colheaderdark bg-bgfondopricingwhite p-3 ">
                        <div class="text-lg dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium leading-7">
                            Estudio de métodos y mejora de procesos
                        </div>
                        <div class="font-inter font-normal text-sm">
                            <span class="dark:text-borderconcours text-gray-650"> Por:</span> <span class="italic text-greenactivo">Franklin
                                Espinoza</span>
                        </div>
                        <div class="flex gap-x-6 pt-2">
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.3333 4.6667V2.00003M10.6666 4.6667V2.00003M4.66663 7.33336H11.3333M3.3333 14H12.6666C13.403 14 14 13.4031 14 12.6667V4.6667C14 3.93032 13.403 3.33336 12.6666 3.33336H3.3333C2.59692 3.33336 1.99997 3.93032 1.99997 4.6667V12.6667C1.99997 13.4031 2.59692 14 3.3333 14Z"
                                        stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650  font-inter font-normal text-sm pl-2">
                                    03 Mayo
                                </div>

                            </div>
                            <div class="flex items-center">
                                <svg class="dark:text-pricingdarkstudents text-gray-650  font-inter font-medium text-sm "
                                    width="14" height="14" viewBox="0 0 28 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.9771 20.6665L9.97711 24.6665L8.64378 25.9999H19.3104L17.9771 24.6665L16.9771 20.6665M1.97711 15.3332H25.9771M4.64378 20.6665H23.3104C24.7832 20.6665 25.9771 19.4726 25.9771 17.9999V4.66654C25.9771 3.19379 24.7832 1.99988 23.3104 1.99988H4.64378C3.17102 1.99988 1.97711 3.19379 1.97711 4.66654V17.9999C1.97711 19.4726 3.17102 20.6665 4.64378 20.6665Z"
                                        stroke="Currentcolor" stroke-width="2.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div
                                    class="dark:text-pricingdarkstudents text-gray-650 font-inter font-normal text-sm pl-2">
                                    Presencial
                                </div>

                            </div>
                        </div>

                        <div
                            class="dark:text-pricingdarkstudents text-gray-650 font-inter font-medium text-sm flex gap-x-2 pt-2">
                            <svg class="" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.7713 11.1049C11.1469 11.7293 9.84111 13.0351 8.9426 13.9336C8.4219 14.4543 7.57852 14.4546 7.05782 13.9339C6.17497 13.051 4.89447 11.7705 4.22884 11.1049C2.14604 9.02211 2.14604 5.64523 4.22884 3.56243C6.31163 1.47964 9.68851 1.47964 11.7713 3.56243C13.8541 5.64523 13.8541 9.02211 11.7713 11.1049Z"
                                    stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M10.0001 7.33367C10.0001 8.43824 9.10464 9.33367 8.00007 9.33367C6.8955 9.33367 6.00007 8.43824 6.00007 7.33367C6.00007 6.2291 6.8955 5.33367 8.00007 5.33367C9.10464 5.33367 10.0001 6.2291 10.0001 7.33367Z"
                                    stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div>
                                Centro de Lima 123 <button class="text-blue"> (Cómo llegar)</button>
                            </div>

                        </div>



                    </div>
                    <div class="dark:bg-pricingdark bg-pricingcintawhite p-3 rounded-b-xl  items-center flex justify-between ">
                        <div class="flex flex-col font-inter font-medium ">

                            <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                370 PEN
                            </div>
                            <div class="text-gray-400 line-through text-sm">
                                740 PEN
                            </div>



                        </div>
                        <div>

                            <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                Comprar
                            </button>


                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
