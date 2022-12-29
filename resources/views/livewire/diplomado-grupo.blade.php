<div>
    <button class="bg-green px-5 py-2 text-sm shadow-sm font-serif tracking-wider text-white-500 
        rounded-lg " wire:click="modalStatus(true)" > Crear Semana</button>
    <table class="table-auto">
        <thead>
          <tr>
            <th>Semana</th>
            <th>Tareas</th>
            <th>Clases</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($semanas as $semana)
                <tr>
                    <td>SEMANA {{$semana->semana}}</td>
                    <td>
                        <ul>
                            @forelse ($semana->diplomadoTareas as $tarea)
                                <li>{{$tarea->tarea}} 
                                    <button type="button" class="bg-transparent hover:bg-bluefacebook hover:text-white-500 dark:text-white-500 border border-indigo-800 
                                        text-white font-serif py-2 px-4 rounded mr-3" wire:click="statusHomeWork(true,{{$tarea->id}},0)">
                                        Editar
                                    </button>
                                    <button onclick="alertDelete({{$tarea}},2)" class="bg-transparent hover:bg-red-700 hover:text-white-500 dark:text-white-500 border
                                        border-red-600 text-white font-serif py-2 px-4  mr-3  rounded">
                                        Eli Tar.
                                    </button>
                                </li>
                            @empty
                                vacio
                            @endforelse
                        </ul>
                    </td>
                    <td>
                        <ul>
                            @forelse ($semana->diplomadoVivos as $clase)
                                <li>{{$clase->nombre}} 
                                    <button type="button" class="bg-transparent hover:bg-bluefacebook hover:text-white-500 dark:text-white-500 border border-indigo-800 
                                        text-white font-serif py-2 px-4 rounded mr-3" wire:click="statusLiveClass(true,{{$clase->idvivo}},0)">
                                        Editar
                                    </button>
                                    <button onclick="alertDelete({{$clase}},3)" class="bg-transparent hover:bg-red-700 hover:text-white-500 dark:text-white-500 border
                                        border-red-600 text-white font-serif py-2 px-4  mr-3  rounded">
                                        Eli Tar.
                                    </button>
                                </li>
                            @empty
                                vacio
                            @endforelse
                        </ul>
                    </td>
                    <td>
                        <button wire:click="statusHomeWork(true,false,{{$semana->idsemana}})" class="bg-transparent hover:bg-blue hover:text-white-500 dark:text-white-500 border
                        border-blue text-white font-serif py-2 px-4  mr-3  rounded">Agregar Tarea</button>
                        <button wire:click="statusLiveClass(true,false,{{$semana->idsemana}})" class="bg-transparent hover:bg-blue hover:text-white-500 dark:text-white-500 border
                        border-blue text-white font-serif py-2 px-4  mr-3  rounded">Agregar Clase</button>
                        <button onclick="alertDelete({{$semana}},1)" class="bg-transparent hover:bg-red-700 hover:text-white-500 dark:text-white-500 border
                        border-red-600 text-white font-serif py-2 px-4  mr-3  rounded">DELETE</button>
                    </td>
                </tr>
            @empty
                NO HAY SEMANAS
            @endforelse
        </tbody>
    </table>
    {{-- modal week --}}
    <main class="mx-auto   "x-data="{ 'isDialogOpen': @entangle('modalWeek') }" @keydown.escape="isDialogOpen = false">
        <section class="flex flex-wrap p-4">
            <div class="overflow-auto " style="background-color: rgba(0,0,0,0.5)" x-show="isDialogOpen" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': isDialogOpen }">
                <div class="dark:bg-gray-500   modal   bg-white-900  rounded-lg shadow-2xl  sm:m-8" 
                    @click.away="isDialogOpen = false">
                    <div class="flex justify-between items-center border-b p-2 text-xl">
                        <h6 class="text-md font-serif dark:text-white-500 text-gray-800 mx-7 ">Añadir Tarea</h6>
                        <button type="button " @click="isDialogOpen = false" class="dark:text-white-500 text-gray-500">✖</button>
                    </div>                    
                    <div class="p-2">
                        <!-- Aqui empieza el modal -->
                        <div class="px-5 overflow-x-hidden overflow-y-auto dark:bg-gray-500 bg-white-700" >
                            
                            <div class="flex flex-wrap -mx-3 ">                               
                                <div class="w-full h-full">
                                    <br>
                                    <div>
                                        <div class="m-1">
                                            <label class="block text-white-500 text-sm font-bold text-left">Semana</label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                              type="number" wire:model.defer="week" min="1">
                                        </div>
                                        <div class="m-1">
                                            <label class="block text-white-500 text-sm font-bold text-left  " for="name">Fecha Inicio</label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                type="date" wire:model.defer="dateS">
                                        </div>
                                        <div class="m-1">
                                            <label class="block text-white-500 text-sm font-bold text-left  " for="name">Fecha Final</label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                type="date" wire:model.defer="dateE">
                                        </div>
                                        <div class="flex"> 
                                            <div class="p-7 flex justify-end items-center w-full bg-transparent   -px-2">
                                                <button type="button" @click="isDialogOpen = false" class="bg-transparent hover:bg-red-700 hover:text-white-500 dark:text-white-500 border
                                                    border-red-600 text-white font-serif py-2 px-4  mr-3  rounded">
                                                    Cancelar
                                                </button>
                                                <button type="button" class="bg-transparent hover:bg-bluefacebook hover:text-white-500 dark:text-white-500 border border-indigo-800 
                                                    text-white font-serif py-2 px-4 rounded mr-3" wire:click="createWeek">
                                                    Guardar
                                                </button>
                                            </div>
                                        </div>                                        
                                    </div>                                
                                </div>
                            </div>
                        </div>      
                        <!-- Aqui empieza el modal -->
                    </div>
                </div>
            </div>
        </section>
    </main> 

    {{-- modal homeWokrs --}}
    <main class="mx-auto   "x-data="{ 'modalHomeWorkV': @entangle('modalHomeWork') }" @keydown.escape="modalHomeWorkV = false">
        <section class="flex flex-wrap p-4">
            <div class="overflow-auto " style="background-color: rgba(0,0,0,0.5)" x-show="modalHomeWorkV" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modalHomeWorkV }">
                <div class="dark:bg-gray-500   modal   bg-white-900  rounded-lg shadow-2xl  sm:m-8" 
                    @click.away="modalHomeWorkV = false">
                    <div class="flex justify-between items-center border-b p-2 text-xl">
                        <h6 class="text-md font-serif dark:text-white-500 text-gray-800 mx-7 ">Añadir Tarea</h6>
                        <button type="button " @click="modalHomeWorkV = false" class="dark:text-white-500 text-gray-500">✖</button>
                    </div>                    
                    <div class="p-2">
                        <!-- Aqui empieza el modal -->
                        <div class="px-5 overflow-x-hidden overflow-y-auto dark:bg-gray-500 bg-white-700" >
                            
                            <div class="flex flex-wrap -mx-3 ">                               
                                <div class="w-full h-full">
                                    <br>
                                    <div>
                                        <div class="m-1">
                                            <label class="block text-white-500 text-sm font-bold text-left">Tarea</label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                              type="text" wire:model.defer="homeWork" placeholder="">
                                        </div>
                                        <div class="m-1">
                                            <label class="block text-white-500 text-sm font-bold text-left">Instrucción</label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                              type="text" wire:model.defer="instruccion" placeholder="">
                                        </div>
                                        <div class="m-1">
                                            <label class="block text-white-500 text-sm font-bold text-left">Punto</label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                              type="text" wire:model.defer="point" placeholder="">
                                        </div>
                                        <div class="m-1">
                                            <label class="block text-white-500 text-sm font-bold text-left">Fecha de entrega</label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                              type="datetime-local" wire:model.defer="fechaEnd"> 
                                        </div>
                                        <div class="col-span-6 sm:col-span-4">
                                            <select wire:model.defer="type">
                                                <option value="Practica" >Práctica (0.6)</option>
                                                <option value="Proyecto" >Proyecto (0.4)</option>                                                
                                            </select>
                                        </div>
                                        <div class="m-1">
                                            <label class="block text-white-500 text-sm font-bold text-left">Archivo</label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                              type="text" wire:model.defer="file" placeholder="">
                                        </div>
                                        <div class="flex"> 
                                            <div class="p-7 flex justify-end items-center w-full bg-transparent   -px-2">
                                                <button type="button" @click="modalHomeWorkV = false" class="bg-transparent hover:bg-red-700 hover:text-white-500 dark:text-white-500 border
                                                    border-red-600 text-white font-serif py-2 px-4  mr-3  rounded">
                                                    Cancelar
                                                </button>
                                                <button type="button" class="bg-transparent hover:bg-bluefacebook hover:text-white-500 dark:text-white-500 border border-indigo-800 
                                                    text-white font-serif py-2 px-4 rounded mr-3" wire:click="createHomeWork">
                                                    {{$btn_txt}}
                                                </button>
                                            </div>
                                        </div>                                        
                                    </div>                                
                                </div>
                            </div>
                        </div>      
                        <!-- Aqui empieza el modal -->
                    </div>
                </div>
            </div>
        </section>
    </main> 

    {{-- modal liveClass --}}
    <main class="mx-auto   "x-data="{ 'mLiveClass': @entangle('modalLiveClass') }" @keydown.escape="mLiveClass = false">
        <section class="flex flex-wrap p-4">
            <div class="overflow-auto " style="background-color: rgba(0,0,0,0.5)" x-show="mLiveClass" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': mLiveClass }">
                <div class="dark:bg-gray-500   modal   bg-white-900  rounded-lg shadow-2xl  sm:m-8" 
                    @click.away="mLiveClass = false">
                    <div class="flex justify-between items-center border-b p-2 text-xl">
                        <h6 class="text-md font-serif dark:text-white-500 text-gray-800 mx-7 ">Clases en Vivo</h6>
                        <button type="button " @click="mLiveClass = false" class="dark:text-white-500 text-gray-500">✖</button>
                    </div>                    
                    <div class="p-2">
                        <!-- Aqui empieza el modal -->
                        <div class="px-5 overflow-x-hidden overflow-y-auto dark:bg-gray-500 bg-white-700" >
                            
                            <div class="flex flex-wrap -mx-3 ">                               
                                <div class="w-full h-full">
                                    <br>
                                    <div>
                                        <div class="m-1">
                                            <label class="block text-white-500 text-sm font-bold text-left">Clase</label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                              type="text" wire:model.defer="nameLive" placeholder="">
                                        </div>
                                        <div class="m-1">
                                            <label class="block text-white-500 text-sm font-bold text-left">Url Zoom</label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                              type="text" wire:model.defer="urlZoom" placeholder="">
                                        </div>
                                        <div class="m-1">
                                            <label class="block text-white-500 text-sm font-bold text-left">Url Material</label>
                                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                              type="text" wire:model.defer="urlMaterial" placeholder="">
                                        </div>
                                        <div class="flex"> 
                                            <div class="p-7 flex justify-end items-center w-full bg-transparent   -px-2">
                                                <button type="button" @click="mLiveClass = false" class="bg-transparent hover:bg-red-700 hover:text-white-500 dark:text-white-500 border
                                                    border-red-600 text-white font-serif py-2 px-4  mr-3  rounded">
                                                    Cancelar
                                                </button>
                                                <button type="button" class="bg-transparent hover:bg-bluefacebook hover:text-white-500 dark:text-white-500 border border-indigo-800 
                                                    text-white font-serif py-2 px-4 rounded mr-3" wire:click="createLiveClass">
                                                    {{$btn_txt}}
                                                </button>
                                            </div>
                                        </div>                                        
                                    </div>                                
                                </div>
                            </div>
                        </div>      
                        <!-- Aqui empieza el modal -->
                    </div>
                </div>
            </div>
        </section>
    </main> 

    
    @push('js')
        <script>
            function alertDelete(id, tipo){
                alertify.confirm("Seguro de eliminar ",
                    function(){
                        if(tipo== 1) {
                            Livewire.emit('destroyWeek',id)
                        }
                        else if(tipo == 2) {
                            Livewire.emit('destroyHomeWork',id)
                        }
                        else if(tipo == 3) {
                            Livewire.emit('destroyLiveClass',id)
                        }
                        alertify.success('Eliminado');
                    },
                    function(){
                        alertify.error('Cancelado');
                });
            }
        </script>
    @endpush
    
</div>
