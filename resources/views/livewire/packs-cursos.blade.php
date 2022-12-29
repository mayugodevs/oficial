<div class=" mx-auto  sm-px-0 sm:pt-20 pt-2 bg-colheaderwhite ">

    <style>
        .aparece {
            display: none !important;
        }
    </style> 
    <script>
        const TIEMPO = 120;/* en minutos */
        let tempo, tempo2;
        class Temporizador {

            constructor(tiempo, id_h, id_m, id_s){
                this.tiempo = tiempo; 
                this.id_h = id_h;
                this.id_m = id_m;
                this.id_s = id_s;
                this.countdown = '';
                this.hoursElement = document.querySelector(`#${this.id_h}`);
                this.minutesElement = document.querySelector(`#${this.id_m}`);
                this.secondsElement = document.querySelector(`#${this.id_s}`);
            }
            timer() { 
                const now = Date.now(); 
                const then = now + (this.tiempo*60) * 1000;
                
                this.countdown = setInterval(() => {
                const secondsLeft = Math.round((then - Date.now()) / 1000);           
                if(secondsLeft <= 0) {
                    hora = new Date()
                    localStorage.setItem('h_reinicio_pack', hora.getTime()) 
                    clearInterval(this.countdown);
                    console.log('reiniciando...');
                    // delete tempo.timer;
                    // delete tempo2.timer;
                    const reloj = new Temporizador(TIEMPO, this.id_h, this.id_m, this.id_s)
                    reloj.timer()
                    console.log(reloj);
                };
                this.displayTimeLeft(secondsLeft);
                },1000);                
            }
            displayTimeLeft(seconds) {
                this.hoursElement.textContent = Math.floor((seconds % 86400) / 3600)
                this.minutesElement.textContent = Math.floor((seconds % 86400) % 3600 / 60);
                this.secondsElement.textContent = seconds % 60 < 10 ? `0${seconds % 60}` : seconds % 60;
            }
            }

        function logica_tempor(){
            hora = new Date()
            if (localStorage.getItem('h_reinicio_pack')) {
                hora_local = localStorage.getItem('h_reinicio_pack') 
                diff = Math.round((hora.getTime()-hora_local)/60000 )
                console.log(diff);
                if (diff > 0) {
                    diff = (diff >= TIEMPO) ? (diff % TIEMPO) : diff;  
                    mostrar_temporizador(TIEMPO-diff); 
                }
                else { 
                    localStorage.setItem('h_reinicio_pack', hora.getTime()) 
                    mostrar_temporizador(TIEMPO);
                }
            }
            else { 
                localStorage.setItem('h_reinicio_pack', hora.getTime()) 
                mostrar_temporizador(TIEMPO);
            }
        }

        function mostrar_temporizador(hora){
            tempo = new Temporizador(hora, 'hora', 'minuto', 'segundo');
            tempo.timer();

            tempo2 = new Temporizador(hora, 'hrs', 'min', 'sec');
            tempo2.timer();
        }
    </script>

    <div class="bg-gradient-to-l to-green_especialidad from-bcklightbuscador pt-4  pb-7">
        <div class="containermygo mx-auto">
            <div class="grid sm:grid-cols-2 grid-cols-1 lg:items-star items-center ml:px-0 xl:px-0 lg:px-0 md:px-6 ml:pt-0 pt-20 px-4">
                <div class="flex flex-col">
                    <div class="text-checkpricingdark sm:text-left text-center  font-inter font-normal text-sixteen leading-5 lg:pt-14 pt-6">
                        Pack de {{ $cantMax }} cursos
                    </div>

                    <div class="text-center py-2">
                        <div class="font-inter text-left sm:text-4xl text-thirty-two text-white-100 font-bold mx-auto">
                            Elige {{ $cantMax }} y paga solo 1
                        </div>
                    </div>
                    <div class="font-inter sm:text-left text-center font-normal text-sixteen text-white-100">
                        Aprovecha este momento para formarte en el sector de la producción y servicios
                        con los mejores profesionales de la industria. Elige {{ $cantMax }} cursos y paga por el precio de uno. ¡Solo
                        por tiempo limitado!
                    </div>
                    <div class="mt-6 mb-3.5 sm:text-left text-center ">
                        <button
                            class="text-green_especialidad focus:outline-none font-inter font-medium text-sixteen bg-bgbtngreen rounded-md py-2 px-5 ">
                            Elegir cursos
                        </button>
                    </div>
                    <div class="text-white-100 text-sm font-inter font-normal sm:text-left text-center">
                        * Descuento calculado sobre el curso más costoso de este pack
                    </div>
                </div>

                <div class="">
                    <img src=" {{ asset('images/metodologia/image3x1.png') }}" alt="">
                </div>
            </div>
        </div>

    </div>

    {{-- primer filtro que veo --}}
    <div class="containermygo mx-auto py-6 sm:flex hidden justify-end px-4">
        <div class="text-right gap-x-6 flex justify-end">
            <div>
                <button
                    class="focus:outline-none flex rounded-md text-sm font-inter font-normal py-2.5 px-3 text-pricingdarkstudents border border-borderconcours">
                    <div class="pr-3">
                        ingeniería de mantenimiento
                    </div>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.29289 7.29308C5.68342 6.90255 6.31658 6.90255 6.70711 7.29308L10 10.586L13.2929 7.29308C13.6834 6.90255 14.3166 6.90255 14.7071 7.29308C15.0976 7.6836 15.0976 8.31677 14.7071 8.70729L10.7071 12.7073C10.3166 13.0978 9.68342 13.0978 9.29289 12.7073L5.29289 8.70729C4.90237 8.31677 4.90237 7.6836 5.29289 7.29308Z"
                            fill="#697586" />
                    </svg>
                </button>



            </div>
            <div>
                <button
                    class="focus:outline-none flex rounded-md text-sm font-inter font-normal py-2.5 px-3 text-pricingdarkstudents border border-borderconcours">
                    <div class="pr-3">
                        Más vendidos
                    </div>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.29289 7.29308C5.68342 6.90255 6.31658 6.90255 6.70711 7.29308L10 10.586L13.2929 7.29308C13.6834 6.90255 14.3166 6.90255 14.7071 7.29308C15.0976 7.6836 15.0976 8.31677 14.7071 8.70729L10.7071 12.7073C10.3166 13.0978 9.68342 13.0978 9.29289 12.7073L5.29289 8.70729C4.90237 8.31677 4.90237 7.6836 5.29289 7.29308Z"
                            fill="#697586" />
                    </svg>
                </button>

            </div>
            <div class="relative">
                <input type="text"
                    class=" focus:outline-none rounded-md text-sm font-inter font-normal py-2.5 pl-3 placeholder-pricingdarkstudents border border-borderconcours "
                    placeholder="Empieza a buscar">
                <button class="absolute right-4 bottom-3 focus:outline-none">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.5005 17.4999L12.5005 12.4999M14.1671 8.33327C14.1671 11.5549 11.5555 14.1666 8.33382 14.1666C5.11216 14.1666 2.50049 11.5549 2.50049 8.33327C2.50049 5.11161 5.11216 2.49994 8.33382 2.49994C11.5555 2.49994 14.1671 5.11161 14.1671 8.33327Z"
                            stroke="#697586" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>
            </div>

        </div>

    </div>
    
    <div id="imagen" class="animado fixed hidden bg-white2  w-full top-24 z-20">
        <div
            class="bg-pricingtextduowhite lg:hidden flex sm:flex-row flex-col items-center justify-center text-bgprogresb py-5 text-center font-inter text-sixteen font-medium">
            <div class="font-inter font-medium text-sixteen text-bgprogresb sm:pb-0 pb-2">
                la oferta termina ennnn
            </div>

            <div class=" pl-5 pr-5  text-bgprogresb font-inter rounded">

                <div class="flex text-center items-center justify-between">
                    {{-- <div class="">
                        <p class="text-lg font-bold">00</p>
                        <p class="text-sm">Días</p>
                    </div>
                    <div class="px-3">
                        .
                    </div> --}}
                    <div class="">
                        <p class="text-lg font-bold" id="hrs">00</p>
                        <p class="text-sm font-normal">Horas</p>
                    </div>
                    <div class="px-3">
                        .
                    </div>
                    <div class="">
                        <p class="text-lg font-bold" id="min">00</p>
                        <p class="text-sm font-normal">Minutos</p>
                    </div>
                    <div class="px-3">
                        .
                    </div>
                    <div>
                        <p class="text-lg font-bold" id="sec">00</p>
                        <p class="text-sm font-normal">Seg</p>
                    </div>
                </div>

            </div>

        </div>
        <div class="containermygo mx-auto ">
            <div class="text-txtnamecomntpkyr text-center pt-4 ">
                <div
                    class=" lg:hidden flex text-center justify-center font-inter font-medium text-sixteen sm:pb-3 pb-0">
                    <div>
                        Elige {{ $cantMax }} cursos y paga solo a {{$simbolo}} {{$precioFinal*$cambio}} {{$cod_iso}}
                    </div>

                </div>



            </div>
            <div class="text-center gap-x-6  sm:flex hidden pb-4 justify-center">
                <div>
                    <button
                        class="focus:outline-none flex rounded-md bg-white-100 text-sm font-inter font-normal py-2.5 px-3 text-pricingdarkstudents border border-borderconcours">
                        <div class="pr-3">
                            ingeniería de mantenimiento
                        </div>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.29289 7.29308C5.68342 6.90255 6.31658 6.90255 6.70711 7.29308L10 10.586L13.2929 7.29308C13.6834 6.90255 14.3166 6.90255 14.7071 7.29308C15.0976 7.6836 15.0976 8.31677 14.7071 8.70729L10.7071 12.7073C10.3166 13.0978 9.68342 13.0978 9.29289 12.7073L5.29289 8.70729C4.90237 8.31677 4.90237 7.6836 5.29289 7.29308Z"
                                fill="#697586" />
                        </svg>
                    </button>



                </div>
                <div>
                    <button
                        class="focus:outline-none flex bg-white-100 rounded-md text-sm font-inter font-normal py-2.5 px-3 text-pricingdarkstudents border border-borderconcours">
                        <div class="pr-3">
                            Más vendidos
                        </div>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.29289 7.29308C5.68342 6.90255 6.31658 6.90255 6.70711 7.29308L10 10.586L13.2929 7.29308C13.6834 6.90255 14.3166 6.90255 14.7071 7.29308C15.0976 7.6836 15.0976 8.31677 14.7071 8.70729L10.7071 12.7073C10.3166 13.0978 9.68342 13.0978 9.29289 12.7073L5.29289 8.70729C4.90237 8.31677 4.90237 7.6836 5.29289 7.29308Z"
                                fill="#697586" />
                        </svg>
                    </button>

                </div>
                <div class="relative">
                    <input type="text"
                        class=" focus:outline-none rounded-md text-sm font-inter font-normal py-2.5 pl-3 placeholder-pricingdarkstudents border border-borderconcours bg-white-100 "
                        placeholder="Empieza a buscar">
                    <button class="absolute right-4 bottom-3 focus:outline-none">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.5005 17.4999L12.5005 12.4999M14.1671 8.33327C14.1671 11.5549 11.5555 14.1666 8.33382 14.1666C5.11216 14.1666 2.50049 11.5549 2.50049 8.33327C2.50049 5.11161 5.11216 2.49994 8.33382 2.49994C11.5555 2.49994 14.1671 5.11161 14.1671 8.33327Z"
                                stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                    </button>
                </div>

            </div>
            <div class="sm:hidden flex px-6 pt-8 pb-6">
                <div class="flex w-full justify-between gap-x-3 items-center">
                    <div class="relative w-full">
                        <input type="text"
                            class="w-full focus:outline-none rounded-md text-sm font-inter font-normal py-2.5 pl-3 placeholder-pricingdarkstudents border border-borderconcours "
                            placeholder="ingenieria ...">
                        <button class="absolute right-2 bottom-3 focus:outline-none">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.29289 7.29308C5.68342 6.90255 6.31658 6.90255 6.70711 7.29308L10 10.586L13.2929 7.29308C13.6834 6.90255 14.3166 6.90255 14.7071 7.29308C15.0976 7.6836 15.0976 8.31677 14.7071 8.70729L10.7071 12.7073C10.3166 13.0978 9.68342 13.0978 9.29289 12.7073L5.29289 8.70729C4.90237 8.31677 4.90237 7.6836 5.29289 7.29308Z"
                                    fill="#697586" />
                            </svg>


                        </button>
                    </div>

                    <div class="relative w-full">
                        <input type="text"
                            class="w-full focus:outline-none rounded-md text-sm font-inter font-normal py-2.5 pl-3 placeholder-pricingdarkstudents border border-borderconcours "
                            placeholder="mas vendidos">
                        <button class="absolute right-2 bottom-3 focus:outline-none">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.29289 7.29308C5.68342 6.90255 6.31658 6.90255 6.70711 7.29308L10 10.586L13.2929 7.29308C13.6834 6.90255 14.3166 6.90255 14.7071 7.29308C15.0976 7.6836 15.0976 8.31677 14.7071 8.70729L10.7071 12.7073C10.3166 13.0978 9.68342 13.0978 9.29289 12.7073L5.29289 8.70729C4.90237 8.31677 4.90237 7.6836 5.29289 7.29308Z"
                                    fill="#697586" />
                            </svg>


                        </button>
                    </div>

                    <button class="  focus:outline-none px-1">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.5005 17.4999L12.5005 12.4999M14.1671 8.33327C14.1671 11.5549 11.5555 14.1666 8.33382 14.1666C5.11216 14.1666 2.50049 11.5549 2.50049 8.33327C2.50049 5.11161 5.11216 2.49994 8.33382 2.49994C11.5555 2.49994 14.1671 5.11161 14.1671 8.33327Z"
                                stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="sm:hidden flex px-4 py-6">
        <div class="flex w-full justify-between items-center">

            <div class="relative w-full">
                <input type="text"
                    class="w-full focus:outline-none rounded-md text-sm font-inter font-normal py-2.5 pl-3 placeholder-pricingdarkstudents border border-borderconcours "
                    placeholder="todos">
                <button class="absolute right-4 bottom-3 focus:outline-none">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.29289 7.29308C5.68342 6.90255 6.31658 6.90255 6.70711 7.29308L10 10.586L13.2929 7.29308C13.6834 6.90255 14.3166 6.90255 14.7071 7.29308C15.0976 7.6836 15.0976 8.31677 14.7071 8.70729L10.7071 12.7073C10.3166 13.0978 9.68342 13.0978 9.29289 12.7073L5.29289 8.70729C4.90237 8.31677 4.90237 7.6836 5.29289 7.29308Z"
                            fill="#697586" />
                    </svg>


                </button>
            </div>

            <button class="  focus:outline-none px-3">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.5005 17.4999L12.5005 12.4999M14.1671 8.33327C14.1671 11.5549 11.5555 14.1666 8.33382 14.1666C5.11216 14.1666 2.50049 11.5549 2.50049 8.33327C2.50049 5.11161 5.11216 2.49994 8.33382 2.49994C11.5555 2.49994 14.1671 5.11161 14.1671 8.33327Z"
                        stroke="#697586" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                </svg>

            </button>
        </div>


    </div>


    <div class="grid grid-cols-12 text-center ml:px-0 containermygo mx-auto  lg:px-0  px-4">
        <div
            class="my-1 col-span-12 xs:col-span-4 sm:col-span-4 md:col-span-3 lg:col-span-3 xl:col-span-3 xl:text-sm ml:text-base ml:col-span-3 lg:flex hidden">
            <div class=" dark:text-gray-700 font-inter text-sixteen font-bold   ">
               <div class="bg-bgfondopricingwhite dark:bg-bgfondopricingwhite py-2  rounded-lg">
                <div>
                    Especialidades
                </div>
                <hr class="my-2 py-1">
                <ul class="  mx-4 font-serif ">

                    @foreach ($categorias as $categoria)
                        <li class="hover:bg-white-300 dark:hover:bg-celeste font-inter text-sixteen rounded-md h-13 pb-2 pt-2">
                            <button wire:click="showNow({{ $categoria->idc }})"
                                class="hover:border-transparent flex items-center px-2
                            dark:hover:text-gray-900 transition-colors duration-200 
                            text-gray-900    text-left focus:outline-none">
                                <img class="h-8 w-8 mr-2" viewBox="0 0 24 24"
                                    src="{{ asset('images/categoria/' . $categoria->img) }}"
                                    alt="{{ $categoria->img }}">
                                {{ $categoria->nombre }}
                            </button>
                        </li>
                    @endforeach
                </ul>
               </div>
            </div>
        </div>

        <div class="col-span-12 xs:col-span-4  sm:col-span-4 my-1 md:col-span-12 lg:col-span-9 xl:col-span-9 ml:col-span-9 md:pl-0 lg:pl-5 xl:pl-5 2xl:px-0 ul:pl-5 ml:px-0 ">
             
            <div class="ml:grid-cols-4 xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 grid gap-x-5 gap-y-6">
                @include('modals.packs', ['ml' => 4, 'lg' => 3, 'xl' => 3, 'sm' => 1, 'md' => 1])
            </div>
        </div>

        <div
            class="mt-3  col-span-12 xs:col-span-4 sm:col-span-4 md:col-span-4 lg:col-span-3 xl:col-span-3 xl:text-sm ml:text-base ml:col-span-3">
            <div class="  fixed    items-center dark:bg-transparent bg-gray12 inset-x-0  bottom-0 justify-center  ">
                <div class="flex flex-col ml:flex-row items-center xl:flex-row  lg:flex-row md:flex-row   dark:bg-gray12  w-full justify-center ">
                    <div class="flex items-center ">
                        @if ($contador == $cantMax)
                            <div class=" lg:flex hidden pr-8 -mt-2 flex-col items-center justify-center text-bgprogresb py-5 text-center font-inter text-sixteen font-medium">
                                <div class="font-inter font-medium text-sixteen text-bgprogresb pb-3">
                                    Elige {{$cantMax}} cursos y paga solo a {{$simbolo}} {{$precioFinal*$cambio}} {{$cod_iso}}
                                </div>

                                <div class=" pl-5 pr-5 text-bgprogresb font-inter rounded">
                                    <div class="flex text-center items-center justify-between">
                                        {{-- <div class="">
                                            <p class="text-lg font-bold">00</p>
                                            <p class="text-sm">Díasd</p>
                                        </div>
                                        <div class="px-3">
                                            .
                                        </div> --}}
                                        <div class="">
                                            <p class="text-lg font-bold" id="hora">00</p>
                                            <p class="text-sm font-normal">Horas</p>
                                        </div>
                                        <div class="px-3">
                                            .
                                        </div>
                                        <div class="">
                                            <p class="text-lg font-bold" id="minuto">00</p>
                                            <p class="text-sm font-normal">Minutos</p>
                                        </div>
                                        <div class="px-3">
                                            .
                                        </div>
                                        <div>
                                            <p class="text-lg font-bold" id="segundo">00</p>
                                            <p class="text-sm font-normal">Seg</p>
                                        </div>
                                    </div>

                                </div>

                            </div> 
                            <script>
                                console.log('');
                                // delete tempo2.timer
                                
                                logica_tempor();
                            </script> 
                        @endif


                        @forelse($carrito as $item)
                            <div class="flex flex-row pt-6 sm:pb-6 pb-2 " title="{{$item->name}}">
                                <div class="flex flex-row ml:items-center items-start  ">
                                    <div
                                        class="xl:h-16 ml:h-16 lg:h-16 md:h-16 h-12 xl:w-16 ml:w-16 lg:w-16 md:w-16  w-12 relative">
                                        <img src="{{asset($item->options->img)}}"
                                            alt="{{$item->options->img}}">
                                    </div>
                                </div>
                                <div class="ml:px-2 px-1 absolute xl:mx-9 ml:mx-9 lg:mx-9 mx-5 -my-3">
                                    <button
                                        class="bg-transparent p-1 py-1 lg:px-1 px-4 text-pricingdarkstudents  focus:outline-none
                       
                                     rounded"
                                        wire:click="agregarPack('{{ $item->rowId }}', {{ $item->id }})">
                                        <p class="inline-flex font-semibold ">
                                            <i class="fas fa-times  text-xs"></i>
                                        </p>
                                    </button>
                                </div>
                            </div>
                            <div class="  px-2">
                                <i id="mas" class="fas fa-plus text-xs text-pricingdarkstudents  font-semibold"></i>
                            </div>
                        @empty

                        @endforelse
                    </div>

                    @if ($contador == $cantMax)
                        <div class="text-center pt-1 pb-3 sm:hidden flex">
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.8334 8.66642L8.50008 11.9998M8.50008 11.9998L5.16675 8.66642M8.50008 11.9998L8.50008 3.99976"
                                    stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div> 

                        <div class="w-auto pb-1 sm:mb-0 mb-6  px-2">
                            <a href="{{ route('checkout', ['tipo' => 'uEAAYASAAEgJ', 'link' => rand(1, 100), 'step' => 'first']) }}"
                                class="bg bg-green_hover w-full rounded-md py-2">
                                <button
                                    class="text-green_especialidad focus:outline-none w-full font-inter font-medium text-sixteen bg-bgbtngreen rounded-md py-2 px-6 ">
                                    Comprar pack por {{$simbolo}} {{$precioFinal*$cambio}} {{$cod_iso}}
                                </button>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>


    <script>
        
    </script>

    @push('js')
        <script>

            let animado = document.querySelectorAll(".animado");
            /*  let animado = document.getElementById('animado'); */
            function mostrardiv() {
                let scrollTop = document.documentElement.scrollTop;
                /*  let altura = animado.offsetTop; */
                /*  console.log(scrollTop); */

                for (var i = 0; i < animado.length; i++) {
                    let altura = animado[i].offsetTop;
                    /*  console.log(altura); */

                    /*  altura - 200 < scrollTop; */
                    if (altura - (-400) < scrollTop) {
                        console.log('si funciona');
                        animado[i].classList.remove('hidden');
                    }

                    if (altura + (300) > scrollTop) {
                        
                        animado[i].classList.add('hidden');
                    }

                }

            }

            window.addEventListener('scroll', mostrardiv);
        </script>
    @endpush

</div>
