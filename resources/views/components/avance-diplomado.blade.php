<div>

    {{-- @foreach ($asignado->inscripciones->where('idalum','10694')->where('asignados_idasig',$idasig)->get() as $item)
        {{$item->certificado}}
    @endforeach --}}
    {{$diplomado_cursos}}
    {{-- @foreach ($diplomado_cursos as $diplomado_curso)
        <strong>{{$diplomado_curso}} </strong>
    @endforeach --}}

</div>