
<div class="bg-gray-50 dark:bg-gray-600 px-38 py-14  grid grid-cols-12">
  <div>            
  
  </div>
    {{-- @include('menu.nav-left') --}}
  <div class="px-20 col-span-7 grid grid-cols-1 gap-y-24 sm:grid-cols-2 sm:gap-x-10 sm:gap-y-10 md:grid-cols-2 lg:grid-cols-3 lg:col-span-7 ">
      @foreach ($cursos as $curso)   
      <div class="dark:bg-gray-800 py-2 px-2 h-auto w-56 max-w-sm mx-auto bg-white rounded-xl shadow-md space-y-1 sm:py-4 sm:flex sm:items-center sm:space-y-6 sm:space-x-6">
      {{--<div class="content-center">
        <span class="float-left px-1 py-1 self-start" style="background-color: rgb(248, 231, 28); color: rgb(0, 0, 0);">Nuevo</span>
      </div>--}}
        
      <div class="content-center text-center space-y-1 space-x-0  sm:text-center">
      
        <div class="space-y-0.8 ">
        
          {{--<span class="float-left px-1 py-1 self-start" style="background-color: rgb(248, 231, 28); color: rgb(0, 0, 0);">Nuevo</span>--}}
        
          <img class="block mx-auto h-24 rounded-full  sm:flex-shrink-0" src="https://www.mayugo.net/admin/images/categoria/gestion-de-operaciones.png" alt="Woman's Face">
          <p class="text-gray-700 dark:text-white text-sm font-medium" >
            {{$curso->cursos->nom}}
          </p>
        </div>
        
        {{-- @livewire('curso-inscripcion',['asignado_id'=>$curso->idasig,
          'predsct'=>$curso->cursos->predsct,'precio_venta'=>$curso->cursos->precio]) --}}
          {{-- @livewire('historial-video',['asignado_id'=>$asignacion->inscrito->id])--}}
        </div>
      </div>
      @endforeach  
    
    </div>
  @if (!Auth::guest())
    @include('menu.nav-right')
  @endif
</div>
