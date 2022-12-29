<header class="fixed w-full z-50 xl:h-hmenu">
  <nav class="  dark:border-gray-900 contentmygo bg-colheaderwhite dark:bg-colheaderdark h-20 flex items-center sm:px-0 h-hmenu">
      <div class="containermygo mx-auto xl:px-0 2xl:px-0">
        <div class="flex items-center justify-between h-16">
        
          
          <div class="flex items-center">
              <!-- Mobile menu button-->
              <button type="button" onclick="$('#dvoneh').toggleClass( 'hidden' );" class="xl:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
              <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
            <div class=" flex items-center sm:items-stretch">
            <div class="flex-shrink-3 flex items-center">
              <img class="block xl:hidden h-8 w-auto" src="http://www.mayugo.net/asset/img/favicon.png" alt="Workflow">
              <div class="w-8 h-8 hidden xl:block">  
                <img class=" h-8 w-auto" src="http://www.mayugo.net/asset/img/favicon.png" alt="Workflow">
              </div>
              <a id="asillof" href="/" class="text-gray-500 dark:text-white-300 focus:outline-none xl:block px-2 p-1 py-1 font-semibold dark">
                MayuGo
              </a> 
            </div>
            
          </div>
          
          <div id="dvoneh" class="text-lg hidden fixed xl:static xl:flex px-3 py-3 xl:px-0 xl:py-0 w-full h-full xl:w-auto xl:h-auto top-20 left-0 bg-white-900 dark:bg-colheaderdark xl:bg-transparent">
          <div class="sm:hidden">
            @livewire('buscador') 
          </div>
          <div class="sm:ml-7  text-navtextwhite dark:text-white-300  xl:block  font-semibold  hover:text-green  dark:hover:text-green 
            xl:rounded xl:text-sm 2xl:text-base border-b xl:border-b-0 py-2 xl:py-0"><a href="{{ route('talks') }}" >Empresas</a></div>
          
            
                <div id="texthver" class="text-lg relative sm:ml-7  cursor-pointer  outline-none font-semibold focus:outline-none  rounded-sm  flex items-center xl:text-sm 2xl:text-base border-b xl:border-b-0 py-2 xl:py-0">
                  <div class="text-navtextwhite  dark:text-white-300 hover:text-green dark:hover:text-green flex"> Especialidades
                  <span class="ml-2" style="padding-top:3px">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 xl:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                  </svg>
                  <svg
                    class="fill-current h-5 w-5 transform group-hover:-rotate-180
                    transition duration-150 ease-in-out hidden xl:block"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                    />
                  </svg>
                  </span>
                  </div>
                
              <x-lista-categoria tipo="menu" /> 
              {{-- @livewire('list-categoria') --}}
              </div>

            <div class=" sm:ml-7  xl:block text-navtextwhite dark:text-white-300  
              xl:block  font-semibold  hover:text-green   dark:hover:text-green
              hover:border-transparent xl:rounded xl:text-sm 2xl:text-base border-b xl:border-b-0 py-2 xl:py-0 text-base"><a href="{{ route('cursovivo') }}" >
              Modalidad en Vivo</a>
            </div>
            <div class="sm:ml-7  xl:block text-navtextwhite dark:text-white-300   font-semibold  hover:text-green  dark:hover:text-green 
              xl:rounded xl:text-sm 2xl:text-base border-b xl:border-b-0 py-2 xl:py-0">
              <a href="{{ route('planes') }}" >Planes</a>
            </div>
          <div class="xl:hidden">
          <!--  PERFIL MOVIL -->

          @if (!Auth::guest())
          <!--  @livewire('lista-notificacion') -->
            
            {{-- <x-user-menu /> --}}
            {{--  --}}
            <div class=" sm:static sm:inset-auto sm:ml-5 sm:pr-0">
              <div  class="   dropdown-container ">          
                  <button id="btuserv" type="button" onclick="$('#uluser').toggleClass( 'hidden' );" class="text-black dark:text-white focus:outline-none flex text-sm rounded-full" id="user-menu" aria-expanded="false" aria-haspopup="true">
                    <div class="flex items-center">
                      <div class="h-8 w-8">
                      <img class="h-8 w-8 rounded-full" src="{{ asset(Auth::user()->avatar) }}" alt="">
                      </div>
                      <div  class="flex items-center text-base text-gray-600 dark:text-whitetext focus:outline-none px-3 py-2 rounded-md  font-medium w-full"><span>{{Auth::user()->nombres }}</span><span class="ml-2" style="padding-top:1px">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                      </svg>
                  </span> </div>
                    </div>
                  </button> 
                  <ul id="uluser" class="px-3 hidden rounded-xl fixed top-14 left-0 h-full  py-4 right-0 dark:border-gray-900 bg-white-900 dark:bg-colheaderdark dark:text-white-300 transform  transition duration-150 ease-in-out origin-top min-w-32 show">
                    <button class="text-lg flex items-center py-2 xl:hidden" onclick="$('#uluser').toggleClass( 'hidden' );">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                      </svg>&nbsp;Volver al menú
                    
                  </button>            
                      <li class="bg-blue-200 rounded-sm px-1 py-1 my-1 hover:bg-white-300 dark:hover:bg-colheaderdarkhover w-60 cursor-pointer"><a href=" {{ route('perfil.edit') }}">
                        <div class="flex items-center" ><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg> Perfil</div></a>
                        </li>
                      <li class="bg-blue-200 rounded-sm px-1 py-1 my-1 hover:bg-white-300 dark:hover:bg-colheaderdarkhover w-60 cursor-pointer">
                        <x-plan-usuario />
                      </li>
                      <hr class="my-1">
                      <li class="bg-blue-200 rounded-sm px-1 py-1 my-1 hover:bg-white-300 dark:hover:bg-colheaderdarkhover w-60 cursor-pointer">
                        <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <a href="{{route('logout') }}" onclick="event.preventDefault();
                          this.closest('form').submit();" class="cursor-pointer dark:text-white focus:outline-none flex items-center py-0  text-gray-900  dark:text-white-500 hover:text-gray-900 dark:hover:text-white-500 hover:bg-white-300 dark:hover:bg-gray-600 rounded-sm transition-colors duration-200 mb-1">
                            <div class="flex items-center text-red-400">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                              </svg>Cerrar sesión
                            </div>
                          </a>
                        </form>
                      </li>
                      
                  </ul>
              </div>
            </div>
            {{--  --}}
          @else          
            <a href="{{ route('acceso') }}">
              <div  class=" mt-2 xl:ml-3  text-navtextwhite dark:text-white-300 w-full text-center px-2 p-1 py-1 font-semibold  hover:text-green  border  
              hover:bg-blue border-blue hover:border-transparent rounded xl:text-sm 2xl:text-base">Iniciar sesión
              </div>
            </a>
          @endif
          <!--  END PERFILMOVIL -->
          </div>
            


          </div>
          </div>
          <div id="kimsuf" class=" xl:static inset-y-0 right-0 flex items-center pr-4 xl:pr-2  sm:inset-auto sm:ml-7 ">
          <div class="flex items-center">
                <div class="hidden xl:block">
                  @livewire('buscador') 
                </div>
          </div> 

            <!-- Toggle B -->
            <div class="flex items-center justify-center w-full sm:ml-4">
              
              <label for="toggleB" class="flex items-center cursor-pointer">
                <!-- toggle -->
                <div class="relative">
                  <!-- input -->
                  <input type="checkbox" id="toggleB" class="sr-only">
                  <!-- line -->
                  <div class="block bg-changedarkwhite dark:bg-whitetext w-10 h-5 rounded-full"></div>
                  <!-- dot -->
                  <div class="dot absolute  rounded-full transition bg-whitetext dark:bg-toggledark switchdark"></div>
                  <svg class="absolute w-4 h-4 text-dark text-whitetext dark:text-toggledark" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style="top: 2px;right: 3px;"><path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                  </svg>
                  <svg class="absolute w-4 h-4 text-dark text-whitetext dark:text-toggledark" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" style="top: 2px;left: 3px;">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" /></svg>
                </div>
              </label>

            </div>

          <div class="sm:block  cursor-pointer ml-2 xl:ml-0">
              @livewire('carrito')
            </div>
          @if (!Auth::guest())
            {{-- @livewire('lista-notificacion') --}}
            @livewire('lista-mensaje')
            {{-- <x-user-menu /> --}}
            {{--  --}}
            <div class=" absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-5 sm:pr-0">
              <div class="hidden xl:block group dropdown-container xl:relative">          
                  <button  type="button" class="text-black dark:text-white focus:outline-none flex text-sm rounded-full" id="user-menu" aria-expanded="false" aria-haspopup="true">
                    <div class="flex items-center">
                      <div class="h-8 w-8">
                      <img class="h-8 w-8 rounded-full" src="{{ asset(Auth::user()->avatar) }}" alt="">
                      </div>
                      <div  class="text-gray-600 dark:text-whitetext focus:outline-none px-3 py-2 rounded-md text-sm font-medium w-24"><span>{{Auth::user()->nombres }}</span> </div>
                    </div>
                      
                  </button> 
                  <ul  class="shadow-lg  xl:w-wprofiledisplay xl:right-0 rounded-lg  dark:border-gray-900 px-2 bg-colheaderwhite dark:bg-colheaderdark  dark:text-white-300 transform scale-0 group-hover:scale-100 absolute 
                      transition duration-150 ease-in-out origin-top min-w-32 ">
                      <li>
                        <div class="flex   py-4">
                          <div class="h-12 w-12">
                            <img class="h-12 w-12 rounded-full" src="https://www.mayugo.net/admin/images/categoria/desarrollo-profesional.svg" alt="">
                          </div>
                          <div class=" text-gray-600 dark:text-whitetext focus:outline-none px-4 pt-0.25 rounded-md text-sm font-medium ">
                            <div class="nav-username text-textusernav dark:text-whitetext">{{getUser()->nombres}}</div>
                            <div class="nav-membership text-textnavmembership">PLAN FREE</div>
                           </div>
                      </div>
                      </li>
                      <li style="height:41px" class="flex items-center text-optionsnavprofive dark:text-whitetext nav-profileoptions w-full bg-blue-200 rounded-sm px-2 py-1  hover:bg-navhrwhite dark:hover:bg-navhrdark   cursor-pointer"><a href=" {{ route('perfil.edit') }}">
                        <div class="flex items-center" >
                        <div class="flex justify-center" style="width:16px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                        <path d="M8.36808 0.947153C7.53695 0.403697 6.46296 0.403682 5.63181 0.947115L0.226135 4.48153C0.0860724 4.57311 0.0011096 4.72869 -0.000228111 4.89602C-0.00037599 4.91452 0.000500198 4.93289 0.00236284 4.95106C0.000799891 4.96716 -3.73984e-09 4.98348 -3.73984e-09 4.99998L-1.82554e-07 8.99998C-3.01763e-07 9.27613 0.223857 9.49998 0.5 9.49998C0.776142 9.49998 1 9.27613 1 8.99998L1 5.84242L2 6.51932V10.2C2 10.3186 2.04279 10.4341 2.11963 10.5245L2.12039 10.5254L2.12237 10.5277L2.12823 10.5345L2.14752 10.5563C2.16372 10.5743 2.18661 10.5993 2.21603 10.6303C2.27484 10.6922 2.35997 10.7781 2.47026 10.8799C2.69051 11.0832 3.01312 11.3519 3.42899 11.6201C4.25964 12.156 5.47783 12.7 7.0001 12.7C8.52236 12.7 9.74051 12.156 10.5711 11.6201C10.987 11.3518 11.3096 11.0832 11.5298 10.8799C11.6401 10.7781 11.7252 10.6922 11.784 10.6303C11.8134 10.5993 11.8363 10.5743 11.8525 10.5562L11.8718 10.5345L11.8777 10.5277L11.8796 10.5254L11.881 10.5238C11.9578 10.4334 12 10.3186 12 10.2V6.51906L13.78 5.31407C13.9186 5.22027 14.0014 5.10538 13.9997 4.89602C13.9984 4.72869 13.9134 4.57312 13.7734 4.48154L8.36808 0.947153ZM11 7.196V10.0022C10.9601 10.0424 10.9105 10.0906 10.8515 10.1451C10.6655 10.3168 10.3881 10.5482 10.029 10.7799C9.30964 11.244 8.27783 11.7 7.0001 11.7C5.72236 11.7 4.6905 11.244 3.97111 10.7798C3.61196 10.5481 3.33454 10.3168 3.14852 10.1451C3.08951 10.0906 3.0399 10.0423 3 10.0022V7.19622L5.59853 8.95516C6.44497 9.52812 7.55494 9.5281 8.40136 8.95512L11 7.196ZM2.5 10.2L2.11963 10.5245C2.11963 10.5245 2.11904 10.5238 2.5 10.2ZM6.17905 1.78409C6.67774 1.45803 7.32214 1.45804 7.82082 1.78411L12.5972 4.89998L7.84078 8.12702C7.33293 8.47081 6.66695 8.47082 6.15909 8.12704L1.40239 4.90724L6.17905 1.78409Z" fill="#42586E"/>
                        </svg></div> <span class="ml-2.5">Mis cursos</span></div></a>
                      </li>            
                      <li style="height:41px" class="flex items-center text-optionsnavprofive dark:text-whitetext nav-profileoptions w-full bg-blue-200 rounded-sm px-2 py-1  hover:bg-navhrwhite dark:hover:bg-navhrdark   cursor-pointer"><a href=" {{ route('perfil.edit') }}">
                        <div class="flex items-center" >
                          <div class="flex justify-center" style="width:16px">
                          <svg width="10" height="13" viewBox="0 0 10 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8.5 6.5C9.32843 6.5 10 7.17157 10 8V8.5C10 10.4714 8.14049 12.5 5 12.5C1.85951 12.5 0 10.4714 0 8.5V8C0 7.17157 0.671573 6.5 1.5 6.5H8.5ZM8.5 7.5H1.5C1.22386 7.5 1 7.72386 1 8V8.5C1 9.93765 2.43216 11.5 5 11.5C7.56784 11.5 9 9.93765 9 8.5V8C9 7.72386 8.77614 7.5 8.5 7.5ZM5 0C6.51878 0 7.75 1.23122 7.75 2.75C7.75 4.26878 6.51878 5.5 5 5.5C3.48122 5.5 2.25 4.26878 2.25 2.75C2.25 1.23122 3.48122 0 5 0ZM5 1C4.0335 1 3.25 1.7835 3.25 2.75C3.25 3.7165 4.0335 4.5 5 4.5C5.9665 4.5 6.75 3.7165 6.75 2.75C6.75 1.7835 5.9665 1 5 1Z" fill="#42586E"/>
                        </svg></div><span class="ml-2.5">Perfil</span></div></a>
                      </li>
                      <li style="height:41px" class="flex items-center text-optionsnavprofive dark:text-whitetext nav-profileoptions w-full bg-blue-200 rounded-sm px-2 py-1  hover:bg-navhrwhite dark:hover:bg-navhrdark   cursor-pointer"><a href=" {{ route('perfil.edit') }}">
                        <div class="flex items-center" >
                        <div class="flex justify-center" style="width:16px">
                        <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 5.5C4 5.22386 4.22386 5 4.5 5H7.5C7.77614 5 8 5.22386 8 5.5C8 5.77614 7.77614 6 7.5 6H4.5C4.22386 6 4 5.77614 4 5.5ZM4.5 7C4.22386 7 4 7.22386 4 7.5C4 7.77614 4.22386 8 4.5 8H6.5C6.77614 8 7 7.77614 7 7.5C7 7.22386 6.77614 7 6.5 7H4.5ZM1.38797e-05 6.5C1.38797e-05 3.18629 2.68631 0.5 6.00001 0.5C9.31372 0.5 12 3.18629 12 6.5C12 9.81371 9.31372 12.5 6.00001 12.5C4.90639 12.5 3.87989 12.207 2.99618 11.695L0.658128 12.4743C0.482167 12.533 0.288196 12.4894 0.154224 12.3612C0.0202529 12.2329 -0.0317031 12.041 0.0192519 11.8626L0.730859 9.37202C0.264804 8.51862 1.38797e-05 7.53957 1.38797e-05 6.5ZM6.00001 1.5C3.23859 1.5 1.00001 3.73858 1.00001 6.5C1.00001 7.43308 1.25513 8.30506 1.69913 9.05165C1.76952 9.17002 1.78797 9.31217 1.75014 9.44458L1.24119 11.2259L2.89938 10.6732C3.04199 10.6256 3.19843 10.6448 3.32536 10.7253C4.09854 11.2159 5.01533 11.5 6.00001 11.5C8.76144 11.5 11 9.26142 11 6.5C11 3.73858 8.76144 1.5 6.00001 1.5Z" fill="#42586E"/>
                        </svg>
                        </div>
                        <span class="ml-2.5">Mensajes</span></div></a>
                      </li>
                      <li style="height:41px" class="flex items-center text-optionsnavprofive dark:text-whitetext nav-profileoptions w-full bg-blue-200 rounded-sm px-2 py-1  hover:bg-navhrwhite dark:hover:bg-navhrdark   cursor-pointer"><a href=" {{ route('perfil.edit') }}">
                        <div class="flex items-center" >
                          <div class="flex justify-center" style="width:16px">
                          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0 2.5C0 1.39543 0.895431 0.5 2 0.5H14C15.1046 0.5 16 1.39543 16 2.5V5.64584C15.7001 5.37745 15.3641 5.14868 15 4.96776V2.5C15 1.94772 14.5523 1.5 14 1.5H2C1.44772 1.5 1 1.94772 1 2.5V10.5C1 11.0523 1.44772 11.5 2 11.5H9.25777C9.33361 11.6133 9.41446 11.723 9.5 11.8287V12.5H2C0.895431 12.5 0 11.6046 0 10.5V2.5ZM16.5 9C16.5 9.95377 16.1185 10.8184 15.4998 11.4497L15.5 15.5C15.5 15.912 15.0296 16.1472 14.7 15.9L13.3 14.85C13.1222 14.7167 12.8778 14.7167 12.7 14.85L11.3 15.9C10.9704 16.1472 10.5 15.912 10.5 15.5V11.4495C9.88141 10.8182 9.5 9.95365 9.5 9C9.5 7.067 11.067 5.5 13 5.5C14.933 5.5 16.5 7.067 16.5 9ZM13 12.5C12.4629 12.5 11.9549 12.3794 11.5 12.1632V14.25L12.7428 13.5043C12.9011 13.4093 13.0989 13.4093 13.2572 13.5043L14.5 14.25V12.1632C14.0454 12.3792 13.5368 12.5 13 12.5ZM13 11.5C14.3807 11.5 15.5 10.3807 15.5 9C15.5 7.61929 14.3807 6.5 13 6.5C11.6193 6.5 10.5 7.61929 10.5 9C10.5 10.3807 11.6193 11.5 13 11.5ZM3 4C3 3.72386 3.22386 3.5 3.5 3.5H12.5C12.7761 3.5 13 3.72386 13 4C13 4.27614 12.7761 4.5 12.5 4.5H3.5C3.22386 4.5 3 4.27614 3 4ZM3.5 8.5C3.22386 8.5 3 8.72386 3 9C3 9.27614 3.22386 9.5 3.5 9.5H7.5C7.77614 9.5 8 9.27614 8 9C8 8.72386 7.77614 8.5 7.5 8.5H3.5Z" fill="#42586E"/>
                          </svg>
                          </div>
                        <span class="ml-2.5">Mis certificaciones</span></div></a>
                      </li>
                      <!--  <li class="text-optionsnavprofive nav-profileoptions w-full bg-blue-200 rounded-sm px-1 py-1 my-1 hover:bg-white-300 dark:hover:bg-colheaderdarkhover cursor-pointer">
                        <x-plan-usuario />
                      </li> -->
                      <hr class="my-1 border-navhrwhite">
                      <li style="height:41px" class=" px-2 flex items-center text-optionsnavprofive dark:text-whitetext nav-profileoptions bg-blue-200 rounded-sm  py-1 my-1 hover:bg-navhrwhite dark:hover:bg-navhrdark  cursor-pointer">
                        <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <a href="{{route('logout') }}" onclick="event.preventDefault();
                          this.closest('form').submit();" class="cursor-pointer dark:text-white focus:outline-none flex items-center py-0  text-gray-900  dark:text-white-500 hover:text-gray-900 dark:hover:bg-gray-600 rounded-sm transition-colors duration-200">
                            <div class="flex items-center text-red-400">
                            <div class="flex justify-center" style="width:16px">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.5 14.5C9.77614 14.5 10 14.2761 10 14C10 13.7239 9.77614 13.5 9.5 13.5H3C1.89543 13.5 1 12.6046 1 11.5V3.5C1 2.39543 1.89543 1.5 3 1.5H9.5C9.77614 1.5 10 1.27614 10 1C10 0.723858 9.77614 0.5 9.5 0.5H3C1.34315 0.5 0 1.84315 0 3.5V11.5C0 13.1569 1.34315 14.5 3 14.5H9.5ZM10.6464 3.64645C10.8417 3.45118 11.1583 3.45118 11.3536 3.64645L14.8536 7.14645C15.0488 7.34171 15.0488 7.65829 14.8536 7.85355L11.3536 11.3536C11.1583 11.5488 10.8417 11.5488 10.6464 11.3536C10.4512 11.1583 10.4512 10.8417 10.6464 10.6464L13.2929 8H4.5C4.22386 8 4 7.77614 4 7.5C4 7.22386 4.22386 7 4.5 7H13.2929L10.6464 4.35355C10.4512 4.15829 10.4512 3.84171 10.6464 3.64645Z" fill="#FF897A"/>
                            </svg>
                            </div><span class="ml-2.5">Cerrar sesión</span>
                            </div>
                          </a>
                        </form>
                      </li>
                      
                  </ul>
              </div>
            </div>
            {{--  --}}
          @else
          
            <a href="{{ route('acceso') }}"><div  class="2xl:ml-9 xl:ml-3 w-is text-navtextwhite dark:text-textgreenmenu hidden  xl:block px-2 p-1 py-1 font-semibold  hover:text-green  
                rounded">Iniciar sesión</div></a>
              <a href="{{ route('acceso') }}"><div  class="2xl:ml-9 xl:ml-3 xl:text-sm 2xl:text-base text-center text-textbluemenu dark:text-gray-300 hidden  xl:block px-5  py-2 font-semibold  hover:text-white-300 border  
              hover:border-greenhover bg-green border-green hover:border-transparent rounded">Registrarse</div></a>
          @endif
               
        </div>
        
      </div>
      
           
    </nav>

    <style>

/* Toggle B */
input:checked ~ .dot {
  transform: translateX(100%);
}
    </style>
    
    <script>
      document.querySelector(".dropdown-container").addEventListener("click",function(){
        document.querySelector(".dropdown-container ul").classList.toggle("show");
      })
    </script>
    <script>
      // dark mode switch
$("#toggleB").on("change", function() {
  var $html = $("html");
	
});
    </script>

<script>
      var miCheckbox = document.getElementById('toggleB');
      miCheckbox.addEventListener('click', function() {
        let htmlClasses = document.querySelector('html').classList;
        if(localStorage.theme == 'dark') {
          htmlClasses.remove('dark');
          localStorage.removeItem('theme');
        } else {
          htmlClasses.add('dark');
          localStorage.theme = 'dark';
        }
        
        });
    </script>
    <script>
		window.onload=function() {
      var miCheckbox = document.getElementById('toggleB');
			if(localStorage.theme == 'dark') {
        miCheckbox.checked = true;
       }
      else{
        miCheckbox.checked = false;
      }
		}
		</script>
    
    <script>
      window.addEventListener('click', function(e) {
        /*2. Si el div con id clickbox contiene a e. target*/
        if (document.getElementById('texthver').contains(e.target)) {
          if (document.getElementById('dvespec').contains(e.target)) {
            //no hacer naa
          }
          else{
            $('#dvespec').toggleClass( 'hidden' );
          }
          
        } else {
          
          if($('#dvespec').hasClass('hidden')){
            //no hacer nada
          }else{
            $('#dvespec').toggleClass( 'hidden' );
          }
        }
      })
    </script>
    
</header>