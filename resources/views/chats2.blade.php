@extends('layout')
<style>
    .footeracceso {
        display: none !important;
    }
</style>
@section('content')
    <div class="dark:bg-gray14 bg-whiteheader  h-full">


        <div class="containermygo mx-auto  rounded-lg ">

            <br>
            <br>
            <br>

            <div class=" grid sm:grid-cols-6 grid-cols-1 bg-white">
                <!-- chat list -->
                {{--  flex bloqueuno flex-col xl:w-3/5 lg:w-4/5 ml:w-2/5 md:w-5/5 w-full --}}

                <div
                    class="  ml:col-span-2 xl:col-span-2 lg:col-span-3 md:col-span-3 col-span-1 border-r-2  border-borderconcours dark:border-gray-650 ">

                    <!-- search compt -->
                    <div class="bloqueuno sm:h-auto h-full  flex flex-col">


                        <div class="pb-4 pt-10 flex justify-between items-center p-4">
                            <div class="flex items-center ">
                                <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-lg font-inter font-medium">
                                    Mensajes
                                </div>
                                <div
                                    class="dark:bg-green_home bg-delesteicono text-sm font-medium font-inter dark:text-checkpricingdark text-pricingtextduowhite ml-3 px-2 rounded-lg">
                                    40
                                </div>
                            </div>
                            <svg width="44" height="44" viewBox="0 0 44 44" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_5889_256057)">
                                    <g clip-path="url(#clip0_5889_256057)">
                                        <path
                                            d="M21.1667 14.3333H17.6667C16.2666 14.3333 15.5666 14.3333 15.0318 14.6058C14.5614 14.8455 14.1789 15.228 13.9392 15.6984C13.6667 16.2331 13.6667 16.9332 13.6667 18.3333V25.3333C13.6667 26.7335 13.6667 27.4335 13.9392 27.9683C14.1789 28.4387 14.5614 28.8212 15.0318 29.0608C15.5666 29.3333 16.2666 29.3333 17.6667 29.3333H24.6667C26.0669 29.3333 26.7669 29.3333 27.3017 29.0608C27.7721 28.8212 28.1546 28.4387 28.3943 27.9683C28.6667 27.4335 28.6667 26.7335 28.6667 25.3333V21.8333M18.6667 24.3333H20.0622C20.4698 24.3333 20.6737 24.3333 20.8655 24.2873C21.0355 24.2465 21.1981 24.1791 21.3472 24.0877C21.5154 23.9847 21.6595 23.8405 21.9478 23.5523L29.9167 15.5833C30.6071 14.893 30.6071 13.7737 29.9167 13.0833C29.2264 12.393 28.1071 12.393 27.4167 13.0833L19.4478 21.0523C19.1595 21.3405 19.0154 21.4847 18.9123 21.6529C18.8209 21.802 18.7536 21.9646 18.7128 22.1346C18.6667 22.3264 18.6667 22.5303 18.6667 22.9379V24.3333Z"
                                            stroke="#CDD5DF" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <rect x="2.5" y="1.5" width="39" height="39" rx="7.5"
                                        stroke="#364152" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_5889_256057" x="0" y="0" width="44"
                                        height="44" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="1" />
                                        <feGaussianBlur stdDeviation="1" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0.0627451 0 0 0 0 0.0941176 0 0 0 0 0.156863 0 0 0 0.05 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_5889_256057" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_5889_256057"
                                            result="shape" />
                                    </filter>
                                    <clipPath id="clip0_5889_256057">
                                        <rect width="20" height="20" fill="white" transform="translate(12 11)" />
                                    </clipPath>
                                </defs>
                            </svg>


                        </div>
                        <div class="pb-4 px-4 border-t-2 border-borderconcours dark:border-gray-650 ">
                            <div class="relative">
                                <input type="text" placeholder="Buscar una amig@"
                                    class="py-2 pl-10 border-2  rounded-lg w-full border-borderconcours dark:border-txtcommentply dark:bg-black bg-white-100 dark:text-white-500 text-pricingdarkstudents focus:outline-none"
                                    wire:model="searchUser" />
                                <svg class="absolute top-3 left-3" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5005 17.4999L12.5005 12.4999M14.1671 8.33327C14.1671 11.5549 11.5555 14.1666 8.3338 14.1666C5.11214 14.1666 2.50047 11.5549 2.50047 8.33327C2.50047 5.11161 5.11214 2.49994 8.3338 2.49994C11.5555 2.49994 14.1671 5.11161 14.1671 8.33327Z"
                                        stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>

                        </div>

                        <div
                            class=" activebloqueuno flex flex-col py-4 px-4 justify-center items-center hover:bg-bgprogresb focus:bg-bgprogresb border-b-2 dark:hover:bg-txtnamecomntpkyr dark:focus:bg-txtnamecomntpkyr  border-borderconcours dark:border-gray-650">
                            {{--  <div class=" items-center flex justify-between"> --}}
                            <div class="flex justify-between w-full items-center">
                                <div class="flex w-full items-center">


                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect width="8" height="8" rx="4" fill="#0083F5" />
                                    </svg>

                                    <div class="justify-content  pl-4">
                                        <img src="https://source.unsplash.com/_7LbC5J-jw4/600x600"
                                            class="object-cover h-12 w-12 rounded-full" alt="" />
                                        {{-- <img src="{{asset($user->avatar)}}"
                                class="object-cover h-12 w-12 rounded-full" alt="" /> --}}
                                    </div>
                                    <div class="pl-2">
                                        <div class="text-lg font-semibold text-txtcommentply dark:text-borderconcours">
                                        </div>
                                        <span class="text-graypricingstrike">
                                            {{-- {{$tipo}} --}}@antoniortigoza
                                        </span>

                                    </div>
                                </div>
                                <div class="text-graypricingstrike w-44 text-right">
                                    Hace 5 minutos
                                </div>
                            </div>

                            {{--  </div> --}}
                            <div class="text-txtreffer font-inter font-medium text-sm pt-4">
                                Hey Olivia, Katherine sent me over the latest doc. I just have a quick question about the...
                            </div>
                        </div>
                    </div>

                    <!-- end user list -->
                </div>

                <div
                    class="col ml:col-span-4 xl:col-span-4 lg:col-span-3 md:col-span-3 col-span-1 justify-between sm:pb-16 pb-4  pt-6">
                    <div class="sm:flex hidden bloquedos  flex-col pt-0 relative ">
                        <button class="sm:hidden items-center flex text-green2 pl-4 pt-4 focus:outline-none" id="volver">
                            <svg width="24" height="24" viewBox="0 0 33 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.3472 5.26936C12.9721 5.89428 12.9721 6.90749 12.3472 7.53242L8.678 11.2016H17.6165C23.803 11.2016 28.8181 16.2167 28.8181 22.4032V25.6036C28.8181 26.4874 28.1017 27.2039 27.2179 27.2039C26.3341 27.2039 25.6177 26.4874 25.6177 25.6036V22.4032C25.6177 17.9843 22.0354 14.402 17.6165 14.402H8.678L12.3472 18.0712C12.9721 18.6961 12.9721 19.7093 12.3472 20.3342C11.7222 20.9592 10.709 20.9592 10.0841 20.3342L3.68317 13.9333C3.05825 13.3084 3.05825 12.2952 3.68317 11.6703L10.0841 5.26936C10.709 4.64443 11.7222 4.64443 12.3472 5.26936Z"
                                    fill="Currentcolor" />
                            </svg>
                            <div class="font-inter font-medium text-lg ml-2">
                                volver
                            </div>


                        </button>

                        {{-- <p class="dark:text-white-500 text-txtnamecomntpkyr text-2xl px-6 mt-5 font-inter font-bold">
                            Escoge un amigo y empieza a chatear
                        </p> --}}

                        <div class="absolute w-full ">
                            <div
                                class=" dark:bg-gray14 bg-whiteheader border-b-2 border-borderconcours dark:border-gray-650  pt-4 pb-5 justify-between flex">

                                <div class="flex items-center gap-x-4 sm:px-6 px-4  ">
                                    <div class="relative">
                                        <div class="contents">
                                        <img  src="https://source.unsplash.com/vpOeXr5wmR4/600x600"
                                            class=" h-14 w-14  rounded-full" alt="" />
                                        </div>
                                        <div class=" absolute bottom-0 -right-2">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_5889_256177)">
                                                    <path
                                                        d="M13.9 3.18782C14.071 3.60127 14.3991 3.92991 14.8123 4.10149L16.2612 4.70163C16.6747 4.8729 17.0032 5.20141 17.1745 5.6149C17.3457 6.02838 17.3457 6.49297 17.1745 6.90645L16.5747 8.35429C16.4034 8.76796 16.4032 9.23302 16.5753 9.64648L17.174 11.0939C17.2589 11.2987 17.3026 11.5182 17.3026 11.7399C17.3027 11.9616 17.259 12.1811 17.1742 12.3859C17.0893 12.5908 16.965 12.7769 16.8082 12.9336C16.6514 13.0903 16.4652 13.2146 16.2604 13.2994L14.8126 13.8991C14.3991 14.0701 14.0705 14.3982 13.8989 14.8114L13.2987 16.2603C13.1275 16.6738 12.799 17.0023 12.3855 17.1736C11.972 17.3448 11.5074 17.3448 11.0939 17.1736L9.64609 16.5739C9.23259 16.403 8.76817 16.4034 8.35493 16.5748L6.90606 17.1741C6.4928 17.345 6.02862 17.3448 5.61547 17.1737C5.20232 17.0026 4.874 16.6745 4.70261 16.2614L4.10228 14.8121C3.93133 14.3987 3.60318 14.07 3.18999 13.8984L1.74111 13.2983C1.32781 13.1271 0.999393 12.7988 0.828059 12.3855C0.656725 11.9723 0.656492 11.5079 0.827413 11.0945L1.42713 9.64668C1.59798 9.23318 1.59763 8.76876 1.42616 8.35552L0.827304 6.90561C0.742399 6.70081 0.69868 6.48129 0.698644 6.2596C0.698609 6.0379 0.742258 5.81837 0.827097 5.61355C0.911937 5.40873 1.0363 5.22263 1.19309 5.06589C1.34988 4.90916 1.53602 4.78485 1.74087 4.70007L3.1887 4.10036C3.60179 3.92956 3.93024 3.60182 4.10194 3.1891L4.70208 1.74023C4.87335 1.32674 5.20187 0.998231 5.61535 0.826961C6.02884 0.655689 6.49342 0.655689 6.90691 0.82696L8.35474 1.42667C8.76824 1.59752 9.23266 1.59717 9.6459 1.4257L11.0954 0.82789C11.5088 0.656715 11.9733 0.65675 12.3867 0.827987C12.8001 0.999225 13.1286 1.32764 13.2999 1.74102L13.9002 3.19033L13.9 3.18782Z"
                                                        fill="#33CC66" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M12.5249 6.64078C12.6452 6.45191 12.6855 6.22301 12.6369 6.00444C12.5884 5.78586 12.455 5.59552 12.2662 5.47528C12.0773 5.35503 11.8484 5.31474 11.6298 5.36327C11.4113 5.41179 11.2209 5.54516 11.1007 5.73403L7.79654 10.9259L6.28454 9.0359C6.14476 8.86106 5.94124 8.74891 5.71876 8.72412C5.49629 8.69933 5.27308 8.76393 5.09823 8.90371C4.92339 9.0435 4.81123 9.24702 4.78644 9.46949C4.76165 9.69197 4.82626 9.91518 4.96604 10.09L7.21604 12.9025C7.2999 13.0075 7.4076 13.0909 7.53018 13.1458C7.65277 13.2008 7.7867 13.2256 7.92084 13.2184C8.05498 13.2111 8.18544 13.1719 8.30138 13.1041C8.41732 13.0362 8.51539 12.9417 8.58742 12.8283L12.5249 6.64078Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_5889_256177">
                                                        <rect width="18" height="18" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>

                                        </div>
                                    </div>

                                    <div class="flex flex-col">
                                        <div class="flex items-center gap-x-2">
                                            <div
                                                class="dark:text-bgprogresb text-txtnamecomntpkyr text-lg font-inter font-medium ">
                                                Tino hussein
                                            </div>
                                            <span class="flex flex-col items-center mt-2 ">
                                                <div
                                                    class="flex items-center  px-3 h-5 dark:bg-green_home bg-delesteicono rounded-lg">
                                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="4" cy="4" r="3"
                                                            fill="#33CC66" />
                                                    </svg>


                                                    <div
                                                        class="dark:text-checkpricingdark text-pricingtextduowhite font-inter font-medium text-sm pl-2">
                                                        En linea
                                                    </div>
                                                </div>

                                                <button
                                                    class="items-center mt-2 flex px-1 h-5 dark:bg-red-600 bg-red-600 rounded-lg volver">

                                                    <div class=" text-red-300 font-inter font-medium text-sm ">
                                                        desconectado
                                                    </div>
                                                </button>



                                            </span>
                                        </div>
                                        <div class="text-graypricingstrike">
                                            @tinohussein
                                        </div>
                                    </div>


                                </div>
                                <div class="xl:flex hidden items-center gap-x-5">
                                    <button
                                        class="flex focus:outline-none items-center px-5 py-2 dark:bg-green_home bg-delesteicono rounded-lg">
                                        <svg class="dark:text-checkpricingdark text-pricingtextduowhite pr-2"
                                            width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.50024 4.16602C2.50024 3.24555 3.24644 2.49936 4.16691 2.49936H6.89961C7.2583 2.49936 7.57675 2.72888 7.69018 3.06917L8.93835 6.8137C9.0695 7.20712 8.89139 7.63711 8.52046 7.82257L6.63941 8.7631C7.55795 10.8004 9.19923 12.4416 11.2365 13.3602L12.177 11.4791C12.3625 11.1082 12.7925 10.9301 13.1859 11.0612L16.9304 12.3094C17.2707 12.4228 17.5002 12.7413 17.5002 13.1V15.8327C17.5002 16.7532 16.754 17.4993 15.8336 17.4993H15.0002C8.09668 17.4993 2.50024 11.9029 2.50024 4.99935V4.16602Z"
                                                stroke="currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <div
                                            class="dark:text-checkpricingdark text-pricingtextduowhite  text-lg font-medium font-inter">
                                            Llamar
                                        </div>

                                    </button>
                                    <button
                                        class="dark:bg-checkpricingdark focus:outline-none bg-pricingtextduowhite dark:text-green_home text-white-100 rounded-lg px-5 py-2">
                                        Ver Perfil
                                    </button>
                                </div>
                                <div class="pr-6 xl:hidden flex">
                                    <button class="dark:text-checkpricingdark text-pricingtextduowhite">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.00024 3.0004C2.00024 2.44812 2.44796 2.0004 3.00024 2.0004H5.15312C5.64196 2.0004 6.05914 2.35381 6.13951 2.836L6.87882 7.27187C6.95099 7.70491 6.7323 8.13437 6.33964 8.3307L4.7915 9.10477C5.9078 11.8787 8.12192 14.0928 10.8959 15.2091L11.6699 13.661C11.8663 13.2683 12.2957 13.0496 12.7288 13.1218L17.1646 13.8611C17.6468 13.9415 18.0002 14.3587 18.0002 14.8475V17.0004C18.0002 17.5527 17.5525 18.0004 17.0002 18.0004H15.0002C7.82054 18.0004 2.00024 12.1801 2.00024 5.0004V3.0004Z"
                                                fill="Currentcolor" />
                                        </svg>

                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="sm:pb-10 pb-2">
                            <div class="sm:pl-8 pl-4 lg:pr-8 xl:pr-4 ml:pr-4 md:pr-8 pr-4 pb-4 overflow-y-scroll pt-32 alturachat"   style=""
                                >

                                {{--  @php
                                    $type = $message->envio == $userme ? ['flex justify-start mb-4', 'ml-2 py-3 mr-2 px-4 font-inter text-sixteen font-normal dark:bg-txtnamecomntpkyr bg-bgprogresb text-txtnamecomntpkyr  rounded-br-xl rounded-tr-xl rounded-bl-xl dark:text-bgprogresb', true] : ['flex justify-end mb-4', 'mr-2 py-3 px-4 bg-bcklightbuscador text-white-100 dark:text-green_home dark:bg-checkpricingdark font-inter text-sixteen font-normal rounded-bl-xl rounded-tl-xl rounded-br-xl text-white', true];
                                @endphp --}}
                                <div class="justify-between h-full sm:pt-0 pt-5" style=" height: calc(100vh - 400px);">
                                    <div class="justify-start w-full flex items-start">
                                        <div class="contents"><img src="https://source.unsplash.com/vpOeXr5wmR4/600x600" class="object-cover h-10 w-10 rounded-full"
                                                alt="" /></div>

                                        <div class="flex flex-col pb-0 pl-2">
                                            <div class="flex justify-between pl-2 items-end">
                                                <div
                                                    class="text-txtnamecomntpkyr font-inter font-medium dark:text-borderconcours text-sm">
                                                    tinohusein
                                                </div>
                                                <div
                                                    class="text-graypricingstrike text-xs font-inter font-normal pl-3 pr-2">
                                                   
                                                    hoy hace 5 minutos
                                                    <div class=" ">
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="">
                                                {{-- {{$userme}} --}}
                                                <div class="break-all flex justify-start mb-4', 'ml-2 py-3 mr-2 px-4 font-inter text-sixteen font-normal dark:bg-txtnamecomntpkyr bg-bgprogresb
                                             text-txtnamecomntpkyr  rounded-br-xl rounded-tr-xl rounded-bl-xl dark:text-bgprogresb"
                                                    id="mesaje">
                                                  hola putito
                                                </div>

                                            
                                            </div>


                                            <div class="relative">
                                                <div class="text-right pr-5">
                                                    <input class="bg-transparent w-5 text-red-600 " type="text"
                                                        id="input">
                                                </div>


                                                <div class="absolute top-5 right-0 bg-transparent text-right  hidden mr-4"
                                                    id="componente">
                                                    <button value="" id="emoji"
                                                        class="emoji focus:outline-none text-red-600 pr-1">💓</button>
                                                    <button value="" id="emoji"
                                                        class="emoji focus:outline-none">😍</button>
                                                    <button value="" id="emoji"
                                                        class="emoji focus:outline-none">👌</button>
                                                    <button value="" id="emoji"
                                                        class="emoji focus:outline-none">😊</button>
                                                    <button value="" id="emoji"
                                                        class="emoji focus:outline-none">😒</button>
                                                </div>
                                            </div>
                                            <script>
                                                let mesaje = document.getElementById('mesaje');
                                                let componente = document.getElementById('componente');
                                                let input = document.getElementById('input');
                                                let emoji = document.querySelectorAll('#emoji');

                                                mesaje.onmouseover = function(e) {

                                                    componente.classList.toggle('hidden');
                                                };

                                                /*  mesaje.addEventListener('onmouseout',()=> {
                                                     
                                                        componente.classList.toggle('hidden');
                                                 })
                                                  */
                                                input.addEventListener('Keyup', () => {
                                                    input.setAttribute("value", document.getElementById('input').value)
                                                })
                                                for (const emojis of emoji) {
                                                    emojis.addEventListener('click', () => {
                                                        input.setAttribute("value", document.getElementById('input').value += emojis.innerHTML)

                                                    })

                                                }
                                            </script>
                                        </div>
                                    </div>
                                       
                                    <div class="justify-end flex items-start pt-4">
                                        

                                        <div class="flex  flex-col pb-0 pr-2">
                                            <div class="flex justify-between pl-2 items-end">
                                                <div
                                                    class="text-txtnamecomntpkyr font-inter font-medium dark:text-borderconcours text-sm">
                                                    tinohusein
                                                </div>
                                                <div
                                                    class="text-graypricingstrike text-xs font-inter font-normal pl-3 pr-2">

                                                    hoy hace 5 minutos
                                                    <div class=" ">
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="">

                                                <div class="flex justify-end mb-4', 'mr-2 py-3 px-4 bg-bcklightbuscador text-white-100 dark:text-green_home dark:bg-checkpricingdark
                                                     font-inter text-sixteen font-normal rounded-bl-xl rounded-tl-xl rounded-br-xl text-white break-all"
                                                    id="mesaje">
                                                    hola que tal como estas
                                                </div>


                                            </div>
                                        </div>
                                        <div class="contents">
                                            <img src="https://source.unsplash.com/_7LbC5J-jw4/600x600" class="object-cover h-10 w-10 rounded-full"
                                                alt="" />
                                        </div>

                                    </div>


                                </div>
                            </div>


                        </div>
                        <div class="fixed w-full chatswidth bottom-6 ">
                            <div class="pt-5  sm:flex hidden  relative sm:pl-8 pl-4 xl:pr-0 ml:pr-0 lg:pr-2 md:pr-0 pr-4 ">
                                <input
                                    class="w-full chatswitdh placeholder-graypricingstrike text-sixteen border border-borderconcours dark:border-txtcommentply dark:bg-black bg-white-100 dark:text-white-500 text-pricingdarkstudents focus:outline-none h-16 pl-4 rounded-xl"
                                    type="text" placeholder="Enviar mensaje" wire:model.defer="message" />
                                <div
                                    class="absolute  lg:right-4 md:right-2 xl:right-2 ml:right-3  flex items-center gap-x-3 lg:bottom-3 bottom-2">
                                    <button>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.6665 11.6667C6.6665 11.6667 7.9165 13.3334 9.99984 13.3334C12.0832 13.3334 13.3332 11.6667 13.3332 11.6667M12.4998 7.50002H12.5082M7.49984 7.50002H7.50817M18.3332 10C18.3332 14.6024 14.6022 18.3334 9.99984 18.3334C5.39746 18.3334 1.6665 14.6024 1.6665 10C1.6665 5.39765 5.39746 1.66669 9.99984 1.66669C14.6022 1.66669 18.3332 5.39765 18.3332 10ZM12.9165 7.50002C12.9165 7.73014 12.73 7.91669 12.4998 7.91669C12.2697 7.91669 12.0832 7.73014 12.0832 7.50002C12.0832 7.2699 12.2697 7.08335 12.4998 7.08335C12.73 7.08335 12.9165 7.2699 12.9165 7.50002ZM7.9165 7.50002C7.9165 7.73014 7.72996 7.91669 7.49984 7.91669C7.26972 7.91669 7.08317 7.73014 7.08317 7.50002C7.08317 7.2699 7.26972 7.08335 7.49984 7.08335C7.72996 7.08335 7.9165 7.2699 7.9165 7.50002Z"
                                                stroke="#667085" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </button>
                                    <button>
                                        <svg width="16" height="4" viewBox="0 0 16 4" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.00016 2.83335C8.4604 2.83335 8.8335 2.46026 8.8335 2.00002C8.8335 1.53978 8.4604 1.16669 8.00016 1.16669C7.53993 1.16669 7.16683 1.53978 7.16683 2.00002C7.16683 2.46026 7.53993 2.83335 8.00016 2.83335Z"
                                                stroke="#667085" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M13.8335 2.83335C14.2937 2.83335 14.6668 2.46026 14.6668 2.00002C14.6668 1.53978 14.2937 1.16669 13.8335 1.16669C13.3733 1.16669 13.0002 1.53978 13.0002 2.00002C13.0002 2.46026 13.3733 2.83335 13.8335 2.83335Z"
                                                stroke="#667085" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M2.16683 2.83335C2.62707 2.83335 3.00016 2.46026 3.00016 2.00002C3.00016 1.53978 2.62707 1.16669 2.16683 1.16669C1.70659 1.16669 1.3335 1.53978 1.3335 2.00002C1.3335 2.46026 1.70659 2.83335 2.16683 2.83335Z"
                                                stroke="#667085" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </button>
                                    <input class="bg-pricingtextduowhite text-sixteen h-10 rounded-lg px-5 text-white-100"
                                        type="button" value="Enviar">

                                </div>
                            </div>
                        </div>
                        <div class="pt-5  items-center sm:hidden flex gap-x-3 px-4">
                            <input
                                class="w-full placeholder-graypricingstrike text-sixteen border border-borderconcours dark:border-txtcommentply dark:bg-black bg-white-100 dark:text-white-500 text-pricingdarkstudents focus:outline-none h-10 pl-4 rounded-xl"
                                type="text" placeholder="Enviar mensaje" />
                            <div class=" flex items-center relative gap-x-3 ">

                                <input
                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-sixteen h-10 rounded-lg px-5 text-white-100"
                                    type="button" value="">
                                <div class="absolute left-2.5">
                                    <svg class="dark:text-pricingtextduowhite text-white-100" width="20"
                                        height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.74976 11.25L17.4998 2.50002M8.85608 11.5234L11.0462 17.1551C11.2391 17.6512 11.3356 17.8993 11.4746 17.9717C11.5951 18.0345 11.7386 18.0345 11.8592 17.9719C11.9983 17.8997 12.095 17.6517 12.2886 17.1558L17.7805 3.08269C17.9552 2.63504 18.0426 2.41121 17.9948 2.26819C17.9533 2.14398 17.8558 2.04651 17.7316 2.00501C17.5886 1.95723 17.3647 2.04458 16.9171 2.21927L2.84398 7.71122C2.34808 7.90474 2.10013 8.0015 2.02788 8.14059C1.96524 8.26116 1.96532 8.40471 2.0281 8.5252C2.10052 8.66421 2.34859 8.76067 2.84471 8.95361L8.47638 11.1437C8.57708 11.1829 8.62744 11.2024 8.66984 11.2327C8.70742 11.2595 8.74028 11.2924 8.76709 11.3299C8.79734 11.3723 8.81692 11.4227 8.85608 11.5234Z"
                                            stroke="currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>


                            </div>
                        </div>

                    </div>

                </div>
                <script>
                    var bloqueuno = document.querySelector(".bloqueuno");
                    var activebloqueuno = document.querySelector(".activebloqueuno");
                    var bloquedos = document.querySelector(".bloquedos");
                    var volver = document.getElementById("volver");

                    activebloqueuno.addEventListener('click', function() {
                        bloquedos.classList.remove('hidden');
                        bloqueuno.classList.add('hidden');
                    });
                    volver.addEventListener('click', function() {
                        bloqueuno.classList.toggle('hidden');
                        bloquedos.classList.toggle('hidden');
                    });
                </script>
            </div>
        </div>
    @endsection
