<div>
    {{$textod}}
    @foreach ($opciones as $opcion)
        <label class="inline-flex items-center">
            <input type="radio" class="form-radio h-6 w-6" name="{{$idp}}" id="{{$opcion->idopcion}}">
            <span class="ml-2">{{$opcion->texto}}</span>
        </label>
    @endforeach
    <button class="bg-red-600 hover:bg-red-800 p-1">SALTAR</button>
    <button class="bg-green hover:bg-green_hover p-1" wire:click="guardarRespuesta"> SIGUIENTE</button>
</div>
