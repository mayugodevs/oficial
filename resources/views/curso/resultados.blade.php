@extends('layout')

@section('content')
    <div id="contador"></div>
    {{$cursoNombre}}
    {{$cant}}/
    {{$puntaje}}
    <div id="notas"></div>
    <div id="listaResultados">

    </div>
    <script>
        preguntas = @json($preguntas);/* DIEGO ESTE OBJETO TIENE TODAS DATOS DE LOS RESULTADOS */
        idAsign = @json($idAsign);
        idHistorial = @json($idHistorial);
        reinicio = @json($reinicio);
        notaFinal = 0;
        leer()
        console.log(reinicio);
        countDown(reinicio, 'contador')
        function leer(){
            tb = ''
            preguntas.forEach(pregunta => {
                tb +=`${pregunta.pregunta} <br>.....<hr>`
            });
            document.getElementById('listaResultados').innerHTML = tb
            cantPreg = preguntas.length;
            preguntAct = preguntas.filter( pregunta => pregunta.estado == 1)
            puntaje = preguntAct.reduce( (total, pregunta) => total + pregunta.nota,0)
            notaFinal = parseInt(puntaje)/parseInt(cantPreg)
            document.getElementById('notas').innerHTML = `cantPreg : ${cantPreg} / Puntaje : ${puntaje} / Nota : ${notaFinal}`
            setTimeout(() => {
                saveNota()
                
            }, 2000);
        }

        function saveNota(){
            url ='../../saveNota'
            const params = {
                idAsign: idAsign,
                idHistorial: idHistorial,
                notaFinal: notaFinal,
            };
            axios.post(url,params)
            .then(res => {
                console.log(res.data);
            })
            .catch(err => {
                console.error(err); 
            });
        }

        function cronometro(tiempo_final) {
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

        function countDown(tiempo_final, elemt)  {
            el = document.getElementById(elemt)
            const timerUpdate = setInterval(() => {
                t = cronometro(tiempo_final)
                document.getElementById(elemt).innerHTML = `${t.remainHours} H : ${t.remainMinutes} M : ${t.remainSeconds} S `
                if(t.remainTime <= 1){
                    clearInterval(timerUpdate)
                    location.reload();
                }   
            }, 1000);
            
        }
                
    </script>
@endsection
