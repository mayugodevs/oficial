<div>
    <div id="dvespec" class="hidden">
        <div class="h-full xl:h-auto w-full xl:w-auto xl:flex top-14 left-0 xl:top-4 rounded-xl dark:border-gray-900 bg-white-900 dark:bg-colheaderdark  dark:text-white-300  fixed xl:absolute 
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
            <div id="dvc2" class="py-1 xl:py-0 px-4 h-almost xl:max-h-96 xl:w-80 xl:h-auto overflow-auto pendeivis border-l-2 dark:border-borderleftm hidden absolute xl:static top-0 left-0 w-full h-full bg-white-900 dark:bg-colheaderdark">
                <button class="xl:hidden text-lg flex items-center py-2" onclick="$('#dvc2').toggleClass( 'hidden' );">
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>&nbsp;&nbsp; Volver a categorías
                   
                </button>
                <div class="text-lg dark:text-greenhover font-medium mb-3">Cursos {{$categoria_id}}</div>
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
            curso_cats.filter( cu => cu.idc == categoria_id).forEach(curso => {
                li+=`
                    <li class="bg-blue-200 rounded-sm xl:px-3 py-2 hover:bg-fondoyugo dark:hover:bg-colheaderdarkhover dark:hover:text-greenhover">
                        <div class="flex items-center">
                            <a class="text-lg" href="curso/${curso.slug}">${curso.nom} </a>
                        </div>
                    </li>
                `;
            });
            document.getElementById('course_list').innerHTML = li
        }
    </script>
    @endpush
</div>
