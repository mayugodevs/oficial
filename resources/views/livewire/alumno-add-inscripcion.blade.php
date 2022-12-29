<div>
    <br>
    <br>
    <br>
    <br>
    <br>    
    <div class="text-center">
        @if ($user_esc)
            Info del usuario:
            <div>
                <label for="">Nombres : {{$user_esc->nombres}} {{$user_esc->apellidos}}</label>                
            </div>
            <div>
                <label for="">Email : {{$user_esc->email}}</label>                
            </div>
            <div>
                <label for="">¿Algun Plan?</label>       
                <div>
                    
                    @if ($user_esc->planAlumno)
                        Si, 
                        <div>
                            <label for="">Servicio: {{$user_esc->planAlumno->servicio}}</label>
                        </div>
                        <div>
                            <label for="">Monto: {{$user_esc->planAlumno->monto}}</label>
                        </div>
                        <div>
                            <label for="">Inicio: {{$user_esc->planAlumno->fecha_inicio}}</label>
                        </div>
                        <div>
                            <label for="">Fin: {{$user_esc->planAlumno->fecha_fin}}</label>
                        </div>
                    @else
                        No 
                    @endif
                    <div>
                        Tiene {{count($user_esc->cursoInscripciones)}} cursos
                    </div>
                </div>       
            </div>
        @endif
        
    </div>
    <div class="grid grid-cols-6 gap-4 text-center">

        <div>
            <div>
                <input type="text" wire:model.defer="gmailUser" wire:keydown.enter="searchEmail" placeholder="Buscar Email a inscribir">
            </div>
            <div>
                @forelse ($users as $user)
                    <li  wire:click="agregarUser({{$user->idalum}})"> {{$user->idalum}} -- {{$user->nombres}}  - {{$user->email}}</li>                    
                @empty
                    NO EXISTE CORREO
                @endforelse
            </div>         
        </div>
        <div>
            <div>
                <input type="text" name="" id="" wire:model.defer="nmr_transac" placeholder="nmr_transac">
            </div>
            <div>
                <input type="text" name="" id="" wire:model.defer="type_pay" placeholder="type_pay"> 
            </div>

        </div>
        <div>
            <select class="form-select" wire:model="tipoPlan" {{-- wire:change="cambio" --}}>
                {{-- <option value="0">Seleccione</option> --}}
                <option value="1">Unidad</option>
                <option value="2" selected>Basico</option>
                <option value="3">Profesional</option>
                <option value="4">Premiun</option>
            </select>
            <br>
            <div>
                <input type="number" name="" id="" wire:model="mont_pay" placeholder="mont_pay">  
            </div>
            <br>
            @if ($tipoPlan != 1)
                <div>
                    <input type="date" wire:model.defer="fecha_fin">
                </div>
            @endif
            <br>
            <div>
                <button wire:click="verifInscripcion"> GUARDAR</button>
            </div>
        </div>
        <div class="col-span-3"> 
            @if ($tipoPlan == 1)   
                <div>
                    <input type="text" placeholder="Buscar curso" wire:model="search_course">
                </div>                            
                @foreach ($coursess as $course)
                    <input type="checkbox" wire:model="event", value="{{$course->cursoAsignacion->idasig}}" >
                    {{$course->nom}} <hr>
                @endforeach

                @if ($coursess->count())
                    {{ $coursess->links() }}
                @else
                    vacio
                @endif
                
            @elseif ($tipoPlan == 2 || $tipoPlan == 3)                
                @foreach ($categorys as $key => $category)
                    <input type="checkbox"   wire:model="event", value="{{$category->idc}}"  >
                    {{$category->nombre}} <hr>
                @endforeach

            @elseif($tipoPlan == 4)
                TODOS LOS CURSOS PARA EL ALUMNO {{$gmailUser}}
            @endif
            
        </div>
        
    </div> 
</div>
{{-- si esta free la inscripcion actualizar la fechas si se ´pasa a algun plan --}}