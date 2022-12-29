@foreach ($cursos as $curso)
    <div class="py-10 px-4 h-auto w-56 max-w-sm mx-auto bg-white rounded-xl shadow-md space-y-1 sm:py-4 sm:flex sm:items-center sm:space-y-6 sm:space-x-6 my-5">                  
        <div class="content-center text-center space-y-1 space-x-0 px-0 sm:text-center">
            <div class="space-y-0.8 ">                 
                                
                <img class="block mx-auto h-24 rounded-full  sm:flex-shrink-0" 
                src="{{asset(''.$curso->img.'')}}" alt="{{$curso->img}}">
                <p class="text-gray-500 text-sm font-medium" >{{$curso->nom}}</p>
                
            </div>
            
            @if (in_array($curso->idcur, $cursos_asig_id))
                <button class="bg-white p-1 rounded-full text-green-500 hover:text-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
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
                @livewire('boton-comprar', ['curso' => $curso]){{-- `COMPRAR CURSO --}}                               
            @endif
            <hr class="">
                                        
            <a href="{{ route('curso',$curso) }}">
                @if (in_array($curso->idcur, $cursos_asig_id))
                    <x-historial-video cursoid="{{$curso->idcur}}" /> 
                        {{-- {{$curso->idcur}} --}}
                    <button class="bg-transparent p-1 py-1 px-4 border hover:bg-green-500 text-gray-600 font-semibold hover:text-white  border-green-500 hover:border-transparent rounded">
                        Seguir Curso
                    </button> 
                @else
                    {{-- @livewire('boton-comprar', ['curso' => $curso]) --}}
                    <button class="bg-transparent p-1 py-1 px-4 border hover:bg-green-500 text-gray-600 font-semibold hover:text-white  border-green-500 hover:border-transparent rounded">
                        Ver curso
                    </button>
                @endif
            </a>                               
        </div>
    </div>    
@endforeach