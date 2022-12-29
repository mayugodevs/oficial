<div>
    <br>
    <br>
    <br>
    <br>
    <br>
    {{$optionResp}}
    <hr>
    {{$mensaje}}
    <hr>
    @if ($result == 1)
        ESTA DENTRO DEL EXAMEN
        {{$fechaFin}}
        MOSTRAR EXAMEN
        @php
            $id = 0;
        @endphp
        @foreach ($cursoModulos as $modulo)
            @foreach ($modulo->cursoExamenPreguntas as $pregunta)
                <div class="mt-4">
                    <span class="text-gray-700">{{$pregunta->idpregunta}}-{{$pregunta->instruccion}}</span>
                    <div class="mt-2">
                        @php
                            $id +=1;
                        @endphp
                        @foreach ($pregunta->cursoExamPregtOpcs as $opcion)
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio h-6 w-6" name="{{$id}}" id="{{$opcion->idopcion}}" wire:click="darOpcion({{$opcion->tipo}})">
                                <span class="ml-2">{{$opcion->texto}}</span>
                            </label>
                        @endforeach
                        <button class="bg-red-600 hover:bg-red-800 p-1" >SALTAR</button>
                        <button class="bg-green hover:bg-green_hover p-1" wire:click="guardarRespuesta({{$pregunta->idpregunta}},{{$pregunta->val_proyecto}})"> SIGUIENTE</button>
                    </div>
                </div>
            @endforeach
        @endforeach 
    @elseif ($result == -1)
        EN POCAS HORAS PODRAS TOMAR NUEVAMNETE
        {{$fechaReinicio}}
    @else
        MOSTRAR EL CHECK PARA ACEPTAR
        ACEPTAR TERMINOS Y CONDICIONES DEL CURSO <h2 class="font-semibold">{{$datos_curso}}</h2> y mas floro abajo

        <label class="inline-flex items-center">
            <input type="checkbox" class="form-checkbox" id="validarExam" >
            <span class="ml-2">Option 1</span>
        </label>
        <a href="{{ route('tomar.examen', ['id'=>$id_curso]) }}"  rel="noopener noreferrer">
            <button class="bg-green p-2 hover:bg-green_hover text-white-500" onclick="validarTerminos({{$id_curso}},{{$cantPreg}})" >Aceptar</button>
        </a>
    @endif
</div>
