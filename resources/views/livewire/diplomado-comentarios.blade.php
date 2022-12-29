<div class=" dark:bg-gray-300 h-screen rounded-md bg-white-300  xl:w-9/12 ml:w-9/12 md:w-9/12 lg:w-9/12 sm:w-full px-5  m-auto xl:px-5 ml:px-5 md:px-5 lg:px-5 " >

    <div class="rounded-md flex justify-between items-center py-2 ">

        <div class=" xl:w-1/12 py-1 w-1/6  ">
            <img class="inline  xl:h-12 xl:w-12  ml:h-12 ml:w-12  lg:h-12 lg:w-12  md:h-12 md:w-12  h-12 w-12 rounded-full"
                src="https://pbs.twimg.com/profile_images/1254779846615420930/7I4kP65u_400x400.jpg" alt="">
        </div>
        <div class="w-full">
            <input type="text   "
                class="rounded-full focus:outline-none   w-full h-10   dark:bg-gray-900 bg-white-900 font-semibold px-6 dark:text-white-500 text-gray-500 dark:placeholder-white-500 placeholder-gray-300"
                wire:model.defer="inp_comentario" placeholder="Escribe aqui">
        </div>
    </div>

    <div class=" absolute -my-12 xl:left-3/4  ml:left-3/4 md:left-3/4 lg:left-3/4 mx-5 px-1 left-1/2  xl:mx-14 ml:mx-14 ml:px-12  flex justify-end">

        <div class="-my-1 ">
            <button class="mx-1 py-1 px-2  rounded-full bg-yellow-400 "><i class="far fa-smile-wink  "></i></button>
           {{--  text-xs xl:text-lg ml:text-lg lg:text-lg --}}
        </div>

        <div class="-my-1 ">
            <button class=" mx-1   px-2 py-1  rounded-full bg-green_hover"> <i class="lnr lnr-picture"></i></button>

        </div>
        <div class="-my-1 ">
            <button class="rounded-full  bg-bluefacebook text-white-500 text-sm  mx-1  px-2 py-1 " value="PUBLICAR"
                wire:click="diploComent"><i class="far fa-paper-plane"></i></button>
        </div>

    </div>


        
    







    <div class="dark:bg-gray-900 bg-white-900  rounded-md ">
        <div class=" dark:bg-gray-300 bg-white-500  ">
            @forelse ($comentarios as $comentario)



                <div class="dark:bg-gray1 flex justify-between rounded-t-md  bg-white-900 text-left dark:text-white-500 text-gray-700 font-semibold  ">


                    <div class="  xl:px-3  ml:px-3  lg:px-3  md:px-3 px-2 py-1 flex  justify-center items-center ">
                        <div class=" my-1">
                            <i class="far fa-user-circle  text-yellow-400 text-3xl mx-1 xl:py-1 ml:py-1 md:py-1 lg:py-1   "></i>
                        </div>
                        <div class="   font-serif text-xs xl:text-lg ml:text-lg lg:text-lg xmd:text-lg ">
                            {{ $comentario->alumno->nombres }} <br>
                            <!--<span class="bg-blue rounded-xl px-2 text-xs text-white-500 "> ingeniero </span>-->
                        </div>


                    </div>
                    <div class="  py-1 px-3 ">
                        <span class="text-xs xl:text-lg ml:text-lg lg:text-lg xmd:text-lg">23 de enero | 4pm </span>
                    </div>

                </div>






                <div
                    class=" dark:bg-gray1 bg-white-900 mb-2 flex-col md:flex-row  space-y-1  rounded-b-md  ">
                    <div class=" text-left  xl:text-lg  ml:text-lg  lg:text-lg  md:text-lg text-xs  px-4 dark:text-white-500 text-gray-700 font-serif ">
                        {{ $comentario->comentario }}
                    </div>

                    <div class="text-left px-4 dark:text-white-500 text-gray-700 font-serif py-2 ">
                        <div class="inline  flex-auto text-xs xl:text-lg ml:text-lg lg:text-lg xmd:text-lg">me gusta {{ count($comentario->diplomadoComentLikes) }}
                        </div>
                        <div class="inline  items-center ">
                            <button
                                class=" p-0 buttonlike inline rounded hover:text-green text-gray-600 dark:text-whitetext dark:hover:text-green duration-200">
                                <span class="lnr lnr-heart xl:text-xl ml:text-xl md:text-xl lg:text-xl text-medio  text-blue "></span>
                            </button>
                            {{-- <x-detalle-curso  tipo="2" idAsig="{{$curso->cursoAsignacion->idasig}}" /> --}}
                            {{-- <span class="text-sm" style="margin-top:-3px">4.5</span> --}}
                        </div>
                        <div class="inline items-center text-xs xl:text-lg ml:text-lg lg:text-lg xmd:text-lg "> Responder
                            <button
                                class="p-0 buttonlike  rounded text-gray-600    dark:text-whitetext hover:text-green dark:hover:text-green duration-200">
                                <span class="far fa-comment text-blue xl:text-lg ml:text-lg lg:text-lg md:text-lg text-lg mx-2 "></span>
                            </button>

                            {{-- <span class="text-sm" style="margin-top:-3px">352</span> --}}
                            
                        </div>
                       
                        
                    </div>


                 
                    @forelse ($comentario->diplomadoComentRespts as $resp)
                        <!--<div class=" text-left mx-8 ">{{ $resp->respuesta }}</div>-->

                    @empty
                    @endforelse

                </div>
            @empty


            @endforelse
            <hr>
        </div>
    </div>


</div>
