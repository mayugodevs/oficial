<div>
    @if ($tipo == 1)
        
    @elseif($tipo == 2) {{-- de curso normal --}}
        <div>
            <div
                class="dark:text-bordersec text-gray-650  font-inter text-center font-bold sm:text-2xl text-xl  mt-16 mb-6">
                Preguntas frecuentes
            </div>
            @foreach ($faqs as $item)
                {{-- {{$item->idpre}} --}}
                <button id="button1{{$item->pregunta}}" onclick="pintaropcion('button1{{$item->pregunta}}','card{{$item->pregunta}}','id3{{$item->pregunta}}','id4{{$item->pregunta}}')"
                class="p-8  flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                
                    > 
                    <div>
                        <svg id="id3{{$item->pregunta}}" class="text-graypricingstrike dark:text-pricingdarkstudents "
                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                                stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>

                        <svg id="id4{{$item->pregunta}}" class="text-graypricingstrike dark:text-pricingdarkstudents hidden" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                                stroke="Currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <div>
                        <div class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                            {{$item->pregunta}}
                        </div>
                        <div id="card{{$item->pregunta}}"
                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden "
                            >
                            {{$item->rpta}}
                        </div>
                    </div>
                </button>
            @endforeach
            {{-- <button
                class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                id="play1">

                <div>
                    <svg id="icon1" class="text-graypricingstrike dark:text-pricingdarkstudents "
                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>



                    <svg id="icon2"
                        class="text-graypricingstrike dark:text-pricingdarkstudents hidden" width="24"
                        height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>

                <div>
                    <div
                        class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                        ¿Tengo acceso ilimitado a las clases?

                    </div>
                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden"
                        id="card">
                        ¡Sí! Luego de que realices la compra vas a poder acceder a las clases cuando
                        y donde quieras. El curso se queda en tu cuenta de MayuGo para siempre.

                    </div>
                </div>
            </button>
            <button
                class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                id="play2">

                <div>
                    <svg id="icon3" class="text-graypricingstrike dark:text-pricingdarkstudents " width="24"
                        height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>



                    <svg id="icon4" class="text-graypricingstrike dark:text-pricingdarkstudents hidden"
                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>

                <div>
                    <div
                        class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                        ¿Tengo acceso ilimitado a las clases?

                    </div>
                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden"
                        id="card2">
                        ¡Sí! Luego de que realices la compra vas a poder acceder a las clases cuando
                        y donde quieras. El curso se queda en tu cuenta de MayuGo para siempre.

                    </div>
                </div>
            </button>
            <button
                class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                id="play1">

                <div>
                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents " width="24"
                        height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>



                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents hidden"
                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>

                <div>
                    <div
                        class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                        ¿Cuándo inicia el curso?

                    </div>
                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden"
                        id="card">
                        ¡Sí! Luego de que realices la compra vas a poder acceder a las clases cuando
                        y donde quieras. El curso se queda en tu cuenta de MayuGo para siempre.

                    </div>
                </div>
            </button>
            <button
                class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                id="play1">

                <div>
                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents " width="24"
                        height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>



                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents hidden"
                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>

                <div>
                    <div
                        class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                        Cómo obtengo el certificado del curso?

                    </div>
                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden"
                        id="card">
                        ¡Sí! Luego de que realices la compra vas a poder acceder a las clases cuando
                        y donde quieras. El curso se queda en tu cuenta de MayuGo para siempre.

                    </div>
                </div>
            </button>
            <button
                class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                id="play1">

                <div>
                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents " width="24"
                        height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>



                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents hidden"
                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>

                <div>
                    <div
                        class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                        ¿Son cursos grabados o en vivo?

                    </div>
                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden"
                        id="card">
                        ¡Sí! Luego de que realices la compra vas a poder acceder a las clases cuando
                        y donde quieras. El curso se queda en tu cuenta de MayuGo para siempre.

                    </div>
                </div>
            </button>
            <button
                class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                id="play1">

                <div>
                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents " width="24"
                        height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>



                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents hidden"
                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>

                <div>
                    <div
                        class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                        ¿Si subo a PREMIUM tengo acceso a todos los cursos y certificaciones?

                    </div>
                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden"
                        id="card">
                        ¡Sí! Luego de que realices la compra vas a poder acceder a las clases cuando
                        y donde quieras. El curso se queda en tu cuenta de MayuGo para siempre.

                    </div>
                </div>
            </button>

            <button
                class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                id="play1">

                <div>
                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents " width="24"
                        height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>



                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents hidden"
                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>

                <div>
                    <div
                        class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                        ¿Puedo descargar los videos?

                    </div>
                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden"
                        id="card">
                        ¡Sí! Luego de que realices la compra vas a poder acceder a las clases cuando
                        y donde quieras. El curso se queda en tu cuenta de MayuGo para siempre.

                    </div>
                </div>
            </button> --}}

        </div>
        <script>
            function pintaropcion(button1,card,id3,id4) {
          var button1 = document.getElementById(button1);
          var card = document.getElementById(card);
          var id3 = document.getElementById(id3);
          var id4 = document.getElementById(id4);

               card.classList.toggle('hidden');
               id3.classList.toggle('hidden');
               id4.classList.toggle('hidden');

                   }
        </script>
    @else
        <div class="grid grid-cols-3">
            @foreach ($faqs as $item)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{$item->pregunta}}</div>
                    <p class="text-gray-700 text-base">
                        {{$item->rpta}}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                </div>
            </div>
            @endforeach
        </div>
    @endif
</div>