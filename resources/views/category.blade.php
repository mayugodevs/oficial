<div>
    <div class="grid grid-cols-6">
        <div>
            <div class="col-span-2 fixed flex-none h-full bg-gray-100 bg-opacity-25 w-full lg:bg-gray-100 lg:static lg:h-auto lg:overflow-y-visible lg:pt-0 lg:w-60 xl:w-72 lg:block hidden">
                Especialízate en las areas de mayor
                <hr>
                <ul class="">   
                    @foreach ($categorias as $categoria)                
                        <li>
                            <button class="flex items-center px-3 hover:text-gray-900 transition-colors duration-200 mb-4 text-gray-900">
                            <div class="mr-3 rounded-md bg-gradient-to-br ">
                                <img class="h-8 w-8" viewBox="0 0 24 24" src="https://www.mayugo.net/admin/images/categoria/gestion-de-operaciones.png" alt="">
                                </div>
                                {{$categoria->nombre}}
                            </button>
                        </li>
                    @endforeach  
                </ul>
                
              </div>
            

        </div>
        <div class="col-span-4 grid sm:grid-cols-1 md:grid-cols-2  lg:grid-cols-4 text-center">

            {{-- CAMBIAR EL ESTADO DE VARIABLE PERFIL --}}
            
        </div>
        
    <div>

    @auth
        @include('menu.nav-right')
    @endauth
    
    
</div>