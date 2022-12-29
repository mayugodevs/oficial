<div>
    @push('css')
        <style>
            .animated {
                -webkit-animation-duration: 1s;
                animation-duration: 1s;
                -webkit-animation-fill-mode: both;
                animation-fill-mode: both;
            }

            .animated.faster {
                -webkit-animation-duration: 500ms;
                animation-duration: 500ms;
            }

            .fadeIn {
                -webkit-animation-name: fadeIn;
                animation-name: fadeIn;
            }

            .fadeOut {
                -webkit-animation-name: fadeOut;
                animation-name: fadeOut;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }

            @keyframes fadeOut {
                from {
                    opacity: 1;
                }

                to {
                    opacity: 0;
                }
            }

        </style> 
    @endpush
    <br>
    <br>
    {{$curso}}
    <main class="mx-auto py-4 mt-4 px-3" x-data="data()" >
        <div class="m-8">
            <button x-on:click="abrirModal(0)" wire:click="cambioModal(0,false)" class="p-2 bg bg-gray-400">Crear Curso</button>
        </div>
        <div class="m-8">
            <label for="">Buscar :</label>
            <input type="text" wire:model="search" placeholder="Buscar un curso">
        </div>

        <div class="flex flex-col m-8">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Curso
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Descuento
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Precio
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Categoria
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Docente
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Acciones</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($cursos as $curso)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full" src="{{ asset($curso->img) }}"
                                                        alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $curso->cursoAsignacion->idasig }} :: {{ $curso->nom }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                USD. {{ $curso->predsct }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                USD. {{ $curso->precio }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $curso->categoria->nombre }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $curso->cursoAsignacion->trabajador->idtrab }} ::
                                            {{ $curso->cursoAsignacion->trabajador->nombres }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <button class="text-black hover:text-indigo-900 bg bg-bluefacebook p-2"
                                            x-on:click="abrirModal(1)" wire:click="cambioModal({{ $curso->idcur }},true)">Editar</button>
                                            <a href="{{ route('curso.one', ['id' => $curso->cursoAsignacion->idasig]) }}"
                                                target="_bank" class="text-indigo-600 hover:text-indigo-900 bg bg-yellow-500 p-2">Más</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-8">
            @if ($cursos->count())
                {{ $cursos->links() }}
            @else
                No se encontro para "{{ $search }}"
            @endif
        </div>
        {{-- MODAL EDIT/CREATE CURSO --}} 
        <div class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" x-show="isDialogOpen" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': isDialogOpen }">
            <div class="modal relative w-auto my-6 mx-auto max-w-6xl bg bg-gray-400" 
                {{-- @click.away="isDialogOpen = false" --}}>
                                  
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    
                    <!-- Aqui empieza el modal -->
                    <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                        <h3 class="text-3xl font-semibold">
                            {{$titleModal}} 
                        </h3> 
                        <button
                            class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                            onclick="modalCursoEdit()">
                            <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                x
                            </span>
                        </button>
                    </div>
                    <div class="relative p-6 flex-auto   overflow-y-auto dark:bg-gray-500 bg-white-700" style="overflow:hidden">  
                        <div class="grid grid-cols-2 gap-4">
                            <div class="">
                                <label for="nombreCurso">Nombre del curso</label>  <br>
                                <input type="text" name="" id="nombreCurso" wire:model.defer="nombreCurso">
                            </div>
                            <div class="">
                                <label for="slugCurso">Slug del curso</label>  <br>
                                <input type="text" name="" id="slugCurso" wire:model.defer="slugCurso">
                            </div>
                            <div>
                                <label for="idCategoria">Categoria del curso</label> <br>
                                <select name="" id="idCategoria" wire:model.defer="idCategoria">
                                    <option value="0" >Seleccione una categoria</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{$categoria->idc}}" >{{$categoria->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="fechaLanzCurso">Fecha LanzCurso</label>  <br>
                                <input type="datetime-local" wire:model.defer="fechaLanzCurso" >
                                
                            </div>
                            <div>
                                <label for="precioFinalCurso">Precio N.</label>  <br>
                                <input type="text" name="" id="precioFinalCurso" wire:model.defer="precioFinalCurso">
                            </div>
                            <div>
                                <label for="porcentajCurso">Porcentaje</label>  <br>
                                <input type="text" name="" id="porcentajCurso" wire:model.defer="porcentajCurso" onchange="cambioPrecio()">
                            </div>
                            <div wire:ignore>
                                <label for="precioCurso">Precio Desc.</label>  <br>
                                <input type="text" name="" id="precioCurso" wire:model="precioCurso">
                            </div>
                            
                            <div>
                                <label for="porcentajCurso">Estado del curso</label>  <br>
                                <select name="" id="estadocurso" wire:model.defer="estadocurso">
                                    <option value="0" >Inactivo</option>
                                    <option value="1" >Activo</option>
                                </select>
                            </div>
                            <div> 
                                <label for="idDocente">Docente</label>  <br>
                                <select name="" id="idDocente" wire:model.defer="idDocente">
                                    <option value="0" >Seleccione un docente</option>
                                    @foreach ($docentes as $docente)
                                        <option value="{{$docente->idtrab}}" >{{$docente->nombres}}</option>
                                    @endforeach
                                </select>                                
                            </div>
                            <div>                         
                                @if ($files) 
                                    <img src="{{$files->temporaryURL()}}" alt="" width="200px">  
                                @else
                                    <img src="{{ asset($imgCurso) }}" alt="" width="200px">
                                @endif
                                <div>
                                    <input type="file" wire:model="files" style="">  
                                </div> 
                            </div>
                            <div class="col-span-2">  
                                <label> Description </label>
                                <textarea class="form-control" id="description" placeholder="Ingrese descripción" 
                                    name="description" wire:model.defer="descrCurso"></textarea> 
                            </div>
                        </div>
                        
                    </div>
                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                        <button
                            class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" x-on:click="cerrar()" >
                            Cancelar
                        </button>
                        <button
                            class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" x-on:click="saveDetails()" >
                            {{$btnModal}}
                        </button>
                    </div>
                    <!-- Aqui empieza el modal -->
                </div>
            </div>
        </div>
    </main> 

    @push('js')
        <script>
            let contenido = document.getElementById('description').value;
            console.log(contenido);
            function data(){
                return {
                    isDialogOpen :false,
                    answerU :false,
                    inpRest :false,
                    // contenido : '',
                    resp : '',
                    idd : 0,
                    tipo: 0,
                    cerrar(){
                        this.isDialogOpen = false;
                    },
                    abrirModal(tipo){
                        this.tipo = tipo
                        this.isDialogOpen = true;                          
                    },
                    saveDetails(){
                        let cont = document.getElementById('description').value
                        let precio_curso = document.getElementById('precioCurso').value

                        if (cont != '') {
                            contenido = cont
                        } 
                        if (contenido.trim().length > 0) {
                            console.log(precio_curso);
                            Livewire.emit('guardarCambio', contenido, precio_curso);
                            // if(!this.tipo){
                                setTimeout(() => {
                                    this.isDialogOpen = false
                                }, 1500);
                            // } else this.isDialogOpen = false
                        } else  console.log('no ppuede ser vacio descrip');
                        
                    },                   
                }
            }
            
            window.addEventListener('modal', () => {
                console.log('aqui tamos aun'); 
                ClassicEditor
                    .create( document.querySelector( '#description' ) )
                    .then( editor => {
                        editor.model.document.on('change:data', () => {
                            console.log( 'The data has changed!' );
                            contenido = editor.getData();
                        })                    
                    })
                    .catch( error => {
                            console.error( error );
                    });        
                    console.log(contenido);                             
            }) 

            function cambioPrecio(){
                precioFinalCurso = document.getElementById('precioFinalCurso').value; 
                porcentajCurso = document.getElementById('porcentajCurso').value;
                precioCurso = document.getElementById('precioCurso');
                precioFinal = precioFinalCurso - (precioFinalCurso*porcentajCurso)/100;
                precioCurso.value = precioFinal;               
            } 
        </script>
    @endpush
</div>
