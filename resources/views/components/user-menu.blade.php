<div class=" absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-3 sm:pr-0">
    <div class="hidden md:block group ">          
        <button type="button" class="text-black dark:text-white focus:outline-none flex text-sm rounded-full" id="user-menu" aria-expanded="false" aria-haspopup="true">
            <img class="h-8 w-8 rounded-full" src="{{ asset(Auth::user()->avatar) }}" alt="">
            <a  class="text-gray-600 dark:text-white focus:outline-none px-3 py-2 rounded-md text-sm font-medium"> {{Auth::user()->nombres }}</a>
        </button> 
        <ul class="rounded-xl dark:border-gray-900 bg-white-900 dark:bg-gray-900  dark:text-white-300 transform scale-0 group-hover:scale-100 absolute 
            transition duration-150 ease-in-out origin-top min-w-32  mt-2">            
            <li class="bg-blue-200 rounded-sm px-3 py-1 hover:bg-blue-500"><a href=" {{ route('perfil.edit') }}">Perfil</a></li>
            <li class="bg-blue-200 rounded-sm px-3 py-1 hover:bg-blue-500">

            </li>
            <li class="bg-blue-200 rounded-sm px-3 py-1 hover:bg-blue-500">Cerrar Session</li>
        </ul>
    </div>
</div>&nbsp;&nbsp;&nbsp;&nbsp;