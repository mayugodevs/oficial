<div> 
    <div x-data="modal()">    
    <br>
    <br>
    <br>
    <br>
    <br>
        <div class="grid grid-cols-3 gap-4 text-center">
            <div>
                <button class="bg-green text-white hover:bg-green_hover font-bold uppercase text-sm px-6 py-3 rounded 
                    shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" 
                    wire:click.prevent="cambioStatus(1,1)" x-on:click="abrirModalModulo(0)">
                    CREAR MODULO 
                </button> 
                <ul class="divide-y">                
                    @foreach ($modulos as $modulo)
                        <li class="font-bold"> {{$modulo->nom}} 
                            <button
                                wire:click="showModulo({{$modulo->idc}},1)" x-on:click="abrirModalModulo(0)"
                                class="bg-red-500" >
                                <i class="fas fa-edit"></i>
                            </button>
                            <button wire:click="cambioStatus(1,3,{{$modulo->idc}})" x-on:click="abrirModalModulo(0)"> 
                                <i class="far fa-plus-square"></i>{{-- AGREGAR CONTENIDO A ESTE MODULO --}}
                            </button>
                            <button onclick="alertDelete({{$modulo->idc}},1)"> 
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </li>
                        @foreach ($modulo->cursoContenidos as $contenido)
                            <li> {{$contenido->modulo }}
                                <button
                                    wire:click="showModulo({{$contenido->idmod}},2)" x-on:click="abrirModalModulo(0)"
                                    class="bg-blue" >
                                    <i class="fas fa-edit"></i>
                                </button> 
                                <button onclick="alertDelete({{$contenido->idmod}},2)"> 
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </li>
                            
                        @endforeach    
                    @endforeach
                </ul>
                
            </div>
            <div>
                <ul>
                    @foreach ($modulos as $modulo)
                        <li class="font-bold"> {{$modulo->nom}}  
                            <button wire:click="cambioStatusMaterial(1,5,{{$modulo->idc}} )" x-on:click="abrirModalMaterial(0)"> 
                                <i class="far fa-plus-square"></i>{{-- AGREGAR MATERIAL A UN MODULO --}}
                            </button>
                        </li>
                        @foreach ($modulo->cursoMateriales as $material)
                            <li> {{$material->material }}
                                <button wire:click="showModulo({{$material->idmaterial}},3)"
                                    class="bg-blue" x-on:click="abrirModalMaterial(0)">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="alertDelete({{$material->idmaterial}},3)">  
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </li>
                        @endforeach
                    @endforeach
                </ul>
            </div>
            <div>
                <ul>
                    @foreach ($modulos as $modulo)
                        <li class="font-bold"> {{$modulo->nom}} </li>
                        @foreach ($modulo->cursoMateriales as $material)
                            <li class="font-semibold"> {{$material->material}}  
                                <button wire:click="cambioStatusArchivo(1,7,{{$material->idmaterial}},{{$modulo->idc}} )" x-on:click="abrirModalArchivo(0)"> 
                                    <i class="far fa-plus-square"></i>{{-- AGREGAR ARCHIVO A UN MATERIAL --}}
                                </button>
                            </li>
                            @foreach ($material->cursoArchivos as $archivo)
                                <li>
                                    {{$archivo->title}} <br>
                                    {{$archivo->archivo}} 
                                    <button wire:click="showModulo({{$archivo->id}},4,{{$modulo->idc}})" x-on:click="abrirModalArchivo(0)" class="bg-blue">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button onclick="alertDelete({{$archivo->id}},4)">  
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </li> <hr>
                            @endforeach
                        @endforeach
                    @endforeach
                </ul>
            </div>
            
        </div>
        <div class="grid grid-cols-2 gap-4 text-center">
            <div >                
                <ul>
                    @foreach ($modulos as $modulo) 
                        <li class="font-semibold">{{$modulo->nom}} {{count($modulo->cursoTareaModulos)}}
                            <button x-on:click="abrirModal(0)" wire:click="cambioStatusTarea(1,9,{{$modulo->idc}} )" 
                                class="p-2 bg bg-gray-400">
                                <i class="far fa-plus-square"></i></button>
                        </li>                
                        @foreach ($modulo->cursoTareaModulos as $tarea)
                            <li>{{$tarea->tarea}}
                                <button wire:click="showModulo({{$tarea->idtarea}},5)" x-on:click="abrirModal(0)" class="bg-blue">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="alertDelete({{$tarea->idtarea}},5)">  
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </li> 
                        @endforeach                    
                    @endforeach
                </ul>
            </div>
            <div>
                preguntas
                <ul>
                    @foreach ($modulos as $modulo) 
                        <li class="font-semibold">{{$modulo->nom}} {{count($modulo->cursoExamenPreguntas)}}
                            <button wire:click="cambioStatusPregunta(1,11,{{$modulo->idc}} )"  x-on:click="abrirModalPregunta(0)"> 
                                <i class="far fa-plus-square"></i>{{-- AGREGAR TAREA A UN MODULO --}}
                            </button>
                        </li>                     
                        @foreach ($modulo->cursoExamenPreguntas as $pregunta)
                            <li>{{$pregunta->pregunta}}                    
                                <button wire:click="showModulo({{$pregunta->idpregunta}},6)" x-on:click="abrirModalPregunta(0)" class="bg-blue">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button onclick="alertDelete({{$pregunta->idpregunta}},6)">  
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </li>  
                        @endforeach                    
                    @endforeach
                </ul>
            </div>
        </div>
        {{-- *********************************MODALES********************************* --}}
        {{-- *********************************MODALES********************************* --}}
        {{-- *********************************MODALES********************************* --}}
        <div class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" 
            x-show="modal_modulo" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modal_modulo }">
            <div class="modal relative w-auto my-6 mx-auto max-w-6xl bg bg-gray-400" 
                @click.away="modal_modulo = false">
                                
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    
                    <!-- Aqui empieza el modal -->
                    <div>
                      {{$tituloModal}}
                    </div>
                    <div class="relative p-6 flex-auto   overflow-y-auto dark:bg-gray-500 bg-white-700" style="overflow:hidden">  
                        <div class="">  
                            <label> Titulo </label>
                            <input type="text" wire:model.defer="titulo">
                        </div>
                        <div class="">  
                            <label> Estado </label>
                            <select name="" id="" wire:model.defer="estado_actual">            
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                              </select>
                        </div>
                        @if ($estado == 3 || $estado == 4)      
                            <div class="">          
                                <select name="" id="" wire:model.defer="modulo_actual">
                                    @foreach ($modulos as $mod)
                                        <option value="{{$mod->idc}}">{{$mod->nom}}</option> 
                                    @endforeach
                                </select>
                            </div>
                        @endif 
                    </div>
                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                        <button
                            class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" x-on:click="cerrarModalModulo()" >
                            Cancelar
                        </button>
                        <button wire:click="guardarCambios()">
                            Guardar
                        </button>
                    </div>
                    <!-- Aqui empieza el modal -->
                </div>
            </div>
        </div>
        <div class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" 
            x-show="modal_material" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modal_material }">
            <div class="modal relative w-auto my-6 mx-auto max-w-6xl bg bg-gray-400" 
                @click.away="modal_material = false">
                                
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    
                    <!-- Aqui empieza el modal -->
                    <div>
                      {{$tituloModal}}
                    </div>
                    <div class="relative p-6 flex-auto   overflow-y-auto dark:bg-gray-500 bg-white-700" style="overflow:hidden">  
                        <div class="">  
                            <label> Titulo Material </label>
                            <input type="text" wire:model.defer="tituloMat">
                        </div>
                        <div class="">  
                            <label> Descripcion material </label>
                            <input type="text" wire:model.defer="descrMat">
                        </div>
                        <div class="">  
                            <label> Url video </label>
                            <input type="text" wire:model.defer="urlVideoMat">
                        </div>
                        <div class="">  
                            <label> Url storage </label>
                            <input type="text" wire:model.defer="urlStoraMat">
                        </div>
                        <div class="">  
                            <label> Modulo </label>
                            <select name="" id="" wire:model.defer="modulo_actual">
                                @foreach ($modulos as $mod)
                                  <option value="{{$mod->idc}}">{{$mod->nom}}</option> 
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                        <button
                            class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" x-on:click="cerrarModalMaterial()" >
                            Cancelar
                        </button>
                        <button wire:click="guardarCambios()">
                            Guardar
                        </button>
                    </div>
                    <!-- Aqui empieza el modal -->
                </div>
            </div>
        </div>
        <div class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" 
            x-show="modal_archivo" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modal_archivo }">
            <div class="modal relative w-auto my-6 mx-auto max-w-6xl bg bg-gray-400" 
                @click.away="modal_archivo = false">
                                
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    
                    <!-- Aqui empieza el modal -->
                    <div>
                      {{$tituloModal}}
                    </div>
                    <div class="relative p-6 flex-auto   overflow-y-auto dark:bg-gray-500 bg-white-700" style="overflow:hidden">  
                        <div class="">  
                            <label> Titulo archivo </label>
                            <input type="text" wire:model.defer="tituloArch">
                        </div>
                        <div class="">  
                            <label> Url archivo </label>
                            <input type="text" wire:model.defer="urlArch">
                        </div>
                        <div class="">  
                            <label> Material </label>
                            <select name="" id="" wire:model.defer="mater_actual">
                                @foreach ($materiales as $mat)
                                  <option value="{{$mat->idmaterial}}">{{$mat->material}}</option> 
                                @endforeach
                              </select>
                        </div>
                    </div>
                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                        <button
                            class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" x-on:click="cerrarModalArchivo()" >
                            Cancelar
                        </button>
                        <button wire:click="guardarCambios()">
                            Guardar
                        </button>
                    </div>
                    <!-- Aqui empieza el modal -->
                </div>
            </div>
        </div>
        <div class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" 
            x-show="modal_tarea" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modal_tarea }">
            <div class="modal relative w-auto my-6 mx-auto max-w-6xl bg bg-gray-400" 
                @click.away="modal_tarea = false">
                                
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    
                    <!-- Aqui empieza el modal -->
                    <div>
                      {{$tituloModal}}
                    </div>
                    <div class="relative p-6 flex-auto   overflow-y-auto dark:bg-gray-500 bg-white-700" style="overflow:hidden">  
                        <div class="">  
                            <label> Titulo tarea </label>
                            <input type="text" wire:model.defer="tituloTar"> 
                        </div>
                        <div class="">  
                            <label> Instrucciones tarea </label>
                            <textarea id="ckeditor"  wire:model.defer="instruccTar"></textarea> 
                        </div>
                        <div class="">  
                            <label> Titulo archivo</label>
                            <select name="" id="puntuacionTar" wire:model.defer="puntuacionTar">
                                <option value="0">0 Puntos</option>
                                <option value="100" selected>100 Puntos</option>
                            </select>
                        </div>
                        <div class="">  
                            <label> Tipo tarea </label>
                            <select name="" id="tipoEvalTar" wire:model.defer="tipoEvalTar">
                                <option value="Práctica">Practica</option>
                                <option value="Proyecto" selected>Proyecto</option>
                            </select>
                        </div>
                        <div class="">  
                            <label> Estado tarea </label>
                            <select name="" id="tipoEvalTar" wire:model.defer="estado_actual">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                              </select>
                        </div>
                        <div class="">  
                            <label> Modulo </label>
                            <select name="" id="" wire:model.defer="modulo_actual">
                                @foreach ($modulos as $mod)
                                  <option value="{{$mod->idc}}">{{$mod->nom}}</option> 
                                @endforeach
                              </select> 
                        </div>
                        <div class="">  
                            <label> Url tarea </label>
                            <input type="text" wire:model.defer="urlTar">
                        </div>
                    </div>
                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                        <button
                            class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" x-on:click="cerrar()" >
                            Cancelar
                        </button>
                        <button {{-- wire:click="guardarCambios()" --}} x-on:click="saveTarea()">
                            Guardar
                        </button>
                    </div>
                    <!-- Aqui empieza el modal -->
                </div>
            </div>
        </div>
        <div class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" 
            x-show="modal_pregunt" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modal_pregunt }">
            <div class="modal relative w-auto my-6 mx-auto max-w-6xl bg bg-gray-400" 
                @click.away="modal_pregunt = false">
                                
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    
                    <!-- Aqui empieza el modal -->
                    <div>
                      {{$tituloModal}}
                    </div>
                    <div class="relative p-6 flex-auto   overflow-y-auto dark:bg-gray-500 bg-white-700" style="overflow:hidden">  
                        <div class="">  
                            <label> Codigo  </label>
                            <input type="text" wire:model.defer="codigoPreg"> 
                        </div>
                        <div class="">  
                            <label> Pregunta </label>
                            <input type="text" wire:model.defer="preguntPreg"> 
                        </div>                        
                        <div class="">  
                            <label> Puntuacion </label>
                            <select name="" id="puntPreg" wire:model="puntPreg">
                                <option value="100" selected>100 Puntos</option>
                                <option value="0">0 Puntos</option>
                            </select>
                        </div>
                        <div class="">  
                            <label> Estado pregunta </label>
                            <select name="" id="puntPreg" wire:model="estado_actual">
                                <option value="1" selected> Estado </option>
                                <option value="0"> Inactivo</option>
                            </select>
                        </div>
                        <div class="">  
                            <label> Modulo </label>
                            <select name="" id="" wire:model.defer="modulo_actual">
                                @foreach ($modulos as $mod)
                                  <option value="{{$mod->idc}}">{{$mod->nom}}</option> 
                                @endforeach
                              </select> 
                        </div>
                        @if ($estado == 11)
                            <div> 
                                {{-- <button onclick="addPreg()">add</button>
                                <button onclick="remPreg()">rem</button>
                                <div class="m-2" wire:ignore>
                                    <ul id="alternativas">   
                                    </ul>
                                </div>    --}}
                                <x-jet-button wire:click="addPreg">Agregar</x-jet-button>
                                <x-jet-button wire:click="remPreg">Quitar</x-jet-button>
                                <div class="m-2">
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
                                    
                                </div> 
                            </div>
                        @endif
                    </div>
                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                        <button
                            class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" x-on:click="cerrarModalPregunta()" >
                            Cancelar
                        </button>
                        <button wire:click="guardarCambios()">
                            Guardar
                        </button>
                    </div>
                    <!-- Aqui empieza el modal -->
                </div>
            </div>
        </div> 
    </div>
    <div id="luisi">

    </div>
    @push('js')
        <script>
            let contenido = '';
            
            function modal(){
                return {
                    modal_tarea :false,
                    modal_archivo :false,
                    modal_material :false,
                    modal_modulo :false,
                    modal_pregunt :false,
                    cant_preg : ['','',''],
                    cerrar(){
                        this.modal_tarea = false;
                    },
                    abrirModal(tipo){
                        setTimeout(() => {
                            this.modal_tarea = true;   
                        }, 600);                                               
                    },
                    cerrarModalArchivo(){
                        this.modal_archivo = false;
                    },
                    abrirModalArchivo(tipo){
                        setTimeout(() => {
                            this.modal_archivo = true;   
                        }, 500);                                               
                    },
                    cerrarModalMaterial(){
                        this.modal_material = false;
                    },
                    abrirModalMaterial(tipo){
                        setTimeout(() => {
                            this.modal_material = true;   
                        }, 500);                                               
                    },
                    cerrarModalModulo(){
                        this.modal_modulo = false;
                    },
                    abrirModalModulo(tipo){
                        setTimeout(() => {
                            this.modal_modulo = true;   
                        }, 500);                                               
                    },
                    cerrarModalPregunta(){
                        this.modal_pregunt = false;
                    },
                    abrirModalPregunta(tipo){
                        // pintar_altern()
                        setTimeout(() => {
                            this.modal_pregunt = true;   
                        }, 500);                                               
                    },
                    addPreg(){
                        this.cant_preg.push('');
                    },
                    remPreg(){
                        if(this.cant_preg.length > 3){
                            this.cant_preg.pop();      
                        }                  
                    },
                    escogido(id){
                        console.log(id);
                    },
                    saveTarea(){
                        Livewire.emit('guardarCambios',contenido)
                        setTimeout(() => {
                            this.modal_tarea = false;
                        }, 1000);
                    }
                }
            }
            // let preg_min = 3;
            
            // function pintar_altern(){
            //     let bod = ''
            //     console.log('addddd');
            //     document.getElementById('alternativas').innerHTML = ''
            //     for (let index = 1; index <= preg_min; index++) {
            //         console.log(index);
            //         bod +=   ` <li><input class="form-check-input" type="radio" name="respuesta" id="res_1" onChange="escogido(${index})">
            //             <input type="text" ></li>`;
            //     }
            //     document.getElementById('alternativas').innerHTML = bod;
            // }
            // function addPreg(){
            //     preg_min++;
            //     pintar_altern()
            // }
            // function remPreg(){
            //     if (preg_min > 3) {
            //         preg_min--;
            //         pintar_altern()
            //     }
            // }
            // function escogido(id){
            //     console.log(id);
            // }
            window.addEventListener('editor', () => {
                console.log('aqui tamos aun');
                ClassicEditor
                    .create( document.querySelector( '#ckeditor' ) )
                    .then( editor => {
                        editor.model.document.on('change:data', () => {
                            contenido = editor.getData();
                        })                    
                    })
                    .catch( error => {
                        console.error( error );
                    });                
            })
            function alertDelete(id, tipo){
                alertify.confirm("Seguro de eliminar ",
                    function(){
                        alertify.success('Eliminado');
                        Livewire.emit('deleteModulo',id, tipo)
                    },
                    function(){
                        alertify.error('Cancelado');
                });
            }
        </script>
    @endpush
</div>
