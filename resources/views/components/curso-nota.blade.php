<div>
    <table class="table text-gray-400 border-separate w-full  text-center  space-y-6 text-sm -mx-0 px-3">
                            
        <thead class="dark:bg-gray-800 bg-gray-400  w-full ">
            <tr class="">
                
                <th class="p-3 text-left dark:text-white-500 text-gray-800">ACTIVIDADES</th>
                <th class="p-3 text-left dark:text-white-500 text-gray-800">TIPO</th>
                <th class="p-3 text-left dark:text-white-500 text-gray-800 rounded-r-lg">PUNTUACION</th>
                
            </tr>
        </thead>
        <tbody>
            @php
                $notaExamen = $examen != 'ND' ? $examen : 0;
                $cantExa = $examen !== false ? 1 : 0;
                $cantTareas = count($home_works);

                $cantPrac = 0;
                $promedioPrac = 0;
                $cantProy = 0;
                $promedioProy = 0;
            @endphp
            @if ($examen !== false )                                   
                <tr class="dark:bg-gray-800 bg-gray-400 ">
                    <td class="p-3 text-left text-gray-800 dark:text-white-500 ">
                        Examen
                    </td>
                    <td class="p-3 font-bold dark:text-white-500 text-gray-800 text-left">
                        {{$cantTareas > 0 ? '(0.4)' : ''}}
                    </td>
                    @if ($examen !== 'ND' && $examen >= 62)
                        <td class="p-3 rounded-r-lg">                                                    
                            <div class="bg-blue dark:text-white-500  text-white-500 rounded-md  py-1 mx-2"> {{$examen}}</div>
                        </td> 
                    @else
                        <td class="p-3 rounded-r-lg">                                                    
                            <div class="bg-red-400 dark:text-white-500  text-white-500 rounded-md  py-1 mx-2"> {{$examen}}</div>
                        </td> 
                    @endif
                                                          
                </tr>
            @endif
            
            @foreach ($home_works as $tareas)
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
                    @php
                        $homNota = $tareas->tareaEntregas->first();
                    @endphp
                    @if ($homNota)
                        @if ($homNota->nota > 0)
                            <td class="p-3 rounded-r-lg">
                                <span class="bg-blue dark:text-white-500 text-white-500 rounded-md py-2 mx-3 px-2 text-left">
                                    @php
                                        if ($homNota->cursoTareaModulo->tipo == 'Proyecto') {
                                            $promedioProy += intval($homNota->nota)*0.6;
                                            $cantProy +=1;
                                        } else {
                                            $promedioPrac += intval($homNota->nota)*0.4;
                                            $cantPrac +=1;
                                        }
                                        
                                    @endphp
                                    {{$homNota->nota}}
                                </span>
                            </td> 
                        @else
                            <td class="p-3 rounded-r-lg">                                                    
                                <div class="bg-red-400 dark:text-white-500  text-white-500 rounded-md  py-1 mx-2"> NR</div>
                            </td>                            
                        @endif   
                    @else
                        <td class="p-3 rounded-r-lg">                                                    
                            <div class="bg-red-400 dark:text-white-500  text-white-500 rounded-md  py-1 mx-2"> NE</div>
                        </td>
                    @endif                   
                </tr>
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
                
                <td class="p-3 text-left text-gray-800 dark:text-white-500 " colspan="2">
                    Promedio Final	
                </td>
                <td class="p-3 rounded-r-lg">
                    <span class="bg-green-400 dark:text-white-500 text-gray-800 rounded-md px-2 text-left "> {{$notaFinal}}</span>
                </td>
                
            </tr>
            
            
        </tbody>
    </table>
    
</div>