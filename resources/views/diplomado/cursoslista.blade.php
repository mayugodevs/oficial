@extends('layout')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <a href="hola pendejo"></a>
    <div class="px-9 mx-4">
        <div class="mx-8">
            <span class="text-2xl text-white-500 font-semibold">Programas en vivo</span>
        </div>

    </div>
    <br>

    <div class="grid lg:grid-cols-4 sm:grid-cols-1 ml:grid-cols-5 lg:px-9 lg:mx-8 sm:px-8 mx-5 ml:px-9 ml:mx-10 ">




      @include('modals.diplomadosLista')


    </div>
    <br>
    <br>
    <br>
    <br>
    @push('js')
        <script>
            function addDiplomado(diplomado_id){
                window.car_diplo = diplomado_id;
            }
        </script>
    @endpush
@endsection
