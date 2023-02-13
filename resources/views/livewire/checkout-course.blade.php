<div>
    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    @endpush

    <style>
        .contentmygo {
            display: none !important;
        }

        .footeracceso {
            display: none !important;
        }
    </style>

    <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite  flex">
        <div class="containermygo mx-auto flex items-center lg:pr-0 pr-4  justify-between py-7">
            <div class="flex items-center pl-3">
                <div>
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_8032_3169)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M27.203 22.2037V26.5701V27.4261C27.1411 27.4869 27.0787 27.5472 27.0158 27.6069C20.6046 33.689 10.4761 33.4229 4.39342 27.0128C-1.68924 20.6021 -1.42311 10.4752 4.98808 4.39307C11.3987 -1.68904 21.5272 -1.42291 27.6099 4.98721C30.4462 7.97654 31.9022 11.7739 31.9982 15.592L31.9992 15.6277L31.9997 15.6534H31.9992C31.9992 16.5371 31.2829 17.2533 30.3992 17.2533C29.5155 17.2533 28.7992 16.5371 28.7992 15.6534H28.7987C28.7171 12.6059 27.5528 9.57603 25.2883 7.18992C20.4222 2.06192 12.3193 1.84912 7.19073 6.71419C2.06166 11.5798 1.84886 19.6816 6.715 24.8101C11.3294 29.6731 18.8536 30.1157 23.9934 25.9989V18.4H27.203V22.2038V22.2038L27.203 22.2037Z"
                                fill="#0083F5" />
                            <path
                                d="M29.102 22.1021C28.2716 21.7998 27.8434 20.8816 28.1456 20.0512C28.4479 19.2207 29.3661 18.7926 30.1966 19.0948C31.027 19.3971 31.4552 20.3153 31.1529 21.1457C30.8507 21.9762 29.9324 22.4043 29.102 22.1021Z"
                                fill="#33CC66" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M27.2029 18.4H27.1938L27.1933 18.4416C27.1928 18.4554 27.1922 18.4688 27.1917 18.4826L27.1891 18.5232L27.1853 18.5637L27.1811 18.6042L27.1752 18.6437L27.1688 18.6832L27.1613 18.7227L27.1528 18.7616L27.1437 18.8H27.1432L27.1331 18.8384L27.1219 18.8763L27.1096 18.9136L27.0968 18.9504L27.0829 18.9872L27.068 19.023L27.0525 19.0587L27.036 19.0939L27.0189 19.1286H27.0184L27.0008 19.1632L26.9816 19.1968C26.956 19.2416 26.9282 19.2848 26.8984 19.3264L26.876 19.3579L26.8525 19.3883L26.8285 19.4182L26.8035 19.4475L26.7784 19.4763H26.7779L26.7517 19.504C26.7341 19.5227 26.716 19.5409 26.6979 19.5584L26.6696 19.5846L26.6408 19.6102L26.6115 19.6347V19.6352L26.5816 19.6592L26.5512 19.6827L26.5197 19.7051C26.4781 19.7349 26.435 19.7627 26.3902 19.7883L26.3566 19.8069V19.8075L26.3219 19.8251L26.2872 19.8427L26.2521 19.8592L26.2163 19.8747L26.1806 19.8896L26.1437 19.9035L26.1069 19.9163L26.0696 19.9285L26.0317 19.9397L25.9933 19.9499L25.9549 19.9595L25.916 19.968L25.877 19.9755L25.8376 19.9819L25.7976 19.9878L25.757 19.992L25.7165 19.9957L25.676 19.9984L25.6349 20L25.5939 20.0005L25.5523 20C25.5384 19.9995 25.5251 19.9989 25.5112 19.9984L25.4707 19.9957L25.4301 19.992L25.3896 19.9878L25.3501 19.9819L25.3106 19.9755L25.2712 19.968L25.2323 19.9595L25.1938 19.9499L25.1554 19.9397L25.1176 19.9285L25.0802 19.9163L25.0434 19.9035L25.0066 19.8896L24.9708 19.8747L24.9351 19.8592L24.8999 19.8427L24.8653 19.8251H24.8647L24.8306 19.8075V19.8069L24.797 19.7883L24.764 19.7685L24.7309 19.7483L24.6989 19.727L24.6674 19.7051L24.636 19.6827L24.6056 19.6592L24.5757 19.6352V19.6347L24.5464 19.6102L24.5176 19.5846L24.4898 19.5585H24.4893L24.4621 19.5318L24.4354 19.504L24.4093 19.4763L24.3837 19.4475L24.3586 19.4182L24.3346 19.3883L24.3112 19.3579L24.2888 19.3264L24.2669 19.295L24.2456 19.263V19.2624L24.2253 19.2299L24.2056 19.1969L24.1864 19.1633L24.1682 19.1286L24.1512 19.0939L24.1346 19.0588L24.1192 19.023L24.1042 18.9873L24.0904 18.9504L24.0776 18.9136L24.0653 18.8763L24.0541 18.8384L24.044 18.8L24.0344 18.7616L24.0258 18.7227L24.0184 18.6832L24.0119 18.6437L24.0061 18.6043L24.0018 18.5637L23.9981 18.5232L23.9954 18.4827C23.9949 18.4688 23.9944 18.4555 23.9938 18.4416L23.9933 18.4L23.9938 18.3589C23.9944 18.3451 23.9949 18.3317 23.9954 18.3179L23.9981 18.2773L23.9992 18.2624C23.9261 16.5654 22.5165 15.2 20.8024 15.2C19.0418 15.2 17.6018 16.64 17.6018 18.4C17.6018 19.2837 16.8856 20.0005 16.0018 20.0005C15.1181 20.0005 14.4018 19.2837 14.4018 18.4C14.4018 16.64 12.9613 15.2 11.2013 15.2C9.4408 15.2 8.00081 16.64 8.00081 18.4C8.00081 19.2837 7.28454 20.0005 6.40081 20.0005C5.51709 20.0005 4.80082 19.2837 4.80082 18.4H4.80029C4.80029 14.8795 7.68081 11.9995 11.2013 11.9995C13.108 11.9995 14.8264 12.8443 16.0019 14.1782C17.2195 12.7963 18.9581 11.9995 20.8024 11.9995C24.3229 11.9995 27.2029 14.88 27.2029 18.4L27.2029 18.4V18.4Z"
                                fill="#33CC66" />
                        </g>
                        <defs>
                            <clipPath id="clip0_8032_3169">
                                <rect width="31.9998" height="32" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                </div>
                <div class="dark:text-white-100 text-black font-inter font-medium text-sixteen">
                    MayuGo

                </div>
            </div>
            <div
                class="text-txtcommentply dark:text-borderconcours  font-inter font-medium text-sixteen sm:flex hidden">
                ¿Necesitas ayuda con tu compra?
            </div>
        </div>

    </div>
    <div class="  flex-col lg:flex-row flex ">
        
            
        
        {{-- checkizquier py-20 lg:pr-28 pr-4 --}}
        <div class="dark:bg-gray14 lg:w-7/12 w-full bg-whiteheader ">
            <div class="contenidoml   ">
                <div class="pt-20 pb-6 lg:pr-28 pr-4 pl-4">
                    <div class="flex items-center">
                        <div class="dark:border-gray-650 border-bordersec border-b-2 w-4/12">

                        </div>
                        <div class="relative">
                            <div class="h-7 w-7 rounded-full bg-bcklightbuscador  p-2.5">
                                <div class="h-2 w-2 rounded-full bg-white-100 dark:bg-black">

                                </div>
                            </div>
                            <div
                                class="text-bcklightbuscador text-sixteen font-inter font-semibold absolute -left-7 mt-4">
                                Información
                            </div>
                        </div>
                        <div class="dark:border-gray-650 border-bordersec border-b-2 w-4/12">

                        </div>
                        <div class="relative">
                            <div class="h-7 w-7 rounded-full bg-bgprogresb dark:bg-txtnamecomntpkyr p-2.5">
                                <div class="h-2 w-2 rounded-full bg-white-100 dark:bg-black">

                                </div>
                            </div>
                            <div
                                class="absolute dark:text-borderconcours text-txtcommentply  text-sixteen font-inter font-semibold -left-2 mt-4">
                                pago
                            </div>
                        </div>
                        <div class="dark:border-gray-650 border-bordersec border-b-2 w-4/12">

                        </div>
                    </div>

                    <div class="mt-28">
                        <div
                            class="dark:text-bgprogresb text-txtnamecomntpkyr text-center font-inter font-medium text-2xl">
                            Registrate o inicia sesión
                        </div>
                        <div
                            class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen pt-4">
                            Con tu registro/inicio de sesión se activara automáticamente tu curso comprado y podrás
                            acceder de manera permanente.
                        </div>
                        <div class="gap-x-8 w-full flex pt-8">
                            <button
                                class="dark:bg-bgbtngreen bg-bcklightbuscador dark:text-white-100 text-black font-inter font-medium text-lg h-12 rounded-lg w-full focus:outline-none">
                                Iniciar sesión
                            </button>
                            <button
                                class="border border-pricingtextduowhite text-bgbtngreen focus:outline-none font-inter font-medium text-lg h-12 rounded-lg w-full">
                                Registrarme
                            </button>
                        </div>
                    </div>
                </div>

                {{-- <div class=" pt-10 lg:pr-28 pr-4 pl-4">
                    <div class="flex items-center">
                        <div class="dark:border-gray-650 border-bordersec border-b-2 w-4/12">

                        </div>
                        <div class="relative">
                            <div class="h-7 w-7 rounded-full bg-bcklightbuscador  p-2.5">
                                <div class="h-2 w-2 rounded-full bg-white-100 dark:bg-black">

                                </div>
                            </div>
                            <div
                                class="text-bcklightbuscador text-sixteen w-36 font-inter font-semibold absolute -left-10 mt-4">
                                Inicio de sesion
                            </div>
                        </div>
                        <div class="dark:border-gray-650 border-bordersec border-b-2 w-4/12">

                        </div>
                        <div class="relative">
                            <div class="h-7 w-7 rounded-full bg-bcklightbuscador  p-2.5">
                                <div class="h-2 w-2 rounded-full bg-white-100 dark:bg-black">

                                </div>
                            </div>
                            <div
                                class="text-bcklightbuscador text-sixteen font-inter font-semibold absolute -left-2 mt-4">
                                Datos
                            </div>
                        </div>
                        <div class="dark:border-gray-650 border-bordersec border-b-2 w-4/12">

                        </div>
                        <div class="relative">
                            <div class="h-7 w-7 rounded-full bg-bgprogresb dark:bg-txtnamecomntpkyr p-2.5">
                                <div class="h-2 w-2 rounded-full bg-white-100 dark:bg-black">

                                </div>
                            </div>
                            <div
                                class="absolute dark:text-borderconcours text-txtcommentply  text-sixteen font-inter font-semibold -left-2 mt-4">
                                pago
                            </div>
                        </div>
                        <div class="dark:border-gray-650 border-bordersec border-b-2 w-4/12">

                        </div>
                    </div>

                    <div class="pt-28">
                        <div class="text-txtnamecomntpkyr dark:text-bordersec font-inter font-semibold text-2xl">
                            Datos
                        </div>
                        <div class=" grid grid-cols-2 gap-x-8 pt-6">
                            <div>
                                <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                    Nombre
                                </div>
                                <div class="pt-1 relative">
                                    <input type="text"
                                        class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                        placeholder="kanny_eldulce@gmail.com">

                                    <svg class="absolute right-2 -mt-8" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.16699 10.8335L7.50032 14.1668L15.8337 5.8335" stroke="#33CC66"
                                            stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>
                            <div>
                                <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                    Apellidos
                                </div>
                                <div class="pt-1 relative">
                                    <input type="text"
                                        class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                        placeholder="kanny_eldulce@gmail.com">

                                    <svg class="absolute right-2 -mt-8" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.16699 10.8335L7.50032 14.1668L15.8337 5.8335" stroke="#33CC66"
                                            stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </div>
                            </div>

                        </div>
                        <div class="pt-6">
                            <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                Email
                            </div>
                            <div class="pt-1 relative">
                                <input type="text"
                                    class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                    placeholder="kanny_eldulce@gmail.com">

                                <svg class="absolute right-2 -mt-8" width="20" height="20"
                                    viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.16699 10.8335L7.50032 14.1668L15.8337 5.8335" stroke="#33CC66"
                                        stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                            </div>
                        </div>
                        <div class="pt-6">
                            <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                Teléfono
                            </div>
                            <div class="pt-1 ">
                                <input type="text"
                                    class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                    placeholder="kanny_eldulce@gmail.com">



                            </div>
                        </div>
                        <div class="pt-6">
                            <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                Ciudad
                            </div>
                            <div class="pt-1 ">
                                <input type="text"
                                    class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                    placeholder="kanny_eldulce@gmail.com">



                            </div>
                        </div>
                        <div class="pt-6">
                            <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                Dirección
                            </div>
                            <div class="pt-1 ">
                                <input type="text"
                                    class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                    placeholder="kanny_eldulce@gmail.com">



                            </div>
                        </div>
                        <div class=" flex justify-between pt-8 pb-10">
                            <button
                                class="border border-checkpricingdark text-bgbtngreen focus:outline-none font-inter font-medium text-lg h-12 rounded-lg px-6 ">
                                Volver
                            </button>
                            <button
                                class="dark:bg-bgbtngreen bg-bcklightbuscador text-white-100 dark:text-black  font-inter font-medium text-lg h-12 rounded-lg px-6  focus:outline-none">
                                Siguiente
                            </button>

                        </div>
                    </div>
                </div> --}}
                <div class="pt-8 pb-20 lg:pr-28 pr-4 pl-4">
                    <div>
                        <div class="hidden">
                            <div role="tablist" aria-label="tabs"
                                class="relative  w-max mx-auto h-12 grid grid-cols-3 items-center px-[3px] rounded-full bg-gray-900/20 overflow-hidden shadow-2xl shadow-900/20 transition">
                                <div
                                    class="absolute indicator h-11 my-auto top-0 bottom-0 left-0 rounded-full bg-white shadow-md">
                                </div>
                                <button role="tab" aria-selected="true" aria-controls="panel-1" id="tab-1"
                                    tabindex="0" class="relative block h-10 px-6 tab rounded-full">
                                    <span class="text-gray-800">First Tab</span>
                                </button>
                                <button role="tab" aria-selected="false" aria-controls="panel-2" id="tab-2"
                                    tabindex="-1" class="relative block h-10 px-6 tab rounded-full">
                                    <span class="text-gray-800">Second Tab</span>
                                </button>
                                <button role="tab" aria-selected="false" aria-controls="panel-3" id="tab-3"
                                    tabindex="-1" class="relative block h-10 px-6 tab rounded-full">
                                    <span class="text-gray-800">Third Tab</span>
                                </button>
                            </div>
                        </div>
                        <div class="mt-6 relative rounded-3xl bg-purple-50">
                            <div role="tabpanel" id="panel-1" class="tab-panel transition duration-300">
                                <div class=" pt-10 ">
                                    <div class="flex items-center">
                                        <div class="dark:border-gray-650 border-bordersec border-b-2 w-4/12">

                                        </div>
                                        <div class="relative">
                                            <div class="h-7 w-7 rounded-full bg-bcklightbuscador  p-2.5">
                                                <div class="h-2 w-2 rounded-full bg-white-100 dark:bg-black">

                                                </div>
                                            </div>
                                            <div
                                                class="text-bcklightbuscador text-sixteen w-36 font-inter font-semibold absolute -left-10 mt-4">
                                                Inicio de sesion
                                            </div>
                                        </div>
                                        <div class="dark:border-gray-650 border-bordersec border-b-2 w-4/12">

                                        </div>
                                        <div class="relative">
                                            <div class="h-7 w-7 rounded-full bg-bcklightbuscador  p-2.5">
                                                <div class="h-2 w-2 rounded-full bg-white-100 dark:bg-black">

                                                </div>
                                            </div>
                                            <div
                                                class="text-bcklightbuscador text-sixteen font-inter font-semibold absolute -left-2 mt-4">
                                                Datos
                                            </div>
                                        </div>
                                        <div class="dark:border-gray-650 border-bordersec border-b-2 w-4/12">

                                        </div>
                                        <div class="relative">
                                            <div
                                                class="h-7 w-7 rounded-full bg-bgprogresb dark:bg-txtnamecomntpkyr p-2.5">
                                                <div class="h-2 w-2 rounded-full bg-white-100 dark:bg-black">

                                                </div>
                                            </div>
                                            <div
                                                class="absolute dark:text-borderconcours text-txtcommentply  text-sixteen font-inter font-semibold -left-2 mt-4">
                                                pago
                                            </div>
                                        </div>
                                        <div class="dark:border-gray-650 border-bordersec border-b-2 w-4/12">

                                        </div>
                                    </div>

                                    <div class="pt-28">
                                        <div
                                            class="text-txtnamecomntpkyr dark:text-bordersec font-inter font-semibold text-2xl">
                                            Datos
                                        </div>
                                        <div class=" grid grid-cols-2 gap-x-8 pt-6">
                                            <div>
                                                <div
                                                    class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                                    Nombre
                                                </div>
                                                <div class="pt-1 relative">
                                                    <input type="text"
                                                        class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                                        placeholder="kanny_eldulce@gmail.com">

                                                    <svg class="absolute right-2 -mt-8" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.16699 10.8335L7.50032 14.1668L15.8337 5.8335"
                                                            stroke="#33CC66" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                            </div>
                                            <div>
                                                <div
                                                    class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                                    Apellidos
                                                </div>
                                                <div class="pt-1 relative">
                                                    <input type="text"
                                                        class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                                        placeholder="kanny_eldulce@gmail.com">

                                                    <svg class="absolute right-2 -mt-8" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.16699 10.8335L7.50032 14.1668L15.8337 5.8335"
                                                            stroke="#33CC66" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="pt-6">
                                            <div
                                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                                Email
                                            </div>
                                            <div class="pt-1 relative">
                                                <input type="text"
                                                    class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                                    placeholder="kanny_eldulce@gmail.com">

                                                <svg class="absolute right-2 -mt-8" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M4.16699 10.8335L7.50032 14.1668L15.8337 5.8335"
                                                        stroke="#33CC66" stroke-width="1.66667"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                            </div>
                                        </div>
                                        <div class="pt-6">
                                            <div
                                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                                Teléfono
                                            </div>
                                            <div class="pt-1 ">
                                                <input type="text"
                                                    class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                                    placeholder="kanny_eldulce@gmail.com">



                                            </div>
                                        </div>
                                        <div class="pt-6">
                                            <div
                                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                                Ciudad
                                            </div>
                                            <div class="pt-1 ">
                                                <input type="text"
                                                    class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                                    placeholder="kanny_eldulce@gmail.com">



                                            </div>
                                        </div>
                                        <div class="pt-6">
                                            <div
                                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                                Dirección
                                            </div>
                                            <div class="pt-1 ">
                                                <input type="text"
                                                    class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                                    placeholder="kanny_eldulce@gmail.com">



                                            </div>
                                        </div>
                                        <div class=" flex justify-between pt-8 pb-10">
                                            <button
                                                class="border border-checkpricingdark text-bgbtngreen focus:outline-none font-inter font-medium text-lg h-12 rounded-lg px-6 ">
                                                Volver
                                            </button>
                                            <button role="tab" aria-selected="false" aria-controls="panel-2"
                                                id="tab-2" tabindex="-1"
                                                class="dark:bg-bgbtngreen tab bg-bcklightbuscador text-white-100 dark:text-black  font-inter font-medium text-lg h-12 rounded-lg px-6  focus:outline-none">
                                                Siguiente
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" id="panel-2"
                                class="absolute w-full top-0 invisible opacity-0 tab-panel  transition duration-300">

                                <div>
                                    <div id="listconte">
                                        <div class="flex items-center pb-28 pt-10">
                                            <div class="border-bcklightbuscador border-b-2 w-4/12">

                                            </div>
                                            <div class="relative  ">
                                                <div class=" ">

                                                    <svg width="32" height="32" viewBox="0 0 32 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_7862_282044)">
                                                            <rect width="32" height="32" rx="16"
                                                                fill="#29A352" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M22.7953 9.85322L13.2487 19.0666L10.7153 16.3599C10.2487 15.9199 9.51534 15.8932 8.982 16.2666C8.462 16.6532 8.31534 17.3332 8.63534 17.8799L11.6353 22.7599C11.9287 23.2132 12.4353 23.4932 13.0087 23.4932C13.5553 23.4932 14.0753 23.2132 14.3687 22.7599C14.8487 22.1332 24.0087 11.2132 24.0087 11.2132C25.2087 9.98655 23.7553 8.90655 22.7953 9.83989V9.85322Z"
                                                                fill="white" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_7862_282044">
                                                                <rect width="32" height="32" rx="16"
                                                                    fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>



                                                </div>
                                                <div
                                                    class="text-bcklightbuscador text-sixteen font-inter font-semibold absolute -left-10 mt-4 w-32">
                                                    Inicio de Sesion
                                                </div>
                                            </div>
                                            <div class=" border-bcklightbuscador border-b-2 w-4/12">

                                            </div>




                                            <div class="relative  ">
                                                <div class=" ">

                                                    <svg width="32" height="32" viewBox="0 0 32 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_7862_282044)">
                                                            <rect width="32" height="32" rx="16"
                                                                fill="#29A352" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M22.7953 9.85322L13.2487 19.0666L10.7153 16.3599C10.2487 15.9199 9.51534 15.8932 8.982 16.2666C8.462 16.6532 8.31534 17.3332 8.63534 17.8799L11.6353 22.7599C11.9287 23.2132 12.4353 23.4932 13.0087 23.4932C13.5553 23.4932 14.0753 23.2132 14.3687 22.7599C14.8487 22.1332 24.0087 11.2132 24.0087 11.2132C25.2087 9.98655 23.7553 8.90655 22.7953 9.83989V9.85322Z"
                                                                fill="white" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_7862_282044">
                                                                <rect width="32" height="32" rx="16"
                                                                    fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>



                                                </div>
                                                <div
                                                    class="text-bcklightbuscador text-sixteen font-inter font-semibold absolute -left-2 mt-4">
                                                    Datos
                                                </div>
                                            </div>


                                            <div class="flex w-4/12">
                                                <div class=" border-bcklightbuscador border-b-2 w-8/12"></div>
                                                <div class=" dark:border-gray-650 border-bordersec border-b-2 w-8/12">
                                                </div>

                                            </div>





                                            <div class="relative">
                                                <div
                                                    class="h-7 w-7 rounded-full bg-bgprogresb dark:bg-txtnamecomntpkyr p-2.5">
                                                    <div class="h-2 w-2 rounded-full bg-white-100 dark:bg-black">

                                                    </div>
                                                </div>
                                                <div
                                                    class="absolute dark:text-borderconcours text-txtcommentply  text-sixteen font-inter font-semibold -left-2 mt-4">
                                                    pago
                                                </div>
                                            </div>
                                            <div class="dark:border-gray-650 border-bordersec border-b-2 w-4/12">

                                            </div>
                                        </div>
                                        <div
                                            class="text-txtnamecomntpkyr dark:text-bordersec font-inter font-semibold text-2xl">

                                            Métodos de pago
                                        </div>
                                        <div
                                            class="absolute reference h-11 my-auto w-full top-0 bottom-0 left-0 rounded-full bg-white ">
                                        </div>
                                        <button role="tab" aria-selected="true" aria-controls="panel-5"
                                            id="tab-5" tabindex="0"
                                            class=" aply justify-between tabor mt-6 focus:outline-none items-center w-full flex cursor-pointer  p-4 rounded-lg dark:bg-pricingcintadark bg-bgfondopricingwhite">
                                            <div class="flex items-center">
                                                <div
                                                    class="w-4 h-4 rounded-full dark:bg-black dark:border-txtcommentply bg-white-100  border-checoption border">

                                                </div>
                                                <div
                                                    class="pl-2 dark:text-borderconcours font-inter font-medium text-sixteen text-txtcommentply">
                                                    Tarjeta de crédito / débito
                                                </div>
                                            </div>

                                            <div>
                                                <svg width="129" height="24" viewBox="0 0 129 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.5" y="0.5" width="34"
                                                        height="23" rx="3.5" fill="white"
                                                        stroke="#E3E8EF" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17.75 17.1569C16.5584 18.1852 15.0128 18.806 13.3238 18.806C9.55511 18.806 6.5 15.7154 6.5 11.903C6.5 8.09057 9.55511 5 13.3238 5C15.0128 5 16.5584 5.62075 17.75 6.64903C18.9416 5.62075 20.4872 5 22.1762 5C25.9449 5 29 8.09057 29 11.903C29 15.7154 25.9449 18.806 22.1762 18.806C20.4872 18.806 18.9416 18.1852 17.75 17.1569Z"
                                                        fill="#ED0006" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17.75 17.1569C19.2172 15.8908 20.1475 14.0068 20.1475 11.903C20.1475 9.79917 19.2172 7.91517 17.75 6.64903C18.9416 5.62075 20.4872 5 22.1762 5C25.9449 5 29 8.09057 29 11.903C29 15.7154 25.9449 18.806 22.1762 18.806C20.4872 18.806 18.9416 18.1852 17.75 17.1569Z"
                                                        fill="#F9A000" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M17.75 6.64893C19.2172 7.91506 20.1476 9.79905 20.1476 11.9029C20.1476 14.0067 19.2172 15.8906 17.75 17.1568C16.2829 15.8906 15.3525 14.0067 15.3525 11.9029C15.3525 9.79905 16.2829 7.91506 17.75 6.64893Z"
                                                        fill="#FF5E00" />
                                                    <rect x="47.5" y="0.5" width="34"
                                                        height="23" rx="3.5" fill="#1F72CD"
                                                        stroke="#E3E8EF" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M53.6811 8.5L50.5 15.7467H54.3082L54.7803 14.5913H55.8595L56.3316 15.7467H60.5234V14.8649L60.8969 15.7467H63.0652L63.4387 14.8462V15.7467H72.1566L73.2166 14.6213L74.2092 15.7467L78.6868 15.7561L75.4957 12.1436L78.6868 8.5H74.2786L73.2467 9.60463L72.2854 8.5H62.8016L61.9872 10.3704L61.1537 8.5H57.3534V9.35186L56.9307 8.5H53.6811ZM66.6994 9.52905H71.7055L73.2367 11.2316L74.8172 9.52905H76.3484L74.0219 12.1426L76.3484 14.726H74.7477L73.2166 13.0036L71.628 14.726H66.6994V9.52905ZM67.9356 11.555V10.6057V10.6048H71.0593L72.4223 12.1229L70.9989 13.6493H67.9356V12.613H70.6667V11.555H67.9356ZM54.418 9.52905H56.2743L58.3843 14.4431V9.52905H60.4178L62.0476 13.0524L63.5496 9.52905H65.573V14.7291H64.3418L64.3317 10.6544L62.5368 14.7291H61.4355L59.6305 10.6544V14.7291H57.0977L56.6176 13.5633H54.0234L53.5442 14.728H52.1872L54.418 9.52905ZM54.4663 12.4856L55.321 10.4089L56.1747 12.4856H54.4663Z"
                                                        fill="white" />
                                                    <rect x="94.5" y="0.5" width="34"
                                                        height="23" rx="3.5" fill="white"
                                                        stroke="#E3E8EF" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M104.625 16.2582H102.505L100.915 10.1924C100.839 9.91334 100.679 9.66667 100.444 9.5504C99.8553 9.25823 99.2071 9.0257 98.5 8.90843V8.6749H101.916C102.387 8.6749 102.741 9.0257 102.8 9.43313L103.625 13.8086L105.744 8.6749H107.805L104.625 16.2582ZM108.984 16.2582H106.981L108.63 8.6749H110.633L108.984 16.2582ZM113.223 10.7757C113.282 10.3673 113.636 10.1337 114.048 10.1337C114.697 10.0751 115.403 10.1924 115.992 10.4835L116.345 8.85081C115.756 8.61727 115.108 8.5 114.52 8.5C112.576 8.5 111.162 9.55041 111.162 11.0082C111.162 12.1173 112.164 12.6996 112.871 13.0504C113.636 13.4002 113.93 13.6338 113.872 13.9835C113.872 14.5082 113.282 14.7418 112.694 14.7418C111.987 14.7418 111.28 14.5669 110.633 14.2747L110.279 15.9085C110.986 16.1996 111.751 16.3169 112.458 16.3169C114.638 16.3745 115.992 15.3251 115.992 13.75C115.992 11.7665 113.223 11.6502 113.223 10.7757ZM123 16.2582L121.41 8.6749H119.702C119.349 8.6749 118.995 8.90843 118.877 9.25823L115.933 16.2582H117.994L118.406 15.1502H120.939L121.174 16.2582H123ZM119.997 10.7171L120.585 13.5751H118.936L119.997 10.7171Z"
                                                        fill="#172B85" />
                                                </svg>


                                            </div>
                                        </button>

                                        <button role="tab" aria-selected="false" aria-controls="panel-6"
                                            id="tab-6" tabindex="-1"
                                            class="justify-between aply tabor mt-6 focus:outline-none items-center w-full flex cursor-pointer  p-4 rounded-lg dark:bg-pricingcintadark bg-bgfondopricingwhite">
                                            <div class="flex items-center">
                                                <div
                                                    class="w-4 h-4 rounded-full dark:bg-black dark:border-txtcommentply bg-white-100  border-checoption border">

                                                </div>
                                                <div
                                                    class="pl-2 dark:text-borderconcours font-inter font-medium text-sixteen text-txtcommentply">
                                                    PayPal
                                                </div>
                                            </div>

                                            <div>
                                                <svg width="76" height="22" viewBox="0 0 76 22"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M69.8794 16.7129L72.2997 1.31329C72.3369 1.07425 72.544 0.898259 72.7846 0.897461H75.5094C75.8103 0.897461 76.0414 1.16723 75.9939 1.46573L73.6071 16.588C73.5448 16.9871 73.2016 17.2804 72.7974 17.2804H70.3639C70.063 17.2804 69.8319 17.0114 69.8794 16.7129ZM51.3431 0.89826H45.4445C45.0418 0.89826 44.6986 1.19157 44.6356 1.58984L42.2503 16.7129C42.2029 17.0114 42.4339 17.2804 42.7352 17.2804H45.7617C46.0431 17.2804 46.2837 17.0753 46.3276 16.7959L47.0044 12.5091C47.0667 12.1097 47.4107 11.8168 47.8133 11.8168H49.6794C53.5651 11.8168 55.8067 9.93674 56.3929 6.21145C56.6575 4.58165 56.4033 3.30104 55.6403 2.40394C54.8026 1.41944 53.3169 0.89826 51.3431 0.89826ZM52.0235 6.42175C51.7019 8.53801 50.0848 8.53801 48.5205 8.53801H47.6314L48.2567 4.58564C48.2938 4.347 48.4989 4.17101 48.7412 4.17101H49.149C50.2133 4.17101 51.219 4.17101 51.7378 4.77799C52.0475 5.14035 52.1416 5.67829 52.0235 6.42175ZM68.9707 6.35391H66.1485C65.9059 6.35391 65.7 6.5299 65.6636 6.76894L65.5387 7.5587L65.3404 7.27257C64.729 6.38504 63.3666 6.08853 62.0058 6.08853C58.8847 6.08853 56.2201 8.45221 55.7009 11.7681C55.4319 13.4218 55.8139 15.0033 56.7521 16.1063C57.6145 17.1204 58.8444 17.543 60.3094 17.543C62.8239 17.543 64.2182 15.9259 64.2182 15.9259L64.0925 16.7109C64.045 17.011 64.2761 17.28 64.579 17.28H67.1218C67.5245 17.28 67.8677 16.9867 67.9307 16.5876L69.458 6.92139C69.5047 6.62408 69.2736 6.35391 68.9707 6.35391ZM65.0343 11.8507C64.7634 13.4641 63.4811 14.5472 61.8478 14.5472C61.0293 14.5472 60.3724 14.2842 59.9514 13.7858C59.534 13.2909 59.3771 12.5862 59.5084 11.8016C59.7642 10.2017 61.0648 9.08354 62.673 9.08354C63.4752 9.08354 64.1268 9.34971 64.5566 9.85254C64.9884 10.3605 65.1592 11.0693 65.0343 11.8507Z"
                                                        fill="#179BD7" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.27745 0.898438H3.37991C2.97634 0.898438 2.6331 1.19175 2.57017 1.59002L0.184898 16.7131C0.137488 17.0116 0.368591 17.2806 0.671283 17.2806H3.48683C3.8904 17.2806 4.23364 16.9872 4.29657 16.5882L4.93991 12.5093C5.00196 12.1098 5.34604 11.8169 5.74878 11.8169H7.61574C11.5007 11.8169 13.7426 9.93692 14.3285 6.21162C14.5922 4.58183 14.3396 3.30122 13.5762 2.40412C12.7382 1.41962 11.2512 0.898438 9.27745 0.898438ZM9.95786 6.42193C9.63542 8.53819 8.01848 8.53819 6.45505 8.53819H5.56509L6.18943 4.58582C6.2265 4.34718 6.43346 4.17119 6.67493 4.17119H7.08282C8.14781 4.17119 9.15255 4.17119 9.67173 4.77817C9.98101 5.14052 10.076 5.67847 9.95786 6.42193ZM26.9067 6.35409H24.0825C23.8418 6.35409 23.6339 6.53008 23.5968 6.76912L23.4719 7.55888L23.2744 7.27274C22.663 6.38522 21.2998 6.08871 19.9389 6.08871C16.8178 6.08871 14.1525 8.45239 13.6333 11.7682C13.3635 13.422 13.747 15.0035 14.6852 16.1065C15.546 17.1205 16.7775 17.5431 18.2425 17.5431C20.757 17.5431 22.1518 15.9261 22.1518 15.9261L22.0257 16.7111C21.9782 17.0112 22.2092 17.2802 22.5101 17.2802H25.0542C25.4588 17.2802 25.8 16.9868 25.8639 16.5878L27.3903 6.92157C27.4386 6.62426 27.2084 6.35409 26.9067 6.35409ZM22.9699 11.8508C22.6973 13.4643 21.4167 14.5473 19.7837 14.5473C18.9636 14.5473 18.308 14.2844 17.8873 13.7859C17.4699 13.2911 17.3111 12.5863 17.444 11.8018C17.6986 10.2019 19.0007 9.08371 20.609 9.08371C21.4107 9.08371 22.0628 9.34989 22.4922 9.85271C22.9224 10.3607 23.0932 11.0695 22.9699 11.8508ZM39.1098 6.35369H41.9479C42.3454 6.35369 42.5773 6.79945 42.3514 7.12549L32.9122 20.7505C32.7594 20.9711 32.5076 21.1024 32.2386 21.1024H29.404C29.005 21.1024 28.7719 20.6531 29.003 20.3262L31.9421 16.1775L28.8162 7.00377C28.7081 6.68492 28.9435 6.35369 29.2827 6.35369H32.0714C32.4338 6.35369 32.7534 6.59154 32.858 6.93833L34.5169 12.479L38.4313 6.71325C38.5846 6.48818 38.8392 6.35369 39.1098 6.35369Z"
                                                        fill="#253B80" />
                                                </svg>

                                            </div>
                                        </button>

                                        <button role="tab" aria-selected="false" aria-controls="panel-7"
                                            id="tab-7" tabindex="-1"
                                            class="justify-between aply focus:outline-none tabor mt-6 items-center w-full flex cursor-pointer  p-4 rounded-lg dark:bg-pricingcintadark bg-bgfondopricingwhite">

                                            <div class="flex items-center">
                                                <div
                                                    class="w-4 h-4 rounded-full dark:bg-black dark:border-txtcommentply bg-white-100  border-checoption border">

                                                </div>
                                                <div
                                                    class="pl-2 dark:text-borderconcours font-inter font-medium text-sixteen text-txtcommentply">
                                                    Transferencia
                                                </div>
                                            </div>

                                            <div>
                                                <svg width="36" height="25" viewBox="0 0 36 25"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <rect x="1.24515" y="0.252962" width="34.5045"
                                                        height="23.5031" rx="2.75036" fill="white"
                                                        stroke="#E3E8EF" stroke-width="0.500065" />
                                                    <path d="M11.7539 4.50439H25.2418V19.5048H11.7539V4.50439Z"
                                                        fill="url(#pattern0)" />
                                                    <defs>
                                                        <pattern id="pattern0"
                                                            patternContentUnits="objectBoundingBox" width="1"
                                                            height="1">
                                                            <use xlink:href="#image0_7979_283377"
                                                                transform="translate(-0.0208333) scale(0.00220226 0.0019802)" />
                                                        </pattern>
                                                        <image id="image0_7979_283377" width="473" height="505"
                                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAdkAAAH5CAYAAADN60Q0AAAgAElEQVR4nO3dbXBc133n+d+5/UA8kCYck3YolUhWJSKpqq0lRcqkpRJDpiYrZxIpovJqJXlDZiqSyrOTkLGyqc3TCko0yWQd2/R4xilbmTHlWkfZZGtNr5xUxplZg2WlaDArCRpXaizKjkHaFCU+ggABgkD3Pfui0WSjbwPoh/tw7r3fT5UtiQRwLsjG/fX53/85xwhtsW8MDWm2suPWL5jqDhkztPiD7IRsYezWf/cVx8y9ExOxXSQAwCkm6QtwjT01uEPSDlm7WTL7JbtZ0qYev+wZyYzLaEy+Py5bGDP3Xx8J4XIBAA7Lfcjak32bZcwBGbNf0n5Ja2Mc/k0ZMyJpTKXScWa9AJAtuQzZhmA9JGl70tfT4E1Jx2XMcbN7emzFjwYAOC1XIWtPDR6StUfkVrAu5YykY/L9Y+b+2fGkLwYA0LnMh6x9Y2hIc3NHJB1RvKXgMH1NxhynpAwA6ZLZkM1IuLbytYVy8rGkLwQAsLxMhqwdHRhW9sK12TVJx+V7x+hUBgA3ZSpk7cnV++X5x9T7kpu0OSNjjks6RsMUALgjEyFr3xga0vz8sKw9nPS1OOBNWXtM1h6nYQoAkpX6kM3x7LUdPL8FgASlOmQXnr0+l/R1pEDt+a0xRyknA0B8UhmyC53DxyQ9mvS1pNAZWXuUcjIARC91IWtP9m2W5x1XOjaUcB3lZACIUKpC1p4a3CFrR5TtpTlJoJwMABFITcgSsLGpdSevWnWM3aUAoDepCFkCNjEvsdkFAHTP+ZAlYJ1AsxQAdMHpkCVgnfQ1ScfMnpnjSV8IALjO2ZBd6CIeEwHrKo7iA4AVOBmyC+tgR8QynbRgdgsALbgZsqcGj7IPcSrVnt3SmQwAkhwM2YW9iL+Z9HWgZ3QmA8g9p0J2oUw8Jjb7z5IzMmZYpdJxZrcA8sZL+gIWmZ8fFgGbNZtk7Zc0NzduRweO2ZN9m5O+IACIizMz2YVu4h8kfR2Igzkho2PsmQwg69wJ2dHBEcnuS/o6EKvaMqBy+SilZABZ5ETI0uwESS9xQAGArHEjZJnF4hZKyQCyI/GQZRaLJVBKBpB6yYcss1isjFIygFRKNGQXDgB4I8lrQJqYE5I9yvaNANIi2ZAdHTgm6WCS14BUYvtGAKmQWMgu7O50NanxkQnXZMwxVatHOQkIgIuS2/Hp5s1DiY2NrFgraw/L835gRweO2VODO5K+IABolNxMdnRgXGyhiNDx3BaAOxIJWZbtIAZnZMww620BJCmZcrHnUypG1DbJ2i/Z0YEJOzowbN8YGkr6ggDkTzIz2dGBCUlrkxgbuXVN0nH5/jBNUgDiEnvI2tGBA5K+Gve4QAM2twAQiyTKxZSKkbSDsvYNOzo4Yk+u3p/0xQDIrlhnsqyNhZs4lABANOKdyc7PH4h1PKAtdt9Ck9S4PTVIpQVAaOINWWspzcFlm26F7bf7j9CRDKBX8ZaL6SpGulyTdJTj9gB0K7aQpasYKUbYAuhKfOViYygVI63WSnpOc3Pj9tTgUXuyb3PSFwQgHeKcybJXMbLkJTa2ALCSWELWnuzbLM/7QRxjATEjbAEsKZ5ysTEs3UFWHbx11B5lZABN4gpZnsci6whbAAHxlItZuoP8oYwMIPqQtacGd8jaN6IeB3AUYQvkWPTlYt+nVIw8o4wM5Fj0IcvzWEAibIFcir5czPNYoBXKyEAORBqy9uTq/fL8b0Y5BpByhC2QYdGWiz2exwIroIwMZFjUz2R3RPz1gawgbIEMirZczPNYoBuc+gNkRGQhy37FQM8IWyDloisXex6lYqA3t4/YGx0Ytm8MDSV9QQA6E13Isj4WCEs9bMfsqcFDSV8MgPZFF7KWpicgZJtk7Zfs6MA4YQukQ3TPZEcHbFRfG4Ak6U353hFz//WRpC8EQGuRhCyHAgBxMifkm2HCFnBPVOViSsVAbOw+ef437ejAcdbYAm4hZIHseJQNLQC3RBOyND0BSToozxtj2Q+QvGieydL0BLjimqwdNh+5cTTpCwHyKPSQpekJcNIZGTNsdk8fS/pCgDyJolxMqRhwz8Ia28ERe3I1G8UAMSFkgVyhExmIU/ghS9MTkAa1TuRTg0dpjgKiE8FM1hKyQFpYe7h+AEHSlwJkUaiNTxxvB6QazVFAyMKdyXK8HZBmNEcBIQu7XEzIAql3qzmKnaOAHoUcspwhC2QIO0cBPQr3mezowIRqB0wDyJZrMuYIz2uBzoQWsvaNoSHNzV0N6+sBcBJn2AIdCK9cPFvheSyQfdt5Xgu0L7yQ9XyexwL5wfNaoA1hNj4xkwXyZa2k5zQ3N2ZHBw4kfTGAiwhZAL3aJOmrdnRwxJ4a5D4ANAil8YmmJwC3GPNZlUrD5t6JiaQvBUhaODNZmp4A1NX3Q/52/5GkLwVIWjgha6qELIBGa2XMZ+zowBhbNCLPQgpZQ8gCaOX2kh+6kJFDYTU+EbIAlnOQEjLyKJzGp9EBG8bXAZALZ+R7h9g1CnnQc8jaU4M7ZO0bYVwMgFz5mnz/iLl/djzpCwGiEka5mFIxgG48Ks8bo4SMLOs9ZK1l/1IA3aILGZkWwkyWM2QB9IwuZGRSCCFrKRcDCAtdyMiUnhqf2E4RQHTMCRkdMbunx5K+EqBbvc1k2U4RQGTsPln7hj01eJQSMtKqt5BlO0UAUavthcxxekilHkOW7RQBxOL2cXon+1jRgNTosfHJ8GIHECO7T543ZkcHhpO+EqAdvTU+sZ0igOS8Kd87wvaMcFnXIWtP9m2W5/0gzIsBgI5xSDwc1kO5uEipGEDy6ofE0xgFB3Ufsp7PTk8AXLFW0lft6MBxGqPgkl4an3ghA3ANhw7AKT2ELJ3FAJy0cOjA4Ig9NcgyQySqh5C1+8K7DAAI28KOUSz3QYK66i6msxhAypyR7x1iuQ/i1uVMls5iAKmySZ7/TfZBRty6C1k6iwGkEfsgI2bdPpNlJgsgrRb2QR44zqwWUesyZOksBpB6j7KJBaLWXePT6MCEaou/ASALvqZy+RBbMyJsHc9kF8orBCyALKnNak8NHkr6QpAtnZeLZyss7gaQRWtl7Zc4sxZh6jxkTZWQBZBhC2fWsjUjQtBFyBq68QBk3e2tGZnVogdddBcb1sgCyAlmtehNx93FdnRgXLV1ZgCQI+aE/Oohc//seNJXgvToZp0sAQsgh5jVonMdzWTtqcEdsvaNqC4GANKBWS3a09lMtkrTEwDcmtWyWxRWUOzoozkYABk3dtrXxHXb9eePv2M1fn7lz9+8wWjzHcsXkjZv8LR5Q1ebsiEea1XbA5ndorCkzkKWgwGQoIkpq7G3/UW/NnbaamJqcaiNn7caP7/44+pOvN7619Ni+92ehtbU/n1otdGOLbVi1NAaox1baoG8425PQ2sI5xjV90A+ZPbMHE/6YuCWzp7Jjg6OSHZfVBeDfGgMweaZ38jr1Vv/PjElvfl2ukMxSWtX14K3Hsb1IGaGHClmtVikw5DlYAC01hicI6/V/tk48xx/x+rMu92XYV3keV7Lf2/13818P/jmofHXWv1+2LbfXQvbHVs87dhy+9/RszPyvUPm/usjSV8IktdpyGbrLom21AN0Yqr2zFK6PeMcO211rYdnmK6ph2OrADXGdHdsVY+sJGvtreBt/mfY9u30tONu71b4ErxdMuazKpWGmdXmW9v3DHty9X55/jejvBgkZ+y0r/Hzttb4szADzdLss1Vo3vqnSXfp1Le1vyPf9yML4H07Pe3fWdD+XbV/om1nZMwBs3t6LOkLQTLaD9laq/pXI7wWxGRiymrkdV8jr1U18rqf+ueeWQ7QXlhJ1Wqt4tAYwGEgdDv2vNkzM5z0RSB+nYTssKTnIrwWRGzk9aqOfb2ql/66kvSldCQQnARo16II3rWrjfbv9HRgX0H7dxVoqlramzLmELPafGk/ZE8NHpW1h6O8GERj5PWqhl+cd3b5SqsQTer5Zx75C897wwrd7Xd7OvRwUQf2EbgtXJO1w+YjN44mfSGIRwczWZbvpNGRT8/ps/9nsjNXQjRd6rPdMEKXwF2KOaFy6QBNUdnXSbmY03dSZv/HZ2OZvRKi2RZW6D76UwUd2FfQoYc73QMns65JYgOLjOskZLPRZpoTh35/LrRnr4QoGvVaXl672ujQzxd05PESs9ual1QuH2FWm01tvcI5fSddjp+o6rHfvNnz1/E8T+VSKYQrQpZVepjlPvpTBR15vEiHMkt9Mqu9kGWNbGpMTFltPjAbygYRq1atYraKjtRnuZVKZ1WU7Xd7OvI/Fikls9Qnc9rbysVUd0R8HQjJsb+uhhKwxWKRgEXHPGNULBTUt2qVVq1apWKxuOIWk1Jtj+pf/oM5bX70ho59PV1LzEL2nB0dHLEn+ziMJSPaDFnOkU2Loy/P9/w1PM9TsZD78h16ZCQVCwWVS6W2A/fMu5aw5azaTGlzU1LDObIpMHbaD2UbxBLPYRGyTgO3Hrb7Pz676GSmHKmfVXvMvjHEJCfF2Pk7Q0ZCWK5TLpcpEyNSnQTuidd9/fTHb+rQ788tOhIxRw5qbm7MnhrkkV1KtRmybEKRBvUTcrpVLBbZqhCxahW4rbz01xXt+Nisjv5FLkvIm2TtGwtb2yJl2usuZo1sKuz42GzXm/2zXAcuqW+A0apLefvdno79b+WcHsHHTlFps+Kr1J5czfPYlOjlNB2ew3bv8Ydyv+wkdPUZbt+qVSqXy4vKyW++7eve/2lWwy/23uSXPnaf5ubGaYpKj5XfCno+D91ToJfmEJbr9ObhvQV94knepETFM6ZlOfn5P5vX/o/P5vFZba0p6tQghwykQDv1Fh64p8DY6e5uNCzX6d3WjUZPPFTQww8yo41Sq9ntidd97fjYrI6fyGEHsrWH7ejAGGtq3bZyyLJGNhW6bXqiTNybDetu1wCGnyrq7o15fE4Yv8bZ7fRsQY/95s2clo+1XZ43Zk8NHkr6QtDayncEy0w2DboJWZbr9K4xZCXpi79V1mB/QheTQ42z2z/6stEjz1Y0MZXD8rG1X2JNrZt4250RnTY9sVwnHLu2Lf4RWjMgffG3VxG0CfCM0X/+B6Of+rh07mIub20HNTc3wppat7TxSmSNrOu6aXriOWw47lgXfKOydaPRb9AIlZi3z/r6579e1d/9Q1HV6I9Tds12WTtiv91/JOkLQU0u3+5lTadNT6tWrYroSvLnjvWtqwGP7C3oqQM0QiXl7bO+Hv/dm/rat4q6PJm729xaGfMZOzpwnPJx8pZ99bFGNh06eR7Lcp1wNZeLGz3zWFH7OCc1MdM3pKf/8KZOvOHpe+eKmp7N3Sv/UbZkTF7u3uJlUbshy3KdcDU3PbUy/FSJjuME1YP2v35PGj9f1LmLXt5KyLUtGSkfJ2b5n37PZyabAu02PbFcJ1zthOyaAelTh0s0QiVo+oY0/OK8pmakiesFnf5hKX8lZMrHicnZKy172m16YrlO+La2OUO9Y53Rp4+UI74aLOfts76e/qM5Tc1Ivi+9e7mQxxIy5eMErHSX4C/Dce00PXmex3KdCGxYoumplV3bPD33K1QSkvT2WV+f+srtAwduzpk8lpA3ydoRNq+Izwohy25PrmvneSxl4mhs3djZG5dH9rL1YtK+/mpFf/6NxdWfegl54npuCntsXhGjFV5Vlj0xHTfy2vLlYsrE0dnSRUPT8FNF7VymIxnR+/RX5vXW2cUVIN+Xzl0saPzdombncvMTw+YVMVjpp31TLFeBrkxMWZ15d+lyMbs6RWewv9bU1I1PHS631TSF6PzGZ2vPZ5tN3zD6/rmizl8u5KWEvJ3ycbSWDFlOdnDf2DJdxSzXidbWTd3PRtcMSH9ymD2Ok3T+ktUXvxo8EL7uyqSXpxJyrXzM0XmRWOYVVCRkHTfy2tIhy3PYaLXbWbz05xs9/zQdx0l6+RsVvfbdpX+GcldC5ui8SOTibVpWLdX0xK5O0euks3gp+3d6bL2YsHaOx8tZCbl2dB67/YVm6ZBlIwrntQpZysTx6LSzeCnPPFak4zhB5y9ZfWGZsnGjHJWQ18rzv2lHB4aTvpAsyPyrJauWanqiTByPMBuXnn2Sw96T9Of/qdKyCaqVnJWQn2OXqN4t95NNW7fDWjU9sVwnPq2OuOvWmgEOe0/S9A0t2qSivc/JTQmZXaJ6tEzIshGFy5qbnliuE58o1rnWD3tHMr7+akXvXOrsyEjpdgl5aibTlQh2ierBMq8MNqJwWfPzWJ7DxueOddHcULduNGy9mKAvfrW9fcCb+b509r1aCXm+ktk3urd2iUr6QtJmubsFG1E4rDFkOYQ9XhvWRfe1H9lb0OMP0QiVhG++1v6z2Vambxid/mFRF69muoR80I4OjPGctn2ZrnFkVWPTE8t14nffPdH+2Dz7JIe9J2H6hvTKq93NZhtdmPD0/XOZLiFv19zcOM9p29PyVcAaKbfVm55YrpOMOLZE5LD3ZLz8nzprgFrKfCXzJeS1HAbfHn6KU6je9MRynWSE2Vm8lDUDtaCl4zhe5y/ZZXeB6lTmS8i1w+A5zWcZrUO2QNOTy8ZO+yzXSUics8utGznsPQmvfCv8NMx4Cbl2mg/bMbbU+m/cErIuGzvts1wnIXHMYhvt2ubpE09SsYjTN18Lp2TcLOMlZLZjXAJtjClT9aVf2NflGWvoWdRNT6088VBBp89Yff3VaG7+WGz6hvTad33tiujc33oJ+YNDvn5sbVWF7Exua9sxfrv/181HbnCiz4KWb6fs6OCIZPfFfTFoz+yc0btXCpq+kbl3w1jG4783p7fPZvHBnnsef6ioZ5+Mfg5SKkobPlDVmoHM/b2+ZPbMsHmFaHxKpb6y1eYfr+jO9VV5/A3mxhd/i8Pe4/L/hdj8tJx6Cfnse5krIbOedsESt2ieyabB0GpfW+6a14+9L3PvgtECh73H5+2zfk8bU3Rqasboe+dqXcgZwnpaLT2TZbenlCh4tXLTT9xZ0WB/53uvIl22bjT6DRqhYhHmUp52+H6tC/n0D0uans3MrLa2njbH+x5TbMwISsj58cjeAoe9x+CtM8lUiOYr0vj5YrZKyNZ+yZ4azGUzVOB2nPepfdpRQs6HZx5j68WoxT2TbZa5ErK1h+3o4EjentMG5zxVjrhLO0rI+cDWi9FKaibbKHslZLtPc3MjeZrM8ROaYfUS8o9/gBJyFq0ZkD51mK0XozJ9Q7E2Py0nYyXk7bJ2JC8bVwRvvZ6fi288Tz7wvloJeWh17yeMwC13rDMc9h6h046tS85QCbm2cUUOGqKY3+REwZPuXO9r84aKVpUpIWcJh71H552L7v2sZKqEnIOD4IMha3gmm2WDfVY/eScl5Kx5ZG9BDz9Ix3HY3rnkXsjWNZaQU37Cz8EsN0QFb7NWuXkgnWeUkLNn+Kmidka03y7cNTVjdPqHJV2eTPPffXYbotL8t4IeUULOnk8dZuvFMCW9jKddvi+9e7mg750rprmEnMmGqBYhazM5ZcfSKCFnB1sv5tvNOaPx80Wdu+iltYScuYaoVrfU7bFfBZxACTkbtm40ev5pDnvPs4nrhXSXkDO0Q1RK/wYQFUrI2bB/J4e9513qS8jWHrajA8fT3hC1KGTT/s0gPJSQ0++Jh+g4RupLyI9qbi7VnceLb5+zlcx1dqE3lJDT7dkni2y92IPzDi/h6VSKS8ipPjIvdX/aiB8l5PRaM1A77J1GqO5kKWSlVJeQ18raETs6cCDpC+nU4pD1/NROyRE9SsjptGZAbL2IRVJaQl4r6atp6zxuvlWmcjqOeH3gfb5+8s6K1gxk611+lrH1Ilqpl5AnrqfoXXPKOo9T9CcLl5SKVhs/VNHmDRWV6K1JhUf2FvT4Q/xlYTHfNzp3sajxd4uanUtJCbnWeZyKPY8JWfRksM9qy13z+uCQTwk5BZ59ksPe0eh2qE7f8PT9cyWdv1xISwn5oB0dGHO987jptmgytZ0V4rP+/VVKyCnBYe+oaT1rvTKZqhLyds3NjdiTfZuTvpClpOJPEelACTkd1gzUgpaO4zxbviycshLydnnemKtLfAhZhI4Ssvu2bjT69BG2XlxJNk81aj80U1RCdnaJT9MryDo75Ub6UEJ2265tHh3HudPdrPTqVEFv/8j5ErKTS3ya/8Q2JXIVyCxKyG7jsPc86S5gzcKn+b7RO5dSUEK29kt2dGA46cuoc/ptCbKDErK7hp9i68Xs6y1gG83Mevqnd5wvIT/nyhIffrIQK0rIbvrib3HYe3aFF7CNX/Lq9YK+f66kqRlnY+SgHR04lvQSn1t/Olk7jR7uooTsHg57z6poAlaSZKVK1eiHF4s6+15R8xUn36QdTPoUH2ffgiD7GkvISN7WjUa/wRm0i2xNdRk92oCt/7eRND3r6XvnSrp41ckS8vYkgzbNryBkxPr3V7XlrooG+ykhJ+2RvQU9dYDyQt3qgaSvoFvxBWyjS5MF/eB80cUS8nbNzSWylvb2nwQn8CBBpaLV5h+vaOOHqpSQE/bMY0U6jhfckcrn1MkEbF2lWtC5SyUXS8ibZO1I3EHb+HbDyd0ykC9rBnz9xJ2UkJPGYe81d6x3KiTakGzAmoYvNHOzoO+/U9blSaeO01sbd9DyUwTnFDxKyElbMyB96jBbL25J1RsNdwK20cWJksbf7XOphFwP2lg2rXDmuwaaUUJO1h3rTK4Pe9+wzmhNap7JuhmwdfMV61oJee3CubSRB21jyLKlIpxECTk5eT7sfde2tBwJ6HbANroxV9A/nXeohBxD0DaErCFk4SxKyMnJ69aL+3elodCXnoBt/NDLk2Wdea+k6VkHZrURB20aXkXALZSQkzH8VDGjJ9K0Ntgv7d/p+vebzoCtf16l4uncpVU6d6mUfAk5wqB1/VUEtEQJOX6fOlzOTcfxffe4XipOd8DK2lu/MXOzoLMXVunyZMKvrVrQht513PBdWdbJIlUoIccrT4e9uz2LzU7A3jrhx0pXpsr6wbv9yZ7wE8HynsZX0vYwvzAQF0rI8dm60ej5p7N/2Puue1wN2ewFbKNK1epHF1fp/OVCUiXk0NfRuvpKAjpWLyH/2PsoIUdp/05Pn8jwHscb1hlHd3rKdsDeuhwjTd8s6UeX+nRlKpHXWahBS8giUwqetOEDVf3EnZSQo7Qrw01Qbi7dyU/A1v/h+1ZXp4o6e3EgiRLyWlkbyjF52f1JQa71lWsl5DvXVzkkPmSvfKuqJ3/vZtKXERn3lu7kL2AbL6pSsXrncp8uXo29hBzK6T2eJCVxMgEQh6HVvrbcRQk5LF/4akXP/9l80pcRKbdm6fkO2MZPmZot650r/Zq4Huvfz3bNzR3r5QvUrrZq6CxGZlFCDsfwixW9eLyS9GVE6u6NnkNbKRKwzWP4vnR1elXcJeRH7ehA10Hr0ls2IFKUkLszNSM9/ntz+vqr2Q5YyaWlOwRscAwjGSsjI9+X3r3arytTpbi2Zzxov91/pJtPdOUVBcSGEnL73jpr9fQfzents/n4s9q/y4WmJwI2OMbtgG00daOkc5cH4jnhx5jP2JOr93f6aYQscokS8sreOmv19B/ezE3ADvbX1gEni4ANjtE6YBuHvHq9X+evro6+hOz5x+3Jvo72+fcWPrHjdAaygBJya/UO4ukbSV9JfJLfSpGADY6xfMDWPqL2MZWK1cVrA7oyVZKN7n3zWnne8U46jrmtAKKE3CgPHcStJPs8loANjtF+wDZ+zPTNst65Mqjrs5Gdhbxdc3NH2/1gQhZYQAk5Hx3ES0nueSwBGxyju4Ctfz0raWK6qPeurdZcJZK9Vg+2e2oPIQs0yWMJOU8dxK0kt3SHgA2O0VvANv5SrYS8ShPXvfBLyNYebef5bE5uIUDn8lJCfudSvjqIW0mmVEzABscIL2DNrc81mpkf0HsTqzVzM9TDLdbKK6y4frb+ymLHJ6CFegl584aKVpWzV0J+66zV47+bnw7ipcRfKiZgg2NEE7D1/7CSJmfKujS1JsQSst230vrZhZBlxydgOYN9Vj95Z0U//oHslJBf+VZVT/9hvjqIW9mwzsS8dIeADY4RbcCahmuqVK2uXO/X9dlV4ZSQjRlermyckdsFEI8PvK9WQh5aXU36Unry59+o6vk/m899wEpxn7pDwAbHiC9gb381q+mbJV2cWqPZSs9dyGvleUt2GxOyQIcKnnTnej+1JeThFyv69Ffyt0RnKfGdukPABsdIJmAbf3FypqyJmTWq+j2VkB9dajcoQhboUtpKyFMz0tN/lN8O4lYG++NqeiJgg2MkG7CN48xXpSvTPZaQPb/lbDYFtwbAbWkoIdc7iF//br4bnJr99K5I1lA2IWCDY7gTsKbhc27Ol3V1puvGqO2t1s4uhKyluxjogcslZDqIlxZ9qZiADY7hZsDWP8da6frNfk3Ovq/zE36sHW7+pforbG2HXwpAC66VkOkgXl60B7QTsMEx3A7Yxl+vVK0mb6zRzM1yJyXkTc3PZh24DQDZ40IJmQ7i5e3bWYhwlycCNjhGegL29vdndLPap8nZ97VfQvb8RetmCVkgIkmWkOkgXll0DU8EbHCMdAZs7d+trKQb8wOanmurC/nRxnWzhCwQsThLyHQQty+aXZ4I2OAY6Q5YmdtXVfWNpucGNFtZoQvZmAP1fyVkgZjUS8hrBqKZ1dYDlg7ilT38YDGCUjEBGxwjOwG7eMnPKs3MLzOrNebWc1lCFohRwZM2fqiizRsqKoW4euSts1YPf2KWDuI2hd9VTMAGx8hmwN7+IzO6MT+gG5U1rWa1j9b/xbOnBlm+A8RssM9qy13z+uCQ33MJeeR1nw7iDoS/AQUBGxwj2wF7e1gr35dm5muNUY1ha0cHDkiSpyqHAwBJWf/+qn7yzkrXJeRXvlXVb3x2joDtQLgbUBCwwTHyE7D1zzLGqmIHdLPaUEJeKBnHsd31bJ8AACAASURBVN0JgGWUilYbP1TR9KzRuYtFzbfZszT8YoUGpy48sjesWSwBGxwjnwFb+x0ra43m/H4VZFX2pndIPJMFnNFuCXlqRnr2s/MEbBc2rDMhbUBBwAbHyHfA1r83SfJ9o5vVwX0SM1nAOevfX9XQGl/nLxc0NbP4hlXvIKbBqTv7d4axbIeADY5BwNYD1jT8nz01uIOQBRzUqoT81llLg1OPHv9oryFLwAbHIGCbA7b+OVW7KraDFAF0oV5Cfu27dBD36u6Nnu5Y111I1hCwwTEI2KUCduEZ7WZmsoDjjn29omf+uCKvg5ssgp54qJdZLAEbHIOAXS5gZYx839xLyAIOO/T7c3r57zwCtkeD/b1so0jABscgYFcKWEny5Q0V5fmLjuUBkLyJKatfen5e3zhVkEe+9uynd3W7jSIBGxyDgG0nYI2sjLEbmckCjpmYstr/8Zv67tlSl7d4NOuu4YmADY5BwLYbsAtf9y4anwCHjJ32tfnArN4iYEOzc5unrRs7/dMkYINjELAdBezC7xCygCNGXq/qZ37V6uZ8OelLyZRHHux0FkvABscgYDsO2IXPJ2QBBxz7ekUfPWxZohOywX7pkb2dhCwBGxyDgO02YI0sOz7FaWLKauxtdupxwdBqox1b3HiP+WufmtcXjhs6iCPwxEc7ucURsMExCNheAlaEbLzG3vb10x+/mfRlQNID2/v18h8Udef6igoJZe3ElNWRz8zrL/4zHcRRaT9kCdjgGARsrwErGUI2TiOvMYt1Qblc1q5tnqZmjE7/sKQPvr+qD7wv3r8bOoij9/CD7S7bIWCDYxCwYQSsDI1PsRo7TcgmrVwuyzPm1vZ6vi+9e7mg750ranYunrgbO+1rx8foII7a04+18yyWgA2OQcCGFbBGlpCNEyGbrGKxeOu55x3rF99Abs4Zff9cUecvF1SN8K+p3kH83lU6iKP08IPFNvYpJmCDYxCwYQasxEw2NhNTVmfetSt/ICLheZ6Khdszm6XOFL0y6en750qamgn/R4MO4visfDA7ARscg4ANO2CNfJ7JxoWu4mSVS6Vb/z7Yv/zHzleks+8VNNjv6c51VZWKvb85ooM4Pju3eSsczE7ABscgYMMO2Npneq8yk40JTU/JWbVq1aL/3rqpvZf99A2j750r6uLV7k9vmZiyOvT7c/ri19jkPy7PPLbc3IGADY5BwEYRsPUXRFHGDMlSxowaz2OTUS6XAzeWrRvbf2/p+9KFCU9Xr3u6c31Fg33t/6zQQRy/5WexBGxwDAI2qoA1svKtRjxZ7RAiR8jGr7HRqdGG9cFfW8l8RRo/X9S5i15bjVF0ECdj+KnSEr9DwAbHIGCjDFjJqKiZy5SLY0DTU/yKxeKiRqdGnW8Wf9vE9YJO/7Cky5NL/+jQQZyMpTuKCdjgGARs1AErWckWxgjZGND0FK/mTuJmWzooF7dSX1s7/m5wbS0dxMkY7F9qXSwBGxyDgI0jYI2xMvdfHyFkY0DTU7waO4mbDfary8O7g6Zv1NbWXrxaW1s7/OK8nvlj0eCUgCc+2moWS8AGxyBgY5nB1n7lO5JYwhMHnsfGp7mTuFm7ncWduDDh6V9+0tcrr3rsQZyADetMiz2KCdjgGARsXAFrjJUxdkQiZGNByMajVSdxszvWhRuyUzPS0380p7fP+l3e1tGrZ58sNVUnCNjgGARsnAErSfLn/l+JHZ8iR9NTPJbqJG62YV14Y7511t4KWCRj386C9u9svI0RsMExCNjYA1a+VC4zk40DTU/RW66TuNl994TzvvKts1ZP/+FNGpwSNNgvPftk4y2MgA2OQcDGH7CSZF4x905MSIRs5Gh6itZKncTNNqy4afzKXvlWVc//2XzPXwe9eeYXSw3NTgRscAwCNpmA9WVU+b/r/0XIRoznsdFarpO4lZVPZlneF75a0YvHKz19DfRu386Cnnio/uaKgA2OQcAmFbCSpFLpeP1XCNmIEbLRWamTuNnOZTeNX9nwixV9/VUCNmkb1pmGnZ0I2OAYBGyiAdtQKpYI2UjR9BSddjqJm3XbWdzYQYzk/cnh8kI3MQEbHIOATTZgJWPn/mPDb9BdHCWanqLRbidxs246i+kgdstzv1Ja2BaTgA2OQcAmHrCqnjV7Zo43/CYz2SjR9BS+TjqJm3XaWUwHsVsefrCoR/YWRMC2GoOATT5gfcn6X1ITQjZCPI8NV6edxM1WD7R/c6SD2C0PP1jU8FNFEbCtxiBgnQhY2Wsql49KM2pEyEZo5HVCNkyddhI3a/f0HTqI3ULAErDuB6wk6x9tbHiqI2QjMn7e6tp1mp7C0mkncbO72zx5hw5itxCwBGwqAnaJWaxEyEaGUnF4uukkbrbS+tipGenZz87p9e/y9+YKApaATUfAaslZrETIRoaQDUe3ncTNtixTKn7nktWzn52ng9ghjz9UXNgykYANjkHAOhWwy8xiJUI2MiOvV5O+hNTrpZO42VJH3NFB7J7nfqVEFzEBm5KAlSR7ZKlZrETIRmbsNM9je9FrJ3GzVnsWv/Ktqv7kK/MErCMG+6VPHylr1zZPBGyrMQhY5wLWVt80e2aOaRmEbARoeupdr53EzZo7i//8G1V9+iss0XHFhnVGf3K4zEYTBGyKAtZKxhzSCgjZCPA8tje9dhI3a57F0kHslp3bPH2KrRIJ2LQFrPznze6ZMa2AkI0AIdu9MDqJm9VDlg5i9zx1oKhnHqvfhgjY4BgErKMB+6bZMzOsNhQlOy5pXzsfjPbQ9NSdsDqJm+3a5tFB7JjBfun5p8vav7PekEbABscgYN0MWKmdMnFdUdJ4ux+M9tD01LkwO4mbXZ+RHv9dOohdsXObp+GnOHCdgFU6A9ZWf93subFimbiOcnHIaHrqXNidxM1e/gbPX12xuDwsEbCtxiBgnQ1Y+V8zH7lxVB0gZEPG89jOhd1JDPfcvbE2e13c5U3ABscgYB0O2DdVLh9aatOJpRCyISNkOxN2JzHcE5y9SgRsqzEIWIcD9pqMObTcphNLIWRDRtNT+6LoJIY7Ws9eJQK21RgErMMBK/neAXP/9bafwzYiZENG01N7ouokRvIG+6VnfrGkJx5q9ZydgA2OQcA6HbDG/LK5//qIukTIhoimp/ZE2UmMZD38YG1j/9rGEs0I2OAYBKzzAbt7etltE1dCyIaI57Eri7qTGMnYuc3Ts0+2Kg3XEbDBMQjYrAesRMiGipBdGZ3E2bJhndHwU6WFTf2XQsAGxyBg8xCwEiEbKpqelkcncXZsWGf09IHiwpF0yyFgg2MQsHkJWImQDRVNT0ujkzgb2g9XiYBtNQYBm6eAlQjZ0ND0tDQ6idNv5zZPT3y02LDX8EoI2OAYBKzDAXttYZlO113ESyFkQ8Lz2NboJE63hx8s6pG93grPXJsRsMExCFiHA/ZNGXOo23WwKylKiuQL5w0hG0QncTptWGf08IMFPbK30LCJf7sI2OAYBKy7AWtPqFw+0M1OTu0qyvcm5BEQvaLpKYhO4nTZt7MWrO2XhJsRsMExCFh3A9Z/yeyZafvIum5RLg7Jidd5o9KITuJ0uHujpyceKmj/rsISG0i0i4ANjkHAOhuwtvrrnZ6m0y1CNgSUihejk9htd2/0bs1YOy8Ht0LABscgYJ0MWKNrsv4h85EbxxUTQjYEhOxtdBK7Z7Bfuu+eWqj2PmNtRsAGxyBgnQ1Y2f1mz0ysfUiEbAgI2Ro6id2xc1utI/i+ezrtDO4EARscg4B1MmDlv6lSeX+UDU5LIWRDMPY2IUsncbLiCdVGBGxwDALW0YB9SeXykSQCViJkQ0HTE53EcdqwzmjLRk+77vG0daOJKVQbEbDBMQhYRwP2ebNnZliaUVKKKtiJRd8TOkKpmE7iKNUDdctGo/vu8bRloxfyM9VOEbDBMQhY5wJW9pqMPWJ2z4S6RWI3imb39JgdTfSnNtXyHrJ0EodjwzqjDetqs9I71hndsT6JGepKCNjgGASskwEru9/snnZioyXKxT3Kc8jSSdyZepDesc7ThnXS1k21Wal7YdoKARscg4B1LmBt9U2Vk2lwWgoh26O8Nj3VO4mfOlDU+UvSO5eCfw6vfzc/fzZ3L5Rx1wwYbVk4uLweorVgTfObEQI2OAYB61zAGvNllcqHXQpYiZDtWR6bnuqdxDu3eXrmsfZfQlMz0umzrf+83jprNTUdbA6IK8B3tphNNgZm3X333P645J+PxoGADY5BwDoXsLb6vNk9MywHEbI9yGupuN5J3GmZc7nS6K5tPV8WQkfABscgYN0KWFvbwWnPTGw7OHWKkO1BHkO2sZO4cVaHrCFgg2MQsE4FrK2ekTEH4t7BqVP1u+S1RK8ipfIWss2dxFs2ErLZRMAGxyBg3QpY/4TK5R2udBAvZ+EuaZy/UBflqempuZP47lw8j8wjAjY4BgHrVMCawufMnmmnOoiXQ7m4B3lpemq1J/F9qVh2gs4QsMExCFh3AtZek+wR8+GpxDeY6AQh26W8lIqX2pN4F89jM4aADY5BwDoTsPXnrykoDzcjZLuUl5Bdak/i5qUtSDMCNjgGAetQwDq3wUQnCNku5SFkl9qTOP2bK+A2AjY4BgHrTMAa82Wze+Zgkhv892qh5mfHk72M9Ml609NyexLv2saRdtlAwAbHIGDdCFh7TfJ/2Xx48qBSrj6TJWQ7lOWmp5X2JN6yiVls+hGwwTEIWEcC9qxkH03j89dW6F7pQpZLxa06iZulY0N7LI2ADY5BwDoRsNY/oVJxe1YCVuKZbFeyGrJLdRI3GuyXttL0lGIEbHAMAtaJgDWFz5ndU7+mjCFkuzCS0VLxUp3Eje67h+ex6UXABscgYJMP2Gpt/+HdU87uP9yLWt3P2lS2RiclizPZpTqJm7F0J60I2OAYBGziAWvn35Tsfpc3+O/VQsgWMlP/jsObGessXq6TuBmHAqQRARscg4BNOmAl84rK5f1Zev7aCuXiDo28Xk36EkK1UidxM5qe0oaADY5BwCYdsMaf+3XzkRtHlQOEbIfGTtuVPygl2ukkbtTqYHO4jIANjkHAJhmwRtVrquqAuf/GiHKCu2aHsvI8tp1O4mbMYtOEgA2OQcAmGrC2ckKl4mZz//XcBKx0ayZbGSdv25OVkG2nk7jZ1k28RtKBgA2OQcAmGrDGfM7sns7c8px2eJJk7p9lx6c2ZaHpqd1O4mbMZNOAgA2OQcAmF7DepLHzj5kPT+QyYCWeyXYkC01PnXQSN+KQ9jQgYINjELBJBaxV4TvzpnSgb/fVf1KOEbIdSHvTU6edxI22bmQW6zYCNjgGAZtUwBpjv+x9+ErqN/cPQ+Od81piV5ESaX4e22kncbNd27q7iSMOBGxwDAI2mYDVpFElE6fnhKUhZE2mFwSHIa0h200ncbNdbELhKAI2OAYBm0TAWpnvGM3tM7unjwm3cOfsQFqbnrrpJG7EIe2uImCDYxCwSQSsMdUveyX/p7K+e1M3eCbbprQ2PXXbSdxoC89jHUTABscgYBMI2Enfmk8Ud0/+B6ElQrZNaWx66raTuBmlYtcQsMExCNi4A9bKfMfTzV8q7mH2upyGu6fN1S4cnUrb89heOombsT7WJQRscAwCNu6ApTzcPmaybUpTyPbaSdyMQ9pdQcAGxyBgYw7YSWNvHjS7s3s0XdgI2TalpekpjE7iRhwK4AoCNjgGARtnwFoZNpfowu2QtXZi+Z/I/EpT01OvncTNKBW7gIANjkHAxhmwxtjPeR++mtutEXvRELKFMZl0zNbilpampzA6iZtxSHvSCNjgGARsjAFLebhHlIvbkIbnsWF1EjdjJpskAjY4BgEbV8Baea96N+d/weyduSp0jZBtg+shG2YncaO7WR+bIAI2OAYBG1fA+ta8UPrIpd8TenY7ZPuKY5qbS/BS3OVy01PYncSN7mMWmxACNjgGARtHwBrZs8bMPVpg7Wtobt1Fzb0TE0leiKtcbnoKu5O4GZtQJIGADY5BwMYSsMZ/xcz5O1j7Gi7KxStwuekp7E7iZjyPjRsBGxyDgI06YK3MpGQ/Udg9wdaIEWgO2WuS1iZxIa4aec3NmWwUncSNNqwzHNIeKwI2OAYBG/kM1tjvVEzxQN+HL7H2NSJNUxWOu2vmYtNTVJ3EjXZti64MjWYEbHAMAjbqgPWtXijsvvLf9334PQI2QpSLlzExZXXmXbfKxVF1EjfjkPa4ELDBMQjYKAPWyJ69WS39i/4H3vsvQuR46LaMMce6iqPsJG62ZRMvjegRsMExCNhIA3ahuYmAjU/TnZSTeBqNvOZOyEbdSdxosJ9DAaJHwAbHIGCjCljJTFrpV7zdE79g9l5jc4kYUS5ehkvPY6PuJG503z08j40WARscg4CNMGBfrXiFgzQ3JYOQXYYrIRt1J3Ez1sdGiYANjkHARhWw1oqdmxLWHLJ0Fy9wpekpjk7iZpSKo0LABscgYKMIWGP873i6+UuGnZsSt3jK4nvs+rTAhaanuDqJm7EJRRQI2OAYBGwUAVvwKp/zblb3sXOTGygXLyHppqc4O4kbcUh7FAjY4BgEbAQBOzlfLfxicc8lOocdsviO2lfknc+CJJ/HxtlJ3IxZbNgI2OAYBGzYAVut6q8Lc/ObWZrjnkUzWXPvxIQdZS89KdmQjbOTuBmHtIeJgA2OQcCGHLCTBc0cLD7AoequolzcQpJNT3F3EjfbwhmyISFgg2MQsCEH7KuFOQ5Vd12LO6o5Ef9luCWppqckOokb3b3R41CAUBCwwTEI2BADdrJS9X6zuOfSXjaWcB8z2RaSaHpKqpO4EYe0h4GADY5BwIYYsLWNJfawqX9aELItxP08NqlO4mZbWB/bIwI2OAYBG0bAGmMnK1Xvhb4HLn5SSJUWUxf2L44zZJPsJG7GTk+9IGCDYxCwYQSs51W/U/EK9/Y9cIGATSFmsk3ibnpKspO40YZ1RnesYybbHQI2OAYBG0qJWP4Lhd1X2BYxxYIha+3E8j/92RZn01PSncSNOKS9WwRscAwCtteA9byFbRHZtSn1WoRsYUwm+S0FkxJX01PSncTNtmxy6WrSgoANjkHA9j6DtcxeM4RycZM4nse60EncjJ2eOkXABscgYHsJWM+rMnvNoGDI9hXHNDeXwKW4IeqQdaWTuBGHtHeKgA2OQcD2NoPl2WtWBaYv5t6J3J7EE3XTk0udxI22bmIW2z4CNjgGAdttwBa8yneK3sy9pY9cJmAzinJxg6ibnlzpJG5GqbhdBGxwDAK2u4DVpO/rhfJHrrAsJ+OWuLvmc2vFKJueXOokbsahAO0gYINjELDdBKxn7Kt+wWPda04wk20w8no1kq/rWidxM2ayKyFgg2MQsF0E7KTvmxfK7NqUK0vcXe14vJfhhrHT4T+PdbGTuBGHtK+EgA2OQcB2GrBVq79n9ppPS81kcxey4+etrl0PN2Rd7CRutpWj7ZZBwAbHIGA7DNjJknf9YHkP573mVes7rLW56zAOe+mOq53EzdiveCkEbHAMAraTgJX1/7pUubnZELC51nomm8Ndn8IOWVc7iZvxPLYVAjY4BgHbfsDaH5a96V8jXCEt+Uw2f8JsenK5k7gRh7S3QsAGxyBg2w1YK32+XJnbTsCirvVMNoe7PoXV9OR6J3Ejnsc2I2CDYxCw7QSstfYfrczh/gfe+y8CGrQMWXPvxIQdzc8UJ6ymJ9c7iZvt2paea40eARscg4BtJ2ALpvJC6X52bEJry62TPSNpU1wXkqQwnsemoZO4GU1PdQRscAwCdqWAtdb+vSmZXyp9+PI/CVjCMiFrxiVLyLYhLZ3EjQb7xSHtkgjYVmMQsMsGrDRZ9OY/Udxz5T8IWMEyIZufZTy9Nj2lpZO40X33pOtNQTQI2OAYBOxyAWuN+Zu+yuzHzAPXrgpow3L1wtycadhL01NaOombUSomYINjELBLBawx/g+tzM/03//ez5u9BCzal/u9i3tpekpTJ3GzfK+PJWCDYxCwSwVswau8wFF06NbSd1rfG4nxOhLT7fPYtHUSN8vvIe0EbHAMArZVwFrZv1dJP0HAohe5n8l2E7Jp7CRulN9DAQjY4BgEbDBg7WSxUKGxCaFY+m7bV8zFM9lOm57S2EncLJ+lYgI2OAYBGwhYYz+/qnpzMwGLsCw5k83LhhSdNj2lsZO4Wf4OaSdgg2MQsIsD1v6jZA733X+BHZsQqpXKxZnekKLTpqe0dhI325Kr7RQJ2OAYBGw9YK006Rn7Aue8IiorhGy2N6To5HlsmjuJG+XrUAACNjgGAXtrBuvpb/orsx9jSQ6itELI2nFJ+2K5kgS0G7Jp7yRudF9unscSsMExCFgZK+vbH3kFc6j/fjbzR/RWKhePx3IVCWmn6SntncTN8rEJBQEbHIOAtcZOWl+fX733wm8JiMnyIWvMuGw4R8C5aKWmpyx0Ejfbkvn1sQRscAwC1hTs33hF/Wrfh99jM3/EavmQrZpxedkN2ZWanrLQSdxowzqT8UMBCNjgGPkOWFn7I1MQpWEkZoVycWV8+e2NsysrncSNdm3L1qx8MQI2OEaOA5bSMByxbIKa+2cz/Ux2KVnpJG72yN6svmEiYINj5DdgrfVfHvBnN6/e+x4Bi8S1s61iZtfKrl1tAiXjLHUSN9q3s5DRnZ4I2OAY+QxYz7P/KOlw/wNsKAF3tHHXNZmdzR7Yt7h8mrVO4rq7N3oafipbz5drCNjgGDkMWM9OFjz7m/0PXPjv+h/g2Svc0kbI2syG7PBTJa1dXftRzWInsVQL2C/+VjmDG1AQsMEx8hewxaL/+QF/djM7NsFV7dQPMxuymzcYjfzpKq1dbTLXSTzYLz11oKiX/4CAvfVZBGxmArZQsH8/W9Xuvvsv/M/s2ASXrfxMNuNrZXds8fT2/7Va//pLN/T/vFrU+Uvp/l7v3uhp/05PT3y0mMFwlQjYVmPkJ2A92R8NlK//qtkzc1xACqx4x7AnV++X538zjotJ2vSs0dtnq/qv30/frHb1gMnBQewEbHCMnASs7JQx+vd0DCNt2gjZvs3yvB/EcTGuuHi1oEuTnvzOz3NHZAjY4Bj5CFhj/JeLfeZ32a0JadTWncOODqS7htqF+YrR+csFTc1kfXaYBgRscIzsB2zVtycl+9zQ/gt/JyCl2g3ZMUnbI74WJ03PGp27WNR8JekrySsCNjhGtgNW1v+RkV5Ys+/CFwSkXJu7E5iJaC/DXYN9Vj9x57w+OETtOH4EbHCM7AaskZ3yjP03n/7mv9xEwCIr2p3JDkt6LuJrcd58xejcpYKmb3R380cnCNjgGNkNWM/4L1enZ//V2p+dvCIgQ9rZVhELSkWrzT9e0dSMp/OXC5SQI0PABsfIZsBaa0/OW3N43f4L/yAgg9qbyeZoGU+7qr505VpBFyayuB9wkgjY4BjZC1gj/0e+1b+gqQlZ195MtmAnlLv+4uUVPGn9+6saWuNTQg4NARscI1sBa62dKhj7v/DMFXnR9l0lj8t4OkEJuVcEbHCM7ASsZKeKBf376vSNT/LcFXnSyTPZzB55F4Y1A74G+nxKyF0hYINjZCdgiwX/5cqcfm/1/gvfF5AzHYSsGZcsIbsMSsjdIGCDY2QlYO3Jiszhob00NSG/2g9ZozFZ7YvwWjKDLuR2EbDBMdIfsJVK9b+ViuYwTU1AJyFrbW43pOgWJeTlELDBMdIdsAXP/sjIvvD+n7lIUxOwoO07Dct4esNGFo0I2OAY6Q1Yz9SamjghBwhqf3pVYCbbi3oJeeOHqvJyPaklYINjpDNgfd9OlYv235jZG5sJWKC1ju54LOMJR9WXLlwt6Mpk3tKWgA2Okc6Arfr2L0uyvz30z+gYBpbTacjm9jSeKMzOGb17JS8lZAI2OEYqA/ZvPd//V4Qr0J4O9y42E2Lrp9D0lWsl5InrtS7k7B4ST8AGx0hXwBY8LZzt+h4dw0AHOgxZOyKxjCdsQ6t9rRnwM1pCJmCDY6QnYG+HK8txgG50FrLGjMsyk41CwZM2fKCq96/xM1RCJmCDY6QmYM+VC/YP2GMY6E1nIVs14/II2Shlp4RMwAbHSEXAEq5AiDq6E9o3hoY0N3c1qovBYuntQiZgg2M4H7BTq/vtH/Q9cOGTrb9jAN3o+G5oRwcmJK2N4FqwhHR1IROwwTGcDtiparX6p33+3B9zOg4Qvg4bnyTJjEmW5qcYpaeETMAGx3A0YBvCdR3hCkSmi5C146LDOBFudyETsMEx3AtYj3AFYtVFyGo89KtA29zsQiZgg2O4F7DzFfvias3+r4QrEJ+O744cFOCW5EvIBGxwDLcC1hixBSKQkC5mspXxTs4VQLTqJeR3L3uauF6IeXQCNjiGOwHreYQrkLSu7pIcFOCm6Vmj85cLujkXRwmZgA2O4UbAEq6AO7oM2cEROozddXnS04WrUZaQCdjgGMkHLOEKuKebxifRYey2D7zP19DqqErIBGxwjGQDtlDQX9p5/3fW/w8Xv9f6OwKQlC5Dlg5j1xU86c71vobW2BBLyARscIzkArZQMLVwfYhwBVzVXbmYDuPU6b2ETMAGx0gmYAvFWrh+8GcJV8B1Xc5k6TBOm95KyARscIz4A7ZY1F/aefs76//ZBcIVSImua4h0GKdXZ13IBGxwjFgDdsq3+ouS7P/OzBVInx5Clg7jtFu5hEzABseILWCnPOOzcT+Qct02PokO4/RbvoRMwAbHiCFgG8P1o4QrkHY9hCwdxlnQuguZgA2OEW3AeoQrkEndl4vpMM6k2yXkzl4aBGx3Aev7/juesf96tZn/C8rCQPZ0H7JvDA1pbu5qmBcDN8xXao1RUzPtdZATsJ0HrG9r4XrnP7/8+SW/SQCp13XISpIdHZiQtDaka4FjpmeNzl0sar6y9MuEgO0sYFeV9d/m5v1/R7gC+dDLM1lJZowO4+wa7LPaZ2f6IwAABbdJREFUcte8Ll4t6NKkFyghE7DtB6y1dlQyw+t/5uLfLvsNAsiU3kLWaEyWDuOsW//+qobW+ItKyARsewHr+/o7z+jTd/38JcIVyKEeZ7IaC+Uq4LxS0Wrjhyq3SsiV6nKJJgJW9q9Weea3P/hzbCAB5FlvIVs14/LY+ClPGkvIV64XVK02/GbOA9aXpvqK9k+Nb1784M9eIlwB9Nb4JLG9Yp7Vu5Cv3/DyHbDGvlMu6v9gdyYAzcII2TFJ20O4FqRUoISck4A1nmUZDoBl9fpMVqo9lyVkc6y5hLzUXshZCVhjap3Cd/0czUwAltd7yBozImsPhnAtSLl6F/KFq0aTM4tfWlkIWOPZv+ofKH5y3f53/6HtbwZAroU1kwUk1bqQ71xvNTQ7r/OXC5qveOkOWE9TxYK3cNQczUwAOtPzM1lJsqMD45I2hfG1kC0XrxZ09bon3668RaNLAVso6B3rm8+vLd78U5qZAHQrjJmsJI1IomSMgMaNLGZuNh+nd5srAVvwNOp59ss0MwEIQ1gz2QOSvhrG10J2Tc14ujBR1nxl8aovFwK2UNBfyZr/eNfPs+0hgPCEE7KcyIM2VX1p4rqnixMlSUkHrJ0qlwsLz1vZmQlA+EIJWUmyowPHJT0a1tdDttU3srgxVyshxxmwxaI4wxVALMJ6JisZc1zWErJoS30v5KkZXxevFVSpFiIP2GJBo1L13971c1f/PORvBwBaCm8mS8kYXaqXkC9PliWFG7DG2Kli0fytquZ37nrk4tshXzoALCu0kJUkOzpwTHQZo0vzFaMLE8WWXcidBmypZN6pVuzn31+eZwkOgMSEHbJ0GaNnUzOeLk2uUqVa60LuJGCLRe/vPFM5dtfPUxIGkLxQQ1ZiYwqEo+pL16ZLujJZWDFgPU9T5XLhL/x5+0lKwgBcEl7j023HJD0XwddFjhQ86cfWzGtNf0UXJoqanauXkG8HrDH67qqyPlfrEr5MSRiAc8KfydIAhQhMzxpdmuxXpWq1qmzYOAJAKoQeshINUIjEGUnHJq8W/y2NTADSIpqQPdm3WZ73gyi+NnLna5KOmT0zx5O+EADoVCQhKzGbRU+uSToq3z9m7p8dT/piAKBb0YUss1l0zJyQ0TGze/pY0lcCAGGILGQlZrNoyzUZc0zV6lFmrQCyJtqQZTaLJTFrBZB9kYasJNlTg0dl7eGox0EqnJExx5m1AsiL6EO2tm52XNLaqMeCs+gQBpBLkYesJNlTg4dk7ZfiGAvOOCNrj8ra48xaAeRVLCErSXZ0cESy++IaD4m4Jum4fO+Yuf/6SNIXAwBJiy9ka01QY6JsnEVvypijKpWOm3snJpK+GABwRWwhK0n22/1HZMxn4hwTkaGJCQBWEGvISpIdHTgu6dG4x0VoXpJ0nCYmAFhZ/CFb6zYeE2fOpgnlYADoQuwhK0n21OAOWTsins+67IykY+wfDADdSyRkJZb1OIruYAAIUWIhK9EI5RA2iwCACCQashKHCCSntncwz1kBIDqJh6xE0MaIXZgAIEZOhKxE0EbsJZ6zAkD8nAlZiaANWW3WumrVMcrBAJAMp0JWous4BMxaAcARzoWsJNmTq/fL84+LdbTtYtYKAA5yMmSlWwcKHJe0PelrcVRtTasxR83u6bGkLwYAEORsyNbZ0YFhSc8lfR3uYOkNAKSF8yEr3dqG8ZjyO6tli0MASKFUhGzdwg5Rw8rHs1rKwQCQcqkKWenWKT5HJB1R9sK2FqwcJQcAmZC6kK3LUNjWDj+3doRgBYBsSW3INlpYW3tAqTkM3pyQ9Y/L80YoBQNAdmUiZOvsG0NDmp8/4F7gmhOSHZHvjbBJBADkR6ZCttnCphb7Je1Y+N+miIe8JpkxGY1Jtf8xUwWA/Mp0yLayELxDqoWuav80Qw0fMaTgUqE3JdOwJtVOqBaikjQm35tghgoAaPb/AygZHEmAaqR+AAAAAElFTkSuQmCC" />
                                                    </defs>
                                                </svg>


                                            </div>


                                        </button>

                                        <button role="tab" aria-selected="false" aria-controls="panel-8"
                                            id="tab-8" tabindex="-1"
                                            class="justify-between aply tabor focus:outline-none mt-6 items-center w-full flex cursor-pointer  p-4 rounded-lg dark:bg-pricingcintadark bg-bgfondopricingwhite">

                                            <div class="flex items-center">
                                                <div
                                                    class="w-4 h-4 rounded-full dark:bg-black dark:border-txtcommentply bg-white-100  border-checoption border">

                                                </div>
                                                <div
                                                    class="pl-2 dark:text-borderconcours font-inter font-medium text-sixteen text-txtcommentply">
                                                    Pago efectivo
                                                </div>
                                            </div>


                                            <div>
                                                <svg width="36" height="25" viewBox="0 0 36 25"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <rect x="1.24515" y="0.252962" width="34.5045"
                                                        height="23.5031" rx="2.75036" fill="white"
                                                        stroke="#E3E8EF" stroke-width="0.500065" />
                                                    <path d="M11.7539 4.50439H25.2418V19.5048H11.7539V4.50439Z"
                                                        fill="url(#pattern0)" />
                                                    <defs>
                                                        <pattern id="pattern0"
                                                            patternContentUnits="objectBoundingBox" width="1"
                                                            height="1">
                                                            <use xlink:href="#image0_7979_283377"
                                                                transform="translate(-0.0208333) scale(0.00220226 0.0019802)" />
                                                        </pattern>
                                                        <image id="image0_7979_283377" width="473" height="505"
                                                            xlink:href="data:image/png;base64,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" />
                                                    </defs>
                                                </svg>

                                            </div>
                                        </button>

                                    </div>
                                    {{-- ************   empeso el contenido de optiones *********************** --}}
                                    <div class="mt-6 relative rounded-3xl bg-purple-50 hidden" id="namecard">
                                        <div role="tabpanel" id="panel-5" class="tab-wow  transition duration-300">
                                            <button class="flex items-center focus:outline-none regresar">
                                                <svg class="dark:text-bgbtngreen text-bcklightbuscador "
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.33284 15.8332L2.49951 9.99983M2.49951 9.99983L8.33284 4.1665M2.49951 9.99983L17.4995 9.99983"
                                                        stroke="Currentcolor" stroke-width="1.66667"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div
                                                    class="dark:text-bgbtngreen pl-2 text-bcklightbuscador font-inter text-lg font-medium">
                                                    Regresar
                                                </div>


                                            </button>
                                            <div class=" dark:bg-gray14 pt-4  w-full bg-whiteheader" id="tarjeta-pay"
                                                role="tabpanel" aria-labelledby="tarj-pay">
                                                <div>
                                                    <form>
                                                        <div>
                                                            <label>
                                                                <div class="pb-1">
                                                                    <span
                                                                        class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm pb-1">Correo
                                                                        Electrónico</span>
                                                                </div>
                                                                <input type="text"
                                                                    class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                                                    placeholder="cvv" size="50"
                                                                    data-culqi="card[email]" id="card[email]">
                                                            </label>
                                                        </div>
                                                        <div class="pt-6">
                                                            <label>
                                                                <div class="pb-1">
                                                                    <span
                                                                        class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm pb-1">Número
                                                                        de tarjeta</span>
                                                                </div>
                                                                <div class="relative">
                                                                    <input type="text"
                                                                        class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-9 w-full text"
                                                                        placeholder="000000000000" size="20"
                                                                        data-culqi="card[number]" id="card[number]">
                                                                    <svg class="absolute top-2 left-3" width="20"
                                                                        height="20" viewBox="0 0 20 20"
                                                                        fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M2.50003 6.00024C2.50003 5.17183 3.17159 4.50027 4 4.50027H16C16.8284 4.50027 17.5 5.17183 17.5 6.00024V6.50021H2.50003V6.00024ZM2.50003 14.0002V9.50027H17.5V14.0002C17.5 14.8287 16.8284 15.5002 16 15.5002H4C3.17159 15.5002 2.50003 14.8287 2.50003 14.0002ZM5 11.5002C4.17156 11.5002 3.49997 12.1718 3.49997 13.0002C3.49997 13.8287 4.17156 14.5003 5 14.5003H6C6.82536 14.5003 7.49502 13.8337 7.5 13.0095C7.50498 13.8337 8.17464 14.5003 9 14.5003H10C10.8284 14.5003 11.5 13.8287 11.5 13.0002C11.5 12.1718 10.8284 11.5002 10 11.5002H9C8.17464 11.5002 7.50498 12.1668 7.5 12.991C7.49502 12.1668 6.82536 11.5002 6 11.5002H5Z"
                                                                            fill="#9AA4B2" stroke="#697586"
                                                                            stroke-width="1.00006" />
                                                                    </svg>

                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class="flex  w-full gap-x-8 pt-6">
                                                            <div class="w-full">
                                                                <label>
                                                                    <div class="pb-1">
                                                                        <span
                                                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm ">CVV</span>
                                                                    </div>
                                                                    <div class="relative">
                                                                        <input type="text"
                                                                            class="dark:border-txtcommentply  font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                                                            placeholder="kulqui" size="4"
                                                                            data-culqi="card[cvv]" id="card[cvv]">


                                                                        <svg class="absolute top-2 right-3"
                                                                            width="20" height="20"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M10.8333 13.3333H10V10H9.16666M10 6.66666H10.0083M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10Z"
                                                                                stroke="#121926"
                                                                                stroke-width="1.66667"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>


                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="w-full ">
                                                                <label class="">
                                                                    <div>
                                                                        <span
                                                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm ">Fecha
                                                                            expiración (MM/YYYY)</span>
                                                                    </div>
                                                                    <div class="flex gap-x-2 pt-1">
                                                                        <input size="2"
                                                                            data-culqi="card[exp_month]"
                                                                            class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                                                            placeholder="mes" id="card[exp_month]">

                                                                        <input size="4"
                                                                            data-culqi="card[exp_year]"
                                                                            class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                                                            placeholder="año" id="card[exp_year]">
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <div class="pt-8">
                                                        <button id="btn_pagar "
                                                            class="dark:bg-bgbtngreen  bg-bcklightbuscador dark:text-green_especialidad text-black font-inter font-medium text-lg h-12 rounded-lg px-6 focus:outline-none">

                                                            Comprar ahora</button>
                                                    </div>

                                                    <div class="items-center flex pt-10">


                                                        <svg width="48" height="48" viewBox="0 0 48 48"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect width="48" height="48" rx="24"
                                                                class="text-delesteicono dark:text-green_home "
                                                                fill="Currentcolor" />
                                                            <path class="text-delesteicono dark:text-green_home "
                                                                d="M18.0007 22.8006V20.4005C18.0007 17.0866 20.6872 14.4001 24.0011 14.4001C27.315 14.4001 30.0014 17.0866 30.0014 20.4005V22.8006C31.327 22.8006 32.4016 23.8752 32.4016 25.2008V31.2011C32.4016 32.5267 31.327 33.6012 30.0014 33.6012H18.0007C16.6752 33.6012 15.6006 32.5267 15.6006 31.2011V25.2008C15.6006 23.8752 16.6752 22.8006 18.0007 22.8006ZM27.6013 20.4005V22.8006H20.4009V20.4005C20.4009 18.4122 22.0127 16.8003 24.0011 16.8003C25.9894 16.8003 27.6013 18.4122 27.6013 20.4005Z"
                                                                fill="Currentcolor" />
                                                            <path class="dark:text-bgbtngreen text-bcklightbuscador"
                                                                d="M18.0007 22.8006V20.4005C18.0007 17.0866 20.6872 14.4001 24.0011 14.4001C27.315 14.4001 30.0014 17.0866 30.0014 20.4005V22.8006C31.327 22.8006 32.4016 23.8752 32.4016 25.2008V31.2011C32.4016 32.5267 31.327 33.6012 30.0014 33.6012H18.0007C16.6752 33.6012 15.6006 32.5267 15.6006 31.2011V25.2008C15.6006 23.8752 16.6752 22.8006 18.0007 22.8006ZM27.6013 20.4005V22.8006H20.4009V20.4005C20.4009 18.4122 22.0127 16.8003 24.0011 16.8003C25.9894 16.8003 27.6013 18.4122 27.6013 20.4005Z"
                                                                stroke="Currentcolor" />
                                                        </svg>

                                                        <div
                                                            class="text-bcklightbuscador font-bold text-sixteen font-inter pl-2">
                                                            Pago 100% seguro, protegemos tus datos.
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" id="panel-6"
                                            class="absolute top-0 invisible opacity-0 tab-wow p-6 transition duration-300">
                                            <div class=" " id="paypal-pay" role="tabpanel"
                                                aria-labelledby="paypal-tab">

                                                <button class="flex items-center focus:outline-none regresar">
                                                    <svg class="dark:text-bgbtngreen text-bcklightbuscador "
                                                        width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.33284 15.8332L2.49951 9.99983M2.49951 9.99983L8.33284 4.1665M2.49951 9.99983L17.4995 9.99983"
                                                            stroke="Currentcolor" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <div
                                                        class="dark:text-bgbtngreen pl-2 text-bcklightbuscador font-inter text-lg font-medium">
                                                        Regresar
                                                    </div>


                                                </button>
                                                <div
                                                    class="font-inter pt-4 font-bold sm:text-2xl text-xl text-black dark:text-bgprogresb">
                                                    Pago con paypal
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours pt-3 font-inter font-normal text-sixteen text-txtcommentply">
                                                    Antes de seguir con la compra, inicia sesión con tu cuenta de
                                                    PayPal:
                                                </div>
                                                <div class="pt-3 pb-8">
                                                    <div class="flex items-start ">



                                                        <div
                                                            class="dark:bg-black bg-whiteheader  dark:text-white-500 text-black border-2 rounded dark:border-txtcommentply border-borderconcours w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                                            <input type="checkbox" class="opacity-0 absolute">
                                                            <svg class="fill-current  w-4 h-4 text-green-500 pointer-events-none"
                                                                viewBox="0 0 20 20">
                                                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                            </svg>
                                                        </div>
                                                        <div
                                                            class="text-txtcommentply dark:text-borderconcours font-inter text-sm font-normal">
                                                            Estoy de acuerdo en realizar el pago en dólares (USD),
                                                            que esta suscripción se renovará de forma recurrente y
                                                            que puedo cancelar cuando quieras.
                                                        </div>

                                                    </div>
                                                </div>


                                                <div style="width:200px" id="paypal-button-container">

                                                </div>

                                                <script>
                                                    let datos_prodts = @json($products);
                                                    let productos = [];
                                                    let total = 0;
                                                    for (let index = 0; index < datos_prodts.length; index++) {
                                                        let producto = {
                                                            "name": datos_prodts[index].name,
                                                            /* Shows within upper-right dropdown during payment approval */
                                                            "description": "Curso grabado",
                                                            /* Item details will also be in the completed paypal.com transaction view */
                                                            "unit_amount": {
                                                                "currency_code": "USD",
                                                                "value": datos_prodts[index].price
                                                            },
                                                            "quantity": "1"
                                                        }
                                                        total += datos_prodts[index].price
                                                        productos.push(producto);
                                                    }
                                                    console.log(productos);
                                                    paypal.Buttons({

                                                        // Sets up the transaction when a payment button is clicked
                                                        createOrder: function(data, actions) {
                                                            return actions.order.create({
                                                                "purchase_units": [{
                                                                    "amount": {
                                                                        "currency_code": "USD",
                                                                        "value": total,
                                                                        "breakdown": {
                                                                            "item_total": {
                                                                                /* Required when including the `items` array */
                                                                                "currency_code": "USD",
                                                                                "value": total
                                                                            }
                                                                        }
                                                                    },
                                                                    "items": productos
                                                                }]
                                                            });
                                                        },

                                                        // Finalize the transaction after payer approval
                                                        onApprove: function(data, actions) {
                                                            return actions.order.capture().then(function(orderData) {
                                                                // Successful capture! For dev/demo purposes:
                                                                // console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                                                var transaction = orderData.purchase_units[0].payments.captures[0];
                                                                var email = orderData.payer.email_address;
                                                                var name = orderData.payer.name.given_name;
                                                                var apellidos = orderData.payer.name.surname;
                                                                var tipo_pay = 'PayPal';


                                                                var precio = 100;
                                                                var token = transaction.id;
                                                                var iddiplomado = 123;
                                                                var idprecio = 2;
                                                                axios.post('../../../createOrder', {
                                                                        firstName: 'Fred',
                                                                        lastName: 'Flintstone'
                                                                    })
                                                                    .then(function(response) {
                                                                        console.log(response);
                                                                    })
                                                                    .catch(function(error) {
                                                                        console.log(error);
                                                                    });

                                                            });
                                                        },
                                                        style: {
                                                            layout: 'vertical',
                                                            color: 'blue',
                                                            shape: 'rect',
                                                            label: 'paypal'
                                                        }
                                                    }).render('#paypal-button-container');
                                                </script>
                                                {{-- @endpush --}}
                                            </div>
                                        </div>
                                        <div role="tabpanel" id="panel-7"
                                            class="absolute top-0 invisible opacity-0 tab-wow w-full  transition duration-300">
                                            <div class="w-full">
                                                <button class="flex items-center focus:outline-none regresar">
                                                    <svg class="dark:text-bgbtngreen text-bcklightbuscador "
                                                        width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.33284 15.8332L2.49951 9.99983M2.49951 9.99983L8.33284 4.1665M2.49951 9.99983L17.4995 9.99983"
                                                            stroke="Currentcolor" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <div
                                                        class="dark:text-bgbtngreen pl-2 text-bcklightbuscador font-inter text-lg font-medium">
                                                        Regresar
                                                    </div>


                                                </button>

                                                <div class=" font-inter py-4 font-bold sm:text-2xl text-xl text-black dark:text-bgprogresb "
                                                    id="transfe-pay" role="tabpanel" aria-labelledby="transf-tab">
                                                    Pagos por transferencia
                                                </div>

                                                <div class="border border-fondoactualizar dark:border-txtcommentply">
                                                    <div class="p-4">
                                                        <div class="flex justify-between">
                                                            <svg width="25" height="20" viewBox="0 0 25 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <g clip-path="url(#clip0_4762_226596)">
                                                                    <path d="M0 0.998535H24.0039V19.0015H0V0.998535Z"
                                                                        fill="#D91023" />
                                                                    <path d="M8 0.998535H16.0038V19.0015H8V0.998535Z"
                                                                        fill="white" />
                                                                    <path
                                                                        d="M12.2051 7.01658C12.3554 7.05221 12.5086 7.09313 12.6324 7.17312C12.8273 7.30489 12.9479 7.50949 12.9335 7.71502C12.917 7.88662 12.8396 8.05088 12.7104 8.18851C12.5916 8.31337 12.4181 8.39752 12.2247 8.42396C12.1523 8.43385 12.0777 8.4346 12.0045 8.43565C11.977 8.44388 11.9778 8.47532 12.0065 8.47703C12.2626 8.48795 12.4697 8.39738 12.6577 8.26599C12.7485 8.19275 12.8195 8.10537 12.8663 8.00928C12.9415 7.86886 12.9795 7.71035 12.9384 7.55909C12.8805 7.33444 12.671 7.13744 12.3997 7.06132C12.3297 7.04059 12.2581 7.02361 12.1852 7.0105L12.2054 7.01644L12.2051 7.01658Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M11.9985 8.43729C11.9729 8.44654 11.9824 8.48226 12.0067 8.47677C12.0175 8.4686 12.018 8.43339 11.9982 8.43742L11.9985 8.43729ZM12.1638 6.98967C12.1408 6.9825 12.1171 7.00204 12.0985 6.99664C12.0784 6.99093 12.0959 6.97713 12.0803 6.97318C12.0654 6.96896 12.0544 6.97973 12.0333 6.9742C12.0127 6.96877 12.017 6.95375 12.0007 6.95108C11.9838 6.94806 11.9896 6.95877 11.9691 6.95358C11.9487 6.94839 11.9422 6.92561 11.9183 6.91787C11.8951 6.91047 11.8878 6.89217 11.9065 6.88769C11.9186 6.88464 11.929 6.8913 11.9473 6.88697C11.9658 6.88287 11.9657 6.87053 11.9824 6.87392C11.9987 6.87721 11.9988 6.89499 12.0185 6.90182C12.0381 6.90866 12.0382 6.89656 12.0536 6.9031C12.0693 6.90988 12.0665 6.91816 12.0803 6.92799C12.0942 6.93782 12.1107 6.92381 12.1315 6.93875C12.152 6.95344 12.1641 6.98953 12.1641 6.98953L12.1638 6.98967Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.1961 7.01506C12.1344 6.95995 12.0168 6.91594 11.9014 6.89746C11.9679 6.90504 12.1057 6.93235 12.2011 7.0121L12.1961 7.01506Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.0722 6.94307C12.0546 6.94194 12.0455 6.94645 12.0353 6.9499C12.0439 6.94529 12.0521 6.94058 12.0656 6.93943L12.0722 6.94307ZM11.9941 6.91866C11.9782 6.92152 11.9715 6.92814 11.9631 6.93423C11.9694 6.9275 11.9754 6.92091 11.9871 6.91677L11.9942 6.9189L11.9941 6.91866ZM12.0132 6.92095C11.997 6.91061 11.9899 6.90083 11.9816 6.89097C11.9881 6.90042 11.9942 6.91001 12.006 6.91981L12.0132 6.92095ZM12.0847 6.94556C12.0687 6.93546 12.0616 6.92567 12.0531 6.91558C12.0597 6.92526 12.0658 6.93485 12.078 6.94452L12.0847 6.94556ZM12.6272 7.18838C12.5971 7.19242 12.5759 7.21209 12.5518 7.21559C12.5258 7.21931 12.5402 7.19354 12.5207 7.19683C12.5009 7.20025 12.5001 7.2245 12.4731 7.229C12.4463 7.23375 12.4371 7.21381 12.4161 7.21902C12.3951 7.2246 12.4095 7.24503 12.3831 7.24987C12.3571 7.25458 12.3395 7.23085 12.3083 7.23445C12.278 7.23763 12.2618 7.21964 12.2813 7.20425C12.2946 7.19398 12.3155 7.19482 12.3354 7.17991C12.3553 7.165 12.3413 7.14949 12.3623 7.14491C12.3831 7.14008 12.3933 7.16367 12.419 7.16071C12.4447 7.15774 12.4446 7.13329 12.4654 7.13291C12.4864 7.13277 12.4827 7.15518 12.5028 7.15928C12.5233 7.16348 12.5221 7.14304 12.5524 7.14973C12.5828 7.15667 12.6272 7.18838 12.6272 7.18838Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.6683 7.1995C12.5557 7.16991 12.4217 7.18141 12.2783 7.22119C12.3589 7.19481 12.5334 7.15119 12.6789 7.19552L12.6683 7.1995Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.499 7.18172C12.478 7.18952 12.469 7.19971 12.4585 7.20935C12.4664 7.19934 12.474 7.18946 12.4897 7.18093L12.499 7.18172ZM12.397 7.19415C12.3796 7.20597 12.374 7.21748 12.3667 7.22944C12.3716 7.21797 12.3758 7.20677 12.3878 7.19521L12.397 7.19415ZM12.4202 7.18661C12.3969 7.18304 12.3839 7.17501 12.3701 7.1674C12.382 7.1756 12.3931 7.18384 12.4112 7.18914L12.4202 7.18661ZM12.5146 7.178C12.4917 7.17429 12.479 7.16613 12.4648 7.15865C12.4765 7.16809 12.4906 7.17549 12.506 7.18039L12.5146 7.178ZM12.9758 7.67483C12.9874 7.65229 12.9775 7.62634 12.9863 7.60825C12.9955 7.58904 13.015 7.61379 13.0214 7.59842C13.0281 7.58352 13.0034 7.56853 13.0123 7.54784C13.0213 7.52716 13.0467 7.53261 13.0519 7.51556C13.0566 7.49841 13.028 7.49571 13.0365 7.47554C13.0449 7.45513 13.0789 7.45757 13.0906 7.43466C13.1027 7.41222 13.13 7.41202 13.1359 7.43409C13.14 7.44908 13.1287 7.46259 13.1339 7.4847C13.1396 7.5069 13.1624 7.50655 13.157 7.52336C13.1512 7.54007 13.1213 7.53285 13.1111 7.55187C13.101 7.57088 13.127 7.58495 13.1164 7.59941C13.1063 7.6136 13.0849 7.59771 13.0699 7.60881C13.0553 7.62001 13.0771 7.63094 13.0546 7.64771C13.0306 7.66056 13.0039 7.66975 12.9758 7.67483Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.943 7.69559C13.0313 7.63792 13.0877 7.5411 13.1193 7.42198C13.1058 7.49163 13.0627 7.63394 12.9419 7.70504L12.943 7.69559Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M13.0482 7.59356C13.0505 7.57468 13.0447 7.56273 13.0397 7.54976C13.046 7.56119 13.0528 7.57235 13.054 7.58773L13.0482 7.59356ZM13.0872 7.51796C13.0836 7.49923 13.0742 7.48894 13.0656 7.477C13.0751 7.48692 13.0849 7.49608 13.0905 7.51101L13.087 7.51772L13.0872 7.51796ZM13.0833 7.53791C13.0989 7.52431 13.1138 7.52063 13.1288 7.51559C13.1144 7.51875 13.0999 7.5213 13.085 7.53041L13.0831 7.53767L13.0833 7.53791ZM13.0442 7.60623C13.0596 7.59277 13.0744 7.58909 13.0895 7.58405C13.0751 7.58721 13.0606 7.58976 13.0459 7.59911L13.0442 7.60623ZM12.9061 7.40265C12.9123 7.37876 12.8966 7.35482 12.9013 7.33545C12.906 7.31485 12.9303 7.3364 12.9336 7.32056C12.9364 7.30462 12.9088 7.29346 12.9126 7.27167C12.9169 7.24998 12.9432 7.25118 12.944 7.2336C12.9449 7.21602 12.9166 7.21763 12.9199 7.19635C12.9236 7.17493 12.9572 7.17245 12.964 7.14767C12.9705 7.12364 12.9971 7.11965 13.0079 7.14074C13.0151 7.1546 13.007 7.16981 13.0174 7.1908C13.0276 7.21217 13.0502 7.20813 13.0486 7.22574C13.0468 7.24312 13.0159 7.24053 13.0103 7.26093C13.005 7.28119 13.0334 7.29131 13.0264 7.30696C13.0194 7.32261 12.9948 7.31008 12.9829 7.32326C12.9711 7.33667 12.995 7.34441 12.9767 7.36431C12.9584 7.38421 12.9061 7.40265 12.9061 7.40265Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.8791 7.42832C12.9521 7.35791 12.9855 7.25391 12.9892 7.13105C12.9918 7.20191 12.9818 7.34931 12.8801 7.43804L12.8791 7.42832Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.9577 7.3109C12.956 7.29197 12.9475 7.28126 12.9396 7.26929C12.9484 7.27924 12.9575 7.28905 12.9622 7.30439L12.958 7.31077L12.9577 7.3109ZM12.9787 7.23023C12.971 7.21245 12.9594 7.2035 12.9484 7.19328C12.9598 7.20137 12.9718 7.2092 12.9806 7.22298L12.9787 7.23023ZM12.9794 7.25058C12.992 7.23491 13.0053 7.22908 13.0188 7.22188C13.0055 7.2271 12.9922 7.23193 12.9796 7.24316L12.9794 7.25058ZM12.9568 7.32404C12.969 7.30888 12.9824 7.30268 12.9959 7.29548C12.9826 7.30069 12.9694 7.30553 12.9568 7.31675L12.9565 7.32417L12.9568 7.32404ZM12.7647 7.31251C12.7315 7.31003 12.7018 7.32628 12.675 7.32436C12.6464 7.32289 12.6709 7.29886 12.6489 7.29819C12.6269 7.29752 12.6171 7.32244 12.5871 7.32166C12.5569 7.32064 12.5544 7.2973 12.5305 7.29844C12.5065 7.29996 12.5135 7.32445 12.4842 7.32364C12.455 7.32282 12.445 7.29403 12.4111 7.29121C12.3775 7.28825 12.3672 7.26565 12.3936 7.25376C12.4109 7.24576 12.4331 7.25112 12.4596 7.23985C12.4859 7.22833 12.4669 7.22245 12.4907 7.2223C12.5147 7.22139 12.5263 7.24405 12.5546 7.24689C12.5829 7.24912 12.5919 7.21472 12.6139 7.21885C12.636 7.22298 12.624 7.24603 12.6438 7.25471C12.6636 7.2634 12.6703 7.24183 12.7001 7.25547C12.7298 7.26911 12.7647 7.31251 12.7647 7.31251Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.805 7.33367C12.6971 7.27801 12.5508 7.26079 12.3848 7.27148C12.4798 7.26135 12.6799 7.25311 12.8178 7.33157L12.805 7.33367Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.6326 7.27796C12.6075 7.28188 12.5943 7.29055 12.5798 7.29853C12.5918 7.2898 12.6036 7.28084 12.6228 7.27547L12.6326 7.27796ZM12.5204 7.26927C12.4975 7.27766 12.4876 7.28887 12.4758 7.29945C12.4847 7.28865 12.4931 7.27774 12.5102 7.26828L12.5203 7.26903L12.5204 7.26927ZM12.5477 7.26623C12.5242 7.25735 12.5139 7.24587 12.5015 7.23535C12.511 7.24625 12.5202 7.2573 12.5374 7.26685L12.5475 7.26599L12.5477 7.26623ZM12.6506 7.27759C12.6274 7.26858 12.617 7.25747 12.6047 7.24657C12.6144 7.25772 12.6231 7.26866 12.6408 7.27831L12.6506 7.27759ZM12.8428 7.30628C12.843 7.28169 12.8216 7.26036 12.8212 7.2405C12.8207 7.2194 12.8502 7.23663 12.8489 7.2204C12.8477 7.2044 12.8183 7.1979 12.8166 7.17575C12.815 7.1536 12.8412 7.15074 12.8377 7.13324C12.8342 7.11575 12.8069 7.122 12.8053 7.10046C12.8035 7.07869 12.8355 7.07061 12.8357 7.04503C12.8359 7.02044 12.8607 7.01184 12.8765 7.03097C12.8872 7.04355 12.883 7.0598 12.8983 7.07883C12.9136 7.09786 12.9347 7.09067 12.9372 7.10796C12.9399 7.12549 12.9091 7.12796 12.9091 7.14896C12.9084 7.16999 12.9387 7.17508 12.9359 7.19164C12.9332 7.2082 12.9062 7.19998 12.8977 7.21533C12.8894 7.23031 12.915 7.23377 12.9019 7.25638C12.8888 7.279 12.8426 7.30604 12.8426 7.30604L12.8428 7.30628Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.8217 7.33646C12.8755 7.25485 12.8819 7.1467 12.8552 7.02518C12.8751 7.09472 12.9022 7.24157 12.8253 7.34593L12.8218 7.3367L12.8217 7.33646Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.8704 7.20741C12.8638 7.18945 12.8526 7.17998 12.8422 7.16949C12.8532 7.1781 12.8643 7.18633 12.8725 7.20039L12.8702 7.20779L12.8704 7.20741ZM12.8703 7.12466C12.8584 7.10819 12.8451 7.10129 12.8317 7.09317C12.8453 7.09931 12.8582 7.10511 12.8706 7.11724L12.8703 7.12466ZM12.8763 7.14451C12.8844 7.12707 12.8962 7.1191 12.9072 7.10955C12.8956 7.11715 12.8837 7.12389 12.8747 7.1373L12.876 7.14464L12.8763 7.14451ZM12.8722 7.22091C12.88 7.20361 12.8922 7.19574 12.9029 7.18633C12.8914 7.19355 12.8796 7.2003 12.8702 7.21384L12.8722 7.22091ZM12.5592 7.08279C12.5551 7.05729 12.5297 7.03752 12.5258 7.01671C12.5219 6.99467 12.5552 7.00949 12.5512 6.99289C12.5473 6.97591 12.5159 6.9726 12.5105 6.94964C12.505 6.92668 12.5318 6.92071 12.5252 6.90274C12.5186 6.88478 12.4913 6.89449 12.486 6.87214C12.4804 6.84956 12.5125 6.83727 12.5085 6.81079C12.5048 6.78516 12.5292 6.77324 12.5486 6.79132C12.5614 6.80355 12.5601 6.82103 12.5792 6.83926C12.5979 6.85738 12.6184 6.84726 12.6242 6.86526C12.6298 6.88339 12.5986 6.88921 12.6018 6.91129C12.6048 6.93313 12.6366 6.93531 12.6367 6.95309C12.6366 6.97063 12.607 6.96489 12.6012 6.9816C12.595 6.99844 12.6218 6.99913 12.6121 7.0243C12.6022 7.04923 12.5589 7.08293 12.5589 7.08293L12.5592 7.08279Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.5431 7.11613C12.5848 7.02484 12.5736 6.91111 12.5258 6.78689C12.5583 6.85731 12.6104 7.00791 12.5483 7.12553L12.5431 7.11613Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.5713 6.97637C12.5613 6.95805 12.5485 6.94964 12.536 6.93948C12.5488 6.94728 12.5617 6.9547 12.5728 6.96839L12.5713 6.97637ZM12.5572 6.88949C12.5421 6.87352 12.527 6.86806 12.5121 6.86061C12.5266 6.86573 12.5414 6.87034 12.556 6.88175L12.5572 6.88949ZM12.5666 6.90969C12.572 6.89063 12.5829 6.88084 12.5932 6.86971C12.5821 6.87865 12.5711 6.88721 12.5636 6.90217L12.5666 6.90969ZM12.5751 6.98991C12.5805 6.97086 12.5914 6.96106 12.6017 6.94993C12.5908 6.95911 12.5798 6.96768 12.5723 6.98263L12.5751 6.98991Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.43 7.03585C12.4312 7.01425 12.3947 6.99247 12.3951 6.97537C12.3959 6.95651 12.4218 6.97198 12.4215 6.95775C12.4215 6.94339 12.4025 6.93365 12.4021 6.91435C12.4022 6.89454 12.4249 6.8984 12.4228 6.88277C12.4204 6.86728 12.4077 6.87285 12.407 6.85369C12.4068 6.83463 12.4362 6.82777 12.4381 6.80551C12.4399 6.78363 12.463 6.77646 12.4767 6.79375C12.4856 6.80497 12.4803 6.81476 12.4935 6.83195C12.5062 6.84905 12.5237 6.84834 12.5253 6.86386C12.5264 6.87928 12.5009 6.87989 12.4998 6.89827C12.4981 6.91692 12.5142 6.91652 12.5107 6.93093C12.5071 6.94535 12.4941 6.94337 12.4856 6.95653C12.4774 6.96993 12.5031 6.98455 12.4899 7.00437C12.4766 7.0242 12.43 7.03585 12.43 7.03585Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.4065 7.06533C12.4609 7.00638 12.4786 6.89668 12.4611 6.78892C12.4756 6.85051 12.4889 6.9794 12.4125 7.06987L12.4065 7.06533Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.4604 6.94864C12.4555 6.93246 12.4459 6.92415 12.4372 6.91481C12.4467 6.92251 12.4561 6.92996 12.4632 6.94258L12.4604 6.94864ZM12.4651 6.87581C12.4554 6.86122 12.4436 6.85487 12.4318 6.84729C12.4435 6.85302 12.4556 6.85824 12.4658 6.86911L12.4651 6.87581ZM12.4698 6.89337C12.4779 6.87816 12.4893 6.87132 12.4998 6.86328C12.4889 6.86961 12.4776 6.87546 12.4682 6.88678L12.4695 6.8935L12.4698 6.89337ZM12.4619 6.96067C12.47 6.94546 12.4812 6.93838 12.4917 6.93034C12.4811 6.93653 12.4698 6.94239 12.4603 6.95408L12.4617 6.96043L12.4619 6.96067ZM12.6781 8.2155C12.6734 8.18906 12.6472 8.1671 12.6425 8.14572C12.6375 8.12287 12.6719 8.14011 12.6673 8.1228C12.6628 8.10548 12.6309 8.09985 12.6248 8.07594C12.6186 8.05204 12.6455 8.04791 12.6385 8.02886C12.6309 8.01009 12.6039 8.01842 12.5979 7.99513C12.5913 7.97174 12.6231 7.9612 12.6186 7.934C12.6141 7.90742 12.6383 7.89688 12.6587 7.91677C12.672 7.92971 12.6713 7.94752 12.6912 7.96731C12.7107 7.98724 12.7313 7.97835 12.7375 7.99682C12.744 8.01577 12.7124 8.01988 12.7161 8.04267C12.7199 8.06508 12.7525 8.06944 12.7528 8.08745C12.7531 8.10547 12.7233 8.09788 12.7175 8.11458C12.7119 8.13115 12.7393 8.13379 12.7299 8.15881C12.7208 8.18369 12.6781 8.2155 12.6781 8.2155Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.6663 8.23405C12.7063 8.14321 12.6889 8.04066 12.6366 7.91023C12.6714 7.98437 12.7318 8.12764 12.6719 8.24392L12.6663 8.23405Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.6875 8.10735C12.6768 8.0881 12.6634 8.07837 12.6505 8.06713C12.6635 8.07639 12.6771 8.08475 12.6883 8.09966L12.6875 8.10735ZM12.6707 8.01799C12.6554 8.00058 12.6399 7.99403 12.6241 7.9854C12.6394 7.99171 12.6545 7.99716 12.6696 8.00989L12.671 8.01786L12.6707 8.01799ZM12.6811 8.03899C12.686 8.01986 12.6969 8.01069 12.7066 7.99985C12.6959 8.00826 12.6846 8.01634 12.6776 8.03137L12.6813 8.03923L12.6811 8.03899ZM12.6924 8.12193C12.6973 8.1028 12.708 8.0934 12.7179 8.08279C12.7072 8.09121 12.6963 8.09915 12.689 8.11395L12.6924 8.12193ZM12.9029 7.53863C12.8685 7.53065 12.8279 7.54112 12.8002 7.53516C12.7705 7.52881 12.8098 7.51 12.7868 7.50567C12.7638 7.50134 12.7392 7.52352 12.7079 7.51761C12.6758 7.51174 12.6859 7.48927 12.6596 7.48646C12.6336 7.48351 12.6275 7.50825 12.5967 7.50245C12.5655 7.49678 12.5709 7.46787 12.5362 7.45941C12.5022 7.45091 12.5031 7.4279 12.5382 7.4209C12.5612 7.41634 12.5818 7.42498 12.6162 7.41864C12.6512 7.41202 12.6519 7.39259 12.6775 7.39606C12.7034 7.39938 12.6908 7.42555 12.7194 7.4327C12.7484 7.43971 12.7717 7.41685 12.7931 7.42447C12.8147 7.43233 12.789 7.45184 12.8053 7.46341C12.8219 7.47545 12.8407 7.45566 12.8647 7.47352C12.8892 7.49149 12.9029 7.53863 12.9029 7.53863Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.7795 7.48272C12.7506 7.48238 12.732 7.48846 12.7117 7.49338C12.7296 7.48734 12.7467 7.48072 12.771 7.47869L12.7795 7.48272ZM12.6646 7.45568C12.6352 7.46005 12.6186 7.46899 12.5999 7.47729C12.6158 7.46839 12.6307 7.45928 12.6541 7.45322L12.6643 7.45582L12.6646 7.45568ZM12.6953 7.45741C12.6752 7.44505 12.6703 7.43271 12.663 7.42048C12.6673 7.43248 12.6704 7.44442 12.6838 7.45636L12.6953 7.45741ZM12.799 7.48549C12.7792 7.47299 12.7743 7.46065 12.7671 7.44842C12.7714 7.46042 12.7746 7.4726 12.788 7.48454L12.799 7.48549Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.9184 7.55621C12.8335 7.48547 12.7018 7.45321 12.5186 7.43555C12.6258 7.44177 12.8292 7.45909 12.9333 7.55637L12.9184 7.55621Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.9034 7.72443C12.878 7.70809 12.8218 7.72068 12.8009 7.70771C12.7788 7.69368 12.8189 7.68248 12.8016 7.67231C12.784 7.66227 12.7547 7.68124 12.7304 7.66756C12.7068 7.65361 12.7242 7.63126 12.7029 7.62226C12.682 7.61312 12.6677 7.63855 12.644 7.62559C12.6204 7.61225 12.6364 7.58192 12.6106 7.56449C12.5855 7.54739 12.596 7.52215 12.6276 7.52286C12.649 7.5232 12.6627 7.53725 12.694 7.5381C12.7255 7.53919 12.7339 7.51776 12.7541 7.52755C12.774 7.53747 12.7531 7.56309 12.7741 7.57729C12.7955 7.59159 12.8244 7.57191 12.8396 7.58527C12.8541 7.59868 12.8246 7.61419 12.8337 7.6307C12.8429 7.6472 12.8663 7.63 12.8793 7.65522C12.8923 7.68044 12.9034 7.72443 12.9034 7.72443Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.8168 7.64482C12.793 7.63769 12.7625 7.64125 12.7434 7.64241C12.7656 7.63791 12.7885 7.63648 12.8112 7.63817L12.817 7.64506L12.8168 7.64482ZM12.7441 7.59916C12.7327 7.58118 12.7333 7.56657 12.7323 7.55143C12.7309 7.56545 12.729 7.57938 12.7354 7.59549L12.7444 7.59902L12.7441 7.59916ZM12.8262 7.644C12.8145 7.62616 12.8091 7.62098 12.8079 7.60597C12.8064 7.62 12.811 7.6246 12.8174 7.64071L12.8263 7.64424L12.8262 7.644Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.9247 7.76605C12.8821 7.66941 12.7512 7.5963 12.6055 7.53516C12.6922 7.56648 12.8889 7.63977 12.9369 7.76967L12.9247 7.76605Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.7202 7.59062C12.6938 7.58864 12.6761 7.5946 12.6572 7.59912C12.6738 7.59309 12.6904 7.58668 12.7123 7.58526L12.72 7.59037L12.7202 7.59062Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.2445 6.99691C12.2265 6.98291 12.1944 6.99263 12.1799 6.98144C12.1642 6.96956 12.1873 6.963 12.1751 6.9543C12.1628 6.9456 12.1475 6.95142 12.131 6.93958C12.1144 6.92774 12.1258 6.91581 12.1118 6.90756C12.0979 6.89931 12.0975 6.91097 12.0812 6.89937C12.0648 6.88777 12.0701 6.86523 12.0518 6.85038C12.034 6.83625 12.0363 6.81732 12.0557 6.81924C12.0686 6.8206 12.0754 6.82994 12.0946 6.83223C12.114 6.83477 12.1198 6.82347 12.1334 6.83185C12.1469 6.84062 12.1382 6.85676 12.1531 6.86905C12.1682 6.8812 12.1741 6.87113 12.185 6.88237C12.196 6.89324 12.1894 6.90012 12.1976 6.9136C12.2055 6.92683 12.2278 6.92007 12.2395 6.94019C12.2512 6.9603 12.2445 6.99691 12.2445 6.99691Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.2602 7.02982C12.2306 6.96001 12.144 6.88143 12.0459 6.82666C12.1035 6.85518 12.2178 6.92575 12.2664 7.02891L12.2602 7.02982Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.1816 6.92467C12.1659 6.91787 12.1553 6.91863 12.1438 6.91819C12.154 6.91695 12.1637 6.91537 12.1771 6.91906L12.1816 6.92467ZM12.121 6.87668C12.105 6.87386 12.0952 6.87743 12.0844 6.88017C12.0936 6.87627 12.1025 6.87212 12.1157 6.87211L12.1213 6.87654L12.121 6.87668ZM12.1377 6.88492C12.1279 6.87028 12.1262 6.85897 12.1231 6.84699C12.1247 6.85805 12.1255 6.86854 12.1316 6.88138L12.138 6.88478L12.1377 6.88492ZM12.1921 6.93097C12.182 6.91647 12.1802 6.90517 12.1774 6.89342C12.1788 6.90425 12.1796 6.91473 12.1861 6.92767L12.1921 6.93097ZM12.3074 6.99676C12.2952 6.98038 12.2674 6.97887 12.257 6.96612C12.246 6.95265 12.2932 6.93565 12.2842 6.92543C12.2754 6.91545 12.2598 6.92141 12.2476 6.90787C12.2355 6.89434 12.25 6.88126 12.2392 6.87187C12.2284 6.86248 12.2252 6.87515 12.2132 6.86185C12.2014 6.8488 12.1978 6.82941 12.1849 6.81269C12.1725 6.79607 12.1803 6.77527 12.1975 6.77816C12.2091 6.77983 12.2124 6.79044 12.2295 6.79371C12.2466 6.79697 12.2563 6.78449 12.2711 6.78886C12.2861 6.7931 12.289 6.801 12.2995 6.81499C12.3098 6.82935 12.318 6.81794 12.3251 6.8306C12.3323 6.84326 12.324 6.85059 12.3277 6.86576C12.3313 6.8807 12.354 6.87342 12.359 6.89634C12.3643 6.91911 12.3077 6.99662 12.3077 6.99662L12.3074 6.99676Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.294 7.03574C12.3297 6.95043 12.294 6.83429 12.1865 6.78578C12.2396 6.80943 12.2793 6.84846 12.2975 6.89484C12.3147 6.94045 12.3155 6.98901 12.2998 7.03497L12.294 7.03574Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.3027 6.92038C12.2891 6.91244 12.2735 6.90714 12.2569 6.90492C12.2664 6.90372 12.2888 6.90993 12.3002 6.9142L12.3027 6.92038ZM12.2684 6.85088C12.254 6.84738 12.2442 6.85094 12.2337 6.85354C12.2429 6.84964 12.2524 6.84523 12.2646 6.84563L12.2684 6.85088ZM12.2721 6.84985C12.2671 6.83304 12.2687 6.82086 12.2693 6.80749C12.2673 6.81957 12.2653 6.83164 12.2676 6.84586L12.2721 6.84985ZM12.3069 6.92129C12.3018 6.90486 12.3236 6.90147 12.335 6.89178C12.3245 6.89661 12.3001 6.90309 12.3018 6.91758L12.3069 6.92129ZM12.2164 7.04013C12.1891 7.0381 12.1756 7.00899 12.1539 7.00694C12.1306 7.00497 12.1404 7.02525 12.1227 7.02326C12.1052 7.02114 12.0998 7.00645 12.0758 7.00353C12.0515 7.00074 12.0478 7.0171 12.0293 7.01354C12.0106 7.00974 12.0225 7.00139 11.9988 6.99833C11.9753 6.99551 11.956 7.01558 11.9279 7.0136C11.9 7.01185 11.8827 7.02713 11.8989 7.03907C11.9097 7.04683 11.9237 7.04479 11.9403 7.05622C11.9566 7.06779 11.9495 7.07999 11.9681 7.08317C11.9867 7.08635 11.9968 7.06833 12.0203 7.06992C12.0437 7.07152 12.0374 7.08269 12.057 7.08224C12.0766 7.08179 12.0782 7.07245 12.0975 7.06832C12.1171 7.06404 12.1259 7.08449 12.155 7.07803C12.184 7.07132 12.2164 7.04013 12.2164 7.04013Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.2626 7.02759C12.1696 7.05778 12.0268 7.05486 11.8994 7.02734C11.9709 7.0463 12.1253 7.07375 12.2659 7.03275L12.2627 7.02783L12.2626 7.02759Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.0978 7.04995C12.0796 7.04403 12.0726 7.03607 12.064 7.02857C12.0703 7.03618 12.0759 7.04445 12.0892 7.05074L12.0978 7.04995ZM12.0051 7.04303C11.9905 7.03383 11.9873 7.02446 11.9823 7.01531C11.9849 7.02433 11.9874 7.03336 11.9969 7.04268L12.0053 7.04326L12.0051 7.04303ZM12.0255 7.0486C12.0035 7.05238 11.9911 7.05941 11.977 7.06589C11.9887 7.0589 12.0004 7.05191 12.0179 7.04699L12.0255 7.0486ZM12.112 7.05261C12.0901 7.05638 12.0774 7.06317 12.0634 7.06966C12.0753 7.06291 12.0868 7.05568 12.1043 7.05075L12.112 7.05261ZM12.3328 7.08133C12.3028 7.08401 12.2865 7.05363 12.2622 7.05529C12.2367 7.0575 12.2485 7.07883 12.2293 7.07975C12.2095 7.08058 12.2029 7.06481 12.1763 7.06597C12.1495 7.0675 12.1465 7.08707 12.1258 7.08608C12.1054 7.08533 12.1181 7.07371 12.0918 7.07473C12.0654 7.07575 12.0459 7.10228 12.0143 7.10541C11.9842 7.10846 11.966 7.129 11.9844 7.13962C11.9967 7.14669 12.0119 7.14126 12.0307 7.15137C12.0494 7.16123 12.0422 7.17666 12.0629 7.17666C12.0836 7.17665 12.0936 7.15453 12.1192 7.15194C12.1453 7.14945 12.1389 7.16324 12.1602 7.15912C12.1813 7.15514 12.183 7.1438 12.2042 7.13561C12.2252 7.12719 12.2363 7.14855 12.2679 7.13552C12.2994 7.12288 12.3328 7.08133 12.3328 7.08133Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.3815 7.05814C12.2811 7.10958 12.1245 7.13318 11.9834 7.12598C12.0625 7.13405 12.2338 7.13621 12.3854 7.06302L12.3815 7.05814Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.2023 7.11465C12.1822 7.11153 12.1742 7.10376 12.1644 7.09681C12.1716 7.10462 12.1782 7.11271 12.1931 7.11731L12.2023 7.11465ZM12.1006 7.12436C12.0839 7.11675 12.0799 7.1068 12.0738 7.0972C12.0773 7.10704 12.0801 7.11693 12.0917 7.12528L12.1006 7.12436ZM12.1233 7.1266C12.0995 7.13504 12.0859 7.14546 12.0707 7.15534C12.0834 7.14534 12.096 7.13509 12.1146 7.12615L12.123 7.12674L12.1233 7.1266ZM12.2183 7.11462C12.1942 7.1232 12.1809 7.13348 12.1659 7.1436C12.1784 7.13336 12.1906 7.12325 12.2097 7.11441L12.2181 7.115L12.2183 7.11462Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.4249 7.1151C12.3949 7.11938 12.3763 7.08973 12.3523 7.09286C12.3267 7.09607 12.3406 7.11704 12.321 7.1191C12.3017 7.12102 12.294 7.10543 12.2673 7.1082C12.2406 7.11096 12.2393 7.13069 12.2186 7.13069C12.1981 7.13094 12.21 7.11874 12.1839 7.12123C12.1578 7.12372 12.1401 7.15104 12.1092 7.15573C12.0786 7.16029 12.0623 7.18185 12.0816 7.19144C12.0943 7.198 12.1096 7.19158 12.1288 7.20055C12.1482 7.20976 12.1425 7.22512 12.163 7.22426C12.1835 7.2234 12.1919 7.20074 12.2172 7.19667C12.243 7.19271 12.2378 7.20694 12.2587 7.20173C12.2794 7.19666 12.2804 7.18536 12.3007 7.17597C12.321 7.16659 12.3338 7.18712 12.3641 7.1728C12.3946 7.15811 12.4249 7.1151 12.4249 7.1151Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.472 7.08966C12.3759 7.14646 12.2211 7.17813 12.0801 7.17822C12.1597 7.18194 12.3306 7.17534 12.4762 7.0944L12.4718 7.09003L12.472 7.08966Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.2971 7.1552C12.2764 7.15298 12.268 7.14572 12.2576 7.13904C12.2654 7.14658 12.2726 7.1544 12.2878 7.15825L12.2974 7.15506L12.2971 7.1552ZM12.1962 7.16994C12.1793 7.16308 12.1739 7.15345 12.1669 7.14426C12.1715 7.15394 12.1753 7.16365 12.1872 7.17124L12.1964 7.17018L12.1962 7.16994ZM12.219 7.17119C12.1956 7.18073 12.1833 7.19183 12.1688 7.20267C12.1808 7.1917 12.1922 7.18101 12.2105 7.17098L12.2187 7.17133L12.219 7.17119ZM12.3128 7.15432C12.2896 7.1641 12.2771 7.17496 12.2626 7.1858C12.2748 7.17507 12.286 7.16414 12.3045 7.15435L12.3125 7.15446L12.3128 7.15432Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.1322 8.42009C12.1445 8.40067 12.1721 8.39142 12.1824 8.37582C12.1934 8.35957 12.1613 8.36321 12.1702 8.35053C12.1793 8.33833 12.2062 8.34348 12.2187 8.32653C12.2312 8.30958 12.2114 8.29827 12.2232 8.28582C12.2348 8.27313 12.2537 8.2877 12.2659 8.27089C12.2781 8.2547 12.2565 8.23692 12.2693 8.21699C12.2814 8.19733 12.266 8.1821 12.2437 8.19147C12.2288 8.198 12.2238 8.21211 12.2018 8.22196C12.1803 8.23191 12.1675 8.21865 12.1564 8.23145C12.1456 8.2441 12.1687 8.25674 12.1583 8.27333C12.1481 8.29017 12.1214 8.28402 12.1154 8.29793C12.1095 8.31183 12.1349 8.31445 12.134 8.32923C12.1331 8.34401 12.111 8.33826 12.1102 8.36034C12.1091 8.38256 12.1322 8.42009 12.1322 8.42009Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.1326 8.45001C12.1311 8.36784 12.1801 8.28053 12.2626 8.19395C12.2116 8.24204 12.1163 8.3479 12.1252 8.4563L12.1328 8.45024L12.1326 8.45001Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.1601 8.3323C12.1742 8.32037 12.1875 8.31676 12.2012 8.31202C12.1869 8.31444 12.1734 8.31917 12.1615 8.32593L12.1598 8.33244L12.1601 8.3323ZM12.2011 8.26714C12.219 8.25824 12.2332 8.25744 12.248 8.25536C12.2344 8.25589 12.2205 8.25594 12.2049 8.26127L12.2011 8.26714ZM12.1867 8.28082C12.189 8.26413 12.1836 8.25388 12.1795 8.2427C12.1849 8.25234 12.191 8.26194 12.1915 8.27539L12.1867 8.28082ZM12.1512 8.34213C12.1537 8.32568 12.1481 8.31519 12.1441 8.30401C12.1496 8.31389 12.1555 8.32325 12.1566 8.3368L12.1514 8.34237L12.1512 8.34213Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.1875 8.48047C12.2206 8.47665 12.2452 8.45383 12.2719 8.45007C12.3004 8.44648 12.283 8.47588 12.3049 8.47248C12.3268 8.46871 12.3294 8.44076 12.3588 8.43576C12.3888 8.43086 12.3981 8.45428 12.4213 8.44834C12.4443 8.44217 12.4299 8.41825 12.4589 8.41315C12.4878 8.40805 12.5057 8.43613 12.5404 8.43224C12.5738 8.4289 12.5907 8.4501 12.5682 8.4675C12.5532 8.47923 12.5302 8.47836 12.5078 8.49538C12.485 8.51231 12.4995 8.53017 12.4762 8.53549C12.453 8.54081 12.4433 8.51308 12.4145 8.51619C12.3863 8.51903 12.3853 8.54752 12.3623 8.54764C12.3391 8.54751 12.3447 8.52164 12.3225 8.51628C12.3005 8.51115 12.3009 8.53488 12.2675 8.52671C12.2344 8.51841 12.1875 8.48047 12.1875 8.48047Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.143 8.46653C12.2648 8.50273 12.4128 8.49141 12.572 8.44754C12.4821 8.47696 12.2884 8.52497 12.1309 8.47119L12.143 8.46653Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.3278 8.48997C12.3512 8.48107 12.3616 8.4696 12.3737 8.45828C12.3641 8.46972 12.3554 8.48137 12.3378 8.49109L12.3278 8.48997ZM12.44 8.47693C12.4598 8.46365 12.4664 8.45013 12.4746 8.43679C12.4693 8.44975 12.4641 8.46295 12.4501 8.47608L12.44 8.47693ZM12.4144 8.48556C12.4396 8.49015 12.4531 8.49949 12.4683 8.50839C12.4558 8.49887 12.4437 8.48921 12.424 8.48276L12.4141 8.4857L12.4144 8.48556ZM12.3103 8.49426C12.3353 8.49862 12.3489 8.5082 12.3641 8.51709C12.3516 8.50757 12.3398 8.49778 12.3198 8.49146L12.3103 8.49426Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.6312 8.30577C12.6622 8.29463 12.6783 8.26715 12.7029 8.25768C12.729 8.24752 12.7219 8.28014 12.7417 8.27165C12.7613 8.26353 12.7552 8.23575 12.782 8.22432C12.809 8.21313 12.8254 8.23362 12.8457 8.22262C12.8658 8.21177 12.8445 8.19164 12.871 8.18035C12.8975 8.16906 12.9232 8.19194 12.955 8.18077C12.9862 8.16988 13.0091 8.18671 12.9931 8.20875C12.9824 8.22323 12.9599 8.22728 12.9435 8.24884C12.9272 8.2704 12.9467 8.28468 12.9263 8.29506C12.9056 8.30496 12.8875 8.28047 12.8607 8.28968C12.8343 8.29898 12.8424 8.32679 12.8202 8.33193C12.7981 8.33708 12.7953 8.31062 12.7724 8.31036C12.7494 8.31048 12.7571 8.33336 12.7227 8.33266C12.6884 8.33196 12.6315 8.30563 12.6315 8.30563L12.6312 8.30577Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.5846 8.30238C12.7127 8.31006 12.8511 8.26648 12.9904 8.18878C12.9132 8.2372 12.7425 8.32654 12.5746 8.30953L12.5846 8.30238Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.7688 8.28408C12.7885 8.27055 12.7948 8.2568 12.8029 8.24322C12.7974 8.25656 12.7926 8.26962 12.7791 8.28285L12.769 8.28432L12.7688 8.28408ZM12.8729 8.24652C12.8875 8.22929 12.8896 8.21463 12.8933 8.1999C12.8921 8.21377 12.8913 8.2275 12.882 8.24324L12.8726 8.24666L12.8729 8.24652ZM12.8508 8.26053C12.8763 8.25955 12.8922 8.26557 12.9097 8.27053C12.8946 8.26447 12.88 8.25752 12.8592 8.25569L12.8508 8.26053ZM12.7533 8.29223C12.7789 8.29087 12.7949 8.29713 12.8121 8.30223C12.7972 8.29579 12.7828 8.28908 12.7617 8.28738L12.7533 8.29223Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.4329 8.36654C12.4392 8.34774 12.4616 8.33359 12.467 8.31841C12.4727 8.3021 12.4446 8.3122 12.4495 8.29976C12.4544 8.28731 12.4799 8.28571 12.4867 8.26862C12.4936 8.25176 12.473 8.24695 12.48 8.23353C12.4877 8.22046 12.508 8.22824 12.5148 8.21176C12.5219 8.19514 12.4979 8.18556 12.5039 8.1659C12.5099 8.14662 12.4918 8.1375 12.4741 8.15044C12.4624 8.15902 12.4618 8.17199 12.4443 8.18517C12.4273 8.19845 12.4123 8.19041 12.4059 8.20354C12.3992 8.21682 12.4234 8.22219 12.4185 8.23809C12.4136 8.25436 12.3881 8.25534 12.386 8.26839C12.3843 8.28155 12.408 8.27795 12.4111 8.2905C12.4142 8.30306 12.3924 8.30324 12.3978 8.32173C12.4026 8.34049 12.4331 8.36678 12.4331 8.36678L12.4329 8.36654Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.4413 8.38196C12.4182 8.31286 12.4408 8.23921 12.493 8.1478C12.4595 8.19931 12.4 8.29987 12.4366 8.38863L12.4416 8.38182L12.4413 8.38196Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.436 8.28803C12.446 8.2742 12.4573 8.26834 12.4683 8.26101C12.4573 8.26673 12.4459 8.27197 12.4357 8.28211L12.4358 8.28779L12.436 8.28803ZM12.4564 8.22349C12.47 8.21207 12.4827 8.20812 12.4958 8.20305C12.4835 8.20648 12.4711 8.20967 12.4586 8.2177L12.4564 8.22349ZM12.4468 8.23842C12.4445 8.22418 12.437 8.21651 12.43 8.20794C12.438 8.2151 12.4459 8.22164 12.45 8.23282L12.4468 8.23842ZM12.4307 8.29781C12.4284 8.28357 12.4211 8.27614 12.4144 8.26743C12.4219 8.27449 12.4298 8.28104 12.4343 8.29232L12.4307 8.29781ZM12.5791 8.27708C12.5804 8.25674 12.5993 8.23876 12.6008 8.22212C12.6021 8.20462 12.5762 8.21947 12.5779 8.2059C12.58 8.1922 12.6054 8.18653 12.6076 8.168C12.61 8.14933 12.5879 8.14742 12.5918 8.13289C12.5958 8.11798 12.6189 8.12293 12.6214 8.10488C12.624 8.08645 12.597 8.08045 12.598 8.05926C12.5989 8.03844 12.5782 8.03177 12.5635 8.04781C12.5538 8.05866 12.5566 8.072 12.5425 8.08839C12.5286 8.10439 12.5108 8.09857 12.5079 8.1133C12.5045 8.12793 12.5308 8.12951 12.5299 8.14712C12.5294 8.16458 12.5035 8.16953 12.505 8.18319C12.5066 8.19708 12.5298 8.18991 12.5362 8.20222C12.5427 8.21452 12.5209 8.21792 12.5308 8.23661C12.5408 8.25493 12.5788 8.27722 12.5788 8.27722L12.5791 8.27708Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.5914 8.29148C12.5494 8.2244 12.553 8.14485 12.5819 8.04279C12.5614 8.10111 12.5272 8.21358 12.5877 8.29958L12.5911 8.29162L12.5914 8.29148Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.5596 8.19521C12.5662 8.17999 12.576 8.17195 12.5854 8.16281C12.5757 8.17047 12.5656 8.17742 12.5578 8.18934L12.5596 8.19521ZM12.5635 8.12587C12.5746 8.11181 12.5862 8.10578 12.5983 8.09863C12.5863 8.10417 12.5749 8.10943 12.5639 8.11965L12.5635 8.12587ZM12.5572 8.14256C12.5516 8.12818 12.5417 8.12158 12.5325 8.11395C12.542 8.11983 12.552 8.12543 12.5592 8.1365L12.5572 8.14256ZM12.5573 8.20649C12.551 8.19215 12.5413 8.18541 12.5325 8.17764C12.5421 8.18376 12.5517 8.18926 12.5592 8.2002L12.5573 8.20649Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.953 7.86102C12.9688 7.84036 12.964 7.81387 12.9762 7.79709C12.9895 7.77913 13.0038 7.80603 13.0132 7.79209C13.023 7.77802 13.0013 7.76002 13.014 7.74073C13.0272 7.72192 13.0518 7.73063 13.06 7.71441C13.0682 7.69819 13.04 7.69175 13.0529 7.67308C13.0652 7.6543 13.0983 7.661 13.1147 7.64006C13.1311 7.61973 13.1582 7.62312 13.1598 7.64568C13.1609 7.66108 13.1467 7.67278 13.1477 7.69523C13.1488 7.71769 13.1719 7.72041 13.1629 7.73606C13.1538 7.7517 13.1256 7.74081 13.1118 7.75805C13.0981 7.77553 13.1209 7.79274 13.1078 7.80549C13.0945 7.818 13.0764 7.79957 13.0595 7.80867C13.0424 7.81753 13.0621 7.83167 13.0365 7.84477C13.0107 7.85763 12.9527 7.86116 12.9527 7.86116L12.953 7.86102Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.9165 7.87703C13.0155 7.83196 13.0907 7.74463 13.146 7.63179C13.1188 7.69851 13.0475 7.83216 12.9137 7.88632L12.9165 7.87703Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M13.0404 7.79038C13.0465 7.77228 13.0426 7.75973 13.0405 7.74635C13.0446 7.75815 13.0491 7.76981 13.0472 7.78536L13.0404 7.79038ZM13.094 7.72103C13.0944 7.70234 13.0869 7.69082 13.081 7.67825C13.0885 7.68914 13.0964 7.69952 13.0988 7.71499L13.094 7.72103ZM13.0864 7.74044C13.1044 7.72894 13.1198 7.72758 13.1358 7.72434C13.1207 7.72556 13.1061 7.72626 13.0896 7.73324L13.0863 7.7402L13.0864 7.74044ZM13.0339 7.80232C13.0518 7.7912 13.0672 7.78947 13.0834 7.78646C13.0684 7.78768 13.0534 7.78852 13.0368 7.79526L13.0339 7.80232Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.7684 7.23202C12.7643 7.2065 12.7389 7.18669 12.735 7.16586C12.731 7.14379 12.7644 7.15863 12.7602 7.14177C12.756 7.1249 12.7249 7.12145 12.7199 7.09856C12.7149 7.07568 12.7409 7.06973 12.7343 7.05174C12.7277 7.03376 12.7005 7.04348 12.6949 7.02086C12.6898 6.99835 12.7217 6.98619 12.7177 6.95967C12.7139 6.934 12.7383 6.92207 12.7578 6.94018C12.7706 6.95243 12.7693 6.96993 12.7883 6.98794C12.8071 7.00632 12.8277 6.99618 12.8335 7.01421C12.8391 7.03237 12.8078 7.0382 12.811 7.0603C12.814 7.08217 12.8459 7.08435 12.846 7.10215C12.8459 7.11972 12.8163 7.11397 12.8104 7.1307C12.8043 7.14757 12.8311 7.14826 12.8214 7.17346C12.8115 7.19842 12.7681 7.23216 12.7681 7.23216L12.7684 7.23202Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.7534 7.26541C12.7951 7.17412 12.7836 7.06052 12.7358 6.93631C12.7683 7.00672 12.8204 7.15732 12.7581 7.27471L12.7531 7.26555L12.7534 7.26541Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.7811 7.12554C12.7714 7.10709 12.7583 7.09882 12.7457 7.08866C12.7585 7.09645 12.7715 7.10387 12.7825 7.11756L12.7811 7.12554ZM12.7675 7.03876C12.7524 7.02279 12.7371 7.0171 12.7224 7.00989C12.7368 7.01501 12.7517 7.01961 12.7663 7.03103L12.7675 7.03876ZM12.7769 7.05897C12.7823 7.03991 12.7931 7.03011 12.8033 7.01874C12.7924 7.02792 12.7814 7.03649 12.7739 7.05144L12.7769 7.05897ZM12.7854 7.13919C12.7908 7.12013 12.8016 7.11034 12.8119 7.09921C12.801 7.10839 12.7901 7.11695 12.7825 7.13191L12.7854 7.13919Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.6604 7.14099C12.6604 7.11675 12.6395 7.09549 12.6388 7.07574C12.6383 7.05461 12.6678 7.07187 12.6665 7.05561C12.6654 7.03921 12.6357 7.03285 12.634 7.01067C12.6328 6.98859 12.6589 6.98548 12.6551 6.9681C12.6519 6.95045 12.6243 6.95685 12.6227 6.93528C12.6209 6.91348 12.6529 6.90539 12.6531 6.87977C12.6538 6.85526 12.6784 6.8464 12.6943 6.86556C12.7049 6.87815 12.7008 6.89443 12.7161 6.91348C12.7311 6.93267 12.7525 6.92533 12.7551 6.94265C12.7577 6.96058 12.7271 6.96292 12.7266 6.98384C12.7262 7.00476 12.7564 7.01023 12.7537 7.02681C12.7509 7.04339 12.7237 7.03493 12.7155 7.05016C12.7072 7.06515 12.7325 7.06876 12.7197 7.09127C12.7069 7.11377 12.6601 7.14112 12.6601 7.14112L12.6604 7.14099Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.6402 7.17117C12.6938 7.0897 12.7002 6.98155 12.6736 6.85966C12.6935 6.92919 12.72 7.07632 12.6439 7.18064L12.6404 7.17141L12.6402 7.17117Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.6883 7.04172C12.6817 7.02376 12.6705 7.01429 12.6604 7.00366C12.6711 7.01241 12.6825 7.02051 12.6907 7.03457L12.6881 7.0421L12.6883 7.04172ZM12.6882 6.95897C12.6763 6.9425 12.6633 6.93547 12.6499 6.92735C12.6632 6.93362 12.6764 6.93929 12.6884 6.95155L12.6882 6.95897ZM12.6945 6.97868C12.7023 6.96139 12.7141 6.95341 12.7251 6.94387C12.7138 6.95133 12.7019 6.95807 12.6926 6.97161L12.6942 6.97882L12.6945 6.97868ZM12.6905 7.05532C12.6985 7.03765 12.7102 7.02968 12.7214 7.02037C12.7099 7.02759 12.6978 7.03447 12.6887 7.04788L12.6905 7.05532ZM12.8228 7.39628C12.7899 7.39366 12.7602 7.4099 12.7332 7.40836C12.7048 7.40651 12.7294 7.38273 12.7075 7.38205C12.6853 7.38114 12.6753 7.40644 12.6452 7.40542C12.6153 7.40426 12.6126 7.3813 12.5888 7.38244C12.5646 7.38372 12.572 7.40832 12.5428 7.4075C12.5133 7.40682 12.5035 7.37789 12.469 7.37473C12.4359 7.37187 12.4253 7.34941 12.4517 7.33752C12.4693 7.32939 12.4912 7.33488 12.5177 7.32361C12.5444 7.31219 12.5252 7.30645 12.5491 7.30592C12.573 7.30539 12.5844 7.32782 12.6127 7.33065C12.6411 7.33312 12.6499 7.29848 12.6722 7.30285C12.6949 7.3067 12.6824 7.32965 12.7021 7.33871C12.7223 7.3475 12.7284 7.32559 12.7581 7.33923C12.7879 7.35287 12.8231 7.39614 12.8231 7.39614L12.8228 7.39628Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.8626 7.41717C12.7547 7.3615 12.6086 7.34453 12.4424 7.35498C12.5375 7.34485 12.7375 7.3366 12.8751 7.4152L12.8626 7.41717Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.6901 7.36166C12.6649 7.36534 12.6521 7.3741 12.6371 7.38199C12.6494 7.37312 12.6611 7.36453 12.6808 7.35865L12.6901 7.36166ZM12.5781 7.35258C12.555 7.36135 12.5453 7.37219 12.5331 7.3829C12.5425 7.3722 12.5508 7.36106 12.5678 7.3516L12.5781 7.35258ZM12.6051 7.34968C12.5818 7.34067 12.5714 7.32956 12.5592 7.31866C12.5687 7.32957 12.5775 7.34076 12.5951 7.35016L12.6049 7.34945L12.6051 7.34968ZM12.7083 7.36091C12.6852 7.35213 12.6748 7.34102 12.6623 7.33026C12.672 7.34103 12.6809 7.35222 12.6981 7.36177L12.7083 7.36091ZM12.9627 7.54642C12.9687 7.52267 12.9533 7.49859 12.9578 7.47898C12.9621 7.45852 12.9869 7.48017 12.9897 7.46423C12.9929 7.44815 12.9655 7.43723 12.9693 7.41544C12.9733 7.39351 12.9995 7.39509 13.0007 7.37737C13.0015 7.35979 12.9732 7.3614 12.9766 7.34012C12.9802 7.3187 13.0137 7.31598 13.0202 7.29134C13.0269 7.26755 13.0535 7.26318 13.0644 7.28428C13.0718 7.29837 13.0635 7.31334 13.074 7.33457C13.0841 7.3557 13.1065 7.35203 13.105 7.36927C13.1033 7.38665 13.0725 7.3843 13.0668 7.40446C13.061 7.42462 13.0896 7.43498 13.0829 7.45049C13.076 7.46638 13.0513 7.45362 13.0395 7.46703C13.0275 7.4802 13.0514 7.48795 13.0332 7.50784C13.015 7.52736 12.9627 7.54642 12.9627 7.54642Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M12.9357 7.57237C13.0086 7.50171 13.0419 7.39771 13.0459 7.27509C13.0484 7.34596 13.0384 7.49335 12.9367 7.58209L12.9357 7.57237Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M13.0145 7.4549C13.0127 7.43597 13.0041 7.42502 12.9962 7.41305C13.0052 7.42324 13.0142 7.43305 13.0188 7.44815L13.0145 7.4549ZM13.0354 7.37423C13.0276 7.35621 13.016 7.34726 13.0052 7.33728C13.0166 7.34537 13.0284 7.35296 13.0374 7.36698L13.0354 7.37423ZM13.0362 7.39458C13.0486 7.37867 13.0621 7.37308 13.0754 7.36565C13.0621 7.37086 13.0488 7.37569 13.0362 7.38692L13.0362 7.39458ZM13.0136 7.46804C13.0256 7.45264 13.0392 7.44668 13.0525 7.43924C13.0393 7.44469 13.0259 7.44929 13.0134 7.46052L13.0133 7.46818L13.0136 7.46804Z"
                                                                        fill="#00A854" stroke="#D4AF37"
                                                                        stroke-width="0.0133669" />
                                                                    <path
                                                                        d="M10.915 8.33496L10.3896 8.99164C10.5632 9.17243 10.6612 9.4127 10.6636 9.66332C10.6652 9.88653 10.6297 10.1084 10.5585 10.32V10.3275H12.0032V8.34997C11.6842 8.5451 11.249 8.6239 10.915 8.33496Z"
                                                                        fill="#007EA8" stroke="#D4AF37"
                                                                        stroke-width="0.0187531" />
                                                                    <path
                                                                        d="M13.0902 8.33496C12.7599 8.6239 12.3209 8.5451 12.002 8.34997V10.3275H13.4466V10.32C13.3755 10.1084 13.34 9.88653 13.3416 9.66332C13.3416 9.43818 13.4429 9.15675 13.6155 8.99164L13.0902 8.33496Z"
                                                                        fill="white" stroke="#D4AF37"
                                                                        stroke-width="0.0187531" />
                                                                    <path
                                                                        d="M10.5581 10.3267C10.4794 10.5704 10.3781 10.7842 10.3481 11.1368C10.3031 11.6619 10.7231 11.9432 10.8957 12.0257C11.1657 12.1532 11.4433 12.1082 11.7321 12.1457C11.8633 12.1645 11.9383 12.247 12.0021 12.3145C12.0659 12.247 12.1409 12.1645 12.2759 12.1457C12.5609 12.1082 12.8385 12.1532 13.1085 12.0257C13.2811 11.9432 13.7011 11.6581 13.6561 11.1368C13.6261 10.7842 13.5248 10.5704 13.4461 10.3267H10.5581Z"
                                                                        fill="#D91023" stroke="#D4AF37"
                                                                        stroke-width="0.0187531" />
                                                                    <path
                                                                        d="M12.1348 9.60971C12.1348 9.60971 12.1534 9.54173 12.1917 9.51208C12.2297 9.48209 12.2715 9.49308 12.2968 9.48242C12.2797 9.50508 12.2778 9.55006 12.2399 9.58005C12.2019 9.61004 12.1348 9.60971 12.1348 9.60971ZM12.2889 9.48842C12.2626 9.49608 12.2462 9.48742 12.2098 9.50175L12.2889 9.48842ZM12.2649 9.50775C12.2383 9.51508 12.2202 9.50308 12.1845 9.51908L12.2649 9.50775ZM12.2357 9.53041C12.2104 9.53974 12.1987 9.52641 12.1645 9.54373L12.2357 9.53041ZM12.2066 9.55373C12.1813 9.56273 12.1762 9.54773 12.1512 9.56773L12.2066 9.55373ZM12.1807 9.57372C12.1642 9.57939 12.1569 9.57306 12.142 9.59038L12.1807 9.57372ZM12.2889 9.48875C12.2747 9.51308 12.2778 9.53207 12.2547 9.56473L12.2889 9.48875ZM12.2649 9.50775C12.2506 9.53207 12.256 9.55406 12.2316 9.58539L12.2649 9.50775ZM12.2357 9.53041C12.2199 9.55306 12.2288 9.56873 12.2031 9.59838L12.2357 9.53041ZM12.2063 9.5534C12.1908 9.57606 12.2031 9.58572 12.1778 9.60538L12.2063 9.5534ZM12.1807 9.57372C12.1712 9.58872 12.1743 9.59805 12.1544 9.60771L12.1807 9.57372Z"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.1807 9.57372C12.1712 9.58872 12.1743 9.59805 12.1544 9.60771M12.1348 9.60971C12.1348 9.60971 12.1534 9.54173 12.1917 9.51208C12.2297 9.48209 12.2715 9.49308 12.2968 9.48242C12.2797 9.50508 12.2778 9.55006 12.2399 9.58005C12.2019 9.61004 12.1348 9.60971 12.1348 9.60971ZM12.2889 9.48842C12.2626 9.49608 12.2462 9.48742 12.2098 9.50175L12.2889 9.48842ZM12.2649 9.50775C12.2383 9.51508 12.2202 9.50308 12.1845 9.51908L12.2649 9.50775ZM12.2357 9.53041C12.2104 9.53974 12.1987 9.52641 12.1645 9.54373L12.2357 9.53041ZM12.2066 9.55373C12.1813 9.56273 12.1762 9.54773 12.1512 9.56773L12.2066 9.55373ZM12.1807 9.57372C12.1642 9.57939 12.1569 9.57306 12.142 9.59038L12.1807 9.57372ZM12.2889 9.48875C12.2747 9.51308 12.2778 9.53207 12.2547 9.56473L12.2889 9.48875ZM12.2649 9.50775C12.2506 9.53207 12.256 9.55406 12.2316 9.58539L12.2649 9.50775ZM12.2357 9.53041C12.2199 9.55306 12.2288 9.56873 12.2031 9.59838L12.2357 9.53041ZM12.2063 9.5534C12.1908 9.57606 12.2031 9.58572 12.1778 9.60538L12.2063 9.5534Z"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.3126 9.46951L12.2359 9.52957L12.1357 9.60964L12.2372 9.53124L12.3139 9.47118L12.3126 9.46951ZM12.241 9.22461C12.241 9.22461 12.2939 9.26798 12.3059 9.31636C12.318 9.36474 12.2933 9.40144 12.2933 9.43014C12.2793 9.40545 12.2403 9.38676 12.2277 9.33838C12.215 9.29001 12.2407 9.22461 12.2407 9.22461H12.241ZM12.2904 9.42046C12.2936 9.39177 12.3072 9.37909 12.3085 9.33838L12.2904 9.42046ZM12.2828 9.38943C12.286 9.36107 12.3031 9.34739 12.3025 9.30702L12.2828 9.38943ZM12.2733 9.35273C12.2742 9.3247 12.2904 9.31803 12.2879 9.27799L12.2733 9.35273ZM12.2638 9.3157C12.2651 9.28767 12.2803 9.288 12.2717 9.25597L12.2638 9.3157ZM12.2555 9.28266C12.2565 9.26465 12.2651 9.25931 12.2549 9.23862L12.2555 9.28266ZM12.2904 9.42046C12.2742 9.39711 12.2562 9.39344 12.2362 9.35874L12.2904 9.42046ZM12.2828 9.38977C12.2663 9.36641 12.2448 9.36374 12.2264 9.32838L12.2828 9.38977ZM12.2733 9.35273C12.259 9.32904 12.2419 9.33171 12.2251 9.29568L12.2733 9.35273ZM12.2638 9.3157C12.2495 9.29201 12.2365 9.30035 12.2289 9.26832L12.2638 9.3157ZM12.2555 9.28266C12.246 9.26765 12.2365 9.26765 12.2353 9.24429L12.2555 9.28266Z"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.2555 9.28266C12.246 9.26765 12.2365 9.26765 12.2353 9.24429M12.3126 9.46951L12.2359 9.52957L12.1357 9.60964L12.2372 9.53124L12.3139 9.47118L12.3126 9.46951ZM12.241 9.22461C12.241 9.22461 12.2939 9.26798 12.3059 9.31636C12.318 9.36474 12.2933 9.40144 12.2933 9.43014C12.2793 9.40545 12.2403 9.38676 12.2277 9.33838C12.215 9.29001 12.2407 9.22461 12.2407 9.22461H12.241ZM12.2904 9.42046C12.2936 9.39177 12.3072 9.37909 12.3085 9.33838L12.2904 9.42046ZM12.2828 9.38943C12.286 9.36107 12.3031 9.34739 12.3025 9.30702L12.2828 9.38943ZM12.2733 9.35273C12.2742 9.3247 12.2904 9.31803 12.2879 9.27799L12.2733 9.35273ZM12.2638 9.3157C12.2651 9.28767 12.2803 9.288 12.2717 9.25597L12.2638 9.3157ZM12.2555 9.28266C12.2565 9.26465 12.2651 9.25931 12.2549 9.23862L12.2555 9.28266ZM12.2904 9.42046C12.2742 9.39711 12.2562 9.39344 12.2362 9.35874L12.2904 9.42046ZM12.2828 9.38977C12.2663 9.36641 12.2448 9.36374 12.2264 9.32838L12.2828 9.38977ZM12.2733 9.35273C12.259 9.32904 12.2419 9.33171 12.2251 9.29568L12.2733 9.35273ZM12.2638 9.3157C12.2495 9.29201 12.2365 9.30035 12.2289 9.26832L12.2638 9.3157Z"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.2997 9.45105L12.2749 9.35371L12.2412 9.22559L12.273 9.35438C12.2812 9.38674 12.2894 9.41908 12.2978 9.45139"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.2997 9.45105L12.2749 9.35371L12.2412 9.22559L12.273 9.35438C12.2812 9.38674 12.2894 9.41908 12.2978 9.45139"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.5524 9.4082C12.5524 9.4082 12.6058 9.45169 12.6179 9.50053C12.6299 9.54904 12.6052 9.58583 12.6052 9.61427C12.5912 9.58951 12.5521 9.57078 12.5397 9.52261C12.527 9.4741 12.5524 9.4082 12.5524 9.4082ZM12.6023 9.60457C12.6055 9.57613 12.6195 9.56309 12.6204 9.52227L12.6023 9.60457ZM12.5947 9.57379C12.5978 9.54502 12.615 9.53164 12.6144 9.49083L12.5947 9.57379ZM12.5851 9.53666C12.5861 9.50856 12.6023 9.50187 12.5998 9.46173L12.5851 9.53666ZM12.5756 9.49953C12.5769 9.47143 12.5921 9.4721 12.5835 9.43998L12.5756 9.49953ZM12.5673 9.46674C12.5686 9.44835 12.5769 9.44333 12.5667 9.42259L12.5673 9.46674ZM12.6023 9.60457C12.5861 9.58149 12.568 9.57781 12.548 9.54268L12.6023 9.60457ZM12.5947 9.57379C12.5781 9.55071 12.5565 9.54803 12.5381 9.51257L12.5947 9.57379ZM12.5851 9.53666C12.5708 9.51324 12.5537 9.51558 12.5371 9.47979L12.5851 9.53666ZM12.5756 9.49986C12.5613 9.47578 12.5483 9.48414 12.5406 9.45203L12.5756 9.49986ZM12.5673 9.46674C12.5578 9.45169 12.5483 9.45136 12.547 9.42827L12.5673 9.46674Z"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.5673 9.46674C12.5578 9.45169 12.5483 9.45136 12.547 9.42827M12.5524 9.4082C12.5524 9.4082 12.6058 9.45169 12.6179 9.50053C12.6299 9.54904 12.6052 9.58583 12.6052 9.61427C12.5912 9.58951 12.5521 9.57078 12.5397 9.52261C12.527 9.4741 12.5524 9.4082 12.5524 9.4082ZM12.6023 9.60457C12.6055 9.57613 12.6195 9.56309 12.6204 9.52227L12.6023 9.60457ZM12.5947 9.57379C12.5978 9.54502 12.615 9.53164 12.6144 9.49083L12.5947 9.57379ZM12.5851 9.53666C12.5861 9.50856 12.6023 9.50187 12.5998 9.46173L12.5851 9.53666ZM12.5756 9.49953C12.5769 9.47143 12.5921 9.4721 12.5835 9.43998L12.5756 9.49953ZM12.5673 9.46674C12.5686 9.44835 12.5769 9.44333 12.5667 9.42259L12.5673 9.46674ZM12.6023 9.60457C12.5861 9.58149 12.568 9.57781 12.548 9.54268L12.6023 9.60457ZM12.5947 9.57379C12.5781 9.55071 12.5565 9.54803 12.5381 9.51257L12.5947 9.57379ZM12.5851 9.53666C12.5708 9.51324 12.5537 9.51558 12.5371 9.47979L12.5851 9.53666ZM12.5756 9.49986C12.5613 9.47578 12.5483 9.48414 12.5406 9.45203L12.5756 9.49986Z"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.6109 9.63455L12.5862 9.53712L12.5526 9.40967L12.5843 9.53779C12.5924 9.57018 12.6007 9.60254 12.609 9.63488L12.6109 9.63455ZM12.4385 9.82607C12.4385 9.82607 12.4477 9.756 12.4813 9.72063C12.5152 9.68526 12.558 9.68994 12.5814 9.67559C12.5678 9.70028 12.5719 9.74532 12.5386 9.78102C12.505 9.81639 12.4385 9.82607 12.4385 9.82607ZM12.5748 9.6826C12.5494 9.69394 12.5323 9.68827 12.4981 9.70762L12.5748 9.6826ZM12.5532 9.70528C12.5279 9.71663 12.5082 9.70762 12.4752 9.72864L12.5532 9.70528ZM12.5275 9.73231C12.5041 9.74532 12.4905 9.73398 12.4588 9.75633L12.5275 9.73231ZM12.5019 9.75967C12.4781 9.77235 12.4711 9.75833 12.4489 9.78202L12.5019 9.75967ZM12.479 9.78336C12.4632 9.79137 12.4553 9.78669 12.4432 9.80605L12.479 9.78336ZM12.5748 9.6826C12.564 9.70929 12.5694 9.7273 12.551 9.76301L12.5748 9.6826ZM12.5532 9.70528C12.5424 9.73164 12.551 9.75233 12.531 9.78736L12.5532 9.70528ZM12.5275 9.73231C12.5152 9.757 12.526 9.77135 12.5047 9.80471L12.5275 9.73231ZM12.5015 9.75934C12.4895 9.78436 12.5028 9.7917 12.4803 9.81505L12.5015 9.75934ZM12.4787 9.78336C12.4711 9.80004 12.4759 9.80838 12.4575 9.82106L12.4787 9.78336Z"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.4787 9.78336C12.4711 9.80004 12.4759 9.80838 12.4575 9.82106M12.6109 9.63455L12.5862 9.53712L12.5526 9.40967L12.5843 9.53779C12.5924 9.57018 12.6007 9.60254 12.609 9.63488L12.6109 9.63455ZM12.4385 9.82607C12.4385 9.82607 12.4477 9.756 12.4813 9.72063C12.5152 9.68526 12.558 9.68994 12.5814 9.67559C12.5678 9.70028 12.5719 9.74532 12.5386 9.78102C12.505 9.81639 12.4385 9.82607 12.4385 9.82607ZM12.5748 9.6826C12.5494 9.69394 12.5323 9.68827 12.4981 9.70762L12.5748 9.6826ZM12.5532 9.70528C12.5279 9.71663 12.5082 9.70762 12.4752 9.72864L12.5532 9.70528ZM12.5275 9.73231C12.5041 9.74532 12.4905 9.73398 12.4588 9.75633L12.5275 9.73231ZM12.5019 9.75967C12.4781 9.77235 12.4711 9.75833 12.4489 9.78202L12.5019 9.75967ZM12.479 9.78336C12.4632 9.79137 12.4553 9.78669 12.4432 9.80605L12.479 9.78336ZM12.5748 9.6826C12.564 9.70929 12.5694 9.7273 12.551 9.76301L12.5748 9.6826ZM12.5532 9.70528C12.5424 9.73164 12.551 9.75233 12.531 9.78736L12.5532 9.70528ZM12.5275 9.73231C12.5152 9.757 12.526 9.77135 12.5047 9.80471L12.5275 9.73231ZM12.5015 9.75934C12.4895 9.78436 12.5028 9.7917 12.4803 9.81505L12.5015 9.75934Z"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.5952 9.65918L12.5278 9.73049L12.4395 9.82446C12.4395 9.82446 12.4993 9.76314 12.529 9.73182C12.5517 9.70823 12.5743 9.68457 12.5968 9.66085"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.5952 9.65918L12.5278 9.73049L12.4395 9.82446C12.4395 9.82446 12.4993 9.76314 12.529 9.73182C12.5517 9.70823 12.5743 9.68457 12.5968 9.66085"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.0791 9.35244C12.0791 9.35244 12.1443 9.33545 12.188 9.35544C12.2317 9.37543 12.2434 9.41875 12.2649 9.43641C12.238 9.43241 12.2 9.45307 12.156 9.43341C12.1123 9.41409 12.0794 9.35244 12.0794 9.35244H12.0791ZM12.256 9.43241C12.2371 9.41242 12.2355 9.39309 12.2057 9.3671L12.256 9.43241ZM12.2282 9.41975C12.2092 9.39976 12.2095 9.37676 12.1788 9.35244L12.2282 9.41975ZM12.1946 9.40476C12.1747 9.38643 12.1798 9.3691 12.1481 9.34678L12.1946 9.40476ZM12.1614 9.38976C12.1411 9.37143 12.151 9.3591 12.1218 9.34644L12.1614 9.38976ZM12.1316 9.37643C12.119 9.3641 12.1203 9.35411 12.0987 9.34977L12.1316 9.37643ZM12.256 9.43241C12.2288 9.43175 12.2149 9.44407 12.1763 9.43908L12.256 9.43241ZM12.2282 9.41975C12.201 9.41908 12.1858 9.43508 12.1478 9.42841L12.2282 9.41975ZM12.195 9.40476C12.1684 9.40176 12.1601 9.41775 12.1228 9.40909L12.195 9.40476ZM12.1614 9.38976C12.1351 9.38676 12.1332 9.40276 12.1044 9.38943L12.1614 9.38976ZM12.1316 9.3761C12.1146 9.37477 12.1089 9.38276 12.0905 9.36943L12.1316 9.3761Z"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.1316 9.3761C12.1146 9.37477 12.1089 9.38276 12.0905 9.36943M12.0791 9.35244C12.0791 9.35244 12.1443 9.33545 12.188 9.35544C12.2317 9.37543 12.2434 9.41875 12.2649 9.43641C12.238 9.43241 12.2 9.45307 12.156 9.43341C12.1123 9.41409 12.0794 9.35244 12.0794 9.35244H12.0791ZM12.256 9.43241C12.2371 9.41242 12.2355 9.39309 12.2057 9.3671L12.256 9.43241ZM12.2282 9.41975C12.2092 9.39976 12.2095 9.37676 12.1788 9.35244L12.2282 9.41975ZM12.1946 9.40476C12.1747 9.38643 12.1798 9.3691 12.1481 9.34678L12.1946 9.40476ZM12.1614 9.38976C12.1411 9.37143 12.151 9.3591 12.1218 9.34644L12.1614 9.38976ZM12.1316 9.37643C12.119 9.3641 12.1203 9.35411 12.0987 9.34977L12.1316 9.37643ZM12.256 9.43241C12.2288 9.43175 12.2149 9.44407 12.1763 9.43908L12.256 9.43241ZM12.2282 9.41975C12.201 9.41908 12.1858 9.43508 12.1478 9.42841L12.2282 9.41975ZM12.195 9.40476C12.1684 9.40176 12.1601 9.41775 12.1228 9.40909L12.195 9.40476ZM12.1614 9.38976C12.1351 9.38676 12.1332 9.40276 12.1044 9.38943L12.1614 9.38976Z"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.2839 9.44414L12.1961 9.40476L12.0801 9.35338L12.1951 9.40677C12.2244 9.4202 12.2536 9.43355 12.2829 9.4468L12.2839 9.44414ZM12.1273 9.00105C12.1273 9.00105 12.1739 8.95 12.2208 8.94266C12.268 8.93498 12.3 8.96501 12.327 8.96801C12.3023 8.97969 12.2804 9.01873 12.2335 9.02674C12.1863 9.03474 12.1273 9.00105 12.1273 9.00105ZM12.3175 8.96968C12.2908 8.96301 12.2801 8.94766 12.2417 8.94232L12.3175 8.96968ZM12.2877 8.97469C12.2611 8.96801 12.25 8.94866 12.2116 8.94499L12.2877 8.97469ZM12.2515 8.98069C12.2252 8.97636 12.2208 8.95901 12.1828 8.95734L12.2515 8.98069ZM12.2157 8.98637C12.1894 8.98236 12.1913 8.96635 12.1603 8.97202L12.2157 8.98637ZM12.1837 8.99204C12.1666 8.9887 12.1628 8.97936 12.1422 8.9877L12.1837 8.99204ZM12.3175 8.96968C12.294 8.98436 12.2883 9.00271 12.2534 9.02006L12.3175 8.96968ZM12.2877 8.97469C12.2642 8.98937 12.2592 9.01139 12.2237 9.02707L12.2877 8.97469ZM12.2515 8.98036C12.2278 8.99304 12.2284 9.01106 12.1926 9.02474L12.2515 8.98036ZM12.2157 8.98637C12.192 8.99871 12.1983 9.01306 12.1672 9.01806L12.2157 8.98637ZM12.1837 8.9917C12.1685 9.00005 12.1672 9.01005 12.1454 9.00872L12.1837 8.9917Z"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.1837 8.9917C12.1685 9.00005 12.1672 9.01005 12.1454 9.00872M12.2839 9.44414L12.1961 9.40476L12.0801 9.35338L12.1951 9.40677C12.2244 9.4202 12.2536 9.43355 12.2829 9.4468L12.2839 9.44414ZM12.1273 9.00105C12.1273 9.00105 12.1739 8.95 12.2208 8.94266C12.268 8.93498 12.3 8.96501 12.327 8.96801C12.3023 8.97969 12.2804 9.01873 12.2335 9.02674C12.1863 9.03474 12.1273 9.00105 12.1273 9.00105V9.00105ZM12.3175 8.96968C12.2908 8.96301 12.2801 8.94766 12.2417 8.94232L12.3175 8.96968ZM12.2877 8.97469C12.2611 8.96801 12.25 8.94866 12.2116 8.94499L12.2877 8.97469ZM12.2515 8.98069C12.2252 8.97636 12.2208 8.95901 12.1828 8.95734L12.2515 8.98069ZM12.2157 8.98637C12.1894 8.98236 12.1913 8.96635 12.1603 8.97202L12.2157 8.98637ZM12.1837 8.99204C12.1666 8.9887 12.1628 8.97936 12.1422 8.9877L12.1837 8.99204ZM12.3175 8.96968C12.294 8.98436 12.2883 9.00271 12.2534 9.02006L12.3175 8.96968ZM12.2877 8.97469C12.2642 8.98937 12.2592 9.01139 12.2237 9.02707L12.2877 8.97469ZM12.2515 8.98036C12.2278 8.99304 12.2284 9.01106 12.1926 9.02474L12.2515 8.98036ZM12.2157 8.98637C12.192 8.99871 12.1983 9.01306 12.1672 9.01806L12.2157 8.98637Z"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.3482 8.96536L12.2535 8.98075C12.2118 8.98744 12.1289 9.00216 12.1289 9.00216L12.2538 8.98276L12.3485 8.96737L12.3482 8.96536ZM12.2223 8.76465C12.2223 8.76465 12.2859 8.78806 12.3119 8.83021C12.338 8.87236 12.3253 8.91552 12.3339 8.94295C12.3135 8.92388 12.2706 8.9192 12.2443 8.87738C12.2179 8.83523 12.2223 8.76465 12.2223 8.76465ZM12.3285 8.93459C12.3231 8.90615 12.332 8.88943 12.3208 8.85029L12.3285 8.93459ZM12.3119 8.90782C12.3065 8.87939 12.3186 8.86099 12.3056 8.82252L12.3119 8.90782ZM12.2919 8.87571C12.2846 8.84895 12.2976 8.83691 12.2833 8.79977L12.2919 8.87571ZM12.2716 8.84326C12.2643 8.8165 12.2789 8.81182 12.2614 8.78439L12.2716 8.84326ZM12.2538 8.81516C12.2497 8.79743 12.2557 8.78974 12.2401 8.77335L12.2538 8.81516ZM12.3285 8.93459C12.3062 8.91786 12.2878 8.91987 12.2582 8.89377L12.3285 8.93459ZM12.3119 8.90782C12.2894 8.8911 12.2681 8.89578 12.2398 8.86802L12.3119 8.90782ZM12.2919 8.87571C12.2713 8.85798 12.2557 8.86601 12.229 8.83724L12.2919 8.87571ZM12.2716 8.8436C12.2509 8.82587 12.2414 8.83791 12.2239 8.81014L12.2716 8.8436ZM12.2538 8.81516C12.2401 8.80379 12.2312 8.80713 12.2233 8.78505L12.2538 8.81516Z"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.2538 8.81516C12.2401 8.80379 12.2312 8.80713 12.2233 8.78505M12.3482 8.96536L12.2535 8.98075C12.2118 8.98744 12.1289 9.00216 12.1289 9.00216L12.2538 8.98276L12.3485 8.96737L12.3482 8.96536ZM12.2223 8.76465C12.2223 8.76465 12.2859 8.78806 12.3119 8.83021C12.338 8.87236 12.3253 8.91552 12.3339 8.94295C12.3135 8.92388 12.2706 8.9192 12.2443 8.87738C12.2179 8.83523 12.2223 8.76465 12.2223 8.76465ZM12.3285 8.93459C12.3231 8.90615 12.332 8.88943 12.3208 8.85029L12.3285 8.93459ZM12.3119 8.90782C12.3065 8.87939 12.3186 8.86099 12.3056 8.82252L12.3119 8.90782ZM12.2919 8.87571C12.2846 8.84895 12.2976 8.83691 12.2833 8.79977L12.2919 8.87571ZM12.2716 8.84326C12.2643 8.8165 12.2789 8.81182 12.2614 8.78439L12.2716 8.84326ZM12.2538 8.81516C12.2497 8.79743 12.2557 8.78974 12.2401 8.77335L12.2538 8.81516ZM12.3285 8.93459C12.3062 8.91786 12.2878 8.91987 12.2582 8.89377L12.3285 8.93459ZM12.3119 8.90782C12.2894 8.8911 12.2681 8.89578 12.2398 8.86802L12.3119 8.90782ZM12.2919 8.87571C12.2713 8.85798 12.2557 8.86601 12.229 8.83724L12.2919 8.87571ZM12.2716 8.8436C12.2509 8.82587 12.2414 8.83791 12.2239 8.81014L12.2716 8.8436Z"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.3456 8.96032L12.2929 8.87602L12.2227 8.76562L12.2913 8.87702C12.3087 8.90518 12.3262 8.93327 12.3437 8.96132"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.3456 8.96032L12.2929 8.87602L12.2227 8.76562L12.2913 8.87702C12.3087 8.90518 12.3262 8.93327 12.3437 8.96132"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.5752 8.94189C12.5752 8.94189 12.6283 8.98538 12.6406 9.03389C12.6527 9.08239 12.6276 9.11919 12.6276 9.14796C12.614 9.12321 12.5749 9.10447 12.5622 9.05597C12.5494 9.00746 12.5749 8.94189 12.5749 8.94189H12.5752ZM12.6251 9.13826C12.6283 9.10949 12.6419 9.09678 12.6429 9.05597L12.6251 9.13826ZM12.6174 9.10748C12.6206 9.07871 12.6378 9.065 12.6371 9.02452L12.6174 9.10748ZM12.6079 9.07035C12.6089 9.04225 12.6251 9.03556 12.6222 8.99542L12.6079 9.07035ZM12.5984 9.03322C12.5993 9.00512 12.6146 9.00545 12.6063 8.97334L12.5984 9.03322ZM12.5898 9.0001C12.5911 8.98204 12.5993 8.97668 12.5892 8.95628L12.5898 9.0001ZM12.6251 9.13826C12.6085 9.11518 12.5908 9.11116 12.5704 9.07637L12.6251 9.13826ZM12.6171 9.10748C12.6006 9.08407 12.5793 9.08172 12.5606 9.04593L12.6171 9.10748ZM12.6079 9.07035C12.5936 9.0466 12.5761 9.04928 12.5596 9.01315L12.6079 9.07035ZM12.5984 9.03322C12.5841 9.00947 12.5711 9.01783 12.5631 8.98572L12.5984 9.03322ZM12.5898 9.0001C12.5803 8.98505 12.5707 8.98505 12.5698 8.96163L12.5898 9.0001Z"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.5898 9.0001C12.5803 8.98505 12.5707 8.98505 12.5698 8.96163M12.5752 8.94189C12.5752 8.94189 12.6283 8.98538 12.6406 9.03389C12.6527 9.08239 12.6276 9.11919 12.6276 9.14796C12.614 9.12321 12.5749 9.10447 12.5622 9.05597C12.5494 9.00746 12.5749 8.94189 12.5749 8.94189H12.5752ZM12.6251 9.13826C12.6283 9.10949 12.6419 9.09678 12.6429 9.05597L12.6251 9.13826ZM12.6174 9.10748C12.6206 9.07871 12.6378 9.065 12.6371 9.02452L12.6174 9.10748ZM12.6079 9.07035C12.6089 9.04225 12.6251 9.03556 12.6222 8.99542L12.6079 9.07035ZM12.5984 9.03322C12.5993 9.00512 12.6146 9.00545 12.6063 8.97334L12.5984 9.03322ZM12.5898 9.0001C12.5911 8.98204 12.5993 8.97668 12.5892 8.95628L12.5898 9.0001ZM12.6251 9.13826C12.6085 9.11518 12.5908 9.11116 12.5704 9.07637L12.6251 9.13826ZM12.6171 9.10748C12.6006 9.08407 12.5793 9.08172 12.5606 9.04593L12.6171 9.10748ZM12.6079 9.07035C12.5936 9.0466 12.5761 9.04928 12.5596 9.01315L12.6079 9.07035ZM12.5984 9.03322C12.5841 9.00947 12.5711 9.01783 12.5631 8.98572L12.5984 9.03322Z"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.634 9.16805L12.6093 9.07083L12.5759 8.94287C12.5759 8.94287 12.5966 9.0284 12.6077 9.07149C12.6157 9.10381 12.6239 9.13611 12.6321 9.16838L12.634 9.16805ZM12.4277 9.29867C12.4277 9.29867 12.4538 9.23353 12.4953 9.20847C12.5366 9.18375 12.5769 9.19978 12.6032 9.19243C12.5839 9.21248 12.5769 9.25725 12.5356 9.28264C12.4944 9.30803 12.4277 9.29901 12.4277 9.29901V9.29867ZM12.5947 9.19745C12.5677 9.20145 12.5521 9.1911 12.5147 9.20079L12.5947 9.19745ZM12.5686 9.21348C12.5413 9.21749 12.5242 9.20346 12.4874 9.21482L12.5686 9.21348ZM12.5369 9.23252C12.5109 9.23887 12.5007 9.22417 12.4645 9.2372L12.5369 9.23252ZM12.5055 9.2519C12.4795 9.25791 12.476 9.24221 12.4484 9.25925L12.5055 9.2519ZM12.4772 9.26894C12.4604 9.27228 12.4538 9.2656 12.4373 9.28097L12.4772 9.26894ZM12.5947 9.19745C12.5778 9.22016 12.5788 9.23954 12.5521 9.26894L12.5947 9.19745ZM12.5686 9.21348C12.5515 9.2362 12.5547 9.25858 12.5268 9.28698L12.5686 9.21348ZM12.5369 9.23252C12.5188 9.25324 12.5258 9.26994 12.4969 9.296L12.5369 9.23252ZM12.5055 9.2519C12.4874 9.27228 12.4985 9.28331 12.4709 9.29968L12.5055 9.2519ZM12.4772 9.26894C12.4661 9.2823 12.4684 9.29233 12.4474 9.29934L12.4772 9.26894Z"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.4772 9.26894C12.4661 9.2823 12.4684 9.29233 12.4474 9.29934M12.634 9.16805L12.6093 9.07083L12.5759 8.94287C12.5759 8.94287 12.5966 9.0284 12.6077 9.07149C12.6157 9.10381 12.6239 9.13611 12.6321 9.16838L12.634 9.16805ZM12.4277 9.29867C12.4277 9.29867 12.4538 9.23353 12.4953 9.20847C12.5366 9.18375 12.5769 9.19978 12.6032 9.19243C12.5839 9.21248 12.5769 9.25725 12.5356 9.28264C12.4944 9.30803 12.4277 9.29901 12.4277 9.29901V9.29867ZM12.5947 9.19745C12.5677 9.20145 12.5521 9.1911 12.5147 9.20079L12.5947 9.19745ZM12.5686 9.21348C12.5413 9.21749 12.5242 9.20346 12.4874 9.21482L12.5686 9.21348ZM12.5369 9.23252C12.5109 9.23887 12.5007 9.22417 12.4645 9.2372L12.5369 9.23252ZM12.5055 9.2519C12.4795 9.25791 12.476 9.24221 12.4484 9.25925L12.5055 9.2519ZM12.4772 9.26894C12.4604 9.27228 12.4538 9.2656 12.4373 9.28097L12.4772 9.26894ZM12.5947 9.19745C12.5778 9.22016 12.5788 9.23954 12.5521 9.26894L12.5947 9.19745ZM12.5686 9.21348C12.5515 9.2362 12.5547 9.25858 12.5268 9.28698L12.5686 9.21348ZM12.5369 9.23252C12.5188 9.25324 12.5258 9.26994 12.4969 9.296L12.5369 9.23252ZM12.5055 9.2519C12.4874 9.27228 12.4985 9.28331 12.4709 9.29968L12.5055 9.2519Z"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.6203 9.18018L12.5377 9.23069L12.4287 9.29793L12.5383 9.2327C12.566 9.21594 12.5937 9.19911 12.6213 9.18218"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.6203 9.18018L12.5377 9.23069L12.4287 9.29793L12.5383 9.2327C12.566 9.21594 12.5937 9.19911 12.6213 9.18218"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.4756 8.80765C12.4756 8.80765 12.5382 8.78089 12.5843 8.79427C12.6303 8.80765 12.6478 8.8488 12.6713 8.86352C12.644 8.86352 12.6091 8.88961 12.563 8.8769C12.5169 8.86352 12.4756 8.80765 12.4756 8.80765ZM12.6621 8.86084C12.6402 8.84345 12.6364 8.82438 12.6033 8.80331L12.6621 8.86084ZM12.6326 8.85248C12.611 8.83509 12.6084 8.81234 12.5747 8.7926L12.6326 8.85248ZM12.5976 8.84245C12.575 8.82739 12.5776 8.80899 12.5436 8.7916L12.5976 8.84245ZM12.5623 8.83241C12.5401 8.81736 12.5477 8.80364 12.5172 8.79528L12.5623 8.83241ZM12.5309 8.82338C12.5166 8.81334 12.5166 8.80331 12.4947 8.80197L12.5309 8.82338ZM12.6621 8.86084C12.6348 8.86419 12.6224 8.87824 12.5839 8.87924L12.6621 8.86084ZM12.6329 8.85248C12.6056 8.85583 12.5925 8.87389 12.5541 8.87289L12.6329 8.85248ZM12.5976 8.84245C12.5709 8.84345 12.5646 8.86051 12.5264 8.8575L12.5976 8.84245ZM12.5623 8.83241C12.5356 8.83341 12.536 8.84914 12.5055 8.84044L12.5623 8.83241ZM12.5309 8.82371C12.5137 8.82438 12.5086 8.83308 12.4893 8.82237L12.5309 8.82371Z"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.5309 8.82371C12.5137 8.82438 12.5086 8.83308 12.4893 8.82237M12.4756 8.80765C12.4756 8.80765 12.5382 8.78089 12.5843 8.79427C12.6303 8.80765 12.6478 8.8488 12.6713 8.86352C12.644 8.86352 12.6091 8.88961 12.563 8.8769C12.5169 8.86352 12.4756 8.80765 12.4756 8.80765V8.80765ZM12.6621 8.86084C12.6402 8.84345 12.6364 8.82438 12.6033 8.80331L12.6621 8.86084ZM12.6326 8.85248C12.611 8.83509 12.6084 8.81234 12.5747 8.7926L12.6326 8.85248ZM12.5976 8.84245C12.575 8.82739 12.5776 8.80899 12.5436 8.7916L12.5976 8.84245ZM12.5623 8.83241C12.5401 8.81736 12.5477 8.80364 12.5172 8.79528L12.5623 8.83241ZM12.5309 8.82338C12.5166 8.81334 12.5166 8.80331 12.4947 8.80197L12.5309 8.82338ZM12.6621 8.86084C12.6348 8.86419 12.6224 8.87824 12.5839 8.87924L12.6621 8.86084ZM12.6329 8.85248C12.6056 8.85583 12.5925 8.87389 12.5541 8.87289L12.6329 8.85248ZM12.5976 8.84245C12.5709 8.84345 12.5646 8.86051 12.5264 8.8575L12.5976 8.84245ZM12.5623 8.83241C12.5356 8.83341 12.536 8.84914 12.5055 8.84044L12.5623 8.83241Z"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.6911 8.86856L12.5989 8.84213L12.4766 8.80868L12.5983 8.84447C12.629 8.85327 12.6597 8.86196 12.6904 8.87057L12.6911 8.86856ZM12.5802 8.62402C12.5802 8.62402 12.6421 8.65145 12.666 8.69528C12.6895 8.73876 12.6742 8.78125 12.6812 8.80901C12.6621 8.78861 12.6196 8.78125 12.5954 8.73776C12.5716 8.69427 12.5802 8.62402 12.5802 8.62402ZM12.6764 8.80032C12.6726 8.77155 12.6828 8.75549 12.6736 8.71568L12.6764 8.80032ZM12.6612 8.77255C12.6574 8.74378 12.6707 8.72605 12.6602 8.68691L12.6612 8.77255ZM12.6431 8.7391C12.6374 8.71167 12.6513 8.70096 12.6389 8.66283L12.6431 8.7391ZM12.625 8.70565C12.6192 8.67822 12.6339 8.67454 12.618 8.6461L12.625 8.70565ZM12.6088 8.67621C12.6056 8.65848 12.6119 8.65112 12.5973 8.63372L12.6088 8.67621ZM12.6764 8.80032C12.6548 8.78225 12.6364 8.78326 12.6084 8.75516L12.6764 8.80032ZM12.6612 8.77255C12.6396 8.75449 12.6183 8.75783 12.5916 8.72839L12.6612 8.77255ZM12.6431 8.7391C12.6234 8.72003 12.6075 8.72739 12.5827 8.69695L12.6431 8.7391ZM12.625 8.70598C12.6053 8.68691 12.5948 8.69829 12.5792 8.66918L12.625 8.70598ZM12.6088 8.67587C12.596 8.66417 12.5865 8.66684 12.5798 8.64443L12.6088 8.67587Z"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.6088 8.67587C12.596 8.66417 12.5865 8.66684 12.5798 8.64443M12.6911 8.86856L12.5989 8.84213L12.4766 8.80868L12.5983 8.84447C12.629 8.85327 12.6597 8.86196 12.6904 8.87057L12.6911 8.86856ZM12.5802 8.62402C12.5802 8.62402 12.6421 8.65145 12.666 8.69528C12.6895 8.73876 12.6742 8.78125 12.6812 8.80901C12.6621 8.78861 12.6196 8.78125 12.5954 8.73776C12.5716 8.69427 12.5802 8.62402 12.5802 8.62402ZM12.6764 8.80032C12.6726 8.77155 12.6828 8.75549 12.6736 8.71568L12.6764 8.80032ZM12.6612 8.77255C12.6574 8.74378 12.6707 8.72605 12.6602 8.68691L12.6612 8.77255ZM12.6431 8.7391C12.6374 8.71167 12.6513 8.70096 12.6389 8.66283L12.6431 8.7391ZM12.625 8.70565C12.6192 8.67822 12.6339 8.67454 12.618 8.6461L12.625 8.70565ZM12.6088 8.67621C12.6056 8.65848 12.6119 8.65112 12.5973 8.63372L12.6088 8.67621ZM12.6764 8.80032C12.6548 8.78225 12.6364 8.78326 12.6084 8.75516L12.6764 8.80032ZM12.6612 8.77255C12.6396 8.75449 12.6183 8.75783 12.5916 8.72839L12.6612 8.77255ZM12.6431 8.7391C12.6234 8.72003 12.6075 8.72739 12.5827 8.69695L12.6431 8.7391ZM12.625 8.70598C12.6053 8.68691 12.5948 8.69829 12.5792 8.66918L12.625 8.70598Z"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.6913 8.8269L12.6436 8.73925L12.5801 8.62451L12.642 8.74026C12.6578 8.76952 12.6737 8.79874 12.6897 8.8279"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.6913 8.8269L12.6436 8.73925L12.5801 8.62451L12.642 8.74026C12.6578 8.76952 12.6737 8.79874 12.6897 8.8279"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.3493 9.28809C12.3493 9.28809 12.4027 9.33157 12.4147 9.38041C12.4268 9.42892 12.402 9.46572 12.402 9.49415C12.388 9.4694 12.349 9.45066 12.3366 9.40249C12.3239 9.35399 12.3493 9.28809 12.3493 9.28809ZM12.3992 9.48445C12.4023 9.45602 12.4163 9.44297 12.4173 9.40216L12.3992 9.48445ZM12.3915 9.45367C12.3947 9.42491 12.4119 9.41152 12.4112 9.37071L12.3915 9.45367ZM12.382 9.41654C12.383 9.38844 12.3992 9.38175 12.3966 9.34161L12.382 9.41654ZM12.3725 9.37941C12.3737 9.35131 12.389 9.35198 12.3804 9.31987L12.3725 9.37941ZM12.3642 9.34663C12.3655 9.32823 12.3737 9.32321 12.3636 9.30247L12.3642 9.34663ZM12.3992 9.48445C12.383 9.46137 12.3648 9.45769 12.3448 9.42256L12.3992 9.48445ZM12.3915 9.45367C12.375 9.43059 12.3534 9.42792 12.335 9.39246L12.3915 9.45367ZM12.382 9.41654C12.3677 9.39313 12.3505 9.39547 12.334 9.35967L12.382 9.41654ZM12.3725 9.37974C12.3582 9.35566 12.3451 9.36402 12.3375 9.33191L12.3725 9.37974ZM12.3642 9.34663C12.3547 9.33157 12.3451 9.33124 12.3439 9.30816L12.3642 9.34663Z"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.3642 9.34663C12.3547 9.33157 12.3451 9.33124 12.3439 9.30816M12.3493 9.28809C12.3493 9.28809 12.4027 9.33157 12.4147 9.38041C12.4268 9.42892 12.402 9.46572 12.402 9.49415C12.388 9.4694 12.349 9.45066 12.3366 9.40249C12.3239 9.35399 12.3493 9.28809 12.3493 9.28809V9.28809ZM12.3992 9.48445C12.4023 9.45602 12.4163 9.44297 12.4173 9.40216L12.3992 9.48445ZM12.3915 9.45367C12.3947 9.42491 12.4119 9.41152 12.4112 9.37071L12.3915 9.45367ZM12.382 9.41654C12.383 9.38844 12.3992 9.38175 12.3966 9.34161L12.382 9.41654ZM12.3725 9.37941C12.3737 9.35131 12.389 9.35198 12.3804 9.31987L12.3725 9.37941ZM12.3642 9.34663C12.3655 9.32823 12.3737 9.32321 12.3636 9.30247L12.3642 9.34663ZM12.3992 9.48445C12.383 9.46137 12.3648 9.45769 12.3448 9.42256L12.3992 9.48445ZM12.3915 9.45367C12.375 9.43059 12.3534 9.42792 12.335 9.39246L12.3915 9.45367ZM12.382 9.41654C12.3677 9.39313 12.3505 9.39547 12.334 9.35967L12.382 9.41654ZM12.3725 9.37974C12.3582 9.35566 12.3451 9.36402 12.3375 9.33191L12.3725 9.37974Z"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.4087 9.51443L12.384 9.41701L12.3504 9.28955L12.3821 9.41767C12.3903 9.45006 12.3985 9.48243 12.4068 9.51477L12.4087 9.51443ZM12.2363 9.70595C12.2363 9.70595 12.2455 9.63588 12.2791 9.60051C12.313 9.56515 12.3558 9.56982 12.3793 9.55547C12.3656 9.58016 12.3698 9.6252 12.3365 9.66091C12.3029 9.69627 12.2363 9.70595 12.2363 9.70595ZM12.3726 9.56248C12.3473 9.57382 12.3301 9.56815 12.2959 9.5875L12.3726 9.56248ZM12.3511 9.58517C12.3257 9.59651 12.3061 9.5875 12.2731 9.60852L12.3511 9.58517ZM12.3254 9.61219C12.3019 9.6252 12.2883 9.61386 12.2566 9.63621L12.3254 9.61219ZM12.2997 9.63955C12.2759 9.65223 12.269 9.63822 12.2468 9.66191L12.2997 9.63955ZM12.2769 9.66324C12.2611 9.67125 12.2531 9.66658 12.2411 9.68593L12.2769 9.66324ZM12.3726 9.56248C12.3618 9.58917 12.3672 9.60719 12.3488 9.64289L12.3726 9.56248ZM12.3511 9.58517C12.3403 9.61152 12.3488 9.63221 12.3289 9.66724L12.3511 9.58517ZM12.3254 9.61219C12.313 9.63688 12.3238 9.65123 12.3026 9.68459L12.3254 9.61219ZM12.2994 9.63922C12.2874 9.66424 12.3007 9.67158 12.2782 9.69494L12.2994 9.63922ZM12.2766 9.66324C12.269 9.67992 12.2737 9.68826 12.2553 9.70094L12.2766 9.66324Z"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.2766 9.66324C12.269 9.67992 12.2737 9.68826 12.2553 9.70094M12.4087 9.51443L12.384 9.41701L12.3504 9.28955L12.3821 9.41767C12.3903 9.45006 12.3985 9.48243 12.4068 9.51477L12.4087 9.51443ZM12.2363 9.70595C12.2363 9.70595 12.2455 9.63588 12.2791 9.60051C12.313 9.56515 12.3558 9.56982 12.3793 9.55547C12.3656 9.58016 12.3698 9.6252 12.3365 9.66091C12.3029 9.69627 12.2363 9.70595 12.2363 9.70595ZM12.3726 9.56248C12.3473 9.57382 12.3301 9.56815 12.2959 9.5875L12.3726 9.56248ZM12.3511 9.58517C12.3257 9.59651 12.3061 9.5875 12.2731 9.60852L12.3511 9.58517ZM12.3254 9.61219C12.3019 9.6252 12.2883 9.61386 12.2566 9.63621L12.3254 9.61219ZM12.2997 9.63955C12.2759 9.65223 12.269 9.63822 12.2468 9.66191L12.2997 9.63955ZM12.2769 9.66324C12.2611 9.67125 12.2531 9.66658 12.2411 9.68593L12.2769 9.66324ZM12.3726 9.56248C12.3618 9.58917 12.3672 9.60719 12.3488 9.64289L12.3726 9.56248ZM12.3511 9.58517C12.3403 9.61152 12.3488 9.63221 12.3289 9.66724L12.3511 9.58517ZM12.3254 9.61219C12.313 9.63688 12.3238 9.65123 12.3026 9.68459L12.3254 9.61219ZM12.2994 9.63922C12.2874 9.66424 12.3007 9.67158 12.2782 9.69494L12.2994 9.63922Z"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.3921 9.53906L12.3246 9.61037L12.2363 9.70434C12.2363 9.70434 12.2962 9.64303 12.3259 9.6117C12.3486 9.58812 12.3711 9.56446 12.3936 9.54073"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M12.3921 9.53906L12.3246 9.61037L12.2363 9.70434C12.2363 9.70434 12.2962 9.64303 12.3259 9.6117C12.3486 9.58812 12.3711 9.56446 12.3936 9.54073"
                                                                        stroke="#D4AF37" stroke-width="0.0100731" />
                                                                    <path
                                                                        d="M12.6923 8.82422C12.665 8.96298 12.665 9.08806 12.665 9.08806C12.6635 9.13476 12.6416 9.16711 12.6213 9.15477C12.4474 9.04903 12.4303 9.02969 12.339 8.95597C12.416 9.04403 12.4379 9.08339 12.6137 9.19013C12.6476 9.21081 12.6517 9.24483 12.6505 9.28853L12.6454 9.49433C12.6444 9.52435 12.6635 9.66144 12.5738 9.60841C12.3666 9.48632 12.3716 9.49633 12.2725 9.43629C12.3929 9.54403 12.3498 9.51434 12.5595 9.64209C12.5976 9.66511 12.6372 9.72382 12.6372 9.7515C12.6372 10.1661 12.6432 10.0901 12.5966 10.2155H12.788C12.7414 10.0901 12.7474 10.1661 12.7474 9.75183C12.7474 9.72382 12.7874 9.66511 12.8251 9.64176C13.0348 9.51434 12.9882 9.54403 13.109 9.43629C13.0098 9.49633 13.018 9.48632 12.8108 9.60841C12.7211 9.66144 12.7401 9.52435 12.7392 9.49433L12.7341 9.28853C12.7325 9.24483 12.737 9.21081 12.7709 9.19013C12.9467 9.08339 12.9686 9.04403 13.0456 8.95597C12.9543 9.02935 12.9372 9.04937 12.7633 9.15477C12.743 9.16711 12.7211 9.13476 12.7195 9.08806C12.7195 9.08806 12.7195 8.96298 12.6923 8.82422Z"
                                                                        fill="#947245" stroke="#D4AF37"
                                                                        stroke-width="0.0201462" />
                                                                    <path
                                                                        d="M11.0244 9.44902C11.023 9.45638 11.0361 9.54022 11.0288 9.56449C11.0252 9.59759 11.0244 9.60274 11.0164 9.64613C11.0091 9.68953 10.9989 9.77337 10.9843 9.82412C10.9775 9.85402 10.9758 9.88484 10.9791 9.91532L11.0054 10.058C11.0054 10.058 11.0171 10.0727 11.0186 10.0779C11.0208 10.0837 11.0179 10.0926 11.0186 10.0948C11.0259 10.1043 11.0266 10.1146 11.0347 10.1227C11.0361 10.1242 11.042 10.1235 11.0427 10.1257C11.0442 10.1271 11.0537 10.1279 11.0559 10.1286C11.0617 10.1345 11.0603 10.1382 11.0632 10.1463H11.0171C11.0186 10.1257 11.0025 10.1176 11.0025 10.1176C11.0003 10.1154 10.9813 10.1102 10.9791 10.0977C10.9762 10.0801 10.9791 10.0771 10.9791 10.0771C10.9791 10.0771 10.9631 10.0109 10.9572 9.99328C10.9528 9.98078 10.9521 9.97416 10.9499 9.96386C10.9448 9.93223 10.9426 9.91826 10.9265 9.87193C10.9221 9.86457 10.9119 9.86163 10.9126 9.8506L10.9178 9.8403V9.83147L10.9258 9.71747C10.9269 9.71592 10.9276 9.71417 10.928 9.71233C10.9324 9.6476 10.898 9.58729 10.8761 9.52845C10.8717 9.51816 10.8754 9.50639 10.871 9.49609C10.8476 9.48874 10.8315 9.44902 10.8228 9.42402C10.8138 9.39649 10.8121 9.36711 10.8176 9.3387C10.8184 9.33201 10.8209 9.32565 10.825 9.32031L11.0244 9.44902ZM11.2868 9.59023C11.2927 9.58832 11.2989 9.58733 11.3051 9.58729L11.3124 9.59833C11.3233 9.61892 11.3372 9.71159 11.3445 9.75425L11.3555 9.81235C11.3555 9.81235 11.3526 9.82706 11.3577 9.84398L11.3621 9.85942C11.3679 9.88149 11.3745 9.88737 11.3745 9.88737C11.3759 9.89325 11.3847 9.93738 11.3869 9.94253C11.3978 9.98263 11.4042 10.0238 11.4059 10.0654C11.4052 10.0999 11.4052 10.0962 11.4081 10.0992C11.4154 10.1065 11.4191 10.1021 11.4359 10.1441C11.4359 10.1477 11.4373 10.1426 11.4395 10.1455C11.441 10.1499 11.4446 10.1492 11.4476 10.1499C11.4534 10.1499 11.4519 10.1514 11.4563 10.1521C11.4602 10.1526 11.4641 10.1526 11.468 10.1521H11.5082C11.5053 10.1449 11.5004 10.1387 11.494 10.1342C11.4877 10.1298 11.4802 10.1273 11.4724 10.1271C11.4666 10.1235 11.4593 10.1183 11.4571 10.1102L11.4403 10.086C11.441 10.0808 11.4373 10.0734 11.4359 10.0676L11.4213 9.89693C11.4213 9.89693 11.4242 9.88002 11.4242 9.86236C11.4227 9.76822 11.4286 9.67408 11.4315 9.5792C11.4329 9.57185 11.4607 9.54464 11.4607 9.54464"
                                                                        fill="#E3E4E5" />
                                                                    <path
                                                                        d="M11.2868 9.59023C11.2927 9.58832 11.2989 9.58733 11.3051 9.58729L11.3124 9.59833C11.3233 9.61892 11.3372 9.71159 11.3445 9.75425L11.3555 9.81235C11.3555 9.81235 11.3526 9.82706 11.3577 9.84398L11.3621 9.85942C11.3679 9.88149 11.3745 9.88737 11.3745 9.88737C11.3759 9.89325 11.3847 9.93738 11.3869 9.94253C11.3978 9.98263 11.4042 10.0238 11.4059 10.0654C11.4052 10.0999 11.4052 10.0962 11.4081 10.0992C11.4154 10.1065 11.4191 10.1021 11.4359 10.1441C11.4359 10.1477 11.4373 10.1426 11.4395 10.1455C11.441 10.1499 11.4446 10.1492 11.4476 10.1499C11.4534 10.1499 11.4519 10.1514 11.4563 10.1521C11.4602 10.1526 11.4641 10.1526 11.468 10.1521H11.5082C11.5053 10.1449 11.5004 10.1387 11.494 10.1342C11.4877 10.1298 11.4802 10.1273 11.4724 10.1271C11.4666 10.1235 11.4593 10.1183 11.4571 10.1102L11.4403 10.086C11.441 10.0808 11.4373 10.0734 11.4359 10.0676L11.4213 9.89693C11.4213 9.89693 11.4242 9.88002 11.4242 9.86236C11.4227 9.76822 11.4286 9.67408 11.4315 9.5792C11.4329 9.57185 11.4607 9.54464 11.4607 9.54464M11.0244 9.44902C11.023 9.45638 11.0361 9.54022 11.0288 9.56449C11.0252 9.59759 11.0244 9.60274 11.0164 9.64613C11.0091 9.68953 10.9989 9.77337 10.9843 9.82412C10.9775 9.85402 10.9758 9.88484 10.9791 9.91532L11.0054 10.058C11.0054 10.058 11.0171 10.0727 11.0186 10.0779C11.0208 10.0837 11.0179 10.0926 11.0186 10.0948C11.0259 10.1043 11.0266 10.1146 11.0347 10.1227C11.0361 10.1242 11.042 10.1235 11.0427 10.1257C11.0442 10.1271 11.0537 10.1279 11.0559 10.1286C11.0617 10.1345 11.0603 10.1382 11.0632 10.1463H11.0171C11.0186 10.1257 11.0025 10.1176 11.0025 10.1176C11.0003 10.1154 10.9813 10.1102 10.9791 10.0977C10.9762 10.0801 10.9791 10.0771 10.9791 10.0771C10.9791 10.0771 10.9631 10.0109 10.9572 9.99328C10.9528 9.98078 10.9521 9.97416 10.9499 9.96386C10.9448 9.93223 10.9426 9.91826 10.9265 9.87193C10.9221 9.86457 10.9119 9.86163 10.9126 9.8506L10.9178 9.8403V9.83147L10.9258 9.71747C10.9269 9.71592 10.9276 9.71417 10.928 9.71233C10.9324 9.6476 10.898 9.58729 10.8761 9.52845C10.8717 9.51816 10.8754 9.50639 10.871 9.49609C10.8476 9.48874 10.8315 9.44902 10.8228 9.42402C10.8138 9.39649 10.8121 9.36711 10.8176 9.3387C10.8184 9.33201 10.8209 9.32565 10.825 9.32031L11.0244 9.44902Z"
                                                                        stroke="#D4AF37" stroke-width="0.0198046"
                                                                        stroke-linecap="square" />
                                                                    <path
                                                                        d="M11.7007 8.70705C11.6931 8.70705 11.6856 8.7087 11.6787 8.71187C11.6717 8.71505 11.6655 8.71968 11.6605 8.72546C11.6467 8.74918 11.6392 8.77603 11.6386 8.8035C11.6378 8.80939 11.64 8.81381 11.6386 8.8197C11.634 8.83183 11.6299 8.84411 11.6261 8.85651C11.621 8.88743 11.6196 9.00155 11.6115 9.04498C11.6042 9.08916 11.5676 9.15247 11.553 9.17309C11.5436 9.18129 11.5323 9.18688 11.5201 9.18928C11.5142 9.19076 11.4674 9.1856 11.4674 9.1856C11.406 9.18118 11.3138 9.14732 11.2516 9.13848C11.1902 9.13039 11.1148 9.13407 11.057 9.12818C11.057 9.12818 10.9839 9.10094 10.9173 9.12081C10.8515 9.13996 10.8142 9.17603 10.7564 9.26438C10.7564 9.26438 10.7315 9.29456 10.7315 9.30487C10.7309 9.32238 10.734 9.33982 10.7406 9.35605C10.7471 9.37229 10.757 9.38696 10.7695 9.39911C10.7776 9.40647 10.7754 9.39985 10.7747 9.39837C10.7776 9.40353 10.7798 9.41604 10.7834 9.42046C10.7921 9.43266 10.7999 9.44545 10.8069 9.45874C10.8127 9.46979 10.8098 9.48304 10.8149 9.49408C10.8434 9.55519 10.8295 9.61777 10.8295 9.68918C10.8297 9.69118 10.8294 9.69318 10.8288 9.69507C10.8281 9.73704 10.7871 9.79299 10.7871 9.83496V9.84379L10.782 9.85557C10.782 9.86735 10.7666 9.86956 10.771 9.87766C10.793 9.92698 10.7959 9.94171 10.8039 9.97484C10.8069 9.98736 10.8083 9.99398 10.8134 10.008C10.8208 10.0256 10.8427 10.0963 10.8427 10.0963C10.8427 10.0963 10.8405 10.1007 10.8449 10.1199C10.8478 10.1331 10.869 10.1368 10.8712 10.139C10.8716 10.1459 10.8736 10.1527 10.877 10.1587C10.8804 10.1647 10.8852 10.1698 10.891 10.1736C10.891 10.1766 10.9093 10.1758 10.9115 10.1758L10.9334 10.1744C10.9334 10.1648 10.9305 10.1596 10.9239 10.1537C10.9217 10.153 10.9129 10.1501 10.9115 10.1486L10.9071 10.1412C10.8976 10.1331 10.8961 10.1221 10.8881 10.1118C10.8866 10.1103 10.8888 10.1 10.8866 10.0941C10.8844 10.0875 10.8705 10.0735 10.8705 10.0735L10.8325 9.91962C10.8273 9.88502 10.8529 9.86514 10.8559 9.83643C10.8559 9.83054 10.8895 9.74661 10.891 9.74219C10.9151 9.67667 10.9554 9.57433 10.9546 9.53089C10.9539 9.4823 10.9524 9.54046 10.9568 9.50365C10.9605 9.47568 10.9444 9.40205 10.9458 9.39469C11.0365 9.54709 11.1251 9.60231 11.2714 9.58758C11.2774 9.58673 11.2836 9.58673 11.2896 9.58758C11.2896 9.58758 11.2933 9.59568 11.2933 9.59936C11.2992 9.62071 11.286 9.71201 11.2809 9.75544L11.275 9.81287C11.275 9.81287 11.2677 9.82759 11.2677 9.84379V9.85925C11.267 9.88134 11.2721 9.8887 11.2721 9.8887L11.2684 9.94318C11.2677 9.98154 11.262 10.0196 11.2516 10.0566C11.2501 10.061 11.2465 10.0676 11.2421 10.0683C11.2377 10.072 11.2311 10.0786 11.2304 10.0845C11.2304 10.089 11.2304 10.0934 11.2319 10.0978C11.2319 10.1015 11.2355 10.1066 11.2377 10.1096C11.2406 10.1228 11.2392 10.1361 11.2392 10.1493L11.2414 10.1618C11.2421 10.1655 11.2458 10.1655 11.2487 10.1663C11.2538 10.1677 11.2523 10.1707 11.256 10.1721L11.2677 10.1729H11.3072C11.3065 10.1582 11.2926 10.1508 11.2816 10.1434C11.2765 10.139 11.2772 10.1375 11.2772 10.1302L11.2765 10.1007C11.2765 10.0956 11.2787 10.0934 11.2801 10.0897C11.2823 10.0845 11.2809 10.0772 11.2809 10.0713C11.2882 10.0205 11.297 9.96821 11.3101 9.91962C11.3211 9.9049 11.3255 9.88796 11.3284 9.8703C11.3284 9.8703 11.3372 9.84674 11.3343 9.83348L11.3708 9.61262C11.3723 9.60867 11.3747 9.6051 11.3777 9.60217C11.3808 9.59924 11.3844 9.59703 11.3884 9.59568C11.433 9.5758 11.4784 9.56182 11.5201 9.53237C11.5669 9.49997 11.5947 9.44696 11.6276 9.39985C11.6349 9.38512 11.643 9.37334 11.651 9.36009C11.6856 9.29759 11.7103 9.23002 11.7242 9.15983C11.7351 9.09725 11.7315 9.03541 11.749 8.96105C11.7527 8.94559 11.7666 8.93308 11.7695 8.91688V8.9132L11.7783 8.91246L11.8061 8.90878H11.8295L11.8427 8.90952C11.8463 8.90952 11.8529 8.91393 11.8566 8.91393C11.8602 8.91393 11.8639 8.9132 11.8661 8.90952C11.8712 8.90363 11.8712 8.90584 11.8727 8.89995C11.8727 8.89847 11.8748 8.89995 11.8756 8.89995C11.8792 8.89847 11.8822 8.89406 11.8858 8.89258C11.8887 8.89258 11.8909 8.89111 11.8917 8.8889V8.87712C11.8917 8.87123 11.8917 8.87123 11.888 8.86976H11.8866C11.8822 8.86829 11.8866 8.85945 11.8866 8.85504C11.8871 8.8511 11.8869 8.84709 11.8858 8.84326C11.8845 8.83995 11.8822 8.83713 11.8792 8.83516L11.8727 8.8278C11.8522 8.81086 11.8434 8.79761 11.8288 8.78362C11.831 8.78068 11.831 8.7792 11.8302 8.77405C11.8229 8.75417 11.8105 8.75049 11.7893 8.73429C11.7668 8.72005 11.7416 8.71077 11.7154 8.70705H11.7037C11.7027 8.70702 11.7017 8.70702 11.7007 8.70705Z"
                                                                        fill="white" stroke="#D4AF37"
                                                                        stroke-width="0.0198046"
                                                                        stroke-linecap="square" />
                                                                    <path
                                                                        d="M11.6986 8.70609C11.6914 8.70647 11.6844 8.70834 11.6779 8.71156C11.6715 8.71479 11.6657 8.71932 11.6611 8.72485C11.6466 8.74748 11.6376 8.77318 11.6349 8.7999V8.81866L11.6236 8.85619C11.6198 8.88621 11.6161 8.99878 11.6086 9.04381C11.5973 9.08925 11.5782 9.1324 11.5523 9.17139C11.5448 9.18265 11.5223 9.1864 11.5185 9.1864H11.466C11.406 9.1789 11.3121 9.14888 11.2484 9.13762C11.1883 9.13012 11.1133 9.13387 11.057 9.12636C11.057 9.12636 10.9819 9.1001 10.9144 9.11886C10.8506 9.13762 10.8131 9.17515 10.753 9.26145C10.753 9.26145 10.7305 9.29147 10.7305 9.30273C10.7301 9.3201 10.7331 9.33738 10.7396 9.35351C10.746 9.36964 10.7557 9.38428 10.768 9.39654L10.7755 9.40405C10.7755 9.35151 10.783 9.329 10.783 9.329C10.7835 9.35471 10.7886 9.38013 10.7981 9.40405L10.8243 9.44532C10.8356 9.48285 10.8468 9.58416 10.8543 9.62544C10.8543 9.64795 10.8393 9.723 10.8281 9.75677C10.8093 9.82057 10.7981 9.87685 10.8243 9.83182C10.8356 9.81681 10.8769 9.73426 10.8994 9.65921C10.9219 9.58416 10.9444 9.53913 10.9369 9.52412L10.9256 9.4078C10.9255 9.4053 10.9255 9.40279 10.9256 9.40029V9.38903L10.9331 9.33275C11.042 9.53538 11.2146 9.55789 11.3272 9.41905C11.3132 9.47674 11.3082 9.53621 11.3121 9.59542V9.62544L11.2934 9.81681V9.82057L11.2859 9.84308V9.8731L11.2896 9.87685V9.90687V9.90312C11.3009 9.89561 11.3046 9.8806 11.3046 9.86559V9.86184L11.3121 9.85059V9.83182L11.3497 9.60668C11.3492 9.60419 11.3492 9.60166 11.3497 9.59917L11.3797 9.5729C11.3834 9.5654 11.406 9.47534 11.4022 9.42281C11.3947 9.29147 11.5636 9.25395 11.6198 9.31774C11.6424 9.30648 11.6574 9.29147 11.6761 9.27271C11.6916 9.25195 11.7042 9.22924 11.7137 9.20517V9.19016C11.7165 9.18024 11.719 9.17023 11.7212 9.16014C11.7244 9.144 11.7269 9.12772 11.7287 9.11135L11.7324 9.06257L11.7362 9.01379C11.7391 8.99611 11.7428 8.97858 11.7474 8.96126L11.7512 8.95L11.7587 8.93874L11.7624 8.92748L11.7662 8.91623V8.91248H11.7737H11.7099C11.6962 8.9034 11.6857 8.89028 11.6799 8.87495L11.6911 8.81116C11.7061 8.78114 11.7212 8.80365 11.7549 8.81116C11.7892 8.82256 11.8211 8.84039 11.8487 8.86369H11.8825V8.85244C11.8827 8.84994 11.8827 8.84743 11.8825 8.84493V8.83743C11.8814 8.836 11.8802 8.83474 11.8788 8.83367L11.8713 8.82617L11.8262 8.78114V8.77363C11.8225 8.75112 11.8075 8.74737 11.7887 8.73236C11.7658 8.71834 11.7403 8.70938 11.7137 8.70609H11.7024C11.7011 8.70604 11.6999 8.70604 11.6986 8.70609Z"
                                                                        fill="#D18219" />
                                                                    <path
                                                                        d="M11.7007 8.70705C11.6931 8.70705 11.6856 8.7087 11.6787 8.71187C11.6717 8.71505 11.6655 8.71968 11.6605 8.72546C11.6467 8.74918 11.6392 8.77603 11.6386 8.8035C11.6378 8.80939 11.64 8.81381 11.6386 8.8197C11.634 8.83183 11.6299 8.84411 11.6261 8.85651C11.621 8.88743 11.6196 9.00155 11.6115 9.04498C11.6042 9.08916 11.5676 9.15247 11.553 9.17309C11.5436 9.18129 11.5323 9.18688 11.5201 9.18928C11.5142 9.19076 11.4674 9.1856 11.4674 9.1856C11.406 9.18118 11.3138 9.14732 11.2516 9.13848C11.1902 9.13039 11.1148 9.13407 11.057 9.12818C11.057 9.12818 10.9839 9.10094 10.9173 9.12081C10.8515 9.13996 10.8142 9.17603 10.7564 9.26438C10.7564 9.26438 10.7315 9.29456 10.7315 9.30487C10.7309 9.32238 10.734 9.33982 10.7406 9.35605C10.7471 9.37229 10.757 9.38696 10.7695 9.39911C10.7776 9.40647 10.7754 9.39985 10.7747 9.39837C10.7776 9.40353 10.7798 9.41604 10.7834 9.42046C10.7921 9.43266 10.7999 9.44545 10.8069 9.45874C10.8127 9.46979 10.8098 9.48304 10.8149 9.49408C10.8434 9.55519 10.8295 9.61777 10.8295 9.68918C10.8297 9.69118 10.8294 9.69318 10.8288 9.69507C10.8281 9.73704 10.7871 9.79299 10.7871 9.83496V9.84379L10.782 9.85557C10.782 9.86735 10.7666 9.86956 10.771 9.87766C10.793 9.92698 10.7959 9.94171 10.8039 9.97484C10.8069 9.98736 10.8083 9.99398 10.8134 10.008C10.8208 10.0256 10.8427 10.0963 10.8427 10.0963C10.8427 10.0963 10.8405 10.1007 10.8449 10.1199C10.8478 10.1331 10.869 10.1368 10.8712 10.139C10.8716 10.1459 10.8736 10.1527 10.877 10.1587C10.8804 10.1647 10.8852 10.1698 10.891 10.1736C10.891 10.1766 10.9093 10.1758 10.9115 10.1758L10.9334 10.1744C10.9334 10.1648 10.9305 10.1596 10.9239 10.1537C10.9217 10.153 10.9129 10.1501 10.9115 10.1486L10.9071 10.1412C10.8976 10.1331 10.8961 10.1221 10.8881 10.1118C10.8866 10.1103 10.8888 10.1 10.8866 10.0941C10.8844 10.0875 10.8705 10.0735 10.8705 10.0735L10.8325 9.91962C10.8273 9.88502 10.8529 9.86514 10.8559 9.83643C10.8559 9.83054 10.8895 9.74661 10.891 9.74219C10.9151 9.67667 10.9554 9.57433 10.9546 9.53089C10.9539 9.4823 10.9524 9.54046 10.9568 9.50365C10.9605 9.47568 10.9444 9.40205 10.9458 9.39469C11.0365 9.54709 11.1251 9.60231 11.2714 9.58758C11.2774 9.58673 11.2836 9.58673 11.2896 9.58758C11.2896 9.58758 11.2933 9.59568 11.2933 9.59936C11.2992 9.62071 11.286 9.71201 11.2809 9.75544L11.275 9.81287C11.275 9.81287 11.2677 9.82759 11.2677 9.84379V9.85925C11.267 9.88134 11.2721 9.8887 11.2721 9.8887L11.2684 9.94318C11.2677 9.98154 11.262 10.0196 11.2516 10.0566C11.2501 10.061 11.2465 10.0676 11.2421 10.0683C11.2377 10.072 11.2311 10.0786 11.2304 10.0845C11.2304 10.089 11.2304 10.0934 11.2319 10.0978C11.2319 10.1015 11.2355 10.1066 11.2377 10.1096C11.2406 10.1228 11.2392 10.1361 11.2392 10.1493L11.2414 10.1618C11.2421 10.1655 11.2458 10.1655 11.2487 10.1663C11.2538 10.1677 11.2523 10.1707 11.256 10.1721L11.2677 10.1729H11.3072C11.3065 10.1582 11.2926 10.1508 11.2816 10.1434C11.2765 10.139 11.2772 10.1375 11.2772 10.1302L11.2765 10.1007C11.2765 10.0956 11.2787 10.0934 11.2801 10.0897C11.2823 10.0845 11.2809 10.0772 11.2809 10.0713C11.2882 10.0205 11.297 9.96821 11.3101 9.91962C11.3211 9.9049 11.3255 9.88796 11.3284 9.8703C11.3284 9.8703 11.3372 9.84674 11.3343 9.83348L11.3708 9.61262C11.3723 9.60867 11.3747 9.6051 11.3777 9.60217C11.3808 9.59924 11.3844 9.59703 11.3884 9.59568C11.433 9.5758 11.4784 9.56182 11.5201 9.53237C11.5669 9.49997 11.5947 9.44696 11.6276 9.39985C11.6349 9.38512 11.643 9.37334 11.651 9.36009C11.6856 9.29759 11.7103 9.23002 11.7242 9.15983C11.7351 9.09725 11.7315 9.03541 11.749 8.96105C11.7527 8.94559 11.7666 8.93308 11.7695 8.91688V8.9132L11.7783 8.91246L11.8061 8.90878H11.8295L11.8427 8.90952C11.8463 8.90952 11.8529 8.91393 11.8566 8.91393C11.8602 8.91393 11.8639 8.9132 11.8661 8.90952C11.8712 8.90363 11.8712 8.90584 11.8727 8.89995C11.8727 8.89847 11.8748 8.89995 11.8756 8.89995C11.8792 8.89847 11.8822 8.89406 11.8858 8.89258C11.8887 8.89258 11.8909 8.89111 11.8917 8.8889V8.87712C11.8917 8.87123 11.8917 8.87123 11.888 8.86976H11.8866C11.8822 8.86829 11.8866 8.85945 11.8866 8.85504C11.8871 8.8511 11.8869 8.84709 11.8858 8.84326C11.8845 8.83995 11.8822 8.83713 11.8792 8.83516L11.8727 8.8278C11.8522 8.81086 11.8434 8.79761 11.8288 8.78362C11.831 8.78068 11.831 8.7792 11.8302 8.77405C11.8229 8.75417 11.8105 8.75049 11.7893 8.73429C11.7668 8.72005 11.7416 8.71077 11.7154 8.70705H11.7037C11.7027 8.70702 11.7017 8.70702 11.7007 8.70705V8.70705Z"
                                                                        stroke="#D4AF37" stroke-width="0.0198046"
                                                                        stroke-linecap="square" />
                                                                    <path
                                                                        d="M11.8872 8.85449L11.8848 8.86412V8.86572L11.8872 8.8561V8.85449Z"
                                                                        fill="#D39044" stroke="#D4AF37"
                                                                        stroke-width="0.0198046"
                                                                        stroke-linecap="square" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11.5404 9.5098C11.525 9.571 11.4877 9.58354 11.5148 9.63515C11.5148 9.63515 11.5031 9.63515 11.4957 9.61451C11.4911 9.59948 11.4894 9.58372 11.4906 9.56805C11.4916 9.54693 11.4946 9.52595 11.4994 9.50537"
                                                                        fill="white" />
                                                                    <path
                                                                        d="M11.5404 9.5098C11.525 9.571 11.4877 9.58354 11.5148 9.63515C11.5148 9.63515 11.5031 9.63515 11.4957 9.61451C11.4911 9.59948 11.4894 9.58372 11.4906 9.56805C11.4916 9.54693 11.4946 9.52595 11.4994 9.50537"
                                                                        stroke="#D4AF37" stroke-width="0.0198046" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11.5681 9.48438C11.5527 9.54624 11.5154 9.55803 11.5425 9.61031C11.5425 9.61031 11.5278 9.61031 11.5205 9.59043C11.5167 9.57753 11.5147 9.56413 11.5146 9.55066C11.5146 9.53814 11.5176 9.51605 11.5205 9.50648C11.523 9.49846 11.5259 9.4906 11.5293 9.48291"
                                                                        fill="white" />
                                                                    <path
                                                                        d="M11.5681 9.48438C11.5527 9.54624 11.5154 9.55803 11.5425 9.61031C11.5425 9.61031 11.5278 9.61031 11.5205 9.59043C11.5167 9.57753 11.5147 9.56413 11.5146 9.55066C11.5146 9.53814 11.5176 9.51605 11.5205 9.50648C11.523 9.49846 11.5259 9.4906 11.5293 9.48291"
                                                                        stroke="#D4AF37" stroke-width="0.0198046" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11.6201 9.40332C11.5982 9.44377 11.5814 9.47834 11.5719 9.50849C11.5631 9.53791 11.5573 9.55483 11.5748 9.58646C11.5748 9.58646 11.5631 9.58057 11.5478 9.55262C11.5417 9.53723 11.5397 9.5205 11.5419 9.50408C11.5431 9.49317 11.545 9.48235 11.5478 9.47172C11.5494 9.46526 11.5514 9.45888 11.5536 9.4526"
                                                                        fill="white" />
                                                                    <path
                                                                        d="M11.6201 9.40332C11.5982 9.44377 11.5814 9.47834 11.5719 9.50849C11.5631 9.53791 11.5573 9.55483 11.5748 9.58646C11.5748 9.58646 11.5631 9.58057 11.5478 9.55262C11.5417 9.53723 11.5397 9.5205 11.5419 9.50408C11.5431 9.49317 11.545 9.48235 11.5478 9.47172C11.5494 9.46526 11.5514 9.45888 11.5536 9.4526"
                                                                        stroke="#D4AF37" stroke-width="0.0198046" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11.6398 9.37744C11.6266 9.39803 11.6222 9.41789 11.6149 9.43407C11.6026 9.45813 11.5949 9.48434 11.5923 9.5113C11.5923 9.52601 11.5901 9.53851 11.6061 9.56352C11.6061 9.56352 11.5988 9.56278 11.5937 9.55984C11.5863 9.55501 11.5805 9.54811 11.5769 9.53998C11.5702 9.52496 11.567 9.50863 11.5674 9.49218C11.5674 9.48114 11.5711 9.46496 11.574 9.45393C11.5769 9.4429 11.5871 9.42083 11.5871 9.42083"
                                                                        fill="white" />
                                                                    <path
                                                                        d="M11.6398 9.37744C11.6266 9.39803 11.6222 9.41789 11.6149 9.43407C11.6026 9.45813 11.5949 9.48434 11.5923 9.5113C11.5923 9.52601 11.5901 9.53851 11.6061 9.56352C11.6061 9.56352 11.5988 9.56278 11.5937 9.55984C11.5863 9.55501 11.5805 9.54811 11.5769 9.53998C11.5702 9.52496 11.567 9.50863 11.5674 9.49218C11.5674 9.48114 11.5711 9.46496 11.574 9.45393C11.5769 9.4429 11.5871 9.42083 11.5871 9.42083"
                                                                        stroke="#D4AF37" stroke-width="0.0198046" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11.675 8.78657C11.675 8.78509 11.5897 8.75992 11.5771 8.68441C11.5941 8.66813 11.6823 8.72661 11.6838 8.78065"
                                                                        fill="#D18219" />
                                                                    <path
                                                                        d="M11.675 8.78657C11.675 8.78509 11.5897 8.75992 11.5771 8.68441C11.5941 8.66813 11.6823 8.72661 11.6838 8.78065"
                                                                        stroke="#D4AF37" stroke-width="0.010269" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11.5801 8.68506C11.5808 8.68654 11.6263 8.68654 11.6622 8.76333C11.6542 8.75446 11.6182 8.77588 11.5808 8.68801"
                                                                        fill="black" fill-opacity="0.5" />
                                                                    <path
                                                                        d="M11.5801 8.68506C11.5808 8.68654 11.6263 8.68654 11.6622 8.76333C11.6542 8.75446 11.6182 8.77588 11.5808 8.68801"
                                                                        stroke="#D4AF37" stroke-width="0.010269" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11.7878 8.79412C11.7893 8.79264 11.7908 8.79041 11.7886 8.78818C11.7517 8.7644 11.7531 8.79338 11.7266 8.79338C11.7391 8.79338 11.7391 8.79487 11.7435 8.80081C11.7605 8.81865 11.7731 8.81716 11.7878 8.79933"
                                                                        fill="black" />
                                                                    <path
                                                                        d="M11.7878 8.79412C11.7893 8.79264 11.7908 8.79041 11.7886 8.78818C11.7517 8.7644 11.7531 8.79338 11.7266 8.79338C11.7391 8.79338 11.7391 8.79487 11.7435 8.80081C11.7605 8.81865 11.7731 8.81716 11.7878 8.79933"
                                                                        stroke="#D4AF37" stroke-width="0.010269" />
                                                                    <path
                                                                        d="M11.8795 8.89862C11.875 8.90313 11.8608 8.89261 11.8496 8.89111"
                                                                        stroke="#D4AF37" stroke-width="0.0198046"
                                                                        stroke-linecap="square" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11.8877 8.87093C11.8877 8.87093 11.8839 8.86716 11.8555 8.86339C11.8555 8.86339 11.8749 8.84304 11.8764 8.86565"
                                                                        fill="black" />
                                                                    <path
                                                                        d="M11.8877 8.87093C11.8877 8.87093 11.8839 8.86716 11.8555 8.86339C11.8555 8.86339 11.8749 8.84304 11.8764 8.86565"
                                                                        stroke="#D4AF37" stroke-width="0.0198046"
                                                                        stroke-linecap="square" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11.3044 9.53941C11.3018 9.54376 11.2994 9.54819 11.297 9.5527C11.2897 9.56968 11.2868 9.58592 11.3007 9.61177C11.3007 9.61177 11.289 9.61177 11.2816 9.59109C11.278 9.58149 11.2758 9.56673 11.2765 9.54458L11.278 9.52686"
                                                                        fill="white" />
                                                                    <path
                                                                        d="M11.3044 9.53941C11.3018 9.54376 11.2994 9.54819 11.297 9.5527C11.2897 9.56968 11.2868 9.58592 11.3007 9.61177C11.3007 9.61177 11.289 9.61177 11.2816 9.59109C11.278 9.58149 11.2758 9.56673 11.2765 9.54458L11.278 9.52686"
                                                                        stroke="#D4AF37" stroke-width="0.0198046" />
                                                                    <path
                                                                        d="M10.7777 9.40947C10.7777 9.40947 10.7666 9.36346 10.7932 9.31299"
                                                                        stroke="#D4AF37" stroke-width="0.0198046" />
                                                                    <path
                                                                        d="M12.9941 10.8062C12.9794 10.8233 12.939 10.8379 12.9181 10.8285C12.898 10.8515 12.9294 10.919 12.9848 10.8929C13.0401 10.8678 13.0385 10.8243 12.9941 10.8062ZM13.0573 10.6362C13.028 10.6278 12.9765 10.6349 12.9629 10.6917C12.9503 10.7468 12.9953 10.7685 13.0433 10.763C13.0184 10.7191 13.0384 10.6547 13.0574 10.6353L13.0573 10.6362Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M13.0189 10.7538C12.9807 10.7409 12.9734 10.6951 12.9801 10.6525C12.9507 10.6773 12.9031 10.7004 12.9265 10.7422C12.9448 10.7743 12.9737 10.7983 13.0189 10.7538Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M12.9952 10.7751C12.9658 10.7677 12.9271 10.7503 12.9134 10.713C12.8861 10.7417 12.8877 10.8183 12.9385 10.8287C12.9894 10.839 13.0027 10.8072 12.9952 10.7751ZM13.3145 10.9528C13.3266 10.9043 13.3093 10.8382 13.2095 10.8471C13.1147 10.8556 13.0865 10.9293 13.1075 10.9368C13.125 10.8943 13.2568 10.9133 13.3154 10.952L13.3145 10.9528Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M13.3108 10.8788C13.3229 10.831 13.3032 10.7516 13.2035 10.7772C13.1055 10.802 13.1119 10.8811 13.1347 10.8888C13.1538 10.8472 13.2471 10.8395 13.3107 10.8797L13.3108 10.8788Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M13.2969 11.0626C13.3278 11.0295 13.3457 10.9391 13.2519 10.9016C13.1638 10.8655 13.1328 10.8875 13.116 10.9218C13.1638 10.9079 13.2913 10.9846 13.2969 11.0626ZM13.3068 10.8284C13.2941 10.7977 13.2729 10.7275 13.1784 10.7627C13.1011 10.7923 13.1282 10.8511 13.1394 10.8678C13.1574 10.8299 13.2404 10.8027 13.3068 10.8284Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M13.2906 10.7625C13.2762 10.7335 13.2402 10.659 13.1463 10.7063C13.0549 10.7539 13.1072 10.8337 13.1304 10.8359C13.1412 10.8046 13.2201 10.7558 13.2907 10.7616L13.2906 10.7625Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M13.2347 10.6889C13.213 10.6684 13.1589 10.6154 13.0955 10.682C13.0856 10.6891 13.078 10.6994 13.0738 10.7114C13.0695 10.7235 13.0688 10.7368 13.0718 10.7493C13.0748 10.7619 13.0813 10.773 13.0904 10.7812C13.0995 10.7894 13.1107 10.7942 13.1225 10.7949C13.1206 10.7653 13.1729 10.7023 13.2347 10.6889Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M13.1467 10.6385C13.1173 10.6311 13.044 10.6103 13.0202 10.6909C12.9972 10.7716 13.0845 10.7854 13.1004 10.7731C13.0839 10.7495 13.0996 10.6764 13.1466 10.6394L13.1467 10.6385ZM13.2647 11.1128C13.3019 11.0851 13.3321 10.9959 13.2441 10.9387C13.1592 10.8846 13.1245 10.9025 13.1012 10.9343C13.1523 10.93 13.2709 11.0333 13.2647 11.1128Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M13.1907 11.1978C13.2476 11.1738 13.3203 11.0332 13.2254 10.9661C13.1336 10.9029 13.0423 10.9394 13.0056 10.982C13.105 10.9694 13.243 11.1152 13.1906 11.1988L13.1907 11.1978Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M13.1157 11.2689C13.2637 11.2111 13.2505 11.0596 13.1509 10.9994C13.0569 10.9425 12.998 10.9498 12.9473 11.0003C13.0703 11.0489 13.1349 11.1306 13.1157 11.2698L13.1157 11.2689Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M12.9895 11.3526C13.1717 11.3156 13.166 11.1205 13.0698 11.0284C13.0023 10.963 12.9477 10.9781 12.9132 11.0043C12.9769 11.0749 13.0288 11.1904 12.9894 11.3535L12.9895 11.3526Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M12.8783 11.379C13.059 11.3907 13.0977 11.1605 13.0016 11.0464C12.9346 10.9664 12.8795 10.9676 12.8457 10.9837C12.9092 11.0671 12.9799 11.2294 12.8774 11.3789L12.8783 11.379Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M12.7034 11.4107C12.9354 11.4687 13.035 11.1743 12.9055 11.0294C12.8365 10.952 12.7833 10.9506 12.7496 10.9667C12.8221 11.1053 12.8143 11.3338 12.7034 11.4107Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M12.4799 11.4194C12.7269 11.5303 12.8375 11.2766 12.8261 11.1025C12.8168 10.9644 12.6772 10.8747 12.6443 10.8909C12.7394 11.0712 12.6197 11.3986 12.4806 11.4204L12.4799 11.4194Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M12.2835 11.405C12.5217 11.5437 12.6864 11.3016 12.6888 11.0882C12.6898 10.9474 12.6499 10.8286 12.5461 10.8242C12.5961 11.0379 12.46 11.3518 12.2835 11.405Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M12.0794 11.3766C12.3226 11.5167 12.5496 11.286 12.5758 11.0243C12.5888 10.8902 12.5613 10.8259 12.4852 10.7652C12.4994 10.9572 12.2075 11.3363 12.0794 11.3766Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M11.9997 11.3724C12.2881 11.5047 12.7207 10.7027 12.3384 10.6231C12.4178 10.8329 12.1093 11.3534 11.9997 11.3724Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M11.9177 11.384C12.0703 11.5402 12.6296 10.5967 12.2201 10.5347C12.2545 10.6272 12.2047 10.8073 12.1183 10.9774C12.0318 11.1476 11.9056 11.2624 11.9177 11.384Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M11.8689 11.5312C11.887 11.3525 12.1688 10.9955 12.23 10.7437C12.27 10.5836 12.2184 10.4444 11.9537 10.4956C12.174 10.7788 11.7475 11.2399 11.818 11.5116C11.8043 11.5379 11.8879 11.5118 11.8689 11.5312Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M11.9084 11.5007C11.8244 11.3179 12.0334 10.9751 12.0631 10.7221C12.081 10.5673 11.9367 10.3566 11.692 10.4622C11.9872 10.6919 11.695 11.2255 11.8404 11.4759C11.8745 11.4975 11.9224 11.4919 11.9084 11.5007Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M11.913 11.5711C11.8051 11.3749 11.9056 11.0034 11.9062 10.7605C11.9072 10.5986 11.6729 10.3352 11.4451 10.5335C11.88 10.712 11.6248 11.1442 11.8507 11.5596C11.8946 11.5831 11.9248 11.5593 11.9122 11.571L11.913 11.5711Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M11.8782 11.5006C11.7604 11.3358 11.7978 10.9633 11.7127 10.7309C11.6557 10.5765 11.376 10.3973 11.2087 10.6434C11.6748 10.7153 11.4916 11.1779 11.8154 11.5057C11.8645 11.5168 11.8868 11.4867 11.8782 11.5006Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M11.8179 11.4796C11.6442 11.349 11.6257 10.9988 11.4883 10.7972C11.3652 10.6163 11.1218 10.5472 11.0205 10.8226C11.5083 10.8929 11.3758 11.2591 11.657 11.4413C11.7191 11.4766 11.8251 11.472 11.8179 11.4796Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path
                                                                        d="M11.6385 11.3757C11.4808 11.2439 11.5445 11.1626 11.3879 10.962C11.254 10.7902 10.906 10.7083 10.8762 10.985C11.3046 10.9844 11.2947 11.1655 11.5136 11.3141C11.5643 11.3143 11.6431 11.3595 11.6377 11.3756L11.6385 11.3757Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200532" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M10.755 11.2504L10.782 11.3333L11.6401 11.8244L11.8784 11.7194L11.9016 11.5927L11.9019 11.4364L11.1228 11.1008L10.8029 10.9925L10.7216 11.1402L10.7544 11.2503L10.755 11.2504Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0197585" />
                                                                    <path
                                                                        d="M10.7242 11.2546L10.7598 11.2495C10.7256 11.171 10.7686 11.0967 10.8606 11.087C10.9526 11.0774 11.0829 11.1393 11.1792 11.2329C11.2758 11.3132 11.3821 11.3709 11.4934 11.4031C11.6004 11.431 11.7335 11.4207 11.8515 11.4674C11.9076 11.4945 11.8998 11.5335 11.8914 11.6102C11.9324 11.5847 11.9567 11.5486 11.9582 11.4982C11.9469 11.388 11.8778 11.301 11.715 11.2506C11.5725 11.2718 11.4279 11.2263 11.3067 11.1223C11.2377 11.0062 11.1411 10.9233 11.0326 10.8872C10.9545 10.862 10.8725 10.877 10.8037 10.9292C10.6983 11.002 10.6904 11.0711 10.6953 11.1382L10.7241 11.2554L10.7242 11.2546Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0197585" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M11.577 11.6271C11.5273 11.7416 11.5632 11.8596 11.6581 11.8916C11.753 11.9236 11.869 11.8568 11.9186 11.7423L11.577 11.6271Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0200391" />
                                                                    <path
                                                                        d="M11.6697 11.498C11.7273 11.5366 11.7492 11.6069 11.7198 11.6547C11.6895 11.7025 11.6184 11.7099 11.5608 11.6723C11.5032 11.6337 11.4813 11.5634 11.5116 11.5147C11.541 11.4669 11.613 11.4595 11.6705 11.4981L11.6697 11.498ZM10.9791 11.6291C10.9484 11.6502 10.9275 11.6838 10.9305 11.7207C10.9331 11.7445 10.9428 11.7664 10.958 11.7832L10.9496 11.7845C10.885 11.7933 10.8143 11.7318 10.809 11.6708C10.807 11.6431 10.818 11.6189 10.837 11.599C10.8588 11.612 10.8838 11.6174 10.9088 11.6146C10.9192 11.6135 10.9294 11.6111 10.9393 11.6073C10.9515 11.6164 10.9649 11.6235 10.9791 11.6282L10.9791 11.6291Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M10.9256 11.4061C10.8938 11.4308 10.8729 11.4645 10.8748 11.5042C10.8761 11.5411 10.8989 11.5794 10.9309 11.6062C10.9196 11.6103 10.9079 11.613 10.8962 11.6142C10.8208 11.6223 10.7425 11.5492 10.7389 11.4781C10.7379 11.4605 10.7415 11.4428 10.7495 11.4272C10.7603 11.4295 10.7715 11.4302 10.7826 11.4293C10.8147 11.4264 10.8455 11.4122 10.8705 11.3888C10.8876 11.3984 10.9063 11.4043 10.9256 11.4061ZM11.2676 11.8172L11.2723 11.8211C11.2655 11.851 11.2496 11.8776 11.2274 11.8966C11.2491 11.876 11.2633 11.8473 11.2669 11.8162L11.2676 11.8172ZM11.16 11.7478C11.1476 11.7671 11.1315 11.7832 11.1129 11.795C11.0943 11.8067 11.0737 11.8137 11.0525 11.8156C10.9796 11.8238 10.9029 11.7527 10.8999 11.6835C10.8994 11.6768 10.8997 11.67 10.9007 11.6633C10.9293 11.6911 10.9669 11.7054 11.0056 11.703C11.029 11.7008 11.0513 11.6921 11.0706 11.6795C11.0924 11.7125 11.1234 11.7364 11.1592 11.7477L11.16 11.7478Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M11.3657 11.8203C11.3693 11.8389 11.3662 11.8572 11.355 11.8731C11.3278 11.912 11.2639 11.9191 11.2122 11.8881C11.1621 11.8572 11.1423 11.8006 11.1694 11.7626C11.1809 11.7472 11.1968 11.7364 11.2143 11.7322C11.2085 11.7484 11.2083 11.7661 11.2138 11.782C11.2286 11.8264 11.28 11.8518 11.3284 11.8391C11.3419 11.836 11.3547 11.8295 11.3657 11.8203Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M11.4074 11.7854C11.397 11.8124 11.3743 11.8367 11.3418 11.8494C11.2818 11.8732 11.2121 11.8495 11.1864 11.7963C11.18 11.7838 11.1766 11.7698 11.1765 11.7553C11.1763 11.7408 11.1793 11.7264 11.1853 11.7134C11.212 11.7202 11.2401 11.7185 11.2663 11.7084C11.2913 11.6992 11.3126 11.6802 11.3261 11.6551C11.3224 11.6668 11.321 11.6793 11.3219 11.6915C11.3228 11.7038 11.326 11.7156 11.3314 11.7263C11.3394 11.7415 11.3502 11.7546 11.3631 11.7647C11.3761 11.7749 11.3909 11.7819 11.4066 11.7854L11.4074 11.7854ZM11.8122 11.8579C11.7701 11.9197 11.6884 11.9551 11.6309 11.9358C11.5823 11.9198 11.5662 11.87 11.5869 11.8179C11.6321 11.8453 11.6852 11.8532 11.7363 11.8402C11.7758 11.8324 11.8115 11.8083 11.8363 11.7729C11.8402 11.798 11.832 11.8279 11.8122 11.8579Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M12.029 11.9231C12.0262 11.9261 12.0232 11.929 12.02 11.9317C11.9622 11.9798 11.8749 11.9872 11.8271 11.9491C11.7816 11.912 11.785 11.8476 11.8329 11.799C11.8846 11.8299 11.9589 11.8282 12.0181 11.7959C12.0108 11.8104 12.0065 11.8265 12.0055 11.8429C12.0045 11.8593 12.0069 11.8756 12.0124 11.8906C12.0162 11.9022 12.0215 11.9132 12.0282 11.923L12.029 11.9231Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M12.1528 11.7813C12.1465 11.8296 12.0932 11.875 12.0242 11.8871C11.9477 11.9007 11.8798 11.8661 11.8733 11.8105L11.8736 11.8078C11.9144 11.7846 11.9405 11.7467 11.9455 11.7047L11.9471 11.7048C11.9804 11.7676 12.0665 11.8025 12.1486 11.7819L12.1529 11.7803L12.1528 11.7813ZM11.6041 11.7724C11.6159 11.8338 11.5716 11.9027 11.5033 11.9269C11.4351 11.9502 11.3687 11.9184 11.356 11.8578C11.3531 11.842 11.3535 11.8255 11.3573 11.8092C11.3972 11.7979 11.4297 11.7742 11.4494 11.7451C11.4959 11.7637 11.5472 11.7637 11.5946 11.7451C11.599 11.7536 11.6022 11.7627 11.6041 11.7724Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M11.6934 11.7334C11.6511 11.7953 11.5692 11.8307 11.5116 11.8114C11.4539 11.793 11.4407 11.7266 11.483 11.6647C11.4956 11.6463 11.511 11.6304 11.5283 11.6177C11.5542 11.6409 11.5849 11.6567 11.6179 11.6636C11.6509 11.6705 11.6851 11.6683 11.7177 11.6574C11.7191 11.6814 11.7113 11.7077 11.6934 11.7343L11.6934 11.7334Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M11.8943 11.6107C11.9545 11.6486 11.9732 11.7188 11.9345 11.767C11.8976 11.8153 11.8163 11.824 11.7561 11.7862C11.695 11.7482 11.6772 11.6781 11.715 11.6298C11.7529 11.5816 11.8333 11.5728 11.8943 11.6107ZM11.4925 11.671C11.4992 11.6871 11.5023 11.7048 11.5014 11.7227C11.5006 11.7406 11.496 11.7581 11.4878 11.7738C11.4553 11.8288 11.379 11.8369 11.3169 11.7925C11.297 11.779 11.2805 11.7604 11.2686 11.7382C11.2568 11.716 11.2499 11.6908 11.2487 11.6648C11.2576 11.6558 11.2647 11.6447 11.2694 11.6324C11.2741 11.6202 11.2763 11.607 11.2758 11.5938L11.2803 11.5895C11.3027 11.6645 11.3816 11.7082 11.4555 11.6871C11.4684 11.6838 11.4809 11.6783 11.4925 11.671Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M11.1916 11.5705C11.2588 11.5636 11.3155 11.6162 11.3184 11.6754C11.3214 11.7337 11.2698 11.7868 11.2025 11.7946C11.1793 11.7958 11.1562 11.7909 11.1353 11.7803C11.1144 11.7696 11.0963 11.7536 11.0823 11.7334C11.1199 11.7109 11.1445 11.6727 11.1427 11.632C11.1414 11.6172 11.1375 11.6021 11.1302 11.5888C11.1497 11.579 11.1705 11.5728 11.1916 11.5705Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M11.5221 11.5643C11.5429 11.6181 11.5018 11.6754 11.4323 11.6923C11.362 11.709 11.2878 11.6785 11.2678 11.6247C11.2616 11.6091 11.2606 11.5914 11.2651 11.5748C11.2741 11.5814 11.2837 11.5873 11.2937 11.5922C11.3657 11.6281 11.458 11.6183 11.4976 11.5701C11.504 11.5622 11.5088 11.5542 11.512 11.5452C11.5161 11.551 11.5195 11.5574 11.5221 11.5643Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M11.2232 11.3858C11.2454 11.3833 11.2676 11.388 11.2872 11.3991C11.2569 11.4461 11.2785 11.5111 11.3363 11.5499C11.3256 11.5699 11.3107 11.5867 11.2929 11.599C11.2751 11.6112 11.2549 11.6185 11.2342 11.62C11.1695 11.627 11.1018 11.5655 11.0983 11.5035L11.1066 11.504C11.1688 11.4968 11.2187 11.4446 11.2191 11.3855L11.2224 11.3858L11.2232 11.3858Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M11.4586 11.411C11.5315 11.4551 11.5592 11.536 11.5209 11.5915C11.4817 11.6469 11.3905 11.6568 11.3168 11.6126C11.2438 11.5694 11.2153 11.4876 11.2544 11.4321C11.2936 11.3767 11.3848 11.3668 11.4586 11.411ZM11.1058 11.5184C11.1291 11.532 11.1475 11.5538 11.1583 11.5805C11.1794 11.6398 11.1458 11.7085 11.0818 11.732C11.0185 11.7565 10.9297 11.7132 10.9077 11.6548C10.9034 11.6428 10.9016 11.6298 10.9027 11.6168C10.9037 11.6038 10.9074 11.5911 10.9135 11.5798L10.9184 11.581C10.9973 11.6016 11.0776 11.5727 11.1058 11.5193L11.1058 11.5184ZM10.7894 11.2115C10.8104 11.2094 10.8313 11.2136 10.8499 11.2236C10.8225 11.2449 10.8045 11.2741 10.8061 11.3073C10.8079 11.3478 10.8379 11.3884 10.8761 11.4101C10.8546 11.4304 10.8281 11.4429 10.8003 11.4457C10.735 11.4527 10.6669 11.3895 10.6634 11.3277C10.6607 11.2668 10.7234 11.2184 10.7886 11.2115L10.7894 11.2115Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M10.9271 11.2023C10.9825 11.1966 11.031 11.2375 11.0429 11.2881C11.0122 11.3083 10.9915 11.3393 10.9938 11.3736C10.994 11.3829 10.9955 11.392 10.9984 11.4006C10.9803 11.414 10.9596 11.4223 10.9382 11.4245C10.8769 11.4308 10.8116 11.3704 10.8086 11.312C10.8057 11.2537 10.8659 11.2077 10.9272 11.2014L10.9271 11.2023Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M11.1021 11.4825C11.109 11.4956 11.1122 11.5108 11.1113 11.5261C11.1105 11.5414 11.1055 11.5563 11.0971 11.5687C11.0654 11.6137 10.9908 11.6218 10.9313 11.5859C10.8725 11.5509 10.8494 11.485 10.8811 11.44C10.8909 11.4277 10.9029 11.4177 10.9163 11.4109C10.9298 11.4042 10.9443 11.4007 10.9589 11.4008C10.9867 11.4495 11.0443 11.489 11.0996 11.4833L11.1021 11.4825ZM12.2688 11.894C12.2812 11.9482 12.2404 12.0036 12.1718 12.0204C12.0982 12.0378 12.0209 12.0053 11.9996 11.9488C11.9797 11.8951 12.0165 11.8376 12.0805 11.8158C12.1133 11.875 12.1913 11.9084 12.268 11.8939L12.2688 11.894Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M12.3211 11.7674C12.3398 11.8268 12.3025 11.8881 12.2371 11.9052C12.1716 11.9223 12.1026 11.8875 12.0831 11.8281C12.0662 11.7772 12.0912 11.7234 12.1406 11.6988C12.1612 11.7282 12.1891 11.7502 12.2211 11.7624C12.253 11.7745 12.2877 11.7763 12.3211 11.7674Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M12.4357 11.8028C12.4524 11.8563 12.4189 11.9122 12.3605 11.927C12.3416 11.932 12.3221 11.9324 12.3034 11.9282C12.2846 11.924 12.267 11.9152 12.2518 11.9026C12.2828 11.8677 12.2946 11.8224 12.279 11.7773C12.2753 11.7671 12.2705 11.7575 12.2646 11.7487C12.2749 11.7425 12.2859 11.7379 12.2973 11.7351C12.3177 11.7291 12.3384 11.7295 12.3571 11.7343C12.3757 11.7556 12.3986 11.7716 12.4242 11.7809C12.4286 11.7876 12.4322 11.7952 12.4349 11.8028L12.4357 11.8028ZM12.6841 11.7402C12.7035 11.8004 12.6662 11.8634 12.6001 11.8804C12.5339 11.8974 12.4643 11.8626 12.4448 11.8034L12.4418 11.7894C12.4677 11.7934 12.4943 11.7923 12.5201 11.786C12.5811 11.7715 12.6243 11.7291 12.6364 11.6801C12.6582 11.6934 12.675 11.7146 12.6841 11.7402Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M12.7003 11.6569C12.7191 11.7153 12.6827 11.7758 12.6198 11.7921C12.5921 11.7992 12.5633 11.7974 12.5369 11.7869C12.5696 11.752 12.5824 11.7048 12.5668 11.6595C12.5572 11.6335 12.541 11.6114 12.5201 11.5957C12.53 11.5901 12.5404 11.5858 12.5511 11.5828C12.6141 11.5656 12.6814 11.5994 12.7003 11.6569Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M12.8294 11.593C12.8482 11.6503 12.8119 11.7115 12.7483 11.7278C12.7313 11.7319 12.7138 11.7326 12.6967 11.73C12.7016 11.7092 12.7001 11.6861 12.6935 11.6636C12.6853 11.6429 12.6733 11.6244 12.6581 11.6094C12.643 11.5943 12.6251 11.583 12.6056 11.5761C12.6193 11.5494 12.646 11.5271 12.6799 11.5182C12.7434 11.502 12.8098 11.5356 12.8295 11.5921L12.8294 11.593ZM12.1753 11.7367C12.1584 11.7614 12.1321 11.78 12.0997 11.7899C12.0294 11.8076 11.9558 11.7716 11.935 11.7077C11.9134 11.6438 11.9534 11.5773 12.0238 11.5587C12.0764 11.5445 12.1316 11.5618 12.1652 11.5998C12.1558 11.6135 12.1496 11.6294 12.1471 11.6461C12.1447 11.6628 12.146 11.6798 12.1511 11.6956C12.1565 11.7116 12.1646 11.725 12.1753 11.7367ZM11.0968 11.2378C11.1521 11.2321 11.2334 11.2971 11.2403 11.3583C11.2471 11.4204 11.2167 11.458 11.1791 11.4833C11.1406 11.5084 11.0933 11.5174 11.0516 11.4991C11.0098 11.4809 10.9699 11.4388 10.9573 11.3975C10.9439 11.3561 10.9526 11.3291 10.9792 11.2976C11.0065 11.2671 11.0415 11.2436 11.0968 11.2378Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M12.3711 11.6363C12.3899 11.6947 12.3536 11.7552 12.2898 11.7715C12.226 11.7887 12.1595 11.7549 12.1398 11.6974C12.1217 11.6399 12.1573 11.5785 12.2211 11.5622C12.2848 11.5459 12.3522 11.5797 12.3711 11.6363Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M12.5818 11.6687C12.5999 11.7252 12.5644 11.7857 12.5015 11.8021C12.4394 11.8184 12.3729 11.7847 12.354 11.7281C12.335 11.6716 12.3714 11.6111 12.4343 11.5947C12.4964 11.5784 12.563 11.6112 12.5818 11.6687Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.020053" />
                                                                    <path
                                                                        d="M10.914 8.30469L10.899 8.32344L10.3739 8.9798L10.3589 8.99105L10.3739 9.00605C10.5424 9.18332 10.6375 9.41783 10.6402 9.66241C10.643 9.88406 10.6087 10.1046 10.5389 10.315C10.4639 10.5588 10.3589 10.7763 10.3289 11.1364C10.3184 11.2479 10.3303 11.3604 10.3638 11.4673C10.3973 11.5742 10.4517 11.6734 10.5239 11.759C10.6233 11.879 10.7474 11.9762 10.8877 12.044C11.1615 12.1753 11.4428 12.1303 11.7278 12.1641C11.8516 12.1828 11.9229 12.2616 11.9904 12.3291L12.0016 12.3441L12.0166 12.3291C12.0804 12.2616 12.1517 12.1791 12.2792 12.1641C12.5567 12.1266 12.8418 12.1753 13.1156 12.044C13.2556 11.9758 13.3796 11.8786 13.4794 11.759C13.6032 11.609 13.6969 11.4027 13.6744 11.1364C13.6444 10.7763 13.5431 10.5588 13.4644 10.3113C13.3949 10.1021 13.3607 9.88281 13.3631 9.66241C13.3631 9.44112 13.4606 9.16733 13.6294 9.00605L13.6444 8.99105L13.6332 8.9798L13.1043 8.32344L13.0893 8.30469L13.0743 8.31969C12.9284 8.44988 12.737 8.51727 12.5417 8.50722C12.3542 8.49597 12.1667 8.42846 12.0129 8.33094L12.0016 8.32344L11.9904 8.33094C11.8326 8.4315 11.652 8.49083 11.4653 8.50347C11.2693 8.51555 11.0764 8.44947 10.929 8.31969L10.9102 8.30469H10.914ZM10.9177 8.36095C11.0704 8.48934 11.2661 8.55502 11.4653 8.54473C11.6483 8.53336 11.8258 8.47804 11.9829 8.38345V10.3H10.5839C10.6507 10.0929 10.6836 9.87629 10.6814 9.65866C10.6814 9.43362 10.5839 9.15983 10.4151 8.98355L10.9177 8.3572V8.36095ZM13.0856 8.36095L13.5881 8.99105C13.4196 9.17431 13.3247 9.41343 13.3219 9.66241C13.3197 9.88004 13.3526 10.0966 13.4194 10.3038H12.0204V8.3872C12.1774 8.48179 12.355 8.53711 12.538 8.54848C12.7367 8.55981 12.9323 8.49549 13.0856 8.36845V8.36095ZM10.5727 10.345H13.4269C13.5056 10.5851 13.5994 10.7951 13.6294 11.1364C13.6401 11.2439 13.6291 11.3525 13.5968 11.4556C13.5646 11.5587 13.5119 11.6542 13.4419 11.7365C13.3457 11.8499 13.2269 11.9419 13.0931 12.0065C12.8305 12.1303 12.5567 12.0891 12.2679 12.1266C12.1367 12.1416 12.0579 12.2203 11.9979 12.2878C11.9341 12.2203 11.8591 12.1416 11.7278 12.1266C11.439 12.0891 11.1653 12.1303 10.9027 12.0065C10.8164 11.969 10.6702 11.879 10.5502 11.7327C10.4301 11.5865 10.3401 11.3952 10.3626 11.1364C10.3926 10.7951 10.4901 10.5851 10.5652 10.345H10.5727Z"
                                                                        fill="#E7CA00" stroke="#D4AF37"
                                                                        stroke-width="0.0187531" />
                                                                    <path
                                                                        d="M14.0012 7.42725L13.9975 7.431L13.975 7.58852L13.9562 7.72354L13.8662 7.68604C13.7499 7.63353 13.5099 7.60728 13.4911 7.64103C13.4874 7.66353 13.5136 7.79106 13.5549 7.94108C13.5661 7.97109 13.5549 7.97859 13.4874 8.00109C13.4386 8.01609 13.3899 8.0386 13.3711 8.0536C13.3336 8.0761 13.3411 8.0836 13.4236 8.15862L13.5136 8.23738L13.4686 8.27488C13.4311 8.30489 13.4311 8.30489 13.5736 8.44366C13.7349 8.59369 13.8174 8.63869 13.9262 8.63869C13.96 8.63869 13.9975 8.64619 14.0237 8.63869C14.0612 8.63119 14.0875 8.61994 14.1737 8.61244C14.2713 8.61994 14.3613 8.66495 14.3988 8.68745L14.4213 8.73996C14.3538 8.66495 14.2038 8.63869 14.1737 8.63494C14.1437 8.63494 14.1287 8.64244 14.095 8.6537C14.0612 8.66495 14.0462 8.67995 14.0162 8.72496C13.9937 8.78122 14.0387 8.84123 14.0912 8.84873C14.1625 8.85998 14.2113 8.82247 14.2113 8.75871C14.2113 8.70995 14.185 8.67245 14.2075 8.67245C14.29 8.67995 14.4175 8.74746 14.44 8.82997C14.47 8.93499 14.4625 8.94249 14.4138 8.86748C14.3742 8.81546 14.3244 8.77207 14.2675 8.73996C14.2525 8.73996 14.2113 8.83373 14.2113 8.87498C14.2113 8.90499 14.2038 8.91249 14.1812 8.90124C14.1625 8.88998 14.1212 8.88248 14.0875 8.87873L14.0275 8.86748L14.0425 8.96125C14.05 9.01375 14.0762 9.09252 14.095 9.13377L14.1362 9.20879L14.0462 9.18253C13.8474 9.12252 13.8624 9.11877 13.8774 9.22004C13.8812 9.27255 13.8925 9.33256 13.9 9.34756C13.9112 9.37381 13.9 9.38131 13.8324 9.38131C13.7912 9.38131 13.7574 9.38506 13.7574 9.39257C13.7574 9.43382 13.9075 9.64011 13.9862 9.70012C14.08 9.77513 14.2563 9.85014 14.3238 9.85014C14.35 9.85014 14.41 9.86889 14.47 9.88765L14.5751 9.92515V10.0414C14.5751 10.1652 14.5376 10.4165 14.5151 10.4165C14.5113 10.4165 14.4775 10.364 14.44 10.2965C14.365 10.1539 14.365 10.1577 14.3463 10.1914C14.3313 10.2139 14.3275 10.2102 14.3275 10.1802C14.3032 10.0786 14.2542 9.98461 14.185 9.9064L14.14 9.86514L14.1137 9.9139L14.0912 9.96266L13.99 9.85014C13.9337 9.79013 13.8774 9.74137 13.8737 9.74887C13.8624 9.74887 13.8512 9.80138 13.8437 9.86139C13.8249 10.0227 13.8174 10.0339 13.7537 9.97391L13.7012 9.9214L13.6862 9.97016C13.6705 10.1452 13.6857 10.3217 13.7312 10.4915C13.7578 10.57 13.7791 10.6502 13.7949 10.7315C13.8174 10.8741 13.9 11.0316 14.0012 11.1366C14.0387 11.1741 14.0387 11.1891 14.02 11.1891C14.005 11.1891 13.975 11.2041 13.96 11.2229C13.8849 11.3016 13.9525 11.4104 14.065 11.3879C14.1212 11.3804 14.1325 11.3841 14.1512 11.4254C14.1812 11.4854 14.1812 11.5942 14.155 11.6392C14.1362 11.6767 14.0237 11.7217 14.005 11.7029C14.0012 11.6992 13.9975 11.6354 13.9975 11.5642V11.4329L13.9037 11.4854C13.6583 11.6432 13.4845 11.891 13.4199 12.1755C13.4049 12.258 13.3561 12.2655 13.2961 12.363C13.2337 12.3997 13.1768 12.4452 13.1273 12.4981C13.0336 12.5881 13.0073 12.6031 12.8648 12.6368C12.6885 12.6819 12.3134 12.7419 12.0321 12.7719C11.7884 12.7944 11.0157 12.9219 10.967 12.9406C10.9297 12.9563 10.8922 12.9713 10.8545 12.9857C10.8163 13.0023 10.7828 13.0281 10.7569 13.0607C10.7269 13.1019 10.7269 13.1169 10.7494 13.1544C10.7982 13.2519 10.8995 13.2482 11.1095 13.1469C11.2024 13.1029 11.3008 13.0713 11.402 13.0532C11.4771 13.0419 11.5858 13.0157 11.6421 13.0044C11.6983 12.9894 11.8596 12.9631 11.9946 12.9406C12.4579 12.886 12.9149 12.7881 13.3599 12.6481C13.5699 12.5731 13.5661 12.5731 13.7612 12.5918C13.9787 12.6143 14.2488 12.5468 14.3613 12.4418C14.3875 12.4231 14.4513 12.3443 14.5113 12.2693C14.5638 12.1943 14.6351 12.1193 14.6613 12.1005C14.7326 12.0517 14.6913 12.0367 14.5038 12.0367H14.3463L14.4025 11.9205C14.4625 11.7855 14.5263 11.6054 14.5151 11.5942C14.5113 11.5904 14.455 11.5942 14.395 11.6129C14.3313 11.6242 14.2788 11.6354 14.275 11.6317L14.29 11.5679C14.305 11.5304 14.3275 11.5042 14.3613 11.4967L14.4363 11.4779C14.4705 11.475 14.5049 11.4788 14.5376 11.4892C14.6051 11.5079 14.6088 11.5117 14.5976 11.5717C14.5901 11.6467 14.6276 11.6954 14.6951 11.6954C14.7476 11.6954 14.8038 11.6429 14.8038 11.5979C14.8038 11.5454 14.7288 11.4854 14.6838 11.4967C14.6341 11.498 14.5846 11.4904 14.5376 11.4742L14.4363 11.4366L14.5338 11.4179C14.6838 11.3841 14.7326 11.3916 14.7588 11.4366C14.7701 11.4667 14.7963 11.4817 14.8339 11.4854C14.9539 11.4967 14.9951 11.3279 14.8789 11.2904C14.8376 11.2791 14.7438 11.3241 14.7438 11.3579C14.7438 11.3691 14.7138 11.3766 14.6763 11.3766C14.5995 11.377 14.5233 11.3909 14.4513 11.4179L14.5976 11.3466C14.6831 11.3204 14.767 11.2891 14.8489 11.2529C15.0214 11.1779 15.1864 10.9791 15.2502 10.7915C15.2975 10.633 15.3252 10.4693 15.3327 10.304C15.3214 10.304 15.2577 10.3265 15.1939 10.3565C15.0701 10.4127 15.0701 10.4127 15.0701 10.3715C15.0701 10.2965 15.1039 10.0677 15.1151 10.0339C15.1264 10.0152 15.1227 10.0039 15.1039 10.0039C14.9706 10.0453 14.8469 10.1129 14.7401 10.2027C14.6276 10.2965 14.6126 10.3002 14.6126 10.2627C14.6126 10.2365 14.6313 10.1877 14.6501 10.1577C14.6876 10.1014 14.6951 10.0977 14.7626 10.1089C14.8301 10.1202 14.8376 10.1127 14.8676 10.0714C14.9089 10.0114 14.8864 9.9364 14.8226 9.91765C14.7851 9.9064 14.7888 9.8989 14.8601 9.86514C14.9662 9.80449 15.0513 9.7129 15.1039 9.6026L15.1489 9.52759L15.0814 9.53509C15.0439 9.53509 15.0139 9.54259 15.0139 9.53509L15.0401 9.45633C15.0551 9.41132 15.0701 9.34381 15.0701 9.2988C15.0701 9.22379 14.9989 8.93124 14.9726 8.90124C14.9614 8.88998 14.9239 8.90874 14.8826 8.94249L14.8076 9.0025L14.7363 8.84873C14.7135 8.79398 14.6885 8.74018 14.6613 8.68745C14.6538 8.67995 14.6313 8.6987 14.6013 8.72496C14.5451 8.77747 14.5413 8.74746 14.5901 8.63494C14.6388 8.53743 14.6576 8.52242 14.7101 8.55993C14.7776 8.59744 14.8489 8.55993 14.8564 8.48492C14.8601 8.43616 14.8526 8.41741 14.8189 8.39115C14.7926 8.37615 14.7588 8.36865 14.7438 8.3724C14.7251 8.3799 14.7063 8.3649 14.6951 8.32739C14.6893 8.31134 14.6799 8.29687 14.6675 8.28514C14.6551 8.27341 14.6402 8.26476 14.6238 8.25988C14.5263 8.23363 14.455 8.3574 14.5301 8.42866C14.5563 8.45491 14.5563 8.47742 14.5376 8.61619C14.5 8.83748 14.4888 8.85623 14.4625 8.75871C14.4325 8.64619 14.4475 8.33864 14.485 8.24863C14.5563 8.0911 14.5151 7.84356 14.4025 7.71604C14.288 7.5955 14.1519 7.49754 14.0012 7.42725ZM13.8699 7.94483C13.9486 7.99717 14.0172 8.06323 14.0725 8.13986C14.17 8.25238 14.2825 8.45116 14.3575 8.60119C14.3313 8.57118 14.3163 8.56743 14.2375 8.46241C14.1775 8.37615 14.0725 8.18487 13.975 8.08735C13.8887 7.99734 13.8549 7.94483 13.8662 7.94483H13.8699Z"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M14.3466 9.96274C14.3278 10.0378 14.3128 10.0491 14.3503 10.1054C14.3691 10.1317 14.3991 10.1429 14.4329 10.1429C14.4855 10.1429 14.5117 10.1804 14.5568 10.3156C14.5605 10.3381 14.568 10.3381 14.568 10.3118C14.568 10.2893 14.553 10.2443 14.5305 10.1992C14.508 10.1579 14.5005 10.1241 14.5117 10.1166C14.5493 10.0941 14.5305 10.0003 14.4892 9.9665C14.4292 9.92896 14.4104 9.94022 14.3466 9.9665V9.96274Z"
                                                                        fill="#008F4C" />
                                                                    <path
                                                                        d="M10.8241 13.0532C10.7865 13.0871 10.7752 13.136 10.8053 13.1661C10.8467 13.2113 10.9972 13.1699 11.0161 13.1134C11.0349 13.0306 10.9069 12.9892 10.8279 13.0532H10.8241Z"
                                                                        fill="#9EAB05" />
                                                                    <path
                                                                        d="M14.0458 7.58452C14.0795 7.7164 14.1395 7.84014 14.2221 7.94833C14.2483 7.98583 14.2746 8.00834 14.2821 8.00459C14.2821 7.99709 14.2333 7.88457 14.1621 7.7533C14.0646 7.56577 14.0346 7.52826 14.0458 7.58452ZM13.4082 8.09085C13.5055 8.13569 13.6093 8.16481 13.7158 8.17711C13.7158 8.14336 13.6257 8.1021 13.517 8.09085C13.4532 8.08335 13.4045 8.08335 13.412 8.09085H13.4082ZM13.5282 8.31964C13.5507 8.34214 13.8845 8.49592 13.9783 8.52592C14.0308 8.54467 14.1058 8.55593 14.1396 8.55218C14.1958 8.54467 14.1883 8.54092 14.0683 8.50342C13.9941 8.47774 13.9214 8.44768 13.8508 8.4134C13.7383 8.35714 13.4945 8.28588 13.5282 8.31964ZM14.6159 8.80722C14.5706 8.99198 14.5405 9.18014 14.5259 9.36981C14.5146 9.49358 14.5184 9.53484 14.5409 9.56109C14.5634 9.59485 14.5709 9.57984 14.5896 9.41107C14.6173 9.1907 14.6348 8.96918 14.6422 8.74721C14.6384 8.74721 14.6234 8.76971 14.6121 8.80347L14.6159 8.80722ZM14.2933 8.95724C14.3008 9.11102 14.3684 9.27229 14.3909 9.20103C14.389 9.13005 14.3737 9.06005 14.3459 8.99475L14.2858 8.82972L14.2933 8.96099V8.95724ZM14.0796 8.96474L14.1471 9.05101L14.1921 9.10727V9.05851C14.1911 9.04136 14.1862 9.02467 14.1777 9.00972C14.1693 8.99477 14.1575 8.98195 14.1433 8.97224C14.0833 8.92349 14.0458 8.91974 14.0796 8.96474ZM13.8095 9.42982C13.8977 9.50542 13.9904 9.57556 14.0871 9.63985C14.1433 9.67736 14.1433 9.67736 14.0721 9.5911C13.997 9.50483 13.8845 9.42232 13.8358 9.42232C13.8208 9.42232 13.8095 9.42232 13.8095 9.42982ZM13.9145 9.83489C13.967 10.0449 14.0046 10.1649 14.0271 10.1762C14.0383 10.1837 14.0496 10.1912 14.0533 10.1874C14.0608 10.1762 13.9633 9.88739 13.9333 9.83864L13.9033 9.78988L13.9145 9.83489ZM14.1358 9.99991C14.1358 10.0299 14.1508 10.0862 14.1733 10.1274C14.1921 10.1687 14.2071 10.1912 14.2033 10.1724L14.1808 10.0562C14.1658 9.9549 14.1358 9.9174 14.1358 9.99991ZM13.7495 10.1424C13.787 10.2625 13.877 10.45 14.0121 10.6675C14.1058 10.825 14.1058 10.825 14.1133 10.7575C14.1133 10.705 14.0983 10.66 14.0271 10.54C13.9635 10.4331 13.901 10.3255 13.8395 10.2174C13.8104 10.1558 13.7739 10.0978 13.7308 10.0449C13.7233 10.0449 13.7308 10.0899 13.7495 10.1424ZM14.931 10.1687C14.8152 10.3025 14.7122 10.4469 14.6234 10.6C14.6046 10.6375 14.6009 10.675 14.6084 10.705C14.6197 10.75 14.6459 10.7163 14.8334 10.4162C14.9497 10.2287 15.0397 10.0787 15.0322 10.0787C15.021 10.0787 14.9797 10.1199 14.931 10.1687ZM14.6309 11.5677C14.6242 11.5793 14.6207 11.5924 14.6208 11.6058C14.6209 11.6192 14.6246 11.6323 14.6315 11.6438C14.6384 11.6553 14.6482 11.6647 14.66 11.6711C14.6718 11.6775 14.685 11.6806 14.6984 11.6802C14.7547 11.6802 14.7884 11.6164 14.7584 11.5639C14.7359 11.5189 14.6534 11.5227 14.6309 11.5677Z"
                                                                        fill="#75B52B" />
                                                                    <path
                                                                        d="M14.069 8.69466C13.9977 8.74341 14.0728 8.87093 14.1515 8.82593C14.1965 8.79592 14.204 8.72466 14.1628 8.69466C14.1493 8.68347 14.1341 8.67459 14.1178 8.6684L14.069 8.69466ZM14.5678 8.28584C14.5266 8.29709 14.5078 8.3571 14.5378 8.40586C14.5753 8.47337 14.6691 8.44336 14.6691 8.36835C14.6691 8.30834 14.6241 8.27459 14.5716 8.28584H14.5678ZM14.6954 8.43211C14.6879 8.44712 14.6879 8.47712 14.6954 8.50337C14.6954 8.53713 14.7104 8.54463 14.7516 8.54463C14.8229 8.54463 14.8604 8.49587 14.8266 8.44712C14.8004 8.40586 14.7141 8.39461 14.6954 8.43211ZM13.9827 11.2451C13.9077 11.3013 13.979 11.4026 14.0653 11.3688C14.1028 11.3538 14.1215 11.3088 14.099 11.2676C14.0728 11.2151 14.0277 11.2076 13.9827 11.2451ZM14.3691 9.98487C14.3465 10.0036 14.354 10.0749 14.3766 10.0974C14.4366 10.1574 14.5191 10.0974 14.5003 10.0186C14.4891 9.98111 14.4741 9.96986 14.4328 9.96986C14.4066 9.96986 14.3728 9.97736 14.3691 9.98487ZM14.7216 9.98487C14.7066 10.0374 14.7404 10.0861 14.7891 10.0861C14.8379 10.0861 14.8716 10.0411 14.8641 9.98862C14.8604 9.95111 14.8454 9.94361 14.7966 9.93986C14.7441 9.93236 14.7329 9.93986 14.7216 9.98111V9.98487ZM14.7704 11.3726C14.7591 11.4251 14.7891 11.4739 14.8416 11.4739C14.8866 11.4739 14.9204 11.4289 14.9129 11.3763C14.9091 11.3426 14.8941 11.3313 14.8454 11.3276C14.7929 11.3238 14.7816 11.3276 14.7704 11.3726ZM14.6578 11.5451C14.5828 11.6014 14.6503 11.7026 14.7404 11.6689C14.7779 11.6539 14.7929 11.6089 14.7704 11.5676C14.7441 11.5151 14.7029 11.5076 14.6578 11.5451Z"
                                                                        fill="#D91023" />
                                                                    <path
                                                                        d="M13.8662 7.95953L13.9488 8.05712C14.0357 8.15633 14.1136 8.26311 14.1815 8.37618C14.2566 8.49629 14.3505 8.6164 14.3505 8.59388C14.3505 8.57136 14.1815 8.28609 14.1177 8.19976C14.0276 8.07965 13.8888 7.93701 13.8625 7.93701C13.855 7.93701 13.8587 7.94452 13.8662 7.95953Z"
                                                                        fill="#75B52B" />
                                                                    <path
                                                                        d="M14.354 10.3373C14.354 10.3523 14.3315 10.4798 14.324 10.6261C14.313 10.95 14.2754 11.2724 14.2115 11.59L14.2152 11.6238L14.249 11.5788C14.2827 11.5338 14.3165 11.5 14.3653 11.4663C14.5989 11.2431 14.8123 10.9996 15.0029 10.7386C15.1979 10.4836 15.2429 10.4161 15.2391 10.4123C15.2316 10.4048 15.1716 10.4648 14.9316 10.7611C14.8511 10.8591 14.7686 10.9554 14.6841 11.0499C14.5153 11.2375 14.3278 11.4062 14.279 11.4738L14.294 11.395C14.3452 11.1408 14.3678 10.8816 14.3615 10.6224V10.3148L14.354 10.3373ZM13.8777 11.5825L13.7764 11.7588C13.6708 11.9575 13.5396 12.1416 13.3863 12.3064C13.3488 12.3439 13.3601 12.3514 13.3488 12.3589C13.3038 12.4039 13.4839 12.4339 13.6226 12.4527C13.8064 12.4677 13.9077 12.4339 14.399 12.1714C14.5115 12.1114 14.5453 12.0964 14.5228 12.0964C14.4075 12.1238 14.2965 12.1667 14.1927 12.2239C13.9827 12.3214 13.8927 12.3664 13.7952 12.3852C13.7202 12.4039 13.6151 12.4039 13.5514 12.3889H13.5064L13.5289 12.3777C13.5514 12.3777 13.5776 12.3739 13.5889 12.3664C13.6001 12.3551 13.6376 12.3289 13.6751 12.3101C13.897 12.1617 14.0987 11.9852 14.2752 11.7851C14.2018 11.8325 14.1328 11.8865 14.069 11.9463C13.9078 12.1079 13.7167 12.2366 13.5064 12.3251L13.4726 12.3326L13.5026 12.3026L13.5889 12.1789C13.7265 11.9835 13.834 11.7686 13.9077 11.5413L13.8777 11.5825ZM13.8852 9.15213C13.9488 9.24794 14.0203 9.33827 14.099 9.42217C14.219 9.55719 14.2865 9.6097 14.3803 9.72972C14.4778 9.84974 14.4853 9.85724 14.5903 9.95476C14.7216 9.77848 14.8041 9.54219 14.8603 9.39217C14.9128 9.24589 14.9579 9.11837 14.9616 8.92334C14.8866 9.08837 14.8828 9.14838 14.8228 9.32466C14.7628 9.50468 14.6353 9.81223 14.5828 9.87975C14.579 9.88725 14.3052 9.54969 14.1852 9.41092C14.0577 9.26089 13.8852 9.13712 13.8852 9.15213Z"
                                                                        fill="#EAC102" fill-opacity="0.5" />
                                                                    <path
                                                                        d="M13.9789 7.55457L13.9564 7.72335L13.8852 7.68959C13.8139 7.65584 13.6264 7.61458 13.5364 7.61458C13.4876 7.61458 13.4839 7.62208 13.4951 7.67834C13.5064 7.73835 13.5551 7.91088 13.5701 7.94838C13.5739 7.95964 13.5439 7.97839 13.4951 7.98964C13.4552 8.00137 13.4172 8.01907 13.3826 8.04215C13.3451 8.0684 13.3526 8.07215 13.4238 8.13591C13.5101 8.21093 13.5176 8.23718 13.4689 8.27094C13.4426 8.28969 13.4538 8.30844 13.5814 8.42846C13.6564 8.50347 13.7539 8.57849 13.7914 8.60099C13.8889 8.64975 14.0802 8.64975 14.1815 8.60099C14.2527 8.56348 14.2565 8.56348 14.3015 8.59349C14.3502 8.62349 14.3502 8.62349 14.3277 8.59349C14.2658 8.54673 14.1992 8.50651 14.129 8.47347C13.8657 8.33888 13.6613 8.11183 13.5551 7.83587C13.5101 7.70459 13.5101 7.63708 13.5551 7.63708C13.6376 7.63708 13.8027 7.67459 13.8927 7.7196C14.0352 7.78336 14.2827 8.01965 14.354 8.15842C14.4028 8.25593 14.4065 8.28969 14.4103 8.43221C14.4103 8.60099 14.4365 8.6685 14.4403 8.51848C14.4478 8.33095 14.4553 8.28594 14.4815 8.21093C14.5415 8.07215 14.5115 7.85837 14.4178 7.73085C14.35 7.65905 14.2745 7.59491 14.1927 7.53957C14.1308 7.49887 14.0719 7.45374 14.0164 7.40455C14.0089 7.39329 13.9902 7.4608 13.9789 7.55457ZM14.2227 7.58458C14.3502 7.67084 14.3878 7.70835 14.429 7.79086C14.489 7.91838 14.504 8.07215 14.474 8.18467L14.4478 8.26719L14.3953 8.16217C14.3396 8.06194 14.2673 7.9719 14.1815 7.89588C14.1252 7.83419 14.0623 7.77885 13.9939 7.73085C13.9752 7.73085 13.9827 7.60333 14.0127 7.49081C14.0239 7.44205 14.0127 7.43455 14.2227 7.58458ZM13.6076 8.0459C13.6257 8.07454 13.6486 8.0999 13.6751 8.12091C13.6939 8.13591 13.7126 8.16217 13.7164 8.18467C13.7276 8.21843 13.7164 8.22218 13.6301 8.22218C13.5401 8.22218 13.5251 8.21468 13.4538 8.14717C13.4163 8.10591 13.3826 8.0684 13.3901 8.06465C13.4051 8.04965 13.5289 7.99714 13.5514 7.99339C13.5664 7.99339 13.5889 8.01589 13.6076 8.0459ZM13.8627 8.33845C13.9752 8.43971 14.0052 8.46222 14.1402 8.51473C14.2115 8.54473 14.2152 8.54848 14.1852 8.57474C14.144 8.61599 13.9339 8.631 13.8364 8.60099C13.7539 8.57474 13.4576 8.30469 13.4876 8.28594C13.5515 8.25762 13.6203 8.24231 13.6901 8.24093C13.7426 8.24093 13.7764 8.25968 13.8627 8.33845ZM14.414 8.68725C14.4065 8.69476 14.414 8.73976 14.429 8.78102C14.4665 8.87478 14.4665 8.90479 14.429 8.96855C14.4112 9.01014 14.401 9.05461 14.399 9.09982C14.3984 9.14571 14.3908 9.19125 14.3765 9.23484L14.3577 9.29485L14.294 9.25735C14.2612 9.23809 14.235 9.20931 14.219 9.17483C14.204 9.11857 14.2115 8.99855 14.234 8.88229C14.2527 8.80352 14.264 8.78102 14.2902 8.78102C14.3202 8.78477 14.3202 8.78102 14.3015 8.75852C14.2827 8.73226 14.2752 8.73226 14.2527 8.76227C14.2343 8.7908 14.2215 8.82264 14.2152 8.85603C14.204 8.91979 14.204 8.91979 14.1515 8.89354C14.0689 8.84853 14.0389 8.85603 14.0389 8.91979C14.0389 8.98355 14.0689 9.08107 14.1102 9.14483C14.1552 9.20859 14.1552 9.18233 14.1102 9.09607C14.0614 8.9948 14.0427 8.88229 14.0765 8.88229C14.0915 8.88229 14.1215 8.89729 14.1477 8.91229C14.1815 8.93479 14.1852 8.9573 14.1852 9.06982C14.1815 9.21984 14.1665 9.22734 13.9864 9.16733C13.9302 9.14483 13.8739 9.12983 13.8702 9.13733C13.8627 9.14483 13.8927 9.30611 13.9114 9.35486C13.9227 9.37737 13.9077 9.38487 13.8364 9.37737L13.7464 9.36987L13.7989 9.45988C13.8526 9.55823 13.9276 9.6433 14.0185 9.70886C14.1093 9.77441 14.2137 9.81877 14.324 9.83869C14.399 9.85369 14.489 9.87995 14.5228 9.8987C14.5678 9.92121 14.5753 9.92121 14.5603 9.8987C14.549 9.88745 14.504 9.8612 14.4628 9.84994C14.354 9.81244 14.249 9.73367 14.1102 9.5874C13.9714 9.44113 13.9039 9.32111 13.9039 9.22734C13.9039 9.17483 13.9114 9.16358 13.9339 9.17483L14.0802 9.21234C14.2415 9.25735 14.2827 9.27985 14.384 9.38862C14.4965 9.50489 14.5303 9.57615 14.564 9.72617C14.579 9.79743 14.594 9.85369 14.6015 9.8612C14.624 9.88745 14.6315 9.80119 14.609 9.72617C14.5753 9.6024 14.6278 9.35861 14.7366 9.14483C14.7853 9.05106 14.9316 8.90854 14.9541 8.93479C14.9616 8.9423 14.9878 9.02481 15.0104 9.11482C15.0629 9.3061 15.0554 9.36236 14.9653 9.55365C14.9165 9.66877 14.8375 9.76855 14.7366 9.84244C14.6615 9.89495 14.6803 9.90995 14.7853 9.8837C14.8753 9.8612 15.0254 9.72617 15.1041 9.5949L15.1454 9.51989L15.0704 9.53489L14.9954 9.54614L15.0329 9.44488C15.0779 9.31736 15.0779 9.2686 15.0329 9.11482L14.9841 8.93479L14.9728 8.88229L14.9091 8.92354C14.8828 8.94031 14.8588 8.96048 14.8378 8.98355C14.8153 9.01731 14.7891 8.9798 14.7253 8.83353L14.6503 8.69476C14.639 8.69476 14.609 8.71726 14.579 8.74726L14.5303 8.79977L14.5415 8.74726C14.5528 8.70976 14.549 8.69476 14.534 8.70601C14.5265 8.70601 14.5153 8.73601 14.5153 8.75852C14.5153 8.84853 14.4815 8.84853 14.4553 8.75852C14.4403 8.70976 14.4215 8.676 14.4178 8.6835L14.414 8.68725ZM14.6916 9.16358C14.6409 9.26175 14.6043 9.36654 14.5828 9.47488L14.5603 9.6099L14.5303 9.53489C14.5086 9.48543 14.4808 9.43883 14.4478 9.39612C14.3953 9.33611 14.3953 9.33236 14.4178 9.19734C14.4515 8.98355 14.4928 8.87103 14.5678 8.78477L14.639 8.70976L14.7066 8.84853L14.7816 8.9873L14.6916 9.16358ZM13.9677 9.47488C14.2002 9.71867 14.2827 9.81244 14.2415 9.79744C14.0818 9.75588 13.9437 9.65537 13.8552 9.51614C13.8293 9.48073 13.8067 9.44307 13.7877 9.40362C13.7877 9.39612 13.8102 9.39237 13.8402 9.39237C13.8739 9.39237 13.9152 9.41862 13.9677 9.47488ZM15.0554 9.62491C14.9803 9.74493 14.9316 9.78993 14.8491 9.83119L14.7741 9.8687L14.8491 9.78993C14.8931 9.74196 14.9333 9.69054 14.9691 9.63616C15.0066 9.57615 15.0329 9.5574 15.0929 9.54614C15.1004 9.54614 15.0854 9.58365 15.0554 9.62116V9.62491Z"
                                                                        fill="#CAB313" fill-opacity="0.5" />
                                                                    <path
                                                                        d="M14.3608 8.83747C14.3872 8.89406 14.4363 8.95066 14.4363 8.93179C14.4363 8.92048 14.4174 8.88652 14.3872 8.85633C14.3608 8.82237 14.3495 8.8186 14.3608 8.83747Z"
                                                                        fill="#005000" />
                                                                    <path
                                                                        d="M13.8548 9.82352L13.8248 9.96612L13.806 10.0412L13.7497 9.98863L13.6972 9.9361L13.6822 10.0262C13.6682 10.1884 13.6873 10.3518 13.7385 10.5065C13.7635 10.5852 13.7836 10.6654 13.7985 10.7466C13.821 10.9192 13.9636 11.1219 14.1512 11.2494C14.185 11.2757 14.1963 11.3057 14.2075 11.392L14.2225 11.5046V11.3958C14.2118 11.2909 14.1943 11.1869 14.17 11.0843C14.11 10.8104 14.1325 10.6941 14.2676 10.4164L14.3651 10.2138L14.4664 10.4164C14.6015 10.6866 14.6165 10.7804 14.5415 11.0018C14.5236 11.0635 14.501 11.1237 14.4739 11.1819C14.4627 11.1969 14.4589 11.2119 14.4627 11.2232C14.4702 11.2307 14.4627 11.2495 14.4552 11.2645C14.4402 11.287 14.4364 11.287 14.4477 11.257C14.4552 11.2344 14.4289 11.257 14.3839 11.302C14.3491 11.3388 14.3201 11.3805 14.2976 11.4258C14.2863 11.4596 14.2901 11.4596 14.3201 11.4221L14.3876 11.332C14.4064 11.3057 14.4289 11.287 14.4364 11.2945C14.4664 11.3095 14.4927 11.257 14.5565 11.0843C14.6025 10.9092 14.693 10.7489 14.8192 10.619C14.9046 10.5374 15.0037 10.4714 15.1119 10.4239L15.2995 10.3376C15.3182 10.3376 15.262 10.6678 15.2244 10.7654C15.1779 10.8971 15.1037 11.0174 15.0068 11.1181C14.9242 11.1932 14.7666 11.2682 14.6128 11.3132C14.549 11.332 14.489 11.3508 14.4852 11.362C14.4739 11.377 14.624 11.3358 14.7666 11.287C14.9693 11.2119 15.1606 11.013 15.2357 10.8067C15.2732 10.7129 15.3483 10.3188 15.3295 10.3076C15.3295 10.3076 15.2657 10.3301 15.1869 10.3676L15.0518 10.4314L15.0631 10.3038C15.0706 10.2325 15.0856 10.1387 15.1006 10.0862C15.1194 9.99989 15.1194 9.99613 15.0818 10.0111C14.944 10.0626 14.8168 10.1389 14.7066 10.2363L14.594 10.3376L14.6015 10.1612C14.609 10.0487 14.6015 9.99989 14.594 10.0262C14.5828 10.0487 14.5753 10.1012 14.5753 10.15C14.5753 10.2438 14.5302 10.4314 14.5115 10.4314C14.504 10.4314 14.4739 10.3789 14.4364 10.3113C14.3726 10.1913 14.3464 10.1612 14.3426 10.21C14.3426 10.2213 14.3239 10.1838 14.2976 10.12C14.2731 10.0536 14.2403 9.99055 14.2 9.93234L14.1437 9.86105L14.1137 9.92109L14.0837 9.97737L14.0086 9.88356C13.9711 9.83103 13.9186 9.78225 13.8998 9.77099C13.8698 9.75223 13.8623 9.76348 13.8548 9.82352ZM13.9861 9.87981C14.0612 9.96987 14.2188 10.2701 14.2375 10.3564L14.2488 10.4052L14.215 10.3564C14.155 10.2701 13.9899 10.12 13.8848 10.0637C13.836 10.0337 13.836 10.0262 13.8473 9.96236L13.8736 9.84228C13.8811 9.81227 13.8923 9.78975 13.8998 9.78975C13.9323 9.81595 13.9613 9.84622 13.9861 9.87981ZM14.2488 10.0674C14.3051 10.18 14.3163 10.2551 14.2863 10.3001C14.2638 10.3376 14.1062 10.0111 14.1212 9.94735C14.1325 9.90983 14.14 9.90232 14.1662 9.92484C14.1813 9.93985 14.2188 9.99989 14.2526 10.0637L14.2488 10.0674ZM13.9111 10.1237C14.0236 10.1952 14.1195 10.2899 14.1925 10.4014C14.2075 10.4389 14.2038 10.4652 14.1738 10.5252C14.1169 10.6654 14.0962 10.8177 14.1137 10.968V11.0768C14.0874 11.0768 13.9486 10.9005 13.8886 10.7917C13.7599 10.5655 13.6951 10.3087 13.7009 10.0487L13.716 9.97362L13.7535 10.0111C13.7797 10.0337 13.851 10.0862 13.9148 10.1237H13.9111ZM15.0668 10.1237C15.0558 10.1884 15.047 10.2535 15.0406 10.3188C15.0293 10.4202 15.0256 10.4239 14.9167 10.4952C14.8436 10.5429 14.7779 10.6011 14.7216 10.6678C14.6766 10.7241 14.6353 10.7691 14.6278 10.7616C14.6165 10.7616 14.6053 10.7129 14.5978 10.6641C14.5903 10.6129 14.5777 10.5626 14.5603 10.514C14.5377 10.4539 14.5377 10.4389 14.5753 10.3901C14.6541 10.2776 14.9955 10.0374 15.0706 10.0374C15.0781 10.0374 15.0743 10.0749 15.0706 10.1237H15.0668ZM14.0424 11.0506C14.11 11.1219 14.155 11.1782 14.1475 11.2007C14.1475 11.2269 14.1212 11.2157 14.0462 11.1406C13.9484 11.0554 13.8758 10.9451 13.836 10.8217C13.8248 10.7729 13.8323 10.7766 13.8736 10.8479C13.9217 10.9219 13.9784 10.9899 14.0424 11.0506Z"
                                                                        fill="#CAB313" fill-opacity="0.5" />
                                                                    <path
                                                                        d="M13.8548 11.5192C13.64 11.681 13.4865 11.9112 13.4198 12.1718C13.4198 12.2318 13.3523 12.2843 13.3635 12.2768C13.371 12.303 13.431 12.2768 13.4573 12.183C13.506 12.0068 13.6448 11.6879 13.8286 11.5604C13.8811 11.5229 13.9411 11.4929 13.9486 11.4929C13.9561 11.4929 13.9599 11.5642 13.9561 11.6542C13.9561 11.7817 13.9411 11.8417 13.9036 11.913C13.8252 12.052 13.7162 12.1713 13.5848 12.2618C13.491 12.3143 13.4835 12.3368 13.5698 12.303C13.6636 12.2655 13.8848 12.0405 13.9449 11.9167C13.9749 11.853 13.9974 11.793 13.9974 11.778C13.9974 11.7667 14.0236 11.7442 14.0536 11.733C14.1211 11.7067 14.4662 11.6204 14.4699 11.6317C14.4849 11.6467 14.3387 11.9542 14.2937 12.0143C14.2186 12.108 14.0461 12.2393 13.9599 12.2655C13.9224 12.2768 13.8323 12.3256 13.7723 12.3368L13.5998 12.3593L13.5323 12.3968L13.5998 12.3856L13.7986 12.3631C14.0086 12.288 14.0911 12.243 14.2261 12.138L14.3162 12.063L14.4887 12.0705L14.6275 12.0818L14.5637 12.1605C14.5133 12.2202 14.4633 12.2802 14.4137 12.3406C14.3746 12.3935 14.3279 12.4403 14.2749 12.4793C14.1297 12.5434 13.9723 12.5754 13.8136 12.5731C13.6636 12.5731 13.6561 12.5731 13.581 12.5056C13.5023 12.4381 13.4685 12.4231 13.461 12.4531C13.461 12.4643 13.3898 12.4906 13.3185 12.5206C13.1685 12.5693 13.1347 12.5581 13.221 12.4793C13.2547 12.4493 13.2885 12.4493 13.356 12.4418C13.356 12.4418 13.5023 12.4793 13.506 12.4456C13.506 12.4156 13.356 12.4193 13.356 12.4193C13.2922 12.4231 13.2735 12.4193 13.3298 12.3518C13.3898 12.3143 13.416 12.2355 13.3823 12.2505C13.2997 12.3518 13.2435 12.3931 13.1197 12.5131C13.0321 12.5818 12.9292 12.6281 12.8197 12.6481C12.7147 12.6744 12.5384 12.7006 12.4371 12.7156C12.2346 12.7381 12.1521 12.7906 12.3433 12.7531C12.4409 12.7344 12.5684 12.7231 12.7297 12.6931C12.9584 12.6369 12.9734 12.6331 13.0897 12.5731C13.1835 12.4756 13.1985 12.4643 13.1497 12.5431C13.131 12.6031 13.161 12.5993 13.3448 12.5318C13.4873 12.4756 13.4948 12.4756 13.5323 12.5093C13.566 12.5468 13.5623 12.5468 13.491 12.5768C13.2424 12.6685 12.9865 12.7388 12.7259 12.7869C12.5496 12.8244 12.4034 12.8544 12.3959 12.8619C12.3809 12.8769 12.6059 12.8544 12.6509 12.8319C12.6734 12.8244 12.8309 12.7831 13.0072 12.7456C13.1797 12.7044 13.3785 12.6444 13.4498 12.6181C13.566 12.5693 13.5848 12.5693 13.6861 12.5881C13.8136 12.6106 14.0274 12.5881 14.1811 12.5393C14.3012 12.5018 14.3837 12.4306 14.5037 12.2618C14.5525 12.1905 14.6162 12.1193 14.6425 12.1005L14.6912 12.063L14.5262 12.0518C14.4324 12.048 14.3537 12.0368 14.3499 12.033C14.3917 11.9423 14.4292 11.8496 14.4624 11.7555L14.5149 11.5979L14.4474 11.6129L14.3162 11.6354L14.2487 11.6467L14.2749 11.5792C14.2899 11.5417 14.3012 11.5117 14.2937 11.5117L14.2562 11.5754C14.2262 11.6504 14.1886 11.6654 14.1999 11.5979C14.2074 11.5679 14.1999 11.5754 14.1774 11.6167C14.1578 11.6502 14.1292 11.6775 14.0949 11.6954L14.0124 11.7255C13.9749 11.7442 13.9749 11.733 13.9824 11.5979C13.9861 11.5079 13.9824 11.4517 13.9711 11.4517C13.9599 11.4517 13.9073 11.4817 13.8548 11.5192Z"
                                                                        fill="#CAB313" fill-opacity="0.5" />
                                                                    <path
                                                                        d="M12.0701 12.7717C11.9575 12.7792 11.7324 12.8129 11.3609 12.873L10.9856 12.933C10.9706 12.933 10.9669 12.9405 10.9706 12.948C10.9744 12.9555 10.9481 12.9668 10.9143 12.9743C10.828 12.9893 10.7305 13.0681 10.7305 13.1244C10.7305 13.1769 10.7943 13.237 10.843 13.2257C10.8693 13.2182 10.8693 13.2144 10.8355 13.2144C10.753 13.2107 10.723 13.1094 10.783 13.0531C10.8393 13.0043 11.0907 12.9293 11.2333 12.918C11.5308 12.8896 11.8264 12.8445 12.1189 12.7829C12.2427 12.7642 12.2202 12.7566 12.0701 12.7717Z"
                                                                        fill="#CAB313" fill-opacity="0.5" />
                                                                    <path
                                                                        d="M11.755 12.9553C11.5291 12.9876 11.3075 13.0456 11.0946 13.128C10.9595 13.1955 10.9783 13.203 11.1209 13.1355C11.2029 13.1011 11.2885 13.0759 11.376 13.0604L11.725 12.9929L12.0515 12.9291L12.1566 12.9141H12.0702C12.0215 12.9141 11.8826 12.9291 11.755 12.9516V12.9553Z"
                                                                        fill="#CAB313" fill-opacity="0.5" />
                                                                    <path
                                                                        d="M13.2619 12.4528C13.198 12.4904 13.1379 12.558 13.2056 12.5505C13.2582 12.543 13.4461 12.4866 13.4611 12.449C13.386 12.4565 13.3296 12.4377 13.2619 12.449V12.4528Z"
                                                                        fill="white" />
                                                                    <path
                                                                        d="M13.5162 12.8394C13.4827 12.8503 13.4603 12.8613 13.3151 12.8503C13.2123 12.8438 13.0849 12.8262 13.0201 12.824C12.895 12.824 12.895 12.8306 12.6738 12.9798C12.5174 13.0851 12.3163 13.0763 12.1666 13.0456C12.0772 13.0017 12.037 12.9951 12.0504 13.0171C12.075 13.0566 12.2515 13.1136 12.3498 13.1136C12.5062 13.1136 12.6224 13.0741 12.8123 12.9578C12.9598 12.8657 13.0246 12.8591 13.2257 12.903C13.4626 12.9491 13.4983 12.9293 13.6927 12.8438C13.6346 12.8438 13.6212 12.8438 13.6034 12.8525C13.6346 12.8174 13.6369 12.7823 13.6436 12.7604C13.6525 12.7472 13.6257 12.7648 13.5967 12.7867L13.5162 12.8394Z"
                                                                        fill="white" stroke="#D4AF37"
                                                                        stroke-width="0.0199173" />
                                                                    <path
                                                                        d="M13.2101 12.7823C13.1006 12.767 13.0269 12.7516 12.9576 12.7604C12.8816 12.767 12.828 12.8043 12.7364 12.8591C12.647 12.9184 12.5643 12.96 12.5554 12.96C12.542 12.96 12.4258 12.9864 12.3364 12.9864C12.2962 12.9864 12.2046 12.9578 12.1443 12.9359C12.0169 12.8898 11.97 12.9666 12.104 13.0215C12.2154 13.0616 12.3349 13.0752 12.4526 13.061C12.5643 13.0434 12.6671 12.9951 12.752 12.9337C12.9241 12.8109 12.8235 12.8679 12.8906 12.8416C12.9576 12.813 13.0224 12.8218 13.0224 12.8218C13.1118 12.8262 13.2883 12.8547 13.3777 12.8569C13.5386 12.8416 13.5118 12.8416 13.5654 12.813C13.5833 12.7999 13.6436 12.7626 13.6458 12.7538C13.6503 12.745 13.6771 12.6946 13.6727 12.6924C13.5051 12.8043 13.4224 12.8043 13.2101 12.7823Z"
                                                                        fill="#D91023" stroke="#D4AF37"
                                                                        stroke-width="0.0199173" />
                                                                    <path
                                                                        d="M12.9192 12.9052L12.7605 12.9929C12.622 13.0763 12.4924 13.1158 12.3404 13.1158C12.2734 13.1268 12.05 13.0368 12.0835 13.0478C12.1192 13.1136 12.1729 13.1224 12.298 13.1465C12.3874 13.1641 12.4455 13.1487 12.546 13.129C12.6577 13.1158 12.7024 13.0631 12.7471 13.0346C12.8409 12.9724 12.9479 12.9319 13.06 12.9161C13.0823 12.9161 13.165 12.9622 13.2588 12.982C13.3504 13.0017 13.3951 13.0061 13.4912 12.9907C13.5873 12.9754 13.6856 12.8986 13.7772 12.8394C13.7638 12.8437 13.7325 12.8437 13.6879 12.8459C13.5538 12.9227 13.3303 12.9512 13.2141 12.8986C13.0935 12.8701 12.9795 12.8767 12.9192 12.9052Z"
                                                                        fill="#D91023" stroke="#D4AF37"
                                                                        stroke-width="0.0199173" />
                                                                    <path
                                                                        d="M10.3663 7.61086C10.1033 7.70724 9.87489 7.87955 9.70997 8.10594C9.67247 8.15095 9.64246 8.18846 9.63871 8.18471C9.63871 8.18471 9.65371 8.08344 9.68372 7.97092C9.70997 7.8584 9.72873 7.74213 9.72873 7.71588C9.72873 7.67087 9.72498 7.67462 9.65371 7.75339C9.53742 7.89869 9.44846 8.06389 9.39117 8.24097C9.36492 8.32348 9.35366 8.41724 9.35366 8.58977L9.35742 8.82606L9.31241 8.65728C9.26365 8.481 9.21489 8.35723 9.16238 8.29722C9.13988 8.25972 9.13238 8.25972 9.11363 8.28597C9.07612 8.34223 9.10237 8.57852 9.16613 8.75105C9.16988 8.77355 9.14738 8.74355 9.11363 8.68729C9.07612 8.62728 9.03861 8.58602 9.02736 8.58977C9.00486 8.60102 9.00486 8.78855 9.02736 8.86732C9.04236 8.91983 9.04236 8.91983 8.9786 8.84856C8.86984 8.72479 8.84733 8.71354 8.84733 8.79981C8.84733 8.83356 8.85858 8.88982 8.87359 8.92733L8.90359 9.00234L8.84358 9.01734C8.75732 9.03234 8.73106 9.0586 8.73106 9.12986C8.73106 9.20487 8.78357 9.3849 8.80608 9.3999C8.83983 9.41866 8.84733 9.3999 8.87359 9.28739L8.89609 9.18987L8.96735 9.28363C9.10554 9.48976 9.21648 9.7129 9.29741 9.94749C9.37992 10.1875 9.38367 10.2363 9.30866 10.0863C9.27143 10.0196 9.23138 9.95452 9.18864 9.89123C9.11363 9.78622 8.71606 9.3699 8.68981 9.3699C8.6598 9.3699 8.68981 9.50117 8.73856 9.60994C8.76482 9.66245 8.83983 9.76746 8.90359 9.84248L9.01236 9.9775C9.00486 9.9775 8.95985 9.94749 8.91109 9.91374C8.81358 9.83873 8.71231 9.78247 8.70106 9.79372C8.69731 9.79747 8.73481 9.87998 8.78732 9.97375L8.87734 10.1463L8.81733 10.135C8.78193 10.1304 8.74593 10.1342 8.71231 10.1463C8.6748 10.1688 8.6748 10.1875 8.6748 10.2775C8.6748 10.4013 8.70481 10.5288 8.73106 10.5288C8.76107 10.5288 8.80608 10.4088 8.80608 10.3451C8.80608 10.2963 8.80608 10.2963 8.90359 10.3863C9.04236 10.5213 9.22614 10.7464 9.40617 11.0089L9.5562 11.234L9.37992 11.0989C9.20739 10.9752 8.85483 10.7764 8.79857 10.7764C8.78357 10.7764 8.76857 10.7839 8.76857 10.7951C8.76857 10.8026 8.88109 10.9189 9.01986 11.0502L9.27115 11.2865L9.13988 11.2452C9.07437 11.2239 9.00806 11.2051 8.9411 11.1889C8.87734 11.1739 8.87734 11.1777 9.02361 11.3127C9.12543 11.4051 9.23455 11.4892 9.34991 11.564C9.44743 11.624 9.51119 11.669 9.48869 11.6653C9.34989 11.6176 9.20411 11.5936 9.05737 11.594C9.05737 11.6203 9.18864 11.7253 9.2824 11.774C9.33491 11.8003 9.46993 11.8491 9.57495 11.8866C9.79999 11.9653 9.93501 12.0366 10.0475 12.1341L10.1225 12.2054L9.99127 12.1454C9.83749 12.0778 9.41743 11.9391 9.37242 11.9391C9.32741 11.9391 9.51494 12.1266 9.70247 12.2654C9.92859 12.4193 10.1746 12.5417 10.4338 12.6292C10.6289 12.6929 10.7939 12.7267 11.109 12.7642C11.244 12.783 11.3715 12.8017 11.4015 12.813C11.424 12.8242 11.589 12.8505 11.7766 12.8692C12.1723 12.8976 12.5609 12.9887 12.928 13.1393C12.9918 13.1693 13.0593 13.1805 13.198 13.188C13.4043 13.1993 13.4156 13.1918 13.3556 13.0793C13.3068 12.9855 13.2168 12.933 13.0293 12.8992L12.6842 12.8317C12.323 12.7619 11.9603 12.6993 11.5965 12.6442C11.0714 12.5579 10.8427 12.4679 10.5951 12.2429C10.4081 12.0688 10.2648 11.8532 10.1768 11.6133C10.0888 11.3735 10.0587 11.1163 10.0888 10.8626C10.1038 10.7501 10.1113 10.6564 10.1075 10.6526C10.0888 10.6376 9.96876 10.8889 9.93501 11.0052L9.8975 11.1289L9.90876 10.9264C9.92001 10.6151 10.04 10.3226 10.2163 10.1538C10.2538 10.1163 10.2838 10.0788 10.2838 10.0713C10.2838 10.0638 10.2463 10.0713 10.2051 10.0788C10.145 10.0938 10.0925 10.1275 10.0175 10.1988L9.92001 10.3001L9.96876 10.21C10.0425 10.067 10.1492 9.94356 10.2801 9.84998L10.3888 9.77872L10.3251 9.77496C10.1976 9.75996 9.96876 9.92499 9.84124 10.1238C9.76623 10.2363 9.76623 10.2025 9.84124 10.0263C9.9125 9.85333 10.0141 9.69456 10.1413 9.55743C10.2126 9.48992 10.2238 9.46366 10.1976 9.46366C10.0963 9.46366 9.92751 9.59494 9.78499 9.77872C9.74748 9.83497 9.74748 9.83122 9.79249 9.72246C9.85089 9.59084 9.92795 9.46831 10.0213 9.35865C10.0813 9.28739 10.0663 9.27988 9.96501 9.32114C9.82893 9.41372 9.71807 9.53876 9.64246 9.68495C9.60496 9.75996 9.57495 9.79747 9.5787 9.77872C9.58985 9.73775 9.59986 9.69647 9.60871 9.65495C9.68412 9.33112 9.85071 9.03566 10.0888 8.80356C10.1788 8.72104 10.2013 8.68354 10.175 8.68354C10.1 8.68354 9.93126 8.78105 9.81874 8.88982C9.70247 9.00234 9.69872 9.00234 9.74373 8.92358C9.9155 8.6411 10.1504 8.4023 10.4301 8.22596L10.5914 8.11344C10.5914 8.08344 10.2988 8.17345 10.1675 8.23721C10.11 8.27364 10.0549 8.31373 10.0025 8.35723C9.90876 8.43225 9.90125 8.436 9.93501 8.38724C9.99877 8.29722 10.2201 8.09844 10.3101 8.05343C10.3738 8.01968 10.3851 8.00843 10.3476 8.00468C10.2613 7.98967 10.0138 8.11719 9.82249 8.28222L9.73998 8.35348L9.78499 8.27847C9.92231 8.04437 10.1108 7.84436 10.3363 7.69338C10.3899 7.65856 10.445 7.62603 10.5014 7.59586C10.5126 7.59211 10.5201 7.58086 10.5164 7.57711C10.5089 7.56961 10.4413 7.58461 10.3663 7.61461V7.61086ZM13.2543 13.0492C13.2763 13.0693 13.2942 13.0935 13.3068 13.1205C13.3068 13.128 13.2656 13.1355 13.213 13.1355C13.1193 13.1355 13.1155 13.1355 13.1155 13.083C13.1155 12.9855 13.1755 12.9742 13.2581 13.053L13.2543 13.0492Z"
                                                                        fill="#00A854" />
                                                                    <path
                                                                        d="M13.139 13.0194C13.09 13.0645 13.1013 13.1323 13.1502 13.1473C13.233 13.1699 13.3384 13.1624 13.3384 13.1323C13.3384 13.1022 13.2142 12.9893 13.1841 12.9893C13.1728 12.9893 13.154 13.0005 13.139 13.0194Z"
                                                                        fill="#9EAB05" />
                                                                    <path
                                                                        d="M10.4639 7.58103C10.2505 7.63309 10.0557 7.74347 9.90136 7.89983C9.89011 7.91108 9.78884 8.00485 9.72133 8.09486C9.69132 8.13237 9.64632 8.18863 9.62756 8.22613C9.62756 8.18863 9.65757 8.08361 9.68382 7.96359C9.71758 7.81356 9.72883 7.70105 9.72508 7.69355C9.70632 7.67479 9.56755 7.85857 9.50004 7.99359C9.39707 8.18554 9.35027 8.40262 9.36502 8.61995V8.85999L9.31626 8.67996C9.2675 8.49243 9.18124 8.29364 9.13998 8.28239C9.12498 8.27864 9.10998 8.30489 9.10248 8.34615C9.09123 8.40616 9.10248 8.46992 9.18124 8.79622C9.18874 8.81873 9.16624 8.79622 9.13623 8.73622C9.06122 8.60869 9.03497 8.58244 9.01621 8.59369L9.06872 8.6687C9.1119 8.74074 9.14951 8.81597 9.18124 8.89374C9.28035 9.12332 9.3521 9.36376 9.39502 9.61011C9.39127 9.61386 9.37627 9.59886 9.36877 9.5726L9.30876 9.41508C9.27543 9.3295 9.23788 9.24564 9.19624 9.16378C9.1109 9.01652 9.05247 8.85522 9.02371 8.68746L9.01246 8.59369C8.98621 8.6162 8.99746 8.72496 9.03497 8.84873L9.06872 8.96125C9.06497 8.96125 9.01996 8.91249 8.97121 8.84873C8.90369 8.75872 8.87369 8.73622 8.85869 8.75497C8.84368 8.78497 8.85494 8.84123 8.89619 8.95L8.92245 9.02501H8.85119C8.81368 9.02501 8.77242 9.03251 8.74992 9.04752C8.71991 9.07002 8.71616 9.08502 8.73492 9.18629C8.75742 9.31006 8.78743 9.40382 8.80993 9.40382C8.85119 9.40382 8.84744 9.36632 8.86994 9.25755L8.89244 9.19004C8.89994 9.20129 8.9112 9.21629 8.92995 9.2313C9.08845 9.45506 9.21471 9.7 9.30501 9.95891C9.36729 10.1551 9.41493 10.3557 9.44753 10.559C9.44753 10.5665 9.42128 10.4953 9.39878 10.4015C9.32376 10.0752 9.21124 9.8839 8.87369 9.55385C8.87369 9.55385 8.76117 9.41508 8.66741 9.35882C8.66741 9.43758 8.68241 9.45258 8.68241 9.45258C8.70866 9.56885 8.76492 9.67387 8.94495 9.88015C8.99697 9.9391 9.0446 10.0018 9.08747 10.0677L8.98621 9.98517C8.88494 9.89515 8.72367 9.79389 8.71241 9.80889C8.70491 9.81264 8.74242 9.89515 8.79493 9.99642C8.86244 10.1164 8.88119 10.1652 8.85869 10.1577C8.78367 10.1277 8.75742 10.1277 8.70866 10.1577C8.6599 10.1915 8.6599 10.1952 8.67116 10.3227C8.67491 10.3977 8.69366 10.4727 8.70491 10.499C8.72742 10.5365 8.72742 10.5365 8.74992 10.4915C8.76117 10.4652 8.77992 10.4127 8.78743 10.3715C8.79493 10.334 8.80618 10.3002 8.80993 10.3002C8.86284 10.3472 8.91294 10.3973 8.95995 10.4502C8.98201 10.4769 9.00451 10.5031 9.02746 10.529C9.20495 10.7457 9.37508 10.9684 9.53755 11.1966L9.57505 11.2641L9.51129 11.2154C9.29706 11.0342 9.05685 10.8863 8.79868 10.7765C8.76117 10.7653 8.75367 10.7765 8.77242 10.7991C8.86244 10.9228 9.13248 11.1516 9.20749 11.2116C9.27876 11.2716 9.27501 11.2941 9.27501 11.2979C9.27125 11.2979 9.2225 11.2754 9.13623 11.2491C8.9187 11.1741 8.86244 11.1704 8.88869 11.2041C8.91154 11.2214 8.93887 11.2319 8.96746 11.2341C9.18015 11.2784 9.38171 11.3651 9.56005 11.4892C9.68757 11.5754 9.99137 11.8642 10.0326 11.9392C10.0551 11.9842 10.0476 11.9805 9.96887 11.9167C9.84333 11.8197 9.70436 11.7413 9.5563 11.6842C9.54505 11.6879 9.47754 11.6767 9.40628 11.6579C9.33126 11.6392 9.21875 11.6167 9.15123 11.6092L9.03872 11.5942L9.10623 11.6579C9.19624 11.7367 9.34252 11.808 9.59381 11.8942C9.6875 11.9255 9.77897 11.9631 9.8676 12.0067C9.96137 12.063 10.1526 12.213 10.1414 12.2205C9.89945 12.1104 9.64849 12.0213 9.39127 11.9542C9.34627 11.943 9.36127 11.9617 9.47754 12.078C9.57095 12.1633 9.66993 12.2422 9.77384 12.3143C10.1827 12.5843 10.554 12.7006 11.2441 12.7831C11.3566 12.7944 11.4354 12.8131 11.4316 12.8206C11.4241 12.8319 11.5966 12.8581 11.7842 12.8769C12.2867 12.9369 12.6018 13.0044 12.8868 13.1207C12.9921 13.1673 13.1055 13.1928 13.2206 13.1957C13.3482 13.2032 13.3894 13.2032 13.3894 13.1844C13.3894 13.1394 13.3369 13.0569 13.2694 12.9969C13.2131 12.9482 13.1719 12.9219 12.9469 12.8806C12.8043 12.8581 12.6731 12.8281 12.6581 12.8169C12.6393 12.8056 12.3543 12.7681 12.028 12.7156C11.3116 12.6031 11.0903 12.5468 10.9028 12.4531C10.6612 12.3301 10.4571 12.1444 10.3119 11.9154C10.1667 11.6864 10.0858 11.4226 10.0776 11.1516C10.0719 11.0365 10.0757 10.9211 10.0889 10.8066C10.1001 10.7315 10.1076 10.6715 10.1039 10.6678C10.0851 10.649 9.93886 10.9416 9.91636 11.0541L9.90511 11.1291L9.89761 10.9941C9.8957 10.7156 9.9853 10.4441 10.1526 10.2215C10.1526 10.2215 10.2614 10.1164 10.2764 10.0864V10.0827C10.1977 10.0564 10.1151 10.1202 10.0026 10.2177C9.93511 10.2852 9.92761 10.304 9.92011 10.3002C9.92761 10.2477 10.1264 9.94391 10.1677 9.94391C10.1752 9.94391 10.2239 9.88765 10.2427 9.8689C10.2652 9.81264 10.1226 9.94391 10.0214 10.0827C9.79634 10.3827 9.74383 10.6865 9.75883 11.0916C9.76115 11.1655 9.75739 11.2396 9.74758 11.3129C9.74008 11.3129 9.68007 11.1666 9.65382 11.0728C9.5788 10.8366 9.69132 10.3452 9.8826 10.0939L10.0064 9.94016C10.0364 9.88765 9.8751 10.0677 9.81884 10.1539C9.80384 10.1802 9.78884 10.199 9.78134 10.1915L9.80759 10.1089C9.88281 9.89107 10.0015 9.69074 10.1564 9.52009C10.2164 9.45633 10.2164 9.45633 10.1677 9.47133C10.0551 9.50509 9.95011 9.59135 9.84135 9.71888L9.75883 9.81639C9.77009 9.76763 9.87135 9.55385 9.95387 9.43758C10.0064 9.36632 10.0551 9.31756 10.0551 9.30256C10.0551 9.28755 9.99887 9.30256 9.92011 9.36257C9.80223 9.4536 9.70507 9.56866 9.63506 9.70012C9.58631 9.79764 9.59756 9.77138 9.5788 9.78639C9.62201 9.41691 9.79161 9.07372 10.0589 8.81498C10.1639 8.70621 10.1864 8.67621 10.1489 8.68746C10.0364 8.72496 9.91261 8.79998 9.80384 8.90874C9.74008 8.9725 9.71383 8.99126 9.71383 8.98376C9.71383 8.97625 9.74383 8.92 9.80759 8.82248C9.94715 8.6067 10.1266 8.41957 10.3364 8.27114C10.4377 8.20363 10.5915 8.12862 10.5727 8.12111C10.5705 8.11931 10.568 8.11803 10.5652 8.11736C10.5765 8.09861 10.524 8.10986 10.3852 8.15487C10.2274 8.20736 10.0801 8.28736 9.95011 8.39116C9.89386 8.44367 9.90511 8.40241 10.0476 8.25989C10.1226 8.18488 10.2352 8.09111 10.2952 8.06111C10.3927 8.0011 10.3852 7.98609 10.3214 8.0011C10.1328 8.05485 9.96026 8.15401 9.81884 8.28989L9.80759 8.29739C9.76258 8.32365 9.72133 8.38366 9.73258 8.3574C9.74383 8.33115 9.76258 8.30865 9.81134 8.22613C9.96866 7.97913 10.1853 7.77541 10.4414 7.63354C10.5052 7.59603 10.509 7.57353 10.4639 7.58103ZM10.3139 7.65229H10.3214C10.1553 7.77963 10.0043 7.92561 9.87135 8.08736C9.75962 8.24021 9.66763 8.40655 9.59756 8.58244C9.56005 8.67245 9.53755 8.73246 9.53755 8.71746C9.55555 8.56557 9.58437 8.41517 9.62381 8.26739L9.67257 8.19988C9.70278 8.15446 9.73533 8.11065 9.77009 8.06861C9.81134 8.0161 9.94636 7.87733 9.94261 7.87357L9.98762 7.83607C10.1151 7.74605 10.2802 7.64854 10.3139 7.64854V7.65229ZM9.68007 7.75356H9.68382C9.68757 7.76856 9.66507 7.93358 9.62006 8.12862C9.54535 8.43776 9.48775 8.75078 9.44753 9.06627C9.43253 9.20504 9.42878 9.21629 9.41753 9.15628C9.40628 9.11878 9.39502 8.93125 9.38752 8.74372C9.37627 8.36866 9.38752 8.26364 9.48504 8.0536C9.53304 7.94351 9.59894 7.84212 9.68007 7.75356ZM10.2014 8.06861L10.0889 8.18112C9.7976 8.45942 9.59088 8.81436 9.49254 9.20504L9.45503 9.33631L9.47004 9.21254C9.48184 9.02138 9.52624 8.83365 9.60131 8.65745C9.64256 8.54493 9.68382 8.45117 9.77009 8.3649C9.78509 8.34615 9.82635 8.3124 9.83385 8.29739L9.93886 8.21863C10.0139 8.15487 10.1714 8.06861 10.2014 8.06861ZM10.4264 8.16237C10.4377 8.16237 10.4414 8.16237 10.4414 8.16987L10.3289 8.24864C10.1326 8.39845 9.95831 8.57522 9.81134 8.77372C9.69397 8.95686 9.59593 9.15168 9.51879 9.35507C9.46254 9.51259 9.46629 9.43008 9.5263 9.20504C9.58857 8.97703 9.68196 8.7587 9.80384 8.55619L9.8601 8.48117C9.88635 8.45117 9.89386 8.43617 9.90511 8.44367C9.91261 8.44742 9.95762 8.42116 10.0026 8.38366C10.1039 8.29739 10.3664 8.16612 10.4302 8.16237H10.4264ZM9.13623 8.30865C9.13998 8.30489 9.14748 8.3124 9.15874 8.33115C9.19104 8.39402 9.21862 8.45921 9.24125 8.52618C9.34205 8.83306 9.4001 9.15236 9.41378 9.47509C9.38608 9.35305 9.35101 9.23281 9.30876 9.11503C9.15499 8.64995 9.10248 8.42491 9.12123 8.3424L9.13623 8.30489V8.30865ZM10.1301 8.71746C10.1301 8.71746 10.0926 8.76247 10.0364 8.81498C9.76575 9.09985 9.59355 9.46397 9.54505 9.8539C9.5263 9.95891 9.50754 10.0527 9.49629 10.0602C9.48879 10.0677 9.47379 10.0227 9.46629 9.96642C9.45385 9.70461 9.50805 9.44394 9.62381 9.20879L9.67257 9.10002C9.68757 9.08877 9.69882 9.06252 9.72133 9.03251C9.80759 8.935 9.95011 8.79622 10.0439 8.75122L10.1301 8.71371V8.71746ZM8.87744 8.76247L8.91495 8.81123C8.95665 8.8637 8.99667 8.91749 9.03497 8.9725C9.11748 9.09252 9.32751 9.51259 9.35002 9.5951C9.35752 9.62136 9.33126 9.5801 9.29001 9.50509C9.23081 9.40057 9.16439 9.30031 9.09122 9.20504C8.9337 8.99501 8.87744 8.89749 8.87744 8.82248V8.76247ZM8.83618 9.04001H8.85494C8.9112 9.04001 9.03122 9.14503 9.13623 9.28755C9.29065 9.53461 9.40223 9.80597 9.46629 10.0902C9.50004 10.2402 9.5563 10.6228 9.5563 10.709V10.769L9.52255 10.7128C9.50754 10.679 9.48129 10.5815 9.46629 10.4953C9.42341 10.2518 9.35683 10.0131 9.2675 9.78264C9.18124 9.5651 9.00121 9.25755 8.9187 9.18254C8.91142 9.17347 8.90251 9.16584 8.89244 9.16003C8.87666 9.13853 8.85769 9.11956 8.83618 9.10378C8.79493 9.06627 8.79118 9.04752 8.83618 9.04001ZM8.73867 9.07377L8.78743 9.10378C8.85119 9.14878 8.87369 9.16754 8.86244 9.22379C8.85119 9.28005 8.84368 9.33631 8.83243 9.35132C8.81743 9.38132 8.80243 9.35882 8.78743 9.29881L8.74992 9.14878L8.73867 9.07377ZM10.0064 9.32881C10.0139 9.32881 10.0139 9.33631 10.0064 9.35132C9.98762 9.36632 9.94261 9.42258 9.92011 9.45258C9.75358 9.72545 9.63913 10.0269 9.58256 10.3415C9.5638 10.4802 9.53755 10.4165 9.53755 10.229C9.53795 9.94347 9.64651 9.66874 9.84135 9.46008C9.91636 9.38132 9.99137 9.32881 10.0064 9.32881ZM8.71991 9.44883C8.73867 9.44883 8.79493 9.50509 8.92245 9.63636C9.02605 9.73732 9.12137 9.84644 9.20749 9.96266C9.27876 10.0864 9.35752 10.2702 9.37627 10.364C9.38377 10.4165 9.36502 10.394 9.25625 10.244C9.1816 10.143 9.10405 10.0442 9.02371 9.94766C8.81743 9.70762 8.73867 9.59135 8.71616 9.47133C8.71241 9.45633 8.71241 9.44508 8.71991 9.44883ZM10.1451 9.49759C10.1526 9.49759 10.1076 9.5576 10.0476 9.62886C9.9819 9.71149 9.92295 9.79929 9.87135 9.8914C9.79634 10.0414 9.68007 10.3902 9.63881 10.604C9.59756 10.8291 9.59381 10.8253 9.60131 10.5778C9.62006 10.1052 9.78884 9.72263 10.0514 9.55385L10.1489 9.49759H10.1451ZM8.73867 9.83889L8.79868 9.8689C8.83243 9.88765 8.9112 9.94391 8.97121 9.99267C9.03497 10.0489 9.09123 10.0827 9.09873 10.0752C9.10998 10.0677 9.11373 10.0714 9.10623 10.0827C9.13274 10.1489 9.17084 10.2099 9.21875 10.2627C9.35925 10.4525 9.47284 10.6607 9.5563 10.8816C9.57505 10.9453 9.59381 10.9941 9.58631 11.0016L9.45878 10.8066C9.34099 10.5997 9.19168 10.4124 9.01621 10.2515C8.93721 10.1843 8.8733 10.1012 8.82868 10.0077L8.73867 9.83889ZM10.2614 10.0902C10.2277 10.1202 10.1564 10.2027 10.1564 10.2027C10.0387 10.3405 9.95398 10.5035 9.90886 10.679C9.86147 11.0361 9.88312 11.399 9.97262 11.748C9.90597 11.6171 9.85558 11.4785 9.82259 11.3354C9.78884 11.1666 9.79259 10.7765 9.82259 10.6453C9.8601 10.4953 9.94261 10.3227 10.0176 10.2402C10.0814 10.1652 10.2052 10.0902 10.2614 10.0902ZM8.78367 10.1577C8.81368 10.1577 8.84744 10.1727 8.89994 10.2065C9.10623 10.3377 9.36877 10.679 9.66882 11.2191C9.90886 11.6504 10.0476 11.9767 9.8526 11.6504C9.57264 11.1957 9.25657 10.7643 8.90745 10.3602L8.90369 10.3527C8.86318 10.3101 8.81787 10.2724 8.76867 10.2402C8.69366 10.1952 8.68991 10.1764 8.75367 10.1614L8.78367 10.1577ZM8.70866 10.244C8.72742 10.244 8.74617 10.2552 8.76117 10.2702C8.78368 10.3002 8.77242 10.4465 8.74242 10.4615C8.71991 10.4765 8.71241 10.4577 8.69366 10.3452C8.68241 10.2627 8.68616 10.244 8.71241 10.244H8.70866ZM10.0626 10.7578V10.9828C10.0464 11.2253 10.0853 11.4683 10.1762 11.6937C10.2671 11.919 10.4078 12.1209 10.5877 12.2843C10.809 12.4793 11.0565 12.5843 11.4504 12.6519C11.5816 12.6744 11.7016 12.6894 11.7129 12.7006C11.7317 12.7044 11.9117 12.7231 11.9004 12.7419C11.8967 12.7494 11.9117 12.7531 11.9379 12.7494C12.0167 12.7344 12.2567 12.7869 12.3205 12.7869C12.6206 12.83 12.9175 12.8926 13.2094 12.9744C13.2619 12.9969 13.3744 13.1282 13.3744 13.1694C13.3744 13.1807 13.3144 13.1844 13.2094 13.1769C13.0985 13.1722 12.9899 13.1441 12.8906 13.0944C12.6393 12.9819 12.2905 12.9069 11.8704 12.8694C11.6529 12.8506 10.944 12.7269 10.7415 12.6819C10.5096 12.638 10.285 12.5623 10.0739 12.4568C9.87527 12.369 9.69273 12.2485 9.5338 12.1005L9.41003 11.9805L9.51504 12.0105C9.82634 12.1005 10.0776 12.213 10.3927 12.4118C10.644 12.5618 10.7265 12.6068 10.8615 12.6368C10.9853 12.6744 11.0228 12.6744 11.0228 12.6519C11.0228 12.6444 10.959 12.6181 10.8803 12.5956C10.5681 12.4883 10.3041 12.2738 10.1351 11.9901C9.9662 11.7065 9.9033 11.3722 9.95762 11.0466C9.98526 10.9478 10.0204 10.8513 10.0626 10.7578ZM8.81368 10.8253L8.83993 10.8328C8.95245 10.8516 9.41003 11.1404 9.56755 11.2941C9.62976 11.36 9.6839 11.433 9.72883 11.5117L9.78884 11.6242L9.68382 11.5417C9.60709 11.482 9.52694 11.4269 9.44378 11.3766C9.31082 11.2801 9.18544 11.1735 9.06872 11.0578L8.81368 10.8253ZM9.12873 11.6279L9.16999 11.6354C9.20749 11.6392 9.30501 11.6617 9.39127 11.6804C9.69132 11.7517 10.0589 11.9805 10.2464 12.2205L10.3289 12.3293L10.2427 12.2843C10.1977 12.2618 10.1601 12.2355 10.1677 12.228C10.1752 12.2093 9.98012 12.048 9.87885 11.9955C9.77121 11.9449 9.66105 11.8998 9.5488 11.8605C9.31626 11.7742 9.17374 11.7067 9.12873 11.6504C9.11748 11.6354 9.11373 11.6279 9.12873 11.6279Z"
                                                                        fill="#CAB313" fill-opacity="0.5" />
                                                                    <path
                                                                        d="M10.2093 9.78252C10.168 9.79753 10.1005 9.85757 10.0592 9.89134C9.97667 9.95138 9.96541 9.9739 10.0442 9.91761C10.1043 9.88009 10.2056 9.80504 10.2919 9.79003C10.3031 9.79003 10.2581 9.83506 10.2356 9.85757C10.2018 9.8951 10.2131 9.8951 10.2844 9.84631L10.3744 9.77877C10.3744 9.76376 10.2844 9.75626 10.2093 9.78252ZM8.90723 11.2085C8.90723 11.2535 9.50011 11.6925 9.52638 11.6625C9.53013 11.6625 9.45133 11.6062 9.35377 11.5462C9.25091 11.481 9.15307 11.4083 9.06108 11.3285C8.99729 11.2685 8.91473 11.1784 8.90723 11.2047V11.2085Z"
                                                                        fill="#CAB313" fill-opacity="0.5" />
                                                                    <path
                                                                        d="M10.8028 12.8374C10.6843 12.8747 10.5577 12.88 10.4364 12.8527C10.3905 12.846 10.3438 12.846 10.2979 12.8527L10.3604 12.8922C10.3895 12.9098 10.3783 12.9054 10.4297 12.9295C10.4207 12.9383 10.4163 12.9427 10.3761 12.958C10.4297 12.969 10.4967 12.9756 10.5615 12.9712C10.6273 12.9686 10.6926 12.9583 10.7559 12.9405C10.8215 12.9209 10.8888 12.9077 10.957 12.901C10.9838 12.901 11.0777 12.9295 11.1671 12.9756C11.3592 13.0787 11.4933 13.1072 11.6274 13.1072C11.719 13.1072 11.8151 13.0853 11.9246 13.0151C12.005 12.9646 11.938 12.9668 11.8575 12.9997C11.7458 13.0436 11.5179 13.0655 11.2542 12.9295C11.1537 12.8699 11.0433 12.8283 10.928 12.8066C10.919 12.8066 10.8609 12.8198 10.8028 12.8374Z"
                                                                        fill="white" stroke="#D4AF37"
                                                                        stroke-width="0.0199173" />
                                                                    <path
                                                                        d="M10.2149 12.7759C10.2462 12.8022 10.2417 12.8088 10.2998 12.8527C10.378 12.8614 10.5367 12.8768 10.5948 12.8768C10.6484 12.8768 10.7467 12.868 10.8182 12.8505C10.9568 12.8219 11.0238 12.8285 11.2763 12.9382C11.569 13.0874 11.7344 13.0611 11.8863 12.9887C12.0964 12.9097 11.8908 12.9448 11.8148 12.9229C11.7902 12.9294 11.759 12.9624 11.6986 12.9821C11.6137 13.0128 11.569 13.0128 11.4685 12.9602C11.4037 12.9294 11.3478 12.9163 11.2897 12.8834C11.2338 12.8505 11.2204 12.8549 11.1266 12.8241L10.9881 12.7978L10.778 12.7868C10.6179 12.8166 10.4529 12.8068 10.2976 12.7583C10.1769 12.721 10.1546 12.7276 10.2149 12.7759Z"
                                                                        fill="#D91023" stroke="#D4AF37"
                                                                        stroke-width="0.0199173" />
                                                                    <path
                                                                        d="M10.7603 12.9362C10.636 12.9748 10.5039 12.9824 10.3759 12.9581L10.2888 12.9867C10.1771 13.0239 10.1771 13.0261 10.224 13.0393C10.253 13.0481 10.3648 13.0547 10.4765 13.0525C10.6664 13.0525 10.6843 13.0503 10.7893 12.9998C10.8382 12.9737 10.891 12.9552 10.9457 12.945C10.9681 12.945 11.0463 12.9888 11.1178 13.0261C11.3144 13.1271 11.3882 13.1578 11.5513 13.1556C11.7144 13.1556 11.9244 13.0393 11.9513 13.002C11.8377 13.0778 11.7018 13.1148 11.5647 13.1073C11.4061 13.0947 11.2537 13.0418 11.1223 12.9537C10.9927 12.8857 10.948 12.8835 10.7625 12.9362H10.7603Z"
                                                                        fill="#D91023" stroke="#D4AF37"
                                                                        stroke-width="0.0199173" />
                                                                    <path
                                                                        d="M11.3464 12.3485C11.3845 12.3173 11.408 12.3187 11.4476 12.3687C11.5639 12.4949 11.755 12.5925 11.9997 12.6505C12.0952 12.6667 12.109 12.6796 12.0479 12.6947C11.98 12.7116 11.7201 12.6546 11.5966 12.5965C11.4804 12.5431 11.3878 12.4772 11.3227 12.4015C11.3164 12.3886 11.3247 12.3666 11.3464 12.3485Z"
                                                                        fill="white" stroke="#D4AF37"
                                                                        stroke-width="0.0200567" />
                                                                    <path
                                                                        d="M11.2435 12.4248C11.2555 12.4182 11.3281 12.4111 11.3698 12.4497C11.4787 12.551 11.6449 12.6284 11.8523 12.6744C11.9995 12.7032 12.0265 12.7273 11.9083 12.7349C11.7395 12.7478 11.4222 12.5963 11.3284 12.5289C11.2347 12.4615 11.2125 12.447 11.2435 12.4248Z"
                                                                        fill="#D91023" stroke="#D4AF37"
                                                                        stroke-width="0.0200567" />
                                                                    <path
                                                                        d="M11.4084 12.297L11.4496 12.2722L11.5694 12.315C11.6268 12.386 11.7941 12.495 11.9435 12.5594C11.9983 12.58 12.0443 12.6059 12.0798 12.6362C12.0916 12.6604 12.0924 12.6621 12.0145 12.6506C11.7816 12.5968 11.5997 12.505 11.4896 12.3856C11.4579 12.3518 11.3846 12.3264 11.4084 12.297Z"
                                                                        fill="#ED1C24" stroke="#D4AF37"
                                                                        stroke-width="0.0200567" />
                                                                    <path
                                                                        d="M12.7071 12.38C12.6711 12.3464 12.6476 12.3463 12.6048 12.3938C12.4805 12.5124 12.2835 12.5976 12.0355 12.6401C11.9392 12.6502 11.9245 12.6622 11.9845 12.6812C12.0512 12.7023 12.3143 12.6619 12.4413 12.6116C12.5607 12.5657 12.6574 12.5058 12.7273 12.4344C12.7344 12.4219 12.7275 12.3994 12.7071 12.38Z"
                                                                        fill="white" stroke="#D4AF37"
                                                                        stroke-width="0.0200592" />
                                                                    <path
                                                                        d="M12.7636 12.4811C12.7569 12.479 12.7209 12.4454 12.6777 12.4798C12.5625 12.574 12.3916 12.6407 12.1817 12.6736C11.9909 12.6907 11.9388 12.713 12.1218 12.7303C12.2894 12.7539 12.616 12.6227 12.7139 12.5614C12.8118 12.5001 12.7964 12.5063 12.7627 12.4827L12.7636 12.4811Z"
                                                                        fill="#D91023" stroke="#D4AF37"
                                                                        stroke-width="0.0200592" />
                                                                    <path
                                                                        d="M12.6486 12.3241L12.6091 12.2968L12.4868 12.3319C12.4249 12.3991 12.2509 12.4973 12.0976 12.5522C12.0415 12.5693 11.994 12.5922 11.9565 12.6202C11.9432 12.6437 11.9423 12.6452 12.0208 12.6387C12.2567 12.5998 12.4441 12.5196 12.5618 12.4074C12.5956 12.3757 12.6704 12.355 12.6486 12.3241Z"
                                                                        fill="#ED1C24" stroke="#D4AF37"
                                                                        stroke-width="0.0200592" />
                                                                    <path
                                                                        d="M12.4763 12.3117C12.3195 12.356 12.184 12.4537 12.094 12.5872C12.0472 12.6516 12.0015 12.6809 12.0324 12.695C12.0653 12.7136 12.0981 12.6685 12.1603 12.6112C12.3216 12.4627 12.4466 12.4008 12.6141 12.4061L12.7481 12.4103L12.7097 12.3542C12.6649 12.287 12.6093 12.2786 12.4763 12.3117ZM11.3467 12.3287C11.3189 12.3586 11.3252 12.3719 11.403 12.3854C11.6021 12.4246 11.7863 12.517 11.9354 12.6524C11.985 12.7067 12.0072 12.7118 12.0086 12.6701C12.01 12.6263 11.8561 12.4787 11.7439 12.4203C11.6474 12.3646 11.475 12.302 11.4103 12.3C11.3879 12.2993 11.3653 12.3095 11.3467 12.3287Z"
                                                                        fill="white" stroke="#D4AF37"
                                                                        stroke-width="0.0199172" />
                                                                    <path
                                                                        d="M12.4536 12.2409C12.412 12.2542 12.3712 12.2698 12.3313 12.2876C12.2457 12.3443 12.1689 12.4129 12.1033 12.4911L12.0333 12.5811C12.0028 12.6241 11.9975 12.6503 12.0131 12.653C12.0263 12.6578 12.0583 12.639 12.0932 12.5962C12.2332 12.4162 12.361 12.3368 12.5454 12.3053C12.6398 12.2907 12.6532 12.2912 12.6857 12.3251C12.7118 12.3479 12.6791 12.3205 12.673 12.3028C12.6631 12.2629 12.6347 12.2423 12.5747 12.2294C12.534 12.225 12.4927 12.2289 12.4536 12.2409Z"
                                                                        fill="#D91023" stroke="#D4AF37"
                                                                        stroke-width="0.0199172" />
                                                                    <path
                                                                        d="M11.4109 12.2912C11.4062 12.2999 11.4503 12.3188 11.5102 12.3317C11.6673 12.3718 11.811 12.4512 11.9275 12.5622C12.0032 12.6414 12.0432 12.6493 12.0164 12.5782C11.9861 12.4784 11.7071 12.3269 11.5965 12.2905C11.486 12.2519 11.4273 12.2676 11.4109 12.2912ZM12.4913 12.4132C12.3771 12.4522 12.2723 12.5139 12.1836 12.5944C12.0914 12.6771 12.0495 12.7285 12.0853 12.7296C12.092 12.7298 12.1469 12.6898 12.1836 12.6603C12.3443 12.5337 12.6325 12.4681 12.7561 12.5181C12.8179 12.542 12.791 12.4753 12.7506 12.4126C12.7272 12.3746 12.5724 12.3916 12.4933 12.4176L12.4913 12.4132ZM11.3077 12.3714L11.2296 12.4369L11.3406 12.4602C11.4518 12.4769 11.6571 12.558 11.7932 12.637C11.8523 12.6739 11.9206 12.7046 11.9407 12.7053C11.9787 12.7065 11.9809 12.7065 11.94 12.6592C11.7932 12.5223 11.6104 12.4283 11.4123 12.3878C11.3522 12.3772 11.3376 12.346 11.3055 12.3713L11.3077 12.3714Z"
                                                                        fill="#D91023" stroke="#D4AF37"
                                                                        stroke-width="0.0199172" />
                                                                    <path
                                                                        d="M12.0816 12.6875C12.0519 12.7881 12.0442 12.8937 12.0592 12.9974C12.095 12.993 12.1197 12.993 12.1779 12.982C12.1846 12.9336 12.1935 12.8787 12.1913 12.8194C12.198 12.7381 12.1913 12.7798 12.2383 12.7139C12.1868 12.6809 12.1711 12.6787 12.0816 12.6875Z"
                                                                        fill="#D91023" stroke="#D4AF37"
                                                                        stroke-width="0.0199173" />
                                                                    <path
                                                                        d="M11.8965 12.824C11.8965 12.9163 11.9032 12.9382 11.9032 12.9822C11.9547 12.9888 12.0688 13.0042 12.0599 12.9866V12.8108L12.0822 12.6899L11.9994 12.6768L11.9278 12.6855L11.8965 12.824Z"
                                                                        fill="white" stroke="#D4AF37"
                                                                        stroke-width="0.0199173" />
                                                                    <path
                                                                        d="M11.7807 12.8284C11.783 12.9031 11.7695 12.9273 11.7785 12.9712C11.8009 12.9778 11.8904 12.9756 11.9195 12.9822C11.915 12.8877 11.915 12.9712 11.9061 12.846L11.9329 12.6855L11.8523 12.6921C11.8523 12.6921 11.8031 12.6768 11.7695 12.6768C11.7986 12.7273 11.7807 12.8306 11.7807 12.8306V12.8284Z"
                                                                        fill="#D91023" stroke="#D4AF37"
                                                                        stroke-width="0.0199173" />
                                                                </g>
                                                                <defs>
                                                                    <clipPath id="clip0_4762_226596">
                                                                        <rect y="0.998535" width="24.0039"
                                                                            height="18.0029" rx="2"
                                                                            fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>
                                                            <button class="focus:outline-none" id="aplicar">
                                                                <svg width="20" class="" id="bajar"
                                                                    height="20" viewBox="0 0 20 20"
                                                                    fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M5.29193 7.29291C5.68248 6.90236 6.31568 6.90236 6.70623 7.29291L9.99931 10.586L13.2924 7.29291C13.6829 6.90236 14.3161 6.90236 14.7067 7.29291C15.0972 7.68346 15.0972 8.31666 14.7067 8.7072L10.7065 12.7074C10.3159 13.098 9.68271 13.098 9.29216 12.7074L5.29193 8.7072C4.90139 8.31666 4.90139 7.68346 5.29193 7.29291Z"
                                                                        fill="#697586" />
                                                                </svg>
                                                                <svg class="hidden bajar" id="subir"
                                                                    width="20" height="20"
                                                                    viewBox="0 0 20 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M5.29193 7.29291C5.68248 6.90236 6.31568 6.90236 6.70623 7.29291L9.99931 10.586L13.2924 7.29291C13.6829 6.90236 14.3161 6.90236 14.7067 7.29291C15.0972 7.68346 15.0972 8.31666 14.7067 8.7072L10.7065 12.7074C10.3159 13.098 9.68271 13.098 9.29216 12.7074L5.29193 8.7072C4.90139 8.31666 4.90139 7.68346 5.29193 7.29291Z"
                                                                        fill="#697586" />
                                                                </svg>

                                                            </button>

                                                        </div>
                                                        <div class="cardconte " id="cardconte">
                                                            <div class="pt-6">
                                                                <div
                                                                    class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sixteen">
                                                                    Banco: Interbank
                                                                </div>
                                                                <div class="grid grid-cols-2 pt-4 gap-x-8">
                                                                    <div
                                                                        class="text-txtcommentply  dark:text-borderconcours font-inter text-sixteen font-normal">
                                                                        <div>
                                                                            CUENTA CORRIENTE SOLES
                                                                        </div>
                                                                        <div class="pt-3">
                                                                            Cuenta: 561-3003573870
                                                                        </div>
                                                                        <div class="pt-3">
                                                                            Empresa: MayuGo Education SAC.
                                                                        </div>

                                                                    </div>
                                                                    <div
                                                                        class="text-txtcommentply  dark:text-borderconcours font-inter text-sixteen font-normal">
                                                                        <div>
                                                                            CUENTA CORRIENTE SOLES
                                                                        </div>
                                                                        <div class="pt-3">
                                                                            Cuenta: 561-3003573870
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="pt-6">
                                                                <div
                                                                    class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sixteen">
                                                                    Banco: BCP
                                                                </div>
                                                                <div class=" pt-4 gap-x-8">
                                                                    <div
                                                                        class="text-txtcommentply  dark:text-borderconcours font-inter text-sixteen font-normal">
                                                                        <div>
                                                                            CUENTA CORRIENTE SOLES
                                                                        </div>
                                                                        <div class="pt-3">
                                                                            Cuenta: 36595425137073
                                                                        </div>
                                                                        <div class="pt-3">
                                                                            Nombre: Franklin Espinoza Huertas
                                                                        </div>

                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div class="pt-6">
                                                                <div
                                                                    class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sixteen">
                                                                    Banco: BBVA
                                                                </div>
                                                                <div class=" pt-4 gap-x-8">
                                                                    <div
                                                                        class="text-txtcommentply  dark:text-borderconcours font-inter text-sixteen font-normal">
                                                                        <div>
                                                                            CUENTA CORRIENTE SOLES
                                                                        </div>
                                                                        <div class="pt-3">
                                                                            Cuenta: 0011-0210-0200957077
                                                                        </div>
                                                                        <div class="pt-3">
                                                                            Nombre: Franklin Espinoza Huertas
                                                                        </div>

                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <script>
                                                        var aplicar = document.getElementById('aplicar')
                                                        var subir = document.getElementById('subir')
                                                        var bajar = document.getElementById('bajar')
                                                        var cardconte = document.getElementById('cardconte')

                                                        aplicar.addEventListener('click', function() {
                                                            cardconte.classList.toggle('hidden');

                                                            subir.classList.toggle('hidden');
                                                            bajar.classList.toggle('hidden');

                                                        });
                                                    </script>

                                                </div>
                                                <div class="border border-fondoactualizar dark:border-txtcommentply">
                                                    <div class="p-4">
                                                        <div class="flex justify-between">
                                                            <svg width="24" height="18" viewBox="0 0 24 18"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">

                                                                <g clip-path="url(#clip0_4741_224921)">
                                                                    <g clip-path="url(#clip1_4741_224921)">
                                                                        <path
                                                                            d="M16.0005 -0.00146484H23.9992V17.9985H16.0005V-0.00146484Z"
                                                                            fill="#CE1126" />
                                                                        <path
                                                                            d="M7.99756 -0.00146484H16.0001V17.9985H7.99756V-0.00146484Z"
                                                                            fill="white" />
                                                                        <path
                                                                            d="M-0.000976562 -0.00146484H7.99777V17.9985H-0.000976562V-0.00146484Z"
                                                                            fill="#006847" />
                                                                        <path
                                                                            d="M13.3413 10.8511L13.3488 11.0198L13.4126 10.9786L13.3638 10.8398L13.3413 10.8511Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M13.3342 10.8584C13.3632 10.8584 13.3867 10.8349 13.3867 10.8059C13.3867 10.7769 13.3632 10.7534 13.3342 10.7534C13.3052 10.7534 13.2817 10.7769 13.2817 10.8059C13.2817 10.8349 13.3052 10.8584 13.3342 10.8584Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M13.5405 11.1133L13.4205 10.9971L13.3643 11.0421L13.533 11.1396L13.5405 11.1133Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M13.5326 11.1812C13.5138 11.1587 13.5214 11.125 13.5438 11.1062C13.5701 11.0875 13.6038 11.0912 13.6188 11.1137C13.6376 11.1362 13.6301 11.17 13.6076 11.1887C13.5813 11.2075 13.5476 11.2037 13.5326 11.1812Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M14.4854 9.35875L14.6129 9.4825L14.6278 9.41875L14.5116 9.34375L14.4854 9.35875Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M14.4705 9.37746C14.4995 9.37746 14.523 9.35396 14.523 9.32496C14.523 9.29597 14.4995 9.27246 14.4705 9.27246C14.4415 9.27246 14.418 9.29597 14.418 9.32496C14.418 9.35396 14.4415 9.37746 14.4705 9.37746Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M14.819 9.43348L14.624 9.48598L14.6428 9.42223L14.8078 9.40723L14.819 9.43348Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M14.8489 9.45608C14.8779 9.45608 14.9014 9.43257 14.9014 9.40358C14.9014 9.37458 14.8779 9.35107 14.8489 9.35107C14.8199 9.35107 14.7964 9.37458 14.7964 9.40358C14.7964 9.43257 14.8199 9.45608 14.8489 9.45608Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M14.1742 10.3787L14.0542 10.1987L14.0729 10.1875L14.2042 10.345L14.1742 10.3787Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M14.0427 10.2061C14.0717 10.2061 14.0952 10.1826 14.0952 10.1536C14.0952 10.1246 14.0717 10.1011 14.0427 10.1011C14.0137 10.1011 13.9902 10.1246 13.9902 10.1536C13.9902 10.1826 14.0137 10.2061 14.0427 10.2061Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M14.1777 10.3858L14.3277 10.4121L14.3315 10.3933L14.2077 10.3408L14.1777 10.3858Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M14.3728 10.4649C14.4018 10.4649 14.4253 10.4414 14.4253 10.4124C14.4253 10.3834 14.4018 10.3599 14.3728 10.3599C14.3438 10.3599 14.3203 10.3834 14.3203 10.4124C14.3203 10.4414 14.3438 10.4649 14.3728 10.4649Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M10.6717 10.7987C10.6717 10.8287 10.6529 10.8437 10.6342 10.8437C10.6154 10.8437 10.5967 10.825 10.5967 10.7987C10.5967 10.7725 10.6154 10.75 10.6342 10.75C10.6529 10.75 10.6717 10.7762 10.6717 10.8025V10.7987Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M10.6718 10.8848L10.7093 11.0723L10.6605 11.0535L10.6455 10.8923L10.6718 10.8848Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M10.7128 10.821C10.7353 10.8473 10.6978 10.8923 10.6603 10.9035C10.6228 10.9148 10.5703 10.896 10.5703 10.8585C10.5703 10.821 10.6303 10.8398 10.6453 10.836C10.6678 10.8285 10.6903 10.791 10.7128 10.821Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M10.3867 11.1509C10.4198 11.1509 10.4467 11.1324 10.4467 11.1096C10.4467 11.0868 10.4198 11.0684 10.3867 11.0684C10.3535 11.0684 10.3267 11.0868 10.3267 11.1096C10.3267 11.1324 10.3535 11.1509 10.3867 11.1509Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M10.4839 11.0987L10.6639 11.0912L10.6339 11.0537L10.4839 11.0687V11.0987Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M10.4992 11.0761C10.518 11.1248 10.518 11.1886 10.4655 11.1773C10.413 11.1736 10.428 11.1248 10.4205 11.1098C10.413 11.0761 10.383 11.0461 10.413 11.0161C10.443 10.9861 10.488 11.0311 10.4992 11.0761Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M9.91412 10.146C9.93276 10.146 9.94787 10.1225 9.94787 10.0935C9.94787 10.0645 9.93276 10.041 9.91412 10.041C9.89548 10.041 9.88037 10.0645 9.88037 10.0935C9.88037 10.1225 9.89548 10.146 9.91412 10.146Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M9.91381 10.2136L9.91756 10.3861L9.87256 10.3486V10.2061L9.91381 10.2136Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M9.98146 10.1612C9.99271 10.1987 9.93271 10.2212 9.89146 10.2137C9.85396 10.2062 9.82021 10.1875 9.82771 10.15C9.83146 10.1125 9.88396 10.12 9.90271 10.1312C9.91771 10.1425 9.97021 10.1012 9.98146 10.1575V10.1612Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M9.60639 10.3933C9.63952 10.3933 9.66639 10.3816 9.66639 10.3671C9.66639 10.3526 9.63952 10.3408 9.60639 10.3408C9.57325 10.3408 9.54639 10.3526 9.54639 10.3671C9.54639 10.3816 9.57325 10.3933 9.60639 10.3933Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M9.71518 10.3672L9.85018 10.356L9.91018 10.401L9.71143 10.3935L9.71518 10.3672Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M9.66651 10.2923C9.70401 10.2923 9.72651 10.3336 9.72276 10.3786C9.71526 10.4198 9.68526 10.4536 9.64776 10.4536C9.61401 10.4461 9.61777 10.4161 9.61777 10.4086C9.61777 10.3973 9.63652 10.3823 9.64027 10.3711C9.64027 10.3561 9.62902 10.3223 9.63652 10.3111C9.63652 10.2961 9.64776 10.2923 9.66651 10.2923ZM9.55402 9.23107C9.53902 9.25357 9.50902 9.27232 9.49402 9.26482C9.47902 9.25357 9.48652 9.21982 9.50152 9.19732C9.51652 9.17107 9.53902 9.15982 9.55402 9.16732C9.56902 9.17857 9.56902 9.20482 9.55402 9.23107Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M9.40043 9.50473L9.47543 9.32473L9.46793 9.31348L9.37793 9.44098L9.40043 9.50473Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M9.46388 9.32485C9.42638 9.2986 9.41888 9.2686 9.42638 9.2386C9.44138 9.21235 9.47138 9.2311 9.47138 9.2311L9.50138 9.25735C9.51638 9.26485 9.53888 9.25735 9.55388 9.27985C9.57263 9.30235 9.56138 9.32485 9.55013 9.33235C9.53513 9.3361 9.49388 9.34735 9.46388 9.32485ZM9.14513 9.30235C9.17138 9.31735 9.18638 9.33985 9.17888 9.3586C9.16763 9.37735 9.14138 9.37735 9.11138 9.3586C9.08513 9.34735 9.07388 9.3211 9.08138 9.30235C9.08888 9.28735 9.11888 9.2836 9.14513 9.30235Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M9.22398 9.38086L9.36649 9.46336L9.36274 9.53086L9.20898 9.39961L9.22398 9.38086Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M9.22397 9.3958C9.19397 9.43331 9.16397 9.43331 9.13772 9.42206C9.11148 9.4033 9.13398 9.37705 9.13398 9.37705L9.16397 9.3508C9.17147 9.3358 9.16398 9.3133 9.19022 9.2983C9.21647 9.2833 9.23522 9.2983 9.23897 9.30955C9.24272 9.32455 9.25022 9.3658 9.22397 9.3958Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M13.3717 10.8658L13.3567 10.8808L13.3455 10.9183V10.8621L13.3642 10.8508L13.3717 10.8658ZM13.3792 10.8321C13.3792 10.8321 13.368 10.8508 13.338 10.8508C13.308 10.8508 13.293 10.8358 13.2892 10.8208C13.2855 10.8058 13.2855 10.7946 13.2967 10.7758C13.3042 10.7571 13.2817 10.7908 13.2817 10.7908V10.8283L13.3042 10.8508L13.323 10.8583H13.338L13.3642 10.8508L13.3792 10.8396V10.8321ZM13.5367 11.1058C13.5367 11.1058 13.5217 11.1133 13.5105 11.1096C13.4392 11.0871 13.3792 11.0421 13.3792 11.0421L13.5217 11.1321L13.5367 11.1058ZM13.6267 11.1471C13.6267 11.1471 13.6267 11.1733 13.5967 11.1846C13.5705 11.1958 13.5517 11.1921 13.5405 11.1808C13.5292 11.1696 13.5255 11.1583 13.5255 11.1358L13.5217 11.1583L13.5367 11.1883L13.5667 11.2033L13.5855 11.1996L13.6042 11.1921L13.6192 11.1733L13.6305 11.1546L13.6267 11.1471ZM14.538 9.36209L14.5342 9.37709V9.40334L14.5005 9.36584L14.5155 9.34709L14.538 9.36209ZM14.5192 9.31709C14.5192 9.34334 14.4855 9.37709 14.4592 9.36584C14.433 9.35459 14.4142 9.32834 14.4255 9.29834L14.418 9.30959L14.4217 9.35084L14.448 9.37334H14.4817L14.5042 9.36209L14.5192 9.33584V9.31709ZM14.8942 9.38459C14.8942 9.38459 14.8905 9.36959 14.8942 9.38459C14.898 9.39959 14.8717 9.44834 14.8417 9.44459C14.8155 9.44084 14.8042 9.41459 14.8042 9.39209C14.8042 9.36959 14.8005 9.39959 14.8005 9.39959V9.42959L14.8192 9.44459L14.8417 9.45959L14.8642 9.45209L14.8905 9.44084L14.898 9.41834V9.38459H14.8942Z"
                                                                            fill="#AA8C30" />
                                                                        <path
                                                                            d="M14.7663 9.41098C14.7663 9.41098 14.7663 9.42598 14.7513 9.43723L14.7026 9.46348L14.8076 9.43348L14.8001 9.40723L14.7663 9.41473V9.41098ZM14.1251 10.2547L14.1213 10.2735V10.3035L14.0613 10.2097L14.0801 10.1985L14.1251 10.2547ZM14.0913 10.1647C14.0838 10.191 14.0388 10.2022 14.0163 10.1947C13.9976 10.1797 13.9788 10.1347 14.0051 10.1197L13.9901 10.1272L13.9863 10.1535L13.9938 10.1797L14.0163 10.206L14.0351 10.2097L14.0651 10.2022L14.0876 10.1872C14.0876 10.1872 14.1026 10.1385 14.0913 10.1647ZM14.3013 10.3785C14.3013 10.3785 14.3013 10.3897 14.2826 10.3897H14.2226L14.3201 10.4122L14.3276 10.3897L14.3013 10.3785Z"
                                                                            fill="#AA8C30" />
                                                                        <path
                                                                            d="M14.4216 10.4046C14.4328 10.4346 14.4028 10.4684 14.3653 10.4571C14.3278 10.4459 14.3166 10.4084 14.3278 10.3896L14.3203 10.4121L14.3278 10.4421L14.3503 10.4646H14.3991L14.4216 10.4384L14.4291 10.4121L14.4253 10.4046H14.4216ZM10.7091 10.8209C10.7203 10.8321 10.7053 10.8771 10.6641 10.8959C10.6191 10.9109 10.6003 10.8959 10.5891 10.8809C10.5778 10.8659 10.5778 10.8509 10.5778 10.8509L10.5703 10.8584L10.5778 10.8809L10.5966 10.8996L10.6341 10.9071L10.6641 10.9034L10.6903 10.8846L10.7053 10.8734L10.7166 10.8546V10.8321L10.7128 10.8209H10.7091Z"
                                                                            fill="#AA8C30" />
                                                                        <path
                                                                            d="M10.6718 10.9146L10.6605 10.9296L10.6493 10.9596V10.9071L10.668 10.8959L10.6718 10.9146ZM10.5293 11.0646C10.5293 11.0646 10.5293 11.0759 10.5368 11.0834L10.5743 11.0946H10.5068L10.4993 11.0684H10.5293V11.0646ZM10.5068 11.1096V11.1171C10.5067 11.1236 10.5054 11.1299 10.503 11.1359C10.4955 11.1546 10.4918 11.1734 10.4655 11.1696C10.4555 11.168 10.4464 11.163 10.4396 11.1555C10.4328 11.148 10.4287 11.1385 10.428 11.1284C10.428 11.1134 10.4205 11.1059 10.4205 11.1059V11.1284L10.4355 11.1659L10.4618 11.1771H10.4805L10.4993 11.1696L10.5068 11.1471L10.5105 11.1284V11.1096H10.5068ZM10.3305 11.1059C10.3305 11.1059 10.338 11.1359 10.3755 11.1359C10.413 11.1359 10.4205 11.1284 10.4205 11.1284V11.1396L10.413 11.1471H10.3493L10.338 11.1359L10.3268 11.1171V11.1059H10.3305ZM9.97801 10.1534V10.1684C9.97426 10.1796 9.95176 10.2059 9.91051 10.2059C9.87301 10.2059 9.85426 10.1946 9.84301 10.1796C9.83176 10.1684 9.82801 10.1496 9.82801 10.1496V10.1684L9.84301 10.1946L9.88426 10.2134H9.92176L9.95926 10.2021L9.97801 10.1834L9.98176 10.1609L9.97801 10.1534ZM9.91426 10.2396C9.91426 10.2396 9.89926 10.2396 9.89176 10.2471C9.88641 10.2518 9.8814 10.2568 9.87676 10.2621V10.2134H9.91426V10.2396ZM9.73801 10.3671L9.75676 10.3784C9.77551 10.3896 9.87301 10.3971 9.87301 10.3971H9.71926L9.72301 10.3671H9.73801ZM9.71926 10.3671L9.71176 10.3896C9.70426 10.4084 9.68551 10.4496 9.65176 10.4421C9.61801 10.4384 9.62551 10.4121 9.62551 10.4121V10.3971L9.61801 10.4234L9.62551 10.4384L9.64051 10.4459L9.66676 10.4496L9.68176 10.4421L9.70426 10.4234L9.71176 10.4046L9.71926 10.3821V10.3709V10.3671ZM9.63676 10.3746C9.63676 10.3746 9.63676 10.3821 9.61051 10.3821C9.58426 10.3821 9.54676 10.3709 9.54676 10.3709L9.56176 10.3859L9.58051 10.3934H9.62926L9.63676 10.3746ZM9.56176 9.28713C9.56176 9.28713 9.56176 9.30588 9.55051 9.31713C9.53551 9.32838 9.50176 9.33588 9.48301 9.32463C9.46426 9.31338 9.42676 9.27588 9.42676 9.27588L9.44176 9.30588L9.46801 9.32838L9.50551 9.33963L9.54301 9.33213L9.55801 9.31713L9.56551 9.30588L9.55801 9.29088L9.56176 9.28713Z"
                                                                            fill="#AA8C30" />
                                                                        <path
                                                                            d="M9.44904 9.33955V9.36205L9.44154 9.4033L9.47529 9.3283L9.46029 9.3208L9.44904 9.33955ZM9.24654 9.3958L9.25404 9.41455C9.26154 9.4333 9.34029 9.51205 9.34029 9.51205L9.21654 9.4033L9.23154 9.38455L9.24654 9.3958ZM9.20904 9.40705C9.20904 9.40705 9.19029 9.4183 9.17154 9.4183C9.16029 9.4183 9.13404 9.4183 9.13404 9.4033C9.13029 9.38455 9.13779 9.37705 9.13779 9.37705L9.12654 9.39955L9.13029 9.41455L9.14904 9.4258H9.17529L9.19779 9.41455L9.20529 9.40705H9.20904ZM9.15279 9.35455H9.13404C9.10779 9.35455 9.08154 9.32455 9.08154 9.32455L9.10029 9.35455L9.13779 9.3733L9.15279 9.35455Z"
                                                                            fill="#AA8C30" />
                                                                        <path
                                                                            d="M14.9954 9.00607C14.9841 9.14857 14.8416 9.22357 14.7666 9.27607C14.6916 9.32857 14.6541 9.39607 14.6541 9.39607L14.6316 9.47857L14.6204 9.53482L14.6166 9.55357C14.6204 9.56857 14.6279 9.59107 14.6279 9.62857L14.6241 9.78982L14.7254 9.71857L14.7966 9.69232L14.8191 9.68857C14.8191 9.68857 14.7366 9.76732 14.7066 9.85357C14.6766 9.93982 14.6166 10.1236 14.5079 10.1836C14.3954 10.2436 14.3279 10.2211 14.2941 10.2511C14.2566 10.2811 14.2566 10.2886 14.2566 10.2886L14.2079 10.3561L14.1704 10.4011L14.1366 10.4273L14.1141 10.4423C14.1141 10.4638 14.1116 10.4852 14.1066 10.5061L14.0804 10.5961C14.0804 10.5961 14.1029 10.5811 14.1291 10.5773H14.1779C14.1779 10.5773 14.1591 10.5998 14.1516 10.6261C14.1441 10.6486 14.1554 10.7986 14.0166 10.8886C13.8741 10.9748 13.5141 10.9636 13.5141 10.9636L13.4466 10.9898L13.3829 11.0386L13.3229 11.1023V11.1173C13.3229 11.1173 13.2741 11.1736 13.2441 11.1923L13.1391 11.2636L13.2216 11.2673L13.3529 11.3236C13.3529 11.3236 13.2704 11.3236 13.2179 11.3423C13.1616 11.3648 12.9104 11.5073 12.7904 11.5036C12.6666 11.4998 12.4904 11.3198 12.4904 11.3198L12.4154 11.2673L12.2841 11.2411L12.1229 11.2336V11.2111L12.1266 11.1848C12.1266 11.1848 12.1829 11.1773 12.2691 11.1886C12.3441 11.1961 12.3704 11.2261 12.4341 11.2298C12.4979 11.2373 12.5466 11.2298 12.5654 11.2186C12.5916 11.2073 12.7866 11.0423 12.7866 11.0423L13.0041 10.9673L13.0904 10.9786L13.1279 10.9861L13.1616 10.9973L13.1241 11.0348C13.1084 11.0507 13.0908 11.0645 13.0716 11.0761L13.0979 11.0986L13.2366 11.0761L13.2816 11.0873L13.2929 11.0948C13.2929 11.0836 13.3004 11.0648 13.3154 11.0461C13.3304 11.0236 13.4091 10.9598 13.4429 10.9373L13.4954 10.8998C13.5066 10.8886 13.5516 10.7761 13.5516 10.7761L13.5554 10.7161L13.7091 10.5661L13.8141 10.4573L13.8591 10.3336L13.8516 10.3073C13.8516 10.3073 13.8891 10.3448 13.8854 10.4198C13.8779 10.5023 13.8591 10.5286 13.8591 10.5286C13.8591 10.5286 13.9641 10.4536 14.0204 10.4311C14.0654 10.4123 14.0954 10.4123 14.1104 10.4123C14.1254 10.4048 14.1666 10.3786 14.1891 10.3448C14.2191 10.2998 14.2266 10.2886 14.2266 10.2698L14.2341 10.1648L14.2229 9.90232L14.3129 9.69982L14.4441 9.58357L14.4704 9.56857L14.4554 9.61357V9.66982C14.4554 9.66982 14.5229 9.57607 14.5566 9.56107L14.5754 9.54982C14.5892 9.52652 14.5993 9.50122 14.6054 9.47482L14.6166 9.36232V9.24982L14.5979 9.16357L14.5341 9.00232V8.78482L14.4891 8.72482C14.4891 8.72482 14.5304 8.72482 14.5829 8.79982C14.6189 8.85695 14.6431 8.9207 14.6541 8.98732L14.7779 8.60107C14.7779 8.60107 14.8116 8.64607 14.8341 8.72482L14.8641 8.84857L14.9166 8.74357L14.9204 8.78107C14.9279 8.81857 15.0066 8.85982 14.9954 9.00607ZM12.4716 11.4436C12.4716 11.4436 12.4454 11.3836 12.3254 11.3236C12.2091 11.2673 12.1191 11.2561 12.1191 11.2561V11.2973L12.3066 11.3798L12.3966 11.4548L12.4716 11.4436Z"
                                                                            fill="#9CA168" />
                                                                        <path
                                                                            d="M13.3264 11.0837C13.3376 11.0687 13.4389 10.9787 13.4914 10.9525C13.5439 10.9262 13.6114 10.9225 13.6114 10.9225C13.6826 10.9075 13.6939 10.9187 13.8589 10.8287C14.0201 10.7387 14.0576 10.6337 14.0914 10.6075C14.1214 10.5812 14.1776 10.5775 14.1776 10.5775L14.0501 10.7237C13.9852 10.7891 13.9121 10.8458 13.8326 10.8925C13.7438 10.9358 13.6464 10.9589 13.5476 10.96C13.4913 10.9696 13.4391 10.9957 13.3976 11.035C13.3489 11.0725 13.3226 11.1175 13.3226 11.1175C13.3226 11.1175 13.3151 11.0987 13.3226 11.0837H13.3264ZM13.7764 10.6075C13.6264 10.7462 13.5776 10.8775 13.5776 10.8775L13.7801 10.6937C13.8514 10.6262 13.9489 10.5962 13.9901 10.555C14.0351 10.5137 14.0389 10.48 14.0651 10.4537L14.1139 10.4162C14.1139 10.4162 14.0464 10.3637 13.7764 10.6075ZM13.4576 10.93C13.4576 10.93 13.5214 10.9 13.5476 10.8437C13.5664 10.7987 13.5551 10.7875 13.5851 10.7387C13.5851 10.7387 13.7426 10.5887 13.7989 10.5212C13.8964 10.405 13.8514 10.3075 13.8514 10.3075C13.8514 10.3075 13.8626 10.3562 13.8214 10.4087C13.7839 10.4612 13.5776 10.5962 13.5514 10.6787C13.5289 10.7612 13.5401 10.765 13.5289 10.8062C13.5064 10.9037 13.4576 10.93 13.4576 10.93ZM13.3526 11.3237C13.3526 11.3237 13.2739 11.2712 13.1839 11.275C13.0001 11.29 12.8464 11.4025 12.7264 11.4025C12.6101 11.4062 12.5614 11.3462 12.4676 11.2825C12.3701 11.215 12.1226 11.2262 12.1226 11.2262V11.2375C12.1226 11.2375 12.2876 11.2375 12.3626 11.26C12.4976 11.2975 12.5726 11.44 12.7264 11.4325C12.9326 11.4212 13.0976 11.2975 13.1764 11.2975C13.3189 11.2975 13.3526 11.3237 13.3526 11.3237ZM12.4526 11.2337C12.4526 11.2337 12.5914 11.2562 12.7001 11.1775C12.8126 11.0987 12.9401 10.99 13.0114 10.9825C13.0864 10.9825 13.1614 10.9975 13.1614 10.9975C13.1614 10.9975 13.0676 10.96 12.9964 10.96C12.9214 10.96 12.8464 10.9675 12.7789 11.0087C12.7114 11.05 12.6776 11.1212 12.6064 11.17C12.5592 11.2 12.5072 11.2216 12.4526 11.2337ZM12.4264 11.4212C12.4076 11.4212 12.3851 11.4325 12.3776 11.4325C12.3701 11.4325 12.3289 11.3875 12.2651 11.3575C12.2051 11.32 12.1151 11.305 12.1151 11.305C12.1151 11.305 12.1039 11.305 12.1264 11.3125L12.2689 11.3687C12.3062 11.3884 12.3393 11.4151 12.3664 11.4475C12.3701 11.4587 12.3889 11.4812 12.4226 11.4775C12.4601 11.4775 12.4714 11.4587 12.4676 11.44C12.4676 11.4287 12.4451 11.4212 12.4264 11.4212ZM12.5239 11.2862C12.5239 11.2862 12.5801 11.3162 12.6739 11.3162C12.8689 11.3087 12.9964 11.1737 13.1239 11.1287C13.2514 11.0762 13.3189 11.1175 13.3189 11.1175C13.3189 11.1175 13.3226 11.11 13.3189 11.11C13.2757 11.0808 13.2248 11.0651 13.1726 11.065C12.9589 11.065 12.7526 11.2037 12.6664 11.2412C12.5801 11.2787 12.5239 11.2862 12.5239 11.2862ZM14.6239 9.78998C14.5564 9.86123 14.4551 10.0787 14.4139 10.1387C14.3689 10.1987 14.3126 10.2137 14.2901 10.24C14.2676 10.2625 14.1889 10.3712 14.1701 10.3937C14.1514 10.42 14.1476 10.4125 14.1326 10.4237C14.1214 10.435 14.1139 10.435 14.1364 10.4312C14.1589 10.4275 14.1664 10.4125 14.1964 10.375C14.2339 10.3375 14.2301 10.3225 14.2826 10.2737C14.3351 10.2287 14.4289 10.1762 14.4739 10.1162C14.5226 10.06 14.6164 9.83498 14.6689 9.77873C14.7214 9.72248 14.8189 9.68873 14.8189 9.68873C14.8189 9.68873 14.7439 9.66623 14.6201 9.78998H14.6239ZM14.2864 10.2062C14.2864 10.2062 14.2826 10.1687 14.3314 10.1087C14.3801 10.0487 14.3951 10.06 14.4364 9.97373C14.4739 9.88748 14.4926 9.80498 14.5226 9.71498C14.5564 9.62498 14.6089 9.53498 14.6089 9.53498C14.6089 9.53498 14.5601 9.54248 14.5076 9.60998C14.4322 9.70947 14.3716 9.81936 14.3276 9.93623C14.2864 10.0637 14.2864 10.2062 14.2864 10.2062ZM14.2226 10.2887C14.2226 10.2887 14.2414 10.2812 14.2414 10.1687C14.2451 10.06 14.2376 9.90623 14.2676 9.83123C14.3014 9.75623 14.4701 9.56873 14.4701 9.56873C14.4701 9.56873 14.3989 9.58748 14.3014 9.66248C14.2039 9.73748 14.1626 9.83873 14.1664 9.91373C14.1739 9.98873 14.2151 10.0712 14.2189 10.1425L14.2226 10.2925V10.2887ZM14.6164 9.53498C14.6164 9.53498 14.6576 9.38498 14.6764 9.34748C14.6951 9.30998 14.6951 9.29123 14.7776 9.19748C14.8264 9.14123 14.8751 9.10748 14.8939 9.03248C14.9164 8.95748 14.9164 8.74373 14.9164 8.74373C14.9164 8.74373 14.8939 8.76248 14.8751 8.79998C14.8564 8.83748 14.8714 8.97623 14.8376 9.03998C14.8076 9.10373 14.7364 9.24998 14.6989 9.28373C14.6989 9.28373 14.6914 9.17498 14.7064 9.06998C14.7176 8.95748 14.7551 8.92748 14.7701 8.85623C14.7851 8.78498 14.7776 8.60498 14.7776 8.60498C14.7776 8.60498 14.7214 8.66123 14.6914 8.73248C14.6614 8.79998 14.6464 8.91998 14.6464 9.01373C14.6464 9.10748 14.6651 9.18248 14.6689 9.23498C14.6726 9.28748 14.6764 9.30998 14.6539 9.36998L14.6314 9.44498C14.6239 9.47781 14.6151 9.51033 14.6051 9.54248L14.6164 9.53498ZM14.4851 8.72498C14.4851 8.72498 14.5376 8.78873 14.5301 8.85998C14.5189 8.93498 14.4926 9.02873 14.5226 9.10373C14.5489 9.17873 14.5939 9.18623 14.6051 9.23123C14.6164 9.27623 14.6164 9.35873 14.6164 9.35873C14.6164 9.35873 14.6389 9.19748 14.6239 9.15248C14.6051 9.11123 14.5976 9.12998 14.5751 9.08498C14.5526 9.03998 14.5751 8.90873 14.5601 8.83373C14.5414 8.75873 14.4851 8.72498 14.4851 8.72498Z"
                                                                            fill="#717732" />
                                                                        <path
                                                                            d="M11.5005 11.4286C11.5005 11.4286 11.5155 11.3911 11.6167 11.3386C11.7033 11.2906 11.7952 11.2528 11.8905 11.2261C11.9017 11.2373 11.8792 11.2936 11.8792 11.2936L11.7817 11.3236L11.703 11.3686L11.6092 11.4286H11.5005Z"
                                                                            fill="#9CA168" />
                                                                        <path
                                                                            d="M11.7592 11.1621C11.6317 11.1659 11.5605 11.1996 11.5342 11.1996C11.5267 11.2034 11.508 11.2184 11.4892 11.2109C11.4666 11.1965 11.4474 11.1773 11.433 11.1546L11.4067 11.1284L11.3992 11.2221L11.2117 11.0571L11.1892 11.1696L11.163 11.2184L10.9755 11.0384L10.983 11.1771L10.9305 11.1809L10.7955 11.0871L10.758 11.1021L10.803 11.1846L10.6305 11.1959L10.593 11.2259C10.5791 11.2369 10.5665 11.2495 10.5555 11.2634V11.2784H10.6267C10.6417 11.2709 10.6492 11.2521 10.653 11.2596C10.6605 11.2671 10.6642 11.3046 10.6867 11.3009C10.7092 11.3009 10.788 11.2371 10.8442 11.2634C10.908 11.2934 10.7617 11.3384 10.7767 11.3796C10.7917 11.4246 10.8967 11.4059 10.9267 11.3909C10.9492 11.3796 11.028 11.2784 11.0617 11.3159C11.1067 11.3684 10.968 11.4096 10.9942 11.4621C11.0167 11.5109 11.0955 11.4996 11.133 11.4771C11.1705 11.4584 11.2605 11.3234 11.2792 11.3496C11.313 11.4021 11.2042 11.4509 11.2305 11.4884C11.2605 11.5259 11.3167 11.4884 11.358 11.4584C11.3992 11.4284 11.4142 11.3646 11.4705 11.3346C11.523 11.3046 11.5192 11.3159 11.5342 11.3159C11.5492 11.3159 11.5905 11.2746 11.5905 11.2746L11.7217 11.2184L11.7817 11.2259L11.8155 11.2409L11.8792 11.2484L11.8867 11.1959C11.8867 11.1959 11.8117 11.1584 11.763 11.1584L11.7592 11.1621ZM10.7317 11.1621L10.758 11.1134L10.743 11.0909C10.743 11.0909 10.698 11.0646 10.6567 11.0234C10.6357 10.9989 10.6102 10.9785 10.5817 10.9634L10.4992 10.9109L10.4692 10.8059L10.4505 10.7721L10.4017 10.7946L10.338 10.5659L10.3267 10.5246H10.3005L10.2442 10.6596L10.188 10.5734L10.173 10.3859L10.1355 10.4234L10.0867 10.4759L10.0005 10.3034C10.0005 10.3034 9.99672 10.2996 9.98922 10.3146C9.98922 10.3259 9.97797 10.3821 9.98547 10.4121C9.901 10.3589 9.82513 10.2932 9.76047 10.2171L9.72297 10.1234L9.76047 10.0484L9.77922 9.95088L9.69672 9.98463L9.68172 9.77088L9.67047 9.70338L9.56922 9.84588L9.53172 9.78213V9.64713L9.50547 9.63963L9.46797 9.71463C9.46797 9.71463 9.42672 9.63963 9.40797 9.62088C9.41172 9.59088 9.41547 9.51213 9.39672 9.45213C9.37422 9.37713 9.34797 9.33588 9.35922 9.27213C9.36672 9.21213 9.39297 9.20463 9.38922 9.17838C9.38922 9.14838 9.34422 9.19713 9.35922 9.15963C9.37422 9.12213 9.50172 9.03963 9.47547 8.99463C9.44922 8.95338 9.32547 9.06588 9.35172 8.99088C9.38172 8.91588 9.50172 8.91588 9.50922 8.80713C9.51297 8.74338 9.39672 8.84838 9.38547 8.81463C9.37422 8.78463 9.46047 8.71713 9.45672 8.67213C9.45672 8.63463 9.47172 8.62713 9.44922 8.60463C9.42672 8.58213 9.35172 8.69088 9.35172 8.69088L9.27672 8.66463L9.24672 8.77713L9.22422 8.87088L9.12672 8.81463L9.15297 8.93088L9.17547 9.04338L9.07422 9.01713L9.12672 9.11463L9.19797 9.18963L9.23922 9.24588L9.27297 9.26088L9.31047 9.30213L9.32922 9.36588L9.35172 9.43713L9.35547 9.50463V9.59463L9.35172 9.60963V9.65088C9.33297 9.65088 9.29922 9.62088 9.28797 9.63963C9.27672 9.66213 9.34797 9.71463 9.33297 9.72963C9.32172 9.74463 9.22047 9.71088 9.21297 9.74088C9.20547 9.77838 9.22047 9.82338 9.28047 9.83838C9.34047 9.85338 9.47922 9.88338 9.45672 9.91338C9.43422 9.93963 9.28047 9.82713 9.28797 9.90963C9.28953 9.93821 9.29967 9.96567 9.31706 9.98841C9.33445 10.0112 9.35829 10.0281 9.38547 10.0371C9.42297 10.0521 9.57672 10.0371 9.56922 10.0746C9.55797 10.1084 9.44547 10.0596 9.43422 10.1121C9.42297 10.1646 9.51297 10.1721 9.53172 10.1721C9.55047 10.1721 9.61422 10.1684 9.64047 10.1871L9.80172 10.3409C9.85759 10.3855 9.91513 10.4281 9.97422 10.4684C9.94422 10.4684 9.88422 10.4571 9.87672 10.4796C9.86547 10.5059 10.1017 10.5921 10.0342 10.6221C9.96672 10.6484 9.89172 10.5471 9.87297 10.6071C9.85047 10.6709 9.91797 10.7196 9.95547 10.7421C9.99297 10.7646 10.2067 10.7459 10.1655 10.7946C10.1242 10.8434 9.96672 10.7646 9.96672 10.8209C9.96672 10.8771 10.068 10.9709 10.1242 10.9671C10.1767 10.9671 10.2367 10.8771 10.2592 10.9259C10.2855 10.9709 10.2217 10.9896 10.2705 11.0009C10.323 11.0159 10.3567 10.9484 10.4205 10.9634C10.4767 10.9746 10.5705 11.0121 10.623 11.0571C10.6601 11.0912 10.6964 11.1262 10.7317 11.1621Z"
                                                                            fill="#9CA168" />
                                                                        <path
                                                                            d="M11.564 11.4023C11.6015 11.4023 11.6015 11.4248 11.609 11.4248C11.6127 11.4248 11.6765 11.3686 11.7327 11.3386C11.7804 11.315 11.8308 11.2974 11.8827 11.2861L11.8865 11.2936C11.8865 11.2936 11.7815 11.3198 11.729 11.3573L11.6165 11.4361C11.609 11.4436 11.5865 11.4623 11.5527 11.4623C11.5152 11.4623 11.5002 11.4398 11.5002 11.4286C11.5002 11.4211 11.5265 11.4023 11.564 11.4023ZM11.8827 11.2411C11.8827 11.2411 11.849 11.2448 11.834 11.2298C11.8056 11.2095 11.7714 11.199 11.7365 11.1998C11.6806 11.2057 11.628 11.2293 11.5865 11.2673C11.5865 11.2711 11.5752 11.2898 11.534 11.3161C11.549 11.3198 11.5752 11.3011 11.609 11.2786C11.6486 11.2494 11.6951 11.2313 11.744 11.2261C11.7815 11.2186 11.8077 11.2411 11.8265 11.2523C11.8452 11.2673 11.879 11.2636 11.879 11.2636V11.2411H11.8827ZM9.989 10.4686V10.4423C9.96049 10.4307 9.93291 10.4169 9.9065 10.4011C9.8465 10.3636 9.719 10.2586 9.719 10.2586L9.824 10.3598C9.8765 10.4086 9.974 10.4686 9.974 10.4686H9.989ZM11.324 11.4136L11.3802 11.3348C11.414 11.2786 11.444 11.2598 11.4515 11.2523C11.4552 11.2448 11.4365 11.2186 11.4252 11.1998L11.4177 11.1548C11.4177 11.1548 11.4327 11.1848 11.4552 11.2036C11.47 11.215 11.4838 11.2275 11.4965 11.2411C11.4965 11.2411 11.549 11.2336 11.549 11.2223C11.549 11.2148 11.549 11.2073 11.5415 11.2036C11.5302 11.1998 11.5227 11.2111 11.5002 11.2036C11.4515 11.1811 11.4327 11.1061 11.4027 11.1061C11.3727 11.1023 11.3952 11.1811 11.3802 11.1811C11.339 11.1886 11.3052 11.0198 11.1927 11.0123C11.1177 11.0123 11.1065 11.0236 11.1027 11.0386C11.1027 11.0573 11.1965 11.1548 11.1627 11.1698C11.1327 11.1848 11.0315 11.0123 10.9565 11.0123C10.8852 11.0123 10.8815 11.0386 10.8815 11.0536C10.889 11.0686 10.964 11.0836 10.949 11.1361C10.9302 11.1886 10.8552 11.0611 10.7877 11.0648C10.7202 11.0723 10.7127 11.0761 10.7127 11.0986C10.709 11.1173 10.7352 11.1436 10.724 11.1511C10.7165 11.1586 10.6715 11.1548 10.6377 11.1773C10.604 11.2036 10.559 11.2673 10.559 11.2673C10.559 11.2673 10.604 11.2036 10.6602 11.1961C10.7302 11.1921 10.8003 11.1921 10.8702 11.1961L10.829 11.1661C10.8065 11.1473 10.7877 11.1061 10.7877 11.1061L10.8515 11.1623C10.8815 11.1886 10.9227 11.2073 10.9227 11.2073C10.9227 11.2073 10.9865 11.2148 10.9902 11.2223C10.994 11.2298 10.9902 11.2448 10.9602 11.2711L10.8965 11.3348L10.9715 11.2748L11.0277 11.2298L11.0802 11.2373C11.084 11.2373 11.0802 11.2186 11.0502 11.1736L10.9902 11.0798C10.9902 11.0798 11.0277 11.1136 11.0652 11.1661C11.1065 11.2148 11.1027 11.2411 11.1177 11.2411C11.1327 11.2411 11.1552 11.2486 11.1702 11.2448C11.1852 11.2448 11.1815 11.2673 11.1552 11.3086C11.129 11.3498 11.1102 11.4023 11.1102 11.4023C11.1102 11.4023 11.1402 11.3573 11.1702 11.3273C11.1965 11.2973 11.2115 11.2636 11.2265 11.2598H11.2827L11.2527 11.1998C11.2302 11.1623 11.2227 11.1023 11.2227 11.1023C11.2227 11.1023 11.2452 11.1548 11.2752 11.1961L11.324 11.2673L11.3765 11.2636L11.3877 11.2673C11.3877 11.2861 11.3802 11.2936 11.3615 11.3348C11.3473 11.3602 11.3348 11.3865 11.324 11.4136ZM10.5177 10.9486C10.5627 10.9673 10.5815 10.9673 10.5815 10.9673C10.5815 10.9673 10.5177 10.9298 10.5027 10.8773C10.484 10.8248 10.5027 10.7123 10.4727 10.7161C10.4465 10.7161 10.4315 10.7948 10.4052 10.7798C10.3752 10.7648 10.4127 10.6148 10.3827 10.5548C10.3527 10.4911 10.2852 10.4461 10.2702 10.4686C10.2552 10.4911 10.259 10.6261 10.214 10.5998C10.1727 10.5698 10.2177 10.4498 10.2065 10.4011C10.1915 10.3448 10.1615 10.3073 10.1352 10.3223C10.1127 10.3336 10.1465 10.4348 10.109 10.4348C10.0715 10.4348 10.0752 10.3636 10.0602 10.3598C10.0415 10.3523 10.0377 10.3711 10.0265 10.3598C10.019 10.3448 10.0265 10.2961 10.004 10.2998C9.9815 10.3036 9.98525 10.3448 9.99275 10.3636C9.9965 10.3861 10.0115 10.4161 10.019 10.4311C10.0265 10.4461 10.0565 10.4648 10.0565 10.4761C10.0527 10.4873 10.0377 10.4986 10.019 10.4986H9.94775C9.94775 10.4986 10.0002 10.5136 10.019 10.5136C10.0377 10.5136 10.0715 10.5061 10.0827 10.5211C10.0902 10.5398 10.1352 10.5961 10.1352 10.5961C10.1352 10.5961 10.1465 10.5661 10.1502 10.5136C10.1577 10.4573 10.1502 10.4123 10.1502 10.4123C10.1502 10.4123 10.169 10.4723 10.1652 10.5136C10.1652 10.5511 10.1502 10.6261 10.1502 10.6261C10.1502 10.6261 10.1915 10.6561 10.1802 10.6636C10.169 10.6748 10.124 10.6748 10.0752 10.6748C10.0227 10.6748 9.9515 10.6561 9.9515 10.6561C10.0298 10.6932 10.1162 10.71 10.2027 10.7048L10.2702 10.7798C10.2702 10.7798 10.304 10.7236 10.3077 10.6673V10.5548L10.3227 10.6598C10.3227 10.7086 10.3077 10.7948 10.3002 10.8023C10.2795 10.8198 10.2552 10.8326 10.229 10.8398L10.0977 10.8586C10.0977 10.8586 10.1802 10.8698 10.2402 10.8586C10.2965 10.8436 10.304 10.8248 10.3227 10.8361L10.3527 10.8623L10.4015 10.8998C10.4052 10.9036 10.3752 10.9148 10.364 10.9261L10.3077 10.9523L10.3902 10.9261C10.4041 10.9214 10.4179 10.9164 10.4315 10.9111L10.4502 10.9186L10.4465 10.8736L10.4352 10.8061C10.4352 10.8061 10.454 10.8361 10.4615 10.8661L10.4652 10.9261C10.4652 10.9261 10.4727 10.9336 10.5177 10.9486ZM9.3515 9.61355C9.3515 9.61355 9.36275 9.5498 9.36275 9.47855C9.35493 9.40177 9.33062 9.32758 9.2915 9.26105L9.329 9.20855L9.284 9.24605L9.239 9.2273C9.22505 9.21752 9.21351 9.2047 9.20525 9.1898L9.25025 9.2198C9.27275 9.2273 9.2765 9.22355 9.2765 9.22355L9.25775 9.14855L9.1865 9.11105C9.13775 9.08855 9.09275 9.04355 9.09275 9.04355L9.19775 9.0998C9.23525 9.1148 9.25775 9.1148 9.25775 9.1148L9.31775 9.0923L9.3815 9.05105C9.3815 9.05105 9.344 9.07355 9.314 9.0773L9.254 9.08855L9.24275 8.99855L9.2015 8.9573C9.16775 8.9123 9.1415 8.84855 9.1415 8.84855C9.1415 8.84855 9.179 8.89355 9.20525 8.9123C9.2315 8.9348 9.25775 8.96855 9.25775 8.96855L9.31775 8.93105L9.42275 8.85605L9.3215 8.9048L9.2615 8.93105C9.2615 8.93105 9.254 8.89355 9.2615 8.8748C9.27275 8.8598 9.2915 8.8298 9.28775 8.8148C9.28775 8.79605 9.27275 8.80355 9.269 8.78855C9.2615 8.7773 9.284 8.69105 9.284 8.69105L9.28775 8.73605C9.28775 8.7548 9.28025 8.77355 9.30275 8.77355C9.32525 8.77355 9.42275 8.6723 9.43775 8.65355C9.449 8.6348 9.46775 8.58605 9.41525 8.6048C9.36275 8.6273 9.37775 8.6723 9.33275 8.66855C9.31775 8.66855 9.30275 8.6123 9.28775 8.62355C9.27275 8.63855 9.23525 8.6723 9.22775 8.71355C9.22025 8.75105 9.23525 8.81105 9.21275 8.8298C9.19025 8.84855 9.17525 8.7623 9.13025 8.77355C9.08525 8.7848 9.074 8.84855 9.0815 8.87105C9.089 8.89355 9.18275 9.0023 9.1565 9.02105C9.12275 9.0323 9.04775 8.92355 9.0065 8.99855C8.969 9.0698 9.134 9.14855 9.1565 9.16355C9.17525 9.1823 9.1565 9.18605 9.1865 9.22355C9.2165 9.26105 9.254 9.26855 9.2765 9.29105C9.32038 9.35728 9.34742 9.43324 9.35525 9.5123L9.3515 9.61355ZM9.79025 10.2548C9.79025 10.2548 9.75275 10.2098 9.764 10.1311C9.77525 10.0561 9.8315 9.9173 9.81275 9.89855C9.794 9.8798 9.73775 9.98105 9.72275 9.95855C9.70775 9.93605 9.7565 9.7973 9.73025 9.74105C9.70775 9.6848 9.704 9.6473 9.65525 9.6548C9.6065 9.65855 9.58775 9.8198 9.5615 9.7898C9.539 9.76355 9.5765 9.6923 9.5615 9.65105C9.54275 9.61355 9.53525 9.6023 9.51275 9.60605C9.4865 9.61355 9.47525 9.68855 9.46025 9.6848C9.4415 9.6848 9.41525 9.59855 9.37775 9.6098C9.344 9.62105 9.464 9.77855 9.464 9.77855C9.464 9.77855 9.48275 9.7598 9.494 9.73355L9.5165 9.6773C9.5165 9.6773 9.52775 9.72605 9.5165 9.74855C9.509 9.7673 9.50525 9.8123 9.50525 9.8123C9.50525 9.8123 9.47525 9.82355 9.4265 9.8123C9.39668 9.80754 9.36766 9.79871 9.34025 9.78605C9.34025 9.78605 9.37025 9.80855 9.419 9.82355L9.52025 9.8498C9.54398 9.88448 9.56899 9.91825 9.59525 9.95105L9.62525 9.8723L9.674 9.74105L9.6515 9.8873L9.62525 9.9998C9.62525 9.9998 9.58775 9.9998 9.52775 9.98855L9.39275 9.95855L9.52775 10.0036L9.63275 10.0298L9.68525 10.1011L9.72275 10.0448L9.76025 9.9773C9.76025 9.9773 9.749 10.0298 9.734 10.0636C9.72575 10.0813 9.717 10.0988 9.70775 10.1161L9.64025 10.1236H9.5465C9.60123 10.1414 9.65787 10.1527 9.71525 10.1573C9.71525 10.1573 9.71525 10.1761 9.7415 10.2061C9.7543 10.2254 9.77088 10.242 9.79025 10.2548Z"
                                                                            fill="#717732" />
                                                                        <path
                                                                            d="M11.7893 11.6537C11.7893 11.6537 11.7668 11.6312 11.7368 11.6162C11.703 11.5975 11.6918 11.6012 11.6918 11.6012L11.6768 11.5975L11.7068 11.5225L11.913 11.3237L11.9468 11.125H12.0743V11.395L12.1118 11.4137L12.3443 11.5525V11.6125L12.3068 11.6275L12.2805 11.6425L12.1943 11.65L12.0443 11.5375L11.9768 11.4737L11.8643 11.6237L11.7893 11.6537Z"
                                                                            fill="white" />
                                                                        <path
                                                                            d="M11.9539 11.125L11.9502 11.1625C11.9502 11.1962 11.9502 11.3575 11.9427 11.38C11.9352 11.4025 11.8227 11.4475 11.7589 11.5037C11.6952 11.56 11.6914 11.6012 11.6914 11.6012C11.6914 11.6012 11.6727 11.6012 11.6314 11.6162C11.5939 11.6312 11.5752 11.6537 11.5752 11.6537C11.5752 11.6537 11.5977 11.5562 11.7027 11.4662C11.8039 11.3687 11.8527 11.3612 11.8677 11.3462C11.8789 11.3312 11.8677 11.1587 11.8677 11.14C11.8714 11.125 11.8864 11.125 11.8939 11.125H11.9539ZM12.2164 11.7137L12.2464 11.6725L12.2839 11.6425L12.2277 11.6125C12.1714 11.59 12.1414 11.5975 12.1039 11.5675C12.0738 11.5456 12.0461 11.5204 12.0214 11.4925L11.9652 11.5375L12.0289 11.6125C12.0627 11.6425 12.1302 11.6537 12.1602 11.6725C12.1817 11.684 12.2018 11.6978 12.2202 11.7137H12.2164Z"
                                                                            fill="#016848" />
                                                                        <path
                                                                            d="M12.0551 11.1211C12.0551 11.1211 12.1188 11.1211 12.1263 11.1286L12.1338 11.1511C12.1338 11.1548 12.1338 11.3011 12.1263 11.3498C12.1169 11.3906 12.099 11.4289 12.0738 11.4623L11.9238 11.6011C11.8788 11.6461 11.8338 11.7061 11.8338 11.7061L11.8038 11.6686C11.7926 11.6536 11.7776 11.6461 11.7813 11.6348C11.8118 11.583 11.8542 11.5393 11.9051 11.5073C11.9801 11.4586 12.0401 11.4023 12.0551 11.3236C12.0663 11.2486 12.0551 11.1211 12.0551 11.1211Z"
                                                                            fill="#CD202A" />
                                                                        <path
                                                                            d="M12.468 11.6237C12.468 11.6237 12.453 11.6087 12.4005 11.6087L12.3442 11.6125C12.3442 11.6125 12.3142 11.575 12.2692 11.5487C12.2242 11.5187 12.1905 11.5225 12.138 11.4887C12.0892 11.4587 12.063 11.41 12.063 11.41L12.1005 11.335C12.1005 11.335 12.1455 11.3912 12.1905 11.425C12.2317 11.4587 12.3292 11.4887 12.363 11.515L12.468 11.6237Z"
                                                                            fill="#CD202A" />
                                                                        <path
                                                                            d="M12.9363 10.7384C12.9363 10.7384 12.8013 10.6859 12.8088 10.6371C12.82 10.5921 13.12 10.5134 13.12 10.5134L13.1238 10.4346C13.1238 10.4346 13.0788 10.4309 13.0038 10.4534C12.9288 10.4796 12.8088 10.5134 12.6813 10.5134C12.2516 10.4816 11.8216 10.4541 11.3913 10.4309C11.2525 10.4196 11.1663 10.2059 11.1663 10.2059L11.0988 10.2209C11.0988 10.2209 11.1175 10.3221 11.0838 10.3334C10.9019 10.279 10.7269 10.2034 10.5625 10.1084L10.54 10.2059C10.54 10.2059 10.8138 10.3559 10.8063 10.4121C10.7988 10.4646 10.7163 10.4609 10.7163 10.4609L10.7538 10.5284C10.765 10.5284 11.2038 10.5509 11.215 10.6821C11.215 10.7384 11.1025 10.7684 11.1025 10.7684L11.14 10.8134V10.8359C11.14 10.8359 11.3913 10.8359 11.4588 10.8734C11.5263 10.9109 11.56 10.9709 11.6463 11.0159C11.7288 11.0646 12.295 11.0534 12.3813 11.0272C12.4825 11.0009 12.5425 10.8884 12.7075 10.8397C12.8688 10.7871 12.9213 10.7872 12.9213 10.7872L12.9363 10.7384Z"
                                                                            fill="#30C2DC" stroke="#0872A7"
                                                                            stroke-width="0.0625" />
                                                                        <path
                                                                            d="M10.6676 10.6033C10.7111 10.6033 10.7464 10.568 10.7464 10.5246C10.7464 10.4811 10.7111 10.4458 10.6676 10.4458C10.6241 10.4458 10.5889 10.4811 10.5889 10.5246C10.5889 10.568 10.6241 10.6033 10.6676 10.6033Z"
                                                                            fill="white" stroke="#0872A7"
                                                                            stroke-width="0.125" />
                                                                        <path
                                                                            d="M11.1139 10.2361C11.1574 10.2361 11.1927 10.2009 11.1927 10.1574C11.1927 10.1139 11.1574 10.0786 11.1139 10.0786C11.0704 10.0786 11.0352 10.1139 11.0352 10.1574C11.0352 10.2009 11.0704 10.2361 11.1139 10.2361Z"
                                                                            fill="white" stroke="#0872A7"
                                                                            stroke-width="0.125" />
                                                                        <path
                                                                            d="M12.9928 10.825C13.0363 10.825 13.0716 10.7897 13.0716 10.7462C13.0716 10.7027 13.0363 10.6675 12.9928 10.6675C12.9493 10.6675 12.9141 10.7027 12.9141 10.7462C12.9141 10.7897 12.9493 10.825 12.9928 10.825Z"
                                                                            fill="white" stroke="#0872A7"
                                                                            stroke-width="0.125" />
                                                                        <path
                                                                            d="M10.3153 10.0409C10.289 10.1009 10.3903 10.2134 10.4653 10.2284C10.5328 10.2359 10.5703 10.2209 10.5853 10.1872C10.5903 10.1715 10.5916 10.1548 10.589 10.1385C10.5864 10.1222 10.58 10.1068 10.5703 10.0934C10.5253 10.0297 10.3453 9.98094 10.3153 10.0409Z"
                                                                            fill="#F8C83C" />
                                                                        <path
                                                                            d="M10.5366 10.1308C10.5366 10.0933 10.4766 10.0596 10.4391 10.0596C10.4016 10.0596 10.3641 10.0596 10.3716 10.0783C10.3753 10.1008 10.4728 10.1271 10.4766 10.1383C10.4766 10.1496 10.4466 10.1608 10.4616 10.1758C10.4803 10.1908 10.4991 10.1796 10.5141 10.1683C10.5291 10.1571 10.5403 10.1533 10.5403 10.1308H10.5366Z"
                                                                            fill="white" />
                                                                        <path
                                                                            d="M11.1628 10.8098C11.1778 10.8623 11.1366 10.8848 11.0878 10.9111C11.0316 10.9336 10.9266 10.9186 10.9003 10.8773C10.8778 10.8361 10.9378 10.7648 11.0053 10.7498C11.0691 10.7348 11.1478 10.7611 11.1628 10.8098Z"
                                                                            fill="#F8C83C" />
                                                                        <path
                                                                            d="M11.0542 10.8361C11.073 10.8361 11.0767 10.8736 11.0917 10.8661C11.1105 10.8661 11.1292 10.8361 11.1217 10.8173C11.118 10.7948 11.0842 10.7686 11.0542 10.7723C11.0242 10.7723 10.9417 10.8473 10.9492 10.8661C10.9567 10.8848 10.9792 10.8848 10.9942 10.8773C11.0092 10.8698 11.0317 10.8398 11.0542 10.8398V10.8361Z"
                                                                            fill="white" />
                                                                        <path
                                                                            d="M13.094 10.5358C13.1428 10.5996 13.229 10.5433 13.2515 10.5171C13.274 10.4946 13.3415 10.4534 13.3153 10.4121C13.2853 10.3709 13.2403 10.3746 13.2028 10.3746C13.1728 10.3746 13.1053 10.4271 13.094 10.4496C13.0828 10.4684 13.0715 10.5096 13.094 10.5396V10.5358Z"
                                                                            fill="#F8C83C" />
                                                                        <path
                                                                            d="M13.1089 10.4983C13.1089 10.4983 13.1126 10.4271 13.1764 10.4233C13.2139 10.4233 13.2139 10.4346 13.2439 10.4496C13.2701 10.4646 13.2814 10.4308 13.2814 10.4308C13.2814 10.4308 13.2814 10.4796 13.2401 10.4796C13.1951 10.4796 13.2101 10.4608 13.1651 10.4533C13.1276 10.4458 13.1089 10.4946 13.1089 10.4946V10.4983Z"
                                                                            fill="white" />
                                                                        <path
                                                                            d="M12.0704 10.3633L12.0367 10.3408H11.9317L11.8042 10.3446L11.9317 10.7158L12.0817 10.9333L12.1417 10.9558L12.2579 10.9483L12.2804 10.8883L12.2354 10.5321L12.0704 10.3633Z"
                                                                            fill="#F9AA51" stroke="#953220"
                                                                            stroke-width="0.0625"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M11.6465 10.3859L11.654 10.3447L11.7215 10.3409C11.749 10.3379 11.7768 10.3392 11.804 10.3447C11.804 10.3447 11.8902 10.4534 11.9202 10.5209C11.9502 10.5884 11.984 10.7009 12.0215 10.7684C12.059 10.8397 12.1415 10.9559 12.1415 10.9559H11.9915L11.9165 10.9334L11.7065 10.5959L11.6465 10.3859Z"
                                                                            fill="#F9AA51" stroke="#953220"
                                                                            stroke-width="0.0625"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M11.5563 10.3412H11.6538C11.7181 10.3959 11.7683 10.4654 11.8 10.5437C11.8375 10.6487 11.8188 10.6637 11.8675 10.7762C11.92 10.8849 11.9875 10.9599 11.9875 10.9599C11.9875 10.9599 11.8413 10.9674 11.7625 10.9524C11.6763 10.9374 11.65 10.9412 11.6275 10.9149C11.6083 10.8962 11.5869 10.8799 11.5638 10.8662H11.4813L11.5 10.7499L11.4775 10.4912L11.4813 10.3599L11.5563 10.3412ZM12.4338 10.4087L12.295 10.3524L12.0325 10.3374L12.055 10.4724C12.0744 10.5726 12.1072 10.6697 12.1525 10.7612C12.1938 10.8362 12.235 10.9262 12.2575 10.9487C12.28 10.9674 12.43 10.9074 12.43 10.9074L12.5275 10.8924L12.5163 10.7874L12.5013 10.7499L12.5238 10.4499L12.5013 10.4049L12.4338 10.4087Z"
                                                                            fill="#F9AA51" stroke="#953220"
                                                                            stroke-width="0.0625"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M11.5151 10.4125C11.5151 10.4425 11.5526 10.4462 11.5601 10.4425C11.5676 10.4425 11.5976 10.4312 11.5976 10.3862C11.5976 10.3412 11.5714 10.3075 11.5151 10.3037C11.4626 10.3037 11.4214 10.3675 11.4214 10.4162C11.4214 10.4612 11.4664 10.4837 11.4664 10.5025C11.4664 10.5025 11.4214 10.5437 11.4251 10.6187C11.4251 10.6937 11.4851 10.7537 11.4851 10.7537C11.4851 10.7537 11.4214 10.8025 11.4214 10.855C11.4214 10.9075 11.4701 10.9412 11.5189 10.9412C11.5639 10.9412 11.6239 10.9112 11.6239 10.8737C11.6239 10.8362 11.5864 10.81 11.5601 10.81C11.5301 10.81 11.5189 10.8287 11.5189 10.84L11.5151 10.4125ZM12.4789 10.4312C12.4789 10.465 12.4564 10.4687 12.4414 10.4687C12.4264 10.4687 12.3964 10.4537 12.3964 10.4125C12.3964 10.375 12.4489 10.3525 12.4864 10.3525C12.5201 10.3525 12.5764 10.3975 12.5764 10.4537C12.5764 10.51 12.5389 10.5512 12.5389 10.5512C12.5389 10.5512 12.5614 10.5625 12.5614 10.6337C12.5614 10.7087 12.5164 10.7575 12.5164 10.7575C12.5164 10.7575 12.5764 10.78 12.5764 10.855C12.5764 10.93 12.5239 10.9525 12.4901 10.9525C12.4526 10.9525 12.3926 10.9337 12.3926 10.8812C12.3926 10.8325 12.4226 10.8137 12.4489 10.8137C12.4714 10.8137 12.4976 10.84 12.4976 10.87"
                                                                            fill="#F9AA51" />
                                                                        <path
                                                                            d="M12.4789 10.4312C12.4789 10.465 12.4564 10.4687 12.4414 10.4687C12.4264 10.4687 12.3964 10.4537 12.3964 10.4125C12.3964 10.375 12.4489 10.3525 12.4864 10.3525C12.5201 10.3525 12.5764 10.3975 12.5764 10.4537C12.5764 10.51 12.5389 10.5512 12.5389 10.5512C12.5389 10.5512 12.5614 10.5625 12.5614 10.6337C12.5614 10.7087 12.5164 10.7575 12.5164 10.7575C12.5164 10.7575 12.5764 10.78 12.5764 10.855C12.5764 10.93 12.5239 10.9525 12.4901 10.9525C12.4526 10.9525 12.3926 10.9337 12.3926 10.8812C12.3926 10.8325 12.4226 10.8137 12.4489 10.8137C12.4714 10.8137 12.4976 10.84 12.4976 10.87M11.5151 10.4125C11.5151 10.4425 11.5526 10.4462 11.5601 10.4425C11.5676 10.4425 11.5976 10.4312 11.5976 10.3862C11.5976 10.3412 11.5714 10.3075 11.5151 10.3037C11.4626 10.3037 11.4214 10.3675 11.4214 10.4162C11.4214 10.4612 11.4664 10.4837 11.4664 10.5025C11.4664 10.5025 11.4214 10.5437 11.4251 10.6187C11.4251 10.6937 11.4851 10.7537 11.4851 10.7537C11.4851 10.7537 11.4214 10.8025 11.4214 10.855C11.4214 10.9075 11.4701 10.9412 11.5189 10.9412C11.5639 10.9412 11.6239 10.9112 11.6239 10.8737C11.6239 10.8362 11.5864 10.81 11.5601 10.81C11.5301 10.81 11.5189 10.8287 11.5189 10.84L11.5151 10.4125Z"
                                                                            stroke="#953220" stroke-width="0.0625"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M11.6055 10.8209L11.6205 10.8434C11.628 10.8584 11.6317 10.8809 11.6505 10.8959C11.6805 10.9222 11.9205 10.9334 11.9955 10.9334C12.0705 10.9334 12.288 10.9409 12.3292 10.9184C12.3667 10.8922 12.3742 10.8509 12.4005 10.8322L12.4342 10.8172L12.4005 10.8434V10.8959L12.4192 10.9259C12.4192 10.9259 12.4155 10.9409 12.3892 10.9559C12.363 10.9709 12.3405 10.9747 12.303 10.9784C12.2655 10.9822 11.808 10.9822 11.733 10.9709C11.658 10.9559 11.6655 10.9597 11.643 10.9447C11.6285 10.9343 11.6158 10.9217 11.6055 10.9072L11.6167 10.8772L11.6055 10.8247V10.8209ZM12.3555 10.3784L12.393 10.3972C12.393 10.3972 12.3592 10.4084 12.333 10.4834C12.3067 10.5584 12.3292 10.5772 12.3105 10.5847C12.2917 10.5922 12.093 10.5847 12.093 10.5847L12.0555 10.5059L12.3555 10.3822V10.3784Z"
                                                                            fill="#953220" />
                                                                        <path
                                                                            d="M12.9889 10.3488C12.9889 10.3488 12.9552 10.3375 12.9402 10.3113C12.9252 10.2813 12.9102 10.2475 12.9214 10.2363C12.9364 10.2325 12.9589 10.255 12.9589 10.2775C12.9589 10.3 12.9889 10.3525 12.9889 10.3525V10.3488ZM13.3789 10.2438C13.3789 10.2438 13.4052 10.2888 13.4164 10.2925L13.4614 10.315C13.4614 10.315 13.4052 10.315 13.3864 10.3C13.3719 10.2827 13.3593 10.2638 13.3489 10.2438H13.3789Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M13.499 10.2812C13.499 10.2812 13.4615 10.3 13.439 10.2887C13.409 10.2775 13.3865 10.2625 13.4015 10.2512C13.409 10.2362 13.4165 10.24 13.4315 10.2587C13.4465 10.2737 13.499 10.2812 13.499 10.2812ZM13.6977 10.1125C13.6977 10.1125 13.6677 10.135 13.649 10.135C13.6302 10.135 13.5927 10.1275 13.5927 10.12C13.5927 10.1125 13.6415 10.105 13.6527 10.1087H13.6977V10.1125ZM13.3977 9.71875C13.3977 9.71875 13.3565 9.73375 13.3415 9.75625C13.3265 9.775 13.3302 9.80125 13.349 9.80125C13.3677 9.80125 13.3715 9.775 13.3715 9.76375L13.3977 9.71875ZM13.2027 9.8275C13.2027 9.8275 13.169 9.84625 13.1652 9.865C13.154 9.88375 13.1465 9.925 13.1652 9.925C13.184 9.925 13.1915 9.895 13.1915 9.88C13.1915 9.86125 13.2027 9.8275 13.2027 9.8275Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M12.8539 10.0634L12.7451 10.1759C12.7451 10.1759 12.9926 10.3147 13.1839 10.3072C13.3714 10.3034 13.5889 10.1572 13.6039 10.1197C13.6189 10.0934 13.6039 9.95842 13.5814 9.91717C13.5551 9.87592 13.4239 9.77467 13.3751 9.77842C13.3264 9.78217 13.2364 9.84967 13.1576 9.92842C13.0751 10.0072 13.0826 10.0747 12.9701 10.0672L12.8539 10.0634Z"
                                                                            fill="#8CBEBF" stroke="#04534E"
                                                                            stroke-width="0.0625" />
                                                                        <path
                                                                            d="M12.824 10.1086C12.824 10.1086 13.0865 10.1461 13.1652 10.0786C13.2402 10.0111 13.3265 9.87982 13.379 9.85357C13.4315 9.81982 13.454 9.81982 13.454 9.81982L13.514 9.86107L13.5815 9.91732L13.604 10.0448V10.1123L13.5215 10.1798L13.3715 10.2511L13.2215 10.2961L13.1015 10.2923L12.8502 10.2173L12.7865 10.1761L12.7715 10.1611L12.824 10.1086Z"
                                                                            fill="#0C8489" />
                                                                        <path
                                                                            d="M13.229 9.95463C13.229 9.93213 13.244 9.93213 13.2665 9.93213C13.289 9.93213 13.304 9.93963 13.304 9.96213C13.304 9.98463 13.2853 10.0146 13.2665 10.0146C13.244 10.0146 13.229 9.97713 13.229 9.95463ZM13.334 10.0221C13.334 9.99963 13.349 9.99213 13.3715 9.99213C13.3978 9.99213 13.4203 10.0184 13.4203 10.0371C13.4203 10.0559 13.4015 10.0746 13.379 10.0746C13.3528 10.0746 13.334 10.0409 13.334 10.0221ZM13.2965 10.1796C13.2965 10.1534 13.3153 10.1496 13.3378 10.1496C13.3603 10.1496 13.3753 10.1609 13.3753 10.1871C13.3753 10.1984 13.3711 10.2094 13.3634 10.2177C13.3558 10.226 13.3453 10.2312 13.334 10.2321C13.3078 10.2321 13.2965 10.2059 13.2965 10.1796ZM13.1578 10.1309C13.1578 10.1046 13.184 10.0934 13.2065 10.0934C13.229 10.0934 13.244 10.1196 13.244 10.1459C13.244 10.1721 13.229 10.1946 13.2065 10.1946C13.184 10.1946 13.1578 10.1571 13.1578 10.1309ZM12.9365 10.1571C12.9365 10.1422 12.9424 10.1279 12.953 10.1174C12.9635 10.1068 12.9779 10.1009 12.9928 10.1009C13.0077 10.1009 13.022 10.1068 13.0325 10.1174C13.0431 10.1279 13.049 10.1422 13.049 10.1571C13.049 10.172 13.0431 10.1864 13.0325 10.1969C13.022 10.2075 13.0077 10.2134 12.9928 10.2134C12.9779 10.2134 12.9635 10.2075 12.953 10.1969C12.9424 10.1864 12.9365 10.172 12.9365 10.1571Z"
                                                                            fill="#04534E" />
                                                                        <path
                                                                            d="M13.334 10.0221C13.334 10.0034 13.3603 9.99213 13.3715 9.99213C13.3903 9.99213 13.4015 10.0071 13.4015 10.0221C13.4015 10.0371 13.3903 10.0596 13.3753 10.0596C13.3603 10.0596 13.3378 10.0409 13.3378 10.0221H13.334ZM13.2965 10.1721C13.2965 10.1534 13.319 10.1421 13.3415 10.1421C13.364 10.1421 13.379 10.1534 13.379 10.1721C13.379 10.1909 13.3603 10.2096 13.3415 10.2096C13.319 10.2096 13.3003 10.1946 13.3003 10.1721H13.2965ZM13.1578 10.1271C13.1578 10.1046 13.1953 10.0934 13.214 10.0934C13.229 10.0934 13.2253 10.1084 13.2253 10.1309C13.2253 10.1571 13.214 10.1759 13.199 10.1759C13.184 10.1759 13.1615 10.1496 13.1615 10.1271H13.1578ZM13.2253 9.95088C13.2253 9.93213 13.2403 9.93213 13.2553 9.93213C13.2703 9.93213 13.2778 9.93588 13.2778 9.95838C13.2778 9.98088 13.2665 9.99588 13.2553 9.99588C13.2403 9.99588 13.2253 9.97338 13.2253 9.95088ZM12.9365 10.1421C12.9365 10.1196 12.959 10.0934 12.989 10.0934C13.019 10.0934 13.0528 10.1046 13.0528 10.1309C13.0528 10.1534 13.0153 10.1984 12.9853 10.1984C12.9515 10.1984 12.9365 10.1684 12.9365 10.1421Z"
                                                                            fill="#8CBEBF" />
                                                                        <path
                                                                            d="M13.038 10.1008C13.038 10.1008 13.0005 10.1046 12.9818 10.1233C12.963 10.1421 12.963 10.1608 12.9705 10.1683C12.9818 10.1758 12.9968 10.1571 13.0005 10.1458C13.0005 10.1383 13.038 10.1008 13.038 10.1008ZM13.2143 10.0633C13.2143 10.0633 13.1768 10.0858 13.1768 10.1121C13.173 10.1346 13.1768 10.1496 13.1843 10.1496C13.1955 10.1496 13.203 10.1158 13.1993 10.1046C13.1955 10.0933 13.2143 10.0596 13.2143 10.0596V10.0633Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M13.244 10.0975C13.244 10.0975 13.2216 10.0975 13.2066 10.1125C13.1878 10.1313 13.1728 10.15 13.1841 10.15C13.1953 10.15 13.214 10.1425 13.214 10.1313C13.214 10.1238 13.244 10.0975 13.244 10.0975ZM13.2815 9.89502L13.2515 9.91752C13.244 9.92502 13.2328 9.95502 13.244 9.95502C13.2553 9.96252 13.2628 9.95502 13.274 9.93627C13.2815 9.91752 13.2815 9.89502 13.2815 9.89502ZM13.4128 9.98127C13.4128 9.98127 13.379 9.98127 13.3678 10C13.3565 10.015 13.349 10.03 13.3678 10.03C13.379 10.03 13.3828 10.0225 13.3903 10.0113C13.394 9.99627 13.4128 9.98127 13.4128 9.98127ZM13.394 10.135C13.394 10.135 13.3865 10.1613 13.364 10.1725C13.3453 10.1838 13.3378 10.1913 13.3265 10.1763C13.3228 10.1613 13.334 10.1538 13.3415 10.15L13.394 10.135Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M13.604 10.0298C13.604 10.0298 13.619 10.1048 13.5553 10.1423C13.4915 10.176 13.3153 10.2998 13.1465 10.2848C12.9778 10.2698 12.7865 10.1723 12.7865 10.1723L12.7603 10.1873L12.8053 10.206L12.9328 10.2585L13.0828 10.3035L13.1765 10.3073L13.2553 10.2998L13.4053 10.251L13.529 10.1873L13.5965 10.1348L13.6115 10.1123V10.041L13.604 10.0298Z"
                                                                            fill="#04534E" />
                                                                        <path
                                                                            d="M10.3076 9.08105C10.3076 9.08105 10.3451 9.1148 10.3451 9.14105C10.3376 9.17105 10.3301 9.1823 10.3188 9.17855C10.3076 9.17105 10.3076 9.14105 10.3076 9.1298V9.08105ZM10.5963 9.3473C10.5963 9.3473 10.5851 9.3998 10.5626 9.40355C10.5438 9.4073 10.5288 9.38855 10.5326 9.3773C10.5363 9.3698 10.5551 9.3773 10.5626 9.3698L10.5963 9.3473ZM9.96631 9.3848C9.96631 9.3848 9.98131 9.4148 10.0038 9.4223C10.0338 9.4223 10.0413 9.4073 10.0413 9.3998C10.0376 9.3923 10.0263 9.3923 10.0113 9.3923L9.96631 9.38855V9.3848ZM10.0788 9.6098C10.0788 9.6098 10.1051 9.6323 10.1351 9.63605C10.1449 9.63714 10.1548 9.63521 10.1635 9.63052C10.1722 9.62583 10.1793 9.61861 10.1838 9.6098C10.1838 9.6023 10.1463 9.6023 10.1351 9.6098C10.1238 9.62105 10.0788 9.6098 10.0788 9.6098ZM10.2776 9.7748C10.2776 9.7748 10.3301 9.7673 10.3376 9.7523C10.3451 9.7373 10.3601 9.7148 10.3488 9.70355C10.3376 9.68855 10.3301 9.7223 10.3226 9.7373C10.3188 9.74855 10.2776 9.7748 10.2776 9.7748Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M10.5967 9.63984C10.5967 9.63984 10.6342 9.41484 10.4467 9.24984C10.2592 9.08859 10.1429 9.12984 10.0792 9.18984C10.0154 9.24984 9.95919 9.44109 10.1542 9.61359C10.3529 9.78234 10.5929 9.72609 10.5929 9.72609L10.5967 9.63984Z"
                                                                            fill="#8CBEBF" stroke="#04534E"
                                                                            stroke-width="0.0625" />
                                                                        <path
                                                                            d="M10.0342 9.39976C10.0342 9.39976 10.0305 9.27226 10.0905 9.23476C10.1467 9.19726 10.3455 9.16726 10.4392 9.35101C10.5367 9.53851 10.5405 9.62851 10.5142 9.72601H10.413L10.2517 9.65851L10.1205 9.56101L10.0342 9.39976Z"
                                                                            fill="#0C8489" />
                                                                        <path
                                                                            d="M10.5742 9.67375C10.5742 9.67375 10.5404 9.71125 10.4729 9.71125C10.4092 9.70375 10.0979 9.625 10.0229 9.34375V9.4075L10.0267 9.42625L10.0492 9.4825L10.113 9.57625L10.1954 9.6475L10.3005 9.7L10.3755 9.7225L10.4692 9.7375H10.5255L10.5742 9.67375Z"
                                                                            fill="#04534E" />
                                                                        <path
                                                                            d="M10.4126 9.59487C10.4126 9.56862 10.4238 9.56862 10.4426 9.56862C10.4613 9.56862 10.4801 9.56112 10.4801 9.58362C10.4801 9.60987 10.4651 9.64362 10.4426 9.64362C10.4276 9.64362 10.4126 9.61737 10.4126 9.59487ZM10.4238 9.44487C10.4238 9.42987 10.4388 9.41487 10.4613 9.41487C10.4801 9.41487 10.4951 9.42987 10.4951 9.44862C10.4951 9.46362 10.4801 9.47862 10.4576 9.47862C10.4388 9.47862 10.4238 9.46362 10.4238 9.44862V9.44487ZM10.2851 9.60987C10.2851 9.59487 10.3001 9.58362 10.3226 9.58362C10.3451 9.58362 10.3601 9.59487 10.3601 9.60987C10.3601 9.62112 10.3226 9.63987 10.3038 9.63987C10.2813 9.63987 10.2851 9.62112 10.2851 9.60987ZM10.2701 9.43737C10.2701 9.41487 10.2813 9.42237 10.3001 9.42237C10.3188 9.42237 10.3451 9.42612 10.3451 9.44862C10.3451 9.47112 10.3188 9.50112 10.3001 9.50112C10.2813 9.50112 10.2701 9.45612 10.2701 9.43737ZM10.1426 9.46362C10.1426 9.44487 10.1538 9.42237 10.1763 9.42237C10.1988 9.42237 10.2251 9.44487 10.2251 9.46362C10.2251 9.48237 10.2063 9.50112 10.1838 9.50112C10.1613 9.50112 10.1426 9.48237 10.1426 9.46362ZM10.1651 9.31362C10.1651 9.29112 10.1763 9.29487 10.2026 9.29487C10.2251 9.29487 10.2438 9.30237 10.2438 9.32112C10.2438 9.33987 10.2176 9.36612 10.1913 9.36612C10.1688 9.36612 10.1651 9.32862 10.1651 9.30987V9.31362ZM10.3038 9.29487C10.3038 9.27987 10.3226 9.28362 10.3413 9.28362C10.3676 9.28362 10.3826 9.29862 10.3826 9.32112C10.3826 9.34362 10.3563 9.35862 10.3338 9.35862C10.3113 9.35862 10.3038 9.31362 10.3038 9.29862V9.29487Z"
                                                                            fill="#04534E" />
                                                                        <path
                                                                            d="M10.1617 9.30994C10.1692 9.29494 10.1767 9.28369 10.1917 9.28369C10.2104 9.28369 10.2254 9.28744 10.2254 9.30994C10.2254 9.32494 10.2104 9.34369 10.1954 9.34369C10.1767 9.34369 10.1579 9.32494 10.1654 9.30619L10.1617 9.30994ZM10.1392 9.45994C10.1392 9.44119 10.1467 9.42244 10.1654 9.42244C10.1842 9.42244 10.2029 9.42244 10.2029 9.44119C10.2029 9.45994 10.1842 9.48244 10.1654 9.48244C10.1467 9.48244 10.1392 9.47869 10.1392 9.45994ZM10.3042 9.29869C10.3042 9.28369 10.3154 9.28369 10.3342 9.28369C10.3529 9.28369 10.3642 9.28369 10.3642 9.30244C10.3642 9.31744 10.3492 9.32869 10.3342 9.32869C10.3192 9.32869 10.3042 9.31369 10.3042 9.29869ZM10.2704 9.44494C10.2704 9.46369 10.2892 9.48244 10.3079 9.48244C10.3267 9.48244 10.3454 9.46369 10.3454 9.44494C10.3454 9.42244 10.3229 9.40744 10.3079 9.40744C10.2929 9.40744 10.2704 9.42244 10.2704 9.44494ZM10.4317 9.42244C10.4317 9.44119 10.4467 9.45619 10.4692 9.45619C10.4879 9.45619 10.5029 9.44119 10.5029 9.42244C10.5029 9.40369 10.4842 9.38869 10.4654 9.38869C10.4467 9.38869 10.4279 9.40369 10.4279 9.42619L10.4317 9.42244ZM10.2779 9.60994C10.2779 9.59119 10.2967 9.57619 10.3117 9.57619C10.3267 9.57619 10.3454 9.58744 10.3454 9.60244C10.3454 9.61744 10.3154 9.63994 10.3004 9.63994C10.2817 9.63994 10.2779 9.62494 10.2779 9.60619V9.60994ZM10.4129 9.58369C10.4129 9.56494 10.4279 9.56119 10.4504 9.56119C10.4692 9.56119 10.4804 9.56494 10.4804 9.58369C10.4804 9.60619 10.4617 9.62119 10.4429 9.62119C10.4242 9.62119 10.4129 9.60244 10.4129 9.58369Z"
                                                                            fill="#8CBEBF" />
                                                                        <path
                                                                            d="M10.4503 9.3508C10.4503 9.3508 10.4691 9.37705 10.4728 9.39955V9.44455C10.4616 9.44455 10.4503 9.42955 10.4466 9.4108C10.4428 9.39205 10.4466 9.3508 10.4466 9.3508H10.4503ZM10.3303 9.22705C10.3303 9.22705 10.3453 9.2458 10.3453 9.26455C10.3453 9.2833 10.3453 9.30205 10.3341 9.30205C10.3228 9.30205 10.3228 9.28705 10.3228 9.27205L10.3303 9.22705ZM10.1916 9.2458C10.1916 9.2458 10.2066 9.26455 10.2066 9.2833C10.2066 9.30205 10.2066 9.3208 10.1953 9.3208C10.1841 9.3208 10.1841 9.3058 10.1841 9.2908L10.1916 9.2458Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M10.1426 9.27246L10.1801 9.28746C10.1914 9.30246 10.1989 9.31746 10.1914 9.32496C10.1876 9.33246 10.1726 9.32121 10.1689 9.30996L10.1426 9.27246ZM10.2476 9.41496C10.2476 9.41496 10.2739 9.41496 10.2889 9.43371C10.3039 9.44496 10.3189 9.45621 10.3076 9.46746C10.3001 9.47496 10.2814 9.45996 10.2701 9.44871L10.2476 9.41496ZM10.1201 9.41496L10.1576 9.42621C10.1689 9.43371 10.1726 9.45246 10.1651 9.45621C10.1614 9.45996 10.1501 9.45621 10.1426 9.44121L10.1201 9.41121V9.41496ZM10.4314 9.50871L10.4389 9.56121C10.4389 9.57996 10.4426 9.59871 10.4314 9.59871C10.4201 9.59871 10.4201 9.57246 10.4201 9.56121C10.4201 9.54246 10.4314 9.50871 10.4314 9.50871Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M10.3975 9.55713L10.4275 9.57588C10.4388 9.58338 10.4388 9.59838 10.4313 9.59838L10.4163 9.57963C10.4097 9.5724 10.4035 9.56489 10.3975 9.55713ZM10.2588 9.56463L10.2925 9.57588C10.3 9.58338 10.3038 9.61338 10.3 9.61713C10.3 9.62088 10.285 9.61713 10.2775 9.60588L10.2588 9.56838V9.56463Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M10.2028 9.14096C10.2028 9.14096 10.0828 9.16721 10.0603 9.24971C10.0378 9.32471 10.034 9.41471 10.034 9.41471L10.019 9.31346L10.0415 9.24971L10.079 9.18971L10.1315 9.15221L10.1803 9.13721L10.2028 9.14096ZM10.5853 9.6097C10.5853 9.6097 10.6003 9.5797 10.5628 9.48221C10.5253 9.38846 10.4503 9.25721 10.4503 9.25721L10.5103 9.32471L10.5553 9.39971L10.5778 9.46721L10.5965 9.53096V9.59096L10.5853 9.61345V9.6097Z"
                                                                            fill="#04534E" />
                                                                        <path
                                                                            d="M10.7088 9.45605C10.7088 9.45605 10.7538 9.4823 10.7576 9.4973C10.7613 9.5123 10.7651 9.5198 10.7538 9.52355C10.7426 9.5273 10.7238 9.50855 10.7163 9.4973C10.7126 9.4838 10.7101 9.46999 10.7088 9.45605ZM10.5288 9.93605C10.5288 9.93605 10.5513 9.89855 10.5776 9.8873C10.6038 9.8723 10.6226 9.8723 10.6301 9.88355C10.6376 9.89105 10.6151 9.9098 10.5926 9.9173L10.5288 9.9398V9.93605ZM10.8326 10.0523C10.8326 10.0523 10.8626 10.0373 10.8813 10.0148C10.9001 9.99605 10.9038 9.98105 10.8963 9.9773C10.8888 9.96605 10.8663 9.9773 10.8551 9.99605C10.8438 10.0111 10.8326 10.0523 10.8326 10.0523ZM10.7988 10.0261C10.7988 10.0261 10.8101 9.98855 10.8213 9.97355C10.8326 9.9623 10.8438 9.9548 10.8588 9.9623C10.8663 9.9698 10.8588 9.9848 10.8513 9.99605C10.8349 10.0078 10.8173 10.0179 10.7988 10.0261Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M11.3054 9.79376C11.3054 9.79376 11.1179 9.52376 10.8254 9.50876C10.7883 9.50569 10.751 9.51011 10.7157 9.52174C10.6804 9.53337 10.6478 9.55199 10.6198 9.57647C10.5918 9.60096 10.569 9.63082 10.5528 9.66428C10.5366 9.69774 10.5273 9.73412 10.5254 9.77126C10.5329 9.83126 10.6229 9.96625 10.9341 9.98875C11.2454 10.0113 11.2941 9.8425 11.3091 9.835C11.3204 9.8275 11.3054 9.7975 11.3054 9.7975V9.79376Z"
                                                                            fill="#8CBEBF" stroke="#04534E"
                                                                            stroke-width="0.0625" />
                                                                        <path
                                                                            d="M11.084 9.60982C11.084 9.60982 11.159 9.66607 11.1965 9.71482C11.2265 9.75982 11.234 9.79732 11.2152 9.80107C11.1965 9.80857 11.0277 9.65107 10.8852 9.61732C10.7465 9.58357 10.6265 9.61732 10.6002 9.68107C10.574 9.74482 10.5852 9.84982 10.6452 9.89107C10.7127 9.92857 11.009 9.97732 11.009 9.97732L11.1477 9.95857L11.234 9.90982L11.2527 9.86107L11.2752 9.80107L11.2827 9.77482L11.2115 9.69982L11.084 9.60607V9.60982Z"
                                                                            fill="#0C8489" />
                                                                        <path
                                                                            d="M10.8439 9.64752C10.8439 9.66252 10.8251 9.67377 10.8064 9.67377C10.7876 9.67377 10.7726 9.66252 10.7726 9.64752C10.7726 9.62877 10.7876 9.61377 10.8101 9.61377C10.8326 9.61377 10.8476 9.62877 10.8476 9.64752H10.8439ZM10.6714 9.70752C10.6714 9.68877 10.6939 9.69252 10.7089 9.69252C10.7314 9.69252 10.7464 9.70377 10.7464 9.72252C10.7464 9.74127 10.7164 9.76377 10.6976 9.75627C10.6751 9.74502 10.6714 9.72627 10.6714 9.70752ZM10.8589 9.80877C10.8589 9.78627 10.8739 9.77127 10.8964 9.77127C10.9226 9.77127 10.9414 9.78627 10.9414 9.80877C10.9414 9.83127 10.9114 9.85377 10.8851 9.85377C10.8589 9.85377 10.8589 9.83127 10.8589 9.80877Z"
                                                                            fill="#04534E" />
                                                                        <path
                                                                            d="M10.7163 9.84965C10.7163 9.8309 10.7388 9.82715 10.7538 9.82715C10.7726 9.82715 10.7913 9.8459 10.7913 9.86465C10.7913 9.8834 10.7726 9.8984 10.7538 9.8984C10.7388 9.8984 10.7163 9.8684 10.7163 9.84965Z"
                                                                            fill="#8CBEBF" />
                                                                        <path
                                                                            d="M10.9678 9.91747C10.9678 9.90247 10.9753 9.88748 10.994 9.88748C11.009 9.88748 11.0315 9.89872 11.0315 9.91372C11.0315 9.92872 11.0128 9.94747 10.994 9.94747C10.9867 9.94656 10.98 9.943 10.9752 9.93747C10.9704 9.93194 10.9677 9.92482 10.9678 9.91747ZM11.0803 9.83122C11.0803 9.81247 11.0915 9.81622 11.1103 9.81622C11.129 9.81622 11.1478 9.82372 11.1478 9.84622C11.1478 9.86872 11.1253 9.87622 11.1065 9.87622C11.0878 9.87622 11.0803 9.85372 11.0803 9.83122Z"
                                                                            fill="#04534E" />
                                                                        <path
                                                                            d="M10.8365 9.63236C10.8365 9.64736 10.829 9.65486 10.8103 9.65486C10.7915 9.65486 10.7765 9.64736 10.7765 9.63236C10.7765 9.61361 10.784 9.60986 10.799 9.60986C10.814 9.60986 10.8365 9.61361 10.8365 9.63236ZM10.7428 9.70361C10.7428 9.72236 10.7165 9.72986 10.7053 9.72986C10.6865 9.72986 10.6753 9.72236 10.6753 9.70361C10.6753 9.68486 10.6865 9.68111 10.7053 9.68111C10.724 9.68111 10.7428 9.68486 10.7428 9.70361ZM10.7803 9.84611C10.7803 9.86111 10.7803 9.87236 10.7615 9.87236C10.7428 9.87236 10.724 9.86111 10.724 9.84611C10.724 9.83111 10.724 9.81986 10.7428 9.81986C10.7615 9.81986 10.784 9.83111 10.784 9.84611H10.7803ZM10.9303 9.79736C10.9303 9.81236 10.904 9.83486 10.8853 9.83486C10.8703 9.83486 10.8628 9.80111 10.8628 9.78611C10.8628 9.77111 10.8778 9.75986 10.8928 9.75986C10.9078 9.75986 10.9303 9.78236 10.9303 9.79736ZM11.1478 9.84611C11.1478 9.86111 11.1215 9.86111 11.1103 9.86111C11.0915 9.86111 11.0803 9.84236 11.0803 9.82361C11.0803 9.80861 11.084 9.79361 11.1178 9.79736C11.1365 9.79736 11.1478 9.82736 11.1478 9.84611ZM11.0203 9.90986C11.0203 9.92861 11.009 9.93986 10.994 9.93986C10.9861 9.93986 10.9785 9.9367 10.9728 9.93108C10.9672 9.92545 10.964 9.91782 10.964 9.90986C10.964 9.89486 10.979 9.88736 10.994 9.88736C11.009 9.88736 11.0203 9.89486 11.0203 9.90986Z"
                                                                            fill="#8CBEBF" />
                                                                        <path
                                                                            d="M11.0393 9.82371C11.0393 9.82371 11.0693 9.81246 11.0955 9.81246C11.118 9.81246 11.118 9.82371 11.118 9.82746C11.118 9.83121 11.0993 9.83871 11.0918 9.83496C11.0742 9.83011 11.0567 9.82511 11.0393 9.81996V9.82371ZM10.9155 9.92871C10.9155 9.92871 10.938 9.91371 10.9568 9.90996C10.9755 9.90621 10.9905 9.90996 10.9868 9.92496C10.9868 9.93621 10.9793 9.93621 10.9643 9.93621L10.9155 9.92871ZM10.833 9.74121C10.833 9.74121 10.8855 9.76371 10.8968 9.78246C10.908 9.80496 10.9118 9.80871 10.9005 9.81621C10.8893 9.82371 10.878 9.80871 10.8705 9.79746L10.833 9.74121Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M10.8179 9.80861L10.8779 9.79736C10.8967 9.79736 10.9004 9.79736 10.9042 9.80486C10.9042 9.81236 10.9004 9.81611 10.8854 9.81611L10.8179 9.80861ZM10.6904 9.80861C10.6904 9.80861 10.7354 9.81611 10.7467 9.82736C10.7579 9.83862 10.7579 9.84987 10.7504 9.85362C10.7504 9.86112 10.7279 9.85737 10.7204 9.85362L10.6904 9.80861Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M10.6864 9.87211C10.6864 9.87211 10.7014 9.84586 10.7164 9.84211C10.7314 9.83836 10.7539 9.83836 10.7539 9.84586C10.7577 9.85336 10.7389 9.86461 10.7277 9.86836L10.6827 9.87211H10.6864ZM10.6489 9.68086L10.6939 9.69211C10.7089 9.70336 10.7127 9.71461 10.7089 9.71836C10.7089 9.72211 10.6902 9.72586 10.6789 9.71836C10.6602 9.70336 10.6527 9.68086 10.6527 9.68086H10.6489ZM10.7464 9.56836C10.7464 9.56836 10.7914 9.58336 10.8064 9.60586C10.8214 9.62461 10.8177 9.63586 10.8102 9.63961L10.7764 9.62461C10.7652 9.61336 10.7464 9.57211 10.7464 9.57211V9.56836Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M11.2491 9.88748C11.2491 9.88748 11.1629 9.96248 10.9604 9.95873C10.7541 9.95123 10.5704 9.86498 10.5254 9.77123L10.5441 9.81623L10.5891 9.87623L10.7316 9.95123L10.8929 9.98498L11.0166 9.99248L11.1366 9.96998L11.2304 9.92873L11.2454 9.90248L11.2529 9.88748H11.2491ZM11.2791 9.79373C11.2791 9.79373 11.2454 9.74873 11.1966 9.70748C11.1516 9.66248 10.9641 9.54248 10.9641 9.54248L11.1141 9.60998L11.2154 9.69248L11.2829 9.76748L11.2791 9.79373Z"
                                                                            fill="#04534E" />
                                                                        <path
                                                                            d="M11.2866 9.61375C11.2866 9.61375 11.3391 9.6325 11.3466 9.64375L11.3654 9.66625C11.3654 9.66625 11.3541 9.70375 11.3429 9.68875L11.3129 9.655L11.2866 9.61375ZM11.4366 9.53125C11.4366 9.53125 11.4854 9.55 11.5041 9.5725C11.5229 9.59875 11.5191 9.6175 11.5116 9.62125C11.5041 9.62125 11.4741 9.595 11.4666 9.58375C11.4582 9.56611 11.4494 9.5486 11.4404 9.53125H11.4366Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M11.4888 9.52377C11.4888 9.52377 11.5338 9.55377 11.5413 9.56877C11.5451 9.58377 11.5601 9.60627 11.5451 9.60627C11.5338 9.61377 11.5113 9.59127 11.5076 9.57627L11.4851 9.52002L11.4888 9.52377ZM11.7438 9.58002C11.7438 9.58002 11.7813 9.59502 11.7813 9.62502V9.67377L11.7551 9.64752V9.62127L11.7438 9.58377V9.58002ZM11.8113 9.60627C11.8113 9.60627 11.8413 9.63252 11.8451 9.65127C11.8451 9.67002 11.8526 9.68127 11.8338 9.68877C11.8188 9.68877 11.8113 9.67002 11.8113 9.65127V9.60627ZM11.3501 10.1688C11.3501 10.1688 11.3726 10.1763 11.3951 10.1688C11.4138 10.1613 11.4326 10.1425 11.4288 10.1313C11.4251 10.1163 11.4138 10.105 11.3988 10.1238C11.3838 10.1388 11.3913 10.1463 11.3801 10.1538L11.3538 10.165L11.3501 10.1688ZM11.6051 10.2363C11.6051 10.2363 11.6388 10.2288 11.6613 10.2025C11.6838 10.18 11.6951 10.165 11.6801 10.1575C11.6651 10.15 11.6426 10.1575 11.6426 10.1763L11.6051 10.2363ZM11.8113 10.24L11.8601 10.2063C11.8788 10.1913 11.8863 10.18 11.8751 10.1688C11.8638 10.15 11.8526 10.1613 11.8451 10.1688L11.8376 10.195L11.8151 10.24H11.8113Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M11.8755 10.2399C11.8755 10.2399 11.9055 10.2062 11.913 10.1874C11.9167 10.1687 11.9205 10.1499 11.9092 10.1499C11.8942 10.1499 11.8792 10.1687 11.8792 10.1837V10.2399H11.8755Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M11.2454 9.90205C11.2454 9.81205 11.3767 9.60205 11.5267 9.60205C11.5867 9.60205 11.7104 9.63955 11.8079 9.6808C11.8904 9.7183 11.9204 9.7558 11.9729 9.7708C12.0292 9.7858 12.1117 9.77455 12.1117 9.77455L12.2992 9.7558L12.1492 9.96955L12.0967 10.0146C12.0967 10.0146 12.0517 10.1046 11.9204 10.1571C11.7854 10.2096 11.5642 10.1721 11.4629 10.1458C11.3617 10.1196 11.2379 10.0258 11.2454 9.90205Z"
                                                                            fill="#8CBEBF" stroke="#04534E"
                                                                            stroke-width="0.0625" />
                                                                        <path
                                                                            d="M11.2451 9.90223H11.2526C11.2526 9.88348 11.2601 9.85348 11.2751 9.82348C11.2994 9.76991 11.3338 9.72153 11.3764 9.68098C11.4176 9.64348 11.4701 9.61348 11.5226 9.61348C11.5526 9.61348 11.5976 9.62098 11.6501 9.63598C11.7026 9.64967 11.754 9.66722 11.8039 9.68848C11.8414 9.70723 11.8714 9.72598 11.8939 9.74473C11.9201 9.75973 11.9426 9.77473 11.9689 9.78223C11.9935 9.78752 12.0187 9.79003 12.0439 9.78973L12.1114 9.78598L12.2764 9.76723L12.1414 9.96223L12.0889 10.0072V10.011C12.0486 10.0753 11.9878 10.1242 11.9164 10.1497C11.8676 10.1647 11.8114 10.1722 11.7476 10.1722C11.6426 10.1722 11.5264 10.1535 11.4626 10.1347C11.4091 10.1214 11.3599 10.0943 11.3201 10.056C11.2995 10.0367 11.283 10.0135 11.2714 9.98773C11.2598 9.96198 11.2534 9.9342 11.2526 9.90598H11.2339C11.2339 9.96973 11.2639 10.026 11.3089 10.071C11.3505 10.1123 11.4022 10.142 11.4589 10.1572C11.5226 10.1722 11.6389 10.1947 11.7476 10.1947C11.8075 10.1961 11.8671 10.1872 11.9239 10.1685C12.0006 10.1412 12.0656 10.0882 12.1076 10.0185H12.0964L12.1039 10.0222L12.1564 9.97347L12.3176 9.74098L12.1076 9.76723H12.1039C12.0614 9.77088 12.0186 9.76962 11.9764 9.76348C11.9504 9.75578 11.9262 9.74304 11.9051 9.72598C11.8826 9.71098 11.8526 9.68848 11.8114 9.67348C11.7604 9.65071 11.7078 9.63191 11.6539 9.61723C11.6051 9.60223 11.5564 9.59473 11.5264 9.59473H11.5226C11.4851 9.59473 11.4476 9.60598 11.4101 9.63223C11.3599 9.6665 11.3176 9.71128 11.2864 9.76348C11.258 9.80482 11.2399 9.85242 11.2339 9.90223H11.2451Z"
                                                                            fill="#04534E" />
                                                                        <path
                                                                            d="M12.1491 9.93224C12.1341 9.94349 12.1116 9.94349 12.0966 9.94349C12.0779 9.94349 11.6616 9.69224 11.5341 9.70349C11.4029 9.71474 11.2791 9.76724 11.2754 9.90224C11.2754 10.0335 11.3054 10.0335 11.3316 10.071C11.3579 10.1085 11.6129 10.1647 11.6129 10.1647H11.7666L11.8904 10.1497L12.0029 10.0897L12.0591 10.041L12.1004 9.99224L12.1491 9.93224Z"
                                                                            fill="#0C8489" />
                                                                        <path
                                                                            d="M11.4928 9.86125C11.4928 9.89125 11.4816 9.91 11.4553 9.91C11.4328 9.91 11.4141 9.89875 11.4141 9.8725C11.4141 9.84625 11.4291 9.835 11.4516 9.835C11.4778 9.835 11.4891 9.83875 11.4891 9.865L11.4928 9.86125ZM11.5341 9.74875C11.5341 9.72625 11.5566 9.71875 11.5791 9.71875C11.6053 9.71875 11.6241 9.72625 11.6241 9.74875C11.6241 9.77125 11.6053 9.78625 11.5791 9.78625C11.5566 9.78625 11.5341 9.77125 11.5341 9.74875ZM11.7853 9.81625C11.7853 9.7975 11.8003 9.7825 11.8228 9.7825C11.8416 9.7825 11.8566 9.7975 11.8566 9.82C11.8566 9.8425 11.8416 9.85 11.8191 9.85C11.8097 9.85005 11.8007 9.84661 11.7938 9.84037C11.7869 9.83413 11.7825 9.82553 11.7816 9.81625H11.7853ZM11.8341 9.96625C11.8341 9.94375 11.8528 9.92875 11.8716 9.92875C11.8941 9.92875 11.9166 9.93625 11.9166 9.95875C11.9166 9.98125 11.9091 10.0075 11.8866 10.0075C11.8641 10.0075 11.8341 9.9925 11.8341 9.97V9.96625ZM11.7141 10.0675C11.7141 10.045 11.7328 10.03 11.7516 10.03C11.7778 10.03 11.7966 10.045 11.7966 10.0675C11.7966 10.0862 11.7778 10.1012 11.7591 10.1012C11.7328 10.1012 11.7141 10.0862 11.7141 10.0637V10.0675ZM11.4891 10.03C11.4891 10.0075 11.5003 9.9925 11.5228 9.9925C11.5284 9.99065 11.5344 9.99016 11.5403 9.99107C11.5462 9.99198 11.5517 9.99427 11.5565 9.99775C11.5613 10.0012 11.5652 10.0058 11.5679 10.0111C11.5706 10.0164 11.572 10.0222 11.572 10.0281C11.572 10.0341 11.5706 10.0399 11.5679 10.0452C11.5652 10.0505 11.5613 10.055 11.5565 10.0585C11.5517 10.062 11.5462 10.0643 11.5403 10.0652C11.5344 10.0661 11.5284 10.0656 11.5228 10.0637C11.5129 10.0637 11.5033 10.0598 11.4963 10.0528C11.4893 10.0457 11.4853 10.0362 11.4853 10.0262L11.4891 10.03Z"
                                                                            fill="#04534E" />
                                                                        <path
                                                                            d="M11.4891 9.86111C11.4891 9.87986 11.4741 9.89861 11.4516 9.89861C11.4416 9.89861 11.4321 9.89466 11.425 9.88763C11.418 9.8806 11.4141 9.87106 11.4141 9.86111C11.4141 9.83861 11.4291 9.83111 11.4516 9.83111C11.4741 9.83111 11.4891 9.83861 11.4891 9.85736V9.86111ZM11.6128 9.74111C11.6128 9.75986 11.6053 9.77486 11.5828 9.77486C11.5641 9.77486 11.5341 9.75986 11.5341 9.74111C11.5341 9.72236 11.5528 9.70361 11.5716 9.70361C11.5941 9.70361 11.6091 9.72236 11.6091 9.74111H11.6128ZM11.8528 9.80486C11.8528 9.82361 11.8378 9.83861 11.8153 9.83861C11.7928 9.83861 11.7816 9.82361 11.7816 9.80486C11.7816 9.78986 11.7966 9.77486 11.8191 9.77486C11.8416 9.77486 11.8528 9.78986 11.8528 9.80486Z"
                                                                            fill="#8CBEBF" />
                                                                        <path
                                                                            d="M11.7252 9.90598C11.7252 9.93223 11.714 9.95098 11.6877 9.95098C11.6652 9.95098 11.6465 9.93973 11.6465 9.91348C11.6465 9.88723 11.6577 9.87598 11.684 9.87598C11.7102 9.87598 11.7215 9.88348 11.7215 9.90598H11.7252Z"
                                                                            fill="#04534E" />
                                                                        <path
                                                                            d="M11.5491 10.0187C11.5491 10.0374 11.5341 10.0562 11.5116 10.0562C11.4891 10.0562 11.4741 10.0374 11.4741 10.0187C11.4741 9.9999 11.4966 9.98865 11.5191 9.98865C11.5416 9.98865 11.5491 9.9999 11.5491 10.0187ZM11.7179 9.90615C11.7179 9.9161 11.7139 9.92564 11.7069 9.93267C11.6999 9.9397 11.6903 9.94365 11.6804 9.94365C11.6704 9.94365 11.6609 9.9397 11.6539 9.93267C11.6468 9.92564 11.6429 9.9161 11.6429 9.90615C11.6429 9.89621 11.6468 9.88667 11.6539 9.87964C11.6609 9.8726 11.6704 9.86865 11.6804 9.86865C11.6903 9.86865 11.6999 9.8726 11.7069 9.87964C11.7139 9.88667 11.7179 9.89621 11.7179 9.90615ZM11.9129 9.9549C11.9129 9.9774 11.9016 9.9924 11.8754 9.9924C11.8529 9.9924 11.8341 9.9774 11.8341 9.9549C11.8341 9.9324 11.8416 9.9249 11.8641 9.9249C11.8866 9.9249 11.9129 9.9324 11.9129 9.9549ZM11.7891 10.0562C11.7891 10.0787 11.7741 10.0937 11.7516 10.0937C11.7291 10.0937 11.7104 10.0787 11.7104 10.0562C11.7104 10.0374 11.7291 10.0262 11.7479 10.0262C11.7704 10.0262 11.7854 10.0374 11.7854 10.0562H11.7891Z"
                                                                            fill="#8CBEBF" />
                                                                        <path
                                                                            d="M11.8041 9.9359C11.8041 9.9359 11.8641 9.9284 11.8753 9.9359C11.8866 9.95089 11.8866 9.96589 11.8791 9.97339C11.8753 9.97339 11.8491 9.97714 11.8416 9.96964C11.8416 9.95839 11.8041 9.93214 11.8041 9.93214V9.9359ZM11.7403 9.7334C11.7403 9.7334 11.7891 9.74465 11.8078 9.76715C11.8266 9.7859 11.8228 9.80465 11.8228 9.8084C11.8153 9.81215 11.8003 9.8159 11.7853 9.8009L11.7403 9.7334ZM11.6016 9.8309C11.6016 9.8309 11.6578 9.8609 11.6691 9.87965C11.6803 9.89465 11.6841 9.90965 11.6766 9.91715C11.6728 9.92465 11.6466 9.91715 11.6391 9.9059C11.6391 9.89465 11.6016 9.8309 11.6016 9.8309Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M11.5754 9.87238C11.5754 9.87238 11.6391 9.87988 11.6504 9.89113C11.6691 9.90613 11.6804 9.90613 11.6804 9.91363C11.6804 9.92488 11.6691 9.92863 11.6616 9.92863C11.6456 9.92516 11.6304 9.91881 11.6166 9.90988L11.5791 9.87238H11.5754ZM11.5041 9.69238C11.5041 9.69238 11.5679 9.69988 11.5791 9.71113C11.5941 9.72238 11.5979 9.74863 11.5829 9.75613C11.5679 9.76363 11.5529 9.74863 11.5454 9.73738C11.5343 9.72122 11.5218 9.70616 11.5079 9.69238H11.5041ZM11.3691 9.78613C11.3691 9.78613 11.4254 9.81613 11.4441 9.83863C11.4554 9.85363 11.4629 9.86488 11.4441 9.87613C11.4291 9.87613 11.4104 9.84988 11.4104 9.83863C11.3984 9.81981 11.3846 9.80223 11.3691 9.78613Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M11.354 9.86113L11.4103 9.85363C11.429 9.85363 11.4553 9.84988 11.4553 9.86113C11.4553 9.87613 11.4328 9.87988 11.4178 9.87613L11.354 9.86113ZM11.6765 10.0711C11.6765 10.0711 11.7178 10.0449 11.7403 10.0486C11.759 10.0524 11.7665 10.0524 11.7665 10.0636C11.7665 10.0786 11.7403 10.0749 11.7328 10.0749L11.6765 10.0711ZM11.4515 10.0374C11.4515 10.0374 11.4665 10.0149 11.4853 10.0111C11.5003 10.0111 11.5078 10.0111 11.5115 10.0186C11.5115 10.0261 11.4965 10.0411 11.489 10.0411H11.4515V10.0374Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M12.0963 9.99596C12.0963 9.99596 12.0363 10.071 11.9463 10.1085C11.8616 10.1458 11.7684 10.16 11.6763 10.1497C11.5966 10.1484 11.518 10.1304 11.4457 10.0968C11.3733 10.0632 11.3088 10.0148 11.2563 9.95471L11.2713 9.99596L11.3463 10.0935L11.4326 10.131L11.5638 10.1685L11.6876 10.1797H11.7813L11.8938 10.161L11.9651 10.1347L12.0138 10.1047L12.0513 10.0747L12.0963 9.99971V9.99596ZM11.9838 9.77471C11.9838 9.77471 11.9463 9.78596 11.8713 9.74096C11.7963 9.69596 11.7101 9.63596 11.5413 9.63596C11.3726 9.63596 11.3201 9.74846 11.3088 9.75596L11.3838 9.65846L11.4588 9.61721L11.5226 9.60596H11.5788L11.6538 9.62846L11.7176 9.65096L11.7963 9.67721L11.8638 9.71471L11.9463 9.75596L11.9838 9.77471ZM12.2088 9.82721H12.0813C12.0513 9.82721 12.0513 9.83471 12.0438 9.84221C12.0416 9.84734 12.0391 9.85235 12.0363 9.85721L12.0063 9.79346L12.1376 9.77471L12.2126 9.80096L12.2051 9.82346L12.2088 9.82721Z"
                                                                            fill="#04534E" />
                                                                        <path
                                                                            d="M12.0253 10.5133C12.0328 10.5321 12.0478 10.5508 12.0666 10.5508H12.1266L12.2616 10.5396L12.3066 10.4871L12.3366 10.3671L12.3741 10.3221L12.4978 10.2508L12.6028 10.2208L12.6741 10.2133L12.7678 10.1833L12.8391 10.1458L12.8691 10.1008L12.8991 10.0333L12.8691 9.93955L12.7941 9.8383L12.6666 9.78955H12.5616L12.4491 9.8308L12.2428 9.87955C12.2428 9.87955 12.1303 9.9283 12.0816 10.0183C12.0328 10.1046 12.0366 10.1308 12.0253 10.2433C12.0178 10.3633 12.0253 10.5133 12.0253 10.5133Z"
                                                                            fill="#0C8489" stroke="#04534E"
                                                                            stroke-width="0.0625" />
                                                                        <path
                                                                            d="M12.0814 10.4686C12.1189 10.4686 12.0889 10.4048 12.1339 10.3261C12.1789 10.2511 12.2314 10.1536 12.2464 10.1536C12.2614 10.1536 12.2614 10.1686 12.2801 10.1648C12.2951 10.1573 12.3251 10.1348 12.3251 10.1273C12.3251 10.1198 12.3251 10.0786 12.3626 10.0523C12.3926 10.0223 12.4414 9.98109 12.4639 9.97734C12.4864 9.97359 12.5014 9.96609 12.5014 9.97734C12.5051 9.98859 12.4901 10.0036 12.5051 10.0073C12.5201 10.0148 12.5576 10.0111 12.5651 9.98859L12.5726 9.95109C12.5726 9.95109 12.5951 9.93234 12.6401 9.93984C12.6851 9.95109 12.6889 9.94734 12.6926 9.96609C12.6964 9.98109 12.6739 9.98484 12.6776 9.99609V10.0186C12.6851 10.0261 12.6926 10.0561 12.7226 10.0561C12.7526 10.0523 12.7639 10.0336 12.7639 10.0336L12.7751 10.0186C12.7751 10.0186 12.7826 9.99984 12.7714 9.99234C12.7601 9.98484 12.7639 9.97734 12.7714 9.98109C12.7864 9.98484 12.8314 10.0486 12.8464 10.0223C12.8614 9.99609 12.8651 9.95859 12.8539 9.94734C12.8295 9.91403 12.8058 9.88027 12.7826 9.84609L12.6701 9.80859L12.5201 9.81984L12.3701 9.90234L12.2351 9.97734C12.2351 9.97734 12.2276 10.0861 12.2051 10.0636C12.1789 10.0448 12.1451 9.98859 12.1339 10.0073C12.1226 10.0261 12.1001 10.1086 12.0851 10.1498C12.0739 10.1873 12.0326 10.3148 12.0364 10.3598C12.0401 10.4048 12.0664 10.4686 12.0814 10.4686Z"
                                                                            fill="#8CBEBF" />
                                                                        <path
                                                                            d="M12.2167 10.2887C12.2054 10.2887 12.1904 10.3 12.1867 10.3075C12.1792 10.315 12.1754 10.3262 12.1792 10.345C12.1792 10.3562 12.2054 10.3712 12.2054 10.3712H12.2242L12.2617 10.36L12.2729 10.33C12.2729 10.3112 12.2617 10.3075 12.2579 10.3075C12.2441 10.3015 12.2303 10.2952 12.2167 10.2887ZM12.4492 10.1012C12.4267 10.09 12.4192 10.105 12.4117 10.1125V10.1312C12.4117 10.1312 12.4192 10.1612 12.4267 10.1687C12.4379 10.1687 12.4679 10.18 12.4754 10.1687C12.4867 10.1612 12.4942 10.1537 12.4942 10.135C12.4942 10.1162 12.4679 10.1087 12.4679 10.1087L12.4492 10.0975V10.1012ZM12.6367 10.1425C12.6367 10.135 12.6179 10.1312 12.6029 10.135C12.5917 10.135 12.5767 10.15 12.5804 10.1725C12.5879 10.1987 12.6104 10.1987 12.6254 10.195C12.6442 10.1912 12.6404 10.165 12.6404 10.1612L12.6367 10.1425ZM12.0967 10.18C12.0967 10.1912 12.1154 10.2175 12.1417 10.2137C12.1522 10.2132 12.1623 10.2092 12.1704 10.2025C12.1786 10.1957 12.1843 10.1865 12.1867 10.1762C12.1867 10.1612 12.1717 10.1875 12.1492 10.195C12.1267 10.2025 12.1229 10.2025 12.1117 10.195C12.1042 10.18 12.0967 10.18 12.0967 10.18Z"
                                                                            fill="#8CBEBF" />
                                                                        <path
                                                                            d="M12.2729 10.3296C12.2729 10.3296 12.2729 10.3521 12.2579 10.3671C12.2392 10.3783 12.2279 10.3783 12.2204 10.3783C12.2092 10.3783 12.1979 10.3783 12.1904 10.3671L12.1792 10.3408C12.1792 10.3408 12.1979 10.3708 12.2279 10.3633C12.2468 10.3584 12.2629 10.3463 12.2729 10.3296ZM12.7717 10.0183C12.7717 10.0183 12.7717 10.0408 12.7529 10.0521C12.7342 10.0633 12.7267 10.0633 12.7154 10.0633C12.7079 10.0633 12.6929 10.0596 12.6892 10.0483C12.6667 10.0108 12.6779 9.99209 12.6779 9.99209C12.6779 9.99209 12.6929 10.0521 12.7267 10.0483C12.7449 10.0443 12.761 10.0336 12.7717 10.0183ZM12.3255 10.1271C12.3255 10.1271 12.3104 10.1721 12.2804 10.1721C12.2467 10.1721 12.2504 10.1646 12.2542 10.1571C12.2542 10.1533 12.2654 10.1646 12.2804 10.1571C12.2954 10.1571 12.3255 10.1271 12.3255 10.1271ZM12.4117 10.1158C12.4117 10.1158 12.4117 10.1533 12.4192 10.1608C12.4305 10.1758 12.4455 10.1796 12.4567 10.1796C12.468 10.1796 12.4792 10.1796 12.4904 10.1646C12.5017 10.1496 12.4942 10.1346 12.4942 10.1346L12.4867 10.1533C12.4754 10.1646 12.468 10.1646 12.4567 10.1646C12.4455 10.1646 12.4304 10.1646 12.4267 10.1533L12.4117 10.1158ZM12.5729 9.95459C12.5729 9.95459 12.5804 9.98084 12.5617 9.99959C12.5429 10.0221 12.5054 10.0071 12.5054 10.0071C12.5054 10.0071 12.5355 10.0183 12.5505 9.99959C12.5655 9.98459 12.5729 9.95459 12.5729 9.95459Z"
                                                                            fill="#04534E" />
                                                                        <path
                                                                            d="M12.063 10.5396C12.063 10.5396 12.2617 10.5396 12.2767 10.5096C12.2917 10.4834 12.2617 10.3746 12.378 10.2921C12.498 10.2096 12.5917 10.2096 12.6555 10.2059C12.7192 10.1984 12.8542 10.1571 12.8805 10.0371C12.8917 9.96215 12.7942 9.95465 12.7567 9.88715C12.7192 9.81215 12.6217 9.84215 12.6142 9.84215C12.6105 9.84215 12.5017 9.84215 12.453 9.8909C12.4192 9.9209 12.423 9.9584 12.4117 9.9734C12.3967 9.99215 12.2617 9.9734 12.2505 9.9959C12.2355 10.0184 12.2542 10.0596 12.243 10.0709C12.2355 10.0821 12.2055 10.0409 12.2055 10.0409L12.213 9.9359L12.3817 9.8384L12.5692 9.7334L12.7005 9.73715L12.8317 9.80465L12.8955 9.87965C12.8955 9.87965 12.9067 9.90965 12.9142 9.9659C12.9165 9.99115 12.914 10.0166 12.9067 10.0409C12.8767 10.1459 12.768 10.2209 12.6555 10.2284C12.5611 10.2354 12.4704 10.2678 12.393 10.3221C12.3405 10.3596 12.3142 10.5209 12.3142 10.5434C12.3142 10.5621 12.0667 10.5471 12.0667 10.5471V10.5396H12.063Z"
                                                                            fill="#04534E" />
                                                                        <path
                                                                            d="M12.149 10.1535C12.1377 10.1648 12.1227 10.161 12.119 10.1535C12.1115 10.116 12.1302 10.071 12.1302 10.071V10.131C12.134 10.1385 12.1452 10.1348 12.149 10.1423V10.1535ZM12.269 10.131C12.2615 10.1273 12.2652 10.0935 12.269 10.0823C12.2765 10.071 12.3327 10.0298 12.3327 10.0298L12.3102 10.086C12.3027 10.101 12.284 10.1348 12.2727 10.131H12.269ZM12.224 10.3298C12.2127 10.3298 12.2127 10.3148 12.2127 10.2923C12.2127 10.2698 12.2502 10.2323 12.2502 10.2323L12.2352 10.2773L12.2427 10.3148C12.2427 10.326 12.2315 10.3298 12.224 10.3298Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M12.3139 10.2737C12.3139 10.2737 12.2952 10.2962 12.2764 10.3074C12.2577 10.3187 12.2352 10.3337 12.2239 10.3299C12.2089 10.3299 12.2277 10.2999 12.2352 10.2962L12.3139 10.2737ZM12.4827 10.0337C12.4827 10.0337 12.4602 10.0524 12.4489 10.0787C12.4377 10.1049 12.4339 10.1274 12.4452 10.1312C12.4564 10.1387 12.4714 10.1012 12.4752 10.0899L12.4827 10.0337Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M12.5463 10.1196C12.5463 10.1196 12.5275 10.1045 12.5013 10.097C12.4713 10.0895 12.4638 10.0971 12.4563 10.1046C12.4563 10.1121 12.4338 10.1233 12.445 10.1308C12.4525 10.1383 12.4675 10.1196 12.475 10.1196C12.4825 10.1158 12.4938 10.1083 12.5088 10.1121L12.5463 10.1196ZM12.5088 9.9508C12.52 9.96205 12.535 9.9433 12.5463 9.9283C12.5613 9.9133 12.5725 9.8833 12.5725 9.8833L12.535 9.90955C12.52 9.9208 12.5013 9.94705 12.5088 9.9508ZM12.7675 9.94705C12.7675 9.94705 12.73 9.96205 12.7225 9.97705C12.7113 9.99205 12.6963 10.0071 12.7075 10.0146C12.7188 10.0258 12.73 10.0071 12.7375 9.9958L12.7675 9.94705ZM12.6925 10.1196C12.6925 10.1196 12.6813 10.142 12.6588 10.157C12.64 10.172 12.6138 10.1758 12.61 10.1683C12.6063 10.1608 12.6138 10.1458 12.6213 10.1421L12.6513 10.1345C12.6654 10.1307 12.6792 10.1256 12.6925 10.1196Z"
                                                                            fill="#231F20" />
                                                                        <path
                                                                            d="M10.9865 9.71122C11.0458 9.7203 11.1049 9.6563 11.1183 9.56827C11.1318 9.48024 11.0946 9.40151 11.0352 9.39243C10.9759 9.38334 10.9168 9.44734 10.9033 9.53537C10.8899 9.6234 10.9271 9.70213 10.9865 9.71122Z"
                                                                            fill="url(#paint0_radial_4741_224921)" />
                                                                        <path
                                                                            d="M11.0764 9.26123L11.0127 9.41873L11.0652 9.41123L11.0914 9.26873L11.0764 9.26123Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M11.1026 9.18994C11.0801 9.18994 11.0614 9.20494 11.0576 9.22744C11.0576 9.25369 11.0726 9.27619 11.0951 9.27994C11.1176 9.27994 11.1364 9.26494 11.1401 9.24244C11.1401 9.21619 11.1289 9.19369 11.1026 9.18994Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M13.8626 9.59082L13.7051 9.74082L13.7688 9.75582L13.8776 9.61332L13.8626 9.59082Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M13.934 9.52731C13.9211 9.52058 13.906 9.51917 13.892 9.52337C13.878 9.52757 13.8662 9.53705 13.859 9.54981C13.8403 9.57606 13.8478 9.60606 13.874 9.62481C13.9003 9.63606 13.934 9.62481 13.949 9.59856C13.964 9.57606 13.9565 9.54231 13.934 9.52731Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M9.854 8.73602L9.9365 8.91976L9.974 8.86726L9.8765 8.72852L9.854 8.73602Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M9.82011 8.65731C9.79761 8.67231 9.79761 8.70606 9.81636 8.72856C9.83136 8.75106 9.86511 8.75481 9.88386 8.73606C9.90636 8.71731 9.90636 8.68731 9.88761 8.66106C9.87902 8.65183 9.8672 8.64628 9.85461 8.64558C9.84203 8.64488 9.82966 8.64909 9.82011 8.65731Z"
                                                                            fill="#FCCA3E" stroke="#AA8C30"
                                                                            stroke-width="0.025" />
                                                                        <path
                                                                            d="M11.1214 9.19744C11.1214 9.19744 11.1326 9.20119 11.1214 9.19744C11.1026 9.19744 11.0689 9.21244 11.0689 9.23494C11.0689 9.24489 11.0728 9.25443 11.0799 9.26146C11.0869 9.26849 11.0964 9.27244 11.1064 9.27244C11.1251 9.27244 11.0989 9.27994 11.0989 9.27994L11.0726 9.27244L11.0651 9.25744L11.0576 9.23869L11.0614 9.21619L11.0764 9.19744L11.0951 9.18994H11.1064L11.1214 9.19744Z"
                                                                            fill="#AA8C30" />
                                                                        <path
                                                                            d="M11.0841 9.30231C11.0841 9.30231 11.0728 9.3023 11.0653 9.31355C11.0567 9.32742 11.048 9.34117 11.0391 9.3548L11.0766 9.26855L11.0916 9.27605L11.0841 9.30231ZM13.9491 9.5423C13.9491 9.5423 13.9603 9.5573 13.9453 9.5423C13.9303 9.53105 13.8778 9.5348 13.8666 9.56105C13.8516 9.59105 13.8666 9.61356 13.8891 9.62481C13.9116 9.63231 13.8816 9.62481 13.8816 9.62481L13.8553 9.60606L13.8516 9.58355V9.5573L13.8703 9.5348L13.8966 9.52355H13.9228L13.9341 9.53105L13.9491 9.5423Z"
                                                                            fill="#AA8C30" />
                                                                        <path
                                                                            d="M13.8514 9.6472C13.8514 9.6472 13.8402 9.63971 13.8214 9.6472L13.7689 9.68096L13.8552 9.59846L13.8739 9.62096L13.8514 9.6472ZM9.83893 8.64596C9.83893 8.64596 9.85393 8.64221 9.83893 8.64971C9.82018 8.66096 9.80893 8.70221 9.82768 8.72471C9.85018 8.74346 9.87643 8.73971 9.89143 8.72471C9.90643 8.70596 9.89143 8.73221 9.89143 8.73221L9.86518 8.74721H9.84268L9.82018 8.73596L9.80518 8.71346V8.68346L9.81268 8.66471L9.82393 8.65346L9.83518 8.64596H9.83893Z"
                                                                            fill="#AA8C30" />
                                                                        <path
                                                                            d="M9.89916 8.76584C9.89916 8.76584 9.88791 8.76959 9.89166 8.78834L9.90291 8.84459L9.85791 8.74334L9.88416 8.73584L9.89916 8.76584Z"
                                                                            fill="#AA8C30" />
                                                                        <path
                                                                            d="M9.93899 9.1335C9.98239 9.21831 10.0639 9.26335 10.1211 9.2341C10.1782 9.20486 10.1894 9.11239 10.146 9.02759C10.1026 8.94278 10.0211 8.89773 9.9639 8.92698C9.90674 8.95623 9.89559 9.04869 9.93899 9.1335Z"
                                                                            fill="url(#paint1_radial_4741_224921)" />
                                                                        <path
                                                                            d="M9.84636 9.04338C9.84636 9.04338 9.88386 9.05088 9.90261 9.04338C9.92136 9.03588 9.92511 9.01713 9.92886 9.01338C9.93261 9.00963 9.94011 8.99088 9.93636 8.97588C9.92803 8.95574 9.91521 8.93778 9.89886 8.92338L9.86136 8.91963C9.85761 8.91588 9.86136 8.90463 9.85386 8.90088C9.84261 8.90088 9.79011 8.96088 9.79761 8.96838C9.80886 8.97963 9.81261 8.96838 9.81636 8.97213V9.01338C9.81636 9.02463 9.84636 9.04338 9.84636 9.04338Z"
                                                                            fill="#E92736" />
                                                                        <path
                                                                            d="M9.89909 8.92737C9.90284 8.93862 9.92534 8.96487 9.93284 8.96487C9.94034 8.97237 9.96284 8.97237 9.97034 8.96487C9.98159 8.96487 10.0078 8.93862 10.0078 8.92737C10.0087 8.91845 10.0074 8.90945 10.0041 8.90112C9.99659 8.88987 10.0003 8.86362 9.98909 8.85987C9.98159 8.85987 9.97784 8.85612 9.97034 8.84862V8.82237C9.95909 8.81112 9.87284 8.86362 9.88034 8.87487C9.88784 8.88237 9.89534 8.87487 9.89909 8.87862V8.92737Z"
                                                                            fill="#E92736" />
                                                                        <path
                                                                            d="M10.094 8.90846C10.1015 8.89346 10.0978 8.85221 10.0903 8.84096C10.0828 8.82971 10.0678 8.82971 10.064 8.82596C10.064 8.82221 10.0753 8.81846 10.0753 8.80721C10.0753 8.79596 9.97777 8.81096 9.98527 8.82221C9.99277 8.83346 10.0078 8.82596 10.0078 8.83346C10.0078 8.84096 9.99278 8.84846 9.98903 8.85596L10.0003 8.89721C10.0003 8.90471 10.0003 8.91221 10.0078 8.91596L10.0303 8.92346H10.0828C10.0865 8.91971 10.0903 8.91971 10.094 8.90471V8.90846ZM10.919 9.38845C10.919 9.38845 10.9303 9.4147 10.949 9.42595H10.9865L11.009 9.4072C11.0165 9.3997 11.024 9.36221 11.0203 9.35471C11.0203 9.34721 11.0015 9.33221 11.0015 9.32471C11.0015 9.31721 11.0128 9.31721 11.009 9.30971C11.0053 9.30221 10.934 9.30221 10.934 9.31721C10.934 9.32846 10.9453 9.32471 10.9415 9.32846C10.9415 9.33596 10.9228 9.34721 10.919 9.35471C10.9115 9.35846 10.919 9.39221 10.919 9.39221V9.38845Z"
                                                                            fill="#E92736" />
                                                                        <path
                                                                            d="M11.0165 9.35487C11.0165 9.36237 11.009 9.39237 11.0165 9.39612C11.0165 9.40362 11.0278 9.42237 11.0353 9.42612H11.0803C11.0875 9.42033 11.0927 9.41248 11.0953 9.40362C11.099 9.39237 11.1178 9.37737 11.114 9.36987C11.1103 9.36237 11.1065 9.36237 11.1103 9.35487C11.1103 9.34737 11.1215 9.34737 11.1215 9.33612C11.1215 9.32487 11.0428 9.29862 11.039 9.30987C11.039 9.32112 11.0503 9.31737 11.0465 9.32487C11.0465 9.33237 11.0203 9.34737 11.0165 9.35487Z"
                                                                            fill="#E92736" />
                                                                        <path
                                                                            d="M11.1477 9.46728C11.1589 9.45978 11.1852 9.43353 11.1852 9.42603C11.1852 9.41103 11.1739 9.40353 11.1777 9.39978L11.1964 9.39603C11.2002 9.38853 11.1364 9.33603 11.1327 9.34728C11.1327 9.35853 11.1439 9.36228 11.1402 9.36603L11.1139 9.36978C11.1102 9.37353 11.0952 9.39228 11.0952 9.39978C11.0952 9.40728 11.0839 9.40728 11.0877 9.41853L11.0952 9.43353C11.0989 9.44103 11.1252 9.46728 11.1327 9.46728H11.1477ZM13.6227 9.67353C13.6227 9.67353 13.6227 9.70353 13.6377 9.71853C13.6489 9.72978 13.6602 9.72978 13.6677 9.73353H13.6939C13.7092 9.72419 13.7221 9.71134 13.7314 9.69603C13.7314 9.68478 13.7202 9.66603 13.7239 9.65853C13.7277 9.65103 13.7352 9.65853 13.7352 9.65103C13.7352 9.63978 13.6752 9.60978 13.6714 9.62103C13.6677 9.62853 13.6789 9.63228 13.6714 9.63603L13.6414 9.64353C13.6339 9.64353 13.6227 9.67353 13.6227 9.67353Z"
                                                                            fill="#E92736" />
                                                                        <path
                                                                            d="M13.7238 9.69213L13.6938 9.72213C13.6938 9.72963 13.6938 9.74838 13.7013 9.75213C13.7013 9.75963 13.7276 9.77463 13.7388 9.77088C13.7426 9.77088 13.7501 9.77088 13.7576 9.76338C13.7651 9.75963 13.7876 9.75588 13.7876 9.74838L13.7913 9.73338C13.7951 9.72963 13.8063 9.73338 13.8138 9.72588C13.8213 9.71838 13.7688 9.66213 13.7613 9.66963C13.7538 9.67713 13.7613 9.68088 13.7613 9.68463C13.7538 9.68463 13.7276 9.68463 13.7238 9.69213Z"
                                                                            fill="#E92736" />
                                                                        <path
                                                                            d="M13.7388 9.83123H13.7913L13.8063 9.81248C13.81 9.81248 13.81 9.81998 13.8213 9.81998C13.8288 9.81998 13.8213 9.74498 13.81 9.75248C13.8025 9.75623 13.8063 9.77123 13.8025 9.76748C13.795 9.76748 13.7913 9.75623 13.7838 9.75623C13.7712 9.75482 13.7584 9.7561 13.7463 9.75998C13.7463 9.75998 13.7388 9.75998 13.735 9.76748L13.7275 9.78248V9.81998C13.7313 9.82748 13.7275 9.82748 13.7388 9.83123Z"
                                                                            fill="#E92736" />
                                                                        <path
                                                                            d="M9.90639 8.9608C9.91389 8.9758 9.90264 9.0058 9.89514 9.0133C9.89139 9.0208 9.84639 9.00955 9.84639 9.00205C9.84639 8.99455 9.84264 8.97955 9.84639 8.97205C9.85389 8.96455 9.86889 8.9458 9.88014 8.94955C9.89139 8.94955 9.90264 8.9608 9.90639 8.96455V8.9608ZM9.91764 8.91205C9.91014 8.9233 9.91764 8.93455 9.92514 8.9383C9.92889 8.9458 9.96264 8.9533 9.97014 8.94955C9.97764 8.94205 9.99264 8.8933 9.98514 8.8858C9.97764 8.8783 9.96264 8.8783 9.95889 8.8783C9.95139 8.8783 9.92139 8.9008 9.91764 8.91205ZM10.0189 8.8633V8.88955C10.0264 8.8933 10.0451 8.9083 10.0564 8.9083C10.0676 8.9083 10.0751 8.8708 10.0751 8.86705C10.0751 8.85955 10.0714 8.8558 10.0639 8.85205L10.0189 8.85955V8.8633ZM10.9976 9.37705C10.9976 9.39205 10.9714 9.4033 10.9639 9.4033C10.9564 9.4033 10.9376 9.3658 10.9414 9.3658C10.9451 9.3583 10.9526 9.34705 10.9601 9.34705C10.9676 9.34705 10.9864 9.34705 10.9939 9.35455L11.0014 9.3808L10.9976 9.37705ZM11.0389 9.35455C11.0314 9.3583 11.0276 9.36955 11.0276 9.37705C11.0276 9.38455 11.0389 9.40705 11.0464 9.4108C11.0539 9.4108 11.0914 9.39205 11.0951 9.38455C11.0951 9.37705 11.0876 9.3658 11.0801 9.36205L11.0426 9.35455H11.0389ZM11.1289 9.39205C11.1214 9.39205 11.1139 9.4033 11.1139 9.4108C11.1139 9.4108 11.1139 9.4333 11.1251 9.4408C11.1326 9.4483 11.1551 9.4333 11.1589 9.42955V9.41455C11.1589 9.40705 11.1289 9.39205 11.1289 9.39205ZM13.7014 9.69955C13.6939 9.70705 13.6676 9.70705 13.6639 9.69955C13.6526 9.69955 13.6526 9.66205 13.6601 9.66205C13.6639 9.6583 13.6751 9.6508 13.6826 9.65455C13.6901 9.65455 13.7051 9.6658 13.7051 9.67705L13.7014 9.69955ZM13.7389 9.7033C13.7276 9.7033 13.7201 9.70705 13.7164 9.71455C13.7126 9.7183 13.7089 9.7408 13.7164 9.7483C13.7201 9.75205 13.7614 9.7558 13.7651 9.7483V9.72955L13.7389 9.7033ZM13.7764 9.7783H13.7576C13.7539 9.7783 13.7426 9.7933 13.7426 9.80455C13.7426 9.81205 13.7689 9.8158 13.7726 9.8158L13.7839 9.8083L13.7801 9.7783H13.7764Z"
                                                                            fill="#F7E204" />
                                                                        <path
                                                                            d="M13.4885 9.97742C13.519 10.0112 13.5999 9.98799 13.669 9.9255C13.7382 9.86302 13.7695 9.78496 13.7389 9.75115C13.7084 9.71735 13.6275 9.74059 13.5584 9.80308C13.4892 9.86556 13.4579 9.94362 13.4885 9.97742Z"
                                                                            fill="url(#paint2_radial_4741_224921)" />
                                                                        <path
                                                                            d="M10.7167 7.4725C10.7167 7.4725 10.5742 7.48375 10.473 7.46875C10.3717 7.45375 10.398 7.195 10.3942 7.1875C10.3942 7.18 10.3342 7.12 10.3417 7.06375C10.353 7.0075 10.5367 6.8575 10.5592 6.84625C10.578 6.8425 10.6155 6.8575 10.6155 6.8575C10.6155 6.8575 10.6605 6.8125 10.6755 6.8125C10.6905 6.8125 10.7092 6.83875 10.7055 6.85C10.698 6.86125 10.6342 6.89875 10.6305 6.925C10.623 6.955 10.6305 6.98125 10.6117 7.01125C10.593 7.0375 10.5592 7.075 10.5555 7.10125C10.5517 7.12375 10.5405 7.1425 10.5555 7.15375C10.5742 7.16125 10.6342 7.15375 10.6867 7.13125C10.7392 7.105 10.7617 7.075 10.7655 7.07875C10.773 7.07875 10.7355 7.1425 10.6792 7.16875C10.623 7.19125 10.5855 7.2175 10.5555 7.21375C10.5555 7.21375 10.5255 7.28875 10.623 7.29625C10.7205 7.29625 10.773 7.27375 10.773 7.27375L10.7167 7.4725ZM10.1542 8.0725C10.1542 8.0725 10.2292 8.1025 10.2292 8.185C10.2292 8.2675 10.1505 8.33875 10.1542 8.485C10.1542 8.635 10.1767 8.635 10.3717 8.79625C10.3997 8.82165 10.4204 8.854 10.4317 8.89C10.443 8.93875 10.4767 9.22375 10.6642 9.22375C10.8517 9.22375 10.8817 9.1 10.8817 9.1L10.7992 8.98375C10.7992 8.98375 10.7355 9.0025 10.698 8.995C10.6784 8.98969 10.6603 8.97978 10.6453 8.96608C10.6303 8.95238 10.6188 8.9353 10.6117 8.91625C10.5892 8.87125 10.5855 8.7625 10.5517 8.71375C10.4767 8.59375 10.3342 8.575 10.3305 8.45125C10.3305 8.32375 10.4167 8.3125 10.3942 8.1625C10.368 8.0125 10.1917 7.945 10.1917 7.945L10.1205 7.915L10.0942 8.065L10.1542 8.0725Z"
                                                                            fill="#A8AC71" />
                                                                        <path
                                                                            d="M10.6755 7.03352C10.7392 7.01852 10.7017 6.85352 10.7017 6.85352L10.6567 6.89102C10.6567 6.89102 10.6867 6.92852 10.6867 6.96602C10.6867 7.00352 10.6755 7.03352 10.6755 7.03352Z"
                                                                            fill="#F1A720" />
                                                                        <path
                                                                            d="M10.7917 8.67965L10.7579 8.6534C10.7354 8.6384 10.6379 8.5559 10.6529 8.31965C10.6717 8.04965 11.0654 7.90715 11.0879 7.80215C11.1179 7.68215 11.2042 7.6334 10.8929 7.38965L10.8179 7.47215L10.9492 7.56965C10.9492 7.56965 10.9754 7.55465 10.9792 7.59215C10.9792 7.62965 10.9417 7.6559 10.9342 7.6859C10.9267 7.71215 10.7317 7.84715 10.7167 7.8584L10.6042 7.9484C10.6042 7.9484 10.5554 7.99715 10.5104 8.10215C10.4617 8.20715 10.4842 8.34215 10.4842 8.34215C10.4842 8.34215 10.4842 8.62715 10.7917 8.67965Z"
                                                                            fill="#A8AC71" />
                                                                        <path
                                                                            d="M10.6 8.82976L10.6225 8.93101L10.5588 8.95351H10.5325L10.5138 8.96101L10.465 9.00601H10.4538C10.4538 9.00601 10.4463 9.00601 10.4425 8.97601C10.4425 8.94601 10.435 8.91976 10.435 8.91976L10.495 8.94602H10.5175L10.5288 8.94226L10.555 8.88601L10.6 8.82976ZM10.42 8.84851L10.39 8.81101L10.3525 8.77727L10.3975 8.75477H10.4425L10.435 8.81101L10.42 8.84851ZM10.5213 8.68726C10.5213 8.68726 10.5513 8.69851 10.5588 8.72476L10.5813 8.76976L10.5063 8.76226L10.4538 8.74727L10.4913 8.69476L10.5213 8.68726ZM10.495 9.13351C10.495 9.13351 10.48 9.12226 10.4688 9.09976L10.4538 9.03976L10.5025 9.02851L10.5588 9.05476H10.5738L10.5625 9.08476L10.5063 9.13351H10.495ZM10.6825 8.97976C10.6825 8.97976 10.645 8.96476 10.6375 8.94226C10.63 8.92351 10.6225 8.92727 10.6225 8.92727L10.6113 8.98351L10.5925 9.03976L10.6 9.04726L10.6413 9.03601L10.675 9.00226L10.6863 8.97976H10.6825ZM10.5063 9.15976L10.5588 9.18601C10.5888 9.20476 10.6038 9.20476 10.6038 9.20476L10.6263 9.18226L10.6525 9.13351V9.12976L10.54 9.14101L10.5063 9.15976ZM10.6713 9.11476L10.7725 9.05476L10.7763 9.00226L10.7575 8.98726H10.7013L10.6825 9.05476L10.6713 9.11476ZM10.6038 9.20851C10.6038 9.20851 10.6713 9.23851 10.7913 9.19351C10.8438 9.17476 10.855 9.14851 10.855 9.14851L10.8063 9.12976L10.7613 9.16726L10.6038 9.20476V9.20851ZM10.51 8.44727L10.495 8.39477C10.4875 8.36477 10.4913 8.35352 10.4913 8.35352L10.525 8.37227L10.5738 8.40977L10.5363 8.43602L10.51 8.44727ZM10.5925 8.58602L10.5588 8.54852C10.5505 8.53393 10.543 8.51891 10.5363 8.50352L10.5738 8.51102L10.615 8.53352L10.5963 8.58602H10.5925Z"
                                                                            fill="#78732E" />
                                                                        <path
                                                                            d="M10.3716 7.01097C10.3641 7.03722 10.3566 7.08222 10.3904 7.08597C10.4054 7.09347 10.4766 7.08597 10.5591 6.99597C10.5966 6.95097 10.5966 6.90597 10.5966 6.90597L10.6154 6.85722C10.6154 6.85722 10.5816 6.83472 10.5329 6.86472C10.4841 6.89472 10.3716 7.01472 10.3716 7.01472V7.01097Z"
                                                                            fill="#C6C7A6" />
                                                                        <path
                                                                            d="M10.5926 6.89865C10.6009 6.89865 10.6076 6.89194 10.6076 6.88365C10.6076 6.87537 10.6009 6.86865 10.5926 6.86865C10.5844 6.86865 10.5776 6.87537 10.5776 6.88365C10.5776 6.89194 10.5844 6.89865 10.5926 6.89865Z"
                                                                            fill="#1C242F" />
                                                                        <path
                                                                            d="M10.4876 6.8983C10.4649 6.91808 10.4436 6.93938 10.4238 6.96205C10.4238 6.96205 10.4763 6.94705 10.5213 6.9058C10.5438 6.8833 10.5963 6.8758 10.6188 6.87955C10.6338 6.8833 10.6263 6.86455 10.6188 6.8608C10.6076 6.84955 10.5663 6.8458 10.5588 6.84955L10.4876 6.8983Z"
                                                                            fill="#A8AC71" />
                                                                        <path
                                                                            d="M10.6526 8.41728V8.33478L10.6189 8.36478L10.5889 8.40603L10.6376 8.42478L10.6526 8.41728ZM10.4839 8.31978V8.23353C10.4839 8.19603 10.5026 8.11728 10.5026 8.11728L10.5251 8.16978L10.5814 8.25978L10.6001 8.27478L10.5514 8.31228L10.4989 8.32728L10.4839 8.31978ZM10.6526 8.29728L10.6639 8.25978C10.6676 8.23728 10.6826 8.20728 10.6826 8.20728V8.21103C10.6565 8.23095 10.6315 8.25223 10.6076 8.27478L10.6376 8.30103H10.6564L10.6526 8.29728ZM10.5176 8.07603C10.5176 8.07603 10.5251 8.05353 10.5551 8.01978L10.6039 7.95228L10.6264 8.04228L10.6414 8.11728V8.13228L10.6151 8.13978C10.6076 8.13978 10.5551 8.13978 10.5476 8.12853L10.5176 8.07978V8.07603ZM10.6976 8.18478L10.7276 8.15103L10.7651 8.11353L10.6451 8.13603L10.6639 8.17353L10.6939 8.18478H10.6976ZM10.6226 7.93353C10.6226 7.93353 10.6339 7.93353 10.6676 7.89603C10.6976 7.86603 10.7164 7.86978 10.7164 7.86978L10.7276 7.99728L10.6676 7.97853L10.6226 7.93353Z"
                                                                            fill="#78732E" />
                                                                        <path
                                                                            d="M10.7729 8.10594L10.8479 8.03094L10.7242 7.99344L10.7467 8.07969L10.7729 8.10594ZM10.8254 7.91094L10.8329 7.78719C10.8329 7.78719 10.8067 7.79844 10.7767 7.82469L10.7317 7.85844L10.7467 7.88094L10.7842 7.90719H10.8217L10.8254 7.91094ZM10.9304 7.79094V7.68594C10.9304 7.68594 10.9117 7.71594 10.8929 7.73094L10.8592 7.76094L10.8929 7.78344H10.9304V7.79094ZM10.9754 7.92219L11.0354 7.87344C11.0577 7.85565 11.0768 7.83407 11.0917 7.80969L10.9342 7.79844L10.9417 7.86219L10.9792 7.92219H10.9754ZM10.6154 7.40469L10.6079 7.47219H10.7392L10.7054 7.42719L10.6679 7.40469L10.6304 7.36719L10.6154 7.40469ZM10.8629 8.01219C10.8704 8.01219 10.9042 7.98219 10.9229 7.96719C10.9379 7.94844 10.9679 7.92969 10.9679 7.92969L10.8442 7.91844V8.00094L10.8629 8.01219ZM11.0992 7.79094C11.0992 7.79094 11.1142 7.74219 11.1104 7.69344C11.1104 7.64844 11.1029 7.62594 11.1029 7.62594L11.0092 7.68969L11.0242 7.73469L11.0617 7.77219L11.0992 7.79094Z"
                                                                            fill="#78732E" />
                                                                        <path
                                                                            d="M10.9414 7.67871C10.9414 7.67871 10.9677 7.64121 10.9714 7.62621V7.61121H11.0464L11.0877 7.61871H11.0952L11.0614 7.65996L11.0164 7.68621L10.9602 7.69371L10.9414 7.67871ZM11.0914 7.60371L11.0427 7.52871C11.0277 7.50246 11.0127 7.49121 11.0127 7.49121L10.9752 7.59246V7.60371H11.0877H11.0914Z"
                                                                            fill="#78732E" />
                                                                        <path
                                                                            d="M10.1842 8.33082L10.1729 8.36082C10.1729 8.36082 10.2217 8.33457 10.2592 8.33457C10.2967 8.33457 10.3379 8.38332 10.3379 8.38332L10.3454 8.34957C10.3454 8.34957 10.2967 8.30082 10.2629 8.30082C10.2329 8.29707 10.1879 8.33082 10.1879 8.33082H10.1842ZM10.2104 8.11332L10.2217 8.12832C10.2217 8.13207 10.2254 8.09082 10.2742 8.07207C10.3267 8.04957 10.3492 8.06832 10.3492 8.06832C10.3492 8.06832 10.3417 8.03832 10.3192 8.03082C10.2967 8.02707 10.2779 8.03082 10.2517 8.04957C10.2322 8.06657 10.218 8.08865 10.2104 8.11332ZM10.3754 8.27832C10.3754 8.27832 10.3529 8.22582 10.3154 8.21832C10.2742 8.20707 10.2217 8.23707 10.2217 8.23707L10.2142 8.26332C10.2142 8.26332 10.2704 8.23332 10.3079 8.24832C10.3492 8.26707 10.3642 8.31207 10.3642 8.31207L10.3754 8.27457V8.27832ZM10.1879 8.08707L10.2029 8.10582C10.2029 8.10582 10.1954 8.05332 10.2217 8.02707C10.2334 8.01254 10.2473 7.9999 10.2629 7.98957L10.2404 7.97832C10.2404 7.97832 10.2067 7.99707 10.1954 8.01957C10.1865 8.04088 10.1839 8.06432 10.1879 8.08707ZM10.1692 8.00082C10.1804 7.97082 10.2142 7.96332 10.2142 7.96332L10.2029 7.95207H10.1842C10.1842 7.95207 10.1654 7.96332 10.1504 7.98957C10.1392 8.02332 10.1392 8.06457 10.1392 8.06457L10.1617 8.07582C10.1617 8.07582 10.1579 8.02332 10.1692 8.00082ZM10.4617 7.28082C10.4954 7.26582 10.5179 7.26957 10.5179 7.26957C10.5179 7.26957 10.4692 7.31832 10.4917 7.37832C10.4654 7.42707 10.4579 7.46457 10.4579 7.46457H10.4842L10.4992 7.39707C10.5292 7.44582 10.5742 7.47207 10.5742 7.47207H10.6117C10.6117 7.47207 10.6117 7.42332 10.6267 7.38207H10.6304C10.6502 7.40687 10.6761 7.42622 10.7054 7.43832V7.42332C10.7054 7.42332 10.6642 7.40082 10.6417 7.36707L10.6379 7.36332C10.6535 7.33577 10.677 7.31355 10.7054 7.29957L10.7317 7.32207L10.7392 7.31457L10.7204 7.28832H10.6979L10.6304 7.35207C10.6187 7.33429 10.6087 7.31546 10.6004 7.29582L10.5854 7.28832C10.5854 7.28832 10.5442 7.29207 10.5104 7.35207C10.5029 7.30707 10.5517 7.26207 10.5517 7.26207V7.24332L10.4617 7.26582C10.4242 7.27707 10.3979 7.31082 10.3979 7.31082V7.34082C10.3979 7.34082 10.4354 7.29957 10.4617 7.28082ZM10.5179 7.36332C10.5404 7.32582 10.5929 7.30707 10.5929 7.30707C10.5929 7.30707 10.5929 7.33332 10.6192 7.37082C10.6004 7.40457 10.5892 7.45332 10.5892 7.45332C10.5892 7.45332 10.5517 7.43082 10.5179 7.37832C10.515 7.37486 10.5125 7.37109 10.5104 7.36707L10.5179 7.36332ZM10.2329 8.15457V8.18457C10.2329 8.18457 10.2629 8.15082 10.3079 8.14707C10.3529 8.14707 10.3942 8.18457 10.3942 8.18457C10.3942 8.18457 10.3942 8.14707 10.3867 8.13957C10.3829 8.13957 10.3454 8.11707 10.3117 8.11707C10.2779 8.11707 10.2329 8.15457 10.2329 8.15457ZM11.0354 7.73457L11.0167 7.69707L11.0392 7.68582C11.0622 7.66785 11.0836 7.64776 11.1029 7.62582L11.0879 7.60332H11.0279L10.9754 7.59957L10.9942 7.53582L11.0167 7.48332L10.9942 7.46457C10.9942 7.46457 11.0017 7.48332 10.9642 7.48707C10.9267 7.49082 10.8592 7.45707 10.8592 7.45707V7.47207L10.9529 7.49832C10.9754 7.49832 10.9904 7.49457 10.9979 7.48707L10.9792 7.53582L10.9679 7.57332L10.9754 7.58082V7.61082L11.0279 7.61457L11.0879 7.61832C11.0879 7.61832 11.0579 7.65582 11.0242 7.67457C11.0204 7.67481 11.0167 7.67481 11.0129 7.67457L10.9754 7.61832L10.9717 7.63707L10.9979 7.68207C10.9791 7.68366 10.9601 7.6824 10.9417 7.67832L10.9267 7.69332V7.78707L10.8592 7.76457L10.8479 7.77582V7.77207L10.8329 7.78707C10.8329 7.78707 10.8179 7.83957 10.8217 7.90332V7.90707C10.7876 7.89967 10.7564 7.88277 10.7317 7.85832L10.7167 7.86957C10.7167 7.86957 10.7054 7.92207 10.7167 7.98957C10.6679 7.97832 10.6229 7.93332 10.6229 7.93332L10.6042 7.95207C10.6106 8.01114 10.6193 8.06994 10.6304 8.12832C10.6217 8.12895 10.6129 8.12895 10.6042 8.12832C10.5517 8.12832 10.5179 8.07957 10.5179 8.07957L10.5029 8.11707C10.5029 8.11707 10.5254 8.21832 10.5779 8.26707L10.5929 8.27457C10.5442 8.31207 10.4879 8.31957 10.4879 8.31957V8.35332C10.5148 8.37288 10.5424 8.39164 10.5704 8.40957C10.5531 8.42592 10.5327 8.43866 10.5104 8.44707L10.5179 8.46582L10.5854 8.41707L10.6529 8.43582V8.41707L10.5967 8.40582L10.6004 8.40207C10.6192 8.38707 10.6529 8.33457 10.6529 8.33457V8.29707C10.6529 8.29707 10.6342 8.29707 10.6117 8.27457C10.6792 8.22957 10.6829 8.20707 10.6829 8.20707L10.6979 8.18457C10.6979 8.18457 10.6717 8.17332 10.6567 8.13957L10.7654 8.11332L10.7729 8.10582C10.7729 8.10582 10.7467 8.06082 10.7354 8.00832L10.8479 8.03082L10.8629 8.01582L10.8442 7.92582C10.9117 7.92582 10.9642 7.93332 10.9642 7.93332L10.9754 7.92207C10.9754 7.92207 10.9379 7.85082 10.9379 7.80957C10.9504 7.81088 10.9629 7.81088 10.9754 7.80957H11.0879L11.0992 7.79082C11.0992 7.79082 11.0467 7.75332 11.0354 7.73457ZM10.6417 8.31582C10.6417 8.31582 10.6229 8.35332 10.5892 8.39082L10.5817 8.39832C10.5753 8.39619 10.569 8.39368 10.5629 8.39082C10.5217 8.36832 10.5104 8.34207 10.5104 8.34207L10.6042 8.28207L10.6417 8.31582ZM10.6754 8.19582L10.6004 8.27082C10.5949 8.26497 10.5899 8.2587 10.5854 8.25207C10.5554 8.20707 10.5104 8.17332 10.5179 8.10957C10.5179 8.10957 10.5442 8.15457 10.6004 8.14707C10.613 8.14627 10.6255 8.14502 10.6379 8.14332C10.6529 8.18082 10.6754 8.19582 10.6754 8.19582ZM10.7504 8.10207L10.6492 8.12832C10.6476 8.12213 10.6464 8.11588 10.6454 8.10957C10.6267 8.04957 10.6267 7.95957 10.6267 7.95957C10.6267 7.95957 10.6642 7.98957 10.7242 8.00457L10.7504 8.10207ZM10.7317 7.98957C10.7242 7.93707 10.7354 7.88082 10.7354 7.88082C10.7354 7.88082 10.7654 7.91082 10.8217 7.91832C10.8254 7.97457 10.8329 7.99707 10.8329 7.99707L10.7317 7.99332V7.98957ZM10.9492 7.90707C10.9492 7.90707 10.9117 7.92207 10.8442 7.91082C10.8441 7.90457 10.8441 7.89832 10.8442 7.89207C10.8417 7.85461 10.8417 7.81703 10.8442 7.77957L10.9304 7.80582C10.932 7.84027 10.9383 7.87434 10.9492 7.90707ZM10.9492 7.79082H10.9417V7.68582C10.9417 7.68582 10.9792 7.69707 11.0054 7.69332C11.0129 7.70832 11.0054 7.71207 11.0242 7.73832C11.0392 7.76457 11.0654 7.78707 11.0654 7.78707C11.0654 7.78707 10.9792 7.79457 10.9454 7.78707L10.9492 7.79082ZM10.6642 8.48832L10.6604 8.46957C10.6604 8.46957 10.6229 8.49582 10.6154 8.52207C10.6115 8.52119 10.6078 8.51994 10.6042 8.51832L10.5292 8.48832L10.5367 8.50332L10.6042 8.53332H10.6117L10.5929 8.58582L10.6004 8.59707L10.6192 8.53332L10.6642 8.53707L10.6567 8.56707L10.6417 8.62332L10.6604 8.63457H10.7354L10.7242 8.61957L10.6979 8.61582H10.6567L10.6679 8.57082L10.6792 8.54082L10.6679 8.51457L10.6304 8.52207C10.6391 8.50854 10.6506 8.49703 10.6642 8.48832ZM10.2404 8.43957C10.2892 8.43957 10.3267 8.47332 10.3267 8.47332V8.45082C10.3267 8.45082 10.2892 8.39832 10.2479 8.39832C10.2029 8.39832 10.1542 8.44332 10.1542 8.44332V8.48832C10.1542 8.48832 10.1917 8.43957 10.2404 8.43957ZM10.7392 9.16707C10.6904 9.18957 10.6379 9.18957 10.6379 9.18957L10.6679 9.13332C10.7617 9.10332 10.7804 9.04332 10.7804 9.04332L10.7729 9.01707C10.7729 9.01707 10.7504 9.07707 10.6754 9.10707C10.6904 9.06207 10.7017 8.98707 10.7017 8.98707L10.6754 8.97957C10.6754 8.97957 10.6379 9.02832 10.6004 9.03957C10.6165 9.00795 10.6267 8.97363 10.6304 8.93832L10.6192 8.91957C10.6192 8.91957 10.5929 8.94207 10.5554 8.94957C10.548 8.95083 10.5404 8.95083 10.5329 8.94957C10.5554 8.91957 10.5967 8.82957 10.5967 8.82957L10.5892 8.81082C10.5892 8.81082 10.5592 8.88957 10.5254 8.93082C10.5218 8.93591 10.518 8.94091 10.5142 8.94582C10.4767 8.93457 10.4317 8.90832 10.4317 8.90832L10.4354 8.91957C10.4354 8.91957 10.4654 8.94207 10.5029 8.95707C10.4872 8.97259 10.4709 8.9876 10.4542 9.00207V9.03957L10.5667 9.05457C10.5292 9.11457 10.4917 9.13332 10.4917 9.13332L10.5104 9.15957C10.5104 9.15957 10.5592 9.15957 10.6492 9.13707C10.6267 9.18207 10.6042 9.20457 10.6042 9.20457C10.6042 9.20457 10.6867 9.21207 10.7429 9.18207C10.7992 9.15207 10.8179 9.12207 10.8179 9.12207L10.8029 9.10707C10.8029 9.10707 10.7879 9.14457 10.7392 9.16707ZM10.4804 9.01707L10.5254 8.96082C10.5854 8.97207 10.6004 8.95707 10.6004 8.95707C10.6004 8.95707 10.6117 8.98707 10.5779 9.04332C10.5367 9.04332 10.4804 9.01332 10.4804 9.01332V9.01707ZM10.5329 9.12957L10.5817 9.06957L10.5929 9.05832C10.6492 9.05832 10.6792 9.00957 10.6792 9.00957C10.6792 9.00957 10.6867 9.05457 10.6604 9.11082C10.5892 9.13707 10.5329 9.12957 10.5329 9.12957ZM10.4617 8.76207C10.5179 8.76207 10.5854 8.78832 10.5854 8.78832L10.5779 8.76207L10.4692 8.73957C10.4822 8.71364 10.5032 8.6926 10.5292 8.67957L10.5104 8.66832C10.5104 8.66832 10.4879 8.67207 10.4579 8.72457C10.4551 8.72943 10.4526 8.73444 10.4504 8.73957C10.4467 8.73943 10.4429 8.73943 10.4392 8.73957C10.4074 8.74056 10.3765 8.74959 10.3492 8.76582L10.3567 8.78082C10.3567 8.78082 10.3979 8.76207 10.4429 8.76207C10.4327 8.79163 10.4239 8.82166 10.4167 8.85207L10.4279 8.87457L10.4654 8.76207H10.4617ZM10.3492 8.52957L10.3379 8.50332C10.3379 8.50332 10.2817 8.48082 10.2367 8.50332C10.1954 8.52207 10.1617 8.57457 10.1617 8.57457L10.1804 8.60832C10.1804 8.60832 10.2104 8.55207 10.2517 8.53707C10.2892 8.52582 10.3492 8.52957 10.3492 8.52957ZM10.4617 8.61957L10.4242 8.59707C10.4242 8.59707 10.3604 8.61582 10.3417 8.63832C10.3192 8.66082 10.3004 8.71707 10.3042 8.73207C10.3117 8.75082 10.3304 8.75832 10.3304 8.75832C10.3304 8.75832 10.3417 8.70207 10.3717 8.67207C10.4017 8.64207 10.4617 8.61957 10.4617 8.61957ZM10.3154 8.60082C10.3369 8.58221 10.3627 8.56931 10.3904 8.56332L10.3642 8.54457C10.3642 8.54457 10.3079 8.55207 10.2817 8.57832C10.2517 8.60457 10.2142 8.65707 10.2142 8.65707L10.2479 8.69082C10.2479 8.69082 10.2929 8.62332 10.3154 8.60082ZM10.5104 6.92457V6.92082C10.5404 6.88332 10.5704 6.88332 10.5817 6.88332H10.6042C10.5898 6.91299 10.5797 6.94456 10.5742 6.97707C10.5667 7.01457 10.5479 7.02207 10.5367 7.04832C10.5217 7.07457 10.4954 7.11582 10.4917 7.15332C10.4917 7.19082 10.5029 7.21332 10.5104 7.21707C10.5217 7.22082 10.5404 7.20207 10.5367 7.19082C10.5367 7.17957 10.5254 7.19082 10.5217 7.19082C10.5142 7.19082 10.5142 7.17957 10.5104 7.15707C10.5067 7.13457 10.5367 7.07457 10.5479 7.05207C10.5592 7.03332 10.5854 7.01082 10.5854 6.97707L10.6117 6.88332C10.6117 6.87957 10.5967 6.87582 10.5629 6.87207C10.5404 6.87207 10.5067 6.89082 10.4917 6.91707C10.4767 6.93957 10.4279 6.95832 10.4279 6.95832C10.4279 6.95832 10.4804 6.95832 10.5104 6.92082V6.92457Z"
                                                                            fill="white" />
                                                                        <path
                                                                            d="M10.6939 7.29221H10.6002L10.6264 7.36721L10.6939 7.29221ZM10.5814 7.28846L10.5627 7.27346C10.5595 7.26919 10.5557 7.26541 10.5514 7.26221L10.5177 7.28096L10.4989 7.35221L10.5102 7.36346L10.5852 7.28846H10.5814ZM10.5702 7.47596L10.5027 7.37471L10.4652 7.45721L10.4839 7.46471L10.5289 7.47221H10.5702V7.47596ZM10.8477 9.15221C10.7942 9.18768 10.7318 9.20719 10.6677 9.20846C10.6226 9.20763 10.5785 9.19468 10.5402 9.17096C10.5157 9.15558 10.4961 9.13344 10.4839 9.10721C10.4614 9.06596 10.4539 9.01346 10.4464 8.95721C10.4352 8.90846 10.4277 8.85971 10.4052 8.82221C10.3752 8.77346 10.3152 8.74346 10.2627 8.69846C10.2325 8.67506 10.2076 8.64563 10.1896 8.61205C10.1715 8.57847 10.1606 8.54148 10.1577 8.50346C10.1572 8.49346 10.1572 8.48345 10.1577 8.47346C10.1577 8.40971 10.1764 8.35346 10.1952 8.30471C10.2139 8.25596 10.2402 8.21096 10.2402 8.17346V8.15471C10.2289 8.12846 10.2027 8.10221 10.1839 8.08346C10.1652 8.06471 10.1389 8.05346 10.1389 8.05346L10.1014 8.04596L10.0977 8.05721L10.1352 8.06471V8.06096V8.06471L10.1839 8.10221C10.2027 8.11721 10.2214 8.13971 10.2252 8.15846C10.2257 8.16344 10.2257 8.16847 10.2252 8.17346C10.2252 8.21096 10.2064 8.24846 10.1877 8.29721C10.1605 8.35217 10.1452 8.41221 10.1427 8.47346V8.50346C10.1459 8.5438 10.1576 8.58301 10.177 8.61854C10.1964 8.65407 10.223 8.68513 10.2552 8.70971C10.3114 8.75096 10.3677 8.78471 10.3939 8.82971C10.4239 8.87471 10.4314 8.94221 10.4427 9.01721C10.4502 9.04721 10.4577 9.08096 10.4727 9.11096C10.4877 9.14096 10.5064 9.16721 10.5327 9.18596C10.5745 9.21112 10.6226 9.22411 10.6714 9.22346C10.7727 9.22346 10.8552 9.16346 10.8552 9.16346L10.8477 9.15221Z"
                                                                            fill="#78732E" />
                                                                        <path
                                                                            d="M10.7689 8.96859C10.7543 8.97783 10.7375 8.98301 10.7202 8.98359C10.7014 8.98359 10.6789 8.97609 10.6564 8.95359C10.6323 8.93064 10.6164 8.90029 10.6114 8.86734C10.6039 8.83359 10.6002 8.79234 10.5739 8.74359C10.5552 8.68734 10.4989 8.64609 10.4427 8.60484C10.3939 8.56359 10.3452 8.52234 10.3339 8.47734C10.333 8.46862 10.333 8.45982 10.3339 8.45109C10.3339 8.41359 10.3489 8.37609 10.3639 8.33484C10.3888 8.27821 10.4003 8.21663 10.3977 8.15484C10.3902 8.07984 10.3339 8.02359 10.2777 7.98609C10.2448 7.96475 10.2095 7.94714 10.1727 7.93359L10.1689 7.94484H10.1764C10.1952 7.95609 10.2439 7.97859 10.2889 8.01234C10.3377 8.04984 10.3789 8.09484 10.3864 8.15484V8.18484C10.3864 8.24109 10.3714 8.28609 10.3527 8.33109C10.3339 8.37609 10.3189 8.41359 10.3189 8.45109L10.3227 8.48109C10.3339 8.52984 10.3827 8.57109 10.4352 8.61609C10.4914 8.65359 10.5477 8.69859 10.5664 8.74734C10.5889 8.79609 10.5927 8.83734 10.6002 8.86734C10.6077 8.90484 10.6152 8.93109 10.6452 8.96109C10.6714 8.98734 10.6977 8.99484 10.7202 8.99484C10.7387 8.99456 10.7568 8.98939 10.7727 8.97984L10.7689 8.96859Z"
                                                                            fill="#78732E" />
                                                                        <path
                                                                            d="M11.1142 8.68359C11.1142 8.68359 11.1779 8.69859 11.1742 8.75109C11.1698 8.79473 11.1598 8.8376 11.1442 8.87859L11.0542 8.79609L11.1029 8.75109L11.1217 8.72484L11.1142 8.68359Z"
                                                                            fill="#A8AC71" />
                                                                        <path
                                                                            d="M9.98898 8.04235C9.98898 8.04235 9.92523 8.06485 9.91023 8.0386C9.89523 8.0086 9.90273 7.9861 9.90273 7.98235C9.90273 7.97485 9.86523 7.9711 9.86523 7.9336C9.86898 7.8961 9.91773 7.89985 9.92523 7.89985C9.93648 7.89985 9.94023 7.8436 9.97398 7.84735C10.004 7.84735 10.019 7.88485 10.019 7.88485L9.98898 8.04235Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M10.0601 8.06117C10.0601 8.06117 10.0038 8.09117 9.98509 8.06117C9.97009 8.03492 9.98509 8.00117 9.98134 7.99367C9.97384 7.98992 9.94384 7.97867 9.94759 7.94492C9.95509 7.91117 9.98884 7.92242 10.0001 7.91492C10.0113 7.91117 10.0226 7.86242 10.0563 7.86992C10.0901 7.88117 10.0938 7.90742 10.0938 7.90742L10.0563 8.06117H10.0601Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M10.154 8.07247C10.154 8.07247 10.1353 8.10997 10.0978 8.10247C10.0603 8.09497 10.0715 8.03872 10.064 8.02747C10.0603 8.01622 10.0303 8.00871 10.034 7.97496C10.0415 7.93746 10.0753 7.94121 10.0903 7.93746C10.1015 7.93371 10.1165 7.87746 10.1428 7.88496C10.169 7.89621 10.1915 7.92621 10.1878 7.94121C10.1878 7.94121 10.1315 7.95996 10.124 7.99747C10.1165 8.03497 10.154 8.07247 10.154 8.07247Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M11.0128 8.66842L10.9303 8.57092C10.8965 8.52217 10.844 8.46967 10.844 8.46967L10.7615 8.42842L10.709 8.33842L10.7015 8.23342L10.724 8.17342L10.754 8.12842C10.754 8.12842 10.5815 8.19217 10.6715 8.52217C10.709 8.66467 10.8028 8.68342 10.8028 8.68342L10.964 8.67217H11.0128V8.66842Z"
                                                                            fill="#AF7029" />
                                                                        <path
                                                                            d="M10.934 7.56252C10.949 7.56252 10.9565 7.57002 10.964 7.57752L10.9715 7.60002V7.61502C10.9115 7.74252 10.7915 7.80252 10.679 7.87752C10.6219 7.91742 10.5734 7.96844 10.5365 8.02752C10.4917 8.10469 10.4708 8.19345 10.4765 8.28252C10.4803 8.47002 10.5515 8.57502 10.634 8.63127C10.6924 8.66814 10.76 8.68765 10.829 8.68752H10.844L10.8965 8.68377C10.9339 8.6797 10.9714 8.67719 11.009 8.67627L11.0765 8.68002L11.1103 8.69502C11.1149 8.70022 11.1175 8.70684 11.1178 8.71377C11.1178 8.72877 11.1065 8.74377 11.0953 8.75877L11.0578 8.78502L11.0653 8.79627C11.0793 8.78835 11.092 8.77822 11.1028 8.76627C11.1178 8.75127 11.129 8.73252 11.129 8.71377C11.129 8.70627 11.129 8.69502 11.1178 8.68752C11.1103 8.67627 11.0953 8.67252 11.0765 8.66877L11.009 8.66502C10.934 8.66502 10.8403 8.67627 10.8403 8.67627V8.68377V8.67627C10.8365 8.67635 10.8328 8.67635 10.829 8.67627C10.7625 8.6756 10.6974 8.6561 10.6415 8.62002C10.5628 8.56752 10.4915 8.47002 10.4915 8.28252V8.26752C10.4915 8.16627 10.5103 8.09127 10.5478 8.03127C10.6003 7.94127 10.6865 7.88877 10.7728 7.83252C10.8607 7.78261 10.9323 7.70839 10.979 7.61877V7.60002C10.979 7.59252 10.979 7.57752 10.9715 7.57002C10.964 7.55877 10.9528 7.55127 10.934 7.55127V7.56252Z"
                                                                            fill="#816C2A" />
                                                                        <path
                                                                            d="M11.1667 8.72498C11.1667 8.72498 11.1292 8.79998 11.1142 8.79998C11.1067 8.79998 11.1517 8.81123 11.1629 8.82998L11.1517 8.84873C11.1517 8.84873 11.1067 8.81498 11.0767 8.81123V8.78873L11.1179 8.76248C11.1342 8.74429 11.1458 8.72241 11.1517 8.69873L11.1667 8.72498Z"
                                                                            fill="white" />
                                                                        <path
                                                                            d="M11.324 8.77367L11.2227 8.80367L11.174 8.76617C11.174 8.76617 11.174 8.72867 11.1552 8.70992L11.0952 8.67242C11.0727 8.66492 11.0015 8.66492 11.0015 8.66492L10.814 8.46617L10.889 8.47367L10.994 8.45867L11.0952 8.45117L11.1477 8.45867L11.2077 8.47367L11.2377 8.49992L11.2677 8.52992L11.2977 8.57867L11.3202 8.63867L11.3277 8.70242V8.77367H11.324Z"
                                                                            fill="#FCCA3D" />
                                                                        <path
                                                                            d="M11.3317 8.76611C11.3317 8.76611 11.2942 8.77736 11.2492 8.77736C11.2004 8.77736 11.1742 8.76986 11.1742 8.76986L11.1667 8.80361C11.1592 8.83736 11.1479 8.85236 11.1479 8.85236V8.97236L11.2454 8.99111L11.2979 8.97236L11.3242 8.84111L11.3317 8.76611Z"
                                                                            fill="#AF7029" />
                                                                        <path
                                                                            d="M11.3054 8.71744V8.76244L11.3279 8.76994V8.72494L11.3054 8.71744ZM11.2117 7.59244L11.2004 7.51369L11.1704 7.45744L11.1292 7.40119L11.0842 7.35244L11.0617 7.33369L11.0504 7.31494L10.9417 7.32244L10.8892 7.38619C10.8892 7.38619 11.0317 7.49119 11.0879 7.60369C11.1275 7.61634 11.1634 7.63819 11.1929 7.66744L11.1967 7.65994L11.2117 7.59244Z"
                                                                            fill="#FCCA3D" />
                                                                        <path
                                                                            d="M11.1101 7.68602C11.1101 7.76852 11.0913 7.80601 11.0801 7.82476L11.1476 7.74976L11.1926 7.66727C11.1631 7.63801 11.1271 7.61616 11.0876 7.60352C11.1026 7.62977 11.1101 7.65602 11.1101 7.68227V7.68602Z"
                                                                            fill="#AF7029" />
                                                                        <path
                                                                            d="M11.2601 8.91977L11.2076 8.85977C11.1851 8.83727 11.1589 8.82227 11.1589 8.82227L11.1514 8.83727H11.1551L11.2001 8.86727C11.2175 8.8863 11.2338 8.90633 11.2489 8.92727L11.2601 8.91977Z"
                                                                            fill="#816C2A" />
                                                                        <path
                                                                            d="M11.3241 8.82959C11.3241 8.82959 11.3129 8.86709 11.2754 8.89709C11.2379 8.93459 11.1929 8.95334 11.1929 8.95334L11.2979 8.99084L11.3691 8.92709L11.3241 8.82959Z"
                                                                            fill="#6F5B24" />
                                                                        <path
                                                                            d="M11.3391 8.9158L11.3316 8.92705L11.3129 8.9458L11.2979 8.96455L11.3204 8.85205L11.3429 8.88955V8.90455L11.3391 8.9158Z"
                                                                            fill="#404118" />
                                                                        <path
                                                                            d="M10.7165 7.4725C10.7165 7.4725 10.574 7.48375 10.4727 7.46875C10.3715 7.45375 10.3977 7.195 10.394 7.1875C10.394 7.18 10.334 7.12 10.3415 7.06375C10.3527 7.0075 10.5365 6.8575 10.559 6.84625C10.5777 6.8425 10.6152 6.8575 10.6152 6.8575C10.6152 6.8575 10.6602 6.8125 10.6752 6.8125C10.6902 6.8125 10.709 6.83875 10.7052 6.85C10.6977 6.86125 10.634 6.89875 10.6302 6.925C10.6227 6.955 10.6302 6.98125 10.6115 7.01125C10.5927 7.0375 10.559 7.075 10.5552 7.10125C10.5515 7.12375 10.5402 7.1425 10.5552 7.15375C10.574 7.16125 10.634 7.15375 10.6865 7.13125C10.739 7.105 10.7615 7.075 10.7652 7.07875C10.7727 7.07875 10.7352 7.1425 10.679 7.16875C10.6227 7.19125 10.5852 7.2175 10.5552 7.21375C10.5552 7.21375 10.5252 7.28875 10.6227 7.29625C10.7202 7.29625 10.7727 7.27375 10.7727 7.27375L10.7165 7.4725V7.4725Z"
                                                                            stroke="#78732E" stroke-width="0.025" />
                                                                        <path
                                                                            d="M11.9505 6.39627C11.9505 6.39627 11.688 6.34752 11.688 6.56502C11.6917 6.63627 11.7067 6.65877 11.763 6.67752C11.8192 6.68877 11.928 6.69627 12.0255 6.77877C12.1192 6.86502 12.1267 6.92877 12.1267 6.97752C12.1267 7.03002 12.1005 7.07502 12.1005 7.07502L12.1605 7.36377L12.2205 7.57752L12.4005 7.47627L12.5055 7.15752L12.3705 6.58752L11.9505 6.39627Z"
                                                                            fill="#AB6D29" stroke="#4D2A15"
                                                                            stroke-width="0.05" />
                                                                        <path
                                                                            d="M12.2088 7.4984C12.2088 7.4984 12.3026 7.4609 12.3213 7.3859C12.3326 7.36715 12.2313 7.27715 12.2313 7.27715C12.2276 7.27715 12.2801 7.3034 12.3063 7.3259C12.3288 7.3484 12.3476 7.35965 12.3551 7.3559C12.3626 7.35215 12.4038 7.25465 12.3888 7.23215C12.3738 7.20965 12.3476 7.15715 12.3101 7.13465C12.2726 7.1084 12.2201 7.11215 12.2201 7.11215C12.2201 7.11215 12.2913 7.08965 12.3251 7.11215C12.3626 7.1309 12.3626 7.14965 12.3663 7.1459C12.3701 7.13465 12.3588 7.03715 12.3438 7.00715C12.3288 6.96965 12.3138 6.9584 12.2688 6.94715C12.2276 6.93965 12.1826 6.9434 12.1826 6.9434C12.1826 6.9434 12.2426 6.90965 12.2876 6.9209C12.3363 6.93215 12.3363 6.9584 12.3401 6.9509C12.3401 6.94715 12.3176 6.8609 12.3026 6.8384C12.2813 6.81067 12.2545 6.78768 12.2238 6.7709L12.1563 6.7634H12.1338C12.1338 6.7634 12.1713 6.7409 12.2126 6.74465C12.2576 6.7484 12.2613 6.7634 12.2651 6.75965C12.2726 6.75965 12.2613 6.75215 12.2351 6.7334C12.2088 6.71465 12.0776 6.6584 12.0776 6.6584H11.9538C11.9538 6.6584 11.9538 6.6284 11.9913 6.6209C12.0251 6.61715 12.0326 6.62465 12.0288 6.61715C12.0288 6.6059 11.9313 6.58715 11.9313 6.58715H11.8488L11.7363 6.5984C11.7363 6.5984 11.7438 6.57965 11.7626 6.56465C11.7738 6.5534 11.7963 6.5459 11.8113 6.54215C11.8488 6.5309 11.7888 6.5009 11.7888 6.5009L11.8226 6.45215L11.9688 6.4634L12.2763 6.6434L12.4226 6.76715L12.5126 6.99965L12.4863 7.40465L12.2801 7.5734L12.1901 7.58465L12.2088 7.4984Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M11.939 6.49734C11.939 6.49734 11.9315 6.47109 11.9315 6.43359C11.9315 6.39609 11.939 6.39984 11.939 6.39984C11.939 6.39984 11.8377 6.38859 11.7665 6.44484C11.6952 6.50109 11.7365 6.59859 11.7365 6.59859C11.7365 6.59859 11.7665 6.56859 11.8077 6.55359C11.8452 6.53859 11.9202 6.54234 11.9202 6.54234C11.9277 6.53484 11.9052 6.50484 11.879 6.50109C11.849 6.49359 11.8002 6.49359 11.8002 6.49359C11.8002 6.49359 11.8302 6.47484 11.8827 6.47859C11.9352 6.48234 11.9427 6.49734 11.9427 6.49734H11.939Z"
                                                                            fill="#D2A567" />
                                                                        <path
                                                                            d="M12.2502 7.53242L12.1827 7.55492L12.2202 7.83617L12.4902 8.28992L12.629 8.26742L12.6777 8.18117L12.7152 8.19992C12.7302 8.21492 12.7827 8.30492 12.8277 8.32367C12.869 8.33867 12.8915 8.33117 12.929 8.36117C12.9665 8.39867 13.1127 8.60867 13.1165 8.61617C13.1277 8.62367 13.1127 8.52617 13.1127 8.52617L13.0677 8.39867L13.0152 8.30867L13.004 8.28617H13.079L13.124 8.31617L13.199 8.37242L13.2327 8.41742L13.2515 8.46242L13.259 8.49992L13.2777 8.55992L13.3152 8.64617L13.364 8.72492L13.379 8.69117L13.3565 8.59742L13.2815 8.37242L13.244 8.29742L13.3152 8.34242C13.3302 8.34617 13.3827 8.42492 13.3827 8.42492L13.4165 8.50742L13.439 8.58242L13.454 8.64617L13.4802 8.71742L13.5177 8.69117L13.514 8.64242L13.4765 8.48492L13.4615 8.31617C13.4615 8.31617 13.484 8.31617 13.5065 8.34242C13.5256 8.36885 13.5407 8.3979 13.5515 8.42867L13.5702 8.58242L13.5965 8.72492L13.6415 8.86742L13.6865 8.95742L13.7202 9.00617V8.93117L13.6602 8.33117L13.6677 8.30867C13.6677 8.30867 13.6752 8.30492 13.6977 8.33492C13.7165 8.36117 13.7352 8.40617 13.7352 8.40617L13.754 8.49992L13.7615 8.56367L13.7727 8.68742L13.7915 8.81867L13.8515 8.96117L13.8852 9.03617L13.904 8.94617L13.874 8.30492L13.889 8.28617C13.889 8.28617 13.9227 8.31242 13.934 8.33492L13.964 8.37242L13.9865 8.51492L14.0015 8.91617L14.0165 9.02117L14.1365 7.96367L14.2115 7.94867L14.219 7.92617L14.1627 7.88867L14.0427 7.70117L13.964 7.51742L13.8215 7.25492L13.574 6.95492L13.379 6.79367C13.3562 6.77607 13.3324 6.75979 13.3077 6.74492L13.3227 6.70742L13.3602 6.64367L13.3565 6.63992H13.3227L13.2402 6.65492L13.1577 6.62867L12.9927 6.51617L12.8202 6.42992L12.7152 6.39242L12.4677 6.33242L12.2202 6.29492H12.1077L12.0102 6.31367C12.0102 6.31367 11.9577 6.33617 11.9427 6.36992C11.924 6.39992 11.924 6.42242 11.9277 6.46742C11.9352 6.51617 11.9652 6.53867 12.0327 6.56867C12.1002 6.59492 12.2652 6.70367 12.2652 6.70367L12.3402 6.78242L12.3702 6.81992L12.3777 6.84992L12.4302 7.26617L12.3252 7.49117L12.2502 7.52867V7.53242Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M12.5166 8.1809C12.5166 8.1809 12.5616 8.2559 12.6254 8.19965C12.6891 8.13965 12.5954 7.97465 12.5991 7.9634C12.5991 7.95215 12.6254 7.95215 12.6254 7.95215L12.6741 8.03465C12.6741 8.03465 12.7004 8.0834 12.6891 8.15465C12.6816 8.22965 12.6104 8.2934 12.6104 8.2934L12.5279 8.27465L12.5166 8.1809Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M14.073 9.15599L14.013 8.98724L13.998 8.85599C13.998 8.83349 13.9867 8.55974 13.9792 8.50724C13.9792 8.45474 13.9792 8.39475 13.9717 8.391L13.9117 8.3085L13.8855 8.28224L13.9042 8.271C13.9042 8.271 13.9267 8.29349 13.9305 8.28224C13.938 8.26724 13.9305 8.20725 13.908 8.1135C13.8817 8.01975 13.7617 7.80225 13.7617 7.80225L13.7767 7.80975L13.8105 7.84725L13.878 7.9035L14.0317 7.95975L14.1142 7.971L14.1667 8.07975C14.1667 8.07975 14.2042 8.26349 14.2042 8.35724C14.2042 8.44724 14.1967 8.52599 14.1592 8.61974C14.1217 8.70974 14.1142 9.00599 14.1105 9.05099C14.1067 9.09974 14.088 9.14474 14.088 9.14474L14.0692 9.15599H14.073Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M14.0729 8.66852C14.0729 8.66852 14.1029 8.63102 14.1179 8.57852C14.1329 8.52602 14.1366 8.11352 14.0879 8.06477C14.0453 8.02472 13.9939 7.99518 13.9379 7.97852C13.9304 7.97852 13.9754 8.10977 13.9754 8.10977L14.0054 8.16227L14.0279 8.22977C14.0316 8.26727 14.0616 8.34602 14.0654 8.45477L14.0729 8.66852Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M13.8476 8.92361C13.8476 8.92361 13.8664 8.73236 13.8589 8.58611C13.8476 8.44736 13.8364 8.42861 13.8214 8.40236C13.7819 8.32712 13.7505 8.24793 13.7276 8.16611C13.6939 8.04611 13.6714 7.95611 13.6526 7.93361C13.6301 7.91111 13.5889 7.85861 13.5776 7.87361C13.5664 7.88486 13.5664 7.91486 13.5664 7.91486L13.5101 7.89986L13.4951 7.86236L13.5139 7.80236V7.77611L13.5026 7.73486L13.5776 7.79486L13.7351 7.89986L13.8101 8.22236L13.8851 8.42111L13.8926 8.75861L13.8851 9.05861L13.8476 8.92736V8.92361ZM13.9376 7.99736C13.9376 7.99736 13.9751 8.03486 14.0014 8.04986C14.0276 8.06486 14.0689 8.09111 14.0614 8.09486C14.0351 8.08829 14.0099 8.0782 13.9864 8.06486L13.9414 8.03486V7.99736H13.9376Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M13.6376 8.84854C13.6376 8.84854 13.6676 8.78104 13.6639 8.69479C13.6535 8.58571 13.6335 8.47778 13.6039 8.37229C13.5889 8.34604 13.5289 8.30854 13.4726 8.19229C13.4164 8.07604 13.4239 8.04979 13.3864 8.00479C13.3489 7.96729 13.3114 7.91479 13.3114 7.91479L13.3226 7.79104L13.4576 7.85854L13.5176 7.88854L13.5851 8.21479L13.6451 8.30854L13.6714 8.43979L13.7051 8.73979L13.7201 8.98729L13.7126 9.00604L13.6376 8.84854ZM13.4801 8.70979C13.4801 8.70979 13.4839 8.61604 13.4614 8.52979C13.4351 8.44354 13.4201 8.37979 13.3901 8.34979C13.3639 8.32354 13.2964 8.25229 13.2364 8.16229C13.1764 8.06854 13.0901 7.97479 13.0901 7.97479V7.85104L13.1651 7.90729C13.1955 7.92158 13.2255 7.93658 13.2551 7.95229L13.2926 8.09104L13.3376 8.19229L13.4051 8.28229L13.4501 8.32354L13.4764 8.47354L13.4914 8.55979L13.5289 8.67979L13.5139 8.74354L13.4801 8.70979ZM13.3676 8.70979L13.3301 8.67604C13.3301 8.67604 13.3526 8.65354 13.3414 8.60104C13.3301 8.55604 13.3189 8.51104 13.2964 8.46229C13.2739 8.41729 13.2701 8.38729 13.2589 8.37604C13.2039 8.32464 13.1476 8.27463 13.0901 8.22604C13.0526 8.18854 12.9889 8.12854 12.9514 8.10229C12.9139 8.07979 12.8839 8.07229 12.8839 8.07229L12.8651 7.92229C12.8651 7.92229 12.9139 7.98979 12.9439 7.99729C12.9699 8.00782 12.9962 8.01783 13.0226 8.02729L13.1276 8.21479L13.1651 8.26354L13.2626 8.33854L13.3001 8.42104L13.3339 8.51479L13.3714 8.64229L13.3751 8.71729L13.3676 8.71354V8.70979ZM13.1614 8.67229C13.1614 8.67229 13.0976 8.59729 13.0864 8.55229C13.0789 8.50729 13.0939 8.50729 13.0751 8.45479C13.0564 8.40229 12.9889 8.32354 12.9364 8.28229C12.8839 8.23729 12.8089 8.17729 12.8126 8.13979C12.8164 8.10604 12.8276 8.10229 12.8276 8.10229L12.8576 8.13229L13.0264 8.30854L13.0789 8.40229L13.1164 8.51854L13.1426 8.57479L13.1689 8.64229L13.1614 8.66854V8.67229ZM13.7614 7.79854C13.7614 7.79854 13.8776 7.94104 13.9114 7.80979C13.9226 7.74979 13.8664 7.63729 13.8664 7.63729C13.8664 7.63729 13.7614 7.44979 13.7239 7.40479L13.5101 7.13104L13.3789 7.07104L13.4239 7.14604C13.4239 7.14604 13.5214 7.24354 13.6451 7.46104C13.7689 7.67479 13.7464 7.79479 13.7464 7.79479H13.7651L13.7614 7.79854ZM13.0939 6.93604C13.0939 6.93604 13.3226 7.13104 13.4689 7.34104C13.6189 7.55479 13.6751 7.69354 13.6451 7.72354C13.6076 7.74979 13.5176 7.70854 13.4801 7.64854C13.4426 7.58854 13.4126 7.48354 13.2739 7.32604C13.1351 7.16854 13.0676 7.14604 13.0676 7.14604L12.9664 6.98479L13.0939 6.93604ZM12.9739 7.40479C12.9739 7.40479 13.1089 7.51729 13.1989 7.60729C13.2451 7.65664 13.2877 7.70928 13.3264 7.76479L13.3789 7.81729C13.3789 7.81729 13.3451 7.76104 13.3639 7.74229C13.3826 7.71979 13.4051 7.73104 13.4051 7.73104L12.9739 7.28104V7.40479ZM12.9476 7.41604C12.9476 7.41604 12.9926 7.50229 13.0601 7.56979C13.1111 7.6201 13.1623 7.6701 13.2139 7.71979L13.2439 7.82854C13.2439 7.82854 13.0489 7.67854 13.0489 7.71604C13.0489 7.75354 13.0939 7.82854 13.0939 7.82854L13.0339 7.79104L12.9514 7.67479L12.9026 7.56979L12.8464 7.42729L12.9476 7.41604Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M12.3553 7.8808C12.3553 7.8808 12.4566 7.9708 12.5128 7.8808C12.5691 7.79455 12.5241 7.6933 12.5241 7.6933C12.5241 7.6933 12.6703 7.9033 12.7116 7.70455C12.7191 7.66705 12.6216 7.53205 12.6216 7.53205L12.6591 7.4983L12.7303 7.62205C12.7303 7.62205 12.7978 7.59205 12.7978 7.50955C12.7978 7.42705 12.7266 7.3108 12.7266 7.3108L12.7941 7.3858C12.7941 7.3858 12.9291 7.3858 12.9328 7.3108C12.9328 7.2283 12.8203 7.14205 12.8203 7.14205C12.8203 7.14205 12.9103 7.1458 12.9103 7.0933C12.9103 7.0408 12.7828 7.0033 12.7828 6.96955C12.7828 6.9358 12.8203 6.87955 12.8766 6.9133C12.9328 6.9433 13.0078 6.9658 13.0416 6.9058C13.0716 6.8458 13.0378 6.8308 13.0378 6.8308L12.9591 6.8158L12.8316 6.7483L12.7303 6.7108L12.6253 6.6958L12.6628 6.7708L12.6928 6.9883V7.0858L12.7116 7.3033L12.6591 7.47955L12.6328 7.5133L12.6141 7.5358L12.5691 7.6333L12.5091 7.7008L12.4266 7.80205L12.3516 7.8808H12.3553Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M13.079 8.28215C13.079 8.28215 13.0528 8.2184 12.9965 8.1734C12.9537 8.14631 12.9046 8.13081 12.854 8.1284L13.004 8.2859L13.079 8.28215ZM13.289 8.31965C13.289 8.31965 13.2403 8.22215 13.184 8.16215C13.1278 8.10215 13.0903 8.02715 13.0715 8.02715H13.049L13.064 8.1509L13.1653 8.25215C13.1653 8.25215 13.2628 8.32715 13.289 8.31965ZM13.4615 8.31215C13.4615 8.31215 13.439 8.19965 13.379 8.08715C13.3228 7.98215 13.2628 7.93715 13.2628 7.93715L13.2778 8.04965L13.3228 8.16215L13.3978 8.27465L13.4615 8.31215ZM13.604 8.2484C13.604 8.2484 13.6415 8.0159 13.604 7.9484C13.5703 7.8884 13.5028 7.8734 13.5028 7.8734L13.4803 7.9109L13.5028 8.07215L13.559 8.19965L13.604 8.2484ZM13.7428 7.86215C13.7428 7.86215 13.7765 7.87715 13.8178 7.9559C13.8623 8.0594 13.895 8.16758 13.9153 8.2784C13.9153 8.28965 13.8965 8.2859 13.889 8.2859C13.8815 8.28215 13.7428 8.0609 13.7428 8.0609L13.7203 7.8584H13.7428V7.86215Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M12.7638 8.12835C12.7638 8.12835 12.8388 8.11335 12.8388 8.09085C12.8388 8.06085 12.7488 8.00835 12.7563 7.9671C12.7563 7.94835 12.8313 7.97085 12.8351 7.95585C12.8388 7.94085 12.7601 7.82085 12.7863 7.79085C12.8088 7.76085 12.8763 7.9221 12.8763 7.9221C12.8763 7.9221 12.9138 7.9971 12.9026 8.0421C12.8576 8.1771 12.7638 8.12835 12.7638 8.12835ZM12.9363 7.96335C12.9401 7.9521 13.0526 7.97835 13.0526 7.97085C13.0601 7.9446 12.9513 7.85835 12.9513 7.85835C12.9513 7.85835 12.9288 7.81335 12.9363 7.80585C12.9438 7.79835 13.0113 7.81335 13.0113 7.80585C13.0188 7.7946 12.9363 7.68585 12.9363 7.6671C12.9363 7.64835 12.9588 7.6671 12.9588 7.6671C12.9588 7.6671 13.0226 7.73085 13.0563 7.7871C13.0938 7.8396 13.1238 7.8846 13.1126 7.97085C13.0976 8.0646 12.9251 7.99335 12.9363 7.96335ZM13.4463 7.79085C13.4463 7.79085 13.4276 7.71585 13.4388 7.7046L13.4801 7.68585C13.4801 7.68585 13.4201 7.64835 13.3901 7.64835C13.3638 7.64835 13.3601 7.64085 13.3526 7.64835C13.3451 7.66335 13.4013 7.73835 13.4013 7.73835L13.4463 7.79085Z"
                                                                            fill="#D2A567" />
                                                                        <path
                                                                            d="M13.1017 7.85088C13.1017 7.85088 13.2779 7.89588 13.2854 7.88088C13.2929 7.86963 13.1467 7.73088 13.1467 7.73088C13.1467 7.73088 13.1354 7.70838 13.1392 7.70088C13.1392 7.69338 13.2029 7.68963 13.2217 7.70463C13.2404 7.71963 13.2217 7.74963 13.2254 7.76088C13.2329 7.77213 13.2892 7.85463 13.3004 7.83963C13.3079 7.82838 13.2854 7.72713 13.2892 7.71588C13.2967 7.70838 13.3567 7.77588 13.3754 7.78713C13.3904 7.79838 13.4879 7.87338 13.4992 7.83963C13.5104 7.80213 13.5142 7.79838 13.5104 7.77588C13.5104 7.75338 13.5442 7.87338 13.4992 7.88838C13.4542 7.90338 13.4017 7.87338 13.4017 7.87338L13.3604 7.84338L13.3379 7.81713C13.3379 7.81713 13.3642 7.91088 13.3304 7.91838C13.3004 7.92963 13.2667 7.92588 13.2667 7.92588L13.1917 7.91838L13.1017 7.85088ZM13.5029 7.73088C13.5029 7.73088 13.6904 7.84338 13.7054 7.82463C13.7242 7.80588 13.6604 7.54338 13.6679 7.51713C13.6792 7.49463 13.8179 7.81338 13.7504 7.85463C13.6979 7.89213 13.6754 7.86588 13.6754 7.86588L13.5817 7.81713L13.5067 7.73088H13.5029ZM14.0204 8.20338L14.0579 8.22213L14.0842 8.22963L14.0317 8.23713L14.0204 8.19963V8.20338ZM13.8404 7.58838L13.8667 7.59963L13.8929 7.61088C13.8929 7.61088 13.8779 7.62213 13.8704 7.61838H13.8554L13.8404 7.58838ZM13.7879 7.49463C13.7879 7.49463 13.8067 7.50588 13.8292 7.48713C13.8554 7.47213 13.8554 7.45713 13.8517 7.44963C13.8517 7.44213 13.8142 7.44213 13.7992 7.43088C13.7879 7.42338 13.7879 7.40838 13.7879 7.40838H13.7467L13.7317 7.41213L13.7879 7.49463ZM13.9492 8.03463C13.9492 8.03463 14.0054 8.07213 14.0242 8.07213C14.0392 8.07213 14.0654 8.09088 14.0617 8.09463C14.0617 8.09838 14.0167 8.10213 13.9942 8.09088C13.9717 8.07963 13.9679 8.08713 13.9679 8.08713L13.9492 8.03463ZM13.6454 7.19088H13.6679C13.6792 7.19088 13.6867 7.18338 13.6904 7.19088C13.6979 7.19838 13.6904 7.23588 13.6792 7.24713L13.6417 7.26588C13.6209 7.23894 13.6009 7.21143 13.5817 7.18338L13.6454 7.19088ZM13.3792 6.95088H13.4354C13.4542 6.95088 13.4729 6.96213 13.4917 6.97338C13.5067 6.98463 13.5254 7.09713 13.5142 7.11588C13.5067 7.13838 13.3792 7.04088 13.3754 7.03713C13.3754 7.02588 13.3192 6.94338 13.3192 6.94338L13.3792 6.95088ZM13.2592 6.89838C13.2592 6.89838 13.3529 6.90588 13.3417 6.84963C13.3401 6.83261 13.335 6.81611 13.3266 6.80124C13.3182 6.78636 13.3067 6.77345 13.2929 6.76338L13.1842 6.84213L13.2592 6.89838ZM13.0154 6.79338C13.0154 6.79338 13.0417 6.80838 13.0679 6.79338C13.0942 6.78588 13.1654 6.69213 13.2179 6.68088C13.2704 6.66963 13.2817 6.66963 13.2929 6.68088C13.3004 6.69588 13.2929 6.74838 13.2854 6.76338C13.2742 6.77838 13.1204 6.83838 13.1204 6.83838L13.0642 6.83463C13.0475 6.82957 13.0312 6.8233 13.0154 6.81588V6.79338ZM12.9892 6.62463C12.9629 6.57213 12.9254 6.54963 12.9067 6.55338C12.8917 6.55713 12.9592 6.60963 12.9704 6.68463C12.9817 6.75963 12.9779 6.80838 12.9779 6.81213L13.0079 6.81588L13.0154 6.78963L13.0192 6.77088V6.75213L13.0154 6.71463L13.0079 6.68088L13.0004 6.65838L12.9892 6.62463ZM12.7717 6.54963C12.7138 6.48895 12.6434 6.44161 12.5654 6.41088C12.5579 6.41088 12.7154 6.50463 12.7529 6.56088C12.7867 6.62463 12.7867 6.70713 12.8017 6.71838C12.8167 6.72963 12.8317 6.71088 12.8354 6.71088C12.8354 6.71088 12.8467 6.69213 12.8429 6.68463L12.8354 6.64713L12.8092 6.60963L12.7942 6.57963L12.7717 6.54963ZM12.5654 6.46338C12.4754 6.38838 12.3179 6.35088 12.1904 6.35088C12.0592 6.34338 11.9917 6.35838 12.0104 6.42588C12.0292 6.49338 12.0854 6.53088 12.1979 6.53088C12.3067 6.53088 12.3329 6.51963 12.3929 6.53838C12.4428 6.55343 12.4888 6.579 12.5279 6.61338C12.5467 6.63213 12.4867 6.55713 12.4304 6.51588C12.3742 6.47088 12.3367 6.45213 12.3367 6.45213C12.3367 6.45213 12.3254 6.42588 12.4004 6.43713C12.4754 6.44838 12.5767 6.49713 12.6067 6.56088C12.6329 6.62463 12.6292 6.65838 12.6292 6.67338C12.6292 6.68463 12.6554 6.66588 12.6554 6.66588L12.6667 6.63213C12.6667 6.63213 12.6667 6.60963 12.6554 6.57963C12.6404 6.55338 12.6367 6.54213 12.6029 6.50463C12.5692 6.46338 12.5654 6.46713 12.5654 6.46713V6.46338ZM12.2054 7.53213C12.2617 7.53213 12.3854 7.42713 12.4004 7.28088C12.4192 7.13088 12.3292 6.83463 12.3067 6.80463C12.2879 6.77088 12.3442 6.78963 12.3704 6.81963C12.4305 6.94363 12.4625 7.07935 12.4642 7.21713C12.4642 7.37463 12.4342 7.41588 12.3517 7.49838C12.2692 7.57338 12.2017 7.56588 12.2017 7.56588L12.2054 7.53213ZM12.3967 7.96713C12.3967 7.96713 12.4229 8.00463 12.4567 7.98963C12.5129 7.97088 12.5992 7.92588 12.5992 7.84713C12.5992 7.79463 12.5317 7.74588 12.5279 7.72713V7.68963L12.5879 7.70463L12.6067 7.78713C12.6067 7.78713 12.6292 7.81338 12.6554 7.80213C12.6779 7.79463 12.7492 7.74213 12.7379 7.68963C12.7267 7.64463 12.6629 7.58088 12.6554 7.55838C12.6479 7.53213 12.6554 7.51338 12.6554 7.51338L12.7154 7.52088L12.7304 7.59588C12.7304 7.59588 12.7454 7.61838 12.7792 7.61088C12.8092 7.60713 12.8692 7.54713 12.8542 7.51713L12.7979 7.41963V7.38588L12.8167 7.40088C12.8167 7.40088 12.8392 7.40838 12.8842 7.39713C12.9254 7.38213 12.9704 7.35213 12.9704 7.32213C12.9704 7.29213 12.9329 7.26213 12.9329 7.24713V7.22463H12.9629L13.0004 7.26963L13.0042 7.32213L12.9929 7.36713L12.9404 7.42713L12.8879 7.44963H12.8729L12.9029 7.50213L12.8954 7.57713L12.8467 7.62213L12.7829 7.65963L12.7792 7.73088L12.7417 7.80588L12.6667 7.85088H12.6404L12.6329 7.89588L12.5804 7.97088L12.4942 8.02713L12.4304 8.03838L12.3929 7.98588L12.3967 7.96713Z"
                                                                            fill="#D2A567" />
                                                                        <path
                                                                            d="M12.8764 7.17605C12.8764 7.17605 13.0264 7.2173 13.0189 7.12355C13.0189 7.0748 12.8764 6.9548 12.8689 6.93605C12.8577 6.91355 12.8614 6.8873 12.8614 6.8873L12.9327 6.9548C12.9327 6.9548 13.0264 6.97731 13.0527 6.92106C13.0789 6.86856 13.0564 6.8348 13.0527 6.8348L13.0752 6.83105L13.1164 6.83855L13.1127 6.92106L13.0639 7.12731C13.0639 7.12731 13.0752 7.2098 13.0114 7.21355C12.9477 7.22105 12.8764 7.17605 12.8764 7.17605ZM13.0152 8.2823C13.0152 8.2823 13.0152 8.24105 12.9852 8.2073C12.9514 8.18105 12.8914 8.1548 12.8802 8.1473C12.9136 8.19229 12.9486 8.23606 12.9852 8.27855H13.0152V8.2823ZM13.2252 8.2898C13.2252 8.2898 13.1502 8.1998 13.1389 8.16605C13.1202 8.13605 13.0827 8.06855 13.0527 8.0648C13.0227 8.0648 13.0827 8.1773 13.0827 8.1773L13.2027 8.28605H13.2252V8.2898ZM13.4277 8.2898L13.3489 8.1323C13.3339 8.09855 13.3002 8.0048 13.2627 7.97855C13.2252 7.9523 13.2664 8.0198 13.2664 8.0198L13.3077 8.14355L13.3789 8.2523L13.4277 8.2898ZM13.5739 8.1998C13.5739 8.1998 13.5702 8.09855 13.5552 8.02731C13.5439 7.95981 13.4914 7.8998 13.4877 7.90355V8.02731L13.5739 8.1998ZM13.8777 8.2748L13.8027 8.09855C13.7839 8.03855 13.7352 7.9448 13.7277 7.94105L13.7427 8.05355L13.8064 8.2298L13.8814 8.2748H13.8777ZM14.1402 7.95605C14.1402 7.95605 14.0952 7.91105 13.9939 7.8698C13.8927 7.8323 13.7914 7.8248 13.7914 7.8248L13.8027 7.83981L13.8514 7.8773L13.9564 7.93356L14.0952 7.9673L14.1439 7.95605H14.1402Z"
                                                                            fill="#D2A567" />
                                                                        <path
                                                                            d="M13.0566 8.01611C13.0566 8.01611 13.0566 8.10611 13.1053 8.15861C13.1503 8.21486 13.2553 8.30861 13.2778 8.33111C13.3003 8.34986 13.3153 8.45861 13.3491 8.54861C13.3791 8.63861 13.3866 8.71361 13.4016 8.73986C13.4166 8.76611 13.4428 8.80736 13.4203 8.80361C13.4016 8.79986 13.3828 8.77361 13.3678 8.73986C13.3566 8.70611 13.3603 8.70611 13.3603 8.66486C13.3603 8.61611 13.2928 8.38361 13.2591 8.36111C13.2253 8.33486 13.0791 8.21111 13.0191 8.12486C12.9628 8.03861 12.9741 8.01986 12.9741 8.01986H13.0566V8.01611Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M13.2965 8.59733C13.2665 8.53358 13.259 8.47358 13.2515 8.43608C13.2071 8.37351 13.1511 8.32004 13.0865 8.27858C13.064 8.26733 13.0152 8.27858 12.9965 8.26733L12.8577 8.11732C12.8577 8.11732 12.839 8.13608 12.8465 8.13983C12.8502 8.14358 12.974 8.27857 13.019 8.31982C13.064 8.36482 13.0902 8.45858 13.1202 8.53358C13.154 8.60858 13.139 8.59358 13.1427 8.62733C13.1465 8.66483 13.169 8.68358 13.1915 8.68358C13.214 8.68358 13.2215 8.67608 13.214 8.66858C13.1779 8.63085 13.1498 8.5862 13.1315 8.53733C13.1052 8.47358 13.0752 8.35357 13.0377 8.31232L13.0265 8.30107L13.0752 8.29357C13.1052 8.29357 13.229 8.40608 13.2402 8.44358C13.2515 8.47358 13.2402 8.48858 13.2927 8.60108C13.3452 8.71358 13.3677 8.73983 13.3677 8.73983H13.3752C13.3752 8.73983 13.3302 8.66483 13.3002 8.59733H13.2965ZM13.1015 7.85107C13.1015 7.85107 13.1952 7.90732 13.2215 7.91482C13.2362 7.91952 13.2513 7.92328 13.2665 7.92607C13.2665 7.92607 13.2815 8.09107 13.3452 8.18107C13.4127 8.27482 13.4652 8.30858 13.4652 8.30858C13.4652 8.30858 13.4652 8.48858 13.5177 8.60858C13.5665 8.73233 13.574 8.88233 13.5627 8.90858C13.5515 8.93108 13.5102 8.83358 13.4877 8.74733L13.4127 8.51483C13.3926 8.45422 13.3608 8.39815 13.319 8.34982C13.289 8.32357 13.3115 8.32733 13.3302 8.34233C13.3452 8.35733 13.394 8.41733 13.424 8.51108C13.454 8.60483 13.4652 8.69858 13.4802 8.69858C13.499 8.69858 13.5102 8.68733 13.5102 8.66483C13.5102 8.64983 13.4877 8.59733 13.4727 8.51108C13.4662 8.45048 13.4511 8.39112 13.4277 8.33483C13.4127 8.31233 13.3902 8.30857 13.3377 8.20732C13.297 8.14596 13.2655 8.07901 13.244 8.00857C13.2365 7.96357 13.244 7.97107 13.2365 7.95982C13.229 7.95607 13.2215 7.95982 13.1765 7.93732C13.1352 7.91482 13.1015 7.85107 13.1015 7.85107Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M13.3379 7.81738C13.3379 7.81738 13.3904 7.86238 13.4241 7.87363C13.4541 7.88863 13.4991 7.88863 13.4991 7.88863C13.4991 7.88863 13.4879 8.04613 13.5479 8.14738C13.6079 8.24863 13.6716 8.30488 13.6716 8.30488C13.6716 8.30488 13.6829 8.34238 13.7016 8.55988L13.7279 8.87113C13.7316 8.95738 13.7354 9.26863 13.7241 9.25738C13.6754 9.21988 13.7166 9.05488 13.6904 8.98363C13.6679 8.91613 13.6304 8.90488 13.5854 8.70613C13.5404 8.51113 13.5704 8.46613 13.5366 8.39488C13.5029 8.31988 13.4616 8.31238 13.4616 8.31238C13.4616 8.31238 13.5216 8.32738 13.5479 8.38738C13.5704 8.44738 13.5741 8.61238 13.5966 8.69488C13.6416 8.87863 13.7054 8.97238 13.7054 8.97238C13.7054 8.97238 13.6904 8.73988 13.6754 8.60863C13.6566 8.47738 13.6566 8.36863 13.6341 8.31988C13.6079 8.26738 13.5554 8.22988 13.5216 8.16238C13.4916 8.09488 13.4804 7.96363 13.4654 7.92988C13.4504 7.89613 13.4429 7.90738 13.4204 7.89988C13.3454 7.86988 13.3379 7.81738 13.3379 7.81738Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M13.5029 7.73096C13.5029 7.73096 13.5517 7.78721 13.6192 7.82846C13.6867 7.86596 13.7242 7.85471 13.7317 7.86596C13.7429 7.87346 13.7204 8.00846 13.7917 8.13596C13.8629 8.26346 13.8892 8.26721 13.8892 8.28596L13.9117 8.80721C13.9229 8.93471 13.9304 9.36221 13.8779 9.36221C13.8254 9.36221 13.8742 9.04346 13.8479 8.97221C13.8217 8.89721 13.8217 8.91971 13.7992 8.85971C13.7729 8.79971 13.7729 8.56721 13.7317 8.42846C13.7017 8.32346 13.6717 8.30846 13.6717 8.30846C13.6717 8.30846 13.7242 8.33471 13.7467 8.42096C13.7692 8.50346 13.7767 8.79596 13.8029 8.83721C13.8329 8.88596 13.8704 8.94221 13.8779 8.98721C13.8826 8.79208 13.8776 8.59684 13.8629 8.40221C13.8517 8.36471 13.7317 8.15471 13.7242 8.03846C13.7129 7.91846 13.7092 7.90721 13.6979 7.89971C13.6904 7.88846 13.6567 7.89971 13.6004 7.84346C13.5442 7.79096 13.5029 7.73096 13.5029 7.73096Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M13.7727 7.7986C13.7727 7.78735 13.8102 7.86235 13.9114 7.9036C14.0202 7.9486 14.1214 7.9411 14.1364 7.95235C14.1477 7.9636 14.2114 8.1211 14.2152 8.33485C14.2189 8.54485 14.1777 8.5261 14.1477 8.70985C14.1139 8.8936 14.1102 9.26485 14.0914 9.3211C14.0839 9.33985 14.0727 9.3511 14.0614 9.38485C14.0502 9.42235 14.0689 9.48985 14.0352 9.48985C14.0052 9.48985 13.9977 9.43735 13.9977 9.4111C13.9977 9.3811 14.0352 9.27985 14.0352 9.1786C14.0352 9.07735 14.0127 9.0661 13.9977 8.9461C13.9827 8.82235 13.9827 8.43985 13.9677 8.40235C13.9564 8.36485 13.8889 8.2861 13.8889 8.2861C13.8889 8.2861 13.9602 8.3311 13.9789 8.3836C13.9939 8.43235 13.9977 8.85985 14.0164 8.9461C14.0352 9.0361 14.0277 8.92735 14.0352 8.8786C14.0427 8.82985 14.0689 8.6161 14.0652 8.5036C14.0614 8.3911 14.0127 8.1511 13.9752 8.10985C13.9752 8.10985 13.9939 8.13235 14.0164 8.18485C14.0164 8.1886 14.0314 8.2036 14.0464 8.2111L14.0839 8.22985C14.0839 8.22985 14.0614 8.22985 14.0464 8.2186C14.0314 8.21485 14.0239 8.2036 14.0239 8.2036C14.0571 8.3001 14.0736 8.40155 14.0727 8.5036C14.0764 8.6986 14.0464 9.1186 14.0764 9.12235C14.1064 9.12985 14.1027 8.89735 14.1327 8.70235C14.1627 8.51485 14.2077 8.48485 14.1927 8.3311C14.1814 8.17735 14.1402 8.0086 14.1064 7.9861C14.0727 7.96735 13.9789 7.97485 13.8964 7.9186C13.8139 7.8661 13.7689 7.80985 13.7727 7.7986ZM12.4302 8.01235C12.4302 8.01235 12.4602 8.02735 12.4939 8.01235C12.5314 7.9936 12.6252 7.9186 12.6252 7.8886V7.8286C12.6252 7.8286 12.6252 7.83985 12.6514 7.8436C12.6814 7.84735 12.7564 7.7911 12.7639 7.7536C12.7703 7.71498 12.769 7.67548 12.7602 7.63735C12.7527 7.62235 12.7827 7.6486 12.7977 7.63735C12.8127 7.62235 12.8877 7.5736 12.8877 7.52485C12.8877 7.47235 12.8464 7.42735 12.8464 7.42735C12.8464 7.42735 12.8839 7.43485 12.9064 7.42735C12.9252 7.4236 13.0002 7.3786 12.9964 7.33735C12.9964 7.29235 12.9702 7.22485 12.9102 7.21735C12.9102 7.21735 12.9552 7.2286 12.9964 7.2136C13.0339 7.1986 13.0527 7.1761 13.0527 7.12735C13.0527 7.08235 12.9664 6.97735 12.9552 6.96985C12.9402 6.96235 13.0452 6.99985 13.0677 6.9586C13.0977 6.91735 13.1014 6.88735 13.0939 6.86485C13.0864 6.8386 13.0639 6.83485 13.0639 6.83485C13.0639 6.83485 13.1089 6.8461 13.1689 6.8161C13.2289 6.7861 13.2814 6.7411 13.3114 6.74485C13.3414 6.74485 13.2252 6.8086 13.2177 6.84235C13.2177 6.85735 13.2514 6.87985 13.3039 6.91735C13.3039 6.9211 13.3039 6.92485 13.3114 6.9286C13.3377 6.93985 13.4239 6.9436 13.4352 6.94735C13.4427 6.95485 13.3452 6.9511 13.3527 6.9586C13.4315 7.01764 13.5032 7.08559 13.5664 7.1611C13.5702 7.1611 13.5852 7.1761 13.6039 7.17985L13.6527 7.1911H13.5927C13.6365 7.24801 13.6778 7.30681 13.7164 7.36735C13.7164 7.3711 13.7314 7.38985 13.7502 7.39735C13.7689 7.40485 13.7877 7.4011 13.7914 7.40485C13.7952 7.41235 13.7389 7.40485 13.7427 7.41235C13.787 7.48559 13.8283 7.56066 13.8664 7.63735C13.8664 7.63735 13.7539 7.4386 13.6152 7.2811C13.4727 7.1236 13.4389 7.10485 13.4352 7.1161C13.4277 7.1311 13.5364 7.26985 13.5964 7.36735C13.6564 7.46485 13.7089 7.5886 13.7089 7.5886C13.7089 7.5886 13.5702 7.2961 13.3714 7.1161C13.1764 6.9361 13.1539 6.90985 13.1352 6.9136C13.1127 6.9211 13.0977 7.0561 13.1089 7.08235C13.1202 7.1086 13.2664 7.21735 13.3864 7.3636C13.5102 7.5061 13.6677 7.7536 13.6677 7.7536C13.6677 7.7536 13.5552 7.57735 13.3677 7.3786C13.1802 7.17985 13.1089 7.1311 13.0939 7.13485C13.0789 7.13485 13.0789 7.17235 13.0564 7.20235C13.0339 7.2286 12.9889 7.22485 12.9889 7.23985C12.9889 7.25485 13.1464 7.4011 13.1764 7.4161C13.2102 7.43485 13.2289 7.42735 13.2514 7.4386L13.3039 7.4761L13.2439 7.45735C13.2214 7.44985 13.1952 7.4461 13.1952 7.45735C13.1952 7.4686 13.3264 7.6186 13.3452 7.62985C13.3677 7.6411 13.3827 7.6336 13.4089 7.64485C13.4389 7.6561 13.4839 7.6861 13.4839 7.6861C13.4839 7.6861 13.4352 7.65985 13.4052 7.6561C13.3714 7.6486 13.3602 7.6561 13.3602 7.6636C13.3602 7.6711 13.4577 7.7986 13.4539 7.7986C13.4502 7.7986 13.3039 7.6261 13.1802 7.51735C13.0564 7.40485 13.0002 7.38235 12.9927 7.3861C12.9852 7.38985 12.9927 7.4236 12.9589 7.43485C12.9289 7.4461 12.9027 7.44985 12.9027 7.4611C12.9027 7.47235 13.0152 7.5736 13.0902 7.6636C13.1413 7.71884 13.1913 7.7751 13.2402 7.83235L13.0714 7.6711C12.9852 7.5886 12.9402 7.5586 12.9289 7.5586C12.9214 7.5661 12.9214 7.60735 12.9289 7.6186C12.9364 7.62985 13.1014 7.8211 13.0939 7.82485C13.0902 7.83235 12.9064 7.59985 12.8914 7.59985C12.8802 7.59985 12.8727 7.6261 12.8614 7.63735C12.8464 7.65235 12.7939 7.65235 12.7939 7.67485C12.7939 7.68985 13.0564 7.9486 13.0527 7.9561C13.0527 7.9561 12.8352 7.7686 12.8277 7.77985C12.8202 7.7911 12.9177 7.96735 12.9102 7.97485C12.9064 7.97485 12.7827 7.78735 12.7714 7.78735C12.7602 7.78735 12.7639 7.80985 12.7339 7.8361C12.6964 7.8661 12.6589 7.8511 12.6589 7.8661C12.6589 7.87735 12.8389 8.07985 12.8352 8.0836C12.8277 8.08735 12.6477 7.89235 12.6477 7.9036C12.6439 7.9036 12.6327 7.91485 12.6402 7.92985C12.6514 7.9786 12.6927 8.06485 12.6889 8.07235C12.6889 8.07235 12.6289 7.95235 12.6139 7.95985C12.5989 7.95985 12.5989 7.9861 12.5689 8.0011C12.5427 8.01985 12.5202 8.0161 12.5202 8.02735C12.5202 8.0386 12.5502 8.06485 12.5652 8.0911C12.5802 8.11735 12.5914 8.1811 12.5914 8.1811C12.5914 8.1811 12.5727 8.1286 12.5502 8.09485C12.5239 8.0611 12.5014 8.0386 12.4789 8.0386C12.4564 8.0386 12.4489 8.05735 12.4489 8.05735L12.4302 8.01235Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M14.1364 7.9484C14.1364 7.9484 14.1927 7.9484 14.2002 7.9334C14.2077 7.92215 14.1777 7.9334 14.1252 7.8734C14.0727 7.8134 13.9377 7.41965 13.7877 7.2209C13.5402 6.89465 13.3114 6.74465 13.3114 6.74465C13.3114 6.74465 13.5852 6.90215 13.7989 7.20965C14.0089 7.52465 14.0614 7.7684 14.1214 7.83215C14.1814 7.8959 14.2414 7.90715 14.2339 7.9259C14.2339 7.94465 14.2227 7.9559 14.2002 7.9634L14.1252 7.96715L14.1327 7.95215L14.1364 7.9484ZM12.3364 7.8659L12.3477 7.86965C12.3589 7.86965 12.4339 7.7984 12.4302 7.7759C12.4302 7.7759 12.3927 7.76465 12.3702 7.7384C12.3439 7.7084 12.3364 7.66715 12.3364 7.66715C12.3364 7.66715 12.3627 7.7159 12.3814 7.72715C12.4039 7.74215 12.4339 7.74965 12.4489 7.7384C12.4602 7.7309 12.5689 7.6484 12.5614 7.6184C12.5614 7.6184 12.5277 7.6184 12.4939 7.5959C12.4639 7.5734 12.4564 7.5209 12.4564 7.5209C12.4564 7.5209 12.4789 7.56215 12.5127 7.57715C12.5427 7.59215 12.5764 7.5884 12.5877 7.57715C12.5952 7.5659 12.6627 7.46465 12.6552 7.4384C12.6552 7.4384 12.6177 7.4384 12.5877 7.41965C12.5539 7.39715 12.5389 7.33715 12.5389 7.33715C12.5389 7.33715 12.5614 7.3859 12.6027 7.3934C12.6439 7.40465 12.6777 7.3784 12.6852 7.3484C12.6927 7.3184 12.7152 7.20965 12.6777 7.17965C12.6777 7.17965 12.6252 7.1984 12.5877 7.17965C12.5502 7.15715 12.5352 7.1084 12.5352 7.1084C12.5352 7.1084 12.5689 7.1534 12.6102 7.1609C12.6552 7.16465 12.6739 7.14215 12.6814 7.1234C12.6899 7.0862 12.6886 7.04745 12.6777 7.0109C12.6627 6.9734 12.6364 6.9809 12.6289 6.9284C12.6289 6.9284 12.6177 6.94715 12.5614 6.94715C12.5052 6.94715 12.4752 6.88715 12.4752 6.88715C12.4752 6.88715 12.5202 6.92465 12.5652 6.92465C12.5821 6.92195 12.5974 6.91327 12.6084 6.90019C12.6194 6.8871 12.6254 6.8705 12.6252 6.8534C12.6252 6.82715 12.6027 6.8009 12.5877 6.77465C12.5802 6.74465 12.5764 6.7109 12.5689 6.71465C12.5614 6.71465 12.5502 6.74465 12.4939 6.73715C12.4377 6.7259 12.4264 6.6884 12.4264 6.6884C12.4264 6.6884 12.4639 6.71465 12.5014 6.71465C12.5314 6.71465 12.5502 6.6959 12.5502 6.67715C12.5502 6.65465 12.5389 6.6134 12.4677 6.5534C12.4252 6.518 12.3814 6.48422 12.3364 6.45215C12.4051 6.53393 12.4892 6.60145 12.5839 6.6509C12.5839 6.6509 12.6477 6.6734 12.6589 6.6509C12.6627 6.6284 12.6627 6.5984 12.6402 6.5609C12.6214 6.5234 12.5652 6.4634 12.5652 6.4634C12.5652 6.4634 12.6252 6.51215 12.6514 6.56465C12.6814 6.6134 12.6664 6.64715 12.6702 6.66215C12.6702 6.6734 12.7939 6.72215 12.8202 6.7034C12.8502 6.6884 12.8389 6.6509 12.8127 6.61715L12.7752 6.54965C12.7752 6.54965 12.8014 6.57965 12.8202 6.61715C12.8427 6.65465 12.8577 6.6809 12.8502 6.6959C12.8427 6.71465 12.8277 6.72215 12.8277 6.72965L12.9139 6.7784C12.9514 6.8009 13.0002 6.8159 13.0077 6.8084C13.0152 6.7934 13.0189 6.76715 13.0152 6.7259C13.0114 6.6884 12.9889 6.62465 12.9889 6.62465C12.9889 6.62465 13.0152 6.68465 13.0189 6.7259C13.0227 6.76715 13.0152 6.8009 13.0227 6.8159C13.0339 6.8309 13.0639 6.83465 13.0639 6.83465C13.0639 6.83465 13.0414 6.84965 12.9889 6.83465C12.9327 6.81965 12.7002 6.69965 12.6889 6.7109C12.6777 6.7259 12.7977 6.79715 12.8502 6.84965C12.9064 6.8984 12.9327 6.95465 12.9327 6.95465C12.9327 6.95465 12.8914 6.91715 12.8502 6.89465C12.8089 6.87215 12.6852 6.8084 12.6739 6.81965C12.6664 6.82715 12.7227 6.8384 12.7264 6.8459C12.7302 6.85715 12.6889 6.89465 12.6889 6.9134C12.6889 6.9284 12.8652 7.05215 12.8577 7.0634C12.8539 7.0784 12.8127 7.11215 12.8052 7.1084C12.8014 7.1084 12.7114 7.0409 12.7114 7.0484C12.7114 7.0559 12.7639 7.10465 12.7639 7.11215C12.7639 7.1234 12.7264 7.14215 12.7339 7.16465C12.7414 7.18715 12.8314 7.26215 12.8314 7.2884C12.8314 7.31465 12.7789 7.33715 12.7902 7.35215L12.8464 7.42715C12.8464 7.42715 12.7939 7.3934 12.7789 7.37465C12.7639 7.35965 12.7302 7.3184 12.7227 7.3259C12.7189 7.32965 12.6852 7.4009 12.6852 7.41965C12.6927 7.43465 12.7339 7.45715 12.7414 7.5059C12.7489 7.54715 12.7339 7.5959 12.7302 7.5959C12.7302 7.5959 12.6702 7.5209 12.6552 7.51715C12.6477 7.51715 12.6327 7.5209 12.6214 7.53965C12.6102 7.5584 12.5764 7.6184 12.5839 7.62965C12.5839 7.6409 12.6439 7.6559 12.6439 7.7009C12.6429 7.73338 12.6295 7.76423 12.6064 7.78715L12.5277 7.69715C12.5202 7.69715 12.4452 7.7834 12.4414 7.79465C12.4414 7.80215 12.4939 7.8434 12.4864 7.8584C12.4752 7.8734 12.4377 7.8509 12.4189 7.86215L12.3552 7.8884C12.3477 7.8884 12.3364 7.8659 12.3364 7.8659Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M13.3116 6.74836L13.3304 6.71086C13.3416 6.69961 13.3866 6.64711 13.3679 6.63586C13.3529 6.62836 13.2929 6.64711 13.2554 6.64336C13.2179 6.64336 13.1916 6.65086 13.0829 6.55711C13.0829 6.55711 12.7341 6.31711 12.1979 6.28336C12.0254 6.27586 11.9504 6.33586 11.9429 6.36586C11.9429 6.37336 11.9879 6.29836 12.1566 6.30211C12.2316 6.30211 12.7754 6.34336 13.0566 6.56461C13.0716 6.57586 13.1654 6.66586 13.2516 6.65461C13.3379 6.64711 13.3566 6.63586 13.3529 6.64711C13.3529 6.66211 13.3266 6.69211 13.3191 6.70711C13.3145 6.72061 13.3108 6.73439 13.3079 6.74836H13.3116ZM12.3741 6.82336V6.81586C12.3666 6.80086 12.3329 6.75211 12.2729 6.69961C12.1798 6.63387 12.079 6.57972 11.9729 6.53836C11.9616 6.53461 12.1979 6.64711 12.2616 6.70711L12.3741 6.81961V6.82336Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M12.3738 7.20592C12.3738 7.20592 12.3588 7.18342 12.3101 7.15342C12.2809 7.13541 12.2493 7.12153 12.2163 7.11217L12.3288 7.13842C12.3474 7.15759 12.3615 7.18064 12.3701 7.20592H12.3738ZM12.3438 7.00717C12.3438 7.00717 12.3288 6.98467 12.2651 6.96217C12.2013 6.93967 12.1826 6.94342 12.1826 6.94342C12.1826 6.94342 12.2426 6.91717 12.2876 6.94342C12.3006 6.94893 12.3124 6.95712 12.3221 6.96745C12.3318 6.97779 12.3392 6.99004 12.3438 7.00342V7.00717ZM12.3063 6.83842C12.3063 6.83842 12.2913 6.80842 12.2313 6.78967C12.1751 6.76717 12.1338 6.76342 12.1338 6.76342C12.1338 6.76342 12.1938 6.74842 12.2538 6.77092C12.3101 6.79342 12.3063 6.83842 12.3063 6.83842ZM12.2313 6.73342C12.2313 6.73342 12.2163 6.71092 12.1076 6.68467C11.9951 6.65842 11.9576 6.65842 11.9576 6.65842C11.9576 6.65842 12.1113 6.64342 12.1526 6.66217C12.1938 6.68092 12.2351 6.73342 12.2351 6.73342H12.2313ZM12.0326 6.62092C12.0326 6.62092 11.9651 6.59842 11.9013 6.59467C11.8376 6.59092 11.7363 6.59842 11.7363 6.59842C11.7363 6.59842 11.9238 6.56842 11.9726 6.57967C12.0251 6.59092 12.0326 6.61717 12.0326 6.61717V6.62092Z"
                                                                            fill="#D2A567" />
                                                                        <path
                                                                            d="M11.4176 8.93869C11.4176 8.93869 11.4514 8.99869 11.5151 8.99869C11.5826 9.00244 11.6314 9.09619 11.6314 9.09619L11.5601 9.16744L11.3876 9.17494L11.3314 9.08494L11.4176 8.93869ZM11.4176 8.87869C11.4251 8.86744 11.3689 8.75494 11.3276 8.73619C11.2901 8.71744 11.3426 8.77369 11.3351 8.79619C11.3239 8.81869 11.3201 8.84869 11.3239 8.85244C11.3239 8.85244 11.3576 8.90494 11.3389 8.92744C11.3239 8.94619 11.4214 8.87869 11.4214 8.87869H11.4176Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M11.3914 9.0509C11.3914 9.0509 11.4214 9.0659 11.4439 9.0584C11.4701 9.0509 11.4926 9.02465 11.4926 9.02465L11.3914 9.0509ZM11.3576 9.0059C11.3576 9.0059 11.4551 8.93465 11.4476 8.89715C11.4401 8.85965 11.4214 8.85965 11.4101 8.8634C11.38 8.87934 11.3532 8.90099 11.3314 8.92715C11.3276 8.9384 11.3576 9.0059 11.3576 9.0059Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M11.2866 9.05499C11.2866 9.05499 11.3091 9.10374 11.3391 9.10374C11.3691 9.10374 11.4141 9.07749 11.4141 9.05874C11.4179 9.03999 11.3841 9.00249 11.3654 8.99499C11.3429 8.98374 11.2941 9.00999 11.2941 9.00999L11.2904 9.05499H11.2866Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M11.3767 8.99082C11.3767 9.00582 11.3129 9.03582 11.2904 9.03582C11.2717 9.03582 11.2304 8.98707 11.2454 8.97957L11.3017 8.96457C11.3167 8.95707 11.3204 8.93457 11.3279 8.93457C11.3392 8.93457 11.3654 8.93832 11.3692 8.95332C11.3767 8.97207 11.3842 8.97582 11.3767 8.99082Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M11.3167 9.0325C11.3167 9.0325 11.2192 9.16 11.1779 9.15625C11.1404 9.14875 11.1967 8.96875 11.1967 8.96875L11.2417 8.99125C11.2754 8.99875 11.3054 9.01375 11.3167 9.02875V9.0325Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M11.144 8.93848C11.144 8.93848 11.2678 8.96098 11.2715 8.97973C11.279 9.00223 11.2153 9.02848 11.1778 9.02848C11.144 9.02848 11.144 8.93848 11.144 8.93848Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M10.8364 9.12621C10.8364 9.12621 10.8552 9.18621 10.9077 9.18996C10.9602 9.18996 11.0127 9.13371 11.0127 9.13371L10.8852 9.08496L10.8364 9.12621Z"
                                                                            fill="#202220" />
                                                                        <path
                                                                            d="M10.8368 9.12605L10.8518 9.1598C10.863 9.1748 10.878 9.1898 10.908 9.19355H10.9118C10.9643 9.19355 11.013 9.13355 11.013 9.13355L10.8855 9.08105L10.833 9.12605H10.8368L10.8855 9.08855L11.0093 9.1373V9.13355L11.0018 9.14105C10.9868 9.15605 10.9493 9.18605 10.9118 9.18605H10.908C10.8975 9.18548 10.8873 9.18247 10.8782 9.17726C10.8691 9.17205 10.8613 9.16479 10.8555 9.15605C10.8509 9.14903 10.8471 9.14148 10.8443 9.13355V9.1298L10.8405 9.12605H10.8368Z"
                                                                            fill="#4B4139" />
                                                                        <path
                                                                            d="M10.874 9.11117C10.874 9.11117 10.8928 9.15617 10.964 9.15617C11.0353 9.15617 11.0878 9.09992 11.0878 9.09992L10.9753 9.01367L10.874 9.11117Z"
                                                                            fill="#202220" />
                                                                        <path
                                                                            d="M10.8742 9.11102C10.8742 9.11102 10.8929 9.15602 10.9642 9.15977C11.0392 9.15977 11.0917 9.10352 11.0917 9.10352L10.9792 9.00977L10.8667 9.11102H10.8742L10.9792 9.01727L11.0879 9.10352V9.09977C11.0556 9.13112 11.013 9.14976 10.9679 9.15227C10.9411 9.15399 10.9144 9.146 10.8929 9.12977C10.8886 9.12521 10.8849 9.12018 10.8817 9.11477C10.8804 9.1136 10.8791 9.11234 10.8779 9.11102H10.8742Z"
                                                                            fill="#4B4139" />
                                                                        <path
                                                                            d="M10.8813 9.1224C10.8813 9.1224 10.9151 9.1449 10.9488 9.14865C10.9863 9.14865 11.0313 9.1374 11.0313 9.1374L10.9901 9.1524L10.9601 9.15615L10.9301 9.1524L10.9076 9.14115L10.8851 9.12615V9.11865L10.8813 9.1224Z"
                                                                            fill="#4B4139" />
                                                                        <path
                                                                            d="M10.9639 9.05857C10.9639 9.05857 10.9939 9.13357 11.0614 9.12607C11.1251 9.11857 11.1251 9.08107 11.1251 9.08107L11.0501 8.97607L10.9639 9.05857Z"
                                                                            fill="#202220" />
                                                                        <path
                                                                            d="M10.9642 9.05875L10.9829 9.09625C10.9979 9.11125 11.0204 9.13375 11.0504 9.13375L11.0617 9.13C11.0917 9.12625 11.1104 9.115 11.1179 9.10375C11.1292 9.0925 11.1292 9.08125 11.1292 9.08125L11.0542 8.96875L10.9604 9.05875H10.9642L11.0542 8.98L11.1254 9.08125C11.1254 9.08875 11.1142 9.11875 11.0579 9.1225H11.0504C11.0383 9.12252 11.0262 9.11984 11.0152 9.11465C11.0042 9.10946 10.9945 9.1019 10.9867 9.0925C10.981 9.08547 10.976 9.07794 10.9717 9.07V9.0625C10.9704 9.06131 10.9691 9.06006 10.9679 9.05875H10.9642Z"
                                                                            fill="#4B4139" />
                                                                        <path
                                                                            d="M10.9716 9.07373C10.9716 9.07373 11.0091 9.12248 11.0466 9.12248C11.0663 9.1225 11.0857 9.11733 11.1028 9.10748V9.11123L11.0841 9.12248L11.0541 9.12623H11.0241L10.9978 9.10748L10.9753 9.07373H10.9716ZM10.8516 9.14873C10.8516 9.14873 10.8816 9.18248 10.9078 9.18248C10.9329 9.18016 10.9572 9.17249 10.9791 9.15998H10.9828L10.9753 9.16373L10.9453 9.17873L10.9116 9.18998L10.8853 9.18623L10.8628 9.17123L10.8516 9.15623V9.14873Z"
                                                                            fill="#4B4139" />
                                                                        <path
                                                                            d="M11.1366 8.93496C11.1666 8.92746 11.2266 9.00996 11.2266 9.05496C11.2266 9.09996 11.2078 9.15621 11.1778 9.15621C11.1478 9.15621 11.0803 9.09246 11.0653 9.06246C11.0503 9.02871 11.0353 9.00996 11.0466 8.99121C11.0578 8.97621 11.1366 8.93496 11.1366 8.93496ZM10.8366 8.94246C10.8366 8.94246 10.7841 8.90496 10.7653 8.92371C10.7466 8.94246 10.7541 9.00996 10.7653 9.02121C10.7803 9.03621 10.8403 8.99121 10.8403 8.99121L10.8328 8.94246H10.8366Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M10.8292 8.9873C10.8292 8.9873 10.7617 8.9948 10.7617 9.0248C10.7617 9.0548 10.7955 9.0848 10.7992 9.0923C10.8067 9.09605 10.8667 9.06605 10.8667 9.06605L10.8292 8.9873Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M10.8551 9.03975C10.8551 9.03975 10.7876 9.06225 10.7876 9.08475C10.7876 9.10725 10.8176 9.1485 10.8363 9.1485C10.8551 9.1485 10.8738 9.111 10.8813 9.09975C10.8926 9.09225 10.8551 9.03975 10.8551 9.03975ZM10.8851 8.8485C10.8851 8.8485 10.8738 8.82975 10.8476 8.841C10.8176 8.85225 10.7876 8.8785 10.7913 8.92725C10.7951 8.9685 10.8138 9.00225 10.8138 9.00225L10.9151 8.96475L10.8851 8.8485Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M10.8928 8.92334C10.8928 8.92334 10.8103 8.95334 10.8066 8.98709C10.8028 9.02084 10.8253 9.05084 10.8441 9.06209C10.8703 9.06209 10.9416 8.99459 10.9416 8.99459L10.8928 8.92709V8.92334Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M10.9678 9.06251C10.9678 9.06251 10.8853 9.11876 10.874 9.11876C10.8628 9.11876 10.829 9.07376 10.8365 9.04376C10.844 9.01376 10.9003 8.99501 10.9228 8.98376C10.9453 8.97626 10.9678 9.06251 10.9678 9.06251ZM11.0428 8.75501C11.0428 8.75501 11.0165 8.73251 10.9678 8.73626C10.9153 8.74001 10.8778 8.81126 10.8703 8.84126C10.8628 8.87501 10.8703 8.93876 10.889 8.94626C10.9078 8.95751 11.0128 8.87126 11.0128 8.87126L11.0428 8.75876V8.75501Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M10.9415 9.00963C10.904 9.00588 10.874 8.95338 10.8778 8.92338C10.8853 8.89338 10.9528 8.84088 10.9903 8.84838C11.0278 8.85213 11.0203 8.94213 11.0203 8.94213C11.0203 8.94213 10.9753 9.01338 10.9415 9.00963Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M11.0501 8.99846C11.0501 8.99846 11.0351 9.04346 10.9976 9.06221C10.9601 9.07721 10.9414 9.06221 10.9226 9.03596C10.9001 9.00596 10.9301 8.99096 10.9451 8.97596C10.9639 8.96096 11.0089 8.94971 11.0089 8.94971L11.0501 9.00221V8.99846Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M10.9939 8.89338C10.9939 8.89338 10.9564 8.92338 10.9789 8.96088C11.0014 8.99838 11.0164 9.01338 11.0464 9.01713C11.0764 9.02088 11.0951 9.00963 11.1176 8.98338C11.1401 8.95713 11.1739 8.94588 11.1701 8.90838C11.1664 8.87463 11.1551 8.84838 11.1326 8.84088C11.1139 8.82963 11.0501 8.84088 10.9939 8.89338Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M11.1065 8.73587C11.1065 8.73587 11.069 8.71712 11.0353 8.73587C11.0053 8.75462 10.9828 8.79212 10.979 8.82587L10.9865 8.91212C10.9865 8.91212 11.0315 8.89712 11.0615 8.87462C11.0878 8.85212 11.099 8.84462 11.0915 8.83337C11.0915 8.82587 11.0765 8.81837 11.0765 8.78837C11.0765 8.73587 11.1065 8.73212 11.1065 8.73212V8.73587Z"
                                                                            fill="#202220" />
                                                                        <path
                                                                            d="M11.1067 8.7358C11.1067 8.7358 11.0617 8.72455 11.0354 8.73955C11.0109 8.75643 10.9935 8.78183 10.9867 8.8108C10.9754 8.8408 10.9829 8.8483 10.9829 8.8483V8.7958C10.9979 8.7658 11.0204 8.73955 11.0429 8.73205C11.0729 8.7208 11.1067 8.73205 11.1067 8.73205V8.7358Z"
                                                                            fill="#4B4139" />
                                                                        <path
                                                                            d="M12.3288 9.63604L12.3888 9.60604L12.4638 9.56104L12.4788 9.64354L12.4113 9.69604H12.355L12.3213 9.66978L12.3288 9.63228V9.63604Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M12.2391 9.64363H12.2766C12.3179 9.64363 12.3216 9.63238 12.3291 9.63238C12.3366 9.63613 12.3479 9.68113 12.3479 9.68113L12.3329 9.70738L12.2766 9.74113L12.2279 9.71113L12.2241 9.64363H12.2391ZM12.6929 9.61363C12.6929 9.61363 12.6816 9.59488 12.6591 9.57613L12.5766 9.50488V9.69238L12.6629 9.68863L12.7041 9.63238L12.6929 9.61363Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M12.2392 9.64343C12.2392 9.64343 12.2242 9.62468 12.1904 9.62843C12.1529 9.62843 12.1154 9.66218 12.1117 9.68468C12.1079 9.71093 12.1117 9.78218 12.1304 9.79718C12.1492 9.81218 12.1754 9.81593 12.2129 9.80843C12.2504 9.79718 12.4529 9.67343 12.4529 9.67343L12.4004 9.68468C12.3742 9.69218 12.3479 9.68093 12.3479 9.68093C12.3479 9.68093 12.3217 9.71093 12.2879 9.71843C12.2579 9.71843 12.2504 9.69968 12.2429 9.68468L12.2392 9.64343Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M12.374 9.70752L12.329 9.72627L12.2803 9.74877L12.2953 9.80877L12.3815 9.82752L12.434 9.78627V9.72627L12.3703 9.70752H12.374ZM12.764 9.66252L12.734 9.63252C12.719 9.61752 12.6965 9.61377 12.6965 9.61377L12.6478 9.67002V9.70752L12.6928 9.73377L12.7265 9.74127L12.7678 9.71127L12.764 9.66252Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M12.4714 9.63623C12.4714 9.63623 12.4339 9.65123 12.4151 9.66623L12.3701 9.70373C12.3701 9.71123 12.4114 9.75623 12.4114 9.75623L12.4564 9.75998L12.5501 9.69623L12.5426 9.63623H12.4714ZM12.8276 9.71123L12.8089 9.68498C12.7939 9.66998 12.7714 9.66248 12.7639 9.66248C12.7526 9.66248 12.7151 9.71873 12.7151 9.71873V9.73373L12.7451 9.77123L12.8051 9.78998L12.8464 9.74498L12.8276 9.71123Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M12.6738 9.77875L12.7188 9.78625C12.7188 9.78625 12.7188 9.7975 12.7301 9.805C12.7413 9.81625 12.7413 9.805 12.7413 9.805C12.7413 9.805 12.7488 9.85 12.7938 9.88C12.7938 9.88 12.8463 9.9025 12.8688 9.8875C12.8988 9.8725 12.8951 9.8875 12.8951 9.8875L12.9701 9.7975C12.9701 9.7975 12.9701 9.77875 12.9513 9.77875C12.9513 9.77875 12.9663 9.71875 12.9138 9.70375C12.8688 9.69625 12.8313 9.71125 12.8313 9.71125C12.8313 9.71125 12.7938 9.77875 12.7713 9.77125C12.7602 9.76705 12.75 9.76067 12.7413 9.7525L12.7151 9.71875C12.7151 9.71875 12.7001 9.7225 12.6813 9.71125C12.6626 9.7 12.6476 9.67 12.6476 9.67C12.6476 9.67 12.6213 9.66625 12.6101 9.655L12.5913 9.625L12.5201 9.6775C12.5201 9.6775 12.5201 9.69625 12.4788 9.72625C12.4376 9.75625 12.4151 9.75625 12.4151 9.75625C12.4151 9.75625 12.4001 9.82 12.3551 9.80875C12.3101 9.7975 12.2801 9.74875 12.2801 9.74875C12.2801 9.74875 12.2463 9.74125 12.2276 9.77125C12.2051 9.7975 12.1938 9.80875 12.1938 9.835C12.1938 9.865 12.2126 9.9025 12.2313 9.9175C12.2426 9.92875 12.2876 9.96625 12.3438 9.94C12.3963 9.91 12.3776 9.865 12.3776 9.865L12.4076 9.84625C12.4413 9.82375 12.4751 9.79 12.5013 9.7825"
                                                                            fill="#F8C83C" />
                                                                        <path
                                                                            d="M12.6738 9.77875L12.7188 9.78625C12.7188 9.78625 12.7188 9.7975 12.7301 9.805C12.7413 9.81625 12.7413 9.805 12.7413 9.805C12.7413 9.805 12.7488 9.85 12.7938 9.88C12.7938 9.88 12.8463 9.9025 12.8688 9.8875C12.8988 9.8725 12.8951 9.8875 12.8951 9.8875L12.9701 9.7975C12.9701 9.7975 12.9701 9.77875 12.9513 9.77875C12.9513 9.77875 12.9663 9.71875 12.9138 9.70375C12.8688 9.69625 12.8313 9.71125 12.8313 9.71125C12.8313 9.71125 12.7938 9.77875 12.7713 9.77125C12.7602 9.76705 12.75 9.76067 12.7413 9.7525L12.7151 9.71875C12.7151 9.71875 12.7001 9.7225 12.6813 9.71125C12.6626 9.7 12.6476 9.67 12.6476 9.67C12.6476 9.67 12.6213 9.66625 12.6101 9.655L12.5913 9.625L12.5201 9.6775C12.5201 9.6775 12.5201 9.69625 12.4788 9.72625C12.4376 9.75625 12.4151 9.75625 12.4151 9.75625C12.4151 9.75625 12.4001 9.82 12.3551 9.80875C12.3101 9.7975 12.2801 9.74875 12.2801 9.74875C12.2801 9.74875 12.2463 9.74125 12.2276 9.77125C12.2051 9.7975 12.1938 9.80875 12.1938 9.835C12.1938 9.865 12.2126 9.9025 12.2313 9.9175C12.2426 9.92875 12.2876 9.96625 12.3438 9.94C12.3963 9.91 12.3776 9.865 12.3776 9.865L12.4076 9.84625C12.4413 9.82375 12.4751 9.79 12.5013 9.7825"
                                                                            stroke="#977C2E" stroke-width="0.0375"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.5917 9.40332V9.52332C12.5917 9.52332 12.6067 9.63207 12.5842 9.66207C12.5617 9.69957 12.4754 9.68832 12.4642 9.66207C12.4529 9.63207 12.4567 9.54207 12.4567 9.54207L12.5917 9.40332Z"
                                                                            fill="#F8C83C" stroke="#977C2E"
                                                                            stroke-width="0.0375" />
                                                                        <path
                                                                            d="M12.4976 9.76711C12.4976 9.76711 12.4789 9.79711 12.5351 9.80461C12.5501 9.80461 12.5614 9.79711 12.5689 9.78961C12.5839 9.77461 12.5801 9.75961 12.5801 9.75961C12.5801 9.75961 12.5726 9.80461 12.6251 9.80461C12.6776 9.80836 12.6739 9.75586 12.6739 9.75586"
                                                                            fill="#F8C83C" />
                                                                        <path
                                                                            d="M12.4976 9.76711C12.4976 9.76711 12.4789 9.79711 12.5351 9.80461C12.5501 9.80461 12.5614 9.79711 12.5689 9.78961C12.5839 9.77461 12.5801 9.75961 12.5801 9.75961C12.5801 9.75961 12.5726 9.80461 12.6251 9.80461C12.6776 9.80836 12.6739 9.75586 12.6739 9.75586"
                                                                            stroke="#977C2E" stroke-width="0.0375"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                        <path
                                                                            d="M12.044 9.86482C12.044 9.86482 12.014 9.81232 12.0477 9.79357C12.0852 9.77482 12.104 9.79357 12.1265 9.79357C12.149 9.79357 12.1415 9.74107 12.1377 9.72982C12.1319 9.7133 12.123 9.69803 12.1115 9.68482C12.104 9.67732 11.9802 9.69232 11.984 9.77107C11.984 9.84982 12.044 9.86482 12.044 9.86482ZM12.2315 10.0598C12.2315 10.0598 12.194 10.0036 12.2165 9.96982C12.2352 9.93607 12.254 9.95857 12.2615 9.95482C12.2727 9.95482 12.2765 9.93232 12.2615 9.89482C12.2427 9.85732 12.2202 9.84232 12.209 9.83857C12.194 9.83857 12.1227 9.89107 12.134 9.95857C12.139 9.98296 12.1508 10.0054 12.168 10.0233C12.1853 10.0413 12.2073 10.0539 12.2315 10.0598ZM12.914 9.99232C12.914 9.99232 13.0452 10.0486 13.0527 9.91732C13.0602 9.84232 12.9965 9.79357 12.9777 9.79357C12.9627 9.79357 12.9515 9.80482 12.929 9.83107C12.9027 9.86107 12.8877 9.87982 12.8952 9.89107C12.9065 9.90232 12.944 9.87982 12.9627 9.92107C12.989 9.99607 12.914 9.99232 12.914 9.99232Z"
                                                                            fill="#202220" />
                                                                        <path
                                                                            d="M12.2315 10.0596C12.2315 10.0596 12.1303 10.0371 12.1303 9.93584C12.1303 9.86834 12.2053 9.83834 12.2053 9.83834C12.2053 9.83834 12.1378 9.87584 12.1378 9.93584C12.134 10.0371 12.2315 10.0596 12.2315 10.0596ZM12.044 9.86459C12.044 9.86459 11.984 9.85334 11.9803 9.76709C11.9728 9.68084 12.1115 9.68459 12.1115 9.68459C12.1115 9.68459 11.9803 9.6921 11.984 9.77459C11.9915 9.85709 12.044 9.86459 12.044 9.86459ZM12.914 9.99209C12.914 9.99209 12.9403 10.0033 12.9703 10.0033C13.0003 10.0033 13.0378 9.99209 13.0453 9.94334C13.0603 9.89459 13.0565 9.86834 13.0228 9.82709C13.0003 9.79334 12.9778 9.79709 12.9778 9.79709C12.9778 9.79709 13.0003 9.79709 13.0153 9.82709C13.0378 9.85709 13.064 9.88709 13.0453 9.94334C13.0265 9.99959 12.9703 9.99959 12.9515 9.99959C12.9388 9.99826 12.9263 9.99575 12.914 9.99209Z"
                                                                            fill="#4B4139" />
                                                                        <path
                                                                            d="M11.3467 7.21352L11.3242 7.20602L11.3392 7.16852L11.4105 7.14227L11.478 7.13852L11.553 7.13477L11.583 7.15727L11.6205 7.24352L11.4855 7.32602L11.463 7.33352L11.4555 7.29602L11.433 7.24352L11.3467 7.21352Z"
                                                                            fill="#904720" />
                                                                        <path
                                                                            d="M12.6366 9.20479L12.6253 8.99854L12.0703 9.17104L12.2878 9.37729L12.6366 9.20479Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M11.6013 8.84484L11.5563 8.80734L11.5038 8.77734H11.4626L11.4551 8.78859L11.4626 8.80734L11.5113 8.86734L11.5976 8.91234L11.6276 8.93859L11.6463 8.94609L11.6051 8.84484H11.6013ZM11.5901 8.93109L11.6201 8.93859L11.6538 8.97609L11.6726 9.01359L11.6988 9.06234L11.7063 9.09235L11.6463 9.0811L11.4663 9.02484L11.4813 8.97984L11.5113 8.95359L11.5376 8.94234L11.5751 8.93484L11.5901 8.93109Z"
                                                                            fill="#D2A567" />
                                                                        <path
                                                                            d="M11.7068 9.08123H11.7368L11.7593 9.06248L11.748 8.99498L11.7593 8.77748L11.613 8.60498L11.583 8.70248L11.6243 8.87873L11.658 8.98373L11.7068 9.08123Z"
                                                                            fill="#D2A567" />
                                                                        <path
                                                                            d="M11.6013 8.68726C11.6013 8.68726 11.5938 8.70226 11.605 8.76226C11.6163 8.81851 11.6388 8.94601 11.6875 9.03226L11.6388 8.96101C11.6388 8.96101 11.5638 8.78851 11.575 8.65351C11.5863 8.52226 11.6013 8.68351 11.6013 8.68351V8.68726ZM11.71 8.79601C11.71 8.79601 11.6763 8.83351 11.6725 8.86726V8.94976C11.6725 8.94976 11.6725 8.91226 11.7025 8.90101C11.7363 8.88976 11.7288 8.98726 11.7325 8.99851L11.7513 8.82226L11.71 8.79601ZM11.725 9.15601L11.56 9.11851C11.4738 9.08101 11.4288 9.05101 11.4325 9.03226C11.4325 9.00976 11.5825 9.03601 11.605 9.03976L11.695 9.07726H11.7325L11.8038 9.04726L11.8113 9.12226L11.725 9.15976V9.15601ZM11.4513 9.12601C11.4513 9.12601 11.4888 9.15601 11.47 9.16351C11.4428 9.1749 11.413 9.17879 11.3838 9.17476L11.5413 9.21226L11.575 9.18601L11.4513 9.12601Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.4067 9.08116C11.4142 9.07366 11.418 9.10741 11.4742 9.11116C11.5305 9.11866 11.5567 9.10366 11.5567 9.10366L11.583 9.11866L11.613 9.12616L11.5867 9.16741L11.4817 9.13741L11.4255 9.10741L11.4067 9.08116Z"
                                                                            fill="#D2A567" />
                                                                        <path
                                                                            d="M11.7739 9.00992L11.8039 9.04742L11.8227 8.95742V8.86367L11.7627 8.82617L11.7739 9.00992Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.613 8.85234L11.5642 8.77359L11.5005 8.65734L11.538 8.58984L11.5867 8.65734C11.5867 8.65734 11.5717 8.70609 11.583 8.75109C11.5905 8.79609 11.613 8.85234 11.613 8.85234Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M11.2788 9.14867C11.2788 9.14867 11.3013 9.11492 11.3501 9.11117C11.3803 9.10887 11.4106 9.11141 11.4401 9.11867L11.5376 9.17117L11.5601 9.20492L11.3726 9.17867L11.2788 9.14867Z"
                                                                            fill="#D2A567" />
                                                                        <path
                                                                            d="M11.7741 8.81116L11.7816 8.96116C11.7816 8.99866 11.8078 9.03616 11.8041 9.04741C11.7966 9.06241 11.7891 9.06991 11.7666 9.08116C11.7441 9.08866 11.6916 9.08116 11.6916 9.08116C11.6916 9.08116 11.7403 9.07366 11.7441 9.06241C11.7441 9.05491 11.7291 9.00991 11.7253 8.97241C11.7253 8.93491 11.7291 8.88991 11.7141 8.88991C11.7028 8.88991 11.6878 8.90491 11.6841 8.91241C11.6841 8.91241 11.6991 8.76991 11.7141 8.75491C11.7291 8.73991 11.7741 8.81491 11.7741 8.81491V8.81116Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.4255 9.1108C11.4255 9.1108 11.4067 9.0958 11.4067 9.0808C11.4067 9.06955 11.4292 9.1408 11.5342 9.13705C11.6392 9.13705 11.6317 9.12955 11.6317 9.12955H11.6805C11.6805 9.12955 11.6692 9.1783 11.6617 9.18205C11.6339 9.19896 11.6064 9.21646 11.5792 9.23455L11.553 9.24955V9.24205L11.5417 9.1633L11.4517 9.1258L11.4255 9.1108Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.6126 8.85242C11.6126 8.85242 11.4926 8.72867 11.4514 8.64617C11.4139 8.56367 11.4364 8.45117 11.4364 8.45117L11.5489 8.60117C11.5489 8.60117 11.5339 8.62742 11.5376 8.67617C11.5451 8.72117 11.6126 8.85242 11.6126 8.85242Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.5339 9.30978C11.5339 9.29853 11.5264 9.27228 11.5489 9.24228C11.6239 9.15228 11.8039 9.09229 11.8039 9.09229V9.19728L11.5714 9.30978H11.5339Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.549 9.22338C11.5603 9.21963 11.6015 9.18588 11.6015 9.17463C11.6015 9.15963 11.5753 9.15963 11.5228 9.14838C11.4665 9.13713 11.4253 9.11088 11.4253 9.11088C11.4253 9.11088 11.489 9.16338 11.5153 9.17463C11.5415 9.18213 11.5378 9.19338 11.534 9.20088L11.549 9.22338ZM11.8603 9.24963C11.8603 9.24963 11.8265 9.20088 11.8153 9.17088C11.804 9.14088 11.804 9.09213 11.804 9.08838L11.7665 9.11463L11.6915 9.14088C11.6915 9.14088 11.7665 9.14088 11.7665 9.16338C11.7665 9.18963 11.654 9.20088 11.654 9.20088C11.654 9.20463 11.744 9.18588 11.7403 9.20463C11.7328 9.22713 11.6953 9.23088 11.6465 9.24963L11.5603 9.28713L11.534 9.30588C11.534 9.30588 11.5565 9.32088 11.5903 9.31713C11.624 9.31713 11.699 9.29838 11.699 9.29838L11.8415 9.24213L11.8603 9.24963Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.8604 9.24971C11.8604 9.24971 11.8229 9.23846 11.7929 9.06971C11.7629 8.90096 11.7704 8.85596 11.7704 8.85596L11.8379 8.90471L11.9016 9.01721L11.8604 9.24971Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.8828 8.97217C11.8828 8.97217 11.849 9.06592 11.849 9.12217C11.849 9.17467 11.8453 9.21217 11.8603 9.24967C11.8753 9.28717 11.9278 9.33592 11.9278 9.33592L11.9541 9.31342L11.9653 9.23842L11.9691 9.11092L11.8828 8.97217Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.9767 9.0998C11.9767 9.0998 11.9917 9.33605 11.9317 9.34355C11.9054 9.34355 11.8604 9.25355 11.8604 9.2498C11.8604 9.2498 11.9129 9.33605 11.9354 9.32855C11.9729 9.31355 11.9579 9.08105 11.9579 9.08105L11.9767 9.0998ZM11.8604 9.2498C11.8604 9.2498 11.8492 9.2498 11.8342 9.2198C11.8192 9.19355 11.8342 9.2423 11.7067 9.2873C11.5792 9.3323 11.5342 9.30605 11.5342 9.30605C11.5342 9.30605 11.5754 9.34355 11.7029 9.30605C11.8304 9.26855 11.8192 9.2573 11.8379 9.25355H11.8604V9.2498Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M11.6242 8.94965C11.6242 8.94965 11.6467 8.9684 11.6692 9.0134C11.6817 9.03844 11.6942 9.06344 11.7067 9.0884H11.7142C11.7142 9.0884 11.6992 9.03965 11.6767 9.0059L11.5942 8.88965L11.6242 8.94965Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.5488 9.24219C11.5488 9.24219 11.5601 9.20094 11.5488 9.18969C11.5376 9.18219 11.5226 9.18969 11.4363 9.18219C11.3832 9.17427 11.3305 9.163 11.2788 9.14844C11.2788 9.14844 11.3388 9.18594 11.3913 9.20094L11.5226 9.23094L11.5413 9.23469L11.5488 9.24219Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.5488 9.24219L11.5413 9.22344C11.5301 9.21219 11.5151 9.22719 11.4101 9.19719C11.3051 9.17094 11.2788 9.14844 11.2788 9.14844C11.2788 9.14844 11.3163 9.18594 11.4063 9.20469L11.5488 9.24219Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M11.5976 8.93115C11.5976 8.93115 11.5189 8.9349 11.4926 8.9574C11.4664 8.97615 11.4326 9.0324 11.4326 9.0324L11.4814 9.03615C11.4814 9.03615 11.4776 8.99115 11.5001 8.9649C11.5264 8.9424 11.5639 8.93865 11.5976 8.93115Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.4478 8.78125C11.4478 8.78125 11.4778 8.82625 11.5115 8.8375C11.5453 8.8525 11.579 8.8675 11.594 8.8825C11.609 8.8975 11.6278 8.95 11.6278 8.95C11.6278 8.95 11.5153 8.90125 11.489 8.875C11.4709 8.84588 11.457 8.81431 11.4478 8.78125Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.5565 8.81115C11.5565 8.81115 11.5453 8.7924 11.5153 8.7774C11.4853 8.7624 11.4628 8.76615 11.4515 8.77365C11.4403 8.78115 11.4478 8.78115 11.4478 8.78115L11.4853 8.8449L11.5115 8.8374C11.5115 8.8374 11.4515 8.7999 11.4628 8.78865C11.4928 8.7624 11.5565 8.8074 11.5565 8.8074V8.81115Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.8604 8.66463L12.4979 8.33838L12.7979 8.75463L12.2467 8.90463L11.9579 8.92713L11.8154 8.82588L11.8604 8.66463Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M12.7114 8.84473L13.4989 9.52723L13.4127 9.58722L13.2252 9.53473L12.8427 9.15598L12.7002 9.01348L12.7114 8.84473Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M13.7239 9.39213L13.2739 9.05088L12.7002 8.61963L12.7152 8.82588L13.3677 9.42588L13.5814 9.52713L13.6939 9.49713L13.7464 9.43713L13.7239 9.39213Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M12.7116 8.90846C12.7116 8.90846 12.9366 9.16721 13.1091 9.29846C13.2816 9.42971 13.4466 9.57221 13.4841 9.54971C13.5141 9.53096 13.5029 9.51221 13.5029 9.51221L12.7041 8.85596L12.7079 8.90846H12.7116Z"
                                                                            fill="#803F1D" />
                                                                        <path
                                                                            d="M13.2664 9.56494L13.1877 9.62869L13.0939 9.59119L12.6064 9.09619L12.6327 9.00244L12.7002 9.01369L13.2664 9.56494Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M13.7239 9.39213C13.7239 9.39213 13.6639 9.53463 13.5364 9.50088C13.4089 9.46713 12.7114 8.80713 12.7114 8.80713V8.87463C12.7114 8.87463 13.4164 9.52338 13.5552 9.54963C13.6902 9.57588 13.8027 9.45588 13.7877 9.44463C13.7669 9.4266 13.7456 9.40909 13.7239 9.39213Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M12.6328 9.01362C12.6328 9.01362 12.8578 9.30237 12.9741 9.40737C13.0941 9.51612 13.1991 9.59487 13.2441 9.58737C13.2928 9.57987 13.2178 9.52362 13.2178 9.52362L12.8766 9.18612L12.7003 9.01362C12.7003 9.01362 12.6328 8.98737 12.6328 9.01362Z"
                                                                            fill="#803F1D" />
                                                                        <path
                                                                            d="M12.689 9.01338C12.689 9.01338 13.259 9.59463 13.304 9.60963C13.3977 9.63588 13.5365 9.53463 13.5365 9.53463L13.4877 9.50838L13.4802 9.52713C13.4802 9.52713 13.454 9.58713 13.3302 9.56088C13.2102 9.53463 12.7077 8.99463 12.7077 8.99463L12.689 9.01338Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M12.8992 9.57234L12.693 9.33234L12.648 9.25359L12.6367 9.15234L13.0492 9.56859L12.993 9.6061L12.9405 9.59109L12.8992 9.57234Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M13.2778 9.57973C13.2778 9.57973 13.229 9.65473 13.1578 9.63973C13.117 9.62986 13.0803 9.60758 13.0528 9.57598L12.6553 9.18598L12.644 9.12598C12.644 9.12598 13.0828 9.58723 13.1578 9.60598C13.2178 9.62098 13.259 9.55348 13.259 9.55348L13.2778 9.57973Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M13.0565 9.56473C13.0565 9.56473 13.0378 9.62473 12.9815 9.61723C12.9215 9.60598 12.9065 9.58348 12.9065 9.58348L12.659 9.29473L12.6553 9.21973C12.6553 9.21973 12.9103 9.56848 12.9665 9.58723C13.0265 9.60598 13.0415 9.54973 13.0415 9.54973L13.0565 9.56473Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M12.7977 8.80746C12.7977 8.80746 13.034 9.00996 13.0527 9.01746C13.0715 9.02871 13.154 9.03246 13.1577 9.04371C13.1652 9.05496 13.1052 9.04371 13.1015 9.05496C13.0977 9.06996 13.2215 9.16746 13.2402 9.17121C13.259 9.17121 13.3602 9.17121 13.3565 9.18621C13.3565 9.19746 13.289 9.18621 13.2852 9.20121C13.2852 9.21621 13.394 9.30246 13.4127 9.30621C13.4315 9.30621 13.559 9.30621 13.559 9.32121C13.559 9.33246 13.4577 9.32121 13.4577 9.33996C13.4615 9.36246 13.6302 9.46746 13.6227 9.48246C13.6152 9.49746 13.4202 9.35121 13.4165 9.35871C13.409 9.36621 13.4015 9.41121 13.3902 9.41871C13.379 9.42621 13.3902 9.35871 13.3827 9.32871C13.3715 9.29871 13.2552 9.21246 13.244 9.21996C13.2327 9.23121 13.244 9.28371 13.229 9.28371C13.214 9.28371 13.2327 9.21996 13.2215 9.19746C13.1823 9.15354 13.1368 9.11563 13.0865 9.08496C13.0715 9.08496 13.0827 9.13371 13.0715 9.14121C13.0602 9.14871 13.064 9.08496 13.049 9.06621C13.034 9.04746 12.7865 8.82246 12.7977 8.80371V8.80746Z"
                                                                            fill="#B07229" />
                                                                        <path
                                                                            d="M12.3927 9.45972C12.3927 9.45972 12.3927 9.54972 12.3552 9.56472C12.314 9.57597 12.239 9.39972 12.239 9.39972L12.2202 9.23473L12.3365 9.34723L12.3927 9.45972ZM12.7077 9.41473V9.37348C12.7077 9.35098 12.6965 9.31723 12.6965 9.31723L12.689 9.22723L12.6665 9.16348L12.6515 9.12598H12.6252L12.5615 9.17098L12.5427 9.23098L12.5727 9.34348L12.6027 9.44472L12.6515 9.45972L12.7077 9.42223V9.41473Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M12.6293 9.57246C12.6405 9.56871 12.6143 9.44496 12.6143 9.44496L12.5393 9.26496L12.5205 9.20121L12.4643 9.17871L12.4268 9.22371L12.4343 9.29496C12.4343 9.29496 12.4905 9.41496 12.5168 9.45621C12.5468 9.49746 12.603 9.57996 12.6293 9.57246Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M12.5613 9.1858C12.5867 9.21342 12.6047 9.24693 12.6138 9.2833C12.6138 9.2833 12.6626 9.4183 12.6551 9.4333C12.6476 9.44455 12.6176 9.44455 12.6176 9.44455C12.6176 9.44455 12.6851 9.51205 12.7038 9.50455C12.7226 9.49705 12.7151 9.42955 12.7076 9.41455C12.7038 9.39955 12.6813 9.41455 12.6701 9.3958C12.6663 9.3808 12.6401 9.29455 12.6401 9.2383V9.13705C12.6476 9.1258 12.6963 9.24955 12.6963 9.3133L12.7188 9.33955L12.6963 9.21955L12.6701 9.1333C12.6701 9.1258 12.6813 9.1033 12.6813 9.07705V9.03955C12.6813 9.03955 12.7038 9.0583 12.7151 9.0583C12.7263 9.0583 12.7413 9.0433 12.7451 8.9833C12.7526 8.92705 12.7413 8.7583 12.7413 8.7583L12.4863 9.0958L12.5613 9.18955V9.1858Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M12.5617 9.15967C12.5617 9.15967 12.5504 9.24967 12.5842 9.33967L12.6329 9.45217C12.6404 9.46342 12.6404 9.56092 12.6292 9.57217C12.6292 9.57217 12.5617 9.40717 12.5392 9.32467C12.5204 9.24592 12.5129 9.21217 12.5017 9.20467L12.4717 9.19717L12.5617 9.15967Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M12.5392 9.63623C12.5467 9.63623 12.5392 9.59873 12.5392 9.59873L12.5317 9.51248L12.4417 9.32873L12.3442 9.24248L12.2917 9.16748L12.2842 9.31748C12.2842 9.31748 12.3592 9.46748 12.4004 9.50498C12.4492 9.54998 12.5242 9.63998 12.5392 9.63623Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M12.1753 9.22355C12.1753 9.22355 12.1903 9.2648 12.1903 9.29105V9.34355L12.2578 9.4748C12.2915 9.53105 12.3215 9.59105 12.3478 9.5798C12.374 9.5648 12.3853 9.52355 12.3853 9.51605C12.389 9.5123 12.3553 9.5648 12.3403 9.5573C12.3044 9.47748 12.2755 9.39466 12.254 9.3098L12.2165 9.2798C12.202 9.26298 12.1882 9.24546 12.1753 9.2273V9.22355ZM12.4378 9.4298L12.374 9.31355C12.3553 9.27605 12.329 9.2498 12.3215 9.2498C12.314 9.2498 12.3028 9.1748 12.3028 9.1748C12.3028 9.1748 12.329 9.22355 12.3628 9.23855C12.4003 9.2573 12.419 9.26855 12.4378 9.2648L12.4453 9.3398L12.4378 9.4298Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M12.2765 9.30957C12.2765 9.30957 12.2953 9.36207 12.329 9.41082C12.359 9.45957 12.4153 9.51957 12.4153 9.51957C12.4153 9.51957 12.3553 9.45957 12.3215 9.41457C12.3002 9.38164 12.2826 9.34642 12.269 9.30957H12.2765Z"
                                                                            fill="#5C3A1D" />
                                                                        <path
                                                                            d="M12.449 9.24959C12.449 9.24959 12.4678 9.20459 12.479 9.20084L12.524 9.18959C12.524 9.18959 12.4978 9.18584 12.479 9.15959L12.4303 9.11084L12.4453 9.18584L12.449 9.24959ZM12.434 9.26459C12.434 9.26459 12.509 9.41459 12.524 9.47084C12.5428 9.51959 12.539 9.59834 12.539 9.59834C12.539 9.59834 12.5315 9.54209 12.5165 9.49709L12.4265 9.30959C12.4228 9.29834 12.434 9.26459 12.434 9.26459Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M12.5316 9.16375L12.5503 8.93875L12.5316 8.85625L12.4303 8.63125C12.4303 8.63125 12.4266 8.66125 12.4003 8.66125C12.3558 8.65069 12.3153 8.62721 12.2841 8.59375C12.2657 8.65203 12.2631 8.71414 12.2766 8.77375L12.4753 9.145L12.5316 9.16375Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M12.1417 9.30993C12.1417 9.30993 12.1717 9.34743 12.1905 9.34743C12.2055 9.33993 12.2017 9.26868 12.1792 9.22743C12.1567 9.18993 11.9167 8.86743 11.8792 8.84868C11.8417 8.82993 12.1417 9.30993 12.1417 9.30993Z"
                                                                            fill="#8B441F" />
                                                                        <path
                                                                            d="M12.3029 9.17843C12.3104 9.19343 12.3254 9.29468 12.2842 9.30593C12.2279 9.31718 11.9654 8.95343 11.9242 8.90468C11.9242 8.90468 11.7592 8.79968 11.7554 8.77343C11.7517 8.74718 11.9317 8.81093 11.9317 8.81093L12.2879 9.14843L12.3067 9.17843H12.3029Z"
                                                                            fill="#8B441F" stroke="#5C3A1D"
                                                                            stroke-width="0.0125" />
                                                                        <path
                                                                            d="M12.1417 9.30998C12.1417 9.30998 12.1117 9.26123 12.108 9.22373C12.108 9.18623 12.093 9.16748 12.093 9.15248C12.093 9.14123 11.898 8.86373 11.8792 8.84498C11.8567 8.82623 11.793 8.79248 11.793 8.79248C11.7944 8.82273 11.7981 8.85282 11.8042 8.88248C11.8042 8.88248 11.8642 8.99498 11.9542 9.09623C12.0161 9.16925 12.0786 9.24175 12.1417 9.31373V9.30998Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M12.4342 9.26119C12.4604 9.24994 12.4492 9.15994 12.438 9.12994C12.3843 9.01182 12.3293 8.89431 12.2729 8.77744L12.2242 8.79244L12.138 8.72494L12.0854 8.66869C12.0854 8.66869 12.1042 8.74744 12.1005 8.78494V8.84494L12.2242 9.06619L12.4342 9.26494V9.26119ZM12.6104 9.06619L12.6479 9.01744L12.6292 8.85244L12.5242 8.49994C12.5242 8.49994 12.4979 8.50369 12.4717 8.48869C12.4492 8.47369 12.4192 8.43994 12.4192 8.43994L12.4454 8.65369L12.5542 8.95369L12.5617 9.03994L12.6104 9.06619Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M12.2876 9.14856C12.2876 9.14856 12.1826 9.03606 12.1488 8.97981L12.0851 8.8673C12.0851 8.8673 12.0551 8.87855 12.0176 8.8673C11.9801 8.84855 11.9351 8.7998 11.9351 8.7998C11.9351 8.7998 11.9051 8.85606 12.0551 9.00981C12.2276 9.18231 12.2876 9.14856 12.2876 9.14856Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M12.5389 9.18619C12.5839 9.17119 12.5801 8.98369 12.5389 8.85994C12.5014 8.73619 12.4301 8.62744 12.4301 8.62744C12.4301 8.62744 12.5164 8.82994 12.5351 8.90869C12.5501 8.99119 12.5351 9.04744 12.5201 9.04369C12.5051 9.03994 12.5051 8.99494 12.4714 8.91619C12.4339 8.84119 12.4114 8.81869 12.4114 8.81869C12.4114 8.81869 12.5351 9.14869 12.4976 9.14119C12.4639 9.13369 12.2989 8.76994 12.2914 8.75869C12.2839 8.75119 12.2764 8.77369 12.2764 8.77369C12.2764 8.77369 12.4264 9.23119 12.5389 9.18619Z"
                                                                            fill="#8B441F" />
                                                                        <path
                                                                            d="M12.6367 8.29736L12.7117 8.45486L12.7342 8.61986L12.7417 8.75861C12.7417 8.75861 12.7417 9.03611 12.7117 9.04361C12.6742 9.04736 12.6592 9.01736 12.6592 9.00986C12.6378 8.90614 12.6166 8.80239 12.5955 8.69861L12.5317 8.37986L12.5542 8.35736L12.5617 8.31236L12.6105 8.30861L12.6367 8.29736Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M12.4342 9.26098C12.4642 9.26098 12.4342 9.18598 12.4342 9.18598C12.4342 9.18598 12.4117 9.22348 12.3892 9.19723C12.3704 9.17098 12.3404 9.08098 12.3404 9.08098L12.3217 9.02473C12.3217 9.02473 12.2992 9.08473 12.2729 9.08473C12.2467 9.08473 12.1005 8.84473 12.1005 8.84473L12.0854 8.86723C12.0854 8.86723 12.2879 9.28348 12.4342 9.26473V9.26098Z"
                                                                            fill="#8B441F" />
                                                                        <path
                                                                            d="M12.3402 9.08115C12.3402 9.08115 12.3664 9.02115 12.3552 8.96865C12.3439 8.9124 12.2727 8.7774 12.2727 8.7774C12.2727 8.7774 12.2502 8.78115 12.2202 8.7699C12.1908 8.75857 12.1631 8.74344 12.1377 8.7249C12.1878 8.85272 12.256 8.97269 12.3402 9.08115ZM12.4564 8.9949C12.4564 8.9949 12.4377 8.8674 12.3814 8.7474C12.3214 8.63115 12.2839 8.59365 12.2839 8.59365V8.7249C12.2839 8.7249 12.3402 8.74365 12.3814 8.8149C12.4189 8.8899 12.4564 8.9949 12.4564 8.9949ZM12.6177 8.7774C12.6177 8.7774 12.6064 8.63865 12.5877 8.5599L12.5427 8.3724C12.5427 8.3724 12.5427 8.3649 12.5539 8.3574H12.5764C12.6064 8.36865 12.6177 8.4399 12.6177 8.4399L12.6139 8.32365L12.6027 8.3049H12.5502C12.5502 8.3049 12.5614 8.3424 12.5464 8.35365C12.5352 8.3649 12.5239 8.34615 12.5202 8.3424L12.5127 8.3574L12.5277 8.4324L12.5239 8.49615C12.5239 8.49615 12.5427 8.57865 12.5689 8.6274C12.5914 8.6799 12.6177 8.7774 12.6177 8.7774ZM12.7414 8.75865C12.7414 8.75865 12.7639 8.5599 12.7189 8.4324C12.6739 8.3049 12.6364 8.2749 12.6364 8.2749L12.6139 8.2974C12.6139 8.2974 12.6814 8.4099 12.7039 8.5074L12.7414 8.75865ZM12.5389 8.8599C12.5389 8.8599 12.5164 8.70615 12.4902 8.6049C12.4767 8.56019 12.4642 8.51518 12.4527 8.4699L12.4114 8.4324C12.4114 8.4324 12.4377 8.53365 12.4339 8.5674L12.4302 8.6199C12.4302 8.6199 12.4489 8.6724 12.4789 8.7174C12.5028 8.76321 12.5228 8.81086 12.5389 8.8599Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M12.6443 9.10734C12.6818 9.10734 12.648 8.88234 12.633 8.82609C12.618 8.76609 12.5205 8.49609 12.5205 8.49609C12.5205 8.49609 12.633 8.88234 12.6255 8.90109C12.6143 8.93109 12.5693 8.78484 12.5618 8.78859C12.5543 8.78859 12.6443 9.04734 12.6105 9.05109C12.5805 9.05109 12.5618 8.99484 12.5618 8.99484L12.5655 9.05109C12.5655 9.05109 12.588 9.10359 12.6443 9.10734Z"
                                                                            fill="#904720" />
                                                                        <path
                                                                            d="M12.6926 8.995C12.7188 8.995 12.6851 8.78125 12.6663 8.6875L12.5913 8.40625C12.5913 8.40625 12.6476 8.5375 12.6776 8.6875C12.7076 8.8375 12.7301 9.025 12.7001 9.0325C12.6701 9.0325 12.6551 9.0025 12.6551 9.0025V8.96875C12.6551 8.96875 12.6663 8.995 12.6926 8.995Z"
                                                                            fill="#904720" />
                                                                        <path
                                                                            d="M12.3292 9.24211C12.3292 9.25711 12.3292 9.33211 12.2917 9.32461C12.2542 9.32086 12.183 9.25336 12.168 9.21211C12.168 9.21211 12.2505 9.30586 12.2805 9.30211C12.3105 9.30211 12.3105 9.20836 12.303 9.18211C12.303 9.15961 12.3255 9.24211 12.3255 9.24211H12.3292Z"
                                                                            fill="#312317" />
                                                                        <path
                                                                            d="M12.5278 8.22981C12.5278 8.22981 12.5803 8.26356 12.6178 8.24106C12.6369 8.22865 12.6528 8.21207 12.6645 8.19258C12.6762 8.17309 12.6833 8.1512 12.6853 8.12856C12.6853 8.09856 12.6853 8.07231 12.6591 8.03856C12.6328 8.00481 12.6966 8.06481 12.6966 8.12481C12.6966 8.18481 12.6966 8.28606 12.6028 8.31231C12.5091 8.33106 12.5503 8.30481 12.5503 8.30481L12.5278 8.22981Z"
                                                                            fill="#D2A567" />
                                                                        <path
                                                                            d="M12.4526 8.0498C12.4526 8.0498 12.5126 8.1473 12.5351 8.2373C12.5614 8.32355 12.5539 8.3573 12.5426 8.36105C12.5276 8.36105 12.5201 8.3498 12.5164 8.3273C12.5164 8.3048 12.4526 8.0498 12.4526 8.0498Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.4028 8.17355L11.8003 8.7473L12.2953 8.1848L11.9841 7.8623L11.4028 8.17355Z"
                                                                            fill="#1E2121" />
                                                                        <path
                                                                            d="M11.9053 7.81752L11.8828 7.90752L11.9316 8.06127L12.0141 8.14752L12.1078 8.21127L12.1303 8.13627L12.1528 8.05377L12.1791 8.04627L12.2391 8.06877L12.2766 8.01252L12.3441 7.89627L12.3291 7.85127L12.3141 7.81752L12.2128 7.64502L12.1791 7.70877L12.1491 7.72752L12.0891 7.69752L12.0216 7.78752L11.9353 7.75002L11.9053 7.81752Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M12.1114 8.2108C12.1114 8.2108 12.1264 8.19955 12.1339 8.1508C12.1414 8.1058 12.1414 7.96705 12.1301 7.9108C12.1189 7.85455 12.0814 7.7458 12.0739 7.7533C12.0664 7.76455 12.1301 7.87705 12.1226 8.0158C12.1114 8.1508 12.1151 8.1883 12.0851 8.2033C12.0589 8.21455 12.1076 8.2108 12.1076 8.2108H12.1114Z"
                                                                            fill="#5C3818" />
                                                                        <path
                                                                            d="M12.1338 7.97834C12.1338 7.97834 12.1975 8.07209 12.2275 8.03834C12.2613 8.00459 12.2463 7.88834 12.2275 7.83959L12.1825 7.72709L12.2013 7.70459L12.235 7.83209C12.2463 7.88459 12.2838 8.02709 12.2388 8.05709C12.1975 8.07959 12.1338 8.00084 12.1338 8.00084V7.97834Z"
                                                                            fill="#5C3818" />
                                                                        <path
                                                                            d="M11.9204 8.0458C11.9204 8.0458 11.9429 8.0083 11.9729 8.0083C12.0029 8.0083 12.0104 8.01955 12.0104 8.01955L12.0329 8.09455L12.0779 8.17705L12.1154 8.21455L12.0967 8.23705L12.0629 8.24455L11.9692 8.19205L11.9429 8.15455L11.9204 8.04205V8.0458Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M12.0741 8.85988C12.0441 8.87863 11.9729 8.84113 11.9354 8.80738L11.6804 8.55613L11.6504 8.43613L11.7329 8.45863L11.8791 8.39488L11.9054 8.34613L12.0779 8.25613L12.1754 8.20363L12.3816 8.19988L12.4341 8.09863C12.4341 8.09863 12.5016 8.21863 12.5129 8.26738C12.5279 8.31988 12.5241 8.46988 12.5054 8.48113C12.4866 8.49238 12.4191 8.43613 12.4079 8.43238C12.4004 8.42863 12.4604 8.64613 12.4079 8.65738C12.3591 8.66488 12.2729 8.57488 12.2729 8.57488C12.2729 8.57488 12.3104 8.76988 12.2654 8.76988C12.1948 8.75603 12.1297 8.72219 12.0779 8.67238C12.0779 8.67238 12.1266 8.83363 12.0779 8.85988H12.0741Z"
                                                                            fill="#D2A567" />
                                                                        <path
                                                                            d="M12.0364 8.60873L12.0776 8.67248C12.0889 8.68748 12.0776 8.78123 12.0701 8.79998C12.0589 8.83373 12.0101 8.75498 11.9839 8.68748L11.9014 8.54498C11.9014 8.52998 12.0326 8.60873 12.0326 8.60873H12.0364ZM12.4414 8.12498C12.4414 8.12498 12.5164 8.42873 12.4789 8.43998C12.4414 8.45123 12.3439 8.34248 12.3289 8.32748L12.1789 8.08748L12.1489 8.05748L12.1564 8.04248L12.2201 8.06498L12.4451 8.12498H12.4414Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.9201 8.70994C11.9051 8.72119 11.8713 8.67244 11.8563 8.65744L11.7438 8.53369C11.7119 8.50661 11.6842 8.47503 11.6613 8.43994C11.6613 8.42869 11.6313 8.39869 11.6313 8.39869L11.6576 8.36119H11.6913C11.6913 8.36119 11.8938 8.51869 11.9051 8.54869C11.9201 8.57119 11.9276 8.70244 11.9201 8.70994ZM12.2201 8.70994C12.2126 8.72119 12.0813 8.62369 12.0251 8.54494C11.9688 8.46244 11.9126 8.39494 11.8938 8.35744L11.8713 8.28619L11.9088 8.29369C11.9088 8.29369 12.2388 8.69869 12.2238 8.71369L12.2201 8.70994ZM12.2688 8.57119C12.2613 8.58244 12.2051 8.53744 12.1676 8.49244C12.1301 8.44369 12.1526 8.38369 12.1526 8.38369C12.1526 8.38369 12.2763 8.56369 12.2688 8.57119ZM12.3438 8.55244C12.3251 8.56369 12.2501 8.46994 12.1863 8.36494C12.1376 8.28994 12.1263 8.27869 12.1188 8.27119C12.1001 8.25994 12.0663 8.25619 12.0663 8.25619L12.0588 8.24494L12.0963 8.23744L12.1188 8.20744L12.1563 8.15869L12.3176 8.47744C12.3176 8.47744 12.3551 8.54869 12.3438 8.55244Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.9355 8.80721C11.9355 8.81846 11.9355 8.82971 11.8905 8.82596C11.7397 8.76877 11.6101 8.66667 11.5192 8.53346L11.4067 8.34596L11.448 8.29346L11.808 8.70596L11.9355 8.80721Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.9354 8.80742C11.9354 8.82617 11.9167 8.82992 11.8942 8.82617C11.8717 8.81867 11.7817 8.78867 11.6354 8.62742C11.5568 8.54446 11.4899 8.45108 11.4367 8.34992L11.4292 8.28242L11.4742 8.26367L11.7179 8.63867L11.9354 8.80742Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M12.1714 8.64613C12.1714 8.64613 12.0964 8.58988 12.0514 8.53363C11.9939 8.46956 11.9459 8.39758 11.9089 8.31988C11.9127 8.29363 11.9539 8.29363 11.9539 8.29363V8.22613L11.9614 8.20363L12.0327 8.23363L12.1189 8.34238L12.1527 8.38363C12.1527 8.38363 12.2089 8.52238 12.1977 8.53363C12.1864 8.54488 12.1077 8.45863 12.0964 8.46988C12.0852 8.48113 12.1864 8.63488 12.1714 8.64613ZM12.0327 8.60863C12.0327 8.60863 12.0589 8.64613 12.0477 8.67238C12.0364 8.69863 12.0289 8.70988 11.9914 8.65738C11.9672 8.61661 11.9383 8.57884 11.9052 8.54488C11.9052 8.54863 11.9089 8.63113 11.8939 8.63113C11.8752 8.63113 11.8189 8.55988 11.7814 8.50738L11.6877 8.36113V8.28613L11.6839 8.19238L11.6952 8.22613L11.7102 8.25238L11.8452 8.40988L11.8827 8.38363L11.9614 8.53363L12.0364 8.60863H12.0327ZM11.5264 8.37988C11.5264 8.37988 11.6314 8.55988 11.7252 8.66113C11.7848 8.72327 11.8562 8.77297 11.9352 8.80738L11.6202 8.43613L11.5264 8.37988ZM12.3214 8.48488C12.2761 8.44992 12.238 8.40665 12.2089 8.35738C12.1714 8.29738 12.1377 8.20738 12.1414 8.16988C12.1414 8.13238 12.1564 8.04238 12.1564 8.04238C12.1564 8.04238 12.2614 8.15488 12.2839 8.20363C12.3027 8.25613 12.3477 8.32738 12.3364 8.33488C12.3289 8.34238 12.2577 8.28613 12.2464 8.29738C12.2389 8.31238 12.3327 8.47738 12.3214 8.48488ZM12.4414 8.37238C12.4302 8.37613 12.3739 8.31238 12.3627 8.27488C12.3508 8.23583 12.3432 8.19559 12.3402 8.15488L12.2952 8.04238V7.91863L12.3477 7.91113L12.4189 8.01238C12.4189 8.01238 12.4452 8.06863 12.4452 8.15113C12.4452 8.23738 12.4564 8.36113 12.4452 8.36863L12.4414 8.37238ZM11.5977 8.67238C11.5413 8.60184 11.4911 8.52656 11.4477 8.44738L11.4102 8.33863L11.4289 8.35363C11.4289 8.35363 11.4589 8.47363 11.6052 8.61988C11.7552 8.76988 11.7889 8.77738 11.7889 8.77738C11.7889 8.77738 11.8152 8.85988 11.8039 8.88988C11.8039 8.88988 11.6952 8.79238 11.5977 8.67613V8.67238Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M11.7591 8.84496C11.7591 8.84496 11.6316 8.73246 11.5341 8.60496C11.4722 8.5273 11.417 8.4445 11.3691 8.35746L11.4141 8.31996C11.4963 8.51448 11.6132 8.69239 11.7591 8.84496ZM11.9354 8.80746L11.7104 8.57871C11.6354 8.49621 11.5979 8.41371 11.5979 8.41371L11.6579 8.43621C11.6579 8.43621 11.6841 8.49996 11.7329 8.56746L11.9354 8.80746ZM11.9054 8.54496C11.9054 8.54496 11.8266 8.44746 11.7891 8.38746L11.7141 8.24496C11.7141 8.24496 11.8191 8.36871 11.8491 8.37621C11.8829 8.38371 11.8829 8.37621 11.8829 8.37621C11.8829 8.37621 11.8679 8.42121 11.8791 8.45871L11.9054 8.54496ZM11.9391 8.14746C11.9391 8.14746 11.9504 8.21871 11.9429 8.25996C11.9354 8.29746 11.9129 8.29746 11.9129 8.29746C11.9534 8.35613 12.0042 8.40696 12.0629 8.44746L11.9954 8.34621C11.9766 8.30871 11.9466 8.27121 11.9579 8.24121C11.9729 8.20371 12.0366 8.26371 12.0554 8.27871L12.1529 8.38371C12.1529 8.38371 12.1229 8.28996 12.0854 8.25621C12.0371 8.21767 11.987 8.18139 11.9354 8.14746H11.9391Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M12.2617 8.35348L12.198 8.19598L12.138 8.00098V8.10598C12.1342 8.15098 12.1192 8.21848 12.1005 8.22973C12.078 8.23723 12.0742 8.24098 12.0367 8.22973C11.9992 8.22223 12.063 8.24848 12.063 8.24848C12.063 8.24848 12.1005 8.24848 12.1155 8.22973C12.1305 8.21098 12.1342 8.17348 12.153 8.17723C12.168 8.18473 12.1905 8.24098 12.2017 8.26723L12.2617 8.35348Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M12.1377 8.00107C12.1377 8.00107 12.2127 8.08732 12.2502 8.04982C12.2802 8.01232 12.2614 7.89982 12.2614 7.89982C12.2614 7.89982 12.3064 7.91857 12.3214 7.90732C12.3364 7.89232 12.3289 7.85107 12.3289 7.85107C12.3289 7.85107 12.4152 7.97107 12.4527 8.04982C12.4939 8.12482 12.5127 8.26732 12.5127 8.26732C12.5127 8.26732 12.4452 8.15482 12.4114 8.04982C12.3777 7.95232 12.3327 7.90732 12.3252 7.91857C12.3106 7.95419 12.3067 7.99328 12.3139 8.03107C12.3214 8.06857 12.3514 8.10982 12.3702 8.16232L12.4114 8.28982L12.3514 8.19607C12.3252 8.16607 12.3027 8.15107 12.2877 8.13607C12.2727 8.12107 12.2502 8.09107 12.2239 8.08357C12.2014 8.07232 12.1564 8.04982 12.1564 8.06857C12.1564 8.08732 12.1452 8.03107 12.1452 8.03107L12.1377 8.00107Z"
                                                                            fill="#202020" />
                                                                        <path
                                                                            d="M11.8789 8.37207C11.92 8.45783 11.9731 8.53736 12.0364 8.60832C12.0364 8.60832 11.9614 8.54082 11.9314 8.49582C11.9092 8.45674 11.8916 8.41521 11.8789 8.37207Z"
                                                                            fill="#171717" />
                                                                        <path
                                                                            d="M12.3816 8.39465C12.3704 8.39465 12.3329 8.3834 12.3291 8.39465C12.3291 8.40965 12.3516 8.46215 12.3779 8.4884C12.4041 8.51465 12.4154 8.51465 12.4191 8.5109C12.4266 8.5109 12.4191 8.48465 12.4116 8.4584V8.39465C12.4079 8.3834 12.3816 8.39465 12.3816 8.39465Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.4738 7.85111L11.4251 7.87736L11.3726 7.98986L11.3876 8.18861L11.4663 8.30111C11.4963 8.34611 11.5976 8.45861 11.6238 8.45111C11.6501 8.44361 11.6763 8.36486 11.6801 8.32361L11.6876 8.20361L11.7551 8.28986C11.7963 8.33861 11.8301 8.37986 11.8526 8.37611C11.8713 8.37611 11.9276 8.25611 11.9276 8.24111C11.9313 8.22611 11.7851 7.86611 11.7851 7.86611L11.7176 7.82861L11.4701 7.85111H11.4738Z"
                                                                            fill="#D2A567" />
                                                                        <path
                                                                            d="M11.804 8.1509L11.8415 8.28965C11.8603 8.33465 11.8415 8.3759 11.8528 8.3759C11.8603 8.3759 11.939 8.27465 11.939 8.2259C11.939 8.1809 11.939 8.13215 11.9203 7.98965C11.9015 7.84715 11.9278 7.80215 11.9278 7.80215L11.8828 7.76465L11.8078 7.92215L11.804 8.1509ZM11.5415 8.0684L11.5678 8.2559C11.579 8.3009 11.6053 8.37965 11.6203 8.3759C11.6353 8.3759 11.6803 8.25215 11.684 8.2109C11.684 8.2109 11.6503 8.1509 11.654 8.00465C11.654 7.85465 11.639 7.83965 11.639 7.83965L11.5415 8.0684Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.3426 7.77979C11.3426 7.77979 11.2263 7.95229 11.2301 8.04229C11.2301 8.13604 11.2451 8.11729 11.2713 8.19979C11.2976 8.28604 11.3126 8.40979 11.3163 8.42104C11.3163 8.42854 11.3351 8.41354 11.3351 8.40229L11.3426 7.77979Z"
                                                                            fill="#45392D" />
                                                                        <path
                                                                            d="M11.3427 7.79834C11.3427 7.79834 11.2414 7.95959 11.2489 8.04584C11.2564 8.13209 11.2677 8.13209 11.2977 8.21084C11.3277 8.28584 11.3277 8.41334 11.3277 8.41334C11.3277 8.41334 11.3652 8.40584 11.3989 8.37959C11.4364 8.35334 11.4664 8.30084 11.4664 8.30084L11.4289 8.22209C11.4182 8.19818 11.4106 8.17297 11.4064 8.14709L11.3764 8.10959L11.3839 7.95584L11.4102 7.84334V7.80584L11.3427 7.80209V7.79834Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.8942 8.07227C11.8942 8.07227 11.8455 8.06102 11.823 8.04977C11.8005 8.03852 11.793 8.00852 11.793 8.00852L11.808 7.97852L11.8942 8.07227Z"
                                                                            fill="#DBAD6C" />
                                                                        <path
                                                                            d="M11.3613 7.81723C11.3613 7.81723 11.2863 7.97848 11.2975 8.08723C11.3088 8.19598 11.3688 8.33473 11.3725 8.33848C11.38 8.33848 11.3725 8.32723 11.3763 8.30098V7.97473L11.41 7.86973V7.81348L11.3613 7.81723Z"
                                                                            fill="#D2A567" />
                                                                        <path
                                                                            d="M11.5415 7.85459C11.5415 7.85459 11.5528 7.89959 11.5453 7.92209C11.5378 7.94084 11.5003 7.96709 11.4853 7.99709C11.4665 8.02709 11.4478 8.10209 11.4478 8.10209C11.4478 8.10209 11.4628 8.06084 11.4853 8.03459C11.5115 8.00834 11.5228 7.98959 11.5228 8.00459C11.5303 8.01959 11.5378 8.07959 11.534 8.09084C11.5303 8.10209 11.5078 8.12084 11.4965 8.16584C11.4815 8.21459 11.4965 8.25584 11.4965 8.25584L11.5153 8.17334C11.5228 8.15084 11.5415 8.13584 11.5415 8.13584L11.579 8.22584C11.579 8.22584 11.579 8.18459 11.5903 8.15084C11.594 8.12084 11.6278 8.07584 11.639 8.07584C11.6503 8.07584 11.669 8.07209 11.6278 8.04959C11.6128 8.04209 11.624 7.89209 11.6315 7.88459C11.6428 7.87709 11.7028 7.87709 11.6953 7.85459C11.6787 7.82471 11.6586 7.797 11.6353 7.77209C11.6315 7.76834 11.5415 7.85459 11.5415 7.85459Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.8864 8.17734L11.8301 8.16609C11.8114 8.16609 11.8076 8.14359 11.8076 8.14359L11.8151 8.12109L11.8601 8.14734L11.8864 8.17734Z"
                                                                            fill="#DBAD6C" />
                                                                        <path
                                                                            d="M11.414 8.19596C11.414 8.21096 11.4027 8.22971 11.3952 8.25221C11.384 8.27846 11.3802 8.31221 11.3802 8.31221L11.3652 8.18846L11.354 8.09846C11.3465 8.09846 11.3277 8.12471 11.3277 8.12471C11.3277 8.12471 11.3277 8.06471 11.339 8.03846C11.3502 8.01221 11.3577 7.97096 11.3502 7.96346C11.339 7.95971 11.3202 7.97471 11.3127 7.98971C11.3023 8.00571 11.2923 8.02196 11.2827 8.03846C11.2827 8.03846 11.294 7.98971 11.3052 7.96721C11.3165 7.94846 11.3727 7.88471 11.3802 7.86221C11.3952 7.83596 11.3952 7.80971 11.3952 7.80971H11.4327C11.4327 7.80971 11.4702 7.83971 11.4702 7.86596C11.4702 7.88096 11.4327 7.89971 11.4327 7.90346C11.4327 7.90346 11.4027 7.89971 11.3952 8.02346C11.3877 8.15096 11.4177 8.14346 11.414 8.19596ZM11.7665 7.86971C11.7665 7.86971 11.774 7.93721 11.7665 7.95971C11.759 7.98221 11.7402 7.99721 11.7252 8.02721C11.7102 8.05346 11.7102 8.11721 11.7102 8.11721L11.729 8.06471L11.7552 8.02721C11.759 8.02721 11.7777 8.05346 11.7852 8.09096L11.8152 8.18471C11.8152 8.18471 11.8077 8.13971 11.819 8.13971C11.8302 8.13971 11.8377 8.13596 11.8527 8.14721L11.8865 8.17721C11.8865 8.17721 11.8865 8.15846 11.8602 8.13596C11.8377 8.10971 11.8227 8.11346 11.819 8.07971C11.8115 8.04221 11.8077 8.01221 11.8115 7.99721C11.8115 7.98596 11.8302 8.00846 11.8452 8.02346L11.9015 8.07596L11.8752 8.03846V7.92596C11.8752 7.88846 11.8752 7.85471 11.8902 7.84721C11.9015 7.83596 11.9052 7.78721 11.8977 7.77971C11.894 7.77221 11.7665 7.86971 11.7665 7.86971Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M12.1717 7.72723C12.1766 7.81834 12.1956 7.90814 12.2279 7.99348C12.2279 7.99348 12.1904 7.91848 12.1679 7.85848C12.1454 7.79848 12.1342 7.72723 12.1192 7.72348C12.1042 7.71598 12.0817 7.75348 12.0817 7.77973C12.0817 7.80598 12.1004 7.90348 12.1229 7.93723C12.1454 7.97473 12.0854 7.89223 12.0742 7.85098L12.0479 7.76848C12.0479 7.76848 12.0329 7.80598 12.0367 7.84348C12.0442 7.88473 12.0779 7.94473 12.0779 7.94473L12.0404 7.90723L12.0179 7.88098C12.0179 7.88098 12.0179 7.93723 12.0329 7.95973L12.0779 8.02348L12.0292 7.98598L12.0142 7.95598C12.0142 7.95598 12.0217 8.03473 12.0367 8.07973L12.0929 8.19223C12.0929 8.19223 12.0479 8.15473 12.0179 8.08348C11.9879 8.01598 11.9729 7.80973 11.9804 7.77973L12.0217 7.70848C12.0442 7.67848 12.0704 7.53223 12.0704 7.53223C12.0704 7.53223 12.1042 7.66723 12.1267 7.69348C12.1492 7.71973 12.1717 7.73098 12.1717 7.73098V7.72723ZM11.8492 7.68973L11.8792 7.73848L11.9017 7.77598C11.9017 7.77598 11.8642 7.81723 11.8154 7.85098C11.7704 7.88848 11.7104 7.92598 11.6992 7.90723C11.6842 7.88848 11.6842 7.86973 11.6842 7.86973C11.6842 7.86973 11.7367 7.83973 11.7742 7.80223C11.7997 7.77919 11.8201 7.75109 11.8342 7.71973C11.8417 7.69723 11.8529 7.68598 11.8529 7.68598L11.8492 7.68973ZM11.4404 7.82098C11.4404 7.82098 11.4479 7.90348 11.4854 7.90348C11.5192 7.90348 11.6242 7.79473 11.6317 7.79098C11.6392 7.78723 11.6467 7.76098 11.6467 7.75348L11.6392 7.72348C11.6392 7.72348 11.5267 7.83598 11.4892 7.84348C11.4554 7.84348 11.4404 7.82098 11.4404 7.82098ZM11.4442 7.70848L11.4329 7.78348C11.4329 7.80223 11.4404 7.81723 11.4404 7.81723C11.4404 7.81723 11.3579 7.84348 11.3467 7.81723C11.3317 7.79473 11.3429 7.75723 11.3429 7.75723H11.3992C11.4217 7.74973 11.4442 7.70848 11.4442 7.70848ZM12.2054 7.59223L12.2617 7.71223L12.3142 7.81723C12.3142 7.81723 12.2617 7.75348 12.2429 7.74223L12.1979 7.70473L12.2054 7.66348V7.58848V7.59223Z"
                                                                            fill="#1E2121" />
                                                                        <path
                                                                            d="M11.3278 7.76086H11.3766C11.3953 7.76086 11.4066 7.75336 11.4066 7.75336L11.4403 7.70836C11.4403 7.70836 11.4216 7.76086 11.4328 7.80211C11.4441 7.83961 11.4703 7.84336 11.4778 7.84336C11.509 7.83862 11.5378 7.82418 11.5603 7.80211C11.5941 7.76461 11.6391 7.73086 11.6391 7.73086C11.6391 7.73086 11.6278 7.77961 11.6466 7.83211C11.6653 7.88086 11.6916 7.88086 11.7291 7.84711C11.7666 7.81711 11.8041 7.76461 11.8266 7.74211L11.8528 7.70461L11.8941 7.66711L11.9316 7.46461L11.9128 7.43836L11.8603 7.46461L11.7966 7.43836L11.7778 7.41211L11.7403 7.47586L11.7028 7.49836L11.6841 7.50211L11.6391 7.51336L11.6203 7.47211L11.6091 7.44211L11.5866 7.43086L11.4966 7.52461L11.4441 7.52086L11.3953 7.60336L11.3578 7.65211L11.3203 7.74211L11.3278 7.76086Z"
                                                                            fill="#DBAD6C" />
                                                                        <path
                                                                            d="M11.7702 7.55477C11.7702 7.55477 11.7777 7.60352 11.7514 7.68977C11.7252 7.77602 11.6914 7.83602 11.6914 7.83602C11.6914 7.83602 11.7814 7.77977 11.8264 7.67852C11.8677 7.58102 11.8602 7.46477 11.8602 7.46477L11.7702 7.55477ZM11.8827 7.46102C11.8827 7.46102 11.8902 7.47602 11.8827 7.55102L11.8527 7.70102L11.8752 7.74602C11.8902 7.77227 11.9202 7.81352 11.9389 7.80602C11.9614 7.79852 11.9989 7.77227 12.0214 7.72352C12.0439 7.67102 12.0627 7.62227 12.0739 7.61477C12.0814 7.60727 12.0852 7.61852 12.0889 7.62227C12.0889 7.62602 12.1002 7.67102 12.1227 7.68977C12.1414 7.70852 12.1714 7.73852 12.1827 7.72727C12.1977 7.71977 12.2127 7.69352 12.2089 7.68227L12.1602 7.53227L12.1002 7.38227L12.0627 7.32227L11.9577 7.33352L11.8827 7.46102Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M12.0627 7.32227C12.0627 7.32227 12.0927 7.38602 12.0964 7.45727C12.0964 7.52477 12.0814 7.59977 12.0814 7.59977C12.0814 7.59977 12.0889 7.51352 12.0814 7.46102C12.0702 7.40852 12.0552 7.37477 12.0552 7.35977L12.0627 7.32227Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M12.2091 7.59619V7.68244C12.2016 7.71244 12.1603 7.66369 12.1341 7.56994C12.1116 7.47619 12.1153 7.45744 12.0966 7.40869L12.0628 7.32619L12.1191 7.31494L12.2091 7.59619ZM11.9466 7.76869C11.9466 7.76869 12.0516 7.71244 12.0628 7.53619C12.0703 7.45744 12.0178 7.32244 12.0178 7.32244C12.0178 7.32244 12.0178 7.46494 11.9803 7.55494C11.9584 7.60579 11.9346 7.65582 11.9091 7.70494C11.9091 7.70494 11.9353 7.69744 11.9466 7.68244L11.9766 7.64119C11.9766 7.64119 11.9803 7.66744 11.9728 7.70119L11.9503 7.76869H11.9466ZM11.8603 7.46494C11.8603 7.46494 11.8566 7.50244 11.8116 7.53994C11.7741 7.57369 11.6953 7.61119 11.6953 7.61119C11.6953 7.61119 11.7516 7.55869 11.7703 7.51369C11.7928 7.46869 11.7741 7.43869 11.7741 7.43869C11.7741 7.43869 11.7666 7.46119 11.7441 7.47994C11.7216 7.49869 11.6841 7.50244 11.6841 7.50244C11.6841 7.50244 11.6841 7.47994 11.7103 7.45369C11.7103 7.44994 11.7103 7.43869 11.7178 7.42744C11.7291 7.38994 11.7591 7.34119 11.7591 7.34119C11.7591 7.34119 11.7853 7.39369 11.8078 7.41619L11.8603 7.46494Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M12.1754 7.25834C12.157 7.37186 12.1686 7.4882 12.2091 7.59584C12.2091 7.59584 12.1566 7.51334 12.1454 7.48334C12.1304 7.44584 12.1304 7.39709 12.1191 7.37084C12.1096 7.3557 12.0967 7.34289 12.0816 7.33334C12.0704 7.32584 12.0441 7.32959 12.0441 7.32959C12.0441 7.32959 12.0741 7.31459 12.0741 7.28834V7.25084L12.1266 7.26209H12.1754V7.25834ZM11.9504 7.62584C11.9504 7.62584 12.0029 7.55084 12.0179 7.45334C12.0329 7.35584 12.0179 7.32209 12.0179 7.32209C12.0179 7.32209 11.9954 7.32209 11.9766 7.30334C11.9579 7.28459 11.9279 7.23584 11.9279 7.23584C11.9279 7.23584 11.9354 7.28834 11.9279 7.34834C11.9129 7.40834 11.8604 7.46084 11.8604 7.46084C11.8604 7.46084 11.8904 7.47584 11.9129 7.46084C11.9691 7.42709 11.9654 7.36709 11.9654 7.36709C11.9654 7.36709 11.9766 7.37459 11.9766 7.44959C11.9766 7.52459 11.9504 7.62584 11.9504 7.62584Z"
                                                                            fill="#1E2121" />
                                                                        <path
                                                                            d="M11.2938 7.75732C11.2825 7.75732 11.3313 7.68232 11.3613 7.62982L11.44 7.50232C11.44 7.50232 11.4513 7.51357 11.47 7.51357C11.4887 7.50988 11.5063 7.50229 11.5218 7.4913C11.5374 7.48032 11.5504 7.46618 11.56 7.44982C11.5785 7.42129 11.5912 7.38945 11.5975 7.35607C11.5975 7.34482 11.5938 7.42357 11.635 7.46857C11.6725 7.50982 11.6688 7.50607 11.6838 7.50607C11.6838 7.50607 11.6838 7.55857 11.6688 7.60732L11.6388 7.73107C11.6388 7.73107 11.6463 7.63732 11.6275 7.61107C11.6125 7.58107 11.605 7.61107 11.59 7.64857C11.5788 7.68232 11.5488 7.70482 11.5488 7.70482C11.5488 7.70482 11.5713 7.66357 11.5863 7.61857C11.6013 7.57357 11.5938 7.57357 11.5863 7.57357C11.5863 7.57357 11.5788 7.56982 11.5638 7.58857C11.545 7.60732 11.53 7.61107 11.53 7.61107C11.53 7.61107 11.5488 7.59607 11.5563 7.57357C11.5648 7.54907 11.5775 7.52624 11.5938 7.50607C11.6013 7.49482 11.6088 7.47982 11.6088 7.46857C11.6088 7.46107 11.6088 7.44232 11.6013 7.44232C11.5938 7.44232 11.5825 7.45357 11.5488 7.48732L11.5 7.53607L11.4663 7.63357C11.4569 7.6696 11.4443 7.70473 11.4288 7.73857L11.4063 7.75357L11.44 7.66357L11.4775 7.53607C11.47 7.52482 11.4513 7.52482 11.4475 7.53607L11.3725 7.64107C11.335 7.69357 11.335 7.75732 11.3275 7.76107L11.29 7.75732H11.2938Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M12.2128 7.20248C12.2128 7.20998 12.2128 7.24748 12.1753 7.25873C12.1465 7.26606 12.1161 7.26341 12.089 7.25123C12.0815 7.25123 12.0815 7.19873 12.0815 7.19873L12.2128 7.20248Z"
                                                                            fill="#874F20" />
                                                                        <path
                                                                            d="M11.4741 7.32617C11.4741 7.32617 11.4666 7.35992 11.4441 7.40117C11.4253 7.44617 11.3916 7.48367 11.3953 7.49117C11.3953 7.49492 11.4178 7.51742 11.4478 7.51367C11.4778 7.51367 11.4891 7.33367 11.4891 7.33367L11.4853 7.32617H11.4741Z"
                                                                            fill="#B27129" />
                                                                        <path
                                                                            d="M11.9392 7.22471C11.9392 7.22471 11.928 7.46471 11.8605 7.46471C11.793 7.46471 11.7592 7.34471 11.7592 7.34471C11.7592 7.34471 11.7555 7.50596 11.6692 7.50596C11.6317 7.50596 11.5905 7.37846 11.598 7.35596C11.598 7.35596 11.583 7.44221 11.5417 7.47596C11.4592 7.53971 11.4105 7.50971 11.4067 7.49846C11.4067 7.48721 11.4742 7.42346 11.4817 7.32596C11.4817 7.32596 11.4967 7.32971 11.5192 7.30346C11.5417 7.27721 11.5455 7.24346 11.568 7.24721C11.5867 7.25471 11.6805 7.20971 11.6805 7.20971L11.733 7.14596C11.733 7.14596 11.7405 7.16471 11.778 7.13846C11.8003 7.12264 11.8173 7.10041 11.8267 7.07471L11.928 7.16096L11.9392 7.22471Z"
                                                                            fill="#DBAD6C" />
                                                                        <path
                                                                            d="M11.6768 6.99606L11.778 7.13855L11.8005 7.1198C11.8155 7.13855 11.823 7.15355 11.8155 7.1648C11.8005 7.2023 11.7668 7.25105 11.7968 7.30355C11.7968 7.30355 11.7855 7.27355 11.8005 7.23605C11.8155 7.19855 11.8268 7.18355 11.838 7.1873C11.8455 7.1873 11.8605 7.4048 11.8755 7.4048C11.8868 7.4048 11.9093 7.30355 11.9093 7.23605C11.9093 7.16855 11.9205 7.2248 11.928 7.23605C11.9355 7.25105 11.9955 7.34855 12.0443 7.33355C12.0968 7.31855 12.0893 7.22855 12.0893 7.2098C12.0893 7.1873 12.0518 7.07106 12.0518 7.07106L11.823 6.9248L11.8043 6.9848C11.793 7.0223 11.6768 6.99606 11.6768 6.99606Z"
                                                                            fill="#B27129" />
                                                                        <path
                                                                            d="M11.9992 6.97346C11.9992 6.97346 12.0142 6.98846 12.0367 7.04471C12.0592 7.10096 12.063 7.28471 12.033 7.28471C12.003 7.28471 11.9467 7.24721 11.9355 7.22471C11.9242 7.19846 11.9355 7.10846 11.9205 7.08221C11.8994 7.0515 11.8842 7.01718 11.8755 6.98096L11.8792 6.90596L11.9317 6.88721L12.003 6.97346H11.9992Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.984 6.91736L12.0815 7.06361L12.1678 7.18736L12.2128 7.20236C12.1982 7.21922 12.1782 7.23036 12.1562 7.2338C12.1342 7.23723 12.1117 7.23274 12.0928 7.22111C12.059 7.20236 12.0778 7.14611 12.0365 7.05236C11.9915 6.95861 11.9165 6.91736 11.9165 6.91736L11.9428 6.89111L11.984 6.91736Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M11.9315 6.83838C11.9315 6.83838 12.0178 6.89463 12.0478 6.95838C12.0815 7.02213 12.0965 7.05963 12.134 7.11963C12.1715 7.17963 12.2128 7.19838 12.209 7.20213C12.209 7.20588 12.1828 7.21338 12.164 7.20213C12.1422 7.1864 12.1242 7.16588 12.1115 7.14213C12.0852 7.08762 12.0551 7.03499 12.0215 6.98463C12.0028 6.95838 11.9353 6.90963 11.9353 6.91338C11.9353 6.91713 11.954 6.93213 11.9915 6.99213C12.0156 7.0267 12.0311 7.06658 12.0365 7.10838L11.9953 7.03338C11.9578 6.97713 11.8903 6.90963 11.8865 6.92088C11.8828 6.92838 11.924 6.99213 11.9428 7.02963L11.9915 7.15338L11.924 7.04088C11.8865 6.98463 11.879 6.99213 11.864 6.97338L11.8115 6.90588C11.8115 6.90588 11.849 6.91713 11.879 6.89463C11.9165 6.87213 11.9315 6.83838 11.9315 6.83838Z"
                                                                            fill="#1E2121" />
                                                                        <path
                                                                            d="M11.7104 7C11.7104 7 11.7667 7.01125 11.7967 7.0075H11.8379C11.8379 7.0075 11.8567 7.03 11.8567 7.06C11.8567 7.08625 11.8379 7.13875 11.8267 7.1425C11.8192 7.1425 11.8192 7.09375 11.8079 7.075L11.7104 7Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.7403 7.146C11.7403 7.146 11.759 7.206 11.744 7.29225C11.729 7.37475 11.6803 7.46475 11.669 7.46475C11.6578 7.46475 11.6615 7.36725 11.654 7.31475C11.654 7.30975 11.654 7.30475 11.654 7.29975L11.6353 7.35975L11.6503 7.26225L11.6465 7.23225L11.7065 7.15725L11.7403 7.146Z"
                                                                            fill="#B27129" />
                                                                        <path
                                                                            d="M11.6355 7.20965C11.6168 7.2284 11.5905 7.22465 11.568 7.23215C11.5455 7.23965 11.5343 7.26965 11.5343 7.26965C11.5343 7.26965 11.553 7.2584 11.5605 7.26215C11.5718 7.2659 11.5793 7.2659 11.5643 7.30715C11.5455 7.3484 11.4818 7.41965 11.4855 7.41965C11.4855 7.41965 11.5605 7.3634 11.5793 7.3259C11.6055 7.29215 11.6018 7.2734 11.6093 7.2584C11.6093 7.24715 11.6393 7.23215 11.6468 7.23215C11.6505 7.23215 11.6655 7.23215 11.6693 7.2584L11.6918 7.3559L11.7218 7.2584C11.7293 7.2209 11.7293 7.14965 11.7293 7.14965L11.7068 7.1459C11.688 7.14215 11.6505 7.1084 11.6505 7.1084C11.6505 7.1084 11.658 7.1834 11.6318 7.20965H11.6355Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.9353 6.77871C11.9353 6.77871 11.9578 6.83496 11.909 6.87621C11.894 6.88746 11.8828 6.89496 11.8565 6.89871C11.834 6.89559 11.8123 6.88793 11.7928 6.87621L11.6428 6.81621L11.5678 6.79371L11.5303 6.78246L11.5378 6.74121H11.6503L11.7628 6.78621L11.8115 6.80496L11.8528 6.81246H11.8865L11.9128 6.80496L11.9278 6.79371L11.9353 6.77871Z"
                                                                            fill="#DBAD6C" />
                                                                        <path
                                                                            d="M11.9354 6.77867C11.9354 6.78992 11.9241 6.81992 11.9129 6.82742C11.9016 6.82742 11.8829 6.83867 11.8379 6.82742C11.7966 6.81992 11.7516 6.78992 11.7029 6.77867C11.6541 6.76367 11.6166 6.75242 11.5791 6.75242C11.5416 6.75242 11.5604 6.73742 11.5604 6.73742C11.5604 6.73742 11.6466 6.72617 11.7216 6.75617C11.7966 6.78242 11.8304 6.80117 11.8716 6.80117C11.9241 6.80117 11.9354 6.77867 11.9354 6.77867Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.5342 6.73342H11.5679C11.5829 6.73342 11.5942 6.72217 11.5942 6.72217C11.5942 6.72217 11.5942 6.74092 11.5867 6.74842C11.5754 6.75592 11.5492 6.75217 11.5417 6.75217L11.5342 6.73342Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M11.8227 6.91346C11.8227 6.91346 11.8714 6.96221 11.8602 7.00346L11.7589 6.95846L11.6014 6.89471L11.5152 6.86846L11.5039 6.85346L11.5264 6.82346L11.5339 6.79346L11.6389 6.80846L11.7514 6.84596L11.8227 6.91346Z"
                                                                            fill="#DBAD6C" />
                                                                        <path
                                                                            d="M11.7141 6.98471C11.7141 6.98471 11.8041 7.10096 11.7816 7.13846L11.5716 7.00721L11.4966 7.13096L11.3203 7.04471C11.3203 7.04471 11.4628 6.93221 11.4778 6.91346L11.4966 6.88721L11.5716 6.90221L11.6991 6.93971L11.7141 6.98471Z"
                                                                            fill="#DBAD6C" />
                                                                        <path
                                                                            d="M11.6616 6.80859C11.6616 6.80859 11.7366 6.82734 11.7854 6.85359C11.8341 6.87609 11.8979 6.88359 11.8979 6.88359C11.8979 6.88359 11.8754 6.90984 11.8229 6.91359C11.8079 6.91359 11.7704 6.88359 11.7479 6.86484C11.7216 6.84984 11.6504 6.82734 11.6504 6.82734L11.6616 6.80859Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.534 6.77084C11.534 6.77084 11.5865 6.78209 11.6165 6.79709C11.654 6.80834 11.654 6.80459 11.6615 6.80084C11.6728 6.80084 11.6728 6.79334 11.6728 6.79334C11.6728 6.79334 11.6803 6.83084 11.654 6.83084C11.6278 6.83084 11.6165 6.81959 11.5865 6.80459C11.549 6.78959 11.5303 6.80459 11.5303 6.80459V6.76709L11.534 6.77084Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M11.8263 6.97348C11.8263 6.97348 11.8638 6.99973 11.86 7.00723C11.8525 7.00723 11.8338 7.01848 11.8 7.02223C11.7741 7.02502 11.7479 7.01978 11.725 7.00723C11.7025 6.99973 11.6875 6.95848 11.6313 6.93223C11.5973 6.91813 11.5622 6.90684 11.5263 6.89848L11.4775 6.89098L11.515 6.87598L11.635 6.89848L11.74 6.93223L11.8038 6.96223L11.8263 6.97723V6.97348ZM11.6238 7.04848L11.6463 7.14598L11.6313 7.20223L11.6013 7.22473L11.5713 7.21348L11.56 7.19473C11.56 7.19473 11.575 7.17223 11.56 7.15348C11.5488 7.13098 11.485 7.10848 11.485 7.10848C11.485 7.10848 11.5113 7.05973 11.5375 7.04848C11.5675 7.03723 11.5525 7.00348 11.5525 7.00348L11.6238 7.04848Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.5042 6.85352C11.5042 6.85352 11.5229 6.86852 11.5604 6.87227C11.5792 6.87227 11.6092 6.87977 11.6429 6.89102L11.6804 6.87977L11.6617 6.89477C11.6954 6.90227 11.7367 6.92102 11.7554 6.92852C11.7835 6.93939 11.8091 6.95599 11.8304 6.97727L11.7554 6.93977C11.719 6.92516 11.6813 6.91386 11.6429 6.90602C11.5679 6.89477 11.4929 6.89852 11.4817 6.89102C11.4667 6.89102 11.4854 6.88727 11.4967 6.87977C11.5042 6.87227 11.5042 6.85352 11.5042 6.85352Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M11.7741 7.11609C11.7741 7.11609 11.8003 7.14234 11.7741 7.14984C11.7516 7.15734 11.6841 7.15734 11.6541 7.12359L11.6316 7.07859C11.6039 7.05424 11.5737 7.03287 11.5416 7.01484C11.5153 6.99609 11.5528 6.99609 11.5528 6.99609L11.6878 7.05234C11.7188 7.07036 11.7477 7.09174 11.7741 7.11609Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.7739 7.11954C11.7739 7.11954 11.7289 7.05204 11.5902 6.99579L11.6352 6.98829H11.5602C11.5502 6.98436 11.5402 6.98061 11.5302 6.97704C11.4552 6.95454 11.4552 6.95454 11.4477 6.94704C11.4439 6.93579 11.4327 6.94704 11.4252 6.95829L11.3989 6.99579C11.4294 6.98662 11.4616 6.98533 11.4927 6.99204C11.5339 7.00329 11.5302 7.01829 11.5302 7.02954C11.5264 7.04829 11.4777 7.10454 11.4814 7.10829C11.4889 7.10829 11.5189 7.05204 11.5564 7.05954C11.5939 7.07079 11.6014 7.08954 11.6014 7.08954C11.6014 7.08954 11.6014 7.06704 11.5939 7.05954C11.5864 7.05204 11.5452 7.01079 11.5564 7.01079C11.5677 7.01079 11.6164 7.02204 11.6802 7.05579C11.7477 7.08954 11.7552 7.09704 11.7777 7.11954H11.7739Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M11.5527 7.01123C11.5527 7.01123 11.6577 7.04123 11.654 7.15373C11.6502 7.26623 11.5677 7.24373 11.5602 7.20248C11.5527 7.16498 11.5715 7.22123 11.5977 7.21748C11.6315 7.20998 11.6352 7.17998 11.6352 7.13498C11.6352 7.09748 11.624 7.07498 11.5977 7.05248C11.5836 7.03902 11.5685 7.02649 11.5527 7.01498V7.01123Z"
                                                                            fill="#DBAD6C" />
                                                                        <path
                                                                            d="M11.0991 6.74463C11.0991 6.74463 11.1141 6.75213 11.0841 6.83088C11.0541 6.90963 11.0354 6.93588 10.9904 6.98838C10.9079 7.07838 10.8704 7.08213 10.8779 7.11963C10.8891 7.15713 10.9191 7.14963 10.9266 7.14963C10.9341 7.14963 11.0879 6.92463 11.0879 6.92463L11.1216 6.79338L11.1141 6.75588L11.1029 6.74463H11.0991Z"
                                                                            fill="#6C3F18" />
                                                                        <path
                                                                            d="M11.4777 6.58367C11.4777 6.58367 11.5227 6.65117 11.5077 6.77117C11.4965 6.89867 11.3315 7.00742 11.3315 7.00742L11.0915 7.17242L10.9902 7.16492H10.9602C10.9452 7.16117 10.9302 7.14617 10.9265 7.14617L10.9077 7.10117L10.9415 7.06367L11.0277 6.97742L11.0802 6.90242C11.0802 6.90242 11.1065 6.85367 11.1102 6.80867C11.1102 6.76742 11.1027 6.74492 11.1027 6.74492L11.1215 6.77492L11.1327 6.84242L11.1252 6.91742L11.1852 6.87242L11.2677 6.83492C11.2677 6.83492 11.294 6.83492 11.3052 6.78617C11.324 6.74117 11.339 6.67367 11.339 6.64367L11.3352 6.57617H11.3465C11.354 6.57617 11.3727 6.62117 11.3727 6.63992L11.3877 6.74492L11.4252 6.70742L11.4627 6.65117C11.4702 6.63242 11.4777 6.60242 11.4777 6.58367Z"
                                                                            fill="#DBAD6C" />
                                                                        <path
                                                                            d="M11.5042 7.20611C11.5042 7.20611 11.5229 7.22111 11.5154 7.26611C11.5079 7.31111 11.4742 7.33361 11.4554 7.33361V7.27361L11.4029 7.22861L11.3467 7.21361L11.3579 7.20236C11.3617 7.19486 11.4217 7.17236 11.4217 7.17236L11.5042 7.20611Z"
                                                                            fill="#904720" />
                                                                        <path
                                                                            d="M11.4626 7.2059C11.4626 7.2059 11.4813 7.2209 11.5076 7.21715C11.5338 7.20965 11.5451 7.1684 11.5301 7.14965C11.5151 7.13465 11.5226 7.18715 11.5038 7.1984C11.4888 7.20215 11.4663 7.1534 11.4476 7.14965C11.4213 7.1459 11.3876 7.1609 11.3763 7.1759C11.3688 7.1909 11.4138 7.1759 11.4138 7.1759L11.4401 7.18715H11.4588L11.4626 7.2059Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.1176 7.0335C11.1176 7.0335 11.1476 7.04475 11.1813 7.03725L11.2976 6.99975L11.3651 6.951C11.3913 6.92475 11.4813 6.8685 11.4926 6.75975C11.5001 6.64725 11.4776 6.5835 11.4776 6.5835C11.4776 6.5835 11.6088 6.726 11.4963 6.891C11.4213 6.996 11.3538 7.02975 11.3538 7.02975C11.3538 7.02975 11.4813 6.99225 11.4926 7.02225C11.5038 7.05225 11.4888 7.09725 11.4851 7.1085C11.4851 7.1085 11.5563 7.1235 11.5676 7.161C11.5713 7.1835 11.4851 7.13475 11.4176 7.1535C11.3501 7.1685 11.3238 7.206 11.3238 7.206C11.3238 7.206 11.3088 7.18725 11.2488 7.18725C11.1926 7.18725 11.1663 7.2135 11.1326 7.2135C11.0951 7.2135 10.9938 7.191 10.9751 7.161L11.0426 7.0785C11.0726 7.0185 11.1176 7.0335 11.1176 7.0335Z"
                                                                            fill="#904720" />
                                                                        <path
                                                                            d="M11.3916 6.73725C11.3916 6.73725 11.4404 6.6885 11.4591 6.651C11.4741 6.6135 11.4779 6.5835 11.4779 6.5835C11.4779 6.5835 11.4854 6.621 11.4554 6.66975C11.4254 6.7185 11.3916 6.74475 11.3916 6.74475V6.73725Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.3766 6.625C11.3766 6.625 11.4178 6.79 11.3766 6.85375C11.3278 6.92125 11.1328 7.0075 11.1328 7.0075C11.1328 7.0075 11.2828 6.92875 11.3278 6.835C11.3728 6.74125 11.3691 6.66625 11.3691 6.66625L11.3766 6.62875V6.625Z"
                                                                            fill="#904720" />
                                                                        <path
                                                                            d="M11.1816 7.03713C11.1816 7.03713 11.2454 7.03713 11.2791 7.01463C11.3166 6.99588 11.3654 6.95088 11.3654 6.95088C11.3654 6.95088 11.3204 6.98838 11.3054 6.98838C11.2941 6.98838 11.2829 6.96963 11.2866 6.95463C11.2866 6.95463 11.2754 6.98463 11.2491 7.00713C11.2191 7.02588 11.1816 7.03713 11.1816 7.03713ZM11.3279 6.83463C11.3279 6.83463 11.3804 6.78213 11.3804 6.66963C11.3804 6.55713 11.3354 6.57588 11.3354 6.57588C11.3354 6.57588 11.3729 6.60213 11.3616 6.68838C11.3541 6.77463 11.3241 6.83838 11.3241 6.83838L11.3279 6.83463ZM11.3916 6.84588C11.3916 6.84588 11.4516 6.83463 11.4704 6.79713C11.4891 6.75963 11.4929 6.69588 11.4929 6.69588C11.4929 6.69588 11.4854 6.75963 11.4666 6.78213C11.4516 6.80463 11.3916 6.84588 11.3916 6.84588ZM11.3541 7.20213C11.3541 7.20213 11.3841 7.14588 11.4254 7.16088C11.4629 7.17588 11.4629 7.20588 11.4629 7.20588C11.4629 7.20588 11.4479 7.18338 11.4179 7.17963C11.3916 7.17963 11.3579 7.20213 11.3579 7.20213H11.3541ZM11.2454 7.10088L11.3841 7.06338L11.4966 7.02588C11.4966 7.02588 11.4516 7.07463 11.3841 7.11213C11.3241 7.14963 11.2716 7.14963 11.2716 7.14963C11.2716 7.14963 11.3916 7.09713 11.3991 7.07463C11.3991 7.07463 11.2866 7.10838 11.2491 7.10088H11.2454Z"
                                                                            fill="#1E2121" />
                                                                        <path
                                                                            d="M11.1066 6.96582C11.1269 6.98054 11.1404 7.00235 11.1444 7.02683C11.1485 7.0513 11.1428 7.07661 11.1285 7.09761C11.1141 7.11861 11.0923 7.13373 11.0673 7.1399C11.0424 7.14607 11.0162 7.14282 10.9941 7.13082"
                                                                            fill="white" />
                                                                        <path
                                                                            d="M11.1027 6.97705C11.1174 6.99111 11.1263 7.00985 11.128 7.03002C11.1297 7.05019 11.1241 7.0705 11.112 7.08744C11.1 7.10438 11.0823 7.11687 11.0621 7.12273C11.0419 7.1286 11.0205 7.12747 11.0015 7.11955"
                                                                            fill="#F16E16" />
                                                                        <path
                                                                            d="M11.0617 7.02612C11.0686 7.02533 11.0756 7.02647 11.0819 7.0294C11.0882 7.03234 11.0935 7.03695 11.0973 7.04274C11.1011 7.04853 11.1033 7.05526 11.1035 7.06219C11.1037 7.06911 11.102 7.07597 11.0986 7.08198C11.0951 7.088 11.0901 7.09295 11.084 7.09628C11.0779 7.0996 11.071 7.10118 11.0641 7.10083C11.0572 7.10048 11.0505 7.09822 11.0448 7.0943C11.0391 7.09038 11.0346 7.08496 11.0317 7.07862"
                                                                            fill="black" />
                                                                        <path
                                                                            d="M11.069 7.07117C11.0685 7.07416 11.0669 7.07682 11.0644 7.07858C11.062 7.08034 11.0589 7.08104 11.0559 7.08055C11.0529 7.08005 11.0503 7.07839 11.0485 7.07593C11.0468 7.07346 11.046 7.07041 11.0465 7.06742C11.0465 7.06444 11.0477 7.06158 11.0498 7.05947C11.0519 7.05736 11.0548 7.05617 11.0578 7.05617C11.0596 7.05606 11.0615 7.05642 11.0632 7.0572C11.0649 7.05798 11.0663 7.05917 11.0674 7.06065C11.0686 7.06214 11.0693 7.06388 11.0696 7.06571C11.0698 7.06755 11.0697 7.06942 11.069 7.07117Z"
                                                                            fill="#D5D3CA" />
                                                                        <path
                                                                            d="M11.129 6.90617C11.129 6.90617 11.189 6.84992 11.2003 6.77492C11.2115 6.69992 11.204 6.65492 11.204 6.65492L11.2378 6.69242L11.249 6.74492L11.2303 6.84242L11.2903 6.81242C11.3128 6.78242 11.3465 6.65492 11.3353 6.57617C11.3353 6.57617 11.3503 6.61367 11.3278 6.71867C11.3053 6.82742 11.2903 6.83867 11.2078 6.88367C11.1455 6.92065 11.0958 6.97554 11.0653 7.04117C11.0403 7.08145 11.0114 7.11913 10.979 7.15367L11.039 7.05617C11.069 6.98867 11.1028 6.95117 11.1028 6.95117L11.129 6.90617Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.1025 6.9509C11.1025 6.9509 11.1288 6.8759 11.1288 6.83465C11.1288 6.7934 11.1025 6.74465 11.1025 6.74465C11.1025 6.74465 11.14 6.7409 11.14 6.82715C11.1438 6.91715 11.125 6.92465 11.1025 6.9509Z"
                                                                            fill="#904720" />
                                                                        <path
                                                                            d="M11.2193 6.85353C11.2193 6.85353 11.2455 6.78979 11.2455 6.74104C11.2455 6.69979 11.208 6.65479 11.208 6.65479C11.208 6.65479 11.2493 6.66603 11.253 6.74478C11.2568 6.82728 11.2455 6.82728 11.2155 6.85728L11.2193 6.85353Z"
                                                                            fill="#4D2A15" />
                                                                        <path
                                                                            d="M10.9529 7.16088C10.9529 7.16088 10.9304 7.13088 10.9342 7.11213C10.9342 7.08963 10.9342 7.08588 10.9867 7.02963C11.0234 6.99706 11.055 6.95914 11.0804 6.91713C11.0917 6.88338 11.1367 6.80463 11.1029 6.74463C11.1029 6.74463 11.1254 6.83463 11.0729 6.90588C11.0393 6.95839 10.9975 7.00523 10.9492 7.04463C10.9079 7.07463 10.9004 7.08963 10.9042 7.10838C10.9042 7.12713 10.9079 7.14588 10.9154 7.14588C10.9304 7.15713 10.9529 7.15713 10.9529 7.15713V7.16088Z"
                                                                            fill="#AB6D29" />
                                                                        <path
                                                                            d="M11.4555 7.33355C11.4555 7.33355 11.4667 7.33355 11.4742 7.3223C11.4817 7.31105 11.4817 7.2848 11.463 7.2623C11.4466 7.24221 11.4243 7.22778 11.3992 7.22105L11.3242 7.20605C11.3242 7.20605 11.3392 7.23605 11.373 7.2548C11.388 7.2623 11.418 7.2548 11.433 7.2698C11.4517 7.2848 11.4555 7.33355 11.4555 7.33355Z"
                                                                            fill="#6C4119" />
                                                                        <path
                                                                            d="M11.4554 7.33338C11.4554 7.33338 11.5117 7.31463 11.5154 7.25838L11.5117 7.21338C11.5117 7.21338 11.5192 7.23213 11.5417 7.23963L11.5642 7.23213C11.5642 7.23213 11.5267 7.33713 11.4517 7.33338H11.4554Z"
                                                                            fill="#6C4119" />
                                                                        <path
                                                                            d="M11.054 7.32207L11.084 7.35207L11.1178 7.38957L11.2565 7.35207L11.3015 7.30707L11.264 7.24707H11.1628L11.0503 7.32207H11.054Z"
                                                                            fill="#BF802D" />
                                                                        <path
                                                                            d="M11.3916 7.27343L11.3654 7.23968L11.3391 7.21718C11.3166 7.20593 11.2341 7.20593 11.2341 7.20593L11.1741 7.21718C11.1741 7.21718 11.1554 7.23593 11.1254 7.22843C11.0921 7.218 11.0596 7.20548 11.0279 7.19093L10.9566 7.16468C10.9566 7.16468 10.9079 7.14218 10.8966 7.14593C10.8854 7.14968 10.8404 7.19468 10.8404 7.19468C10.8404 7.19468 10.8329 7.22093 10.8516 7.22093C10.8666 7.22093 10.8254 7.22843 10.8254 7.22843C10.8254 7.22843 10.7204 7.28843 10.7054 7.39343C10.6866 7.49468 10.8779 7.64843 10.9491 7.56968C10.9491 7.56968 10.8441 7.49468 10.8666 7.43093C10.8854 7.36718 10.9341 7.32593 11.0166 7.31843C11.0954 7.31843 11.1029 7.30718 11.1366 7.28093C11.1741 7.25843 11.2379 7.24343 11.2866 7.29218C11.3354 7.34468 11.0991 7.39343 11.0991 7.39343L11.1254 7.43093C11.1254 7.43093 11.4141 7.32968 11.3879 7.27718L11.3916 7.27343Z"
                                                                            fill="#F9C83A" stroke="#8F4620"
                                                                            stroke-width="0.05" />
                                                                        <path
                                                                            d="M10.8513 7.52502C10.8513 7.52502 10.735 7.49502 10.7425 7.38627C10.7538 7.28127 10.855 7.24002 10.87 7.23627C10.885 7.22877 10.8813 7.17627 10.9 7.16877C10.9131 7.16612 10.9267 7.16644 10.9396 7.16968C10.9526 7.17292 10.9647 7.17902 10.975 7.18752L11.0275 7.21752C11.0275 7.21752 10.8213 7.30752 10.8213 7.42752C10.8213 7.50627 10.8513 7.52127 10.8513 7.52127V7.52502Z"
                                                                            fill="#FCF3D8" />
                                                                        <path
                                                                            d="M11.3915 7.26615C11.3915 7.26615 11.3765 7.27365 11.3727 7.26615C11.3502 7.22865 11.2977 7.21365 11.2602 7.2174C11.204 7.2174 11.1702 7.23615 11.1327 7.23615C11.0952 7.23615 11.1065 7.2324 11.0652 7.22865C11.024 7.22865 10.934 7.16115 10.9152 7.16865C10.8927 7.17615 10.8852 7.19865 10.8852 7.2099C10.889 7.2249 10.8477 7.2249 10.8477 7.21365C10.8402 7.20615 10.874 7.1499 10.9115 7.1499C11.009 7.1499 11.084 7.21365 11.129 7.21365C11.1777 7.21365 11.1927 7.1874 11.2565 7.1874C11.3202 7.1874 11.3877 7.2174 11.3915 7.2624V7.26615Z"
                                                                            fill="#FDEAAF" />
                                                                        <path
                                                                            d="M11.0688 7.34107C11.0688 7.34107 11.1176 7.33357 11.1513 7.31857L11.2338 7.28857L11.1588 7.33357L11.0838 7.35232L11.0688 7.34107Z"
                                                                            fill="#513625" />
                                                                        <path
                                                                            d="M10.9038 7.58456C10.8963 7.58456 10.855 7.58456 10.7913 7.54331C10.7238 7.49831 10.705 7.42331 10.705 7.42331C10.705 7.42331 10.69 7.35206 10.7575 7.28081C10.825 7.20956 10.8363 7.23206 10.84 7.23581C10.8438 7.23581 10.84 7.23956 10.84 7.23956L10.7763 7.28831L10.75 7.33706L10.7238 7.38206V7.43456L10.7538 7.49081L10.8475 7.54706L10.9038 7.58456Z"
                                                                            fill="#F9C83A" />
                                                                        <path
                                                                            d="M10.8666 7.17615V7.16865V7.1799V7.16865V7.1799V7.16865L10.8554 7.17615H10.8629V7.16865L10.8554 7.17615L10.8629 7.16865H10.8554C10.8545 7.17108 10.8545 7.17372 10.8554 7.17615L10.8629 7.16865H10.8554H10.8629H10.8554H10.8629H10.8554H10.8629L10.8554 7.1649L10.8629 7.16865L10.8554 7.1649L10.8516 7.16865C10.8462 7.17454 10.8412 7.18081 10.8366 7.1874L10.8291 7.2099V7.21365C10.8291 7.2249 10.8366 7.2324 10.8441 7.23615H10.8966C10.899 7.2346 10.9008 7.23219 10.9015 7.2294C10.9022 7.22661 10.9018 7.22366 10.9004 7.22115C10.8995 7.21885 10.898 7.21688 10.896 7.21552C10.894 7.21417 10.8915 7.21351 10.8891 7.21365L10.8629 7.2174C10.8591 7.21811 10.8553 7.21811 10.8516 7.2174V7.2099C10.8511 7.20743 10.8511 7.20488 10.8516 7.2024C10.8547 7.1958 10.8585 7.18952 10.8629 7.18365L10.8704 7.1799V7.17615L10.8741 7.16865C10.8733 7.16635 10.8718 7.16437 10.8697 7.16302C10.8677 7.16167 10.8653 7.16101 10.8629 7.16115C10.8606 7.16196 10.8586 7.16349 10.8572 7.16552C10.8559 7.16755 10.8552 7.16997 10.8554 7.1724C10.8562 7.1747 10.8577 7.17668 10.8597 7.17803C10.8618 7.17938 10.8642 7.18004 10.8666 7.1799V7.17615Z"
                                                                            fill="#8B5122" />
                                                                        <path
                                                                            d="M11.0653 7.27707L10.9228 7.31832C10.9116 7.32582 10.9678 7.31832 11.0128 7.31832L11.0616 7.32207L11.0953 7.31457C11.1478 7.29582 11.2603 7.25457 11.2716 7.30332C11.2791 7.34082 11.1178 7.37832 11.1178 7.37832V7.39707L11.2453 7.36332L11.3166 7.32582L11.3353 7.29207L11.2716 7.24707H11.1741L11.1291 7.25832L11.0653 7.27707Z"
                                                                            fill="#F9C83A" />
                                                                        <path
                                                                            d="M10.8626 7.47992C10.8738 7.50992 10.8963 7.55492 10.9226 7.56617C10.9226 7.56617 10.9263 7.56617 10.9226 7.56617C10.9226 7.56992 10.9038 7.58492 10.8588 7.56992C10.8138 7.55867 10.7463 7.54367 10.7051 7.41992V7.44617L10.7313 7.49492L10.7726 7.53992L10.8438 7.58117L10.8888 7.59242L10.9263 7.58492L10.9488 7.56992L10.9076 7.53242L10.8551 7.44617L10.8626 7.48367V7.47992Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.3279 8.72092V8.76592H11.3017V8.70967L11.3279 8.72092ZM11.1517 7.43092L11.1067 7.37842L11.0767 7.38217L11.1217 7.44967L11.1517 7.43092Z"
                                                                            fill="#FCCA3D" />
                                                                        <path
                                                                            d="M11.3243 8.82957L11.2605 8.79207C11.2316 8.78087 11.2013 8.77332 11.1705 8.76957V8.78082H11.178L11.2568 8.80332C11.2788 8.81434 11.3001 8.82687 11.3205 8.84082L11.3243 8.82957ZM11.3243 8.71332H11.2118C11.194 8.71897 11.1775 8.72787 11.163 8.73957L11.1668 8.74707C11.195 8.72671 11.2296 8.71738 11.2643 8.72082C11.2818 8.72154 11.2993 8.72279 11.3168 8.72457V8.71332H11.3243ZM11.3093 8.61207L11.2118 8.66457L11.1518 8.70957L11.1593 8.71707L11.178 8.70207C11.2086 8.6791 11.2412 8.65901 11.2755 8.64207L11.313 8.62332L11.3093 8.61207ZM11.2455 8.51082C11.2455 8.51082 11.2455 8.53707 11.2343 8.55582C11.2273 8.56625 11.2198 8.57627 11.2118 8.58582C11.1812 8.61897 11.1499 8.65148 11.118 8.68332L11.1255 8.69457C11.157 8.66108 11.1883 8.62733 11.2193 8.59332L11.2455 8.56332C11.2568 8.54082 11.2568 8.51457 11.2568 8.51082H11.2455ZM11.1668 8.46582C11.1717 8.4935 11.1691 8.52198 11.1593 8.54832L11.1218 8.63082L11.1068 8.66457L11.0993 8.67582L11.1068 8.68332C11.1068 8.68332 11.1555 8.60082 11.1705 8.55207C11.178 8.53332 11.178 8.51457 11.178 8.49582C11.1793 8.48461 11.1793 8.47328 11.178 8.46207H11.163L11.1668 8.46582ZM11.088 8.45457C11.087 8.46955 11.087 8.48459 11.088 8.49957C11.088 8.52207 11.088 8.54457 11.0805 8.56332L11.0543 8.63082L11.043 8.66832L11.0543 8.67207L11.0918 8.56707C11.0993 8.54832 11.0993 8.52207 11.0993 8.49957V8.45457H11.088ZM11.028 8.45457V8.49957L11.0168 8.57457C11.0097 8.60566 11.0035 8.63692 10.998 8.66832H11.0093L11.0168 8.63832L11.028 8.57457C11.0393 8.53707 11.0393 8.45457 11.0393 8.45457H11.028ZM10.9605 8.46582C10.9565 8.50196 10.9565 8.53843 10.9605 8.57457C10.9527 8.6053 10.9477 8.63668 10.9455 8.66832H10.9568C10.9602 8.63808 10.9652 8.60804 10.9718 8.57832L10.9755 8.52582V8.46582H10.9605ZM10.9118 8.47332V8.48082C10.9114 8.50868 10.9076 8.53639 10.9005 8.56332L10.878 8.63457L10.8705 8.67207H10.8818L10.9118 8.56332C10.9189 8.5364 10.9227 8.50868 10.923 8.48082V8.47332H10.9118ZM10.8518 8.47332V8.49957C10.8518 8.52207 10.8518 8.55207 10.8368 8.57457C10.8244 8.59746 10.8079 8.61782 10.788 8.63457C10.7795 8.63993 10.7707 8.64493 10.7618 8.64957L10.7543 8.65707L10.758 8.66832C10.758 8.66832 10.8218 8.63082 10.848 8.58207C10.863 8.55582 10.8668 8.52207 10.8668 8.49957V8.47332H10.8518ZM10.818 8.46207V8.46957C10.8094 8.49518 10.7968 8.51924 10.7805 8.54082C10.7693 8.55582 10.7468 8.57082 10.7318 8.58207C10.722 8.58871 10.712 8.59496 10.7018 8.60082L10.7093 8.61207C10.7093 8.61207 10.7618 8.58207 10.788 8.54832C10.8059 8.52311 10.8198 8.49528 10.8293 8.46582H10.818V8.46207ZM10.7618 8.43582V8.43957C10.7515 8.45741 10.7389 8.4738 10.7243 8.48832C10.7205 8.49582 10.7055 8.50332 10.6905 8.51082L10.668 8.52582L10.6718 8.53707L10.698 8.52207L10.7355 8.49582L10.7618 8.46207L10.773 8.43957L10.7618 8.43582ZM10.7355 8.39832L10.7243 8.40957L10.6905 8.44707C10.6845 8.45238 10.6783 8.45738 10.6718 8.46207L10.6568 8.47332L10.6605 8.48457L10.6868 8.46957C10.713 8.44707 10.743 8.40582 10.743 8.40582L10.7355 8.39832ZM10.7205 8.37582L10.713 8.38332L10.6793 8.40582C10.6702 8.41169 10.66 8.41552 10.6493 8.41707V8.43207L10.6718 8.42082C10.698 8.40957 10.728 8.38332 10.728 8.38332L10.7205 8.37582ZM10.713 8.34957L10.683 8.36457L10.6605 8.37582C10.6558 8.3789 10.6508 8.38142 10.6455 8.38332V8.39457C10.653 8.39457 10.6568 8.39457 10.6643 8.38707L10.7168 8.36082L10.713 8.34957ZM10.698 8.30082L10.6793 8.31957L10.6455 8.33082V8.34207C10.6622 8.34101 10.678 8.33441 10.6905 8.32332C10.6972 8.31886 10.7034 8.31384 10.7093 8.30832L10.698 8.30082ZM10.7018 8.21832L10.6793 8.23707C10.668 8.24832 10.6568 8.25957 10.653 8.27457C10.6518 8.27467 10.6505 8.27467 10.6493 8.27457V8.29332L10.6568 8.28582C10.6597 8.28379 10.6622 8.28125 10.6643 8.27832C10.6643 8.27082 10.6793 8.25582 10.6905 8.24457C10.6965 8.23804 10.7027 8.23179 10.7093 8.22582L10.7018 8.21832ZM11.103 7.73832H11.163L11.1668 7.73082V7.72707H11.163V7.73832V7.73457H11.1555H11.1593H11.1555V7.72707L11.1593 7.73082V7.72707V7.73082V7.72707H11.103V7.73832ZM11.103 7.70082H11.1105C11.118 7.70082 11.1255 7.70082 11.133 7.69332C11.148 7.68957 11.1593 7.67832 11.1705 7.67082L11.1893 7.65957C11.193 7.65886 11.1968 7.65886 11.2005 7.65957V7.64457L11.178 7.65207L11.1405 7.67832L11.1105 7.68957L11.1068 7.70082H11.103ZM11.103 7.64457L11.1293 7.63707L11.1743 7.60707C11.1893 7.59582 11.2005 7.59207 11.2118 7.59207V7.58082C11.2005 7.58082 11.193 7.58082 11.1818 7.58832L11.1368 7.61457C11.1255 7.62312 11.1128 7.62948 11.0993 7.63332V7.64457H11.103ZM11.0805 7.59207L11.1368 7.55457L11.1968 7.50957L11.193 7.49832L11.1293 7.54332C11.1105 7.56207 11.088 7.57707 11.073 7.58082L11.0805 7.59582V7.59207ZM11.043 7.53582L11.163 7.44957L11.1555 7.43832L11.0355 7.52457L11.0393 7.53582H11.043ZM10.9868 7.47582C11.0263 7.44292 11.069 7.41403 11.1143 7.38957L11.1068 7.38207L11.0505 7.41957L10.9793 7.46832L10.9868 7.47582ZM10.9493 7.43832C10.9815 7.41541 11.014 7.3929 11.0468 7.37082L11.0768 7.35207L11.073 7.34082C11.0626 7.34644 11.0526 7.35271 11.043 7.35957C11.0089 7.38407 10.9751 7.40907 10.9418 7.43457L10.9455 7.44207L10.9493 7.43832Z"
                                                                            fill="#816C2A" />
                                                                        <path
                                                                            d="M11.0426 7.32619L11.0464 7.32994C11.0807 7.35791 11.1121 7.38932 11.1401 7.42369C11.1776 7.46869 11.2076 7.52494 11.2076 7.57744V7.59619C11.1959 7.66668 11.1632 7.73201 11.1139 7.78369C11.0389 7.86994 10.9339 7.94869 10.8514 8.02369C10.8093 8.05779 10.7716 8.09682 10.7389 8.13994C10.7091 8.18004 10.6933 8.22877 10.6939 8.27869C10.6952 8.32425 10.7095 8.36847 10.7351 8.40619C10.7508 8.43038 10.7726 8.45004 10.7982 8.4632C10.8239 8.47636 10.8526 8.48256 10.8814 8.48119C10.9489 8.48119 11.0239 8.45494 11.0914 8.45494C11.1514 8.45494 11.2039 8.46994 11.2564 8.52619C11.3051 8.57869 11.3201 8.66119 11.3201 8.73994C11.3201 8.79994 11.3126 8.85244 11.3051 8.89744C11.3009 8.92011 11.2959 8.94263 11.2901 8.96494H11.3014C11.3014 8.96494 11.3314 8.85994 11.3314 8.73994C11.3314 8.66119 11.3164 8.57119 11.2639 8.51494C11.2422 8.49101 11.2155 8.4722 11.1856 8.45987C11.1558 8.44755 11.1236 8.44202 11.0914 8.44369C11.0201 8.44369 10.9451 8.46619 10.8814 8.46619C10.8549 8.46788 10.8285 8.46252 10.8048 8.45066C10.781 8.4388 10.7609 8.42087 10.7464 8.39869C10.722 8.362 10.709 8.31897 10.7089 8.27494V8.27119C10.7089 8.21119 10.7351 8.15869 10.7801 8.10994C10.8476 8.03494 10.9489 7.95994 11.0426 7.87744C11.1289 7.79494 11.2076 7.70869 11.2189 7.59619V7.57744C11.2189 7.50994 11.1776 7.44619 11.1326 7.39744C11.1065 7.36733 11.0776 7.33972 11.0464 7.31494L11.0426 7.32619Z"
                                                                            fill="#78732E" />
                                                                        <path
                                                                            d="M10.953 7.4385L10.938 7.42725L10.9268 7.431L10.9493 7.44975L10.953 7.4385ZM10.9905 7.476L10.9793 7.46475H10.9755L10.983 7.47975L10.9905 7.476Z"
                                                                            fill="#A8AC71" />
                                                                        <path
                                                                            d="M11.0429 7.536L11.0354 7.521L11.0279 7.5285L11.0391 7.53975L11.0429 7.536ZM11.0804 7.59225L11.0766 7.581H11.0654L11.0804 7.59975V7.59225ZM11.1066 7.6485L11.0991 7.6335V7.6485H11.1066ZM11.1066 7.70475V7.68975L11.0991 7.686V7.70475H11.1066ZM11.1066 7.74225V7.7235L11.1029 7.71975V7.74225H11.1066ZM10.6491 8.28975L10.6529 8.2635C10.6566 8.25225 10.6416 8.26725 10.6416 8.26725V8.286L10.6491 8.28975Z"
                                                                            fill="#78732E" />
                                                                        <path
                                                                            d="M10.6489 8.32715L10.6377 8.3309L10.6414 8.34965L10.6452 8.34215V8.32715H10.6489Z"
                                                                            fill="white" />
                                                                        <path
                                                                            d="M10.6491 8.39488V8.37988H10.6416V8.40238L10.6491 8.39488Z"
                                                                            fill="#78732E" />
                                                                        <path
                                                                            d="M10.6493 8.43248V8.41748H10.6455V8.43248H10.6493ZM10.6605 8.48498V8.46998L10.653 8.47373L10.6568 8.48873L10.6605 8.48498ZM10.6755 8.53748L10.6718 8.51873H10.6643L10.6718 8.54123L10.6755 8.53748Z"
                                                                            fill="white" />
                                                                        <path
                                                                            d="M10.7088 8.61232L10.7013 8.60107H10.6938L10.7051 8.61232H10.7088ZM10.7651 8.66482L10.7463 8.65357C10.7351 8.64232 10.7426 8.66107 10.7426 8.66107L10.7576 8.66857H10.7651V8.66482ZM11.1326 8.69482L11.1176 8.68357C11.1101 8.68357 11.1176 8.68357 11.1251 8.69857C11.1288 8.70982 11.1326 8.69482 11.1326 8.69482Z"
                                                                            fill="#A8AC71" />
                                                                        <path
                                                                            d="M11.1626 8.71731L11.1514 8.70605V8.71731H11.1589H11.1626Z"
                                                                            fill="white" />
                                                                        <path
                                                                            d="M11.1701 8.73617C11.1663 8.72867 11.1626 8.73992 11.1626 8.73992L11.1701 8.75117V8.73242V8.73617ZM11.1701 8.78492V8.76617C11.1701 8.75867 11.1663 8.76617 11.1663 8.76617V8.78492H11.1701Z"
                                                                            fill="#A8AC71" />
                                                                        <path
                                                                            d="M11.1515 8.83705L11.159 8.82205H11.1515V8.83705ZM10.5965 6.88705C10.5965 6.88705 10.6153 6.87955 10.6003 6.90205L10.6115 6.8833H10.5928L10.5965 6.88705Z"
                                                                            fill="white" />
                                                                        <path
                                                                            d="M11.0467 7.31104L11.0617 7.32229H11.043L11.0467 7.31104Z"
                                                                            fill="#F9C83A" />
                                                                        <path
                                                                            d="M11.0616 7.32211L11.0353 7.32586C11.0278 7.32586 11.0428 7.31836 11.0428 7.31836L11.0578 7.32211H11.0616Z"
                                                                            fill="#8F4620" />
                                                                        <path
                                                                            d="M11.2865 8.96474C11.2865 8.96474 11.2977 8.96474 11.3052 8.95349C11.3127 8.94224 11.3015 8.96849 11.3015 8.96849L11.2902 8.97224L11.2827 8.96474H11.2865Z"
                                                                            fill="#977C2E" />
                                                                    </g>
                                                                </g>
                                                                <defs>
                                                                    <radialGradient id="paint0_radial_4741_224921"
                                                                        cx="0" cy="0"
                                                                        r="1"
                                                                        gradientUnits="userSpaceOnUse"
                                                                        gradientTransform="translate(11.0079 9.55153) rotate(22.9533) scale(0.141818 0.141912)">
                                                                        <stop stop-color="white" />
                                                                        <stop offset="1" stop-color="#F15770" />
                                                                    </radialGradient>
                                                                    <radialGradient id="paint1_radial_4741_224921"
                                                                        cx="0" cy="0"
                                                                        r="1"
                                                                        gradientUnits="userSpaceOnUse"
                                                                        gradientTransform="translate(10.0444 9.08201) rotate(-95.2707) scale(0.140629 0.130529)">
                                                                        <stop stop-color="white" />
                                                                        <stop offset="1" stop-color="#F15770" />
                                                                    </radialGradient>
                                                                    <radialGradient id="paint2_radial_4741_224921"
                                                                        cx="0" cy="0"
                                                                        r="1"
                                                                        gradientUnits="userSpaceOnUse"
                                                                        gradientTransform="translate(13.6103 9.86519) rotate(50.0432) scale(0.0732446 0.143808)">
                                                                        <stop stop-color="white" />
                                                                        <stop offset="1" stop-color="#F15770" />
                                                                    </radialGradient>
                                                                    <clipPath id="clip0_4741_224921">
                                                                        <rect width="24" height="18"
                                                                            rx="2" fill="white" />
                                                                    </clipPath>
                                                                    <clipPath id="clip1_4741_224921">
                                                                        <rect x="-0.000976562" y="-0.00146484"
                                                                            width="24" height="18"
                                                                            rx="2" fill="white" />
                                                                    </clipPath>
                                                                </defs>
                                                            </svg>

                                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M5.29193 7.29291C5.68248 6.90236 6.31568 6.90236 6.70623 7.29291L9.99931 10.586L13.2924 7.29291C13.6829 6.90236 14.3161 6.90236 14.7067 7.29291C15.0972 7.68346 15.0972 8.31666 14.7067 8.7072L10.7065 12.7074C10.3159 13.098 9.68271 13.098 9.29216 12.7074L5.29193 8.7072C4.90139 8.31666 4.90139 7.68346 5.29193 7.29291Z"
                                                                    fill="#697586" />
                                                            </svg>




                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" id="panel-8"
                                            class="absolute top-0 invisible opacity-0 tab-wow  transition duration-300">

                                            <div>
                                                <button class="flex items-center focus:outline-none regresar">
                                                    <svg class="dark:text-bgbtngreen text-bcklightbuscador "
                                                        width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.33284 15.8332L2.49951 9.99983M2.49951 9.99983L8.33284 4.1665M2.49951 9.99983L17.4995 9.99983"
                                                            stroke="Currentcolor" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <div
                                                        class="dark:text-bgbtngreen pl-2 text-bcklightbuscador font-inter text-lg font-medium">
                                                        Regresar
                                                    </div>


                                                </button>
                                                <div class=" font-inter pt-4 font-bold sm:text-2xl text-xl text-black dark:text-bgprogresb "
                                                    id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                                                    Pagos efectivo
                                                </div>
                                                <div class="font-inter pt-4 text-sixteen font-normal">
                                                    <span class="dark:text-bordersec text-gray-500 ">Banca movil o
                                                        por
                                                        internet:</span> <span
                                                        class="dark:text-pricingdarkstudents text-gray-600 ">Paga
                                                        en
                                                        BBVA, BCP, Interbank, Scotiabank, BanBif, Caja Arequipa y
                                                        Banco
                                                        Pichincha, a través de la opción pago de servicios.</span>
                                                </div>
                                                <div class="pt-4">
                                                    <img src="{{ asset('images/metodologia/efectivo.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="font-inter text-sixteen font-normal pt-4">
                                                    <span class="dark:text-bordersec text-gray-500 ">Banca movil o
                                                        por
                                                        internet:</span> <span
                                                        class="dark:text-pricingdarkstudents text-gray-600 ">
                                                        Deposita
                                                        en BBVA, BCP, Interbank, Scotiabank, BanBif, Western Union,
                                                        Tambo+, Kasnet, Ya Ganaste, Red Digital, Comercio Niubiz
                                                        Multiservicio, MoneyGram, Caja Arequipa, Disashop,
                                                        Cellpower.</span>
                                                </div>
                                                <div class="pt-4">
                                                    <img src="{{ asset('images/metodologia/efectivo2.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="pt-8">
                                                    <div
                                                        class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                                        Ingresa tus datos para generar tu código de compra
                                                    </div>
                                                    <div class="pt-1 ">
                                                        <input type="text"
                                                            class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                                            placeholder="kanny_eldulce@gmail.com">


                                                    </div>
                                                </div>

                                                <div class="pt-6">
                                                    <button
                                                        class="bg-bgbtngreen h-12 text-green_especialidad   font-inter font-medium text-lg  rounded-lg sm:w-1/2 w-full  focus:outline-none">
                                                        Generar código
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                        <script>
                                            let aply = document.querySelectorAll('.aply');
                                            let regre = document.querySelectorAll('.regresar');
                                            let namecard = document.getElementById('namecard');
                                            let listconte = document.getElementById('listconte');
                                            for (let i = 0; i < aply.length; i++) {
                                                const element = aply[i];
                                                element.addEventListener('click', function() {
                                                    namecard.classList.toggle('hidden');
                                                    listconte.classList.toggle('hidden');


                                                });
                                            }
                                            for (let a = 0; a < regre.length; a++) {
                                                let regre = document.querySelectorAll('.regresar');
                                                let namecard = document.getElementById('namecard');
                                                let listconte = document.getElementById('listconte');
                                                const fuccon = regre[a];
                                                fuccon.addEventListener('click', function() {
                                                    namecard.classList.toggle('hidden');
                                                    listconte.classList.toggle('hidden');
                                                });

                                            }
                                        </script>

                                    </div>


                                    <script>
                                        let tamba = document.querySelectorAll(".tabor")
                                        let reference = document.querySelector(".reference")
                                        let panes = document.querySelectorAll(".tab-wow")

                                        reference.style.width = tamba[0].getBoundingClientRect().width + 'px'
                                        reference.style.left = tamba[0].getBoundingClientRect().left - tamba[0].parentElement.getBoundingClientRect().left +
                                            'px'

                                        tamba.forEach(tabor => {
                                            tabor.addEventListener("click", () => {
                                                let tabTarget = tabor.getAttribute("aria-controls")

                                                reference.style.width = tabor.getBoundingClientRect().width + 'px'
                                                reference.style.left = tabor.getBoundingClientRect().left - tabor.parentElement
                                                    .getBoundingClientRect().left + 'px'


                                                panes.forEach(panel => {
                                                    let panelId = panel.getAttribute("id")
                                                    if (tabTarget === panelId) {
                                                        panel.classList.remove("invisible", "opacity-0")
                                                        panel.classList.add("visible", "opacity-100")
                                                    } else {
                                                        panel.classList.add("invisible", "opacity-0")
                                                    }
                                                })
                                            })
                                        })
                                    </script>
                                </div>

                            </div>
                            <div role="tabpanel" id="panel-3"
                                class="absolute top-0 invisible opacity-0 tab-panel p-6 transition duration-300">
                                <h2 class="text-xl font-semibold text-gray-800">Third tab panel</h2>
                                <p class="mt-4 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit.
                                    Quas dolores voluptate temporibus, atque ab eos, delectus at ad hic voluptatem
                                    veritatis iure, nulla voluptates quod nobis doloremque eaque! Perferendis, soluta.
                                </p>
                                <div>
                                    <img src="{{ asset('/images/metodologia/examen.png') }}" alt="">
                                </div>
                            </div>
                        </div>

                        <script>
                            let tabs = document.querySelectorAll(".tab")
                            let indicator = document.querySelector(".indicator")
                            let panels = document.querySelectorAll(".tab-panel")

                            indicator.style.width = tabs[0].getBoundingClientRect().width + 'px'
                            indicator.style.left = tabs[0].getBoundingClientRect().left - tabs[0].parentElement.getBoundingClientRect().left +
                                'px'

                            tabs.forEach(tab => {
                                tab.addEventListener("click", () => {
                                    let tabTarget = tab.getAttribute("aria-controls")

                                    indicator.style.width = tab.getBoundingClientRect().width + 'px'
                                    indicator.style.left = tab.getBoundingClientRect().left - tab.parentElement
                                        .getBoundingClientRect().left + 'px'


                                    panels.forEach(panel => {
                                        let panelId = panel.getAttribute("id")
                                        if (tabTarget === panelId) {
                                            panel.classList.remove("invisible", "opacity-0")
                                            panel.classList.add("visible", "opacity-100")
                                        } else {
                                            panel.classList.add("invisible", "opacity-0")
                                        }
                                    })
                                })
                            })
                        </script>
                    </div>


                </div>

            </div>

        </div>
        <div class="dark:bg-gray12 lg:w-5/12 w-full bg-white2 pb-10">
            <div class="  contedorigth lg:pl-10 pl-4 lg:pr-0 pr-4 pt-10">
                <div>
                    {{--  @if (count($this->products) > 0) --}}
                    @if (true)
                        <div class="text-txtnamecomntpkyr dark:text-bgprogresb font-inter text-xl pb-8 font-semibold">
                            Detalles de la compra
                        </div>

                        @php
                            $total = 0;
                        @endphp
                        <ul>
                            @forelse ($products as $item)
                                @php
                                    $total += $item->options->desc;
                                @endphp
                                <li class="flex border-t border-gray-200 dark:border-bordercartdark ">
                                    <div class="py-1 mayu-card-price rounded-md w-full">

                                        <div class="xl:relative mayu-card-price  rounded overflow-hidden pt-1 pb-1">
                                            <div class="space-y-1 space-x-0 mt-3 md:mt-1 ">
                                                <div class="space-y-0.8 flex">
                                                    <img class="img-especialidad"
                                                        src="{{ asset('' . $item->options->img . '') }}">
                                                    <div class="flex justify-between w-full">
                                                        <div class="pl-6">
                                                            <div class="">
                                                                <h1
                                                                    class="dark:text-bgprogresb text-txtnamecomntpkyr text-sm font-inter font-normal sm:w-8/12 w-10/12">
                                                                    {{ $item->name }}</h1>
                                                                <div class="mt-1 flex items-center">
                                                                    <div
                                                                        class="dark:text-greenintense text-greenhover text-lg font-inter   font-bold">
                                                                        {{ $simbolo }}
                                                                        {{ $item->price * $cambio }}</div>
                                                                    &nbsp;&nbsp;
                                                                    <div
                                                                        class="strikero dark:text-bgprogresb text-txtnamecomntpkyr text-sm font-inter font-normal ">
                                                                        {{ $simbolo }}
                                                                        {{ $item->options->desc * $cambio }}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            @if ($type[1] == 1)
                                                                <button
                                                                    class=" right-3 top-8 focus:outline-none dark:text-bgprogresb text-txtnamecomntpkyr text-sm font-inter font-normal"
                                                                    wire:click="removeProduct('{{ $item->rowId }}')">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        class="h-6 w-6" fill="none"
                                                                        viewBox="0 0 24 24" stroke="currentColor"
                                                                        class="dark:text-bgprogresb text-txtnamecomntpkyr text-sm font-inter font-normal">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                    </svg>
                                                                </button>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <div class="hidden">
                                    vacio
                                </div>
                            @endforelse

                        </ul>
                    @endif
                    {{-- @if (count($this->products) > 0) --}}
                    @if (true)

                        <div class="dark:text-borderconcours text-txtnamecomntpkyr text-sm font-inter font-normal pt-6">
                            
                            <div class="flex justify-between pt-2">
                                <div>
                                    Ahorras
                                </div>
                                <div>
                                    {{ $simbolo }} {{ ($total - $sub_precio) * $cambio }}

                                </div>

                            </div>
                            <div class="flex justify-between pt-2">
                                <div>
                                    PRECIO SUBT :
                                </div>
                                <div>
                                    {{ $simbolo }} {{ $sub_precio * $cambio }}

                                </div>

                            </div>


                            <div class="flex justify-between pt-2">
                                <div class="flex items-center">
                                    <span>Cupón:

                                    </span>
                                    <div class="pl-2">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 2.45042L7.49983 2.89157C7.49067 2.90195 7.48119 2.91203 7.47141 2.92182L7 2.45042ZM2.4514 8.99902L2.89255 8.49919C2.90293 8.50835 2.91302 8.51783 2.9228 8.52762L2.4514 8.99902ZM2.33334 7.11708L1.83351 6.67592C1.84267 6.66555 1.85215 6.65546 1.86194 6.64567L2.33334 7.11708ZM8.88194 13.6657L9.35335 14.1371C9.34356 14.1469 9.33348 14.1564 9.3231 14.1655L8.88194 13.6657ZM7.11806 13.6657L6.67691 14.1655C6.66653 14.1564 6.65644 14.1469 6.64666 14.1371L7.11806 13.6657ZM13.5486 8.99902L13.0772 8.52762L13.0919 8.51293L13.1075 8.49919L13.5486 8.99902ZM11.3333 3.99902C11.7015 3.99902 12 4.2975 12 4.66569C12 5.03388 11.7015 5.33236 11.3333 5.33236V3.99902ZM11.3267 5.33236C10.9585 5.33236 10.66 5.03388 10.66 4.66569C10.66 4.2975 10.9585 3.99902 11.3267 3.99902V5.33236ZM13.3333 4.66569C13.3333 3.56112 12.4379 2.66569 11.3333 2.66569V1.33236C13.1743 1.33236 14.6667 2.82474 14.6667 4.66569H13.3333ZM13.3333 7.99902V4.66569H14.6667V7.99902H13.3333ZM11.3333 2.66569H8V1.33236H11.3333V2.66569ZM8 2.66569C7.80098 2.66569 7.62296 2.75206 7.49983 2.89157L6.50018 2.00926C6.86567 1.59515 7.40256 1.33236 8 1.33236V2.66569ZM2.66667 7.99902C2.66667 8.19804 2.75305 8.37606 2.89255 8.49919L2.01024 9.49885C1.59614 9.13335 1.33334 8.59646 1.33334 7.99902H2.66667ZM2.83317 7.55823C2.72908 7.67616 2.66667 7.82949 2.66667 7.99902H1.33334C1.33334 7.49225 1.52269 7.02809 1.83351 6.67592L2.83317 7.55823ZM8 13.3323C8.16953 13.3323 8.32286 13.2699 8.44079 13.1659L9.3231 14.1655C8.97094 14.4763 8.50677 14.6657 8 14.6657V13.3323ZM7.55922 13.1659C7.67714 13.2699 7.83047 13.3323 8 13.3323V14.6657C7.49324 14.6657 7.02907 14.4763 6.67691 14.1655L7.55922 13.1659ZM13.1075 8.49919C13.247 8.37606 13.3333 8.19804 13.3333 7.99902H14.6667C14.6667 8.59646 14.4039 9.13335 13.9898 9.49885L13.1075 8.49919ZM7.47141 2.92182L2.80474 7.58848L1.86194 6.64567L6.5286 1.97901L7.47141 2.92182ZM8.41054 13.1943L13.0772 8.52762L14.02 9.47042L9.35335 14.1371L8.41054 13.1943ZM2.9228 8.52762L7.58947 13.1943L6.64666 14.1371L1.97999 9.47042L2.9228 8.52762ZM11.3333 5.33236H11.3267V3.99902H11.3333V5.33236Z"
                                                fill="Currentcolor" />
                                        </svg>

                                    </div>
                                    <span class="pl-1">
                                        MAYUFRIENDS
                                    </span>
                                </div>
                                <div class="">
                                    $/. 100 USD

                                </div>

                            </div>
                            <div class="flex justify-between pt-2 ">
                                <div class=" ">
                                    Descuento 70%:
                                </div>
                                <div>
                                    - $/. 70 USD

                                </div>

                            </div>
                            <div class="flex justify-between text-txtnamecomntpkyr dark:text-bgprogresb text-sixteen pt-2">
                                <div>
                                    Total :
                                </div>
                                <div>
                                    {{ $simbolo }} {{ $total * $cambio }}

                                </div>

                            </div>
                        </div>
                        <br>
                        <br>
                       {{--  @if ($type[1] == 4) --}}
                        @if (true)
                            <div class="justify-between flex text-txtnamecomntpkyr dark:text-bgprogresb text-sixteen font-normal">
                                <div>Precio Final:</div><div>{{ $simbolo }} {{ $precioFinal * $cambio }}</div>
                            </div>
                        @endif
                       {{--  @if ($existe) --}}
                        @if (true)
                           <div class="justify-between flex dark:text-borderconcours text-txtnamecomntpkyr text-sixteen font-normal">

                           
                            <div>Precio Descuento :</div> {{ $descuent }} % </div>
                            <div class="justify-between flex dark:text-borderconcours text-txtnamecomntpkyr text-sixteen font-normal">
                            <div>Precio Now :</div> <div>{{ round($precio_des, 2) }} </div>
                          </div>
                        @endif
                        @if ($type[1] == 1 || $type[1] == 2 || $type[1] == 3)
                            <div>
                                <button
                                    class="flex dark:text-bgbtngreen text-bcklightbuscador text-sixteen font-medium font-inter pt-5 focus:outline-none">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.74952 3.06326L9.3743 3.61471C9.36285 3.62768 9.351 3.64029 9.33877 3.65252L8.74952 3.06326ZM3.06376 11.249L3.6152 10.6242C3.62817 10.6357 3.64078 10.6475 3.65302 10.6598L3.06376 11.249ZM2.91619 8.89659L2.2914 8.34515C2.30285 8.33218 2.3147 8.31957 2.32693 8.30734L2.91619 8.89659ZM11.1019 17.0823L11.6912 17.6716C11.679 17.6838 11.6664 17.6957 11.6534 17.7071L11.1019 17.0823ZM8.89709 17.0823L8.34565 17.7071C8.33268 17.6957 8.32007 17.6838 8.30783 17.6716L8.89709 17.0823ZM16.9353 11.249L16.346 10.6598L16.3644 10.6414L16.3838 10.6242L16.9353 11.249ZM14.1662 4.99902C14.6264 4.99902 14.9995 5.37212 14.9995 5.83235C14.9995 6.29259 14.6264 6.66569 14.1662 6.66569V4.99902ZM14.1578 6.66569C13.6976 6.66569 13.3245 6.29259 13.3245 5.83235C13.3245 5.37212 13.6976 4.99902 14.1578 4.99902V6.66569ZM16.6662 5.83235C16.6662 4.45164 15.5469 3.33236 14.1662 3.33236V1.66569C16.4674 1.66569 18.3328 3.53117 18.3328 5.83235H16.6662ZM16.6662 9.99902V5.83235H18.3328V9.99902H16.6662ZM14.1662 3.33236H9.99952V1.66569H14.1662V3.33236ZM9.99952 3.33236C9.75074 3.33236 9.52822 3.44032 9.3743 3.61471L8.12473 2.51182C8.5816 1.99419 9.25272 1.66569 9.99952 1.66569V3.33236ZM3.33285 9.99902C3.33285 10.2478 3.44082 10.4703 3.6152 10.6242L2.51232 11.8738C1.99468 11.4169 1.66619 10.7458 1.66619 9.99902H3.33285ZM3.54097 9.44804C3.41086 9.59544 3.33285 9.78711 3.33285 9.99902H1.66619C1.66619 9.36556 1.90287 8.78535 2.2914 8.34515L3.54097 9.44804ZM9.99952 16.6657C10.2114 16.6657 10.4031 16.5877 10.5505 16.4576L11.6534 17.7071C11.2132 18.0957 10.633 18.3323 9.99952 18.3323V16.6657ZM9.44853 16.4576C9.59594 16.5877 9.7876 16.6657 9.99952 16.6657V18.3323C9.36606 18.3323 8.78585 18.0957 8.34565 17.7071L9.44853 16.4576ZM16.3838 10.6242C16.5582 10.4703 16.6662 10.2478 16.6662 9.99902H18.3328C18.3328 10.7458 18.0043 11.4169 17.4867 11.8738L16.3838 10.6242ZM9.33877 3.65252L3.50544 9.48585L2.32693 8.30734L8.16026 2.47401L9.33877 3.65252ZM10.5127 16.4931L16.346 10.6598L17.5245 11.8383L11.6912 17.6716L10.5127 16.4931ZM3.65302 10.6598L9.48635 16.4931L8.30783 17.6716L2.4745 11.8383L3.65302 10.6598ZM14.1662 6.66569H14.1578V4.99902H14.1662V6.66569Z"
                                            fill="Currentcolor" />
                                    </svg>

                                    <div class="pl-2">
                                        ¿Tienes un cupón de descuento?
                                    </div>
                                </button><br>
                                @if (!$existe)
                                    <div>
                                        <input type="text"
                                            class="dark:border-txtcommentply font-inter font-normal text-sm focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb border-borderconcours h-10  bg-white-100  border-2 dark:bg-black rounded-lg pl-4 w-full text"
                                            placeholder="kanny_eldulce@gmail.com" wire:model.defer="inp_cupon">
                                    </div>
                                    <div class="pt-2">
                                        <input type="button"
                                            class="rounded-lg dark:text-checkpricingdark text-pricingtextduowhite px-5 py-2 dark:bg-green_home bg-delesteicono "
                                            value="Aplicar" wire:click="validCupon">
                                    </div>
                                @endif

                                @if ($buscand && $existe)
                                    Existe cupon <br>
                                    <button wire:click="removeCupon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                @elseif($buscand || $existe)
                                    <div
                                        class="dark:text-bgprogresb text-txtnamecomntpkyr text-sm font-inter font-normal pt-3">
                                        No existe cupon
                                    </div>
                                @endif
                            </div>
                            <div class="pt-4">
                                <a href="https://wa.me/51991509111" target="_blank" rel="noopener noreferrer"
                                    class="bg text-greenhover rounded-lg">Quiero mi cupón</a>
                            </div>
                        @endif
                        <div
                            class="dark:text-bgprogresb text-txtnamecomntpkyr text-sm font-inter font-normal pt-3 leading-6">
                            Si este producto servicio no ha cumplido con tus expectativas; tienes hasta 7 días
                            para solicitar
                            <br>
                            un reembolso. Para saber más sobre los procedimientos y beneficios puedes leer los
                            Términos y
                            Condiciones.
                        </div>

                    @endif
                    {{-- @if ($link_generador) --}}
                    @if ($link_generador)
                        Detalles de Compra <br>
                        {{ $link_generador->titulo }} <br>
                        Precio Normal :{{ $simbolo }} {{ $link_generador->precio_normal * $cambio }} <br>
                        Ahorras : {{ $simbolo }}
                        {{ ($link_generador->precio_normal - $link_generador->precio_venta) * $cambio }} <br>
                        Total, a pagar :{{ $simbolo }} {{ $link_generador->precio_venta * $cambio }} <br>
                        <div>
                            Si este producto servicio no ha cumplido con tus expectativas; tienes hasta 7 días
                            para solicitar
                            <br>
                            un reembolso. Para saber más sobre los procedimientos y beneficios puedes leer los
                            Términos y
                            Condiciones.
                        </div>
                    @endif


                    <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-sm font-inter font-normal pt-6">
                        <div class="flex justify-between">
                            <div>
                                PRECIO SUBTOTAL:
                            </div>
                            <div>
                                {{ $sub_precio }}

                            </div>

                        </div>
                        <div class="flex justify-between pt-4">
                            <div>
                                PRECIO FINAL:
                            </div>
                            <div>
                                {{ $existe ? $precio_des : $sub_precio }}

                            </div>

                        </div>

                    </div>



                </div>
                {{-- <div class="">

                    <div class="pt-6">
                        <img src="{{ asset('/images/metodologia/checkoutcurso.png') }}" alt="">
                    </div>al-sdknslñadknlñk

                </div>
                <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-lg font-inter font-bold pt-6">
                    Herramientas de Gestión de Seguridad y Salud en el Trabajo
                </div>

                <div class="dark:text-bgprogresb  text-sm font-normal font-inter text-txtcommentply pt-5">
                    Franklin Espinoza

                </div>
                <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-sm font-inter font-normal pt-6">
                    <div class="flex justify-between">
                        <div>
                            Precio normal:
                        </div>
                        <div>
                            $/. 100 USD

                        </div>

                    </div>
                    <div class="flex justify-between pt-2">
                        <div>
                            Descuento 70%:
                        </div>
                        <div>
                            - $/. 70 USD

                        </div>

                    </div>
                    <div class="flex justify-between pt-2">
                        <div class="flex items-center">
                            <span>Cupón:

                            </span>
                            <div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 2.45042L7.49983 2.89157C7.49067 2.90195 7.48119 2.91203 7.47141 2.92182L7 2.45042ZM2.4514 8.99902L2.89255 8.49919C2.90293 8.50835 2.91302 8.51783 2.9228 8.52762L2.4514 8.99902ZM2.33334 7.11708L1.83351 6.67592C1.84267 6.66555 1.85215 6.65546 1.86194 6.64567L2.33334 7.11708ZM8.88194 13.6657L9.35335 14.1371C9.34356 14.1469 9.33348 14.1564 9.3231 14.1655L8.88194 13.6657ZM7.11806 13.6657L6.67691 14.1655C6.66653 14.1564 6.65644 14.1469 6.64666 14.1371L7.11806 13.6657ZM13.5486 8.99902L13.0772 8.52762L13.0919 8.51293L13.1075 8.49919L13.5486 8.99902ZM11.3333 3.99902C11.7015 3.99902 12 4.2975 12 4.66569C12 5.03388 11.7015 5.33236 11.3333 5.33236V3.99902ZM11.3267 5.33236C10.9585 5.33236 10.66 5.03388 10.66 4.66569C10.66 4.2975 10.9585 3.99902 11.3267 3.99902V5.33236ZM13.3333 4.66569C13.3333 3.56112 12.4379 2.66569 11.3333 2.66569V1.33236C13.1743 1.33236 14.6667 2.82474 14.6667 4.66569H13.3333ZM13.3333 7.99902V4.66569H14.6667V7.99902H13.3333ZM11.3333 2.66569H8V1.33236H11.3333V2.66569ZM8 2.66569C7.80098 2.66569 7.62296 2.75206 7.49983 2.89157L6.50018 2.00926C6.86567 1.59515 7.40256 1.33236 8 1.33236V2.66569ZM2.66667 7.99902C2.66667 8.19804 2.75305 8.37606 2.89255 8.49919L2.01024 9.49885C1.59614 9.13335 1.33334 8.59646 1.33334 7.99902H2.66667ZM2.83317 7.55823C2.72908 7.67616 2.66667 7.82949 2.66667 7.99902H1.33334C1.33334 7.49225 1.52269 7.02809 1.83351 6.67592L2.83317 7.55823ZM8 13.3323C8.16953 13.3323 8.32286 13.2699 8.44079 13.1659L9.3231 14.1655C8.97094 14.4763 8.50677 14.6657 8 14.6657V13.3323ZM7.55922 13.1659C7.67714 13.2699 7.83047 13.3323 8 13.3323V14.6657C7.49324 14.6657 7.02907 14.4763 6.67691 14.1655L7.55922 13.1659ZM13.1075 8.49919C13.247 8.37606 13.3333 8.19804 13.3333 7.99902H14.6667C14.6667 8.59646 14.4039 9.13335 13.9898 9.49885L13.1075 8.49919ZM7.47141 2.92182L2.80474 7.58848L1.86194 6.64567L6.5286 1.97901L7.47141 2.92182ZM8.41054 13.1943L13.0772 8.52762L14.02 9.47042L9.35335 14.1371L8.41054 13.1943ZM2.9228 8.52762L7.58947 13.1943L6.64666 14.1371L1.97999 9.47042L2.9228 8.52762ZM11.3333 5.33236H11.3267V3.99902H11.3333V5.33236Z"
                                        fill="#121926" />
                                </svg>

                            </div>
                            <span>
                                MAYUFRIENDS
                            </span>
                        </div>
                        <div>
                            $/. 100 USD

                        </div>

                    </div>
                    <div class="flex justify-between pt-2 ">
                        <div class="text-txtnamecomntpkyr dark:text-bgprogresb text-sixteen ">
                            Descuento 70%:
                        </div>
                        <div>
                            - $/. 70 USD

                        </div>

                    </div>
                </div>
                <button
                    class="flex dark:text-bgbtngreen text-bcklightbuscador text-sixteen font-medium font-inter pt-5 focus:outline-none">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.74952 3.06326L9.3743 3.61471C9.36285 3.62768 9.351 3.64029 9.33877 3.65252L8.74952 3.06326ZM3.06376 11.249L3.6152 10.6242C3.62817 10.6357 3.64078 10.6475 3.65302 10.6598L3.06376 11.249ZM2.91619 8.89659L2.2914 8.34515C2.30285 8.33218 2.3147 8.31957 2.32693 8.30734L2.91619 8.89659ZM11.1019 17.0823L11.6912 17.6716C11.679 17.6838 11.6664 17.6957 11.6534 17.7071L11.1019 17.0823ZM8.89709 17.0823L8.34565 17.7071C8.33268 17.6957 8.32007 17.6838 8.30783 17.6716L8.89709 17.0823ZM16.9353 11.249L16.346 10.6598L16.3644 10.6414L16.3838 10.6242L16.9353 11.249ZM14.1662 4.99902C14.6264 4.99902 14.9995 5.37212 14.9995 5.83235C14.9995 6.29259 14.6264 6.66569 14.1662 6.66569V4.99902ZM14.1578 6.66569C13.6976 6.66569 13.3245 6.29259 13.3245 5.83235C13.3245 5.37212 13.6976 4.99902 14.1578 4.99902V6.66569ZM16.6662 5.83235C16.6662 4.45164 15.5469 3.33236 14.1662 3.33236V1.66569C16.4674 1.66569 18.3328 3.53117 18.3328 5.83235H16.6662ZM16.6662 9.99902V5.83235H18.3328V9.99902H16.6662ZM14.1662 3.33236H9.99952V1.66569H14.1662V3.33236ZM9.99952 3.33236C9.75074 3.33236 9.52822 3.44032 9.3743 3.61471L8.12473 2.51182C8.5816 1.99419 9.25272 1.66569 9.99952 1.66569V3.33236ZM3.33285 9.99902C3.33285 10.2478 3.44082 10.4703 3.6152 10.6242L2.51232 11.8738C1.99468 11.4169 1.66619 10.7458 1.66619 9.99902H3.33285ZM3.54097 9.44804C3.41086 9.59544 3.33285 9.78711 3.33285 9.99902H1.66619C1.66619 9.36556 1.90287 8.78535 2.2914 8.34515L3.54097 9.44804ZM9.99952 16.6657C10.2114 16.6657 10.4031 16.5877 10.5505 16.4576L11.6534 17.7071C11.2132 18.0957 10.633 18.3323 9.99952 18.3323V16.6657ZM9.44853 16.4576C9.59594 16.5877 9.7876 16.6657 9.99952 16.6657V18.3323C9.36606 18.3323 8.78585 18.0957 8.34565 17.7071L9.44853 16.4576ZM16.3838 10.6242C16.5582 10.4703 16.6662 10.2478 16.6662 9.99902H18.3328C18.3328 10.7458 18.0043 11.4169 17.4867 11.8738L16.3838 10.6242ZM9.33877 3.65252L3.50544 9.48585L2.32693 8.30734L8.16026 2.47401L9.33877 3.65252ZM10.5127 16.4931L16.346 10.6598L17.5245 11.8383L11.6912 17.6716L10.5127 16.4931ZM3.65302 10.6598L9.48635 16.4931L8.30783 17.6716L2.4745 11.8383L3.65302 10.6598ZM14.1662 6.66569H14.1578V4.99902H14.1662V6.66569Z"
                            fill="Currentcolor" />
                    </svg>

                    <div class="pl-2">
                        ¿Tienes un cupón de descuento?
                    </div>
                </button> --}}


            </div>


        </div>




    </div>
    {{-- <div class="dark:bg-gray14 relative">
        <div class=" dark:bg-gray12">
            <div class="containermygo mx-auto grid grid-cols-2 ">
                <div class="dark:bg-gray14  ">
                    ñksdjaskdjfoasid





                </div>

                <div class="dark:bg-gray12 absolute">
                    asdkjfñasdoifjasño
                </div>

            </div>
        </div>
    </div> --}}





    {{-- @if ($modal_cupon)
        <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
            style="background: rgba(0,0,0,.7);" >
            <div
                class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div class="modal-content py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3"> 
                        <div class="modal-close cursor-pointer z-50" wire:click="$set('modal_cupon', false)">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                viewBox="0 0 18 18">
                                <path
                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!--Body-->
                    <div class="my-5">
                        @if ($codigo)
                            <p>{{$codigo->cupon_diccionario->textocentral}}</p>
                            Código
                            <p>{{$codigo->cupon}}</p>
                        @endif
                    </div> 
                </div>
            </div>
        </div>
        
    @endif --}}
    @push('js')
        {{-- <script
            src="https://www.paypal.com/sdk/js?client-id=AdUc7Y5x22FcokWN1Pt6xoG8xX-tEOHhDjJuxFoLYGpv7grPD4Z6ZN1o2lZ2EFOu6gYyprz0XcGaMOIL&currency=USD" data-namespace="paypal_sdk">
        </script> --}}

        <script
            src="https://www.paypal.com/sdk/js?client-id=AdUc7Y5x22FcokWN1Pt6xoG8xX-tEOHhDjJuxFoLYGpv7grPD4Z6ZN1o2lZ2EFOu6gYyprz0XcGaMOIL&currency=USD&disable-funding=card">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.all.min.js"></script>

        <script src="https://checkout.culqi.com/js/v4"></script>

        <script>
            Culqi.publicKey = 'pk_test_7043b56f5a13c177';
            Culqi.init();
            Culqi.settings({
                title: 'Culqi',
                currency: 'PEN',
                amount: 25000,
                order: 'ord_live_0CjjdWhFpEAZlxlz' // Este parámetro es requerido para realizar pagos con pagoEfectivo, billeteras y Cuotéalo
            });

            Culqi.options({
                lang: 'auto',
                installments: true,
                paymentMethods: {
                    tarjeta: true,
                    // bancaMovil: true,
                    // agente: true,
                    // billetera: true,
                    // cuotealo: true
                }
            });

            Culqi.options({
                style: {
                    logo: 'https://culqi.com/LogoCulqi.png',
                    bannerColor: '', // hexadecimal
                    buttonBackground: '', // hexadecimal
                    menuColor: '', // hexadecimal
                    linksColor: '', // hexadecimal
                    buttonText: '', // texto que tomará el botón
                    buttonTextColor: '', // hexadecimal
                    priceColor: '' // hexadecimal
                }
            });

            // Culqi.validationPaymentMethods();
            // console.log(Culqi.paymentOptionsAvailable);

            // const btn_pagar = document.getElementById('btn_pagar');

            // btn_pagar.addEventListener('click', function (e) {
            //     // Abre el formulario con la configuración en Culqi.settings y CulqiOptions
            //     // Culqi.open();
            //     // e.preventDefault();
            //     Culqi.createToken();
            //   e.preventDefault();
            // })
            Culqi.validationPaymentMethods();
            //Obtenemos los metodos de pagos disponibles
            var paymentTypeAvailable = Culqi.paymentOptionsAvailable;
            $('#btn_pagar').on('click', function(e) {

                modalSwal();

                // Crea el objeto Token con Culqi JS
                if (paymentTypeAvailable.token.available) paymentTypeAvailable.token.generate();
                else console.log('eaa');;
                e.preventDefault();
            });

            function culqi() {
                console.log('aqujiiiiaqujiiiiaqujiiiiaqujiiii');
                if (Culqi.token) { // ¡Objeto Token creado exitosamente!
                    const token = Culqi.token;
                    console.log(token);
                    console.log(`Se ha creado el objeto Token: ${token}.`);
                    //En esta linea de codigo debemos enviar el "Culqi.token.id"
                    //hacia tu servidor con Ajax
                    let date = {
                        token: Culqi.token.id,
                        id_producto: 1515,
                    }
                    axios.post('/proccess2', date)
                        .then(resp => {
                            Swal.close();
                            console.log('resp:');
                            // console.log(response.data.merchant_message);
                            console.log(resp);
                        })
                        .catch(function(error) {
                            Swal.close();
                            console.log('error:');
                            console.log(error);
                        });
                }
                // else if (Culqi.order) {  // ¡Objeto Order creado exitosamente!
                //     const order = Culqi.order;
                //     console.log(`Se ha creado el objeto Order: ${order}.`);

                // } 
                else {
                    // Mostramos JSON de objeto error en consola
                    console.log(`Error : ${Culqi.error.merchant_message}.`);
                    Swal.close();
                }
            };

            function modalSwal() {
                // swet alert

                let timerInterval
                Swal.fire({
                    title: 'Completando su compra!',
                    html: 'Sea paciente, esto puede tomar unos segundos! <br> No cierre esta ventana',
                    timer: 30000,
                    allowOutsideClick: false,
                    onBeforeOpen: () => {
                        Swal.showLoading()
                        timerInterval = setInterval(() => {
                            const content = Swal.getContent()
                            if (content) {
                                const b = content.querySelector('b')
                                if (b) {
                                    b.textContent = Swal.getTimerLeft()
                                }
                            }
                        }, 100)
                    },
                    onClose: () => {
                        clearInterval(timerInterval)
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        console.log('I was closed by the timer')
                    }
                })
            }
        </script>

        <script>
            function proccess() {
                let datadd = {
                    token: Culqi.token.id,
                    id_producto: 1515
                }
                fetch('/proccess2', {
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        method: 'POST',
                        body: JSON.stringify(datadd)
                    })
                    .then(response => response.text())
                    .then(function(result) {
                        alert(result);
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            }
        </script>

        <script>
            // const boton = document.querySelector("#miBoton");

            // // Agregar listener
            // boton.addEventListener("click", function(evento){
            //     // Aquí todo el código que se ejecuta cuando se da click al botón
            //     alert("Le has dado click");
            // });
            // const modal = document.querySelector('.main-modal');
            // const closeButton = document.querySelectorAll('.modal-close');

            // const modalClose = () => {
            //     modal.classList.remove('fadeIn');
            //     modal.classList.add('fadeOut');
            //     setTimeout(() => {
            //         modal.style.display = 'none';
            //     }, 500);
            // }

            // const openModal = () => {
            //     modal.classList.remove('fadeOut');
            //     modal.classList.add('fadeIn');
            //     modal.style.display = 'flex';
            // }

            // for (let i = 0; i < closeButton.length; i++) {

            //     const elements = closeButton[i];

            //     elements.onclick = (e) => modalClose();

            //     modal.style.display = 'none';

            //     window.onclick = function (event) {
            //         if (event.target == modal) modalClose();
            //     }

            // }
            // let modal_promo = localStorage.getItem("modal_promo");

            // let date_now = new Date();
            // let date_tomorrow = new Date();

            // let dias = 1; // Número de días a agregar
            // date_tomorrow.setDate(date_tomorrow.getDate() + dias); 

            // if (!modal_promo) {
            //     localStorage.setItem('modal_promo', date_tomorrow.getTime()); 
            //     load_modal()
            //     console.log('poniendo primera ves el modal');   
            // } else {
            //     date_tomorrow = localStorage.getItem('modal_promo') 
            //     console.log(date_tomorrow);             
            //     if (date_now.getTime() >= modal_promo) { 
            //         load_modal()
            //         console.log("poniendo modal otra vez (n veces)"); 
            //     }
            //     else {
            //         console.log(date_tomorrow-date_now.getTime());
            //         console.log("modal inactivo"); 
            //         setTimeout(() => {
            //             Livewire.emit('valor_modal');
            //         }, 1000);

            //     }
            // }

            // function load_modal(){
            //     setTimeout(() => {
            //         Livewire.emit('load_modal');
            //         console.log('aqio 111');
            //     }, 2000);
            //     setTimeout(() => {
            //         openModal()
            //         console.log('aqio 222');
            //         setTimeout(() => {
            //             modalClose()
            //         }, 10000);
            //     }, 2000);
            // }  
        </script>
    @endpush


</div>
