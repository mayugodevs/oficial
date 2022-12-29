<div class="mt-3 col-span-12 xs:col-span-4 sm:col-span-4 md:col-span-4 lg:col-span-3 xl:col-span-2 xl:text-sm ml:text-base ml:col-span-3">
    <div class="bg-white-500 dark:bg-gray-500 dark:text-whitetext rounded-lg  py-2">
    Especialidades
    <hr class="my-2 py-1">
        <ul class="  mx-1 font-serif ">
            @foreach ($categorias as $categoria)
                <li class="hover:bg-white-300 dark:hover:bg-gray-600 rounded-md h-13 pb-2 pt-2">
                    <button  wire:click="showNow({{$categoria->idc}},1)" class="hover:border-transparent flex items-center px-1
                        dark:hover:text-white-500 transition-colors duration-200 
                        text-gray-900   dark:text-white-500  text-left focus:outline-none" onclick="cambiarUrl(1,'{{$categoria->slug}}')" >
                        
                            <img class="h-8 w-8 mr-1" viewBox="0 0 24 24" src="{{asset('images/categoria/'.$categoria->img)}}" alt="{{$categoria->img}}">
                        
                        {{$categoria->nombre}}
                    </button>
                </li>
            @endforeach
        </ul>
    </div>
</div> 