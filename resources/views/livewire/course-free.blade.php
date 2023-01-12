<div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div>  {{--  --}}
        {{-- @if --}} {{-- ($type == 2) --}}{{-- admin --}}
            <div class="pt-40">
                aquiii
            </div>
        {{-- @else  --}}
            <div class="grid grid-cols-1  mx-0 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 ml:grid-cols-6 text-center mt-3 justify-items-center">
                @foreach ($lists as $list) 
                    {{-- @if (!in_array($list->curs_idasig,$cursos_asig)) --}}
                        <div class="relative px-4  h-auto lg:w-56 w-72 bg-white-700 dark:bg-bluedark  rounded-xl pt-7 sm:pb-4 my-0 mb-2">
                            <div class="bg-yellow-400 dark:bg-green badge-new absolute left-0 top-0 text-center rounded font-semibold px-1 text-whitetext ">
                                Nuevo
                            </div>
                            <div class="content-center text-center space-y-1 space-x-0 px-0 sm:text-center">
                                <div class="space-y-0.8 ">
                                    <img class="block mx-auto lg:h-24 h-32 rounded-full  sm:flex-shrink-0" src="{{asset(''.$list->curso_asinga->curso->img.'')}}" alt="{{$list->curso_asinga->curso->img}}">
                                    <br>
                                    <p class="text-gray-900 text-sm font-medium dark:text-white-500" style="height:60px">
                                        {{$list->curso_asinga->curso->nom}}
                                        {{$list->curso_asinga->idasig}}
                                    </p>
                                </div>
                                <div class="dark:text-whitetext  flex lg:justify-between justify-around mb-2">
                                    <div class="flex items-center">
                                        <button class="p-0 buttonlike rounded hover:text-green text-gray-600   dark:text-whitetext dark:hover:text-green duration-200">
                                            <span class="lnr lnr-users text-lg text-green "></span>
                                        </button>
                                        <x-detalle-curso  tipo="1" idAsig="{{$list->curs_idasig}}" />
                                    </div>
                                    <div class="flex items-center">
                                        <button  class=" p-0 buttonlike rounded hover:text-green text-gray-600 dark:text-whitetext dark:hover:text-green duration-200">
                                            <span class="lnr lnr-star text-lg text-green "></span>
                                        </button> 
                                    </div>
                                    @auth
                                        @livewire('like-curso', ['idAsig' => $list->curs_idasig], key(rand()+rand()))
                                    @else
                                        <div class="flex items-center">
                                            <button class="p-0 buttonlike rounded text-gray-600 
                                            dark:text-whitetext hover:text-green dark:hover:text-green duration-200" >
                                            <span class="lnr lnr-heart text-lg text-green"></span>
                                        </button>
                                    </div>
                                    @endauth
                                </div>

                                @if (in_array($list->curs_idasig,$cursos_asig_free)){{-- CURSANDO FREE GRATIS --}}
                                    <div class=""> 
                                        <div class="inline">
                                            <a class="inline" href="{{ route('curso',$list->curso_asinga->curso->slug) }}">
                                                <button class="bg-transparent p-1 py-1 px-1 -mx-1  hover:bg-purple text-gray-600 font-semibold hover:text-whitetext dark:text-whitetext duration-200 border-2  border-purple hover:border-transparent rounded">
                                                    Ir a curso
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                @elseif(in_array($list->curs_idasig,$cursos_acceso))
                                <div class=""> 
                                    <div class="inline">
                                        <a class="inline" href="{{ route('curso',$list->curso_asinga->curso->slug) }}">
                                            <button class="bg-transparent p-1 py-1 px-1 -mx-1  hover:bg-purple text-gray-600 font-semibold hover:text-whitetext dark:text-whitetext duration-200 border-2  border-purple hover:border-transparent rounded">
                                                Ir a curso
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                @elseif(in_array($list->curs_idasig,$cursos_asig_vencidos) || in_array($list->curs_idasig,$cursos_asig))
                                <div class=""> 
                                    <div class="inline">
                                        <a class="inline" href="{{ route('curso',$list->curso_asinga->curso->slug) }}">
                                            <button class="bg-transparent p-1 py-1 px-1 -mx-1  hover:bg-purple text-gray-600 font-semibold hover:text-whitetext dark:text-whitetext duration-200 border-2  border-purple hover:border-transparent rounded">
                                                Comprar curso
                                            </button>
                                        </a>
                                    </div>
                                </div> 
                                @else
                                <div class=""> 
                                    <div class="inline">
                                        <a class="inline" href="{{ route('curso',$list->curso_asinga->curso->slug) }}" target="_blank">
                                            <button class="bg-transparent p-1 py-1 px-1 -mx-1  hover:bg-purple text-gray-600 font-semibold hover:text-whitetext dark:text-whitetext duration-200 border-2  border-purple hover:border-transparent rounded">
                                                Info!!!
                                            </button>
                                        </a>
                                        <button class="bg-transparent p-1 py-1 px-1 -mx-1  hover:bg-purple text-gray-600 font-semibold hover:text-whitetext dark:text-whitetext 
                                            duration-200 border-2  border-purple hover:border-transparent rounded" wire:click="InscribCourse({{$list->curs_idasig}})">
                                            Inscribirme
                                        </button>
                                    </div>
                                </div>
                                @endif
                                
                                
                            </div>
                        </div>
                    {{-- @endif --}}
                @endforeach
            </div> 
        {{-- @endif --}}
    </div>
    {{-- modal de register --}}
    <div>
        <main class="mx-auto" x-data=dataAlpine() @keydown.escape="isDialogOpen = false">
            <section class="flex flex-wrap p-4">
                <div class="overflow-auto " style="background-color: rgba(0,0,0,0.5)" x-show="isDialogOpen" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': isDialogOpen }">
                    <div class="dark:bg-gray-500   modal   bg-white-900  rounded-lg shadow-2xl  sm:m-8" 
                        @click.away="isDialogOpen = false">
                        <div class="flex justify-between items-center border-b p-2 text-xl">
                            <h6 class="text-md font-serif dark:text-white-500 text-gray-800 mx-7 ">Registrese el lleve el curso gratis</h6>
                            <button type="button " @click="isDialogOpen = false" class="dark:text-white-500 text-gray-500">✖</button>
                        </div>                    
                        <div class="p-2 ">
                            <!-- Aqui empieza el modal -->
                            <div class="px-5 overflow-x-hidden overflow-y-auto dark:bg-gray-500 bg-white-700" >
                                
                                <div class="flex flex-wrap -mx-3 ">                               
                                    <div class="w-full h-full">
                                        <br>
                                        <div>  
                                            <div class="grid grid-cols-1" x-show="persona">
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-xl font-bold text-left " for="name">Nombres</label>
                                                    <input
                                                        class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        type="text" placeholder="Juancito" wire:model.defer="name_r" required id="name_r">                                    
                                                </div>
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-xl font-bold text-left  " for="password"> Apellidos</label>
                                                    <input
                                                        class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        type="text" placeholder="De Mayugo" wire:model.defer="last_r" required id="last_r">                                    
                                                </div>
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-xl font-bold text-left " for="name">Teléfono</label>
                                                    <input
                                                        class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        type="number" placeholder="+51 995689569" wire:model.defer="phone_r" required id="phone_r">                                    
                                                </div>
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-xl font-bold text-left " for="name">Email</label>
                                                    <input
                                                        class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        type="email" placeholder="juancito@mayugo.site" wire:model.defer="email_r" required id="email_r">                                    
                                                </div>
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-xl font-bold text-left  " for="password"> Contraseña</label>
                                                    <input
                                                        class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        type="password" placeholder="***********" wire:model.defer="pass1_r" required id="pass1_r">                                    
                                                </div>
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-xl font-bold text-left  " for="password"> Confirmar Contraseña</label>
                                                    <input
                                                        class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        type="password" placeholder="***********" wire:model.defer="pass2_r" required id="pass2_r">                                    
                                                </div>
    
                                            </div> 
                                            
                                            <div class="flex"> 
                                                <div class="p-7 w-full bg-transparent "> 
                                                    <button type="button" class="bg-transparent hover:bg-bluefacebook hover:text-white-500 dark:text-white-500 border border-indigo-800 
                                                        text-white font-serif py-2 px-4 rounded mr-3" x-on:click="validateDatos()">
                                                        Registrarse
                                                    </button>
                                                </div>
                                            </div>                                        
                                        </div>                                
                                    </div>
                                </div>
                            </div>      
                            <!-- Aqui termina el modal -->
                        </div>
                    </div>
                </div>
            </section>
        </main>
        
    </div>
    @push('js')
            <script>
                function dataAlpine(){
                    return {
                        isDialogOpen : @entangle('registerModal'), 
                        persona : true,  
                        validateDatos(){
                            console.log('validando los datos....'); 
                            name_r = document.getElementById('name_r').value.trim()
                            last_r = document.getElementById('last_r').value.trim()
                            phone_r = document.getElementById('phone_r').value.trim()
                            email_r = document.getElementById('email_r').value.trim()
                            pass1_r = document.getElementById('pass1_r').value.trim()
                            pass2_r = document.getElementById('pass2_r').value.trim()
                            if(name_r.length > 0){
                                if(last_r.length > 0){
                                    if(phone_r.length > 0){
                                        if(email_r.length > 0){
                                            if(pass1_r.length > 0){ 
                                                if(pass2_r.length > 0){ 
                                                    if(pass1_r === pass2_r){
                                                        // VALIDADO TODOS LOS CAMPOS DE EMPRESA
                                                        Livewire.emit('registerUser')
                                                    }else console.log('contras dife'); 
                                                } else console.log('pass2_r necesaria');
                                            } else console.log('pass1_r necesaria');
                                        } else console.log('email_r necesaria');
                                    } else console.log('phone_r necesaria');
                                } else console.log('last_r necesaria');
                            } else console.log('name_r necesaria');
                        }
                    }
                }
            </script>
        @endpush
</div>


