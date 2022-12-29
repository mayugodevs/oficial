<div class="relative">
  
    <label>
      <div id="togilsito"
        class="bg-bcklightbuscador dark:bg-transparent rounded-r-md absolute text-whitetext dark:text-colplacebuscador  right-0 z-2 cursor-pointer"
        style="height: 100%;width: 50px;align-content: center;display: flex;justify-content: center;align-items: center;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20px" height="20px" class=""
          fill="CurrentColor">
          <path fill-rule="evenodd" clip-rule="evenodd"
              d="M12.5 20C16.6421 20 20 16.6421 20 12.5C20 8.35786 16.6421 5 12.5 5C8.35786 5 5 8.35786 5 12.5C5 16.6421 8.35786 20 12.5 20ZM12.5 23C18.299 23 23 18.299 23 12.5C23 6.70101 18.299 2 12.5 2C6.70101 2 2 6.70101 2 12.5C2 18.299 6.70101 23 12.5 23Z">
          </path>
          <path
              d="M18.2982 18.2983C18.884 17.7125 19.8337 17.7125 20.4195 18.2983L29.548 27.4267C30.1338 28.0125 30.1338 28.9623 29.548 29.548C28.9622 30.1338 28.0125 30.1338 27.4267 29.548L18.2982 20.4196C17.7124 19.8338 17.7124 18.884 18.2982 18.2983Z">
          </path>
        </svg>
      </div>
    </label>
    <form wire:submit.prevent="btn_submit">
      <div id="list" class="block group ">
        <input 
          style="padding-bottom: 6px;"
          class="xl:w-wbuscar 2xl:w-wbusca transition-all text-gray-600 dark:text-colplacebuscador 
          bg-colbuscadorbw dark:bg-colbuscadorb  outline-none font-semibold focus:outline-none border 
            px-3 py-1 pr-6  hover:text-black flex items-center w-full h-11 placeholder-colplacebuscadorw 
          dark:placeholder-colplacebuscador rounded border-colbuscadorbw dark:border-colplacebuscador text-sm"
          wire:model='filtro' 
          autocomplete="off" 
          type="search" name="search"
          placeholder="¿Qué quieres aprender hoy?">

        @if ($filtro !== '' and strlen($filtro) >= 4)
          <ul class="rounded-xl dark:border-gray-900 bg-white-900 dark:bg-gray-900  dark:text-white-300 transform scale-0 group-hover:scale-100 absolute 
            transition duration-150 ease-in-out origin-top min-w-32  mt-2 font-serif py-3 hidden xl:block">
            <li class="px-3 font-bold">
                <div class="border-b border-green">Cursos:</div>
            </li>
            @if (!$curso_estado)
                <li
                    class=" rounded-sm px-3 py-1 text-sm py-2 hover:bg-buscadorhver dark:hover:bg-buscadorhverd">
                    <a>No se encontro CURSOS con "{{ $filtro }}", te recomendamos estos cursos</a>
                </li>
            @endif
            @foreach ($cursos as $item)
                <li
                    class=" rounded-sm px-3 py-1 text-sm py-2 hover:bg-buscadorhver dark:hover:bg-buscadorhverd">
                    <span class="inline-block w-2 h-2 mr-2 pt-1 bg-blue dark:bg-green rounded-full"></span>
                    <a href=" {{ route('curso', $item->slug) }} " target="_blank">{{ $item->nom }}</a>
                </li>
            @endforeach

            <li class="px-3 font-bold mt-1">
                <div class="border-b border-indigo-600">Especializaciones:</div>
            </li>

            @if (!$dipl_estado)
                <li
                    class=" rounded-sm px-3 py-1 text-sm py-2 hover:bg-buscadorhver dark:hover:bg-buscadorhverd">
                    <a>No se encontro DIPLOMADOS con "{{ $filtro }}", te recomendamos estos diplomados</a>
                </li>
            @endif
            @foreach ($espect as $item)
                <li
                    class=" rounded-sm px-3 py-1 text-sm   py-2  hover:bg-buscadorhver dark:hover:bg-buscadorhverd">
                    <span
                        class="inline-block w-2 h-2 mr-2 pt-1 bg-indigo-600 dark:bg-indigo-600 rounded-full"></span>
                    <a href=" {{ route('cursovivo') }} " target="_blank">{{ $item->titulo }}</a>
                </li>
            @endforeach
          </ul>
        @endif
      </div>
    </form>
</div>

<script>
  window.addEventListener('click', function(e) {
    if (document.getElementById('togilsito').contains(e.target)) {
      var el = document.querySelector("#kimsuf");
      el.classList.toggle("opened");
    } else {
      if (document.getElementById('list').contains(e.target)) {}
      else {
        if (document.querySelector("#kimsuf.opened")) {
            var el = document.querySelector("#kimsuf");
            el.classList.remove("opened");
        }
      }
    }
  })
</script>
