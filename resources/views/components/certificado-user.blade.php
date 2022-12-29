<div class="">
    

    @if ($status== false)
        <div class="dark:bg-gray7 bg-white-900 rounded-lg py-3">
            <div class="xl:text-3xl ml:text-3xl md:text-3xl lg:text-3xl text-lg text-greenhover font-semibold">!felicidades por esta meta cumplida!</div>
            <div class="xl:text-xl ml:text-xl md:text-xl lg:text-xl text-medio dark:text-white-500 text-gray-700 font-serif text-mdedio px-3 py-2">En MayuGo nos sentimos
                orgulloso que
                celebres tu triunfo profesional.
                Ya estas listo para asumir nuevos retos competitivos en la industria.</div>
            <div class="text-gray-300 px-3">
                <hr>
            </div>
            <div class="text-medio dark:text-white-500 text-gray-700 font-serif px-3 py-2">
                Tenemos un descuento muy especial para ti, te invitamos ser parte <br> de nuestra
                comunidad <a href="#" class="dark:text-greenhover text-green_hover">Premium </a> por solo US$399/año

                <div class="py-3">
                    <button class="px-2 bg-indigo-600 py-1 focus:outline-none rounded-md text-white-500 font-sans text-md">Únete
                        Ahora</button>
                </div>

                <div class="flex relative px-3  z-0">
                    <div class="absolute z-0 cambio">
                        <img src="https://p.kindpng.com/picc/s/146-1468338_icon-profile-blue-transparent-hd-png-download.png"
                            class="xl:h-9 xl:w-9 lg:h-9 lg:w-9 md:h-9 md:w-9 ml:h-9 ml:w-9 h-7 w-7 rounded-full" alt="">
                    </div>
                    <div class="absolute z-0 cambio left-8">
                        <img src="https://p.kindpng.com/picc/s/146-1468338_icon-profile-blue-transparent-hd-png-download.png"
                            class="xl:h-9 xl:w-9 lg:h-9 lg:w-9 md:h-9 md:w-9 ml:h-9 ml:w-9 h-7 w-7 rounded-full" alt="">
                    </div>
                    <div class="absolute z-0 cambio left-14">
                        <img src="https://p.kindpng.com/picc/s/146-1468338_icon-profile-blue-transparent-hd-png-download.png"
                            class="xl:h-9 xl:w-9 lg:h-9 lg:w-9 md:h-9 md:w-9 ml:h-9 ml:w-9 h-7 w-7 rounded-full" alt="">
                    </div>
                    

                </div>

                <div class="text-medio dark:text-white-500 text-gray-700 font-serif xl:mx-9  ml:mx-9  lg:mx-9  md:mx-9  mx-9 xl:text-lg ml:text-lg md:text-lg lg:text-lg text-medio ">
                    <span>... ...... GASTÓN, Brenda, vanesa, Rosa Yesenia , y +50 personas
                        
                       <a href="#" class="dark:text-greenhover  text-green_hover">  adquirieron Premium</a> </span>
                </div>
                <br>
                

                <div>
                    <button class="w-56 h-16 border-b-4 focus:outline-none border-greenborder  rounded-md bg-green_hover text-white-500 font-serif xl:text-2xl ml:text-2xl lg:text-2xl md:text-2xl text-xl ">Ver Mi Diploma</button>
                </div>


                <br>
            
            

            </div>



        </div>
    @else

        <div class="py-3 flex flex-col  justify-center items-center dark:bg-gray7 bg-white-900 rounded-lg">
            <div class=" text-green font-semibold xl:text-3xl ml:text-3xl md:text-3xl lg:text-3xl text-medio ">Su {{ $tipo }} No esta disponible</div>

         {{--    <div class="text-lg dark:text-white-500 text-gray-700 font-semibold">Mi
                {{ $insc }}°{{ $tipo }} </div> --}}

                <div class="dark:text-white-500 text-gray-300 font-semibold xl:text-xl ml:text-xl md:text-xl lg:text-xl text-medio">Para obtener su certificado recuerde culminar todas sus evaluaciones y haber enviado la respectiva solicitud.</div>

            <div class="text-lg dark:text-white-500 text-gray-700  font-semibold">{{ $status }} </div>
        </div>
    @endif




</div>
