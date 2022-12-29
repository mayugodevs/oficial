<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    {{-- $asignado_id  {{$item->inscrito->idasig}}--}}
        @if ($inscrito!='[]')
          @foreach ($inscrito as $item)
            @livewire('historial-video',['asignado_id'=>$item->inscrito->idasig])
            @endforeach
            <button class="text-green-500 dark:text-green-500 focus:outline-none p-1 rounded-full ">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </button>
            <button class="text-green-500 dark:text-green-500 focus:outline-none p-1 rounded-full ">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
            </button>
            <button class="text-green-500 dark:text-green-500 focus:outline-none p-1 rounded-full">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>
            </button>
            <hr>
            <div
                class="bg-gray-200 dark:bg-gray-800 flex items-left space-x-1 p-4 md:px-10 md:py-4  leading-3 font-semibold text-white">
                <div class="flex-none w-8 h-8 bg-white rounded-full flex items-center justify-center">
                    <img src="http://www.mayugo.net/asset/img/favicon.png" alt=""
                        class="w-6 h-6 rounded-full bg-orange-100" loading="lazy">
                </div>
                <div class="flex-auto">
                    @foreach ($inscrito as $item)
                    <dt class="text-sm">{{ $item->inscrito->trabajadores->nombres }}</dt>
                    <dd class="text-xs"><span>Ingeniero</span></dd>
                    @endforeach
                </div>
            </div>
            <button
                class="text-gray-700 dark:text-white focus:outline-none bg-transparent p-1 py-1 px-4 border hover:bg-indigo-500  font-semibold hover:text-white  border-indigo-500 hover:border-transparent rounded">
                Ir a clases
            </button>
        @else
        <button class="text-green-500 dark:text-green-500 focus:outline-none p-1 rounded-full ">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
        </button>
        <button class="text-green-500 dark:text-green-500 focus:outline-none p-1 rounded-full ">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
        </button>
        <button class="text-green-500 dark:text-green-500 focus:outline-none p-1 rounded-full">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
        </button>
        <hr>
        

        <p class="text-gray-700 dark:text-white text-xs font-medium">
            Precio normal <span class="inset-y-0 right-0 w-5" wire:model="precio">USS {{$predsct}} </span>
          </p>
          <p class="text-green-600 dark:text-green-500 text-xs font-medium">
            <span class="inset-y-0 right-0 w-5" wire:model="precio_desc"> </span>
            Precio oferta <span class="inset-y-0 right-0 w-5" wire:model="precio_desc">US$  {{$precio_venta}} </span>
          </p>
          <button type="button" class=" dark:text-white focus:outline-none  bg-transparent p-1 py-1 px-4 border hover:bg-green-500 text-gray-600 font-semibold hover:text-white  border-green-500 hover:border-transparent rounded">
            <svg  class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </button>
          <button class=" dark:text-white focus:outline-none bg-transparent p-1 py-1 px-4 border hover:bg-green-500 text-gray-600 font-semibold hover:text-white  border-green-500 hover:border-transparent rounded">
            Comprar
          </button>
        @endif
   
</div>
