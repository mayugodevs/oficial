<div>
    <button wire:click="interesado({{$id_esp}})">Agendar Asesoria </button>

    <main class="mx-auto "x-data="{ 'isDialogOpen': @entangle('luiss') }" @keydown.escape="isDialogOpen = false">
        <section class="flex flex-wrap p-4">
            <div class="overflow-auto " style="background-color: rgba(0,0,0,0.5)" x-show="isDialogOpen" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': isDialogOpen }">
                <div class="dark:bg-gray-500   modal   bg-white-900  rounded-lg shadow-2xl  sm:m-8" 
                    @click.away="isDialogOpen = false">
                    <div class="flex justify-between items-center border-b p-2 text-xl">
                        <h6 class="text-md font-serif dark:text-white-500 text-gray-800 mx-7 ">¡Solicite un servicio!</h6>
                        <button type="button " @click="isDialogOpen = false" class="dark:text-white-500 text-gray-500">✖</button>
                    </div>                    
                    <div class="p-2 ">
                        <!-- Aqui empieza el modal -->
                        <div class="px-5 overflow-x-hidden overflow-y-auto dark:bg-gray-500 bg-white-700" >
                            
                            <div class="flex flex-wrap -mx-3 ">                               
                                <div class="w-full h-full">
                                    <br>
                                    <div>
                                        <div class="m-1">
                                            <label class="block text-white-500 text-sm font-bold text-left">Seleccione</label>
                                            <select name="" id="" wire:click="tipoServicio()" wire:model.defer="tiposerv">
                                                {{-- <option value="0">Seleccione</option> --}}
                                                <option value="1">Persona</option>
                                                <option value="2">Empresa</option>
                                            </select>
                                        </div>
                                        @if ($empresa)
                                            <div class="grid grid-cols-2">
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-sm font-bold text-left">Nombre y apellidos</label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                        type="text" wire:model.defer="names_serv" placeholder="Nombre y apellidos">
                                                </div>
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-sm font-bold text-left">Cargo</label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                        type="text" wire:model.defer="cargo_serv" placeholder="Cargo">
                                                </div>
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-sm font-bold text-left">Correo</label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                        type="text" wire:model.defer="email_serv" placeholder="Correo">
                                                </div>
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-sm font-bold text-left">País</label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                        type="text" wire:model.defer="pais_serv" placeholder="País">
                                                </div>
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-sm font-bold text-left  " for="name">Teléfono</label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                        type="text" wire:model.defer="telef_serv" placeholder="Teléfono">
                                                    </div>
                                                    <div class="m-1">
                                                    <label class="block text-white-500 text-sm font-bold text-left  " for="name">Nombre de la empresa</label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                        type="text" wire:model.defer="empres_serv" placeholder="Nombre de la empresa">
                                                </div>
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-sm font-bold text-left  " for="name">Rubro de la empresa</label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                    type="text" wire:model.defer="rubro_serv" placeholder="Rubro de la empresa">
                                                </div>
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-sm font-bold text-left  " for="name">Fecha de servicio</label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                        type="date" wire:model.defer="fecha_serv" placeholder="Fecha de servicio">
                                                </div>
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-sm font-bold text-left  " for="name">N° de personas (min 3)</label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                    type="text" wire:model.defer="cant_serv" placeholder="N° de personas (min 3)">
                                                </div>
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-sm font-bold text-left  " for="name">Tiempo de servicio(h)</label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                    type="text" wire:model.defer="tiempo_serv" placeholder="Tiempo de servicio(h)">
                                                </div>
                                                <div class="m-1 col-span-2">
                                                    <label class="block text-white-500 text-sm font-bold text-left">¿ Qué objetivos tiene tu equipo?</label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                        type="text" wire:model.defer="objet_serv" placeholder="¿ Qué objetivos tiene tu equipo?">
                                                </div>
                                            </div>
                                        @else
                                            <div class="grid grid-cols-2">                                                
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-sm font-bold text-left  " for="name">Fecha de servicio</label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                        type="date" wire:model.defer="fecha_serv">
                                                </div>
                                                <div class="m-1">
                                                    <label class="block text-white-500 text-sm font-bold text-left  " for="name">Tiempo de servicio(h)</label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                    type="text" wire:model.defer="tiempo_serv" placeholder="Tiempo de servicio(h)">
                                                </div>
                                                <div class="m-1 col-span-2">
                                                    <label class="block text-white-500 text-sm font-bold text-left">¿ Qué objetivos tiene tu equipo?</label>
                                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                        type="text" wire:model.defer="objet_serv" placeholder="¿ Qué objetivos tiene tu equipo?">
                                                </div>
                                               @if (!Auth::user())
                                                    <div class="m-1">
                                                        <label class="block text-white-500 text-sm font-bold text-left">Nombre y apellidos</label>
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                            type="text" wire:model.defer="names_serv" placeholder="Nombre y apellidos">
                                                    </div>
                                                    <div class="m-1">
                                                        <label class="block text-white-500 text-sm font-bold text-left">Correo</label>
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                            type="text" wire:model.defer="email_serv" placeholder="Correo">
                                                    </div>
                                                    <div class="m-1">
                                                        <label class="block text-white-500 text-sm font-bold text-left">País</label>
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                            type="text" wire:model.defer="pais_serv" placeholder="País">
                                                    </div>
                                                    <div class="m-1">
                                                        <label class="block text-white-500 text-sm font-bold text-left  " for="name">Teléfono</label>
                                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                                            type="text" wire:model.defer="telef_serv" placeholder="Teléfono">
                                                    </div>
                                               @endif
                                            </div>
                                        @endif
                                        
                                        <div class="flex"> 
                                            <div class="p-7 flex justify-end items-center w-full bg-transparent   -px-2">
                                                <button type="button" @click="isDialogOpen = false" class="bg-transparent hover:bg-red-700 hover:text-white-500 dark:text-white-500 border
                                                    border-red-600 text-white font-serif py-2 px-4  mr-3  rounded">
                                                    Cancelar
                                                </button>
                                                <button type="button" class="bg-transparent hover:bg-bluefacebook hover:text-white-500 dark:text-white-500 border border-indigo-800 
                                                    text-white font-serif py-2 px-4 rounded mr-3" wire:click="enviarInteres()">
                                                    Enviar
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
    
</div>
