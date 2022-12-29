<div class="text-center" x-data="modal_notas_info()">
    <br>
    <br>
    <br>
    <br>
    <div>
        <input type="text" placeholder="Buscar alumno" wire:model.defer="email" 
            wire:keydown.enter="search_users" value="jlsc.hco">
        {{-- <input type="button" value="EXCEL" wire:click="excel_download"> --}}
    </div>
    <div class="p-8">
        <table class="table-auto">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Email</th>
                    <th>Curso</th>
                    <th>Etiqueta</th>
                    <th>Descarga</th>
                    <th>Hist. Video</th>
                    <th>Certificado</th>
                    <th>Notas</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($inscripciones as $inscripcion)
                    <tr>
                        <td>{{$inscripcion->idalum}}</td>
                        <td>{{$inscripcion->alumno->nombres}} {{$inscripcion->alumno->apellidos}}</td>
                        <td>{{$inscripcion->alumno->email}}</td>
                        <td>{{$inscripcion->cursoAsignacion->curso->nom}}</td>
                        <td>{{$inscripcion->tipo_pago}}</td>
                        <td>{{$inscripcion->count_archivos($inscripcion->cursoAsignacion->idasig, $inscripcion->idinsc)}}</td>
                        <td> <x-historial-video cursoid="{{$inscripcion->cursoAsignacion->curso->idcur}}" /> </td>
                        <td> 
                            <div>
                                @if ($inscripcion->cursoCertificado)
                                    <button class="p-2 bg bg-green">Ver Certi</button>
                                @else
                                    <span class="p-2 bg bg-red-300"><strong>Sin certificado</strong></span>
                                @endif
                            </div> 
                        </td>
                        <td wire:click="ver_tareas({{$inscripcion->idinsc}})" x-on:click="abrir_modal()">
                            {{$inscripcion->nota_final($inscripcion->idinsc)}}
                        </td>
                    </tr>                    
                @empty
                    <tr class="col-span-3">No se encontro alumno</tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div  class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" x-show="modal" 
        :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modal }">
        <div class="modal relative w-auto my-6 mx-auto max-w-6xl bg bg-gray-400" 
            {{-- @click.away="modal = false" --}}>
                              
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                
                <!-- Aqui empieza el modal -->
                <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        Detalles de entregas de tareas y examen
                    </h3> 
                    <button
                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                        <span x-on:click="cerrar_modal()"
                            class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                            x
                        </span>
                    </button>
                </div>
                <div class="relative p-6 flex-auto   overflow-y-auto dark:bg-gray-500 bg-white-700" style="overflow:hidden">  
                    <table>
                        <thead>
                            <tr>
                                <th>Tarea</th>
                                <th>Tipo</th>
                                <th>Nota</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tareas as $tarea)
                                
                           
                                <tr>
                                    <td>{{$tarea->tarea}}</td>
                                    <td>{{$tarea->tipo}}</td>
                                    <td> 
                                        @if ($tarea->verificar_entrega)                                    
                                            @if ($tarea->verificar_entrega->idalumno == $user_insc)
                                                @if ($tarea->verificar_entrega->nota !== NULL)
                                                    {{$tarea->verificar_entrega->nota}}
                                                @else
                                                    NR
                                                @endif
                                            @else
                                                NE   
                                            @endif
                                        @else
                                            NE
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                No hay tareas que mostrar
                            @endforelse
                            <div>
                                @if ($examen)
                                    <tr>
                                        <td class="col-span-2">Nota Examen</td>
                                        <td class="col-span-3">{{$examen}}</td>
                                    </tr>
                                @endif
                            </div>
                        </tbody>
                    </table>
                </div>
                <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                    <button
                        class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" x-on:click="cerrar_modal()" >
                        Cerrar
                    </button>
                </div>
                <!-- Aqui empieza el modal -->
            </div>
        </div>
    </div>
    @push('js')
        <script>
            function modal_notas_info(){
                return {
                    modal : false,
                    abrir_modal(){
                        this.modal = true;
                    },
                    cerrar_modal(){
                        this.modal = false;
                    }
                }
            }
        </script>
    @endpush

    {{-- <div class="p-8"> --}}
        {{-- <livewire:datatable
            model="App\Models\Pais"
            searchable="pais"
            exportable="true"
        > --}}
        {{-- <livewire:users-table /> --}}
    {{-- </div> --}}
</div>
