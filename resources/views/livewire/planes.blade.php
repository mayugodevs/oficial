<div class="bg-white-100 dark:bg-gray14  xl:pt-0 flex items-center flex-col">
    <style>
        .contentmygo {
            display: none !important;
        }

        .footeracceso {
            display: none !important;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine-ie11.js"
        integrity="sha512-6m6AtgVSg7JzStQBuIpqoVuGPVSAK5Sp/ti6ySu6AjRDa1pX8mIl1TwP9QmKXU+4Mhq/73SzOk6mbNvyj9MPzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <div class="bg-pricingtextduowhite w-full py-12">
        <div class="containermygo mx-auto ml:px-40 xl:px-40 lg:px-20 md:px-20 px-4 ">
            <div class="text-white-100 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter text-center lg:pb-6 pb-4">
                ¡La educación es una inversión para toda la vida! Dale la vuelta a tu futuro profesional hoy.
            </div>
            <div class="text-bgprogresb text-lg font-medium font-inter text-center">
                Accede a +95 cursos de ingeniería y gestión industrial.
            </div>


            <div class=" flex flex-col mx-auto text-center" style="width: 225px">
                <div x-data="{ selected: true }" class="w-full bg-white h-auto m-auto shadow flex flex-col   rounded-xl">

                    {{--  <h1 class="text-indigo-600 font-bold">AlpineJS Animated Toggle</h1> --}}

                    <div class="relative w-full mt-4 rounded-md border-2 border-white-700  p-1 bg-green_especialidad"
                        style="height: 56px;">
                        <div class="relative w-full h-full flex items-center">
                            <div @click="selected=!selected"
                                class="w-full flex justify-center text-greenintense focus:outline-none font-inter text-lg font-medium cursor-pointer">
                                <button id="izquierda" class="focus:outline-none">Individual</button>
                            </div>
                            <div @click="selected=!selected"
                                class="w-full flex justify-center text-greenintense focus:outline-none font-inter text-lg font-medium cursor-pointer">
                                <button id="derecha" class="focus:outline-none">Bussines</button>
                            </div>
                        </div>


                        <span
                            :class="{
                                'left-1/2 -ml-1 text-pricingtextduowhite bg-white-100 font-inter text-lg font-medium ':
                                    !
                                    selected,
                                'left-1 font-inter text-lg font-medium  bg-white-100 text-pricingtextduowhite ': selected
                            }"
                            x-text="selected ? 'Individual' : 'Bussines'"
                            class="bg-white shadow text-sm flex items-center justify-center w-1/2 rounded  transition-all duration-150 ease-linear top-1 absolute"
                            style="height: 44px;"></span>
                    </div>
                </div>


            </div>

        </div>



    </div>
    <div class="containermygo">
        {{-- <div
            class="text-4xl xsm:col-span-12 pt-28 xl:pt-6 xl:col-span-12 mt-14 xl:pt-28 font-serif text-center font-bold bg-pricingtextduowhite mb-8">
            <span class=" text-gray-500 dark:text-white-100 ">Invierte en tu futuro y despega profesionalmente</span>
        </div> --}}
        <!-- cards -->
        {{--  <div class="flex justify-center xl:hidden px-3 md:p-0">
            <div class="grid grid-cols-3 gap-5 w-cardoptionspremium">
                <div id="bclbasico" class="btnnavplayero dark:text-borderconcours" onclick="opencl('basico','bclbasico')">
                    Básico</div>
                <div id="bclplanduo" class="btnnavplayero dark:text-borderconcours  btnmaterialactivo"
                    onclick="opencl('planduo','bclplanduo')">Plan Dúo</div>
                <div id="bclpremium" class="btnnavplayero dark:text-borderconcours"
                    onclick="opencl('premium','bclpremium')">Premium</div>

            </div>
        </div>

        <div class="p-3  md:p-6 bg-bgfondopricingwhite dark:bg-gray14  flex items-start justify-center">
            @foreach ($planes as $plan)
                @php
                    $precio = round($plan->plan == 'Básico' ? $plan->precio : ($plan->plan == 'Premium' ? $plan->precio / 12 : 1 + $plan->precio / 12));
                @endphp
                @if ($plan->plan == 'Básico')
                    <a id="basico" href="#" class="clitemm hidden xl:block">
                        <div
                            class="p-6 rounded-2xl  bg-white-100 dark:bg-pricingdark text-changedarkwhite dark:text-white-100  md:w-96 group hover:shadow-2xl">
                            <div class="flex justify-between items-center  ">
                                <div class="ml-0 font-serif font-bold pricingtitle ">
                                    {{ $plan->plan }}
                                </div>
                                <div class="flex items-center  text-gray-600 dark:text-pricingdarkstudents">
                                    <div>
                                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 0C4.79086 0 3 1.79086 3 4C3 6.20914 4.79086 8 7 8C9.20914 8 11 6.20914 11 4C11 1.79086 9.20914 0 7 0ZM4 4C4 2.34315 5.34315 1 7 1C8.65685 1 10 2.34315 10 4C10 5.65685 8.65685 7 7 7C5.34315 7 4 5.65685 4 4ZM2.00873 9C0.903151 9 0 9.88687 0 11C0 12.6912 0.83281 13.9663 2.13499 14.7966C3.41697 15.614 5.14526 16 7 16C8.85474 16 10.583 15.614 11.865 14.7966C13.1672 13.9663 14 12.6912 14 11C14 9.89557 13.1045 9.00001 12 9.00001L2.00873 9ZM1 11C1 10.4467 1.44786 10 2.00873 10L12 10C12.5522 10 13 10.4478 13 11C13 12.3088 12.3777 13.2837 11.3274 13.9534C10.2568 14.636 8.73511 15 7 15C5.26489 15 3.74318 14.636 2.67262 13.9534C1.62226 13.2837 1 12.3088 1 11Z"
                                                fill="currentColor" />
                                        </svg>
                                    </div>&nbsp;
                                    {{ count($plan->planAlumnos) }} estudiantes
                                </div>
                            </div>
                            <div class="flex flex-row  justify-center text-center items-center font-serif mt-6">
                                <p class="text-sm font-bold">{{ $simbolo }}</p>
                                <p class="pricingpremium font-bold"> {{ $precio * $cambio }} </p>
                                <p class="text-sm font-bold items-bottom ">{{ $cod_iso }} </p>
                            </div>
                            <div class="justify-center  text-center items-center">
                                <div class="radio-premium-item">
                                    <input type="radio" id="radiobmensual" class="form-radio h-5 w-5 text-green"
                                        checked>
                                    <label for="radioanual" class="font-medium dark:text-borderconcours">Mensual</label>
                                </div>
                            </div>
                            <div class="justify-center text-center items-center pt-4">
                                <button wire:click="addPlan({{ $plan->id }})"
                                    class="outline-nonee h-11 items-center font-serif flex justify-center w-full bg-transparent p-1 py-1 px-4  hover:bg-green text-texttalks font-bold hover:text-whitetext dark:hover:text-lighttextpricing dark:text-lightgreenpricing duration-200 border-2  border-texttalks dark:border-lightgreenpricing dark:hover:border-lightgreenpricing hover:border-green dark:hover:bg-lightgreenpricing hover:border-transparent rounded">
                                    Suscribirse
                                </button>
                            </div>
                            
                            <div
                                class="px-3 flex flex-col gap-2 mt-12 font-serif text-sm  text-gray-300 dark:text-pricingtextdark">
                                @foreach ($plan->plan_detalles as $plan_detalle)
                                    <div class="flex items-center">
                                        <div class="text-green dark:text-checkpricingdark ">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM11.3584 5.64645C11.1849 5.47288 10.9154 5.4536 10.7206 5.58859L10.6513 5.64645L7 9.298L5.35355 7.65131L5.28431 7.59346C5.08944 7.45846 4.82001 7.47775 4.64645 7.65131C4.47288 7.82488 4.4536 8.09431 4.58859 8.28917L4.64645 8.35842L6.64645 10.3584L6.71569 10.4163C6.8862 10.5344 7.1138 10.5344 7.28431 10.4163L7.35355 10.3584L11.3584 6.35355L11.4163 6.28431C11.5513 6.08944 11.532 5.82001 11.3584 5.64645Z"
                                                    fill="Currentcolor" />
                                            </svg>
                                        </div>&nbsp;&nbsp;&nbsp;
                                        <div class="pricingbenefits">
                                            <p class=""> {{ $plan_detalle->detalle }} </p>
                                        </div>
                                    </div>
                                @endforeach
                         
                            </div>
                        </div>
                    </a>
                @elseif($plan->plan == 'Plan Duo')
                    <div id="planduo"
                        class="clitemm xl:block md:mx-8 rounded-2xl shadow-lg bg-white-100 dark:bg-pricingdark text-changedarkwhite dark:text-white-100  md:w-96 group hover:shadow-2xl ">
                        <div class="p-6 pb-2">
                            <div class="flex  justify-between items-center">
                                <div class=" font-semibold">
                                    <p
                                        class="ml-0 font-serif font-bold pricingtitle text-pricingtextduowhite dark:text-green ">
                                        {{ $plan->plan }}
                                    </p>
                                </div>
                                <div class="flex items-center  text-gray-600 dark:text-pricingdarkstudents">
                                    <div>
                                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 0C4.79086 0 3 1.79086 3 4C3 6.20914 4.79086 8 7 8C9.20914 8 11 6.20914 11 4C11 1.79086 9.20914 0 7 0ZM4 4C4 2.34315 5.34315 1 7 1C8.65685 1 10 2.34315 10 4C10 5.65685 8.65685 7 7 7C5.34315 7 4 5.65685 4 4ZM2.00873 9C0.903151 9 0 9.88687 0 11C0 12.6912 0.83281 13.9663 2.13499 14.7966C3.41697 15.614 5.14526 16 7 16C8.85474 16 10.583 15.614 11.865 14.7966C13.1672 13.9663 14 12.6912 14 11C14 9.89557 13.1045 9.00001 12 9.00001L2.00873 9ZM1 11C1 10.4467 1.44786 10 2.00873 10L12 10C12.5522 10 13 10.4478 13 11C13 12.3088 12.3777 13.2837 11.3274 13.9534C10.2568 14.636 8.73511 15 7 15C5.26489 15 3.74318 14.636 2.67262 13.9534C1.62226 13.2837 1 12.3088 1 11Z"
                                                fill="currentColor" />
                                        </svg>
                                    </div>&nbsp;
                                    {{ count($plan->planAlumnos) }} estudiantes
                                </div>
                            </div>
                            <div class="flex flex-col items-center mt-7">
                                <p
                                    class="rounded-md  py-1.5 px-2.5 text-white-100 dark:text-gray-300
                                bg-bgduoahorrowhite dark:bg-bgduoahorrodark text-sm font-serif font-medium etiquetadsctoricing">
                                    Ahorra hasta 92%
                                </p>
                            </div>
                            <div class="flex flex-row mt-3 justify-center gap-2 text-center items-center font-serif">
                                <p class="text-sm font-bold">{{ $simbolo }}</p>
                                <p class="pricingpremium font-bold"> {{ $precio * $cambio }} </p>
                                <p class="text-sm font-bold items-bottom "> {{ $cod_iso }} </p>
                            </div>
                            <div class="justify-center  text-center items-center ">
                                <div class="radio-premium-item">
                                    <input type="radio" id="radioanual" name="radioduo"
                                        class="form-radio h-5 w-5 text-green" checked>
                                    <label for="radioanual" class="font-medium dark:text-borderconcours">Anual</label>
                                </div>
                                <div class="inline-flex items-center ml-4">
                                    <div class="radio-premium-item">
                                        <input type="radio" id="radiomensual" name="radioduo"
                                            class="form-radio h-5 w-5 text-green">
                                        <label for="radiomensual"
                                            class="font-medium dark:text-borderconcours">Mensual</label>
                                    </div>

                                </div>
                            </div>
                            <div class="justify-center text-center items-center p-4 px-0">
                                <button wire:click="addPlan({{ $plan->id }})"
                                    class="outline-nonee h-11 items-center font-serif flex justify-center w-full bg-transparent p-1 py-1 px-4  bg-lightgreenpricing font-bold text-lighttextpricing dark:text-lighttextpricing duration-200 border-2  border-lightgreenpricing hover:border-transparent rounded">
                                    Suscribirse
                                </button>
                            </div>
                        </div>
                        <div
                            class="p-6 flex  justify-center text-xs bg-pricingcintawhite dark:bg-pricingcintadark font-serif ">
                            <div>
                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.5 0C0.671573 0 0 0.671573 0 1.5V14.5C0 15.3284 0.671573 16 1.5 16H8.5C9.32843 16 10 15.3284 10 14.5V13C10 12.7238 9.77599 12.4998 9.49985 12.4998C9.08657 12.4998 8.82263 12.398 8.64373 12.2639C8.46125 12.127 8.32203 11.9223 8.21988 11.6414C8.00592 11.053 7.99993 10.2742 7.99985 9.49973C7.99984 9.36714 7.94716 9.23999 7.8534 9.14623L7.5666 8.85933C7.45782 8.75044 7.3251 8.61759 6.35356 7.64618C5.88667 7.17934 5.75014 6.86588 5.72435 6.69089C5.70385 6.55183 5.74583 6.45651 5.84563 6.361C6.06033 6.15555 6.21264 6.01659 6.38518 5.97463C6.48906 5.94937 6.72441 5.93132 7.14647 6.35333L10.1464 9.35331C10.3417 9.54857 10.6583 9.54857 10.8536 9.35331C11.0488 9.15805 11.0488 8.84146 10.8536 8.6462L10 7.79263V4.70711L12.5607 7.26777C12.842 7.54907 13 7.9306 13 8.32843V15.5C13 15.7761 13.2239 16 13.5 16C13.7761 16 14 15.7761 14 15.5V8.32843C14 7.66539 13.7366 7.0295 13.2678 6.56066L10 3.29289V1.5C10 0.671573 9.32843 0 8.5 0H1.5ZM9 3.49951C9 3.49984 9 3.49918 9 3.49951V6.79264L7.85353 5.64618C7.27551 5.06823 6.7003 4.86887 6.14891 5.00294C6.03719 5.03011 5.9327 5.07032 5.83605 5.11804C5.57067 5.04119 5.29015 5 5 5C3.34315 5 2 6.34315 2 8C2 9.65685 3.34315 11 5 11C5.77173 11 6.47541 10.7086 7.00699 10.2298C7.02414 10.8077 7.0824 11.4395 7.28009 11.9831C7.42795 12.3897 7.66371 12.7788 8.04369 13.0638L8.05012 13.0686C7.44149 13.2597 7 13.8283 7 14.5V15H3V14.5C3 13.6716 2.32843 13 1.5 13H1V3H1.5C2.32843 3 3 2.32843 3 1.5V1H7V1.5C7 2.32843 7.67157 3 8.5 3H9V3.49951ZM8.99985 14.4998L8.99993 14.5086C8.99534 14.7808 8.77327 15 8.5 15H8V14.5C8 14.2239 8.22386 14 8.5 14H8.99985V14.4998ZM3 8C3 6.93775 3.82814 6.06891 4.87401 6.0039C4.75028 6.23482 4.68743 6.51371 4.73503 6.8367C4.80612 7.31904 5.11334 7.82022 5.6465 8.35332L6.55324 9.26004C6.18654 9.71151 5.62696 10 5 10C3.89543 10 3 9.10457 3 8ZM2 1V1.5C2 1.77614 1.77614 2 1.5 2H1V1.5C1 1.22386 1.22386 1 1.5 1H2ZM1 14H1.5C1.77614 14 2 14.2239 2 14.5V15H1.5C1.22386 15 1 14.7761 1 14.5V14ZM9 2H8.5C8.22386 2 8 1.77614 8 1.5V1H8.5C8.77614 1 9 1.22386 9 1.5V2Z"
                                        fill="Currentcolor" />
                                </svg>
                            </div>&nbsp;&nbsp;&nbsp;
                            <div class="font-medium labelpricingcuotas etiquetadsctoricing fdsbn">
                                Paga a 4 cuotas sin intereses de s/ 150 PEN con targeta débito o crédito. <a
                                    href="#" class="text-bgduoahorrowhite dark:text-bgduoahorrodark">Conoce
                                    más.</a>
                            </div>
                        </div>
                        <div class="p-6 pt-0 px-7">
                            <div
                                class="flex flex-col gap-2 mt-7 font-serif text-sm  text-gray-300 dark:text-pricingtextdark">
                                @foreach ($plan->plan_detalles as $plan_detalle)
                                    <div class="flex items-center">
                                        <div class="text-green dark:text-checkpricingdark ">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM11.3584 5.64645C11.1849 5.47288 10.9154 5.4536 10.7206 5.58859L10.6513 5.64645L7 9.298L5.35355 7.65131L5.28431 7.59346C5.08944 7.45846 4.82001 7.47775 4.64645 7.65131C4.47288 7.82488 4.4536 8.09431 4.58859 8.28917L4.64645 8.35842L6.64645 10.3584L6.71569 10.4163C6.8862 10.5344 7.1138 10.5344 7.28431 10.4163L7.35355 10.3584L11.3584 6.35355L11.4163 6.28431C11.5513 6.08944 11.532 5.82001 11.3584 5.64645Z"
                                                    fill="Currentcolor" />
                                            </svg>
                                        </div>&nbsp;&nbsp;&nbsp;
                                        <div class="pricingbenefits">
                                            <p class=""> {{ $plan_detalle->detalle }} </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @elseif($plan->plan == 'Premium')
                    <div id="premium"
                        class="clitemm hidden xl:block rounded-2xl shadow-lg bg-white-100 dark:bg-pricingdark text-changedarkwhite dark:text-white-100  md:w-96 group hover:shadow-2xl">
                        <div class="p-6 ">
                            <div class="flex justify-between items-center">
                                <div class="pricingtitle font-semibold">
                                    <p class="ml-0 font-serif font-bold  text-gray-300 dark:text-gray-100 ">
                                        {{ $plan->plan }}
                                    </p>
                                </div>
                                <div class="flex items-center  text-gray-600 dark:text-pricingdarkstudents">
                                    <div>
                                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 0C4.79086 0 3 1.79086 3 4C3 6.20914 4.79086 8 7 8C9.20914 8 11 6.20914 11 4C11 1.79086 9.20914 0 7 0ZM4 4C4 2.34315 5.34315 1 7 1C8.65685 1 10 2.34315 10 4C10 5.65685 8.65685 7 7 7C5.34315 7 4 5.65685 4 4ZM2.00873 9C0.903151 9 0 9.88687 0 11C0 12.6912 0.83281 13.9663 2.13499 14.7966C3.41697 15.614 5.14526 16 7 16C8.85474 16 10.583 15.614 11.865 14.7966C13.1672 13.9663 14 12.6912 14 11C14 9.89557 13.1045 9.00001 12 9.00001L2.00873 9ZM1 11C1 10.4467 1.44786 10 2.00873 10L12 10C12.5522 10 13 10.4478 13 11C13 12.3088 12.3777 13.2837 11.3274 13.9534C10.2568 14.636 8.73511 15 7 15C5.26489 15 3.74318 14.636 2.67262 13.9534C1.62226 13.2837 1 12.3088 1 11Z"
                                                fill="currentColor" />
                                        </svg>
                                    </div>&nbsp;
                                    {{ count($plan->planAlumnos) }} estudiantes
                                </div>
                            </div>
                            <div class="flex flex-row  justify-center text-center items-center font-serif mt-6">
                                <p class="text-sm font-bold">{{ $simbolo }}</p>
                                <p class="pricingpremium font-bold"> {{ $precio * $cambio }} </p>
                                <p class="text-sm font-bold items-bottom ">{{ $cod_iso }} </p>
                            </div>
                            <div class="justify-center  text-center items-center ">
                                <div class="radio-premium-item">
                                    <input type="radio" id="radiopanual" name="radiopremium"
                                        class="form-radio h-5 w-5 text-green" checked>
                                    <label for="radiopanual"
                                        class="font-medium dark:text-borderconcours">Anual</label>
                                </div>
                                <div class="inline-flex items-center ml-4">
                                    <div class="radio-premium-item">
                                        <input type="radio" id="radiopmensual" name="radiopremium"
                                            class="form-radio h-5 w-5 text-green">
                                        <label for="radiopmensual"
                                            class="font-medium dark:text-borderconcours">Mensual</label>
                                    </div>

                                </div>
                            </div>
                            <div class="justify-center text-center items-center p-4">
                                <button wire:click="addPlan({{ $plan->id }})"
                                    class="outline-nonee h-11 items-center font-serif flex justify-center w-full bg-transparent p-1 py-1 px-4  hover:bg-green text-texttalks font-bold hover:text-whitetext dark:hover:text-lighttextpricing dark:text-lightgreenpricing duration-200 border-2  border-texttalks dark:border-lightgreenpricing dark:hover:border-lightgreenpricing hover:border-green dark:hover:bg-lightgreenpricing hover:border-transparent rounded">
                                    Suscribirse
                                </button>
                            </div>
                        </div>
                        <div
                            class="p-6 flex  justify-center text-xs bg-pricingcintawhite dark:bg-pricingcintadark font-serif ">
                            <div class="fdsbn">
                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.5 0C0.671573 0 0 0.671573 0 1.5V14.5C0 15.3284 0.671573 16 1.5 16H8.5C9.32843 16 10 15.3284 10 14.5V13C10 12.7238 9.77599 12.4998 9.49985 12.4998C9.08657 12.4998 8.82263 12.398 8.64373 12.2639C8.46125 12.127 8.32203 11.9223 8.21988 11.6414C8.00592 11.053 7.99993 10.2742 7.99985 9.49973C7.99984 9.36714 7.94716 9.23999 7.8534 9.14623L7.5666 8.85933C7.45782 8.75044 7.3251 8.61759 6.35356 7.64618C5.88667 7.17934 5.75014 6.86588 5.72435 6.69089C5.70385 6.55183 5.74583 6.45651 5.84563 6.361C6.06033 6.15555 6.21264 6.01659 6.38518 5.97463C6.48906 5.94937 6.72441 5.93132 7.14647 6.35333L10.1464 9.35331C10.3417 9.54857 10.6583 9.54857 10.8536 9.35331C11.0488 9.15805 11.0488 8.84146 10.8536 8.6462L10 7.79263V4.70711L12.5607 7.26777C12.842 7.54907 13 7.9306 13 8.32843V15.5C13 15.7761 13.2239 16 13.5 16C13.7761 16 14 15.7761 14 15.5V8.32843C14 7.66539 13.7366 7.0295 13.2678 6.56066L10 3.29289V1.5C10 0.671573 9.32843 0 8.5 0H1.5ZM9 3.49951C9 3.49984 9 3.49918 9 3.49951V6.79264L7.85353 5.64618C7.27551 5.06823 6.7003 4.86887 6.14891 5.00294C6.03719 5.03011 5.9327 5.07032 5.83605 5.11804C5.57067 5.04119 5.29015 5 5 5C3.34315 5 2 6.34315 2 8C2 9.65685 3.34315 11 5 11C5.77173 11 6.47541 10.7086 7.00699 10.2298C7.02414 10.8077 7.0824 11.4395 7.28009 11.9831C7.42795 12.3897 7.66371 12.7788 8.04369 13.0638L8.05012 13.0686C7.44149 13.2597 7 13.8283 7 14.5V15H3V14.5C3 13.6716 2.32843 13 1.5 13H1V3H1.5C2.32843 3 3 2.32843 3 1.5V1H7V1.5C7 2.32843 7.67157 3 8.5 3H9V3.49951ZM8.99985 14.4998L8.99993 14.5086C8.99534 14.7808 8.77327 15 8.5 15H8V14.5C8 14.2239 8.22386 14 8.5 14H8.99985V14.4998ZM3 8C3 6.93775 3.82814 6.06891 4.87401 6.0039C4.75028 6.23482 4.68743 6.51371 4.73503 6.8367C4.80612 7.31904 5.11334 7.82022 5.6465 8.35332L6.55324 9.26004C6.18654 9.71151 5.62696 10 5 10C3.89543 10 3 9.10457 3 8ZM2 1V1.5C2 1.77614 1.77614 2 1.5 2H1V1.5C1 1.22386 1.22386 1 1.5 1H2ZM1 14H1.5C1.77614 14 2 14.2239 2 14.5V15H1.5C1.22386 15 1 14.7761 1 14.5V14ZM9 2H8.5C8.22386 2 8 1.77614 8 1.5V1H8.5C8.77614 1 9 1.22386 9 1.5V2Z"
                                        fill="Currentcolor" />
                                </svg>
                            </div>&nbsp;&nbsp;&nbsp;
                            <div class="font-medium labelpricingcuotas etiquetadsctoricing fdsbn">
                                Paga a 4 cuotas sin intereses de s/ 150 PEN con targeta débito o crédito. <a
                                    href="#" class="dark:text-bgduoahorrodark">Conoce más.</a>
                            </div>
                        </div>
                        <div class="p-6 pt-0 px-7">
                            <div
                                class="flex flex-col gap-2 mt-7 font-serif text-sm  text-gray-300 dark:text-pricingtextdark">
                                @foreach ($plan->plan_detalles as $plan_detalle)
                                    <div class="flex items-center">
                                        <div class="text-green dark:text-checkpricingdark ">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM11.3584 5.64645C11.1849 5.47288 10.9154 5.4536 10.7206 5.58859L10.6513 5.64645L7 9.298L5.35355 7.65131L5.28431 7.59346C5.08944 7.45846 4.82001 7.47775 4.64645 7.65131C4.47288 7.82488 4.4536 8.09431 4.58859 8.28917L4.64645 8.35842L6.64645 10.3584L6.71569 10.4163C6.8862 10.5344 7.1138 10.5344 7.28431 10.4163L7.35355 10.3584L11.3584 6.35355L11.4163 6.28431C11.5513 6.08944 11.532 5.82001 11.3584 5.64645Z"
                                                    fill="Currentcolor" />
                                            </svg>
                                        </div>&nbsp;&nbsp;&nbsp;
                                        <div class="pricingbenefits">
                                            <p class=""> {{ $plan_detalle->detalle }} </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div> --}}


        <div id="izquimero">
            <div class="lg:flex hidden pt-12 ">


                <div class="pt-4 lg:flex-row flex-col  gap-y-6  bg-white-100 dark:bg-gray14  relative">

                    <div class="grid grid-cols-4 ">
                        <div>

                        </div>
                        @foreach ($planes as $plan)
                            @php
                                $precio = round($plan->plan == 'Básico' ? $plan->precio : ($plan->plan == 'Premium' ? $plan->precio / 12 : 1 + $plan->precio / 12));
                            @endphp



                            @if ($plan->plan == 'Básico')
                                <a id="cp1" href="#" onclick="cambiar('cp1')"
                                    class="card block border border-green z-50 rounded-xl">
                                    <div style="margin-bottom: 525px;"
                                        class="p-6 rounded-2xl bg-white-100 dark:bg-gray14  text-changedarkwhite dark:text-white-100   group ">
                                        <div class="mx-auto">
                                            <svg class="mx-auto" width="46" height="46" viewBox="0 0 46 46"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect class="text-green_icono dark:text-btncomentresply" x="3"
                                                    y="3" width="40" height="40" rx="20"
                                                    fill="currentColor" />
                                                <path
                                                    d="M14.6667 25.0833L22.7019 29.1009C22.8113 29.1556 22.8659 29.1829 22.9232 29.1937C22.974 29.2032 23.0261 29.2032 23.0769 29.1937C23.1342 29.1829 23.1889 29.1556 23.2982 29.1009L31.3334 25.0833M14.6667 20.9167L22.7019 16.8991C22.8113 16.8444 22.8659 16.8171 22.9232 16.8063C22.974 16.7968 23.0261 16.7968 23.0769 16.8063C23.1342 16.8171 23.1889 16.8444 23.2982 16.8991L31.3334 20.9167L23.2982 24.9343C23.1889 24.9889 23.1342 25.0163 23.0769 25.027C23.0261 25.0365 22.974 25.0365 22.9232 25.027C22.8659 25.0163 22.8113 24.9889 22.7019 24.9343L14.6667 20.9167Z"
                                                    stroke="#5CD685" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <rect class="text-delesteicono dark:text-green_home" x="3"
                                                    y="3" width="40" height="40" rx="20"
                                                    stroke="currentcolor" stroke-width="6" />
                                            </svg>

                                        </div>


                                        <div class="flex flex-col justify-between items-center  pt-5">
                                            <div class="ml-0 hidden font-serif font-bold pricingtitle ">
                                                {{ $plan->plan }}
                                            </div>
                                            <div
                                                class="dark:text-checkpricingdark text-pricingtextduowhite font-inter font-bold text-xl">
                                                plan
                                                lite
                                            </div>
                                            {{-- <div class="flex items-center  text-gray-600 dark:text-pricingdarkstudents">
                                            <div>
                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7 0C4.79086 0 3 1.79086 3 4C3 6.20914 4.79086 8 7 8C9.20914 8 11 6.20914 11 4C11 1.79086 9.20914 0 7 0ZM4 4C4 2.34315 5.34315 1 7 1C8.65685 1 10 2.34315 10 4C10 5.65685 8.65685 7 7 7C5.34315 7 4 5.65685 4 4ZM2.00873 9C0.903151 9 0 9.88687 0 11C0 12.6912 0.83281 13.9663 2.13499 14.7966C3.41697 15.614 5.14526 16 7 16C8.85474 16 10.583 15.614 11.865 14.7966C13.1672 13.9663 14 12.6912 14 11C14 9.89557 13.1045 9.00001 12 9.00001L2.00873 9ZM1 11C1 10.4467 1.44786 10 2.00873 10L12 10C12.5522 10 13 10.4478 13 11C13 12.3088 12.3777 13.2837 11.3274 13.9534C10.2568 14.636 8.73511 15 7 15C5.26489 15 3.74318 14.636 2.67262 13.9534C1.62226 13.2837 1 12.3088 1 11Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </div>&nbsp;
                                            {{ count($plan->planAlumnos) }} estudiantes
                                        </div> --}}
                                        </div>
                                        <div
                                            class="flex flex-row  justify-center text-center items-center font-serif mt-2">
                                            <p class="ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter text-txtnamecomntpkyr dark:text-bgprogresb">{{ $simbolo }}</p>
                                            <p class="ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter text-txtnamecomntpkyr dark:text-bgprogresb"> {{ $precio * $cambio }} </p>
                                            <p
                                                class="dark:text-pricingdarkstudents text-gray-600 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter items-bottom ">
                                                {{ $cod_iso }} </p>
                                            <p
                                                class="dark:text-pricingdarkstudents text-gray-600  ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter ">
                                                /mes
                                            </p>
                                        </div>
                                        <div
                                            class="text-graypricingstrike text-center font-inter sm:text-sixteen text-sm font-normal mt-2">
                                            El plan más popular
                                        </div>
                                        <div class="justify-center  text-center items-center mt-6">
                                            <div class="radio-premium-item">
                                                <input type="radio" id="radiobmensual"
                                                    class="form-radio h-5 w-5 text-green" checked>
                                                <label for="radioanual"
                                                    class="font-medium dark:text-borderconcours">Mensual</label>
                                            </div>
                                        </div>
                                        <div class="justify-center text-center items-center mt-8">
                                            <button wire:click="addPlan({{ $plan->id }})"
                                                class="outline-nonee text-lg h-11 items-center font-serif flex justify-center w-full bg-transparent p-1 py-1 px-4 bg-bcklightbuscador   font-bold text-white-100 duration-200   rounded">
                                                Suscribirse
                                            </button>
                                        </div>


                                        <div class="hidden">
                                            <div
                                                class="px-3  flex-col gap-2 mt-12 font-serif text-sm  text-gray-300 dark:text-pricingtextdark">
                                                @foreach ($plan->plan_detalles as $plan_detalle)
                                                    <div class="flex items-center">
                                                        <div class="text-green dark:text-checkpricingdark ">
                                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM11.3584 5.64645C11.1849 5.47288 10.9154 5.4536 10.7206 5.58859L10.6513 5.64645L7 9.298L5.35355 7.65131L5.28431 7.59346C5.08944 7.45846 4.82001 7.47775 4.64645 7.65131C4.47288 7.82488 4.4536 8.09431 4.58859 8.28917L4.64645 8.35842L6.64645 10.3584L6.71569 10.4163C6.8862 10.5344 7.1138 10.5344 7.28431 10.4163L7.35355 10.3584L11.3584 6.35355L11.4163 6.28431C11.5513 6.08944 11.532 5.82001 11.3584 5.64645Z"
                                                                    fill="Currentcolor" />
                                                            </svg>
                                                        </div>&nbsp;&nbsp;&nbsp;
                                                        <div class="pricingbenefits">
                                                            <p class=""> {{ $plan_detalle->detalle }} </p>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @elseif($plan->plan == 'Plan Duo')
                                <div class="card z-50  cursor-pointer border border-transparent rounded-xl"
                                    onclick="cambiar('cp2')"id="cp2">
                                    <div
                                        class=" ml:block   rounded-2xl  bg-white-100 dark:bg-gray14    text-changedarkwhite dark:text-white-100   group  ">
                                        <div class="p-6 pb-2">
                                            <div class="mx-auto">
                                                <svg class="mx-auto" width="46" height="46" viewBox="0 0 46 46"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect class="text-green_icono dark:text-btncomentresply"
                                                        x="3" y="3" width="40" height="40"
                                                        rx="20" fill="currentColor" />
                                                    <path
                                                        d="M14.6667 25.0833L22.7019 29.1009C22.8113 29.1556 22.8659 29.1829 22.9232 29.1937C22.974 29.2032 23.0261 29.2032 23.0769 29.1937C23.1342 29.1829 23.1889 29.1556 23.2982 29.1009L31.3334 25.0833M14.6667 20.9167L22.7019 16.8991C22.8113 16.8444 22.8659 16.8171 22.9232 16.8063C22.974 16.7968 23.0261 16.7968 23.0769 16.8063C23.1342 16.8171 23.1889 16.8444 23.2982 16.8991L31.3334 20.9167L23.2982 24.9343C23.1889 24.9889 23.1342 25.0163 23.0769 25.027C23.0261 25.0365 22.974 25.0365 22.9232 25.027C22.8659 25.0163 22.8113 24.9889 22.7019 24.9343L14.6667 20.9167Z"
                                                        stroke="#5CD685" stroke-width="1.66667"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <rect class="text-delesteicono dark:text-green_home"
                                                        x="3" y="3" width="40" height="40"
                                                        rx="20" stroke="currentcolor" stroke-width="6" />
                                                </svg>

                                            </div>
                                            <div class="text-center pt-5">
                                                <span
                                                    class="dark:bg-textnavmembership bg-bgbtnblue py-1 text-white-100 text-sm font-inter font-normal rounded-lg px-3">AHORRA
                                                    HASTA 40%</span>
                                            </div>

                                            <div class="flex flex-col  justify-between items-center pt-5">
                                                <div class=" hidden font-semibold">
                                                    <p
                                                        class="ml-0 font-serif font-bold pricingtitle text-pricingtextduowhite dark:text-green ">
                                                        {{ $plan->plan }}
                                                    </p>
                                                </div>
                                                <div
                                                    class="dark:text-checkpricingdark text-pricingtextduowhite font-inter font-bold text-xl">
                                                    plan
                                                    Duo
                                                </div>
                                                {{--  <div
                                                class="flex items-center  text-gray-600 dark:text-pricingdarkstudents">
                                                <div>
                                                    <svg width="14" height="16" viewBox="0 0 14 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7 0C4.79086 0 3 1.79086 3 4C3 6.20914 4.79086 8 7 8C9.20914 8 11 6.20914 11 4C11 1.79086 9.20914 0 7 0ZM4 4C4 2.34315 5.34315 1 7 1C8.65685 1 10 2.34315 10 4C10 5.65685 8.65685 7 7 7C5.34315 7 4 5.65685 4 4ZM2.00873 9C0.903151 9 0 9.88687 0 11C0 12.6912 0.83281 13.9663 2.13499 14.7966C3.41697 15.614 5.14526 16 7 16C8.85474 16 10.583 15.614 11.865 14.7966C13.1672 13.9663 14 12.6912 14 11C14 9.89557 13.1045 9.00001 12 9.00001L2.00873 9ZM1 11C1 10.4467 1.44786 10 2.00873 10L12 10C12.5522 10 13 10.4478 13 11C13 12.3088 12.3777 13.2837 11.3274 13.9534C10.2568 14.636 8.73511 15 7 15C5.26489 15 3.74318 14.636 2.67262 13.9534C1.62226 13.2837 1 12.3088 1 11Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </div>&nbsp;
                                                {{ count($plan->planAlumnos) }} estudiantes
                                            </div> --}}
                                            </div>
                                           {{--  <div class=" flex-col hidden items-center mt-7">
                                                <p
                                                    class="rounded-md  py-1.5 px-2.5 text-white-100 dark:text-gray-300
                                                       bg-bgduoahorrowhite dark:bg-bgduoahorrodark text-sm font-serif font-medium etiquetadsctoricing">
                                                    Ahorra hasta 92%
                                                </p>
                                            </div> --}}
                                            <div
                                                class="flex flex-row mt-3 justify-center gap-2 text-center items-center font-serif">
                                                <p class=" ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter text-txtnamecomntpkyr dark:text-bgprogresb">{{ $simbolo }}</p>
                                                <p class="ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter text-txtnamecomntpkyr dark:text-bgprogresb"> {{ $precio * $cambio }} </p>
                                                <p
                                                    class=" dark:text-pricingdarkstudents text-gray-600 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-inter  font-bold items-bottom ">
                                                    {{ $cod_iso }} </p>
                                                <p
                                                    class="dark:text-pricingdarkstudents text-gray-600 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter">
                                                    /anual
                                                </p>

                                            </div>
                                            <div
                                                class="dark:text-graypricingstrike text-graypricingstrike text-center font-inter text-sixteen font-normal pt-2">
                                                Perfecto para 2 personas
                                            </div>
                                            <div class="justify-center  text-center items-center mt-5 ">
                                                <div class="radio-premium-item">
                                                    <input type="radio" id="radioanual" name="radioduo"
                                                        class="form-radio h-5 w-5 text-green" checked>
                                                    <label for="radioanual"
                                                        class="font-medium dark:text-borderconcours">Anual</label>
                                                </div>
                                                <div class="inline-flex items-center ml-4">
                                                    <div class="radio-premium-item">
                                                        <input type="radio" id="radiomensual" name="radioduo"
                                                            class="form-radio h-5 w-5 text-green">
                                                        <label for="radiomensual"
                                                            class="font-medium dark:text-borderconcours">Mensual</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="justify-center text-center items-center mt-8 px-0">
                                                <button wire:click="addPlan({{ $plan->id }})"
                                                    class="outline-nonee text-lg h-11 items-center font-serif flex justify-center w-full bg-transparent p-1 py-1 px-4  bg-gray-600 font-bold text-white-100 duration-200  hover:border-transparent rounded">
                                                    Suscribirse
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="p-6  hidden justify-center text-xs bg-pricingcintawhite dark:bg-pricingcintadark font-serif ">
                                            <div>
                                                <svg width="14" height="16" viewBox="0 0 14 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.5 0C0.671573 0 0 0.671573 0 1.5V14.5C0 15.3284 0.671573 16 1.5 16H8.5C9.32843 16 10 15.3284 10 14.5V13C10 12.7238 9.77599 12.4998 9.49985 12.4998C9.08657 12.4998 8.82263 12.398 8.64373 12.2639C8.46125 12.127 8.32203 11.9223 8.21988 11.6414C8.00592 11.053 7.99993 10.2742 7.99985 9.49973C7.99984 9.36714 7.94716 9.23999 7.8534 9.14623L7.5666 8.85933C7.45782 8.75044 7.3251 8.61759 6.35356 7.64618C5.88667 7.17934 5.75014 6.86588 5.72435 6.69089C5.70385 6.55183 5.74583 6.45651 5.84563 6.361C6.06033 6.15555 6.21264 6.01659 6.38518 5.97463C6.48906 5.94937 6.72441 5.93132 7.14647 6.35333L10.1464 9.35331C10.3417 9.54857 10.6583 9.54857 10.8536 9.35331C11.0488 9.15805 11.0488 8.84146 10.8536 8.6462L10 7.79263V4.70711L12.5607 7.26777C12.842 7.54907 13 7.9306 13 8.32843V15.5C13 15.7761 13.2239 16 13.5 16C13.7761 16 14 15.7761 14 15.5V8.32843C14 7.66539 13.7366 7.0295 13.2678 6.56066L10 3.29289V1.5C10 0.671573 9.32843 0 8.5 0H1.5ZM9 3.49951C9 3.49984 9 3.49918 9 3.49951V6.79264L7.85353 5.64618C7.27551 5.06823 6.7003 4.86887 6.14891 5.00294C6.03719 5.03011 5.9327 5.07032 5.83605 5.11804C5.57067 5.04119 5.29015 5 5 5C3.34315 5 2 6.34315 2 8C2 9.65685 3.34315 11 5 11C5.77173 11 6.47541 10.7086 7.00699 10.2298C7.02414 10.8077 7.0824 11.4395 7.28009 11.9831C7.42795 12.3897 7.66371 12.7788 8.04369 13.0638L8.05012 13.0686C7.44149 13.2597 7 13.8283 7 14.5V15H3V14.5C3 13.6716 2.32843 13 1.5 13H1V3H1.5C2.32843 3 3 2.32843 3 1.5V1H7V1.5C7 2.32843 7.67157 3 8.5 3H9V3.49951ZM8.99985 14.4998L8.99993 14.5086C8.99534 14.7808 8.77327 15 8.5 15H8V14.5C8 14.2239 8.22386 14 8.5 14H8.99985V14.4998ZM3 8C3 6.93775 3.82814 6.06891 4.87401 6.0039C4.75028 6.23482 4.68743 6.51371 4.73503 6.8367C4.80612 7.31904 5.11334 7.82022 5.6465 8.35332L6.55324 9.26004C6.18654 9.71151 5.62696 10 5 10C3.89543 10 3 9.10457 3 8ZM2 1V1.5C2 1.77614 1.77614 2 1.5 2H1V1.5C1 1.22386 1.22386 1 1.5 1H2ZM1 14H1.5C1.77614 14 2 14.2239 2 14.5V15H1.5C1.22386 15 1 14.7761 1 14.5V14ZM9 2H8.5C8.22386 2 8 1.77614 8 1.5V1H8.5C8.77614 1 9 1.22386 9 1.5V2Z"
                                                        fill="Currentcolor" />
                                                </svg>
                                            </div>&nbsp;&nbsp;&nbsp;
                                            <div class="font-medium labelpricingcuotas etiquetadsctoricing fdsbn">
                                                Paga a 4 cuotas sin intereses de s/ 150 PEN con targeta débito o
                                                crédito. <a href="#"
                                                    class="text-bgduoahorrowhite dark:text-bgduoahorrodark">Conoce
                                                    más.</a>
                                            </div>
                                        </div>
                                        <div class="p-6 hidden pt-0 px-7">
                                            <div
                                                class="flex flex-col gap-2 mt-7 font-serif text-sm  text-gray-300 dark:text-pricingtextdark">
                                                @foreach ($plan->plan_detalles as $plan_detalle)
                                                    <div class="flex items-center">
                                                        <div class="text-green dark:text-checkpricingdark ">
                                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM11.3584 5.64645C11.1849 5.47288 10.9154 5.4536 10.7206 5.58859L10.6513 5.64645L7 9.298L5.35355 7.65131L5.28431 7.59346C5.08944 7.45846 4.82001 7.47775 4.64645 7.65131C4.47288 7.82488 4.4536 8.09431 4.58859 8.28917L4.64645 8.35842L6.64645 10.3584L6.71569 10.4163C6.8862 10.5344 7.1138 10.5344 7.28431 10.4163L7.35355 10.3584L11.3584 6.35355L11.4163 6.28431C11.5513 6.08944 11.532 5.82001 11.3584 5.64645Z"
                                                                    fill="Currentcolor" />
                                                            </svg>
                                                        </div>&nbsp;&nbsp;&nbsp;
                                                        <div class="pricingbenefits">
                                                            <p class=""> {{ $plan_detalle->detalle }} </p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif($plan->plan == 'Premium')
                                <div class="card z-50  rounded-xl border border-transparent cursor-pointer "
                                    onclick="cambiar('cp3')" id="cp3">
                                    <div
                                        class="clitemm block rounded-2xl  bg-white-100 dark:bg-gray14  text-changedarkwhite dark:text-white-100   group">
                                        <div class="pl-6 pr-6 pt-6 ">
                                            <svg class="mx-auto" width="46" height="46" viewBox="0 0 46 46"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect class="text-green_icono dark:text-btncomentresply"
                                                    x="3" y="3" width="40" height="40"
                                                    rx="20" fill="currentcolor" />
                                                <path
                                                    d="M23.8333 14.6667L16.4112 23.5732C16.1205 23.922 15.9752 24.0964 15.9729 24.2437C15.971 24.3718 16.0281 24.4936 16.1277 24.5741C16.2423 24.6667 16.4693 24.6667 16.9233 24.6667H23L22.1666 31.3333L29.5888 22.4268C29.8794 22.078 30.0248 21.9036 30.027 21.7563C30.0289 21.6282 29.9719 21.5064 29.8723 21.4259C29.7577 21.3333 29.5307 21.3333 29.0766 21.3333H23L23.8333 14.6667Z"
                                                    stroke="#5CD685" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <rect class="text-delesteicono dark:text-green_home" x="3"
                                                    y="3" width="40" height="40" rx="20"
                                                    stroke="currentcolor" stroke-width="6" />
                                            </svg>
                                            <div class="text-center pt-5">
                                                <span
                                                    class="dark:bg-textnavmembership bg-bgbtnblue py-1 text-white-100 text-sm font-inter font-normal rounded-lg px-3">AHORRA
                                                    HASTA 40%</span>
                                            </div>
                                            <div class="flex flex-col justify-between items-center pt-5">
                                                <div class="pricingtitle hidden font-semibold">
                                                    <p
                                                        class="ml-0 font-serif font-bold  text-gray-300 dark:text-gray-100 ">
                                                        {{ $plan->plan }}
                                                    </p>
                                                </div>
                                                <div
                                                    class="dark:text-checkpricingdark text-pricingtextduowhite font-inter font-bold text-xl">
                                                    Plan Primiun
                                                </div>
                                                {{--  <div
                                                class="flex items-center  text-gray-600 dark:text-pricingdarkstudents">
                                                <div>
                                                    <svg width="14" height="16" viewBox="0 0 14 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7 0C4.79086 0 3 1.79086 3 4C3 6.20914 4.79086 8 7 8C9.20914 8 11 6.20914 11 4C11 1.79086 9.20914 0 7 0ZM4 4C4 2.34315 5.34315 1 7 1C8.65685 1 10 2.34315 10 4C10 5.65685 8.65685 7 7 7C5.34315 7 4 5.65685 4 4ZM2.00873 9C0.903151 9 0 9.88687 0 11C0 12.6912 0.83281 13.9663 2.13499 14.7966C3.41697 15.614 5.14526 16 7 16C8.85474 16 10.583 15.614 11.865 14.7966C13.1672 13.9663 14 12.6912 14 11C14 9.89557 13.1045 9.00001 12 9.00001L2.00873 9ZM1 11C1 10.4467 1.44786 10 2.00873 10L12 10C12.5522 10 13 10.4478 13 11C13 12.3088 12.3777 13.2837 11.3274 13.9534C10.2568 14.636 8.73511 15 7 15C5.26489 15 3.74318 14.636 2.67262 13.9534C1.62226 13.2837 1 12.3088 1 11Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </div>&nbsp;
                                                {{ count($plan->planAlumnos) }} estudiantes
                                            </div> --}}
                                            </div>
                                            <div
                                                class="flex flex-row  justify-center text-center items-center font-serif mt-3">
                                                <p class="ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter text-txtnamecomntpkyr dark:text-bgprogresb">{{ $simbolo }}</p>
                                                <p class="ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter text-txtnamecomntpkyr dark:text-bgprogresb"> {{ $precio * $cambio }} </p>
                                                <p
                                                    class="dark:text-pricingdarkstudents text-gray-600 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter">
                                                    {{ $cod_iso }} </p>
                                                <p
                                                    class="dark:text-pricingdarkstudents text-gray-600 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter">
                                                    /anual
                                                </p>
                                            </div>
                                            <div
                                                class="dark:text-graypricingstrike text-graypricingstrike text-center font-inter text-sixteen font-normal pt-2">
                                                2 cursos nuevos cada mes
                                            </div>
                                            <div class="justify-center  text-center items-center  mt-5">
                                                <div class="radio-premium-item">
                                                    <input type="radio" id="radiopanual" name="radiopremium"
                                                        class="form-radio h-5 w-5 text-green" checked>
                                                    <label for="radiopanual"
                                                        class="font-medium dark:text-borderconcours">Anual</label>
                                                </div>
                                                <div class="inline-flex items-center ml-4">
                                                    <div class="radio-premium-item">
                                                        <input type="radio" id="radiopmensual" name="radiopremium"
                                                            class="form-radio h-5 w-5 text-green">
                                                        <label for="radiopmensual"
                                                            class="font-medium dark:text-borderconcours">Mensual</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="justify-center text-center items-center mt-8">
                                                <button wire:click="addPlan({{ $plan->id }})"
                                                    class="xl:text-lg text-sm h-11 items-center font-serif flex justify-center w-full bg-transparent p-1 py-1 px-4  bg-gray-600 font-bold text-white-100 duration-200 transparent rounded">
                                                    Suscríbete a Plan Premium
                                                </button>
                                            </div>
                                        </div>
                                       {{--  <div
                                            class="p-6  hidden  justify-center text-xs bg-pricingcintawhite dark:bg-pricingcintadark font-serif ">
                                            <div class="fdsbn">
                                                <svg width="14" height="16" viewBox="0 0 14 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.5 0C0.671573 0 0 0.671573 0 1.5V14.5C0 15.3284 0.671573 16 1.5 16H8.5C9.32843 16 10 15.3284 10 14.5V13C10 12.7238 9.77599 12.4998 9.49985 12.4998C9.08657 12.4998 8.82263 12.398 8.64373 12.2639C8.46125 12.127 8.32203 11.9223 8.21988 11.6414C8.00592 11.053 7.99993 10.2742 7.99985 9.49973C7.99984 9.36714 7.94716 9.23999 7.8534 9.14623L7.5666 8.85933C7.45782 8.75044 7.3251 8.61759 6.35356 7.64618C5.88667 7.17934 5.75014 6.86588 5.72435 6.69089C5.70385 6.55183 5.74583 6.45651 5.84563 6.361C6.06033 6.15555 6.21264 6.01659 6.38518 5.97463C6.48906 5.94937 6.72441 5.93132 7.14647 6.35333L10.1464 9.35331C10.3417 9.54857 10.6583 9.54857 10.8536 9.35331C11.0488 9.15805 11.0488 8.84146 10.8536 8.6462L10 7.79263V4.70711L12.5607 7.26777C12.842 7.54907 13 7.9306 13 8.32843V15.5C13 15.7761 13.2239 16 13.5 16C13.7761 16 14 15.7761 14 15.5V8.32843C14 7.66539 13.7366 7.0295 13.2678 6.56066L10 3.29289V1.5C10 0.671573 9.32843 0 8.5 0H1.5ZM9 3.49951C9 3.49984 9 3.49918 9 3.49951V6.79264L7.85353 5.64618C7.27551 5.06823 6.7003 4.86887 6.14891 5.00294C6.03719 5.03011 5.9327 5.07032 5.83605 5.11804C5.57067 5.04119 5.29015 5 5 5C3.34315 5 2 6.34315 2 8C2 9.65685 3.34315 11 5 11C5.77173 11 6.47541 10.7086 7.00699 10.2298C7.02414 10.8077 7.0824 11.4395 7.28009 11.9831C7.42795 12.3897 7.66371 12.7788 8.04369 13.0638L8.05012 13.0686C7.44149 13.2597 7 13.8283 7 14.5V15H3V14.5C3 13.6716 2.32843 13 1.5 13H1V3H1.5C2.32843 3 3 2.32843 3 1.5V1H7V1.5C7 2.32843 7.67157 3 8.5 3H9V3.49951ZM8.99985 14.4998L8.99993 14.5086C8.99534 14.7808 8.77327 15 8.5 15H8V14.5C8 14.2239 8.22386 14 8.5 14H8.99985V14.4998ZM3 8C3 6.93775 3.82814 6.06891 4.87401 6.0039C4.75028 6.23482 4.68743 6.51371 4.73503 6.8367C4.80612 7.31904 5.11334 7.82022 5.6465 8.35332L6.55324 9.26004C6.18654 9.71151 5.62696 10 5 10C3.89543 10 3 9.10457 3 8ZM2 1V1.5C2 1.77614 1.77614 2 1.5 2H1V1.5C1 1.22386 1.22386 1 1.5 1H2ZM1 14H1.5C1.77614 14 2 14.2239 2 14.5V15H1.5C1.22386 15 1 14.7761 1 14.5V14ZM9 2H8.5C8.22386 2 8 1.77614 8 1.5V1H8.5C8.77614 1 9 1.22386 9 1.5V2Z"
                                                        fill="Currentcolor" />
                                                </svg>
                                            </div>&nbsp;&nbsp;&nbsp;
                                            <div class="font-medium labelpricingcuotas etiquetadsctoricing fdsbn">
                                                Paga a 4 cuotas sin intereses de s/ 150 PEN con targeta débito o
                                                crédito. <a href="#" class="dark:text-bgduoahorrodark">Conoce
                                                    más.</a>
                                            </div>
                                        </div>
                                        <div class="p-6 hidden pt-0 px-7">
                                            <div
                                                class="flex flex-col gap-2 mt-7 font-serif text-sm  text-gray-300 dark:text-pricingtextdark">
                                                @foreach ($plan->plan_detalles as $plan_detalle)
                                                    <div class="flex items-center">
                                                        <div class="text-green dark:text-checkpricingdark ">
                                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM11.3584 5.64645C11.1849 5.47288 10.9154 5.4536 10.7206 5.58859L10.6513 5.64645L7 9.298L5.35355 7.65131L5.28431 7.59346C5.08944 7.45846 4.82001 7.47775 4.64645 7.65131C4.47288 7.82488 4.4536 8.09431 4.58859 8.28917L4.64645 8.35842L6.64645 10.3584L6.71569 10.4163C6.8862 10.5344 7.1138 10.5344 7.28431 10.4163L7.35355 10.3584L11.3584 6.35355L11.4163 6.28431C11.5513 6.08944 11.532 5.82001 11.3584 5.64645Z"
                                                                    fill="Currentcolor" />
                                                            </svg>
                                                        </div>&nbsp;&nbsp;&nbsp;
                                                        <div class="pricingbenefits">
                                                            <p class=""> {{ $plan_detalle->detalle }} </p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div> --}}


                                    </div>
                                </div>
                            @endif
                        @endforeach

                        <script>
                            function cambiar(pen) {
                                console.log(pen);
                                var carta = document.getElementsByClassName("card");
                                /* carta.style.borderColor="transparent"; */
                                for (let i = 0; i < carta.length; i++) {

                                    carta[i].style.borderColor = " transparent";
                                    /*  if (carta[i].classList.contains('borderactive')) {
                                         carta[i].classList.remove("borderactive")
                                         
                                     } */


                                }
                               /*  var objet = document.getElementById(pen);
                                carta.style.borderStyle = "none"; */
                                 document.getElementById(pen).style.borderColor=" #33cc66";

                            }
                        </script>
                    </div>
                    <div class="top-96 mt-16 absolute w-full">
                        <div class="grid grid-cols-4 w-full  dark:bg-gray12 bg-white2  py-5 px-6">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center text-sixteen">
                                <div class="pr-2">Cursos</div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283957)">
                                        <path
                                            d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                            stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283957">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                5 cursos de tu preferencia</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                Más de +89 cursos</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                Más de +89 cursos</div>
                        </div>
                        <div class="grid grid-cols-4 w-full  bg-white-100 dark:bg-gray14   py-5 px-6">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center text-sixteen">
                                <div class="pr-2">Estudiantes</div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283957)">
                                        <path
                                            d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                            stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283957">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                1</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                1</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                2</div>
                        </div>
                        <div class="grid grid-cols-4 w-full  dark:bg-gray12 bg-white2  py-5 px-6">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center text-sixteen">
                                <div class="pr-2">Certificación de finalización</div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283957)">
                                        <path
                                            d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                            stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283957">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283704)">
                                        <path
                                            d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                            stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283704">
                                            <rect width="24" height="24" rx="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283704)">
                                        <path
                                            d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                            stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283704">
                                            <rect width="24" height="24" rx="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283704)">
                                        <path
                                            d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                            stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283704">
                                            <rect width="24" height="24" rx="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 w-full  bg-white-100 dark:bg-gray14   py-5 px-6">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center text-sixteen">
                                <div class="pr-2">Especialidades</div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283957)">
                                        <path
                                            d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                            stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283957">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                -</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                12 especialidades</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                12 especialidades</div>
                        </div>
                        <div class="grid grid-cols-4 w-full  dark:bg-gray12 bg-white2  py-5 px-6">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center text-sixteen">
                                <div class="pr-2">Cursos nuevos</div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283957)">
                                        <path
                                            d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                            stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283957">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                5 cursos de tu preferencia</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                Más de +89 cursos</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                Más de +89 cursos</div>
                        </div>
                        <div class="grid grid-cols-4 w-full  bg-white-100 dark:bg-gray14   py-5 px-6">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center text-sixteen">
                                <div class="pr-2">Plantillas descargables</div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283957)">
                                        <path
                                            d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                            stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283957">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto " width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 w-full  dark:bg-gray12 bg-white2  py-5 px-6">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center text-sixteen">
                                <div class="pr-2">Tutor experto por WhatsApp</div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283957)">
                                        <path
                                            d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                            stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283957">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class=" lg:hidden grid grid-cols-1 pt-16 ">

                @foreach ($planes as $plan)
                    @php
                        $precio = round($plan->plan == 'Básico' ? $plan->precio : ($plan->plan == 'Premium' ? $plan->precio / 12 : 1 + $plan->precio / 12));
                    @endphp
    
    
    
                    @if ($plan->plan == 'Básico')
                        <a href="#" class="clitemm block sm:w-3/4 w-full mx-auto rounded-xl">
                            <div
                                class=" rounded-2xl  bg-white-100 dark:bg-gray14  text-changedarkwhite dark:text-white-100   group ">
                                <div class="p-4">
    
                                    <svg class="sm:mx-auto text-left" width="46" height="46" viewBox="0 0 46 46"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect class="text-green_icono dark:text-btncomentresply" x="3"
                                            y="3" width="40" height="40" rx="20"
                                            fill="currentColor" />
                                        <path
                                            d="M14.6667 25.0833L22.7019 29.1009C22.8113 29.1556 22.8659 29.1829 22.9232 29.1937C22.974 29.2032 23.0261 29.2032 23.0769 29.1937C23.1342 29.1829 23.1889 29.1556 23.2982 29.1009L31.3334 25.0833M14.6667 20.9167L22.7019 16.8991C22.8113 16.8444 22.8659 16.8171 22.9232 16.8063C22.974 16.7968 23.0261 16.7968 23.0769 16.8063C23.1342 16.8171 23.1889 16.8444 23.2982 16.8991L31.3334 20.9167L23.2982 24.9343C23.1889 24.9889 23.1342 25.0163 23.0769 25.027C23.0261 25.0365 22.974 25.0365 22.9232 25.027C22.8659 25.0163 22.8113 24.9889 22.7019 24.9343L14.6667 20.9167Z"
                                            stroke="#5CD685" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <rect class="text-delesteicono dark:text-green_home" x="3"
                                            y="3" width="40" height="40" rx="20"
                                            stroke="currentcolor" stroke-width="6" />
                                    </svg>
    
    
    
    
                                    <div class="sm:text-center text-left   pt-5">
                                        <div class="ml-0 hidden font-serif font-bold pricingtitle ">
                                            {{ $plan->plan }}
                                        </div>
                                        <div
                                            class="dark:text-checkpricingdark text-pricingtextduowhite font-inter font-bold text-xl">
                                            plan
                                            lite
                                        </div>
                                        {{--  <div
                                            class="flex items-center sm:justify-center justify-start text-gray-600 dark:text-pricingdarkstudents">
                                            <div>
                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7 0C4.79086 0 3 1.79086 3 4C3 6.20914 4.79086 8 7 8C9.20914 8 11 6.20914 11 4C11 1.79086 9.20914 0 7 0ZM4 4C4 2.34315 5.34315 1 7 1C8.65685 1 10 2.34315 10 4C10 5.65685 8.65685 7 7 7C5.34315 7 4 5.65685 4 4ZM2.00873 9C0.903151 9 0 9.88687 0 11C0 12.6912 0.83281 13.9663 2.13499 14.7966C3.41697 15.614 5.14526 16 7 16C8.85474 16 10.583 15.614 11.865 14.7966C13.1672 13.9663 14 12.6912 14 11C14 9.89557 13.1045 9.00001 12 9.00001L2.00873 9ZM1 11C1 10.4467 1.44786 10 2.00873 10L12 10C12.5522 10 13 10.4478 13 11C13 12.3088 12.3777 13.2837 11.3274 13.9534C10.2568 14.636 8.73511 15 7 15C5.26489 15 3.74318 14.636 2.67262 13.9534C1.62226 13.2837 1 12.3088 1 11Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </div>&nbsp;
                                            {{ count($plan->planAlumnos) }} estudiantes
                                        </div> --}}
                                    </div>
                                    <div
                                        class="flex flex-row  sm:justify-center justify-start items-center font-serif mt-2">
                                        <p class="pricingpremium font-bold">{{ $simbolo }}</p>
                                        <p class="pricingpremium font-bold"> {{ $precio * $cambio }} </p>
                                        <p
                                            class="dark:text-pricingdarkstudents text-gray-600 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter items-bottom ">
                                            {{ $cod_iso }} </p>
                                        <p
                                            class="dark:text-pricingdarkstudents text-gray-600 text-4xl font-bold font-inter">
                                            /mes
                                        </p>
                                    </div>
                                    <div
                                        class="text-graypricingstrike sm:text-center text-left font-inter text-sixteen font-normal pt-2">
                                        El plan más popular
                                    </div>
                                    <div class="justify-center sm:text-center text-left items-center pt-8">
                                        <div class="radio-premium-item">
                                            <input type="radio" id="radiobmensual"
                                                class="form-radio h-5 w-5 text-green" checked>
                                            <label for="radioanual"
                                                class="font-medium dark:text-borderconcours">Mensual</label>
                                        </div>
                                    </div>
                                    <div class="justify-center text-center items-center py-8 ">
                                        <button wire:click="addPlan({{ $plan->id }})"
                                            class="outline-nonee h-11 items-center font-serif flex justify-center w-full bg-transparent p-1 py-1 px-4 bg-bcklightbuscador   font-bold text-white-100 duration-200   rounded">
                                            Suscribirse
                                        </button>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex  justify-between w-full  dark:bg-gray12 bg-white2 py-5 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Cursos</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            5 cursos de tu preferencia</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4 ">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Estudiantes</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            1</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Certificación de finalización</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283704)">
                                                    <path
                                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283704">
                                                        <rect width="24" height="24" rx="12"
                                                            fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Especialidades</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            -</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2 ">Cursos nuevos</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
    
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            5 cursos de tu preferencia</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Plantillas descargables</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                    stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Tutor experto por WhatsApp</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                    stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
    
                                    </div>
                                </div>
    
    
                                <div class="hidden">
                                    <div
                                        class="px-3  flex-col gap-2 mt-12 font-serif text-sm  text-gray-300 dark:text-pricingtextdark">
                                        @foreach ($plan->plan_detalles as $plan_detalle)
                                            <div class="flex items-center">
                                                <div class="text-green dark:text-checkpricingdark ">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM11.3584 5.64645C11.1849 5.47288 10.9154 5.4536 10.7206 5.58859L10.6513 5.64645L7 9.298L5.35355 7.65131L5.28431 7.59346C5.08944 7.45846 4.82001 7.47775 4.64645 7.65131C4.47288 7.82488 4.4536 8.09431 4.58859 8.28917L4.64645 8.35842L6.64645 10.3584L6.71569 10.4163C6.8862 10.5344 7.1138 10.5344 7.28431 10.4163L7.35355 10.3584L11.3584 6.35355L11.4163 6.28431C11.5513 6.08944 11.532 5.82001 11.3584 5.64645Z"
                                                            fill="Currentcolor" />
                                                    </svg>
                                                </div>&nbsp;&nbsp;&nbsp;
                                                <div class="pricingbenefits">
                                                    <p class=""> {{ $plan_detalle->detalle }} </p>
                                                </div>
                                            </div>
                                        @endforeach
    
                                    </div>
                                </div>
                            </div>
                        </a>
                    @elseif($plan->plan == 'Plan Duo')
                        <div class=" cursor-pointer pt-32 rounded-xl sm:w-3/4 w-full mx-auto">
                            <div
                                class="clitemm ml:block   rounded-2xl  bg-white-100 dark:bg-gray14    text-changedarkwhite dark:text-white-100   group  ">
                                <div class="p-4 pb-2">
    
                                    <svg class="sm:mx-auto text-left" width="46" height="46" viewBox="0 0 46 46"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect class="text-green_icono dark:text-btncomentresply" x="3"
                                            y="3" width="40" height="40" rx="20"
                                            fill="currentColor" />
                                        <path
                                            d="M14.6667 25.0833L22.7019 29.1009C22.8113 29.1556 22.8659 29.1829 22.9232 29.1937C22.974 29.2032 23.0261 29.2032 23.0769 29.1937C23.1342 29.1829 23.1889 29.1556 23.2982 29.1009L31.3334 25.0833M14.6667 20.9167L22.7019 16.8991C22.8113 16.8444 22.8659 16.8171 22.9232 16.8063C22.974 16.7968 23.0261 16.7968 23.0769 16.8063C23.1342 16.8171 23.1889 16.8444 23.2982 16.8991L31.3334 20.9167L23.2982 24.9343C23.1889 24.9889 23.1342 25.0163 23.0769 25.027C23.0261 25.0365 22.974 25.0365 22.9232 25.027C22.8659 25.0163 22.8113 24.9889 22.7019 24.9343L14.6667 20.9167Z"
                                            stroke="#5CD685" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <rect class="text-delesteicono dark:text-green_home" x="3"
                                            y="3" width="40" height="40" rx="20"
                                            stroke="currentcolor" stroke-width="6" />
                                    </svg>
    
                                    <div class="sm:text-center text-left pt-5">
                                        <span
                                            class="dark:bg-textnavmembership bg-bgbtnblue py-1 text-white-100 text-sm font-inter font-normal rounded-lg px-3">AHORRA
                                            HASTA 40%</span>
                                    </div>
    
                                    <div class=" sm:text-center text-left items-center pt-5">
                                        {{--  <div class=" hidden font-semibold">
                                            <p
                                                class="ml-0 font-serif font-bold pricingtitle text-pricingtextduowhite dark:text-green ">
                                                {{ $plan->plan }}
                                            </p>
                                        </div> --}}
                                        <div
                                            class="dark:text-checkpricingdark text-pricingtextduowhite font-inter font-bold text-xl">
                                            plan
                                            Duo
                                        </div>
                                        {{--  <div
                                            class="flex  sm:justify-center justify-start items-center  text-gray-600 dark:text-pricingdarkstudents">
                                            <div>
                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7 0C4.79086 0 3 1.79086 3 4C3 6.20914 4.79086 8 7 8C9.20914 8 11 6.20914 11 4C11 1.79086 9.20914 0 7 0ZM4 4C4 2.34315 5.34315 1 7 1C8.65685 1 10 2.34315 10 4C10 5.65685 8.65685 7 7 7C5.34315 7 4 5.65685 4 4ZM2.00873 9C0.903151 9 0 9.88687 0 11C0 12.6912 0.83281 13.9663 2.13499 14.7966C3.41697 15.614 5.14526 16 7 16C8.85474 16 10.583 15.614 11.865 14.7966C13.1672 13.9663 14 12.6912 14 11C14 9.89557 13.1045 9.00001 12 9.00001L2.00873 9ZM1 11C1 10.4467 1.44786 10 2.00873 10L12 10C12.5522 10 13 10.4478 13 11C13 12.3088 12.3777 13.2837 11.3274 13.9534C10.2568 14.636 8.73511 15 7 15C5.26489 15 3.74318 14.636 2.67262 13.9534C1.62226 13.2837 1 12.3088 1 11Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </div>
                                            <div> {{ count($plan->planAlumnos) }} estudiantes</div>
                                        </div> --}}
                                    </div>
                                    <div class=" flex-col hidden items-center mt-5">
                                        <p
                                            class="rounded-md  py-1.5 px-2.5 text-white-100 dark:text-gray-300
                                               bg-bgduoahorrowhite dark:bg-bgduoahorrodark text-sm font-serif font-medium ">
                                            Ahorra hasta 92%
                                        </p>
                                    </div>
                                    <div
                                        class="flex flex-row mt-2  sm:justify-center justify-start  text-center items-center font-serif">
                                        <p class="text-4xl font-bold">{{ $simbolo }}</p>
                                        <p class="pricingpremium font-bold"> {{ $precio * $cambio }} </p>
                                        <p
                                            class=" dark:text-pricingdarkstudents text-gray-600 text-4xl font-inter  font-bold items-bottom ">
                                            {{ $cod_iso }} </p>
                                        <p
                                            class="dark:text-pricingdarkstudents text-gray-600 text-4xl font-bold font-inter">
                                            /anual
                                        </p>
    
                                    </div>
                                    <div
                                        class="dark:text-graypricingstrike text-graypricingstrike sm:text-center text-left font-inter text-sixteen  font-normal pt-2">
                                        Perfecto para 2 personas
                                    </div>
                                    <div class="sm:text-center text-left items-center pt-8 ">
                                        <div class="radio-premium-item">
                                            <input type="radio" id="radioanual" name="radioduo"
                                                class="form-radio h-5 w-5 text-green" checked>
                                            <label for="radioanual"
                                                class="font-medium dark:text-borderconcours">Anual</label>
                                        </div>
                                        <div class="inline-flex items-center ml-4">
                                            <div class="radio-premium-item">
                                                <input type="radio" id="radiomensual" name="radioduo"
                                                    class="form-radio h-5 w-5 text-green">
                                                <label for="radiomensual"
                                                    class="font-medium dark:text-borderconcours">Mensual</label>
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="justify-center text-center items-center py-8">
                                        <button wire:click="addPlan({{ $plan->id }})"
                                            class="outline-nonee h-11 items-center font-serif flex justify-center w-full bg-transparent p-1 py-1 px-4  bg-gray-600 font-bold text-white-100 duration-200  hover:border-transparent rounded">
                                            Suscribirse
                                        </button>
                                    </div>
                                </div>
    
                                <div class="flex flex-col">
                                    <div class="flex  justify-between w-full  dark:bg-gray12 bg-white2 py-5 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Cursos</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            5 cursos de tu preferencia</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4 ">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Estudiantes</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm  text-center">
                                            1</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Certificación de finalización</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283704)">
                                                    <path
                                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283704">
                                                        <rect width="24" height="24" rx="12"
                                                            fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Especialidades</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            -</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Cursos nuevos</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            5 cursos de tu preferencia</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Plantillas descargables</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                    stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Tutor experto por WhatsApp</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                    stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
    
                                    </div>
                                </div>
    
                               {{--  <div
                                    class="p-6  hidden justify-center text-xs bg-pricingcintawhite dark:bg-pricingcintadark font-serif ">
                                    <div>
                                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.5 0C0.671573 0 0 0.671573 0 1.5V14.5C0 15.3284 0.671573 16 1.5 16H8.5C9.32843 16 10 15.3284 10 14.5V13C10 12.7238 9.77599 12.4998 9.49985 12.4998C9.08657 12.4998 8.82263 12.398 8.64373 12.2639C8.46125 12.127 8.32203 11.9223 8.21988 11.6414C8.00592 11.053 7.99993 10.2742 7.99985 9.49973C7.99984 9.36714 7.94716 9.23999 7.8534 9.14623L7.5666 8.85933C7.45782 8.75044 7.3251 8.61759 6.35356 7.64618C5.88667 7.17934 5.75014 6.86588 5.72435 6.69089C5.70385 6.55183 5.74583 6.45651 5.84563 6.361C6.06033 6.15555 6.21264 6.01659 6.38518 5.97463C6.48906 5.94937 6.72441 5.93132 7.14647 6.35333L10.1464 9.35331C10.3417 9.54857 10.6583 9.54857 10.8536 9.35331C11.0488 9.15805 11.0488 8.84146 10.8536 8.6462L10 7.79263V4.70711L12.5607 7.26777C12.842 7.54907 13 7.9306 13 8.32843V15.5C13 15.7761 13.2239 16 13.5 16C13.7761 16 14 15.7761 14 15.5V8.32843C14 7.66539 13.7366 7.0295 13.2678 6.56066L10 3.29289V1.5C10 0.671573 9.32843 0 8.5 0H1.5ZM9 3.49951C9 3.49984 9 3.49918 9 3.49951V6.79264L7.85353 5.64618C7.27551 5.06823 6.7003 4.86887 6.14891 5.00294C6.03719 5.03011 5.9327 5.07032 5.83605 5.11804C5.57067 5.04119 5.29015 5 5 5C3.34315 5 2 6.34315 2 8C2 9.65685 3.34315 11 5 11C5.77173 11 6.47541 10.7086 7.00699 10.2298C7.02414 10.8077 7.0824 11.4395 7.28009 11.9831C7.42795 12.3897 7.66371 12.7788 8.04369 13.0638L8.05012 13.0686C7.44149 13.2597 7 13.8283 7 14.5V15H3V14.5C3 13.6716 2.32843 13 1.5 13H1V3H1.5C2.32843 3 3 2.32843 3 1.5V1H7V1.5C7 2.32843 7.67157 3 8.5 3H9V3.49951ZM8.99985 14.4998L8.99993 14.5086C8.99534 14.7808 8.77327 15 8.5 15H8V14.5C8 14.2239 8.22386 14 8.5 14H8.99985V14.4998ZM3 8C3 6.93775 3.82814 6.06891 4.87401 6.0039C4.75028 6.23482 4.68743 6.51371 4.73503 6.8367C4.80612 7.31904 5.11334 7.82022 5.6465 8.35332L6.55324 9.26004C6.18654 9.71151 5.62696 10 5 10C3.89543 10 3 9.10457 3 8ZM2 1V1.5C2 1.77614 1.77614 2 1.5 2H1V1.5C1 1.22386 1.22386 1 1.5 1H2ZM1 14H1.5C1.77614 14 2 14.2239 2 14.5V15H1.5C1.22386 15 1 14.7761 1 14.5V14ZM9 2H8.5C8.22386 2 8 1.77614 8 1.5V1H8.5C8.77614 1 9 1.22386 9 1.5V2Z"
                                                fill="Currentcolor" />
                                        </svg>
                                    </div>&nbsp;&nbsp;&nbsp;
                                    <div class="font-medium labelpricingcuotas etiquetadsctoricing fdsbn">
                                        Paga a 4 cuotas sin intereses de s/ 150 PEN con targeta débito o
                                        crédito. <a href="#"
                                            class="text-bgduoahorrowhite dark:text-bgduoahorrodark">Conoce
                                            más.</a>
                                    </div>
                                </div>
                                <div class="p-6 hidden pt-0 px-7">
                                    <div
                                        class="flex flex-col gap-2 mt-7 font-serif text-sm  text-gray-300 dark:text-pricingtextdark">
                                        @foreach ($plan->plan_detalles as $plan_detalle)
                                            <div class="flex items-center">
                                                <div class="text-green dark:text-checkpricingdark ">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM11.3584 5.64645C11.1849 5.47288 10.9154 5.4536 10.7206 5.58859L10.6513 5.64645L7 9.298L5.35355 7.65131L5.28431 7.59346C5.08944 7.45846 4.82001 7.47775 4.64645 7.65131C4.47288 7.82488 4.4536 8.09431 4.58859 8.28917L4.64645 8.35842L6.64645 10.3584L6.71569 10.4163C6.8862 10.5344 7.1138 10.5344 7.28431 10.4163L7.35355 10.3584L11.3584 6.35355L11.4163 6.28431C11.5513 6.08944 11.532 5.82001 11.3584 5.64645Z"
                                                            fill="Currentcolor" />
                                                    </svg>
                                                </div>&nbsp;&nbsp;&nbsp;
                                                <div class="pricingbenefits">
                                                    <p class=""> {{ $plan_detalle->detalle }} </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    @elseif($plan->plan == 'Premium')
                        <div class=" sm:w-3/4 w-full mx-auto pt-32  rounded-xl cursor-pointer " id="senior">
                            <div
                                class="clitemm block rounded-2xl  bg-white-100 dark:bg-gray14  text-changedarkwhite dark:text-white-100   group ">
                                <div class="p-4">
    
                                    <svg class="sm:mx-auto  text-left" width="46" height="46"
                                        viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect class="text-green_icono dark:text-btncomentresply" x="3"
                                            y="3" width="40" height="40" rx="20"
                                            fill="currentcolor" />
                                        <path
                                            d="M23.8333 14.6667L16.4112 23.5732C16.1205 23.922 15.9752 24.0964 15.9729 24.2437C15.971 24.3718 16.0281 24.4936 16.1277 24.5741C16.2423 24.6667 16.4693 24.6667 16.9233 24.6667H23L22.1666 31.3333L29.5888 22.4268C29.8794 22.078 30.0248 21.9036 30.027 21.7563C30.0289 21.6282 29.9719 21.5064 29.8723 21.4259C29.7577 21.3333 29.5307 21.3333 29.0766 21.3333H23L23.8333 14.6667Z"
                                            stroke="#5CD685" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <rect class="text-delesteicono dark:text-green_home" x="3"
                                            y="3" width="40" height="40" rx="20"
                                            stroke="currentcolor" stroke-width="6" />
                                    </svg>
    
                                    <div class="sm:text-center text-left pt-5">
                                        <span
                                            class="dark:bg-textnavmembership bg-bgbtnblue py-1 text-white-100 text-sm font-inter font-normal rounded-lg px-3">AHORRA
                                            HASTA 40%</span>
                                    </div>
    
                                    <div class=" sm:text-center text-left  pt-5">
                                        <div class="pricingtitle hidden font-semibold">
                                            <p class="ml-0 font-serif font-bold  text-gray-300 dark:text-gray-100 ">
                                                {{ $plan->plan }}
                                            </p>
                                        </div>
                                        <div
                                            class="dark:text-checkpricingdark text-pricingtextduowhite font-inter font-bold text-xl">
                                            Plan Primiun
                                        </div>
    
                                        {{-- <div
                                            class="flex items-center sm:justify-center justify-start   text-gray-600 dark:text-pricingdarkstudents">
                                            <div>
                                                <svg width="14" height="16" viewBox="0 0 14 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7 0C4.79086 0 3 1.79086 3 4C3 6.20914 4.79086 8 7 8C9.20914 8 11 6.20914 11 4C11 1.79086 9.20914 0 7 0ZM4 4C4 2.34315 5.34315 1 7 1C8.65685 1 10 2.34315 10 4C10 5.65685 8.65685 7 7 7C5.34315 7 4 5.65685 4 4ZM2.00873 9C0.903151 9 0 9.88687 0 11C0 12.6912 0.83281 13.9663 2.13499 14.7966C3.41697 15.614 5.14526 16 7 16C8.85474 16 10.583 15.614 11.865 14.7966C13.1672 13.9663 14 12.6912 14 11C14 9.89557 13.1045 9.00001 12 9.00001L2.00873 9ZM1 11C1 10.4467 1.44786 10 2.00873 10L12 10C12.5522 10 13 10.4478 13 11C13 12.3088 12.3777 13.2837 11.3274 13.9534C10.2568 14.636 8.73511 15 7 15C5.26489 15 3.74318 14.636 2.67262 13.9534C1.62226 13.2837 1 12.3088 1 11Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </div>
                                            <div>
                                                {{ count($plan->planAlumnos) }} estudiantes
                                            </div>
                                        </div> --}}
    
    
                                    </div>
    
                                    <div
                                        class="flex flex-row  sm:justify-center justify-start text-center items-center font-serif mt-3">
                                        <p class="text-4xl font-bold">{{ $simbolo }}</p>
                                        <p class="pricingpremium font-bold"> {{ $precio * $cambio }} </p>
                                        <p
                                            class="dark:text-pricingdarkstudents text-gray-600 text-4xl font-inter  font-bold">
                                            {{ $cod_iso }} </p>
                                        <p
                                            class="dark:text-pricingdarkstudents text-gray-600 text-4xl font-bold font-inter">
                                            /anual
                                        </p>
                                    </div>
                                    <div
                                        class="dark:text-graypricingstrike sm:text-center text-left  text-graypricingstrike  font-inter text-sixteen font-normal pt-2">
                                        2 cursos nuevos cada mes
                                    </div>
                                    <div class="justify-center  sm:text-center text-left items-center pt-8">
                                        <div class="radio-premium-item">
                                            <input type="radio" id="radiopanual" name="radiopremium"
                                                class="form-radio h-5 w-5 text-green" checked>
                                            <label for="radiopanual"
                                                class="font-medium dark:text-borderconcours">Anual</label>
                                        </div>
                                        <div class="inline-flex items-center ml-4">
                                            <div class="radio-premium-item">
                                                <input type="radio" id="radiopmensual" name="radiopremium"
                                                    class="form-radio h-5 w-5 text-green">
                                                <label for="radiopmensual"
                                                    class="font-medium dark:text-borderconcours">Mensual</label>
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="justify-center text-center items-center py-8">
                                        <button wire:click="addPlan({{ $plan->id }})"
                                            class="outline-nonee h-11 items-center font-serif flex justify-center w-full bg-transparent p-1 py-1 px-4  bg-gray-600 font-bold text-white-100 duration-200 transparent rounded">
                                            Suscríbete a Plan Premium
                                        </button>
                                    </div>
                                </div>
                                {{-- <div
                                    class="p-6  hidden  justify-center text-xs bg-pricingcintawhite dark:bg-pricingcintadark font-serif ">
                                    <div class="fdsbn">
                                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.5 0C0.671573 0 0 0.671573 0 1.5V14.5C0 15.3284 0.671573 16 1.5 16H8.5C9.32843 16 10 15.3284 10 14.5V13C10 12.7238 9.77599 12.4998 9.49985 12.4998C9.08657 12.4998 8.82263 12.398 8.64373 12.2639C8.46125 12.127 8.32203 11.9223 8.21988 11.6414C8.00592 11.053 7.99993 10.2742 7.99985 9.49973C7.99984 9.36714 7.94716 9.23999 7.8534 9.14623L7.5666 8.85933C7.45782 8.75044 7.3251 8.61759 6.35356 7.64618C5.88667 7.17934 5.75014 6.86588 5.72435 6.69089C5.70385 6.55183 5.74583 6.45651 5.84563 6.361C6.06033 6.15555 6.21264 6.01659 6.38518 5.97463C6.48906 5.94937 6.72441 5.93132 7.14647 6.35333L10.1464 9.35331C10.3417 9.54857 10.6583 9.54857 10.8536 9.35331C11.0488 9.15805 11.0488 8.84146 10.8536 8.6462L10 7.79263V4.70711L12.5607 7.26777C12.842 7.54907 13 7.9306 13 8.32843V15.5C13 15.7761 13.2239 16 13.5 16C13.7761 16 14 15.7761 14 15.5V8.32843C14 7.66539 13.7366 7.0295 13.2678 6.56066L10 3.29289V1.5C10 0.671573 9.32843 0 8.5 0H1.5ZM9 3.49951C9 3.49984 9 3.49918 9 3.49951V6.79264L7.85353 5.64618C7.27551 5.06823 6.7003 4.86887 6.14891 5.00294C6.03719 5.03011 5.9327 5.07032 5.83605 5.11804C5.57067 5.04119 5.29015 5 5 5C3.34315 5 2 6.34315 2 8C2 9.65685 3.34315 11 5 11C5.77173 11 6.47541 10.7086 7.00699 10.2298C7.02414 10.8077 7.0824 11.4395 7.28009 11.9831C7.42795 12.3897 7.66371 12.7788 8.04369 13.0638L8.05012 13.0686C7.44149 13.2597 7 13.8283 7 14.5V15H3V14.5C3 13.6716 2.32843 13 1.5 13H1V3H1.5C2.32843 3 3 2.32843 3 1.5V1H7V1.5C7 2.32843 7.67157 3 8.5 3H9V3.49951ZM8.99985 14.4998L8.99993 14.5086C8.99534 14.7808 8.77327 15 8.5 15H8V14.5C8 14.2239 8.22386 14 8.5 14H8.99985V14.4998ZM3 8C3 6.93775 3.82814 6.06891 4.87401 6.0039C4.75028 6.23482 4.68743 6.51371 4.73503 6.8367C4.80612 7.31904 5.11334 7.82022 5.6465 8.35332L6.55324 9.26004C6.18654 9.71151 5.62696 10 5 10C3.89543 10 3 9.10457 3 8ZM2 1V1.5C2 1.77614 1.77614 2 1.5 2H1V1.5C1 1.22386 1.22386 1 1.5 1H2ZM1 14H1.5C1.77614 14 2 14.2239 2 14.5V15H1.5C1.22386 15 1 14.7761 1 14.5V14ZM9 2H8.5C8.22386 2 8 1.77614 8 1.5V1H8.5C8.77614 1 9 1.22386 9 1.5V2Z"
                                                fill="Currentcolor" />
                                        </svg>
                                    </div>&nbsp;&nbsp;&nbsp;
                                    <div class="font-medium labelpricingcuotas etiquetadsctoricing fdsbn">
                                        Paga a 4 cuotas sin intereses de s/ 150 PEN con targeta débito o
                                        crédito. <a href="#" class="dark:text-bgduoahorrodark">Conoce
                                            más.</a>
                                    </div>
                                </div> --}}
    
                                <div class="flex flex-col">
                                    <div class="flex  justify-between w-full  dark:bg-gray12 bg-white2 py-5 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm ">
                                            <div class="pr-2">Cursos</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            5 cursos de tu preferencia</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4 ">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Estudiantes</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            1</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Certificación de finalización</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283704)">
                                                    <path
                                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283704">
                                                        <rect width="24" height="24" rx="12"
                                                            fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Especialidades</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            12</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Cursos nuevos</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            5 cursos de tu preferencia</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Plantillas descargables</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                    stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Tutor experto por WhatsApp</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                    stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
    
                                    </div>
                                </div>
    
    
    
    
    
    
                               {{--  <div class="p-6 hidden pt-0 px-7">
                                    <div
                                        class="flex flex-col gap-2 mt-7 font-serif text-sm  text-gray-300 dark:text-pricingtextdark">
                                        @foreach ($plan->plan_detalles as $plan_detalle)
                                            <div class="flex items-center">
                                                <div class="text-green dark:text-checkpricingdark ">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM11.3584 5.64645C11.1849 5.47288 10.9154 5.4536 10.7206 5.58859L10.6513 5.64645L7 9.298L5.35355 7.65131L5.28431 7.59346C5.08944 7.45846 4.82001 7.47775 4.64645 7.65131C4.47288 7.82488 4.4536 8.09431 4.58859 8.28917L4.64645 8.35842L6.64645 10.3584L6.71569 10.4163C6.8862 10.5344 7.1138 10.5344 7.28431 10.4163L7.35355 10.3584L11.3584 6.35355L11.4163 6.28431C11.5513 6.08944 11.532 5.82001 11.3584 5.64645Z"
                                                            fill="Currentcolor" />
                                                    </svg>
                                                </div>&nbsp;&nbsp;&nbsp;
                                                <div class="pricingbenefits">
                                                    <p class=""> {{ $plan_detalle->detalle }} </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div> --}}
    
    
                            </div>
                        </div>
                    @endif
                @endforeach
    
    
    
    
    
            </div>

        </div>

{{-- ######################## opcion bussines #################### --}}


        <div class="py-10   hidden" id="deremo">
            <div class="py-6 dark:text-white-100 text-center  text-gray-300 text-4xl font-inter font-bold">
                bussines
            </div>
            <div class="lg:flex hidden pt-12 ">


                <div class="pt-4 lg:flex-row flex-col  gap-y-6  bg-white-100 dark:bg-gray14  relative">

                    <div class="grid grid-cols-4 ">
                        <div>

                        </div>
                        @foreach ($planes as $plan)
                            @php
                                $precio = round($plan->plan == 'Básico' ? $plan->precio : ($plan->plan == 'Premium' ? $plan->precio / 12 : 1 + $plan->precio / 12));
                            @endphp



                            @if ($plan->plan == 'Básico')
                                <a id="ap1" href="#" onclick="cambiarcard('ap1')"
                                    class="card block border border-green z-50 rounded-xl">
                                    <div style="margin-bottom: 525px;"
                                        class="p-6 rounded-2xl bg-white-100 dark:bg-gray14  text-changedarkwhite dark:text-white-100   group ">
                                        <div class="mx-auto">
                                            <svg class="mx-auto" width="46" height="46" viewBox="0 0 46 46"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect class="text-green_icono dark:text-btncomentresply" x="3"
                                                    y="3" width="40" height="40" rx="20"
                                                    fill="currentColor" />
                                                <path
                                                    d="M14.6667 25.0833L22.7019 29.1009C22.8113 29.1556 22.8659 29.1829 22.9232 29.1937C22.974 29.2032 23.0261 29.2032 23.0769 29.1937C23.1342 29.1829 23.1889 29.1556 23.2982 29.1009L31.3334 25.0833M14.6667 20.9167L22.7019 16.8991C22.8113 16.8444 22.8659 16.8171 22.9232 16.8063C22.974 16.7968 23.0261 16.7968 23.0769 16.8063C23.1342 16.8171 23.1889 16.8444 23.2982 16.8991L31.3334 20.9167L23.2982 24.9343C23.1889 24.9889 23.1342 25.0163 23.0769 25.027C23.0261 25.0365 22.974 25.0365 22.9232 25.027C22.8659 25.0163 22.8113 24.9889 22.7019 24.9343L14.6667 20.9167Z"
                                                    stroke="#5CD685" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <rect class="text-delesteicono dark:text-green_home" x="3"
                                                    y="3" width="40" height="40" rx="20"
                                                    stroke="currentcolor" stroke-width="6" />
                                            </svg>

                                        </div>


                                        <div class="flex flex-col justify-between items-center  pt-5">
                                            <div class="ml-0 hidden font-serif font-bold pricingtitle ">
                                                {{ $plan->plan }}
                                            </div>
                                            <div
                                                class="dark:text-checkpricingdark text-pricingtextduowhite font-inter font-bold text-xl">
                                                plan
                                                lite
                                            </div>
                                            {{-- <div class="flex items-center  text-gray-600 dark:text-pricingdarkstudents">
                                            <div>
                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7 0C4.79086 0 3 1.79086 3 4C3 6.20914 4.79086 8 7 8C9.20914 8 11 6.20914 11 4C11 1.79086 9.20914 0 7 0ZM4 4C4 2.34315 5.34315 1 7 1C8.65685 1 10 2.34315 10 4C10 5.65685 8.65685 7 7 7C5.34315 7 4 5.65685 4 4ZM2.00873 9C0.903151 9 0 9.88687 0 11C0 12.6912 0.83281 13.9663 2.13499 14.7966C3.41697 15.614 5.14526 16 7 16C8.85474 16 10.583 15.614 11.865 14.7966C13.1672 13.9663 14 12.6912 14 11C14 9.89557 13.1045 9.00001 12 9.00001L2.00873 9ZM1 11C1 10.4467 1.44786 10 2.00873 10L12 10C12.5522 10 13 10.4478 13 11C13 12.3088 12.3777 13.2837 11.3274 13.9534C10.2568 14.636 8.73511 15 7 15C5.26489 15 3.74318 14.636 2.67262 13.9534C1.62226 13.2837 1 12.3088 1 11Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </div>&nbsp;
                                            {{ count($plan->planAlumnos) }} estudiantes
                                        </div> --}}
                                        </div>
                                        <div
                                            class="flex flex-row  justify-center text-center items-center font-serif mt-2">
                                            <p class="ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter text-txtnamecomntpkyr dark:text-bgprogresb">{{ $simbolo }}</p>
                                            <p class="ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter text-txtnamecomntpkyr dark:text-bgprogresb"> {{ $precio * $cambio }} </p>
                                            <p
                                                class="dark:text-pricingdarkstudents text-gray-600 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter items-bottom ">
                                                {{ $cod_iso }} </p>
                                            <p
                                                class="dark:text-pricingdarkstudents text-gray-600 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter">
                                                /mes
                                            </p>
                                        </div>
                                        <div
                                            class="text-graypricingstrike text-center font-inter sm:text-sixteen text-sm font-normal mt-2">
                                            El plan más popular
                                        </div>
                                        <div class="justify-center  text-center items-center mt-6">
                                            <div class="radio-premium-item">
                                                <input type="radio" id="radiobmensual"
                                                    class="form-radio h-5 w-5 text-green" checked>
                                                <label for="radioanual"
                                                    class="font-medium dark:text-borderconcours">Mensual</label>
                                            </div>
                                        </div>
                                        <div class="justify-center text-center items-center mt-8">
                                            <button wire:click="addPlan({{ $plan->id }})"
                                                class="outline-nonee text-lg h-11 items-center font-serif flex justify-center w-full bg-transparent p-1 py-1 px-4 bg-bcklightbuscador   font-bold text-white-100 duration-200   rounded">
                                                Suscribirse
                                            </button>
                                        </div>


                                        <div class="hidden">
                                            <div
                                                class="px-3  flex-col gap-2 mt-12 font-serif text-sm  text-gray-300 dark:text-pricingtextdark">
                                                @foreach ($plan->plan_detalles as $plan_detalle)
                                                    <div class="flex items-center">
                                                        <div class="text-green dark:text-checkpricingdark ">
                                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM11.3584 5.64645C11.1849 5.47288 10.9154 5.4536 10.7206 5.58859L10.6513 5.64645L7 9.298L5.35355 7.65131L5.28431 7.59346C5.08944 7.45846 4.82001 7.47775 4.64645 7.65131C4.47288 7.82488 4.4536 8.09431 4.58859 8.28917L4.64645 8.35842L6.64645 10.3584L6.71569 10.4163C6.8862 10.5344 7.1138 10.5344 7.28431 10.4163L7.35355 10.3584L11.3584 6.35355L11.4163 6.28431C11.5513 6.08944 11.532 5.82001 11.3584 5.64645Z"
                                                                    fill="Currentcolor" />
                                                            </svg>
                                                        </div>&nbsp;&nbsp;&nbsp;
                                                        <div class="pricingbenefits">
                                                            <p class=""> {{ $plan_detalle->detalle }} </p>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @elseif($plan->plan == 'Plan Duo')
                                <div class="card z-50  cursor-pointer border border-transparent rounded-xl"
                                    onclick="cambiarcard('ap2')"id="ap2">
                                    <div
                                        class=" ml:block   rounded-2xl  bg-white-100 dark:bg-gray14    text-changedarkwhite dark:text-white-100   group  ">
                                        <div class="p-6 pb-2">
                                            <div class="mx-auto">
                                                <svg class="mx-auto" width="46" height="46" viewBox="0 0 46 46"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect class="text-green_icono dark:text-btncomentresply"
                                                        x="3" y="3" width="40" height="40"
                                                        rx="20" fill="currentColor" />
                                                    <path
                                                        d="M14.6667 25.0833L22.7019 29.1009C22.8113 29.1556 22.8659 29.1829 22.9232 29.1937C22.974 29.2032 23.0261 29.2032 23.0769 29.1937C23.1342 29.1829 23.1889 29.1556 23.2982 29.1009L31.3334 25.0833M14.6667 20.9167L22.7019 16.8991C22.8113 16.8444 22.8659 16.8171 22.9232 16.8063C22.974 16.7968 23.0261 16.7968 23.0769 16.8063C23.1342 16.8171 23.1889 16.8444 23.2982 16.8991L31.3334 20.9167L23.2982 24.9343C23.1889 24.9889 23.1342 25.0163 23.0769 25.027C23.0261 25.0365 22.974 25.0365 22.9232 25.027C22.8659 25.0163 22.8113 24.9889 22.7019 24.9343L14.6667 20.9167Z"
                                                        stroke="#5CD685" stroke-width="1.66667"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <rect class="text-delesteicono dark:text-green_home"
                                                        x="3" y="3" width="40" height="40"
                                                        rx="20" stroke="currentcolor" stroke-width="6" />
                                                </svg>

                                            </div>
                                            <div class="text-center pt-5">
                                                <span
                                                    class="dark:bg-textnavmembership bg-bgbtnblue py-1 text-white-100 text-sm font-inter font-normal rounded-lg px-3">AHORRA
                                                    HASTA 40%</span>
                                            </div>

                                            <div class="flex flex-col  justify-between items-center pt-5">
                                                <div class=" hidden font-semibold">
                                                    <p
                                                        class="ml-0 font-serif font-bold pricingtitle text-pricingtextduowhite dark:text-green ">
                                                        {{ $plan->plan }}
                                                    </p>
                                                </div>
                                                <div
                                                    class="dark:text-checkpricingdark text-pricingtextduowhite font-inter font-bold text-xl">
                                                    plan
                                                    Duo
                                                </div>
                                                {{--  <div
                                                class="flex items-center  text-gray-600 dark:text-pricingdarkstudents">
                                                <div>
                                                    <svg width="14" height="16" viewBox="0 0 14 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7 0C4.79086 0 3 1.79086 3 4C3 6.20914 4.79086 8 7 8C9.20914 8 11 6.20914 11 4C11 1.79086 9.20914 0 7 0ZM4 4C4 2.34315 5.34315 1 7 1C8.65685 1 10 2.34315 10 4C10 5.65685 8.65685 7 7 7C5.34315 7 4 5.65685 4 4ZM2.00873 9C0.903151 9 0 9.88687 0 11C0 12.6912 0.83281 13.9663 2.13499 14.7966C3.41697 15.614 5.14526 16 7 16C8.85474 16 10.583 15.614 11.865 14.7966C13.1672 13.9663 14 12.6912 14 11C14 9.89557 13.1045 9.00001 12 9.00001L2.00873 9ZM1 11C1 10.4467 1.44786 10 2.00873 10L12 10C12.5522 10 13 10.4478 13 11C13 12.3088 12.3777 13.2837 11.3274 13.9534C10.2568 14.636 8.73511 15 7 15C5.26489 15 3.74318 14.636 2.67262 13.9534C1.62226 13.2837 1 12.3088 1 11Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </div>&nbsp;
                                                {{ count($plan->planAlumnos) }} estudiantes
                                            </div> --}}
                                            </div>
                                            <div class=" flex-col hidden items-center mt-7">
                                                <p
                                                    class="rounded-md  py-1.5 px-2.5 text-white-100 dark:text-gray-300
                                     bg-bgduoahorrowhite dark:bg-bgduoahorrodark text-sm font-serif font-medium etiquetadsctoricing">
                                                    Ahorra hasta 92%
                                                </p>
                                            </div>
                                            <div
                                                class="flex flex-row mt-3 justify-center gap-2 text-center items-center font-serif">
                                                <p class="ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter text-txtnamecomntpkyr dark:text-bgprogresb">{{ $simbolo }}</p>
                                                <p class="ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter text-txtnamecomntpkyr dark:text-bgprogresb"> {{ $precio * $cambio }} </p>
                                                <p
                                                    class=" dark:text-pricingdarkstudents text-gray-600 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter items-bottom ">
                                                    {{ $cod_iso }} </p>
                                                <p
                                                    class="dark:text-pricingdarkstudents text-gray-600 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter">
                                                    /anual
                                                </p>

                                            </div>
                                            <div
                                                class="dark:text-graypricingstrike text-graypricingstrike text-center font-inter text-sixteen font-normal pt-2">
                                                Perfecto para 2 personas
                                            </div>
                                            <div class="justify-center  text-center items-center mt-5 ">
                                                <div class="radio-premium-item">
                                                    <input type="radio" id="radioanual" name="radioduo"
                                                        class="form-radio h-5 w-5 text-green" checked>
                                                    <label for="radioanual"
                                                        class="font-medium dark:text-borderconcours">Anual</label>
                                                </div>
                                                <div class="inline-flex items-center ml-4">
                                                    <div class="radio-premium-item">
                                                        <input type="radio" id="radiomensual" name="radioduo"
                                                            class="form-radio h-5 w-5 text-green">
                                                        <label for="radiomensual"
                                                            class="font-medium dark:text-borderconcours">Mensual</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="justify-center text-center items-center mt-8 px-0">
                                                <button wire:click="addPlan({{ $plan->id }})"
                                                    class="outline-nonee text-lg h-11 items-center font-serif flex justify-center w-full bg-transparent p-1 py-1 px-4  bg-gray-600 font-bold text-white-100 duration-200  hover:border-transparent rounded">
                                                    Suscribirse
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="p-6  hidden justify-center text-xs bg-pricingcintawhite dark:bg-pricingcintadark font-serif ">
                                            <div>
                                                <svg width="14" height="16" viewBox="0 0 14 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.5 0C0.671573 0 0 0.671573 0 1.5V14.5C0 15.3284 0.671573 16 1.5 16H8.5C9.32843 16 10 15.3284 10 14.5V13C10 12.7238 9.77599 12.4998 9.49985 12.4998C9.08657 12.4998 8.82263 12.398 8.64373 12.2639C8.46125 12.127 8.32203 11.9223 8.21988 11.6414C8.00592 11.053 7.99993 10.2742 7.99985 9.49973C7.99984 9.36714 7.94716 9.23999 7.8534 9.14623L7.5666 8.85933C7.45782 8.75044 7.3251 8.61759 6.35356 7.64618C5.88667 7.17934 5.75014 6.86588 5.72435 6.69089C5.70385 6.55183 5.74583 6.45651 5.84563 6.361C6.06033 6.15555 6.21264 6.01659 6.38518 5.97463C6.48906 5.94937 6.72441 5.93132 7.14647 6.35333L10.1464 9.35331C10.3417 9.54857 10.6583 9.54857 10.8536 9.35331C11.0488 9.15805 11.0488 8.84146 10.8536 8.6462L10 7.79263V4.70711L12.5607 7.26777C12.842 7.54907 13 7.9306 13 8.32843V15.5C13 15.7761 13.2239 16 13.5 16C13.7761 16 14 15.7761 14 15.5V8.32843C14 7.66539 13.7366 7.0295 13.2678 6.56066L10 3.29289V1.5C10 0.671573 9.32843 0 8.5 0H1.5ZM9 3.49951C9 3.49984 9 3.49918 9 3.49951V6.79264L7.85353 5.64618C7.27551 5.06823 6.7003 4.86887 6.14891 5.00294C6.03719 5.03011 5.9327 5.07032 5.83605 5.11804C5.57067 5.04119 5.29015 5 5 5C3.34315 5 2 6.34315 2 8C2 9.65685 3.34315 11 5 11C5.77173 11 6.47541 10.7086 7.00699 10.2298C7.02414 10.8077 7.0824 11.4395 7.28009 11.9831C7.42795 12.3897 7.66371 12.7788 8.04369 13.0638L8.05012 13.0686C7.44149 13.2597 7 13.8283 7 14.5V15H3V14.5C3 13.6716 2.32843 13 1.5 13H1V3H1.5C2.32843 3 3 2.32843 3 1.5V1H7V1.5C7 2.32843 7.67157 3 8.5 3H9V3.49951ZM8.99985 14.4998L8.99993 14.5086C8.99534 14.7808 8.77327 15 8.5 15H8V14.5C8 14.2239 8.22386 14 8.5 14H8.99985V14.4998ZM3 8C3 6.93775 3.82814 6.06891 4.87401 6.0039C4.75028 6.23482 4.68743 6.51371 4.73503 6.8367C4.80612 7.31904 5.11334 7.82022 5.6465 8.35332L6.55324 9.26004C6.18654 9.71151 5.62696 10 5 10C3.89543 10 3 9.10457 3 8ZM2 1V1.5C2 1.77614 1.77614 2 1.5 2H1V1.5C1 1.22386 1.22386 1 1.5 1H2ZM1 14H1.5C1.77614 14 2 14.2239 2 14.5V15H1.5C1.22386 15 1 14.7761 1 14.5V14ZM9 2H8.5C8.22386 2 8 1.77614 8 1.5V1H8.5C8.77614 1 9 1.22386 9 1.5V2Z"
                                                        fill="Currentcolor" />
                                                </svg>
                                            </div>&nbsp;&nbsp;&nbsp;
                                            <div class="font-medium labelpricingcuotas etiquetadsctoricing fdsbn">
                                                Paga a 4 cuotas sin intereses de s/ 150 PEN con targeta débito o
                                                crédito. <a href="#"
                                                    class="text-bgduoahorrowhite dark:text-bgduoahorrodark">Conoce
                                                    más.</a>
                                            </div>
                                        </div>
                                        <div class="p-6 hidden pt-0 px-7">
                                            <div
                                                class="flex flex-col gap-2 mt-7 font-serif text-sm  text-gray-300 dark:text-pricingtextdark">
                                                @foreach ($plan->plan_detalles as $plan_detalle)
                                                    <div class="flex items-center">
                                                        <div class="text-green dark:text-checkpricingdark ">
                                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM11.3584 5.64645C11.1849 5.47288 10.9154 5.4536 10.7206 5.58859L10.6513 5.64645L7 9.298L5.35355 7.65131L5.28431 7.59346C5.08944 7.45846 4.82001 7.47775 4.64645 7.65131C4.47288 7.82488 4.4536 8.09431 4.58859 8.28917L4.64645 8.35842L6.64645 10.3584L6.71569 10.4163C6.8862 10.5344 7.1138 10.5344 7.28431 10.4163L7.35355 10.3584L11.3584 6.35355L11.4163 6.28431C11.5513 6.08944 11.532 5.82001 11.3584 5.64645Z"
                                                                    fill="Currentcolor" />
                                                            </svg>
                                                        </div>&nbsp;&nbsp;&nbsp;
                                                        <div class="pricingbenefits">
                                                            <p class=""> {{ $plan_detalle->detalle }} </p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @elseif($plan->plan == 'Premium')
                                <div class="card z-50  rounded-xl border border-transparent cursor-pointer "
                                    onclick="cambiarcard('ap3')" id="ap3">
                                    <div
                                        class="clitemm block rounded-2xl  bg-white-100 dark:bg-gray14  text-changedarkwhite dark:text-white-100   group">
                                        <div class="pl-6 pr-6 pt-6 ">
                                            <svg class="mx-auto" width="46" height="46" viewBox="0 0 46 46"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect class="text-green_icono dark:text-btncomentresply"
                                                    x="3" y="3" width="40" height="40"
                                                    rx="20" fill="currentcolor" />
                                                <path
                                                    d="M23.8333 14.6667L16.4112 23.5732C16.1205 23.922 15.9752 24.0964 15.9729 24.2437C15.971 24.3718 16.0281 24.4936 16.1277 24.5741C16.2423 24.6667 16.4693 24.6667 16.9233 24.6667H23L22.1666 31.3333L29.5888 22.4268C29.8794 22.078 30.0248 21.9036 30.027 21.7563C30.0289 21.6282 29.9719 21.5064 29.8723 21.4259C29.7577 21.3333 29.5307 21.3333 29.0766 21.3333H23L23.8333 14.6667Z"
                                                    stroke="#5CD685" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <rect class="text-delesteicono dark:text-green_home" x="3"
                                                    y="3" width="40" height="40" rx="20"
                                                    stroke="currentcolor" stroke-width="6" />
                                            </svg>
                                            <div class="text-center pt-5">
                                                <span
                                                    class="dark:bg-textnavmembership bg-bgbtnblue py-1 text-white-100 text-sm font-inter font-normal rounded-lg px-3">AHORRA
                                                    HASTA 40%</span>
                                            </div>
                                            <div class="flex flex-col justify-between items-center pt-5">
                                                <div class="pricingtitle hidden font-semibold">
                                                    <p
                                                        class="ml-0 font-serif font-bold  text-gray-300 dark:text-gray-100 ">
                                                        {{ $plan->plan }}
                                                    </p>
                                                </div>
                                                <div
                                                    class="dark:text-checkpricingdark text-pricingtextduowhite font-inter font-bold text-xl">
                                                    Plan Primiun
                                                </div>
                                                {{--  <div
                                                class="flex items-center  text-gray-600 dark:text-pricingdarkstudents">
                                                <div>
                                                    <svg width="14" height="16" viewBox="0 0 14 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7 0C4.79086 0 3 1.79086 3 4C3 6.20914 4.79086 8 7 8C9.20914 8 11 6.20914 11 4C11 1.79086 9.20914 0 7 0ZM4 4C4 2.34315 5.34315 1 7 1C8.65685 1 10 2.34315 10 4C10 5.65685 8.65685 7 7 7C5.34315 7 4 5.65685 4 4ZM2.00873 9C0.903151 9 0 9.88687 0 11C0 12.6912 0.83281 13.9663 2.13499 14.7966C3.41697 15.614 5.14526 16 7 16C8.85474 16 10.583 15.614 11.865 14.7966C13.1672 13.9663 14 12.6912 14 11C14 9.89557 13.1045 9.00001 12 9.00001L2.00873 9ZM1 11C1 10.4467 1.44786 10 2.00873 10L12 10C12.5522 10 13 10.4478 13 11C13 12.3088 12.3777 13.2837 11.3274 13.9534C10.2568 14.636 8.73511 15 7 15C5.26489 15 3.74318 14.636 2.67262 13.9534C1.62226 13.2837 1 12.3088 1 11Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </div>&nbsp;
                                                {{ count($plan->planAlumnos) }} estudiantes
                                            </div> --}}
                                            </div>
                                            <div
                                                class="flex flex-row  justify-center text-center items-center font-serif mt-3">
                                                <p class="ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter text-txtnamecomntpkyr dark:text-bgprogresb">{{ $simbolo }}</p>
                                                <p class="ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter text-txtnamecomntpkyr dark:text-bgprogresb"> {{ $precio * $cambio }} </p>
                                                <p
                                                    class="dark:text-pricingdarkstudents text-gray-600 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter">
                                                    {{ $cod_iso }} </p>
                                                <p
                                                    class="dark:text-pricingdarkstudents text-gray-600 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter">
                                                    /anual
                                                </p>
                                            </div>
                                            <div
                                                class="dark:text-graypricingstrike text-graypricingstrike text-center font-inter text-sixteen font-normal pt-2">
                                                2 cursos nuevos cada mes
                                            </div>
                                            <div class="justify-center  text-center items-center  mt-5">
                                                <div class="radio-premium-item">
                                                    <input type="radio" id="radiopanual" name="radiopremium"
                                                        class="form-radio h-5 w-5 text-green" checked>
                                                    <label for="radiopanual"
                                                        class="font-medium dark:text-borderconcours">Anual</label>
                                                </div>
                                                <div class="inline-flex items-center ml-4">
                                                    <div class="radio-premium-item">
                                                        <input type="radio" id="radiopmensual" name="radiopremium"
                                                            class="form-radio h-5 w-5 text-green">
                                                        <label for="radiopmensual"
                                                            class="font-medium dark:text-borderconcours">Mensual</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="justify-center text-center items-center mt-8">
                                                <button wire:click="addPlan({{ $plan->id }})"
                                                    class="outline-nonee xl:text-lg text-sm h-11 items-center font-serif flex justify-center w-full bg-transparent p-1 py-1 px-4  bg-gray-600 font-bold text-white-100 duration-200 transparent rounded">
                                                    Suscríbete a Plan Premium
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="p-6  hidden  justify-center text-xs bg-pricingcintawhite dark:bg-pricingcintadark font-serif ">
                                            <div class="fdsbn">
                                                <svg width="14" height="16" viewBox="0 0 14 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M1.5 0C0.671573 0 0 0.671573 0 1.5V14.5C0 15.3284 0.671573 16 1.5 16H8.5C9.32843 16 10 15.3284 10 14.5V13C10 12.7238 9.77599 12.4998 9.49985 12.4998C9.08657 12.4998 8.82263 12.398 8.64373 12.2639C8.46125 12.127 8.32203 11.9223 8.21988 11.6414C8.00592 11.053 7.99993 10.2742 7.99985 9.49973C7.99984 9.36714 7.94716 9.23999 7.8534 9.14623L7.5666 8.85933C7.45782 8.75044 7.3251 8.61759 6.35356 7.64618C5.88667 7.17934 5.75014 6.86588 5.72435 6.69089C5.70385 6.55183 5.74583 6.45651 5.84563 6.361C6.06033 6.15555 6.21264 6.01659 6.38518 5.97463C6.48906 5.94937 6.72441 5.93132 7.14647 6.35333L10.1464 9.35331C10.3417 9.54857 10.6583 9.54857 10.8536 9.35331C11.0488 9.15805 11.0488 8.84146 10.8536 8.6462L10 7.79263V4.70711L12.5607 7.26777C12.842 7.54907 13 7.9306 13 8.32843V15.5C13 15.7761 13.2239 16 13.5 16C13.7761 16 14 15.7761 14 15.5V8.32843C14 7.66539 13.7366 7.0295 13.2678 6.56066L10 3.29289V1.5C10 0.671573 9.32843 0 8.5 0H1.5ZM9 3.49951C9 3.49984 9 3.49918 9 3.49951V6.79264L7.85353 5.64618C7.27551 5.06823 6.7003 4.86887 6.14891 5.00294C6.03719 5.03011 5.9327 5.07032 5.83605 5.11804C5.57067 5.04119 5.29015 5 5 5C3.34315 5 2 6.34315 2 8C2 9.65685 3.34315 11 5 11C5.77173 11 6.47541 10.7086 7.00699 10.2298C7.02414 10.8077 7.0824 11.4395 7.28009 11.9831C7.42795 12.3897 7.66371 12.7788 8.04369 13.0638L8.05012 13.0686C7.44149 13.2597 7 13.8283 7 14.5V15H3V14.5C3 13.6716 2.32843 13 1.5 13H1V3H1.5C2.32843 3 3 2.32843 3 1.5V1H7V1.5C7 2.32843 7.67157 3 8.5 3H9V3.49951ZM8.99985 14.4998L8.99993 14.5086C8.99534 14.7808 8.77327 15 8.5 15H8V14.5C8 14.2239 8.22386 14 8.5 14H8.99985V14.4998ZM3 8C3 6.93775 3.82814 6.06891 4.87401 6.0039C4.75028 6.23482 4.68743 6.51371 4.73503 6.8367C4.80612 7.31904 5.11334 7.82022 5.6465 8.35332L6.55324 9.26004C6.18654 9.71151 5.62696 10 5 10C3.89543 10 3 9.10457 3 8ZM2 1V1.5C2 1.77614 1.77614 2 1.5 2H1V1.5C1 1.22386 1.22386 1 1.5 1H2ZM1 14H1.5C1.77614 14 2 14.2239 2 14.5V15H1.5C1.22386 15 1 14.7761 1 14.5V14ZM9 2H8.5C8.22386 2 8 1.77614 8 1.5V1H8.5C8.77614 1 9 1.22386 9 1.5V2Z"
                                                        fill="Currentcolor" />
                                                </svg>
                                            </div>&nbsp;&nbsp;&nbsp;
                                            <div class="font-medium labelpricingcuotas etiquetadsctoricing fdsbn">
                                                Paga a 4 cuotas sin intereses de s/ 150 PEN con targeta débito o
                                                crédito. <a href="#" class="dark:text-bgduoahorrodark">Conoce
                                                    más.</a>
                                            </div>
                                        </div>
                                        <div class="p-6 hidden pt-0 px-7">
                                            <div
                                                class="flex flex-col gap-2 mt-7 font-serif text-sm  text-gray-300 dark:text-pricingtextdark">
                                                @foreach ($plan->plan_detalles as $plan_detalle)
                                                    <div class="flex items-center">
                                                        <div class="text-green dark:text-checkpricingdark ">
                                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM11.3584 5.64645C11.1849 5.47288 10.9154 5.4536 10.7206 5.58859L10.6513 5.64645L7 9.298L5.35355 7.65131L5.28431 7.59346C5.08944 7.45846 4.82001 7.47775 4.64645 7.65131C4.47288 7.82488 4.4536 8.09431 4.58859 8.28917L4.64645 8.35842L6.64645 10.3584L6.71569 10.4163C6.8862 10.5344 7.1138 10.5344 7.28431 10.4163L7.35355 10.3584L11.3584 6.35355L11.4163 6.28431C11.5513 6.08944 11.532 5.82001 11.3584 5.64645Z"
                                                                    fill="Currentcolor" />
                                                            </svg>
                                                        </div>&nbsp;&nbsp;&nbsp;
                                                        <div class="pricingbenefits">
                                                            <p class=""> {{ $plan_detalle->detalle }} </p>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            @endif
                        @endforeach

                        <script>
                            function cambiarcard(pen) {

                                var carta = document.getElementsByClassName("card");
                                for (let i = 0; i < carta.length; i++) {

                                    carta[i].style.borderColor = "transparent";
                                    /*  if (carta[i].classList.contains('borderactive')) {
                                         carta[i].classList.remove("borderactive")
                                         
                                     } */


                                }
                                var objet = document.getElementById(pen);
                               /*  carta.style.borderStyle = "none"; */
                                 document.getElementById(pen).style.borderColor="#33cc66";

                            }
                        </script>
                    </div>
                    <div class="top-96 mt-16 absolute w-full">
                        <div class="grid grid-cols-4 w-full  dark:bg-gray12 bg-white2  py-5 px-6">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center text-sixteen">
                                <div class="pr-2">Cursos</div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283957)">
                                        <path
                                            d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                            stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283957">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                5 cursos de tu preferencia</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                Más de +89 cursos</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                Más de +89 cursos</div>
                        </div>
                        <div class="grid grid-cols-4 w-full  bg-white-100 dark:bg-gray14   py-5 px-6">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center text-sixteen">
                                <div class="pr-2">Estudiantes</div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283957)">
                                        <path
                                            d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                            stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283957">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                1</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                1</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                2</div>
                        </div>
                        <div class="grid grid-cols-4 w-full  dark:bg-gray12 bg-white2  py-5 px-6">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center text-sixteen">
                                <div class="pr-2">Certificación de finalización</div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283957)">
                                        <path
                                            d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                            stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283957">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283704)">
                                        <path
                                            d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                            stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283704">
                                            <rect width="24" height="24" rx="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283704)">
                                        <path
                                            d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                            stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283704">
                                            <rect width="24" height="24" rx="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283704)">
                                        <path
                                            d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                            stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283704">
                                            <rect width="24" height="24" rx="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 w-full  bg-white-100 dark:bg-gray14   py-5 px-6">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center text-sixteen">
                                <div class="pr-2">Especialidades</div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283957)">
                                        <path
                                            d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                            stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283957">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                -</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                12 especialidades</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                12 especialidades</div>
                        </div>
                        <div class="grid grid-cols-4 w-full  dark:bg-gray12 bg-white2  py-5 px-6">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center text-sixteen">
                                <div class="pr-2">Cursos nuevos</div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283957)">
                                        <path
                                            d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                            stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283957">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                5 cursos de tu preferencia</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                Más de +89 cursos</div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                Más de +89 cursos</div>
                        </div>
                        <div class="grid grid-cols-4 w-full  bg-white-100 dark:bg-gray14   py-5 px-6">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center text-sixteen">
                                <div class="pr-2">Plantillas descargables</div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283957)">
                                        <path
                                            d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                            stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283957">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto " width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 w-full  dark:bg-gray12 bg-white2  py-5 px-6">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center text-sixteen">
                                <div class="pr-2">Tutor experto por WhatsApp</div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_8172_283957)">
                                        <path
                                            d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                            stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_8172_283957">
                                            <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal text-sixteen text-center">
                                <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class=" lg:hidden grid grid-cols-1 pt-16 ">

                @foreach ($planes as $plan)
                    @php
                        $precio = round($plan->plan == 'Básico' ? $plan->precio : ($plan->plan == 'Premium' ? $plan->precio / 12 : 1 + $plan->precio / 12));
                    @endphp
    
    
    
                    @if ($plan->plan == 'Básico')
                        <a href="#" class="clitemm block sm:w-3/4 w-full mx-auto rounded-xl">
                            <div
                                class=" rounded-2xl  bg-white-100 dark:bg-gray14  text-changedarkwhite dark:text-white-100   group ">
                                <div class="p-4">
    
                                    <svg class="sm:mx-auto text-left" width="46" height="46" viewBox="0 0 46 46"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect class="text-green_icono dark:text-btncomentresply" x="3"
                                            y="3" width="40" height="40" rx="20"
                                            fill="currentColor" />
                                        <path
                                            d="M14.6667 25.0833L22.7019 29.1009C22.8113 29.1556 22.8659 29.1829 22.9232 29.1937C22.974 29.2032 23.0261 29.2032 23.0769 29.1937C23.1342 29.1829 23.1889 29.1556 23.2982 29.1009L31.3334 25.0833M14.6667 20.9167L22.7019 16.8991C22.8113 16.8444 22.8659 16.8171 22.9232 16.8063C22.974 16.7968 23.0261 16.7968 23.0769 16.8063C23.1342 16.8171 23.1889 16.8444 23.2982 16.8991L31.3334 20.9167L23.2982 24.9343C23.1889 24.9889 23.1342 25.0163 23.0769 25.027C23.0261 25.0365 22.974 25.0365 22.9232 25.027C22.8659 25.0163 22.8113 24.9889 22.7019 24.9343L14.6667 20.9167Z"
                                            stroke="#5CD685" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <rect class="text-delesteicono dark:text-green_home" x="3"
                                            y="3" width="40" height="40" rx="20"
                                            stroke="currentcolor" stroke-width="6" />
                                    </svg>
    
    
    
    
                                    <div class="sm:text-center text-left   pt-5">
                                        <div class="ml-0 hidden font-serif font-bold pricingtitle ">
                                            {{ $plan->plan }}
                                        </div>
                                        <div
                                            class="dark:text-checkpricingdark text-pricingtextduowhite font-inter font-bold text-xl">
                                            plan
                                            lite
                                        </div>
                                        {{--  <div
                                            class="flex items-center sm:justify-center justify-start text-gray-600 dark:text-pricingdarkstudents">
                                            <div>
                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7 0C4.79086 0 3 1.79086 3 4C3 6.20914 4.79086 8 7 8C9.20914 8 11 6.20914 11 4C11 1.79086 9.20914 0 7 0ZM4 4C4 2.34315 5.34315 1 7 1C8.65685 1 10 2.34315 10 4C10 5.65685 8.65685 7 7 7C5.34315 7 4 5.65685 4 4ZM2.00873 9C0.903151 9 0 9.88687 0 11C0 12.6912 0.83281 13.9663 2.13499 14.7966C3.41697 15.614 5.14526 16 7 16C8.85474 16 10.583 15.614 11.865 14.7966C13.1672 13.9663 14 12.6912 14 11C14 9.89557 13.1045 9.00001 12 9.00001L2.00873 9ZM1 11C1 10.4467 1.44786 10 2.00873 10L12 10C12.5522 10 13 10.4478 13 11C13 12.3088 12.3777 13.2837 11.3274 13.9534C10.2568 14.636 8.73511 15 7 15C5.26489 15 3.74318 14.636 2.67262 13.9534C1.62226 13.2837 1 12.3088 1 11Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </div>&nbsp;
                                            {{ count($plan->planAlumnos) }} estudiantes
                                        </div> --}}
                                    </div>
                                    <div
                                        class="flex flex-row  sm:justify-center justify-start items-center font-serif mt-2">
                                        <p class="ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter">{{ $simbolo }}</p>
                                        <p class="ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter"> {{ $precio * $cambio }} </p>
                                        <p
                                            class="dark:text-pricingdarkstudents text-gray-600 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter items-bottom ">
                                            {{ $cod_iso }} </p>
                                        <p
                                            class="dark:text-pricingdarkstudents text-gray-600 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter">
                                            /mes
                                        </p>
                                    </div>
                                    <div
                                        class="text-graypricingstrike sm:text-center text-left font-inter text-sixteen font-normal pt-2">
                                        El plan más popular
                                    </div>
                                    <div class="justify-center sm:text-center text-left items-center pt-8">
                                        <div class="radio-premium-item">
                                            <input type="radio" id="radiobmensual"
                                                class="form-radio h-5 w-5 text-green" checked>
                                            <label for="radioanual"
                                                class="font-medium dark:text-borderconcours">Mensual</label>
                                        </div>
                                    </div>
                                    <div class="justify-center text-center items-center py-8 ">
                                        <button wire:click="addPlan({{ $plan->id }})"
                                            class="outline-nonee h-11 items-center font-serif flex justify-center w-full bg-transparent p-1 py-1 px-4 bg-bcklightbuscador   font-bold text-white-100 duration-200   rounded">
                                            Suscribirse
                                        </button>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex  justify-between w-full  dark:bg-gray12 bg-white2 py-5 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Cursos</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            5 cursos de tu preferencia</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4 ">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Estudiantes</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            1</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Certificación de finalización</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283704)">
                                                    <path
                                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283704">
                                                        <rect width="24" height="24" rx="12"
                                                            fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Especialidades</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            -</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2 ">Cursos nuevos</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
    
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            5 cursos de tu preferencia</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Plantillas descargables</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                    stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Tutor experto por WhatsApp</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                    stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
    
                                    </div>
                                </div>
    
    
                                <div class="hidden">
                                    <div
                                        class="px-3  flex-col gap-2 mt-12 font-serif text-sm  text-gray-300 dark:text-pricingtextdark">
                                        @foreach ($plan->plan_detalles as $plan_detalle)
                                            <div class="flex items-center">
                                                <div class="text-green dark:text-checkpricingdark ">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM11.3584 5.64645C11.1849 5.47288 10.9154 5.4536 10.7206 5.58859L10.6513 5.64645L7 9.298L5.35355 7.65131L5.28431 7.59346C5.08944 7.45846 4.82001 7.47775 4.64645 7.65131C4.47288 7.82488 4.4536 8.09431 4.58859 8.28917L4.64645 8.35842L6.64645 10.3584L6.71569 10.4163C6.8862 10.5344 7.1138 10.5344 7.28431 10.4163L7.35355 10.3584L11.3584 6.35355L11.4163 6.28431C11.5513 6.08944 11.532 5.82001 11.3584 5.64645Z"
                                                            fill="Currentcolor" />
                                                    </svg>
                                                </div>&nbsp;&nbsp;&nbsp;
                                                <div class="pricingbenefits">
                                                    <p class=""> {{ $plan_detalle->detalle }} </p>
                                                </div>
                                            </div>
                                        @endforeach
    
                                    </div>
                                </div>
                            </div>
                        </a>
                    @elseif($plan->plan == 'Plan Duo')
                        <div class=" cursor-pointer pt-32 rounded-xl sm:w-3/4 w-full mx-auto">
                            <div
                                class="clitemm ml:block   rounded-2xl  bg-white-100 dark:bg-gray14    text-changedarkwhite dark:text-white-100   group  ">
                                <div class="p-4 pb-2">
    
                                    <svg class="sm:mx-auto text-left" width="46" height="46" viewBox="0 0 46 46"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect class="text-green_icono dark:text-btncomentresply" x="3"
                                            y="3" width="40" height="40" rx="20"
                                            fill="currentColor" />
                                        <path
                                            d="M14.6667 25.0833L22.7019 29.1009C22.8113 29.1556 22.8659 29.1829 22.9232 29.1937C22.974 29.2032 23.0261 29.2032 23.0769 29.1937C23.1342 29.1829 23.1889 29.1556 23.2982 29.1009L31.3334 25.0833M14.6667 20.9167L22.7019 16.8991C22.8113 16.8444 22.8659 16.8171 22.9232 16.8063C22.974 16.7968 23.0261 16.7968 23.0769 16.8063C23.1342 16.8171 23.1889 16.8444 23.2982 16.8991L31.3334 20.9167L23.2982 24.9343C23.1889 24.9889 23.1342 25.0163 23.0769 25.027C23.0261 25.0365 22.974 25.0365 22.9232 25.027C22.8659 25.0163 22.8113 24.9889 22.7019 24.9343L14.6667 20.9167Z"
                                            stroke="#5CD685" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <rect class="text-delesteicono dark:text-green_home" x="3"
                                            y="3" width="40" height="40" rx="20"
                                            stroke="currentcolor" stroke-width="6" />
                                    </svg>
    
                                    <div class="sm:text-center text-left pt-5">
                                        <span
                                            class="dark:bg-textnavmembership bg-bgbtnblue py-1 text-white-100 text-sm font-inter font-normal rounded-lg px-3">AHORRA
                                            HASTA 40%</span>
                                    </div>
    
                                    <div class=" sm:text-center text-left items-center pt-5">
                                        {{--  <div class=" hidden font-semibold">
                                            <p
                                                class="ml-0 font-serif font-bold pricingtitle text-pricingtextduowhite dark:text-green ">
                                                {{ $plan->plan }}
                                            </p>
                                        </div> --}}
                                        <div
                                            class="dark:text-checkpricingdark text-pricingtextduowhite font-inter font-bold text-xl">
                                            plan
                                            Duo
                                        </div>
                                        {{--  <div
                                            class="flex  sm:justify-center justify-start items-center  text-gray-600 dark:text-pricingdarkstudents">
                                            <div>
                                                <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7 0C4.79086 0 3 1.79086 3 4C3 6.20914 4.79086 8 7 8C9.20914 8 11 6.20914 11 4C11 1.79086 9.20914 0 7 0ZM4 4C4 2.34315 5.34315 1 7 1C8.65685 1 10 2.34315 10 4C10 5.65685 8.65685 7 7 7C5.34315 7 4 5.65685 4 4ZM2.00873 9C0.903151 9 0 9.88687 0 11C0 12.6912 0.83281 13.9663 2.13499 14.7966C3.41697 15.614 5.14526 16 7 16C8.85474 16 10.583 15.614 11.865 14.7966C13.1672 13.9663 14 12.6912 14 11C14 9.89557 13.1045 9.00001 12 9.00001L2.00873 9ZM1 11C1 10.4467 1.44786 10 2.00873 10L12 10C12.5522 10 13 10.4478 13 11C13 12.3088 12.3777 13.2837 11.3274 13.9534C10.2568 14.636 8.73511 15 7 15C5.26489 15 3.74318 14.636 2.67262 13.9534C1.62226 13.2837 1 12.3088 1 11Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </div>
                                            <div> {{ count($plan->planAlumnos) }} estudiantes</div>
                                        </div> --}}
                                    </div>
                                    <div class=" flex-col hidden items-center mt-5">
                                        <p
                                            class="rounded-md  py-1.5 px-2.5 text-white-100 dark:text-gray-300
                                               bg-bgduoahorrowhite dark:bg-bgduoahorrodark text-sm font-serif font-medium ">
                                            Ahorra hasta 92%
                                        </p>
                                    </div>
                                    <div
                                        class="flex flex-row mt-2  sm:justify-center justify-start  text-center items-center font-serif">
                                        <p class="ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter">{{ $simbolo }}</p>
                                        <p class="pricingpremium font-bold"> {{ $precio * $cambio }} </p>
                                        <p
                                            class=" dark:text-pricingdarkstudents text-gray-600 text-4xl font-inter  font-bold items-bottom ">
                                            {{ $cod_iso }} </p>
                                        <p
                                            class="dark:text-pricingdarkstudents text-gray-600 ml:text-4xl xl:text-4xl lg:text-2xl md:text-4xl text-4xl font-bold font-inter font-inter">
                                            /anual
                                        </p>
    
                                    </div>
                                    <div
                                        class="dark:text-graypricingstrike text-graypricingstrike sm:text-center text-left font-inter text-sixteen  font-normal pt-2">
                                        Perfecto para 2 personas
                                    </div>
                                    <div class="sm:text-center text-left items-center pt-8 ">
                                        <div class="radio-premium-item">
                                            <input type="radio" id="radioanual" name="radioduo"
                                                class="form-radio h-5 w-5 text-green" checked>
                                            <label for="radioanual"
                                                class="font-medium dark:text-borderconcours">Anual</label>
                                        </div>
                                        <div class="inline-flex items-center ml-4">
                                            <div class="radio-premium-item">
                                                <input type="radio" id="radiomensual" name="radioduo"
                                                    class="form-radio h-5 w-5 text-green">
                                                <label for="radiomensual"
                                                    class="font-medium dark:text-borderconcours">Mensual</label>
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="justify-center text-center items-center py-8">
                                        <button wire:click="addPlan({{ $plan->id }})"
                                            class="outline-nonee h-11 items-center font-serif flex justify-center w-full bg-transparent p-1 py-1 px-4  bg-gray-600 font-bold text-white-100 duration-200  hover:border-transparent rounded">
                                            Suscribirse
                                        </button>
                                    </div>
                                </div>
    
                                <div class="flex flex-col">
                                    <div class="flex  justify-between w-full  dark:bg-gray12 bg-white2 py-5 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Cursos</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            5 cursos de tu preferencia</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4 ">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Estudiantes</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm  text-center">
                                            1</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Certificación de finalización</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283704)">
                                                    <path
                                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283704">
                                                        <rect width="24" height="24" rx="12"
                                                            fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Especialidades</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            -</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Cursos nuevos</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            5 cursos de tu preferencia</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Plantillas descargables</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                    stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Tutor experto por WhatsApp</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                    stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
    
                                    </div>
                                </div>
    
                               {{--  <div
                                    class="p-6  hidden justify-center text-xs bg-pricingcintawhite dark:bg-pricingcintadark font-serif ">
                                    <div>
                                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.5 0C0.671573 0 0 0.671573 0 1.5V14.5C0 15.3284 0.671573 16 1.5 16H8.5C9.32843 16 10 15.3284 10 14.5V13C10 12.7238 9.77599 12.4998 9.49985 12.4998C9.08657 12.4998 8.82263 12.398 8.64373 12.2639C8.46125 12.127 8.32203 11.9223 8.21988 11.6414C8.00592 11.053 7.99993 10.2742 7.99985 9.49973C7.99984 9.36714 7.94716 9.23999 7.8534 9.14623L7.5666 8.85933C7.45782 8.75044 7.3251 8.61759 6.35356 7.64618C5.88667 7.17934 5.75014 6.86588 5.72435 6.69089C5.70385 6.55183 5.74583 6.45651 5.84563 6.361C6.06033 6.15555 6.21264 6.01659 6.38518 5.97463C6.48906 5.94937 6.72441 5.93132 7.14647 6.35333L10.1464 9.35331C10.3417 9.54857 10.6583 9.54857 10.8536 9.35331C11.0488 9.15805 11.0488 8.84146 10.8536 8.6462L10 7.79263V4.70711L12.5607 7.26777C12.842 7.54907 13 7.9306 13 8.32843V15.5C13 15.7761 13.2239 16 13.5 16C13.7761 16 14 15.7761 14 15.5V8.32843C14 7.66539 13.7366 7.0295 13.2678 6.56066L10 3.29289V1.5C10 0.671573 9.32843 0 8.5 0H1.5ZM9 3.49951C9 3.49984 9 3.49918 9 3.49951V6.79264L7.85353 5.64618C7.27551 5.06823 6.7003 4.86887 6.14891 5.00294C6.03719 5.03011 5.9327 5.07032 5.83605 5.11804C5.57067 5.04119 5.29015 5 5 5C3.34315 5 2 6.34315 2 8C2 9.65685 3.34315 11 5 11C5.77173 11 6.47541 10.7086 7.00699 10.2298C7.02414 10.8077 7.0824 11.4395 7.28009 11.9831C7.42795 12.3897 7.66371 12.7788 8.04369 13.0638L8.05012 13.0686C7.44149 13.2597 7 13.8283 7 14.5V15H3V14.5C3 13.6716 2.32843 13 1.5 13H1V3H1.5C2.32843 3 3 2.32843 3 1.5V1H7V1.5C7 2.32843 7.67157 3 8.5 3H9V3.49951ZM8.99985 14.4998L8.99993 14.5086C8.99534 14.7808 8.77327 15 8.5 15H8V14.5C8 14.2239 8.22386 14 8.5 14H8.99985V14.4998ZM3 8C3 6.93775 3.82814 6.06891 4.87401 6.0039C4.75028 6.23482 4.68743 6.51371 4.73503 6.8367C4.80612 7.31904 5.11334 7.82022 5.6465 8.35332L6.55324 9.26004C6.18654 9.71151 5.62696 10 5 10C3.89543 10 3 9.10457 3 8ZM2 1V1.5C2 1.77614 1.77614 2 1.5 2H1V1.5C1 1.22386 1.22386 1 1.5 1H2ZM1 14H1.5C1.77614 14 2 14.2239 2 14.5V15H1.5C1.22386 15 1 14.7761 1 14.5V14ZM9 2H8.5C8.22386 2 8 1.77614 8 1.5V1H8.5C8.77614 1 9 1.22386 9 1.5V2Z"
                                                fill="Currentcolor" />
                                        </svg>
                                    </div>&nbsp;&nbsp;&nbsp;
                                    <div class="font-medium labelpricingcuotas etiquetadsctoricing fdsbn">
                                        Paga a 4 cuotas sin intereses de s/ 150 PEN con targeta débito o
                                        crédito. <a href="#"
                                            class="text-bgduoahorrowhite dark:text-bgduoahorrodark">Conoce
                                            más.</a>
                                    </div>
                                </div>
                                <div class="p-6 hidden pt-0 px-7">
                                    <div
                                        class="flex flex-col gap-2 mt-7 font-serif text-sm  text-gray-300 dark:text-pricingtextdark">
                                        @foreach ($plan->plan_detalles as $plan_detalle)
                                            <div class="flex items-center">
                                                <div class="text-green dark:text-checkpricingdark ">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM11.3584 5.64645C11.1849 5.47288 10.9154 5.4536 10.7206 5.58859L10.6513 5.64645L7 9.298L5.35355 7.65131L5.28431 7.59346C5.08944 7.45846 4.82001 7.47775 4.64645 7.65131C4.47288 7.82488 4.4536 8.09431 4.58859 8.28917L4.64645 8.35842L6.64645 10.3584L6.71569 10.4163C6.8862 10.5344 7.1138 10.5344 7.28431 10.4163L7.35355 10.3584L11.3584 6.35355L11.4163 6.28431C11.5513 6.08944 11.532 5.82001 11.3584 5.64645Z"
                                                            fill="Currentcolor" />
                                                    </svg>
                                                </div>&nbsp;&nbsp;&nbsp;
                                                <div class="pricingbenefits">
                                                    <p class=""> {{ $plan_detalle->detalle }} </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    @elseif($plan->plan == 'Premium')
                        <div class=" sm:w-3/4 w-full mx-auto pt-32  rounded-xl cursor-pointer " id="senior">
                            <div
                                class="clitemm block rounded-2xl  bg-white-100 dark:bg-gray14  text-changedarkwhite dark:text-white-100   group ">
                                <div class="p-4">
    
                                    <svg class="sm:mx-auto  text-left" width="46" height="46"
                                        viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect class="text-green_icono dark:text-btncomentresply" x="3"
                                            y="3" width="40" height="40" rx="20"
                                            fill="currentcolor" />
                                        <path
                                            d="M23.8333 14.6667L16.4112 23.5732C16.1205 23.922 15.9752 24.0964 15.9729 24.2437C15.971 24.3718 16.0281 24.4936 16.1277 24.5741C16.2423 24.6667 16.4693 24.6667 16.9233 24.6667H23L22.1666 31.3333L29.5888 22.4268C29.8794 22.078 30.0248 21.9036 30.027 21.7563C30.0289 21.6282 29.9719 21.5064 29.8723 21.4259C29.7577 21.3333 29.5307 21.3333 29.0766 21.3333H23L23.8333 14.6667Z"
                                            stroke="#5CD685" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <rect class="text-delesteicono dark:text-green_home" x="3"
                                            y="3" width="40" height="40" rx="20"
                                            stroke="currentcolor" stroke-width="6" />
                                    </svg>
    
                                    <div class="sm:text-center text-left pt-5">
                                        <span
                                            class="dark:bg-textnavmembership bg-bgbtnblue py-1 text-white-100 text-sm font-inter font-normal rounded-lg px-3">AHORRA
                                            HASTA 40%</span>
                                    </div>
    
                                    <div class=" sm:text-center text-left  pt-5">
                                        <div class="pricingtitle hidden font-semibold">
                                            <p class="ml-0 font-serif font-bold  text-gray-300 dark:text-gray-100 ">
                                                {{ $plan->plan }}
                                            </p>
                                        </div>
                                        <div
                                            class="dark:text-checkpricingdark text-pricingtextduowhite font-inter font-bold text-xl">
                                            Plan Primiun
                                        </div>
    
                                        {{-- <div
                                            class="flex items-center sm:justify-center justify-start   text-gray-600 dark:text-pricingdarkstudents">
                                            <div>
                                                <svg width="14" height="16" viewBox="0 0 14 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M7 0C4.79086 0 3 1.79086 3 4C3 6.20914 4.79086 8 7 8C9.20914 8 11 6.20914 11 4C11 1.79086 9.20914 0 7 0ZM4 4C4 2.34315 5.34315 1 7 1C8.65685 1 10 2.34315 10 4C10 5.65685 8.65685 7 7 7C5.34315 7 4 5.65685 4 4ZM2.00873 9C0.903151 9 0 9.88687 0 11C0 12.6912 0.83281 13.9663 2.13499 14.7966C3.41697 15.614 5.14526 16 7 16C8.85474 16 10.583 15.614 11.865 14.7966C13.1672 13.9663 14 12.6912 14 11C14 9.89557 13.1045 9.00001 12 9.00001L2.00873 9ZM1 11C1 10.4467 1.44786 10 2.00873 10L12 10C12.5522 10 13 10.4478 13 11C13 12.3088 12.3777 13.2837 11.3274 13.9534C10.2568 14.636 8.73511 15 7 15C5.26489 15 3.74318 14.636 2.67262 13.9534C1.62226 13.2837 1 12.3088 1 11Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </div>
                                            <div>
                                                {{ count($plan->planAlumnos) }} estudiantes
                                            </div>
                                        </div> --}}
    
    
                                    </div>
    
                                    <div
                                        class="flex flex-row  sm:justify-center justify-start text-center items-center font-serif mt-3">
                                        <p class="text-4xl font-bold">{{ $simbolo }}</p>
                                        <p class="pricingpremium font-bold"> {{ $precio * $cambio }} </p>
                                        <p
                                            class="dark:text-pricingdarkstudents text-gray-600 text-4xl font-inter  font-bold">
                                            {{ $cod_iso }} </p>
                                        <p
                                            class="dark:text-pricingdarkstudents text-gray-600 text-4xl font-bold font-inter">
                                            /anual
                                        </p>
                                    </div>
                                    <div
                                        class="dark:text-graypricingstrike sm:text-center text-left  text-graypricingstrike  font-inter text-sixteen font-normal pt-2">
                                        2 cursos nuevos cada mes
                                    </div>
                                    <div class="justify-center  sm:text-center text-left items-center pt-8">
                                        <div class="radio-premium-item">
                                            <input type="radio" id="radiopanual" name="radiopremium"
                                                class="form-radio h-5 w-5 text-green" checked>
                                            <label for="radiopanual"
                                                class="font-medium dark:text-borderconcours">Anual</label>
                                        </div>
                                        <div class="inline-flex items-center ml-4">
                                            <div class="radio-premium-item">
                                                <input type="radio" id="radiopmensual" name="radiopremium"
                                                    class="form-radio h-5 w-5 text-green">
                                                <label for="radiopmensual"
                                                    class="font-medium dark:text-borderconcours">Mensual</label>
                                            </div>
    
                                        </div>
                                    </div>
                                    <div class="justify-center text-center items-center py-8">
                                        <button wire:click="addPlan({{ $plan->id }})"
                                            class="outline-nonee h-11 items-center font-serif flex justify-center w-full bg-transparent p-1 py-1 px-4  bg-gray-600 font-bold text-white-100 duration-200 transparent rounded">
                                            Suscríbete a Plan Premium
                                        </button>
                                    </div>
                                </div>
                                {{-- <div
                                    class="p-6  hidden  justify-center text-xs bg-pricingcintawhite dark:bg-pricingcintadark font-serif ">
                                    <div class="fdsbn">
                                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.5 0C0.671573 0 0 0.671573 0 1.5V14.5C0 15.3284 0.671573 16 1.5 16H8.5C9.32843 16 10 15.3284 10 14.5V13C10 12.7238 9.77599 12.4998 9.49985 12.4998C9.08657 12.4998 8.82263 12.398 8.64373 12.2639C8.46125 12.127 8.32203 11.9223 8.21988 11.6414C8.00592 11.053 7.99993 10.2742 7.99985 9.49973C7.99984 9.36714 7.94716 9.23999 7.8534 9.14623L7.5666 8.85933C7.45782 8.75044 7.3251 8.61759 6.35356 7.64618C5.88667 7.17934 5.75014 6.86588 5.72435 6.69089C5.70385 6.55183 5.74583 6.45651 5.84563 6.361C6.06033 6.15555 6.21264 6.01659 6.38518 5.97463C6.48906 5.94937 6.72441 5.93132 7.14647 6.35333L10.1464 9.35331C10.3417 9.54857 10.6583 9.54857 10.8536 9.35331C11.0488 9.15805 11.0488 8.84146 10.8536 8.6462L10 7.79263V4.70711L12.5607 7.26777C12.842 7.54907 13 7.9306 13 8.32843V15.5C13 15.7761 13.2239 16 13.5 16C13.7761 16 14 15.7761 14 15.5V8.32843C14 7.66539 13.7366 7.0295 13.2678 6.56066L10 3.29289V1.5C10 0.671573 9.32843 0 8.5 0H1.5ZM9 3.49951C9 3.49984 9 3.49918 9 3.49951V6.79264L7.85353 5.64618C7.27551 5.06823 6.7003 4.86887 6.14891 5.00294C6.03719 5.03011 5.9327 5.07032 5.83605 5.11804C5.57067 5.04119 5.29015 5 5 5C3.34315 5 2 6.34315 2 8C2 9.65685 3.34315 11 5 11C5.77173 11 6.47541 10.7086 7.00699 10.2298C7.02414 10.8077 7.0824 11.4395 7.28009 11.9831C7.42795 12.3897 7.66371 12.7788 8.04369 13.0638L8.05012 13.0686C7.44149 13.2597 7 13.8283 7 14.5V15H3V14.5C3 13.6716 2.32843 13 1.5 13H1V3H1.5C2.32843 3 3 2.32843 3 1.5V1H7V1.5C7 2.32843 7.67157 3 8.5 3H9V3.49951ZM8.99985 14.4998L8.99993 14.5086C8.99534 14.7808 8.77327 15 8.5 15H8V14.5C8 14.2239 8.22386 14 8.5 14H8.99985V14.4998ZM3 8C3 6.93775 3.82814 6.06891 4.87401 6.0039C4.75028 6.23482 4.68743 6.51371 4.73503 6.8367C4.80612 7.31904 5.11334 7.82022 5.6465 8.35332L6.55324 9.26004C6.18654 9.71151 5.62696 10 5 10C3.89543 10 3 9.10457 3 8ZM2 1V1.5C2 1.77614 1.77614 2 1.5 2H1V1.5C1 1.22386 1.22386 1 1.5 1H2ZM1 14H1.5C1.77614 14 2 14.2239 2 14.5V15H1.5C1.22386 15 1 14.7761 1 14.5V14ZM9 2H8.5C8.22386 2 8 1.77614 8 1.5V1H8.5C8.77614 1 9 1.22386 9 1.5V2Z"
                                                fill="Currentcolor" />
                                        </svg>
                                    </div>&nbsp;&nbsp;&nbsp;
                                    <div class="font-medium labelpricingcuotas etiquetadsctoricing fdsbn">
                                        Paga a 4 cuotas sin intereses de s/ 150 PEN con targeta débito o
                                        crédito. <a href="#" class="dark:text-bgduoahorrodark">Conoce
                                            más.</a>
                                    </div>
                                </div> --}}
    
                                <div class="flex flex-col">
                                    <div class="flex  justify-between w-full  dark:bg-gray12 bg-white2 py-5 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm ">
                                            <div class="pr-2">Cursos</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            5 cursos de tu preferencia</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4 ">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Estudiantes</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            1</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Certificación de finalización</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283704)">
                                                    <path
                                                        d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                        stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283704">
                                                        <rect width="24" height="24" rx="12"
                                                            fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Especialidades</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            12</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Cursos nuevos</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            5 cursos de tu preferencia</div>
    
                                    </div>
                                    <div class="flex justify-between w-full  bg-white-100 dark:bg-gray14   py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Plantillas descargables</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                    stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
    
                                    </div>
                                    <div class="flex justify-between w-full  dark:bg-gray12 bg-white2  py-4 px-4">
                                        <div
                                            class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter flex font-normal items-center sm:text-sixteen text-sm">
                                            <div class="pr-2">Tutor experto por WhatsApp</div>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_8172_283957)">
                                                    <path
                                                        d="M6.06004 5.99998C6.21678 5.55442 6.52614 5.17872 6.93334 4.9394C7.34055 4.70009 7.8193 4.61261 8.28483 4.69245C8.75035 4.7723 9.17259 5.01433 9.47676 5.37567C9.78093 5.737 9.94741 6.19433 9.94671 6.66665C9.94671 7.99998 7.94671 8.66665 7.94671 8.66665M8.00004 11.3333H8.00671M14.6667 7.99998C14.6667 11.6819 11.6819 14.6666 8.00004 14.6666C4.31814 14.6666 1.33337 11.6819 1.33337 7.99998C1.33337 4.31808 4.31814 1.33331 8.00004 1.33331C11.6819 1.33331 14.6667 4.31808 14.6667 7.99998Z"
                                                        stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_8172_283957">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div
                                            class="dark:text-pricingdarkstudents text-gray-600  font-inter  font-normal sm:text-sixteen text-sm text-center">
                                            <svg class="mx-auto" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.5 12L10.5 15L16.5 9M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                    stroke="#29A352" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </div>
    
                                    </div>
                                </div>
    
    
    
    
    
    
                               {{--  <div class="p-6 hidden pt-0 px-7">
                                    <div
                                        class="flex flex-col gap-2 mt-7 font-serif text-sm  text-gray-300 dark:text-pricingtextdark">
                                        @foreach ($plan->plan_detalles as $plan_detalle)
                                            <div class="flex items-center">
                                                <div class="text-green dark:text-checkpricingdark ">
                                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8 0C12.4183 0 16 3.58172 16 8C16 12.4183 12.4183 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0ZM11.3584 5.64645C11.1849 5.47288 10.9154 5.4536 10.7206 5.58859L10.6513 5.64645L7 9.298L5.35355 7.65131L5.28431 7.59346C5.08944 7.45846 4.82001 7.47775 4.64645 7.65131C4.47288 7.82488 4.4536 8.09431 4.58859 8.28917L4.64645 8.35842L6.64645 10.3584L6.71569 10.4163C6.8862 10.5344 7.1138 10.5344 7.28431 10.4163L7.35355 10.3584L11.3584 6.35355L11.4163 6.28431C11.5513 6.08944 11.532 5.82001 11.3584 5.64645Z"
                                                            fill="Currentcolor" />
                                                    </svg>
                                                </div>&nbsp;&nbsp;&nbsp;
                                                <div class="pricingbenefits">
                                                    <p class=""> {{ $plan_detalle->detalle }} </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div> --}}
    
    
                            </div>
                        </div>
                    @endif
                @endforeach
    
    
    
    
    
            </div>

        </div>




        <div class="flex justify-center my-12">
            <div class="flex items-center pricingbenefits flex-col md:flex-row font-medium">
                <div>Usa el tipo de pago de tu preferencia</div>&nbsp;&nbsp;&nbsp;
                <div class="flex">
                    <svg width="14" height="17" viewBox="0 0 14 17" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.5005 1.70005C10.8005 0.900018 9.50041 0.5 7.70033 0.5H2.70012C2.4001 0.5 2.10009 0.800013 2.00009 1.10003L0 14.2006C0 14.5006 0.200009 14.7006 0.400017 14.7006H3.50015L4.30019 9.8004V10.0004C4.40019 9.7004 4.7002 9.40038 5.00022 9.40038H6.50028C9.4004 9.40038 11.6005 8.20033 12.3005 4.90019V4.60018C12.2005 4.60018 12.2005 4.60018 12.3005 4.60018C12.4005 3.30012 12.2005 2.50009 11.5005 1.70005"
                            fill="#263B80" />
                        <path
                            d="M12.1996 4.59961V4.89962C11.4996 8.29977 9.29948 9.39982 6.39936 9.39982H4.89929C4.59928 9.39982 4.29927 9.69983 4.19926 9.99984L3.19922 16.1001C3.19922 16.3001 3.29922 16.5001 3.59924 16.5001H6.19935C6.49936 16.5001 6.79937 16.3001 6.79937 16.0001V15.9001L7.2994 12.8V12.6C7.2994 12.2999 7.59941 12.0999 7.89942 12.0999H8.29944C10.7995 12.0999 12.7996 11.0999 13.2997 8.09976C13.4997 6.89971 13.3997 5.79966 12.7996 5.09963C12.6996 4.89962 12.4996 4.69961 12.1996 4.59961Z"
                            fill="#139AD6" />
                        <path
                            d="M11.5001 4.30001C11.4001 4.30001 11.3001 4.20001 11.2001 4.20001C11.1001 4.20001 11.0001 4.20001 10.9001 4.1C10.5001 4 10.1001 4 9.60003 4H5.69986C5.59986 4 5.49986 4 5.39985 4.1C5.19984 4.20001 5.09984 4.40002 5.09984 4.60003L4.2998 9.80025V10.0003C4.39981 9.70025 4.69982 9.40023 4.99983 9.40023H6.4999C9.40002 9.40023 11.6001 8.20018 12.3001 4.90004C12.3001 4.80003 12.3001 4.70003 12.4002 4.60003C12.2001 4.50002 12.1001 4.40002 11.9001 4.40002C11.6001 4.30001 11.6001 4.30001 11.5001 4.30001"
                            fill="#232C65" />
                    </svg>



                </div>
            </div>

        </div>


        <div class=" xsm:col-span-12 pt-2 xl:col-span-12 xl:pt-10 font-serif text-center bg-white-100 dark:bg-gray14">
            <div class="text-gray-500 dark:text-bordersec text-3xl font-bold mb-12">Preguntas frecuentes</div>

            <div class="bg-white-100 dark:bg-gray14">
                <div class="max-w-cardpfpremium m-auto pt-0 bg-white-100 dark:bg-gray14 pb-8">
                    @foreach ($preg_prems as $key => $preg_prem)
                        {{--  {{$preg_prem->idpreguntap}} --}}
                        <div class="px-5 md:px-6 my-1 pb-2">
                            <div class="justify-start pregcar">
                                <button
                                    class="bg-pricingcintawhite w-full dark:bg-pricingdark dark:text-bordersec  rounded-md py-3.5 pl-8 text-left relative text-xl text-textpricingwhite font-semibold focus:outline-none"
                                    id="play{{ $key + 1 }}">
                                    <div class="font-bold"
                                        onclick="openpr('play{{ $key + 1 }}','icon{{ $key + 1 }}')">
                                        {{ $preg_prem->pregunta }}</div>
                                    <div
                                        class="dark:bg-pricingdark dark:text-white-100 absolute pr-8 right-4 top-3 txtsemorepremium">
                                    </div>
                                </button>
                            </div>
                            <div class="text-navtextwhite hidden dark:bg-pricingdark bg-pricingcintawhite dark:text-bordersec font-serif text-justify  px-8 py-3"
                                id="icon{{ $key + 1 }}">
                                {!! nl2br($preg_prem->respuesta) !!}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>






    <!-- Does this resource worth a follow? -->
    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="Buy me a beer" href="https://www.twitter.com/asad_codes" target="_blank"
                class="block w-16 h-16 rounded-full transition-all shadow hover: transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full"
                    src="https://www.imore.com/sites/imore.com/files/styles/large/public/field/image/2019/12/twitter-logo.jpg" />
            </a>
        </div>
    </div>
    @push('js')
        <script>
            var izquierda = document.getElementById("izquierda");
            var derecha = document.getElementById("derecha");
            var izquimero = document.getElementById("izquimero");
            var deremo = document.getElementById("deremo");
            izquierda.addEventListener('click', function() {
                // icon.classList.remove('hidden');

                deremo.classList.toggle('hidden');
                izquimero.classList.toggle('hidden');

            });
            derecha.addEventListener('click', function() {
                // icon.classList.remove('hidden');

                izquimero.classList.toggle('hidden');
                deremo.classList.toggle('hidden');

            });
        </script>
        <script>
            function openpr(play, icon) {
                var playe = document.getElementById(play);
                var icone = document.getElementById(icon);
                icone.classList.toggle('hidden');
                playe.classList.toggle('active');
            }
        </script>
        <script>
            function opencl(varcl, varbcl) {
                var varcl = varcl;
                var varbcl = varbcl;
                var collectioncl = document.getElementsByClassName("clitemm");
                var collectionbcl = document.getElementsByClassName("btnnavplayero");
                for (i = 0; i < collectioncl.length; i++) {
                    if (collectioncl[i].classList.contains('hidden')) {} else {
                        collectioncl[i].classList.add('hidden');
                    }
                    if (collectionbcl[i].classList.contains('btnmaterialactivo')) {
                        collectionbcl[i].classList.remove('btnmaterialactivo');
                    }
                }
                document.getElementById(varcl).classList.remove('hidden');
                document.getElementById(varbcl).classList.add('btnmaterialactivo');
            }
        </script>
    @endpush
</div>
