<div class="mt-3 px-2">
    @if ($tipo == 'certificado')
        @if ($usermismo)
            <button>DESCARGAR CERTIFICADO</button>
        @endif
        <div width="500px" height="300px">
            
            
        </div>
    @elseif($tipo == 'redes')
        <div class="grid grid-cols-4">
            <div class="col-span-4">
                @if (count($redesSociales) > 0 && $tipo == 'redes')
                    Sigue a {{ $nombre }} en :
                @endif
            </div>
            <div>
                @if ($usuario->perfil_face)
                    <a href="{{ $usuario->perfil_face }}" target="_bank"><i class="fab fa-facebook-square"></i></a>
                @endif
            </div>
            <div>
                @if ($usuario->perfil_link)
                    <a href="{{ $usuario->perfil_link }}" target="_bank"><i class="fab fa-linkedin"></i></a>
                @endif
            </div>
            <div>
                @if ($usuario->perfil_inst)
                    <a href="{{ $usuario->perfil_inst }}" target="_bank"><i class="fab fa-instagram-square"></i></a>
                @endif
            </div>
            <div>
                @if ($usuario->perfil_tiktok)
                    <a href="{{ $usuario->perfil_inst }}" target="_bank"><i class="fab fa-tiktok"></i></a>
                @endif
            </div>
        </div>
    @elseif($tipo == 'home')
        @if ($estad == 'Cursos')
            Ahorra mas comprando uno de nuestros planes
        @elseif($estad == 'basico')
            Ahorras el 40% con el plan Premiun, que esperas
        @elseif($estad == 'Premium')
            Tienes el plan Premium
        @elseif($estad == 'Profesional')
            Tienes el plan Profesional
        @endif
    @elseif($tipo == 'all')
        <div class="grid grid-cols-5 dark:bg-gray-500 bg-white-500   rounded-lg pt-2 pb-4">
            <div class="row-span-3   mt-1 ml-1 ">
                <div class="flex-shrink-0 ">
                    <div class="inline-block relative mb-2">
                        <div class="relative w-36 h-36 rounded-full overflow-hidden border-4 border-colborderimg ">
                            <img class="absolute  w-full h-full bg-cover object-fit object-cover"
                                src="{{ asset($foto) }}" alt="Sin foto">
                        </div>
                    </div>
                    @if ($getUser[1])
                        <button class="bg-btnRed  rounded  font-serif pl-3 pr-3 pb-1 pt-1 mt-3">
                            <a href="{{ route('perfil.edit') }}" target="_blank"
                                class="font-serif text-whitetext ">Editar Perfil</a>
                        </button>
                    {{-- @else
                        fin fot --}}
                    @endif
                </div>
            </div>


            <div class="col-span-3 bg mt-3 mx-8 px-2 dark:text-whitetext text-gray-900 font-serif text-justify">
                <div class="font-serif apelativo text-xl"> {{ $usuario->nombres }} {{ $usuario->apellidos }}</div>
                <div class="flex items-center font-serif text-xs mt-1">
                    {{ $usuario->grado->nivel }}
                </div>
                <div class="flex items-center font-serif text-xs mt-1">

                    <i class="fas fa-map-marker-alt"></i>
                    <p class="ml-2"> {{ $usuario->paisU->pais }}</p>
                </div>

                <hr class=" dark:border-white-300 border-gray-600 border-1 mx-0 my-3">
            </div>
            <br>

            <div class="flex w-max mt-2 col-span-3">
                <div class="mx-5  px-4 text-justify">
                    <div class="dark:text-whitetext  text-gray-600 inline  font-serif font-normal text-3xl">
                        {{ count($cursos_asig) }}</div>
                    <i class="fas fa-laptop mx-2  dark:text-whitetext     text-gray-600 inline text-3xl"></i>
                    <h1 class="mt-1 dark:text-whitetext text-xs text-gray-900 font-serif leading-none">Cursos </h1>
                    <h1 class="dark:text-whitetext text-xs text-gray-900 font-serif leading-none">inscritos</h1>
                </div>
                <div class="mx-5  px-4 text-justify">
                    <div class="dark:text-whitetext  text-gray-600 inline  font-serif font-normal text-3xl">
                        {{ $cursosTerminados }}</div>
                    <i class="far fa-check-circle  mx-2  dark:text-whitetext     text-gray-600 inline text-3xl"></i>
                    <h1 class="mt-1 dark:text-whitetext text-xs text-gray-900 font-serif leading-none">Cursos </h1>
                    <h1 class="dark:text-whitetext text-xs text-gray-900 font-serif leading-none">terminados</h1>
                </div>

                <div class="mx-5  px-4 text-justify">
                    <div class="dark:text-whitetext  text-gray-600 inline  font-serif font-normal text-3xl">
                        {{ $cursosCertificados }}</div>
                    <i class="fas fa-certificate mx-2  dark:text-whitetext text-gray-600 inline text-3xl"></i>
                    <h1 class="mt-1 dark:text-whitetext text-xs  text-gray-900 font-serif leading-none">Certificados
                    </h1>
                    <h1 class="dark:text-whitetext text-xs  text-gray-900 font-serif leading-none">obtenidas</h1>
                </div>
            </div>
            <div class="text-justify mx-5  px-4 pt-4 col-span-3 font-serif dark:text-whitetext text-gray-900">
                <div class="flex mt-3">
                    @if (!empty($redesSociales['facebook'])) 
                        <a href="{{ $redesSociales['facebook'] }}" target="_blank" rel="noopener noreferrer">
                            <button title="Facebook"
                                class="mr-5  sticky   w-8  h-8 text-xl rounded-full bg-bluefacebook    ">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                        </a>
                    @endif

                    @if (!empty($redesSociales['linkedin'])) 
                        <a href="{{ $redesSociales['linkedin'] }}" target="_blank" rel="noopener noreferrer">
                            <button title="LinkedIn"
                                class="bg-collinkdn mr-5  w-8 h-8 rounded-full  text-blue-500 border-btnlinkdn  hover:text-white text-xl">
                                <i class="fab fa-linkedin-in"></i>
                            </button>
                        </a>
                    @endif

                    @if (!empty($redesSociales['instagram'])) 
                        <a href="{{ $redesSociales['instagram'] }}" target="_blank" rel="noopener noreferrer">
                            <button
                                class="instagramf mr-5 text-whitetext hover:border-0  w-8 h-8  rounded-full text-xl">
                                <i class="fab fa-instagram"></i>
                            </button>
                        </a>
                    @endif

                    @if (!empty($redesSociales['tiktok'])) 
                        <a href="{{ $redesSociales['tiktok'] }}" target="_blank" rel="noopener noreferrer">
                            <button class="mr-5  w-8 h-8 rounded-full text-whitetext   text-xl bg-black">
                                <i class="fab fa-tiktok"></i>
                            </button>
                        </a>
                    @endif

                </div>
            </div>
        </div>
    @else
        <strong>{{ $nombre }}</strong>
        Foto : {{ $foto }}
        <strong>País : {{ $pais->pais }}</strong>
        <a href="{{ route('users', $iduser) }}" target="_blank">USER</a>
    @endif
</div>
