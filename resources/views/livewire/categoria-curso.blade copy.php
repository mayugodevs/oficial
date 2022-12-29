<div class=" mx-auto sm-px-0 pt-20 containermygo">
    @push('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />   
        <style>
            .couse-center{ 
                justify-items: center;
            }
        </style>
    @endpush
    <br>
    <div class="grid grid-cols-12 text-center ">  
        @include('menu.categoria')
        @php
            // $_SESSION['simbolo'];
        @endphp
        @auth
            <div class="col-span-12 xs:col-span-4 sm:col-span-4 ml:col-span-6 md:col-span-4 lg:col-span-6 xl:col-span-8 xl:px-10 2xl:px-20 ul:px-01 ml:px-1"> 
        @else
            <div class="col-span-12 xs:col-span-8 sm:col-span-8 ml:col-span-9 md:col-span-8 lg:col-span-9 xl:col-span-10 xl:px-10 2xl:px-20 ul:px-01 ml:px-1"> 
        @endauth
            <div>
                {{$categoria_name}}
            </div>
            @auth
                @include('modals.cursos', ['ml' =>3,'lg' =>2,'xl' =>3,'sm' =>1,'md' =>1])        
            @else
                @include('modals.cursos', ['sm' =>1,'md' =>1,'ml' =>4,'lg' =>3,'xl' =>4])        
            @endauth
        </div>        
        @auth
            <div class="mt-3 col-span-12 xs:col-span-4 sm:col-span-4 md:col-span-4 lg:col-span-3 xl:col-span-2 xl:text-sm ml:text-base ml:col-span-3">
                @include('menu.nav-right')
            </div>
        @endauth
    </div>
    @push('js')
        <script>
            function cambiarUrl(tipo, url){
                tipo = tipo ==1 ? 'categoria' : 'perfil';
                URLactual = window.location.pathname;
                let arr = URLactual.split('/'); 
                if (arr[1] == tipo) window.history.replaceState({}, '', `../${tipo}/`+url)
                else window.location.href = `../${tipo}/${url}`;
            }
        </script>
    @endpush
    
</div>