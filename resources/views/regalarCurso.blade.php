@extends('layout')
@section('content')
    <div class="dark:bg-gray14 bg-whiteheader ">
        <div class="mx-auto containermygo pt-28 sm:px-0 px-4">
            <div class="pt-8 dark:text-bgprogresb text-txtnamecomntpkyr font-bold text-thirty-two font-inter text-center">
                Regala un curso
            </div>
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-x-8 pt-14 pb-10">
                <div class="w-full flow-root ">
                    <div class="ml:w-5/6 xl:w-5/6 lg:w-5/6 md:w-4/6 w-full  lg:float-right mx-auto">
                        <div class="">
                            <div class="dark:text-bgprogresb text-txtnamecomntpkyr  font-inter font-medium text-sm pb-1">
                                Nombre completo del destinatario:
                            </div>
                            <input type="text" placeholder="Nombre y Apellido"
                                class="bg-white-100 dark:text-white-100 text-gray-650 focus:outline-none w-full border-borderconcours pl-3 placeholder-pricingdarkstudents dark:placeholder-gray-650  dark:bg-black border dark:border-txtcommentply h-10 rounded-lg ">

                        </div>
                        <div class="pt-6">
                            <div class="dark:text-bgprogresb text-txtnamecomntpkyr  font-inter font-medium text-sm pb-1">
                                Email del destinatario:
                            </div>
                            <input type="text" placeholder="Correo Electrónico"
                                class="bg-white-100 dark:text-white-100 text-gray-650 focus:outline-none border-borderconcours placeholder-pricingdarkstudents dark:placeholder-gray-650 pl-3 w-full dark:bg-black border dark:border-txtcommentply h-10 rounded-lg ">

                        </div>
                        <div class="pt-6">
                            <div class="dark:text-bgprogresb text-txtnamecomntpkyr  font-inter font-medium text-sm pb-1">
                                Tu mensaje(opcional):
                            </div>
                            <textarea name="" id="" cols="30" rows="10" placeholder="Escribe tu mensaje personal aquí"
                                class="bg-white-100 border-borderconcours pl-3 pt-2 dark:text-white-100 text-gray-650 focus:outline-none placeholder-pricingdarkstudents dark:placeholder-gray-650  w-full dark:bg-black border dark:border-txtcommentply h-40 rounded-lg"></textarea>


                        </div>
                        <div class="pt-6 ">
                            <div class="dark:text-bgprogresb text-txtnamecomntpkyr  font-inter font-medium text-sm pb-1">
                                ¿Cuándo quieres enviar el regalo?
                            </div>
                            <div class="relative">
                                <label for="inmediato" type="button"
                                    class="bg-white-100 dark:hover:border-green hover:border-green focus:border-green dark:focus:border-green w-full dark:bg-pricingcintadark dark:border-pricingcintadark border h-10 rounded-lg ">

                                    <div class="radio-free absolute  left-2 bottom-1.5">
                                        <input type="radio" id="inmediato" name="free"
                                            class=" h-5 w-5 text-transparent">
                                        <label for="inmediato"
                                            class="font-medium dark:text-borderconcours "><span class="pl-3">Inmediato</span></label>
                                    </div>
                                </label>
                            </div>





                            <div class="relative pt-4 cursor-pointer ">
                                <label for="programar" type="button" 
                                    class="bg-white-100  dark:hover:border-green hover:border-green focus:border-green dark:focus:border-green w-full dark:bg-pricingcintadark dark:border-pricingcintadark border  rounded-lg ">

                                    <div class="radio-free absolute  left-2 bottom-1.5" >
                                        <input type="radio" id="programar" name="free"
                                            class=" h-5 w-5 text-transparent butonfree">
                                        <label for="programar"
                                            class="font-medium dark:text-borderconcours "><span class="pl-3">Programar</span></label>
                                    </div>

                                    <div class="hidden p-3" id="cardfree">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr  font-inter font-medium text-sm pb-1">
                                            hora de envio
                                        </div>
                                        <div class="flex gap-x-3">
                                            <div class="relative">
                                                <input type="text" placeholder="18"
                                                    class="bg-white-100 placeholder-pricingdarkstudents focus:outline-none pl-4  w-full border-borderconcours dark:bg-black border dark:border-txtcommentply h-10 rounded-lg ">
                                                <button class="absolute focus:outline-none right-3 top-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.29289 7.29314C5.68342 6.90261 6.31658 6.90261 6.70711 7.29314L10 10.586L13.2929 7.29314C13.6834 6.90261 14.3166 6.90261 14.7071 7.29314C15.0976 7.68366 15.0976 8.31683 14.7071 8.70735L10.7071 12.7073C10.3166 13.0979 9.68342 13.0979 9.29289 12.7073L5.29289 8.70735C4.90237 8.31683 4.90237 7.68366 5.29289 7.29314Z"
                                                            fill="#697586" />
                                                    </svg>
    
                                                </button>
                                            </div>
                                            <div class="relative">
                                                <input type="text" placeholder="Agosto"
                                                    class="bg-white-100 placeholder-pricingdarkstudents  focus:outline-none  pl-4  w-full border-borderconcours dark:bg-black border dark:border-txtcommentply h-10 rounded-lg ">
                                                <button class="absolute focus:outline-none right-2 top-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.29289 7.29314C5.68342 6.90261 6.31658 6.90261 6.70711 7.29314L10 10.586L13.2929 7.29314C13.6834 6.90261 14.3166 6.90261 14.7071 7.29314C15.0976 7.68366 15.0976 8.31683 14.7071 8.70735L10.7071 12.7073C10.3166 13.0979 9.68342 13.0979 9.29289 12.7073L5.29289 8.70735C4.90237 8.31683 4.90237 7.68366 5.29289 7.29314Z"
                                                            fill="#697586" />
                                                    </svg>
    
                                                </button>
                                            </div>
                                            <div class="relative">
                                                <input type="text" placeholder="2022"
                                                    class="bg-white-100 placeholder-pricingdarkstudents   focus:outline-none  pl-4  w-full border-borderconcours dark:bg-black border dark:border-txtcommentply h-10 rounded-lg ">
                                                <button class="absolute focus:outline-none right-3 top-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.29289 7.29314C5.68342 6.90261 6.31658 6.90261 6.70711 7.29314L10 10.586L13.2929 7.29314C13.6834 6.90261 14.3166 6.90261 14.7071 7.29314C15.0976 7.68366 15.0976 8.31683 14.7071 8.70735L10.7071 12.7073C10.3166 13.0979 9.68342 13.0979 9.29289 12.7073L5.29289 8.70735C4.90237 8.31683 4.90237 7.68366 5.29289 7.29314Z"
                                                            fill="#697586" />
                                                    </svg>
    
                                                </button>
                                            </div>
    
                                        </div>
                                        <div class="pt-4 pb-2.5">
                                            <div
                                                class="dark:text-bgprogresb text-txtnamecomntpkyr  font-inter font-medium text-sm pb-1">
                                                Fecha de envio
                                            </div>
                                            <input type="text" placeholder="Correo electrónico"
                                                class="bg-white-100 pl-4 placeholder-pricingdarkstudents  focus:outline-none  sm:w-1/2 w-full border-borderconcours dark:bg-black border dark:border-txtcommentply h-10 rounded-lg ">
    
                                        </div>
    
                                    </div>
                                </label>

                                <script>
                                   var cardfree=document.getElementById("cardfree");
                                   var butonfree=document.querySelector(".butonfree");
                                   
                                   butonfree.addEventListener('click',function(){
                                    cardfree.classList.toggle('hidden');
                                     
                                     });
                                     
                                </script>
                            



                            </div>

                            <div class="pt-8">
                                <button
                                    class="w-full bg-bgbtngreen h-12 rounded-lg text-green_especialidad text-lg font-inter font-medium">
                                    Proceder a pagar
                                </button>
                            </div>

                        </div>





                    </div>

                </div>
                <div class="w-full flow-root lg:pt-0 pt-10">
                    <div class="ml:w-5/6 xl:w-5/6 lg:w-5/6 md:w-4/6 w-full  lg:float-left mx-auto">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M40 80C62.0914 80 80 62.0914 80 40C80 17.9086 62.0914 0 40 0C17.9086 0 0 17.9086 0 40C0 62.0914 17.9086 80 40 80Z"
                                fill="#FF6666" />
                            <path
                                d="M40.0002 74.968C59.3125 74.968 74.9682 59.3123 74.9682 40C74.9682 20.6877 59.3125 5.03198 40.0002 5.03198C20.6879 5.03198 5.03223 20.6877 5.03223 40C5.03223 59.3123 20.6879 74.968 40.0002 74.968Z"
                                fill="#990000" />
                            <path d="M38.7537 42.0889H24.2515V42.8667H38.7537V42.0889Z" fill="white" />
                            <path d="M38.7537 45.4329H24.2515V46.2107H38.7537V45.4329Z" fill="white" />
                            <path d="M38.7537 48.3102H24.2515V49.088H38.7537V48.3102Z" fill="white" />
                            <path d="M38.7537 51.1885H24.2515V51.9663H38.7537V51.1885Z" fill="white" />
                            <path d="M35.255 54.0667H24.2515V54.8444H35.255V54.0667Z" fill="white" />
                            <path d="M32.0666 56.9449H24.2515V57.7227H32.0666V56.9449Z" fill="white" />
                            <path
                                d="M44.8117 31.3076L48.2179 24.6649M29.0508 30.4542L32.4161 34.7067L29.0508 30.4542ZM33.4739 34.8942L37.0286 30.912L33.4739 34.8942ZM38.1974 30.5244L43.7708 32.0347L38.1974 30.5244Z"
                                stroke="white" stroke-width="0.355556" stroke-miterlimit="22.9256"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M25.874 38.9528L28.1416 30.5012" stroke="white" stroke-width="0.355556"
                                stroke-miterlimit="22.9256" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M37.509 29.3982C38.0984 29.3982 38.5766 29.8755 38.5766 30.4657C38.5766 31.0551 38.0984 31.5324 37.509 31.5324C36.9197 31.5324 36.4424 31.0551 36.4424 30.4657C36.4424 29.8755 36.9197 29.3982 37.509 29.3982ZM37.509 29.9973C37.7677 29.9973 37.9775 30.2071 37.9775 30.4657C37.9775 30.7235 37.7677 30.9333 37.509 30.9333C37.2513 30.9333 37.0415 30.7235 37.0415 30.4657C37.0415 30.2071 37.2513 29.9973 37.509 29.9973Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M48.4289 22.9013C49.0182 22.9013 49.4956 23.3795 49.4956 23.9689C49.4956 24.5582 49.0182 25.0364 48.4289 25.0364C47.8396 25.0364 47.3613 24.5582 47.3613 23.9689C47.3613 23.3795 47.8396 22.9013 48.4289 22.9013ZM48.4289 23.5013C48.6867 23.5013 48.8964 23.7102 48.8964 23.9689C48.8964 24.2275 48.6867 24.4364 48.4289 24.4364C48.1702 24.4364 47.9604 24.2275 47.9604 23.9689C47.9604 23.7102 48.1702 23.5013 48.4289 23.5013Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M44.4982 30.927C45.0876 30.927 45.5649 31.4043 45.5649 31.9937C45.5649 32.583 45.0876 33.0612 44.4982 33.0612C43.9089 33.0612 43.4307 32.583 43.4307 31.9937C43.4307 31.4043 43.9089 30.927 44.4982 30.927ZM44.4982 31.5261C44.756 31.5261 44.9658 31.7359 44.9658 31.9937C44.9658 32.2523 44.756 32.4621 44.4982 32.4621C44.2396 32.4621 44.0307 32.2523 44.0307 31.9937C44.0307 31.7359 44.2396 31.5261 44.4982 31.5261Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M32.9236 34.0382C33.5138 34.0382 33.9912 34.5165 33.9912 35.1058C33.9912 35.6951 33.5138 36.1734 32.9236 36.1734C32.3343 36.1734 31.8569 35.6951 31.8569 35.1058C31.8569 34.5165 32.3343 34.0382 32.9236 34.0382ZM32.9236 34.6382C33.1823 34.6382 33.392 34.8471 33.392 35.1058C33.392 35.3645 33.1823 35.5734 32.9236 35.5734C32.6658 35.5734 32.456 35.3645 32.456 35.1058C32.456 34.8471 32.6658 34.6382 32.9236 34.6382Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M28.5559 28.8489C29.1461 28.8489 29.6235 29.3271 29.6235 29.9164C29.6235 30.5058 29.1461 30.984 28.5559 30.984C27.9666 30.984 27.4893 30.5058 27.4893 29.9164C27.4893 29.3271 27.9666 28.8489 28.5559 28.8489ZM28.5559 29.4489C28.8146 29.4489 29.0244 29.6578 29.0244 29.9164C29.0244 30.1751 28.8146 30.384 28.5559 30.384C28.2981 30.384 28.0884 30.1751 28.0884 29.9164C28.0884 29.6578 28.2981 29.4489 28.5559 29.4489Z"
                                fill="white" />
                            <path d="M55.2395 54.9299V61.6943H22.1924V18.3059H55.2395V31.2135" stroke="white"
                                stroke-width="1.42222" stroke-miterlimit="22.9256" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M59.0239 37.12C58.8879 37.2053 58.6577 37.704 58.5554 37.8818L57.6399 39.4755C57.5145 39.6898 57.3234 40.0773 57.1812 40.232C57.2674 40.4222 58.8559 41.9769 59.2114 42.3342C59.3412 42.464 59.4292 42.568 59.5617 42.6942C59.7225 42.848 59.7919 42.8311 59.7972 43.1307C59.831 44.9351 59.7652 46.7813 59.7759 48.5929C59.6257 48.5102 58.5083 47.1244 58.4737 47.0382C57.9821 46.7778 57.1697 46.7858 56.6114 46.5458L55.7172 46.3662L55.7083 50.1849L54.4194 50.1831L54.4212 46.08C54.2274 46.0195 54.0479 45.9929 53.8443 45.944C53.4897 45.8595 53.1154 45.2933 52.6808 44.9609L51.9528 45.7218C51.7181 45.9991 51.3892 46.2711 51.271 46.5147L50.0621 46.5111L48.6479 44.9493C47.223 46.128 48.455 45.6444 46.9128 46.0755L46.903 50.1813L45.6185 50.1902L45.615 49.3858V48.4382V47.4915L45.6141 46.5564L45.6079 46.3707L45.3083 46.3902L44.5359 46.5902L42.983 46.9395L42.823 47.5387L41.2372 53.1769L41.1323 53.568L63.9128 53.5698C63.8301 53.3609 63.7323 53.3778 63.6328 53.1404C63.4932 53.0907 63.0763 52.536 62.9474 52.3787C62.5359 51.8747 62.6097 52.1218 62.6123 51.2764L62.6159 50.336L62.6185 49.3822L62.6221 48.4418L62.6265 47.5387L62.6381 43.7502C62.6443 43.0898 62.5377 43.1431 62.8879 42.7822L65.3634 40.3022C65.2639 40.04 65.0025 39.6498 64.8559 39.3902C64.6079 38.952 63.4399 37.0035 63.3385 36.7369L62.7225 36.7395L62.7101 39.712L59.8221 39.7253L59.815 38.9644V38.0231V37.0702V36.744L59.1901 36.7387L59.0239 37.12Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M49.0346 31.8009C48.1803 31.9867 47.5021 32.5618 47.095 33.0498C46.6452 33.5893 46.3332 34.3502 46.1057 35.1733L45.9163 36.1262L45.8097 37.0267L45.7581 37.6293L44.6621 37.6498L44.687 38.0178L44.6923 38.3822L45.1963 38.3875H46.1492H47.0897H48.0434H48.9839H49.9377H50.8781H51.831H52.7723H53.7252H54.6666H55.6194L56.5608 38.3795L56.5981 37.6551L55.5688 37.6418L55.4141 36.1431L55.231 35.1964C54.9786 34.392 54.8603 34.0267 54.4719 33.3884C53.8114 32.3049 52.5537 31.6747 51.2603 31.5902C50.8221 31.5618 49.2452 31.576 49.0346 31.8009Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M46.3941 39.9191L46.6652 40.9085C46.7132 40.9734 46.9212 41.5387 46.9816 41.6836C47.0883 41.9387 47.2394 42.2311 47.3549 42.4471C47.4981 42.712 47.6385 42.9307 47.7878 43.1503C50.8189 47.6196 54.5505 43.2711 55.0492 39.3431L46.3149 39.3485L46.3941 39.9191Z"
                                fill="white" />
                        </svg>
                        <div class="font-inter font-medium text-lg dark:text-bgprogresb text-txtnamecomntpkyr pt-6">
                            Herramientas de Gestión de Seguridad y Salud en el Trabajo
                        </div>
                        <div class="flex pt-6 gap-x-3">
                            <div class="font-inter font-medium text-2xl dark:text-bgprogresb text-txtnamecomntpkyr">
                                USD 9.99
                            </div>
                            <div class="dark:text-pricingdarkstudents text-gray-600 text-lg">
                                USD 19.99
                            </div>
                            <div>
                                <span
                                    class="bg-redtiket px-3 text-white-100 font-inter text-sm py-1 font-normal rounded-lg"
                                    s>
                                    50% Dto.
                                </span>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
