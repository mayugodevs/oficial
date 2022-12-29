<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

       

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div> 
                <x-jet-input id="email" class="w-full text-base py-2 border border-green focus:outline-none focus:border-green" placeholder="Tu email" type="email" name="email" :value="old('email')" required autofocus />
            </div>
           
            
            <div class="mt-4"> 
                <x-jet-input id="password" class="w-full text-lg py-2  focus:outline-none focus:border-green" type="password" placeholder="Tu contraseña" name="password" required autocomplete="current-password" />
                <div class="flex justify-between items-center">
                    <div>
                        <a class="text-xs font-light font-display text-indigo-600 hover:text-indigo-800
                        cursor-pointer">
                        ¿Olvidaste tu contraseña?
                        </a>
                    </div>
                </div>
            </div>

            {{--<div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recuerdame') }}</span>
                </label>
            </div>--}}

            <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
              {{-- @if (Route::has('password.request'))
                    <a class="text-xs font-display font-semibold text-indigo-600 hover:text-indigo-800
                    cursor-pointer" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif--}}
               
                <x-jet-button class="bg-green-500 text-gray-100 p-4 w-42 rounded-full tracking-wide
                font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-green-600
                shadow-lg">
                    {{ __('Inicia sesión') }}
                </x-jet-button>

                <x-jet-validation-errors class="mb-4" />
          
            </div>
        </form>
        <div class="mt-12 text-sm font-display font-semibold text-gray-700 text-center">
            ¿Aún no tienes cuenta en MayuGo? <div class="mt-10">
                <button class="bg-indigo-500 text-gray-100 p-4 w-48 rounded-full tracking-wide
                font-semibold font-display focus:outline-none focus:shadow-outline hover:bg-indigo-600
                shadow-lg">
                    Regístrate
                </button>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
