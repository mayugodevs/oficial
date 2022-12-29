
    
    <div class="bg-gray-50 dark:bg-gray-600 px-38 py-14  grid grid-cols-12">
        <div>            
        </div>
          @include('menu.nav-left')
      <div class="px-20 col-span-7 grid grid-cols-1 gap-y-24 sm:grid-cols-2 sm:gap-x-10 sm:gap-y-10 md:grid-cols-2 lg:grid-cols-3 lg:col-span-7 ">
          @foreach ($asignaciones as $asignacion)   
          <div class="dark:bg-gray-800 py-2 px-2 h-auto w-56 max-w-sm mx-auto bg-white rounded-xl shadow-md space-y-1 sm:py-4 sm:flex sm:items-center sm:space-y-6 sm:space-x-6 flex justify-between">
           {{--<div class="content-center">
            <span class="float-left px-1 py-1 self-start" style="background-color: rgb(248, 231, 28); color: rgb(0, 0, 0);">Nuevo</span>
           </div>--}}
            
            <div class="content-center text-center space-y-1 space-x-0 px-2 sm:text-center">
             
              <div class="space-y-0.8 ">
               
                {{--<span class="float-left px-1 py-1 self-start" style="background-color: rgb(248, 231, 28); color: rgb(0, 0, 0);">Nuevo</span>--}}
               
                <img class="block mx-auto h-24 rounded-full  sm:flex-shrink-0" src="https://www.mayugo.net/admin/images/categoria/gestion-de-operaciones.png" alt="Woman's Face">
                <p class="text-gray-700 dark:text-white text-sm font-medium" >
                  {{$asignacion->inscrito->cursos->nom}}
                </p>
                @livewire('historial-video',['asignado_id'=>$asignacion->inscrito->idasig])
                
              </div>
              <button class="text-green-500 dark:text-green-500 focus:outline-none p-1 rounded-full ">
                <span class="sr-only">View notifications</span>
                <!-- Heroicon name: outline/bell -->
                <svg  class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </button>
              <button  class="text-green-500 dark:text-green-500 focus:outline-none p-1 rounded-full ">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
              </button>
             
              <button  class="text-green-500 dark:text-green-500 focus:outline-none p-1 rounded-full">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
              </button>
              <hr class="">
              <div class="bg-gray-200 dark:bg-gray-800 flex items-left space-x-1 p-4 md:px-10 md:py-4  leading-3 font-semibold text-white">
                <div class="flex-none w-8 h-8 bg-white rounded-full flex items-center justify-center">
                    <img src="http://www.mayugo.net/asset/img/favicon.png" alt="" class="w-6 h-6 rounded-full bg-orange-100"
                        loading="lazy">
                </div>
                <div class="flex-auto">
                    <dt class="text-sm">{{$asignacion->inscrito->trabajadores->nombres}}</dt>
                    <dd class="text-xs"><span>Ingeniero</span></dd>
                </div>
            </div>

              <button class="text-gray-700 dark:text-white focus:outline-none bg-transparent p-1 py-1 px-4 border hover:bg-indigo-500  font-semibold hover:text-white  border-indigo-500 hover:border-transparent rounded">
                Ir a clases
              </button>
            </div>
          </div>
          @endforeach  
        </div>
        @if (!Auth::guest())
        @include('menu.nav-right')
        @endif
      </div>
  
  