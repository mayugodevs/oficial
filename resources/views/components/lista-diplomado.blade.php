<div>
    <ul class="rounded-xl dark:border-gray-900 bg-white-900 dark:bg-gray-900  dark:text-white-300 transform scale-0 group-hover:scale-100 absolute 
        transition duration-150 ease-in-out origin-top min-w-32  mt-2"> 
        <h5 class="bg bg-blue">Cursos Avanzados en Vivo</h5>
        @foreach ($vivo as $viv)
            <li class="bg-blue-200 rounded-sm px-3 py-1 hover:bg-blue-500">{{$viv->titulo}}</li>
        @endforeach
        <h5 class="bg bg-blue">Diplomados</h5>
        @foreach ($diplomado as $diplomad)
            <li class="bg-blue-200 rounded-sm px-3 py-1 hover:bg-blue-500">{{$diplomad->titulo}}</li>
        @endforeach
        <h5 class="bg bg-blue">Talleres en vivo gratis</h5>
        @foreach ($taller as $tall)
            <li class="bg-blue-200 rounded-sm px-3 py-1 hover:bg-blue-500">{{$tall->titulo}}</li>
        @endforeach
    </ul>
</div> 