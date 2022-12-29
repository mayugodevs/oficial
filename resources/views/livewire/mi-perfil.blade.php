<div class=" mx-auto sm-px-0 pt-20 containermygo">
    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            .zoom-img {
                width: 250px;
                height: 150px;
                -webkit-transition: all .2s ease-in-out;
                -moz-transition: all .2s ease-in-out;
                -o-transition: all .2s ease-in-out;
                -ms-transition: all .2s ease-in-out;
            }

        </style>
    @endpush
    <br>
    <div class="grid grid-cols-12 text-center containermygo mb-8">

        @include('menu.categoria')        

        <div class="col-span-12 xs:col-span-4 sm:col-span-4 md:col-span-4 lg:col-span-6 xl:col-span-8 ml:col-span-6 xl:px-10 ul:px-0 ml:px-0">
            @if ($tipo == 'miperfil')
                <x-usuario iduser="0" tipo="all" />
                @livewire('post-comunidad', ['usuario' => 1, 'id_u' => 0])
            @elseif ($tipo == 'micursos')
                @include('modals.cursos', ['ml' =>3,'lg' =>2,'xl' =>3,'sm' =>1,'md' =>1])
            @elseif ($tipo == 'micertificado')
                @livewire('curso-certificado') 
            @elseif ($tipo == 'comunidad')
                @livewire('post-comunidad', ['usuario' => 0, 'id_u' => 0])
            @elseif ($tipo == 'reciente')
                @include('modals.cursos', ['ml' =>3,'lg' =>2,'xl' =>3,'sm' =>1,'md' =>1])
            @elseif ($tipo == 'mifavorito')
                @include('modals.cursos', ['ml' =>3,'lg' =>2,'xl' =>3,'sm' =>1,'md' =>1])
            @elseif ($tipo == 'midiplomado')
                <div class="grid grid-cols-1 mx-5   sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 text-center">
                    @forelse ($cursos as $curso)
                        <div class="relative py-10 px-4 mx-4 h-auto w-56  bg-white-700 dark:bg-bluedark  rounded-xl sm:py-7 my-3">
                        <div class="px-2 text-white-500 justify-content-start  mx-3">
                                {{$curso}}
                            </div>                           
                        </div>
                    @empty
                        <p>No tienes algun diplomado </p>
                    @endforelse
                </div>                
            @endif
        </div>
        
        <div  class="mt-3 col-span-12 xs:col-span-4 sm:col-span-4 md:col-span-3 lg:col-span-3 xl:col-span-2 2xl:col-span-3">
            @auth
                @include('menu.nav-right')
            @endauth
        </div>
    </div>
    @push('js') 
        <script>
            function cambiarUrl(tipo, url){
                tipo = ( tipo ==1 ) ? 'categoria' : 'perfil';
                URLactual = window.location.pathname;
                let arr = URLactual.split('/'); 
                if (arr[1] == tipo)
                {
                    window.history.replaceState({}, '', `../${tipo}/`+url)
                }
                else
                {
                    window.location.href = `../${tipo}/${url}`;
                }
            }
        </script>
     {{-- @endpush
     @push('js') --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js" integrity="sha512-hkvXFLlESjeYENO4CNi69z3A1puvONQV5Uh+G4TUDayZxSLyic5Kba9hhuiNLbHqdnKNMk2PxXKm0v7KDnWkYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         
        <script>  
            function data(){
                return {
                    isDialogOpen :false,
                    answerU :false,
                    inpRest :false,
                    // contenido : '',
                    resp : '',
                    idd : 0,
                    tipo: 0,
                    cerrar(){
                        this.isDialogOpen = false
                    },
                    abrirModal(){
                        this.isDialogOpen = true;
                        $('#textPost').emojioneArea({
                            pickerPosition: "bottom",
                            tonesStyle: "bullet",
                            recentEmojis: false,
                            search: false,
                            useInternalCDN: true,
                            tones: false,
                            shortcuts: false,                    
                        })
                    },
                    crearPost(){
                        console.log('contenido: '+ document.getElementById("textPost").value);
                        let a = document.getElementById("textPost").value
                        if (a.trim().length > 0) Livewire.emit('createPost',a) 
                        else alertify.error('Título vacio');
                    },
                    crearResp(idPost){
                        console.log(idPost);
                        this.resp = document.getElementById(`respuesta_${idPost}`).textContent.trim();
                        if (this.resp != '') {                       
                            Livewire.emit('guardarResp',this.resp)        
                            document.getElementById(`respuesta_${idPost}`).innerHTML = ''
                            this.resp = ''
                        }else  alertify.error('Respuesta vacia');
                    },
                    deleteP(id,tipo=0){
                        this.idd = id
                        this.tipo = tipo                             
                        alertify.confirm("¿Está seguro de borrar su comentario?",
                            function(){
                                console.log(id);
                                console.log(tipo);
                                Livewire.emit('deletePostt',id,tipo); 
                            },
                            function(){
                                alertify.error('Cancel');
                            }
                        );
                    },

                }
            }
            window.addEventListener('errorr', event => { 
                document.querySelector('.emojionearea-editor').innerHTML = ''
                $("#textPost").data("emojioneArea").setText('')
            })
            window.addEventListener('cambioIdPost', event => {
                idPost = event.detail.id;
            })
            window.addEventListener('confirmDelete', event => {
                alertify.confirm("¿Está seguro de borrar su comentario?",
                    function(){
                        Livewire.emit('deletePostt');
                    },
                    function(){
                        alertify.error('Cancel');
                    }
                );
            })
            
        </script> 

        <script>
            window.onload = function() {
                const collection = document.getElementsByClassName("emojionearea-button-open");
                for (let i = 0; i < collection.length; i++) {
                    collection[i].classList.add("emojiblor");
                }
                const collectionn = document.getElementsByClassName("emojionearea-editor");
                for (let i = 0; i < collection.length; i++) {                
                    collectionn[i].classList.add("dark:text-whitetext");
                    collectionn[i].classList.add("emojionearea-editorr");
                    collectionn[i].classList.remove("emojionearea-editor");
                }
            };
           
        </script>
    @endpush   
</div>
