@extends('layout')
@section('content')
<br><br><br><br>
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

    <x-usuario iduser="{{$usuario->idalum}}" tipo="all" />

    @livewire('post-comunidad', ['usuario' => 2, 'id_u' => $usuario->idalum])
    
    @include('modals.cursos', ['ml' =>5,'lg' =>4,'xl' =>4,'sm' =>1,'md' =>1])

    @push('js')
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

@endsection  