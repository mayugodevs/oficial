<div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <style>
        /* Tab content - closed */
        .tab-content {
            max-height: 0;
            -webkit-transition: max-height .35s;
            -o-transition: max-height .35s;
            transition: max-height .35s;
        }

        /* :checked - resize to full height */
        .tab input:checked~.tab-content {
            max-height: 100vh;
        }

        /* Label formatting when open */
        .tab input:checked+label {
            /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
            font-size: 1.25rem;
            /*.text-xl*/
            padding: 1.25rem;
            /*.p-5*/
            border-left-width: 2px;
            /*.border-l-2*/
            border-color: #6574cd;
            /*.border-indigo*/
            background-color: #f8fafc;
            /*.bg-gray-100 */
            color: #6574cd;
            /*.text-indigo*/
        }

        /* Icon */
        .tab label::after {
            float: right;
            right: 0;
            top: 0;
            display: block;
            width: 1.5em;
            height: 1.5em;
            line-height: 1.5;
            font-size: 1.25rem;
            text-align: center;
            -webkit-transition: all .35s;
            -o-transition: all .35s;
            transition: all .35s;
        }

        /* Icon formatting - closed */
        .tab input[type=checkbox]+label::after {
            content: "+";
            font-weight: bold;
            /*.font-bold*/
            border-width: 1px;
            /*.border*/
            border-radius: 9999px;
            /*.rounded-full */
            border-color: #b8c2cc;
            /*.border-grey*/
        }

        .tab input[type=radio]+label::after {
            content: "\25BE";
            font-weight: bold;
            /*.font-bold*/
            border-width: 1px;
            /*.border*/
            border-radius: 9999px;
            /*.rounded-full */
            border-color: #b8c2cc;
            /*.border-grey*/
        }

        /* Icon formatting - open */
        .tab input[type=checkbox]:checked+label::after {
            transform: rotate(315deg);
            background-color: #6574cd;
            /*.bg-indigo*/
            color: #f8fafc;
            /*.text-grey-lightest*/
        }

        .tab input[type=radio]:checked+label::after {
            transform: rotateX(180deg);
            background-color: #6574cd;
            /*.bg-indigo*/
            color: #f8fafc;
            /*.text-grey-lightest*/
        }

    </style>
    <div class="w-full md:w-3/5 mx-auto p-8" x-data="modal_link()">
        <div >
            <button x-on:click="abrirModal()">
                Crear Link
            </button>
             
        </div>
        <div>
            <select name="" id="" wire:model="tipo">
                <option value="0">10 ultimos</option>
                <option value="1">Todos</option>
            </select>
        </div>
        <div class="shadow-md">
            @foreach ($links_generados as $key => $links_generado)
                <div class="tab w-full overflow-hidden border-t">
                    <input class="absolute opacity-0" id="tab-single-{{ $key }}" type="radio" name="tabs2">
                    <label class="block p-5 leading-normal cursor-pointer" for="tab-single-{{ $key }}">{{ $links_generado->titulo }} 
                        <span x-on:click="open_usermod()" wire:click="user_pago({{$links_generado->id}})">{{$links_generado->maxveces == $links_generado->pagos_recibidos->count() ? 'Exitoso' : 'Pendiente '.$links_generado->pagos_recibidos->count().'/'.$links_generado->maxveces }}</span>
                    </label>
                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                        <div class="grid grid-cols-2">
                            <div>
                                <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">Id Link: {{$links_generado->id}}</li>
                                    <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Nombre del producto: {{$links_generado->titulo}}</li>
                                    <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Concepto: {{$links_generado->concepto}}</li>
                                    <li class="w-full px-4 py-2 rounded-b-lg">Precio normal: {{$links_generado->precio_normal}}</li>
                                    <li class="w-full px-4 py-2 rounded-b-lg">Lo que va a pagar:: {{$links_generado->precio_venta}}</li>
                                    <li class="w-full px-4 py-2 rounded-b-lg">URL: jdjdjdjd</li>
                                </ul>    
                            </div>
                            <div>                                
                                <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                    <li class="w-full px-4 py-2 rounded-b-lg">Generado por: {{$links_generado->generado->nombres}}</li>
                                    <li class="w-full px-4 py-2 rounded-b-lg">Fecha de caducidad: {{$links_generado->fecha_expiracion}}</li>
                                    <li class="w-full px-4 py-2 rounded-b-lg">Cantidad de pagos: {{$links_generado->maxveces}}</li>
                                    <li class="w-full px-4 py-2 rounded-b-lg">Estado: {{$links_generado->maxveces == $links_generado->pagos_recibidos->count() ? 'Exitoso' : 'Pendiente '.$links_generado->pagos_recibidos->count().'/'.$links_generado->maxveces }}</li>
                                </ul>    
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- esto de abajo le da el ancho del collap, una revisada pe amigos de FRONTED --}}
            {{-- <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0" id="tab-single-6" type="radio" name="tabs2">
                <label class="block p-5 leading-normal cursor-pointer" for="tab-single-6">ddd</label>
                <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                   <p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
                </div>
             </div> --}}
             @if ($tipo)
                @if ($links_generados->count())
                    {{ $links_generados->links() }}
                @else
                    No se encontro para
                @endif
             @endif
        </div>

        {{-- MDOALES --}}

        <div  class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" x-show="modal" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modal }">
            <div class="modal relative w-auto my-6 mx-auto max-w-6xl bg bg-gray-400" 
                {{-- @click.away="modal = false" --}}>
                                  
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    
                    <!-- Aqui empieza el modal -->
                    <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                        <h3 class="text-3xl font-semibold">
                            Para crear un nuevo link de pago, complete la siguiente información.
                        </h3> 
                        <button
                            class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                            <span x-on:click="cerrarModal()"
                                class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                x
                            </span>
                        </button>
                    </div>
                    <div class="relative p-6 flex-auto   overflow-y-auto dark:bg-gray-500 bg-white-700" style="overflow:hidden">  
                        <div class="grid grid-cols-2">
                            <div>
                                <div>
                                    <label for="">Título</label>
                                    <input type="text" wire:model.defer="titulo" placeholder="Título">
                                </div>
                                <div>
                                    <label for="">Concepto</label>
                                    <input type="text" wire:model.defer="concepto" placeholder="Concepto">
                                </div>
                                <div>
                                    <label for="">Precio normal</label>
                                    <input type="text" wire:model.defer="prec_normal" placeholder="Precio normal">
                                </div>
                                <div>
                                    <label for="">Precio de venta</label>
                                    <input type="text" wire:model.defer="prec_venta" placeholder="Precio de venta">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <input type="checkbox" name="" id="" >
                                    <label for="">Opciones Avanzadas</label>
                                </div>
                                <div>
                                    <label for="">Fecha de expiración</label>
                                    <input type="date" name="" id="" wire:model.defer="fecha">
                                </div>
                                <div>
                                    <label for="">Numero de veces que se usará el link</label>
                                    <input type="number" name="" id="" wire:model.defer="max_veces">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                        <button
                            class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" x-on:click="cerrarModal()" >
                            Cancelar
                        </button>
                        <button class="text-blue-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" x-on:click="crear_link()">
                            Crear
                        </button>
                    </div>
                    <!-- Aqui empieza el modal -->
                </div>
            </div>
        </div>
        <div  class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" x-show="modal_user" :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modal_user }">
            <div class="modal relative w-auto my-6 mx-auto max-w-6xl bg bg-gray-400" 
                {{-- @click.away="modal = false" --}}>
                                  
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                    
                    <!-- Aqui empieza el modal -->
                    <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                        <h3 class="text-3xl font-semibold">
                            Detalles de pago del alumno
                        </h3> 
                        <button
                            class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                            <span x-on:click="close_usermod()"
                                class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                x
                            </span>
                        </button>
                    </div>
                    <div class="relative p-6 flex-auto   overflow-y-auto dark:bg-gray-500 bg-white-700" style="overflow:hidden">  
                        @forelse ($pays as $key => $pays)
                        <label for="">Pago N° {{$key+1}}</label>
                        <div>
                            <div>
                                <label for="">Monto : {{$pays->monto }}</label>
                            </div>                                
                            <div>
                                <label for="">Fecha  : {{$pays->fecha->translatedFormat('d M Y H:i:s')  }}</label>
                            </div>                                
                            <div>
                                <label for="">Tipo  : {{$pays->tipo  }}</label>
                            </div>                                
                            <div>
                                <label for="">Alumno  : {{$pays->alumno->nombres   }} Id:  {{$pays->alumno->idalum}}</label>
                            </div>                                
                            <div>
                                <label for="">Email  : {{$pays->alumno->email   }} </label>
                            </div>                                
                        </div>
                        @empty
                            No hay pagos
                        @endforelse                             
                    </div>
                    <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                        <button
                            class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" x-on:click="close_usermod()" >
                            Cerrar
                        </button>
                    </div>
                    <!-- Aqui empieza el modal -->
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script> 
            //para el accordion 
            var myRadios = document.getElementsByName('tabs2');
            var setCheck;
            var x = 0;
            for (x = 0; x < myRadios.length; x++) {
                myRadios[x].onclick = function() {
                    if (setCheck != this) {
                        setCheck = this;
                    } else {
                        this.checked = false;
                        setCheck = null;
                    }
                };
            }
            function modal_link(){
                return {
                    modal : false,
                    modal_user : false,
                    abrirModal(){
                        this.modal = true; 
                        console.log('aaaaaaaaa');
                    },
                    cerrarModal(){
                        this.modal = false;
                    },
                    crear_link(){
                        Livewire.emit('crear_link');
                        setTimeout(() => {
                            this.cerrarModal(); 
                        }, 1000);
                    },
                    open_usermod(){
                        this.modal_user = true; 
                    },
                    close_usermod(){
                        this.modal_user = false;
                    },
                }
            }
            
        </script>
    @endpush

    
</div>
