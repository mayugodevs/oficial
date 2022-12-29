<div class=" "> 
    
    <style>
        .contentmygo{
            display: none !important;
        }
        .footeracceso{
        display: none !important;
    }
    </style>
    <main x-data="{ 'isDialogOpen': false, 'create': false }" @keydown.escape="isDialogOpen = false">

        <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite ">
            <x-jet-authentication-card>

                <div class=" ">
                    <x-slot name="logo"></x-slot>

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif 


                    <div class=" rounded-xl">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf 

                            <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-sm font-medium font-inter">
                                Correo electrónico 
                            </div>
                            <div class="pt-1 mt-1">
                                <x-jet-input id="email"
                                    class="w-full text-sm py-2.5 px-3  dark:border-txtcommentply border-borderconcours focus:outline-none dark:ring-transparent dark:bg-black   focus:border-green"
                                    placeholder="Tu email" type="email" name="email" :value="old('email')" required
                                    autofocus />
                            </div>



                            <div class="form-group pt-5"> 
                                <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-sm font-medium font-inter">
                                    Contraseña
                                </div>

                                   
                            <div class="relative">
                                <x-jet-input id="password"
                                    class="w-full text-sm  py-2.5 px-3 dark:border-txtcommentply border-borderconcours focus:outline-none dark:ring-transparent dark:bg-black focus:border-green mt-2"
                                    type="password" placeholder="Tu contraseña" name="password" required
                                    autocomplete="current-password" />   
                                    <div id="eye_status">
                                        <button class="absolute focus:outline-none right-4 top-5" type="button" onclick="firstEye(1)">
                                            <svg class="dark:text-white-700 text-graypricingstrike" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.50004 1.50025L4.491 4.49121M16.5 16.5002L13.5094 13.5096M10.5624 14.6874C10.0565 14.7834 9.5343 14.8336 9.00042 14.8336C5.26904 14.8336 2.11046 12.3812 1.04858 9.00021C1.33766 8.07983 1.78213 7.22825 2.35123 6.47623M7.23227 7.23248C7.68468 6.78007 8.30968 6.50024 9.00004 6.50024C10.3807 6.50024 11.5 7.61953 11.5 9.00024C11.5 9.6906 11.2202 10.3156 10.7678 10.768M7.23227 7.23248L10.7678 10.768M7.23227 7.23248L4.491 4.49121M10.7678 10.768L4.491 4.49121M10.7678 10.768L13.5094 13.5096M4.491 4.49121C5.79086 3.6532 7.33884 3.16691 9.0004 3.16691C12.7318 3.16691 15.8904 5.61934 16.9522 9.00027C16.3631 10.8758 15.1288 12.4657 13.5094 13.5096" stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>                                            
                                        </button>
                                    </div>
                                </div>
                                <div class="flex justify-end items-center pt-6">
                                    <div>
                                        <a class="text-sm font-inter font-normal dark:text-bgbtngreen text-bcklightbuscador
                                            cursor-pointer" href="{{ route('recuperar-password') }}">
                                            ¿Olvidaste tu contraseña?
                                        </a>
                                    </div>
                                </div>
                            </div> 
                            <div
                                class="pt-6 text-sm font-family: Nunito, Arial, sans-serif; font-semibold text-gray-700 text-center"> 

                                <button class="focus:outline-none font-inter text-lg transition duration-500 ease-in-out w-full  bg-green  
                                  text-white-100 font-medium hover:text-white py-2 px-4 border border-green hover:border-transparent  rounded">
                                    Inicia Sesión
                                </button>
                                <x-jet-validation-errors class="mb-2 pt-4 rounded-md sans-serif" />

                            </div>
                        </form>
                        <div class="dividerh  ">
                            <div class="dividero ">
                                <div class="dark:text-borderconcours font-inter font-medium text-sixteen text-txtcommentply mt-1 px-2 dark:bg-graydat  bg-whiteheader">0</div>
                            </div>
                           <div class="border-0 border-t dark:border-txtcommentply border-borderconcours">

                           </div>
                        </div> 
                        <div class="pt-6  ">
                            <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sixteen">
                                Usa una de tus redes
                            </div>

                            <div class="grid grid-cols-3 gap-x-4 pt-2">
                                <div>
                                    <button class="h-11 flex justify-center items-center focus:outline-none text-gray-600 w-full rounded-lg border-pricingdarkstudents dark:border-gray-600 border font-inter text-sixteen">
                                        <div><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2947_8057)">
                                            <path d="M20.6667 10C20.6667 4.47715 16.1896 0 10.6667 0C5.1439 0 0.666748 4.47715 0.666748 10C0.666748 14.9912 4.32358 19.1283 9.10425 19.8785V12.8906H6.56518V10H9.10425V7.79687C9.10425 5.29062 10.5972 3.90625 12.8814 3.90625C13.9751 3.90625 15.1199 4.10156 15.1199 4.10156V6.5625H13.8589C12.6167 6.5625 12.2292 7.3334 12.2292 8.125V10H15.0027L14.5593 12.8906H12.2292V19.8785C17.0099 19.1283 20.6667 14.9912 20.6667 10Z" fill="#1877F2"/>
                                            <path d="M14.5593 12.8906L15.0027 10H12.2292V8.125C12.2292 7.33418 12.6167 6.5625 13.8589 6.5625H15.1199V4.10156C15.1199 4.10156 13.9755 3.90625 12.8814 3.90625C10.5972 3.90625 9.10425 5.29062 9.10425 7.79687V10H6.56519V12.8906H9.10425V19.8785C10.1396 20.0405 11.1939 20.0405 12.2292 19.8785V12.8906H14.5593Z" fill="white"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_2947_8057">
                                            <rect width="20" height="20" fill="white" transform="translate(0.666748)"/>
                                            </clipPath>
                                            </defs>
                                            </svg>
                                             </div>
                                        <div class="hidden md:block ml-2" >Facebook</div>
                                    </button>

                                </div>
                                <div>
                                    <button class="h-11  items-center justify-center rounded-lg text-gray-600 flex focus:outline-none border-pricingdarkstudents dark:border-gray-600 w-full border font-inter text-sixteen">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2773_19855)">
                                            <path d="M20.305 10.2303C20.305 9.55057 20.2498 8.86713 20.1323 8.19838H10.7V12.0492H16.1014C15.8773 13.2912 15.1571 14.3898 14.1025 15.088V17.5866H17.325C19.2173 15.8449 20.305 13.2728 20.305 10.2303Z" fill="#4285F4"/>
                                            <path d="M10.6999 20.0007C13.397 20.0007 15.6714 19.1151 17.3286 17.5866L14.1061 15.0879C13.2096 15.6979 12.0521 16.0433 10.7036 16.0433C8.09474 16.0433 5.88272 14.2832 5.08904 11.9169H1.76367V14.4927C3.46127 17.8695 6.91892 20.0007 10.6999 20.0007V20.0007Z" fill="#34A853"/>
                                            <path d="M5.0854 11.9169C4.66651 10.6749 4.66651 9.33009 5.0854 8.08813V5.51234H1.7637C0.345367 8.33799 0.345367 11.667 1.7637 14.4927L5.0854 11.9169V11.9169Z" fill="#FBBC04"/>
                                            <path d="M10.6999 3.95805C12.1256 3.936 13.5035 4.47247 14.536 5.45722L17.3911 2.60218C15.5833 0.904587 13.1838 -0.0287217 10.6999 0.000673888C6.91892 0.000673888 3.46126 2.13185 1.76367 5.51234L5.08537 8.08812C5.87537 5.71811 8.09106 3.95805 10.6999 3.95805V3.95805Z" fill="#EA4335"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_2773_19855">
                                            <rect width="20" height="20" fill="white" transform="translate(0.5)"/>
                                            </clipPath>
                                            </defs>
                                            </svg>
                                            
                                             <div class="pl-2 hidden md:block">Google</div>
                                    </button>

                                </div>
                                <div>
                                    <button class="h-11 items-center flex justify-center focus:outline-none rounded-lg text-gray-600 border-pricingdarkstudents dark:border-gray-600 border w-full font-inter text-sixteen">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.9974 2.75164C19.2476 3.12654 18.4978 3.25151 17.623 3.37648C18.4978 2.87661 19.1226 2.12681 19.3726 1.12707C18.6228 1.62694 17.748 1.87687 16.7483 2.12681C15.9985 1.377 14.8738 0.877136 13.7491 0.877136C11.1248 0.877136 9.12528 3.37648 9.75012 5.87582C6.37601 5.75085 3.3768 4.12628 1.25236 1.62694C0.127653 3.50144 0.752488 5.87582 2.50203 7.12549C1.87719 7.12549 1.25236 6.87556 0.627521 6.62562C0.627521 8.50013 2.00216 10.2497 3.87666 10.7495C3.25183 10.8745 2.62699 10.9995 2.00216 10.8745C2.50203 12.4991 4.00163 13.7487 5.87614 13.7487C4.37653 14.8734 2.12713 15.4983 0.00268555 15.2483C1.87719 16.3731 4.00163 17.1229 6.25104 17.1229C13.874 17.1229 18.1229 10.7495 17.873 4.87608C18.7477 4.37621 19.4975 3.62641 19.9974 2.75164Z" fill="#1DA1F2"/>
                                            </svg>
                                           <div class="pl-2  hidden md:block"> Twitter</div>
                                    </button>

                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </x-jet-authentication-card>
        </div> 
    </main>

    <script>
        let eye_status = document.getElementById('eye_status')
        let pass_input = document.getElementById('password')
        function firstEye(type){
            if (type) {
                pass_input.type="text"
                eye_status.innerHTML = `
                    <button class="absolute focus:outline-none right-4 top-5" type="button" onclick="firstEye(0)">
                        <svg class="h-5 w-5 text-gray-300"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />  <circle cx="12" cy="12" r="3" /></svg>
                    </button>
                        `
            } else {
                pass_input.type="password"
                eye_status.innerHTML = `
                    <button class="absolute focus:outline-none right-4 top-5" type="button" onclick="firstEye(1)">
                        <svg class="dark:text-white-700 text-graypricingstrike" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.50004 1.50025L4.491 4.49121M16.5 16.5002L13.5094 13.5096M10.5624 14.6874C10.0565 14.7834 9.5343 14.8336 9.00042 14.8336C5.26904 14.8336 2.11046 12.3812 1.04858 9.00021C1.33766 8.07983 1.78213 7.22825 2.35123 6.47623M7.23227 7.23248C7.68468 6.78007 8.30968 6.50024 9.00004 6.50024C10.3807 6.50024 11.5 7.61953 11.5 9.00024C11.5 9.6906 11.2202 10.3156 10.7678 10.768M7.23227 7.23248L10.7678 10.768M7.23227 7.23248L4.491 4.49121M10.7678 10.768L4.491 4.49121M10.7678 10.768L13.5094 13.5096M4.491 4.49121C5.79086 3.6532 7.33884 3.16691 9.0004 3.16691C12.7318 3.16691 15.8904 5.61934 16.9522 9.00027C16.3631 10.8758 15.1288 12.4657 13.5094 13.5096" stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                                            
                    </button>
                        `                
            }
        }
    </script>
</div>
