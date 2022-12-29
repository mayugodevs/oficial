@extends('layout')
@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <div class="grid grid-cols-6 text-center">
        <div>
            
            
        </div>
        <div class="col-span-3">
            Aqui ira las tarjetas
        </div>
        <div>
            @forelse (Cart::content() as $item)
                {{$item->name}}ddd
                @livewire('boton-eliminar', ['cursoId' => $item->id])
                <hr>
            @empty
            vacio
            @endforelse
        </div>
        <div>
            
            
        </div>
    </div>
    

@endsection