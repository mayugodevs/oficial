<div >
    <style>
        .estilo{
            height: 400px;
        }
        .estilo_curso{
            height: 200px;
        }
        .table {
            border-spacing: 0 15px;
        }
    
        i {
            font-size: 1rem !important;
        }
    
        .table tr {
            border-radius: 20px;
        }
    
        tr td:nth-child(n+5),
        tr th:nth-child(n+5) {
            border-radius: 0 .625rem .625rem 0;
        }
    
        tr td:nth-child(1),
        tr th:nth-child(1) {
            border-radius: .625rem 0 0 .625rem;
        }
    </style>
    
   {{-- <div class="dark:text-white-500 text-gray-700 font-serif"> aqui mostrar los certificados por curso </div> --}}
    <div class="grid grid-cols-1 justify-center  sm:grid-cols-2 md:grid-cols-3 estilo lg:grid-cols-3 py-2 mt-2 xl:grid-cols-4 text-center mx-10 ">
        <ul>
            {{-- CERTIFICADOS POR CURSOS --}}
            @foreach ($cursos_comprados as $curso)
                <a wire:click="showCertificado({{$curso->cursoAsignacion->idasig}})">
                    <li>
                        <div class="space-y-0.8 dark:bg-gray-700 bg-white-900 mt-4 estilo_curso rounded-md ">
                        
                        <img class="block mx-auto h-24 rounded-full  sm:flex-shrink-0 py-2"
                        src="{{asset(''.$curso->img.'')}}" alt="{{$curso->img}}">
                            <p class="text-gray-900 dark:text-white-500 font-serif" >
                                {{$curso->nom}}
                            </p>                            
                            <div class="mx-4">
                                <button class="items-center flex justify-center w-full bg-transparent p-1 py-1 px-4   hover:bg-purple text-gray-600 font-semibold hover:text-whitetext dark:text-whitetext duration-200 border-2  border-purple hover:border-transparent rounded">
                                    Ir a clase&nbsp;<span class="lnr lnr-arrow-right font-bold"></span>
                                </button>
                            </div>
                        </div>                        
                    </li>
                </a>                
            @endforeach
            {{-- CERTIFICADOS EXTRAS --}}
            @forelse ($othersDiplomados as $diplomado)
                <a wire:click="showCertDiplom({{$diplomado->idpay}})">
                    <li>
                        <div class="space-y-0.8 dark:bg-gray-700 bg-white-900 mt-4 estilo_curso rounded-md ">
                        <img class="block mx-auto h-24 rounded-full  sm:flex-shrink-0 py-2"
                        src="{{asset(''.$diplomado->diplomadoGrupo->diplomado->logo.'')}}" >
                            <p class="text-gray-900 dark:text-white-500 font-serif" >
                                {{$diplomado->diplomadoGrupo->titulo }}
                            </p>
                        </div>
                    </li>
                </a>
            @empty
                VACIO 
            @endforelse

        </ul>

        <div class="dark:bg-gray-700 bg-white-900 px-1 mx-3 pt-3 col col-span-2 xl:col-span-3 mt-4 rounded-md dark:text-white-500 text-gray-700 font-serif ">
            <div class="col-span-4">
                <div class="overflow-auto lg:overflow-visible ">
                    @if ($tipo != 0)
                        <div class="text-left mx-4 py-2">
                            
                            @if ($urlCertificado != 0)
                                <button class="bg-gray-600 text-white-500 text-justify rounded-md px-4">
                                    Ver Certificado
                                </button>
                                {{$urlCertificado}}
                            @else
                                <button class="bg-gray-600 text-white-500 text-justify rounded-md px-4">
                                    Solicitar Certificado
                                </button>
                                
                            @endif
                        </div>
                    @endif   
                    @if ($tipo == 1)                     
                        <table class="table text-gray-400 border-separate w-full  text-center  space-y-6 text-sm -mx-0 px-3">
                            
                            <thead class="dark:bg-gray-800 bg-gray-400  w-full ">
                                <tr class="">
                                    
                                    <th class="p-3 text-left dark:text-white-500 text-gray-800">ACTIVIDADES</th>
                                    <th class="p-3 text-left dark:text-white-500 text-gray-800">TIPO</th>
                                    <th class="p-3 text-left dark:text-white-500 text-gray-800 rounded-r-lg">PUNTUACION</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @if ($cantExa > 0)                                    
                                    <tr class="dark:bg-gray-800 bg-gray-400 ">
                                        <td class="p-3 text-left text-gray-800 dark:text-white-500 ">
                                            Examen
                                        </td>
                                        <td class="p-3 font-bold dark:text-white-500 text-gray-800 text-left">
                                            {{$cantTareas > 0 ? '(0.4)' : ''}}
                                        </td>
                                        <td class="p-3 rounded-r-lg">
                                            <span class="bg-green-400 dark:text-white-500 text-gray-800 rounded-md px-2 text-left "> {{$notaExamen}}</span>
                                        </td>                                        
                                    </tr>
                                @endif
                                @php
                                    $cantPrac = 0;
                                    $promedioPrac = 0;
                                    $cantProy = 0;
                                    $promedioProy = 0;
                                @endphp
                                @foreach ($modulos as $modulo)
                                
                                    @foreach ($modulo->cursoTareaModulos as $tareas)
                                        <tr class="dark:bg-gray-800 bg-gray-400">
                                            <td class="p-3 text-left dark:text-white-500 text-gray-800">
                                                {{$tareas->tarea}}
                                            </td>
                                            <td class="p-3 font-bold text-left dark:text-white-500 text-gray-800">
                                                @php
                                                    $ti = $tareas->tipo == 'Proyecto' ? '(0.6)' : '(0.4)';
                                                @endphp
                                                {{$tareas->tipo }} {{$ti}}
                                            </td>
                                            @forelse ($tareas->cursoTareaEntregas->where('idalumno',$user->idalum) as $entrega)
                                                <td class="p-3 rounded-r-lg">
                                                    <span class="bg-blue dark:text-white-500 text-white-500 rounded-md py-2 mx-3 px-2 text-left">
                                                        @php
                                                            // $promedioPrac += $entrega->cursoTareaModulo->tipo == 'Proyecto' ? intval($entrega->nota)*0.6 :intval($entrega->nota)*0.4;
                                                            if ($entrega->cursoTareaModulo->tipo == 'Proyecto') {
                                                                $promedioProy += intval($entrega->nota)*0.6;
                                                                $cantProy +=1;
                                                            } else {
                                                                $promedioPrac += intval($entrega->nota)*0.4;
                                                                $cantPrac +=1;
                                                            }
                                                            
                                                        @endphp
                                                        {{$entrega->nota}}
                                                    </span>
                                                </td>
                                            @empty
                                                <td class="p-3 rounded-r-lg">                                                    
                                                    <div class="bg-red-400 dark:text-white-500  text-white-500 rounded-md  py-1 mx-2"> NO ENVIADO</div>
                                                </td>
                                            @endforelse
                                        </tr>
                                    @endforeach
                                @endforeach
                                @php
                                    $notaFinal = 0;
                                    $promePrac = $cantPrac >  0 ? ($cantExa > 0 ? ($promedioPrac+$notaExamen*0.4)/($cantPrac+1) : $promedioPrac/$cantPrac) : $notaExamen*0.4 ;
                                    $promeProy = $cantProy > 0 ? $promedioProy/$cantProy : 0;
                                    if ($cantExa > 0 && $cantTareas == 0) {
                                        $notaFinal = $notaExamen;
                                    }elseif ($cantExa > 0 && $cantTareas > 0) {
                                        $notaFinal =$promePrac+$promeProy;
                                    }elseif ($cantExa == 0 && $cantTareas > 0) {
                                        $notaFinal = $promePrac+$promeProy;
                                    }
                                @endphp
                                <tr class="dark:bg-gray-800 bg-gray-400 ">
                                    
                                    <td class="p-3 text-left text-gray-800 dark:text-white-500 ">
                                        Promedio Final	
                                    </td>
                                    <td class="p-3 font-bold dark:text-white-500 text-gray-800 text-left">
                                    </td>
                                    <td class="p-3 rounded-r-lg">
                                        <span class="bg-green-400 dark:text-white-500 text-gray-800 rounded-md px-2 text-left "> {{$notaFinal}}</span>
                                    </td>
                                    
                                </tr>
                                
                                
                            </tbody>
                        </table>
                    @elseif($tipo == 2)
                        {{$detDiplomad}}
                    @endif 
                    
                </div>
            
            </div>
        </div>
    </div>

    <br>
    
</div>
 
