<div x-data="dataCertificado()">
    @push('css')
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css"/>
    @endpush
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="flex flex-col m-8" >
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <div>
                        <input type="text" wire:model="search" class="" placeholder="Buscar un alumno">
                    </div>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Fecha llegaba
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Estudiante
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Correo
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Producto
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Promedio Final
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Certifado
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Constancia
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($grups as $pay)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{$pay->idpay}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div>
                                            @if ($pay->dipl_proyt_entr)
                                                {{$pay->dipl_proyt_entr->fecha->translatedFormat('d M Y H:i:s')}}
                                            @else
                                                NE
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center" x-on:click="abrirModal_user({{$pay->alumno}})">
                                            {{$pay->alumno->nombres}} {{$pay->alumno->apellidos}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            {{$pay->alumno->email}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div>
                                            {{$pay->diplomado_grupo->titulo }} 
                                        </div>
                                        <div>
                                            Grupo : {{$pay->diplomado_grupo->inicio->translatedFormat('d M Y') }} 
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @php
                                            $nota = $pay->nota_alumno($pay->diplomados_id, $pay->idpay) 
                                        @endphp
                                        @if ($nota > 0)
                                            <div x-on:click="abrir_modal_notas()"  wire:click="show_notas({{$pay->idpay}}, {{$pay->diplomados_id}})">
                                                {{ $nota }}
                                            </div>                                            
                                        @else
                                            {{ $nota }}
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div>
                                            @if ($pay->dipl_certificado)
                                                <div>
                                                    <button >Ver</button>
                                                    <button x-on:click="delete_certif({{$pay->dipl_certificado->id}})">Delete</button>
                                                </div>
                                            @else
                                                <button x-on:click="abrirModal(0,{{$pay->idpay}})"> 
                                                    Certificado
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div>
                                            @if ($pay->dipl_constancia)
                                                <div>
                                                    <button>Ver</button>
                                                    <button x-on:click="delete_constant({{$pay->dipl_constancia->id}})">Delete</button>
                                                </div>
                                            @else
                                            <button x-on:click="abrirModal(1,{{$pay->idpay}})"> 
                                                    Constancia
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="m-8">
                        {{-- @if ($grups->count()>0)
                            {{ $grups->links() }}
                        @else
                            No se encontro para "{{ $search }}"
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <div  class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" x-show="modal_notas" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modal_notas }">
        <div class="modal relative w-auto my-6 mx-auto max-w-6xl bg bg-gray-400" 
            @click.away="modal_notas = false">
                              
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                
                <!-- Aqui empieza el modal -->
                <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        Notas
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
                        @if ($datos)
                        <table>
                            <thead>
                                <tr>
                                    <td>Tarea</td>
                                    <td>Estado</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tareas as $tarea)
                                    <tr>
                                        <td>{{$tarea->tarea}}</td>
                                        <td>
                                            @if ($tarea->diplTareaEntregas)
                                                @if ($tarea->diplTareaEntregas->dipl_pagos_id == $idpay )
                                                    {{$tarea->diplTareaEntregas->nota }}
                                                @else
                                                    NE
                                                @endif                   
                                            @else
                                                NE
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <td>Proyecto Final</td>
                                    <td>Estado</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proyectos as $proyecto)
                                    <tr>
                                        <td>{{$proyecto->titulo}}</td>
                                        <td>
                                            @if ($tarea->diplPryEntreg)
                                                @if ($tarea->diplPryEntreg->dipl_pag_id == $idpay )
                                                    {{$tarea->diplPryEntreg->nota }}
                                                @else
                                                    NE
                                                @endif    
                                            @else
                                                NE
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
                <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                    <button
                        class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" x-on:click="cerrar_notas()" >
                        Cerrar
                    </button>
                </div>
                <!-- Aqui empieza el modal -->
            </div>
        </div>
    </div>
    <div  class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" x-show="modal_user" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modal_user }">
        <div class="modal relative w-auto my-6 mx-auto max-w-6xl bg bg-gray-400" 
            @click.away="modal_user = false">
                              
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                
                <!-- Aqui empieza el modal -->
                <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        Datos del usuario
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
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            Nombre: <strong x-text="nombre"></strong> 
                        </div>
                        <div>
                            Apellido: <strong x-text="apellido"></strong> 
                        </div>
                        <div>
                            Email: <strong x-text="email"></strong> 
                        </div>
                        <div>
                            Teléfono: <strong x-text="telefono"></strong> 
                        </div>
                        <div>
                            País: <strong x-text="pais"></strong> 
                        </div>
                        <div>
                            Género: <strong x-text="genero"></strong> 
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                    <button
                        class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" x-on:click="cerrar_user()" >
                        Cerrar
                    </button>
                </div>
                <!-- Aqui empieza el modal -->
            </div>
        </div>
    </div>
    <div wire:ignore class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" x-show="modal" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modal }">
        <div class="modal relative w-auto my-6 mx-auto max-w-6xl bg bg-gray-400" 
            @click.away="modal = false">
                              
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                
                <!-- Aqui empieza el modal -->
                <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        Subir 
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
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label for="precioFinalCurso">Subir Certificado</label>  <br>
                            <div x-ref="dnd"
                            class="relative flex flex-col text-gray-400 border border-gray-200 border-dashed rounded cursor-pointer">
                            <input accept="*" type="file" multiple wire:model.defer="filesaaa"
                                class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
                                @change="addFiles($event)"
                                @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
                                @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                title="" />
                    
                            <div class="flex flex-col items-center justify-center py-10 text-center">
                                <svg class="w-6 h-6 mr-1 text-current-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <p class="m-0">Drag your files here or click in this area.</p>
                            </div>
                        </div>
                    
                        <template x-if="files.length > 0">
                            <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-6" @drop.prevent="drop($event)"
                                @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
                                <template x-for="(_, index) in Array.from({ length: files.length })">
                                    <div class="relative flex flex-col items-center overflow-hidden text-center bg-gray-100 border rounded cursor-move select-none"
                                        style="padding-top: 100%;" @dragstart="dragstart($event)" @dragend="fileDragging = null"
                                        :class="{'border-blue-600': fileDragging == index}" draggable="true" :data-index="index">
                                        <button class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none" type="button" @click="remove(index)">
                                            <svg class="w-4 h-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                        
                                        <template x-if="files[index].type.includes('application/') || files[index].type === ''">
                                            <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                            </svg>
                                        </template>
                                        <template x-if="files[index].type.includes('image/')">
                                            <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                                                x-bind:src="loadFile(files[index])" />
                                        </template>
                                    
                    
                                        <div class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                                            <span class="w-full font-bold text-gray-900 truncate"
                                                x-text="files[index].name">Loading</span>
                                            <span class="text-xs text-gray-900" x-text="humanFileSize(files[index].size)">...</span>
                                        </div>
                    
                                        <div class="absolute inset-0 z-40 transition-colors duration-300" @dragenter="dragenter($event)"
                                            @dragleave="fileDropping = null"
                                            :class="{'bg-blue-200 bg-opacity-80': fileDropping == index && fileDragging != index}">
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </template>
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
                        type="button" x-on:click="validarFiles()">
                        guardar
                    </button>
                </div>
                <!-- Aqui empieza el modal -->
            </div>
        </div>
    </div>
    @push('js')
        <script src="https://unpkg.com/create-file-list"></script>
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <script>
            function dataCertificado(){
                return {
                    modal : false,
                    modal_user : false,
                    nombre : '',
                    apellido : '',
                    email : '',
                    telefono : '',
                    pais : '',
                    genero : '',
                    modal_notas : false,
                    tipo : 0, /* 0 => certificado, 1 => constancia */
                    id_pay : 0, 
                    files: [],
                    fileDragging: null,
                    fileDropping: null,
                    humanFileSize(size) {
                        const i = Math.floor(Math.log(size) / Math.log(1024));
                        return (
                            (size / Math.pow(1024, i)).toFixed(2) * 1 +
                            " " +
                            ["B", "kB", "MB", "GB", "TB"][i]
                        );
                    },
                    remove(index) {
                        let files = [...this.files];
                        files.splice(index, 1);
            
                        this.files = createFileList(files);
                    },
                    drop(e) {
                        let removed, add;
                        let files = [...this.files];
            
                        removed = files.splice(this.fileDragging, 1);
                        files.splice(this.fileDropping, 0, ...removed);
            
                        this.files = createFileList(files);
            
                        this.fileDropping = null;
                        this.fileDragging = null;
                    },
                    dragenter(e) {
                        let targetElem = e.target.closest("[draggable]");
            
                        this.fileDropping = targetElem.getAttribute("data-index");
                    },
                    dragstart(e) {
                        this.fileDragging = e.target
                            .closest("[draggable]")
                            .getAttribute("data-index");
                        e.dataTransfer.effectAllowed = "move";
                    },
                    loadFile(file) {
                        const preview = document.querySelectorAll(".preview");
                        const blobUrl = URL.createObjectURL(file);
            
                        preview.forEach(elem => {
                            elem.onload = () => {
                                URL.revokeObjectURL(elem.src); // free memory
                            };
                        });
            
                        return blobUrl;
                    },
                    addFiles(e) {
                        const files = createFileList([...this.files], [...e.target.files]);
                        this.files = files;
                        this.form.formData.files = [...files];
                    },
                    validarFiles(){
                        console.log('this.files');
                        console.log('**************');
                        console.log(this.tipo);
                        console.log(this.id_pay);
                        console.log(this.files);
                        console.log('**************');
                        if(this.files.length > 0){
                            Livewire.emit('save_certif', this.tipo, this.id_pay)
                            console.log( this.tipo);
                            console.log(this.id_pay);
                            setTimeout(() => {
                                console.log('borrando files');
                                this.files = []
                            }, 2000);
                        }else console.log('vacio files');
                    },
                    abrirModal(tipo, id_pay){
                        this.modal = true;
                        this.tipo = tipo;
                        this.id_pay = id_pay;
                    },
                    cerrar(){
                        this.modal = false;
                    },
                    abrirModal_user(user){
                        console.log(user);
                        this.modal_user = true;
                        this.nombre = user.nombres;
                        this.apellido = user.apellidos;
                        this.email = user.email;
                        this.telefono = user.telf;
                        this.pais = user.ip_pais;
                        this.genero = user.genero;

                    },
                    cerrar_user(){
                        this.modal_user = false;
                    },
                    abrir_modal_notas(user){
                        this.modal_notas = true;
                    },
                    cerrar_notas(){
                        this.modal_notas = false;
                    },
                    delete_certif(id){
                        alertify.confirm("Seguro de eliminar certificado ",
                            function(){
                                console.log('eliminado cert');
                                console.log(id);
                                Livewire.emit('delete_cert_const',id, 1)
                            },
                            function(){
                                alertify.error('Cancelado');
                        });
                    },
                    delete_constant(id){
                        alertify.confirm("Seguro de eliminar constancia ",
                            function(){
                                console.log('eliminado const');
                                Livewire.emit('delete_cert_const',id, 0)
                            },
                            function(){
                                alertify.error('Cancelado');
                        });
                    },
                }
            }
        </script>
    @endpush
</div>
