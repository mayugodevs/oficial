@foreach ($cursos as $item)
    
    <div class=" flex justify-between dark:bg-gray-900 bg-white-900 my-2 xl:py-0 ml:py-0 lg:py-0 md:py-0 py-0 rounded-md items-center">
        <div class="flex justify-center py-1  items-center">
            <div class="py-2 px-1 ">
                <div class="block mx-auto xl:h-16 ml:h-16 lg:h-16 md:h-16 h-10 xl:w-16 ml:w-16 lg:w-16 md:w-16  w-12 rounded-full">
                    <img class="  " src="{{ asset('' . $item->img . '') }}"
                    alt="{{ $item->img }}">
                </div>

            </div>
            <div class=" flex flex-col justify-start xl:px-3 ml:px-3 lg:px-3 md:px-1 px-1">
                <div  class="dark:text-white-500 xl:text-sm ml:text-sm md:text-sm lg:text-sm text-xs text-gray-300 rounded-md border xl:w-20  ml:w-20  lg:w-20 md:w-20 w-16   border-dorado2 font-semibold ">
                    semana {{ $item->estado }}
                </div>
                <div class="dark:text-white-500 text-left text-gray-300 font-semibold xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs">
                    {{ $item->nom }}
                </div>
            </div>
        </div>

        <div class="xl:px-8 ml:px-8 lg:px-8 md:px-8 px-1   ">
            <button class="rounded-sm w-20 xl:w-24 ml:w-24 lg:w-24 md:w-24 bg-blue text-white-500 px-2 py-1 ml:text-base lg:text-base md:text-base xl:text-base text-xs  focus:outline-none   ">Ver Curso</button>
        </div>

    </div>

    
  
@endforeach
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
