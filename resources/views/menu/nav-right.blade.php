
<div class=" bg-white-500 rounded-lg  dark:text-white-500 text-gray-700    dark:bg-gray-500 w-full px-2 py-2">
  <a class="transition-colors duration-200 py-2 relative block hover:text-gray-900 text-gray-700 " href="" >
    <x-ultimo-curso />
  </a>
  <hr class="my-3 py-1  ">
  <a  class="cursor-pointer flex items-center px-1  text-gray-900  dark:text-white-500 hover:text-gray-900 dark:hover:text-white-500 hover:bg-white-300 dark:hover:bg-gray-600 rounded-sm transition-colors duration-200 mb-1"
    wire:click="showNow(0,'miperfil')" onclick="cambiarUrl(0,'miperfil')">
    <div class="mr-3 rounded-md bg-gradient-to-br from-green-400 to-cyan-500">
      <div class="bg-blue py-1 px-2.5 my-2 rounded"><i class="far fa-user-circle text-white-100"></i> </div>
    </div>Ver perfil
  </a>
  <a class="cursor-pointer flex items-center px-1  text-gray-900  dark:text-white-500 hover:text-gray-900 dark:hover:text-white-500 hover:bg-white-300 dark:hover:bg-gray-600 transition-colors duration-200 mb-1"
   wire:click="showNow(0,'micursos')" onclick="cambiarUrl(0,'micursos')">
    <div class="mr-3  rounded-md bg-gradient-to-br from-green-400 to-cyan-500">
      <div class="bg-green_hover py-1 px-2.5 my-1  rounded "><i class="fas fa-book"></i> </div>
    </div>Mis cursos
  </a>
  <a wire:click="showNow(0,'midiplomado')" onclick="cambiarUrl(0,'midiplomado')" class="cursor-pointer flex items-center px-1 text-gray-900  dark:text-white-500 hover:text-gray-900 dark:hover:text-white-500 hover:bg-white-300 dark:hover:bg-gray-600 rounded-sm dark:text-gray focus:outline-none transition-colors duration-200 mb-1">
    <div class="mr-3 rounded-md bg-gradient-to-br from-green-400 to-cyan-500">
     <div class=" bg-yellow-400 m-auto px-2  py-1 rounded my-1"><i class="far fa-gem text-white-500"></i></div>
    </div>Mi diplomado
  </a> 
  <a wire:click="showNow(0,'mifavorito')"  onclick="cambiarUrl(0,'mifavorito')" class="cursor-pointer flex items-center px-1  text-gray-900  dark:text-white-500 hover:text-gray-900 dark:hover:text-white-500 hover:bg-white-300 dark:hover:bg-gray-600 rounded-sm dark:text-gray focus:outline-none transition-colors duration-200 mb-1">
    <div class="mr-3 rounded-md bg-gradient-to-br from-green-400 to-cyan-500">
     <div class=" bg-red-600 m-auto px-2.5  py-1 rounded my-1"><i class="fas fa-heart text-white-500"></i></div>
    </div>Mis favoritos
  </a>
  <a wire:click="showNow(0,'reciente')" onclick="cambiarUrl(0,'reciente')" class="cursor-pointer flex items-center px-1 text-gray-900  dark:text-white-500 hover:text-gray-900 dark:hover:text-white-500 hover:bg-white-300 dark:hover:bg-gray-600 rounded-sm dark:text-white focus:outline-none transition-colors duration-200 mb-1">
    <div class="mr-3 rounded-md bg-gradient-to-br from-green-400 to-cyan-500">
      <div class="bg-blue px-3 py-1 my-1 rounded"> <i class="fas fa-code-branch text-white"></i> </div>
    </div>Cursos recientes
  </a>
  <a wire:click="showNow(0,'micertificado')" onclick="cambiarUrl(0,'micertificado')" class="cursor-pointer flex items-center px-1 text-gray-900  dark:text-white-500 hover:text-gray-900 dark:hover:text-white-500 hover:bg-white-300 dark:hover:bg-gray-600 rounded-sm dark:text-white focus:outline-none transition-colors duration-200 mb-1">
    <div class="mr-3 rounded-md bg-gradient-to-br from-green-400 to-cyan-500" >
      <div class=" bg-green py-1 px-2 my-1 rounded "><i class="fas fa-scroll text-white-500  "></i></div>
    </div>Mis certificados
  </a>
  <a href="https://blog.tailwindcss.com" class="cursor-pointer flex items-center px-1 text-gray-900  dark:text-white-500 hover:text-gray-900 dark:hover:text-white-500 hover:bg-white-300 dark:hover:bg-gray-600 rounded-sm dark:text-white focus:outline-none transition-colors duration-200 mb-1">
    <div class="mr-3 rounded-md bg-gradient-to-br from-green-400 to-cyan-500">
      <div class="bg-yellow-400 py-1 px-2.5 my-1 rounded ">
        <i class="fas fa-angle-double-right text-white-500"></i>
       </div>
    </div>Mi ruta
  </a>
  <a wire:click="showNow(0,'comunidad')" onclick="cambiarUrl(0,'comunidad')" class="cursor-pointer flex items-center px-1 text-gray-900  dark:text-white-500 hover:text-gray-900 dark:hover:text-white-500 hover:bg-white-300 dark:hover:bg-gray-600 rounded-sm dark:text-white focus:outline-none transition-colors duration-200 mb-1">
    <div class="mr-3 rounded-md bg-gradient-to-br from-green-400 to-cyan-500">
        <div class="bg-indigo-600 py-1 px-2 my-1 rounded">
          <i class="fas fa-users text-white-500"></i>
        </div>
    </div>Comunidad
  </a>
  <a href="https://blog.tailwindcss.com" class="cursor-pointer flex items-center px-1 text-gray-900  dark:text-white-500 hover:text-gray-900 dark:hover:text-white-500 hover:bg-white-300 dark:hover:bg-gray-600 rounded-sm dark:text-white focus:outline-none transition-colors duration-200 mb-1">
    <div class="mr-3 rounded-md bg-gradient-to-br from-green-400 to-cyan-500">
      <div class="bg-red-600 px-2.5 py-1 my-1 rounded">
        <i class="fab fa-youtube text-white-500"></i>
      </div>
    </div>Mayulive
  </a>
  <a href="https://blog.tailwindcss.com" class="cursor-pointer flex items-center px-1 text-gray-900  dark:text-white-500 hover:text-gray-900 dark:hover:text-white-500 hover:bg-white-300 dark:hover:bg-gray-600 rounded-sm dark:text-white focus:outline-none transition-colors duration-200 mb-1">
    <div class="mr-3 rounded-md bg-gradient-to-br from-green-400 to-cyan-500">
      <div class="bg-yellow-400 px-3 py-1 my-1 rounded">
        <i class="fas fa-sticky-note text-white-500"></i>
      </div>
    </div>Plantillas
  </a>
  <a href="{{route('perfil.edit')}}" class="cursor-pointer flex items-center px-1 text-gray-900  dark:text-white-500 hover:text-gray-900 dark:hover:text-white-500 hover:bg-white-300 dark:hover:bg-gray-600 rounded-sm dark:text-white focus:outline-none transition-colors duration-200 mb-1">
    <div class="mr-3 rounded-md bg-gradient-to-br from-green-400 to-cyan-500">
      <div class="bg-bluefacebook px-2.5 py-1 my-1 rounded">
        <i class="fas fa-tools text-white-500"></i>
      </div>
    </div>Configuración
  </a>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <a href="{{route('logout') }}" onclick="event.preventDefault();
    this.closest('form').submit();" class="cursor-pointer dark:text-white focus:outline-none flex items-center px-1 py-0  text-gray-900  dark:text-white-500 hover:text-gray-900 dark:hover:text-white-500 hover:bg-white-300 dark:hover:bg-gray-600 rounded-sm transition-colors duration-200 mb-1">
      <div class="mr-3 rounded-md bg-gradient-to-br from-green-400 to-cyan-500">
        <div class="bg-pink-500 px-2.5 py-1 my-1 rounded">
          <i class="fas fa-sign-out-alt text-white-500"></i>
        </div>
      </div>Cerrar sesión
    </a>
  </form>
</div>