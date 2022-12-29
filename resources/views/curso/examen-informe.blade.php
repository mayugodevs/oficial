@extends('layout')

@section('content')
    {{$datos_curso}}
    <br>
    <br>
    <br>
    <br>
    <br>
    @if ($result == 1)
        @if ($termino)
            EXAMEN TERMINO
            <a href="{{ route('result.examen', ['id'=>$id_curso]) }}"  rel="noopener noreferrer">
                <button class="bg-green p-2 hover:bg-green_hover text-white-500" >Ver Resultados de mi examen</button>
            </a>
        @else
            <div id="contador"></div>
            ESTA DENTRO DEL EXAMEN 
            
            <a href="{{ route('tomar.examen', ['id'=>$id_curso]) }}"  rel="noopener noreferrer">
                <button class="bg-green p-2 hover:bg-green_hover text-white-500" >Ir al examen en curso</button>
            </a>
        @endif
    @elseif ($result == -1)
        <div id="contador"></div>
        EN POCAS HORAS PODRAS TOMAR NUEVAMNETE
        <a href="{{ route('result.examen', ['id'=>$id_curso]) }}"  rel="noopener noreferrer">
            <button class="bg-green p-2 hover:bg-green_hover text-white-500" >Ver Resultados de mi examen</button>
        </a>
        
    @elseif ($result == 0)
        {{-- MOSTRAR EL CHECK PARA ACEPTAR --}}
        ACEPTAR TERMINOS Y CONDICIONES DEL CURSO <h2 class="font-semibold">{{$datos_curso}}</h2> y mas floro abajo

        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox" id="validarExam" >
            <span class="ml-2">Option 1</span>
        </label>
        <button class="bg-green p-2 hover:bg-green_hover text-white-500" 
            onclick="validarTerminos({{$id_curso}},{{$cantPreg}})" >Aceptar</button>
        
    @endif

    

    

    <script>
        result = @json($result);
        termino = @json($termino);
        fechaFin = @json($fechaFin);
        fechaReinicio = @json($fechaReinicio);
        hora = result == 1 ? fechaFin : fechaReinicio;
        
        hora = !termino ? result!=0 ? countDown(hora, 'contador','acabo') : '' : ''
        
        function validarTerminos(idAsig,cantPreg){
            if(document.getElementById('validarExam').checked){
                cantTiempo = parseInt(cantPreg)*2
                axios.post('../validarTerminos',{
                    idAsig: idAsig,                         
                    fechaFin: cantTiempo,          
                })
                .then( response => {
                    window.location.replace(`../examen-informe/tomar/${idAsig}`);
                    console.log(response.data.resultado);
                })
            }else{
                console.log('falta activar....');
                return;
            }
            
        }

        const cronometro = tiempo_final => {
            let now = new Date(),
                remainTime = (new Date(tiempo_final) - now + 1000) / 1000,
                remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
                remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
                remainHours = ('0' + Math.floor(remainTime / 3660 % 24)).slice(-2);
            
            return {
                remainTime,
                remainSeconds,
                remainMinutes,
                remainHours,
            }

        }

        function countDown (tiempo_final, elemt,  finallMensaje)  {
            el = document.getElementById(elemt)
            const timerUpdate = setInterval(() => {
                t = cronometro(tiempo_final)
                document.getElementById(elemt).innerHTML = `${t.remainHours} H : ${t.remainMinutes} S : ${t.remainSeconds} M `
                if(t.remainTime <= 1){
                    clearInterval(timerUpdate)
                    location.reload();
                }   
            }, 1000);
            
        }
    </script>
@endsection
