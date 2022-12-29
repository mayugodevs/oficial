@extends('layout')

@section('content')
    <br>
    <br>
    <br>

    <div class="p-8">
        
        Hola luchano Reserva tu asesoría en línea con profesionales destacados en las industrias


        <br> Elige el servicio que mejor se adapte a tus necesidades e intereses.
        <br> Elige un horario según tu disponibilidad
        <br> Capacita a tu equipo y logra mejores resultados
        
        <br> Elige tu área de interés<br> 
        Elige un profesional en línea
        <div class="grid grid-cols-4">
            @foreach ($categorias as $cat)
                <div>
                    <img src="https://www.golfmarysierras.com/notas/images/3038_logo%20IMG.jpg" alt="" width="200px">{{--{{$cat->img}}--}}
                    {{$cat->nombre}}
                    
                </div>
            @endforeach
        </div>
    </div>
    {{-- 
        @foreach ($cat->talk_especls as $espec)
        {{$espec->trabajador->alumno->nombres}} <br>
        {{$espec->experiencia}} <br>
        
        @livewire('interesado-talk', ['id_esp' => $espec->id])
        
        <br>
        @endforeach
        
        --}}
@endsection