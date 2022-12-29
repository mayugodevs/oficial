
<div>
  @if ($with_cursos)
  <div class="mx-3 border dark:border-gray-600 border-gray-400 text-gray-500 dark:text-white-300 ">
      
  
  <div class="relative flex items-center ">
    <div class="flex-none w-11 h-8  rounded-full flex items-center justify-center pl-1 pr-1">
      <img src="{{asset(''.$cursoImg.'')}}" alt="" class="w-10 h-10 rounded-full"
                loading="lazy">
    </div>
    <div class="flex-auto pt-4 pl-1">
        <dt class="font-serif text-xs  text-left leading-none"> {{$cursoNombre}}</dt>
        <dd class="text-xs pl-1"><span>
        <div class="relative ">
          @if ($idAsig != 0)
            <div class="overflow-hidden h-3 mb-4 dark:bg-gray-900 bg-white-900 text-xs flex rounded">
              @if ($porcentaje >= 0 && $porcentaje < 25)
                <div style="width:{{ $porcentaje . '%' }}"
                  class="shadow-none font-bold text-1xl flex flex-col text-center whitespace-nowrap border-2  border-red-500 dark:bg-red-400 bg-red-400 text-white-300 justify-center transition-all duration-500">
                  {{ $porcentaje . '%' }} </div>
              @elseif($porcentaje >= 25 && $porcentaje < 50)
                <div style="width:{{ $porcentaje . '%' }}"
                  class="shadow-none font-bold text-1xl flex flex-col text-center whitespace-nowrap border-2  border-yellow-500 dark:bg-yellow-300 bg-yellow-300 text-white-300 justify-cente transition-all duration-500">
                  {{ $porcentaje . '%' }} </div>
              @elseif($porcentaje >= 50 && $porcentaje < 75)
                <div style="width:{{ $porcentaje . '%' }}"
                  class="shadow-none font-bold text-1xl flex flex-col text-center whitespace-nowrap border-2  bg-indigo-500 dark:bg-indigo-400  text-white-300 justify-center transition-all duration-500">
                  {{ $porcentaje . '%' }} </div>
              @elseif($porcentaje >= 75 &&  $porcentaje <= 100)
                <div style="width:{{ $porcentaje . '%' }}"
                  class="shadow-none font-bold text-1xl flex flex-col text-center whitespace-nowrap border-2  border-green dark:bg-green bg-green text-white-300 justify-center transition-all duration-500">
                  {{ $porcentaje . '%' }} </div>
              @endif 
            </div>
          @else            
            Aun no visto nada :(
          @endif
        </div>
      </span></dd>
    </div>
  </div>
</div>
@endif
</div>