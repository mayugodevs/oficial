<div>
    @push('css')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js"
                integrity="sha512-tHimK/KZS+o34ZpPNOvb/bTHZb6ocWFXCtdGqAlWYUcz+BGHbNbHMKvEHUyFxgJhQcEO87yg5YqaJvyQgAEEtA=="
                crossorigin="anonymous">
        </script>
        <script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
        <style>
            .dropdown:hover>.dropdown-content {
                display: block;
            }

        </style>
    @endpush
    <div
        class="grid grid-cols-12 gap-8 bg-fondoyugo dark:bg-fondoyugo-dark   dark:text-white-300 px-5 sm-px-0 pt-24 sm:px-5 lg:pl-5 lg:pr-10 xl:pl-5 xl:pr-10">
        <div class="col-span-2">
            @foreach ($clase->cursoModulos as $contenido)
                <ul class="flex flex-col">
                    <li class="bg-white pt-2" x-data="accordioncito({{ $contenido->idc }})">

                        <h2 @click="handleClick()"
                            class="pr-1 pl-1 border-gray-400 border rounded flex flex-row  items-center cursor-pointer ">
                            <svg :class="handleRotate()"
                                class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500 text-blue dark:text-green"
                                viewBox="0 0 20 20">
                                <path
                                    d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                </path>
                            </svg>
                            <span class="font-serif text-sm">{{ $contenido->nom }}</span>
                        </h2>
                        @foreach ($contenido->cursoMateriales as $material)
                            <div x-ref="tab" :style="handleToggle()"
                                class="text-xs pr-1 pl-1 flex flex-row items-center cursor-pointer border-purple-600 overflow-hidden max-h-0 duration-500 transition-all">
                                @if ($material->completed)
                                    @if ($current->idmaterial == $material->idmaterial)
                                        <i class="fas fa-play-circle   rounded-full bg-green"></i>
                                    @else
                                        <i class="fas fa-play-circle dark:text-green"></i>
                                    @endif
                                @else
                                    @if ($current->idmaterial == $material->idmaterial)
                                        <i class="fas fa-play-circle rounded-full bg-green"></i>
                                    @else
                                        <i class="fas fa-play-circle text-blue"></i>
                                    @endif
                                @endif
                                <p class="p-3  ">
                                    {{ $material->material }}
                                </p>
                            </div>
                        @endforeach
                    </li>
                </ul>
            @endforeach

        </div>

        <div class="col-span-6">
            <div>
                @if (empty($current->url4))
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe src="https://www.youtube.com/embed/{{ $current->url }}" allowfullscreen
                            allowtransparency allow="autoplay"></iframe>
                    </div>
                @else
                    <div wire:ignore>
                        <video style="--plyr-color-main: #6666FF;width:100%;--plyr-control-icon-size:16px;"
                            class="player" 
                            id="player"
                            wire:model="content">
                            <source src="https://storage.googleapis.com/bucket-mayugo/cursos/{{ $current->url4 }}"
                                type="video/mp4" size="720">
                        </video>
                    </div>
                @endif
            </div>




            {{ $current->url4 }}

            {{-- <p>Link 1 {{ $current->url4 }}</p>
            <p>Link 2 {{ $current->url }}</p> --}}
            <p>Índice {{ $this->index }}</p>
            <div class="flex items-center mt-4 cursor-pointer" wire:click="completed">
                @if ($current->completed)
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="#33cc66">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="gray">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                    </svg>
                @endif
                <p class="text-sm ml-2">Marcar esta unidad como terminado</p>
            </div>
            <div class="mt-2">
                <!-- <div class="flex text-gray-500 font-bold ">
                    @if ($this->previous)
{{-- <a class="cursor-pointer flex" wire:click="changematerial({{ $this->previous }})"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                            </svg> Anterior {{ $this->previous->idmaterial }}</a> --}}
                        <button type="button" wire:click="changematerial({{ $this->previous }})" class="flex cursor-pointer 
                                focus:outline-none sm:block lg:hidden xl:block mx-auto border border-blue rounded px-2 dark:border-green">
                                <i class="fas fa-forward dark:text-green text-blue"></i>
                        </button>
@endif
                    @if ($this->next)
{{-- <a class="ml-auto cursor-pointer flex" ><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg> Siguiente </a> --}}
                        <button type="button" wire:click="changematerial({{ $this->next }})"
                            class="focus:outline-none ml-auto cursor-pointer flex  sm:block lg:hidden xl:block mx-auto  border border-blue rounded px-2 dark:border-green">
                            <i class="fas fa-backward dark:text-green text-blue"></i>
                        </button>
@endif
                </div>-->
            </div>
            <div class="relative flex mt-2">
                <div class="flex-none w-10 h-10  rounded-full flex items-center justify-center">
                    <img src="https://www.mayugo.net/admin/images/picture/20210409023400IMG_20200619_185623_839.jpg"
                        alt="" class="w-10 h-10 rounded-full" loading="lazy">
                </div>

                <div class="flex-auto">
                    <dt class="font-bold text-1xl pl-2"> {{ $clase->trabajador->nombres }}</dt>
                    <dd class="text-xs pl-2"><span>
                            <div class="relative ">
                                <a href="">Enviar mensaje</a>
                            </div>
                        </span></dd>
                </div>
                @if ($this->previous)
                    {{-- <a class="cursor-pointer flex" wire:click="changematerial({{ $this->previous }})"><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                            </svg> Anterior {{ $this->previous->idmaterial }}</a> --}}
                    <a href="{{route('clases',$this->previous)}}" wire:click="changematerial({{ $this->previous }})"
                        class="h-8 mr-2 flex cursor-pointer 
                                focus:outline-none sm:block lg:hidden xl:block mx-auto border border-blue rounded px-2 dark:border-green">
                        <i class="fas fa-backward dark:text-green text-blue"></i>

                    </a>
                @endif
                @if ($this->next)
                    {{-- <a class="ml-auto cursor-pointer flex" ><svg
                                xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg> Siguiente </a> --}}
                    <a href="{{route('clases',$this->next)}}" wire:click="changematerial({{ $this->next }})"
                        class="h-8 focus:outline-none ml-auto cursor-pointer
                             flex  sm:block lg:hidden xl:block mx-auto  border border-blue rounded px-2 dark:border-green">
                        <i class="fas fa-forward dark:text-green text-blue"></i>
                    </a>
                @endif
            </div>

            <div>
                @php
                    $cadena_origen = ' ' . $current->descripcion;
                    //filtro los enlaces normales
                    $cadena_resultante = preg_replace('/((http|https|www|[a-z\d._%+-]+@[a-z\d.-]+\.[a-z]{2,4}|hotmail)[^\s]+)/', '<a href="$1" target="_blank" class="text-blue">$0</a>', $cadena_origen);
                    echo '' . nl2br($cadena_resultante);
                @endphp
            </div>


        </div>

        <div class="col-span-4">

            <div class="relative flex ">
                <div class="flex-none w-10 h-10  rounded-full flex items-center justify-center">
                    <img src="http://www.mayugo.net/asset/img/favicon.png" alt="" class="w-10 h-10 rounded-full"
                        loading="lazy">
                </div>

                <div class="flex-auto">
                    <dt class="font-bold text-1xl pl-2"> {{ $clase->curso->nom }}</dt>
                    <dd class="text-xs pl-2"><span>
                            <div class="relative ">
                                <div
                                    class="overflow-hidden h-3 mb-4 dark:bg-gray-900 bg-white-900 text-xs flex rounded">
                                    <div style="width:{{ $this->advance . '%' }}"
                                        class="shadow-none font-bold text-1xl flex flex-col text-center whitespace-nowrap border-2  dark:border-green border-blue text-white-300 justify-center bg-blue dark:bg-green transition-all duration-500">
                                        {{ $this->advance . '%' }} </div>
                                </div>
                            </div>
                        </span></dd>
                </div>
            </div>


            {{-- START TABS COMENT, RESOURCES, EVALUATIONS ,ETC --}}
            <div class=" w-full mx-auto mt-4">
                <ul id="tabs" class="inline-flex pt-2 px-1 w-full outline-none  ">

                    <li class="outline-none   px-4  font-semibold py-2   border-b-4 border-blue "><a
                            class="outline-none focus:text-blue" id="default-tab" href="#first">Comentarios</a></li>
                    <li class="outline-none  px-4  font-semibold py-2   border-b-4 border-blue "><a
                            class="outline-none focus:text-blue" href="#second">Evaluación</a></li>
                    <li class="outline-none  px-4  font-semibold py-2   border-b-4 border-blue "><a
                            class="outline-none focus:text-blue" href="#third">Archivos</a></li>
                    <li class="outline-none  px-4  font-semibold py-2   border-b-4 border-blue "><a
                            class="outline-none focus:text-blue" href="#cuart">Notas</a></li>
                </ul>

                <div id="tab-contents">
                    <div id="first" class="">

                        <div class="bg-white-700 dark:bg-bluedark  rounded-xl mb-2 mt-2">
                            <div class="flex">
                                <div class="m-2 w-10 py-1">
                                    <img class="inline-block h-10 w-10 rounded-full"
                                        src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png"
                                        alt="" />
                                </div>
                                <div class="flex-1 px-2 pt-2 mt-2 ">
                                    <textarea
                                        class="outline-none font-semibold rounded border-indigo-300 border focus:outline-none  bg-transparent  text-gray-400  text-lg w-full"
                                        rows="2" cols="50" placeholder="Escribe tu aporte o pregunta"></textarea>
                                </div>
                            </div>
                            <!--middle creat tweet below icons-->
                            <div class="flex ">
                                <div class="w-10"></div>

                                <div class="w-64 px-2">

                                    <div class="flex items-center">
                                        <div class="flex-1 text-center px-1 py-1 m-2">
                                            <a href="#"
                                                class="mt-1 group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300">
                                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="flex-1 text-center py-2 m-2">
                                            <a href="#"
                                                class="mt-1 group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300">
                                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                    </path>
                                                    <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="flex-1 text-center py-2 m-2">
                                            <a href="#"
                                                class="mt-1 group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300">
                                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>

                                        <div class="flex-1 text-center py-2 m-2">
                                            <a href="#"
                                                class="mt-1 group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300">
                                                <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-1">
                                    <button
                                        class="bg-blue dark:bg-green focus:outline-none cursor-pointer mt-5 hover:bg-blue text-white-300 font-bold py-2 px-8 rounded mr-2 float-right">
                                        Comentar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div style="height: 600px" class="overflow-y-scroll overflow-x-hidden">
                            @foreach ($clase->cursoModulos as $contenido)
                                @foreach ($contenido->cursoMateriales as $material)

                                    @foreach ($material->usercomentcourse as $comentario)
                                        <article class="transition duration-350 ease-in-out pl-1">
                                            <div class="bg-white-700 dark:bg-bluedark  rounded-xl mb-2">
                                                <div class="flex flex-shrink-0 mb-2 ">
                                                    <a href="#" class="flex-shrink-0 group block">
                                                        <div class="flex items-center pl-2 pt-2">
                                                            <div>
                                                                <img class="inline-block h-8 w-8 rounded-full"
                                                                    src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-2">
                                                                <p class="text-base leading-6 font-medium text-white">
                                                                    {{ $comentario->nombres }}
                                                                    <span
                                                                        class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                                                                        @ShonaDesign . 16 April
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="pl-8 ">
                                                    <p class="text-left width-auto font-serif text-white flex-shrink">
                                                        @php
                                                            $cadena_comentario = ' ' . $comentario->pivot->comentario;
                                                            $resultante_comentario = preg_replace('/((http|https|www|[a-z\d._%+-]+@[a-z\d.-]+\.[a-z]{2,4}|hotmail)[^\s]+)/', '<a href="$1" target="_blank" class="text-blue">$0</a>', $cadena_comentario);
                                                            
                                                        @endphp
                                                        {!! $resultante_comentario !!}
                                                    </p>

                                                    <div class="flex items-center py-4">
                                                        <div
                                                            class="flex-1 flex items-center text-white text-xs text-gray-400 hover:text-blue-400 transition duration-350 ease-in-out">
                                                            <svg viewBox="0 0 24 24" fill="currentColor"
                                                                class="w-5 h-5 mr-2">
                                                                <g>
                                                                    <path
                                                                        d="M14.046 2.242l-4.148-.01h-.002c-4.374 0-7.8 3.427-7.8 7.802 0 4.098 3.186 7.206 7.465 7.37v3.828c0 .108.044.286.12.403.142.225.384.347.632.347.138 0 .277-.038.402-.118.264-.168 6.473-4.14 8.088-5.506 1.902-1.61 3.04-3.97 3.043-6.312v-.017c-.006-4.367-3.43-7.787-7.8-7.788zm3.787 12.972c-1.134.96-4.862 3.405-6.772 4.643V16.67c0-.414-.335-.75-.75-.75h-.396c-3.66 0-6.318-2.476-6.318-5.886 0-3.534 2.768-6.302 6.3-6.302l4.147.01h.002c3.532 0 6.3 2.766 6.302 6.296-.003 1.91-.942 3.844-2.514 5.176z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                            12.3 k
                                                        </div>
                                                        <div
                                                            class="flex-1 flex items-center text-white text-xs text-gray-400 hover:text-green-400 transition duration-350 ease-in-out">
                                                            <svg viewBox="0 0 24 24" fill="currentColor"
                                                                class="w-5 h-5 mr-2">
                                                                <g>
                                                                    <path
                                                                        d="M23.77 15.67c-.292-.293-.767-.293-1.06 0l-2.22 2.22V7.65c0-2.068-1.683-3.75-3.75-3.75h-5.85c-.414 0-.75.336-.75.75s.336.75.75.75h5.85c1.24 0 2.25 1.01 2.25 2.25v10.24l-2.22-2.22c-.293-.293-.768-.293-1.06 0s-.294.768 0 1.06l3.5 3.5c.145.147.337.22.53.22s.383-.072.53-.22l3.5-3.5c.294-.292.294-.767 0-1.06zm-10.66 3.28H7.26c-1.24 0-2.25-1.01-2.25-2.25V6.46l2.22 2.22c.148.147.34.22.532.22s.384-.073.53-.22c.293-.293.293-.768 0-1.06l-3.5-3.5c-.293-.294-.768-.294-1.06 0l-3.5 3.5c-.294.292-.294.767 0 1.06s.767.293 1.06 0l2.22-2.22V16.7c0 2.068 1.683 3.75 3.75 3.75h5.85c.414 0 .75-.336.75-.75s-.337-.75-.75-.75z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                            14 k
                                                        </div>
                                                        <div
                                                            class="flex-1 flex items-center text-white text-xs text-gray-400 hover:text-red-600 transition duration-350 ease-in-out">
                                                            <svg viewBox="0 0 24 24" fill="currentColor"
                                                                class="w-5 h-5 mr-2">
                                                                <g>
                                                                    <path
                                                                        d="M12 21.638h-.014C9.403 21.59 1.95 14.856 1.95 8.478c0-3.064 2.525-5.754 5.403-5.754 2.29 0 3.83 1.58 4.646 2.73.814-1.148 2.354-2.73 4.645-2.73 2.88 0 5.404 2.69 5.404 5.755 0 6.376-7.454 13.11-10.037 13.157H12zM7.354 4.225c-2.08 0-3.903 1.988-3.903 4.255 0 5.74 7.034 11.596 8.55 11.658 1.518-.062 8.55-5.917 8.55-11.658 0-2.267-1.823-4.255-3.903-4.255-2.528 0-3.94 2.936-3.952 2.965-.23.562-1.156.562-1.387 0-.014-.03-1.425-2.965-3.954-2.965z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                            14 k
                                                        </div>
                                                        <div
                                                            class="flex-1 flex items-center text-white text-xs text-gray-400 hover:text-blue-400 transition duration-350 ease-in-out">
                                                            <svg viewBox="0 0 24 24" fill="currentColor"
                                                                class="w-5 h-5 mr-2">
                                                                <g>
                                                                    <path
                                                                        d="M17.53 7.47l-5-5c-.293-.293-.768-.293-1.06 0l-5 5c-.294.293-.294.768 0 1.06s.767.294 1.06 0l3.72-3.72V15c0 .414.336.75.75.75s.75-.336.75-.75V4.81l3.72 3.72c.146.147.338.22.53.22s.384-.072.53-.22c.293-.293.293-.767 0-1.06z">
                                                                    </path>
                                                                    <path
                                                                        d="M19.708 21.944H4.292C3.028 21.944 2 20.916 2 19.652V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 .437.355.792.792.792h15.416c.437 0 .792-.355.792-.792V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 1.264-1.028 2.292-2.292 2.292z">
                                                                    </path>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    @endforeach

                                    <!--  <div class=" md:space-y-0 md:grid md:grid-cols-1 md:gap-x-8 md:gap-y-2 mb-4">
                                    @foreach ($material->usercomentcourse as $comentario)
<div class="relative  bg-gray-100 dark:bg-bluedark border-2 border-gray-700  rounded-md ">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="mt-2 ml-2 flex-shrink-0 h-8 w-8">
                                                        <img class="h-8 w-8 rounded-full"
                                                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60"
                                                            alt="">
                                                    </div>
                                                    <div class="ml-1 text-left mb-1">
                                                        <div class="text-sm font-medium ">
                                                            {{ $comentario->nombres }}
                                                            @if (empty($comentario->nivel_edu))
                    @else
                                                                <span style="font-size: 10px"
                                                                    class="px-1 h-3 mt-0 leading-5 font-semibold rounded-sm bg-indigo-600 text-gray-100">
                                                                    {{ $comentario->nivel_edu }}
                                                                </span>
@endif
                                                        </div>
                                                        <div class="text-sm text-gray-500 dark:text-white-300">
                                                            {{ $comentario->pivot->fecha }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <p class="flex-1  mt-0 ml-10 mr-2 text-left text-sm text-gray-500 dark:text-white-300 font-serif">
                                                
                                            </p>
                                        </div>
                                    @endforeach
                                </div>-->
                                @endforeach
                            @endforeach
                        </div>
                    </div>

                    <div id="second" class="hidden font-serif text-sm text-left">
                        <div class="transition duration-350  ">
                            <div class="pt-2 font-bold text-2xl text-gray-400 dark:text-white-300">
                                ¡Que bueno que estés aquí!
                            </div>

                            @foreach ($clase->curso_tareas as $tarea)
                                <div class="relative  bg-white-700 dark:bg-bluedark  rounded-xl mb-2 ">
                                    <div class="flex justify-center items-start my-2">
                                        <div class="w-full  pt-2">
                                            <span class="pl-3 text-1xl font-bold">{{ $tarea->tarea }}</span>
                                            <ul class="flex flex-col">
                                                <li class=""
                                                    x-data="accordionEvaluation({{ $tarea->idtarea }})">
                                                    <h2 @click="handleClick()"
                                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                                        <span class="text-red-600">{{ $tarea->puntuacion }}
                                                            Puntos</span>
                                                        <svg :class="handleRotate()"
                                                            class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                                            viewBox="0 0 20 20">
                                                            <path
                                                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                                            </path>
                                                            Ver más
                                                        </svg>
                                                    </h2>
                                                    <div x-ref="tab" :style="handleToggle()"
                                                        class="border-l-2 border-indigo-600 overflow-hidden max-h-0 duration-500 transition-all">
                                                        <p class=" text-gray-900 dark:text-white-300">

                                                        <p class="font-serif pl-2">{{ $tarea->instruccion }}</p>
                                                        <div class="font-serif p-2">
                                                            <a href="{{ $tarea->archivo }}" target="_blank"
                                                                class="pl-2 text-white-300 dark:text-white-300 rounded bg-indigo-500 hover:bg-indigo-300 focus:outline-none text-white font-bold py-2 px-4 inline-flex items-center">
                                                                <i class="fas fa-download"></i>&nbsp;
                                                                Instrucciones
                                                            </a>
                                                        </div>

                                                        {{-- !@livewire('upload-tarea-curso', ['tarea' => $tarea],key($tarea->idtarea)) --}}
                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div id="third" class="hidden text-left">
                        <div class="overflow-auto ">
                            @foreach ($clase->cursoModulos as $contenido)
                                @foreach ($contenido->cursoMateriales as $material)
                                    <div
                                        class="transition duration-350 bg-white-700 dark:bg-bluedark  rounded-xl mb-2  ">
                                        @foreach ($material->material_archivos as $archivo)
                                            <div class="text-left pb-2 pl-3 pt-2">
                                                <p>{{ $archivo->title }}</p>
                                            </div>
                                            <div class="text-left pb-3 pl-3 ">
                                                <a href="{{ $archivo->archivo }}" target="_blank" target="_blank"
                                                    class="pl-2 text-white-300 dark:text-white-300 rounded bg-indigo-500 hover:bg-indigo-300 focus:outline-none text-white font-bold py-2 px-4 inline-flex items-center">
                                                    <i class="fas fa-download"></i>
                                                    <span class="ml-2 items-center">Descargar </span>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>

                    <div id="cuart" class="hidden text-left  pt-2">
                        <div class="relative  bg-white-700 dark:bg-bluedark  rounded-xl mb-2 ">
                            <div class='overflow-x-auto '>
                                <table
                                    class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-indigo-400 overflow-hidden'>
                                    <thead class="">
                                        <tr class=" text-left">
                                            <th class="font-semibold text-sm px-6 py-4">
                                                Prácticas
                                            </th>
                                            <th class="font-semibold text-sm  px-6 py-4 text-center">
                                                Puntuación
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clase->cursoModulos as $contenido)
                                            @foreach ($contenido->cursoTareaModulos as $tarea)
                                                <tr>
                                                    <td class="px-6 py-4">
                                                        <p
                                                            class="text-gray-500 dark:text-white-300 text-sm font-semibold tracking-wide">
                                                            {{ $tarea->tarea }}
                                                        </p>
                                                    </td>
                                                    <td class="px-6 py-4 text-center">
                                                        @if ($tarea->completet)
                                                            @foreach ($tarea->nota_tarea as $entrega)
                                                                @if (empty($entrega->nota))
                                                                    <span
                                                                        class="bg-green text-gray-50 rounded-md px-2">Enviado</span>
                                                                @else
                                                                    <span class="text-green-800  font-semibold px-2 ">
                                                                        @php
                                                                            $var[] = $entrega->nota;
                                                                            echo '' . max($var);
                                                                        @endphp
                                                                    </span>
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            <span class="bg-red-400 text-gray-50 rounded-md px-2">No
                                                                enviado</span>


                                                        @endif

                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script>
       
            const player = new Plyr(document.querySelector('#player'));
            then(function(player) {
                player.model.document.on('change:data',()  =>{
                    @this.set('content',player.getData());
                })
            })
           
    </script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordioncito', {
                tab: 0
            });

            Alpine.data('accordioncito', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordioncito.tab = this.$store.accordioncito.tab === this.idx ? 0 :
                        this.idx;
                },
                handleRotate() {
                    return this.$store.accordioncito.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordioncito.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
    </script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordionEvaluation', {
                tab: 0
            });

            Alpine.data('accordionEvaluation', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordionEvaluation.tab = this.$store.accordionEvaluation.tab === this
                        .idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordionEvaluation.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordionEvaluation.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
    </script>
    <script>
        let tabsContainer = document.querySelector("#tabs");
        let tabTogglers = tabsContainer.querySelectorAll("#tabs a");
        // console.log(tabTogglers);
        tabTogglers.forEach(function(toggler) {
            toggler.addEventListener("click", function(e) {
                e.preventDefault();
                let tabName = this.getAttribute("href");
                let tabContents = document.querySelector("#tab-contents");
                for (let i = 0; i < tabContents.children.length; i++) {
                    tabTogglers[i].parentElement.classList.remove("border-none", "border-none",
                        "border-none", "-mb-px", "bg-white");
                    tabContents.children[i].classList.remove("hidden");
                    if ("#" + tabContents.children[i].id === tabName) continue;
                    tabContents.children[i].classList.add("hidden");
                }
                e.target.parentElement.classList.add("border-none", "border-none", "border-none", "-mb-px",
                    "bg-white");
            });
        });
    </script>

</div>
