<div class="flex justify-between mt-0 w-100">
    <a class="w-full" href="{{ route('curso',$curso) }}">
        <div class="text-xs dark:text-whitetext">Mi progreso</div>
            <x-historial-video cursoid="{{$curso->idcur}}" />
            <button class="items-center flex justify-center w-full bg-transparent p-1 py-1 px-4  hover:bg-purple text-gray-600 font-semibold hover:text-whitetext dark:text-whitetext duration-200 border-2  border-purple hover:border-transparent rounded">
                Ir a clase&nbsp;<span class="lnr lnr-arrow-right font-bold"></span>
            </button>
    </a>
</div>