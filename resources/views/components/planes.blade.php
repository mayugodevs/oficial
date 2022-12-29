<div class="">
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- component -->
    <div class="min-h-screen items-center cursor-pointer">
        <div class="">

            <div class="text-4xl font-serif text-center dark:text-white-500 text-gray-300">
                <span>Elige un plan y accede a todas las especialidades</span> 
            </div>
            <!-- cards -->
            <div class="my-16 sm:flex flex-wrap justify-center items-center gap-5">


                @foreach ($planes as $plan)
                    <!-- Basic -->
                    @php
                        $color = $plan->plan == 'Básico' ? 'bg-yellow-500' : ($plan->plan == 'Premium' ? 'bg-blue my-1.5' : 'bg-green');
                        $precio = round($plan->plan == 'Básico' ? $plan->precio : ($plan->plan == 'Premium' ? $plan->precio / 12 : 1 + $plan->precio / 12));
                        
                    @endphp
                    <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 {{ $color }} bg-white-500 mt-6 shadow-lg ">

                        <div class="flex items-center justify-center h-16 cursor-pointer ">
                            <button class="focus:outline-none">
                                <span
                                    class="inline-flex px-4 py-1 {{ $color }} rounded-full  leading-5 font-semibold text-white-500 text-xl">
                                    {{ $plan->plan }}
                                </span>
                            </button>
                        </div>

                        <div class="bg-whitetext">
                            <div class="text-center ">
                                <span>
                                    una cuenta a
                                </span>
                            </div>
                            <div class="px-6 py-3 sm:p-3 sm:pb-2">
                                <div class="mt-4 flex justify-center leading-none font-semibold">
                                    <span class="font-serif my-6 text-base">US$ </span> <span
                                        class="text-6xl ">{{ $precio }}</span>
                                    <span class="ml-1 pt-8 text-2xl leading-8 font-medium text-gray-500">
                                        /mes
                                    </span>
                                </div>
                                <div class="flex justify-center ">

                                    <div><span class="font-semibold px-1 ">US${{ $plan->pre_normal }}</span>
                                    </div>
                                    <div><span class="font-semibold px-1">{{ $plan->tipo }}</span>

                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="{{ $plan->url_visa }}"></a>
                            </div>


                            <ul class="text-sm w-full mt-6 mb-6 px-3">
                                <li class="mb-2 flex items-center ">
                                    <div>
                                        <i
                                            class="h-3 w-3 text-xs  text-white-500 rounded-full {{ $color }} fas fa-check"></i>
                                    </div>
                                    Dos cuentas premium para aprender con quien más quieras
                                </li>
                                <li class="mb-2 flex items-center ">
                                    <div>
                                        <i
                                            class="h-3 w-3 text-xs  text-white-500 rounded-full {{ $color }} fas fa-check"></i>
                                    </div>
                                    Acceso ilimitado a todas las especialidades
                                </li>
                                <li class="mb-2 flex items-center ">
                                    <div>
                                        <i
                                            class="h-3 w-3 text-xs  text-white-500 rounded-full {{ $color }} fas fa-check"></i>
                                    </div>
                                    Acceso a todos los cursos nuevos
                                </li>
                                <li class="mb-2 flex items-center ">
                                    <div>
                                        <i
                                            class="h-3 w-3 text-xs  text-white-500 rounded-full {{ $color }} fas fa-check"></i>
                                    </div>
                                    Accesos a todos los MayuTalks | Live Sessions
                                </li>
                                <li class="mb-2 flex items-center ">
                                    <div>
                                        <i
                                            class="h-3 w-3 text-xs  text-white-500 rounded-full {{ $color }} fas fa-check"></i>
                                    </div>
                                    Plantillas en Excel | 4 niveles Six Sigma
                                </li>
                                <li class="mb-2 flex items-center ">
                                    <div>
                                        <i
                                            class="h-3 w-3 text-xs  text-white-500 rounded-full {{ $color }} fas fa-check"></i>
                                    </div>
                                    Recibe tus certificados digitales de los cursos que apruebas
                                </li>
                                <li class="mb-2 flex items-center ">
                                    <div>
                                        <i
                                            class="h-3 w-3 text-xs  text-white-500 rounded-full {{ $color }} fas fa-check"></i>
                                    </div>
                                    Paga con cualquier tipo de tarjeta <a href="asset/img/dinersimg.svg"></a>
                                </li>
                                <li class="mb-2 flex items-center ">
                                    <div>
                                        <i
                                            class="h-3 w-3 text-xs  text-white-500 rounded-full {{ $color }} fas fa-check"></i>
                                    </div>
                                    Paga por PayPal o Wester Union
                                </li>
                                <li class="mb-2 flex items-center ">

                                    <div>
                                        <i
                                            class="h-3 w-3 text-xs  text-white-500 rounded-full {{ $color }} fas fa-check"></i>
                                    </div>
                                    Paga por transferencia bancaria o en efectivo en más de 13 países.
                                </li>
                            </ul>
                            <div class="text-center ">
                                <button type="button"
                                    class=" px-3 py-1 text-sm shadow rounded-lg {{ $color }} text-white-500 focus:outline">
                                    Suscribirse
                                </button>
                            </div>
                            <br>
                        </div>

                    </div>
                @endforeach




                <!-- Popular -->
                {{-- <div
                    class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 bg-indigo-500 text-white mt-6 shadow-lg rounded-lg">
                    <div class="px-6 py-8 sm:p-10 sm:pb-6">
                        <div class="flex justify-center">
                            <span
                                class="inline-flex px-4 py-1 rounded-full text-sm leading-5 font-semibold tracking-wide uppercase">
                                Popular
                            </span>
                        </div>
                        <div class="mt-4 flex justify-center text-6xl leading-none font-extrabold">
                            $30
                            <span class="ml-1 pt-8 text-2xl leading-8 font-medium text-gray-100">
                                /month
                            </span>
                        </div>
                    </div>
                    <p class="text-md mt-4">
                        Plan include :
                    </p>
                    <ul class="text-sm w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="currentColor" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Acceso ilimitado a todos los cursos
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="currentColor" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Acceso a todas las especialidades
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="currentColor" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Acceso a todas los cursos nuevos
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="currentColor" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Acceso a todos los MayuTalks | Live Sessions
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="currentColor" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Plantillas en Excel | 4 niveles Six Sigma
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="currentColor" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Recibe tus certificados digitales de los cursos que apruebas
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="currentColor" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Paga con cualquier tipo de tarjeta 
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="currentColor" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Paga por PayPal o Western Union 
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="currentColor" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Paga por transferencia bancaria o en efectivo en más de 13 países.  
                        </li>
                    </ul>
                    <button type="button"
                        class="w-full px-3 py-3 text-sm shadow rounded-lg text-white bg-indigo-600 hover:bg-indigo-700 transition-colors duration-700 transform">
                        Continue
                    </button>
                </div> --}}

                <!-- premium -->
                {{-- <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 px-4 py-4 bg-white mt-6 shadow-lg rounded-lg">
                    <div class="px-6 py-8 sm:p-10 sm:pb-6">
                        <div class="flex justify-center">
                            <span
                                class="inline-flex px-4 py-1 rounded-full text-sm leading-5 font-semibold tracking-wide uppercase">
                                Premium
                            </span>
                        </div>
                        <div class="mt-4 flex justify-center text-6xl leading-none font-extrabold">
                            $50
                            <span class="ml-1 pt-8 text-2xl leading-8 font-medium text-gray-500">
                                /month
                            </span>
                        </div>
                    </div>
                    <p class="text-md mt-4">
                        Plan include :
                    </p>
                    <ul class="text-sm w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Acceso ilimitado a todos los cursos de una especialidad
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Acceso a todos los MayuTalks | Live Sessions
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Estudia a tu ritmo desde cualquier parte del mundo
                        </li>
                        
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Recibe tus certificados digitales de los cursos que apruebas
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Paga con cualquier tipo de tarjeta 
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Paga por PayPal o Western Union 
                        </li>
                        <li class="mb-3 flex items-center ">
                            <svg class="h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6"
                                stroke="currentColor" fill="green" viewBox="0 0 1792 1792">
                                <path
                                    d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Paga por transferencia bancaria o en efectivo en más de 13 países.  
                        </li>
                    </ul>
                    <button type="button"
                        class="w-full px-3 py-3 text-sm shadow rounded-lg text-indigo-500 hover:text-white bg-white hover:bg-indigo-500 transition-colors duration-700 transform">
                        Continue
                    </button>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="text-center text-white-500 font font-bold text-3xl">
        <span>
            Preguntas Frecuentes</span>
    </div>
    <br>

    <div class="w-4/5 m-auto">
        <div class="px-6 my-2">
            <div class="justify-start">
                <button
                    class="bg-gray-900 w-full  rounded-md py-3 text-2xl text-white-500 font-semibold focus:outline-none"
                    id="play1"> ¿Qué es el plan primiun?</button>
            </div>
            <div class="text-white-500 font-serif hidden px-3 py-3" id="icon1">
                Es una suscripción anual que te permitirá acceder a todos los cursos, especialidades y a los nuevos
                cursos
                de la plataforma. Adicional a ello podrás acceder
                de forma gratuita a los eventos en vivo como: cursos talleres, MayuLives, etc. Todo el servicio es por
                365
                días.
            </div>
        </div>

        <div class="px-6 my-2">
            <div class="justify-start">
                <button
                    class="bg-gray-900 w-full  rounded-md py-3 text-2xl text-white-500 font-semibold focus:outline-none"
                    id="play2"> ¿Qué beneficios tengo al ser primiun?</button>
            </div>
            <div class="text-white-500 font-serif hidden px-3 py-3" id="icon2">
                Con el plan Premium podrás tener acceso a todos los cursos de la plataforma, especialidades, cursos
                nuevos, certificados digitales y en físico de la especialidad que termines, clases talleres en vivo,
                acceso y certificación
                por estar en los eventos en vivo y otros servicios nuevos que salgan en nuestra plataforma.
            </div>
        </div>
        <div class="px-6 my-2">
            <div class="justify-start">
                <button
                    class="bg-gray-900 w-full  rounded-md py-3 text-2xl text-white-500 font-semibold focus:outline-none"
                    id="play3"> ¿Qué planes existen?</button>
            </div>
            <div class="text-white-500 font-serif hidden px-3 py-3" id="icon3">
                Tenemos 3 planes: <br>
                * Plan básico: Te permite acceder a todos los cursos de una sola especialidad por todo un mes. <br>
                *Plan Duo: Permite acceder a dos personas a todos los cursos, especialidades y a los cursos nuevos. <br>
                * Plan Premium: Te permite acceder a todos los cursos, especialidades y a los cursos nuevos.
            </div>
        </div>
        <div class="px-6 my-2">
            <div class="justify-start">
                <button
                    class="bg-gray-900 w-full  rounded-md py-3 text-2xl text-white-500 font-semibold focus:outline-none"
                    id="play4"> ¿Qué es el plan Duo?</button>
            </div>
            <div class="text-white-500 font-serif hidden px-3 py-3" id="icon4">
                Es una suscripción anual para dos personas (usuarios) que te permitirá acceder a todos los cursos, especialidades y a los nuevos cursos de la plataforma. Adicional a ello podrás acceder de 
                forma gratuita a los eventos en vivo como: cursos talleres, MayuLives, etc. Todo el servicio es por 365 días..
            </div>
        </div>
        <div class="px-6 my-2">
            <div class="justify-start">
                <button
                    class="bg-gray-900 w-full  rounded-md py-3 text-2xl text-white-500 font-semibold focus:outline-none"
                    id="play5"> ¿Qué formas de pago existe?</button>
            </div>
            <div class="text-white-500 font-serif hidden px-3 py-3" id="icon5">
                Los pagos que tenemos funcionan para más de 27 países y son por tarjeta (Crédito, débito), PayPal o por transferencia bancaria y 
                depósitos que solo están disponibles en algunos países.
            </div>
        </div>
        <div class="px-6 my-2">
            <div class="justify-start">
                <button
                    class="bg-gray-900 w-full  rounded-md py-3 text-2xl text-white-500 font-semibold focus:outline-none"
                    id="play6"> ¿cómo son los cobros de los planes?</button>
            </div>
            <div class="text-white-500 font-serif hidden px-3 py-3" id="icon6">
                Todos los planes no son de tipo recurrentes, es decir no te cobramos sin tu autorización. Cada pago que hagas solo te dará acceso por tiempo limitado de acuerdo al plan que elijas. Por ejemplo: si hoy compras tu plan básico y de inmediato tendrás acceso por 30 días la especialidad que elijas pasado los 30 días no te haremos ningún cobro, para poder seguir teniendo acceso a los planes debes
                 de comprar nuevamente tu plan. Esto aplica en todos los planes, excepto si compras cursos de forma individual.
            </div>
        </div>
    </div>


    <br>

    <!-- Does this resource worth a follow? -->
    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="Buy me a beer" href="https://www.twitter.com/asad_codes" target="_blank"
                class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full"
                    src="https://www.imore.com/sites/imore.com/files/styles/large/public/field/image/2019/12/twitter-logo.jpg" />
            </a>
        </div>
    </div>
</div>

<script>
    var play1 = document.getElementById('play1');
    var icon1 = document.getElementById('icon1');
    var play2 = document.getElementById('play2');
    var icon2 = document.getElementById('icon2');
    var play3 = document.getElementById('play3');
    var icon3 = document.getElementById('icon3');
    var play1 = document.getElementById('play1');
    var icon1 = document.getElementById('icon1');
    var play1 = document.getElementById('play1');
    var icon1 = document.getElementById('icon1');
    play1.addEventListener('click', function() {
        // icon.classList.remove('hidden');
        icon1.classList.toggle('hidden');
    });

    play2.addEventListener('click', function() {
        // icon.classList.remove('hidden');
        icon2.classList.toggle('hidden');
    });
    play3.addEventListener('click', function() {
        // icon.classList.remove('hidden');
        icon3.classList.toggle('hidden');
    });
    play4.addEventListener('click', function() {
        // icon.classList.remove('hidden');
        icon4.classList.toggle('hidden');
    });
    play5.addEventListener('click', function() {
        // icon.classList.remove('hidden');
        icon5.classList.toggle('hidden');
    });
    play6.addEventListener('click', function() {
        // icon.classList.remove('hidden');
        icon6.classList.toggle('hidden');
    });

</script>
