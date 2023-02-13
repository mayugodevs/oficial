@extends('layout')

@section('content')
    <div class="dark:bg-gray14 bg-whiteheader">

        <div class="containermygo mx-auto sm:pt-44 pt-32 pb-10 ml:px-0 xl:px-0 lg:px-0 md:px-8 px-4">

            <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter text-thirty-two font-bold">
                Mi membresía
            </div>
            <div class="text-txtnamecomntpkyr dark:text-bgprogresb font-inter font-normal text-lg pt-4">
                Desde aquí podrás administrar o cambiar tu suscripción de MayuGo.
            </div>
            <div class="dark:text-borderconcours text-txtcommentply font-inter font-normal text-sixteen pt-6">
                Tu suscripción se renovará automáticamente el <span class="font-semibold">20 de abril de 2023.</span> <a
                    class="text-pricingtextduowhite dark:text-checkpricingdark" href="">Cancelar mi suscripción</a>

            </div>
            <div class="pt-10">
                <div class="rounded-t-xl flex flex-col sm:flex-row bg-gray-600 p-6 justify-between">
                    <div>
                        <div class="font-inter font-bold text-xl text-bgprogresb">
                            Membresía DUO
                        </div>
                        <div class="pt-2">
                            <button
                                class="text-white-100 text font-inter font-medium text-sm bg-green py-1 px-3 rounded-md">
                                Activo
                            </button>
                        </div>
                    </div>
                    <div class="font-inter font-bold text-xl text-bgprogresb  sm:pt-0 pt-4">
                        Válido hasta: 20 de Abril de 2023
                    </div>

                </div>
                <div class="md:px-8 px-7 py-5 dark:bg-pricingcintadark bg-bgfondopricingwhite rounded-b-xl">
                    <div class="grid md:grid-cols-2 grid-cols-1">
                        <div>
                            <div class=" flex items-center pb-3">
                                <div class="justify-contents">
                                    <svg class="h-5 w-5  " viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 2C14.4183 2 18 5.58172 18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2ZM13.3584 7.64645C13.1849 7.47288 12.9154 7.4536 12.7206 7.58859L12.6513 7.64645L9 11.298L7.35355 9.65131L7.28431 9.59346C7.08944 9.45846 6.82001 9.47775 6.64645 9.65131C6.47288 9.82488 6.4536 10.0943 6.58859 10.2892L6.64645 10.3584L8.64645 12.3584L8.71569 12.4163C8.8862 12.5344 9.1138 12.5344 9.28431 12.4163L9.35355 12.3584L13.3584 8.35355L13.4163 8.28431C13.5513 8.08944 13.532 7.82001 13.3584 7.64645Z"
                                            fill="#33CC66" />
                                    </svg>
                                </div>
                                <div
                                    class="pl-2 dark:text-borderconcours text-txtcommentply font-inter font-normal text-sixteen">
                                    Acceso a todos los cursos de 1 especialización.
                                </div>

                            </div>
                            <div class=" flex items-center pb-3">
                                <svg class="h-5 w-5  text-left" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10 2C14.4183 2 18 5.58172 18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2ZM13.3584 7.64645C13.1849 7.47288 12.9154 7.4536 12.7206 7.58859L12.6513 7.64645L9 11.298L7.35355 9.65131L7.28431 9.59346C7.08944 9.45846 6.82001 9.47775 6.64645 9.65131C6.47288 9.82488 6.4536 10.0943 6.58859 10.2892L6.64645 10.3584L8.64645 12.3584L8.71569 12.4163C8.8862 12.5344 9.1138 12.5344 9.28431 12.4163L9.35355 12.3584L13.3584 8.35355L13.4163 8.28431C13.5513 8.08944 13.532 7.82001 13.3584 7.64645Z"
                                        fill="#33CC66" />
                                </svg>
                                <div
                                    class="pl-2 dark:text-borderconcours text-txtcommentply font-inter font-normal text-sixteen">
                                    Acceso a 1 especialización
                                </div>

                            </div>
                            <div class=" flex items-center pb-3">
                                <div class="justify-contents">
                                    <svg class="h-5 w-5  " viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 2C14.4183 2 18 5.58172 18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2ZM13.3584 7.64645C13.1849 7.47288 12.9154 7.4536 12.7206 7.58859L12.6513 7.64645L9 11.298L7.35355 9.65131L7.28431 9.59346C7.08944 9.45846 6.82001 9.47775 6.64645 9.65131C6.47288 9.82488 6.4536 10.0943 6.58859 10.2892L6.64645 10.3584L8.64645 12.3584L8.71569 12.4163C8.8862 12.5344 9.1138 12.5344 9.28431 12.4163L9.35355 12.3584L13.3584 8.35355L13.4163 8.28431C13.5513 8.08944 13.532 7.82001 13.3584 7.64645Z"
                                            fill="#33CC66" />
                                    </svg>
                                </div>
                                <div
                                    class="pl-2 dark:text-borderconcours text-txtcommentply font-inter font-normal text-sixteen">
                                    Certificado digital por cada curso y especialización finalizada
                                </div>

                            </div>
                            <div class=" flex items-center pb-3">
                                <div class="justify-contents">
                                    <svg class="h-5 w-5  " viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 2C14.4183 2 18 5.58172 18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2ZM13.3584 7.64645C13.1849 7.47288 12.9154 7.4536 12.7206 7.58859L12.6513 7.64645L9 11.298L7.35355 9.65131L7.28431 9.59346C7.08944 9.45846 6.82001 9.47775 6.64645 9.65131C6.47288 9.82488 6.4536 10.0943 6.58859 10.2892L6.64645 10.3584L8.64645 12.3584L8.71569 12.4163C8.8862 12.5344 9.1138 12.5344 9.28431 12.4163L9.35355 12.3584L13.3584 8.35355L13.4163 8.28431C13.5513 8.08944 13.532 7.82001 13.3584 7.64645Z"
                                            fill="#33CC66" />
                                    </svg>
                                </div>
                                <div
                                    class="pl-2 dark:text-borderconcours text-txtcommentply font-inter font-normal text-sixteen">
                                    Acceso a eventos o talleres en vivo
                                </div>

                            </div>

                        </div>
                        <div>
                            <div class=" flex items-center pb-3">
                                <div class="justify-contents">
                                    <svg class="h-5 w-5  " viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 2C14.4183 2 18 5.58172 18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2ZM13.3584 7.64645C13.1849 7.47288 12.9154 7.4536 12.7206 7.58859L12.6513 7.64645L9 11.298L7.35355 9.65131L7.28431 9.59346C7.08944 9.45846 6.82001 9.47775 6.64645 9.65131C6.47288 9.82488 6.4536 10.0943 6.58859 10.2892L6.64645 10.3584L8.64645 12.3584L8.71569 12.4163C8.8862 12.5344 9.1138 12.5344 9.28431 12.4163L9.35355 12.3584L13.3584 8.35355L13.4163 8.28431C13.5513 8.08944 13.532 7.82001 13.3584 7.64645Z"
                                            fill="#33CC66" />
                                    </svg>
                                </div>
                                <div
                                    class="pl-2 dark:text-borderconcours text-txtcommentply font-inter font-normal text-sixteen">
                                    Acceso a todos los cursos de 1 especialización.
                                </div>

                            </div>
                            <div class=" flex items-center pb-3">
                                <div class="justify-contents">
                                    <svg class="h-5 w-5  " viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 2C14.4183 2 18 5.58172 18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2ZM13.3584 7.64645C13.1849 7.47288 12.9154 7.4536 12.7206 7.58859L12.6513 7.64645L9 11.298L7.35355 9.65131L7.28431 9.59346C7.08944 9.45846 6.82001 9.47775 6.64645 9.65131C6.47288 9.82488 6.4536 10.0943 6.58859 10.2892L6.64645 10.3584L8.64645 12.3584L8.71569 12.4163C8.8862 12.5344 9.1138 12.5344 9.28431 12.4163L9.35355 12.3584L13.3584 8.35355L13.4163 8.28431C13.5513 8.08944 13.532 7.82001 13.3584 7.64645Z"
                                            fill="#33CC66" />
                                    </svg>
                                </div>
                                <div
                                    class="pl-2 dark:text-borderconcours text-txtcommentply font-inter font-normal text-sixteen">
                                    Acceso a 1 especialización
                                </div>

                            </div>
                            <div class=" flex items-center pb-3">
                                <div class="justify-contents">
                                    <svg class="h-5 w-5  " viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 2C14.4183 2 18 5.58172 18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2ZM13.3584 7.64645C13.1849 7.47288 12.9154 7.4536 12.7206 7.58859L12.6513 7.64645L9 11.298L7.35355 9.65131L7.28431 9.59346C7.08944 9.45846 6.82001 9.47775 6.64645 9.65131C6.47288 9.82488 6.4536 10.0943 6.58859 10.2892L6.64645 10.3584L8.64645 12.3584L8.71569 12.4163C8.8862 12.5344 9.1138 12.5344 9.28431 12.4163L9.35355 12.3584L13.3584 8.35355L13.4163 8.28431C13.5513 8.08944 13.532 7.82001 13.3584 7.64645Z"
                                            fill="#33CC66" />
                                    </svg>
                                </div>
                                <div
                                    class="pl-2 dark:text-borderconcours text-txtcommentply font-inter font-normal text-sixteen">
                                    Certificado digital por cada curso y especialización finalizada
                                </div>

                            </div>
                            <div class=" flex items-center pb-3">
                                <div class="justify-contents">
                                    <svg class="h-5 w-5  " viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10 2C14.4183 2 18 5.58172 18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2ZM13.3584 7.64645C13.1849 7.47288 12.9154 7.4536 12.7206 7.58859L12.6513 7.64645L9 11.298L7.35355 9.65131L7.28431 9.59346C7.08944 9.45846 6.82001 9.47775 6.64645 9.65131C6.47288 9.82488 6.4536 10.0943 6.58859 10.2892L6.64645 10.3584L8.64645 12.3584L8.71569 12.4163C8.8862 12.5344 9.1138 12.5344 9.28431 12.4163L9.35355 12.3584L13.3584 8.35355L13.4163 8.28431C13.5513 8.08944 13.532 7.82001 13.3584 7.64645Z"
                                            fill="#33CC66" />
                                    </svg>
                                </div>
                                <div
                                    class="pl-2 dark:text-borderconcours text-txtcommentply font-inter font-normal text-sixteen">
                                    Acceso a eventos o talleres en vivo
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="pt-10">
                    <div class="dark:text-bordersec  text-gray-650 font-inter font-bold text-xl">
                        Usuarios 2/2
                    </div>
                    <div class="grid md:grid-cols-2 grid-cols-1 pt-4 items-center">
                        <div class="flex item-center">
                            <div>
                                <img src="{{ asset('images/metodologia/avatarperfil.png') }}" alt="">
                            </div>
                            <div class="flex flex-col pl-4">
                                <div class="text-txtcommentply font-medium font-inter text-lg dark:text-borderconcours">
                                    correodeltitular@hotmail.com
                                </div>
                                <div class="text-gray-600 dark:text-pricingdarkstudents text-sm font-inter font-normal ">
                                    Titular
                                </div>
                            </div>

                        </div>
                        <div class="sm:pt-0  pt-10">
                            <div class="flex items-center border-dashed border-2 border-blueintense p-7 rounded-lg">
                                <div>
                                    <img src="{{ asset('images/metodologia/avatar.png') }}" alt="">
                                </div>
                                <div class="pl-4">
                                    <button class="text-bcklightbuscador dark:text-bgbtngreen">
                                        Agregar
                                    </button>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
                <div class="pt-10">
                    <div class="dark:text-bordersec  text-gray-650 font-inter font-bold text-xl">
                        Usuarios 2/2
                    </div>
                    <div class="grid md:grid-cols-2 grid-cols-1 pt-4 items-center">
                        <div class="flex item-center">
                            <div>
                                <img src="{{ asset('images/metodologia/avatarperfil.png') }}" alt="">
                            </div>
                            <div class="flex flex-col pl-4">
                                <div class="text-txtcommentply font-medium font-inter text-lg dark:text-borderconcours">
                                    correodeltitular@hotmail.com
                                </div>
                                <div class="text-gray-600 dark:text-pricingdarkstudents text-sm font-inter font-normal ">
                                    Titular
                                </div>
                            </div>

                        </div>
                        <div class="flex item-center sm:pt-0  pt-10">
                            <div>
                                <img src="{{ asset('images/metodologia/avatarperfil.png') }}" alt="">
                            </div>
                            <div class="flex flex-col pl-4">
                                <div class="text-txtcommentply font-medium font-inter text-lg dark:text-borderconcours">
                                    correodeltitular@hotmail.com
                                </div>
                                <div class="text-redtiket dark:text-redtiket text-sm font-inter font-normal ">
                                    Titular
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="pt-10 pb-20">
                    <div class="dark:text-bordersec  text-gray-650 font-inter font-bold text-xl">
                        Metodos de Pago
                    </div>
                    <div class="text-txtcommentply font-medium font-inter text-lg dark:text-borderconcours pt-4">
                        Visa terminada en 0021 - 10/2025
                    </div>
                </div>
            </div>

        </div>

        <div class="relative flex justify-center items-center">

            <button onclick="showMenu(true)"
                class="focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 focus:outline-none absolute z-0 top-48 py-2 px-7 bg-gray-800 text-white rounded text-base hover:bg-black">Open</button>

            <div id="menu" class="w-full h-full bg-gray-900 bg-opacity-80 top-0 fixed sticky-0">
                <div class="2xl:container  2xl:mx-auto py-48 px-4 md:px-28 flex justify-center items-center">
                    <div
                        class="lg:w-1/3 xl:w-1/3 ml:w-1/3 md:w-2/3 xsm:w-2/3 w-full h-auto rounded-lg p-6 dark:bg-gray14 bg-whiteheader relative ">
                        <div role="banner" class=" ">
                            <svg class="text-delesteicono dark:text-green_home" width="48" height="48"
                                viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="48" height="48" rx="24" fill="currentcolor" />
                                <path class="text-green "
                                    d="M24 20.0002V33.0002M24 20.0002C24 20.0002 24 18.5074 24 18.0002C24 16.8956 24.8954 16.0002 26 16.0002C27.1046 16.0002 28 16.8956 28 18.0002C28 19.1048 27.1046 20.0002 26 20.0002C25.4026 20.0002 24 20.0002 24 20.0002ZM24 20.0002C24 20.0002 24 18.0631 24 17.5002C24 16.1195 22.8807 15.0002 21.5 15.0002C20.1193 15.0002 19 16.1195 19 17.5002C19 18.8809 20.1193 20.0002 21.5 20.0002C22.3178 20.0002 24 20.0002 24 20.0002ZM17 24.0002H31M17 24.0002C15.8954 24.0002 15 23.1047 15 22.0002C15 20.8956 15.8954 20.0002 17 20.0002H31C32.1046 20.0002 33 20.8956 33 22.0002C33 23.1047 32.1046 24.0002 31 24.0002M17 24.0002L17 31.0002C17 32.1047 17.8954 33.0002 19 33.0002H29C30.1046 33.0002 31 32.1047 31 31.0002V24.0002"
                                    stroke="currentcolor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <div class="text-txtnamecomntpkyr dark:text-bgprogresb font-inter font-medium text-lg pt-5">
                                Invita a un familiar o amigo
                            </div>
                            <div class="dark:text-pricingdarkstudents text-gray-600 pt-2 font-inter font-normal text-sm">
                                Tu PLAN DUO te permite agregar a otra persona
                                que podrá disfrutar de los mismos beneficios de tu plan. Invita a un familiar o un amigo con
                                su correo electrónico.
                            </div>
                            <div class="pt-6">
                                <input type="" placeholder="Ingrese el correo del beneficiario"
                                    class="border placeholder-gray-650 text-gray-500 dark:text-bgprogresb dark:placeholder-bgprogresb font-inter text-sm font-medium rounded-md h-10 pl-3  bg-transparent focus:outline-none w-full dark:border-gray-600 border-pricingdarkstudents">
                            </div>
                            <div class="pt-8 text-right">
                                <button class="bg-bgbtngreen  text-btncomentresply h-10 rounded-lg sm:w-48 w-full px-4">
                                    Enviar invitación
                                </button>
                            </div>

                        </div>



                        <button onclick="showMenu(true)"
                            class="text-gray-800 dark:text-gray-400 absolute top-8 right-8 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                            aria-label="close">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 6L6 18" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M6 6L18 18" stroke="currentColor" stroke-width="1.66667" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            let menu = document.getElementById("menu");
            const showMenu = (flag) => {
                menu.classList.toggle("hidden");
            };
        </script>


    </div>
@endsection
