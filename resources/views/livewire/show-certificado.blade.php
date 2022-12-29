<div class="">
    <div class="flex my-4 w-full gap-x-2">
        <input class="w-full bg-whiteheader dark:bg-black dark:text-white-500 text-gray-500 px-4 py-2 focus:outline-none
            text-sm lg:text-lg rounded-lg placeholder-buscadorfwp dark:placeholder-white-500" 
            type="text" placeholder="Verifica tu certificado con tu ID" wire:model.defer="codigo" >
       {{--  <button type="submit" class="w-full p-2 mx-2 text-xl btn_buscarc bg-green focus:outline-none
            text-whitetext rounded-lg" ><span class="lnr lnr-magnifier">
            </span></button> --}} <button wire:click="comprobarCertificado()" class="focus:outline-none ">
                <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg " class="focus:outline-none text-checkpricingdark dark:text-btncomentresply">
                    <rect y="0.5" width="40" height="40" rx="6" fill="Currentcolor"/>
                    <path class="dark:text-checkpricingdark text-green_especialidad" d="M12.7211 12.5515L28.0756 20.1175C28.3233 20.2395 28.4252 20.5393 28.3031 20.787C28.2544 20.8858 28.1744 20.9658 28.0756 21.0145L12.7214 28.5803C12.4737 28.7023 12.174 28.6005 12.0519 28.3528C11.9986 28.2445 11.9862 28.1205 12.0171 28.0038L13.9858 20.5701L12.0168 13.1279C11.9461 12.8609 12.1053 12.5873 12.3722 12.5166C12.4889 12.4858 12.6128 12.4981 12.7211 12.5515ZM13.2645 13.934L14.8736 20.0161L14.9355 20.0041L15 20H22C22.2761 20 22.5 20.2239 22.5 20.5C22.5 20.7455 22.3231 20.9496 22.0899 20.9919L22 21H15C14.9686 21 14.9379 20.9971 14.9081 20.9916L13.2651 27.1976L26.7234 20.566L13.2645 13.934Z" fill="Currentcolor"/>
                    </svg>
                    
            </button>
    </div>
</div>
