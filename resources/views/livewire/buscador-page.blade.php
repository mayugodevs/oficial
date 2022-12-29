<div>
    <style>
        input:checked+svg {
            display: block;
        }
    </style>

    <div class="dark:bg-gray14 bg-whiteheader">
        <div class="md:invisible visible md:pt-0 pt-32 md:hidden px-4">
            <div class="flex flex-col  dark:text-bgprogresb text-txtnamecomntpkyr md:pt-0 pt-5">
                <div class="font-normal font-inter text-3xl">
                    Resultados para tu búsqueda :
                    <strong
                        class="dark:text-bgbtngreen text-green_tino md:text-3xl   font-bold font-inter">
                        "{{ $search }}"
                    </strong>
                </div>
            </div>
        </div>

        <div class="md:invisible visible flex flex-row justify-between md:pt-0 pt-10 px-4">
            <div class="">
                <button
                    class=" flex dark:bg-txtnamecomntpkyr bg-bgprogresb focus:outline-none font-inter text-sm 
                        font-normal  rounded-md px-4 py-2">
                    <div>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.00016 3.00004V1.33337M8.00016 3.00004C7.07968 3.00004 6.33349 3.74623 6.33349 4.66671C6.33349 5.58718 7.07968 6.33337 8.00016 6.33337M8.00016 3.00004C8.92063 3.00004 9.66682 3.74623 9.66682 4.66671C9.66682 5.58718 8.92063 6.33337 8.00016 6.33337M3.00016 13C3.92064 13 4.66683 12.2538 4.66683 11.3334C4.66683 10.4129 3.92064 9.6667 3.00016 9.6667M3.00016 13C2.07969 13 1.3335 12.2538 1.3335 11.3334C1.3335 10.4129 2.07969 9.6667 3.00016 9.6667M3.00016 13V14.6667M3.00016 9.6667V1.33337M8.00016 6.33337V14.6667M13.0002 13C13.9206 13 14.6668 12.2538 14.6668 11.3334C14.6668 10.4129 13.9206 9.6667 13.0002 9.6667M13.0002 13C12.0797 13 11.3335 12.2538 11.3335 11.3334C11.3335 10.4129 12.0797 9.6667 13.0002 9.6667M13.0002 13V14.6667M13.0002 9.6667V1.33337"
                                stroke="#CDD5DF" stroke-width="1.66667" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div id="activar"
                        class=" font-inter font-medium dark:text-borderconcours text-txtnamecomntpkyr text-sm pl-2">
                        Filtrar por
                    </div>
                </button>
            </div>
            <div class="">
                <button id="boton3"
                    class=" font-inter font-medium dark:text-borderconcours text-txtnamecomntpkyr text-sm dark:bg-txtnamecomntpkyr bg-bgprogresb focus:outline-none  rounded-md px-4 py-2">
                    Ordenar por {{ $orden ? 'destacados' : 'recientes' }}<i class="fas fa-angle-down pl-2"
                        id="subir3"></i>
                </button>

                <div id="pack3"
                    class="dark:bg-txtnamecomntpkyr hidden absolute w-full  bg-bgprogresb dark:text-pricingdarkstudents text-gray-600  focus:outline-none font-inter text-sm font-normal  rounded-md mt-3 px-4 py-2">
                
                    <div class="pb-4">
                        <button class="focus:outline-none" wire:click="$set('orden',0)">
                            Recientes
                        </button>
                    </div>
                    <div class="">
                        <button class="focus:outline-none" wire:click="$set('orden',1)">
                            Destacados
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class=" grid sm:grid-cols-4 grid-cols-1 containermygo mx-auto md:pt-28 pt-5">

            <div class="col-span-1 md:px-0 px-4 ">
                <div id="barra"
                    class="dark:bg-pricingcintadark  bg-white-100 shadow-xl p-6 font-medium font-inter text-sixteen ">
                    <div class="pt-6">
                        <div class="flex justify-between">
                            <div class="text-txtnamecomntpkyr dark:text-bgprogresb">
                                Precio
                            </div>
                            <button class="focus:outline-none" id="play1">
                                <i class="fas fa-angle-down text-txtnamecomntpkyr dark:text-bgprogresb"
                                    id="cambio1"></i>
                            </button>
                        </div>
                        <div class="ml-3" id="icon1">


                            <div class="flex items-start pt-4">
                                <label class="flex justify-center items-center">
                                    @if ($type_price === 0)
                                        <div
                                            class="dark:bg-green bg-green  text-white-500 dark:text-black border-2 rounded border-green w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                            <input type="checkbox" class="opacity-0 absolute"
                                                wire:click="cambio(0,0,0)">
                                            <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                viewBox="0 0 20 20">
                                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                            </svg>
                                        </div>
                                    @else
                                        <div
                                            class="dark:bg-black bg-whiteheader  dark:text-white-500 text-black border-2 rounded border-txtcommentply w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                            <input type="checkbox" class="opacity-0 absolute"
                                                wire:click="cambio(0,1,0)">
                                            <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                viewBox="0 0 20 20">
                                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                            </svg>
                                        </div>
                                    @endif
                                    <div class="select-none ml-2 dark:text-bgprogresb text-txtcommentply">Gratis</div>
                                </label>

                            </div>

                            <div class="flex items-start pt-3">

                                <label class="flex justify-center items-center">
                                    @if ($type_price === 1)
                                        <div
                                            class="dark:bg-green bg-green  text-white-500 dark:text-black border-2 rounded border-green w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                            <input type="checkbox" class="opacity-0 absolute"
                                                wire:click="cambio(0, 0, 1)">
                                            <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                viewBox="0 0 20 20">
                                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                            </svg>
                                        </div>
                                    @else
                                        <div
                                            class="dark:bg-black bg-whiteheader  dark:text-white-500 text-black border-2 rounded border-txtcommentply w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                            <input type="checkbox" class="opacity-0 absolute"
                                                wire:click="cambio(0, 1, 1)">
                                            <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                viewBox="0 0 20 20">
                                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                            </svg>
                                        </div>
                                    @endif
                                    <div class="select-none ml-2 dark:text-bgprogresb text-txtcommentply">De Pago</div>
                                </label>

                            </div>

                        </div>
                    </div>


                    <div class="pt-6">
                        <div class="flex justify-between">
                            <div class="text-txtnamecomntpkyr dark:text-bgprogresb">
                                Categoría
                            </div>
                            <button class="focus:outline-none text-txtnamecomntpkyr dark:text-bgprogresb"
                                id="play3">
                                <i class="fas fa-angle-down " id="cambio3"></i>
                            </button>
                        </div>
                        <div class="ml-3" id="icon3">
                            <div class="flex items-start pt-3">
                                <label class="flex justify-center items-center">
                                    @if (in_array(0, $type_category))
                                        <div
                                            class="dark:bg-green bg-green  text-white-500 dark:text-black border-2 rounded border-green w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                            <input type="checkbox" class="opacity-0 absolute"
                                                wire:click="cambio(1,0,0)">
                                            <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                viewBox="0 0 20 20">
                                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                            </svg>
                                        </div>
                                    @else
                                        <div
                                            class="dark:bg-black bg-whiteheader  dark:text-white-500 text-black border-2 rounded border-txtcommentply w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                            <input type="checkbox" class="opacity-0 absolute"
                                                wire:click="cambio(1,1,0)">
                                            <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                viewBox="0 0 20 20">
                                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                            </svg>
                                        </div>
                                    @endif
                                    <div class="select-none ml-2 dark:text-bgprogresb text-txtcommentply">Curso</div>
                                </label>
                            </div>

                            <div class="flex items-start pt-3">
                                <label class="flex justify-center items-center">
                                    @if (in_array(1, $type_category))
                                        <div
                                            class="dark:bg-green bg-green  text-white-500 dark:text-black border-2 rounded border-green w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                            <input type="checkbox" class="opacity-0 absolute"
                                                wire:click="cambio(1,0,1)">
                                            <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                viewBox="0 0 20 20">
                                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                            </svg>
                                        </div>
                                    @else
                                        <div
                                            class="dark:bg-black bg-whiteheader  dark:text-white-500 text-black border-2 rounded border-txtcommentply w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                            <input type="checkbox" class="opacity-0 absolute"
                                                wire:click="cambio(1,1,1)">
                                            <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                viewBox="0 0 20 20">
                                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                            </svg>
                                        </div>
                                    @endif
                                    <div class="select-none ml-2 dark:text-bgprogresb text-txtcommentply">
                                        Especialización</div>
                                </label>
                            </div>

                            <div class="flex items-start pt-3">
                                <label class="flex justify-center items-center">
                                    @if (in_array(2, $type_category))
                                        <div
                                            class="dark:bg-green bg-green  text-white-500 dark:text-black border-2 rounded border-green w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                            <input type="checkbox" class="opacity-0 absolute"
                                                wire:click="cambio(1,0,2)">
                                            <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                viewBox="0 0 20 20">
                                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                            </svg>
                                        </div>
                                    @else
                                        <div
                                            class="dark:bg-black bg-whiteheader  dark:text-white-500 text-black border-2 rounded border-txtcommentply w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
                                            <input type="checkbox" class="opacity-0 absolute"
                                                wire:click="cambio(1,1,2)">
                                            <svg class="fill-current hidden w-4 h-4 text-green-500 pointer-events-none"
                                                viewBox="0 0 20 20">
                                                <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                            </svg>
                                        </div>
                                    @endif
                                    <div class="select-none ml-2 dark:text-bgprogresb text-txtcommentply">Modalidad en
                                        Vivo</div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-span-3 md:pl-7 px-4">
                <div class="hidden md:block">
                    <div
                        class="flex flex-row justify-between  dark:text-bgprogresb text-txtnamecomntpkyr md:pt-0 pt-5">
                        <div class="font-bold  font-inter text-3xl">
                            Resultados para tu búsqueda :
                            <strong
                                class="dark:text-bgbtngreen text-bcklightbuscador md:text-3xl   font-bold font-inter">"{{ $search }}"</strong>
                        </div>
                        <div class="md:visible invisible relative">
                            <button id="boton2"
                                class="  dark:bg-txtnamecomntpkyr bg-bgprogresb focus:outline-none font-inter text-sm font-normal  rounded-md px-4 py-2">
                                Ordenar por {{ $orden ? 'destacados' : 'recientes' }}<i class="fas fa-angle-down pl-2"
                                    id="subir2"></i>
                            </button>
                            <div id="pack2"
                                class="dark:bg-txtnamecomntpkyr absolute w-full  bg-bgprogresb dark:text-pricingdarkstudents text-gray-600 hidden focus:outline-none font-inter text-sm font-normal  rounded-md mt-3 px-4 py-2">
                                <div class="pb-4">


                                    <button class="{{ $orden ? '' : 'bg bg-red-500' }} focus:outline-none"
                                        wire:click="$set('orden',0)">
                                        Recientes
                                    </button>
                                </div>
                                <div class="">
                                    <button class="{{ $orden ? 'bg bg-red-500' : '' }} focus:outline-none"
                                        wire:click="$set('orden',1)">
                                        Destacados
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (in_array(0, $this->type_category)){{-- show courses --}}
                    <div class="flex flex-row justify-between  md:pt-10 pt-20">
                        <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter text-2xl font-bold ">
                            Cursos
                        </div>
                        <div class="text-white-300">
                            {{ $curso_message }}
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-8 gap-y-6   md:pt-6 pt-10 mb-10">
                        @foreach ($cursos as $curso)
                            <div class=" ">
                                <div class=" rounded-2xl">
                                    <img class="rounded-t-2xl"
                                        src="https://www.mayugo.net/admin/images/miniaturas/mejora-continua.jpg"
                                        alt="">
                                </div>
                                <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite px-3 pt-3 pb-8">
                                    <div
                                        class="font-inter font-medium text-lg dark:text-whiteheader text-txtnamecomntpkyr ">
                                        {{ $curso->nom }}
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="font-inter font-medium text-sm dark:text-gray-400 text-gray-500 ">
                                            Por : 
                                            <span class="italic font-medium text-sm text-greenhover px-2">
                                                {{ $curso->nombres ? $curso->nombres : $curso->nombres }}
                                            </span>
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
                                            {{ $curso->precio }} PEN
                                        </div>
                                        <div class="text-gray-400 line-through text-sm font-normal">
                                            {{ $curso->predsct }} PEN
                                        </div>
                                    </div>
                                    <div>
                                        @if (in_array($curso->idcur, $cart))
                                            <button
                                                class="rounded-lg px-5 py-2 bg-blue3 text-gray-500 focus:outline-none"
                                                wire:click="remove_cart({{ $curso->idcur }})">
                                                Quitar del carrito
                                            </button>
                                        @else
                                            <button
                                                class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none"
                                                wire:click="add_cart({{ $curso->idcur }})">
                                                Añadir al carrito
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                @endif

                @if (in_array(1, $this->type_category))
                    <div class="flex flex-row justify-between  md:pt-11 pt-5">
                        <div
                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter md:text-2xl text-xl font-bold ">
                            Especialidades
                        </div>
                        <div class="text-white-300">
                            {{ $category_message }}
                        </div>
                    </div>

                    <div class="grid md:grid-cols-3 grid-cols-1  gap-x-8 md:gap-y-4 gap-y-6  md:pt-7 pt-5">

                        @foreach ($categorys as $category)
                            <div
                                class="flex flex-row justify-between items-center p-4 rounded-xl dark:bg-pricingcintadark bg-bgfondopricingwhite">
                                <div class="flex flex-col font-inter dark:text-bordersec text-txtnamecomntpkyr ">
                                    <div class="text-xs leading-5 font-semibold tracking-ltitle ">
                                        ESPECIALIZACION EN:
                                    </div>
                                    <div class="text-sixteen leading-6 font-bold ">
                                        <a href="{{ route('categoria', ['id'=>$category->slug]) }}" target="_blank" rel="noopener noreferrer">
                                            {{ $category->nombre }}
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <svg width="81" height="80" viewBox="0 0 81 80" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M40.3335 80C62.4249 80 80.3335 62.0914 80.3335 40C80.3335 17.9086 62.4249 0 40.3335 0C18.2421 0 0.333496 17.9086 0.333496 40C0.333496 62.0914 18.2421 80 40.3335 80Z"
                                            fill="#83878A" />
                                        <path
                                            d="M40.3327 74.9673C59.645 74.9673 75.3008 59.3115 75.3008 39.9993C75.3008 20.687 59.645 5.03125 40.3327 5.03125C21.0205 5.03125 5.36475 20.687 5.36475 39.9993C5.36475 59.3115 21.0205 74.9673 40.3327 74.9673Z"
                                            fill="#252A2E" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19.9777 36.8022C21.1653 30.3569 26.4879 28.2946 33.6355 28.1418L33.7181 21.7249C8.38304 20.7755 7.86304 51.1978 19.2115 56.7764C34.679 64.38 43.7999 41.3035 32.0097 35.1169C25.7386 31.8262 21.503 35.9658 19.9777 36.8022ZM62.8488 36.1969L68.2115 36.5035L68.5501 30.5089C60.6773 30.5186 50.4728 29.1586 45.0613 33.5266C40.3173 37.356 38.6115 46.8875 42.7226 53.0422C48.1493 61.1658 64.3741 60.4369 65.9039 46.7071C66.4613 41.7018 65.0488 39.3444 62.8488 36.1969ZM52.3333 36.6138C48.6808 37.876 48.335 42.2884 48.679 45.9284C48.9884 49.1995 50.9857 53.2271 54.7244 52.0911C60.3884 50.3693 59.5573 34.1186 52.3333 36.6138ZM23.423 40.068C17.2399 41.5258 19.4426 53.268 25.9341 51.98C31.2035 50.9338 30.9555 38.2929 23.423 40.068Z"
                                            fill="white" />
                                    </svg>

                                </div>
                            </div>
                        @endforeach

                    </div>
                @endif
                
                @if (in_array(2, $this->type_category))
                    <div class="flex flex-row justify-between  md:pt-10 pt-20">
                        <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter text-2xl font-bold ">
                            Modalidad en Vivo
                        </div>
                        <div class="text-white-300">
                            {{ $specialization_message }}
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-8 gap-y-6   md:pt-6 pt-10">
                        @foreach ($specializations as $specialization)
                            <div class=" ">
                                <div class=" rounded-2xl">
                                    <img class="rounded-t-2xl"
                                        src="https://www.mayugo.net/admin/images/miniaturas/mejora-continua.jpg"
                                        alt="">
                                </div>
                                <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite px-3 pt-3 pb-8">
                                    <div
                                        class="font-inter font-medium text-lg dark:text-whiteheader text-txtnamecomntpkyr">
                                        {{ $specialization->titulo }}
                                    </div>
                                    <div class="flex pt-2">
                                        <div class="font-inter font-medium text-sm dark:text-gray-400 text-gray-500 ">
                                            por :
                                        </div>
                                        <div class="italic font-medium text-sm text-greenhover px-2">
                                            franklin espinoza
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-start font-inter font-medium text-sm pt-3 dark:text-pricingdarkstudents text-gray-600">
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
                                                {{$specialization->inicio}}
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
                                                {{$specialization->fecha_termino}}
                                            </div>
                                        </div>

                                    </div>


                                </div>

                                <div
                                    class="dark:bg-pricingdark bg-pricingcintawhite rounded-b-2xl  items-center flex justify-between p-3">
                                    <div class="flex flex-col font-inter font-medium ">
                                        <div
                                            class="dark:text-checkpricingdark font-bold text-green_hover text-sixteen">
                                            {{$specialization->diplomado->precio_venta}}
                                        </div>
                                        <div class="text-gray-400 line-through text-sm">
                                            {{$specialization->diplomado->precio_normal}}
                                        </div>

                                    </div>
                                    <div>
                                        <button
                                            class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                            <a href="{{ route('info.diplomado', ['id'=>$specialization->slug]) }}" target="_blank" rel="noopener noreferrer">
                                                Comprar
                                            </a>
                                        </button>
                                    </div>
                                </div>


                            </div>
                        @endforeach
                    </div>
                @endif

                

            </div>
        </div>
        <br>
    </div>

    @push('js')
        <script>
            var play1 = document.getElementById('play1');
            var icon1 = document.getElementById('icon1');
            var play3 = document.getElementById('play3');
            var icon3 = document.getElementById('icon3');
            var play2 = document.getElementById('play2');
            var icon2 = document.getElementById('icon2');
            var activar = document.getElementById('activar');
            var barra = document.getElementById('barra');
            var boton1 = document.getElementById('boton1');
            var pack1 = document.getElementById('pack1');
            var subir = document.getElementById('subir');

            activar.addEventListener('click', function() {
                barra.classList.toggle('hidden');

            });

            play1.addEventListener('click', function() {
                icon1.classList.toggle('hidden');
                cambio1.classList.toggle('fa-angle-up');
            });

            play2.addEventListener('click', function() {
                icon2.classList.toggle('hidden');
                cambio2.classList.toggle('fa-angle-up');
            });

            play3.addEventListener('click', function() {
                icon3.classList.toggle('hidden');
                cambio3.classList.toggle('fa-angle-up');
            });

            boton1.addEventListener('click', function() {
                pack1.classList.toggle('hidden');
                subir.classList.toggle('fa-angle-up');
            });

            var boton3 = document.getElementById('boton3');
            var pack3 = document.getElementById('pack3');
            var subir3 = document.getElementById('subir3');
            boton3.addEventListener('click', function() {
                pack3.classList.toggle('hidden');
                subir3.classList.toggle('fa-angle-up');
            });

            var boton2 = document.getElementById('boton2');
            var pack2 = document.getElementById('pack2');
            var subir2 = document.getElementById('subir2');

            boton2.addEventListener('click', function() {
                pack2.classList.toggle('hidden');
                subir2.classList.toggle('fa-angle-up');
            });
        </script>
    @endpush
</div>
