<div class=" lg:grid hidden lg:grid-cols-4 grid-cols-1 gap-x-6 gap-y-4 sm:px-0 px-4 ">
    @foreach ($cursos as $curso)
        <div class=" ">
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
                            wire:click="add_course"
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