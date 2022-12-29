<div>
    {{$idLive}}
    <br>
    CREAR PREGUNTA
    <br>
    <input type="text" wire:model="pregunta" placeholder="Escribe la pregunta o encuesta">
    <br>
    <x-jet-button wire:click="addPreg">Agregar</x-jet-button>
          <x-jet-button wire:click="remPreg">Quitar</x-jet-button>
    @for ($i = 1; $i <= $pregMin; $i++)
        @if ($i == 1)
            <div class="form-check">
                <input class="form-check-input" type="radio" checked name="respuesta" id="res_1" wire:click="$set('option', {{$i}})"  >
                <label class="form-check-label" for="res1">
                <input type="text"  wire:model.defer="option_1">
                </label>
            </div>  
        @else                  
            <div class="form-check">
                <input class="form-check-input" type="radio" name="respuesta" id="res_1" wire:click="$set('option', {{$i}})"  >
                <label class="form-check-label" for="res1">
                <input type="text" wire:model.defer="option_{{$i}}">
                </label>
            </div>
        @endif
    @endfor

    <input type="button" value="CREAR" wire:click="createQuestion">
    <br>
    <br>
    <br>
    <br>

    @forelse ($listsQuestions as $question)
        <input type="button" value="Lanzar Pregunta" wire:click="statusQuestion({{$question->id}},1)">
        <input type="button" value="Ocultar Pregunta" wire:click="statusQuestion({{$question->id}},0)">
        <p>{{$question->pregunta}}</p>
        <br>
    @empty
        AUN NO TIENES PREGUNTAS
    @endforelse
   
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
    
        var pusher = new Pusher('d4e5166d0e59392a23cb', {
          cluster: 'us2'
        });
    
        var channel = pusher.subscribe('h-channel');
        channel.bind('h-event', function(data) {
            window.livewire.emit('activePregunta',data)
        });
    </script>
</div>
