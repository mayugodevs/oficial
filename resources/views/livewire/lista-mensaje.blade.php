<div class=" absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:pr-0 sm:ml-3">
    <div class="hidden md:block group cursor-pointer text-navtextwhite dark:text-whitetext">
          
    <svg  class="h-6 w-6 text-navtextwhite dark:text-whitetext" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
    </svg>
    <ul class="rounded-xl dark:border-gray-900 bg-white-900 dark:bg-gray-900  dark:text-white-300 transform scale-0 group-hover:scale-100 absolute 
        transition duration-150 ease-in-out origin-top min-w-32  mt-2">
        @if ($plan == 'Premium')
            @foreach ($mensajes as $comenta)
                <li class="bg-blue-200 rounded-sm px-3 py-1 hover:bg-blue-500">
                    {{$comenta}}
                </li>
            @endforeach
        @else
            <li class="bg-blue-200 rounded-sm px-3 py-1 hover:bg-blue-500">Cambiate a premiun</li>
        @endif
    </ul>
    </div>
</div>