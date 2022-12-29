@extends('layout')

@section('content')
    <style>
        .barra::-webkit-scrollbar {
            display: none;

        }
    </style>
    <div class="pt-40 dark:bg-gray14 bg-whiteheader">
        <div class="containermygo mx-auto">

            <div class="flex sm:flex-row flex-col justify-between sm:px-0 px-4 ">
                <div class="flex sm:flex-row flex-col w-full">
                    <div class="relative w-full sm:pr-4 pr-0">

                        <input type="text"
                            class="dark:bg-black pl-10 w-full py-2.5 bg-white-100 text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours dark:placeholder-bgprogresb placeholder-txtnamecomntpkyr font-normal border focus:outline-none rounded-xl"
                            placeholder="Cargo, categoría">

                        <div class="absolute left-3 top-3.5">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.4997 11.0462C14.1836 11.9837 11.652 12.5 8.99973 12.5C6.34747 12.5 3.8158 11.9837 1.49973 11.0462M12.3331 5.00002V3.33335C12.3331 2.41288 11.5869 1.66669 10.6664 1.66669H7.33306C6.41258 1.66669 5.66639 2.41288 5.66639 3.33335V5.00002M8.99972 10H9.00806M3.16639 16.6667H14.8331C15.7535 16.6667 16.4997 15.9205 16.4997 15V6.66668C16.4997 5.74621 15.7535 5.00002 14.8331 5.00002H3.16639C2.24592 5.00002 1.49973 5.74621 1.49973 6.66668V15C1.49973 15.9205 2.24592 16.6667 3.16639 16.6667Z"
                                    stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </div>
                    </div>
                    <div class="relative w-full sm:pt-0 pt-3 ">

                        <input type="text"
                            class="dark:bg-black pl-10 w-full py-2.5 bg-white-100 text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours dark:placeholder-bgprogresb placeholder-txtnamecomntpkyr font-normal border focus:outline-none rounded-xl"
                            placeholder="Ciudad, región">

                        <div class="absolute left-3 sm:top-3.5 top-6">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.7144 12.8812C11.9338 13.6617 10.3016 15.2939 9.17847 16.4171C8.5276 17.0679 7.47338 17.0683 6.8225 16.4174C5.71893 15.3139 4.11831 13.7132 3.28627 12.8812C0.682775 10.2777 0.682775 6.0566 3.28627 3.45311C5.88976 0.849615 10.1109 0.849615 12.7144 3.45311C15.3178 6.0566 15.3178 10.2777 12.7144 12.8812Z"
                                    stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M10.5003 8.16715C10.5003 9.54786 9.38102 10.6672 8.00031 10.6672C6.6196 10.6672 5.50031 9.54786 5.50031 8.16715C5.50031 6.78644 6.6196 5.66715 8.00031 5.66715C9.38102 5.66715 10.5003 6.78644 10.5003 8.16715Z"
                                    stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>


                        </div>
                    </div>
                </div>

                <div class="sm:pl-4 pl-0  sm:pt-0 pt-3 sm:w-60 w-full">
                    <button
                        class="text-green_especialidad sm:w-auto w-full  items-center py-2  rounded-lg bg-bgbtngreen px-5  focus:outline-none text-sixteen font-medium flex ">
                        <div class="md:inline-block hidden">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.5005 17.5L12.5005 12.5M14.1671 8.33333C14.1671 11.555 11.5555 14.1667 8.33382 14.1667C5.11216 14.1667 2.50049 11.555 2.50049 8.33333C2.50049 5.11167 5.11216 2.5 8.33382 2.5C11.5555 2.5 14.1671 5.11167 14.1671 8.33333Z"
                                    stroke="#145229" stroke-width="1.66667" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="w-full pr-2">
                            Buscar empleo
                        </div>
                    </button>
                </div>
            </div>

            {{-- <div class="justify-center flex pt-7 sm:px-0 px-4">

                <div class="flex gap-x-0.5 overflow-x-scroll barra  " x-data="tipoboton()">
                    <div class="dark:bg-gray14 bg-whiteheader ">
                        <button x-on:click="showNow(1) "
                            class="bg-white-100 px-3 relative w-44 py-1 text-sm dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours  font-normal border focus:outline-none rounded-2xl">
                            Nivel de experiencia <i class="fas fa-angle-down pl-2"></i>
                        </button>
                        <template x-if="tipo == 1" >

                            <div
                                id="" class="sm:absolute static  w-44 bg-white-100  dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours focus:outline-none font-inter text-sm font-normal  rounded-md mt-3 px-4 py-2">
                            <div class="pb-4">
                               <button class="focus:outline-none">
                                Junior
                               </button>
                            </div>
                            <div class="pb-4">
                                <button class="focus:outline-none">
                                  master
                                </button>
                            </div>
                            <div class="">
                                <button class="focus:outline-none">
                                  Experto
                                </button>
                            </div>
                            </div>

                        </template>


                    </div>

                    <div class="dark:bg-gray14 bg-whiteheader ">
                        <button x-on:click="showNow(2) "
                            class="bg-white-100 relative w-40 py-1 text-sm  dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours  font-normal border focus:outline-none rounded-2xl">
                            Tipo de empleo <i class="fas fa-angle-down pl-2"></i>
                        </button>
                        <template x-if="tipo == 2" x-on:click.away="2= false">

                            <div
                                id="" class="sm:absolute static w-40 bg-white-100  dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours focus:outline-none font-inter text-sm font-normal  rounded-md mt-3 px-4 py-2">
                            <div class="pb-4">
                               <button class="focus:outline-none">
                                Tiempo completo
                               </button>
                            </div>
                            <div class="pb-4">
                                <button class="focus:outline-none">
                                 Medio tiempo
                                </button>
                            </div>
                            <div class="">
                                <button class="focus:outline-none">
                                  remoto
                                </button>
                            </div>
                            </div>

                        </template>


                    </div>
                    <div class="dark:bg-gray14 bg-whiteheader ">
                        <button x-on:click="showNow(3) "
                            class="bg-white-100 relative  w-44 py-1 text-sm  dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours  font-normal border focus:outline-none rounded-2xl">
                            Fecha de publicación <i class="fas fa-angle-down pl-2"></i>
                        </button>

                        <template x-if="tipo == 3" >
                            <div
                                id="" class="sm:absolute static  w-44 bg-white-100  dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours focus:outline-none font-inter text-sm font-normal  rounded-md mt-3 px-4 py-2">
                            <div class="pb-4">
                                <button class="focus:outline-none">
                                 Últimas 24 horas
                                </button>
                             </div>
                             <div class="pb-4">
                                 <button class="focus:outline-none">
                                     hace 7 días 
                                 </button>
                             </div>
                             <div class="">
                                 <button class="focus:outline-none">
                                   hace 14 días
                                 </button>
                             </div>
                            </div>

                        </template>


                    </div>
                    <div class="dark:bg-gray14 bg-whiteheader ">
                        <button x-on:click="showNow(4) "
                            class="bg-white-100 relative w-28 py-1 text-sm   dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours  font-normal border focus:outline-none rounded-2xl">
                            Categoría <i class="fas fa-angle-down pl-2"></i>
                        </button>
                    <template x-if="tipo == 4">
                        <div id="" class=" sm:absolute static w-28  bg-white-100  dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours focus:outline-none font-inter text-sm font-normal  rounded-md mt-3 px-4 py-2">
                            <div class="pb-4">
                               <button class="focus:outline-none">
                                Ordenar por
                               </button>
                            </div>
                            <div class="pb-4">
                                <button class="focus:outline-none">
                                    Más recientes
                                </button>
                            </div>
                            <div class="">
                                <button class="focus:outline-none">
                                    destacados
                                </button>
                            </div>

                        </div>
                    </template>


                    </div>

                </div>

            </div> --}}

            <div class="justify-center flex pt-7 sm:px-0 px-4">

                <div class="flex gap-x-0.5 overflow-x-scroll barra  " x-data="tipoboton()">
                    <div class="dark:bg-gray14 bg-whiteheader ">
                        <button id="play1"
                            class="bg-white-100 px-3 relative w-44 py-1 text-sm dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours  font-normal border focus:outline-none rounded-2xl">
                            Nivel de experiencia <i class="fas fa-angle-down pl-2"></i>
                        </button>


                        <div id="icon1"
                            class="sm:absolute static hidden  w-44 bg-white-100  dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours focus:outline-none font-inter text-sm font-normal  rounded-md mt-3 px-4 py-2">
                            <div class="pb-4">
                                <button class="focus:outline-none">
                                    Junior
                                </button>
                            </div>
                            <div class="pb-4">
                                <button class="focus:outline-none">
                                    master
                                </button>
                            </div>
                            <div class="">
                                <button class="focus:outline-none">
                                    Experto
                                </button>
                            </div>
                        </div>




                    </div>

                    <div class="dark:bg-gray14 bg-whiteheader ">
                        <button id="play2"
                            class="bg-white-100 relative w-40 py-1 text-sm  dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours  font-normal border focus:outline-none rounded-2xl">
                            Tipo de empleo <i class="fas fa-angle-down pl-2"></i>
                        </button>


                        <div id="icon2"
                            class="sm:absolute static hidden w-40 bg-white-100  dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours focus:outline-none font-inter text-sm font-normal  rounded-md mt-3 px-4 py-2">
                            <div class="pb-4">
                                <button class="focus:outline-none">
                                    Tiempo completo
                                </button>
                            </div>
                            <div class="pb-4">
                                <button class="focus:outline-none">
                                    Medio tiempo
                                </button>
                            </div>
                            <div class="">
                                <button class="focus:outline-none">
                                    remoto
                                </button>
                            </div>
                        </div>




                    </div>
                    <div class="dark:bg-gray14 bg-whiteheader ">
                        <button id="play3"
                            class="bg-white-100 relative  w-44 py-1 text-sm  dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours  font-normal border focus:outline-none rounded-2xl">
                            Fecha de publicación <i class="fas fa-angle-down pl-2"></i>
                        </button>


                        <div id="icon3"
                            class="sm:absolute static hidden  w-44 bg-white-100  dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours focus:outline-none font-inter text-sm font-normal  rounded-md mt-3 px-4 py-2">
                            <div class="pb-4">
                                <button class="focus:outline-none">
                                    Últimas 24 horas
                                </button>
                            </div>
                            <div class="pb-4">
                                <button class="focus:outline-none">
                                    hace 7 días
                                </button>
                            </div>
                            <div class="">
                                <button class="focus:outline-none">
                                    hace 14 días
                                </button>
                            </div>
                        </div>




                    </div>
                    <div class="dark:bg-gray14 bg-whiteheader ">
                        <button id="play4"
                            class="bg-white-100 relative w-28 py-1 text-sm   dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours  font-normal border focus:outline-none rounded-2xl">
                            Categoría <i class="fas fa-angle-down pl-2"></i>
                        </button>

                        <div id="icon4"
                            class=" sm:absolute static hidden w-28  bg-white-100  dark:bg-black  text-txtcommentply dark:text-borderconcours dark:border-txtcommentply border-borderconcours focus:outline-none font-inter text-sm font-normal  rounded-md mt-3 px-4 py-2">
                            <div class="pb-4">
                                <button class="focus:outline-none">
                                    Ordenar por
                                </button>
                            </div>
                            <div class="pb-4">
                                <button class="focus:outline-none">
                                    Más recientes
                                </button>
                            </div>
                            <div class="">
                                <button class="focus:outline-none">
                                    destacados
                                </button>
                            </div>

                        </div>



                    </div>

                </div>

            </div>


            {{-- grid de especialidades --}}

            <div class="md:grid-cols-2 grid-cols-1 ml:px-0 lg:px-0 xl:px-0 md:px-8 px-4 grid pt-10 gap-x-16 ">

                <div class="">
                    <div
                        class="rounded-2xl border dark:border-txtcommentply dark:bg-pricingcintadark bg-whiteheader border-checkpricingdark p-4">

                        <div class="flex items-center w-full">

                            <div>
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="48" height="48" rx="8" fill="white" />
                                    <g clip-path="url(#clip0_3295_191694)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M35.203 30.2037V34.5701V35.4261C35.1411 35.4869 35.0787 35.5472 35.0158 35.6069C28.6046 41.689 18.4761 41.4229 12.3934 35.0128C6.31076 28.6021 6.57689 18.4752 12.9881 12.3931C19.3987 6.31096 29.5272 6.57709 35.6099 12.9872C38.4462 15.9765 39.9022 19.7739 39.9982 23.592L39.9992 23.6277L39.9997 23.6534H39.9992C39.9992 24.5371 39.2829 25.2533 38.3992 25.2533C37.5155 25.2533 36.7992 24.5371 36.7992 23.6534H36.7987C36.7171 20.6059 35.5528 17.576 33.2883 15.1899C28.4222 10.0619 20.3193 9.84912 15.1907 14.7142C10.0617 19.5798 9.84886 27.6816 14.715 32.8101C19.3294 37.6731 26.8536 38.1157 31.9934 33.9989V26.4H35.203V30.2038V30.2038L35.203 30.2037Z"
                                            fill="#0083F5" />
                                        <path
                                            d="M37.1022 30.1021C36.2718 29.7998 35.8436 28.8816 36.1459 28.0512C36.4481 27.2207 37.3664 26.7926 38.1968 27.0948C39.0272 27.3971 39.4554 28.3153 39.1532 29.1457C38.8509 29.9762 37.9327 30.4043 37.1022 30.1021Z"
                                            fill="#33CC66" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M35.2029 26.4H35.1938L35.1933 26.4416C35.1928 26.4554 35.1922 26.4688 35.1917 26.4826L35.1891 26.5232L35.1853 26.5637L35.1811 26.6042L35.1752 26.6437L35.1688 26.6832L35.1613 26.7227L35.1528 26.7616L35.1437 26.8H35.1432L35.1331 26.8384L35.1219 26.8763L35.1096 26.9136L35.0968 26.9504L35.0829 26.9872L35.068 27.023L35.0525 27.0587L35.036 27.0939L35.0189 27.1286H35.0184L35.0008 27.1632L34.9816 27.1968C34.956 27.2416 34.9282 27.2848 34.8984 27.3264L34.876 27.3579L34.8525 27.3883L34.8285 27.4182L34.8035 27.4475L34.7784 27.4763H34.7779L34.7517 27.504C34.7341 27.5227 34.716 27.5409 34.6979 27.5584L34.6696 27.5846L34.6408 27.6102L34.6115 27.6347V27.6352L34.5816 27.6592L34.5512 27.6827L34.5197 27.7051C34.4781 27.7349 34.435 27.7627 34.3902 27.7883L34.3566 27.8069V27.8075L34.3219 27.8251L34.2872 27.8427L34.2521 27.8592L34.2163 27.8747L34.1806 27.8896L34.1437 27.9035L34.1069 27.9163L34.0696 27.9285L34.0317 27.9397L33.9933 27.9499L33.9549 27.9595L33.916 27.968L33.877 27.9755L33.8376 27.9819L33.7976 27.9878L33.757 27.992L33.7165 27.9957L33.676 27.9984L33.6349 28L33.5939 28.0005L33.5523 28C33.5384 27.9995 33.5251 27.9989 33.5112 27.9984L33.4707 27.9957L33.4301 27.992L33.3896 27.9878L33.3501 27.9819L33.3106 27.9755L33.2712 27.968L33.2323 27.9595L33.1938 27.9499L33.1554 27.9397L33.1176 27.9285L33.0802 27.9163L33.0434 27.9035L33.0066 27.8896L32.9708 27.8747L32.9351 27.8592L32.8999 27.8427L32.8653 27.8251H32.8647L32.8306 27.8075V27.8069L32.797 27.7883L32.764 27.7685L32.7309 27.7483L32.6989 27.727L32.6674 27.7051L32.636 27.6827L32.6056 27.6592L32.5757 27.6352V27.6347L32.5464 27.6102L32.5176 27.5846L32.4898 27.5585H32.4893L32.4621 27.5318L32.4354 27.504L32.4093 27.4763L32.3837 27.4475L32.3586 27.4182L32.3346 27.3883L32.3112 27.3579L32.2888 27.3264L32.2669 27.295L32.2456 27.263V27.2624L32.2253 27.2299L32.2056 27.1969L32.1864 27.1633L32.1682 27.1286L32.1512 27.0939L32.1346 27.0588L32.1192 27.023L32.1042 26.9873L32.0904 26.9504L32.0776 26.9136L32.0653 26.8763L32.0541 26.8384L32.044 26.8L32.0344 26.7616L32.0258 26.7227L32.0184 26.6832L32.0119 26.6437L32.0061 26.6043L32.0018 26.5637L31.9981 26.5232L31.9954 26.4827C31.9949 26.4688 31.9944 26.4555 31.9938 26.4416L31.9933 26.4L31.9938 26.3589C31.9944 26.3451 31.9949 26.3317 31.9954 26.3179L31.9981 26.2773L31.9992 26.2624C31.9261 24.5654 30.5165 23.2 28.8024 23.2C27.0418 23.2 25.6018 24.64 25.6018 26.4C25.6018 27.2837 24.8856 28.0005 24.0018 28.0005C23.1181 28.0005 22.4018 27.2837 22.4018 26.4C22.4018 24.64 20.9613 23.2 19.2013 23.2C17.4408 23.2 16.0008 24.64 16.0008 26.4C16.0008 27.2837 15.2845 28.0005 14.4008 28.0005C13.5171 28.0005 12.8008 27.2837 12.8008 26.4H12.8003C12.8003 22.8795 15.6808 19.9995 19.2013 19.9995C21.108 19.9995 22.8264 20.8443 24.0019 22.1782C25.2195 20.7963 26.9581 19.9995 28.8024 19.9995C32.3229 19.9995 35.2029 22.88 35.2029 26.4L35.2029 26.4V26.4Z"
                                            fill="#33CC66" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3295_191694">
                                            <rect width="31.9998" height="32" fill="white" transform="translate(8 8)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </div>
                            <div class="flex justify-between sm:flex-row flex-col w-full pl-3">
                                <div class="flex flex-col">
                                    <div
                                        class="dark:text-checkpricingdark text-pricingtextduowhite text-lg font-bold font-inter">
                                        Junior UI/UX Designer
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply text-sixteen font-medium font-inter">
                                        MayuGo-Huánuco, Perú
                                    </div>
                                </div>



                                <div class="sm:pt-0 pt-2">
                                    <span
                                        class="bg-redtiket text-sm font-inter font-mediun text-white-100 px-2.5 py-1 rounded-xl">
                                        3D:24h:25M
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="text-sixteen font-normal font-inter dark:text-pricingdarkstudents text-gray-600 pt-8">
                            Estamos búsquea de un UX/UI Designer que quiera sumarse a nuestro equipo de trabajo
                            multidisciplinario. Estamos búsquea de un UX/UI...
                        </div>

                        <div class="flex sm:flex-row flex-col gap-x-5 gap-y-2 pt-6">
                            <div
                                class="flex text-sixteen font-medium font-inter dark:text-pricingdarkstudents text-gray-600">
                                <div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.5364 8.04614C11.838 8.39376 12.3643 8.43104 12.7119 8.12941C13.0595 7.82779 13.0968 7.30147 12.7952 6.95385L11.5364 8.04614ZM8.46413 11.9538C8.1625 11.6062 7.63618 11.5689 7.28857 11.8706C6.94095 12.1722 6.90367 12.6985 7.2053 13.0461L8.46413 11.9538ZM10.8336 5.83333C10.8336 5.37309 10.4605 5 10.0002 5C9.54 5 9.16691 5.37309 9.16691 5.83333H10.8336ZM9.16691 14.1666C9.1669 14.6269 9.53999 15 10.0002 15C10.4605 15 10.8336 14.6269 10.8336 14.1667L9.16691 14.1666ZM16.6669 10C16.6669 13.6819 13.6821 16.6667 10.0002 16.6667V18.3333C14.6026 18.3333 18.3336 14.6024 18.3336 10H16.6669ZM10.0002 16.6667C6.31834 16.6667 3.33358 13.6819 3.33358 10H1.66691C1.66691 14.6024 5.39787 18.3333 10.0002 18.3333V16.6667ZM3.33358 10C3.33358 6.3181 6.31834 3.33333 10.0002 3.33333V1.66667C5.39787 1.66667 1.66691 5.39763 1.66691 10H3.33358ZM10.0002 3.33333C13.6821 3.33333 16.6669 6.3181 16.6669 10H18.3336C18.3336 5.39763 14.6026 1.66667 10.0002 1.66667V3.33333ZM10.0002 9.16666C9.45146 9.16666 8.99232 9.01687 8.69472 8.81847C8.3913 8.61618 8.33357 8.42825 8.33357 8.33333H6.66691C6.66691 9.15889 7.16883 9.80428 7.77022 10.2052C8.37745 10.61 9.16831 10.8333 10.0002 10.8333V9.16666ZM8.33357 8.33333C8.33357 8.23841 8.3913 8.05048 8.69472 7.84819C8.99232 7.64979 9.45146 7.5 10.0002 7.5V5.83333C9.16831 5.83333 8.37745 6.05663 7.77022 6.46144C7.16883 6.86238 6.66691 7.50777 6.66691 8.33333H8.33357ZM10.0002 7.5C10.7534 7.5 11.3028 7.77692 11.5364 8.04614L12.7952 6.95385C12.1643 6.22674 11.0978 5.83333 10.0002 5.83333V7.5ZM10.0002 10.8333C10.549 10.8333 11.0082 10.9831 11.3058 11.1815C11.6092 11.3838 11.6669 11.5717 11.6669 11.6667H13.3336C13.3336 10.8411 12.8317 10.1957 12.2303 9.79477C11.623 9.38996 10.8322 9.16666 10.0002 9.16666V10.8333ZM9.16691 5.83333V6.66666H10.8336V5.83333H9.16691ZM9.16692 13.3333L9.16691 14.1666L10.8336 14.1667L10.8336 13.3333L9.16692 13.3333ZM10.0003 12.5C9.24711 12.5 8.69773 12.2231 8.46413 11.9538L7.2053 13.0461C7.83621 13.7733 8.90271 14.1667 10.0003 14.1667L10.0003 12.5ZM11.6669 11.6667C11.6669 11.7616 11.6092 11.9495 11.3058 12.1518C11.0082 12.3502 10.549 12.5 10.0003 12.5V14.1667C10.8322 14.1667 11.6231 13.9434 12.2303 13.5385C12.8317 13.1376 13.3336 12.4922 13.3336 11.6667H11.6669ZM9.16691 6.66667L9.16692 13.3333L10.8336 13.3333L10.8336 6.66666L9.16691 6.66667Z"
                                            fill="#697586" />
                                    </svg>

                                </div>
                                <div class="pl-2.5">
                                    S/.1,500 - S/.2,200
                                </div>
                            </div>

                            <div
                                class="flex text-sixteen font-medium font-inter dark:text-pricingdarkstudents text-gray-600">
                                <div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.99926 6.66618V9.99951L12.4993 12.4995M17.4993 9.99951C17.4993 14.1416 14.1414 17.4995 9.99926 17.4995C5.85713 17.4995 2.49927 14.1416 2.49927 9.99951C2.49927 5.85737 5.85713 2.49951 9.99926 2.49951C14.1414 2.49951 17.4993 5.85737 17.4993 9.99951Z"
                                            stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <div class="pl-2.5">
                                    Tiempo completo
                                </div>
                            </div>
                            <div class=" flex r">
                                <div
                                    class="flex w-auto dark:bg-txtnamecomntpkyr bg-whiteheader px-3 items-center rounded-xl">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99926 5.33284V7.99951L9.99926 9.99951M13.9993 7.99951C13.9993 11.3132 11.313 13.9995 7.99926 13.9995C4.68556 13.9995 1.99927 11.3132 1.99927 7.99951C1.99927 4.6858 4.68556 1.99951 7.99926 1.99951C11.313 1.99951 13.9993 4.6858 13.9993 7.99951Z"
                                                stroke="#697586" stroke-width="1.33333" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-gray-600 pl-2.5 font-inter w-auto font-medium text.sm">
                                        Hace un día
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div
                        class="rounded-2xl border dark:border-txtcommentply dark:bg-pricingcintadark bg-whiteheader mt-6 border-checkpricingdark p-4">

                        <div class="flex items-center w-full">

                            <div>
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="48" height="48" rx="8" fill="white" />
                                    <g clip-path="url(#clip0_3295_191694)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M35.203 30.2037V34.5701V35.4261C35.1411 35.4869 35.0787 35.5472 35.0158 35.6069C28.6046 41.689 18.4761 41.4229 12.3934 35.0128C6.31076 28.6021 6.57689 18.4752 12.9881 12.3931C19.3987 6.31096 29.5272 6.57709 35.6099 12.9872C38.4462 15.9765 39.9022 19.7739 39.9982 23.592L39.9992 23.6277L39.9997 23.6534H39.9992C39.9992 24.5371 39.2829 25.2533 38.3992 25.2533C37.5155 25.2533 36.7992 24.5371 36.7992 23.6534H36.7987C36.7171 20.6059 35.5528 17.576 33.2883 15.1899C28.4222 10.0619 20.3193 9.84912 15.1907 14.7142C10.0617 19.5798 9.84886 27.6816 14.715 32.8101C19.3294 37.6731 26.8536 38.1157 31.9934 33.9989V26.4H35.203V30.2038V30.2038L35.203 30.2037Z"
                                            fill="#0083F5" />
                                        <path
                                            d="M37.1022 30.1021C36.2718 29.7998 35.8436 28.8816 36.1459 28.0512C36.4481 27.2207 37.3664 26.7926 38.1968 27.0948C39.0272 27.3971 39.4554 28.3153 39.1532 29.1457C38.8509 29.9762 37.9327 30.4043 37.1022 30.1021Z"
                                            fill="#33CC66" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M35.2029 26.4H35.1938L35.1933 26.4416C35.1928 26.4554 35.1922 26.4688 35.1917 26.4826L35.1891 26.5232L35.1853 26.5637L35.1811 26.6042L35.1752 26.6437L35.1688 26.6832L35.1613 26.7227L35.1528 26.7616L35.1437 26.8H35.1432L35.1331 26.8384L35.1219 26.8763L35.1096 26.9136L35.0968 26.9504L35.0829 26.9872L35.068 27.023L35.0525 27.0587L35.036 27.0939L35.0189 27.1286H35.0184L35.0008 27.1632L34.9816 27.1968C34.956 27.2416 34.9282 27.2848 34.8984 27.3264L34.876 27.3579L34.8525 27.3883L34.8285 27.4182L34.8035 27.4475L34.7784 27.4763H34.7779L34.7517 27.504C34.7341 27.5227 34.716 27.5409 34.6979 27.5584L34.6696 27.5846L34.6408 27.6102L34.6115 27.6347V27.6352L34.5816 27.6592L34.5512 27.6827L34.5197 27.7051C34.4781 27.7349 34.435 27.7627 34.3902 27.7883L34.3566 27.8069V27.8075L34.3219 27.8251L34.2872 27.8427L34.2521 27.8592L34.2163 27.8747L34.1806 27.8896L34.1437 27.9035L34.1069 27.9163L34.0696 27.9285L34.0317 27.9397L33.9933 27.9499L33.9549 27.9595L33.916 27.968L33.877 27.9755L33.8376 27.9819L33.7976 27.9878L33.757 27.992L33.7165 27.9957L33.676 27.9984L33.6349 28L33.5939 28.0005L33.5523 28C33.5384 27.9995 33.5251 27.9989 33.5112 27.9984L33.4707 27.9957L33.4301 27.992L33.3896 27.9878L33.3501 27.9819L33.3106 27.9755L33.2712 27.968L33.2323 27.9595L33.1938 27.9499L33.1554 27.9397L33.1176 27.9285L33.0802 27.9163L33.0434 27.9035L33.0066 27.8896L32.9708 27.8747L32.9351 27.8592L32.8999 27.8427L32.8653 27.8251H32.8647L32.8306 27.8075V27.8069L32.797 27.7883L32.764 27.7685L32.7309 27.7483L32.6989 27.727L32.6674 27.7051L32.636 27.6827L32.6056 27.6592L32.5757 27.6352V27.6347L32.5464 27.6102L32.5176 27.5846L32.4898 27.5585H32.4893L32.4621 27.5318L32.4354 27.504L32.4093 27.4763L32.3837 27.4475L32.3586 27.4182L32.3346 27.3883L32.3112 27.3579L32.2888 27.3264L32.2669 27.295L32.2456 27.263V27.2624L32.2253 27.2299L32.2056 27.1969L32.1864 27.1633L32.1682 27.1286L32.1512 27.0939L32.1346 27.0588L32.1192 27.023L32.1042 26.9873L32.0904 26.9504L32.0776 26.9136L32.0653 26.8763L32.0541 26.8384L32.044 26.8L32.0344 26.7616L32.0258 26.7227L32.0184 26.6832L32.0119 26.6437L32.0061 26.6043L32.0018 26.5637L31.9981 26.5232L31.9954 26.4827C31.9949 26.4688 31.9944 26.4555 31.9938 26.4416L31.9933 26.4L31.9938 26.3589C31.9944 26.3451 31.9949 26.3317 31.9954 26.3179L31.9981 26.2773L31.9992 26.2624C31.9261 24.5654 30.5165 23.2 28.8024 23.2C27.0418 23.2 25.6018 24.64 25.6018 26.4C25.6018 27.2837 24.8856 28.0005 24.0018 28.0005C23.1181 28.0005 22.4018 27.2837 22.4018 26.4C22.4018 24.64 20.9613 23.2 19.2013 23.2C17.4408 23.2 16.0008 24.64 16.0008 26.4C16.0008 27.2837 15.2845 28.0005 14.4008 28.0005C13.5171 28.0005 12.8008 27.2837 12.8008 26.4H12.8003C12.8003 22.8795 15.6808 19.9995 19.2013 19.9995C21.108 19.9995 22.8264 20.8443 24.0019 22.1782C25.2195 20.7963 26.9581 19.9995 28.8024 19.9995C32.3229 19.9995 35.2029 22.88 35.2029 26.4L35.2029 26.4V26.4Z"
                                            fill="#33CC66" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3295_191694">
                                            <rect width="31.9998" height="32" fill="white" transform="translate(8 8)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </div>
                            <div class="flex justify-between sm:flex-row flex-col w-full pl-3">
                                <div class="flex flex-col">
                                    <div
                                        class="dark:text-checkpricingdark text-pricingtextduowhite text-lg font-bold font-inter">
                                        Junior UI/UX Designer
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply text-sixteen font-medium font-inter">
                                        MayuGo-Huánuco, Perú
                                    </div>
                                </div>



                                <div class="sm:pt-0 pt-2">
                                    <span
                                        class="bg-redtiket text-sm font-inter font-mediun text-white-100 px-2.5 py-1 rounded-xl">
                                        Urgente
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="text-sixteen font-normal font-inter dark:text-pricingdarkstudents text-gray-600 pt-8">
                            Estamos búsquea de un UX/UI Designer que quiera sumarse a nuestro equipo de trabajo
                            multidisciplinario. Estamos búsquea de un UX/UI...
                        </div>

                        <div class="flex sm:flex-row flex-col gap-x-5 gap-y-2 pt-6">
                            <div
                                class="flex text-sixteen font-medium font-inter dark:text-pricingdarkstudents text-gray-600">
                                <div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.5364 8.04614C11.838 8.39376 12.3643 8.43104 12.7119 8.12941C13.0595 7.82779 13.0968 7.30147 12.7952 6.95385L11.5364 8.04614ZM8.46413 11.9538C8.1625 11.6062 7.63618 11.5689 7.28857 11.8706C6.94095 12.1722 6.90367 12.6985 7.2053 13.0461L8.46413 11.9538ZM10.8336 5.83333C10.8336 5.37309 10.4605 5 10.0002 5C9.54 5 9.16691 5.37309 9.16691 5.83333H10.8336ZM9.16691 14.1666C9.1669 14.6269 9.53999 15 10.0002 15C10.4605 15 10.8336 14.6269 10.8336 14.1667L9.16691 14.1666ZM16.6669 10C16.6669 13.6819 13.6821 16.6667 10.0002 16.6667V18.3333C14.6026 18.3333 18.3336 14.6024 18.3336 10H16.6669ZM10.0002 16.6667C6.31834 16.6667 3.33358 13.6819 3.33358 10H1.66691C1.66691 14.6024 5.39787 18.3333 10.0002 18.3333V16.6667ZM3.33358 10C3.33358 6.3181 6.31834 3.33333 10.0002 3.33333V1.66667C5.39787 1.66667 1.66691 5.39763 1.66691 10H3.33358ZM10.0002 3.33333C13.6821 3.33333 16.6669 6.3181 16.6669 10H18.3336C18.3336 5.39763 14.6026 1.66667 10.0002 1.66667V3.33333ZM10.0002 9.16666C9.45146 9.16666 8.99232 9.01687 8.69472 8.81847C8.3913 8.61618 8.33357 8.42825 8.33357 8.33333H6.66691C6.66691 9.15889 7.16883 9.80428 7.77022 10.2052C8.37745 10.61 9.16831 10.8333 10.0002 10.8333V9.16666ZM8.33357 8.33333C8.33357 8.23841 8.3913 8.05048 8.69472 7.84819C8.99232 7.64979 9.45146 7.5 10.0002 7.5V5.83333C9.16831 5.83333 8.37745 6.05663 7.77022 6.46144C7.16883 6.86238 6.66691 7.50777 6.66691 8.33333H8.33357ZM10.0002 7.5C10.7534 7.5 11.3028 7.77692 11.5364 8.04614L12.7952 6.95385C12.1643 6.22674 11.0978 5.83333 10.0002 5.83333V7.5ZM10.0002 10.8333C10.549 10.8333 11.0082 10.9831 11.3058 11.1815C11.6092 11.3838 11.6669 11.5717 11.6669 11.6667H13.3336C13.3336 10.8411 12.8317 10.1957 12.2303 9.79477C11.623 9.38996 10.8322 9.16666 10.0002 9.16666V10.8333ZM9.16691 5.83333V6.66666H10.8336V5.83333H9.16691ZM9.16692 13.3333L9.16691 14.1666L10.8336 14.1667L10.8336 13.3333L9.16692 13.3333ZM10.0003 12.5C9.24711 12.5 8.69773 12.2231 8.46413 11.9538L7.2053 13.0461C7.83621 13.7733 8.90271 14.1667 10.0003 14.1667L10.0003 12.5ZM11.6669 11.6667C11.6669 11.7616 11.6092 11.9495 11.3058 12.1518C11.0082 12.3502 10.549 12.5 10.0003 12.5V14.1667C10.8322 14.1667 11.6231 13.9434 12.2303 13.5385C12.8317 13.1376 13.3336 12.4922 13.3336 11.6667H11.6669ZM9.16691 6.66667L9.16692 13.3333L10.8336 13.3333L10.8336 6.66666L9.16691 6.66667Z"
                                            fill="#697586" />
                                    </svg>

                                </div>
                                <div class="pl-2.5">
                                    S/.1,500 - S/.2,200
                                </div>
                            </div>

                            <div
                                class="flex text-sixteen font-medium font-inter dark:text-pricingdarkstudents text-gray-600">
                                <div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.99926 6.66618V9.99951L12.4993 12.4995M17.4993 9.99951C17.4993 14.1416 14.1414 17.4995 9.99926 17.4995C5.85713 17.4995 2.49927 14.1416 2.49927 9.99951C2.49927 5.85737 5.85713 2.49951 9.99926 2.49951C14.1414 2.49951 17.4993 5.85737 17.4993 9.99951Z"
                                            stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <div class="pl-2.5">
                                    Tiempo completo
                                </div>
                            </div>
                            <div class=" flex r">
                                <div
                                    class="flex w-auto dark:bg-txtnamecomntpkyr bg-whiteheader px-3 items-center rounded-xl">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99926 5.33284V7.99951L9.99926 9.99951M13.9993 7.99951C13.9993 11.3132 11.313 13.9995 7.99926 13.9995C4.68556 13.9995 1.99927 11.3132 1.99927 7.99951C1.99927 4.6858 4.68556 1.99951 7.99926 1.99951C11.313 1.99951 13.9993 4.6858 13.9993 7.99951Z"
                                                stroke="#697586" stroke-width="1.33333" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-gray-600 pl-2.5 font-inter w-auto font-medium text.sm">
                                        Hace un día
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div
                        class="rounded-2xl border dark:border-txtcommentply dark:bg-pricingcintadark bg-whiteheader mt-6 border-checkpricingdark p-4">

                        <div class="flex items-center w-full">

                            <div>
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="48" height="48" rx="8" fill="white" />
                                    <g clip-path="url(#clip0_3295_191694)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M35.203 30.2037V34.5701V35.4261C35.1411 35.4869 35.0787 35.5472 35.0158 35.6069C28.6046 41.689 18.4761 41.4229 12.3934 35.0128C6.31076 28.6021 6.57689 18.4752 12.9881 12.3931C19.3987 6.31096 29.5272 6.57709 35.6099 12.9872C38.4462 15.9765 39.9022 19.7739 39.9982 23.592L39.9992 23.6277L39.9997 23.6534H39.9992C39.9992 24.5371 39.2829 25.2533 38.3992 25.2533C37.5155 25.2533 36.7992 24.5371 36.7992 23.6534H36.7987C36.7171 20.6059 35.5528 17.576 33.2883 15.1899C28.4222 10.0619 20.3193 9.84912 15.1907 14.7142C10.0617 19.5798 9.84886 27.6816 14.715 32.8101C19.3294 37.6731 26.8536 38.1157 31.9934 33.9989V26.4H35.203V30.2038V30.2038L35.203 30.2037Z"
                                            fill="#0083F5" />
                                        <path
                                            d="M37.1022 30.1021C36.2718 29.7998 35.8436 28.8816 36.1459 28.0512C36.4481 27.2207 37.3664 26.7926 38.1968 27.0948C39.0272 27.3971 39.4554 28.3153 39.1532 29.1457C38.8509 29.9762 37.9327 30.4043 37.1022 30.1021Z"
                                            fill="#33CC66" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M35.2029 26.4H35.1938L35.1933 26.4416C35.1928 26.4554 35.1922 26.4688 35.1917 26.4826L35.1891 26.5232L35.1853 26.5637L35.1811 26.6042L35.1752 26.6437L35.1688 26.6832L35.1613 26.7227L35.1528 26.7616L35.1437 26.8H35.1432L35.1331 26.8384L35.1219 26.8763L35.1096 26.9136L35.0968 26.9504L35.0829 26.9872L35.068 27.023L35.0525 27.0587L35.036 27.0939L35.0189 27.1286H35.0184L35.0008 27.1632L34.9816 27.1968C34.956 27.2416 34.9282 27.2848 34.8984 27.3264L34.876 27.3579L34.8525 27.3883L34.8285 27.4182L34.8035 27.4475L34.7784 27.4763H34.7779L34.7517 27.504C34.7341 27.5227 34.716 27.5409 34.6979 27.5584L34.6696 27.5846L34.6408 27.6102L34.6115 27.6347V27.6352L34.5816 27.6592L34.5512 27.6827L34.5197 27.7051C34.4781 27.7349 34.435 27.7627 34.3902 27.7883L34.3566 27.8069V27.8075L34.3219 27.8251L34.2872 27.8427L34.2521 27.8592L34.2163 27.8747L34.1806 27.8896L34.1437 27.9035L34.1069 27.9163L34.0696 27.9285L34.0317 27.9397L33.9933 27.9499L33.9549 27.9595L33.916 27.968L33.877 27.9755L33.8376 27.9819L33.7976 27.9878L33.757 27.992L33.7165 27.9957L33.676 27.9984L33.6349 28L33.5939 28.0005L33.5523 28C33.5384 27.9995 33.5251 27.9989 33.5112 27.9984L33.4707 27.9957L33.4301 27.992L33.3896 27.9878L33.3501 27.9819L33.3106 27.9755L33.2712 27.968L33.2323 27.9595L33.1938 27.9499L33.1554 27.9397L33.1176 27.9285L33.0802 27.9163L33.0434 27.9035L33.0066 27.8896L32.9708 27.8747L32.9351 27.8592L32.8999 27.8427L32.8653 27.8251H32.8647L32.8306 27.8075V27.8069L32.797 27.7883L32.764 27.7685L32.7309 27.7483L32.6989 27.727L32.6674 27.7051L32.636 27.6827L32.6056 27.6592L32.5757 27.6352V27.6347L32.5464 27.6102L32.5176 27.5846L32.4898 27.5585H32.4893L32.4621 27.5318L32.4354 27.504L32.4093 27.4763L32.3837 27.4475L32.3586 27.4182L32.3346 27.3883L32.3112 27.3579L32.2888 27.3264L32.2669 27.295L32.2456 27.263V27.2624L32.2253 27.2299L32.2056 27.1969L32.1864 27.1633L32.1682 27.1286L32.1512 27.0939L32.1346 27.0588L32.1192 27.023L32.1042 26.9873L32.0904 26.9504L32.0776 26.9136L32.0653 26.8763L32.0541 26.8384L32.044 26.8L32.0344 26.7616L32.0258 26.7227L32.0184 26.6832L32.0119 26.6437L32.0061 26.6043L32.0018 26.5637L31.9981 26.5232L31.9954 26.4827C31.9949 26.4688 31.9944 26.4555 31.9938 26.4416L31.9933 26.4L31.9938 26.3589C31.9944 26.3451 31.9949 26.3317 31.9954 26.3179L31.9981 26.2773L31.9992 26.2624C31.9261 24.5654 30.5165 23.2 28.8024 23.2C27.0418 23.2 25.6018 24.64 25.6018 26.4C25.6018 27.2837 24.8856 28.0005 24.0018 28.0005C23.1181 28.0005 22.4018 27.2837 22.4018 26.4C22.4018 24.64 20.9613 23.2 19.2013 23.2C17.4408 23.2 16.0008 24.64 16.0008 26.4C16.0008 27.2837 15.2845 28.0005 14.4008 28.0005C13.5171 28.0005 12.8008 27.2837 12.8008 26.4H12.8003C12.8003 22.8795 15.6808 19.9995 19.2013 19.9995C21.108 19.9995 22.8264 20.8443 24.0019 22.1782C25.2195 20.7963 26.9581 19.9995 28.8024 19.9995C32.3229 19.9995 35.2029 22.88 35.2029 26.4L35.2029 26.4V26.4Z"
                                            fill="#33CC66" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3295_191694">
                                            <rect width="31.9998" height="32" fill="white" transform="translate(8 8)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </div>
                            <div class="flex justify-between sm:flex-row flex-col w-full pl-3">
                                <div class="flex flex-col">
                                    <div
                                        class="dark:text-checkpricingdark text-pricingtextduowhite text-lg font-bold font-inter">
                                        Junior UI/UX Designer
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply text-sixteen font-medium font-inter">
                                        MayuGo-Huánuco, Perú
                                    </div>
                                </div>



                                <div class="sm:pt-0 pt-2">
                                    <span
                                        class="bg-redtiket text-sm font-inter font-mediun text-white-100 px-2.5 py-1 rounded-xl">
                                        Urgente
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="text-sixteen font-normal font-inter dark:text-pricingdarkstudents text-gray-600 pt-8">
                            Estamos búsquea de un UX/UI Designer que quiera sumarse a nuestro equipo de trabajo
                            multidisciplinario. Estamos búsquea de un UX/UI...
                        </div>

                        <div class="flex sm:flex-row flex-col gap-x-5 gap-y-2 pt-6">
                            <div
                                class="flex text-sixteen font-medium font-inter dark:text-pricingdarkstudents text-gray-600">
                                <div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.5364 8.04614C11.838 8.39376 12.3643 8.43104 12.7119 8.12941C13.0595 7.82779 13.0968 7.30147 12.7952 6.95385L11.5364 8.04614ZM8.46413 11.9538C8.1625 11.6062 7.63618 11.5689 7.28857 11.8706C6.94095 12.1722 6.90367 12.6985 7.2053 13.0461L8.46413 11.9538ZM10.8336 5.83333C10.8336 5.37309 10.4605 5 10.0002 5C9.54 5 9.16691 5.37309 9.16691 5.83333H10.8336ZM9.16691 14.1666C9.1669 14.6269 9.53999 15 10.0002 15C10.4605 15 10.8336 14.6269 10.8336 14.1667L9.16691 14.1666ZM16.6669 10C16.6669 13.6819 13.6821 16.6667 10.0002 16.6667V18.3333C14.6026 18.3333 18.3336 14.6024 18.3336 10H16.6669ZM10.0002 16.6667C6.31834 16.6667 3.33358 13.6819 3.33358 10H1.66691C1.66691 14.6024 5.39787 18.3333 10.0002 18.3333V16.6667ZM3.33358 10C3.33358 6.3181 6.31834 3.33333 10.0002 3.33333V1.66667C5.39787 1.66667 1.66691 5.39763 1.66691 10H3.33358ZM10.0002 3.33333C13.6821 3.33333 16.6669 6.3181 16.6669 10H18.3336C18.3336 5.39763 14.6026 1.66667 10.0002 1.66667V3.33333ZM10.0002 9.16666C9.45146 9.16666 8.99232 9.01687 8.69472 8.81847C8.3913 8.61618 8.33357 8.42825 8.33357 8.33333H6.66691C6.66691 9.15889 7.16883 9.80428 7.77022 10.2052C8.37745 10.61 9.16831 10.8333 10.0002 10.8333V9.16666ZM8.33357 8.33333C8.33357 8.23841 8.3913 8.05048 8.69472 7.84819C8.99232 7.64979 9.45146 7.5 10.0002 7.5V5.83333C9.16831 5.83333 8.37745 6.05663 7.77022 6.46144C7.16883 6.86238 6.66691 7.50777 6.66691 8.33333H8.33357ZM10.0002 7.5C10.7534 7.5 11.3028 7.77692 11.5364 8.04614L12.7952 6.95385C12.1643 6.22674 11.0978 5.83333 10.0002 5.83333V7.5ZM10.0002 10.8333C10.549 10.8333 11.0082 10.9831 11.3058 11.1815C11.6092 11.3838 11.6669 11.5717 11.6669 11.6667H13.3336C13.3336 10.8411 12.8317 10.1957 12.2303 9.79477C11.623 9.38996 10.8322 9.16666 10.0002 9.16666V10.8333ZM9.16691 5.83333V6.66666H10.8336V5.83333H9.16691ZM9.16692 13.3333L9.16691 14.1666L10.8336 14.1667L10.8336 13.3333L9.16692 13.3333ZM10.0003 12.5C9.24711 12.5 8.69773 12.2231 8.46413 11.9538L7.2053 13.0461C7.83621 13.7733 8.90271 14.1667 10.0003 14.1667L10.0003 12.5ZM11.6669 11.6667C11.6669 11.7616 11.6092 11.9495 11.3058 12.1518C11.0082 12.3502 10.549 12.5 10.0003 12.5V14.1667C10.8322 14.1667 11.6231 13.9434 12.2303 13.5385C12.8317 13.1376 13.3336 12.4922 13.3336 11.6667H11.6669ZM9.16691 6.66667L9.16692 13.3333L10.8336 13.3333L10.8336 6.66666L9.16691 6.66667Z"
                                            fill="#697586" />
                                    </svg>

                                </div>
                                <div class="pl-2.5">
                                    S/.1,500 - S/.2,200
                                </div>
                            </div>

                            <div
                                class="flex text-sixteen font-medium font-inter dark:text-pricingdarkstudents text-gray-600">
                                <div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.99926 6.66618V9.99951L12.4993 12.4995M17.4993 9.99951C17.4993 14.1416 14.1414 17.4995 9.99926 17.4995C5.85713 17.4995 2.49927 14.1416 2.49927 9.99951C2.49927 5.85737 5.85713 2.49951 9.99926 2.49951C14.1414 2.49951 17.4993 5.85737 17.4993 9.99951Z"
                                            stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <div class="pl-2.5">
                                    Tiempo completo
                                </div>
                            </div>
                            <div class=" flex r">
                                <div
                                    class="flex w-auto dark:bg-txtnamecomntpkyr bg-whiteheader px-3 items-center rounded-xl">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99926 5.33284V7.99951L9.99926 9.99951M13.9993 7.99951C13.9993 11.3132 11.313 13.9995 7.99926 13.9995C4.68556 13.9995 1.99927 11.3132 1.99927 7.99951C1.99927 4.6858 4.68556 1.99951 7.99926 1.99951C11.313 1.99951 13.9993 4.6858 13.9993 7.99951Z"
                                                stroke="#697586" stroke-width="1.33333" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-gray-600 pl-2.5 font-inter w-auto font-medium text.sm">
                                        Hace un día
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div
                        class="rounded-2xl border dark:border-txtcommentply dark:bg-pricingcintadark bg-whiteheader mt-6 border-checkpricingdark p-4">

                        <div class="flex items-center w-full">

                            <div>
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="48" height="48" rx="8" fill="white" />
                                    <g clip-path="url(#clip0_3295_191694)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M35.203 30.2037V34.5701V35.4261C35.1411 35.4869 35.0787 35.5472 35.0158 35.6069C28.6046 41.689 18.4761 41.4229 12.3934 35.0128C6.31076 28.6021 6.57689 18.4752 12.9881 12.3931C19.3987 6.31096 29.5272 6.57709 35.6099 12.9872C38.4462 15.9765 39.9022 19.7739 39.9982 23.592L39.9992 23.6277L39.9997 23.6534H39.9992C39.9992 24.5371 39.2829 25.2533 38.3992 25.2533C37.5155 25.2533 36.7992 24.5371 36.7992 23.6534H36.7987C36.7171 20.6059 35.5528 17.576 33.2883 15.1899C28.4222 10.0619 20.3193 9.84912 15.1907 14.7142C10.0617 19.5798 9.84886 27.6816 14.715 32.8101C19.3294 37.6731 26.8536 38.1157 31.9934 33.9989V26.4H35.203V30.2038V30.2038L35.203 30.2037Z"
                                            fill="#0083F5" />
                                        <path
                                            d="M37.1022 30.1021C36.2718 29.7998 35.8436 28.8816 36.1459 28.0512C36.4481 27.2207 37.3664 26.7926 38.1968 27.0948C39.0272 27.3971 39.4554 28.3153 39.1532 29.1457C38.8509 29.9762 37.9327 30.4043 37.1022 30.1021Z"
                                            fill="#33CC66" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M35.2029 26.4H35.1938L35.1933 26.4416C35.1928 26.4554 35.1922 26.4688 35.1917 26.4826L35.1891 26.5232L35.1853 26.5637L35.1811 26.6042L35.1752 26.6437L35.1688 26.6832L35.1613 26.7227L35.1528 26.7616L35.1437 26.8H35.1432L35.1331 26.8384L35.1219 26.8763L35.1096 26.9136L35.0968 26.9504L35.0829 26.9872L35.068 27.023L35.0525 27.0587L35.036 27.0939L35.0189 27.1286H35.0184L35.0008 27.1632L34.9816 27.1968C34.956 27.2416 34.9282 27.2848 34.8984 27.3264L34.876 27.3579L34.8525 27.3883L34.8285 27.4182L34.8035 27.4475L34.7784 27.4763H34.7779L34.7517 27.504C34.7341 27.5227 34.716 27.5409 34.6979 27.5584L34.6696 27.5846L34.6408 27.6102L34.6115 27.6347V27.6352L34.5816 27.6592L34.5512 27.6827L34.5197 27.7051C34.4781 27.7349 34.435 27.7627 34.3902 27.7883L34.3566 27.8069V27.8075L34.3219 27.8251L34.2872 27.8427L34.2521 27.8592L34.2163 27.8747L34.1806 27.8896L34.1437 27.9035L34.1069 27.9163L34.0696 27.9285L34.0317 27.9397L33.9933 27.9499L33.9549 27.9595L33.916 27.968L33.877 27.9755L33.8376 27.9819L33.7976 27.9878L33.757 27.992L33.7165 27.9957L33.676 27.9984L33.6349 28L33.5939 28.0005L33.5523 28C33.5384 27.9995 33.5251 27.9989 33.5112 27.9984L33.4707 27.9957L33.4301 27.992L33.3896 27.9878L33.3501 27.9819L33.3106 27.9755L33.2712 27.968L33.2323 27.9595L33.1938 27.9499L33.1554 27.9397L33.1176 27.9285L33.0802 27.9163L33.0434 27.9035L33.0066 27.8896L32.9708 27.8747L32.9351 27.8592L32.8999 27.8427L32.8653 27.8251H32.8647L32.8306 27.8075V27.8069L32.797 27.7883L32.764 27.7685L32.7309 27.7483L32.6989 27.727L32.6674 27.7051L32.636 27.6827L32.6056 27.6592L32.5757 27.6352V27.6347L32.5464 27.6102L32.5176 27.5846L32.4898 27.5585H32.4893L32.4621 27.5318L32.4354 27.504L32.4093 27.4763L32.3837 27.4475L32.3586 27.4182L32.3346 27.3883L32.3112 27.3579L32.2888 27.3264L32.2669 27.295L32.2456 27.263V27.2624L32.2253 27.2299L32.2056 27.1969L32.1864 27.1633L32.1682 27.1286L32.1512 27.0939L32.1346 27.0588L32.1192 27.023L32.1042 26.9873L32.0904 26.9504L32.0776 26.9136L32.0653 26.8763L32.0541 26.8384L32.044 26.8L32.0344 26.7616L32.0258 26.7227L32.0184 26.6832L32.0119 26.6437L32.0061 26.6043L32.0018 26.5637L31.9981 26.5232L31.9954 26.4827C31.9949 26.4688 31.9944 26.4555 31.9938 26.4416L31.9933 26.4L31.9938 26.3589C31.9944 26.3451 31.9949 26.3317 31.9954 26.3179L31.9981 26.2773L31.9992 26.2624C31.9261 24.5654 30.5165 23.2 28.8024 23.2C27.0418 23.2 25.6018 24.64 25.6018 26.4C25.6018 27.2837 24.8856 28.0005 24.0018 28.0005C23.1181 28.0005 22.4018 27.2837 22.4018 26.4C22.4018 24.64 20.9613 23.2 19.2013 23.2C17.4408 23.2 16.0008 24.64 16.0008 26.4C16.0008 27.2837 15.2845 28.0005 14.4008 28.0005C13.5171 28.0005 12.8008 27.2837 12.8008 26.4H12.8003C12.8003 22.8795 15.6808 19.9995 19.2013 19.9995C21.108 19.9995 22.8264 20.8443 24.0019 22.1782C25.2195 20.7963 26.9581 19.9995 28.8024 19.9995C32.3229 19.9995 35.2029 22.88 35.2029 26.4L35.2029 26.4V26.4Z"
                                            fill="#33CC66" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3295_191694">
                                            <rect width="31.9998" height="32" fill="white" transform="translate(8 8)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </div>
                            <div class="flex justify-between sm:flex-row flex-col w-full pl-3">
                                <div class="flex flex-col">
                                    <div
                                        class="dark:text-checkpricingdark text-pricingtextduowhite text-lg font-bold font-inter">
                                        Junior UI/UX Designer
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply text-sixteen font-medium font-inter">
                                        MayuGo-Huánuco, Perú
                                    </div>
                                </div>



                                <div class="sm:pt-0 pt-2">
                                    <span
                                        class="bg-redtiket text-sm font-inter font-mediun text-white-100 px-2.5 py-1 rounded-xl">
                                        Urgente
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="text-sixteen font-normal font-inter dark:text-pricingdarkstudents text-gray-600 pt-8">
                            Estamos búsquea de un UX/UI Designer que quiera sumarse a nuestro equipo de trabajo
                            multidisciplinario. Estamos búsquea de un UX/UI...
                        </div>

                        <div class="flex sm:flex-row flex-col gap-x-5 gap-y-2 pt-6">
                            <div
                                class="flex text-sixteen font-medium font-inter dark:text-pricingdarkstudents text-gray-600">
                                <div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.5364 8.04614C11.838 8.39376 12.3643 8.43104 12.7119 8.12941C13.0595 7.82779 13.0968 7.30147 12.7952 6.95385L11.5364 8.04614ZM8.46413 11.9538C8.1625 11.6062 7.63618 11.5689 7.28857 11.8706C6.94095 12.1722 6.90367 12.6985 7.2053 13.0461L8.46413 11.9538ZM10.8336 5.83333C10.8336 5.37309 10.4605 5 10.0002 5C9.54 5 9.16691 5.37309 9.16691 5.83333H10.8336ZM9.16691 14.1666C9.1669 14.6269 9.53999 15 10.0002 15C10.4605 15 10.8336 14.6269 10.8336 14.1667L9.16691 14.1666ZM16.6669 10C16.6669 13.6819 13.6821 16.6667 10.0002 16.6667V18.3333C14.6026 18.3333 18.3336 14.6024 18.3336 10H16.6669ZM10.0002 16.6667C6.31834 16.6667 3.33358 13.6819 3.33358 10H1.66691C1.66691 14.6024 5.39787 18.3333 10.0002 18.3333V16.6667ZM3.33358 10C3.33358 6.3181 6.31834 3.33333 10.0002 3.33333V1.66667C5.39787 1.66667 1.66691 5.39763 1.66691 10H3.33358ZM10.0002 3.33333C13.6821 3.33333 16.6669 6.3181 16.6669 10H18.3336C18.3336 5.39763 14.6026 1.66667 10.0002 1.66667V3.33333ZM10.0002 9.16666C9.45146 9.16666 8.99232 9.01687 8.69472 8.81847C8.3913 8.61618 8.33357 8.42825 8.33357 8.33333H6.66691C6.66691 9.15889 7.16883 9.80428 7.77022 10.2052C8.37745 10.61 9.16831 10.8333 10.0002 10.8333V9.16666ZM8.33357 8.33333C8.33357 8.23841 8.3913 8.05048 8.69472 7.84819C8.99232 7.64979 9.45146 7.5 10.0002 7.5V5.83333C9.16831 5.83333 8.37745 6.05663 7.77022 6.46144C7.16883 6.86238 6.66691 7.50777 6.66691 8.33333H8.33357ZM10.0002 7.5C10.7534 7.5 11.3028 7.77692 11.5364 8.04614L12.7952 6.95385C12.1643 6.22674 11.0978 5.83333 10.0002 5.83333V7.5ZM10.0002 10.8333C10.549 10.8333 11.0082 10.9831 11.3058 11.1815C11.6092 11.3838 11.6669 11.5717 11.6669 11.6667H13.3336C13.3336 10.8411 12.8317 10.1957 12.2303 9.79477C11.623 9.38996 10.8322 9.16666 10.0002 9.16666V10.8333ZM9.16691 5.83333V6.66666H10.8336V5.83333H9.16691ZM9.16692 13.3333L9.16691 14.1666L10.8336 14.1667L10.8336 13.3333L9.16692 13.3333ZM10.0003 12.5C9.24711 12.5 8.69773 12.2231 8.46413 11.9538L7.2053 13.0461C7.83621 13.7733 8.90271 14.1667 10.0003 14.1667L10.0003 12.5ZM11.6669 11.6667C11.6669 11.7616 11.6092 11.9495 11.3058 12.1518C11.0082 12.3502 10.549 12.5 10.0003 12.5V14.1667C10.8322 14.1667 11.6231 13.9434 12.2303 13.5385C12.8317 13.1376 13.3336 12.4922 13.3336 11.6667H11.6669ZM9.16691 6.66667L9.16692 13.3333L10.8336 13.3333L10.8336 6.66666L9.16691 6.66667Z"
                                            fill="#697586" />
                                    </svg>

                                </div>
                                <div class="pl-2.5">
                                    S/.1,500 - S/.2,200
                                </div>
                            </div>

                            <div
                                class="flex text-sixteen font-medium font-inter dark:text-pricingdarkstudents text-gray-600">
                                <div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.99926 6.66618V9.99951L12.4993 12.4995M17.4993 9.99951C17.4993 14.1416 14.1414 17.4995 9.99926 17.4995C5.85713 17.4995 2.49927 14.1416 2.49927 9.99951C2.49927 5.85737 5.85713 2.49951 9.99926 2.49951C14.1414 2.49951 17.4993 5.85737 17.4993 9.99951Z"
                                            stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <div class="pl-2.5">
                                    Tiempo completo
                                </div>
                            </div>
                            <div class=" flex r">
                                <div
                                    class="flex w-auto dark:bg-txtnamecomntpkyr bg-whiteheader px-3 items-center rounded-xl">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99926 5.33284V7.99951L9.99926 9.99951M13.9993 7.99951C13.9993 11.3132 11.313 13.9995 7.99926 13.9995C4.68556 13.9995 1.99927 11.3132 1.99927 7.99951C1.99927 4.6858 4.68556 1.99951 7.99926 1.99951C11.313 1.99951 13.9993 4.6858 13.9993 7.99951Z"
                                                stroke="#697586" stroke-width="1.33333" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-gray-600 pl-2.5 font-inter w-auto font-medium text.sm">
                                        Hace un día
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div
                        class="rounded-2xl border dark:border-txtcommentply dark:bg-pricingcintadark bg-whiteheader mt-6 border-checkpricingdark p-4">

                        <div class="flex items-center w-full">

                            <div>
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="48" height="48" rx="8" fill="white" />
                                    <g clip-path="url(#clip0_3295_191694)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M35.203 30.2037V34.5701V35.4261C35.1411 35.4869 35.0787 35.5472 35.0158 35.6069C28.6046 41.689 18.4761 41.4229 12.3934 35.0128C6.31076 28.6021 6.57689 18.4752 12.9881 12.3931C19.3987 6.31096 29.5272 6.57709 35.6099 12.9872C38.4462 15.9765 39.9022 19.7739 39.9982 23.592L39.9992 23.6277L39.9997 23.6534H39.9992C39.9992 24.5371 39.2829 25.2533 38.3992 25.2533C37.5155 25.2533 36.7992 24.5371 36.7992 23.6534H36.7987C36.7171 20.6059 35.5528 17.576 33.2883 15.1899C28.4222 10.0619 20.3193 9.84912 15.1907 14.7142C10.0617 19.5798 9.84886 27.6816 14.715 32.8101C19.3294 37.6731 26.8536 38.1157 31.9934 33.9989V26.4H35.203V30.2038V30.2038L35.203 30.2037Z"
                                            fill="#0083F5" />
                                        <path
                                            d="M37.1022 30.1021C36.2718 29.7998 35.8436 28.8816 36.1459 28.0512C36.4481 27.2207 37.3664 26.7926 38.1968 27.0948C39.0272 27.3971 39.4554 28.3153 39.1532 29.1457C38.8509 29.9762 37.9327 30.4043 37.1022 30.1021Z"
                                            fill="#33CC66" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M35.2029 26.4H35.1938L35.1933 26.4416C35.1928 26.4554 35.1922 26.4688 35.1917 26.4826L35.1891 26.5232L35.1853 26.5637L35.1811 26.6042L35.1752 26.6437L35.1688 26.6832L35.1613 26.7227L35.1528 26.7616L35.1437 26.8H35.1432L35.1331 26.8384L35.1219 26.8763L35.1096 26.9136L35.0968 26.9504L35.0829 26.9872L35.068 27.023L35.0525 27.0587L35.036 27.0939L35.0189 27.1286H35.0184L35.0008 27.1632L34.9816 27.1968C34.956 27.2416 34.9282 27.2848 34.8984 27.3264L34.876 27.3579L34.8525 27.3883L34.8285 27.4182L34.8035 27.4475L34.7784 27.4763H34.7779L34.7517 27.504C34.7341 27.5227 34.716 27.5409 34.6979 27.5584L34.6696 27.5846L34.6408 27.6102L34.6115 27.6347V27.6352L34.5816 27.6592L34.5512 27.6827L34.5197 27.7051C34.4781 27.7349 34.435 27.7627 34.3902 27.7883L34.3566 27.8069V27.8075L34.3219 27.8251L34.2872 27.8427L34.2521 27.8592L34.2163 27.8747L34.1806 27.8896L34.1437 27.9035L34.1069 27.9163L34.0696 27.9285L34.0317 27.9397L33.9933 27.9499L33.9549 27.9595L33.916 27.968L33.877 27.9755L33.8376 27.9819L33.7976 27.9878L33.757 27.992L33.7165 27.9957L33.676 27.9984L33.6349 28L33.5939 28.0005L33.5523 28C33.5384 27.9995 33.5251 27.9989 33.5112 27.9984L33.4707 27.9957L33.4301 27.992L33.3896 27.9878L33.3501 27.9819L33.3106 27.9755L33.2712 27.968L33.2323 27.9595L33.1938 27.9499L33.1554 27.9397L33.1176 27.9285L33.0802 27.9163L33.0434 27.9035L33.0066 27.8896L32.9708 27.8747L32.9351 27.8592L32.8999 27.8427L32.8653 27.8251H32.8647L32.8306 27.8075V27.8069L32.797 27.7883L32.764 27.7685L32.7309 27.7483L32.6989 27.727L32.6674 27.7051L32.636 27.6827L32.6056 27.6592L32.5757 27.6352V27.6347L32.5464 27.6102L32.5176 27.5846L32.4898 27.5585H32.4893L32.4621 27.5318L32.4354 27.504L32.4093 27.4763L32.3837 27.4475L32.3586 27.4182L32.3346 27.3883L32.3112 27.3579L32.2888 27.3264L32.2669 27.295L32.2456 27.263V27.2624L32.2253 27.2299L32.2056 27.1969L32.1864 27.1633L32.1682 27.1286L32.1512 27.0939L32.1346 27.0588L32.1192 27.023L32.1042 26.9873L32.0904 26.9504L32.0776 26.9136L32.0653 26.8763L32.0541 26.8384L32.044 26.8L32.0344 26.7616L32.0258 26.7227L32.0184 26.6832L32.0119 26.6437L32.0061 26.6043L32.0018 26.5637L31.9981 26.5232L31.9954 26.4827C31.9949 26.4688 31.9944 26.4555 31.9938 26.4416L31.9933 26.4L31.9938 26.3589C31.9944 26.3451 31.9949 26.3317 31.9954 26.3179L31.9981 26.2773L31.9992 26.2624C31.9261 24.5654 30.5165 23.2 28.8024 23.2C27.0418 23.2 25.6018 24.64 25.6018 26.4C25.6018 27.2837 24.8856 28.0005 24.0018 28.0005C23.1181 28.0005 22.4018 27.2837 22.4018 26.4C22.4018 24.64 20.9613 23.2 19.2013 23.2C17.4408 23.2 16.0008 24.64 16.0008 26.4C16.0008 27.2837 15.2845 28.0005 14.4008 28.0005C13.5171 28.0005 12.8008 27.2837 12.8008 26.4H12.8003C12.8003 22.8795 15.6808 19.9995 19.2013 19.9995C21.108 19.9995 22.8264 20.8443 24.0019 22.1782C25.2195 20.7963 26.9581 19.9995 28.8024 19.9995C32.3229 19.9995 35.2029 22.88 35.2029 26.4L35.2029 26.4V26.4Z"
                                            fill="#33CC66" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3295_191694">
                                            <rect width="31.9998" height="32" fill="white" transform="translate(8 8)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </div>
                            <div class="flex justify-between sm:flex-row flex-col w-full pl-3">
                                <div class="flex flex-col">
                                    <div
                                        class="dark:text-checkpricingdark text-pricingtextduowhite text-lg font-bold font-inter">
                                        Junior UI/UX Designer
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply text-sixteen font-medium font-inter">
                                        MayuGo-Huánuco, Perú
                                    </div>
                                </div>



                                <div class="sm:pt-0 pt-2">
                                    <span
                                        class="bg-redtiket text-sm font-inter font-mediun text-white-100 px-2.5 py-1 rounded-xl">
                                        Urgente
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="text-sixteen font-normal font-inter dark:text-pricingdarkstudents text-gray-600 pt-8">
                            Estamos búsquea de un UX/UI Designer que quiera sumarse a nuestro equipo de trabajo
                            multidisciplinario. Estamos búsquea de un UX/UI...
                        </div>

                        <div class="flex sm:flex-row flex-col gap-x-5 gap-y-2 pt-6">
                            <div
                                class="flex text-sixteen font-medium font-inter dark:text-pricingdarkstudents text-gray-600">
                                <div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.5364 8.04614C11.838 8.39376 12.3643 8.43104 12.7119 8.12941C13.0595 7.82779 13.0968 7.30147 12.7952 6.95385L11.5364 8.04614ZM8.46413 11.9538C8.1625 11.6062 7.63618 11.5689 7.28857 11.8706C6.94095 12.1722 6.90367 12.6985 7.2053 13.0461L8.46413 11.9538ZM10.8336 5.83333C10.8336 5.37309 10.4605 5 10.0002 5C9.54 5 9.16691 5.37309 9.16691 5.83333H10.8336ZM9.16691 14.1666C9.1669 14.6269 9.53999 15 10.0002 15C10.4605 15 10.8336 14.6269 10.8336 14.1667L9.16691 14.1666ZM16.6669 10C16.6669 13.6819 13.6821 16.6667 10.0002 16.6667V18.3333C14.6026 18.3333 18.3336 14.6024 18.3336 10H16.6669ZM10.0002 16.6667C6.31834 16.6667 3.33358 13.6819 3.33358 10H1.66691C1.66691 14.6024 5.39787 18.3333 10.0002 18.3333V16.6667ZM3.33358 10C3.33358 6.3181 6.31834 3.33333 10.0002 3.33333V1.66667C5.39787 1.66667 1.66691 5.39763 1.66691 10H3.33358ZM10.0002 3.33333C13.6821 3.33333 16.6669 6.3181 16.6669 10H18.3336C18.3336 5.39763 14.6026 1.66667 10.0002 1.66667V3.33333ZM10.0002 9.16666C9.45146 9.16666 8.99232 9.01687 8.69472 8.81847C8.3913 8.61618 8.33357 8.42825 8.33357 8.33333H6.66691C6.66691 9.15889 7.16883 9.80428 7.77022 10.2052C8.37745 10.61 9.16831 10.8333 10.0002 10.8333V9.16666ZM8.33357 8.33333C8.33357 8.23841 8.3913 8.05048 8.69472 7.84819C8.99232 7.64979 9.45146 7.5 10.0002 7.5V5.83333C9.16831 5.83333 8.37745 6.05663 7.77022 6.46144C7.16883 6.86238 6.66691 7.50777 6.66691 8.33333H8.33357ZM10.0002 7.5C10.7534 7.5 11.3028 7.77692 11.5364 8.04614L12.7952 6.95385C12.1643 6.22674 11.0978 5.83333 10.0002 5.83333V7.5ZM10.0002 10.8333C10.549 10.8333 11.0082 10.9831 11.3058 11.1815C11.6092 11.3838 11.6669 11.5717 11.6669 11.6667H13.3336C13.3336 10.8411 12.8317 10.1957 12.2303 9.79477C11.623 9.38996 10.8322 9.16666 10.0002 9.16666V10.8333ZM9.16691 5.83333V6.66666H10.8336V5.83333H9.16691ZM9.16692 13.3333L9.16691 14.1666L10.8336 14.1667L10.8336 13.3333L9.16692 13.3333ZM10.0003 12.5C9.24711 12.5 8.69773 12.2231 8.46413 11.9538L7.2053 13.0461C7.83621 13.7733 8.90271 14.1667 10.0003 14.1667L10.0003 12.5ZM11.6669 11.6667C11.6669 11.7616 11.6092 11.9495 11.3058 12.1518C11.0082 12.3502 10.549 12.5 10.0003 12.5V14.1667C10.8322 14.1667 11.6231 13.9434 12.2303 13.5385C12.8317 13.1376 13.3336 12.4922 13.3336 11.6667H11.6669ZM9.16691 6.66667L9.16692 13.3333L10.8336 13.3333L10.8336 6.66666L9.16691 6.66667Z"
                                            fill="#697586" />
                                    </svg>

                                </div>
                                <div class="pl-2.5">
                                    S/.1,500 - S/.2,200
                                </div>
                            </div>

                            <div
                                class="flex text-sixteen font-medium font-inter dark:text-pricingdarkstudents text-gray-600">
                                <div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.99926 6.66618V9.99951L12.4993 12.4995M17.4993 9.99951C17.4993 14.1416 14.1414 17.4995 9.99926 17.4995C5.85713 17.4995 2.49927 14.1416 2.49927 9.99951C2.49927 5.85737 5.85713 2.49951 9.99926 2.49951C14.1414 2.49951 17.4993 5.85737 17.4993 9.99951Z"
                                            stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <div class="pl-2.5">
                                    Tiempo completo
                                </div>
                            </div>
                            <div class=" flex r">
                                <div
                                    class="flex w-auto dark:bg-txtnamecomntpkyr bg-whiteheader px-3 items-center rounded-xl">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99926 5.33284V7.99951L9.99926 9.99951M13.9993 7.99951C13.9993 11.3132 11.313 13.9995 7.99926 13.9995C4.68556 13.9995 1.99927 11.3132 1.99927 7.99951C1.99927 4.6858 4.68556 1.99951 7.99926 1.99951C11.313 1.99951 13.9993 4.6858 13.9993 7.99951Z"
                                                stroke="#697586" stroke-width="1.33333" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-gray-600 pl-2.5 font-inter w-auto font-medium text.sm">
                                        Hace un día
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div
                        class="rounded-2xl border dark:border-txtcommentply dark:bg-pricingcintadark bg-whiteheader mt-6 border-checkpricingdark p-4">

                        <div class="flex items-center w-full">

                            <div>
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect width="48" height="48" rx="8" fill="white" />
                                    <g clip-path="url(#clip0_3295_191694)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M35.203 30.2037V34.5701V35.4261C35.1411 35.4869 35.0787 35.5472 35.0158 35.6069C28.6046 41.689 18.4761 41.4229 12.3934 35.0128C6.31076 28.6021 6.57689 18.4752 12.9881 12.3931C19.3987 6.31096 29.5272 6.57709 35.6099 12.9872C38.4462 15.9765 39.9022 19.7739 39.9982 23.592L39.9992 23.6277L39.9997 23.6534H39.9992C39.9992 24.5371 39.2829 25.2533 38.3992 25.2533C37.5155 25.2533 36.7992 24.5371 36.7992 23.6534H36.7987C36.7171 20.6059 35.5528 17.576 33.2883 15.1899C28.4222 10.0619 20.3193 9.84912 15.1907 14.7142C10.0617 19.5798 9.84886 27.6816 14.715 32.8101C19.3294 37.6731 26.8536 38.1157 31.9934 33.9989V26.4H35.203V30.2038V30.2038L35.203 30.2037Z"
                                            fill="#0083F5" />
                                        <path
                                            d="M37.1022 30.1021C36.2718 29.7998 35.8436 28.8816 36.1459 28.0512C36.4481 27.2207 37.3664 26.7926 38.1968 27.0948C39.0272 27.3971 39.4554 28.3153 39.1532 29.1457C38.8509 29.9762 37.9327 30.4043 37.1022 30.1021Z"
                                            fill="#33CC66" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M35.2029 26.4H35.1938L35.1933 26.4416C35.1928 26.4554 35.1922 26.4688 35.1917 26.4826L35.1891 26.5232L35.1853 26.5637L35.1811 26.6042L35.1752 26.6437L35.1688 26.6832L35.1613 26.7227L35.1528 26.7616L35.1437 26.8H35.1432L35.1331 26.8384L35.1219 26.8763L35.1096 26.9136L35.0968 26.9504L35.0829 26.9872L35.068 27.023L35.0525 27.0587L35.036 27.0939L35.0189 27.1286H35.0184L35.0008 27.1632L34.9816 27.1968C34.956 27.2416 34.9282 27.2848 34.8984 27.3264L34.876 27.3579L34.8525 27.3883L34.8285 27.4182L34.8035 27.4475L34.7784 27.4763H34.7779L34.7517 27.504C34.7341 27.5227 34.716 27.5409 34.6979 27.5584L34.6696 27.5846L34.6408 27.6102L34.6115 27.6347V27.6352L34.5816 27.6592L34.5512 27.6827L34.5197 27.7051C34.4781 27.7349 34.435 27.7627 34.3902 27.7883L34.3566 27.8069V27.8075L34.3219 27.8251L34.2872 27.8427L34.2521 27.8592L34.2163 27.8747L34.1806 27.8896L34.1437 27.9035L34.1069 27.9163L34.0696 27.9285L34.0317 27.9397L33.9933 27.9499L33.9549 27.9595L33.916 27.968L33.877 27.9755L33.8376 27.9819L33.7976 27.9878L33.757 27.992L33.7165 27.9957L33.676 27.9984L33.6349 28L33.5939 28.0005L33.5523 28C33.5384 27.9995 33.5251 27.9989 33.5112 27.9984L33.4707 27.9957L33.4301 27.992L33.3896 27.9878L33.3501 27.9819L33.3106 27.9755L33.2712 27.968L33.2323 27.9595L33.1938 27.9499L33.1554 27.9397L33.1176 27.9285L33.0802 27.9163L33.0434 27.9035L33.0066 27.8896L32.9708 27.8747L32.9351 27.8592L32.8999 27.8427L32.8653 27.8251H32.8647L32.8306 27.8075V27.8069L32.797 27.7883L32.764 27.7685L32.7309 27.7483L32.6989 27.727L32.6674 27.7051L32.636 27.6827L32.6056 27.6592L32.5757 27.6352V27.6347L32.5464 27.6102L32.5176 27.5846L32.4898 27.5585H32.4893L32.4621 27.5318L32.4354 27.504L32.4093 27.4763L32.3837 27.4475L32.3586 27.4182L32.3346 27.3883L32.3112 27.3579L32.2888 27.3264L32.2669 27.295L32.2456 27.263V27.2624L32.2253 27.2299L32.2056 27.1969L32.1864 27.1633L32.1682 27.1286L32.1512 27.0939L32.1346 27.0588L32.1192 27.023L32.1042 26.9873L32.0904 26.9504L32.0776 26.9136L32.0653 26.8763L32.0541 26.8384L32.044 26.8L32.0344 26.7616L32.0258 26.7227L32.0184 26.6832L32.0119 26.6437L32.0061 26.6043L32.0018 26.5637L31.9981 26.5232L31.9954 26.4827C31.9949 26.4688 31.9944 26.4555 31.9938 26.4416L31.9933 26.4L31.9938 26.3589C31.9944 26.3451 31.9949 26.3317 31.9954 26.3179L31.9981 26.2773L31.9992 26.2624C31.9261 24.5654 30.5165 23.2 28.8024 23.2C27.0418 23.2 25.6018 24.64 25.6018 26.4C25.6018 27.2837 24.8856 28.0005 24.0018 28.0005C23.1181 28.0005 22.4018 27.2837 22.4018 26.4C22.4018 24.64 20.9613 23.2 19.2013 23.2C17.4408 23.2 16.0008 24.64 16.0008 26.4C16.0008 27.2837 15.2845 28.0005 14.4008 28.0005C13.5171 28.0005 12.8008 27.2837 12.8008 26.4H12.8003C12.8003 22.8795 15.6808 19.9995 19.2013 19.9995C21.108 19.9995 22.8264 20.8443 24.0019 22.1782C25.2195 20.7963 26.9581 19.9995 28.8024 19.9995C32.3229 19.9995 35.2029 22.88 35.2029 26.4L35.2029 26.4V26.4Z"
                                            fill="#33CC66" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3295_191694">
                                            <rect width="31.9998" height="32" fill="white" transform="translate(8 8)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </div>
                            <div class="flex justify-between sm:flex-row flex-col w-full pl-3">
                                <div class="flex flex-col">
                                    <div
                                        class="dark:text-checkpricingdark text-pricingtextduowhite text-lg font-bold font-inter">
                                        Junior UI/UX Designer
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply text-sixteen font-medium font-inter">
                                        MayuGo-Huánuco, Perú
                                    </div>
                                </div>



                                <div class="sm:pt-0 pt-2">
                                    <span
                                        class="bg-redtiket text-sm font-inter font-mediun text-white-100 px-2.5 py-1 rounded-xl">
                                        Urgente
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="text-sixteen font-normal font-inter dark:text-pricingdarkstudents text-gray-600 pt-8">
                            Estamos búsquea de un UX/UI Designer que quiera sumarse a nuestro equipo de trabajo
                            multidisciplinario. Estamos búsquea de un UX/UI...
                        </div>

                        <div class="flex sm:flex-row flex-col gap-x-5 gap-y-2 pt-6">
                            <div
                                class="flex text-sixteen font-medium font-inter dark:text-pricingdarkstudents text-gray-600">
                                <div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.5364 8.04614C11.838 8.39376 12.3643 8.43104 12.7119 8.12941C13.0595 7.82779 13.0968 7.30147 12.7952 6.95385L11.5364 8.04614ZM8.46413 11.9538C8.1625 11.6062 7.63618 11.5689 7.28857 11.8706C6.94095 12.1722 6.90367 12.6985 7.2053 13.0461L8.46413 11.9538ZM10.8336 5.83333C10.8336 5.37309 10.4605 5 10.0002 5C9.54 5 9.16691 5.37309 9.16691 5.83333H10.8336ZM9.16691 14.1666C9.1669 14.6269 9.53999 15 10.0002 15C10.4605 15 10.8336 14.6269 10.8336 14.1667L9.16691 14.1666ZM16.6669 10C16.6669 13.6819 13.6821 16.6667 10.0002 16.6667V18.3333C14.6026 18.3333 18.3336 14.6024 18.3336 10H16.6669ZM10.0002 16.6667C6.31834 16.6667 3.33358 13.6819 3.33358 10H1.66691C1.66691 14.6024 5.39787 18.3333 10.0002 18.3333V16.6667ZM3.33358 10C3.33358 6.3181 6.31834 3.33333 10.0002 3.33333V1.66667C5.39787 1.66667 1.66691 5.39763 1.66691 10H3.33358ZM10.0002 3.33333C13.6821 3.33333 16.6669 6.3181 16.6669 10H18.3336C18.3336 5.39763 14.6026 1.66667 10.0002 1.66667V3.33333ZM10.0002 9.16666C9.45146 9.16666 8.99232 9.01687 8.69472 8.81847C8.3913 8.61618 8.33357 8.42825 8.33357 8.33333H6.66691C6.66691 9.15889 7.16883 9.80428 7.77022 10.2052C8.37745 10.61 9.16831 10.8333 10.0002 10.8333V9.16666ZM8.33357 8.33333C8.33357 8.23841 8.3913 8.05048 8.69472 7.84819C8.99232 7.64979 9.45146 7.5 10.0002 7.5V5.83333C9.16831 5.83333 8.37745 6.05663 7.77022 6.46144C7.16883 6.86238 6.66691 7.50777 6.66691 8.33333H8.33357ZM10.0002 7.5C10.7534 7.5 11.3028 7.77692 11.5364 8.04614L12.7952 6.95385C12.1643 6.22674 11.0978 5.83333 10.0002 5.83333V7.5ZM10.0002 10.8333C10.549 10.8333 11.0082 10.9831 11.3058 11.1815C11.6092 11.3838 11.6669 11.5717 11.6669 11.6667H13.3336C13.3336 10.8411 12.8317 10.1957 12.2303 9.79477C11.623 9.38996 10.8322 9.16666 10.0002 9.16666V10.8333ZM9.16691 5.83333V6.66666H10.8336V5.83333H9.16691ZM9.16692 13.3333L9.16691 14.1666L10.8336 14.1667L10.8336 13.3333L9.16692 13.3333ZM10.0003 12.5C9.24711 12.5 8.69773 12.2231 8.46413 11.9538L7.2053 13.0461C7.83621 13.7733 8.90271 14.1667 10.0003 14.1667L10.0003 12.5ZM11.6669 11.6667C11.6669 11.7616 11.6092 11.9495 11.3058 12.1518C11.0082 12.3502 10.549 12.5 10.0003 12.5V14.1667C10.8322 14.1667 11.6231 13.9434 12.2303 13.5385C12.8317 13.1376 13.3336 12.4922 13.3336 11.6667H11.6669ZM9.16691 6.66667L9.16692 13.3333L10.8336 13.3333L10.8336 6.66666L9.16691 6.66667Z"
                                            fill="#697586" />
                                    </svg>

                                </div>
                                <div class="pl-2.5">
                                    S/.1,500 - S/.2,200
                                </div>
                            </div>

                            <div
                                class="flex text-sixteen font-medium font-inter dark:text-pricingdarkstudents text-gray-600">
                                <div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.99926 6.66618V9.99951L12.4993 12.4995M17.4993 9.99951C17.4993 14.1416 14.1414 17.4995 9.99926 17.4995C5.85713 17.4995 2.49927 14.1416 2.49927 9.99951C2.49927 5.85737 5.85713 2.49951 9.99926 2.49951C14.1414 2.49951 17.4993 5.85737 17.4993 9.99951Z"
                                            stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <div class="pl-2.5">
                                    Tiempo completo
                                </div>
                            </div>
                            <div class=" flex r">
                                <div
                                    class="flex w-auto dark:bg-txtnamecomntpkyr bg-whiteheader px-3 items-center rounded-xl">
                                    <div>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99926 5.33284V7.99951L9.99926 9.99951M13.9993 7.99951C13.9993 11.3132 11.313 13.9995 7.99926 13.9995C4.68556 13.9995 1.99927 11.3132 1.99927 7.99951C1.99927 4.6858 4.68556 1.99951 7.99926 1.99951C11.313 1.99951 13.9993 4.6858 13.9993 7.99951Z"
                                                stroke="#697586" stroke-width="1.33333" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-gray-600 pl-2.5 font-inter w-auto font-medium text.sm">
                                        Hace un día
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>




                    <div class="justify-center  md:hidden  flex pt-10  ">
                        <div class="flex gap-x-2.5 items-center">
                            <button class="text-txtcommentply dark:text-borderconcours focus:outline-none ">
                                <svg width="7" height="12" viewBox="0 0 7 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.26765 11.793C5.96773 12.0787 5.49299 12.0672 5.2073 11.7672L0.205966 6.51678C-0.0699574 6.22711 -0.0699574 5.77187 0.205966 5.4822L5.2073 0.231735C5.49299 -0.0681872 5.96773 -0.0797238 6.26765 0.205968C6.56757 0.491659 6.57911 0.966392 6.29342 1.26631L1.78483 5.99949L6.29342 10.7327C6.57911 11.0326 6.56757 11.5073 6.26765 11.793Z"
                                        fill="#697586" />
                                </svg>

                            </button>
                            <div class="text-txtcommentply dark:text-borderconcours text-xs font-inter font-normal sm:flex  hidden" >
                                Anterior
                            </div>

                            <div>
                                <button
                                    class="dark:bg-black bg-white-100 dark:focus:bg-txtnamecomntpkyr focus:bg-bgprogresb  text-txtcommentply dark:text-borderconcours w-9 h-9 text-xs font-normal  focus:outline-none rounded-xl">
                                    <span>1</span>

                                </button>
                            </div>
                            <div>
                                <button
                                    class="dark:bg-black bg-white-100 dark:focus:bg-txtnamecomntpkyr focus:bg-bgprogresb    text-txtcommentply dark:text-borderconcours w-9 h-9 text-xs font-normal focus:outline-none rounded-xl">
                                    <span>2</span>

                                </button>
                            </div>
                           
                            <div
                                class="  text-txtcommentply dark:text-borderconcours text-xs font-normal  focus:outline-none rounded-xl">
                                ...
                            </div>
                           
                            <div>
                                <button
                                    class="dark:bg-black bg-white-100 dark:focus:bg-txtnamecomntpkyr focus:bg-bgprogresb   text-txtcommentply dark:text-borderconcours w-9 h-9 text-xs font-normal focus:outline-none rounded-xl">
                                    <span>9</span>

                                </button>
                            </div>
                            <div>
                                <button
                                    class="dark:bg-black bg-white-100 dark:focus:bg-txtnamecomntpkyr focus:bg-bgprogresb   text-txtcommentply dark:text-borderconcours w-9 h-9 text-xs font-normal  focus:outline-none rounded-xl">
                                    <span>10</span>

                                </button>
                            </div>
                            <div class="text-txtcommentply dark:text-borderconcours text-xs font-inter font-normal sm:flex  hidden">
                                Siguiente
                            </div>
                            <button class="text-txtcommentply dark:text-borderconcours focus:outline-none ">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.732712 0.206944C1.03263 -0.0787473 1.50737 -0.0672107 1.79306 0.232712L6.79439 5.48318C7.07032 5.77285 7.07032 6.22809 6.79439 6.51776L1.79306 11.7682C1.50737 12.0681 1.03263 12.0797 0.732712 11.794C0.432789 11.5083 0.421253 11.0336 0.706944 10.7336L5.21553 6.00047L0.706944 1.26729C0.421253 0.967369 0.432789 0.492635 0.732712 0.206944Z"
                                        fill="#697586" />
                                </svg>


                            </button>


                        </div>
                    </div>
                </div>







                <div>
                    <div class="bg-pricingcintadark flex justify-between py-6 px-4 sm:hidden items-center mt-10">
                        <button class="focus:outline-none">
                            <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 11L1 6M1 6L6 1M1 6L13 6" stroke="#EEF2F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                
                        </button>
                        <div class="">
                            <button
                                class="text-btncomentresply bg-bgbtngreen focus:outline-none rounded-xl px-5 py-2 text-sixteen font-normal font-inter">
                                Postular ahora
                            </button>
                        </div>

                    </div>


                    <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-bold text-xl font-inter pt-8">
                        Junior UI/UX Designer creativo en Lima
                    </div>

                    <div class="pt-4">
                        <div
                            class="dark:text-checkpricingdark  text-pricingtextduowhite text-sixteen font-inter font-normal">
                            MayuGo

                        </div>
                        <div class="text-sixteen font-inter font-normal dark:text-borderconcours text-txtcommentply">
                            Huánuco, Perú
                        </div>
                    </div>

                    <div class="flex sm:gap-x-28 gap-x-2 pt-4">
                        <div class="flex  flex-col">
                            <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-bold font-inter text-xl">
                                Salario
                            </div>
                            <div
                                class="flex text-sixteen font-medium font-inter dark:text-pricingdarkstudents text-gray-600 pt-2">
                                <div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.5364 8.04614C11.838 8.39376 12.3643 8.43104 12.7119 8.12941C13.0595 7.82779 13.0968 7.30147 12.7952 6.95385L11.5364 8.04614ZM8.46413 11.9538C8.1625 11.6062 7.63618 11.5689 7.28857 11.8706C6.94095 12.1722 6.90367 12.6985 7.2053 13.0461L8.46413 11.9538ZM10.8336 5.83333C10.8336 5.37309 10.4605 5 10.0002 5C9.54 5 9.16691 5.37309 9.16691 5.83333H10.8336ZM9.16691 14.1666C9.1669 14.6269 9.53999 15 10.0002 15C10.4605 15 10.8336 14.6269 10.8336 14.1667L9.16691 14.1666ZM16.6669 10C16.6669 13.6819 13.6821 16.6667 10.0002 16.6667V18.3333C14.6026 18.3333 18.3336 14.6024 18.3336 10H16.6669ZM10.0002 16.6667C6.31834 16.6667 3.33358 13.6819 3.33358 10H1.66691C1.66691 14.6024 5.39787 18.3333 10.0002 18.3333V16.6667ZM3.33358 10C3.33358 6.3181 6.31834 3.33333 10.0002 3.33333V1.66667C5.39787 1.66667 1.66691 5.39763 1.66691 10H3.33358ZM10.0002 3.33333C13.6821 3.33333 16.6669 6.3181 16.6669 10H18.3336C18.3336 5.39763 14.6026 1.66667 10.0002 1.66667V3.33333ZM10.0002 9.16666C9.45146 9.16666 8.99232 9.01687 8.69472 8.81847C8.3913 8.61618 8.33357 8.42825 8.33357 8.33333H6.66691C6.66691 9.15889 7.16883 9.80428 7.77022 10.2052C8.37745 10.61 9.16831 10.8333 10.0002 10.8333V9.16666ZM8.33357 8.33333C8.33357 8.23841 8.3913 8.05048 8.69472 7.84819C8.99232 7.64979 9.45146 7.5 10.0002 7.5V5.83333C9.16831 5.83333 8.37745 6.05663 7.77022 6.46144C7.16883 6.86238 6.66691 7.50777 6.66691 8.33333H8.33357ZM10.0002 7.5C10.7534 7.5 11.3028 7.77692 11.5364 8.04614L12.7952 6.95385C12.1643 6.22674 11.0978 5.83333 10.0002 5.83333V7.5ZM10.0002 10.8333C10.549 10.8333 11.0082 10.9831 11.3058 11.1815C11.6092 11.3838 11.6669 11.5717 11.6669 11.6667H13.3336C13.3336 10.8411 12.8317 10.1957 12.2303 9.79477C11.623 9.38996 10.8322 9.16666 10.0002 9.16666V10.8333ZM9.16691 5.83333V6.66666H10.8336V5.83333H9.16691ZM9.16692 13.3333L9.16691 14.1666L10.8336 14.1667L10.8336 13.3333L9.16692 13.3333ZM10.0003 12.5C9.24711 12.5 8.69773 12.2231 8.46413 11.9538L7.2053 13.0461C7.83621 13.7733 8.90271 14.1667 10.0003 14.1667L10.0003 12.5ZM11.6669 11.6667C11.6669 11.7616 11.6092 11.9495 11.3058 12.1518C11.0082 12.3502 10.549 12.5 10.0003 12.5V14.1667C10.8322 14.1667 11.6231 13.9434 12.2303 13.5385C12.8317 13.1376 13.3336 12.4922 13.3336 11.6667H11.6669ZM9.16691 6.66667L9.16692 13.3333L10.8336 13.3333L10.8336 6.66666L9.16691 6.66667Z"
                                            fill="#697586" />
                                    </svg>

                                </div>
                                <div class="pl-2.5 text-gray-600 dark:text-pricingdarkstudents">
                                    S/.1,500 - S/.2,200
                                </div>
                            </div>
                        </div>


                        <div class="flex  flex-col">
                            <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-bold font-inter text-xl">
                                Tipo de empleo
                            </div>
                            <div
                                class="flex text-sixteen font-medium font-inter dark:text-pricingdarkstudents text-gray-600 pt-2">
                                <div>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.5364 8.04614C11.838 8.39376 12.3643 8.43104 12.7119 8.12941C13.0595 7.82779 13.0968 7.30147 12.7952 6.95385L11.5364 8.04614ZM8.46413 11.9538C8.1625 11.6062 7.63618 11.5689 7.28857 11.8706C6.94095 12.1722 6.90367 12.6985 7.2053 13.0461L8.46413 11.9538ZM10.8336 5.83333C10.8336 5.37309 10.4605 5 10.0002 5C9.54 5 9.16691 5.37309 9.16691 5.83333H10.8336ZM9.16691 14.1666C9.1669 14.6269 9.53999 15 10.0002 15C10.4605 15 10.8336 14.6269 10.8336 14.1667L9.16691 14.1666ZM16.6669 10C16.6669 13.6819 13.6821 16.6667 10.0002 16.6667V18.3333C14.6026 18.3333 18.3336 14.6024 18.3336 10H16.6669ZM10.0002 16.6667C6.31834 16.6667 3.33358 13.6819 3.33358 10H1.66691C1.66691 14.6024 5.39787 18.3333 10.0002 18.3333V16.6667ZM3.33358 10C3.33358 6.3181 6.31834 3.33333 10.0002 3.33333V1.66667C5.39787 1.66667 1.66691 5.39763 1.66691 10H3.33358ZM10.0002 3.33333C13.6821 3.33333 16.6669 6.3181 16.6669 10H18.3336C18.3336 5.39763 14.6026 1.66667 10.0002 1.66667V3.33333ZM10.0002 9.16666C9.45146 9.16666 8.99232 9.01687 8.69472 8.81847C8.3913 8.61618 8.33357 8.42825 8.33357 8.33333H6.66691C6.66691 9.15889 7.16883 9.80428 7.77022 10.2052C8.37745 10.61 9.16831 10.8333 10.0002 10.8333V9.16666ZM8.33357 8.33333C8.33357 8.23841 8.3913 8.05048 8.69472 7.84819C8.99232 7.64979 9.45146 7.5 10.0002 7.5V5.83333C9.16831 5.83333 8.37745 6.05663 7.77022 6.46144C7.16883 6.86238 6.66691 7.50777 6.66691 8.33333H8.33357ZM10.0002 7.5C10.7534 7.5 11.3028 7.77692 11.5364 8.04614L12.7952 6.95385C12.1643 6.22674 11.0978 5.83333 10.0002 5.83333V7.5ZM10.0002 10.8333C10.549 10.8333 11.0082 10.9831 11.3058 11.1815C11.6092 11.3838 11.6669 11.5717 11.6669 11.6667H13.3336C13.3336 10.8411 12.8317 10.1957 12.2303 9.79477C11.623 9.38996 10.8322 9.16666 10.0002 9.16666V10.8333ZM9.16691 5.83333V6.66666H10.8336V5.83333H9.16691ZM9.16692 13.3333L9.16691 14.1666L10.8336 14.1667L10.8336 13.3333L9.16692 13.3333ZM10.0003 12.5C9.24711 12.5 8.69773 12.2231 8.46413 11.9538L7.2053 13.0461C7.83621 13.7733 8.90271 14.1667 10.0003 14.1667L10.0003 12.5ZM11.6669 11.6667C11.6669 11.7616 11.6092 11.9495 11.3058 12.1518C11.0082 12.3502 10.549 12.5 10.0003 12.5V14.1667C10.8322 14.1667 11.6231 13.9434 12.2303 13.5385C12.8317 13.1376 13.3336 12.4922 13.3336 11.6667H11.6669ZM9.16691 6.66667L9.16692 13.3333L10.8336 13.3333L10.8336 6.66666L9.16691 6.66667Z"
                                            fill="#697586" />
                                    </svg>

                                </div>
                                <div class="pl-2.5 text-gray-600 dark:text-pricingdarkstudents">
                                    Tiempo completo
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-5">
                        <button
                            class="text-btncomentresply focus:outline-none bg-bgbtngreen rounded-xl px-5 py-2 text-sixteen font-normal font-inter">
                            Postular ahora
                        </button>
                    </div>

                    <div class="pt-16">
                        <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-bold font-inter text-xl ">
                            Acerca de GestiLab

                        </div>
                        <div class="text-txtcommentply dark:text-borderconcours font-normal font-inter text-sixteen pt-6">
                            MayuGo es una plataforma de educación virtual que cuenta con 82
                            cursos grabados y especializaciones síncronas que van dirigidas
                            a interesados de las carreras de administración y diferentes ramas de ingeniería.
                        </div>
                    </div>

                    <div class="pt-16">
                        <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-bold font-inter text-xl ">
                            Requerimientos

                        </div>
                        <div class="text-txtcommentply dark:text-borderconcours font-normal font-inter text-sixteen pt-6">

                            <li>Educación mínima: Técnico
                                2 años de experiencia</li>
                            <li>Disponibilidad de viajar: No</li>
                            <li> Disponibilidad de cambio de residencia: No</li>
                            <li> Personas con discapacidad: Sí</li>


                        </div>
                    </div>
                    <div class="pt-16">
                        <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-bold font-inter text-xl ">
                            Beneficios

                        </div>
                        <div class="text-txtcommentply dark:text-borderconcours font-normal font-inter text-sixteen pt-6">

                            <li> Beneficios legales completos por ley.</li>
                            <li>EPS - Seguro médico privado:</li>
                            <li> Atención ambulatoria y hospitalaria,</li>
                            <li> Atención oncológica,</li>
                            <li>Controles preventivos de enfermedades crónicas,</li>
                            <li>Maternidad,</li>
                            <li>Vacunación,</li>
                            <li>
                                Odontología,</li>
                            <li>Entre otros.</li>


                        </div>
                    </div>

                    <div class="pt-16 pb-8">
                        <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-bold font-inter text-xl ">
                            Beneficios

                        </div>
                        <div class="text-txtcommentply dark:text-borderconcours font-normal font-inter text-sixteen pt-6 list-outside">

                           
                            <li> Trabajar en estrecha colaboración con su equipo para desarrollar features</li>
                           
                           <div>
                            <li class="justify-content-center">
                                Desarrollo de nuevos Themes para WordPress y Plugins  con alta calidad de
                                código
                           
                            </li>
                           </div>
                            <li> Solución de errores y problemas de clientes en un entorno dinámico.</li>
                            <li>Desarrollo de proyectos actuales con responsabilidades y tareas a futuro.</li>
                            <li>Soporte de soluciones entre navegadores en entornos de prueba locales.</li>
                            <li>Deploy, controlar y ser responsable de los cambios en los servidores activos.</li>
                            <li>Soporte en la actualización, mejora y mantención de proyectos en línea.</li>
                            <li>
                                Desarrollo de componentes web  mantenibles y componentes Gutenberg.</li>
                            <li>Planificación del trabajo y gestión de problemas..</li>
                            <li>Control de versiones de código y revisión de bases de código.</li>
                            <li>Uso de administradores de paquetes como Composer y NPM</li>


                        </div>
                       
                    </div>


                </div>


            </div>

        </div>

    </div>

    {{-- <script>
        function tipoboton() {
            return {
                tipo: 0,
                showNow(type) {
                    this.tipo = type
                    console.log(this.tipo)
                },
            }
        }
    </script> --}}

    <script>

var play1 = document.getElementById('play1');
                var icon1 = document.getElementById('icon1');
                var play3 = document.getElementById('play3');
                var icon3 = document.getElementById('icon3');
                var play2= document.getElementById('play2');
                var icon2= document.getElementById('icon2');
                var play4 = document.getElementById('play4');
                var icon4 = document.getElementById('icon4');

                
                play1.addEventListener('click',function(){
                   // icon.classList.remove('hidden');
                    icon1.classList.toggle('hidden');});

                   
                play2.addEventListener('click',function(){
                   // icon.classList.remove('hidden');
                    icon2.classList.toggle('hidden');});

                  
                play3.addEventListener('click',function(){
                   // icon.classList.remove('hidden');
                    icon3.classList.toggle('hidden');});

                    play4.addEventListener('click',function(){
                   // icon.classList.remove('hidden');
                    icon4.classList.toggle('hidden');});
    </script>



@endsection
