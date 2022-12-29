@extends('layout')
@section('content')
   
<div>
    <div class="bg-gray-50 dark:bg-gray-600 px-38 py-14  grid grid-cols-12">
      <div>            
      </div>
        {{--@include('menu.nav-left')--}}
       
        
        <div class="px-20 col-span-7 grid grid-cols-1 gap-y-24 sm:grid-cols-2 sm:gap-x-10 sm:gap-y-10 md:grid-cols-2 lg:grid-cols-3 lg:col-span-7 ">
            @foreach ($diplomadosPagos as $diplomado)
            <div class="dark:bg-gray-800 py-2 px-2 h-auto w-56 max-w-sm mx-auto bg-white rounded-xl shadow-md space-y-1 sm:py-4 sm:flex sm:items-center sm:space-y-6 sm:space-x-6">
             {{--<div class="content-center">
              <span class="float-left px-1 py-1 self-start" style="background-color: rgb(248, 231, 28); color: rgb(0, 0, 0);">Nuevo</span>
             </div>--}}
              
              <div class="content-center text-center space-y-1 space-x-0 px-2 sm:text-center">
               
                <div class="space-y-0.8 ">
                
                  {{--<span class="float-left px-1 py-1 self-start" style="background-color: rgb(248, 231, 28); color: rgb(0, 0, 0);">Nuevo</span>--}}
                 
                  <img class="block mx-auto h-24 rounded-full  sm:flex-shrink-0" src="https://www.mayugo.net/admin/images/categoria/gestion-de-operaciones.png" alt="Woman's Face">
                 @if ($diplomado->diplomadoGrupo->tipo_producto=='Diplomado')
                 <span class="text-sm text-indigo-500 font-semibold">{{$diplomado->diplomadoPrecio->diplomado->tipo_producto}}</span>
                 @else
                 <span class="text-sm text-green-500 font-semibold">{{$diplomado->diplomadoGrupo->tipo_producto}}</span>
                 @endif
                
                </div>
                <hr>
                <p class="text-gray-700 dark:text-white text-sm font-medium" >
                  {{$diplomado->diplomadoGrupo->titulo }}
                </p>
                
               {{-- @livewire('diplomado-adquirido',['diplomado_id'=>$diplomado->diplomadoPrecio->diplomado->iddiplomado,'facha_termino'=>$diplomado->diplomadoPrecio->diplomado->fecha_termino])  --}}
                <button
                class="text-gray-700 dark:text-white focus:outline-none bg-transparent p-1 py-1 px-4 border hover:bg-indigo-500  font-semibold hover:text-white  border-indigo-500 hover:border-transparent rounded">
                Ir a clases
               </button>
               <button
                class="text-gray-700 dark:text-white focus:outline-none bg-transparent p-1 py-1 px-4 border hover:bg-blue-500  font-semibold hover:text-white  border-blue-400 hover:border-transparent rounded">
                Mi avance
               </button>
                {{--<p class="text-gray-700 dark:text-white text-xs font-medium">
                    Precio normal <span class="inset-y-0 right-0 w-5" wire:model="precio">USS {{$diplomado->diplomado_precios->precio}} </span>
                  </p>
                  <p class="text-green-600 dark:text-green-500 text-xs font-medium">
                    <span class="inset-y-0 right-0 w-5" wire:model="precio_desc"> </span>
                    Precio oferta <span class="inset-y-0 right-0 w-5" wire:model="precio_desc">US$  {{$diplomado->diplomado_precios->precio_normal}} </span>
                  </p>
                  <button type="button" class=" dark:text-white focus:outline-none  bg-transparent p-1 py-1 px-4 border hover:bg-green-500 text-gray-600 font-semibold hover:text-white  border-green-500 hover:border-transparent rounded">
                    <svg  class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                  </button>
                  <button class=" dark:text-white focus:outline-none bg-transparent p-1 py-1 px-4 border hover:bg-green-500 text-gray-600 font-semibold hover:text-white  border-green-500 hover:border-transparent rounded">
                    Comprar
                  </button>--}}
              
               
              </div>
            </div>
            @endforeach
          </div>
        
   

      @if (!Auth::guest())
      @include('menu.nav-right')
      @endif
    </div>
    </div>
@endsection