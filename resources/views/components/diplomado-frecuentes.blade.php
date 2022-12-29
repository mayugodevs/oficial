<div>
    <strong>Preguntas frecuentes</strong>
    <hr>
    @foreach ($preguntas as $item)
        <strong>{{$item->pregunta}}</strong>
        <hr>    
        <i>{{$item->respuesta}}</i>
        <hr>    
    @endforeach
</div>