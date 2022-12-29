<div>
    <ul>
        @foreach ($modulos as $modulo)            
            @if ($tipo == 1)
                <li class="font-semibold">{{$modulo->nom}} {{count($modulo->cursoTareaModulos)}}</li>                
                @foreach ($modulo->cursoTareaModulos as $tarea)
                    <li>{{$tarea->tarea}}</li> 
                @endforeach
            @else
                <li class="font-semibold">{{$modulo->nom}} {{count($modulo->cursoExamenPreguntas)}}</li>                
                @foreach ($modulo->cursoExamenPreguntas as $pregunta)
                    <li>{{$pregunta->pregunta}} </li> 
                @endforeach
            @endif
        @endforeach
    </ul>
    
</div>
