<div class="bg-whitetext dark:bg-gray14 pt-20 xl:pt-0 flex items-center flex-col">
    <div class="containermygo bg-bgfondopricingwhite xl:bg-whitetext dark:bg-gray14 mt-4 lg:mt-32 pt-3">

    @if ($plan)
            @push('css')
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
                    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
                    crossorigin="anonymous" referrerpolicy="no-referrer" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css"
                    integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA=="
                    crossorigin="anonymous" referrerpolicy="no-referrer" />
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
                <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
                <style>
                    .emojionearea .emojionearea-editor {
                        min-height: 4em,
                    } 

                    .emojionearea-editor {
                        min-height: 40px !important;
                        text-align: left;
                        padding: 10px 40px 10px 12px !important;
                        font-family: 'Inter';
                        font-style: normal;
                        font-weight: 400;
                        font-size: 14px;
                        line-height: 20px;
    
                    }
    
                    .emojionearea-button-open {
                        top: 5px;
                    }
    
                    .emojionearea-button-close {
                        top: 5px;
                    }
    
                    .cmntarealo .emojionearea {
                        width: calc(100% - 50px);
                        border-right: 1px solid #CDD5DF !important;
                        border-bottom: 1px solid #CDD5DF !important;
                        border-left: 1px solid #CDD5DF !important;
                        border-top: 0px;
                        border-radius: 6px;
                    }
    
                    .dvcomentplyrc {
                        width: calc(100% - 50px);
                    }
    
                    .rplyy .emojionearea {
                        border-right: 1px solid #CDD5DF !important;
                        border-bottom: 1px solid #CDD5DF !important;
                        border-left: 1px solid #CDD5DF !important;
                        border-top: 0px;
                        border-radius: 6px;
                    }
    
                </style>
            @endpush
            @php
                $ultimoVideo = 0;
                $canti_videos = 0;
                $matt = '';
            @endphp
    
            <div class="grid grid-cols-6 text-center gap-3 xl:gap-6">
    
                <div class="col-span-6 grid grid-cols-6  xl:col-span-4">
                    {{-- SECCION DONDE SE MUESTRA EL VIDEO --}}
                    <div class="col-span-6" id="video_next" wire:ignore>
                        @if ($current_video)
                            <video style="--plyr-color-main: #6666FF;width:100%;--plyr-control-icon-size:16px;"
                                id="fmvideo">
                                <source src="https://storage.googleapis.com/bucket-mayugo/cursos/{{ $current_video }}"
                                    type="video/mp4" size="720">
                            </video>
                        @else
                            <iframe style="width:100%;height: 100%"
                                src="https://www.youtube.com/embed/{{ $url_yout }}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                                allowfullscreen allowtransparency allow="autoplay" id="fmvideo"></iframe>
                        @endif
                    </div>
    
                    <div class="titlecourseplayer col-span-6 xl:col-span-3 text-left mt-4 xl:order-1 mb-1 xl:mb-0 px-4 xl:px-0">
                        {{$contenido}}
                    </div>
                    <div
                        class="mb-1 text-left col-span-6 bg-pricingcintawhite px-4 pt-2 pb-4 rounded-md xl:hidden mx-4 xl:mx-0">
                        <div class="mb-1 textprogressminic"> {{$porcentaje_avance}} % COMPLETADO</div>
                        <div class="w-full  rounded-full h-2 bg-bgprogresb mr-4">
                            <div div="" class="bg-green h-2 rounded-full" style="width: {{$porcentaje_avance}}%"></div>
                        </div>
    
                    </div>
                    {{-- <x-ultimo-curso /> --}}
                    <div class="flex justify-between xl:justify-end col-span-6 xl:col-span-3 mt-4 order-5 xl:order-2 px-4 xl:px-0">
                        <button class="dark:text-whitetext order-2 xl:order-1 rounded flex border border-buttonlikecourse h-10 items-center px-2.5 txtbuttonplayer">
                            <svg width="16" height="14" viewBox="0 0 16 14" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.17157 1.17157C2.73367 -0.390524 5.26633 -0.390524 6.82843 1.17157L8 2.34315L9.17157 1.17157C10.7337 -0.390524 13.2663 -0.390524 14.8284 1.17157C16.3905 2.73367 16.3905 5.26633 14.8284 6.82843L8 13.6569L1.17157 6.82843C-0.390524 5.26633 -0.390524 2.73367 1.17157 1.17157Z"
                                    fill="currentColor" />
                            </svg>
                            &nbsp;&nbsp;20
                        </button>
                        {{-- BOTONES DE ANTERIO Y SIGUIENTE --}}
                        <div class="flex xl:order-3 text-txtcommentply dark:text-whitetext">
                            @if ($cant_rec == 0 || $cant_rec == 1)
                                <button wire:click="showVideo({{ $cant_rec + 1 }})"
                                    class="dark:text-whitetext rounded flex border border-buttonlikecourse h-10 items-center px-5 txtbuttonplayer"><span
                                        class="xl:hidden">Siguiente</span><span class="hidden xl:block"> Siguiente</span><svg width="12" height="10" viewBox="0 0 12 10" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.83431 0.833008L11.001 4.99967M11.001 4.99967L6.83431 9.16634M11.001 4.99967L1.00098 4.99967"
                                            stroke="currentColor" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg></button>
                            @elseif ($cant_rec == $canti_videos)
                                <button wire:click="showVideo({{ $cant_rec - 1 }})"
                                    class="dark:text-whitetext ml-2 rounded flex border border-buttonlikecourse h-10 items-center px-5 txtbuttonplayer"><svg
                                        width="12" height="10" viewBox="0 0 12 10" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.16666 9.16634L1 4.99967M1 4.99967L5.16667 0.833008M1 4.99967L11 4.99967"
                                            stroke="currentColor" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>&nbsp;&nbsp;<span class="xl:hidden dark:text-whitetext">Anterior</span></button>
                            @else
                                <button wire:click="showVideo({{ $cant_rec - 1 }})"
                                    class="dark:text-whitetext rounded-l xl:ml-2 flex border border-buttonlikecourse h-10 items-center px-5 txtbuttonplayer">
                                        <svg
                                        width="12" height="10" viewBox="0 0 12 10" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.16666 9.16634L1 4.99967M1 4.99967L5.16667 0.833008M1 4.99967L11 4.99967"
                                            stroke="currentColor" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>&nbsp;&nbsp;<span class="xl:hidden">Anterior</span></button>
                                <button wire:click="showVideo({{ $cant_rec + 1 }})"
                                    class="dark:text-whitetext rounded-r flex border border-buttonlikecourse 
                                        h-10 items-center px-5 txtbuttonplayer">
                                    <span class="xl:hidden">Siguiente</span><span class="hidden xl:block"> Siguiente</span>&nbsp;&nbsp;<svg width="12" height="10" viewBox="0 0 12 10"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.83431 0.833008L11.001 4.99967M11.001 4.99967L6.83431 9.16634M11.001 4.99967L1.00098 4.99967"
                                            stroke="currentColor" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            @endif
                        </div>
                        <input type="hidden" value="{{ $cant_rec }}" id="valor_next">
    
                    </div>
    
                    <div class="flex items-center txtlabelviews col-span-6 xl:order-3 px-4 xl:px-0 mb-2 xl:mb-0">
                        <div class="flex items-center">
                            <svg width="16" height="12" viewBox="0 0 16 12" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.99983 5.99967C9.99983 7.10424 9.1044 7.99967 7.99983 7.99967C6.89526 7.99967 5.99983 7.10424 5.99983 5.99967C5.99983 4.8951 6.89526 3.99967 7.99983 3.99967C9.1044 3.99967 9.99983 4.8951 9.99983 5.99967Z"
                                    stroke="#092642" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M1.63867 5.99965C2.48819 3.29493 5.01504 1.33301 8.00013 1.33301C10.9852 1.33301 13.5121 3.29495 14.3616 5.9997C13.5121 8.70442 10.9852 10.6663 8.00014 10.6663C5.01504 10.6663 2.48817 8.7044 1.63867 5.99965Z"
                                    stroke="#092642" stroke-width="1.33333" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>&nbsp;1000 vistas
                        </div>
                        &nbsp;&nbsp;&nbsp;
                        <div class="text-bcklightbuscador">
                            {{$curs_asign->curso->nom}}
                        </div>
    
                    </div>
                    {{-- <div class=" pt-2 pb-3 items-center col-span-6 xl:order-4 hidden xl:flex">
                        <div class="w-full  rounded-full h-4 bg-bgprogresb mr-4">
                            <div div class="bg-green h-4 rounded-full" style="width: 45%"></div>
                        </div>
                        <div class="progresslabel" style="min-width: fit-content;">
                            50% Completado
                        </div>
    
                    </div> --}}
    
                    {{-- DOCENTE --}}
                    <div
                        class="flex items-center instructorplayername text-gray-600 dark:text-whitetext col-span-6 order-4 xl:order-5 px-4 xl:px-0">
                        <div><img src="https://www.mayugo.net/admin/images/picture/noe-adrianzaen.png" alt="instructor"
                                class="h-8 w-8 rounded-full"></div>
                        <img src="{{ asset($curs_asign->trabajador->alumno->avatar) }}" alt=""> &nbsp;
                        {{ $curs_asign->trabajador->alumno->nombres }}
                    </div>
    
                    <div class="material mt-6 col-span-6 xl:order-6 hidden xl:block">
                        <div name="containercourse" class=" text-left">
                            <div name="containerone">
                                {{-- ARCHIVOS DEL CURSO --}}
                                <div name="coursefiles">
                                    <h4 class="titlefiles dark:text-whitetext">Archivos de la clase</h4>
                                    <div name="filescontainer" class=" px-4">
                                        {{-- SECTION OF FILES THE COURSE --}}
                                        @foreach ($archivos as $archivo)
                                            @foreach ($archivo->cursoArchivos as $itemmm)
                                                <div class="filestitleresource my-5">
                                                    <a href="{{ $itemmm->archivo }}" target="_blank">
                                                        <div class="flex justify-between items-center">
                                                            <div class="flex items-center ">
                                                                <div class="text-whitetext dark:text-graydat">
                                                                    <svg class="" width="20" height="16"
                                                                        viewBox="0 0 20 16" fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M1.00024 3.00024V13.0002C1.00024 14.1048 1.89567 15.0002 3.00024 15.0002H17.0002C18.1048 15.0002 19.0002 14.1048 19.0002 13.0002V5.00024C19.0002 3.89567 18.1048 3.00024 17.0002 3.00024H11.0002L9.00024 1.00024H3.00024C1.89567 1.00024 1.00024 1.89567 1.00024 3.00024Z"
                                                                            stroke="#697586" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" />
                                                                    </svg>
                                                                </div>&nbsp;&nbsp;
                                                                <div class="dark:text-whitetext">{{ $itemmm->title }}
                                                                </div>
    
                                                            </div>
                                                            <div class="text-whitetext dark:text-graydat">
                                                                <svg class="" width="18" height="18"
                                                                    viewBox="0 0 18 18" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0.999939 13.0002L0.999939 14.0002C0.999939 15.657 2.34308 17.0002 3.99994 17.0002L13.9999 17.0002C15.6568 17.0002 16.9999 15.657 16.9999 14.0002L16.9999 13.0002M12.9999 9.00019L8.99993 13.0002M8.99993 13.0002L4.99994 9.00019M8.99993 13.0002L8.99993 1.00019"
                                                                        stroke="#697586" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
    
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        @endforeach
                                    </div>
    
                                </div>
                                {{-- <div name="coursereading">
                                    <h4 class="titlefiles dark:text-whitetext">Lecturas recomendadas</h4>
                                    <div name="filescontainer " class=" px-4">
                                        <div class="filestitleresource my-3.5">
                                            <a href="#">
                                                <div class="flex justify-between dark:text‑graydat text-whitetext">
                                                    <div class="flex">
                                                        <div class="pt-1">
                                                            <div class="text-whitetext dark:text-graydat">
                                                                <svg class="" width="20" height="20"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M19.0001 10C19.0001 14.9706 14.9707 19 10.0001 19M19.0001 10C19.0001 5.02943 14.9707 1 10.0001 1M19.0001 10H1.00012M10.0001 19C5.02956 19 1.00012 14.9706 1.00012 10M10.0001 19C11.657 19 13.0001 14.9706 13.0001 10C13.0001 5.02943 11.657 1 10.0001 1M10.0001 19C8.34326 19 7.00012 14.9706 7.00012 10C7.00012 5.02943 8.34326 1 10.0001 1M1.00012 10C1.00012 5.02943 5.02956 1 10.0001 1"
                                                                        stroke="#697586" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="ml-2">
                                                            <div class="dark:text-whitetext">Titulo de la lectura</div>
                                                            <div class="text-bgbtnblue">
                                                                https://www.mayugo.net/blog/tema-blog</div>
                                                        </div>
                                                    </div>
                                                    <div class="text-whitetext dark:text-graydat">
                                                        <svg class="" width="18" height="18"
                                                            viewBox="0 0 18 18" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.00018 3H3.00018C1.89561 3 1.00018 3.89543 1.00018 5V15C1.00018 16.1046 1.89561 17 3.00018 17H13.0002C14.1047 17 15.0002 16.1046 15.0002 15V11M11.0002 1H17.0002M17.0002 1V7M17.0002 1L7.00018 11"
                                                                stroke="#697586" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
    
                                                </div>
                                            </a>
                                        </div>
    
                                        <div class="filestitleresource my-3.5">
                                            <a href="#">
                                                <div class="flex justify-between dark:text‑graydat text-whitetext">
                                                    <div class="flex">
                                                        <div class="pt-1">
                                                            <div class="text-whitetext dark:text-graydat">
                                                                <svg class="" width="20" height="20"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M19.0001 10C19.0001 14.9706 14.9707 19 10.0001 19M19.0001 10C19.0001 5.02943 14.9707 1 10.0001 1M19.0001 10H1.00012M10.0001 19C5.02956 19 1.00012 14.9706 1.00012 10M10.0001 19C11.657 19 13.0001 14.9706 13.0001 10C13.0001 5.02943 11.657 1 10.0001 1M10.0001 19C8.34326 19 7.00012 14.9706 7.00012 10C7.00012 5.02943 8.34326 1 10.0001 1M1.00012 10C1.00012 5.02943 5.02956 1 10.0001 1"
                                                                        stroke="#697586" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="ml-2">
                                                            <div class="dark:text-whitetext">Titulo de la lectura</div>
                                                            <div class="text-bgbtnblue">
                                                                https://www.mayugo.net/blog/tema-blog</div>
                                                        </div>
                                                    </div>
                                                    <div class="text-whitetext dark:text-graydat">
                                                        <svg class="" width="18" height="18"
                                                            viewBox="0 0 18 18" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.00018 3H3.00018C1.89561 3 1.00018 3.89543 1.00018 5V15C1.00018 16.1046 1.89561 17 3.00018 17H13.0002C14.1047 17 15.0002 16.1046 15.0002 15V11M11.0002 1H17.0002M17.0002 1V7M17.0002 1L7.00018 11"
                                                                stroke="#697586" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
    
                                                </div>
                                            </a>
                                        </div>
    
                                    </div>
    
                                </div> --}}
                            </div>
                        </div>
                    </div>
    
                    <div class="hidden">
                        <p>{{ $matt }}</p>
                        <a href="" target="_blank" rel="noopener noreferrer">Solicitar Certificado ['falta url']</a>
                        {{-- @livewire('component', ['user' => $user], key($user->id)) --}}
                        <a class="bg bg-red-600" wire:click="$set('modal_probl',true)">QUEJA</a>
    
                    </div>
                </div>
    
                <div class="col-span-6 xl:col-span-2 ">
                    <div class="mb-5 text-left bg-pricingcintawhite px-4 pt-2 pb-4 rounded-md hidden xl:block">
                        <div class="mb-1 textprogressminic">
                            {{$porcentaje_avance}} % COMPLETADO

                        </div>
                        <div class="w-full  rounded-full h-2 bg-bgprogresb mr-4">
                            <div div="" class="bg-green h-2 rounded-full" style="width: {{$porcentaje_avance}}%"></div>
                        </div>
    
                    </div>
                    {{-- <x-ultimo-curso /> --}}
                    <div class=" bg-bgfondopricingwhite dark:bg-pricingcintadark">
                        <div class="grid grid-cols-4">
                            <div id="bcltemario" class="btnnavplayero btnmaterialactivo"
                                onclick="opencl('cltemario','bcltemario')">Temario</div>
                            <div id="bclrecursos" class="btnnavplayero  xl:hidden"
                                onclick="opencl('clrecursos','bclrecursos')">Recursos</div>
                            <div id="bclevaluacion" class="btnnavplayero text-borderconcours" onclick="opencl('clevaluacion','bclevaluacion')">
                                Evaluación</div>
                            <div id="bclcomunidad" class="btnnavplayero text-borderconcours" onclick="opencl('clcomunidad','bclcomunidad')">
                                Comunidad</div>
                            <div id="bclnotas" class="btnnavplayero text-borderconcours" onclick="opencl('clnotas','bclnotas')">Notas</div>
                        </div>                    
                        <div class="p-4">
                            <div class="">
                                <div wire:ignore.self>
                                    <!--INICIO MODULOS-->
                                    <div id="cltemario" class="clitem" style="display: block;">
                                        @foreach ($modulos as $modulo)
                                            <!--test-->
                                            <div class="tcpcontcc mb-10 text-left">
                                                <button class="accordion tcpcardtem">
                                                    <div class="flex justify-between items-center">
                                                        <div class="stepmd stepmd-active">
                                                            <div>
                                                                <div class="circlestt">
                                                                    <div class="dvidd"></div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="titlesdm text-gray-650 dark:text-bordersec">{{ $modulo->nom }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="txtsemoreplyrr">
                                                        </div>
                                                    </div>
                                                </button>
                                                <div class="containertpcard text-left" style="">
                                                    <div class="txtdescriptionsmore p-0">
                                                        <div class="Scriptcontent pt-6 cursor-pointer">
                                                            @foreach ($modulo->cursoMateriales as $material)
                                                                @php
                                                                    $material->ultimoVideo($material->idmaterial) ? ($ultimoVideo = $material->idmaterial) : '';
                                                                    $visto = $material->ultimoVideo($material->idmaterial) ? 'stepmd-active' : '';
                                                                    $canti_videos++;
                                                                @endphp
                                                                @if ($canti_videos == $cant_rec || $canti_videos == $first)
                                                                    @php
                                                                        $matt = $material->descripcion;
                                                                    @endphp
                                                                    <!-- Stepper HTML -->
                                                                    <div class="stepmd ">
                                                                        <div>
                                                                            <div class="circlest">
                                                                                <div class="dvid"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex justify-between">
                                                                            <div class="titlesd dark:text-bordersec text-gray-650">
                                                                                {{ $material->material }} ::
                                                                                {{ $material->idmaterial }}</div>
                                                                            <div>00:23</div>
                                                                        </div>
                                                                    </div>
                                                                @else
                                                                    <div class="stepmd {{ $visto }} "
                                                                        wire:click="showVideo({{ $canti_videos }})">
                                                                        <div>
                                                                            <div class="circlest">
                                                                                <div class="dvid"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex justify-between">
                                                                            <div class="titlesd dark:text-bordersec text-gray-650">
                                                                                {{ $material->material }} ::
                                                                                {{ $material->idmaterial }}</div>
                                                                            <div>00:25</div>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            @endforeach
    
                                                            <!-- End Stepper HTML -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--endtest-->
                                        @endforeach
                                    </div>
    
                                    <!--FIN MODULOS-->
                                </div>
                                <!--CUANDO ES MAS PEQUEÑO LA PANTALLA-->
                                <div id="clrecursos" class="clitem">
                                    <div name="containercourse" class=" text-left">
                                        <div name="containerone">
                                            <div name="coursefiles">
                                                <h4 class="titlefiles">Archivos de la clase</h4>
                                                <div name="filescontainer" class=" px-4">
                                                    {{-- SECTION OF FILES THE COURSE --}}
                                                    @foreach ($archivos as $archivo)
                                                        @foreach ($archivo->cursoArchivos as $itemmm)
                                                            <div class="filestitleresource my-5">
                                                                <a href="{{ $itemmm->archivo }}" target="_blank">
                                                                    <div
                                                                        class="flex justify-between items-center dark:text‑graydat text-whitetext">
                                                                        <div class="flex items-center">
                                                                            <svg class="" width="20"
                                                                                height="16" viewBox="0 0 20 16"
                                                                                fill="currentColor"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M1.00024 3.00024V13.0002C1.00024 14.1048 1.89567 15.0002 3.00024 15.0002H17.0002C18.1048 15.0002 19.0002 14.1048 19.0002 13.0002V5.00024C19.0002 3.89567 18.1048 3.00024 17.0002 3.00024H11.0002L9.00024 1.00024H3.00024C1.89567 1.00024 1.00024 1.89567 1.00024 3.00024Z"
                                                                                    stroke="#697586" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                            </svg>&nbsp;&nbsp;&nbsp;
                                                                            <div>{{ $itemmm->title }}</div>

                                                                        </div>
                                                                        <svg class="" width="18" height="18"
                                                                            viewBox="0 0 18 18" fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M0.999939 13.0002L0.999939 14.0002C0.999939 15.657 2.34308 17.0002 3.99994 17.0002L13.9999 17.0002C15.6568 17.0002 16.9999 15.657 16.9999 14.0002L16.9999 13.0002M12.9999 9.00019L8.99993 13.0002M8.99993 13.0002L4.99994 9.00019M8.99993 13.0002L8.99993 1.00019"
                                                                                stroke="#697586" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    @endforeach
                                                </div>

                                            </div>
                                            {{-- <div name="coursereading">
                                                <h4 class="titlefiles">Lecturas recomendadas</h4>
                                                <div name="filescontainer " class="px-4">
                                                    <div class="filestitleresource my-3.5">
                                                        <a href="#">
                                                            <div
                                                                class="flex justify-between dark:text‑graydat text-whitetext">
                                                                <div class="flex">
                                                                    <div class="pt-1">
                                                                        <svg class="" width="20" height="20"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M19.0001 10C19.0001 14.9706 14.9707 19 10.0001 19M19.0001 10C19.0001 5.02943 14.9707 1 10.0001 1M19.0001 10H1.00012M10.0001 19C5.02956 19 1.00012 14.9706 1.00012 10M10.0001 19C11.657 19 13.0001 14.9706 13.0001 10C13.0001 5.02943 11.657 1 10.0001 1M10.0001 19C8.34326 19 7.00012 14.9706 7.00012 10C7.00012 5.02943 8.34326 1 10.0001 1M1.00012 10C1.00012 5.02943 5.02956 1 10.0001 1"
                                                                                stroke="#697586" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>

                                                                    </div>
                                                                    <div class="ml-2">
                                                                        <div>Titulo de la lectura</div>
                                                                        <div class="text-bgbtnblue">
                                                                            https://www.mayugo.net/blog/tema-blog</div>
                                                                    </div>
                                                                </div>
                                                                <svg class="" width="18" height="18"
                                                                    viewBox="0 0 18 18" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M7.00018 3H3.00018C1.89561 3 1.00018 3.89543 1.00018 5V15C1.00018 16.1046 1.89561 17 3.00018 17H13.0002C14.1047 17 15.0002 16.1046 15.0002 15V11M11.0002 1H17.0002M17.0002 1V7M17.0002 1L7.00018 11"
                                                                        stroke="#697586" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="filestitleresource my-3.5">
                                                        <a href="#">
                                                            <div
                                                                class="flex justify-between dark:text‑graydat text-whitetext">
                                                                <div class="flex">
                                                                    <div class="pt-1">
                                                                        <svg class="" width="20" height="20"
                                                                            viewBox="0 0 20 20" fill="currentColor"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M19.0001 10C19.0001 14.9706 14.9707 19 10.0001 19M19.0001 10C19.0001 5.02943 14.9707 1 10.0001 1M19.0001 10H1.00012M10.0001 19C5.02956 19 1.00012 14.9706 1.00012 10M10.0001 19C11.657 19 13.0001 14.9706 13.0001 10C13.0001 5.02943 11.657 1 10.0001 1M10.0001 19C8.34326 19 7.00012 14.9706 7.00012 10C7.00012 5.02943 8.34326 1 10.0001 1M1.00012 10C1.00012 5.02943 5.02956 1 10.0001 1"
                                                                                stroke="#697586" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" />
                                                                        </svg>

                                                                    </div>
                                                                    <div class="ml-2">
                                                                        <div>Titulo de la lectura</div>
                                                                        <div class="text-bgbtnblue">
                                                                            https://www.mayugo.net/blog/tema-blog</div>
                                                                    </div>
                                                                </div>
                                                                <svg class="" width="18" height="18"
                                                                    viewBox="0 0 18 18" fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M7.00018 3H3.00018C1.89561 3 1.00018 3.89543 1.00018 5V15C1.00018 16.1046 1.89561 17 3.00018 17H13.0002C14.1047 17 15.0002 16.1046 15.0002 15V11M11.0002 1H17.0002M17.0002 1V7M17.0002 1L7.00018 11"
                                                                        stroke="#697586" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>

                                            </div> --}}

                                        </div>


                                    </div>
                                </div>
                                <!--fin recursos-->
                                <div id="clevaluacion" class="clitem border border-borderconcours rounded-lg p-4">
                                    <h3 class="titleactivityplyr text-left">Actividades y Proyectos</h3>
                                    <div class="flex justify-between mt-4">
                                        <div class="text-pricingtextduowhite">
                                            <h2 class="metevaliationply ">500</h2>
                                            <span class="countermetevaluatio">Puntos</span>
                                        </div>
                                        <div>
                                            <h2 class="metevaliationply">2/4</h2>
                                            <span class="countermetevaluatio">Actividades</span>
                                        </div>
                                        <div>
                                            <h2 class="metevaliationply">2/4</h2>
                                            <span class="countermetevaluatio">Actividades</span>
                                        </div>
                                        <div>
                                            <h2 class="metevaliationply">1/2</h2>
                                            <span class="countermetevaluatio">Proyectos</span>
                                        </div>
                                    </div>
                                    <div class="mt-4 text-left">
                                        <div class="w-full  rounded-full h-2 bg-bgprogresb mr-4">
                                            <div div="" class="bg-green h-2 rounded-full" style="width: 45%"></div>
                                        </div>
                                        <div class="miniprogresplyr">50%</div>
                                    </div>
    
    
                                    {{-- SECTION OF TEST AND HOMEWORK --}}
    
                                    <button class="accordion tcpcardtem mt-5">
                                        <div class="flex justify-between items-center">
                                            <div class="tasksubtitleply">Tareas y proyectos</div>
                                            <div class="txtsemoreplyra"></div>
                                        </div>
                                    </button>
                                    <div class="containertpcard">
    
                                        {{-- aqui va el que falta --}}
                                        {{-- ****************** --}}
                                        {{-- aqui va el que falta --}}
    
                                        <!--Zona examen-->
                                        <button class="accordion tcpcardtem mt-5">
                                            <div class="flex justify-between items-center">
                                                <div class="tasksubtitleply">Prácticas</div>
                                                <div class="txtsemoreplyra"></div>
                                            </div>
                                        </button>
                                        <div class="containertpcard my-2">
                                            <div class="tcpcontc my-2">
    
                                                <!--botton link examen-->
                                                <a href="{{ route('examentermino', ['id' => $curs_asign->idasig]) }}"
                                                    target="_blank" rel="noopener noreferrer">
                                                    <div class=" tcpcardex p-4">
                                                        <div
                                                            class="flex justify-between items-center dark:text-graydat text-whitetext">
                                                            <div class="text-left">
    
                                                                <div class="flex items-center ">
                                                                    <div class="tasksubtitleply">Prácticas</div>&nbsp;
                                                                    <div class="tasksubtitlecalif">(100 puntos)</div>
                                                                </div>
                                                            </div>
                                                            <svg class=" " width="18" height="18"
                                                                viewBox="0 0 18 18" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M7.00018 3H3.00018C1.89561 3 1.00018 3.89543 1.00018 5V15C1.00018 16.1046 1.89561 17 3.00018 17H13.0002C14.1047 17 15.0002 16.1046 15.0002 15V11M11.0002 1H17.0002M17.0002 1V7M17.0002 1L7.00018 11"
                                                                    stroke="#697586" stroke-width="2" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                            </svg>
    
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--fin botton link examen-->
                                            </div>
                                        </div>
                                        <!--Fin Zona examen--> 
    
                                    </div>
                                    
                                    <div id="clcomunidad" class=""> 
                                        <!--Star comments-->
                                        @livewire('comment-video', ['curs_asign' => $curs_asign, 'id_material' => $material_id_first])
                                        <!--End comments-->
                                    </div>
    
                                    <div id="clnotas" class="clitem">{{-- SECTION OF NOTAS --}}
                                        {{-- <x-curso-nota asign="{{$curs_asign->idasig}}" /> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div> 
            {{-- MODAL QUEJAS USER OF MATERIAL --}}
            <div class="overflow-y-auto right-0 left-0 top-4 z-50 justify-center items-center ">
                <x-jet-dialog-modal wire:model="modal_probl">
                    <x-slot name="title">
                        <h3>¿Que está mal en este contenido?</h3>
                        <p>
                            Puede ser un problema de edición, algún archivo que falte o alguna propuesta de mejora.
                            Estaremos muy atentos y lo resolveremos todo. Por favor no envíes falsos reportes o
                            duplicados.
                        </p>
                    </x-slot>
                    <x-slot name="content">
                        <textarea name="" id="" cols="80" rows="5" placeholder="QUeja" wire:model.defer="inp_prob"></textarea>
                    </x-slot>
                    <x-slot name="footer">
                        <button type="button" class="bg bg-gray-600" wire:click="reportProblem">ENVIAR</button>
                    </x-slot>
    
                </x-jet-dialog-modal>
            </div>
    
            {{-- MODAL --}}
            <div id="modal" wire:ignore
                class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full">
    
                <div class="relative top-40 mx-auto shadow-lg rounded-md bg-white max-w-4xl h-full md:h-auto"
                    x-data="dataFileDnD()">
    
                    <!-- Modal header -->
                    <div
                        class="flex justify-between items-center bg-green-500 text-white text-xl rounded-t-md px-4 py-2">
                        <h3>Modal header</h3>
                        <button onclick="closeModal()">x</button>
                    </div>
    
                    <!-- Modal body -->
                    <div class="max-h-48 overflow-y-scroll p-4">
    
                        <p class="mt-2 text-sm text-gray-500 ">
                            Add your teammate to your team and start work to get things done
                        </p>
                        <div class="bg-white p7 rounded w-9/12 mx-auto">
                            <div class="relative flex flex-col p-4 text-gray-400 border border-gray-200 rounded">
                                <div x-ref="dnd"
                                    class="relative flex flex-col text-gray-400 border border-gray-200 border-dashed rounded cursor-pointer">
                                    <input accept="*" type="file" multiple wire:model.defer="filesaaa"
                                        class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
                                        @change="addFiles($event)"
                                        @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
                                        @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                        @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                        title="" />
    
                                    <div class="flex flex-col items-center justify-center py-10 text-center">
                                        <svg class="w-6 h-6 mr-1 text-current-50" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        <p class="m-0">Drag your files here or click in this area.</p>
                                    </div>
                                </div>
    
                                <template x-if="files.length > 0">
                                    <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-6"
                                        @drop.prevent="drop($event)"
                                        @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
                                        <template x-for="(_, index) in Array.from({ length: files.length })">
                                            <div class="relative flex flex-col items-center overflow-hidden text-center bg-gray-100 border rounded cursor-move select-none"
                                                style="padding-top: 100%;" @dragstart="dragstart($event)"
                                                @dragend="fileDragging = null"
                                                :class="{ 'border-blue-600': fileDragging == index }" draggable="true"
                                                :data-index="index">
                                                <button
                                                    class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none"
                                                    type="button" @click="remove(index)">
                                                    <svg class="w-4 h-4 text-gray-700"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
    
                                                <template
                                                    x-if="files[index].type.includes('application/') || files[index].type === ''">
                                                    <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                    </svg>
                                                </template>
                                                <template x-if="files[index].type.includes('image/')">
                                                    <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                                                        x-bind:src="loadFile(files[index])" />
                                                </template>
    
    
                                                <div
                                                    class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                                                    <span class="w-full font-bold text-gray-900 truncate"
                                                        x-text="files[index].name">Loading</span>
                                                    <span class="text-xs text-gray-900"
                                                        x-text="humanFileSize(files[index].size)">...</span>
                                                </div>
    
                                                <div class="absolute inset-0 z-40 transition-colors duration-300"
                                                    @dragenter="dragenter($event)" @dragleave="fileDropping = null"
                                                    :class="{
                                                        'bg-blue-200 bg-opacity-80': fileDropping == index &&
                                                            fileDragging != index
                                                    }">
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                </template>
                                <div>
    
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div
                        class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                        <button data-modal-toggle="large-modal" type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
                focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 
                dark:focus:ring-blue-800"
                            x-on:click="validarFiles()">ENVIAR</button>
                        <button data-modal-toggle="large-modal" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 
                focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 
                focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600"
                            onclick="closeModal()">Close</button>
                    </div>
                </div>
            </div>
        @push('js')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"
                    integrity="sha512-yFjZbTYRCJodnuyGlsKamNE/LlEaEAxSUDe5+u61mV8zzqJVFOH7TnULE2/PP/l5vKWpUNnF4VGVkXh3MjgLsg=="
                    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://unpkg.com/create-file-list"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"
                    integrity="sha512-hkvXFLlESjeYENO4CNi69z3A1puvONQV5Uh+G4TUDayZxSLyic5Kba9hhuiNLbHqdnKNMk2PxXKm0v7KDnWkYA=="
                    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.all.min.js"></script>
            <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
            <script type="text/javascript">
                let tarea_id = 0;
    
                function openModal(modalId, tareaId = 0) {
                    modal = document.getElementById(modalId)
                    modal.classList.remove('hidden')
                    tarea_id = tareaId;
                }
    
                function closeModal() {
                    modal = document.getElementById('modal')
                    modal.classList.add('hidden')
                }
    
                function dataFileDnD() {
                    return {
                        files: [],
                        fileDragging: null,
                        fileDropping: null,
                        humanFileSize(size) {
                            const i = Math.floor(Math.log(size) / Math.log(1024));
                            return (
                                (size / Math.pow(1024, i)).toFixed(2) * 1 +
                                " " + ["B", "kB", "MB", "GB", "TB"][i]
                            );
                        },
                        remove(index) {
                            let files = [...this.files];
                            files.splice(index, 1);
    
                            this.files = createFileList(files);
                        },
                        drop(e) {
                            let removed, add;
                            let files = [...this.files];
    
                            removed = files.splice(this.fileDragging, 1);
                            files.splice(this.fileDropping, 0, ...removed);
    
                            this.files = createFileList(files);
    
                            this.fileDropping = null;
                            this.fileDragging = null;
                        },
                        dragenter(e) {
                            let targetElem = e.target.closest("[draggable]");
    
                            this.fileDropping = targetElem.getAttribute("data-index");
                        },
                        dragstart(e) {
                            this.fileDragging = e.target
                                .closest("[draggable]")
                                .getAttribute("data-index");
                            e.dataTransfer.effectAllowed = "move";
                        },
                        loadFile(file) {
                            const preview = document.querySelectorAll(".preview");
                            const blobUrl = URL.createObjectURL(file);
    
                            preview.forEach(elem => {
                                elem.onload = () => {
                                    URL.revokeObjectURL(elem.src); // free memory
                                };
                            });
    
                            return blobUrl;
                        },
                        addFiles(e) {
                            const files = createFileList([...this.files], [...e.target.files]);
                            this.files = files;
                            this.form.formData.files = [...files];
                        },
                        validarFiles() {
                            console.log('this.files');
                            console.log(this.files);
                            if (this.files.length > 0) {
                                Livewire.emit('saveFiles', tarea_id)
                                setTimeout(() => {
                                    console.log('borrando files');
                                    this.files = []
                                }, 2000);
                            } else console.log('vacio files');
                        }
                    };
                }
    
                $('#inp_coment').emojioneArea({
                    pickerPosition: "bottom",
                    tonesStyle: "bullet",
                    recentEmojis: false,
                    search: false,
                    useInternalCDN: true,
                    tones: false,
                    shortcuts: false,
                })
                
    
                ultimoVideo = @json($ultimoVideo);
                material_id_first = @json($material_id_first);
                current = ultimoVideo == 0 ? material_id_first : ultimoVideo
                // urlCurrent(current)
                function urlCurrent(id = 0) {
                    window.history.pushState('', '', `./${id}`);
                }
    
                canti_videos = @json($canti_videos);
    
                window.addEventListener('current', event => {
                    hhhh = 17;
                    console.log('aaaaaaaaauiiiiiiiiiiiiiiiiiiiia');
                    urlCurrent(event.detail.current)
                    console.log(event.detail.video)
                    console.log(event.detail.url_yout)
    
                    if (event.detail.video) {
                        console.log('aquiiiiiiiiiiiiiiiii1111111111111111111');
                        video = `
                                <video  style="--plyr-color-main: #6666FF;width:100%;--plyr-control-icon-size:16px;" id="fmvideo2">
                                    <source src="https://storage.googleapis.com/bucket-mayugo/cursos/${event.detail.video}" type="video/mp4" size="720">
                                </video>
                                `
                        document.querySelector('#video_next').innerHTML = video
                        player.destroy()
                        let player2 = new Plyr(fmvideo2, {
                            invertTime: false,
                            i18n: {
                                rewind: 'Rewind 5s',
                                fastForward: 'Forward 5s',
                                currentTime: 'Current time',
                            },
                            controls: [
                                'play-large', // The large play button in the center
                                'play', // Play/pause playback
                                'rewind', // Rewind by the seek time (default 10 seconds)
                                'fast-forward', // Fast forward by the seek time (default 10 seconds)
                                'progress', // The progress bar and scrubber for playback and buffering
                                'current-time', // The current time of playback
                                'mute', // Toggle mute
                                'volume', // Volume control
                                'captions', // Toggle captions
                                'settings', // Settings menu
                                'pip',
                                'fullscreen',
                            ],
    
                        });
                        vid2 = document.getElementById("fmvideo2");
                        vid2.onended = function() {
                            console.log(parseInt(document.getElementById('valor_next').value));
                            Livewire.emit('showVideo', parseInt(document.getElementById('valor_next').value) + 1)
                        };
    
                    } else {
                        console.log('aquiiiiiiiiiiiiiiiii22222222222');
                        video = `<iframe style="width:100%;height: 100%"
                                src="https://www.youtube.com/embed/${event.detail.url_yout}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                                allowfullscreen
                                allowtransparency
                                allow="autoplay"
                                id="fmvideo2"
                                ></iframe>
                                `
                        document.querySelector('#video_next').innerHTML = video
                    }
                })
    
                let player = new Plyr(fmvideo, {
                    invertTime: false,
                    i18n: {
                        rewind: 'Rewind 5s',
                        fastForward: 'Forward 5s',
                        currentTime: 'Current time',
                    },
                    controls: [
                        'play-large', // The large play button in the center
                        'play', // Play/pause playback
                        'rewind', // Rewind by the seek time (default 10 seconds)
                        'fast-forward', // Fast forward by the seek time (default 10 seconds)
                        'progress', // The progress bar and scrubber for playback and buffering
                        'current-time', // The current time of playback
                        'mute', // Toggle mute
                        'volume', // Volume control
                        'captions', // Toggle captions
                        'settings', // Settings menu
                        'pip',
                        'fullscreen',
                    ]
                });
                var vid = document.getElementById("fmvideo");
                vid.onended = function() {
                    console.log('priemroooooooooooooo');
                    console.log(parseInt(document.getElementById('valor_next').value));
                    Livewire.emit('showVideo', parseInt(document.getElementById('valor_next').value) + 1)
                };
    
                
                function removeHomeWork(id_entrega) {
                    Swal.fire({
                        title: '¿Seguro de eliminar?',
                        text: "¡Perderas este dato!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Si, eliminar!',
                        cancelButtonText: 'Cancelar',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire(
                                'Eliminado!',
                                'Entrega eliminado',
                                'success'
                            )
                            Livewire.emit('removeHomeWork', id_entrega)
                        }
                    })
                }
    
                function validarURL(id_tarea) {
                    Swal.fire({
                            title: "Tu nombre",
                            input: "text",
                            showCancelButton: true,
                            confirmButtonText: "Guardar",
                            cancelButtonText: "Cancelar",
                        })
                        .then(resultado => {
                            if (resultado.value) {
                                let file = resultado.value;
                                Swal.fire(
                                    'Tarea entrega!',
                                    'Pronto tendras tu nota',
                                    'success'
                                )
                                Livewire.emit('saveHomeWork', file, id_tarea)
                            }
                        });
                }
    
                function download(path) {
                    console.log(path);
                    window.open('../../../../download/' + path, '_blank');
                }
            
                function opencl(varcl, varbcl) {
                    var varcl = varcl;
                    var varbcl = varbcl;
                    var collectioncl = document.getElementsByClassName("clitem");
                    var collectionbcl = document.getElementsByClassName("btnnavplayero");
                    for (i = 0; i < collectioncl.length; i++) {
                        collectioncl[i].style.display = 'none';
                        if (collectionbcl[i].classList.contains('btnmaterialactivo')) {
                            collectionbcl[i].classList.remove('btnmaterialactivo');
                        }
                    }
                    document.getElementById(varcl).style.display = 'block';
                    document.getElementById(varbcl).classList.add('btnmaterialactivo');
                }

                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.maxHeight) {
                            panel.style.maxHeight = null;
                        } else {
                            panel.style.maxHeight = panel.scrollHeight + "px";
                        }
                    });
                }
            </script>
        @endpush
    @else
        PLAN VENCIDO O MOSTRAR IMAGEN
    @endif
    
    </div>    
</div>