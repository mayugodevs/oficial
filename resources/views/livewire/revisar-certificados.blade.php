<div > 
    <div x-data="modal_certifii()">
    
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Fecha llegada
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Alumno
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
                        Nota
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Certificado
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($certificados as $certificado)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">                            
                                {{$certificado->fecha->translatedFormat('d M Y H:i:s') }} 
                            </div>
                        </td>                   
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center" wire:click="datos_user({{$certificado->curso_inscripcion->alumno->idalum}})" x-on:click="abrirModal_user()">
                                {{$certificado->curso_inscripcion->alumno->nombres}}
                            </div>
                        </td>                   
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                {{$certificado->curso_inscripcion->alumno->email}}
                            </div>
                        </td>                   
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                {{$certificado->curso_inscripcion->cursoAsignacion->curso->nom}}
                            </div>
                        </td>                  
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                {{$certificado->nota}}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <button x-on:click="abrirModal({{$certificado->curs_inscrip_id}}, {{$certificado->id}},'{{$certificado->curso_inscripcion->cursoAsignacion->curso->slug}}')"> 
                                    Certificado
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div  class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" x-show="modal_userr" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modal_userr }">
            <div class="modal relative w-auto my-6 mx-auto max-w-6xl bg bg-gray-400" 
                @click.away="modal_userr = false">
                                
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    
                    <!-- Aqui empieza el modal -->
                    <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                        <h3 class="text-3xl font-semibold">
                            Datos Alumno 
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
                            <div>
                                @if ($alumno) 
                                    <div>
                                        Nombre: {{$alumno->nombres}}
                                    </div>
                                    <div>
                                        Apellido: {{$alumno->apellidos}}
                                    </div>
                                    <div>
                                        Email: {{$alumno->email}}
                                    </div>
                                    <div>
                                        Télefono: {{$alumno->telf}}
                                    </div>
                                    <div>
                                        País: {{$alumno->paisU->pais}}
                                    </div>
                                    <div>
                                        Género: {{$alumno->genero}}
                                    </div>
                                @endif                            
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
        <div  class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" x-show="modal" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modal }">
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
                                <input  type="file" wire:model.defer="filesaaa"
                                    title="" />
                                @if ($filesaaa) 
                                    archivo termino de subir
                                @endif                            
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                        <button
                            class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" x-on:click="cerrar()" >
                            Cancelar
                        </button>
                        @if ($filesaaa)
                            <button
                                class="bg-emerald-500 text-white active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button" x-on:click="validarFiles()">
                                guardar
                            </button>
                        @endif
                    </div>
                    <!-- Aqui empieza el modal -->
                </div>
            </div>
        </div>
    </div>
    @push('js') 
        <script>
            function modal_certifii(){
                return {
                    modal : false,
                    modal_userr : false,
                    inscripc_id : 0, 
                    certi_check_id : 0, 
                    slug : '', 
                    
                    validarFiles(){
                        Livewire.emit('save_certificado', this.inscripc_id, this.certi_check_id, this.slug)
                        setTimeout(() => {
                            this.cerrar();
                        }, 1000);
                    },
                    abrirModal(inscripc_id, certi_check_id ,slug){
                        this.modal = true;
                        this.inscripc_id = inscripc_id;
                        this.certi_check_id = certi_check_id;
                        this.slug = slug;
                        
                    },
                    cerrar(){
                        this.modal = false;
                    },
                    abrirModal_user(){
                        this.modal_userr = true;                        
                    },
                    cerrar_user(){
                        this.modal_userr = false;
                    },
                    
                }
            }
        </script>
    @endpush
    
</div>
