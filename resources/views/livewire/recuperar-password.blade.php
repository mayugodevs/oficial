<div>
    @push('css')
        <style>
            .contentmygo {
                display: none !important;
            }

            .footeracceso {
                display: none !important;
            }

        </style>
    @endpush 
    
        <div class="dark:bg-colheaderdark bg-bgfondopricingwhite h-screen ">

            @if ($tipo == 1)
                <div class="md:pt-40  pt-10">
                    <div id="play1" class=" md:w-4/12 w-full md:px-0 px-4  mx-auto h-auto    rounded-2xl  pt-10 pb-10">


                        <div class=" flex flex-col w-full pb-8">
                            <div class="mx-auto flex items-center">
                                <svg class="dark:text-green_home text-delesteicono" width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="text-green_icono dark:text-green_especialidad" x="5" y="5" width="56" height="56" rx="28" fill="Currentcolor" />
                                    <path class="text-bcklightbuscador dark:text-bgbtngreen "
                                        d="M37.0834 27.7499L41.1667 23.6666M43.5001 21.3333L41.1667 23.6666L43.5001 21.3333ZM32.2884 32.5449C32.8908 33.1393 33.3697 33.847 33.6975 34.6272C34.0252 35.4074 34.1954 36.2447 34.1983 37.091C34.2011 37.9373 34.0365 38.7757 33.714 39.5581C33.3914 40.3405 32.9173 41.0514 32.3189 41.6498C31.7205 42.2482 31.0097 42.7223 30.2273 43.0448C29.4449 43.3674 28.6064 43.532 27.7601 43.5291C26.9139 43.5263 26.0765 43.3561 25.2963 43.0283C24.5161 42.7005 23.8085 42.2216 23.2141 41.6193C22.0452 40.4091 21.3985 38.7882 21.4131 37.1058C21.4277 35.4233 22.1025 33.814 23.2922 32.6242C24.4819 31.4345 26.0913 30.7597 27.7738 30.7451C29.4562 30.7305 31.077 31.3772 32.2872 32.5461L32.2884 32.5449ZM32.2884 32.5449L37.0834 27.7499L32.2884 32.5449ZM37.0834 27.7499L40.5834 31.2499L44.6667 27.1666L41.1667 23.6666L37.0834 27.7499Z"
                                        stroke="Currentcolor" stroke-width="2.33333" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <rect class="" x="5" y="5" width="56" height="56" rx="28" stroke="Currentcolor" stroke-width="10" />
                                </svg> 
                            </div>

                            <div class="dark:text-bordersec text-gray-650 text-center font-inter  text-2xl font-semibold pt-6">
                                ¿Olvidaste tu contraseña?
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-650 font-normal font-inter text-sixteen text-center leading-6 pt-3">
                                No te preocupes, te enviaremos instrucciones para que puedas cambiar la contraseña.

                            </div>
                        </div>

                        <div class="pb-6">
                            <label class="dark:text-bgprogresb text-txtnamecomntpkyr   text-sm font-medium font-inter text-left " for="name">Correo
                                Electrónico</label>
                            <input class="  w-full py-2.5 px-3 mt-1 border placeholder-pricingdarkstudents font-inter text-sm font-normal dark:border-txtcommentply  
                                border-borderconcours focus:outline-none dark:ring-transparent dark:bg-black bg-white-100   dark:text-white-500 
                                text-txtnamecomntpkyr rounded-lg"
                                type="text" placeholder="Escribe tu correo electrónico" required wire:model.defer="email" id="email_inp">

                        </div>

                        <div class=" flex justify-end items-center w-full  ">
                            <button type="button" id="icon1" class="bg-green text-lg font-medium w-full focus:outline-none   text-white-100 font-inter py-2.5  rounded-lg "
                                onclick="validateEmailttt()">
                                Recuperar contraseña
                            </button>

                        </div class="flex flex-col">
                        <div class=" text-center  pt-8 dark:text-pricingdarkstudents text-gray-600 font-inter text-sm font-medium  ">
                            ¿No tienes cuenta en MayuGo? <a href="{{ route('registroMayugo') }}"
                                class="dark:text-bgbtngreen text-bcklightbuscador">Registrarse </a>
                        </div>

                        <div class=" text-center  pt-2 dark:text-pricingdarkstudents text-gray-600 font-inter text-sm font-medium  ">
                            También puedes <a href="{{ route('acceso') }}" class="dark:text-bgbtngreen text-bcklightbuscador">Iniciar sesión</a>
                        </div>
                    </div>

                </div>
            @elseif ($tipo == 2)
                <div id="play2" class=" md:px-0  md:w-4/12 w-full mx-auto h-auto    rounded-2xl px-4 pt-10 pb-10">


                    <div class=" flex flex-col w-full pb-8">
                        <div class="mx-auto flex items-center ">
                            <svg class="dark:text-green_home text-delesteicono" width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect class="text-green_icono dark:text-btncomentresply" x="5" y="5" width="56" height="56" rx="28" fill="Currentcolor" />
                                <path class="text-bcklightbuscador dark:text-bgbtngreen "
                                    d="M22.5 28.333L31.7057 34.4701C32.4895 34.9926 33.5105 34.9926 34.2943 34.4701L43.5 28.333M24.8333 41.1663H41.1667C42.4553 41.1663 43.5 40.1217 43.5 38.833V27.1663C43.5 25.8777 42.4553 24.833 41.1667 24.833H24.8333C23.5447 24.833 22.5 25.8777 22.5 27.1663V38.833C22.5 40.1217 23.5447 41.1663 24.8333 41.1663Z"
                                    stroke="Currentcolor" stroke-width="2.33333" stroke-linecap="round" stroke-linejoin="round" />
                                <rect x="5" y="5" width="56" height="56" rx="28" stroke="Currentcolor" stroke-width="10" />
                            </svg>
                        </div>


                        <div class="dark:text-bordersec text-gray-650  text-center font-inter  text-2xl  font-semibold pt-6">
                            Revisa tu correo
                        </div>
                        <div
                            class=" dark:text-pricingdarkstudents text-gray-650 font-normal font-inter text-sixteen text-center leading-6 pt-3">
                            Acabamos de enviarte un email con las instrucciones a <span class="font-semibold">{{$user_existe->email}}</span> <br>
                            <span class="italic">*Si no logras encontrarlo, revisa tu bandeja de spam.</span>
                        </div>
                    </div>

                    {{-- <div class=" flex justify-end items-center w-full  ">
                        <button type="button" id="icon2"
                            class="bg-green text-lg font-medium w-full  focus:outline-none    text-white-100 font-inter py-2.5  rounded-lg "
                            >
                            Iniciar sesión
                        </button>

                    </div> --}}

                </div>  
            @elseif ($tipo == 3) 
                <div class="md:pt-0  pt-10">
                    <div id="play3" class=" md:w-4/12 w-full md:px-0 px-4  mx-auto     rounded-2xl  ml:pt-10 xl:pt-0 lg:pt-0 md:pt-0  pb-10">

                        <div class=" flex flex-col w-full pb-8">
                            <div class="mx-auto flex items-center text-bcklightbuscador">
                                <svg  class="dark:text-green_home text-delesteicono" width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="text-green_icono dark:text-btncomentresply" x="5" y="5" width="56" height="56" rx="28" fill="Currentcolor"/>
                                    <path class="text-bcklightbuscador dark:text-bgbtngreen " d="M37.0833 27.7502L41.1667 23.6668M43.5 21.3335L41.1667 23.6668L43.5 21.3335ZM32.2883 32.5452C32.8907 33.1395 33.3696 33.8472 33.6974 34.6274C34.0252 35.4076 34.1954 36.245 34.1982 37.0912C34.201 37.9375 34.0365 38.776 33.7139 39.5583C33.3914 40.3407 32.9173 41.0516 32.3189 41.65C31.7205 42.2484 31.0096 42.7225 30.2272 43.0451C29.4448 43.3676 28.6063 43.5322 27.7601 43.5294C26.9138 43.5265 26.0765 43.3563 25.2963 43.0285C24.5161 42.7008 23.8084 42.2219 23.214 41.6195C22.0452 40.4093 21.3984 38.7884 21.413 37.106C21.4276 35.4236 22.1025 33.8142 23.2922 32.6245C24.4819 31.4348 26.0913 30.76 27.7737 30.7453C29.4561 30.7307 31.077 31.3775 32.2872 32.5463L32.2883 32.5452ZM32.2883 32.5452L37.0833 27.7502L32.2883 32.5452ZM37.0833 27.7502L40.5833 31.2502L44.6667 27.1668L41.1667 23.6668L37.0833 27.7502Z" stroke="Currentcolor" stroke-width="2.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="5" y="5" width="56" height="56" rx="28" stroke="Currentcolor" stroke-width="10"/>
                                    </svg>
                            </div>


                            <div class="dark:text-bordersec text-gray-650 text-center font-inter  text-2xl font-semibold pt-6">
                                Recuperar contraseña
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-650 font-normal font-inter text-sixteen text-center leading-6 pt-3">
                                ¡Hola {{$user_existe->nombres}}! Ingresa tu nueva contraseña

                            </div>
                        </div>

                        <div class="pb-6">
                            <label class="dark:text-bgprogresb text-txtnamecomntpkyr   text-sm font-medium font-inter text-left " for="name">
                                Ingrese nueva contraseña 
                            </label>
                            <div class="relative">
                                <input class="  w-full py-2.5 px-3 mt-1 border placeholder-pricingdarkstudents font-inter text-sm font-normal dark:border-txtcommentply  border-borderconcours focus:outline-none dark:ring-transparent dark:bg-black bg-white-100   dark:text-white-500 text-txtnamecomntpkyr rounded-lg"
                                type="password" placeholder="Ingrese contraseña" required wire:model.defer="pass1" id="pass_one">  
                                <div id="type_eye_one"> </div>
                                <div id="error_password"> </div>
                                  
                            </div>

                        </div>

                        <div class="pb-6">
                            <label class="dark:text-bgprogresb text-txtnamecomntpkyr   text-sm font-medium font-inter text-left " for="name">
                                Confirmar nueva contraseña
                            </label>
                            <div class="relative">
                                <input class="  w-full py-2.5 px-3 mt-1 border placeholder-pricingdarkstudents font-inter text-sm font-normal dark:border-txtcommentply  border-borderconcours focus:outline-none dark:ring-transparent dark:bg-black bg-white-100   dark:text-white-500 text-txtnamecomntpkyr rounded-lg"
                                type="password" placeholder="Confirme contraseña" required wire:model.defer="pass2" id="pass_two">      
                                <div id="type_eye_two"> </div>                     
                                <div id="error_passw_two"> </div>                     
                            </div>
                        </div>

                        <div class=" flex justify-end items-center w-full  ">
                            <button type="button" id="icon3" disabled
                                class="bg-green text-lg font-medium w-full focus:outline-none   text-white-100 font-inter py-2.5  rounded-lg "
                                onclick="validatePasswords()">
                                Actualizar contraseña
                            </button>
                        </div>
                    </div>

                </div>
            @else
                <div class="md:pt-5  pt-10">
                    <div id="play4" class=" md:w-4/12 w-full md:px-0 px-4  mx-auto h-auto rounded-2xl  pt-10 pb-10">

                        <div class=" flex flex-col w-full pb-8">
                            <div class="mx-auto flex items-center ">
                                <svg class="dark:text-green_home text-delesteicono" width="67" height="66" viewBox="0 0 67 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="text-green_icono dark:text-btncomentresply" x="5.5" y="5" width="56" height="56" rx="28" fill="Currentcolor"/>
                                    <path class="text-bcklightbuscador dark:text-bgbtngreen " d="M45.1667 31.9262V32.9995C45.1653 35.5153 44.3506 37.9633 42.8443 39.9783C41.3379 41.9933 39.2205 43.4674 36.808 44.1807C34.3954 44.8941 31.8168 44.8084 29.4569 43.9365C27.097 43.0647 25.0821 41.4533 23.7128 39.3428C22.3435 37.2322 21.6931 34.7356 21.8587 32.2252C22.0242 29.7148 22.9968 27.3252 24.6314 25.4128C26.266 23.5003 28.475 22.1675 30.9289 21.613C33.3829 21.0586 35.9504 21.3122 38.2484 22.3362M45.1667 23.6662L33.5 35.3445L30 31.8445" stroke="Currentcolor" stroke-width="2.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                    <rect x="5.5" y="5" width="56" height="56" rx="28" stroke="Currentcolor" stroke-width="10"/>
                                    </svg>                                 

                            </div>


                            <div class="dark:text-bordersec text-gray-650 text-center font-inter md:text-3xl text-2xl font-semibold pt-6">
                                Contraseña actualizada
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-650 font-normal font-inter text-sixteen text-center leading-6 pt-3">
                                Su contraseña ha sido restablecida con éxito. 
                            </div>
                            <div>
                                <a href="{{ route('inicio') }}">Iniciar Session</a>
                            </div>
                        </div>
                    </div>
                </div> 
            @endif 
            @if ($message_estado != '') 
                <script>
                    let msg = @json($message_estado);
                    setTimeout(() => {
                        alerta()
                    }, 1000); 

                    function alerta(){
                        toastr.warning(msg,'¡Alerta!.', {timeOut: 4000})         
                    }
                    
                </script>
            @endif

        </div> 
        
    @push('js') 
        <script> 
            let email_inp = document.getElementById('email_inp');
            let pass_one = document.getElementById('pass_one');
            let pass_two = document.getElementById('pass_two');
            let type_eye_one = document.getElementById('type_eye_one');
            let type_eye_two = document.getElementById('type_eye_two'); 
            let btn_valid = document.getElementById('icon3'); 
            let error_password = document.getElementById('error_password'); 
            let error_passw_two = document.getElementById('error_passw_two');  
             
            let count_errors = 0; 
            closeEye(type_eye_one, 'firstEye', pass_one);
            closeEye(type_eye_two, 'secondEye', pass_two);

            function validateEmailttt(){
                if (email_inp.value) {
                    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
                    // emailRegex = /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/; 
                    if (emailRegex.test(email_inp.value)) {
                        toastr.success('Ahora estoy buscandote...', '¡Bien!.', {timeOut: 3000});
                        Livewire.emit('validar_email');
                    }
                    else toastr.warning('¡Alerta!.', 'No parece valido ', {timeOut: 2000});  
                    
                } else toastr.error('Correo vacio', '¡Error!', {timeOut: 2000});
            }

            pass_one.oninput = function() {
                let contentPattern = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
                error_password.innerHTML = '';  
                if (pass_one.value.length >= 10 && pass_one.value.length < 20) errors[0].estado = 1;
                else errors[0].estado = 0 
                if (haveNumber(pass_one.value.trim())) errors[1].estado = 1;
                else errors[1].estado = 0;
                if (type_letters(pass_one.value.trim(), 0)) errors[2].estado = 1;
                else errors[2].estado = 0;
                if (type_letters(pass_one.value.trim(), 1)) errors[3].estado = 1;
                else errors[3].estado = 0;
                if(contentPattern.exec(pass_one.value.trim()))errors[4].estado = 1;
                else errors[4].estado = 0;
                
                drawErrors();
            };   
            pass_two.oninput = function() { 
                if (pass_one.value.trim() === pass_two.value.trim()) {
                    error_passw_two.innerHTML = '<span class="text-green">Contraseñas coinciden</span>'
                    count_errors ++;
                    btn_valid.disabled = false;
                } else {
                    error_passw_two.innerHTML = '<span class="text-red-500">Contraseñas no coinciden</span>'
                    btn_valid.disabled = true;
                }
            };
                        
            function validatePasswords(){
                if (pass_one.value.trim() && pass_two.value.trim()) {                              
                    if (pass_one.value.trim() === pass_two.value.trim()) Livewire.emit('verificar_password'); 
                    else toastr.error('Contraseña no coinciden', '¡Error!', {timeOut: 2000});
                   
                } else toastr.error('Contraseña vacio', '¡Error!', {timeOut: 2000});
            }
            function firstEye(type){ 
                if (type) openEye(type_eye_one, 'firstEye', pass_one);
                else closeEye(type_eye_one, 'firstEye', pass_one);
            }
            function secondEye(type){
                if (type) openEye(type_eye_two, 'secondEye', pass_two);
                else closeEye(type_eye_two, 'secondEye', pass_two);
            }
            function openEye(id_div, position, id_input){
                id_input.type = 'text';
                id_div.innerHTML = `
                    <button onclick="${position}(false)">
                        <svg class="h-5 w-5 text-red-900"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />  <circle cx="12" cy="12" r="3" /></svg>
                    </button>   
                `
            }
            function closeEye(id_div, position, id_input){
                id_input.type = 'password';
                id_div.innerHTML = `
                    <button onclick="${position}(true)">
                        <svg class="h-5 w-5 text-red-900"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"/>
                        </svg>
                    </button>
                `                
            }

        </script>
    @endpush
    <script> 
        window.addEventListener('redirect', () => {  
            setTimeout(() => {
                window.location.href = '../';
            }, 5000);
        }) 
    </script>
</div>
