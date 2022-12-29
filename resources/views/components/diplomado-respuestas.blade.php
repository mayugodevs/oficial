<div>
    @foreach ($respuestas as $item)
        <i>
            Comentario : {{$item->respuesta}}
            <strong> Fecha : {{$item->fecha}} </strong>
            <x-usuario iduser="{{$item->iduser}}" />
        </i>
    @endforeach
    {{-- {{$respuestas}} --}}
</div>