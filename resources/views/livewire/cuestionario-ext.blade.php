<div> 
    <br>
    <br>
    <br>
    <br>
    <br>
    @if ($indep_slug->tipo== 'Curso')
        {{$name_test->img}} <br>
        {{$name_test->nom}}
    @else
        {{$name_test->img}} <br>
        {{$name_test->nombre}}
    @endif
    
    <br>
    @if ($step == 1)
        <input type="text" name="" id="" wire:model.defer="code_access">
        <input type="button" value="Validar acceso" wire:click="ckechCode">
    @elseif ($step == 2)
        <div class="grid grid-cols-1" x-show="persona">
            <div class="m-1">
                <label class="block text-white-500 text-xl font-bold text-left " for="name">Nombres</label>
                <input
                    class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" placeholder="Juancito" wire:model.defer="name_r" required id="name_r">                                    
            </div>
            <div class="m-1">
                <label class="block text-white-500 text-xl font-bold text-left  " for="password"> Apellidos</label>
                <input
                    class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" placeholder="De Mayugo" wire:model.defer="last_r" required id="last_r">                                    
            </div>
            <div class="m-1">
                <label class="block text-white-500 text-xl font-bold text-left " for="name">Teléfono</label>
                <input
                    class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="number" placeholder="+51 995689569" wire:model.defer="phone_r" required id="phone_r">                                    
            </div>
            <div class="m-1">
                <label class="block text-white-500 text-xl font-bold text-left " for="name">Email</label>
                <input
                    class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="email" placeholder="juancito@mayugo.site" wire:model.defer="email_r" required id="email_r">                                    
            </div>
            <div class="m-1">
                <label class="block text-white-500 text-xl font-bold text-left  " for="password"> Contraseña</label>
                <input
                    class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="password" placeholder="***********" wire:model.defer="pass1_r" required id="pass1_r">                                    
            </div>
            <div class="m-1">
                <label class="block text-white-500 text-xl font-bold text-left  " for="password"> Confirmar Contraseña</label>
                <input
                    class="shadow appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="password" placeholder="***********" wire:model.defer="pass2_r" required id="pass2_r">                                    
            </div>

        </div> 
        
        <div class="flex"> 
            <div class="p-7 w-full bg-transparent "> 
                <button type="button" class="bg-transparent hover:bg-bluefacebook hover:text-white-500 dark:text-white-500 border border-indigo-800 
                    text-white font-serif py-2 px-4 rounded mr-3" onclick="validateDatos()">
                    Registrarse
                </button>
            </div>
        </div>
    @else
        ¡Todo listo!
        Estas a punto de iniciar esta evaluación, lee las instrucciones cuidadosamente, controla tu tiempo y trata de relajarte.
        Si te sientes preparado puedes iniciar dando click al botón "Presentar Examen".

        <button wire:click="goTest">Presentar Examen</button>
    @endif
    @push('js')
        <script>
            function validateDatos(){
                name_r = document.getElementById('name_r').value.trim()
                last_r = document.getElementById('last_r').value.trim()
                phone_r = document.getElementById('phone_r').value.trim()
                email_r = document.getElementById('email_r').value.trim()
                pass1_r = document.getElementById('pass1_r').value.trim()
                pass2_r = document.getElementById('pass2_r').value.trim()
                if (name_r.length > 0) {
                    if (last_r.length > 0) {
                        if (phone_r.length > 0) {
                            if (email_r.length > 0) {
                                if (pass1_r.length > 0) {
                                    if (pass2_r.length > 0) {
                                        if (pass1_r == pass2_r) {
                                            Livewire.emit('checkUser')
                                        } else console.log('passs no son equal');
                                    } else console.log('pass2 empty');
                                } else console.log('pass1 empty');
                            } else console.log('email empty');
                        } else console.log('phone empty');
                    } else console.log('last empty');
                } else console.log('name empty');
            }
        </script>
    @endpush
</div>
