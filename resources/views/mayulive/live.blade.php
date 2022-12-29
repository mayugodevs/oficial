@extends('layout')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="grid grid-cols-3 gap-4 text-center">
        <div class="col-span-2 bg-red-600">
            AQUI MOSTRAR EL VIDEOS
            <br>
            
            @livewire('live-crear-pregunta',['idLive' => $idLive])
            @if (Auth::user()->tipo == 1)                
                alumno  
            @else 
                admin o docente
                
            @endif
        </div>
        <div class="bg-blue">
            <div class="flex">
                <!--actual component start-->
                <div x-data="setup()">
                    <ul class="flex justify-center items-center my-4">
                        <template x-for="(tab, index) in tabs" :key="index">
                            <li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
                                :class="activeTab===index ? 'text-green-500 border-green-500' : ''" @click="activeTab = index"
                                x-text="tab"></li>
                        </template>
                    </ul>
            
                    <div class="">
                        <div x-show="activeTab===0">
                            @livewire('live-lists-chat')
                            @livewire('live-form-chat')
                        </div>
                        <div x-show="activeTab===1">
                            @livewire('live-show-pregunta',['idlive'=>$idLive])
                        </div>
                        <div x-show="activeTab===2">
                            MOSTRAR ARCHIVOS DEL LIVE
                        </div>
                    </div>
                </div>
                <!--actual component end-->
            </div>
            <br>
            
            
        </div>
    </div>
      
    <script>
        function setup() {
        return {
          activeTab: 0,
          tabs: [
              "Comentarios",
              "Preguntas",
              "Archivos",
          ]
        };
      };
    </script>

@endsection