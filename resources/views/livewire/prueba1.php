<div class="dark:bg-gray-700 bg-white-900 my-3 px-4 pt-4 mx-8 rounded-lg ">
    <style>
        .modal{
            
            width: 550px;
            height: 350px;
            position: absolute;     
            left: 50%;
            top: 50%; 
            margin-left: -150px;
            margin-top: -150px; 
        
        }   
        
        
        </style>
    
    <main class="mx-auto max-w-4xl" x-data="data()" >
    
        <div class="mt-3 px-3">

            <div class="dark:text-white-500 text-gray-500 font-serif text-left text-2xl mx-4 my-4">
            publicaciones 
            </div>
            <div class="items-center">
                <button @click="isDialogOpen = true" class="bd bg-green_hover">Crear Post</button>
                
            </div>
        </div>
        <!--crear post-->
        <div class="overflow-auto " style="background-color: rgba(0,0,0,0.5)" x-show="isDialogOpen" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': isDialogOpen }">
            <div class="dark:bg-gray-500   modal   bg-white-900  rounded-lg shadow-2xl  sm:m-8" x-show="isDialogOpen"
                @click.away="isDialogOpen = false">
                <div class="flex justify-between items-center border-b p-2 text-xl">
                    <h6 class="text-md font-serif dark:text-white-500 text-gray-800 mx-7 ">Crear Post</h6>
                    <button type="button " @click="isDialogOpen = false" class="dark:text-white-500 text-gray-500">✖</button>
                </div>
                
                <div class="p-2">
                    <!-- Aqui empieza el modal -->
                    <div class="px-5 overflow-x-hidden overflow-y-auto dark:bg-gray-500 bg-white-700" style="max-height: 40vh;">
                        
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full ">
                                <div class=" relative  "> <br>
                                    <textarea class="w-11/12   border focus:outline-none border-gray-600 -py-3 h-36 dark:bg-gray-600 bg-white-100 rounded-md 
                                        font-base tracking-tight text-gray-800 dark:text-white-500 mx-3   "  @click="isDialogOpen = true" 
                                        placeholder="postea tus dudas en la comunidad" wire:model.defer="postU"> 
                                    </textarea>
                                    <div class="flex">
                                        <div class="w-10"></div>
                                        <div class="w-64 -px-2 -mx-4 ">
                                            <div class="flex items-center">
                                                <div class="flex-1 text-center px-1 py-1 m-2">
                                                    <a href="#" class="mt-1 group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full dark:hover:bg-gray-700 hover:bg-gray-400 hover:text-blue-300">
                                                        <svg class="text-center text-blue  h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                
                                                <div class="flex-1 text-center py-2 m-2">
                                                    <a href="#" class="mt-1 group flex items-center  text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full dark:hover:bg-gray-700 hover:bg-gray-400 hover:text-blue-300">
                                                        <svg class="text-center text-yellow-500 iconono1 h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z">
                                                            </path>
                                                            <path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                
                                                <div class="flex-1 text-center py-2 m-2">
                                                    <a href="#" class="mt-1 group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full dark:hover:bg-gray-700 hover:bg-gray-400 hover:text-blue-300">
                                                        <svg class="text-center text-greenborder h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                
                                                <div class="flex-1 text-center py-2 m-2">
                                                    <a href="#" class="mt-1 group flex items-center text-blue-400 px-2 py-2 text-base leading-6 font-medium rounded-full dark:hover:bg-gray-700 hover:bg-gray-400 hover:text-blue-300">
                                                        <svg class="text-center text-blue h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                
                                        <div class="p-7 flex justify-end items-center w-full   -px-2">
                                            <button type="button" class="bg-transparent hover:bg-bluefacebook hover:text-white-500 dark:text-white-500 
                                                border border-indigo-800 text-white font-serif py-2 px-4 rounded mr-3" wire:click="createPost">
                                                Publicar
                                            </button>
                                            <button type="button" @click="cerrar()" class="bg-transparent hover:bg-red-700 hover:text-white-500 dark:text-white-500 border border-red-600 text-white font-serif py-2 px-4   rounded">
                                                Cancelar
                                            </button>
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
        
        @foreach ($posts as $post)    
            <div class="flex flex-shrink-0 p-4 pb-0 mx-4">
                
                <a href="#" class="flex-shrink-0 group block">
                    <div class="flex items-center">
                    <div>
                        <img class="inline-block h-10 w-10 rounded-full" src="https://pbs.twimg.com/profile_images/1121328878142853120/e-rpjoJi_bigger.png" alt="" />
                    </div>
                    <div class="ml-3">
                        <p class="text-base leading-6 font-medium dark:text-white-500 text-gray-700 font-serif">
                        Luis Soto 
                        <span class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                            @LuisSoto . 27 de setiembre 2021
                            </span>
                            </p>
                    </div>
                    </div>
                </a>
            </div>
            <div class="pl-16 px-4">
                <p class="text-base pt-1 px-6 text-justify width-auto font-serif dark:text-white-500 text-gray-700 flex-shrink">
                    {{$post->contenido}}
                    <span class="text-blue-400"> </span>
                </p>
                <div class="flex">
                    <div class="w-full">                    
                        <div class="flex items-center"  x-data="dataResp({{$post->id}})">
                            <div class="flex-1 text-center">
                                {{-- <a   class="w-12 mt-1 group flex items-center dark:text-gray-400 text-bluefacebook px-3 py-2 text-base leading-6 font-medium 
                                    rounded-full hover:bg-blue-800 hover:text-blue-300"  @click="inpRest = true" wire:click="showAnswers({{$post->id}})">
                                    <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 
                                        4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                </a> --}}
                                <a   class="w-12 mt-1 group flex items-center dark:text-gray-400 text-bluefacebook px-3 py-2 text-base leading-6 font-medium 
                                    rounded-full hover:bg-blue-800 hover:text-blue-300"  x-on:click="showInput({{$post->id}})" wire:click="showAnswers({{$post->id}})" > 
                                    <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 
                                        4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                </a>
                            </div>
                            <style>
                                .hidden{
                                    display: none;
                                }
                            </style>
                            <script>
                                function dataResp(id){
                                    return {
                                        openR :id,
                                        show:true,
                                        showInput(id){
                                            console.log(this.openR);
                                            if (id == this.openR){
                                                this.show =  !this.show
                                            }else{
                                                this.show = this.show
                                            }
                                        },
                                    }
                                }                                
                            </script>
                            <div class="flex-1 text-center py-2 m-2">
                                @php
                                    $color = count($post->postResptLikes->where('alumnos_id', $iduser)->where('tipo','post')) > 0 ? ['red',0]: ['',1];
                                    $cantPost = count($post->postResptLikes->where('tipo','post'))
                                @endphp
                                
                                <a class="w-12 mt-1 group flex items-center dark:text-gray-400 text-bluefacebook px-3 py-2 
                                    text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300" wire:click="likePost({{$post->id}},{{$color[1]}})">
                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" 
                                    stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" style="color:{{$color[0]}}"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>{{$cantPost}}
                                </a>
                            </div>
                            @if ($post->alumnos_id == $iduser)
                                <div>
                                    <button class="bg bg-red-700" wire:click="deletePost({{$post->id}})">
                                        Eliminar 
                                    </button>
                                </div>
                            @endif
                            
                            <div x-bind:class="{'hidden':show}">
                                <input type="text" placeholder="Resp">
                                {{-- @forelse ($answerss as $answer)
                                    <div class="">
                                        <p class="text-base pt-1 px-6 text-justify width-auto font-serif dark:text-white-500 text-gray-700 flex-shrink">                                                    
                                            {{$answer->contenido}}
                                            <span class="text-blue-400"> </span>
                                        </p>      
                                        <div class="flex">
                                            <div class="col-span-3 mx-6">                                
                                                <div class="flex items-center">                        
                                                    <div class="flex-1 text-center py-2 m-2">
                                                        @php
                                                            $color = count($answer->postResptLikes->where('alumnos_id', $iduser)->where('tipo','resp')) > 0 ? ['red', 0 ]: ['',1];
                                                            $cantPost = count($answer->postResptLikes->where('tipo','resp'))
                                                        @endphp
                                                        
                                                        <a href="#" class="w-12 mt-1 group flex items-center dark:text-gray-400 text-bluefacebook px-3 py-2 
                                                            text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300" wire:click="likeAnswer({{$answer->id}}, {{$color[1]}})">
                                                            <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" 
                                                            stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" style="color:{{$color[0]}}"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                            </svg>{{$cantPost}}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                        
                                    </div>
                                @empty
                                    No hay conversación aún
                                @endforelse --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!--crear answer-->
        <div class="overflow-auto " style="background-color: rgba(0,0,0,0.5)" x-show="answerU" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': answerU }">
            <div class="dark:bg-gray-500   modal   bg-white-900  rounded-lg shadow-2xl  sm:m-8" x-show="answerU"
                @click.away="answerU = false">
                <div class="flex justify-between items-center border-b p-2 text-xl">
                    <h6 class="text-md font-serif dark:text-white-500 text-gray-800 mx-7 ">Responder</h6>
                    <button type="button " @click="answerU = false" class="dark:text-white-500 text-gray-500">✖</button>
                </div>
                
                <div class="p-2">
                    <!-- Aqui empieza el modal -->
                    <div class="px-5 overflow-x-hidden overflow-y-auto dark:bg-gray-500 bg-white-700" style="max-height: 40vh;">
                        <div class="bg-rose-300 ...">
                        <!--  <img class="object-contain h-48 w-full ...">-->
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full ">
                            <div class=" relative  "> <br>
                                <input type="text" class="w-11/12   border focus:outline-none border-gray-600 -py-3 h-36 dark:bg-gray-600 bg-white-100 rounded-md 
                                    font-base tracking-tight text-gray-800 dark:text-white-500 mx-3"  @click="answerU = true" 
                                    placeholder="postea tus dudas en la comunidad" wire:model.defer="respComun">
                                <div class="flex">
                            
                                    <div class="p-7 flex justify-end items-center w-full   -px-2">
                                        <button type="button" class="bg-transparent hover:bg-bluefacebook hover:text-white-500 dark:text-white-500 
                                            border border-indigo-800 text-white font-serif py-2 px-4 rounded mr-3" wire:click="guardarResp">
                                            Publicar
                                        </button>
                                        <button type="button" @click="answerU = false" class="bg-transparent hover:bg-red-700 hover:text-white-500 dark:text-white-500 border 
                                            border-red-600 text-white font-serif py-2 px-4   rounded">
                                            Cancelar
                                        </button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        @forelse ($answerss as $answer)
                            <div class="">
                                <p class="text-base pt-1 px-6 text-justify width-auto font-serif dark:text-white-500 text-gray-700 flex-shrink">                                                    
                                    {{$answer->contenido}}
                                    <span class="text-blue-400"> </span>
                                </p>      
                                <div class="flex">
                                    <div class="col-span-3 mx-6">                                
                                        <div class="flex items-center">                        
                                            <div class="flex-1 text-center py-2 m-2">
                                                @php
                                                    $color = count($answer->postResptLikes->where('alumnos_id', $iduser)->where('tipo','resp')) > 0 ? ['red', 0 ]: ['',1];
                                                    $cantPost = count($answer->postResptLikes->where('tipo','resp'))
                                                @endphp
                                                
                                                <a href="#" class="w-12 mt-1 group flex items-center dark:text-gray-400 text-bluefacebook px-3 py-2 
                                                    text-base leading-6 font-medium rounded-full hover:bg-blue-800 hover:text-blue-300" wire:click="likeAnswer({{$answer->id}}, {{$color[1]}})">
                                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" 
                                                    stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" style="color:{{$color[0]}}"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                    </svg>{{$cantPost}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                            </div>
                        @empty
                            No hay conversación aún
                        @endforelse
                    </div>
                    
                    <!-- Aqui empieza el modal -->
                </div>
            </div>
        </div>
    </main>        
</div>
