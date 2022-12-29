<div>
   @if ($premiun)
        @if($premiun->idplan == 3){{-- Profesional --}}
            <p class="bg bg-blue">{{$premiun->diasRestantes($premiun->fecha_fin) }} </p>
        @elseif($premiun->idplan == 1) {{-- Basico --}}
            <p class="bg bg-red-600">{{$premiun->diasRestantes($premiun->fecha_fin) }} </p>
        @elseif($premiun->idplan == 2 ) {{-- Premium --}}
            <p class="bg bg-yellow-600">{{$premiun->diasRestantes($premiun->fecha_fin) }} </p>            
        @endif   
   @else
       No tiene plan
   @endif 
</div>