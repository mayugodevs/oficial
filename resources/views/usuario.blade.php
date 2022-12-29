@extends('layout')
@section('content')

    @livewire('mi-perfil',['tipo' => $slug])
    
@endsection