<div x-data="redesSociales()">
    <button
        class="rounded-full px-3 py-2 mt-3 mr-3 hover:text-white-100 transition dark:hover:bg-bluefacebook 
        hover:bg-green focus:border inline-block border-2 dark:border-blue border-green  
        dark:text-white-100 font-serif text-xs"
        x-on:click="abrirModal()"><i class="fas fa-plus"></i> Redes sociales
    </button>
    <div class="bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center"
        id="overlay" x-show="modal">
        <div class="bg-gray-200 max-w-4xl py-2 px-3 rounded shadow-xl text-gray-800 ">
            <div class="flex justify-between items-center">
                <h4 class="text-lg font-bold">Redes Sociales</h4>
                <svg class="h-6 w-6 cursor-pointer p-1 hover:bg-gray-300 rounded-full"
                    x-on:click="cerrarModal()" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <!-- Modal body -->
            <div class="grid grid-cols-2">
                <div>
                    <div class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        <label for="facebook"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tu
                            link facebook</label>
                        <input type="text" id="facebook"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                                dark:text-white"
                            placeholder="facebook.com/..." required
                            wire:model.defer="perfil_face">
                    </div>
                    <div class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        <label for="instagram"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tu
                            link instagram</label>
                        <input type="text" id="instagram"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                                dark:text-white"
                            placeholder="instagram.com/..." required
                            wire:model.defer="perfil_inst">
                    </div>
                </div>
                <div>
                    <div class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        <label for="linkedin"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tu
                            link linkedin</label>
                        <input type="text" id="linkedin"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                                dark:text-white"
                            placeholder="linkedin.com/..." required
                            wire:model.defer="perfil_link">
                    </div>
                    <div class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        <label for="tiktok"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tu
                            link tiktok</label>
                        <input type="text" id="tiktok"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
                                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                                dark:text-white"
                            placeholder="tiktok.com/..." required
                            wire:model.defer="perfil_tikt">
                    </div>
                </div>
            </div>

            <br>
            <!-- Modal footer -->
            <div
                class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                <button data-modal-toggle="large-modal" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
                    focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 
                    dark:focus:ring-blue-800" x-on:click="validar()" wire:click="validar()">Editar</button>
                <button data-modal-toggle="large-modal" type="button"
                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 
                    focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 
                    dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600"
                    x-on:click="cerrarModal()">Cerrar</button>
            </div>
        </div>

        
    </div>
    

    
</div>


