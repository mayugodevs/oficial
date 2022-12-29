<div class="dark:bg-gray14 bg-whiteheader w-full">

    <div class="w-full">
        <img class="w-full sm:h-96 h-44 relative"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ86IGtvP2P-Ac9Z4ik1GlZLE7CC5k4QOoHbw&usqp=CAU"
            alt="">
    </div>

    <div class="flex justify-center dark:bg-gray14 bg-whiteheader">
        <div class="containermygo"> 
            <div class="grid xl:grid-cols-10 lg:grid-cols-10 ml:grid-cols-10 dark:bg-gray14 bg-whiteheader  grid-cols-10 px-4 md:px-0">
                <div class="flex flex-col md:flex-row col-span-10 md:col-span-8 lg:col-span-8  sm:my-0 -mt-6 ">
                    <div class="flex justify-between ">
                        {{-- FOTO DE PERFIL --}}
                        <div class="sm:-mt-8 z-20 ">
                            <div class="flex-shrink-0 ">
                                <div class="inline-block mb-2">
                                    <div>
                                        <div
                                            class=" sm:w-one-hundred-sixty sm:h-one-hundred-sixty w-24 h-24 rounded-full overflow-hidden border-4 border-whitetext  shadow-shadowprofile">
                                            <img class="w-full h-full bg-cover object-fit object-cover"
                                                src="{{ asset($user->avatar) }}" alt="Mi avatar">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=" md:py-3 lg:py-4 md:px-6">
                        <div>
                            <p class=" font-semibold text-twenty-eight md:text-thirty-two text-txtnamecomntpkyr dark:text-bgprogresb leading-8 md:leading-none">
                                {{ $nombre.' '.$apellidos }}
                            </p>
                        </div>
                        {{-- <div class=" text-sm font-semibold tracking-wider text-gray-600 dark:text-pricingdarkstudents mt-2">
                            10 CONTACTOS
                        </div> --}}
                        <div class="flex py-3 sm:px-0  gap-x-4">
                            @if ($perfil_face)
                                <div class="">
                                    <button class="focus:outline-none">
                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="dark:text-pricingdarkstudents text-gray-600"
                                                d="M0 12.0023C0 18.6293 5.37227 24.0016 11.9993 24.0016C18.6263 24.0016 23.9986 18.6293 23.9986 12.0023C23.9986 5.37527 18.6263 0.00299072 11.9993 0.00299072C5.37227 0.00299072 0 5.37527 0 12.0023Z"
                                                fill="Currentcolor" />
                                            <path
                                                d="M17.9989 12.0023C17.9989 8.70247 15.2991 6.00262 11.9993 6.00262C8.69948 6.00262 5.99963 8.70247 5.99963 12.0023C5.99963 15.0021 8.17451 17.477 11.0243 17.9269V13.7272H9.52443V12.0023H11.0243V10.6524C11.0243 9.15244 11.9243 8.32749 13.2742 8.32749C13.9492 8.32749 14.6241 8.47748 14.6241 8.47748V9.9774H13.8742C13.1242 9.9774 12.8992 10.4274 12.8992 10.8773V12.0023H14.5491L14.2492 13.7272H12.8242V18.0019C15.8241 17.552 17.9989 15.0021 17.9989 12.0023Z"
                                                fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            @endif
                            @if ($inst)
                                <div class="">
                                    <button class="focus:outline-none">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="dark:text-pricingdarkstudents text-gray-600"
                                                d="M0.00323486 12.0023C0.00323486 18.6297 5.37581 24.0023 12.0032 24.0023C18.6306 24.0023 24.0032 18.6297 24.0032 12.0023C24.0032 5.37489 18.6306 0.00231934 12.0032 0.00231934C5.37581 0.00231934 0.00323486 5.37489 0.00323486 12.0023Z"
                                                fill="Currentcolor" />
                                            <path
                                                d="M12.0032 6.90228C13.6532 6.90228 13.8782 6.90228 14.5532 6.90228C15.1532 6.90228 15.4532 7.05228 15.6782 7.12728C15.9782 7.27728 16.2032 7.35228 16.4282 7.57728C16.6532 7.80228 16.8032 8.02728 16.8782 8.32728C16.9532 8.55228 17.0282 8.85228 17.1032 9.45228C17.1032 10.1273 17.1032 10.2773 17.1032 12.0023C17.1032 13.7273 17.1032 13.8773 17.1032 14.5523C17.1032 15.1523 16.9532 15.4523 16.8782 15.6773C16.7282 15.9773 16.6532 16.2023 16.4282 16.4273C16.2032 16.6523 15.9782 16.8023 15.6782 16.8773C15.4532 16.9523 15.1532 17.0273 14.5532 17.1023C13.8782 17.1023 13.7282 17.1023 12.0032 17.1023C10.2783 17.1023 10.1283 17.1023 9.45325 17.1023C8.85325 17.1023 8.55326 16.9523 8.32826 16.8773C8.02826 16.7273 7.80326 16.6523 7.57826 16.4273C7.35326 16.2023 7.20326 15.9773 7.12826 15.6773C7.05326 15.4523 6.97826 15.1523 6.90326 14.5523C6.90326 13.8773 6.90326 13.7273 6.90326 12.0023C6.90326 10.2773 6.90326 10.1273 6.90326 9.45228C6.90326 8.85228 7.05326 8.55228 7.12826 8.32728C7.27826 8.02728 7.35326 7.80228 7.57826 7.57728C7.80326 7.35228 8.02826 7.20228 8.32826 7.12728C8.55326 7.05228 8.85325 6.97728 9.45325 6.90228C10.1283 6.90228 10.3533 6.90228 12.0032 6.90228ZM12.0032 5.77728C10.2783 5.77728 10.1283 5.77728 9.45325 5.77728C8.77825 5.77728 8.32826 5.92728 7.95326 6.07728C7.57826 6.22728 7.20326 6.45228 6.82826 6.82728C6.45326 7.20228 6.30326 7.50228 6.07826 7.95228C5.92826 8.32728 5.85326 8.77728 5.77826 9.45228C5.77826 10.1273 5.77826 10.3523 5.77826 12.0023C5.77826 13.7273 5.77826 13.8773 5.77826 14.5523C5.77826 15.2273 5.92826 15.6773 6.07826 16.0523C6.22826 16.4273 6.45326 16.8023 6.82826 17.1773C7.20326 17.5523 7.50326 17.7023 7.95326 17.9273C8.32826 18.0773 8.77825 18.1523 9.45325 18.2273C10.1283 18.2273 10.3533 18.2273 12.0032 18.2273C13.6532 18.2273 13.8782 18.2273 14.5532 18.2273C15.2282 18.2273 15.6782 18.0773 16.0532 17.9273C16.4282 17.7773 16.8032 17.5523 17.1782 17.1773C17.5532 16.8023 17.7032 16.5023 17.9282 16.0523C18.0782 15.6773 18.1532 15.2273 18.2282 14.5523C18.2282 13.8773 18.2282 13.6523 18.2282 12.0023C18.2282 10.3523 18.2282 10.1273 18.2282 9.45228C18.2282 8.77728 18.0782 8.32728 17.9282 7.95228C17.7782 7.57728 17.5532 7.20228 17.1782 6.82728C16.8032 6.45228 16.5032 6.30228 16.0532 6.07728C15.6782 5.92728 15.2282 5.85228 14.5532 5.77728C13.8782 5.77728 13.7282 5.77728 12.0032 5.77728Z"
                                                fill="white" />
                                            <path
                                                d="M12.0032 8.77728C10.2033 8.77728 8.77825 10.2023 8.77825 12.0023C8.77825 13.8023 10.2033 15.2273 12.0032 15.2273C13.8032 15.2273 15.2282 13.8023 15.2282 12.0023C15.2282 10.2023 13.8032 8.77728 12.0032 8.77728ZM12.0032 14.1023C10.8783 14.1023 9.90325 13.2023 9.90325 12.0023C9.90325 10.8773 10.8033 9.90228 12.0032 9.90228C13.1282 9.90228 14.1032 10.8023 14.1032 12.0023C14.1032 13.1273 13.1282 14.1023 12.0032 14.1023Z"
                                                fill="white" />
                                            <path
                                                d="M15.3032 9.45228C15.7175 9.45228 16.0532 9.11649 16.0532 8.70228C16.0532 8.28807 15.7175 7.95228 15.3032 7.95228C14.889 7.95228 14.5532 8.28807 14.5532 8.70228C14.5532 9.11649 14.889 9.45228 15.3032 9.45228Z"
                                                fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            @endif
                            @if ($perfil_link)
                                <div class="">
                                    <button class="focus:outline-none">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="dark:text-pricingdarkstudents text-gray-600"
                                                d="M0.00317383 12.0023C0.00317383 18.6297 5.37576 24.0023 12.0032 24.0023C18.6306 24.0023 24.0032 18.6297 24.0032 12.0023C24.0032 5.3749 18.6306 0.00231934 12.0032 0.00231934C5.37576 0.00231934 0.00317383 5.3749 0.00317383 12.0023Z"
                                                fill="Currentcolor" />
                                            <path
                                                d="M8.70318 18.0023H6.15317V9.97732H8.70318V18.0023ZM7.42817 8.85232C6.60317 8.85232 6.00317 8.25232 6.00317 7.42732C6.00317 6.60232 6.67817 6.00232 7.42817 6.00232C8.25318 6.00232 8.85318 6.60232 8.85318 7.42732C8.85318 8.25232 8.25318 8.85232 7.42817 8.85232ZM18.0032 18.0023H15.4532V13.6523C15.4532 12.3773 14.9282 12.0023 14.1782 12.0023C13.4282 12.0023 12.6782 12.6023 12.6782 13.7273V18.0023H10.1282V9.97732H12.5282V11.1023C12.7532 10.5773 13.6532 9.75232 14.9282 9.75232C16.3532 9.75232 17.8532 10.5773 17.8532 13.0523V18.0023H18.0032Z"
                                                fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            @endif
                            @if ($tikt)
                                <div class="">
                                    <button class="focus:outline-none">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="dark:text-pricingdarkstudents text-gray-600"
                                                d="M0.998596 12.0023C0.998596 5.3749 6.37118 0.00231934 12.9986 0.00231934C19.626 0.00231934 24.9986 5.3749 24.9986 12.0023C24.9986 18.6297 19.626 24.0023 12.9986 24.0023C6.37118 24.0023 0.998596 18.6297 0.998596 12.0023Z"
                                                fill="Currentcolor" />
                                            <path
                                                d="M11.8724 10.7275V10.2604C11.7123 10.239 11.5496 10.2257 11.3816 10.2257C9.37837 10.223 7.7486 11.8541 7.7486 13.8617C7.7486 15.0924 8.36209 16.1816 9.30102 16.841C8.69552 16.1923 8.32475 15.3193 8.32475 14.3636C8.32475 12.3854 9.90918 10.7729 11.8724 10.7275Z"
                                                fill="white" />
                                            <path
                                                d="M11.9604 16.0241C12.854 16.0241 13.5848 15.3113 13.6168 14.425L13.6195 6.50421H15.0652C15.0359 6.34136 15.0199 6.17318 15.0199 6.00232H13.046L13.0433 13.9231C13.0114 14.8094 12.2805 15.5222 11.3869 15.5222C11.1095 15.5222 10.8481 15.4528 10.616 15.33C10.9148 15.7491 11.4056 16.0241 11.9604 16.0241Z"
                                                fill="white" />
                                            <path
                                                d="M17.7674 9.19253V8.75207C17.2153 8.75207 16.7031 8.58921 16.271 8.30621C16.6551 8.74672 17.1752 9.06709 17.7674 9.19253Z"
                                                fill="white" />
                                            <path
                                                d="M16.271 8.3062C15.8495 7.82301 15.5961 7.19298 15.5961 6.50421H15.068C15.204 7.25705 15.6521 7.90311 16.271 8.3062Z"
                                                fill="white" />
                                            <path
                                                d="M11.3842 12.1985C10.4693 12.1985 9.7251 12.9433 9.7251 13.859C9.7251 14.4971 10.0879 15.0523 10.616 15.33C10.4186 15.0577 10.3013 14.724 10.3013 14.3609C10.3013 13.4452 11.0454 12.7004 11.9604 12.7004C12.1311 12.7004 12.2965 12.7297 12.4512 12.7778V10.7596C12.2911 10.7382 12.1284 10.7249 11.9604 10.7249C11.931 10.7249 11.9043 10.7275 11.875 10.7275V12.2759C11.7176 12.2279 11.5549 12.1985 11.3842 12.1985Z"
                                                fill="white" />
                                            <path
                                                d="M17.7673 9.1925V10.7275C16.743 10.7275 15.7934 10.3992 15.0198 9.84389V13.8617C15.0198 15.8666 13.3901 17.5004 11.3842 17.5004C10.6106 17.5004 9.89046 17.2548 9.30096 16.841C9.96514 17.5538 10.9121 18.0023 11.9604 18.0023C13.9635 18.0023 15.596 16.3712 15.596 14.3636V10.3458C16.3695 10.9011 17.3191 11.2294 18.3434 11.2294V9.25393C18.1433 9.25393 17.9513 9.23255 17.7673 9.1925Z"
                                                fill="white" />
                                            <path
                                                d="M15.0198 13.8617V9.8439C15.7934 10.3992 16.743 10.7275 17.7673 10.7275V9.19252C17.1751 9.06707 16.6549 8.74671 16.2709 8.3062C15.652 7.90311 15.2066 7.25705 15.0652 6.50421H13.6195L13.6168 14.425C13.5848 15.3113 12.8539 16.0241 11.9604 16.0241C11.4055 16.0241 10.9174 15.7491 10.6133 15.3327C10.0852 15.0524 9.72242 14.4998 9.72242 13.8617C9.72242 12.946 10.4666 12.2012 11.3815 12.2012C11.5522 12.2012 11.7176 12.2305 11.8723 12.2786V10.7302C9.90913 10.7729 8.32471 12.3854 8.32471 14.3636C8.32471 15.3193 8.69547 16.1896 9.30097 16.841C9.89046 17.2548 10.6107 17.5004 11.3842 17.5004C13.3874 17.5004 15.0198 15.8666 15.0198 13.8617Z"
                                                fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="col-span-10 md:col-span-2 lg:col-span-2 ">
                    @include('modals.datosUser')
                </div>

            </div>

            <div class=" bg-whiteheader dark:bg-gray14   dark:text-white-300">
                <div class="flex justify-center bg-white">
                    <div class="grid sm:grid-cols-12 grid-cols-1 text-center containermygo md:gap-8 mb-8 my-4 md:my-6 px-0">
                        <div class="col-span-12 ml:col-span-4   lg:col-span-5 xl:col-span-4  bg-inherit md:bg-bgfondopricingwhite text-gray-600  outline-none sm:dark:bg-pricingcintadark dark:bg-gray14 dark:text-white-300 rounded-xl md:shadow-shadowww">
                            <div class="w-full lg:w-auto p-4 md:p-8">
                                <div class="">
                                    <div class=" font-inter text-left">
                                        <div class="md:text-center lg:text-left text-xl font-bold text-txtnamecomntpkyr dark:text-bgprogresb">
                                            Sobre mí
                                        </div>
                                        <div class="py-3">
                                            <p class=" text-base font-normal leading-6 text-gray-600 dark:text-borderconcours">
                                                {{ $about_me }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mt-5 text-left font-inter">
                                        <p class=" text-xl font-bold text-txtnamecomntpkyr dark:text-bgprogresb">En
                                            MayuGo desde {{ $user->fechareg->translatedFormat('d M Y') }}
                                        </p>
                                    </div>

                                    <div class=" flex mt-5 font-inter items-center">
                                        <div class="dark:text-bordersec text-gray-650">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M23.5425 22.2091C22.2937 23.458 19.6822 26.0695 17.8851 27.8666C16.8437 28.908 15.157 28.9085 14.1156 27.8671C12.3499 26.1014 9.78886 23.5404 8.4576 22.2091C4.29201 18.0435 4.29201 11.2898 8.4576 7.12419C12.6232 2.9586 19.377 2.9586 23.5425 7.12419C27.7081 11.2898 27.7081 18.0435 23.5425 22.2091Z"
                                                    stroke="currentcolor" stroke-width="2.66667"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M20.0001 14.6667C20.0001 16.8758 18.2092 18.6667 16.0001 18.6667C13.7909 18.6667 12.0001 16.8758 12.0001 14.6667C12.0001 12.4575 13.7909 10.6667 16.0001 10.6667C18.2092 10.6667 20.0001 12.4575 20.0001 14.6667Z"
                                                    stroke="currentcolor" stroke-width="2.66667"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                        <div class="pl-3">
                                            <div class=" text-gray-650 dark:text-bordersec text-left font-medium"> 
                                                <select class="py-2  focus:outline-none bg-transparent dark:text-white-700 text-gray-900 border border-transparent border-sm 
                                                    hover:outline-none" 
                                                    wire:model.defer="pais"
                                                    wire:change="cambioPaisUser"
                                                    >
                                                    <option class="text-left " value="0">Seleccione</option>
                                                    @foreach ($paises as $paiss)    
                                                        <option value="{{ $paiss->id }}"> {{ $paiss->pais }} </option> 
                                                    @endforeach
                                                </select> 
                                            </div>
                                            <div class="text-left text-base font-normal leading-6 text-gray-600 dark:text-borderconcours">
                                                (Hay más de {{ $mismoGradoPais }} de tu mismo grado en tu país)
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-8 font-inter text-left">
                                        <div class="text-xl font-bold text-txtnamecomntpkyr dark:text-bgprogresb">
                                            Nivel de estudio 
                                        </div>
                                        <div class=" flex  font-INTER items-center pt-4">
                                            <div class="dark:text-bordersec text-gray-650">
                                                <svg width="32" height="32" viewBox="0 0 32 32"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M15.9999 18.6667L27.9999 12L15.9999 5.33337L3.99988 12L15.9999 18.6667ZM15.9999 18.6667L24.212 14.1044C24.9355 15.9288 25.3332 17.918 25.3332 20C25.3332 20.9351 25.253 21.8514 25.0991 22.7425C21.6189 23.0809 18.4653 24.5342 15.9999 26.7408C13.5345 24.5342 10.3808 23.0809 6.9007 22.7425C6.74677 21.8514 6.66654 20.935 6.66654 19.9999C6.66654 17.9179 7.0642 15.9288 7.78771 14.1044L15.9999 18.6667ZM10.6665 26.6666V16.6667L15.9999 13.7037"
                                                        stroke="currentcolor" stroke-width="2.66667"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="pl-3">
                                                <div class=" dark:text-bordersec text-gray-650 text-left font-medium"> 
                                                    <p class="ml-2">
                                                        <select
                                                            class=" py-2 focus:outline-none  bg-transparent dark:text-white-700 text-gray-700 border border-transparent border-sm hover:outline-none"
                                                            wire:model.defer="estud"
                                                            wire:change="cambioGradoUser"
                                                            >
                                                            <option value="0">Seleccione</option>
                                                            @foreach ($grados as $grado)
                                                                <option value="{{ $grado->id }}">{{ $grado->nivel }}  </option> 
                                                            @endforeach
                                                        </select>
                                                    </p>
                                                </div>
                                                <div class="text-left text-base font-normal leading-6 text-gray-600 dark:text-borderconcours">
                                                    (Hay más de {{ $mismoGrado  }} de tu grado que nunca paran de aprender para cumplir sus sueños.)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($plan_referidos[0])
                                        <div class="dark:bg-gray14 bg-whiteheader rounded-lg  p-6 mt-8 text-left shadow-shdwrfeer md:shadow-none">
                                            <div class="flex justify-between">
                                                <div>
                                                    <svg width="48" height="48" viewBox="0 0 48 48"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect class="text-green dark:text-green_icono" width="48"
                                                            height="48" rx="10" fill="currentcolor" />
                                                        <path class="text-whitetext dark:text-pricingtextduowhite"
                                                            d="M29 33V31C29 29.9391 28.5786 28.9217 27.8284 28.1716C27.0783 27.4214 26.0609 27 25 27H17C15.9391 27 14.9217 27.4214 14.1716 28.1716C13.4214 28.9217 13 29.9391 13 31V33M35 33V31C34.9993 30.1137 34.7044 29.2528 34.1614 28.5523C33.6184 27.8519 32.8581 27.3516 32 27.13M28 15.13C28.8604 15.3503 29.623 15.8507 30.1676 16.5523C30.7122 17.2539 31.0078 18.1168 31.0078 19.005C31.0078 19.8932 30.7122 20.7561 30.1676 21.4577C29.623 22.1593 28.8604 22.6597 28 22.88M25 19C25 21.2091 23.2091 23 21 23C18.7909 23 17 21.2091 17 19C17 16.7909 18.7909 15 21 15C23.2091 15 25 16.7909 25 19Z"
                                                            stroke="currentcolor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div>
                                                    <svg width="14" height="14" viewBox="0 0 14 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7 4.33358V7.00024M7 9.66691H7.00666M13 7.00024C13 10.3139 10.3137 13.0002 7 13.0002C3.68629 13.0002 1 10.3139 1 7.00024C1 3.68653 3.68629 1.00024 7 1.00024C10.3137 1.00024 13 3.68653 13 7.00024Z"
                                                            stroke="#0083F5" stroke-width="1.33333"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                            </div>
                                            <div class="mt-6 text-txtreffer dark:text-borderconcours text-sm font-medium">
                                                Total referidos
                                            </div>

                                            <div class="flex justify-between mt-4 items-center">

                                                <div class=" text-4xl  text-txtrefernumber dark:text-bgprogresb font-semibold ">
                                                    {{$plan_referidos[1]}}
                                                </div>

                                                <div class="flex rounded-full items-center bg-bgsucessf dark:bg-green_home h-7 px-4">
                                                    <div>
                                                        <svg width="10" height="10" vi ewBox="0 0 10 10"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path class="text-bgcolflecha dark:text-green"
                                                                d="M5 8.5V1.5M5 1.5L1.5 5M5 1.5L8.5 5"
                                                                stroke="currentcolor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                    <div
                                                        class="font-inter text-txtsucessf dark:text-checkpricingdark text-sm font-medium pl-2">
                                                        Obtuvo meses gratis
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 lg:col-span-7 xl:col-span-8  ml:col-span-8 mt-5 md:mt-0">

                            <div class=" sm:px-8 px-3 md:rounded-lg dark:bg-pricingcintadark bg-bgfondopricingwhite  p-8">
                                <div class="font-inter text-twenty-eight font-bold text-txtnamecomntpkyr dark:text-bgprogresb text-center">
                                    Mi progreso
                                </div>
                                <div class="grid grid-cols-8 mt-4">
                                    <div class="flex  justify-between sm:col-span-7 col-span-8 font-inter ">
                                        <div class="flex-col">
                                            <div class="flex items-center  justify-center md:justify-start">
                                                <div class="px-1  dark:text-bordersec text-gray-650">

                                                    <svg width="32" height="32" viewBox="0 0 32 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.9999 18.6667L27.9999 12L15.9999 5.33337L3.99988 12L15.9999 18.6667ZM15.9999 18.6667L24.212 14.1044C24.9355 15.9288 25.3332 17.918 25.3332 20C25.3332 20.9351 25.253 21.8514 25.0991 22.7425C21.6189 23.0809 18.4653 24.5342 15.9999 26.7408C13.5345 24.5342 10.3808 23.0809 6.9007 22.7425C6.74677 21.8514 6.66654 20.935 6.66654 19.9999C6.66654 17.9179 7.0642 15.9288 7.78771 14.1044L15.9999 18.6667ZM10.6665 26.6666V16.6667L15.9999 13.7037"
                                                            stroke="currentcolor" stroke-width="2.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>


                                                </div>
                                                <div class="px-1">
                                                    <span class="font-inter text-thirty-two font-semibold text-gray-650 dark:text-bordersec">
                                                        {{ count($cursos_asig) }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="px-1 text-sm font-normal text-gray-600 dark:text-pricingdarkstudents">
                                                Cursos inscritos
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="flex items-center justify-center md:justify-start">
                                                <div class="px-1">
                                                    <svg class="text-3xl dark:text-bordersec text-gray-650"
                                                        width="28" height="25" viewBox="0 0 28 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14 14.6667L26 8.00004L14 1.33337L2 8.00004L14 14.6667ZM14 14.6667L22.2121 10.1044C22.9357 11.9288 23.3333 13.918 23.3333 16C23.3333 16.9351 23.2531 17.8514 23.0992 18.7425C19.6191 19.0809 16.4654 20.5342 14 22.7408C11.5346 20.5342 8.38095 19.0809 4.90082 18.7425C4.74689 17.8514 4.66667 16.935 4.66667 15.9999C4.66667 13.9179 5.06433 11.9288 5.78783 10.1044L14 14.6667ZM8.66667 22.6666V12.6667L14 9.70375"
                                                            stroke="currentColor" stroke-width="2.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div class="px-1">
                                                    <span
                                                        class="font-inter text-thirty-two font-semibold text-gray-650 dark:text-bordersec">{{ $cursosTerminados }}</span>
                                                </div>
                                            </div>
                                            <div class="px-1 text-sm font-normal text-gray-600 dark:text-pricingdarkstudents">
                                                Cursos terminados
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="flex items-center justify-center md:justify-start">
                                                <div class="px-1">
                                                    <svg class="text-3xl dark:text-bordersec text-gray-650"
                                                        width="28" height="25" viewBox="0 0 28 25"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14 14.6667L26 8.00004L14 1.33337L2 8.00004L14 14.6667ZM14 14.6667L22.2121 10.1044C22.9357 11.9288 23.3333 13.918 23.3333 16C23.3333 16.9351 23.2531 17.8514 23.0992 18.7425C19.6191 19.0809 16.4654 20.5342 14 22.7408C11.5346 20.5342 8.38095 19.0809 4.90082 18.7425C4.74689 17.8514 4.66667 16.935 4.66667 15.9999C4.66667 13.9179 5.06433 11.9288 5.78783 10.1044L14 14.6667ZM8.66667 22.6666V12.6667L14 9.70375"
                                                            stroke="currentColor" stroke-width="2.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div class="px-1">
                                                    <span
                                                        class="font-inter text-thirty-two font-semibold text-gray-650 dark:text-bordersec">{{ $cursosCertificados }}</span>
                                                </div>
                                            </div>
                                            <div
                                                class="px-1 text-sm font-normal text-gray-600 dark:text-pricingdarkstudents">
                                                Proyectos realizados
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    @livewire('curso-interes')
                                </div>
                            </div>

                            <div class="flex sm:flex-row flex-col justify-between items-start md:items-center mt-12 font-inter px-4 md:px-0 text-left md:text-center">
                                <div class="font-inter text-xl font-bold text-txtnamecomntpkyr dark:text-bgprogresb">
                                    {{ $lastCourse[0] ? 'Cursos que estoy aprendiendo' : 'Cursos más destacados'; }}
                                </div>
                                <div class="mt-2 md:mt-0">
                                    <a class=" text-base font-medium text-bcklightbuscador dark:text-bgbtngreen"
                                        href="{{ route('categoria', ['slug'=>'lean-six-sigma']) }}"> 
                                        {{ $lastCourse[0] ? 'Ir a mis cursos' : 'Ir a más cursos' }}</a>
                                </div>
                            </div>

                            <div class="px-4 md:px-0  grid sm:grid-cols-2 grid-cols-1 gap-6 mt-5 text-left">
                                
                                @if ($lastCourse[0])
                                    <div class="col-span-2 lg:col-span-1 dark:bg-gray12 bg-bgfondopricingwhite rounded-lg shadow-shadowww">
                                        <div>
                                            <img class="rounded-t-lg p-4"
                                                src="{{ asset($lastCourse[1]->img) }}"
                                                alt="" width="250px" >
                                        </div>
                                        <div class="p-4">
                                            <div class=" text-base font-bold text-gray-650 dark:text-bgprogresb ">
                                                {{ $lastCourse[1]->nom}}
                                            </div>
                                            <div class=" text-sm font-normal text-gray-600 my-3 dark:text-pricingdarkstudents">
                                                {{ $lastCourse[3] }} alumnos inscritos
                                            </div>
                                            <div class=" text-xs font-bold text-gray-600 dark:text-pricingdarkstudents">
                                                {{ $lastCourse[2] }}% completado
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-span-2 lg:col-span-1 dark:bg-gray12 bg-bgfondopricingwhite rounded-lg shadow-shadowww"> 
                                        <div>
                                            <img class="rounded-t-lg p-4"
                                                src="{{ asset($lastCourse[1][0]->img) }}"
                                                alt="" width="250px" >
                                        </div>
                                        <div class="p-4">
                                            <div class=" text-base font-bold text-gray-650 dark:text-bgprogresb ">
                                                {{$lastCourse[1][0]->nom}}
                                            </div>
                                            <div class=" text-sm font-normal text-gray-600 my-3 dark:text-pricingdarkstudents">
                                                {{countUsersCourse($lastCourse[1][0]->cursoAsignacion->idasig )}} alumnos inscritos
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-span-2 lg:col-span-1 flex flex-col gap-y-6">
                                    @if ($lastCourse[0])
                                        @foreach ($cursos_llevando as $curs_llev) 
                                            <div
                                                class="flex w-auto dark:bg-gray12 bg-bgfondopricingwhite rounded-lg shadow-shadowww py-1">
                                                <div class="flex items-center justify-center" style="width:150px">
                                                    <div>
                                                        <img class="h-full rounded-l-lg"
                                                            src="{{ asset($curs_llev->cursoAsignacion->curso->img) }}"
                                                            alt="" width="100px" height="100px">
                                                    </div>
                                                </div>
                                                <div class="" style="width:calc(100% - 149px);">
                                                    <div class="px-2 py-2">
                                                        <div
                                                            class=" text-sm font-medium text-gray-650 dark:text-bordersec leading-5">
                                                            {{ $curs_llev->cursoAsignacion->curso->nom }}
                                                        </div>
                                                        <div
                                                            class=" text-sm font-normal text-gray-600 my-3 dark:text-pricingdarkstudents">
                                                            {{ $curs_llev->inscritos_count($curs_llev->cursoAsignacion->idasig) }}
                                                            alumnos inscritos
                                                        </div>
                                                        <div
                                                            class=" text-xs font-bold text-gray-600 dark:text-pricingdarkstudents">
                                                            {{percentageCourse($curs_llev->cursoAsignacion->idasig, $user->idalum)}}% completado
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> 
                                        @endforeach
                                    @else 
                                        @foreach ($lastCourse[1] as $key => $course) 
                                            @if ($key == 0)
                                                @continue;
                                            @else
                                                <div class="flex w-auto dark:bg-gray12 bg-bgfondopricingwhite rounded-lg shadow-shadowww py-1">
                                                    <div class="flex items-center justify-center" style="width:150px">
                                                        <div>
                                                            <img class="h-full rounded-l-lg"
                                                                src="{{ asset($course->img) }}"
                                                                alt="" width="100px" height="100px">
                                                        </div>
                                                    </div>
                                                    <div class="" style="width:calc(100% - 149px);">
                                                        <div class="px-2 py-2">
                                                            <div class=" text-sm font-medium text-gray-650 dark:text-bordersec leading-5">
                                                                {{ $course->nom }}
                                                            </div>
                                                            <div class=" text-sm font-normal text-gray-600 my-3 dark:text-pricingdarkstudents">
                                                                {{countUsersCourse($course->cursoAsignacion->idasig )}} alumnos inscritos
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
