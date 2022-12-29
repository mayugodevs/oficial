<div class=" absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-3 sm:pr-0">
    <div class="hidden md:block group cursor-pointer">
          
      <svg class="h-6 w-6 text-navtextwhite dark:text-whitetext" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
      </svg>
    <ul class="rounded-xl dark:border-gray-900 bg-white-900 dark:bg-gray-900  dark:text-white-300 transform scale-0 group-hover:scale-100 absolute 
        transition duration-150 ease-in-out origin-top min-w-32  mt-2">
        @foreach ($comentarios as $comenta)
            <li class="bg-blue-200 rounded-sm px-3 py-1 hover:bg-blue-500">
                {{-- <button wire:click="notifVisto()">{{$comenta->contenido}}</button> --}}
                {{$comenta->contenido}}
            </li>
        @endforeach
    </ul>
  </div>
</div>