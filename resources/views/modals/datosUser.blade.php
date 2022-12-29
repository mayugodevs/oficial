<div x-data="datosUser()" >
    <div class="items-center sm:my-9 my-3 px-0  flex md:justify-end">
        <button id="play1"
            class="rounded-md text-green_especialidad ml:px-4 xl:px-2 lg:px-2  px-4 focus:outline-none py-2 bg-bgbtngreen  justify-center flex items-center"
            x-on:click="abrirModal()">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M7.16707 3.16716H3.00041C2.07993 3.16716 1.33374 3.91335 1.33374 4.83382V14.0005C1.33374 14.921 2.07993 15.6672 3.00041 15.6672H12.1671C13.0875 15.6672 13.8337 14.921 13.8337 14.0005V9.83382M12.6552 1.98864C13.3061 1.33777 14.3614 1.33777 15.0122 1.98864C15.6631 2.63952 15.6631 3.69479 15.0122 4.34567L7.85742 11.5005H5.50041L5.50041 9.14346L12.6552 1.98864Z"
                    stroke="#145229" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Editar perfil
        </button>
    </div>


    <div class="bg-black bg-opacity-50  inset-0 justify-center items-center flex fixed z-50 overflow-y-auto "
        id="m_user_datos" x-show="modal" wire:ignore>
        <div class=" bg-whitetext  px-6 py-10 sm:max-w-2xl w-11/12 my-4 md:my-0  rounded shadow-xl absolute lg:static top-0 ">

            <!-- Modal body -->
            <div>
                <div class="w-full justify-center">
                    <div class="block text-textpricingwhite text-md font-bold text-center w-full mb-2">Foto de perfil
                    </div>
                    <div class="flex justify-center">
                        <label for="fuplad" class="custom-file-upload relative cursor-pointer">
                            <div class="absolute -right-1 bottom-0">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0 11.9993C0 18.6263 5.37227 23.9986 11.9993 23.9986C18.6263 23.9986 23.9986 18.6263 23.9986 11.9993C23.9986 5.37227 18.6263 0 11.9993 0C5.37227 0 0 5.37227 0 11.9993Z"
                                        fill="#4B5565" />
                                    <path
                                        d="M6 9.99935C6 9.26297 6.59695 8.66601 7.33333 8.66601H7.95309C8.39889 8.66601 8.8152 8.44321 9.06249 8.07228L9.60418 7.25975C9.85146 6.88882 10.2678 6.66602 10.7136 6.66602H13.2864C13.7322 6.66602 14.1485 6.88882 14.3958 7.25975L14.9375 8.07228C15.1848 8.44321 15.6011 8.66601 16.0469 8.66601H16.6667C17.403 8.66601 18 9.26297 18 9.99935V15.9993C18 16.7357 17.403 17.3327 16.6667 17.3327H7.33333C6.59695 17.3327 6 16.7357 6 15.9993V9.99935Z"
                                        stroke="white" stroke-width="1.33333" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M14 12.666C14 13.7706 13.1046 14.666 12 14.666C10.8954 14.666 10 13.7706 10 12.666C10 11.5614 10.8954 10.666 12 10.666C13.1046 10.666 14 11.5614 14 12.666Z"
                                        stroke="white" stroke-width="1.33333" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div> 
                            <img class="h-20 w-20 border border-gray-400 rounded-full" src="{{ asset($user->avatar) }}"
                            alt="perfil">
                           
                    </div>
                    </label>

                    <input type="file" class="hidden" name="" id="fuplad" wire:model="fotoTemporal">

                </div>
                <form action="#" id="form_aboutme">
                    <div class="grid grid-cols-2 gap-6 md:gap-7 mt-7">
                        <div class="col-span-2 md:col-span-1">
                            <label for="name" class="block text-textpricingwhite text-sm font-bold text-left">Tus
                                nombres</label>
                            <input type="text" id="name" class="mt-1 inputtalks" placeholder="Jose L..." required
                                wire:model.defer="nombre" name="name_ed">
                            <span id="validate_name_ed"></span>
                        </div>
    
                        <div class="col-span-2 md:col-span-1">
                            <label for="last" class="block text-textpricingwhite text-sm font-bold text-left">Tus
                                apellidos</label>
                            <input type="text" id="last" class="mt-1 inputtalks" placeholder="Wong F..." required
                                wire:model.defer="apellidos" name="last_ed">
                            <span id="validate_last_ed"></span>
                        </div>
                    </div>
    
                    <div class="grid grid-cols-2 gap-6 md:gap-7 mt-7">
                        <div class="col-span-2 md:col-span-1">
                            <label for="phone" class="block text-textpricingwhite text-sm font-bold text-left">N°
                                celular</label>
                            <input type="number" id="phone" class="mt-1 inputtalks" placeholder="+52 958623....."
                                wire:model.defer="telf" name="telf_ed">
                            <span id="validate_telf_ed"></span>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <label for="birthday" class="block text-textpricingwhite text-sm font-bold text-left">Tu
                                fecha de nacimiento</label>
                            <input type="date" id="birthday" class="mt-1 inputtalks" placeholder="Wongito2022 ..."
                                wire:model.defer="fecha_nac" name="dob_ed">
                                <span id="validate_dob_ed"></span>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <label for="genero"
                                class="block text-textpricingwhite text-sm font-bold text-left">Género</label>
                            <select class="outline-none px-3 py-2 border border-pricingtextdark rounded-threepx mt-1"
                                wire:model.defer="genero">
                                @php
                                    $genero = $genero;
                                    $M = $genero == 'M' ? 'selected' : '';
                                    $F = $genero == 'F' ? 'selected' : '';
                                    $O = $genero == 'O' ? 'selected' : '';
                                @endphp
                                <option value="0">Seleccione</option>
                                <option value="M" {{ $M }}>Masculino</option>
                                <option value="F" {{ $F }}>Femenino</option>
                                <option value="O" {{ $O }}>Otro</option>
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label for="aboutme" class="block text-textpricingwhite text-sm font-bold text-left">Tu sobre mi</label>
                            <input type="text" class="mt-1 inputtalks" placeholder="Wongito2022 ..." wire:model.defer="about_me" name="about_ed">
                            <span id="validate_about_ed"></span>
    
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <label for="facebook" class="block text-textpricingwhite text-sm font-bold text-left">Tu
                                link facebook</label>
                            <input type="text" id="facebook" class="mt-1 inputtalks" placeholder="facebook.com/..."
                                required wire:model.defer="perfil_face" name="face_ed">
                                <span id="validate_face_ed"></span>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <label for="instagram" class="block text-textpricingwhite text-sm font-bold text-left">Tu
                                link instagram</label>
                            <input type="text" id="instagram" class="mt-1 inputtalks" placeholder="instagram.com/..."
                                required wire:model.defer="inst" name="inst_ed">
                                <span id="validate_inst_ed"></span>
                        </div>
    
                        <div class="col-span-2 md:col-span-1">
                            <label for="linkedin" class="block text-textpricingwhite text-sm font-bold text-left">Tu
                                link linkedin</label>
                            <input type="text" id="linkedin" class="mt-1 inputtalks" placeholder="linkedin.com/..."
                                required wire:model.defer="perfil_link" name="link_ed">
                                <span id="validate_link_ed"></span>
                        </div>
                        <div class="col-span-2 md:col-span-1">
                            <label for="tiktok" class="block text-textpricingwhite text-sm font-bold text-left">Tu
                                link tiktok</label>
                            <input type="text" id="tiktok" class="mt-1 inputtalks" placeholder="tiktok.com/..."
                                required wire:model.defer="tikt" name="tikt_ed">
                                <span id="validate_tikt_ed"></span>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Modal footer -->
            <div class=" text-right mt-6 ">
                <button x-on:click="cerrarModal()" class="text-navtextwhite mx-2 close"> Cancelar </button>
                <button data-modal-toggle="large-modal" type="button"
                    class=" ml-2 h-11 bg-bgbtngreen transition duration-150 ease-in-out rounded text-green_especialidad px-6 py-2 text-base  font-bold focus:outline-none focus:ring-2 focus:ring-offset-2  "
                    x-on:click="validarUser()">Guardar</button>
            </div>
        </div>

    </div>
    @push('js')
    <script>
        function datosUser() {
            return {
                modal: false,

                cerrarModal() {
                    this.modal = false 
                },
                abrirModal() { 
                    this.modal = true 
                },
                validarUser() {                    
                    if (input_estado.name.estado && input_estado.last.estado) { 
                        Livewire.emit('saveDatosUser')
                        setTimeout(() => {
                            this.modal = false  
                        }, 1500);
                    }
                    else toastr.error('¡Error!', 'Datos erroneos');
                },                 

            }
        } 
        let input_estado = {
            name : {
                estado : true,
                mensaje : 'Solo letras y espacios'
            },
            last : {
                estado : true,
                mensaje : 'Solo letras y espacios'
            },
            telf : {
                estado : false,
                mensaje : 'Solo números',
            },
            about_me : {
                estado : false,
                mensaje : 'No script',
            },
        }
        const inputs = document.querySelectorAll('#form_aboutme input');
        const validarFormulario = (e) => {
            switch (e.target.name) {
                case "name_ed": 
                    validarCampoPrueb(regular_expressions.string, e.target, input_estado.name);
                break;
                case "last_ed":
                    validarCampoPrueb(regular_expressions.string, e.target, input_estado.last);
                break;
                case "telf_ed":
                    validarCampoPrueb(regular_expressions.integer, e.target, input_estado.telf);
                break; 
                // case "about_ed":
                //     validarCampoPrueb(regular_expressions.text, e.target, input_estado.about_me);
                // break; 
            }
        }        
        inputs.forEach((input) => {
            input.addEventListener('keyup', validarFormulario);
            input.addEventListener('blur', validarFormulario);
        });


        
    </script>
    @endpush
</div>
