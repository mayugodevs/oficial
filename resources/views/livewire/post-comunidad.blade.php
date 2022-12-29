<div class="dark:bg-gray-500 bg-white-900 mt-4 rounded-lg mx-2">    
    
    
    <main class="mx-auto py-4 mt-4 px-3" x-data="data()" >
        <div>   
            @if ($usuario !== 2)
                <div class="">
                    <div class="flex items-center relative mb-8">
                    <img class="mr-2 inline-block h-12 w-12 rounded-full border-2 border-colborderimg" src="{{asset(''.$user->avatar.'')}}" alt="">
                    <div x-on:click="abrirModal()" class="bg-white-300 dark:bg-fondcoment w-full rounded-full py-3 px-5 text-left dark:text-txtpost text-lg cursor-text">Postea tus dudas o sugerencias con la comunidad...</div>
                    <div @click="isDialogOpen = true" class="absolute flex dark:text-whitetext right-5 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    </div>
                </div>
                <!--crear post-->
                <div class="overflow-auto " style="background-color: rgba(0,0,0,0.5)" x-show="isDialogOpen" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': isDialogOpen }">
                    <div class="dark:bg-gray-500   modal   bg-white-900  rounded-lg shadow-2xl  sm:m-8" x-show="isDialogOpen"
                        @click.away="isDialogOpen = false">
                        <div class="flex justify-between items-center border-0 p-2 px-5 text-xl">
                            <h6 class="text-md font-serif dark:text-white-500 text-gray-800 mx-0 ">Crear Post</h6>
                            <button type="button " @click="isDialogOpen = false" class="dark:text-white-500 text-gray-500">✖</button>
                        </div>                    
                        <div class="p-2 dark:bg-blackwhover">
                            <!-- Aqui empieza el modal -->
                            <div class="overflow-x-hidden overflow-y-auto dark:bg-gray-500 bg-white-700" style="overflow:hidden">                            
                                <div class="flex flex-wrap dark:bg-blackwhover">
                                    <div class="w-full h-100">
                                        <div class="relative h-100 dvcsm" >                                            
                                            <div wire:ignore>
                                                <textarea id="textPost" placeholder="postea tus dudas en la comunidad" ></textarea>
                                            </div>                                        
                                            @error('files.*')
                                                {{$message}}
                                            @enderror 
                                            @if ($files)
                                                @foreach ($files as $file)
                                                    <img src="{{$file->temporaryURL()}}" alt="" width="100px">   
                                                @endforeach
                                            @endif

                                            <div class="flex">
                                                <div class="p-1 flex justify-start text-left">
                                                    <button type="submit" class=" bg-bluefacebook text-white-500
                                                        text-white font-serif py-1 px-5 rounded-full mr-3 outline-none"  x-on:click="crearPost()">
                                                        Publicar
                                                    </button>
                                                </div>
                                                <div class="w-64 -px-2 -mx-4 ">
                                                    <div class="flex items-center h-full">                                                    
                                                        <div class="">
                                                            <svg class="text-center text-blue dark:text-whitetext  h-7 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                            </svg>
                                                        </div>
                                                        <div class="cursor-pointer">
                                                            <label class="custom-file-upload cursor-pointer">Max. 2 imgs
                                                                <input type="file" wire:model="files" multiple title="" style="display:none">
                                                                <svg class="text-center text-blue dark:text-whitetext  h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                                    </path>
                                                                </svg>
                                                            </label>
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
            @endif 
            @foreach ($posts as $post) 
                <div class="flex mb-2">
                    <div class="flex flex-shrink-0">
                        
                        <a href="#" class="flex-shrink-0 group block">
                            <div class="flex items-center">
                                <img class="inline-block h-10 w-10 rounded-full" src="{{asset(''.$post->alumno->avatar.'')}}" alt="" />
                            </div>
                        </a>
                    </div> 
                    {{-- RESPONDER EL POST, caja de texto --}}
                    <div class="pl-2  w-full w-calcc break-words">
                        <div class="bg-white-300 dark:bg-fondcoment dark:text-whitetext pt-2 pb-4 px-3 rounded-lg">
                            <div class="flex justify-between items-center text-base leading-6 font-medium dark:text-white-500 text-gray-700 font-serif">
                                <div class="text-lg">{{$post->alumno->nombres}}</div>
                                
                                <div class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                                    @php
                                        $horas = $post->difhoras($post->fecha);
                                        $minutos = $post->difMinut($post->fecha);
                                    @endphp
                                    @if ($horas < 48)                                    
                                        @if ($horas > 0)
                                            hace {{$horas}} horas                                        
                                        @else
                                            hace {{$minutos}} minutos
                                        @endif
                                    @else
                                        {{$post->fecha->translatedFormat('d M Y H:i:s')}}
                                    @endif
                                
                                </div>                                
                                
                            </div>
                            <p class="text-base  text-justify width-auto font-serif dark:text-white-500 text-gray-700 flex-shrink">
                                {{$post->contenido}}
                                <span class="text-blue-400"> </span>
                            </p>
                            @php
                                $imgs = explode(',', $post->imagen);
                                $numero = count($imgs,COUNT_RECURSIVE); 
                            @endphp
                            <div class="grid grid-cols-{{$numero}} gap-4" text-center>
                                
                                @foreach ($imgs as $img)
                                    <div class="">
                                        @if ($img)
                                            <img src="{{asset(''.$img.'')}}" class="zoom-img transform hover:bg-blue-600 transition duration-500 hover:scale-125">
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="flex px-3">
                            <div class="w-full">                    
                                <div class="flex items-center" >
                                    <div class="text-center py-2">
                                        @php
                                            $color = count($post->postResptLikes->where('alumnos_id', $iduser)->where('tipo','post')) > 0 ? ['red',0]: ['',1];
                                            $cantPost = count($post->postResptLikes->where('tipo','post'))
                                        @endphp
                                        <a class="" wire:click="likePost({{$post->id}},{{$color[1]}})">
                                            <div class="flex items-center dark:text-whitetext">
                                                <div class="dark:text-btnredes font-semibold flex">Me gusta <div class="w-5">{{$cantPost}}</div></div>
                                                @if ($color[0]=='red')
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-6 text-bluefacebook" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                                    </svg>
                                                @else
                                                    <svg class="text-center h-7 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" 
                                                    stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" style="color:{{$color[0]}}"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                    </svg>
                                                @endif
                                                
                                            </div> 
                                        </a>
                                    </div> &nbsp;&nbsp;
                                    <div class="text-center" >
                                        <a   class=""  wire:click="showAnswers({{$post->id}})"> 
                                            <div class="flex items-center dark:text-whitetext">
                                                <div class="dark:text-btnredes font-semibold">Responder</div>&nbsp;
                                                <svg class="text-center h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 
                                                    4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                            </div>
                                        </a>
                                        
                                    </div>
                                    @if ($post->alumnos_id == $iduser)
                                        <div class="dark:text-whitetext" wire:click="confirmDelete({{$post->id}},0)"> 
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                @if ($post->id == $idPost)
                    <div class="flex relative pl-8 ">
                        <img class="inline-block h-8 w-8 rounded-full" src="{{asset(''.$user->avatar.'')}}" alt="" />
                        <div contenteditable id="respuesta_{{$post->id}}" class="text-sm px-4  outline-none w-calccc rounded-2xl ml-3 bg-white-300 dark:bg-fondcoment w-full 
                            fake-textarea p-1  text-left dark:text-whitetext">
                        </div>
                        <button type="button" class=" p-1 absolute right-1 bottom-1 bg-bluefacebook text-whitetext rounded-full" @click="crearResp({{$idPost}})">
                            <svg  class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                        </button>

                    </div>
                    {{-- VER LAS RESPUESTAS DEL POST --}}
                    @forelse ($answerss as $answer)
                        <div class=" p-4 pb-0 mx-4 mb-3">
                            <div class="flex flex-shrink-0">
                                <div class="flex items-center w-full">
                                
                                    <img class="inline-block h-8 w-8 rounded-full" src="{{asset(''.$answer->alumno->avatar.'')}}" alt="" />
                                
                                    <div class="ml-3 bg-white-300 dark:bg-fondcoment dark:text-whitetext pt-2 pb-4 px-3 rounded-lg w-calcccc break-words">
                                        <div class="text-base leading-6 font-medium dark:text-white-500 text-gray-700 font-serif flex justify-between items-center">
                                            <div class="text-sm">{{$answer->alumno->nombres}}</div>
                                            <div class="text-sm leading-5 font-medium text-gray-400 group-hover:text-gray-300 transition ease-in-out duration-150">
                                                @php
                                                    $horas = $post->difhoras($answer->fecha);
                                                    $minutos = $post->difMinut($answer->fecha);
                                                @endphp
                                                @if ($horas < 48)                                    
                                                    @if ($horas > 0)
                                                        hace {{$horas}} horas                                        
                                                    @else
                                                        hace {{$minutos}} minutos
                                                    @endif
                                                @else
                                                    {{$answer->fecha->translatedFormat('d M Y H:i:s')}}
                                                @endif

                                            </div>
                                        </div>
                                        <p class="text-base pt-1 text-justify width-auto font-serif dark:text-white-500 text-gray-700 flex-shrink">                                                    
                                            {{$answer->contenido}}
                                            <span class="text-blue-400"> </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex px-14">
                                <div class="">                                
                                    <div class="flex items-center">                        
                                        <div class="flex-1 text-center">
                                            @php
                                                $color = count($answer->postResptLikes->where('alumnos_id', $iduser)->where('tipo','resp')) > 0 ? ['red', 0 ]: ['',1];
                                                $cantPost = count($answer->postResptLikes->where('tipo','resp'))
                                            @endphp
                                            
                                            <a class="" wire:click="likeAnswer({{$answer->id}}, {{$color[1]}})">
                                                <div class="dark:text-btnredes font-semibold flex text-sm">
                                                    Me gusta &nbsp;&nbsp;
                                                    <div class="w-5">{{$cantPost}}</div>

                                                    @if ($color[0]=='red')
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 text-bluefacebook" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                                    </svg>
                                                    @else
                                                    <svg class="text-center h-5 w-4" fill="none" stroke-linecap="round" stroke-linejoin="round" 
                                                    stroke-width="2" stroke="currentColor" viewBox="0 0 24 24" style="color:{{$color[0]}}"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                                    </svg>
                                                    @endif
                                                </div>
                                                
                                            </a>
                                            
                                        </div>
                                        @if ($answer->alumnos_id == $iduser)
                                            &nbsp;&nbsp;
                                            <div class="dark:text-whitetext">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" wire:click="confirmDelete({{$answer->id}},1)">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </div>
                                            {{-- <div class="dark:text-whitetext">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" wire:click="deletePost({{$answer->id}},1)">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </div> --}}
                                        @endif
                                    </div>
                                </div>
                            </div>                        
                        </div>                        
                    @empty
                        <div class="bg-white-300 dark:bg-fondcoment ml-20 mt-3 p-1 rounded-lg text-center dark:text-whitetext mb-5">Sea el primero en comentar...</div>  
                    @endforelse
                @endif
            @endforeach
        </div>  
    </main>    
    
</div>
