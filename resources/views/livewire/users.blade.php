
<div class="py-14 px-56 dark:border-gray-500 bg-gray-50 dark:bg-gray-800">
    <button wire:click="cursos()">Curso</button>
    <button wire:click="posts()">Post</button>
    <hr>
    @if ($curso)
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 text-center">
            @foreach ($cursos_comprados as $curso)
                <div class="py-10 px-4 h-auto w-56 max-w-sm mx-auto bg-white rounded-xl shadow-md space-y-1 sm:py-4 sm:flex sm:items-center sm:space-y-6 sm:space-x-6 my-5">
                
                    <div class="content-center text-center space-y-1 space-x-0 px-2 sm:text-center">
                        <div class="space-y-0.8 ">
                            
                        <img class="block mx-auto h-24 rounded-full  sm:flex-shrink-0" src="{{asset(''.$curso->img.'')}}" alt="{{$curso->img}}">
                            <p class="text-gray-500 text-sm font-medium" >
                                {{$curso->nom}}
                            </p>
                            
                        </div>
                        @if (in_array($curso->idcur, $cursos_comprados_log))
                            <button class="bg-white p-1 rounded-full text-green-500 hover:text-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-white">
                                <span class="sr-only">View notifications</span>
                                <svg  class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </button>
                            
                            <button  class="bg-white p-1 rounded-full text-green-500 hover:text-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-white">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                </svg>
                            </button>
                            
                            <button  class="bg-white p-1 rounded-full text-green-500 hover:text-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-white">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </button>
                        @else
                            <button type="button" class=" bg-transparent p-1 py-1 px-4 border hover:bg-green-500 text-gray-600 font-semibold hover:text-white  
                            border-green-500 hover:border-transparent rounded" onclick="openPopover(event,'popover-id')">
                                <svg  class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </button>
                        @endif                        
                        <hr class=""> 
                        <a href="{{ route('curso',$curso) }}">
                        
                            @if (in_array($curso->idcur, $cursos_comprados_log))
                               <x-historial-video cursoid="{{$curso->idcur}}" /> 
                                <button class="bg-green-500 p-1 py-1 px-4 border hover:bg-green-600 text-white-600 font-semibold hover:text-white  border-green-500 hover:border-transparent rounded">
                                    Seguir Curso
                                </button>                                
                            @else
                            <br>
                                <button class="bg-blue-500 p-1 py-1 px-4 border hover:bg-blue-600 text-black-400 font-semibold hover:text-white  border-green-500 hover:border-transparent rounded">
                                    Comprar Curso
                                </button>                            
                            @endif                        
                        </a>
                    </div>
                </div>
            @endforeach
        </div> 
        Hola desde aqui {{$mensaje}}
    @else
        <!-- modal div -->
    <div class="mt-6" x-data="{ open: false }">

        <!-- Button (blue), duh! -->
        @foreach ($posts as $post)
            <label for="">{{$post->title}}</label>
            <button class="px-4 py-2 text-white bg-blue-500 rounded select-none no-outline focus:shadow-outline" 
                @click="open = true" wire:click=" mostrarAnswers({{$post->id}})">
                Ver respuestas
            </button>
            <br>
            <hr>
        @endforeach
        
  
        <!-- Dialog (full screen) -->
        <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full" style="background-color: rgba(0,0,0,.5);" x-show="open"  >
            
          <!-- A basic modal dialog with title, body and one button to close -->
          <div class="h-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0" @click.away="open = false">
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Modal Title
                </h3>
                <div class="flex justify-between items-center border-b p-2 text-xl">
                    <h6 class="text-xl font-bold">Crear Post</h6>
                    <button type="button"@click="open = false" >✖</button>
                </div>
  
              <div class="mt-2">
                <div class="p-2">
                    <h4 class="font-bold">Respuesta al post</h4>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        
                        <input type="text" placeholder="Titulo de post" wire:model="answer">
                        @error('answer')
                        <span>{{$message}} </span>
                        @enderror
                    </div>
                    <div class="p-7 flex justify-end items-center w-full">
                        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white 
                        font-bold py-2 px-4 rounded mr-3" wire:click="createAnswer">
                            Responder
                        </button>
                    </div>
                    @foreach ($answerss as $answer)
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="company">
                                {{$answer->answer}}
                            </label>
                            <br>
                            {{-- <x-usuario iduser="{{$answer->user_id}}" /> --}}
                                
                       
                    @endforeach
            </div>
          </div>



          {{-- FALTA GUARDAR UNA RESPUESTA  AL POST MOSTRADO --}}




           
            <!-- One big close button.  --->
            <div class="mt-5 sm:mt-6">
              <span class="flex w-full rounded-md shadow-sm">
                <button @click="open = false" class="inline-flex justify-center w-full px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-700">
                  Close this modal!
                </button>
              </span>
            </div>
  
          </div>
        </div>
      </div>
        
    @endif  
   {{--  --}}
  
</div>
