<div>
    @forelse ($listsQuestionsActive as $question)
        {{$question->pregunta }}
        <br>       
        @foreach ($question->mayulivePregAlternativas as $fffff)
            {{$fffff->alternativa}}
            {{count($fffff->mayulivePregRespts)}} <br>
        @endforeach
        _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
        <p>{{$question->pregunta}}</p>
        <br>
        @foreach ($question->mayulivePregAlternativas as $alternativa)
           
            <input type="radio" name="alternt" id="" wire:click="respuestaAlumno({{$question->id}},{{$alternativa->id}})" >{{$alternativa->alternativa}} <br>

        @endforeach
    @empty
        vacio
    @endforelse
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
    
        var pusher = new Pusher('d4e5166d0e59392a23cb', {
          cluster: 'us2'
        });
    
        var channel = pusher.subscribe('alt-channel');
        channel.bind('alt-event', function(data) {
            window.livewire.emit('porcentaje',data)
        });
    </script>
    <script>
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
                // document.getElementById(elemt).innerHTML = `${t.remainHours} H : ${t.remainMinutes} M : ${t.remainSeconds} S `
                console.log(t);
                if(t.remainTime <= 1){
                    clearInterval(timerUpdate)
                    location.reload();
                }   
            }, 1000);
            
        }
    </script>

</div>