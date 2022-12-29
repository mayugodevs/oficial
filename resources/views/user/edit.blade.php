@extends('layout')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    {{$user->avatar}}
    <div class="content mx-auto">
        <div class="grid grid-cols-5 text-center">
            <div></div>
            <div class="bg bg-blue-200">
                @livewire('perfil-edit', ['foto' => $user->avatar])
                <div class="w-full p-8">
                    <div class="m-1">
                        <label class="block text-gray-700 text-sm font-bold " for="passActual">Contraseña actual</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 
                        text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" id="passActual" placeholder="******************">
                    </div>
                    <div class="m-1">
                        <label class="block text-gray-700 text-sm font-bold " for="passNuevo">Contraseña nueva</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 
                        text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" id="passNuevo" placeholder="******************">
                    </div>
                    <div class="m-1">
                        <label class="block text-gray-700 text-sm font-bold " for="passConfir">Confirmar nueva contraseña</label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 
                        text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" id="passConfir" placeholder="******************">
                    </div>
                    
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-2/3">
                        <button class="shadow bg-purple-500 hover:bg-purple-600 focus:shadow-outline focus:outline-none 
                        text-white font-bold py-2 px-4 rounded" type="button" onclick="guardarNewPassword()"> Guardar cambios </button>
                    </div>
                    <div class="md:w-2/3">
                        <button class="shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button"> Cancelar </button>
                    </div>
                </div>
                <div id="alertaPass">

                </div>
            </div>
            <div class="col-span-2 bg bg-blue-300">
                <div class="grid grid-cols-2">
                    <div class="w-full p-8">
                        <div class="m-1">
                            <label class="block text-gray-700 text-sm font-bold " for="name">Nombres</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                            type="text" id="name" placeholder="Mis nombres" value="{{$user->nombres}}">
                        </div>
                        <div class="m-1">
                            <label class="block text-gray-700 text-sm font-bold " for="email">Correo Electronico</label>
                            <input class="disabled shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" id="email" placeholder="Mi email" value="{{$user->email}}">
                        </div>
                       
                   
                        <div class="m-1">
                            <label class="block text-gray-700 text-sm font-bold " for="genero">
                                Género
                            </label>
                            <div class="relative">
                              <select class="block appearance-none w-full bg-gray-200 border border-gray-200 
                              text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white 
                              focus:border-gray-500" id="genero">
                                @php 
                                    $genero = $user->genero;   
                                    $M = $genero == 'M' ? 'selected' : '';
                                    $F = $genero == 'F' ? 'selected' : '';
                                    $O = $genero == 'O' ? 'selected' : '';
                                @endphp
                                <option value="0">Seleccione</option>                               
                                <option value="M" {{$M}} >Masculino</option>
                                <option value="F"  {{$F}}>Femenino</option>
                                <option value="O"  {{$O}}>Otro</option>
                              </select>
                              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                              </div>
                            </div>
                        </div>
                        <div class="m-1">
                            <label class="block text-gray-700 text-sm font-bold " for="cumpl">Cumpleaños</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="date" id="cumpl"  value="{{$user->fecha_nac}}">
                        </div>
                       
                        <div class="m-1">
                            <label class="block text-gray-700 text-sm font-bold " for="face">Perfil de Facebook</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="face" placeholder="Link de perfil faceboook" value="{{$user->perfil_face}}">
                        </div>
                        <div class="m-1">
                            <label class="block text-gray-700 text-sm font-bold " for="linked">Perfil de Linkedin</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="linked"  placeholder="Link de perfil linkedin" value="{{$user->perfil_link}}">
                        </div>
                        
                        
                       
                    </div>
                    <div class="w-full p-8">
                        <div class="m-1">
                            <label class="block text-gray-700 text-sm font-bold " for="last">Apellidos</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="last" placeholder="Mis apellidos" value="{{$user->apellidos}}">
                        </div>
                        <div class="m-1">
                            <label class="block text-gray-700 text-sm font-bold " for="phone">Celular</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="phone" id="phone" placeholder="Mi celular, incluido codigo de país" value="{{$user->telf}}">
                        </div>
                        <div class="m-1">
                            <label class="block text-gray-700 text-sm font-bold " for="pais">
                                País
                            </label>
                            <div class="relative">
                              <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 
                              pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="pais">
                                <option value="0">Seleccione</option>
                                @foreach ($paises as $pais)
                                   {{-- kkk  --}}
                                    @if ($pais->id == $user->pais)
                                        <option value="{{$pais->id}}" selected>{{$pais->pais}}</option>                                        
                                    @else
                                        <option value="{{$pais->id}}">{{$pais->pais}}</option>
                                    @endif
                                @endforeach
                                
                              </select>
                              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                              </div>
                            </div>
                        </div>
                        <div class="m-1">
                            <label class="block text-gray-700 text-sm font-bold " for="user">Nombre de usuario</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="user" placeholder="Mi nombre de usuario" value="{{$user->user}}">
                        </div>
                        <div class="m-1">
                            <label class="block text-gray-700 text-sm font-bold " for="inst">Perfil de Instagram</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="inst" placeholder="Link de perfil instagram" value="{{$user->perfil_inst}}">
                        </div>
                        <div class="m-1">
                            <label class="block text-gray-700 text-sm font-bold " for="tikt">Perfil de Tik Tok</label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" id="tikt" placeholder="Link de perfil tik tok" value="{{$user->perfil_tiktok}}">
                        </div>
                       
                        

                        <div class="m-1">
                            <label class="block text-gray-700 text-sm font-bold " for="estud">  Nivel de estudio</label>
                            <div class="relative">
                                <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 
                                px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="estud">
                                    
                                    <option value="0">Seleccione</option>
                                    @foreach ($grados as $grado)
                                        @if ($grado->id == $user->nivel_edu)                                            
                                            <option value="{{$grado->id}}" selected >{{ $grado->nivel}}</option>                                        
                                        @else                                            
                                            <option value="{{$grado->id}}">{{ $grado->nivel}}</option>
                                        @endif                                        
                                    @endforeach
                                    
                                </select>
                              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                              </div>
                            </div>
                        </div>
                        
                    </div>
                   
                </div>
                <div class="m-1">
                    <label class="block text-gray-700 text-sm font-bold">Educación e intereses</label>
                    <div class="">
                        {{-- FOR PARA RECORER TODOS --}}

                        @foreach ($categorias as $categoria)
                            @if (in_array($categoria->idc, $intereses))
                                @livewire('interest-perfil', ['id_categoria' => $categoria->idc,'nombre_categ' => $categoria->nombre, 'estado' => 2])                                
                            @else
                                @livewire('interest-perfil', ['id_categoria' => $categoria->idc,'nombre_categ' => $categoria->nombre,'estado' => 1])                                
                            @endif                            
                        @endforeach 
                    </div>
                </div>
                <div id="alerta"></div>   
                <div class="md:flex md:items-center p-2">
                    <div class="p-3">
                        <button class="shadow bg-purple-500 hover:bg-purple-600 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 
                        rounded" type="button" onclick="updatePerfil()"> Guardar cambios </button>
                    </div>
                    <div class="">
                        <button class="shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 
                        px-4 rounded" type="button"> Cancelar </button>
                    </div>
                </div>
            </div>
            <div></div>
        </div>
    </div>    
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" referrerpolicy="no-referrer"></script>
<script>
    
    // let datos = ;
    let intereses = @json($intereses).map((int) =>Number(int));
    function interes(idCat){      
        id= `${idCat}`
        if (intereses.includes(idCat)) {
            // quitar el elemento
            if (!document.getElementById(id).checked) {
                let i = intereses.indexOf( idCat )
                if ( i !== -1 ) intereses.splice( i, 1 )
            }
        } else {
            // agregar al arreglo
            if (document.getElementById(id).checked) intereses = [...intereses, idCat]     
        }
        console.log(intereses)
    }

    function updatePerfil(){
        url = 'perfil.update';
        
        const params = {
            nombres: document.getElementById('name').value,
            email: document.getElementById('email').value,
            genero: document.getElementById('genero').value,
            fecha_nac: document.getElementById('cumpl').value,
            perfil_face: document.getElementById('face').value,
            perfil_link: document.getElementById('linked').value,
            apellidos: document.getElementById('last').value,
            telf: document.getElementById('phone').value,
            pais: document.getElementById('pais').value,
            user: document.getElementById('user').value,
            perfil_inst: document.getElementById('inst').value,
            perfil_tiktok: document.getElementById('tikt').value,
            nivel_edu: document.getElementById('estud').value,
            // intereses: intereses,
        };
        axios.put(url,params)
        .then(res => {
            document.getElementById('alerta').innerHTML = `
                <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3" role="alert">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                    <p>¡Tus datos se edito correctamente!</p>
                </div>`;
            setTimeout(() => {
                document.getElementById('alerta').innerHTML = ''
            }, 2000);
        })
        .catch(err => {
            console.error(err); 
        });
    }

    
</script>