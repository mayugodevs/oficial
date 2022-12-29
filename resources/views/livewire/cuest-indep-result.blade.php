<div class="m-4">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div>
        @if ($slug->tipo == 'Curso')
            {{$name_test->img}} <br>
            {{$name_test->nom}}
        @else
            {{$name_test->img}} <br>
            {{$name_test->nombre}}
        @endif
        <div>
            {{$indep_hist->correctas}} correctas de {{$indep_hist->preg_total}}<br>    
            Puntuacion : {{$indep_hist->correctas *100}} <br>    
            Nota : {{$indep_hist->nota }} puntos<br>               
        </div>
    </div>
    <div>        
        @if ($reiniciar)
            Puedes volver a dar tu examen click  
            <a href="{{ route('cuest_indep_prev', ['slug'=>$slug->slug]) }}">AQUI</a> <br>
        @else
            <div wire:ignore>
                <div id="contador"></div> 
            </div>
        @endif

        @if ($nota)            
            ¡Tu puedes más!
            Para aprobar el curso necesitas al menos un promedio de 62 puntos de 100.
            Tómate un descanso y vuelve a intentar en: Puedes volver a rendir nuevamente tu evaluación.
        @else
            Felicitaciones
        @endif
        

        Historial de respuestas <br>*****<br>
        @foreach ($pregunts as $pregunt)
            @php
                $search = $pregunt->respuesta($pregunt->id);
                $result = $search ? [$search->nota < 100 ? "equis" : "check",$search->nota,$search->nota < 100 ? "bg bg-red-500" : "bg bg-green"] : ['equis',0,'bg bg-red-500'] ;
            @endphp
            <div>
                <span class="{{$result[2]}}"> {{$result[0]}}</span>
                {{$pregunt->pregunta}} :: {{$result[1]}}
            </div>            
        @endforeach
        
    </div>
    @push('js')
        <script>
            let option = false
            let hora_reinicio = @json($hora_reinicio);
            if(hora_reinicio){
                // leer cronometro
                countDown(hora_reinicio, 'contador')
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
                        // location.reload();
                        Livewire.emit('horaChange')
                    }   
                }, 1000);                
            } 

            
        </script>
    @endpush
</div>
