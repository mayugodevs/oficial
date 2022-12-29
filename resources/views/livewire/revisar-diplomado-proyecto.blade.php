<div x-data="modal_alpine3()">
    
    <input type="text" placeholder="Buscar un alumno" wire:model="search">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col"
                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    ID Entrega
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
                    Especializacion
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
                            {{$tarea->id}} 
                        </div>
                    </td>                   
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{$tarea->diplpay->alumno->nombres}}
                        </div>
                    </td>                   
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{$tarea->diplpay->alumno->email}}
                        </div>
                    </td>                   
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            {{$tarea->diplpay->diplomado_grupo->titulo}}
                        </div>
                    </td>                   
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <input type="number" onkeypress="validar_nota_proy(event, this.value, {{$tarea->dipl_proy_id}} , {{$tarea->dipl_pag_id}})" placeholder="poner nota" >                             
                            <button x-on:click="abrirModal" wire:click="show_entrega({{$tarea->dipl_proy_id}},{{$tarea->dipl_pag_id}})">Ver</button>
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
            @click.away="modal = false">
                              
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                
                <!-- Aqui empieza el modal -->
                <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        Ver tareas 
                    </h3> 
                    <button
                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                        <span
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
                                <input type="text" value="{{$entrega->feedback}}" onkeypress="validar_feed(event, this.value, {{$entrega->id}})" >
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
                <!-- Aqui empieza el modal -->
            </div>
        </div>
    </div>
    @push('js')
        <script>
            function modal_alpine3(){
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
            function validar_feed(e, valor, id) {
                tecla = (document.all) ? e.keyCode : e.which;
                if (tecla==13) { 
                    Livewire.emit('save_feedback_proy', valor, id);
                }
            }
            function validar_nota_proy(e, valor, id_tarea, pay_id) {
                tecla = (document.all) ? e.keyCode : e.which;
                if (tecla==13) {                    
                    if(valor >=0 && valor <=100) Livewire.emit('save_nota_pr', valor, id_tarea, pay_id );   
                    else alertify.error('nota invalido');
                }
            }
        </script>
    @endpush
</div>