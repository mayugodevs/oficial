<div x-data="modal_alpine()">
    <input type="text" placeholder="Buscar un alumno" wire:model="search">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    ID entrega
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Estudiante
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Email
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Curso
                </th>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nota / Ver
                </th>
                
                
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($tareas as $tarea)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{$tarea->identrega}}  
                        </div>
                    </td>                   
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{$tarea->alumno->nombres}}
                        </div>
                    </td>                   
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{$tarea->alumno->email}} 
                        </div>
                    </td>                   
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{$tarea->cursoInscripcion->cursoAsignacion->curso->nom}}
                        </div>
                    </td>                   
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <input type="number" onkeypress="validar_nota_grab(event, this.value, {{$tarea->idtarea}} , {{$tarea->alumno->idalum}})" placeholder="poner nota" > 
                            <button x-on:click="abrirModal" wire:click="save_file({{$tarea->idtarea}},{{$tarea->alumno->idalum}})">Ver</button>
                        </div>
                    </td>                   
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    @if ($tareas->count())
        {{ $tareas->links() }}
    @else
        No se encontro para  "{{ $search }}"
    @endif

   
    <div class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" x-show="modal" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modal }">
        <div class="modal relative w-auto my-6 mx-auto max-w-6xl bg bg-gray-400" 
            >
                              
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                
                <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        Ver tareas 
                    </h3> 
                    <button
                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                        <span x-on:click="cerrar()"
                            class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                            x
                        </span>
                    </button>
                </div>
                <div class="relative p-6 flex-auto   overflow-y-auto dark:bg-gray-500 bg-white-700" style="overflow:hidden">  
                    <div class="">
                        @forelse ($entregas as $entrega)
                            <div>
                                @if ($entrega->typefile == 'pdf')
                                    <div>                                    
                                        <i class="fa-solid fa-file-pdf"></i>
                                    </div>
                                    <div>
                                        <button wire:click="export('{{$entrega->archivo}}')">{{$entrega->archivo}}</button>
                                    </div>
                                @elseif($entrega->typefile == 'xlsx')
                                    <div>                                    
                                        <i class="fa-solid fa-file-excel"></i>
                                    </div>
                                    <div>
                                        <button wire:click="export('{{$entrega->archivo}}')">{{$entrega->archivo}}</button>
                                    </div>
                                @elseif($entrega->typefile == 'docx')
                                    <div>                                    
                                        <i class="fa-solid fa-file-word"></i>
                                    </div>
                                    <div>
                                        <a href="{{$entrega->archivo}}" target="_blank" rel="noopener noreferrer">{{$entrega->archivo}}</a>
                                    </div> 
                                @elseif($entrega->typefile == 'URL' || $entrega->typefile == 'url')
                                    <div>                                    
                                        <i class="fa-solid fa-link"></i>
                                    </div>
                                    <div>
                                        <a href="{{$entrega->archivo}}" target="_blank" rel="noopener noreferrer">{{$entrega->archivo}}</a>
                                    </div>
                                @else
                                    <div>                                    
                                        <i class="fa-solid fa-image"></i>
                                    </div>
                                    <div>
                                        <button wire:click="export('{{$entrega->archivo}}')">{{$entrega->archivo}}</button>
                                    </div>
                                @endif
                                Mensaje : 
                                <input type="text" value="{{$entrega->feedback}}" onkeypress="validar_grab(event, this.value, {{$entrega->identrega}})" >
                            </div>
                        @empty
                            vacio
                        @endforelse
                    </div>
                </div>
                <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                    <button
                        class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" x-on:click="cerrar()" >
                        Cancelar
                    </button>
                </div> 
            </div>
        </div>
    </div>
    @push('js')
        <script>
            function modal_alpine(){
                return {
                    modal : false,
                    abrirModal(){ 
                        this.modal = true; 
                    },
                    cerrar(){
                        this.modal = false;
                    },
                }
            }
            function validar_grab(e, valor, id) {
                tecla = (document.all) ? e.keyCode : e.which;
                if (tecla==13) {
                    Livewire.emit('save_feedback_gr', valor, id);
                }
            }
            function validar_nota_grab(e, valor, id_tarea, alumno_id) {
                tecla = (document.all) ? e.keyCode : e.which;
                if (tecla==13) {
                    if(valor >=0 && valor <=100) Livewire.emit('save_nota_gra', valor, id_tarea, alumno_id );    
                    else alertify.error('nota invalido');
                }
            }
        </script>
    @endpush
</div>
