<div class="carousel relative shadow-2xl bg-white">
    <div class="carousel-inner relative overflow-hidden w-full">
        
        @for ($i = 1; $i < 4; $i++)
            @php
                $estado = $i == 1 ? 'checked="checked"' : '';

                if ($i == 1) {
                    $pri = 3;
                    $seg = 2;
                }elseif ($i == 2) {
                    $pri = 1;
                    $seg = 3;
                }else{
                    $pri = 2;
                    $seg = 1;
                }                
            @endphp
            <input class="carousel-open" type="radio" id="carousel-{{$i}}" name="carousel"
            aria-hidden="true" hidden="" {{$estado}}>
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                {{-- <div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center">Slide {{$i}}  --}}
                    @foreach ($userPremiu as $key => $item)
                        @if ($i*2-2 <= $key && $i*2-1 >= $key)
                            <div class="grid grid-cols-2  font-serif font-bold gap-y-2">                                    
                                <div class="relative px-4  h-auto  bg-white-700 dark:bg-bluedark border border-gray-400  rounded-xl pt-5 sm:pb-4 my-3">
                                    <div
                                        class="bg-yellow-400 dark:bg-green badge-new absolute left-0 top-0 text-center rounded font-semibold px-1 text-whitetext ">
                                        Nuevo
                                    </div>
                                    <div class="content-center text-center space-y-1 space-x-0 px-0 sm:text-center">
                                        <div class="space-y-0.8 ">
                                            <img class="block mx-auto h-24 rounded-full  sm:flex-shrink-0"
                                                src="http://127.0.0.1:8000/images/prods/icono-seguridad-industrial.png"
                                                alt="images/prods/icono-seguridad-industrial.png">
                                            <br>
                                            <p class="text-gray-900 text-sm font-medium dark:text-white-500" style="height:60px">
                                                Seguridad Industrial
                                            </p>
                                        </div>
                
                                        <div class="dark:text-whitetext  flex justify-between mb-2">
                                            <div class="flex items-center">
                                                <button
                                                    class="p-0 buttonlike rounded hover:text-green text-gray-600   dark:text-whitetext dark:hover:text-green duration-200">
                                                    <span class="lnr lnr-users text-lg text-green "></span>
                                                </button>
                                                <div>
                                                    1271
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <button
                                                    class=" p-0 buttonlike rounded hover:text-green text-gray-600 dark:text-whitetext dark:hover:text-green duration-200">
                                                    <span class="lnr lnr-star text-lg text-green "></span>
                                                </button>
                                            </div>
                                            <div class="flex items-center">
                                                <button
                                                    class="p-0 buttonlike rounded text-gray-600    dark:text-whitetext hover:text-green dark:hover:text-green duration-200">
                                                    <span class="lnr lnr-heart text-lg text-green "></span>
                                                </button>
                                                <div>
                                                    0
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-between mt-0 w-100">
                                            <a class="w-full" href="http://127.0.0.1:8000/curso/ff">
                                                <div class="text-xs dark:text-whitetext">Mi progreso</div>
                                                <div>
                                                    <div
                                                        class="progess-container shadow w-full border-2 border-green dark:bg-green bg-green mt-1 rounded-md ">
                                                        <div class="dark:text-gray-200 bg-green-500 dark:bg-green-400 leading-none h-3  text-center text-white rounded-md"
                                                            style="width: 100%;font-size:15px">100%</div>
                                                    </div>
                                                </div>
                                                <button
                                                    class="items-center flex justify-center w-full bg-transparent p-1 py-1 px-4  hover:bg-purple text-gray-600 font-semibold hover:text-whitetext dark:text-whitetext duration-200 border-2  border-purple hover:border-transparent rounded">
                                                    Ir a clase&nbsp;<span class="lnr lnr-arrow-right font-bold"></span>
                                                </button>
                                            </a>
                                        </div>
                
                                    </div>
                                </div>
                            </div> 
                        @endif
                    @endforeach
                {{-- </div> --}}
                
            </div>
            <label for="carousel-{{$pri}}"
                class="prev control-{{$i}} w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-{{$seg}}"
                class="next control-{{$i}} w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>


        @endfor 

        



        <ol class="carousel-indicators">
            <li class="inline-block mr-3">
                <label for="carousel-1"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-2"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-3"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
        </ol>

    </div>
</div>