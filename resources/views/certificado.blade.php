@extends('layout')
    <meta name="twitter:site" content="{{$id_certif}}"> 
@section('content')
<br>
<br>
<br>
<br>
<br>
    {{-- <x-usuario iduser="{{$idalum}}" tipo="all" /> --}}
    
            
    <div>
        <img src="{{ route('certi_course', ['id_certif'=> encryption($code_cert)]) }}" alt="" width="600px">
    </div>
    <button>
        <a href="{{ route('dowl_certi', ['id_certif'=>encryption($code_cert), 'type' => 1]) }}">DESCARGAR</a>
    </button>

    <div>
        {{-- ESTO SE MOSTRARIA DE ACUERDO AL USUARIO --}}
        {{-- <strong><x-usuario iduser="{{$idalum}}" tipo="certificado" /></strong> --}}
        Tú también puedes hacerlo...
        ¡Inicia el reto ahora!

        Certifícate en más de 80 cursos
        por solo US$399 al año.
        
        @auth
              d  
            {{-- <x-usuario iduser="{{Auth::user()->idalum}}"  tipo="home" /> --}}
        @else
            <div class="mt-3 sm:mt-0 sm:ml-3">
                <a href="acceso" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
                    Comienza ahora
                </a>
            </div>
        @endauth
    </div>
        
@endsection 