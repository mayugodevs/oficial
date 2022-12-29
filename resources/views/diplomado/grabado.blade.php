@extends('layout')

@section('content')
 <br>
 <br>
 <br>
 <br>
 <br>
    {{$diplomado_grupo->titulo}}

    <div class="grid grid-cols-4 gap-4 text-center">
        <div>
            <ul>
                <li>Comentarios</li>
                <li>Clases en vivo</li>
                <li>Tareas</li>
                <li>Proyecto</li>
                <li>Notas</li>
            </ul>
        </div>
        
        <div class="col-span-3">
            <div>
                COMENTARIOS
                @livewire('diplomado-comentarios', ['id_grupo' => $diplomado_grupo->iddiplomado ])
            </div>
            -------------------------------------------------------------------------
            <div>
                Clases en VIVO <br>
                @livewire('diplomado-clases', ['id_grupo' => $diplomado_grupo->iddiplomado ])
                
            </div>
            -------------------------------------------------------------------------
            <div>
                TAREAS<br>
                @livewire('diplomado-tareas', ['id_grupo' => $diplomado_grupo->iddiplomado ])
            </div>
            -------------------------------------------------------------------------
            <div>
                Proyecto <br>
                @livewire('diplomado-proyecto', ['id_grupo' => $diplomado_grupo->iddiplomado ])
            </div>
            -------------------------------------------------------------------------
            <div>
                Mis notas <br>
                @foreach ($diplomado_grupo->diplomadoSemanas as $semana)
                    @foreach ($semana->diplomadoTareas as $tarea)
                        @if ($tarea->tipo == 'Practica')
                            @foreach ($tarea->diplTareaEntregas as $entrega)
                                {{$entrega->nota}} <br>
                            @endforeach <br>
                        @endif <br>
                        Promedio tareas 0/100
                        @if ($tarea->tipo == 'Proyecto')
                            @foreach ($tarea->diplTareaEntregas as $entrega)
                                {{$entrega->nota}} <br>
                            @endforeach <br>
                        @endif <br>

                        Promedio final 0/100
                    @endforeach <br>
                @endforeach
            </div>
            
            -------------------------------------------------------------------------
            
        </div>
    </div>
    @if (Auth::user()->tipo == 2)
        @livewire('diplomado-grupo',['id_grupo' => $diplomado_grupo->iddiplomado,'id_dipl'=>$diplomado_grupo->diplomado->iddiplomado ])
    @endif
@endsection