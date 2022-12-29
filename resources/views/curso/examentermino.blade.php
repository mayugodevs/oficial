@extends('layout')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    {{$examen}}
    @livewire('examen-termino', ['id_asig' => $id_asig])
@endsection