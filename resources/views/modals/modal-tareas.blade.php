@forelse ($entregas as $entrega)
    <div>
        @if ($entrega->typefile == 'pdf')
            <div>                                    
                <i class="fa-solid fa-file-pdf"></i>
            </div>
            <div>
                <button wire:click="export('{{$entrega->archivo}}')">{{$entrega->archivo}}</button>
            </div>
        @elseif($entrega->typefile == 'xlsx')
            <div>                                    
                <i class="fa-solid fa-file-excel"></i>
            </div>
            <div>
                <button wire:click="export('{{$entrega->archivo}}')">{{$entrega->archivo}}</button>
            </div>
        @elseif($entrega->typefile == 'docx')
            <div>                                    
                <i class="fa-solid fa-file-word"></i>
            </div>
            <div>
                <a href="{{$entrega->archivo}}" target="_blank" rel="noopener noreferrer">{{$entrega->archivo}}</a>
            </div> 
        @elseif($entrega->typefile == 'URL' || $entrega->typefile == 'url')
            <div>                                    
                <i class="fa-solid fa-link"></i>
            </div>
            <div>
                <a href="{{$entrega->archivo}}" target="_blank" rel="noopener noreferrer">{{$entrega->archivo}}</a>
            </div>
        @else
            <div>                                    
                <i class="fa-solid fa-image"></i>
            </div>
            <div>
                <button wire:click="export('{{$entrega->archivo}}')">{{$entrega->archivo}}</button>
            </div>
        @endif
        Mensaje : 
        <input type="text" value="{{$entrega->feedback}}" onkeypress="validar_grab(event, this.value, {{$entrega->identrega}})" >
    </div>
@empty
    vacio
@endforelse