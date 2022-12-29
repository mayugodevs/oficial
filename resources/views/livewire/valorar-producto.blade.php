<div class="bg dark:bg-gray6  rounded-md bg-white-900 ">
    <style>
        #form {
            width: 250px;
            margin: 0 auto;
            height: 50px;
        }

        #form p {
            text-align: center;
        }

        #form label {
            font-size: 20px;
        }


        

        


        
        .clasificacion input[type='radio'] {
    opacity: 0;
  }
  .clasificacion label {
  
    color:rgb(150, 150, 150);
    cursor: pointer;
  }
  .clasificacion label:hover {
    color: orange;
  }
   .activo + label{
   color: orange !important;
    
   }
   .activo:focus{
       color: orange;
   }
   
          
    </style>



    <div class="">

        <div class="py-3">
            <span class="text-greenhover rounded-lg  xl:text-3xl ml:text-3xl lg:text-3xl md:text-3xl text-lg font-semibold">Gracias por llevar este Programa con
                Nosotros</span>

        </div>

        <div>
            <span class="dark:text-white-500 text-gray-300   xl:text-2xl  ml:text-2xl lg:text-2xl  md:text-2xl text-medio font-serif">¿Como calificaria usted su
                expericiencia?</span>

        </div>
    </div>
    <div class="clasificacion text-gray-300 dark:text-white-500 xl:text-xl ml:text-xl lg:text-xl md:text-xl text-sm  ">valoracion  {{ $score }} estrellas</div>

    <div>
        <form>
            <p class=" clasificacion">
                <input id="radio1" type="radio" name="score" wire:model.defer="score" value="1" wire:click="scoreUser">
                <label for="radio1" class="xl:text-8xl ml:text-8xl lg:text-8xl md:text-8xl text-4xl  ">★</label>
                <input id="radio2" type="radio" name="score" wire:model.defer="score" value="2" wire:click="scoreUser">
                <label for="radio2" class="xl:text-8xl ml:text-8xl lg:text-8xl md:text-8xl text-4xl  ">★</label>
                <input id="radio3" type="radio" name="score" wire:model.defer="score" value="3" wire:click="scoreUser">
                <label for="radio3" class="xl:text-8xl ml:text-8xl lg:text-8xl md:text-8xl text-4xl  ">★</label>
                <input id="radio4" type="radio" name="score" wire:model.defer="score" value="4" wire:click="scoreUser">
                <label for="radio4" class="xl:text-8xl ml:text-8xl lg:text-8xl md:text-8xl text-4xl  ">★</label>
                <input id="radio5" type="radio" name="score" wire:model.defer="score" value="5" wire:click="scoreUser">
                <label for="radio5" class="xl:text-8xl ml:text-8xl lg:text-8xl md:text-8xl text-4xl  ">★</label>
            </p>
        </form>

        <div class="flex justify-around">
            <div class="dark:text-white-500 text-gray-300 font-semibold  xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs">
                No me gusto
            </div>
            <div class="dark:text-white-500 text-gray-300 font-semibold  xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs">
                Me gusto
            </div>
        </div>
        <div class="dark:text-white-500 text-gray-300 py-2 xl:px-6 ml:px-6 lg:px-5 md:px-6 px-2  xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs font-serif">
            Al recomendarnos tu mail queda en nuestra base de datos y automáticamente estás participando para nuestro
            sorteo mensual de becas.
        </div>
        <div class="text-left xl:px-7 ml:px-7 lg:px-7 md:px-7 px-3">
            <span class="text-greenhover font-serif xl:text-lg ml:text-lg md:text-lg lg:text-lg text-medio">
                comente su experiencia con Nosotros
            </span>
        </div>

        @if ($coment == '')
            <div class="py-3">
                <div class="xl:px-7 ml:px-7 lg:px-7 md:px-7 px-3 ">
                    <textarea
                        class="w-full xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs dark:text-white-500 text-gray-300 bg-gray100 outline-none rounded-md placeholder-white-500 dark:bg-gray-500 px-4 py-1 "
                        cols="30" rows="4" placeholder="Dejanos tu comentario acerca del diplomado"
                        wire:model.defer="coment"></textarea>

                </div>
                <div class="text-left xl:px-7 ml:px-7 lg:px-7 md:px-7 px-3 py-1">
                    <button class="bg-blue text-white-500 rounded-md px-3 py-1 xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs" wire:click="comentUser">
                        Enviar</button>

                </div>
            </div>

        @else
            <p> {{ $coment }} </p>
        @endif

        @php
            $five = 0;
            $four = 0;
            $thre = 0;
            $two = 0;
            $one = 0;
            
            $totalPun = 0;
        @endphp
        @foreach ($comments as $comment)
            @if ($comment->puntaje == 5)
                @php
                    $five++;
                @endphp
            @elseif($comment->puntaje == 4)
                @php
                    $four++;
                @endphp
            @elseif($comment->puntaje == 3)
                @php
                    $thre++;
                @endphp
            @elseif($comment->puntaje == 2)
                @php
                    $two++;
                @endphp
            @else
                @php
                    $one++;
                @endphp
            @endif
        @endforeach

        @php
            $totalPun = $five * 5 + $four * 4 + $thre * 3 + $two * 2 + $one * 1;
            $totalCom = round($totalPun / count($comments), 1); /* PROMEDIO TOTAL */
        @endphp


        <div class="text-left xl:px-7 ml:px-7 lg:px-7 md:px-7 px-3 py-2">
            <span class="xl:text-lg ml:text-lg md:text-lg lg:text-lg text-medio text-center text-greenhover">opciones sobre el producto</span>
        </div>

        <div class="grid grid-cols-5">

            <div class="col col-span-2  px-7">

                <div class="xl:text-7xl ml:text-7xl lg:text-7xl md:text-7xl text-2xl  text-center dark:text-white-500 text-gray-300">
                    {{ $totalCom }}

                </div>

                <div class="flex flex-row justify-center">
                    <div class=""><i class="fas fa-star text-lg text-blue"></i></div>
                    <div class=""><i class="fas fa-star text-lg text-blue"></i></div>
                    <div class=""><i class="fas fa-star text-lg text-blue"></i></div>
                    <div class=""><i class="fas fa-star text-lg text-blue"></i></div>
                    <div class=""><i class="fas fa-star text-lg text-blue"></i></div>
                </div>
                <div>
                    <span class="font-sans dark:text-white-500 xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs text-gray-300"> promedio de valoracion</span>
                </div>
            </div>
            <div class="col col-span-3 ">
                <div class="flex justify-start items-center">
                    <div class="font-serif dark:text-white-500 text-gray-300 px-2 xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs">5 estrellas </div>
                    <div class=" bg-gray100 h-2 w-40 rounded-md items-center">
                        <div class="bg-blue text-xs rounded-md h-2 w-12 leading-none  text-center text-white"></div>
                    </div>

                    <div class="px-2 dark:text-white-500 text-gray-300">{{ $five }}</div>
                </div>
                <div class="flex justify-start items-center">
                    <div class="font-serif dark:text-white-500 text-gray-300 px-2 xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs">4 estrellas </div>
                    <div class=" bg-gray100 h-2 w-40 rounded-md items-center">
                        <div class="bg-blue text-xs rounded-md h-2 xl:w-36 ml:w-36 lg:w-36 md:w-36 w-15  leading-none  text-center text-white"></div>
                    </div>

                    <div class="px-2 dark:text-white-500 text-gray-300"> {{ $four }}</div>
                </div>
                <div class="flex justify-start items-center">
                    <div class="font-serif dark:text-white-500 text-gray-300 px-2 xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs">3 estrellas </div>
                    <div class=" bg-gray100 h-2 w-40 rounded-md items-center">
                        <div class="bg-blue text-xs rounded-md h-2 xl:w-36 ml:w-36 lg:w-36 md:w-36 w-14 leading-none  text-center text-white"></div>
                    </div>

                    <div class="px-2 dark:text-white-500 text-gray-300">{{ $thre }}</div>
                </div>
                <div class="flex justify-start items-center">
                    <div class="font-serif dark:text-white-500 text-gray-300 px-2 xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs">2 estrellas </div>
                    <div class=" bg-gray100 h-2 w-40 rounded-md items-center">
                        <div class="bg-blue text-xs rounded-md h-2 xl:w-28  ml:w-28 lg:w-28 md:w-28 w-12 leading-none  text-center text-white"></div>
                    </div>

                    <div class="px-2 dark:text-white-500 text-gray-300"> {{ $two }}</div>
                </div>
                <div class="flex justify-start items-center">
                    <div class="font-serif dark:text-white-500 text-gray-300 px-2 xl:text-lg ml:text-lg md:text-lg lg:text-lg text-xs">1 estrellas </div>
                    <div class=" bg-gray100 h-2 w-40 rounded-md items-center">
                        <div class="bg-blue text-xs rounded-md h-2 w-12 leading-none  text-center text-white"></div>
                    </div>
                    <div class="px-2 dark:text-white-500 text-gray-300 ">{{ $five }}</div>
                </div>
            </div>

        </div>
    </div>
    <div class="shadow w-full bg-grey-light">




        <div class="xl:text-xl ml:text-xl lg:text-xl md:text-xl text-medio  text-greenhover font-semibold text-left xl:px-7 ml:px-7 lg:px-7 md:px-7 px-3 py-4">
            todos los comentarios
        </div>


        <br>
        @foreach ($comments as $comment)
            <div class="text-left xl:px-7 ml:px-7 lg:px-7 md:px-7 px-3 py-2  flex flex-col justi">
                <div class="flex ">
                    <div class=""><i class="fas fa-star text-xs text-blue"></i></div>
                    <div class=""><i class="fas fa-star text-xs text-blue"></i></div>
                    <div class=""><i class="fas fa-star text-xs text-blue"></i></div>
                    <div class=""><i class="fas fa-star text-xs text-blue"></i></div>
                    <div class=""><i class="fas fa-star text-xs text-gray100"></i></div>
                </div>


                <div class="dark:text-white-500 xl:text-lg ml:text-lg md:text-lg lg:text-lg text-medio text-gray-300 font-sans">
                    {{ $comment->comentario }}
                </div>
                
            </div>

            
        @endforeach
    </div>



    <script>
        $(".clasificacion").find("input").change(function(){
  var valor = $(this).val()
  $(".clasificacion").find("input").removeClass("activo")
  $(".clasificacion").find("input").each(function(index){
     if(index+1<=valor){
      $(this).addClass("activo")
     }
     
  })
})

$(".clasificacion").find("label").mouseover(function(){
  var valor = $(this).prev("input").val()
  $(".clasificacion").find("input").removeClass("activo")
  $(".clasificacion").find("input").each(function(index){
     if(index+1<=valor){
      $(this).addClass("activo")
     }
     
  })
})
    </script>

</div>
