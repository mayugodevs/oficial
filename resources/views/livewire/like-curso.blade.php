<div class="flex items-center">
    @php
        $estdo = $user ? '' : 'disabled';
    @endphp
    <button {{$estdo}} class="p-0 buttonlike rounded text-gray-600 
        dark:text-whitetext hover:text-green dark:hover:text-green duration-200" wire:click="btnLike()">
        <span class="lnr lnr-heart text-lg {{$style}}"></span>
    </button>
    {{$cant}}
</div>
