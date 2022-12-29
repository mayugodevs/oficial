<div>
    <br>
    <br>
    <br>
    <br>
    <br>
    @if ($slug->tipo == 'Curso')
        {{$name_test->img}} <br>
        {{$name_test->nom}}
    @else
        {{$name_test->img}} <br>
        {{$name_test->nombre}}
    @endif   

    @if ($examen_hist)
        @if ($estado == 1)
            Estas en el examen aun tienes tiempo de terminar, si no te redirecciona autamaticamente dale click 
            <a href="{{ route('cuest_indep_resp', ['slug'=>$slug->slug]) }}">AQUÍ</a>
        @elseif ($estado == 2)
            termino examne ver resultados <a href="{{ route('cuest_indep_result', ['slug'=>$slug->slug]) }}">AQUÍ</a>
        @else
            termino examne ver resultados <a href="{{ route('cuest_indep_result', ['slug'=>$slug->slug]) }}">AQUÍ</a>
            Espera tiempo de <div id="contador"></div>
        @endif
    @else
        <div>
            <input type="checkbox" id="check_access">
            <button class="bg-green p-2 hover:bg-green_hover text-white-500" 
                onclick="acceptTermino()" >
                Aceptar
            </button>
        </div>
    @endif

    @push('js')
        <script>             
            let hora_reinicio = @json($hora_reinicio);    
            if(hora_reinicio){
                // leer cronometro
                countDown(hora_reinicio, 'contador')
            }
            function acceptTermino(){
                if(document.getElementById('check_access').checked) Livewire.emit('acceptTermino');
                else console.log('no validado');
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
            window.addEventListener('redirect', event => {
                location.href = `../cuestionario-responder/${event.detail.url}`;
            })            
        </script>
    @endpush
</div>
