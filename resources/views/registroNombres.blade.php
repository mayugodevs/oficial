@extends('layout')

@section('content')
<style>
    .contentmygo{
        display: none !important;
    }
    .footeracceso{
    display: none !important;
}

.iti{
    width: 100% !important;
}
</style>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


    <div class="w-full h-full    dark:bg-pricingcintadark bg-bgfondopricingwhite" id="icon4">



        <div class=" h-full md:w-2/6 w-full pt-16 pb-20 mx-auto md:px-0 px-4 ">
            <div id="icon1" class=" xl:px-9  dark:bg-graydat bg-whiteheader shadow-2xl rounded-2xl px-8 pt-8 pb-10">


                <div class=" flex flex-col w-full pb-8">
                    <div class="mx-auto flex items-center">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2723_33624)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M27.203 22.2037V26.5701V27.4261C27.1411 27.4869 27.0787 27.5472 27.0158 27.6069C20.6046 33.689 10.4761 33.4229 4.39342 27.0128C-1.68924 20.6021 -1.42311 10.4752 4.98808 4.3931C11.3987 -1.68901 21.5272 -1.42288 27.6099 4.98724C30.4462 7.97657 31.9022 11.7739 31.9982 15.592L31.9992 15.6278L31.9997 15.6534H31.9992C31.9992 16.5371 31.2829 17.2534 30.3992 17.2534C29.5155 17.2534 28.7992 16.5371 28.7992 15.6534H28.7987C28.7171 12.6059 27.5528 9.57606 25.2883 7.18995C20.4222 2.06195 12.3193 1.84915 7.19073 6.71422C2.06166 11.5798 1.84886 19.6817 6.715 24.8102C11.3294 29.6731 18.8536 30.1158 23.9934 25.999V18.4001H27.203V22.2038V22.2038L27.203 22.2037Z"
                                    fill="#0083F5" />
                                <path
                                    d="M29.1022 22.1022C28.2718 21.7999 27.8436 20.8817 28.1459 20.0513C28.4481 19.2208 29.3664 18.7926 30.1968 19.0949C31.0272 19.3972 31.4554 20.3154 31.1532 21.1458C30.8509 21.9763 29.9327 22.4044 29.1022 22.1022Z"
                                    fill="#33CC66" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M27.2029 18.4H27.1938L27.1933 18.4416C27.1928 18.4555 27.1922 18.4688 27.1917 18.4827L27.1891 18.5232L27.1853 18.5638L27.1811 18.6043L27.1752 18.6438L27.1688 18.6832L27.1613 18.7227L27.1528 18.7616L27.1437 18.8H27.1432L27.1331 18.8384L27.1219 18.8763L27.1096 18.9137L27.0968 18.9505L27.0829 18.9873L27.068 19.023L27.0525 19.0588L27.036 19.094L27.0189 19.1286H27.0184L27.0008 19.1633L26.9816 19.1969C26.956 19.2417 26.9282 19.2849 26.8984 19.3265L26.876 19.358L26.8525 19.3884L26.8285 19.4182L26.8035 19.4476L26.7784 19.4764H26.7779L26.7517 19.5041C26.7341 19.5228 26.716 19.5409 26.6979 19.5585L26.6696 19.5846L26.6408 19.6102L26.6115 19.6348V19.6353L26.5816 19.6593L26.5512 19.6827L26.5197 19.7051C26.4781 19.735 26.435 19.7627 26.3902 19.7883L26.3566 19.807V19.8075L26.3219 19.8251L26.2872 19.8427L26.2521 19.8593L26.2163 19.8747L26.1806 19.8897L26.1437 19.9035L26.1069 19.9163L26.0696 19.9286L26.0317 19.9398L25.9933 19.9499L25.9549 19.9595L25.916 19.9681L25.877 19.9755L25.8376 19.9819L25.7976 19.9878L25.757 19.9921L25.7165 19.9958L25.676 19.9985L25.6349 20.0001L25.5939 20.0006L25.5523 20.0001C25.5384 19.9995 25.5251 19.999 25.5112 19.9985L25.4707 19.9958L25.4301 19.9921L25.3896 19.9878L25.3501 19.9819L25.3106 19.9755L25.2712 19.9681L25.2323 19.9595L25.1938 19.9499L25.1554 19.9398L25.1176 19.9286L25.0802 19.9163L25.0434 19.9035L25.0066 19.8897L24.9708 19.8747L24.9351 19.8593L24.8999 19.8427L24.8653 19.8251H24.8647L24.8306 19.8075V19.807L24.797 19.7883L24.764 19.7686L24.7309 19.7483L24.6989 19.727L24.6674 19.7052L24.636 19.6828L24.6056 19.6593L24.5757 19.6353V19.6348L24.5464 19.6103L24.5176 19.5847L24.4898 19.5585H24.4893L24.4621 19.5318L24.4354 19.5041L24.4093 19.4764L24.3837 19.4476L24.3586 19.4182L24.3346 19.3884L24.3112 19.358L24.2888 19.3265L24.2669 19.295L24.2456 19.263V19.2625L24.2253 19.23L24.2056 19.1969L24.1864 19.1633L24.1682 19.1287L24.1512 19.094L24.1346 19.0588L24.1192 19.0231L24.1042 18.9873L24.0904 18.9505L24.0776 18.9137L24.0653 18.8763L24.0541 18.8385L24.044 18.8001L24.0344 18.7617L24.0258 18.7227L24.0184 18.6833L24.0119 18.6438L24.0061 18.6043L24.0018 18.5638L23.9981 18.5233L23.9954 18.4827C23.9949 18.4689 23.9944 18.4555 23.9938 18.4417L23.9933 18.4001L23.9938 18.359C23.9944 18.3451 23.9949 18.3318 23.9954 18.3179L23.9981 18.2774L23.9992 18.2625C23.9261 16.5654 22.5165 15.2001 20.8024 15.2001C19.0418 15.2001 17.6018 16.6401 17.6018 18.4001C17.6018 19.2838 16.8856 20.0006 16.0018 20.0006C15.1181 20.0006 14.4018 19.2838 14.4018 18.4001C14.4018 16.6401 12.9613 15.2001 11.2013 15.2001C9.4408 15.2001 8.00081 16.6401 8.00081 18.4001C8.00081 19.2838 7.28454 20.0006 6.40081 20.0006C5.51709 20.0006 4.80082 19.2838 4.80082 18.4001H4.80029C4.80029 14.8796 7.68081 11.9996 11.2013 11.9996C13.108 11.9996 14.8264 12.8444 16.0019 14.1782C17.2195 12.7964 18.9581 11.9996 20.8024 11.9996C24.3229 11.9996 27.2029 14.8801 27.2029 18.4001L27.2029 18.4001V18.4Z"
                                    fill="#33CC66" />
                            </g>
                            <defs>
                                <clipPath id="clip0_2723_33624">
                                    <rect width="31.9998" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <div class="dark:text-white-100 text-black  font-family: Nunito, sans; text-sixteen font-bold ml-3 ">
                            MayuGo
                        </div>
                    </div>


                    <div class="dark:text-bordersec text-gray-650 text-center font-inter text-2xl font-semibold pt-6">
                        Crea tu cuenta
                    </div>

                </div>
                <div class="grid md:grid-cols-2 grid-cols-1 pb-5 gap-x-5">
                    <div class="">
                        <label class="dark:text-bgprogresb   text-txtnamecomntpkyr text-sm font-medium font-inter text-left "
                            for="name" >Nombres</label>
                        <input
                            class=" w-full  py-2.5 px-3 mt-1  border placeholder-pricingdarkstudents font-inter text-sm font-normal dark:border-txtcommentply border-borderconcours focus:outline-none dark:ring-transparent dark:bg-black   focus:border-green dark:text-white-500 text-txtnamecomntpkyr rounded-lg"
                            type="text" required placeholder="Escribe tu nombre" wire:model="inp_name">

                    </div>
                    <div class="md:pt-0 pt-5">
                        <label
                            class="dark:text-bgprogresb  text-txtnamecomntpkyr text-sm font-medium font-inter text-left   "
                            for="password"> Apellidos</label>
                        <input
                            class="w-full  py-2.5 px-3 mt-1 border placeholder-pricingdarkstudents font-inter text-sm font-normal dark:border-txtcommentply border-borderconcours focus:outline-none dark:ring-transparent dark:bg-black   focus:border-green dark:text-white-500 text-txtnamecomntpkyr rounded-lg"
                            type="text" required placeholder="Escribe tu apellido" wire:model.defer="inp_last">

                    </div>

                </div>

                <div class="pb-5">
                    <label class="dark:text-bgprogresb  text-txtnamecomntpkyr text-sm font-medium font-inter text-left "
                        for="name">Correo
                        electrónico</label>
                    <input
                        class="  w-full py-2.5 px-3 mt-1 border placeholder-pricingdarkstudents font-inter text-sm font-normal dark:border-txtcommentply border-borderconcours focus:outline-none dark:ring-transparent dark:bg-black   focus:border-green dark:text-white-500 text-txtnamecomntpkyr rounded-lg"
                        type="text" placeholder="@gmail" required wire:model.defer="inp_email">

                </div>
                <div class="pb-5">
                    <label class="dark:text-bgprogresb  text-txtnamecomntpkyr text-sm font-medium font-inter text-left  "
                        for="password"> Contraseña</label>
                    <div class="relative">
                        <input
                            class="w-full py-2.5 px-3 mt-1 border placeholder-pricingdarkstudents font-inter text-sm font-normal dark:border-txtcommentply border-borderconcours focus:outline-none dark:ring-transparent dark:bg-black   focus:border-green dark:text-white-500 text-txtnamecomntpkyr rounded-lg"
                            type="password" required wire:model.defer="inp_pass">

                        <button class="absolute  focus:outline-none right-4 top-4">
                            <svg class="dark:text-white-700 text-graypricingstrike" width="18" height="18"
                                viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.50004 1.50025L4.491 4.49121M16.5 16.5002L13.5094 13.5096M10.5624 14.6874C10.0565 14.7834 9.5343 14.8336 9.00042 14.8336C5.26904 14.8336 2.11046 12.3812 1.04858 9.00021C1.33766 8.07983 1.78213 7.22825 2.35123 6.47623M7.23227 7.23248C7.68468 6.78007 8.30968 6.50024 9.00004 6.50024C10.3807 6.50024 11.5 7.61953 11.5 9.00024C11.5 9.6906 11.2202 10.3156 10.7678 10.768M7.23227 7.23248L10.7678 10.768M7.23227 7.23248L4.491 4.49121M10.7678 10.768L4.491 4.49121M10.7678 10.768L13.5094 13.5096M4.491 4.49121C5.79086 3.6532 7.33884 3.16691 9.0004 3.16691C12.7318 3.16691 15.8904 5.61934 16.9522 9.00027C16.3631 10.8758 15.1288 12.4657 13.5094 13.5096"
                                    stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </button>
                    </div>

                </div>
                <div class=" w-full">
                    <form id="login" onsubmit="process(event)" class="w-full flex flex-col  pb-6">
                        <label class="dark:text-bgprogresb  text-txtnamecomntpkyr text-sm font-medium font-inter text-left "
                            for="password"> Número
                            Telefónico</label>
                        <div class="mt-1">
                            <input id="phone" type="tel" name="phone" class="w-full  py-2.5 border placeholder-pricingdarkstudents 
                                font-inter text-sm font-normal dark:border-txtcommentply border-borderconcours 
                                focus:outline-none dark:ring-transparent dark:bg-black   focus:border-green dark:text-white-500 
                                text-txtnamecomntpkyr rounded-lg" wire:model.defer="inp_celphone">
                        </div>

                    </form>
                </div>


                <div class=" flex justify-end items-center w-full  ">
                    <button type="button" id="play1"
                        class=" bg-green text-lg font-semibold w-full  focus:outline-none    text-white-100 font-inter py-2.5  rounded-lg "
                        wire:click="createPost">
                        Registrate ahora 
                    </button>

                </div>

                <div class=" flex pt-8 items-center">
                    <div class=" border-t-2 w-1/2 dark:border-txtcommentply  border-borderconcours"></div>
                    <div class="dark:text-white-500 text-black">O</div>
                    <div class=" w-1/2 border-t-2 dark:border-txtcommentply  border-borderconcours"></div>
                </div>
                <div class="pt-8  ">
                    <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-normal text-sixteen">
                        Usa una de tus redes
                    </div>

                    <div class="grid grid-cols-3 gap-x-4 pt-2">
                        <div>
                            <button
                                class="md:py-2 py-1.5 flex focus:outline-none justify-center text-gray-600 w-full rounded-lg border-gray-600 border font-inter text-sixteen">
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
                                
                            </button>

                        </div>
                        <div>
                            <button
                                class="md:py-2 py-1.5 justify-center focus:outline-none rounded-lg text-gray-600 flex border-gray-600 w-full border font-inter text-sixteen">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_2773_19855)">
                                        <path
                                            d="M20.305 10.2303C20.305 9.55057 20.2498 8.86713 20.1323 8.19838H10.7V12.0492H16.1014C15.8773 13.2912 15.1571 14.3898 14.1025 15.088V17.5866H17.325C19.2173 15.8449 20.305 13.2728 20.305 10.2303Z"
                                            fill="#4285F4" />
                                        <path
                                            d="M10.6999 20.0007C13.397 20.0007 15.6714 19.1151 17.3286 17.5866L14.1061 15.0879C13.2096 15.6979 12.0521 16.0433 10.7036 16.0433C8.09474 16.0433 5.88272 14.2832 5.08904 11.9169H1.76367V14.4927C3.46127 17.8695 6.91892 20.0007 10.6999 20.0007V20.0007Z"
                                            fill="#34A853" />
                                        <path
                                            d="M5.0854 11.9169C4.66651 10.6749 4.66651 9.33009 5.0854 8.08813V5.51234H1.7637C0.345367 8.33799 0.345367 11.667 1.7637 14.4927L5.0854 11.9169V11.9169Z"
                                            fill="#FBBC04" />
                                        <path
                                            d="M10.6999 3.95805C12.1256 3.936 13.5035 4.47247 14.536 5.45722L17.3911 2.60218C15.5833 0.904587 13.1838 -0.0287217 10.6999 0.000673888C6.91892 0.000673888 3.46126 2.13185 1.76367 5.51234L5.08537 8.08812C5.87537 5.71811 8.09106 3.95805 10.6999 3.95805V3.95805Z"
                                            fill="#EA4335" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_2773_19855">
                                            <rect width="20" height="20" fill="white" transform="translate(0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                               
                            </button>

                        </div>
                        <div>
                            <button
                                class="md:py-2 py-1.5 flex justify-center focus:outline-none rounded-lg text-gray-600 border-gray-600 border w-full font-inter text-sixteen">
                                <svg width="20" height="20" viewBox="0 0 20 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.9974 2.75164C19.2476 3.12654 18.4978 3.25151 17.623 3.37648C18.4978 2.87661 19.1226 2.12681 19.3726 1.12707C18.6228 1.62694 17.748 1.87687 16.7483 2.12681C15.9985 1.377 14.8738 0.877136 13.7491 0.877136C11.1248 0.877136 9.12528 3.37648 9.75012 5.87582C6.37601 5.75085 3.3768 4.12628 1.25236 1.62694C0.127653 3.50144 0.752488 5.87582 2.50203 7.12549C1.87719 7.12549 1.25236 6.87556 0.627521 6.62562C0.627521 8.50013 2.00216 10.2497 3.87666 10.7495C3.25183 10.8745 2.62699 10.9995 2.00216 10.8745C2.50203 12.4991 4.00163 13.7487 5.87614 13.7487C4.37653 14.8734 2.12713 15.4983 0.00268555 15.2483C1.87719 16.3731 4.00163 17.1229 6.25104 17.1229C13.874 17.1229 18.1229 10.7495 17.873 4.87608C18.7477 4.37621 19.4975 3.62641 19.9974 2.75164Z"
                                        fill="#1DA1F2" />
                                </svg>
                               
                            </button>

                        </div>


                    </div>
                    <div
                        class=" text-center  pt-10 dark:text-pricingdarkstudents text-gray-600 font-inter text-sm font-medium  ">
                        ¿No tienes cuenta? <a href="acceso" class="dark:text-bgbtngreen text-bcklightbuscador">Iniciar sesion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-gradient-to-b from-pricingtextduowhite to-green_home  md:pt-48 pt-36 md:px-0 px-4  hidden" id="icon5">




        <div class="xl:w-2/5 sm:w-4/5   m-auto">
            
            <div class=" justify-center text-center">
                <div class="pb-6 text-left">
                    <div>
                        <img src="data:image/png;base64,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" alt="">
                  
                  
                    </div>
                    <div class="text-borderconcours text-sixteen font-medium pl-2 text-left">
                        Gracias por unirte a MayuGo
                    </div>
                </div>
                <div class="font-inter font-bold text-2xl text-bgprogresb leading-8">
                    Vamos a empezar : Cuéntanos sobre que quieres aprender en MayuGo 
                </div>

            </div>
            <div class="text-borderconcours text-sixteen font-medium pt-3 pb-8 text-center">
                Selecciona por lo menos tres categorías
            </div>
            <div class="grid md:grid-cols-3 grid-cols-1 gap-y-6 gap-x-5" id="myDIV">

                <div class="text-center col-span-1  ">
                    <button id="aplicar"
                        class="bg-gray-600 flex-col   p-4  rounded-lg aplicar focus:bg-bcklightbuscador hover:bg-bcklightbuscador focus:outline-none    w-full  flex  items-center">

                        <div>
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.8333 32C25.6699 32 32.8333 24.8366 32.8333 16C32.8333 7.16344 25.6699 0 16.8333 0C7.99676 0 0.833313 7.16344 0.833313 16C0.833313 24.8366 7.99676 32 16.8333 32Z"
                                    fill="#83878A" />
                                <path
                                    d="M16.8332 29.9871C24.5581 29.9871 30.8204 23.7248 30.8204 15.9999C30.8204 8.27498 24.5581 2.0127 16.8332 2.0127C9.10829 2.0127 2.84601 8.27498 2.84601 15.9999C2.84601 23.7248 9.10829 29.9871 16.8332 29.9871Z"
                                    fill="#252A2E" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.69122 14.7213C9.16624 12.1431 11.2953 11.3182 14.1543 11.2571L14.1874 8.69034C4.05335 8.31061 3.84535 20.4795 8.38473 22.711C14.5717 25.7524 18.2201 16.5218 13.504 14.0471C10.9956 12.7309 9.30135 14.3867 8.69122 14.7213ZM25.8397 14.4791L27.9847 14.6018L28.1202 12.2039C24.971 12.2078 20.8893 11.6638 18.7246 13.411C16.827 14.9428 16.1447 18.7554 17.7892 21.2173C19.9598 24.4667 26.4498 24.1751 27.0617 18.6832C27.2846 16.6811 26.7197 15.7382 25.8397 14.4791ZM21.6334 14.6459C20.1725 15.1508 20.0341 16.9158 20.1717 18.3718C20.2955 19.6802 21.0944 21.2912 22.5899 20.8368C24.8555 20.1481 24.523 13.6478 21.6334 14.6459ZM10.0693 16.0276C7.59611 16.6107 8.47717 21.3076 11.0738 20.7924C13.1815 20.3739 13.0823 15.3175 10.0693 16.0276Z"
                                    fill="white" />
                            </svg>


                        </div>
                        <div class="text-sixteen font-inter font-medium text-bgprogresb pt-3.5">

                            Gestion de Operaciones
                        </div>

                    </button>

                </div>
                <div class="text-center col-span-1  ">
                    <button id="aplicar"
                        class="bg-gray-600 flex-col   p-4  rounded-lg aplicar focus:bg-bcklightbuscador hover:bg-bcklightbuscador focus:outline-none    w-full  flex  items-center">

                        <div>
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.5 32C25.3366 32 32.5 24.8366 32.5 16C32.5 7.16344 25.3366 0 16.5 0C7.66344 0 0.5 7.16344 0.5 16C0.5 24.8366 7.66344 32 16.5 32Z" fill="#808040"/>
                                <path d="M16.4997 29.9871C24.2246 29.9871 30.4869 23.7248 30.4869 15.9999C30.4869 8.27498 24.2246 2.0127 16.4997 2.0127C8.7748 2.0127 2.51251 8.27498 2.51251 15.9999C2.51251 23.7248 8.7748 29.9871 16.4997 29.9871Z" fill="#333300"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M26.9697 22.0941C25.9393 22.9673 23.0753 26.1559 22.4424 26.493L19.4096 23.3951C18.9267 23.5647 19.1219 23.7517 18.6433 23.2987C18.3792 23.0484 18.2128 22.8532 17.9578 22.6018C15.8739 22.8759 15.1735 23.3293 12.7941 22.7526C10.5747 22.215 8.96725 20.8976 7.72814 19.186C6.56974 17.5856 5.09134 13.7983 6.82218 12.8002L12.7838 18.6615C13.7324 18.3519 17.1073 17.5874 17.6638 17.1938C17.8551 17.0246 19.2684 12.456 19.0682 12.1001C18.8296 11.6763 13.6147 6.87132 13.2972 6.1723C13.9177 5.75665 13.5969 5.58883 14.697 5.5195C15.3413 5.47861 16.0389 5.53123 16.627 5.65639C17.6951 5.88323 18.6416 6.37141 19.4181 6.87132C22.6448 8.94847 24.4044 12.7878 23.3836 16.6338C23.188 17.3702 22.99 17.4111 23.5041 17.917C24.9616 19.352 22.8019 17.8722 24.9377 19.9938C25.369 20.4223 26.7233 21.6646 26.9697 22.0941ZM23.5052 18.6473L19.1233 22.9606C18.6483 22.7938 18.4304 22.4535 18.083 22.0994C16.7873 22.2427 15.9425 22.9158 13.4714 22.4543C11.9767 22.1748 10.681 21.5103 9.78112 20.759C8.32192 19.5401 5.87783 16.4631 6.66787 13.4327C7.24636 13.5277 7.50627 14.0063 8.27036 14.7654L12.5779 19.0989L18.1353 17.6105L19.6734 12.0959C18.6636 10.834 14.2974 7.06652 13.9159 6.1691C16.2608 4.99612 20.0969 7.42634 21.7377 9.67914C23.107 11.559 23.6254 14.4098 22.8848 16.7657C22.4009 18.3053 22.9484 17.511 23.5052 18.6473ZM26.3902 22.0557C25.5728 22.8009 23.0967 25.5661 22.4375 25.8672C21.864 24.9755 20.1278 23.7737 19.7232 22.9698L23.4771 19.2287L26.3902 22.0557Z" fill="white" stroke="white" stroke-width="0.355556" stroke-miterlimit="22.9256"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8498 8.7724C10.8498 8.87303 10.874 9.03658 10.8889 9.14432C10.8971 9.20583 10.9056 9.27303 10.9092 9.32956C10.9141 9.39925 10.9266 9.45472 10.9266 9.52618C10.8924 9.54929 10.8672 9.57098 10.8338 9.59623L10.6524 9.74058C10.5596 9.81205 10.3904 9.9756 10.3236 10.0624C10.2962 10.0976 10.2645 10.1171 10.2414 10.1516C10.1223 10.1239 9.99929 10.1061 9.8752 10.0812L9.55307 10.0161C9.52036 10.0101 9.50649 10.0119 9.48445 10.0375L9.41725 10.1413C9.40125 10.1662 9.38809 10.1822 9.37352 10.2088C9.25049 10.4307 9.13956 10.6437 9.04712 10.8848C9.02792 10.9345 8.93903 11.1813 8.93903 11.2225C8.93903 11.2496 9.23627 11.4746 9.29245 11.5205C9.36072 11.5763 9.43645 11.6531 9.51325 11.6936C9.51325 11.7377 9.5008 11.7946 9.49618 11.8394C9.47734 12.0108 9.46169 12.1808 9.46169 12.3621C9.46169 12.4673 9.47023 12.5402 9.47023 12.6448C9.41334 12.66 9.08196 12.9008 9.00587 12.9512C8.81885 13.076 8.83663 13.0337 8.88783 13.2446C8.96854 13.577 9.09832 13.9564 9.27503 14.2536C9.29316 14.2842 9.29814 14.3152 9.33334 14.3152C9.45529 14.3152 9.58329 14.2949 9.69458 14.2824C9.82116 14.2682 9.93209 14.2465 10.0615 14.2465L10.2023 14.4314C10.2901 14.5434 10.4956 14.7738 10.5963 14.8513C10.6325 14.8794 10.6546 14.9104 10.6869 14.932C10.6446 15.1134 10.6165 15.2968 10.5792 15.4839C10.5678 15.5411 10.5461 15.5984 10.5483 15.6513C10.5483 15.6524 10.549 15.6552 10.549 15.656C10.5511 15.6816 10.5529 15.672 10.5724 15.6887C10.5856 15.7 10.5941 15.7043 10.608 15.7136L10.8153 15.8401C10.9607 15.9187 11.1068 16.0023 11.2608 16.0627C11.3145 16.084 11.3618 16.105 11.4204 16.126C11.5324 16.1658 11.6377 16.2064 11.7579 16.2341C11.8197 16.1925 11.9456 16.0193 11.9986 15.9525C12.038 15.9031 12.074 15.8615 12.1138 15.8106C12.1525 15.7616 12.1998 15.715 12.229 15.6602C12.3317 15.6602 12.4434 15.6865 12.554 15.6951L12.9486 15.7118C13.0375 15.7118 13.0923 15.7029 13.1797 15.7029C13.1925 15.7502 13.5826 16.3198 13.5911 16.3198C13.7913 16.3198 14.3751 16.1086 14.5678 16.0115L14.7833 15.9016C14.8085 15.8864 14.8281 15.8732 14.859 15.8657C14.859 15.7651 14.8345 15.6016 14.8199 15.4938C14.8039 15.379 14.7819 15.2222 14.7819 15.112C14.9348 15.0096 15.2857 14.7077 15.3863 14.5772C15.4148 14.5406 15.4457 14.5189 15.467 14.4865C15.5844 14.5139 15.712 14.5331 15.8332 14.5573L16.1756 14.6252C16.1781 14.6256 16.1849 14.6252 16.1867 14.6252C16.2336 14.6234 16.2699 14.5296 16.2912 14.4968C16.3218 14.4496 16.3474 14.4058 16.3758 14.3585C16.4892 14.1701 16.5867 13.9624 16.6613 13.753C16.7015 13.64 16.741 13.5368 16.7694 13.4156C16.7513 13.3882 16.7321 13.3736 16.7044 13.352C16.6791 13.332 16.6596 13.3143 16.6343 13.2936L16.2752 13.0017C16.246 12.9783 16.2283 12.9619 16.1956 12.9445C16.1956 12.8606 16.2468 12.5747 16.2468 12.3276L16.2382 11.9937C16.2887 11.9802 16.4921 11.8302 16.55 11.7914C16.5852 11.768 16.8551 11.5948 16.8551 11.5738C16.8551 11.3907 16.6361 10.7841 16.5436 10.6C16.5252 10.563 16.4085 10.3475 16.4011 10.3144C16.3445 10.3144 16.2741 10.3265 16.214 10.3329C16.0533 10.3511 15.7956 10.3916 15.6473 10.3916C15.5179 10.1989 15.3586 10.03 15.1954 9.8668C15.1541 9.82556 15.0699 9.73845 15.0219 9.70609C15.0308 9.59694 15.1467 9.05827 15.1673 8.96938C14.9092 8.79658 14.5852 8.6124 14.288 8.51214C14.1728 8.47338 14.0747 8.43285 13.9509 8.40405C13.9033 8.43569 13.8656 8.49436 13.829 8.53916C13.7625 8.62058 13.5239 8.89472 13.4795 8.97792C13.3735 8.97792 13.2868 8.94947 13.1801 8.94343L12.7772 8.92671C12.683 8.92671 12.6219 8.93525 12.5287 8.93525C12.5156 8.88512 12.3051 8.59214 12.2507 8.51072C12.2297 8.47872 12.1241 8.31836 12.1088 8.31836C11.9676 8.31836 11.5641 8.4556 11.4354 8.50147C11.2764 8.558 11.1403 8.62769 10.9924 8.70094C10.9668 8.71374 10.9483 8.72156 10.9241 8.73543C10.896 8.75107 10.8832 8.76458 10.8498 8.7724ZM12.854 10.7653C13.7124 10.7653 14.4078 11.4611 14.4078 12.3191C14.4078 13.177 13.7124 13.8728 12.854 13.8728C11.9961 13.8728 11.3003 13.177 11.3003 12.3191C11.3003 11.4611 11.9961 10.7653 12.854 10.7653Z" fill="white"/>
                                </svg>
                                


                        </div>
                        <div class="text-sixteen font-inter font-medium text-bgprogresb pt-3.5">

                            Gestion de Operaciones
                        </div>

                    </button>

                </div> <div class="text-center col-span-1  ">
                    <button id="aplicar"
                        class="bg-gray-600 flex-col   p-4  rounded-lg aplicar focus:bg-bcklightbuscador hover:bg-bcklightbuscador focus:outline-none    w-full  flex  items-center">

                        <div>
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.1667 32C25.0032 32 32.1667 24.8366 32.1667 16C32.1667 7.16344 25.0032 0 16.1667 0C7.33013 0 0.166687 7.16344 0.166687 16C0.166687 24.8366 7.33013 32 16.1667 32Z" fill="#33CC66"/>
                                <path d="M16.1666 29.9871C23.8915 29.9871 30.1538 23.7248 30.1538 15.9999C30.1538 8.27498 23.8915 2.0127 16.1666 2.0127C8.44167 2.0127 2.17938 8.27498 2.17938 15.9999C2.17938 23.7248 8.44167 29.9871 16.1666 29.9871Z" fill="#339966"/>
                                <path d="M16.1665 28.8766C23.2782 28.8766 29.0433 23.1115 29.0433 15.9998C29.0433 8.88819 23.2782 3.12305 16.1665 3.12305C9.05487 3.12305 3.28973 8.88819 3.28973 15.9998C3.28973 23.1115 9.05487 28.8766 16.1665 28.8766Z" fill="#339966"/>
                                <path d="M6.63016 12.1424C8.19105 8.3675 11.8732 5.90527 15.9582 5.90527C18.2006 5.90527 20.3795 6.6523 22.1505 8.02794" stroke="white" stroke-width="0.284444" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0.28 0.85"/>
                                <path d="M16.492 26.0805C16.3142 26.0898 16.1361 26.0947 15.9579 26.0947C11.4897 26.0947 7.55295 23.1568 6.28113 18.873" stroke="white" stroke-width="0.284444" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0.28 0.85"/>
                                <path d="M25.9553 14.6055C26.0197 15.0673 26.052 15.5335 26.052 16C26.052 18.8049 24.8848 21.4833 22.8304 23.393" stroke="white" stroke-width="0.284444" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="0.28 0.85"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.2838 8.65979L21.2853 11.085C21.2853 11.4246 21.4435 11.778 21.0126 11.7673C21.0019 11.0545 21.0147 10.2527 21.0154 9.52842L19.1228 9.49286C18.9866 9.8349 18.422 10.3849 18.2364 10.8703C18.0934 11.2436 18.1358 12.0059 18.1557 12.444C18.1635 12.6153 18.1596 12.8308 18.1781 12.9951H19.2238C19.2945 12.626 19.3503 12.4429 19.5957 12.2879C19.83 12.14 20.1955 12.1183 20.475 12.2321C20.7324 12.3369 20.9326 12.541 20.961 12.8244C20.9706 12.9215 20.988 12.9506 21.079 12.9723C21.1509 12.9894 21.2522 12.9937 21.3294 12.9969C22.0024 13.0232 22.908 12.9972 23.5943 12.9961L24.1717 12.9937C24.2236 12.876 24.2609 12.764 24.3146 12.6527C24.3719 12.5346 24.4568 12.4578 24.4696 12.3153H21.0282L21.0122 12.0749L26.3601 12.0742C26.427 11.8651 26.4881 8.89588 26.3267 8.59793L21.2931 8.59473L21.2838 8.65979ZM24.1496 9.89819C24.0871 9.93979 24.0319 9.98602 23.9996 10.0625C24.2375 10.4429 24.2623 10.2502 24.1208 10.5897L23.7443 10.6495L23.745 10.8785L24.1311 10.94C24.161 11.0843 24.2542 11.1291 24.1685 11.2354C24.1084 11.3097 24.0455 11.4001 23.9957 11.4744C24.0455 11.5309 24.1002 11.5853 24.1585 11.6333C24.2488 11.5899 24.428 11.4249 24.4565 11.4193C24.5173 11.4249 24.6186 11.4865 24.6929 11.5085L24.7477 11.8861C24.7882 11.8861 24.827 11.8861 24.8661 11.8865C24.8792 11.8868 24.913 11.8875 24.9244 11.8865L24.9834 11.8701L25.0428 11.5099L25.2725 11.4143C25.3646 11.4697 25.4901 11.602 25.5814 11.6287L25.7351 11.4712C25.5779 11.2294 25.4911 11.213 25.5452 11.0932C25.5647 11.0505 25.5903 10.9748 25.6106 10.9407L25.9886 10.8799L25.9896 10.6473C25.5381 10.588 25.6469 10.6452 25.5516 10.4422C25.4666 10.2601 25.6842 10.237 25.7315 10.0475L25.5807 9.89108C25.5139 9.92095 25.4634 9.97108 25.4058 10.0177C25.3447 10.0671 25.2949 10.1307 25.1925 10.0866C24.9692 9.99028 25.0403 10.0226 24.9855 9.64504L24.7484 9.65108C24.7242 9.74068 24.7349 9.84095 24.716 9.9277C24.689 10.0514 24.6538 10.0269 24.5457 10.0788C24.3761 10.1599 24.3224 9.94868 24.1496 9.89819ZM18.6243 11.0751H20.6943L20.689 9.8861L19.4734 9.88539C19.1391 9.8861 18.6911 10.7846 18.6243 11.0751ZM22.6595 8.92148C22.6037 8.95882 22.5539 8.9997 22.5255 9.06868C22.5724 9.15295 22.6268 9.20628 22.6823 9.28059C22.7459 9.36628 22.6695 9.40361 22.6407 9.53268L22.3071 9.58744C22.2894 9.63793 22.2968 9.73002 22.3007 9.79259L22.6407 9.84593C22.6705 9.97286 22.7445 10.0148 22.6823 10.0991C22.6385 10.1581 22.5475 10.2637 22.5258 10.3252L22.6588 10.4575C22.7295 10.4369 22.8341 10.3412 22.8856 10.3017C22.967 10.2399 23.0328 10.3213 23.142 10.3519L23.1886 10.6847L23.3973 10.685L23.4442 10.397C23.4709 10.3106 23.4193 10.4546 23.4531 10.3739C23.473 10.3266 23.5388 10.3163 23.5825 10.2971C23.7262 10.2349 23.6639 10.3213 23.9157 10.4561C23.9847 10.4251 23.9907 10.3679 24.0647 10.3323C24.0376 10.2633 23.959 10.1673 23.9146 10.1069C23.8396 10.0056 23.9146 9.98068 23.948 9.84628L24.2872 9.79295L24.2904 9.5885L23.9669 9.54015C23.947 9.52877 23.9128 9.42566 23.9022 9.40219C23.8727 9.33748 23.8606 9.33962 23.9043 9.27739C23.9498 9.21268 24.0376 9.13802 24.0615 9.0541L23.9313 8.92006C23.7927 8.95704 23.7283 9.15259 23.5783 9.0861C23.4901 9.04664 23.4481 9.05695 23.43 8.95704C23.4147 8.87135 23.4293 8.77144 23.3898 8.70033L23.1854 8.70104C23.1619 9.08255 23.1516 9.01393 23.0065 9.08148C22.8529 9.15295 22.8426 8.98939 22.6595 8.92148ZM24.9994 12.3217C24.5809 12.3718 24.2325 12.7348 24.2876 13.2152C24.3349 13.6258 24.7057 13.9729 25.1847 13.917C25.5932 13.8694 25.9402 13.4893 25.883 13.02C25.8335 12.6164 25.4631 12.2662 24.9994 12.3217ZM20.0341 12.3227C19.6167 12.3771 19.2654 12.7416 19.3308 13.2305C19.3845 13.6319 19.7685 13.9853 20.2456 13.9142C20.6424 13.8545 20.9877 13.4865 20.9226 13.01C20.8679 12.6107 20.4988 12.2626 20.0341 12.3227ZM21.7973 10.5446C21.7457 10.5784 21.7304 10.5947 21.6959 10.6466C21.7247 10.722 21.7646 10.7501 21.8094 10.8113C21.8638 10.8852 21.8047 10.9041 21.7823 11.0118L21.5285 11.0498C21.5164 11.1025 21.5171 11.1672 21.5324 11.2063L21.7831 11.2465C21.8012 11.3364 21.8574 11.3716 21.815 11.437C21.7766 11.4964 21.7198 11.5455 21.6959 11.6109C21.7354 11.6507 21.7592 11.6905 21.8179 11.7137C21.8471 11.6827 21.8961 11.6521 21.9285 11.6251C21.979 11.5832 21.9871 11.559 22.0639 11.591C22.2079 11.6511 22.151 11.6216 22.1994 11.8811L22.3598 11.8847C22.4085 11.6187 22.3583 11.6443 22.4945 11.5906C22.571 11.5604 22.5806 11.5835 22.6311 11.6248C22.6695 11.6557 22.7107 11.6937 22.7615 11.7105L22.87 11.596C22.8327 11.5665 22.7679 11.4737 22.7441 11.437C22.7004 11.3691 22.7573 11.3353 22.7758 11.2454L23.0296 11.2077L23.0367 11.0491L22.7761 11.0129C22.7598 10.9261 22.7022 10.8774 22.7413 10.8177C22.7818 10.7565 22.8366 10.722 22.8625 10.6466L22.7637 10.5417C22.5926 10.6146 22.6207 10.7249 22.4714 10.6598C22.2609 10.5681 22.4888 10.3686 22.2794 10.3707C22.1656 10.3718 22.1966 10.3931 22.1855 10.5083C22.1756 10.6104 22.1727 10.6175 22.0938 10.652C21.9146 10.7305 21.9672 10.6054 21.7973 10.5446ZM24.9795 12.5385C24.6894 12.5947 24.4355 12.8635 24.5048 13.2297C24.6467 13.9807 25.7991 13.7929 25.6675 13.0153C25.6177 12.7224 25.3329 12.4703 24.9795 12.5385ZM20.0063 12.5435C19.8303 12.5851 19.7294 12.6637 19.6451 12.7753C19.3511 13.1668 19.6846 13.815 20.2463 13.698C20.5279 13.6397 20.7839 13.3528 20.705 12.9961C20.6439 12.7195 20.363 12.4596 20.0063 12.5435ZM24.8309 10.3305C24.2229 10.4038 24.3541 11.2557 24.908 11.2002C25.4965 11.1409 25.3806 10.2644 24.8309 10.3305ZM23.2209 9.31473C23.0165 9.36024 22.8593 9.51348 22.9173 9.7741C22.9606 9.9693 23.1306 10.1247 23.3816 10.0685C23.8659 9.96006 23.7201 9.20344 23.2209 9.31473ZM25.7482 12.348C25.7546 12.386 25.8556 12.5798 25.8837 12.653C25.9288 12.7732 25.9491 12.8841 25.9719 13.0178C26.0348 13.0388 26.2872 13.0189 26.363 13.0061L26.364 12.3789C26.1429 12.3025 25.9815 12.3334 25.7482 12.348ZM22.2154 10.8429C21.8314 10.9332 21.9615 11.4989 22.3473 11.4153C22.7189 11.335 22.6001 10.7522 22.2154 10.8429ZM25.0143 12.8785C24.7 12.972 24.8241 13.4537 25.1569 13.3634C25.4723 13.2777 25.3443 12.7807 25.0143 12.8785ZM20.0522 12.882C19.7034 13.01 19.915 13.4651 20.2129 13.3585C20.5272 13.2457 20.3541 12.7707 20.0522 12.882ZM25.0111 12.951C24.7797 13.0555 24.9411 13.3816 25.1583 13.292C25.3699 13.2045 25.2551 12.8404 25.0111 12.951ZM20.0536 12.9485C19.852 13.0303 19.9505 13.3812 20.1934 13.2945C20.4106 13.2173 20.2972 12.8497 20.0536 12.9485Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.43297 12.852C8.40559 12.8876 7.66781 13.3089 7.55368 13.3818C7.53483 13.3843 7.54586 13.3843 7.53483 13.3758L7.53377 12.473L6.76897 12.9374C6.67688 12.9918 6.05146 13.3793 6.00915 13.3825L6.00808 12.4748C5.95652 12.4915 5.55901 12.75 5.47261 12.8016C5.24506 12.937 3.92381 13.7409 3.87759 13.7448L3.87439 17.8906L10.5834 17.876L10.5837 11.1824L8.44932 11.1816L8.45003 12.8122C8.44328 12.8606 8.45679 12.83 8.43297 12.852ZM4.48488 14.088L5.39901 13.5507V14.4613L6.92328 13.5504V14.4641L9.07226 13.1745L9.07261 11.7914L9.97359 11.7918L9.97181 17.2791L4.48452 17.2805L4.48488 14.088Z" fill="white"/>
                                <path d="M5.68392 15.8108C5.86359 15.8108 6.00925 15.6652 6.00925 15.4855C6.00925 15.3058 5.86359 15.1602 5.68392 15.1602C5.50424 15.1602 5.35858 15.3058 5.35858 15.4855C5.35858 15.6652 5.50424 15.8108 5.68392 15.8108Z" fill="white"/>
                                <path d="M6.71379 15.8108C6.89347 15.8108 7.03913 15.6652 7.03913 15.4855C7.03913 15.3058 6.89347 15.1602 6.71379 15.1602C6.53412 15.1602 6.38846 15.3058 6.38846 15.4855C6.38846 15.6652 6.53412 15.8108 6.71379 15.8108Z" fill="white"/>
                                <path d="M7.74428 15.8108C7.92396 15.8108 8.06961 15.6652 8.06961 15.4855C8.06961 15.3058 7.92396 15.1602 7.74428 15.1602C7.5646 15.1602 7.41895 15.3058 7.41895 15.4855C7.41895 15.6652 7.5646 15.8108 7.74428 15.8108Z" fill="white"/>
                                <path d="M8.77455 15.8108C8.95423 15.8108 9.09989 15.6652 9.09989 15.4855C9.09989 15.3058 8.95423 15.1602 8.77455 15.1602C8.59488 15.1602 8.44922 15.3058 8.44922 15.4855C8.44922 15.6652 8.59488 15.8108 8.77455 15.8108Z" fill="white"/>
                                <path d="M5.68392 16.7981C5.86359 16.7981 6.00925 16.6525 6.00925 16.4728C6.00925 16.2931 5.86359 16.1475 5.68392 16.1475C5.50424 16.1475 5.35858 16.2931 5.35858 16.4728C5.35858 16.6525 5.50424 16.7981 5.68392 16.7981Z" fill="white"/>
                                <path d="M6.71379 16.7981C6.89347 16.7981 7.03913 16.6525 7.03913 16.4728C7.03913 16.2931 6.89347 16.1475 6.71379 16.1475C6.53412 16.1475 6.38846 16.2931 6.38846 16.4728C6.38846 16.6525 6.53412 16.7981 6.71379 16.7981Z" fill="white"/>
                                <path d="M7.74428 16.7981C7.92396 16.7981 8.06961 16.6525 8.06961 16.4728C8.06961 16.2931 7.92396 16.1475 7.74428 16.1475C7.5646 16.1475 7.41895 16.2931 7.41895 16.4728C7.41895 16.6525 7.5646 16.7981 7.74428 16.7981Z" fill="white"/>
                                <path d="M8.77455 16.7981C8.95423 16.7981 9.09989 16.6525 9.09989 16.4728C9.09989 16.2931 8.95423 16.1475 8.77455 16.1475C8.59488 16.1475 8.44922 16.2931 8.44922 16.4728C8.44922 16.6525 8.59488 16.7981 8.77455 16.7981Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.8933 24.2327C21.8042 24.3963 22.2309 26.5143 21.395 27.037C21.0195 27.272 19.9582 27.1909 19.4412 27.1909C17.8348 27.1909 16.5594 27.5366 16.8311 25.5728C16.905 25.037 17.1913 24.402 17.6097 24.2573C18.1779 24.0606 18.5623 24.6253 19.2211 24.6669C20.0069 24.7166 20.3404 24.1332 20.8933 24.2327Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4936 21.7008C21.3023 21.9557 20.919 24.6704 19.105 24.4112C17.3567 24.1612 17.7233 21.4512 19.4936 21.7008Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7169 22.8783C18.0117 24.2689 17.9494 23.8821 17.4278 24.1174C17.2269 24.2081 17.1843 24.43 16.7793 24.4495C16.5094 24.4627 16.1617 24.3663 16.0234 24.2216C15.7727 23.9599 15.9025 22.8325 16.1564 22.6675C16.3779 22.5231 16.6573 22.7628 16.8885 22.8339C17.2529 22.9459 17.505 22.8161 17.7169 22.8783Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.7189 23.9053C20.6769 23.6106 20.8711 23.4954 20.8899 23.1167C20.913 22.657 21.1018 22.9474 21.5235 22.8838C22.1269 22.7928 22.4988 22.2346 22.6837 23.1537C22.8199 23.8299 22.8028 24.354 22.1027 24.4202C21.553 24.4721 21.6661 24.4322 21.3408 24.2335C21.078 24.0731 20.9642 24.1517 20.7189 23.9053Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5529 20.8403C18.7394 21.2446 18.0983 22.984 16.9428 22.5605C15.8914 22.1755 16.3728 20.4379 17.5529 20.8403Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.6142 20.8809C22.8558 21.1927 22.3761 22.9289 21.2049 22.664C20.7648 22.5645 20.411 22.1165 20.5358 21.5536C20.6297 21.1305 21.0901 20.7493 21.6142 20.8809Z" fill="white"/>
                                </svg>
                                


                        </div>
                        <div class="text-sixteen font-inter font-medium text-bgprogresb pt-3.5">

                            Gestion de Operaciones
                        </div>

                    </button>

                </div> <div class="text-center col-span-1  ">
                    <button id="aplicar"
                        class="bg-gray-600 flex-col   p-4  rounded-lg aplicar focus:bg-bcklightbuscador hover:bg-bcklightbuscador focus:outline-none    w-full  flex  items-center">

                        <div>
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.8333 32C25.6699 32 32.8333 24.8366 32.8333 16C32.8333 7.16344 25.6699 0 16.8333 0C7.99676 0 0.833313 7.16344 0.833313 16C0.833313 24.8366 7.99676 32 16.8333 32Z" fill="#63B6FF"/>
                                <path d="M16.8334 29.9871C24.5583 29.9871 30.8206 23.7248 30.8206 15.9999C30.8206 8.27498 24.5583 2.0127 16.8334 2.0127C9.10848 2.0127 2.84619 8.27498 2.84619 15.9999C2.84619 23.7248 9.10848 29.9871 16.8334 29.9871Z" fill="#0083F5"/>
                                <path d="M16.8332 28.8766C23.9448 28.8766 29.71 23.1115 29.71 15.9998C29.71 8.88819 23.9448 3.12305 16.8332 3.12305C9.7215 3.12305 3.95636 8.88819 3.95636 15.9998C3.95636 23.1115 9.7215 28.8766 16.8332 28.8766Z" fill="#0083F5"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4938 13.2974L12.7626 13.1864C12.8348 13.467 13.5068 14.0604 13.4961 14.076L13.3727 14.2577C13.126 14.1973 12.5976 13.4954 12.4938 13.2974ZM12.0991 12.9685C11.7628 12.7434 11.777 12.6332 11.3525 12.4085C11.0357 12.5759 9.39227 14.0024 9.39227 14.4622C9.39227 14.7438 11.9128 17.2024 12.3793 17.4492C12.8429 17.2039 13.0584 16.9098 13.4293 16.539C14.1443 15.8239 14.8828 15.4812 13.7795 14.742C14.001 14.411 13.9544 14.4799 14.1155 14.0515C14.241 13.7191 15.1757 12.5052 15.4595 12.315C15.2991 13.0033 15.0773 13.7201 14.8803 14.4426C14.4166 16.1443 14.332 16.9048 13.436 18.5059C13.1789 18.9649 12.566 19.8492 12.566 20.4362C12.566 21.2046 13.554 21.6512 14.1365 21.0737C14.5357 20.678 15.9192 17.8513 16.0536 17.3898C16.2719 16.6399 16.5048 15.8378 16.673 15.1153C17.5793 15.1153 17.4161 14.9823 17.9117 15.4638L18.8198 16.2357C18.5749 17.2878 17.9793 19.0709 18.5116 19.6241C19.2145 20.3544 19.99 19.995 20.2915 18.5472C20.5048 17.5214 20.6868 17.0321 20.6868 15.9555C20.6868 14.9528 19.0069 14.0799 19.0069 13.8087C19.0069 13.3098 19.2771 12.6638 19.3802 12.2218C20.0362 12.9767 19.8086 13.052 21.4147 13.4542C21.6472 13.5125 22.4412 13.7358 22.7196 13.6967C23.1263 13.6391 23.4872 13.281 23.4872 12.7818C23.4872 11.5591 21.4474 11.899 21.0442 11.398C20.588 10.8316 20.4476 9.14128 19.4733 9.14128C16.7981 9.14128 16.9937 8.85257 15.5796 9.91462C14.5158 10.7135 14.1926 10.8529 13.3525 11.9815C13.0175 12.4319 13.0218 12.5386 12.6637 12.6933L12.4625 12.7719C12.364 12.8167 12.2026 12.9137 12.0991 12.9685ZM11.7845 14.6488C11.7845 14.4394 11.6917 13.3656 11.6422 13.2622C11.431 13.2668 11.4552 13.3013 11.5256 13.841C11.5853 14.2961 11.4968 14.7612 11.7261 14.8497L12.7014 15.1185C12.7949 15.1423 13.287 15.2938 13.3539 15.2892C13.5085 15.2792 13.4225 15.3201 13.4677 15.233C13.5021 15.1665 13.4577 15.1466 13.4175 15.1196C13.3663 15.0855 13.1683 15.0399 13.0876 15.0168L11.7845 14.6488Z" fill="white"/>
                                <path d="M15.3374 21.3896H12.5748V24.5036H15.3374V21.3896Z" fill="white"/>
                                <path d="M19.8058 20.29H17.0432V24.5048H19.8058V20.29Z" fill="white"/>
                                <path d="M24.2744 16.3008H21.5117V24.5045H24.2744V16.3008Z" fill="white"/>
                                <path d="M18.3063 8.90264C19.4374 8.90264 20.3543 7.98572 20.3543 6.85464C20.3543 5.72356 19.4374 4.80664 18.3063 4.80664C17.1752 4.80664 16.2583 5.72356 16.2583 6.85464C16.2583 7.98572 17.1752 8.90264 18.3063 8.90264Z" fill="white"/>
                                </svg>
                                


                        </div>
                        <div class="text-sixteen font-inter font-medium text-bgprogresb pt-3.5">

                            Gestion de Operaciones
                        </div>

                    </button>

                </div> <div class="text-center col-span-1  ">
                    <button id="aplicar"
                        class="bg-gray-600 flex-col   p-4  rounded-lg aplicar focus:bg-bcklightbuscador hover:bg-bcklightbuscador focus:outline-none    w-full  flex  items-center">

                        <div>
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.5 32C25.3366 32 32.5 24.8366 32.5 16C32.5 7.16344 25.3366 0 16.5 0C7.66344 0 0.5 7.16344 0.5 16C0.5 24.8366 7.66344 32 16.5 32Z" fill="#A8E0E0"/>
                                <path d="M16.5001 29.9871C24.225 29.9871 30.4873 23.7248 30.4873 15.9999C30.4873 8.27498 24.225 2.0127 16.5001 2.0127C8.77516 2.0127 2.51288 8.27498 2.51288 15.9999C2.51288 23.7248 8.77516 29.9871 16.5001 29.9871Z" fill="#669999"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.1802 12.8707L17.7893 15.2796C17.9628 15.4136 18.126 15.5665 18.2764 15.7376C19.5514 17.1847 19.4053 19.3863 17.9596 20.6542C16.9327 21.5559 15.523 21.7475 14.3365 21.2604L12.7294 24.0437L12.623 25.1882C13.1702 25.4197 13.747 25.5943 14.3468 25.6967L15.0671 24.3096L16.6127 24.267L17.4095 25.6103C18.0033 25.4723 18.5704 25.2679 19.103 25.0048L18.8705 23.4613L20.095 22.5162L21.5279 23.1303C21.9212 22.6776 22.2629 22.1809 22.5423 21.6472L21.4465 20.5376L21.8799 19.052L23.4024 18.7068C23.427 18.4053 23.4373 18.1006 23.4266 17.7934C23.4184 17.4947 23.3896 17.1996 23.3462 16.9105L21.8085 16.656L21.2872 15.201L22.3119 14.0266C22.0012 13.5093 21.6314 13.0336 21.2136 12.6055L19.8191 13.3052L19.1802 12.8707Z" fill="white"/>
                                <path d="M18.387 12.2329L16.1736 10.9551L9.61303 22.3184L11.8264 23.5963L18.387 12.2329Z" stroke="white" stroke-width="0.506884" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0994 6.45601L20.3198 6.58366C20.8677 6.89975 21.0572 7.60695 20.7411 8.15521L20.1658 9.15148L17.9525 7.87361L18.5278 6.87735C18.8439 6.32908 19.5511 6.13957 20.0994 6.45601V6.45601Z" stroke="white" stroke-width="0.711111" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.56934 24.9498L11.8264 23.5962L9.61307 22.3184L9.56934 24.9498Z" stroke="white" stroke-width="0.711111" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.5508 10.4947L16.5969 8.21191L15.9186 9.38664L19.8726 11.6695L20.5508 10.4947Z" stroke="white" stroke-width="0.529348" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.0767 7.38048C17.1863 7.19059 17.1212 6.94779 16.9313 6.83815C16.7415 6.72852 16.4987 6.79358 16.389 6.98347L13.0144 12.8284C12.9048 13.0183 12.9699 13.2611 13.1597 13.3708C13.3496 13.4804 13.5924 13.4153 13.7021 13.2255L17.0767 7.38048Z" stroke="white" stroke-width="0.529348" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                


                        </div>
                        <div class="text-sixteen font-inter font-medium text-bgprogresb pt-3.5">

                            Gestion de Operaciones
                        </div>

                    </button>

                </div> <div class="text-center col-span-1  ">
                    <button id="aplicar"
                        class="bg-gray-600 flex-col   p-4  rounded-lg aplicar focus:bg-bcklightbuscador hover:bg-bcklightbuscador focus:outline-none    w-full  flex  items-center">

                        <div>
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.1667 32C25.0032 32 32.1667 24.8366 32.1667 16C32.1667 7.16344 25.0032 0 16.1667 0C7.33013 0 0.166687 7.16344 0.166687 16C0.166687 24.8366 7.33013 32 16.1667 32Z" fill="#8C8CFF"/>
                                <path d="M16.1666 29.9871C23.8915 29.9871 30.1538 23.7248 30.1538 15.9999C30.1538 8.27498 23.8915 2.0127 16.1666 2.0127C8.44167 2.0127 2.17938 8.27498 2.17938 15.9999C2.17938 23.7248 8.44167 29.9871 16.1666 29.9871Z" fill="#6666FF"/>
                                <path d="M16.1667 28.8766C23.2784 28.8766 29.0435 23.1115 29.0435 15.9998C29.0435 8.88819 23.2784 3.12305 16.1667 3.12305C9.05506 3.12305 3.28992 8.88819 3.28992 15.9998C3.28992 23.1115 9.05506 28.8766 16.1667 28.8766Z" fill="#6666FF"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8775 21.9724C13.122 22.1534 14.0958 21.283 14.2711 20.2579C14.482 19.0241 13.5735 18.0634 12.5541 17.8828C11.314 17.6634 10.3113 18.5971 10.1627 19.6168C9.98668 20.8214 10.8589 21.8241 11.8775 21.9724ZM7.50028 23.0255C7.53477 22.8773 7.73957 22.6195 7.82526 22.5107C7.96606 22.3326 8.12322 22.2533 7.96286 21.9731C7.69904 21.5126 7.84304 21.0561 7.19486 21.0248C6.46348 20.9896 6.39024 20.8414 6.39059 20.1267C6.39095 19.6097 6.27468 18.9576 6.71699 18.7564C6.92748 18.6607 7.22579 18.6899 7.46224 18.6426C7.73922 18.5871 7.75984 18.4072 7.85797 18.1772C8.18366 17.4134 8.05673 17.5823 7.66775 17.0412C7.27379 16.4929 7.62366 16.2558 7.92588 15.9542C8.2153 15.6659 8.59433 15.1955 8.91148 15.2122C9.39184 15.2371 9.61406 15.9176 10.0685 15.7374C11.1067 15.3256 10.92 15.4003 10.9733 14.9249C11.0608 14.1452 11.1746 14.0958 11.8469 14.0901C12.1321 14.0876 12.4219 14.0862 12.7067 14.0918C13.3936 14.1061 13.2813 14.558 13.3783 15.1265C13.4306 15.4334 13.5536 15.3882 13.8391 15.5208C13.9337 15.5642 14.3909 15.753 14.4663 15.7626C14.653 15.7857 14.8763 15.5418 15.0043 15.4447C15.5678 15.0166 15.7346 15.2282 16.1143 15.609C16.269 15.7644 16.8468 16.2714 16.8898 16.5199C16.9773 17.028 16.2921 17.2808 16.3721 17.6755C16.4016 17.8213 16.5527 18.1381 16.6221 18.2874C16.7661 18.5982 16.6957 18.6625 17.0633 18.7087C17.9941 18.8264 18.0251 18.7514 17.9799 20.3774C17.96 21.0977 17.6887 21.0195 16.9787 21.1141C16.674 21.1546 16.723 21.374 16.6242 21.6118C16.3173 22.3518 16.2064 22.0886 16.7341 22.7574C17.1675 23.3068 16.5303 23.7765 15.9977 24.2774C15.4999 24.7461 15.3001 24.5441 14.8564 24.2038C14.5709 23.9848 14.6715 23.9606 14.3017 24.1551C13.6091 24.5192 13.4185 24.2298 13.3879 24.9583C13.3584 25.6574 13.0349 25.6687 12.3842 25.6694C11.7726 25.6698 11.2258 25.7868 11.0836 25.2613C10.8525 24.4054 11.2852 24.6394 10.3817 24.2394C9.59913 23.8927 9.78153 24.0485 9.25708 24.4076C8.72091 24.7749 8.39024 24.2696 8.1513 24.0371C7.81602 23.7103 7.41175 23.4078 7.50028 23.0255Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.9645 16.6759C23.1114 16.9909 23.7197 13.7582 21.5011 13.3408C20.5037 13.1527 19.6604 13.8954 19.5366 14.7225C19.3816 15.7557 20.0852 16.5468 20.9645 16.6759ZM24.7523 17.7283C24.9169 18.16 24.4497 18.417 24.2833 18.5689C24.161 18.6801 24.0351 18.784 23.9053 18.8693C23.7667 18.9607 23.5718 19.0204 23.3866 18.9287C23.0605 18.7676 23.1199 18.4099 22.4042 18.656C21.8776 18.8373 21.9092 18.8689 21.7688 19.3873C21.6522 19.8183 21.1896 19.7283 20.7629 19.691C20.2883 19.6497 19.9889 19.6501 19.9181 19.1737C19.8836 18.9415 19.9576 18.6958 19.7884 18.5927C19.6223 18.4921 19.5149 18.4963 19.334 18.3651C18.8252 17.9971 18.6189 18.4309 18.3832 18.5041C18.1503 18.5767 17.9548 18.4597 17.8481 18.3516C17.7336 18.2361 17.6273 18.1038 17.5334 17.9833C17.3823 17.7895 16.9894 17.4638 17.2205 17.088C17.3741 16.838 17.7425 16.7907 17.5281 16.0921C17.3748 15.5932 17.2564 15.6458 16.7629 15.4965C16.3558 15.3731 16.4419 14.8953 16.4724 14.4768C16.5037 14.0551 16.5222 13.6807 17.0001 13.6405C17.2156 13.6227 17.4143 13.6476 17.5668 13.5335C17.649 13.472 17.7862 13.2761 17.8488 13.1353C18.0941 12.5856 17.7155 12.497 17.6195 12.1635C17.5142 11.7973 17.8502 11.5783 18.145 11.3216C19.3005 10.315 18.9062 11.6977 20.0593 11.3397C20.5894 11.1751 20.4554 10.9799 20.6147 10.5333C20.7615 10.1216 21.2248 10.2112 21.6561 10.2417C22.1208 10.2745 22.4508 10.3114 22.4689 10.7861C22.4902 11.3347 22.6093 11.4325 23.0388 11.6206C23.8228 11.9641 23.954 11.0097 24.5208 11.5683C24.6332 11.6789 24.7359 11.803 24.8422 11.9278C24.946 12.0494 25.0652 12.1742 25.1473 12.3043C25.25 12.4679 25.2614 12.6481 25.1629 12.8266C24.8575 13.3799 24.6079 13.0716 24.8372 13.6849C24.8938 13.8368 24.9133 14.0704 25.0044 14.1987C25.2572 14.5553 26.1005 14.0654 25.9356 15.3212C25.8833 15.7205 25.8833 16.1767 25.5252 16.2634C25.3137 16.315 25.1455 16.2208 24.9364 16.3569C24.7427 16.4832 24.4408 16.9617 24.5126 17.2953C24.556 17.4969 24.6975 17.5847 24.7523 17.7283Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4842 10.0697C15.4 9.36034 14.7863 8.76123 13.9678 8.83625C13.2531 8.90239 12.6192 9.58541 12.7365 10.3929C12.8371 11.0837 13.4579 11.6732 14.2672 11.5854C14.9569 11.5104 15.577 10.8501 15.4842 10.0697ZM11.0377 12.2887C11.0729 12.0565 11.4316 11.9193 11.2684 11.51C11.2506 11.4652 11.1017 11.1239 11.0924 11.1111C10.8752 10.8174 10.2736 11.2629 10.2337 10.3214C10.1733 8.89776 10.8556 9.86701 11.1959 9.06239C11.3993 8.58132 11.294 8.66132 11.0739 8.3015C10.9797 8.14754 10.936 8.11092 11.0103 7.90754C11.0672 7.7511 11.1411 7.70879 11.2378 7.59963C12.1239 6.59661 12.0396 7.57154 12.6903 7.40763C12.8154 7.37599 12.9886 7.28923 13.0796 7.22381C13.4348 6.9671 13.0113 6.36159 13.8181 6.32994C14.1438 6.31714 14.5751 6.29332 14.7191 6.51768C14.9235 6.83696 14.6707 6.98914 15.1102 7.23554C15.4313 7.41581 15.6492 7.45208 15.9123 7.22594C16.4695 6.7463 17.1297 7.80585 17.145 7.92568C17.192 8.28941 16.8062 8.31714 16.905 8.76905C16.9669 9.05243 17.1123 9.31874 17.4042 9.37207C17.7811 9.44105 17.913 9.53136 17.9479 9.94594C17.9717 10.2258 17.9973 10.6869 17.7665 10.8334C17.4657 11.0251 17.2478 10.8455 17.059 11.2363C17.0273 11.302 16.9292 11.6199 16.9296 11.6811C16.9299 11.8108 17.0441 11.9456 17.1006 12.0448C17.2965 12.3868 17.1436 12.5838 16.9164 12.8121C16.8041 12.9255 16.5114 13.2782 16.2256 13.2078C16.0937 13.1751 16.0215 13.0499 15.8601 13.0012C15.7189 12.9589 15.5593 12.987 15.4302 13.0453C14.8076 13.3262 15.0277 13.1673 14.9086 13.6338C14.8222 13.9715 14.6039 14.038 14.2113 14.038C13.8547 14.0384 13.5358 14.0654 13.4153 13.7262C13.1948 13.1072 13.5198 13.3884 12.9125 13.1203C12.4076 12.8974 12.5836 12.9564 12.1861 13.1993C11.8597 13.3987 11.5721 13.1452 11.4202 12.9664C11.2794 12.8 10.9836 12.6435 11.0377 12.2887Z" fill="white"/>
                                </svg>
                                


                        </div>
                        <div class="text-sixteen font-inter font-medium text-bgprogresb pt-3.5">

                            Gestion de Operaciones
                        </div>

                    </button>

                </div> <div class="text-center col-span-1  ">
                    <button id="aplicar"
                        class="bg-gray-600 flex-col   p-4  rounded-lg aplicar focus:bg-bcklightbuscador hover:bg-bcklightbuscador focus:outline-none    w-full  flex  items-center">

                        <div>
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2651_150751)">
                                <path d="M16.8333 32C25.6699 32 32.8333 24.8366 32.8333 16C32.8333 7.16344 25.6699 0 16.8333 0C7.99676 0 0.833313 7.16344 0.833313 16C0.833313 24.8366 7.99676 32 16.8333 32Z" fill="#FF6666"/>
                                <path d="M16.8334 29.9871C24.5583 29.9871 30.8206 23.7248 30.8206 15.9999C30.8206 8.27498 24.5583 2.0127 16.8334 2.0127C9.10848 2.0127 2.84619 8.27498 2.84619 15.9999C2.84619 23.7248 9.10848 29.9871 16.8334 29.9871Z" fill="#990000"/>
                                <path d="M16.3348 16.8359H10.5339V17.147H16.3348V16.8359Z" fill="white"/>
                                <path d="M16.3348 18.1738H10.5339V18.4849H16.3348V18.1738Z" fill="white"/>
                                <path d="M16.3348 19.3242H10.5339V19.6353H16.3348V19.3242Z" fill="white"/>
                                <path d="M16.3348 20.4746H10.5339V20.7857H16.3348V20.4746Z" fill="white"/>
                                <path d="M14.9353 21.627H10.5339V21.9381H14.9353V21.627Z" fill="white"/>
                                <path d="M13.6599 22.7783H10.5339V23.0894H13.6599V22.7783Z" fill="white"/>
                                <path d="M18.758 12.5223L20.1205 9.86523M12.4536 12.181L13.7997 13.8819L12.4536 12.181ZM14.2229 13.957L15.6447 12.3641L14.2229 13.957ZM16.1123 12.2091L18.3416 12.8131L16.1123 12.2091Z" stroke="white" stroke-width="0.142222" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.1829 15.5818L12.0899 12.2012" stroke="white" stroke-width="0.142222" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8369 11.7598C16.0727 11.7598 16.264 11.9507 16.264 12.1868C16.264 12.4225 16.0727 12.6135 15.8369 12.6135C15.6012 12.6135 15.4103 12.4225 15.4103 12.1868C15.4103 11.9507 15.6012 11.7598 15.8369 11.7598ZM15.8369 11.9994C15.9404 11.9994 16.0243 12.0833 16.0243 12.1868C16.0243 12.2899 15.9404 12.3738 15.8369 12.3738C15.7338 12.3738 15.6499 12.2899 15.6499 12.1868C15.6499 12.0833 15.7338 11.9994 15.8369 11.9994Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.2049 9.16016C20.4406 9.16016 20.6315 9.35144 20.6315 9.58718C20.6315 9.82291 20.4406 10.0142 20.2049 10.0142C19.9691 10.0142 19.7778 9.82291 19.7778 9.58718C19.7778 9.35144 19.9691 9.16016 20.2049 9.16016ZM20.2049 9.40016C20.308 9.40016 20.3919 9.48371 20.3919 9.58718C20.3919 9.69064 20.308 9.7742 20.2049 9.7742C20.1014 9.7742 20.0175 9.69064 20.0175 9.58718C20.0175 9.48371 20.1014 9.40016 20.2049 9.40016Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.6326 12.3711C18.8683 12.3711 19.0593 12.562 19.0593 12.7978C19.0593 13.0335 18.8683 13.2248 18.6326 13.2248C18.3969 13.2248 18.2056 13.0335 18.2056 12.7978C18.2056 12.562 18.3969 12.3711 18.6326 12.3711ZM18.6326 12.6107C18.7357 12.6107 18.8196 12.6946 18.8196 12.7978C18.8196 12.9012 18.7357 12.9851 18.6326 12.9851C18.5291 12.9851 18.4456 12.9012 18.4456 12.7978C18.4456 12.6946 18.5291 12.6107 18.6326 12.6107Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0028 13.6152C14.2389 13.6152 14.4298 13.8065 14.4298 14.0423C14.4298 14.278 14.2389 14.4693 14.0028 14.4693C13.767 14.4693 13.5761 14.278 13.5761 14.0423C13.5761 13.8065 13.767 13.6152 14.0028 13.6152ZM14.0028 13.8552C14.1062 13.8552 14.1902 13.9388 14.1902 14.0423C14.1902 14.1457 14.1062 14.2293 14.0028 14.2293C13.8997 14.2293 13.8158 14.1457 13.8158 14.0423C13.8158 13.9388 13.8997 13.8552 14.0028 13.8552Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2557 11.54C12.4918 11.54 12.6827 11.7313 12.6827 11.9671C12.6827 12.2028 12.4918 12.3941 12.2557 12.3941C12.02 12.3941 11.829 12.2028 11.829 11.9671C11.829 11.7313 12.02 11.54 12.2557 11.54ZM12.2557 11.78C12.3592 11.78 12.4431 11.8636 12.4431 11.9671C12.4431 12.0705 12.3592 12.1541 12.2557 12.1541C12.1526 12.1541 12.0687 12.0705 12.0687 11.9671C12.0687 11.8636 12.1526 11.78 12.2557 11.78Z" fill="white"/>
                                <path d="M22.9291 21.9719V24.6776H9.71027V7.32227H22.9291V12.4853" stroke="white" stroke-width="0.568889" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.4427 14.8476C24.3883 14.8817 24.2962 15.0812 24.2553 15.1523L23.8891 15.7898C23.839 15.8755 23.7625 16.0305 23.7056 16.0924C23.7401 16.1685 24.3755 16.7903 24.5177 16.9333C24.5696 16.9852 24.6048 17.0268 24.6578 17.0773C24.7222 17.1388 24.7499 17.132 24.752 17.2518C24.7655 17.9736 24.7392 18.7121 24.7435 19.4367C24.6834 19.4037 24.2365 18.8494 24.2226 18.8149C24.026 18.7107 23.701 18.7139 23.4777 18.6179L23.12 18.5461L23.1165 20.0735L22.6009 20.0728L22.6016 18.4316C22.5241 18.4074 22.4523 18.3967 22.3709 18.3772C22.229 18.3434 22.0793 18.1169 21.9054 17.9839L21.6142 18.2883C21.5204 18.3992 21.3888 18.508 21.3415 18.6054L20.858 18.604L20.2923 17.9793C19.7223 18.4508 20.2151 18.2574 19.5983 18.4298L19.5943 20.0721L19.0806 20.0757L19.0791 19.7539V19.3749V18.9962L19.0788 18.6222L19.0763 18.5478L18.9565 18.5557L18.6475 18.6357L18.0263 18.7754L17.9623 19.015L17.328 21.2703L17.2861 21.4268L26.3983 21.4275C26.3652 21.3439 26.3261 21.3507 26.2863 21.2558C26.2304 21.2358 26.0637 21.014 26.0121 20.951C25.8475 20.7494 25.877 20.8483 25.8781 20.5102L25.8795 20.134L25.8806 19.7525L25.882 19.3763L25.8838 19.015L25.8884 17.4997C25.8909 17.2355 25.8482 17.2568 25.9883 17.1125L26.9785 16.1205C26.9387 16.0156 26.8342 15.8595 26.7755 15.7557C26.6763 15.5804 26.2091 14.801 26.1686 14.6943L25.9222 14.6954L25.9172 15.8844L24.762 15.8897L24.7591 15.5854V15.2088V14.8277V14.6972L24.5092 14.695L24.4427 14.8476Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.447 12.7195C20.1053 12.7938 19.834 13.0238 19.6712 13.219C19.4912 13.4348 19.3664 13.7392 19.2754 14.0684L19.1997 14.4496L19.157 14.8098L19.1364 15.0508L18.698 15.059L18.708 15.2062L18.7101 15.352L18.9117 15.3541H19.2928H19.669H20.0505H20.4267H20.8082H21.1844H21.5656H21.9421H22.3232H22.6998H23.0809L23.4575 15.3509L23.4724 15.0611L23.0607 15.0558L22.9988 14.4563L22.9256 14.0777C22.8246 13.7559 22.7773 13.6098 22.6219 13.3545C22.3577 12.9211 21.8546 12.669 21.3373 12.6352C21.162 12.6238 20.5312 12.6295 20.447 12.7195Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.3908 15.9667L19.4992 16.3625C19.5184 16.3884 19.6016 16.6146 19.6258 16.6725C19.6685 16.7746 19.7289 16.8915 19.7751 16.9779C19.8324 17.0839 19.8886 17.1714 19.9483 17.2592C21.1607 19.0469 22.6534 17.3075 22.8528 15.7363L19.3591 15.7385L19.3908 15.9667Z" fill="white"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2651_150751">
                                <rect width="32" height="32" fill="white" transform="translate(0.833313)"/>
                                </clipPath>
                                </defs>
                                </svg>
                                


                        </div>
                        <div class="text-sixteen font-inter font-medium text-bgprogresb pt-3.5">

                            Gestion de Operaciones
                        </div>

                    </button>

                </div> <div class="text-center col-span-1  ">
                    <button id="aplicar"
                        class="bg-gray-600 flex-col   p-4  rounded-lg aplicar focus:bg-bcklightbuscador hover:bg-bcklightbuscador focus:outline-none    w-full  flex  items-center">

                        <div>
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.5 32C25.3366 32 32.5 24.8366 32.5 16C32.5 7.16344 25.3366 0 16.5 0C7.66344 0 0.5 7.16344 0.5 16C0.5 24.8366 7.66344 32 16.5 32Z" fill="#91C958"/>
                                <path d="M16.5001 29.9871C24.225 29.9871 30.4873 23.7248 30.4873 15.9999C30.4873 8.27498 24.225 2.0127 16.5001 2.0127C8.77516 2.0127 2.51288 8.27498 2.51288 15.9999C2.51288 23.7248 8.77516 29.9871 16.5001 29.9871Z" fill="#669933"/>
                                <path d="M20.3819 21.1582C20.2933 22.9011 20.3893 24.52 20.5678 26.0851C17.9093 24.0037 15.2093 23.5436 12.432 26.0851C12.6382 24.5314 12.7741 22.9598 12.7431 21.3466" stroke="white" stroke-width="0.888889" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8476 14.6802L14.6227 13.6014C14.4922 13.4948 14.3354 13.3291 14.0997 13.4361C13.9895 13.4862 13.7477 13.7209 13.6887 13.8027C13.4056 14.1942 14.1118 14.8242 14.4542 15.2807L15.4785 16.5746C15.7957 16.9568 15.9027 17.114 16.3031 16.5184L17.2851 15.1485C17.9031 14.2813 18.6412 13.3106 19.2264 12.4537C19.316 12.3222 19.4529 12.1067 19.3242 11.9243C19.2791 11.8606 18.9566 11.5965 18.8762 11.5581C18.5768 11.4151 18.3034 11.8532 18.0161 12.1945C17.7711 12.4857 17.5436 12.7396 17.2983 13.0215L15.8476 14.6802V14.6802Z" stroke="white" stroke-width="0.711111" stroke-miterlimit="22.9256"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4999 19.3231C19.3174 19.3231 21.6015 17.0391 21.6015 14.2216C21.6015 11.4042 19.3174 9.12012 16.4999 9.12012C13.6825 9.12012 11.3984 11.4042 11.3984 14.2216C11.3984 17.0391 13.6825 19.3231 16.4999 19.3231Z" stroke="white" stroke-width="0.711111" stroke-miterlimit="22.9256"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4673 6.46302C13.9802 6.62799 13.919 7.11688 13.6029 7.44399C13.4874 7.72595 13.3437 7.87386 12.9924 7.93644L12.5356 7.92968C12.1992 7.92399 11.9588 7.90088 11.6218 7.94995C11.2417 8.17217 10.9612 8.31119 10.9288 8.884C10.8488 9.44008 10.9459 10.0595 10.5363 10.2934C10.238 10.4637 9.54036 10.7304 9.3352 10.9516C8.91956 11.3992 9.01236 11.7718 9.23778 12.3222C9.4504 12.841 9.72738 13.1485 9.35156 13.6708C9.16169 13.934 8.71796 14.441 8.65929 14.8051C8.46053 16.0399 10.1437 15.8909 9.95173 17.1187C9.86107 17.6982 9.69929 18.249 10.0193 18.6724C10.3208 19.0717 10.7396 19.0732 11.3107 19.1983C12.0428 19.3587 11.9748 19.5066 12.201 20.1761C12.3777 20.6991 12.4897 21.0678 12.9725 21.2296C13.7885 21.503 14.5444 20.5615 15.1667 21.1805C15.6484 21.6598 16.1782 22.3318 16.9242 21.9791C17.6324 21.6442 17.7252 20.7844 18.6308 21.0163C21.6484 21.7889 19.7213 19.6282 22.0143 19.135C22.6348 19.0017 23.2424 18.7741 23.1834 17.9802C23.1745 17.8564 23.1126 17.402 23.0813 17.3132C22.958 16.4808 23.1034 16.4886 23.5475 16.1032C23.7025 15.9684 23.8611 15.855 24.0086 15.7213C24.2269 15.5233 24.2013 15.4806 24.3375 15.2058C24.4911 14.3236 23.6851 13.9663 23.5016 13.406C23.305 12.8061 24.175 12.0708 23.9059 11.3142C23.663 10.6319 22.6764 10.5373 22.3528 10.2006C21.9336 9.76471 22.3564 8.75137 21.7508 8.17004C21.1297 7.57413 20.0406 8.27422 19.5539 7.69573C19.1681 7.23777 18.9839 6.41004 18.2191 6.36808C17.4909 6.32826 16.9092 7.21679 16.2938 7.02622L15.4312 6.55333C15.134 6.38053 14.6241 6.25253 14.4673 6.46302V6.46302Z" stroke="white" stroke-width="0.888889" stroke-miterlimit="22.9256"/>
                                </svg>
                                


                        </div>
                        <div class="text-sixteen font-inter font-medium text-bgprogresb pt-3.5">

                            Gestion de Operaciones
                        </div>

                    </button>

                </div> <div class="text-center col-span-1  ">
                    <button id="aplicar"
                        class="bg-gray-600 flex-col   p-4  rounded-lg aplicar focus:bg-bcklightbuscador hover:bg-bcklightbuscador focus:outline-none    w-full  flex  items-center">

                        <div>
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.1667 32C25.0032 32 32.1667 24.8366 32.1667 16C32.1667 7.16344 25.0032 0 16.1667 0C7.33013 0 0.166687 7.16344 0.166687 16C0.166687 24.8366 7.33013 32 16.1667 32Z" fill="#2DCFA1"/>
                                <path d="M16.1666 29.9871C23.8915 29.9871 30.1538 23.7248 30.1538 15.9999C30.1538 8.27498 23.8915 2.0127 16.1666 2.0127C8.44167 2.0127 2.17938 8.27498 2.17938 15.9999C2.17938 23.7248 8.44167 29.9871 16.1666 29.9871Z" fill="#009B6F"/>
                                <path d="M16.1667 28.8766C23.2784 28.8766 29.0435 23.1115 29.0435 15.9998C29.0435 8.88819 23.2784 3.12305 16.1667 3.12305C9.05506 3.12305 3.28992 8.88819 3.28992 15.9998C3.28992 23.1115 9.05506 28.8766 16.1667 28.8766Z" fill="#009B6F"/>
                                <path d="M9.57733 20.5918H8.15262V22.9666H9.57733V20.5918Z" stroke="white" stroke-width="0.355556" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.3467 19.0674H11.922V22.7979H13.3467V19.0674Z" stroke="white" stroke-width="0.355556" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17.1164 17.5244H15.6917V22.6305H17.1164V17.5244Z" stroke="white" stroke-width="0.355556" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.8857 14.5947H19.461V22.4617H20.8857V14.5947Z" stroke="white" stroke-width="0.355556" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.6231 11.7868C13.8387 11.6182 14.1285 11.6287 14.2704 11.8101C14.4122 11.9916 14.3524 12.2753 14.1368 12.4439L10.9914 14.9028C10.7758 15.0714 10.486 15.061 10.3441 14.8795C10.2023 14.6981 10.2621 14.4143 10.4777 14.2457L13.6231 11.7868Z" fill="white"/>
                                <path d="M24.6557 9.0332H23.231V22.2929H24.6557V9.0332Z" stroke="white" stroke-width="0.355556" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.32214 19.1874C7.32214 19.1874 17.2958 18.7522 21.4117 8.97656" stroke="white" stroke-width="0.568889" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3794 8.53843L22.3517 9.3939L22.107 7.40527L20.3794 8.53843Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.399 7.28025C18.032 7.48007 19.1936 8.96594 18.9935 10.599C18.7936 12.2321 17.3074 13.3937 15.6747 13.1935C14.0416 12.9937 12.88 11.5078 13.0799 9.87474C13.28 8.24167 14.7659 7.08007 16.399 7.28025ZM16.2976 8.10798C17.4731 8.25198 18.3097 9.32185 18.1657 10.4977C18.0217 11.6735 16.9519 12.5098 15.776 12.3658C14.6002 12.2218 13.7639 11.1519 13.9079 9.97607C14.0519 8.80025 15.1218 7.96398 16.2976 8.10798Z" fill="white"/>
                                <path d="M16.4601 7.81073L16.3947 8.34483L16.132 8.31266L16.1974 7.77856L16.4601 7.81073ZM16.0783 10.6665L16.021 11.1341L15.7601 11.1021L15.8174 10.6345L16.0783 10.6665ZM16.4963 10.156C16.5049 10.086 16.4969 10.021 16.4722 9.96111C16.4475 9.90122 16.4019 9.84349 16.3352 9.78792C16.2686 9.73236 16.177 9.6773 16.0604 9.62274C15.9189 9.55919 15.7984 9.48815 15.699 9.40962C15.6008 9.33123 15.5284 9.24001 15.4819 9.13597C15.4366 9.03206 15.4224 8.91123 15.4392 8.77348C15.4568 8.62988 15.5029 8.50992 15.5775 8.4136C15.6521 8.31728 15.7495 8.24803 15.8696 8.20587C15.9897 8.1637 16.1262 8.15198 16.2791 8.17071C16.3982 8.1853 16.5022 8.2164 16.5912 8.26403C16.6803 8.3105 16.7527 8.37268 16.8083 8.45059C16.8651 8.52865 16.9042 8.62053 16.9256 8.72624C16.9482 8.8321 16.9513 8.95157 16.935 9.08466L16.6128 9.04519C16.6224 8.96698 16.6219 8.89403 16.6112 8.82637C16.6005 8.75871 16.5794 8.69865 16.5479 8.64621C16.5166 8.59261 16.4756 8.54967 16.4251 8.51741C16.3747 8.48398 16.3144 8.46298 16.2444 8.4544C16.1463 8.44239 16.0631 8.44938 15.9947 8.47537C15.9276 8.5015 15.875 8.54365 15.8371 8.6018C15.7993 8.65879 15.7755 8.72756 15.7656 8.80812C15.7564 8.88283 15.7636 8.95007 15.7871 9.00982C15.8106 9.06958 15.8557 9.12665 15.9225 9.18105C15.9907 9.23442 16.0863 9.29056 16.2094 9.34949C16.3541 9.4158 16.475 9.48808 16.5721 9.56632C16.6693 9.6434 16.7395 9.73258 16.7828 9.83386C16.8263 9.93398 16.8395 10.0535 16.8225 10.1924C16.804 10.343 16.7546 10.4661 16.6741 10.5617C16.5938 10.6562 16.4891 10.7227 16.36 10.7614C16.2308 10.8001 16.0839 10.8094 15.9193 10.7892C15.8201 10.7771 15.7237 10.7516 15.63 10.7129C15.5364 10.6742 15.4542 10.6197 15.3835 10.5494C15.3128 10.4779 15.2603 10.3892 15.2259 10.283C15.1916 10.1758 15.1835 10.0486 15.2015 9.90146L15.5273 9.94136C15.5151 10.0406 15.519 10.1246 15.539 10.1934C15.5604 10.2612 15.5926 10.3173 15.6357 10.3617C15.679 10.4049 15.7283 10.4382 15.7835 10.4615C15.84 10.4839 15.8968 10.4985 15.9541 10.5055C16.0591 10.5184 16.1498 10.5129 16.2262 10.4891C16.3039 10.4643 16.3658 10.4233 16.4119 10.3661C16.458 10.3089 16.4862 10.2389 16.4963 10.156Z" fill="white"/>
                                </svg>
                                


                        </div>
                        <div class="text-sixteen font-inter font-medium text-bgprogresb pt-3.5">

                            Gestion de Operaciones
                        </div>

                    </button>

                </div> <div class="text-center col-span-1  ">
                    <button id="aplicar"
                        class="bg-gray-600 flex-col   p-4  rounded-lg aplicar focus:bg-bcklightbuscador hover:bg-bcklightbuscador focus:outline-none    w-full  flex  items-center">

                        <div>
                            <svg width="32" height="31" viewBox="0 0 32 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.8333 31C24.3937 31 31.3333 24.0604 31.3333 15.5C31.3333 6.93959 24.3937 0 15.8333 0C7.2729 0 0.333313 6.93959 0.333313 15.5C0.333313 24.0604 7.2729 31 15.8333 31Z" fill="#FF9999"/>
                                <path d="M15.8334 29.0494C23.3169 29.0494 29.3835 22.9828 29.3835 15.4993C29.3835 8.01581 23.3169 1.94922 15.8334 1.94922C8.34991 1.94922 2.28333 8.01581 2.28333 15.4993C2.28333 22.9828 8.34991 29.0494 15.8334 29.0494Z" fill="#FF6666"/>
                                <path d="M15.8333 27.9742C22.7228 27.9742 28.3077 22.3892 28.3077 15.4998C28.3077 8.61037 22.7228 3.02539 15.8333 3.02539C8.94393 3.02539 3.35895 8.61037 3.35895 15.4998C3.35895 22.3892 8.94393 27.9742 15.8333 27.9742Z" fill="#FF6666"/>
                                <path d="M13.4209 19.4544C13.4209 18.6959 12.8061 18.0811 12.0477 18.0811C11.2894 18.0811 10.6746 18.6959 10.6746 19.4544V20.6761C10.6746 21.4346 11.2894 22.0494 12.0477 22.0494C12.8061 22.0494 13.4209 21.4346 13.4209 20.6761V19.4544Z" fill="white"/>
                                <path d="M17.1474 18.239C17.1474 17.1254 16.5326 16.2227 15.7743 16.2227C15.0159 16.2227 14.4011 17.1254 14.4011 18.239V20.0343C14.4011 21.1479 15.0159 22.0507 15.7743 22.0507C16.5326 22.0507 17.1474 21.1479 17.1474 20.0343V18.239Z" fill="white"/>
                                <path d="M20.8738 17.0241C20.8738 15.5551 20.259 14.3643 19.5007 14.3643C18.7423 14.3643 18.1276 15.5551 18.1276 17.0241V19.3918C18.1276 20.8607 18.7423 22.0516 19.5007 22.0516C20.259 22.0516 20.8738 20.8607 20.8738 19.3918V17.0241Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.6215 17.0737L13.9657 13.7295L15.1141 14.8783L16.2121 15.976L17.3099 14.8783L20.6541 11.5337L21.5331 12.4131L22.1428 8.94727L18.5895 9.46944L19.5564 10.436L16.2121 13.7802L15.0634 12.6318L13.9657 11.5337L12.8679 12.6318L9.52338 15.976L10.6215 17.0737Z" fill="white"/>
                                <path d="M15.6633 25.3384C21.1372 25.3384 25.5747 20.9009 25.5747 15.427C25.5747 9.9531 21.1372 5.51562 15.6633 5.51562C10.1894 5.51562 5.75189 9.9531 5.75189 15.427C5.75189 20.9009 10.1894 25.3384 15.6633 25.3384Z" stroke="white" stroke-width="0.551111" stroke-miterlimit="22.9256"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.216 12.6813L23.1122 11.0758L25.7279 10.1641L25.216 12.6813Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1247 25.37L18.1972 23.7246L18.4394 26.484L16.1247 25.37Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.27672 12.2354L7.05137 14.7043L4.36987 14.0092L6.27672 12.2354Z" fill="white"/>
                                </svg>
                                


                        </div>
                        <div class="text-sixteen font-inter font-medium text-bgprogresb pt-3.5">

                            Gestion de Operaciones
                        </div>

                    </button>

                </div> <div class="text-center col-span-1  ">
                    <button id="aplicar"
                        class="bg-gray-600 flex-col   p-4  rounded-lg aplicar focus:bg-bcklightbuscador hover:bg-bcklightbuscador focus:outline-none    w-full  flex  items-center">

                        <div>
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2651_150812)">
                                <path d="M16.5 32C25.3366 32 32.5 24.8366 32.5 16C32.5 7.16344 25.3366 0 16.5 0C7.66344 0 0.5 7.16344 0.5 16C0.5 24.8366 7.66344 32 16.5 32Z" fill="#FF9A78"/>
                                <path d="M16.4999 29.9871C24.2248 29.9871 30.4871 23.7248 30.4871 15.9999C30.4871 8.27498 24.2248 2.0127 16.4999 2.0127C8.77498 2.0127 2.5127 8.27498 2.5127 15.9999C2.5127 23.7248 8.77498 29.9871 16.4999 29.9871Z" fill="#FF6633"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5542 14.3588C12.1671 18.373 17.013 18.559 17.7515 14.3656C19.3319 13.9325 18.6742 12.4513 18.3236 12.3275L11.3437 12.2959C10.7446 12.3307 10.6695 13.034 10.7197 13.4017C10.7986 13.9816 11.0966 14.1281 11.5542 14.3588Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.8154 10.3658L10.243 10.3761L10.2444 11.6525L18.9125 11.6511L18.9089 10.4045L18.3329 10.3605C17.9137 9.24295 17.241 7.94161 16.0343 7.51566C16.0432 10.4991 16.3824 11.0253 14.6103 11.0243C12.7912 11.0225 13.1258 10.7711 13.1258 7.48828C12.083 7.85664 11.2531 9.11673 10.8154 10.3658Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5779 8.78223C15.0127 8.78223 15.3654 9.13494 15.3654 9.57014C15.3654 10.0053 15.0127 10.3581 14.5779 10.3581C14.1427 10.3581 13.7899 10.0053 13.7899 9.57014C13.7899 9.13494 14.1427 8.78223 14.5779 8.78223ZM13.7622 6.35059H15.3935C15.5748 6.35059 15.7235 6.49921 15.7235 6.68054V10.2752C15.7235 10.4565 15.5748 10.6052 15.3935 10.6052H13.7622C13.5805 10.6052 13.4323 10.4565 13.4323 10.2752V6.68054C13.4323 6.49921 13.5805 6.35059 13.7622 6.35059Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.6572 15.5995L24.5342 13.7229C24.6725 13.5846 24.8986 13.5846 25.0366 13.7229C25.1749 13.8608 25.1749 14.087 25.0366 14.2253L22.9086 16.3533L22.9022 16.3597L22.8954 16.3661L22.8887 16.3718L22.8816 16.3778L22.8748 16.3831C22.8698 16.3871 22.8652 16.3903 22.8602 16.3938C22.8577 16.3956 22.8556 16.397 22.8531 16.3988L22.8457 16.4034L22.8382 16.408L22.8304 16.4123L22.8229 16.4166H22.8225C22.8176 16.4191 22.8122 16.4219 22.8073 16.4244L22.7991 16.4279L22.7913 16.4311L22.7831 16.4343C22.7777 16.4361 22.7724 16.4383 22.7671 16.44H22.7667L22.7585 16.4425L22.7504 16.4447C22.7447 16.4464 22.7393 16.4475 22.7337 16.4489L22.7255 16.4507H22.7251C22.7027 16.455 22.68 16.4571 22.6572 16.4571H22.6487L22.6401 16.4567L22.6316 16.456L22.6231 16.4553L22.6145 16.4546L22.6064 16.4535V16.4532L22.5978 16.4521C22.5893 16.4507 22.5811 16.4489 22.5726 16.4468C22.5616 16.4443 22.5505 16.4411 22.5395 16.4372C22.5289 16.4333 22.5178 16.429 22.5075 16.4244L22.4997 16.4205L22.4919 16.4166L22.4844 16.4123H22.4841L22.4766 16.408L22.4691 16.4034L22.4617 16.3988L22.4545 16.3938H22.4542L22.4471 16.3885L22.44 16.3831L22.4329 16.3778L22.4261 16.3718L22.4193 16.3661V16.3657L22.4126 16.3597L22.4062 16.3533L21.5934 15.5405C21.4551 15.4025 21.4551 15.1764 21.5934 15.0381C21.7313 14.8998 21.9575 14.8998 22.0958 15.0381L22.6572 15.5995Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9039 18.0768V18.0814C15.8959 18.1198 16.4722 17.7664 17.1435 17.3955C17.9887 18.0305 17.465 18.0928 18.7915 18.092V23.3454H19.7149V18.1365C20.7791 18.2826 21.3885 18.8245 21.7864 20.2798C22.153 21.6216 22.0658 22.8042 22.0086 24.1507C21.6772 24.2154 17.7352 24.251 14.8577 24.2097C11.9798 24.251 8.03775 24.2154 7.70673 24.1507C7.64913 22.8042 7.56201 21.6216 7.92859 20.2798C8.32646 18.8245 8.93588 18.2826 10.0001 18.1365V23.3454H10.9234V18.092C12.25 18.0928 11.7263 18.0305 12.5714 17.3955C13.2427 17.7664 13.8191 18.1198 14.8111 18.0814V18.0768C14.8264 18.0778 14.842 18.0785 14.8577 18.0792C14.8729 18.0785 14.8886 18.0778 14.9039 18.0768Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.3233 18.471C22.2392 18.4397 21.3315 17.1821 20.913 16.3369C20.6421 15.7904 20.4675 15.2166 20.4035 14.567C20.3772 14.2978 20.3509 12.5677 20.3839 12.3497C20.5475 12.3099 20.9926 12.2822 21.1946 12.2573C21.5477 12.2135 22.3516 12.0166 22.6733 11.8754C22.7786 11.8292 23.2646 11.6237 23.3126 11.6212C23.4261 11.6397 23.8424 11.8306 23.9761 11.8804C24.6193 12.1204 25.5839 12.3483 26.2577 12.3351C26.2072 14.0713 26.3988 14.8219 25.6913 16.3092C25.3663 16.9922 24.775 17.7396 24.1553 18.1602C23.884 18.3444 23.7066 18.408 23.3254 18.4678L23.3233 18.471ZM23.3212 11.1191C23.0438 11.1191 22.8771 11.2528 22.6559 11.3417C22.4202 11.4359 22.2047 11.4943 21.9594 11.5775C20.86 11.9511 20.0088 11.5963 19.8858 12.2317C19.8197 12.5741 19.9068 14.6768 19.9448 14.9545C20.0742 15.8999 20.5663 16.9023 21.0371 17.5223C21.569 18.2235 22.3754 18.9574 23.3222 18.9574C24.076 18.9574 24.6293 18.471 25.0836 18.0166C25.5992 17.501 25.8797 17.0662 26.209 16.3799C26.7615 15.229 26.7498 14.5119 26.7498 13.2255C26.7498 12.6292 26.9059 11.9042 26.3025 11.8427C25.2721 11.7371 24.9382 11.6994 24.0173 11.3655C23.8943 11.3207 23.8154 11.2727 23.7062 11.2276C23.5637 11.1686 23.5196 11.1191 23.3212 11.1191Z" fill="white"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_2651_150812">
                                <rect width="32" height="32" fill="white" transform="translate(0.5)"/>
                                </clipPath>
                                </defs>
                                </svg>
                                


                        </div>
                        <div class="text-sixteen font-inter font-medium text-bgprogresb pt-3.5">

                            Gestion de Operaciones
                        </div>

                    </button>

                </div> <div class="text-center col-span-1  ">
                    <button id="aplicar"
                        class="bg-gray-600 flex-col   p-4  rounded-lg aplicar focus:bg-bcklightbuscador hover:bg-bcklightbuscador focus:outline-none    w-full  flex  items-center">

                        <div>
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.1666 32.0001C25.0032 32.0001 32.1667 24.8366 32.1667 16C32.1667 7.16346 25.0032 0 16.1666 0C7.33006 0 0.166595 7.16346 0.166595 16C0.166595 24.8366 7.33006 32.0001 16.1666 32.0001Z" fill="#999999"/>
                                <path d="M16.1668 29.9872C23.8918 29.9872 30.1541 23.7249 30.1541 16C30.1541 8.27501 23.8918 2.0127 16.1668 2.0127C8.44188 2.0127 2.17957 8.27501 2.17957 16C2.17957 23.7249 8.44188 29.9872 16.1668 29.9872Z" fill="#424F4F"/>
                                <path d="M16.1665 28.8766C23.2782 28.8766 29.0433 23.1115 29.0433 15.9998C29.0433 8.88819 23.2782 3.12305 16.1665 3.12305C9.05487 3.12305 3.28973 8.88819 3.28973 15.9998C3.28973 23.1115 9.05487 28.8766 16.1665 28.8766Z" fill="#424F4F"/>
                                <path d="M20.9463 23.4944H8.63406V7.3291H18.8434L20.9463 9.83443V16.0833" stroke="white" stroke-width="0.569615" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.8435 7.3291L18.468 9.86593L20.9465 9.83443L18.8435 7.3291Z" stroke="white" stroke-width="0.569615" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.5515 13.8133L17.0321 11.4404M9.19852 16.7605L10.733 13.4744L9.19852 16.7605ZM11.1943 13.4218L12.3248 15.1755L12.8302 15.1926L13.5411 13.8009L11.1943 13.4218ZM14.1873 13.4049L15.9766 14.2382L14.1873 13.4049Z" stroke="white" stroke-width="0.284786" stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.9206 13.5167C11.1661 13.5167 11.365 13.3177 11.365 13.0723C11.365 12.8269 11.1661 12.6279 10.9206 12.6279C10.6752 12.6279 10.4763 12.8269 10.4763 13.0723C10.4763 13.3177 10.6752 13.5167 10.9206 13.5167Z" stroke="white" stroke-width="0.356014" stroke-miterlimit="22.9256"/>
                                <path d="M12.5652 15.9942C12.8106 15.9942 13.0096 15.7953 13.0096 15.5499C13.0096 15.3044 12.8106 15.1055 12.5652 15.1055C12.3197 15.1055 12.1208 15.3044 12.1208 15.5499C12.1208 15.7953 12.3197 15.9942 12.5652 15.9942Z" stroke="white" stroke-width="0.356014" stroke-miterlimit="22.9256"/>
                                <path d="M13.7429 13.8507C13.9883 13.8507 14.1873 13.6517 14.1873 13.4063C14.1873 13.1609 13.9883 12.9619 13.7429 12.9619C13.4975 12.9619 13.2985 13.1609 13.2985 13.4063C13.2985 13.6517 13.4975 13.8507 13.7429 13.8507Z" stroke="white" stroke-width="0.356014" stroke-miterlimit="22.9256"/>
                                <path d="M16.421 14.6837C16.6665 14.6837 16.8654 14.4847 16.8654 14.2393C16.8654 13.9939 16.6665 13.7949 16.421 13.7949C16.1756 13.7949 15.9767 13.9939 15.9767 14.2393C15.9767 14.4847 16.1756 14.6837 16.421 14.6837Z" stroke="white" stroke-width="0.356014" stroke-miterlimit="22.9256"/>
                                <path d="M17.1206 11.4503C17.3661 11.4503 17.565 11.2513 17.565 11.0059C17.565 10.7605 17.3661 10.5615 17.1206 10.5615C16.8752 10.5615 16.6762 10.7605 16.6762 11.0059C16.6762 11.2513 16.8752 11.4503 17.1206 11.4503Z" stroke="white" stroke-width="0.356014" stroke-miterlimit="22.9256"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.64055 17.7536H10.2405V18.3535H9.64055V17.7536ZM9.40164 17.5146H10.4794V18.5924H9.40164V17.5146Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.64055 19.0866H10.2405V19.6865H9.64055V19.0866ZM9.40164 18.8477H10.4794V19.9254H9.40164V18.8477Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.64055 20.4196H10.2405V21.0195H9.64055V20.4196ZM9.40164 20.1807H10.4794V21.2584H9.40164V20.1807Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.64055 21.7536H10.2405V22.3535H9.64055V21.7536ZM9.40164 21.5146H10.4794V22.5924H9.40164V21.5146Z" fill="white"/>
                                <path d="M13.1598 17.7646H10.832C10.7799 17.7646 10.7376 17.8069 10.7376 17.8591C10.7376 17.9113 10.7799 17.9535 10.832 17.9535H13.1598C13.212 17.9535 13.2543 17.9113 13.2543 17.8591C13.2543 17.8069 13.212 17.7646 13.1598 17.7646Z" fill="white"/>
                                <path d="M12.7697 18.1543H10.8168C10.7731 18.1543 10.7376 18.1966 10.7376 18.2487C10.7376 18.3009 10.7731 18.3432 10.8168 18.3432H12.7697C12.8134 18.3432 12.8489 18.3009 12.8489 18.2487C12.8489 18.1966 12.8134 18.1543 12.7697 18.1543Z" fill="white"/>
                                <path d="M13.1481 19.0977H10.8203C10.7681 19.0977 10.7259 19.1399 10.7259 19.1921C10.7259 19.2443 10.7681 19.2865 10.8203 19.2865H13.1481C13.2003 19.2865 13.2426 19.2443 13.2426 19.1921C13.2426 19.1399 13.2003 19.0977 13.1481 19.0977Z" fill="white"/>
                                <path d="M12.7583 19.4873H10.8055C10.7617 19.4873 10.7263 19.5296 10.7263 19.5818C10.7263 19.6339 10.7617 19.6762 10.8055 19.6762H12.7583C12.8021 19.6762 12.8376 19.6339 12.8376 19.5818C12.8376 19.5296 12.8021 19.4873 12.7583 19.4873Z" fill="white"/>
                                <path d="M13.1368 20.4307H10.809C10.7568 20.4307 10.7145 20.473 10.7145 20.5251C10.7145 20.5773 10.7568 20.6196 10.809 20.6196H13.1368C13.189 20.6196 13.2312 20.5773 13.2312 20.5251C13.2312 20.473 13.189 20.4307 13.1368 20.4307Z" fill="white"/>
                                <path d="M12.747 20.8213H10.7942C10.7504 20.8213 10.7149 20.8636 10.7149 20.9157C10.7149 20.9679 10.7504 21.0102 10.7942 21.0102H12.747C12.7908 21.0102 12.8263 20.9679 12.8263 20.9157C12.8263 20.8636 12.7908 20.8213 12.747 20.8213Z" fill="white"/>
                                <path d="M13.1255 21.7646H10.7977C10.7455 21.7646 10.7032 21.8069 10.7032 21.8591C10.7032 21.9113 10.7455 21.9535 10.7977 21.9535H13.1255C13.1776 21.9535 13.2199 21.9113 13.2199 21.8591C13.2199 21.8069 13.1776 21.7646 13.1255 21.7646Z" fill="white"/>
                                <path d="M12.7353 22.1543H10.7825C10.7387 22.1543 10.7032 22.1966 10.7032 22.2487C10.7032 22.3009 10.7387 22.3432 10.7825 22.3432H12.7353C12.7791 22.3432 12.8145 22.3009 12.8145 22.2487C12.8145 22.1966 12.7791 22.1543 12.7353 22.1543Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.6525 15.1748C19.5703 15.1748 21.125 16.7295 21.125 18.6472C21.125 19.4115 20.8779 20.1179 20.4595 20.6914L23.5342 23.7195C23.7517 23.9336 23.7543 24.2867 23.5402 24.5042C23.326 24.7216 22.9729 24.7243 22.7555 24.5102L19.6713 21.4727C19.1024 21.8799 18.4055 22.1196 17.6525 22.1196C15.7348 22.1196 14.1801 20.565 14.1801 18.6472C14.1801 16.7295 15.7348 15.1748 17.6525 15.1748ZM17.6525 16.1771C19.0167 16.1771 20.1226 17.283 20.1226 18.6472C20.1226 20.0114 19.0167 21.1173 17.6525 21.1173C16.2883 21.1173 15.1825 20.0114 15.1825 18.6472C15.1825 17.283 16.2883 16.1771 17.6525 16.1771Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.867 17.1486C16.6834 17.1486 16.617 16.8857 16.4434 16.8857C16.2624 16.8857 16.252 16.9092 16.082 17.0792C15.8965 17.2647 15.7809 17.4164 16.0162 17.6488C16.1622 17.7931 16.2065 17.7926 16.0594 18.0936C15.9592 18.2988 15.7122 18.1168 15.5375 18.258C15.4041 18.3658 15.4358 18.6082 15.4358 18.7989C15.4358 19.0227 15.6095 19.0931 15.8154 19.091C15.9588 19.0896 16.0083 19.0785 16.0595 19.1829C16.085 19.2349 16.1514 19.3901 16.1514 19.4415C16.1514 19.637 15.8885 19.5983 15.8885 19.9234C15.8885 20.0473 16.2199 20.3494 16.2954 20.3783C16.4157 20.4244 16.5186 20.3921 16.6007 20.3143C16.8436 20.0843 16.7711 20.0885 17.0847 20.2169C17.3026 20.3062 17.1281 20.5394 17.2466 20.7267C17.3465 20.8848 17.5946 20.8435 17.8162 20.8435C17.9151 20.8435 17.9938 20.7885 18.0381 20.7295C18.1717 20.5517 17.9961 20.3033 18.1982 20.2178C18.6377 20.0318 18.4481 20.1787 18.7419 20.356C18.9759 20.4973 19.11 20.2916 19.3246 20.0735C19.3518 20.0459 19.3642 20.0323 19.3794 19.9969C19.5157 19.6799 19.0962 19.6057 19.139 19.4066C19.1512 19.3494 19.1906 19.2743 19.214 19.2181C19.2956 19.0215 19.3788 19.1183 19.5948 19.0878C19.9052 19.0438 19.8463 18.7401 19.8463 18.463C19.8463 18.3206 19.7376 18.2054 19.5985 18.1996C19.2216 18.1837 19.2947 18.2186 19.1842 17.9859C19.1656 17.9467 19.1559 17.937 19.1437 17.8936C19.1213 17.8141 19.148 17.766 19.1995 17.714C19.4572 17.454 19.5031 17.3823 19.2146 17.0938C19.0747 16.9539 19.0468 16.8857 18.8678 16.8857C18.6669 16.8857 18.5947 17.1486 18.4589 17.1486C18.4108 17.1486 18.1573 17.0772 18.1098 16.9865C18.085 16.939 18.0929 16.8956 18.0937 16.8274C18.0988 16.3761 17.8522 16.433 17.4804 16.433C17.395 16.433 17.2988 16.4878 17.2608 16.5347C17.1949 16.6162 17.2017 16.6686 17.2031 16.8129C17.2043 16.9422 17.1937 17.0045 17.1061 17.0518C17.0818 17.0649 16.8803 17.1486 16.867 17.1486ZM17.6416 19.6465C18.1978 19.6465 18.6486 19.1957 18.6486 18.6395C18.6486 18.0833 18.1978 17.6325 17.6416 17.6325C17.0855 17.6325 16.6346 18.0833 16.6346 18.6395C16.6346 19.1957 17.0855 19.6465 17.6416 19.6465Z" fill="white"/>
                                </svg>
                                


                        </div>
                        <div class="text-sixteen font-inter font-medium text-bgprogresb pt-3.5">

                            Gestion de Operaciones
                        </div>

                    </button>

                </div>

            </div>
            

            <div class="text-center  my-2 px-1 pt-8">
                <button class="px-5 items-center justify-center py-2 text-green_especialidad bg-bgbtngreen focus:outline-none   rounded-lg text-xl font-semibold" id="iniciar">
                   <div class="flex flex-row items-center">
                    <div>
                        Continuar 
                       </div>
                        <div><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.3339 5.83301L15.5005 9.99967M15.5005 9.99967L11.3339 14.1663M15.5005 9.99967L5.50052 9.99967" stroke="#145229" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </div>
                   </div>
                </button>
            </div>


            <br><br>
            <br>
            <br>

        </div>


    </div>









    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script>


    <script>
        var play1 = document.getElementById('play1');
        var icon1 = document.getElementById('icon1');
        var icon2 = document.getElementById('icon2');

        var play2 = document.getElementById('play2');
        var icon3 = document.getElementById('icon3');

        var play3 = document.getElementById('play3');
        var icon4 = document.getElementById('icon4');





        /*  play1.addEventListener('click', function() {
             icon2.classList.remove('hidden');
             icon1.classList.toggle('hidden');
         });

         play2.addEventListener('click', function() {
             icon3.classList.remove('hidden');
             icon2.classList.toggle('hidden');
         }); */

        play1.addEventListener('click', function() {
            icon5.classList.remove('hidden');
            icon4.classList.toggle('hidden');
        });
    </script>
@endsection
{{-- <button type="button" id="play1"
                        class="bg-green text-xl font-semibold w-full hover:bg-green_hover focus:outline-none hover:text-white-500 
                        dark:text-white-500 border border-green_hover text-white-500 font-serif py-4  rounded "
                        {{-- onclick="dateEmailPass()" --}}>
                        Continuar
                    </button> --}}