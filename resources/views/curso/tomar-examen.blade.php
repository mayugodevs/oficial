@extends('layout')

@section('content')
    @if ($result == 1)
        @if ($termino)
            EXAMEN TERMINO
            <a href="{{ route('result.examen', ['id'=>$id_curso]) }}"  rel="noopener noreferrer">
                <button class="bg-green p-2 hover:bg-green_hover text-white-500" >Ver Resultados de mi examen</button>
            </a>
        @else
            <div id="contador"></div>
            <div id="numeroPreg"></div>
            ESTA DENTRO DEL EXAMEN
            MOSTRAR EXAMEN
            <div id="showExamen"></div>

        @endif
        {{--  --}}



        
    @elseif ($result == -1)
        <div id="contador"></div>
        EN POCAS HORAS PODRAS TOMAR NUEVAMNETE
        <a href="{{ route('result.examen', ['id'=>$id_curso]) }}"  rel="noopener noreferrer">
            <button class="bg-green p-2 hover:bg-green_hover text-white-500" >Ver Resultados de mi examen</button>
        </a>
    @else
        aki
        {{$cant}}
    @endif
    ***************
    

    <script>
        result = @json($result);
        termino = @json($termino);
        preguntas = @json($preguntas);
        id_asing = @json($id_curso);
        fechaFin = @json($fechaFin);
        fechaReinicio = @json($fechaReinicio);
        hora = result == 1 ? fechaFin : fechaReinicio;
        hora = !termino  ? countDown(hora, 'contador') : ''
        listaPreguntas = []
        cantPregun = 0
        preguntaActual = 1
        filtrarPreguntas(preguntas)
        

        function filtrarPreguntas(preguntas){
            a = 0;
            preguntas.forEach((pregunta,index) => {
                if(listaPreguntas.some((preguntInter) => preguntInter.idpregunta == pregunta.idpregunta)){
                    const preguntRep = listaPreguntas.map( preguntaInt => {
                        if( preguntaInt.idpregunta === pregunta.idpregunta ) {
                            preguntaInt.alternativas.push({ 
                                'idpregunta': pregunta.respuestas.idpregunta, 
                                'texto': pregunta.respuestas.texto,
                                'tipo': pregunta.respuestas.tipo,
                            })
                            return preguntaInt;
                        } 
                        else {
                            return preguntaInt;
                        }
                    })
                    listaPreguntas = [...preguntRep];

                }else{
                    if(pregunta.respuestas != undefined ){

                        listaPreguntas.push({
                            'estado': pregunta.estado, 
                            'orden': a+=1, 
                            'idpregunta': pregunta.idpregunta, 
                            'pregunta' : pregunta.pregunta , 
                            'instruccion' : pregunta.instruccion , 
                            'alternativas' : [{ 
                                'idpregunta': pregunta.respuestas.idpregunta, 
                                'texto': pregunta.respuestas.texto,
                                'tipo': pregunta.respuestas.tipo,
                            }]
                        }, 
                        );
                    }
                }

            });
            cantPregun = listaPreguntas.length
            mostrarPreguntas()
        }
        function mostrarPreguntas(){
            pregt = listaPreguntas.find( preg => preg.orden == preguntaActual)
            tb = ''
            if(!termino && result == 1){
                if(pregt.estado!=1){
                    tb += `<div class="mt-4">
                        <span class="text-gray-700">${pregt.instruccion}</span>
                    <div class="mt-2">`
                        pregt.alternativas.forEach(opcion => {
                        tb += `
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio h-6 w-6" name="opcion${pregt.orden}" id="${opcion.tipo}" value="${opcion.tipo}" >
                                <span class="ml-2">${opcion.texto}</span>
                            </label>
                            <br> `
                    });
                    // tb += `<button class="bg-red-600 hover:bg-red-800 p-1" onclick="netxPregunta(${pregt.orden},'saltar')">SALTAR</button>`
                    if(preguntaActual == cantPregun )
                        tb += `<button class="bg-green hover:bg-green_hover p-1" onclick="netxPregunta(${pregt.orden},'final')"> FINALIZAR</button>`
                    else
                        tb += `<button class="bg-red-600 hover:bg-red-800 p-1" onclick="netxPregunta(${pregt.orden},'saltar')">SALTAR</button><button class="bg-green hover:bg-green_hover p-1" onclick="netxPregunta(${pregt.orden},'normal')"> SIGUIENTE</button>`
                    tb += `</div>
                        </div>`
                }else{
                    preguntaActual+=1
                    mostrarPreguntas()
                }
                document.getElementById('showExamen').innerHTML = tb
                document.getElementById('numeroPreg').innerHTML = preguntaActual+'/'+cantPregun
            }
            
        }

        option =0
        function netxPregunta(pregAct,tipo){
            console.log(pregAct);
            idPregunt = listaPreguntas.find((index, k) => k == pregAct-1 ).idpregunta
            if(tipo == 'normal' || tipo=='final'){
               
                if(document.querySelector(`input[name=opcion${preguntaActual}]:checked`)){
                    console.log(`opcion${preguntaActual}`);
                    option = document.querySelector(`input[name=opcion${preguntaActual}]:checked`).value
                    
                }else{
                    console.log('seleccione alguna respuesta');
                    return 0;
                }
                
            }else{
                option = -1
            }
            console.log(option);
            console.log(idPregunt);
            axios.post('../../mandarRespuesta', {
                idPregunta: parseInt(idPregunt),
                option: parseInt(option),
            })
            .then( result => {
                if(tipo == 'final'){
                    console.log('finalizo preguntas felicitaciones');
                    document.getElementById('showExamen').innerHTML = ''
                    window.location.replace(`../../examen-informe/resultados/${id_asing}`);
                }else{
                    console.log(result.data.resultado);
                    preguntaActual +=1
                    mostrarPreguntas()
                }
            })
            .catch( (e) => console.log(e));
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
        

        opcionAlumno =0;
        function guardarRespuesta(idPregunta, respuesta){
            if(opcionAlumno != 0){
                console.log(opcionAlumno);

                console.log('mandando resp...');
                axios.post('../../mandarRespuesta', {
                    idPregunta: idPregunta,
                    opcionAlumno: opcionAlumno,
                    nota: respuesta == opcionAlumno ? 100 : 0 
                })
                .then( result => {
                    console.log(result.data.resultado);
                    opcionAlumno = 0
                    // setTimeout(() => {  
                    //     if(result.data.resultado)
                    //         window.location.href=`certificado?idCert=${id}`;
                    //     else
                    //         alertaError('NO SE ENCONTRO CODIGO CERTIFICADO', 'resultCerti' )
                    // }, 2000);
                })
                .catch( (e) => console.log(e));
            }else{
                console.log('No seleccionaste alguna opción');
            }
            

        }
        function darOpcion(opcionValor){
            opcionAlumno = opcionValor
        }
    </script>
@endsection
