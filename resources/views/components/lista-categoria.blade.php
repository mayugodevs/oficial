<div>
    
    @if ($tipo == "menu")
        
    <div id="dvespec" class="hidden">
        <div class="shadow-lg z-20 h-full xl:h-auto w-full xl:w-auto xl:flex top-14 left-0 xl:top-4 rounded-xl dark:border-gray-900 bg-colheaderwhite dark:bg-colheaderdark  dark:text-white-300  fixed xl:absolute 
        transition duration-150 ease-in-out origin-top min-w-32  mt-2 xl:px-3 py-1 xl:py-4 text-sm"> 
            <div id="dvc1" class="px-4 xl:pl-0 xl:pr-4 h-almost xl:max-h-96 overflow-auto pendeivis  xl:mr-1 xl:w-96" >
                <button class="text-lg flex items-center py-2 xl:hidden" onclick="$('#dvespec').toggleClass( 'hidden' );">
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>&nbsp;Volver al menú
                   
                </button>
                <div class="text-lg dark:text-greenhover font-medium mb-3" >Categorías </div>
                    <hr class="dark:border-greenhover mb-3 xl:hidden">
                    <ul>
                        @foreach ($categorias as $categoria)                
                            <li class="bg-blue-200 rounded-sm py-2 xl:px-3 xl:py-3 hover:bg-fondoyugo dark:hover:bg-colheaderdarkhover w-full" 
                                {{-- wire:click="openCourse({{$categoria->idc}})" --}}                                
                                >
                                <div class="flex items-center">
                                    <img class="w-10 h-10 mr-2" src="http://127.0.0.1:8000/images/categoria/lean-six-sigma.png" alt="lean-six-sigma.png">
                                    <a class="text-lg" href="{{ route('categoria', $categoria->slug) }}">{{$categoria->nombre}} </a> 
                                    <i class="fa-solid fa-eye" onmouseover="openchildcourse({{$categoria->idc}})">sss</i>                           
                                </div>
                            </li>
                        @endforeach   
                    </ul> 
            </div>
            <div id="dvc2" class="py-1 xl:py-0 px-4 h-almost xl:max-h-96 xl:w-80 xl:h-auto overflow-auto pendeivis border-l-2 dark:border-borderleftm hidden absolute xl:static top-0 left-0 w-full h-full bg-colheaderwhite dark:bg-colheaderdark">
                <button class="xl:hidden text-lg flex items-center py-2" onclick="$('#dvc2').toggleClass( 'hidden' );">
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>&nbsp;&nbsp; Volver a categorías
                   
                </button>
                <div class="text-lg dark:text-greenhover font-medium mb-3">Cursos </div>
                <hr class="dark:border-greenhover mb-3">
                <ul id="course_list">

                </ul> 
            </div>
        </div>
    </div>
    @push('js')
        <script>
            curso_cats = @json($courses);
            
            function openchildcourse(categoria_id){
                if($('#dvc2').hasClass('hidden')){
                    $('#dvc2').toggleClass( 'hidden' );
                }
                let li = '';
                // <a class="text-lg" href="{{ route('curso','')}}">${cursito.nom} </a>
                curso_cats.filter( cu => cu.idc == categoria_id).forEach(cursito => {
                    li+=`
                        <li class="bg-blue-200 rounded-sm xl:px-3 py-2 hover:bg-fondoyugo dark:hover:bg-colheaderdarkhover dark:hover:text-greenhover">
                            <div class="flex items-center">
                                <a class="text-lg" href="http://127.0.0.1:8000/curso/${cursito.slug}">${cursito.nom} </a>
                            </div>
                        </li>
                    `;
                });
                document.getElementById('course_list').innerHTML = li
            }
        </script>
    @endpush
    @else 
        <ul class="text-xs xl:text-sm fotes leading-6 sm:leading-6 xl:leading-8 font-inter flex-col sm:flex hidden">
            <li class="font-semibold font-inter pb-2 dark:text-bordersec text-gray-650 text-lg">Especialidades</li>             
            @foreach ($categorias as $categoria)
            <li><a href="{{ route('categoria', $categoria->slug) }}" target="_blank"><div class="font-inter font-normal text-gray-600 dark:text-borderconcours text-sixteen">{{$categoria->nombre}}</div></a></li>
            @endforeach 
        </ul>
        <ul class="text-xs xl:text-sm fotes leading-6 sm:leading-6 xl:leading-8 font-inter sm:hidden flex-col flex">
            <li class="font-semibold font-inter pb-2 dark:text-bordersec text-gray-650 text-lg">

                <button class="flex justify-between w-full focus:outline-none buton1" id="">
                    <div class="dark:text-bordersec text-gray-650 text-lg">
                        Especialidades
                    </div>
                    <div>
                        <svg class="arrow1" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.32805 9.71599C7.79671 9.24734 8.55655 9.24734 9.02521 9.71599L12.9769 13.6677L16.9286 9.71599C17.3973 9.24734 18.1571 9.24734 18.6258 9.71599C19.0944 10.1847 19.0944 10.9445 18.6258 11.4131L13.8255 16.2134C13.3568 16.6821 12.597 16.6821 12.1283 16.2134L7.32805 11.4131C6.8594 10.9445 6.8594 10.1847 7.32805 9.71599Z" fill="Currentcolor"/>
                            </svg>
                        <svg class="hidden arrow2" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.6257 16.2134C18.157 16.6821 17.3972 16.6821 16.9285 16.2134L12.9768 12.2617L9.02515 16.2134C8.55649 16.6821 7.79665 16.6821 7.32799 16.2134C6.85934 15.7448 6.85934 14.9849 7.32799 14.5163L12.1283 9.71599C12.5969 9.24734 13.3568 9.24734 13.8254 9.71599L18.6257 14.5163C19.0944 14.9849 19.0944 15.7448 18.6257 16.2134Z" fill="Currentcolor"/>
                        </svg>
                                 

                    </div>
                </button>
                
            </li>             
           <div class="card" id="">

            @foreach ($categorias as $categoria)
            <li><a href="{{ route('categoria', $categoria->slug) }}" target="_blank"><div class="font-inter font-normal text-gray-600 dark:text-borderconcours text-sixteen">{{$categoria->nombre}}</div></a></li>
            @endforeach
               
           </div> 
           <script>
            let buton1=document.querySelector(".buton1");
            let card=document.querySelector(".card");
            let arrow1=document.querySelector(".arrow1");
            let arrow2=document.querySelector(".arrow2");
      
            buton1.addEventListener('click',function(){
                         // icon.classList.remove('hidden');
                          card.classList.toggle('hidden');
                          arrow1.classList.toggle('hidden');
                          arrow2.classList.toggle('hidden');
                          
                          });
      
          </script>
        </ul>
    @endif

    


</div>
