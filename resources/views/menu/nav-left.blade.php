<div class="bg-gray-50 dark:bg-gray-800 col-span-2 fixed flex-none h-full  bg-opacity-25 w-full lg:bg-gray-50 lg:static lg:h-auto lg:overflow-y-visible lg:pt-0 lg:w-60 xl:w-72 lg:block hidden">
    
  <span class="text-yellow-500  dark:text-green-500 font-semibold ">Especialízate en las areas de mayor</span>
    <hr>
    <ul class="">   
      @foreach ($especialidades as $especialidad)
    
      <li>
        <button  wire:click="$set('id_categoria',{{$especialidad->idc}})" class="text-gray-700 dark:text-white focus:outline-none flex items-center px-3 hover:text-gray-900 transition-colors duration-200 mb-4 ">
          <div class="mr-3 rounded-md bg-gradient-to-br ">
              <img class="h-8 w-8" viewBox="0 0 24 24" src="https://www.mayugo.net/admin/images/categoria/gestion-de-operaciones.png" alt="">
            </div>
            {{$especialidad->nombre}}
          </button>
          </li>
      @endforeach  
    </ul>
    
  </div>