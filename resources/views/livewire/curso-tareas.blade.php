<div>
    <br>
    <br>
    <br>
    <br>

    <table class="table-fixed">
        <thead>
          <tr>
            <th class="">Alumno|</th>
            @foreach ($tareas as $item)
                <th class="">{{$item->tipo}}|</th>
            @endforeach
            <th class="">Promedio|</th>
            <th class="">Certificado|</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <td>{{$alumno->nombres}}-{{$alumno->idalum}}</td>
                @php
                    $notaPra = 0;
                    $tipoPra = 0;

                    $notaPro = 0;
                    $tipoPro = 0;
                    $notaFinal = 0;
                @endphp
                @foreach ($tareas as $key => $tarea)
                    
                    <td>                       
                        @forelse ($entregas->where('idalumno',$alumno->idalum)->where('idtarea',$tarea->idtarea) as $entrega)
                        @php
                            $tarea->tipo == 'Proyecto' ? $tipoPro += 1 : $tipoPra += 1 ;
                            $tarea->tipo == 'Proyecto' ? $notaPro += $entrega->nota*0.6 : $notaPra += $entrega->nota*0.4 ;

                        @endphp
                            @if ($entrega->nota != '')
                                {{$entrega->nota}}
                            @else
                                Nota : <input type="text" name="" id="" placeholder="Ingrese nota" wire:keydown.enter="saveNota({{$entrega->identrega}})" wire:model.defer="nota">
                            @endif
                            <a href="{{$entrega->archivo}}" target="_blank" rel="noopener noreferrer"><i class="far fa-eye"></i></a>
                        @empty
                            No Subio
                        @endforelse
                    </td>
                @endforeach
                @php
                    $promPrac = $tipoPra != 0 ? $notaPra/$tipoPra : 0;
                    $promProy = $tipoPro != 0 ? $notaPro/$tipoPro : 0;
                    
                    $notaFinal = round($promPrac + $promProy);
                @endphp
                <td>**{{$notaFinal}}**</td>
                <td>33</td>
            </tr>
            @endforeach
            
          
        </tbody>
    </table>
{{-- <th class="">@livewire('curso-tarea-entrega', ['idTarea' => $tarea->idtarea, 'idAlumno' => $alumno->idalum], key($key))</th> --}}
</div>