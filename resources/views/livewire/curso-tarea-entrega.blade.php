<div>
    @php
        $nota =0
    @endphp
    @forelse ($entregas as $entrega)
        
        @if ($entrega->nota != '')
            {{$entrega->nota}}
        @else
            Nota : <input type="text" name="" id="" placeholder="Ingrese nota" wire:keydown.enter="saveNota({{$entrega->identrega}})" wire:model="nota">
        @endif
        <a href="{{$entrega->archivo}}" target="_blank" rel="noopener noreferrer"><i class="far fa-eye"></i></a>
    @empty
        No Subio
    @endforelse
</div>
