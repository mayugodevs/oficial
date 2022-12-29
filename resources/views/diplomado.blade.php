@extends('layout')

@section('content')
    <h3>Clases en vivo</h3>
    {{--     @foreach ($clases as $item)
        <strong>{{$item->modulo}}</strong>
        <hr>
        @foreach ($item->subModulos as $item)
        {{$item->submodulo}}
        <hr>
        @endforeach
        <hr>
    @endforeach    --}}
    <strong>-------------------------</strong>
   <h3>Vídeo clases a tu ritmo</h3>
   {{--    @foreach ($cursos as $item)
        <strong>{{$item->asignado->curso->nom}}</strong>
        <hr>
        @foreach ($item->asignado->curso->contenidos as $item)
            {{ $item->nom}}
            <hr>
        @endforeach
    @endforeach    --}}
    <strong>------------------</strong>
    <h3>Docentes</h3>
    {{--
    @foreach ($instructores as $item)
        {{$item->instructor->nombres}}
        <hr>
    @endforeach --}}
    <strong><h3>Empresas que respaldan</h3></strong>
    {{-- <x-empresas /> --}}
    @foreach ($empresas as $item)
        {{$item->empresa->empresa}} 
        <strong>{{$item->empresa->imagen}} </strong>
        {{$item->empresa->url}} <hr>
    @endforeach

    <strong><h3>Comentarios</h3></strong>
    {{--     @foreach ($comentarios as $item)
        Id:{{$item->idcomentario}} <hr>
        Comentario : {{$item->comentario}}
        <strong> Fecha : {{$item->fecha}} </strong>
        <x-usuario iduser="{{$item->iduser}}" />
        <div>
            Respuestas:
            <x-diplomado-respuestas idcomentario="{{$item->idcomentario}}" />
        </div>
        <hr>
    @endforeach --}}

    {{-- <x-diplomado-frecuentes /> --}}
@endsection