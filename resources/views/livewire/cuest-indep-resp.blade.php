<div>
    {{-- Be like water. --}}
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="m-4">
        <div>
            @if ($slug->tipo == 'Curso')
                {{$name_test->img}} <br>
                {{$name_test->nom}}
            @else
                {{$name_test->img}} <br>
                {{$name_test->nombre}}
            @endif
        </div>
        <div wire:ignore>
            <div id="contador"></div> 
        </div>
        @if ($examen_hist)
            <div>       
                @if ($est)
                    *********Examen terminado************* <br>
                @else 
                    <div>
                        {{$pregunta->puntuacion}}  <br>
                        {{$pregunta->pregunta}} <br>
                    </div>
                    <div>
                        Pregunta {{$recorrido+1}} / {{$cant_pregts+1}} <br>
                    </div>
                    @foreach ($pregunta->indeAlternativas as $alternativa)
                        <div>
                            <input type="radio" name="resp_{{$recorrido}}" value="{{$alternativa->tipo}}" wire:model.defer="resp_opt">{{$alternativa->texto}} 
                        </div>
                    @endforeach

                    @if ($recorrido == $cant_pregts)
                        <button class="bg bg-bluefacebook" onclick="saveResp({{$recorrido}})"> Finalizar</button>
                    @else
                        <button class="bg bg-red-500" wire:click="skipRep"> Saltar</button>
                        <button class="bg bg-bluefacebook" onclick="saveResp({{$recorrido}})"> Guardar</button>                        
                    @endif
                @endif
                
            </div>
        @else   
            <div>
                Fuera de hora
            </div>            
        @endif
    </div>

    @push('js')
        <script>
            let option = false
            let hora_fin = @json($indep_hist->fecha_fin);
            if(hora_fin){
                // leer cronometro
                countDown(hora_fin, 'contador')
            }
            function saveResp(recorrido){
                option = document.querySelector(`input[name="resp_${recorrido}"]:checked`).value;
                console.log(option);
                Livewire.emit('saveResp')
                // document.querySelector(`input[name="resp_${recorrido}"]:checked`).checked = false;
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
                        Livewire.emit('searchRespOld',0,true)
                    }   
                }, 1000);                
            } 

            
        </script>
        <script>
            window.addEventListener('redirect', event => {
                location.href = `../cuestionario-resultado/${event.detail.slug}`;
            })
        </script>
    @endpush
</div>
