<div class="dark:bg-pricingcintadark bg-bgfondopricingwhite    rounded-md">
    <div class="text-center">
        <span class="  dark:text-white-500 text-gray-900 text-xl  font-inter text-center font-bold">Mis
            intereses</span>
    </div>
    <div class="">
        
        <div class="">
            <div class="font-serif font-bold flex flex-wrap gap-3 mt-3">
                @foreach ($categorias as $categoria)
                    @if (in_array($categoria->idc, $intereses))
                        <div class="text-xs font-medium  cursor-pointer flex justify-center  items-center  py-0 px-2 dark:bg-green_especialidad dark:border-green_especialidad  bg-checkpricingdark border border-checkpricingdark rounded-full text-pricingtextduowhite dark:text-green_icono h-8  " style="width:fit-content;height:20px"
                            checked wire:click="cambioInteres({{ $categoria->idc }},true)">
                            <div class="text-xs font-serif max-w-full flex-initial" style="width: max-content;">{{ $categoria->nombre }}</div>
                        </div>
                    @else
                        <div class="text-txtcommentply text-xs font-medium cursor-pointer dark:bg-gray14 dark:border-txtcommentply dark:text-borderconcours flex justify-center items-center py-0 px-2 border-borderconcours rounded-full  border hover:bg-checkpricingdark hover:text-pricingtextduowhite" style="width:fit-content;height:20px"
                            wire:click="cambioInteres({{ $categoria->idc }},false)">
                            <div class="text-xs font-serif  leading-none max-w-full flex-initial" style="width: max-content;">
                                {{ $categoria->nombre }}</div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div> 