
{{-- MODAL PREGUNTAS --}}
{{-- <div class="mt-10">
  <x-jet-dialog-modal wire:model="estadoModalPregunta" maxWidth="2xl"> 
    <x-slot name="title">
      {{$tituloModal}}
    </x-slot>
    <x-slot name="content">
      <div class="col-span-6 sm:col-span-4">
        <x-jet-label for="tit_area" value="{{ __('Titulo archivo') }}" />
        <x-jet-input id="tit_area" type="text" class="mt-1 block w-full" 
          wire:model.defer="codigoPreg" autocomplete="tit_area" placeholder="Titulo tarea" />
      </div>
      <div class="col-span-6 sm:col-span-4">
        <x-jet-label for="last_name" value="{{ __('Titulo archivo') }}" />
        <x-jet-input id="last_name" type="text" class="mt-1 block w-full" 
        wire:model.defer="preguntPreg" autocomplete="last_name" placeholder="Titulo tarea" />
      </div>
      <div class="col-span-6 sm:col-span-4">
        <x-jet-label for="last_name" value="{{ __('Titulo archivo') }}" />
        <select name="" id="puntPreg" wire:model="puntPreg">
          <option value="100" selected>100 Puntos</option>
          <option value="0">0 Puntos</option>
        </select>
      </div>
      @if ($estado == 11){{-- SI SE ESTA CREANDO LA PREGUNTA --}}
          <x-jet-button wire:click="addPreg">Agregar</x-jet-button>
          <x-jet-button wire:click="remPreg">Quitar</x-jet-button>
          <div class="m-2">
            @for ($i = 1; $i <= $pregMin; $i++)
              @if ($i == 1)
                <div class="form-check">
                  <input class="form-check-input" type="radio" checked name="respuesta" id="res_1" wire:click="$set('option', {{$i}})"  >
                  <label class="form-check-label" for="res1">
                    <input type="text"  wire:model.defer="option_1">
                  </label>
                </div>
              @else                  
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="respuesta" id="res_1" wire:click="$set('option', {{$i}})"  >
                  <label class="form-check-label" for="res1">
                    <input type="text" wire:model.defer="option_{{$i}}">
                  </label>
                </div>
              @endif
            @endfor
            
          </div>  
      @endif
    </x-slot>
    <x-slot name="footer">
      <x-jet-danger-button wire:click="cambioStatusPregunta(0,0)">
        {{ __('Cancelar')}}      
      </x-jet-danger-button>
      <x-jet-secondary-button wire:click="guardarCambios()">
        {{ __('Guardar')}}      
      </x-jet-secondary-button>
    </x-slot>
  </x-jet-dialog-modal>
</div> --}}

{{--  --}}




