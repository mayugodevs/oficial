<div class="ul:mx-4 dark:bg-gray-500 rounded-lg mt-8 mb-8">

    <main class="" x-data="{ 'isDialogOpen': false, 'create': false }" @keydown.escape="isDialogOpen = false">

        <section class="flex flex-wrap p-4">
            {{-- CREAR POST --}}
            <div class="overflow-auto " style="background-color: rgba(0,0,0,0.5)" x-show="isDialogOpen"
                :class="{ 'absolute inset-0 z-10 flex items-start justify-center': isDialogOpen }">
                <div class="   modal   bg-white-900 dark:bg-gray-600 rounded-lg shadow-2xl" x-show="isDialogOpen"
                    @click.away="isDialogOpen = false">
                    <div class="flex justify-between items-center p-3 px-3 dark:bg-gray-500 rounded-t-lg">
                        <h6 class="text-base font-serif dark:text-white-500 text-gray-800">Crear Post</h6>
                        <button type="button " @click="isDialogOpen = false"
                            class="dark:text-white-500 text-gray-500">✖</button>
                    </div>

                    <div class="">
                        <!-- Aqui empieza el modal -->
                        <div class=" overflow-x-hidden overflow-y-auto  bg-gray-500 dark:bg-gray-600"
                            style="max-height: 40vh;">
                            <div class="bg-rose-300 ...">
                                <!--  <img class="object-contain h-48 w-full ...">-->
                            </div>
                            <div class="flex flex-wrap -mx-3">


                                <div class="w-full ">
                                    <div class=" relative  ">

                                        <textarea
                                            class="areacomment w-full  px-6 py-3 focus:outline-none   dark:bg-gray-600 bg-white-100 
                                        rounded-md font-base tracking-tight text-gray-800 dark:text-white-500"
                                            placeholder="Postea tus dudas en la comunidad" wire:model.defer="post"> 
                                        </textarea>


                                        <div class="flex px-6 items-center">
                                            <div class="">
                                                <button type="button"
                                                    class="rounded-full bg-bluefacebook hover:bg-blueintense hover:text-white-500 dark:text-white-500 
                                                    text-white font-serif py-1 px-5"
                                                    wire:click="createPost">
                                                    Publicar
                                                </button>
                                                <!--<button type="button" @click="isDialogOpen = false" class="bg-transparent hover:bg-red-700 hover:text-white-500 dark:text-white-500 border border-red-600 text-white font-serif py-2 px-4   rounded">
                                                    Cancelar-->
                                                </button>
                                            </div>

                                            <div class="">


                                                <div class="flex items-center mr-2">
                                                    <div class="mx-2 text-icocolor">
                                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="flex-1 text-center mr-2">
                                                        <a href="#" class="">
                                                            <svg class="text-center text-icocolor  h-7 w-6"
                                                                fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>

                                                    <div class="flex-1 text-center mr-2">
                                                        <a href="#" class="">
                                                            <svg class="text-center text-icocolor iconono1 h-7 w-6"
                                                                fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                                </path>
                                                                <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                            </svg>
                                                        </a>
                                                    </div>

                                                    <div class="flex-1 text-center mr-2">
                                                        <a href="#" class="">
                                                            <svg class="text-center text-icocolor h-7 w-6"
                                                                fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>

                                                    <div class="flex-1 text-center mr-2">
                                                        <a href="#" class="">
                                                            <svg class="text-center text-icocolor h-7 w-6"
                                                                fill="none" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path
                                                                    d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Aqui empieza el modal -->
                    </div>
                </div>
            </div>
            

            {{-- RESPONDER POST ANTIGUO --}}

            <div class="overflow-auto " style="background-color: rgba(0,0,0,0.5)" x-show="create"
                :class="{ 'absolute inset-0 z-10 flex items-start justify-center': create }">
                <div class="   modal   bg-white-900  rounded-lg shadow-2xl  sm:m-8" x-show="create"
                    @click.away="create = false">
                    <div class="flex justify-between items-center border-b p-2 text-xl">
                        <h6 class="text-md font-serif dark:text-white-500 text-gray-800 mx-0">{{ $postTitle }}</h6>
                        <button type="button " @click="create = false"
                            class="dark:text-white-500 text-gray-500">✖</button>
                    </div>

                    <div class="dark:bg-blackwhover">
                        <!-- Aqui empieza el modal -->
                        <div class="px-5 overflow-x-hidden overflow-y-auto  bg-white-700" style="max-height: 40vh;">
                            <div class="bg-rose-300 ...">
                                <!--  <img class="object-contain h-48 w-full ...">-->
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">


                                <div class="w-full ">
                                    <div class=" relative  ">
                                        <br>

                                        <input type="text"
                                            class="w-11/12  border focus:outline-none border-gray-500 -py-3 h-36 dark:bg-gray-600 bg-white-100 
                                        rounded-md font-base tracking-tight text-gray-800 dark:text-white-500 mx-3"
                                            placeholder="Responde al post " wire:model.defer="answer">
                                        <div class="flex">

                                            <div class="w-10"></div>

                                            <div class="p-7 flex justify-end items-center w-full   -px-2">
                                                <button type="button"
                                                    class="bg-transparent hover:bg-bluefacebook hover:text-white-500 dark:text-white-500 border 
                                                    border-indigo-800 text-white font-serif py-2 px-4 rounded mr-3"
                                                    wire:click="createAnswer">
                                                    Publicar
                                                </button>
                                                <button type="button" @click="create = false"
                                                    class="bg-transparent hover:bg-red-700 hover:text-white-500 dark:text-white-500 border border-red-600 text-white font-serif py-2 px-4   rounded">
                                                    Cancelar
                                                </button>
                                            </div>
                                        </div>
                                        @forelse ($answerss as $answer)
                                            {{-- ************* --}}
                                            <div class="">
                                                <p
                                                    class="text-base pt-1 px-6 text-justify width-auto font-serif dark:text-white-500 text-gray-700 flex-shrink">
                                                    {{ $answer->contenido }}
                                                    <span class="text-blue-400"> </span>
                                                </p>
                                                <div class="flex">
                                                    <div class="col-span-3 mx-6">
                                                        <div class="flex items-center">
                                                            <div class="flex-1 text-center py-2 m-2">
                                                                @php
                                                                    $color = count($answer->postResptLikes->where('alumnos_id', $user->idalum)->where('tipo', 'resp')) > 0 ? ['red', 0] : ['', 1];
                                                                    // $moreLike = count($post->postResptLikes->where('alumnos_id', $user->idalum)) > 0 ? 'disabled' : '';
                                                                    $cantPost = count($answer->postResptLikes->where('tipo', 'resp'));
                                                                @endphp

                                                                <a href="#"
                                                                    class="w-12 mt-1 group flex items-center dark:text-gray-400 text-bluefacebook px-3 py-2 
                                                                    text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300"
                                                                    wire:click="likeAnswer({{ $answer->id }}, {{ $color[1] }})">
                                                                    <svg class="text-center h-7 w-6" fill="none"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" stroke="currentColor"
                                                                        viewBox="0 0 24 24"
                                                                        style="color:{{ $color[0] }}">
                                                                        <path
                                                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                                                        </path>
                                                                    </svg>{{ $cantPost }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- ************* --}}
                                        @empty
                                            No hay conversación aún
                                        @endforelse
                                    </div>

                                </div>
                            </div>
                        </div>


                        <!-- Aqui empieza el modal -->
                    </div>
                </div>
            </div>

        </section>
        @if ($tipo)
            <hr class="border-gray-800">
        <!--middle creat tweet-->
            <div class="flex bg-gray-500 justify-center relative px-2 mb-4">
                <div class=" w-14 h-14">
                    <img class="inline-block w-full h-full rounded-full border-2 border-colborderimg"
                        src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="">
                </div>
                <div class="text-left py-3 ml-3  w-11/12 pl-3 bg-fondcoment rounded-full  focus:outline-none text-gray-400  font-medium text-lg"
                    @click="isDialogOpen = true">
                    <span>¿Que estás pensando?</span>
                </div>
                <div class="absolute right-6 top-1">
                    <div class="flex items-center">
                        <div class=" text-center">
                            <a href="#"
                                class="group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-blue-300">
                                <svg class="text-center h-8 w-8" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="white" viewBox="0 0 24 24">
                                    <path
                                        d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="#"
                                class="group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-blue-300">
                                <svg class="text-center h-8 w-8" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="white" viewBox="0 0 24 24">
                                    <path
                                        d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="text-center">
                            <a href="#"
                                class="group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full hover:bg-gray-800 hover:text-blue-300">
                                <svg class="text-center h-8 w-8" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" stroke="white" viewBox="0 0 24 24">
                                    <path
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--middle creat tweet below icons-->
            <div class="flex bg-gray-500">
                <div class="w-10"></div>
                
            </div>
            <hr class="border-gray-800">
        @endif
        <ul class="list-none">
            <li>
                <!--second tweet--> 

                @forelse ($posts as $post)
                    <article
                        class="bg-gray-500  pl-6 pr-4 transition duration-350 ease-in-out border-1 border-red-600 flex mt-4">
                        <div class="flex flex-shrink-0  pt-3 pr-2 pb-0">
                            <a href="#" class="flex-shrink-0 group block">
                                <div class="flex items-center">
                                    <div>
                                        <img class="inline-block h-7 w-7 rounded-full border border-colborderimg"
                                            src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png"
                                            alt="">
                                    </div>

                                </div>
                            </a>
                        </div>


                        <div class="font-serif w-calc ">
                            <div class="dark:bg-fondcoment px-2 py-3 pr-5 rounded-lg">
                                <div class="text-whitetext flex justify-between items-center">
                                    <div class=" font-bold">
                                        {{ $user->nombres }}
                                    </div>
                                    <div class="text-xs">
                                        {{ $post->fecha }}
                                    </div>
                                </div>
                                <p
                                    class="mt-1 text-base width-auto  font-medium dark:text-txtpost flex-shrink text-justify bg-fondcoment rounded-md break-words">
                                    {{ $post->contenido }}
                                </p>
                            </div>
                            <div class="flex items-center py-2 pt-3 px-2">
                                @php
                                    $color = count($post->postResptLikes->where('alumnos_id', $user->idalum)->where('tipo', 'post')) > 0 ? ['blue', 0] : ['', 1];
                                    // $moreLike = count($post->postResptLikes->where('alumnos_id', $user->idalum)) > 0 ? 'disabled' : '';
                                    $cantPost = count($post->postResptLikes->where('alumnos_id', $user->idalum)->where('tipo', 'post'));
                                @endphp
                                <div class="cursor-pointer font-bold text-sm items-center flex w-32 text-white  text-gray-400   transition duration-350 ease-in-out"
                                    wire:click="likePost({{ $post->id }}, {{ $color[1] }})">
                                    Me gusta
                                    <span class="ml-4">
                                        {{ $cantPost }}
                                    </span>
                                    @if ($color[0] != 'blue')
                                        <svg viewBox="0 0 24 24" fill="currentColor " class="w-5 h-5 text-gray-400">
                                            <g>
                                                <path
                                                    d="M12 21.638h-.014C9.403 21.59 1.95 14.856 1.95 8.478c0-3.064 2.525-5.754 5.403-5.754 2.29 0 3.83 1.58 4.646 2.73.814-1.148 2.354-2.73 4.645-2.73 2.88 0 5.404 2.69 5.404 5.755 0 6.376-7.454 13.11-10.037 13.157H12zM7.354 4.225c-2.08 0-3.903 1.988-3.903 4.255 0 5.74 7.034 11.596 8.55 11.658 1.518-.062 8.55-5.917 8.55-11.658 0-2.267-1.823-4.255-3.903-4.255-2.528 0-3.94 2.936-3.952 2.965-.23.562-1.156.562-1.387 0-.014-.03-1.425-2.965-3.954-2.965z">
                                                </path>
                                            </g>
                                        </svg>
                                    @elseif($color[0] == 'blue')
                                        <svg class="h-5 w-5  text-blue" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    @endif


                                </div>
                                <div class="font-bold cursor-pointer text-sm flex-1 flex items-center text-white  text-gray-400 hover:text-blue-400 transition duration-350 ease-in-out"
                                    @click="create = true" wire:clicK="mostrarAnswers({{ $post->id }})">
                                    Responder
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mr-2 ml-4">
                                        <g>
                                            <path
                                                d="M14.046 2.242l-4.148-.01h-.002c-4.374 0-7.8 3.427-7.8 7.802 0 4.098 3.186 7.206 7.465 7.37v3.828c0 .108.044.286.12.403.142.225.384.347.632.347.138 0 .277-.038.402-.118.264-.168 6.473-4.14 8.088-5.506 1.902-1.61 3.04-3.97 3.043-6.312v-.017c-.006-4.367-3.43-7.787-7.8-7.788zm3.787 12.972c-1.134.96-4.862 3.405-6.772 4.643V16.67c0-.414-.335-.75-.75-.75h-.396c-3.66 0-6.318-2.476-6.318-5.886 0-3.534 2.768-6.302 6.3-6.302l4.147.01h.002c3.532 0 6.3 2.766 6.302 6.296-.003 1.91-.942 3.844-2.514 5.176z">
                                            </path>
                                        </g>
                                    </svg>
                                </div>

                            </div>

                        </div>


                        <hr class="border-gray-500">
                    </article>
                @empty
                    No tiene post por el momento
                @endforelse

            </li>
        </ul>

    </main>









</div>
