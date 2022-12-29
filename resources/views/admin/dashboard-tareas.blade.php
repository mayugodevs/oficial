@extends('layout')
@section('content') 
    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="flex flex-wrap" id="tabs-id">
        <div class="w-full">
        <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-pink-600" onclick="changeAtiveTab(event,'tab-profile')">
                    Tarea de curso
                </a>
            </li>
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white" onclick="changeAtiveTab(event,'tab-settings')">
                    Tarea de especializaciones
                </a>
            </li>
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white" onclick="changeAtiveTab(event,'tab-options')">
                    Diplomado Proyectos
                </a>
            </li>
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white" onclick="changeAtiveTab(event,'tab-certif')">
                    Certificados
                </a>
            </li>
        </ul>
        <div class=" flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
            <div class="px-4 py-5 flex-auto">
                <div class="tab-content tab-space">
                    <div class="block" id="tab-profile">
                        @livewire('revisar-cursotarea')
                    </div>
                    <div class="hidden" id="tab-settings">
                        @livewire('revisar-diplomadotarea')
                    </div>
                    <div class="hidden" id="tab-options">
                        @livewire('revisar-diplomado-proyecto')
                    </div>
                    <div class="hidden" id="tab-certif">
                        @livewire('revisar-certificados')
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" integrity="sha512-yFjZbTYRCJodnuyGlsKamNE/LlEaEAxSUDe5+u61mV8zzqJVFOH7TnULE2/PP/l5vKWpUNnF4VGVkXh3MjgLsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
            function changeAtiveTab(event,tabID){
            let element = event.target;
            while(element.nodeName !== "A"){
                element = element.parentNode;
            }
            ulElement = element.parentNode.parentNode;
            aElements = ulElement.querySelectorAll("li > a");
            tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
            for(let i = 0 ; i < aElements.length; i++){
                aElements[i].classList.remove("text-white");
                aElements[i].classList.remove("bg-pink-600");
                aElements[i].classList.add("text-pink-600");
                aElements[i].classList.add("bg-white");
                tabContents[i].classList.add("hidden");
                tabContents[i].classList.remove("block");
            }
            element.classList.remove("text-pink-600");
            element.classList.remove("bg-white");
            element.classList.add("text-white");
            element.classList.add("bg-pink-600");
            document.getElementById(tabID).classList.remove("hidden");
            document.getElementById(tabID).classList.add("block");
            }
        </script>
    @endpush
@endsection