@extends('layout')

@section('content')
    <style>
        .contentmygo {
            display: none !important;
        }

        .footeracceso {
            display: none !important;
        }
    </style>

    <div class="">

        <div class="sm:grid-cols-6 grid-cols-1 relative h-screen grid" x-data="general()">
            <div class="lg:col-span-1 col-span-2 sm:relative absolute inset-x-0     dark:bg-graydat bg-whiteheader ">
                <div class="sm:pt-16 pt-5  sm:pb-8 pb-5 px-4  ">
                    <div class="flex sm:justify-center justify-between items-center">
                        <div class="flex">

                            {{--  ################ boton de esplegable deopciones version movil ####################### --}}
                            <div class="flex sm:hidden  relative">
                                <button class="pr-3 focus:outline-none" id="actiperfil"> 
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6H20M4 12H20M4 18H20" stroke="#CDD5DF" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>

                                </button>

                                <div class="absolute top-10  flex-col dark:bg-gray9 bg-white2 px-0 py-3 rounded-lg  " style="display:none;"  id="contemovil" >
                                    <button x-on:click="seccion(1) "
                                    class="flex w-full px-3.5 py-2 rounded-md  dark:focus:bg-green_home hover:text-pricingtextduowhite focus:text-pricingtextduowhite dark:focus:text-checkpricingdark focus:outline-none focus:bg-delesteicono ">
                                    <svg width="20" height="20"
                                        class="text-graypricingstrike hover:text-green focus:text-green dark:hover:text-green dark:focus:text-green"
                                        viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.0002 17.9999C14.4185 17.9999 18.0002 14.4182 18.0002 9.99988C18.0002 5.5816 14.4185 1.99988 10.0002 1.99988C5.58197 1.99988 2.00024 5.5816 2.00024 9.99988C2.00024 14.4182 5.58197 17.9999 10.0002 17.9999ZM9.55494 7.16783C9.24809 6.96326 8.85354 6.94418 8.52838 7.1182C8.20323 7.29222 8.00024 7.63108 8.00024 7.99988V11.9999C8.00024 12.3687 8.20323 12.7075 8.52838 12.8816C8.85354 13.0556 9.24809 13.0365 9.55494 12.8319L12.5549 10.8319C12.8331 10.6465 13.0002 10.3342 13.0002 9.99988C13.0002 9.66552 12.8331 9.35329 12.5549 9.16783L9.55494 7.16783Z"
                                            fill="Currentcolor" />
                                    </svg>
        
                                    <div
                                        class="font-inter w-32 text-left font-medium text-sm pl-3 dark:text-borderconcours hover:text-pricingtextduowhite focus:text-pricingtextduowhite  text-gray_panel  ">
                                        Mis Estudios
                                    </div>
        
                                   </button>
                                
                                
                                 <button x-on:click="seccion(2) "
                                    class="flex w-full px-3.5 py-2 rounded-md  dark:focus:bg-green_home hover:text-pricingtextduowhite focus:text-pricingtextduowhite dark:focus:text-checkpricingdark focus:outline-none focus:bg-delesteicono ">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.3939 2.08087C10.1424 1.97306 9.85763 1.97306 9.60608 2.08087L2.60608 5.08087C2.2384 5.23845 2 5.59999 2 6.00001C2 6.40004 2.2384 6.76158 2.60608 6.91916L5.25037 8.05243C5.34653 7.94348 5.46706 7.85474 5.60608 7.79517L9.60608 6.08088C10.1137 5.86333 10.7016 6.09848 10.9191 6.60611C11.1367 7.11374 10.9015 7.70162 10.3939 7.91917L7.66668 9.08799L9.60608 9.91916C9.85763 10.027 10.1424 10.027 10.3939 9.91916L17.3939 6.91916C17.7616 6.76158 18 6.40004 18 6.00001C18 5.59999 17.7616 5.23845 17.3939 5.08087L10.3939 2.08087Z"
                                            fill="#697586" />
                                        <path
                                            d="M3.31004 9.39674L5 10.121V14.2227C4.65723 14.1449 4.30705 14.0867 3.95071 14.0494C3.48094 14.0001 3.1097 13.6289 3.06044 13.1591C3.02046 12.7778 3 12.3911 3 11.9998C3 11.1033 3.10741 10.2315 3.31004 9.39674Z"
                                            fill="#697586" />
                                        <path
                                            d="M9.29995 16.5725C8.62708 15.9129 7.85167 15.3584 7 14.9351V10.9782L8.81824 11.7574C9.57289 12.0808 10.4271 12.0808 11.1818 11.7574L16.69 9.39674C16.8926 10.2315 17 11.1033 17 11.9998C17 12.3911 16.9795 12.7778 16.9396 13.1591C16.8903 13.6289 16.5191 14.0001 16.0493 14.0494C13.9765 14.2667 12.1124 15.188 10.7 16.5725C10.3112 16.9537 9.68881 16.9537 9.29995 16.5725Z"
                                            fill="#697586" />
                                        <path
                                            d="M6 18C6.55228 18 7 17.5523 7 17V14.9351C6.37136 14.6227 5.70117 14.3817 5 14.2227V17C5 17.5523 5.44771 18 6 18Z"
                                            fill="#697586" />
                                    </svg>
        
                                    <div
                                        class="font-inter font-medium text-sm pl-3 dark:text-borderconcours hover:text-pricingtextduowhite focus:text-pricingtextduowhite  text-gray_panel dark:focus:text-checkpricingdark ">
                                        Mis certificados
                                    </div>
        
                                 </button>
                                
                                 
                                    <button x-on:click="seccion(3) "
                                        class="flex w-full px-3.5 py-2 rounded-md  dark:focus:bg-green_home hover:text-pricingtextduowhite focus:text-pricingtextduowhite dark:focus:text-checkpricingdark focus:outline-none focus:bg-delesteicono ">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.00049 4.00008C4.00049 2.89551 4.89592 2.00008 6.00049 2.00008H10.5863C11.1167 2.00008 11.6254 2.21079 12.0005 2.58586L15.4147 6.00008C15.7898 6.37515 16.0005 6.88386 16.0005 7.41429V16.0001C16.0005 17.1046 15.1051 18.0001 14.0005 18.0001H6.00049C4.89592 18.0001 4.00049 17.1046 4.00049 16.0001V4.00008Z"
                                                fill="#697586" />
                                        </svg>
        
        
                                        <div
                                            class="font-inter font-medium text-sm pl-3 dark:text-borderconcours hover:text-pricingtextduowhite focus:text-pricingtextduowhite  text-gray_panel dark:focus:text-checkpricingdark ">
                                            Mis apuntes
                                        </div>
        
                                    </button>
                                 
                                
                                  <button x-on:click="seccion(4) "
                                    class="flex w-full px-3.5 py-2 rounded-md  dark:focus:bg-green_home hover:text-pricingtextduowhite focus:text-pricingtextduowhite dark:focus:text-checkpricingdark focus:outline-none focus:bg-delesteicono ">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.04917 3.92737C9.34852 3.00606 10.6519 3.00606 10.9513 3.92737L12.0209 7.21917C12.1547 7.63119 12.5387 7.91015 12.9719 7.91015H16.4331C17.4018 7.91015 17.8046 9.14977 17.0209 9.71917L14.2207 11.7536C13.8702 12.0083 13.7236 12.4596 13.8575 12.8716L14.927 16.1634C15.2264 17.0847 14.1719 17.8509 13.3882 17.2815L10.588 15.247C10.2375 14.9924 9.76293 14.9924 9.41244 15.247L6.61227 17.2815C5.82856 17.8509 4.77408 17.0847 5.07343 16.1634L6.143 12.8716C6.27687 12.4596 6.13022 12.0083 5.77973 11.7536L2.97956 9.71917C2.19585 9.14977 2.59862 7.91015 3.56735 7.91015H7.02854C7.46177 7.91015 7.84573 7.63119 7.9796 7.21917L9.04917 3.92737Z"
                                            fill="#697586" />
                                    </svg>
        
                                    <div
                                        class="font-inter font-medium text-sm pl-3 dark:text-borderconcours hover:text-pricingtextduowhite focus:text-pricingtextduowhite  text-gray_panel dark:focus:text-checkpricingdark ">
                                        Mi membresía
                                    </div>
        
                                  </button>
                                </div>
                                <script>
                                    var div = document.getElementById('contemovil');
                                   var but = document.getElementById('actiperfil');

                                    //la funcion que oculta y muestra
function showHide(e){
e.preventDefault();
e.stopPropagation();
if(div.style.display == "none"){
div.style.display = "block";
} else if(div.style.display == "block"){
div.style.display = "none";
}
}
//al hacer click en el boton
    but.addEventListener("click", showHide, false);

//funcion para cualquier clic en el documento
document.addEventListener("click", function(e){
console.log('clic');
//obtiendo informacion del DOM para  
var clic = e.target;
console.log(clic);
if(div.style.display == "block" && clic != div){
 div.style.display = "none";
}
}, false);
                                </script>


                               

                               


                            </div>
                            {{-- ******************termina boton dedesplegable***************************** --}}



                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M27.203 22.2037V26.5701V27.4261C27.1411 27.4869 27.0787 27.5472 27.0158 27.6069C20.6046 33.689 10.4761 33.4229 4.39342 27.0128C-1.68924 20.6021 -1.42311 10.4752 4.98808 4.3931C11.3987 -1.68901 21.5272 -1.42288 27.6099 4.98724C30.4462 7.97656 31.9022 11.7739 31.9982 15.592L31.9992 15.6278L31.9997 15.6534H31.9992C31.9992 16.5371 31.2829 17.2534 30.3992 17.2534C29.5155 17.2534 28.7992 16.5371 28.7992 15.6534H28.7987C28.7171 12.6059 27.5528 9.57605 25.2883 7.18994C20.4222 2.06194 12.3193 1.84915 7.19073 6.71421C2.06166 11.5798 1.84886 19.6817 6.715 24.8102C11.3294 29.6731 18.8536 30.1158 23.9934 25.999V18.4001H27.203V22.2038V22.2038L27.203 22.2037Z"
                                    fill="#0083F5" />
                                <path
                                    d="M29.1022 22.1022C28.2718 21.7999 27.8436 20.8817 28.1459 20.0513C28.4481 19.2208 29.3664 18.7926 30.1968 19.0949C31.0272 19.3971 31.4554 20.3154 31.1532 21.1458C30.8509 21.9762 29.9327 22.4044 29.1022 22.1022Z"
                                    fill="#33CC66" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M27.2029 18.4H27.1938L27.1933 18.4416C27.1928 18.4555 27.1922 18.4688 27.1917 18.4827L27.1891 18.5232L27.1853 18.5638L27.1811 18.6043L27.1752 18.6438L27.1688 18.6832L27.1613 18.7227L27.1528 18.7616L27.1437 18.8H27.1432L27.1331 18.8384L27.1219 18.8763L27.1096 18.9137L27.0968 18.9505L27.0829 18.9873L27.068 19.023L27.0525 19.0588L27.036 19.094L27.0189 19.1286H27.0184L27.0008 19.1633L26.9816 19.1969C26.956 19.2417 26.9282 19.2849 26.8984 19.3265L26.876 19.3579L26.8525 19.3883L26.8285 19.4182L26.8035 19.4475L26.7784 19.4764H26.7779L26.7517 19.5041C26.7341 19.5228 26.716 19.5409 26.6979 19.5585L26.6696 19.5846L26.6408 19.6102L26.6115 19.6348V19.6353L26.5816 19.6593L26.5512 19.6827L26.5197 19.7051C26.4781 19.735 26.435 19.7627 26.3902 19.7883L26.3566 19.807V19.8075L26.3219 19.8251L26.2872 19.8427L26.2521 19.8593L26.2163 19.8747L26.1806 19.8897L26.1437 19.9035L26.1069 19.9163L26.0696 19.9286L26.0317 19.9398L25.9933 19.9499L25.9549 19.9595L25.916 19.9681L25.877 19.9755L25.8376 19.9819L25.7976 19.9878L25.757 19.9921L25.7165 19.9958L25.676 19.9985L25.6349 20L25.5939 20.0006L25.5523 20C25.5384 19.9995 25.5251 19.999 25.5112 19.9985L25.4707 19.9958L25.4301 19.9921L25.3896 19.9878L25.3501 19.9819L25.3106 19.9755L25.2712 19.9681L25.2323 19.9595L25.1938 19.9499L25.1554 19.9398L25.1176 19.9286L25.0802 19.9163L25.0434 19.9035L25.0066 19.8897L24.9708 19.8747L24.9351 19.8593L24.8999 19.8427L24.8653 19.8251H24.8647L24.8306 19.8075V19.807L24.797 19.7883L24.764 19.7686L24.7309 19.7483L24.6989 19.727L24.6674 19.7051L24.636 19.6828L24.6056 19.6593L24.5757 19.6353V19.6348L24.5464 19.6103L24.5176 19.5846L24.4898 19.5585H24.4893L24.4621 19.5318L24.4354 19.5041L24.4093 19.4764L24.3837 19.4475L24.3586 19.4182L24.3346 19.3883L24.3112 19.3579L24.2888 19.3265L24.2669 19.295L24.2456 19.263V19.2625L24.2253 19.23L24.2056 19.1969L24.1864 19.1633L24.1682 19.1286L24.1512 19.094L24.1346 19.0588L24.1192 19.0231L24.1042 18.9873L24.0904 18.9505L24.0776 18.9137L24.0653 18.8763L24.0541 18.8385L24.044 18.8001L24.0344 18.7617L24.0258 18.7227L24.0184 18.6833L24.0119 18.6438L24.0061 18.6043L24.0018 18.5638L23.9981 18.5232L23.9954 18.4827C23.9949 18.4688 23.9944 18.4555 23.9938 18.4416L23.9933 18.4L23.9938 18.359C23.9944 18.3451 23.9949 18.3318 23.9954 18.3179L23.9981 18.2774L23.9992 18.2625C23.9261 16.5654 22.5165 15.2001 20.8024 15.2001C19.0418 15.2001 17.6018 16.6401 17.6018 18.4001C17.6018 19.2838 16.8856 20.0006 16.0018 20.0006C15.1181 20.0006 14.4018 19.2838 14.4018 18.4001C14.4018 16.6401 12.9613 15.2001 11.2013 15.2001C9.4408 15.2001 8.00081 16.6401 8.00081 18.4001C8.00081 19.2838 7.28454 20.0006 6.40081 20.0006C5.51709 20.0006 4.80082 19.2838 4.80082 18.4001H4.80029C4.80029 14.8796 7.68081 11.9996 11.2013 11.9996C13.108 11.9996 14.8264 12.8444 16.0019 14.1782C17.2195 12.7964 18.9581 11.9996 20.8024 11.9996C24.3229 11.9996 27.2029 14.8801 27.2029 18.4001L27.2029 18.4V18.4Z"
                                    fill="#33CC66" />
                            </svg>
                            <div class="pl-2.5 dark:text-white-100 text-black font-bold font-inter mt-1.5 text-sixteen">
                                MayuGo
                            </div>
                        </div>

                        {{--  ################ movil perfil ####################### --}}

                        <div class="sm:hidden flex relative">
                            <button class="focus:outline-none" id="boton2">
                                <img class="w-6 h-6 rounded-full focus:outline-none"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-oCrJ1AGq1dgs-Nb5nBT9el5rs1EN1ryjWA&usqp=CAU"
                                    alt="">

                            </button>
                            <div class="absolute w-auto right-0  mt-8 hidden" id="card2">


                                <div class="py-3 px-2 dark:bg-gray9 bg-white2 rounded-lg">
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16"
                                            class="text-gray-600 -mt-1 dark:text-pricingdarkstudents" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.6668 4.667C10.6668 6.13976 9.47292 7.33367 8.00016 7.33367C6.5274 7.33367 5.3335 6.13976 5.3335 4.667C5.3335 3.19424 6.5274 2.00034 8.00016 2.00034C9.47292 2.00034 10.6668 3.19424 10.6668 4.667Z"
                                                stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M8.00016 9.33366C5.42283 9.33366 3.3335 11.423 3.3335 14.0003H12.6668C12.6668 11.423 10.5775 9.33366 8.00016 9.33366Z"
                                                stroke="Currentcolor" stroke-width="Currencolor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <div class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                            Tu perfil
                                        </div>

                                    </button>
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                            class="text-gray-600 -mt-1 dark:text-pricingdarkstudents"fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.83461 7.44524L7.70313 6.02425C7.26009 5.72889 6.66666 6.04648 6.66666 6.57895V9.42092C6.66666 9.95339 7.26009 10.271 7.70313 9.97562L9.83461 8.55464C10.2304 8.29075 10.2304 7.70912 9.83461 7.44524Z"
                                                stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M14 7.99994C14 11.3136 11.3137 13.9999 8 13.9999C4.68629 13.9999 2 11.3136 2 7.99994C2 4.68623 4.68629 1.99994 8 1.99994C11.3137 1.99994 14 4.68623 14 7.99994Z"
                                                stroke="Currentcolor" stroke-width="Currentcolor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                        <div class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                            Mis estudios
                                        </div>

                                    </button>
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16" class="dark:text-yellowdetalle text-doradopanel -mt-1"
                                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_5604_247975)">
                                                <path
                                                    d="M7.36597 1.95114C7.56555 1.33696 8.43444 1.33696 8.63403 1.95114L9.64659 5.06708C9.73584 5.34174 9.99179 5.5277 10.2806 5.52771L13.5569 5.52783C14.2027 5.52786 14.4712 6.35422 13.9488 6.73383L11.2982 8.65971C11.0646 8.82947 10.9668 9.13036 11.0561 9.40502L12.0684 12.521C12.2679 13.1352 11.565 13.646 11.0425 13.2664L8.39183 11.3407C8.15818 11.171 7.84181 11.171 7.60816 11.3407L4.95748 13.2664C4.43501 13.646 3.73206 13.1352 3.9316 12.521L4.94392 9.40502C5.03316 9.13036 4.93539 8.82947 4.70176 8.65971L2.05122 6.73383C1.52878 6.35422 1.79728 5.52786 2.44307 5.52783L5.7194 5.52771C6.0082 5.5277 6.26415 5.34174 6.35341 5.06708L7.36597 1.95114Z"
                                                    stroke="Currentcolor" stroke-width="Currentcolor" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_5604_247975">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        <div class="pl-3 text-left w-36 dark:text-yellowdetalle text-doradopanel  text-sm font-inter font-medium">
                                            ¡Sube a premium!
                                        </div>

                                    </button>
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <div class="flex items-center">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                class="text-gray-600 -mt-1 dark:text-pricingdarkstudents" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.33399 4.66663L13.334 4.66663M13.334 4.66663L10.6673 1.99997M13.334 4.66663L10.6673 7.3333M10.6673 11.3333L2.66732 11.3333M2.66732 11.3333L5.33399 14M2.66732 11.3333L5.33399 8.66663"
                                                    stroke="Currentcolor" stroke-width="Currentcolor"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <div
                                                class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                                Tu perfil
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex items-center justify-center w-full sm:ml-4 ml-4">

                                                <label for="toggleB" class="flex items-center cursor-pointer">
                                                    <!-- toggle -->
                                                    <div class="relative">
                                                        <!-- input -->
                                                        <input type="checkbox" id="toggleB" class="sr-only">
                                                        <!-- line -->
                                                        <div
                                                            class="block bg-changedarkwhite dark:bg-whitetext w-10 h-5 rounded-full">
                                                        </div>
                                                        <!-- dot -->
                                                        <div
                                                            class="dot absolute  rounded-full transition bg-whitetext dark:bg-toggledark switchdark">
                                                        </div>
                                                        <svg class="absolute w-4 h-4 text-dark text-whitetext dark:text-toggledark"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            style="top: 2px;right: 3px;">
                                                            <path fill-rule="evenodd"
                                                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <svg class="absolute w-4 h-4 text-dark text-whitetext dark:text-toggledark"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            style="top: 2px;left: 3px;">
                                                            <path
                                                                d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                                                        </svg>
                                                    </div>
                                                </label>

                                            </div>
                                        </div>

                                    </button>

                                    <hr>

                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                            class="text-gray-600 -mt-1 dark:text-pricingdarkstudents" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.66715 9.3336L8.00048 8.00026M8.00048 8.00026L9.33382 6.66693M8.00048 8.00026L6.66715 6.66693M8.00048 8.00026L9.33382 9.3336M14.0005 8.00026C14.0005 11.314 11.3142 14.0003 8.00048 14.0003C4.68678 14.0003 2.00049 11.314 2.00049 8.00026C2.00049 4.68656 4.68678 2.00027 8.00048 2.00027C11.3142 2.00027 14.0005 4.68656 14.0005 8.00026Z"
                                                stroke="Currentcolor" stroke-width="Currentcolor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                            Cerrar Sesion
                                        </div>

                                    </button>


                                </div>

                            </div>

                        </div>
                        {{-- ################### final movil perfil################### --}}

                    </div>
                    {{-- ###########  batra lateral de opciones verion escritorio ############### --}}
                    <div class="mt-8 flex-col sm:flex hidden">

                        
                        <button x-on:click="seccion(1) " id="one"
                            class="flex w-full px-3.5 py-2 rounded-md  oneoption dark:focus:bg-green_home hover:text-pricingtextduowhite focus:text-pricingtextduowhite dark:focus:text-checkpricingdark focus:outline-none focus:bg-delesteicono ">
                            <svg width="20" height="20"
                                class=" hover:text-green focus:text-green dark:hover:text-green dark:focus:text-green"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.0002 17.9999C14.4185 17.9999 18.0002 14.4182 18.0002 9.99988C18.0002 5.5816 14.4185 1.99988 10.0002 1.99988C5.58197 1.99988 2.00024 5.5816 2.00024 9.99988C2.00024 14.4182 5.58197 17.9999 10.0002 17.9999ZM9.55494 7.16783C9.24809 6.96326 8.85354 6.94418 8.52838 7.1182C8.20323 7.29222 8.00024 7.63108 8.00024 7.99988V11.9999C8.00024 12.3687 8.20323 12.7075 8.52838 12.8816C8.85354 13.0556 9.24809 13.0365 9.55494 12.8319L12.5549 10.8319C12.8331 10.6465 13.0002 10.3342 13.0002 9.99988C13.0002 9.66552 12.8331 9.35329 12.5549 9.16783L9.55494 7.16783Z"
                                    fill="Currentcolor" />
                            </svg>

                            <div
                                class="font-inter font-medium text-sm pl-3  hover:text-pricingtextduowhite focus:text-pricingtextduowhite    ">
                                Mis Estudios
                            </div>

                        </button>
                        
                        
                        <button x-on:click="seccion(2) " id="second"
                            class="flex w-full px-3.5 py-2 rounded-md oneoption  dark:focus:bg-green_home hover:text-pricingtextduowhite focus:text-pricingtextduowhite dark:focus:text-checkpricingdark focus:outline-none focus:bg-delesteicono ">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.3939 2.08087C10.1424 1.97306 9.85763 1.97306 9.60608 2.08087L2.60608 5.08087C2.2384 5.23845 2 5.59999 2 6.00001C2 6.40004 2.2384 6.76158 2.60608 6.91916L5.25037 8.05243C5.34653 7.94348 5.46706 7.85474 5.60608 7.79517L9.60608 6.08088C10.1137 5.86333 10.7016 6.09848 10.9191 6.60611C11.1367 7.11374 10.9015 7.70162 10.3939 7.91917L7.66668 9.08799L9.60608 9.91916C9.85763 10.027 10.1424 10.027 10.3939 9.91916L17.3939 6.91916C17.7616 6.76158 18 6.40004 18 6.00001C18 5.59999 17.7616 5.23845 17.3939 5.08087L10.3939 2.08087Z"
                                    fill="Currentcolor" />
                                <path
                                    d="M3.31004 9.39674L5 10.121V14.2227C4.65723 14.1449 4.30705 14.0867 3.95071 14.0494C3.48094 14.0001 3.1097 13.6289 3.06044 13.1591C3.02046 12.7778 3 12.3911 3 11.9998C3 11.1033 3.10741 10.2315 3.31004 9.39674Z"
                                    fill="Currentcolor" />
                                <path
                                    d="M9.29995 16.5725C8.62708 15.9129 7.85167 15.3584 7 14.9351V10.9782L8.81824 11.7574C9.57289 12.0808 10.4271 12.0808 11.1818 11.7574L16.69 9.39674C16.8926 10.2315 17 11.1033 17 11.9998C17 12.3911 16.9795 12.7778 16.9396 13.1591C16.8903 13.6289 16.5191 14.0001 16.0493 14.0494C13.9765 14.2667 12.1124 15.188 10.7 16.5725C10.3112 16.9537 9.68881 16.9537 9.29995 16.5725Z"
                                    fill="Currentcolor" />
                                <path
                                    d="M6 18C6.55228 18 7 17.5523 7 17V14.9351C6.37136 14.6227 5.70117 14.3817 5 14.2227V17C5 17.5523 5.44771 18 6 18Z"
                                    fill="Currentcolor" />
                            </svg>

                            <div
                                class="font-inter font-medium text-sm pl-3  hover:text-pricingtextduowhite focus:text-pricingtextduowhite   dark:focus:text-checkpricingdark ">
                                Mis certificados
                            </div>

                        </button>
                        
                    
                            <button x-on:click="seccion(3) " id="tree"
                                class="flex w-full px-3.5 py-2 rounded-md  oneoption dark:focus:bg-green_home hover:text-pricingtextduowhite focus:text-pricingtextduowhite dark:focus:text-checkpricingdark focus:outline-none focus:bg-delesteicono ">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.00049 4.00008C4.00049 2.89551 4.89592 2.00008 6.00049 2.00008H10.5863C11.1167 2.00008 11.6254 2.21079 12.0005 2.58586L15.4147 6.00008C15.7898 6.37515 16.0005 6.88386 16.0005 7.41429V16.0001C16.0005 17.1046 15.1051 18.0001 14.0005 18.0001H6.00049C4.89592 18.0001 4.00049 17.1046 4.00049 16.0001V4.00008Z"
                                        fill="Currentcolor" />
                                </svg>


                                <div
                                    class="font-inter font-medium text-sm pl-3  hover:text-pricingtextduowhite focus:text-pricingtextduowhite   dark:focus:text-checkpricingdark ">
                                    Mis apuntes
                                </div>

                            </button>
                        
                        
                        <button x-on:click="seccion(4) " id="four"
                            class="flex w-full px-3.5 py-2 rounded-md oneoption dark:focus:bg-green_home hover:text-pricingtextduowhite focus:text-pricingtextduowhite dark:focus:text-checkpricingdark focus:outline-none focus:bg-delesteicono ">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.04917 3.92737C9.34852 3.00606 10.6519 3.00606 10.9513 3.92737L12.0209 7.21917C12.1547 7.63119 12.5387 7.91015 12.9719 7.91015H16.4331C17.4018 7.91015 17.8046 9.14977 17.0209 9.71917L14.2207 11.7536C13.8702 12.0083 13.7236 12.4596 13.8575 12.8716L14.927 16.1634C15.2264 17.0847 14.1719 17.8509 13.3882 17.2815L10.588 15.247C10.2375 14.9924 9.76293 14.9924 9.41244 15.247L6.61227 17.2815C5.82856 17.8509 4.77408 17.0847 5.07343 16.1634L6.143 12.8716C6.27687 12.4596 6.13022 12.0083 5.77973 11.7536L2.97956 9.71917C2.19585 9.14977 2.59862 7.91015 3.56735 7.91015H7.02854C7.46177 7.91015 7.84573 7.63119 7.9796 7.21917L9.04917 3.92737Z"
                                    fill="Currentcolor" />
                            </svg>

                            <div
                                class="font-inter font-medium text-sm pl-3 hover:text-pricingtextduowhite focus:text-pricingtextduowhite   dark:focus:text-checkpricingdark ">
                                Mi membresía
                            </div>

                        </button>

                        <script>
                            document.getElementById("one").classList.toggle('optionlateral');
                            document.getElementById("second").classList.add('optionNormal');
                            document.getElementById("tree").classList.add('optionNormal');
                            document.getElementById("four").classList.add('optionNormal');
                            one.addEventListener('click',function(){
                                   // icon.classList.remove('hidden');
                                   document.getElementById("one").classList.add('optionlateral');
                                   document.getElementById("second").classList.add('optionNormal');
                                   document.getElementById("tree").classList.add('optionNormal');
                                   document.getElementById("four").classList.add('optionNormal');
                                    });
                                    second.addEventListener('click',function(){
                                   // icon.classList.remove('hidden');
                                   document.getElementById("one").classList.add('optionNormal');
                                   document.getElementById("second").classList.add('optionlateral');
                                   document.getElementById("tree").classList.add('optionNormal');
                                   document.getElementById("four").classList.add('optionNormal');
                                    });
                                    tree.addEventListener('click',function(){
                                   // icon.classList.remove('hidden');
                                   document.getElementById("one").classList.add('optionNormal');
                                   document.getElementById("second").classList.add('optionNormal');
                                   document.getElementById("tree").classList.add('optionlateral');
                                   document.getElementById("four").classList.add('optionNormal');
                                    });
                                    four.addEventListener('click',function(){
                                   // icon.classList.remove('hidden');
                                   document.getElementById("one").classList.add('optionNormal');
                                   document.getElementById("second").classList.add('optionNormal');
                                   document.getElementById("four").classList.add('optionlateral');
                                   document.getElementById("tree").classList.add('optionNormal');
                                    });
                            
                        </script>

                        

                    </div>
                    {{--  ###########3  final de la barra lateral de opcion version escritorio ########### --}}

                </div>

            </div>
            <div class="lg:col-span-5 col-span-4  dark:bg-gray12 bg-white2">



                <div class="pt-20 pb-8 ml:px-12 xl:px-12 lg:px-6 md:px-6 px-4">
                    {{-- <div class="flex justify-between">
                        <div class="font-inter font-bold text-thirty-two dark:text-bgprogresb text-txtnamecomntpkyr">
                            Mis estudios
                        </div>
                        

                        <div class="relative sm:flex hidden">
                            <div class="flex items-center ">
                                <div class="relative">
                                    <input type="text"
                                        class="dark:bg-black focus:outline-none dark:text-bordersec text-txtnamecomntpkyr font-inter text-sm font-normal dark:placeholder-gray-600 bg-white-100 border border-borderconcours dark:border-txtcommentply  h-10 rounded-md w-80 pl-10 placeholder- placeholder-pricingdarkstudents"
                                        placeholder="Buscar en mi panel">

                                    <svg class="absolute top-2.5 left-2" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5005 17.4999L12.5005 12.4999M14.1671 8.33327C14.1671 11.5549 11.5555 14.1666 8.33382 14.1666C5.11216 14.1666 2.50049 11.5549 2.50049 8.33327C2.50049 5.11161 5.11216 2.49994 8.33382 2.49994C11.5555 2.49994 14.1671 5.11161 14.1671 8.33327Z"
                                            stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <div class="pl-6 ">
                                    <button class="focus:outline-none" id="play">
                                        <img class="w-10 h-10 rounded-full focus:outline-none"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-oCrJ1AGq1dgs-Nb5nBT9el5rs1EN1ryjWA&usqp=CAU"
                                            alt="">

                                    </button>



                                </div>

                            </div>
                            <div class="absolute w-auto right-0  mt-14 hidden" id="icon">

                                   
                                <div class="py-4 px-4 dark:bg-gray9 bg-white2 rounded-lg">
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16"
                                            class="text-gray-600 -mt-1 dark:text-pricingdarkstudents" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.6668 4.667C10.6668 6.13976 9.47292 7.33367 8.00016 7.33367C6.5274 7.33367 5.3335 6.13976 5.3335 4.667C5.3335 3.19424 6.5274 2.00034 8.00016 2.00034C9.47292 2.00034 10.6668 3.19424 10.6668 4.667Z"
                                                stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M8.00016 9.33366C5.42283 9.33366 3.3335 11.423 3.3335 14.0003H12.6668C12.6668 11.423 10.5775 9.33366 8.00016 9.33366Z"
                                                stroke="Currentcolor" stroke-width="Currencolor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <div class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                            Tu perfil
                                        </div>

                                    </button>
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                            class="text-gray-600 -mt-1 dark:text-pricingdarkstudents"fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.83461 7.44524L7.70313 6.02425C7.26009 5.72889 6.66666 6.04648 6.66666 6.57895V9.42092C6.66666 9.95339 7.26009 10.271 7.70313 9.97562L9.83461 8.55464C10.2304 8.29075 10.2304 7.70912 9.83461 7.44524Z"
                                                stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M14 7.99994C14 11.3136 11.3137 13.9999 8 13.9999C4.68629 13.9999 2 11.3136 2 7.99994C2 4.68623 4.68629 1.99994 8 1.99994C11.3137 1.99994 14 4.68623 14 7.99994Z"
                                                stroke="Currentcolor" stroke-width="Currentcolor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                        <div class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                            Mis estudios
                                        </div>

                                    </button>
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16" class="text-yellowdetalle -mt-1"
                                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_5604_247975)">
                                                <path
                                                    d="M7.36597 1.95114C7.56555 1.33696 8.43444 1.33696 8.63403 1.95114L9.64659 5.06708C9.73584 5.34174 9.99179 5.5277 10.2806 5.52771L13.5569 5.52783C14.2027 5.52786 14.4712 6.35422 13.9488 6.73383L11.2982 8.65971C11.0646 8.82947 10.9668 9.13036 11.0561 9.40502L12.0684 12.521C12.2679 13.1352 11.565 13.646 11.0425 13.2664L8.39183 11.3407C8.15818 11.171 7.84181 11.171 7.60816 11.3407L4.95748 13.2664C4.43501 13.646 3.73206 13.1352 3.9316 12.521L4.94392 9.40502C5.03316 9.13036 4.93539 8.82947 4.70176 8.65971L2.05122 6.73383C1.52878 6.35422 1.79728 5.52786 2.44307 5.52783L5.7194 5.52771C6.0082 5.5277 6.26415 5.34174 6.35341 5.06708L7.36597 1.95114Z"
                                                    stroke="Currentcolor" stroke-width="Currentcolor" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_5604_247975">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        <div class="pl-3 text-yellowdetalle  text-sm font-inter font-medium">
                                            ¡Sube a premium!
                                        </div>

                                    </button>
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <div class="flex">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                class="text-gray-600 -mt-1 dark:text-pricingdarkstudents" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.33399 4.66663L13.334 4.66663M13.334 4.66663L10.6673 1.99997M13.334 4.66663L10.6673 7.3333M10.6673 11.3333L2.66732 11.3333M2.66732 11.3333L5.33399 14M2.66732 11.3333L5.33399 8.66663"
                                                    stroke="Currentcolor" stroke-width="Currentcolor"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <div
                                                class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                                Tu perfil
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex items-center justify-center w-full sm:ml-4">

                                                <label for="toggleB" class="flex items-center cursor-pointer">
                                                    <!-- toggle -->
                                                    <div class="relative">
                                                        <!-- input -->
                                                        <input type="checkbox" id="toggleB" class="sr-only">
                                                        <!-- line -->
                                                        <div
                                                            class="block bg-changedarkwhite dark:bg-whitetext w-10 h-5 rounded-full">
                                                        </div>
                                                        <!-- dot -->
                                                        <div
                                                            class="dot absolute  rounded-full transition bg-whitetext dark:bg-toggledark switchdark">
                                                        </div>
                                                        <svg class="absolute w-4 h-4 text-dark text-whitetext dark:text-toggledark"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            style="top: 2px;right: 3px;">
                                                            <path fill-rule="evenodd"
                                                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <svg class="absolute w-4 h-4 text-dark text-whitetext dark:text-toggledark"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            style="top: 2px;left: 3px;">
                                                            <path
                                                                d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                                                        </svg>
                                                    </div>
                                                </label>

                                            </div>
                                        </div>

                                    </button>

                                    <hr>

                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                            class="text-gray-600 -mt-1 dark:text-pricingdarkstudents" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.66715 9.3336L8.00048 8.00026M8.00048 8.00026L9.33382 6.66693M8.00048 8.00026L6.66715 6.66693M8.00048 8.00026L9.33382 9.3336M14.0005 8.00026C14.0005 11.314 11.3142 14.0003 8.00048 14.0003C4.68678 14.0003 2.00049 11.314 2.00049 8.00026C2.00049 4.68656 4.68678 2.00027 8.00048 2.00027C11.3142 2.00027 14.0005 4.68656 14.0005 8.00026Z"
                                                stroke="Currentcolor" stroke-width="Currentcolor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                            Cerrar Sesion
                                        </div>

                                    </button>


                                </div>

                            </div>
                        </div>
                    </div> --}}
                    <div class="flex justify-between items-center">
                        <div class="font-inter font-bold text-thirty-two dark:text-bgprogresb text-txtnamecomntpkyr">
                            Mis estudios
                        </div>
                        

                        <div class="relative lg:flex hidden">
                            <div class="flex items-center ">
                                <div class="relative">
                                    <input type="text"
                                        class="dark:bg-black focus:outline-none dark:text-bordersec text-txtnamecomntpkyr font-inter text-sm font-normal dark:placeholder-gray-600 bg-white-100 border border-borderconcours dark:border-txtcommentply  h-10 rounded-md w-80 pl-10 placeholder- placeholder-pricingdarkstudents"
                                        placeholder="Buscar en mi panel">

                                    <svg class="absolute top-2.5 left-2" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5005 17.4999L12.5005 12.4999M14.1671 8.33327C14.1671 11.5549 11.5555 14.1666 8.33382 14.1666C5.11216 14.1666 2.50049 11.5549 2.50049 8.33327C2.50049 5.11161 5.11216 2.49994 8.33382 2.49994C11.5555 2.49994 14.1671 5.11161 14.1671 8.33327Z"
                                            stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </div>
                                <div class="pl-6 ">
                                    <button class="focus:outline-none " id="play1">
                                        <img class="w-10 h-10 rounded-full focus:outline-none"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-oCrJ1AGq1dgs-Nb5nBT9el5rs1EN1ryjWA&usqp=CAU"
                                            alt="">

                                    </button>



                                </div>

                            </div>
                            <div class="absolute w-auto right-0  mt-14 hidden " id="icon1" >

                                   
                                <div class="py-4 px-4 dark:bg-gray9 bg-white2 rounded-lg">
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16"
                                            class="text-gray-600 -mt-1 dark:text-pricingdarkstudents" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.6668 4.667C10.6668 6.13976 9.47292 7.33367 8.00016 7.33367C6.5274 7.33367 5.3335 6.13976 5.3335 4.667C5.3335 3.19424 6.5274 2.00034 8.00016 2.00034C9.47292 2.00034 10.6668 3.19424 10.6668 4.667Z"
                                                stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M8.00016 9.33366C5.42283 9.33366 3.3335 11.423 3.3335 14.0003H12.6668C12.6668 11.423 10.5775 9.33366 8.00016 9.33366Z"
                                                stroke="Currentcolor" stroke-width="Currencolor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <div class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                            Tu perfil
                                        </div>

                                    </button>
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                            class="text-gray-600 -mt-1 dark:text-pricingdarkstudents"fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.83461 7.44524L7.70313 6.02425C7.26009 5.72889 6.66666 6.04648 6.66666 6.57895V9.42092C6.66666 9.95339 7.26009 10.271 7.70313 9.97562L9.83461 8.55464C10.2304 8.29075 10.2304 7.70912 9.83461 7.44524Z"
                                                stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M14 7.99994C14 11.3136 11.3137 13.9999 8 13.9999C4.68629 13.9999 2 11.3136 2 7.99994C2 4.68623 4.68629 1.99994 8 1.99994C11.3137 1.99994 14 4.68623 14 7.99994Z"
                                                stroke="Currentcolor" stroke-width="Currentcolor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                        <div class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                            Mis estudios
                                        </div>

                                    </button>
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16" class="text-yellowdetalle -mt-1"
                                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_5604_247975)">
                                                <path
                                                    d="M7.36597 1.95114C7.56555 1.33696 8.43444 1.33696 8.63403 1.95114L9.64659 5.06708C9.73584 5.34174 9.99179 5.5277 10.2806 5.52771L13.5569 5.52783C14.2027 5.52786 14.4712 6.35422 13.9488 6.73383L11.2982 8.65971C11.0646 8.82947 10.9668 9.13036 11.0561 9.40502L12.0684 12.521C12.2679 13.1352 11.565 13.646 11.0425 13.2664L8.39183 11.3407C8.15818 11.171 7.84181 11.171 7.60816 11.3407L4.95748 13.2664C4.43501 13.646 3.73206 13.1352 3.9316 12.521L4.94392 9.40502C5.03316 9.13036 4.93539 8.82947 4.70176 8.65971L2.05122 6.73383C1.52878 6.35422 1.79728 5.52786 2.44307 5.52783L5.7194 5.52771C6.0082 5.5277 6.26415 5.34174 6.35341 5.06708L7.36597 1.95114Z"
                                                    stroke="Currentcolor" stroke-width="Currentcolor" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_5604_247975">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        <div class="pl-3 text-yellowdetalle  text-sm font-inter font-medium">
                                            ¡Sube a premium!
                                        </div>

                                    </button>
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <div class="flex">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                class="text-gray-600 -mt-1 dark:text-pricingdarkstudents" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.33399 4.66663L13.334 4.66663M13.334 4.66663L10.6673 1.99997M13.334 4.66663L10.6673 7.3333M10.6673 11.3333L2.66732 11.3333M2.66732 11.3333L5.33399 14M2.66732 11.3333L5.33399 8.66663"
                                                    stroke="Currentcolor" stroke-width="Currentcolor"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <div
                                                class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                                Tu perfil
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex items-center justify-center w-full sm:ml-4">

                                                <label for="toggleB" class="flex items-center cursor-pointer">
                                                    <!-- toggle -->
                                                    <div class="relative">
                                                        <!-- input -->
                                                        <input type="checkbox" id="toggleB" class="sr-only">
                                                        <!-- line -->
                                                        <div
                                                            class="block bg-changedarkwhite dark:bg-whitetext w-10 h-5 rounded-full">
                                                        </div>
                                                        <!-- dot -->
                                                        <div
                                                            class="dot absolute  rounded-full transition bg-whitetext dark:bg-toggledark switchdark">
                                                        </div>
                                                        <svg class="absolute w-4 h-4 text-dark text-whitetext dark:text-toggledark"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            style="top: 2px;right: 3px;">
                                                            <path fill-rule="evenodd"
                                                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <svg class="absolute w-4 h-4 text-dark text-whitetext dark:text-toggledark"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            style="top: 2px;left: 3px;">
                                                            <path
                                                                d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                                                        </svg>
                                                    </div>
                                                </label>

                                            </div>
                                        </div>

                                    </button>

                                    <hr>

                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                            class="text-gray-600 -mt-1 dark:text-pricingdarkstudents" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.66715 9.3336L8.00048 8.00026M8.00048 8.00026L9.33382 6.66693M8.00048 8.00026L6.66715 6.66693M8.00048 8.00026L9.33382 9.3336M14.0005 8.00026C14.0005 11.314 11.3142 14.0003 8.00048 14.0003C4.68678 14.0003 2.00049 11.314 2.00049 8.00026C2.00049 4.68656 4.68678 2.00027 8.00048 2.00027C11.3142 2.00027 14.0005 4.68656 14.0005 8.00026Z"
                                                stroke="Currentcolor" stroke-width="Currentcolor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                            Cerrar Sesion
                                        </div>

                                    </button>


                                </div>

                            </div>
                        </div>
                        <div class="relative lg:hidden flex">
                            <div class="flex items-center ">
                                <button class="">
                                   

                                    <svg class="" width="20" height="20"
                                        viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5005 17.4999L12.5005 12.4999M14.1671 8.33327C14.1671 11.5549 11.5555 14.1666 8.33382 14.1666C5.11216 14.1666 2.50049 11.5549 2.50049 8.33327C2.50049 5.11161 5.11216 2.49994 8.33382 2.49994C11.5555 2.49994 14.1671 5.11161 14.1671 8.33327Z"
                                            stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                </button>
                                <div class="pl-6 sm:flex hidden">
                                    <button class="focus:outline-none " id="play" >
                                        <img class="w-10 h-10 rounded-full focus:outline-none"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-oCrJ1AGq1dgs-Nb5nBT9el5rs1EN1ryjWA&usqp=CAU"
                                            alt="">

                                    </button>



                                </div>

                            </div>
                            <div class="absolute w-auto right-0  mt-14 hidden " id="icon" >

                                   
                                <div class="py-4 px-4 dark:bg-gray9 bg-white2 rounded-lg">
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16"
                                            class="text-gray-600 -mt-1 dark:text-pricingdarkstudents" viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.6668 4.667C10.6668 6.13976 9.47292 7.33367 8.00016 7.33367C6.5274 7.33367 5.3335 6.13976 5.3335 4.667C5.3335 3.19424 6.5274 2.00034 8.00016 2.00034C9.47292 2.00034 10.6668 3.19424 10.6668 4.667Z"
                                                stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M8.00016 9.33366C5.42283 9.33366 3.3335 11.423 3.3335 14.0003H12.6668C12.6668 11.423 10.5775 9.33366 8.00016 9.33366Z"
                                                stroke="Currentcolor" stroke-width="Currencolor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        <div class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                            Tu perfil
                                        </div>

                                    </button>
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                            class="text-gray-600 -mt-1 dark:text-pricingdarkstudents"fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.83461 7.44524L7.70313 6.02425C7.26009 5.72889 6.66666 6.04648 6.66666 6.57895V9.42092C6.66666 9.95339 7.26009 10.271 7.70313 9.97562L9.83461 8.55464C10.2304 8.29075 10.2304 7.70912 9.83461 7.44524Z"
                                                stroke="#9AA4B2" stroke-width="1.33333" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M14 7.99994C14 11.3136 11.3137 13.9999 8 13.9999C4.68629 13.9999 2 11.3136 2 7.99994C2 4.68623 4.68629 1.99994 8 1.99994C11.3137 1.99994 14 4.68623 14 7.99994Z"
                                                stroke="Currentcolor" stroke-width="Currentcolor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                        <div class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                            Mis estudios 
                                        </div>

                                    </button>
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16" class="text-yellowdetalle -mt-1"
                                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_5604_247975)">
                                                <path
                                                    d="M7.36597 1.95114C7.56555 1.33696 8.43444 1.33696 8.63403 1.95114L9.64659 5.06708C9.73584 5.34174 9.99179 5.5277 10.2806 5.52771L13.5569 5.52783C14.2027 5.52786 14.4712 6.35422 13.9488 6.73383L11.2982 8.65971C11.0646 8.82947 10.9668 9.13036 11.0561 9.40502L12.0684 12.521C12.2679 13.1352 11.565 13.646 11.0425 13.2664L8.39183 11.3407C8.15818 11.171 7.84181 11.171 7.60816 11.3407L4.95748 13.2664C4.43501 13.646 3.73206 13.1352 3.9316 12.521L4.94392 9.40502C5.03316 9.13036 4.93539 8.82947 4.70176 8.65971L2.05122 6.73383C1.52878 6.35422 1.79728 5.52786 2.44307 5.52783L5.7194 5.52771C6.0082 5.5277 6.26415 5.34174 6.35341 5.06708L7.36597 1.95114Z"
                                                    stroke="Currentcolor" stroke-width="Currentcolor" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_5604_247975">
                                                    <rect width="16" height="16" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                        <div class="pl-3 w-36 text-left text-yellowdetalle  text-sm font-inter font-medium">
                                            ¡Sube a premium!
                                        </div>

                                    </button>
                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <div class="flex">
                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                class="text-gray-600 -mt-1 dark:text-pricingdarkstudents" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M5.33399 4.66663L13.334 4.66663M13.334 4.66663L10.6673 1.99997M13.334 4.66663L10.6673 7.3333M10.6673 11.3333L2.66732 11.3333M2.66732 11.3333L5.33399 14M2.66732 11.3333L5.33399 8.66663"
                                                    stroke="Currentcolor" stroke-width="Currentcolor"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            <div
                                                class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                                Tu perfil
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex items-center justify-center w-full sm:ml-4">

                                                <label for="toggleB" class="flex items-center cursor-pointer">
                                                    <!-- toggle -->
                                                    <div class="relative">
                                                        <!-- input -->
                                                        <input type="checkbox" id="toggleB" class="sr-only">
                                                        <!-- line -->
                                                        <div
                                                            class="block bg-changedarkwhite dark:bg-whitetext w-10 h-5 rounded-full">
                                                        </div>
                                                        <!-- dot -->
                                                        <div
                                                            class="dot absolute  rounded-full transition bg-whitetext dark:bg-toggledark switchdark">
                                                        </div>
                                                        <svg class="absolute w-4 h-4 text-dark text-whitetext dark:text-toggledark"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            style="top: 2px;right: 3px;">
                                                            <path fill-rule="evenodd"
                                                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <svg class="absolute w-4 h-4 text-dark text-whitetext dark:text-toggledark"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            style="top: 2px;left: 3px;">
                                                            <path
                                                                d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                                                        </svg>
                                                    </div>
                                                </label>

                                            </div>
                                        </div>

                                    </button>

                                    <hr>

                                    <button
                                        class="flex items-center w-full focus:outline-none p-2 dark:hover:bg-gray11 hover:bg-white1 rounded-md">
                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                            class="text-gray-600 -mt-1 dark:text-pricingdarkstudents" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.66715 9.3336L8.00048 8.00026M8.00048 8.00026L9.33382 6.66693M8.00048 8.00026L6.66715 6.66693M8.00048 8.00026L9.33382 9.3336M14.0005 8.00026C14.0005 11.314 11.3142 14.0003 8.00048 14.0003C4.68678 14.0003 2.00049 11.314 2.00049 8.00026C2.00049 4.68656 4.68678 2.00027 8.00048 2.00027C11.3142 2.00027 14.0005 4.68656 14.0005 8.00026Z"
                                                stroke="Currentcolor" stroke-width="Currentcolor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-3 dark:text-bordersec text-gray-650 text-sm font-inter font-medium">
                                            Cerrar Sesion
                                        </div>

                                    </button>


                                </div>

                            </div>
                        </div> 
                    </div>
                    <template x-if="tipo == 1">
                        <div x-data="tipoboton()">

                            <div class="pt-6 flex  overflow-x-scroll clasebarra">
                                <button x-on:click="showNow(1) " id="gabriela"
                                    class="text-lg  font-inter font-medium hover:text-bcklightbuscador focus:text-bcklightbuscador hover:border-bcklightbuscador focus:border-bcklightbuscador focus:outline-none dark:focus:border-bgbtngreen pb-4 px-5 border-b-4 dark:border-txtcommentply border-bordersec dark:hover:border-bgbtngreen dark:text-borderconcours text-txtcommentply dark:hover:text-bgbtngreen dark:focus:text-bgbtngreen">
                                    <div class="w-32">
                                        Video-Clases
                                    </div>
                                </button>
                                <button x-on:click="showNow(2) " id="adelina"
                                    class="text-lg font-inter px-5 font-medium hover:text-bcklightbuscador focus:text-bcklightbuscador hover:border-bcklightbuscador focus:border-bcklightbuscador focus:outline-none dark:focus:border-bgbtngreen pb-4  border-b-4 dark:border-txtcommentply border-bordersec dark:hover:border-bgbtngreen dark:text-borderconcours text-txtcommentply dark:hover:text-bgbtngreen dark:focus:text-bgbtngreen">
                                    <div class="w-44 ">
                                        Modalidad en vivo
                                    </div>
                                </button>
                                <button x-on:click="showNow(3) " id="camila"
                                    class="text-lg font-inter  font-medium hover:text-bcklightbuscador focus:text-bcklightbuscador hover:border-bcklightbuscador focus:border-bcklightbuscador focus:outline-none dark:focus:border-bgbtngreen pb-4 px-5 border-b-4 dark:border-txtcommentply border-bordersec dark:hover:border-bgbtngreen dark:text-borderconcours text-txtcommentply dark:hover:text-bgbtngreen dark:focus:text-bgbtngreen">
                                    <div class="w-36">
                                        On Demand
                                    </div>
                                </button>
                                <button x-on:click="showNow(4) " id="daniela"
                                    class="text-lg font-inter w-40 font-medium hover:text-bcklightbuscador focus:text-bcklightbuscador hover:border-bcklightbuscador focus:border-bcklightbuscador focus:outline-none dark:focus:border-bgbtngreen pb-4 px-5 border-b-4 dark:border-txtcommentply border-bordersec dark:hover:border-bgbtngreen dark:text-borderconcours text-txtcommentply dark:hover:text-bgbtngreen dark:focus:text-bgbtngreen">
                                    <div class="w-36">
                                        Especialidades
                                    </div>
                                </button>

                            </div>
                            <script>
                                document.getElementById("gabriela").classList.add('ophomeactiv');
                                gabriela.addEventListener('click',function(){
                                       // icon.classList.remove('hidden');
                                       document.getElementById("gabriela").classList.add('ophomeactiv');
                                       document.getElementById("adelina").classList.add('oppanel');
                                       document.getElementById("camila").classList.add('oppanel');
                                       document.getElementById("daniela").classList.add('oppanel');
                                        });
                                        adelina.addEventListener('click',function(){
                                       // icon.classList.remove('hidden');
                                       document.getElementById("gabriela").classList.add('oppanel');
                                       document.getElementById("adelina").classList.add('ophomeactiv');
                                       document.getElementById("camila").classList.add('oppanel');
                                       document.getElementById("daniela").classList.add('oppanel');
                                        });
                                        camila.addEventListener('click',function(){
                                       // icon.classList.remove('hidden');
                                       document.getElementById("gabriela").classList.add('oppanel');
                                       document.getElementById("adelina").classList.add('oppanel');
                                       document.getElementById("camila").classList.add('ophomeactiv');
                                       document.getElementById("daniela").classList.add('oppanel');
                                        });
                                        daniela.addEventListener('click',function(){
                                       // icon.classList.remove('hidden');
                                       document.getElementById("gabriela").classList.add('oppanel');
                                       document.getElementById("adelina").classList.add('oppanel');
                                       document.getElementById("daniela").classList.add('ophomeactiv');
                                       document.getElementById("camila").classList.add('oppanel');
                                        });
                                
                            </script>
                            <style>
                                .clasebarra::-webkit-scrollbar {
                                    display: none;

                                }
                            </style>


                            {{-- cursos --}}
                            <template x-if="tipo == 1">
                                <div
                                    class="grid xl:grid-cols-4 ml:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 pt-6 gap-x-5 gap-y-6 ">
                                    <div class="dark:bg-gray14  bg-whiteheader rounded-md p-4 ">
                                        <div class="justify-center">
                                            <img class="h-20 w-20 mx-auto"
                                                src="https://www.mayugo.net/admin/images/categoria/gestion-de-operaciones.svg"
                                                alt="">
                                        </div>
                                        <div
                                            class="dark:text-borderconcours text-txtcommentply pt-5 font-inter font-normal text-sixteen">
                                            Estudio de métodos y mejora de procesos <span
                                                class="dark:text-pricingdarkstudents text-gray-600">0% </span>

                                        </div>
                                        <div class="py-1 dark:bg-gray-650 bg-bordersec rounded-md mt-2">

                                        </div>

                                        <div class="flex mt-3">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">

                                                <path
                                                    d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                    fill="#697586" />
                                            </svg>
                                            <div
                                                class="pl-3 dark:text-borderconcours text-txtcommentply font-inter font-medium text-sm ">
                                                0/10 proyectos completadas
                                            </div>

                                        </div>
                                        <div class="flex mt-3">

                                            <svg width="20" height="20" class="text-graypricingstrike "
                                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                    stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                            <div
                                                class="pl-3 dark:text-borderconcours text-txtcommentply font-inter font-medium text-sm ">
                                                Exámen
                                            </div>

                                        </div>
                                        <div class="mt-6">
                                            <button
                                                class="rounded-md focus:outline-none w-full dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 dark:text-green_home text-center h-10 font-inter font-medium text-sixteen">
                                                Empezar curso
                                            </button>
                                        </div>

                                    </div>
                                    <div class="dark:bg-gray14  bg-whiteheader rounded-md p-4 ">
                                        <div class="justify-center">
                                            <img class="h-20 w-20 mx-auto"
                                                src="https://www.mayugo.net/admin/images/categoria/gestion-de-operaciones.svg"
                                                alt="">
                                        </div>
                                        <div
                                            class="dark:text-borderconcours text-txtcommentply pt-5 font-inter font-normal text-sixteen">
                                            Estudio de métodos y mejora de procesos <span
                                                class="dark:text-pricingdarkstudents text-gray-600">75% </span>

                                        </div>
                                        <div class="flex mt-2">
                                            <div class="w-3/4 bg-green py-1 rounded-l-md">

                                            </div>
                                            <div class="py-1 w-1/4 dark:bg-gray-650 bg-bordersec rounded-r-md ">

                                            </div>

                                        </div>

                                        <div class="flex mt-3">
                                            <svg width="20" height="20"
                                                class="dark:text-checkpricingdark text-pricingtextduowhite"
                                                viewBox="0 0 20 20" fill="Currentcolor"
                                                xmlns="http://www.w3.org/2000/svg">

                                                <path
                                                    d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                    fill="Currentcolor" />
                                            </svg>
                                            <div
                                                class="pl-3 dark:text-checkpricingdark text-pricingtextduowhite font-inter font-medium text-sm ">
                                                7/10 proyectos completadas
                                            </div>

                                        </div>
                                        <div class="flex mt-3">

                                            <svg width="20" height="20"
                                                class="dark:text-checkpricingdark text-pricingtextduowhite "
                                                viewBox="0 0 20 20" fill="Currentcolor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                    stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                            <div
                                                class="pl-3 dark:text-checkpricingdark text-pricingtextduowhite font-inter font-medium text-sm ">
                                                Exámen
                                            </div>

                                        </div>
                                        <div class="mt-6">
                                            <button
                                                class="rounded-md focus:outline-none w-full dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 dark:text-green_home text-center h-10 font-inter font-medium text-sixteen">
                                                Tomar examen
                                            </button>
                                        </div>

                                    </div>
                                    <div class="dark:bg-gray14  bg-whiteheader rounded-md p-4 ">
                                        <div class="justify-center">
                                            <img class="h-20 w-20 mx-auto"
                                                src="https://www.mayugo.net/admin/images/categoria/gestion-de-operaciones.svg"
                                                alt="">
                                        </div>
                                        <div
                                            class="dark:text-borderconcours text-txtcommentply pt-5 font-inter font-normal text-sixteen">
                                            Estudio de métodos y mejora de procesos <span
                                                class="dark:text-pricingdarkstudents text-gray-600">50% </span>

                                        </div>
                                        <div class="flex mt-2">
                                            <div class="w-1/2 bg-green py-1 rounded-l-md">

                                            </div>
                                            <div class="py-1 w-1/2 dark:bg-gray-650 bg-bordersec rounded-r-md ">

                                            </div>

                                        </div>

                                        <div class="flex mt-3">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">

                                                <path
                                                    d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                    fill="#697586" />
                                            </svg>
                                            <div
                                                class="pl-3 dark:text-borderconcours text-txtcommentply font-inter font-medium text-sm ">
                                                5/10 proyectos completadas
                                            </div>

                                        </div>
                                        <div class="flex mt-3">

                                            <svg width="20" height="20" class="text-graypricingstrike "
                                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                    stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                            <div
                                                class="pl-3 dark:text-borderconcours text-txtcommentply font-inter font-medium text-sm ">
                                                Exámen
                                            </div>

                                        </div>
                                        <div class="mt-6">
                                            <button
                                                class="rounded-md focus:outline-none w-full dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 dark:text-green_home text-center h-10 font-inter font-medium text-sixteen">
                                                Continua el curso
                                            </button>
                                        </div>

                                    </div>
                                    <div class="dark:bg-gray14  bg-whiteheader rounded-md p-4 ">
                                        <div class="justify-center">
                                            <img class="h-20 w-20 mx-auto"
                                                src="https://www.mayugo.net/admin/images/categoria/gestion-de-operaciones.svg"
                                                alt="">
                                        </div>
                                        <div
                                            class="dark:text-borderconcours text-txtcommentply pt-5 font-inter font-normal text-sixteen">
                                            Estudio de métodos y mejora de procesos <span
                                                class="dark:text-pricingdarkstudents text-gray-600">25% </span>

                                        </div>
                                        <div class="flex mt-2">
                                            <div class="w-1/4 bg-green py-1 rounded-l-md">

                                            </div>
                                            <div class="py-1 w-3/4 dark:bg-gray-650 bg-bordersec rounded-r-md ">

                                            </div>

                                        </div>

                                        <div class="flex mt-3">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">

                                                <path
                                                    d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                    fill="#697586" />
                                            </svg>
                                            <div
                                                class="pl-3 dark:text-borderconcours text-txtcommentply font-inter font-medium text-sm ">
                                                2/10 proyectos completadas
                                            </div>

                                        </div>
                                        <div class="flex mt-3">

                                            <svg width="20" height="20" class="text-graypricingstrike "
                                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                    stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                            <div
                                                class="pl-3 dark:text-borderconcours text-txtcommentply font-inter font-medium text-sm ">
                                                Exámen
                                            </div>

                                        </div>
                                        <div class="mt-6">
                                            <button
                                                class="rounded-md focus:outline-none w-full dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 dark:text-green_home text-center h-10 font-inter font-medium text-sixteen">
                                                Continua el curso
                                            </button>
                                        </div>

                                    </div>
                                    <div class="dark:bg-gray14  bg-whiteheader rounded-md p-4 ">
                                        <div class="justify-center">
                                            <img class="h-20 w-20 mx-auto"
                                                src="https://www.mayugo.net/admin/images/categoria/gestion-de-operaciones.svg"
                                                alt="">
                                        </div>
                                        <div
                                            class="dark:text-borderconcours text-txtcommentply pt-5 font-inter font-normal text-sixteen">
                                            Estudio de métodos y mejora de procesos <span
                                                class="dark:text-pricingdarkstudents text-gray-600">0% </span>

                                        </div>
                                        <div class="py-1 dark:bg-gray-650 bg-bordersec rounded-md mt-2">

                                        </div>

                                        <div class="flex mt-3">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">

                                                <path
                                                    d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                    fill="#697586" />
                                            </svg>
                                            <div
                                                class="pl-3 dark:text-borderconcours text-txtcommentply font-inter font-medium text-sm ">
                                                0/10 proyectos completadas
                                            </div>

                                        </div>
                                        <div class="flex mt-3">

                                            <svg width="20" height="20" class="text-graypricingstrike "
                                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                    stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                            <div
                                                class="pl-3 dark:text-borderconcours text-txtcommentply font-inter font-medium text-sm ">
                                                Exámen
                                            </div>

                                        </div>
                                        <div class="mt-6">
                                            <button
                                                class="rounded-md focus:outline-none w-full dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 dark:text-green_home text-center h-10 font-inter font-medium text-sixteen">
                                                Empezar curso
                                            </button>
                                        </div>

                                    </div>
                                    <div class="dark:bg-gray14  bg-whiteheader rounded-md p-4 ">
                                        <div class="justify-center">
                                            <img class="h-20 w-20 mx-auto"
                                                src="https://www.mayugo.net/admin/images/categoria/gestion-de-operaciones.svg"
                                                alt="">
                                        </div>
                                        <div
                                            class="dark:text-borderconcours text-txtcommentply pt-5 font-inter font-normal text-sixteen">
                                            Estudio de métodos y mejora de procesos <span
                                                class="dark:text-pricingdarkstudents text-gray-600">75% </span>

                                        </div>
                                        <div class="flex mt-2">
                                            <div class="w-3/4 bg-green py-1 rounded-l-md">

                                            </div>
                                            <div class="py-1 w-1/4 dark:bg-gray-650 bg-bordersec rounded-r-md ">

                                            </div>

                                        </div>

                                        <div class="flex mt-3">
                                            <svg width="20" height="20"
                                                class="dark:text-checkpricingdark text-pricingtextduowhite"
                                                viewBox="0 0 20 20" fill="Currentcolor"
                                                xmlns="http://www.w3.org/2000/svg">

                                                <path
                                                    d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                    fill="Currentcolor" />
                                            </svg>
                                            <div
                                                class="pl-3 dark:text-checkpricingdark text-pricingtextduowhite font-inter font-medium text-sm ">
                                                7/10 proyectos completadas
                                            </div>

                                        </div>
                                        <div class="flex mt-3">

                                            <svg width="20" height="20"
                                                class="dark:text-checkpricingdark text-pricingtextduowhite "
                                                viewBox="0 0 20 20" fill="Currentcolor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                    stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                            <div
                                                class="pl-3 dark:text-checkpricingdark text-pricingtextduowhite font-inter font-medium text-sm ">
                                                Exámen
                                            </div>

                                        </div>
                                        <div class="mt-6 flex gap-x-4">
                                            <button
                                                class="rounded-md focus:outline-none w-full dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 dark:text-green_home text-center h-10 font-inter font-medium text-sixteen">
                                               Tomar exámen
                                            </button>
                                            <button class="focus:outline-none">
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.3335 13.3337V17.5003H13.8181M26.6152 19.167C26.2052 15.8784 23.3998 13.3337 20.0002 13.3337C17.2023 13.3337 14.8071 15.0572 13.8181 17.5003M13.8181 17.5003H17.5002M26.6668 26.667V22.5003H26.1822M26.1822 22.5003C25.1932 24.9435 22.798 26.667 20.0002 26.667C16.6005 26.667 13.7952 24.1223 13.3851 20.8337M26.1822 22.5003H22.5002" stroke="#85E0A3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <rect x="0.5" y="0.5" width="39" height="39" rx="5.5" stroke="#85E0A3"/>
                                                    </svg>
                                            </button>
                                                
                                        </div>

                                    </div>
                                    <div class="dark:bg-gray14  bg-whiteheader rounded-md p-4 ">
                                        <div class="justify-center">
                                            <img class="h-20 w-20 mx-auto"
                                                src="https://www.mayugo.net/admin/images/categoria/gestion-de-operaciones.svg"
                                                alt="">
                                        </div>
                                        <div
                                            class="dark:text-borderconcours text-txtcommentply pt-5 font-inter font-normal text-sixteen">
                                            Estudio de métodos y mejora de procesos <span
                                                class="dark:text-pricingdarkstudents text-gray-600">50% </span>

                                        </div>
                                        <div class="flex mt-2">
                                            <div class="w-1/2 bg-green py-1 rounded-l-md">

                                            </div>
                                            <div class="py-1 w-1/2 dark:bg-gray-650 bg-bordersec rounded-r-md ">

                                            </div>

                                        </div>

                                        <div class="flex mt-3">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">

                                                <path
                                                    d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                    fill="#697586" />
                                            </svg>
                                            <div
                                                class="pl-3 dark:text-borderconcours text-txtcommentply font-inter font-medium text-sm ">
                                                5/10 proyectos completadas
                                            </div>

                                        </div>
                                        <div class="flex mt-3">

                                            <svg width="20" height="20" class="text-graypricingstrike "
                                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                    stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                            <div
                                                class="pl-3 dark:text-borderconcours text-txtcommentply font-inter font-medium text-sm ">
                                                Exámen
                                            </div>

                                        </div>
                                        <div class="mt-6">
                                            <button
                                                class="rounded-md focus:outline-none w-full dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 dark:text-green_home text-center h-10 font-inter font-medium text-sixteen">
                                                Empezar curso
                                            </button>
                                        </div>

                                    </div>
                                    <div class="dark:bg-gray14  bg-whiteheader rounded-md p-4 ">
                                        <div class="justify-center">
                                            <img class="h-20 w-20 mx-auto"
                                                src="https://www.mayugo.net/admin/images/categoria/gestion-de-operaciones.svg"
                                                alt="">
                                        </div>
                                        <div
                                            class="dark:text-borderconcours text-txtcommentply pt-5 font-inter font-normal text-sixteen">
                                            Estudio de métodos y mejora de procesos <span
                                                class="dark:text-pricingdarkstudents text-gray-600">25% </span>

                                        </div>
                                        <div class="flex mt-2">
                                            <div class="w-1/4 bg-green py-1 rounded-l-md">

                                            </div>
                                            <div class="py-1 w-3/4 dark:bg-gray-650 bg-bordersec rounded-r-md ">

                                            </div>

                                        </div>

                                        <div class="flex mt-3">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" class="dark:text-checkpricingdark text-pricingtextduowhite"
                                                xmlns="http://www.w3.org/2000/svg">

                                                <path
                                                    d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                    fill="Currentcolor" />
                                            </svg>
                                            <div
                                                class="pl-3 dark:text-checkpricingdark text-pricingtextduowhite font-inter font-medium text-sm ">
                                                2/10 proyectos completadas
                                            </div>

                                        </div>
                                        <div class="flex mt-3">

                                            <svg width="20" height="20" class="dark:text-checkpricingdark text-pricingtextduowhite"
                                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                    stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                            <div
                                                class="pl-3 dark:text-checkpricingdark text-pricingtextduowhite font-inter font-medium text-sm ">
                                                Exámen
                                            </div>

                                        </div>
                                        <div class="mt-6 flex gap-x-4">
                                            <button
                                                class="rounded-md focus:outline-none w-full dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 dark:text-green_home text-center h-10 font-inter font-medium text-sixteen">
                                               Iniciar proyecto 
                                            </button>
                                            <button class="focus:outline-none">
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.3335 13.3337V17.5003H13.8181M26.6152 19.167C26.2052 15.8784 23.3998 13.3337 20.0002 13.3337C17.2023 13.3337 14.8071 15.0572 13.8181 17.5003M13.8181 17.5003H17.5002M26.6668 26.667V22.5003H26.1822M26.1822 22.5003C25.1932 24.9435 22.798 26.667 20.0002 26.667C16.6005 26.667 13.7952 24.1223 13.3851 20.8337M26.1822 22.5003H22.5002" stroke="#85E0A3" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <rect x="0.5" y="0.5" width="39" height="39" rx="5.5" stroke="#85E0A3"/>
                                                    </svg>
                                            </button>
                                                
                                        </div>

                                    </div>

                                </div>
                            </template>

                            <template x-if="tipo == 2">
                                <div
                                    class="grid xl:grid-cols-4 ml:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 pt-6 gap-x-5 gap-y-6 ">
                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/management-miniatura.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">

                                            <span class="inline-flex dark:bg-celeste_panel bg-bgbtnblue rounded-xl py-1 items-center  px-3 ">
                                                <svg width="16" class="dark:text-toggledark  text-white-100"
                                                    height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.33333 4.66667V2M10.6667 4.66667V2M4.66667 7.33333H11.3333M3.33333 14H12.6667C13.403 14 14 13.403 14 12.6667V4.66667C14 3.93029 13.403 3.33333 12.6667 3.33333H3.33333C2.59695 3.33333 2 3.93029 2 4.66667V12.6667C2 13.403 2.59695 14 3.33333 14Z"
                                                        stroke="Currentcolor" stroke-width="Currentcolor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div
                                                    class="dark:text-toggledark  text-white-100 font-inter font-semibold text-sm w-auto pl-1">
                                                    Semana 1
                                                </div>

                                            </span>

                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Ver curso
                                                </button>
                                            </div>

                                        </div>
                                    </div>

                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/management-miniatura.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">

                                            <span class="inline-flex dark:bg-celeste_panel bg-bgbtnblue rounded-xl py-1 items-center  px-3 ">
                                                <svg width="16" class="dark:text-toggledark  text-white-100"
                                                    height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.33333 4.66667V2M10.6667 4.66667V2M4.66667 7.33333H11.3333M3.33333 14H12.6667C13.403 14 14 13.403 14 12.6667V4.66667C14 3.93029 13.403 3.33333 12.6667 3.33333H3.33333C2.59695 3.33333 2 3.93029 2 4.66667V12.6667C2 13.403 2.59695 14 3.33333 14Z"
                                                        stroke="Currentcolor" stroke-width="Currentcolor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div
                                                    class="dark:text-toggledark  text-white-100 font-inter font-semibold text-sm w-auto pl-1">
                                                    Semana 1
                                                </div>

                                            </span>

                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Ver curso
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/management-miniatura.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">

                                            <span class="inline-flex dark:bg-celeste_panel bg-bgbtnblue rounded-xl py-1 items-center  px-3 ">
                                                <svg width="16" class="dark:text-toggledark  text-white-100"
                                                    height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.33333 4.66667V2M10.6667 4.66667V2M4.66667 7.33333H11.3333M3.33333 14H12.6667C13.403 14 14 13.403 14 12.6667V4.66667C14 3.93029 13.403 3.33333 12.6667 3.33333H3.33333C2.59695 3.33333 2 3.93029 2 4.66667V12.6667C2 13.403 2.59695 14 3.33333 14Z"
                                                        stroke="Currentcolor" stroke-width="Currentcolor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div
                                                    class="dark:text-toggledark  text-white-100 font-inter font-semibold text-sm w-auto pl-1">
                                                    Semana 1
                                                </div>

                                            </span>

                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Ver curso
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/management-miniatura.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">

                                            <span class="inline-flex  dark:bg-redbuscador bg-red_panel rounded-xl py-1 items-center   px-3 ">
                                                <svg width="16" class="dark:text-redbolsa  text-white-100 "
                                                    height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.33333 4.66667V2M10.6667 4.66667V2M4.66667 7.33333H11.3333M3.33333 14H12.6667C13.403 14 14 13.403 14 12.6667V4.66667C14 3.93029 13.403 3.33333 12.6667 3.33333H3.33333C2.59695 3.33333 2 3.93029 2 4.66667V12.6667C2 13.403 2.59695 14 3.33333 14Z"
                                                        stroke="Currentcolor" stroke-width="Currentcolor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div
                                                    class="dark:text-redbolsa  text-white-100 font-inter font-semibold text-sm w-auto pl-1">
                                                    Finalizado
                                                </div>

                                            </span>

                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Empesar proyecto
                                                </button>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </template>
                            <template x-if="tipo == 3">
                                <div
                                    class="grid xl:grid-cols-4 ml:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 pt-6 gap-x-5 gap-y-6 ">
                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/planificacion-control-produccion.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">



                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería <span
                                                    class="dark:text-borderconcours text-txtcommentply">25%</span>
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Ver curso
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/planificacion-control-produccion.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">



                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería <span
                                                    class="dark:text-borderconcours text-txtcommentply">25%</span>
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Ver curso
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/planificacion-control-produccion.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">



                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería <span
                                                    class="dark:text-borderconcours text-txtcommentply">25%</span>
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Ver curso
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/planificacion-control-produccion.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">



                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería <span
                                                    class="dark:text-borderconcours text-txtcommentply">25%</span>
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Ver curso
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </template>
                            <template x-if="tipo == 4">
                                <div>
                                    <div
                                        class="py-5 px-6 flex sm:flex-row flex-col justify-between items-center dark:bg-gray14 bg-colheaderwhite rounded-lg mt-6 ">
                                        <div class="flex">
                                            <div>
                                                <img class="h-20 w-20"
                                                    src="https://www.mayugo.net/admin/images/prods/cono-costos-de-transporte-aplicado-en-logistica.svg"
                                                    alt="">
                                            </div>
                                            <div class="pl-4">
                                                <div
                                                    class="text-txtcommentply dark:text-borderconcours text-lg font-medium font-inter ">
                                                    Especialización en gestión industrial
                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>

                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2">
                                                        00/04 Cursos completados
                                                    </div>

                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>


                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2">
                                                        06/10 Proyectos
                                                    </div>

                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>


                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2S">
                                                        00/04 Exámenes
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="sm:w-auto w-full sm:pt-0 pt-3">
                                            <button id="uno"
                                                class=" focus:outline-none w-full justify-center   flex font-medium font-inter text-sm py-2 bg-transparent border dark:border-pricingtextduowhite border-checkpricingdark text-pricingtextduowhite dark:text-checkpricingdark px-4 rounded-lg ">
                                                <div>Mostrar
                                                </div>
                                                <svg id="menos" class="pl-2 text-pricingtextduowhite dark:text-checkpricingdark "
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.6668 9.99951H3.3335" stroke="Currentcolor"
                                                        stroke-width="Currentcolor" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <svg id="mas"
                                                    class="pl-2 text-pricingtextduowhite dark:text-checkpricingdark hidden"
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.0002 3.3335V16.6668M16.6668 10.0002L3.3335 10.0002"
                                                        stroke="Currentcolor" stroke-width="Currentcolor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>


                                            </button>
                                        </div>
                                    </div>
                                    <div class="py-4 px-6 dark:bg-panel1 bg-white1 hidden " id="carta">
                                        <div class="flex ">

                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16 32.0011C24.8366 32.0011 32.0001 24.8376 32.0001 16.001C32.0001 7.16444 24.8366 0.000976562 16 0.000976562C7.16346 0.000976562 0 7.16444 0 16.001C0 24.8376 7.16346 32.0011 16 32.0011Z"
                                                    fill="#FA4658" />
                                                <path
                                                    d="M15.9997 29.9877C23.7247 29.9877 29.987 23.7254 29.987 16.0005C29.987 8.2755 23.7247 2.01318 15.9997 2.01318C8.27476 2.01318 2.01245 8.2755 2.01245 16.0005C2.01245 23.7254 8.27476 29.9877 15.9997 29.9877Z"
                                                    fill="#B00303" />
                                                <path d="M5.93896 23.5391H26.1516" stroke="white"
                                                    stroke-width="0.568862" stroke-miterlimit="22.9256"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M26.8982 12.1587C25.2452 23.2199 19.8428 25.8687 6.2915 18.7017"
                                                    stroke="white" stroke-width="0.568862" stroke-miterlimit="22.9256"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.33057 7.70459V25.0134" stroke="white"
                                                    stroke-width="0.568862" stroke-miterlimit="22.9256"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M13.5891 16.4072H13.589C13.2585 16.4072 12.9905 16.6752 12.9905 17.0058V17.5386C12.9905 17.8692 13.2585 18.1372 13.589 18.1372H13.5891C13.9196 18.1372 14.1876 17.8692 14.1876 17.5386V17.0058C14.1876 16.6752 13.9196 16.4072 13.5891 16.4072Z"
                                                    fill="white" />
                                                <path
                                                    d="M15.2131 15.5967H15.2131C14.8825 15.5967 14.6145 15.9902 14.6145 16.4757V17.2581C14.6145 17.7436 14.8825 18.1372 15.2131 18.1372H15.2131C15.5437 18.1372 15.8116 17.7436 15.8116 17.2581V16.4757C15.8116 15.9902 15.5437 15.5967 15.2131 15.5967Z"
                                                    fill="white" />
                                                <path
                                                    d="M16.8381 14.7876H16.8381C16.5075 14.7876 16.2395 15.3067 16.2395 15.9471V16.9792C16.2395 17.6195 16.5075 18.1387 16.8381 18.1387H16.8381C17.1687 18.1387 17.4366 17.6195 17.4366 16.9792V15.9471C17.4366 15.3067 17.1687 14.7876 16.8381 14.7876Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12.9676 15.9683L14.4254 14.5105L14.9261 15.0112L15.4046 15.4897L15.8832 15.0112L17.341 13.5533L17.7243 13.9366L17.99 12.4258L16.4411 12.6534L16.8624 13.0748L15.4046 14.5326L14.9039 14.0319L14.4254 13.5533L13.9468 14.0319L12.489 15.4897L12.9676 15.9683Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M15.2393 11.0259C17.5902 11.0259 19.4959 12.9317 19.4959 15.2825C19.4959 17.6334 17.5902 19.5391 15.2393 19.5391C12.8884 19.5391 10.9827 17.6334 10.9827 15.2825C10.9827 12.9317 12.8884 11.0259 15.2393 11.0259ZM16.1167 9.35449C16.6781 9.43689 17.2142 9.59689 17.7137 9.8237L17.6451 10.5956L18.7133 11.3219L19.4039 10.9752C19.813 11.371 20.166 11.8244 20.4494 12.3225L19.9402 12.9063L20.3757 14.1221L21.1412 14.249C21.1994 14.5843 21.2301 14.9291 21.2301 15.2811C21.2301 15.5083 21.217 15.7323 21.1924 15.9529L20.4354 16.1245L20.0732 17.3663L20.6191 17.919C20.3661 18.4339 20.0416 18.9074 19.6581 19.326L18.9437 19.0198L17.9205 19.8097L18.0363 20.5798C17.5386 20.843 16.9994 21.0384 16.431 21.1532L16.0335 20.483L14.7418 20.5187L14.3824 21.2106C13.8071 21.1282 13.2581 20.9643 12.7477 20.7305L12.82 19.9532L11.7539 19.2238L11.0577 19.5704C10.6497 19.1725 10.2981 18.717 10.0164 18.2168L10.5309 17.6323L10.0992 16.4151L9.3329 16.286C9.27772 15.9592 9.24854 15.6236 9.24854 15.2811C9.24854 15.0449 9.26265 14.812 9.28927 14.5829L10.046 14.4124L10.4128 13.1744L9.87086 12.6204C10.1262 12.1063 10.453 11.634 10.8387 11.2167L11.5488 11.5233L12.5756 10.7378L12.4626 9.97177C12.9618 9.71019 13.5023 9.51693 14.0719 9.40438L14.4654 10.0711L15.7574 10.0408L16.1167 9.35449Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M23.2657 7.1673L18.7134 11.3223L19.9403 12.9067C21.71 11.6458 23.458 10.6136 25.2495 9.12422C25.9364 8.55317 23.9517 6.54111 23.2657 7.1673Z"
                                                    fill="white" />
                                            </svg>

                                            <div class="flex justify-between sm:flex-row flex-col w-full 6">
                                                <div class="w-full pl-3 pr-6">
                                                    <div
                                                        class="font-inter font-medium text-sixteen text-txtcommentply dark:text-borderconcours">
                                                        Optimización Industrial con Modelamiento Matemático
                                                    </div>
                                                    <div class="flex w-full pt-3">

                                                        <div class="py-1 rounded-l-md bg-green w-3/4">

                                                        </div>
                                                        <div
                                                            class="py rounded-r-md bg-bgprogresb dark:bg-txtnamecomntpkyr w-1/4">

                                                        </div>
                                                    </div>
                                                    <div
                                                        class="pt-1 font-inter font-medium text-sm dark:text-pricingdarkstudents text-txtcommentply">
                                                        60% completado
                                                    </div>

                                                </div>
                                                <div class="sm:pt-0 pt-4">
                                                    <button
                                                        class="font-inter focus:outline-none sm:w-36 w-full font-medium text-sm py-2 px-4 rounded-lg bg-pricingtextduowhite text-white-100 dark:text-green_home dark:bg-checkpricingdark">
                                                        Empezar curso
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                    </div>
                                    <script>
                                        var uno = document.getElementById('uno');
                                        var carta = document.getElementById('carta')
                                        var mas = document.getElementById('mas')
                                        var menos = document.getElementById('menos');


                                        uno.addEventListener('click', function() {
                                            // carta.classList.remove('hidden');
                                            carta.classList.toggle('hidden');
                                            mas.classList.toggle('hidden');
                                            menos.classList.toggle('hidden');


                                        });
                                    </script>
                                    <div
                                        class="py-5 px-6 sm:flex-row flex-col flex justify-between items-center dark:bg-gray14 bg-colheaderwhite rounded-lg mt-6 ">
                                        <div class="flex">
                                            <div>
                                                <img class="h-20 w-20"
                                                    src="https://www.mayugo.net/admin/images/prods/cono-costos-de-transporte-aplicado-en-logistica.svg"
                                                    alt="">
                                            </div>
                                            <div class="pl-4">
                                                <div
                                                    class="text-txtcommentply dark:text-borderconcours text-lg font-medium font-inter ">
                                                    Especialización en gestión industrial
                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>

                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2">
                                                        00/04 Cursos completados
                                                    </div>

                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>


                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2">
                                                        06/10 Proyectos
                                                    </div>

                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>


                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2S">
                                                        00/04 Exámenes
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="  sm:w-auto w-full sm:pt-0 pt-3">
                                            <button id="uno"
                                                class=" focus:outline-none justify-center w-full flex font-medium font-inter text-sm py-2 bg-transparent border dark:border-pricingtextduowhite border-checkpricingdark text-pricingtextduowhite dark:text-checkpricingdark px-4 rounded-lg ">
                                                <div>Mostrar
                                                </div>
                                                <svg class="pl-2 text-pricingtextduowhite dark:text-checkpricingdark "
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.6668 9.99951H3.3335" stroke="Currentcolor"
                                                        stroke-width="Currentcolor" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <svg id=""
                                                    class="pl-2 text-pricingtextduowhite dark:text-checkpricingdark hidden"
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.0002 3.3335V16.6668M16.6668 10.0002L3.3335 10.0002"
                                                        stroke="Currentcolor" stroke-width="Currentcolor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>


                                            </button>
                                        </div>
                                    </div>
                                    <div
                                        class="py-5 px-6 flex sm:flex-row flex-col justify-between items-center dark:bg-gray14 bg-colheaderwhite rounded-lg mt-6 ">
                                        <div class="flex">
                                            <div>
                                                <img class="h-20 w-20"
                                                    src="https://www.mayugo.net/admin/images/prods/cono-costos-de-transporte-aplicado-en-logistica.svg"
                                                    alt="">
                                            </div>
                                            <div class="pl-4">
                                                <div
                                                    class="text-txtcommentply dark:text-borderconcours text-lg font-medium font-inter ">
                                                    Especialización en gestión industrial
                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>

                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2">
                                                        00/04 Cursos completados
                                                    </div>

                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>


                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2">
                                                        06/10 Proyectos
                                                    </div>

                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>


                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2S">
                                                        00/04 Exámenes
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="sm:w-auto w-full sm:pt-0 pt-3">
                                            <button id="uno"
                                                class=" focus:outline-none w-full justify-center flex font-medium font-inter text-sm py-2 bg-transparent border dark:border-pricingtextduowhite border-checkpricingdark text-pricingtextduowhite dark:text-checkpricingdark px-4 rounded-lg ">
                                                <div>Mostrar
                                                </div>
                                                <svg class="pl-2 text-pricingtextduowhite dark:text-checkpricingdark "
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.6668 9.99951H3.3335" stroke="Currentcolor"
                                                        stroke-width="Currentcolor" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <svg id=""
                                                    class="pl-2 text-pricingtextduowhite dark:text-checkpricingdark hidden"
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.0002 3.3335V16.6668M16.6668 10.0002L3.3335 10.0002"
                                                        stroke="Currentcolor" stroke-width="Currentcolor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>


                                            </button>
                                        </div>
                                    </div>
                                    <div class="dark:bg-bgbtnblue bg-bgbtnblue px-5 rounded-lg mt-3 py-5">
                                        <div class="justify-center ">
                                            <svg width="48" class="mx-auto" height="48" viewBox="0 0 48 48"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="48" height="48" rx="24" fill="#003462" />
                                                <path
                                                    d="M24 27V29M18 33H30C31.1046 33 32 32.1046 32 31V25C32 23.8954 31.1046 23 30 23H18C16.8954 23 16 23.8954 16 25V31C16 32.1046 16.8954 33 18 33ZM28 23V19C28 16.7909 26.2091 15 24 15C21.7909 15 20 16.7909 20 19V23H28Z"
                                                    stroke="#B3DAFC" stroke-width="2" stroke-linecap="round" />
                                            </svg>

                                        </div>
                                        <div
                                            class="dark:text-bordersec text-bgprogresb font-inter font-medium text-sm text-center mt-4">
                                            No tienes acceso a esta sección
                                        </div>
                                        <div
                                            class="dark:text-bordersec text-bgprogresb font-inter font-medium text-xl text-center mt-4">
                                            Adquiere un plan Duo, Premium o Básico para ver esta sección
                                        </div>
                                        <div class="text-center mt-5">
                                            <button
                                                class="bg-benefitstalkssmarger px-5  py-2 dark:text-toggledark text-toggledark font-inter font-normal text-sixteen rounded-lg">
                                                ¡Sube a Premium!
                                            </button>
                                        </div>

                                    </div>

                                </div>
                            </template>
                        </div>
                    </template>
                    <template x-if="tipo == 2">
                        <div x-data="tipoboton()">

                            <div class="pt-6 flex  overflow-x-scroll clasebarra">
                                <button x-on:click="showNow(1) " id="ope1"
                                    class="text-lg  font-inter font-medium hover:text-bcklightbuscador focus:text-bcklightbuscador hover:border-bcklightbuscador focus:border-bcklightbuscador focus:outline-none dark:focus:border-bgbtngreen pb-4 px-5 border-b-4 dark:border-txtcommentply border-bordersec dark:hover:border-bgbtngreen dark:text-borderconcours text-txtcommentply dark:hover:text-bgbtngreen dark:focus:text-bgbtngreen">
                                    <div class="w-32">
                                        Video-Clases 
                                    </div>
                                </button>
                                <button x-on:click="showNow(2) " id="ope2"
                                    class="text-lg font-inter px-5 font-medium hover:text-bcklightbuscador focus:text-bcklightbuscador hover:border-bcklightbuscador focus:border-bcklightbuscador focus:outline-none dark:focus:border-bgbtngreen pb-4  border-b-4 dark:border-txtcommentply border-bordersec dark:hover:border-bgbtngreen dark:text-borderconcours text-txtcommentply dark:hover:text-bgbtngreen dark:focus:text-bgbtngreen">
                                    <div class="w-44 ">
                                        Modalidad en vivo
                                    </div>
                                </button>
                                <button x-on:click="showNow(3) " id="ope3"
                                    class="text-lg font-inter  font-medium hover:text-bcklightbuscador focus:text-bcklightbuscador hover:border-bcklightbuscador focus:border-bcklightbuscador focus:outline-none dark:focus:border-bgbtngreen pb-4 px-5 border-b-4 dark:border-txtcommentply border-bordersec dark:hover:border-bgbtngreen dark:text-borderconcours text-txtcommentply dark:hover:text-bgbtngreen dark:focus:text-bgbtngreen">
                                    <div class="w-36">
                                        On Demand
                                    </div>
                                </button>
                                <button x-on:click="showNow(4) "
                                    class="text-lg font-inter w-40 font-medium hover:text-bcklightbuscador focus:text-bcklightbuscador hover:border-bcklightbuscador focus:border-bcklightbuscador focus:outline-none dark:focus:border-bgbtngreen pb-4 px-5 border-b-4 dark:border-txtcommentply border-bordersec dark:hover:border-bgbtngreen dark:text-borderconcours text-txtcommentply dark:hover:text-bgbtngreen dark:focus:text-bgbtngreen">
                                    <div class="w-36">
                                        Especialidades
                                    </div>
                                </button>
                                <script>
                                    document.getElementById("ope1").classList.add('ophomeactiv');
                                    ope1.addEventListener('click',function(){
                                           // icon.classList.remove('hidden');
                                           document.getElementById("ope1").classList.add('ophomeactiv');
                                           document.getElementById("ope2").classList.add('ophome');
                                           document.getElementById("ope3").classList.add('ophome');
                                            });
                                            ope2.addEventListener('click',function(){
                                           // icon.classList.remove('hidden');
                                           document.getElementById("ope1").classList.add('ophome');
                                           document.getElementById("ope2").classList.add('ophomeactiv');
                                           document.getElementById("ope3").classList.add('ophome');
                                            });
                                            ope3.addEventListener('click',function(){
                                           // icon.classList.remove('hidden');
                                           document.getElementById("ope1").classList.add('ophome');
                                           document.getElementById("ope2").classList.add('ophome');
                                           document.getElementById("ope3").classList.add('ophomeactiv');
                                            });
                                    
                                </script>

                            </div>
                            <style>
                                .clasebarra::-webkit-scrollbar {
                                    display: none;

                                }
                            </style>


                            {{-- cursos --}}
                            <template x-if="tipo == 1">
                                <div class="pt-6">
                                    <div
                                        class="grid xl:grid-cols-4 ml:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 grid-cols-1  gap-x-5 gap-y-6 ">
                                        <div class="dark:bg-gray14  bg-whiteheader rounded-md ">
                                            <div class="justify-center">
                                                <img class="rounded-md"
                                                    src="https://www.mayugo.net/admin/images/miniaturas/ingenieria-de-costos.jpg"
                                                    alt="">
                                            </div>
                                            <div
                                                class="dark:text-borderconcours text-txtcommentply pt-5 font-inter font-normal text-lg p-4 ">
                                                Estudio de métodos y mejora de procesos

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14  bg-whiteheader rounded-md ">
                                            <div class="mx-auto dark:bg-gray11 bg-white1 py-14">
                                                <svg class="mx-auto" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_5604_247300)">
                                                    <path d="M40 80C62.0914 80 80 62.0914 80 40C80 17.9086 62.0914 0 40 0C17.9086 0 0 17.9086 0 40C0 62.0914 17.9086 80 40 80Z" fill="#8C8CFF"/>
                                                    <path d="M39.9997 74.9682C59.312 74.9682 74.9677 59.3125 74.9677 40.0002C74.9677 20.6879 59.312 5.03223 39.9997 5.03223C20.6874 5.03223 5.03174 20.6879 5.03174 40.0002C5.03174 59.3125 20.6874 74.9682 39.9997 74.9682Z" fill="#6666FF"/>
                                                    <path d="M40.0001 72.1921C57.7793 72.1921 72.1921 57.7793 72.1921 40.0001C72.1921 22.221 57.7793 7.80811 40.0001 7.80811C22.221 7.80811 7.80811 22.221 7.80811 40.0001C7.80811 57.7793 22.221 72.1921 40.0001 72.1921Z" fill="#6666FF"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.2766 54.927C32.3877 55.3795 34.8224 53.2035 35.2606 50.6408C35.7877 47.5564 33.5166 45.1546 30.9682 44.703C27.8677 44.1546 25.361 46.4888 24.9895 49.0382C24.5495 52.0497 26.7299 54.5564 29.2766 54.927ZM18.3335 57.5599C18.4197 57.1893 18.9317 56.5448 19.1459 56.2728C19.4979 55.8275 19.8908 55.6293 19.4899 54.9288C18.8304 53.7777 19.1904 52.6364 17.5699 52.5582C15.7415 52.4702 15.5584 52.0995 15.5593 50.3128C15.5602 49.0204 15.2695 47.3902 16.3753 46.887C16.9015 46.6479 17.6473 46.7208 18.2384 46.6026C18.9308 46.4639 18.9824 46.0142 19.2277 45.439C20.0419 43.5297 19.7246 43.9519 18.7522 42.599C17.7673 41.2284 18.6419 40.6355 19.3975 39.8817C20.121 39.1608 21.0686 37.9848 21.8615 38.0266C23.0624 38.0888 23.6179 39.7902 24.7539 39.3395C27.3495 38.3102 26.8828 38.4968 27.0162 37.3084C27.2348 35.359 27.5193 35.2355 29.2002 35.2213C29.913 35.215 30.6375 35.2115 31.3495 35.2257C33.0668 35.2613 32.7859 36.391 33.0286 37.8124C33.1593 38.5795 33.4668 38.4666 34.1806 38.7982C34.417 38.9066 35.5602 39.3786 35.7486 39.4026C36.2153 39.4604 36.7735 38.8506 37.0935 38.6079C38.5024 37.5377 38.9193 38.0666 39.8686 39.0186C40.2553 39.407 41.6997 40.6746 41.8073 41.2959C42.0259 42.5662 40.313 43.1982 40.513 44.1848C40.5868 44.5493 40.9646 45.3413 41.1379 45.7146C41.4979 46.4915 41.3219 46.6524 42.241 46.7679C44.5681 47.0622 44.6455 46.8746 44.5326 50.9395C44.4828 52.7404 43.8046 52.5448 42.0295 52.7813C41.2677 52.8826 41.3904 53.431 41.1433 54.0257C40.3761 55.8755 40.0988 55.2177 41.4179 56.8897C42.5015 58.263 40.9086 59.4373 39.577 60.6897C38.3326 61.8613 37.833 61.3564 36.7237 60.5057C36.0099 59.9582 36.2615 59.8977 35.337 60.3839C33.6055 61.2942 33.129 60.5706 33.0526 62.3919C32.9788 64.1395 32.1699 64.1679 30.5433 64.1697C29.0144 64.1706 27.6473 64.463 27.2917 63.1493C26.7139 61.0097 27.7957 61.5946 25.537 60.5946C23.5806 59.7279 24.0366 60.1173 22.7255 61.015C21.385 61.9333 20.5584 60.6702 19.961 60.0888C19.1228 59.2719 18.1122 58.5155 18.3335 57.5599Z" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M51.9941 41.6863C57.3612 42.4738 58.8821 34.3921 53.3355 33.3485C50.8421 32.8783 48.7337 34.7352 48.4243 36.8027C48.0368 39.3858 49.7959 41.3636 51.9941 41.6863ZM61.4635 44.3174C61.875 45.3965 60.707 46.0392 60.291 46.4187C59.9852 46.6969 59.6706 46.9565 59.3461 47.1698C58.9995 47.3983 58.5123 47.5476 58.0492 47.3183C57.2341 46.9156 57.3826 46.0214 55.5932 46.6365C54.2768 47.0898 54.3559 47.1689 54.0048 48.4649C53.7132 49.5423 52.5568 49.3174 51.4901 49.2241C50.3034 49.1209 49.555 49.1218 49.3781 47.9307C49.2919 47.3503 49.4768 46.736 49.0537 46.4783C48.6386 46.2267 48.3701 46.2374 47.9177 45.9094C46.6457 44.9894 46.1301 46.0738 45.5408 46.2569C44.9586 46.4383 44.4697 46.1458 44.203 45.8756C43.9168 45.5867 43.651 45.256 43.4163 44.9547C43.0386 44.4703 42.0563 43.656 42.6341 42.7165C43.0181 42.0916 43.939 41.9734 43.403 40.2267C43.0199 38.9796 42.7239 39.1112 41.4901 38.7378C40.4723 38.4294 40.6874 37.2347 40.7639 36.1885C40.8421 35.1343 40.8883 34.1983 42.083 34.0978C42.6217 34.0534 43.1186 34.1156 43.4999 33.8303C43.7052 33.6765 44.0483 33.1867 44.2048 32.8347C44.8181 31.4605 43.8714 31.2392 43.6314 30.4054C43.3683 29.4898 44.2083 28.9423 44.9452 28.3005C47.8341 25.7841 46.8483 29.2409 49.731 28.3458C51.0563 27.9343 50.7212 27.4463 51.1195 26.3298C51.4866 25.3005 52.6448 25.5245 53.723 25.6009C54.8848 25.6827 55.7097 25.7752 55.755 26.9618C55.8083 28.3334 56.1061 28.5778 57.1799 29.0481C59.1399 29.9067 59.4679 27.5209 60.8848 28.9174C61.1657 29.1938 61.4226 29.504 61.6883 29.816C61.9479 30.12 62.2457 30.432 62.451 30.7574C62.7079 31.1663 62.7363 31.6169 62.4901 32.0632C61.7266 33.4463 61.1026 32.6756 61.6759 34.2089C61.8172 34.5885 61.8661 35.1725 62.0937 35.4934C62.7257 36.3849 64.8341 35.16 64.4217 38.2996C64.291 39.2978 64.291 40.4383 63.3959 40.6552C62.867 40.784 62.4466 40.5485 61.9239 40.8889C61.4395 41.2045 60.6848 42.4009 60.8643 43.2347C60.9728 43.7387 61.3266 43.9583 61.4635 44.3174Z" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M38.2933 25.1708C38.0827 23.3974 36.5485 21.8997 34.5022 22.0872C32.7156 22.2525 31.1307 23.9601 31.424 25.9788C31.6756 27.7059 33.2276 29.1797 35.2507 28.9601C36.9751 28.7725 38.5253 27.1219 38.2933 25.1708ZM27.1769 30.7183C27.2649 30.1379 28.1618 29.7948 27.7538 28.7717C27.7094 28.6597 27.3369 27.8063 27.3138 27.7743C26.7707 27.0401 25.2667 28.1539 25.1671 25.8001C25.016 22.241 26.7218 24.6641 27.5725 22.6525C28.0809 21.4499 27.8178 21.6499 27.2676 20.7503C27.032 20.3654 26.9227 20.2739 27.1085 19.7654C27.2507 19.3743 27.4356 19.2685 27.6774 18.9957C29.8925 16.4881 29.6818 18.9254 31.3085 18.5157C31.6214 18.4365 32.0542 18.2197 32.2818 18.0561C33.1698 17.4143 32.1111 15.9005 34.128 15.8214C34.9422 15.7894 36.0205 15.7299 36.3805 16.2908C36.8916 17.089 36.2596 17.4694 37.3582 18.0854C38.1609 18.5361 38.7058 18.6268 39.3636 18.0614C40.7565 16.8623 42.4071 19.5112 42.4454 19.8108C42.5627 20.7201 41.5982 20.7894 41.8454 21.9192C42 22.6277 42.3636 23.2934 43.0933 23.4268C44.0356 23.5992 44.3653 23.825 44.4525 24.8614C44.512 25.561 44.576 26.7139 43.9991 27.0801C43.2471 27.5592 42.7022 27.1103 42.2302 28.0872C42.1511 28.2517 41.9058 29.0463 41.9067 29.1992C41.9076 29.5237 42.1929 29.8605 42.3342 30.1085C42.824 30.9637 42.4418 31.4561 41.8738 32.0268C41.5929 32.3103 40.8613 33.1921 40.1467 33.0161C39.8169 32.9343 39.6365 32.6214 39.2329 32.4997C38.88 32.3939 38.4809 32.4641 38.1582 32.6099C36.6018 33.3121 37.152 32.9148 36.8542 34.081C36.6382 34.9254 36.0925 35.0917 35.1111 35.0917C34.2196 35.0925 33.4222 35.1601 33.1209 34.3121C32.5698 32.7645 33.3822 33.4677 31.864 32.7974C30.6018 32.2401 31.0418 32.3877 30.048 32.9948C29.232 33.4934 28.5129 32.8597 28.1334 32.4125C27.7814 31.9965 27.0418 31.6054 27.1769 30.7183Z" fill="white"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_5604_247300">
                                                    <rect width="80" height="80" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                            </div>
                                            <div
                                                class="dark:text-borderconcours text-txtcommentply pt-5 font-inter font-normal text-lg p-4 ">
                                                Estudio de métodos y mejora de procesos

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14  bg-whiteheader rounded-md ">
                                            <div class="mx-auto dark:bg-gray11 bg-white1 py-14">
                                                <svg class="mx-auto" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_5604_247300)">
                                                    <path d="M40 80C62.0914 80 80 62.0914 80 40C80 17.9086 62.0914 0 40 0C17.9086 0 0 17.9086 0 40C0 62.0914 17.9086 80 40 80Z" fill="#8C8CFF"/>
                                                    <path d="M39.9997 74.9682C59.312 74.9682 74.9677 59.3125 74.9677 40.0002C74.9677 20.6879 59.312 5.03223 39.9997 5.03223C20.6874 5.03223 5.03174 20.6879 5.03174 40.0002C5.03174 59.3125 20.6874 74.9682 39.9997 74.9682Z" fill="#6666FF"/>
                                                    <path d="M40.0001 72.1921C57.7793 72.1921 72.1921 57.7793 72.1921 40.0001C72.1921 22.221 57.7793 7.80811 40.0001 7.80811C22.221 7.80811 7.80811 22.221 7.80811 40.0001C7.80811 57.7793 22.221 72.1921 40.0001 72.1921Z" fill="#6666FF"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M29.2766 54.927C32.3877 55.3795 34.8224 53.2035 35.2606 50.6408C35.7877 47.5564 33.5166 45.1546 30.9682 44.703C27.8677 44.1546 25.361 46.4888 24.9895 49.0382C24.5495 52.0497 26.7299 54.5564 29.2766 54.927ZM18.3335 57.5599C18.4197 57.1893 18.9317 56.5448 19.1459 56.2728C19.4979 55.8275 19.8908 55.6293 19.4899 54.9288C18.8304 53.7777 19.1904 52.6364 17.5699 52.5582C15.7415 52.4702 15.5584 52.0995 15.5593 50.3128C15.5602 49.0204 15.2695 47.3902 16.3753 46.887C16.9015 46.6479 17.6473 46.7208 18.2384 46.6026C18.9308 46.4639 18.9824 46.0142 19.2277 45.439C20.0419 43.5297 19.7246 43.9519 18.7522 42.599C17.7673 41.2284 18.6419 40.6355 19.3975 39.8817C20.121 39.1608 21.0686 37.9848 21.8615 38.0266C23.0624 38.0888 23.6179 39.7902 24.7539 39.3395C27.3495 38.3102 26.8828 38.4968 27.0162 37.3084C27.2348 35.359 27.5193 35.2355 29.2002 35.2213C29.913 35.215 30.6375 35.2115 31.3495 35.2257C33.0668 35.2613 32.7859 36.391 33.0286 37.8124C33.1593 38.5795 33.4668 38.4666 34.1806 38.7982C34.417 38.9066 35.5602 39.3786 35.7486 39.4026C36.2153 39.4604 36.7735 38.8506 37.0935 38.6079C38.5024 37.5377 38.9193 38.0666 39.8686 39.0186C40.2553 39.407 41.6997 40.6746 41.8073 41.2959C42.0259 42.5662 40.313 43.1982 40.513 44.1848C40.5868 44.5493 40.9646 45.3413 41.1379 45.7146C41.4979 46.4915 41.3219 46.6524 42.241 46.7679C44.5681 47.0622 44.6455 46.8746 44.5326 50.9395C44.4828 52.7404 43.8046 52.5448 42.0295 52.7813C41.2677 52.8826 41.3904 53.431 41.1433 54.0257C40.3761 55.8755 40.0988 55.2177 41.4179 56.8897C42.5015 58.263 40.9086 59.4373 39.577 60.6897C38.3326 61.8613 37.833 61.3564 36.7237 60.5057C36.0099 59.9582 36.2615 59.8977 35.337 60.3839C33.6055 61.2942 33.129 60.5706 33.0526 62.3919C32.9788 64.1395 32.1699 64.1679 30.5433 64.1697C29.0144 64.1706 27.6473 64.463 27.2917 63.1493C26.7139 61.0097 27.7957 61.5946 25.537 60.5946C23.5806 59.7279 24.0366 60.1173 22.7255 61.015C21.385 61.9333 20.5584 60.6702 19.961 60.0888C19.1228 59.2719 18.1122 58.5155 18.3335 57.5599Z" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M51.9941 41.6863C57.3612 42.4738 58.8821 34.3921 53.3355 33.3485C50.8421 32.8783 48.7337 34.7352 48.4243 36.8027C48.0368 39.3858 49.7959 41.3636 51.9941 41.6863ZM61.4635 44.3174C61.875 45.3965 60.707 46.0392 60.291 46.4187C59.9852 46.6969 59.6706 46.9565 59.3461 47.1698C58.9995 47.3983 58.5123 47.5476 58.0492 47.3183C57.2341 46.9156 57.3826 46.0214 55.5932 46.6365C54.2768 47.0898 54.3559 47.1689 54.0048 48.4649C53.7132 49.5423 52.5568 49.3174 51.4901 49.2241C50.3034 49.1209 49.555 49.1218 49.3781 47.9307C49.2919 47.3503 49.4768 46.736 49.0537 46.4783C48.6386 46.2267 48.3701 46.2374 47.9177 45.9094C46.6457 44.9894 46.1301 46.0738 45.5408 46.2569C44.9586 46.4383 44.4697 46.1458 44.203 45.8756C43.9168 45.5867 43.651 45.256 43.4163 44.9547C43.0386 44.4703 42.0563 43.656 42.6341 42.7165C43.0181 42.0916 43.939 41.9734 43.403 40.2267C43.0199 38.9796 42.7239 39.1112 41.4901 38.7378C40.4723 38.4294 40.6874 37.2347 40.7639 36.1885C40.8421 35.1343 40.8883 34.1983 42.083 34.0978C42.6217 34.0534 43.1186 34.1156 43.4999 33.8303C43.7052 33.6765 44.0483 33.1867 44.2048 32.8347C44.8181 31.4605 43.8714 31.2392 43.6314 30.4054C43.3683 29.4898 44.2083 28.9423 44.9452 28.3005C47.8341 25.7841 46.8483 29.2409 49.731 28.3458C51.0563 27.9343 50.7212 27.4463 51.1195 26.3298C51.4866 25.3005 52.6448 25.5245 53.723 25.6009C54.8848 25.6827 55.7097 25.7752 55.755 26.9618C55.8083 28.3334 56.1061 28.5778 57.1799 29.0481C59.1399 29.9067 59.4679 27.5209 60.8848 28.9174C61.1657 29.1938 61.4226 29.504 61.6883 29.816C61.9479 30.12 62.2457 30.432 62.451 30.7574C62.7079 31.1663 62.7363 31.6169 62.4901 32.0632C61.7266 33.4463 61.1026 32.6756 61.6759 34.2089C61.8172 34.5885 61.8661 35.1725 62.0937 35.4934C62.7257 36.3849 64.8341 35.16 64.4217 38.2996C64.291 39.2978 64.291 40.4383 63.3959 40.6552C62.867 40.784 62.4466 40.5485 61.9239 40.8889C61.4395 41.2045 60.6848 42.4009 60.8643 43.2347C60.9728 43.7387 61.3266 43.9583 61.4635 44.3174Z" fill="white"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M38.2933 25.1708C38.0827 23.3974 36.5485 21.8997 34.5022 22.0872C32.7156 22.2525 31.1307 23.9601 31.424 25.9788C31.6756 27.7059 33.2276 29.1797 35.2507 28.9601C36.9751 28.7725 38.5253 27.1219 38.2933 25.1708ZM27.1769 30.7183C27.2649 30.1379 28.1618 29.7948 27.7538 28.7717C27.7094 28.6597 27.3369 27.8063 27.3138 27.7743C26.7707 27.0401 25.2667 28.1539 25.1671 25.8001C25.016 22.241 26.7218 24.6641 27.5725 22.6525C28.0809 21.4499 27.8178 21.6499 27.2676 20.7503C27.032 20.3654 26.9227 20.2739 27.1085 19.7654C27.2507 19.3743 27.4356 19.2685 27.6774 18.9957C29.8925 16.4881 29.6818 18.9254 31.3085 18.5157C31.6214 18.4365 32.0542 18.2197 32.2818 18.0561C33.1698 17.4143 32.1111 15.9005 34.128 15.8214C34.9422 15.7894 36.0205 15.7299 36.3805 16.2908C36.8916 17.089 36.2596 17.4694 37.3582 18.0854C38.1609 18.5361 38.7058 18.6268 39.3636 18.0614C40.7565 16.8623 42.4071 19.5112 42.4454 19.8108C42.5627 20.7201 41.5982 20.7894 41.8454 21.9192C42 22.6277 42.3636 23.2934 43.0933 23.4268C44.0356 23.5992 44.3653 23.825 44.4525 24.8614C44.512 25.561 44.576 26.7139 43.9991 27.0801C43.2471 27.5592 42.7022 27.1103 42.2302 28.0872C42.1511 28.2517 41.9058 29.0463 41.9067 29.1992C41.9076 29.5237 42.1929 29.8605 42.3342 30.1085C42.824 30.9637 42.4418 31.4561 41.8738 32.0268C41.5929 32.3103 40.8613 33.1921 40.1467 33.0161C39.8169 32.9343 39.6365 32.6214 39.2329 32.4997C38.88 32.3939 38.4809 32.4641 38.1582 32.6099C36.6018 33.3121 37.152 32.9148 36.8542 34.081C36.6382 34.9254 36.0925 35.0917 35.1111 35.0917C34.2196 35.0925 33.4222 35.1601 33.1209 34.3121C32.5698 32.7645 33.3822 33.4677 31.864 32.7974C30.6018 32.2401 31.0418 32.3877 30.048 32.9948C29.232 33.4934 28.5129 32.8597 28.1334 32.4125C27.7814 31.9965 27.0418 31.6054 27.1769 30.7183Z" fill="white"/>
                                                    </g>
                                                    <defs>
                                                    <clipPath id="clip0_5604_247300">
                                                    <rect width="80" height="80" fill="white"/>
                                                    </clipPath>
                                                    </defs>
                                                    </svg>
                                                    
                                            </div>
                                            <div
                                                class="dark:text-borderconcours text-txtcommentply pt-5 font-inter font-normal text-lg p-4 ">
                                                Estudio de métodos y mejora de procesos

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14  bg-whiteheader rounded-md ">
                                            <div class="justify-center">
                                                <img class="rounded-md"
                                                    src="https://www.mayugo.net/admin/images/miniaturas/ingenieria-de-costos.jpg"
                                                    alt="">
                                            </div>
                                            <div
                                                class="dark:text-borderconcours text-txtcommentply pt-5 font-inter font-normal text-lg p-4 ">
                                                Estudio de métodos y mejora de procesos

                                            </div>
                                        </div>

                                    </div>
                                    <div class="pt-2">
                                        <a href="#" class="flex items-center">
                                            <svg class=" dark:text-bgbtngreen text-bcklightbuscador" width="20"
                                                height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.33309 15.8337L2.49976 10.0003M2.49976 10.0003L8.33309 4.16699M2.49976 10.0003L17.4997 10.0003"
                                                    stroke="#5CD685" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                            <div
                                                class="pl-2 text-lg font-medium font-inter dark:text-bgbtngreen text-bcklightbuscador">
                                                Regresar
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid lg:grid-cols-2 grid-cols-1 pt-5 gap-x-5">
                                        <div class=" lg:order-1 order-2">

                                            <img class="w-full" src="{{ asset('images/metodologia/diploma.png') }}"
                                                alt="">
                                        </div>
                                        <div class=" lg:order-2 order-1  font-inter">
                                            <div
                                                class="text-2xl dark:text-bgprogresb text-txtnamecomntpkyr font-bold  font-inter">
                                                ¡Muchas felicidades, Franklin Espinoza Huertas!
                                            </div>
                                            <div class="pt-4">
                                                <span
                                                    class="text-gray-600 dark:text-borderconcours font-medium text-lg">Culminaste
                                                    con éxito el curso de </span>
                                                <span class="font-bold text-lg text-gray-600 dark:text-borderconcours">Six
                                                    Sigma – Black Belt.</span>
                                            </div>
                                            <div class="pt-6">
                                                <button
                                                    class="rounded-md flex items-center focus:outline-none px-5 dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 dark:text-green_home text-center h-10 font-inter font-medium text-sixteen">
                                                    <svg class="pl-2" width="24" height="24"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M3.33301 13.3337L3.33301 14.167C3.33301 15.5477 4.4523 16.667 5.83301 16.667L14.1663 16.667C15.547 16.667 16.6663 15.5477 16.6663 14.167L16.6663 13.3337M13.333 10.0003L9.99967 13.3337M9.99967 13.3337L6.66634 10.0003M9.99967 13.3337L9.99967 3.33367"
                                                            stroke="Currentcolor" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                    <div class="pl-2">Descargar certificado</div>
                                                </button>
                                            </div>
                                            <div
                                                class="text-2xl dark:text-bgprogresb text-txtnamecomntpkyr font-bold pt-12 font-inter">
                                                ¡Muchas felicidades, Franklin Espinoza Huertas!
                                            </div>
                                            <div
                                                class="dark:text-bgprogresb text-gray-600 font-inter text-lg font-normal pt-3">
                                                Cuéntales este logro a tu familia, amigos, empleadores y da a conocer tus
                                                habilidades al mundo entero.
                                            </div>
                                            <div class="flex  gap-x-6 pt-6">
                                                <div class="relative w-full">
                                                    <input type="text"
                                                        placeholder="https://www.mayugo.net/certificado/xasdf640xws#"
                                                        class="focus:outline-none h-10 w-full pl-8 bg-white-100 dark:bg-black rounded-md dark:text-txtcommentply text-borderconcours">
                                                    <svg class="absolute left-2 top-2.5" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.5234 8.47631C10.2217 7.17456 8.11114 7.17456 6.8094 8.47631L3.47607 11.8096C2.17432 13.1114 2.17432 15.2219 3.47607 16.5237C4.77781 17.8254 6.88836 17.8254 8.19011 16.5237L9.10808 15.6057M8.47606 11.5237C9.77781 12.8254 11.8884 12.8254 13.1901 11.5237L16.5234 8.19035C17.8252 6.88861 17.8252 4.77806 16.5234 3.47631C15.2217 2.17456 13.1111 2.17456 11.8094 3.47631L10.8931 4.39265"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div>
                                                    <button
                                                        class="rounded-md flex items-center  focus:outline-none px-5 dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 dark:text-green_home text-center h-10 font-inter font-medium text-sixteen">


                                                        <div class="">Copiar</div>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="flex gap-x-6 pt-6 pb-8">
                                                <button class="focus:outline-none">
                                                    <svg width="32" height="32" viewBox="0 0 32 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M27.2 4.6C24.2 1.6 20.2 0 16 0C7.2 0 0 7.2 0 16C0 18.8 0.800012 21.6 2.20001 24L0 32L8.40002 29.8C10.8 31 13.4 31.8 16 31.8C24.8 31.8 32 24.6 32 15.8C32 11.6 30.2 7.6 27.2 4.6ZM16 29.2C13.6 29.2 11.2 28.6 9.20001 27.4L8.79999 27.2L3.79999 28.6L5.20001 23.8L4.79999 23.2C3.39999 21 2.79999 18.6 2.79999 16.2C2.79999 9 8.8 3 16 3C19.6 3 22.8 4.4 25.4 6.8C28 9.4 29.2 12.6 29.2 16.2C29.2 23.2 23.4 29.2 16 29.2ZM23.2 19.2C22.8 19 20.8 18 20.4 18C20 17.8 19.8 17.8 19.6 18.2C19.4 18.6 18.6 19.4 18.4 19.8C18.2 20 18 20 17.6 20C17.2 19.8 16 19.4 14.4 18C13.2 17 12.4 15.6 12.2 15.2C12 14.8 12.2 14.6 12.4 14.4C12.6 14.2 12.8 14 13 13.8C13.2 13.6 13.2 13.4 13.4 13.2C13.6 13 13.4 12.8 13.4 12.6C13.4 12.4 12.6 10.4 12.2 9.6C12 9 11.6 9 11.4 9C11.2 9 11 9 10.6 9C10.4 9 9.99998 9 9.59997 9.4C9.19998 9.8 8.20001 10.8 8.20001 12.8C8.20001 14.8 9.59999 16.6 9.79999 17C9.99999 17.2 12.6 21.4 16.6 23C20 24.4 20.6 24 21.4 24C22.2 24 23.8 23 24 22.2C24.4 21.2 24.4 20.4 24.2 20.4C24 19.4 23.6 19.4 23.2 19.2Z"
                                                            fill="#9AA4B2" />
                                                    </svg>
                                                </button>
                                                <button class="focus:outline-none">
                                                    <svg width="32" height="32" viewBox="0 0 32 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M32.0005 16.0002C32.0005 7.16354 24.8369 0 16.0002 0C7.16354 0 0 7.16354 0 16.0002C0 23.9863 5.85102 30.6058 13.5002 31.8061V20.6253H9.43764V16.0002H13.5002V12.4752C13.5002 8.46512 15.889 6.25009 19.5437 6.25009C21.2937 6.25009 23.1253 6.5626 23.1253 6.5626V10.5002H21.1078C19.1203 10.5002 18.5003 11.7336 18.5003 13.0002V16.0002H22.9378L22.2284 20.6253H18.5003V31.8061C26.1494 30.6058 32.0005 23.9863 32.0005 16.0002Z"
                                                            fill="#9AA4B2" />
                                                    </svg>
                                                </button>
                                                <button class="focus:outline-none">
                                                    <svg width="32" height="32" viewBox="0 0 32 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_5302_248296)">
                                                            <path
                                                                d="M29.6317 0H2.36299C1.05674 0 0.000488281 1.03125 0.000488281 2.30625V29.6875C0.000488281 30.9625 1.05674 32 2.36299 32H29.6317C30.938 32 32.0005 30.9625 32.0005 29.6938V2.30625C32.0005 1.03125 30.938 0 29.6317 0ZM9.49424 27.2687H4.74424V11.9937H9.49424V27.2687ZM7.11924 9.9125C5.59424 9.9125 4.36299 8.68125 4.36299 7.1625C4.36299 5.64375 5.59424 4.4125 7.11924 4.4125C8.63799 4.4125 9.86924 5.64375 9.86924 7.1625C9.86924 8.675 8.63799 9.9125 7.11924 9.9125ZM27.2692 27.2687H22.5255V19.8438C22.5255 18.075 22.4942 15.7937 20.0567 15.7937C17.588 15.7937 17.213 17.725 17.213 19.7188V27.2687H12.4755V11.9937H17.0255V14.0813H17.088C17.7192 12.8813 19.2692 11.6125 21.5755 11.6125C26.3817 11.6125 27.2692 14.775 27.2692 18.8875V27.2687Z"
                                                                fill="#9AA4B2" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_5302_248296">
                                                                <rect width="32" height="32" fill="white"
                                                                    transform="translate(0.000488281)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </button>
                                                <button class="focus:outline-none">
                                                    <svg width="32" height="32" viewBox="0 0 32 32"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0_5302_248297)">
                                                            <path
                                                                d="M10.0669 29.0007C22.1388 29.0007 28.7435 18.9968 28.7435 10.3241C28.7435 10.0428 28.7372 9.75536 28.7247 9.47412C30.0095 8.54497 31.1183 7.39408 31.999 6.07554C30.8024 6.60791 29.5319 6.95561 28.231 7.10674C29.6008 6.28567 30.6264 4.99582 31.1177 3.47629C29.8291 4.23997 28.4199 4.77868 26.9504 5.06933C25.9604 4.01732 24.6513 3.32076 23.2256 3.08735C21.8 2.85394 20.3371 3.09668 19.0632 3.77804C17.7894 4.45941 16.7754 5.54144 16.1782 6.85685C15.5809 8.17226 15.4337 9.64779 15.7591 11.0553C13.1498 10.9244 10.5972 10.2465 8.26673 9.06579C5.93624 7.88504 3.87989 6.22771 2.23101 4.20125C1.39295 5.64615 1.13651 7.35594 1.51379 8.98312C1.89107 10.6103 2.87377 12.0328 4.26216 12.9615C3.21984 12.9284 2.20035 12.6477 1.28793 12.1427V12.224C1.28699 13.7403 1.8112 15.2101 2.77144 16.3837C3.73167 17.5572 5.06868 18.362 6.55517 18.6612C5.58963 18.9254 4.57624 18.9639 3.59344 18.7737C4.0129 20.0777 4.82902 21.2183 5.9279 22.0361C7.02678 22.854 8.35358 23.3084 9.72315 23.336C7.39803 25.1624 4.52584 26.153 1.56916 26.1483C1.04482 26.1475 0.520995 26.1154 0.000488281 26.0521C3.00415 27.9791 6.49822 29.0026 10.0669 29.0007Z"
                                                                fill="#9AA4B2" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_5302_248297">
                                                                <rect width="31.9985" height="31.9985" fill="white"
                                                                    transform="translate(0.000488281 0.00195312)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </button>




                                            </div>




                                        </div>

                                    </div>
                                </div>
                            </template>

                            <template x-if="tipo == 2">
                                <div
                                    class="grid xl:grid-cols-4 ml:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 pt-6 gap-x-5 gap-y-6 ">
                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/management-miniatura.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">

                                            <span
                                                class="inline-flex dark:bg-celeste_panel bg-bgbtnblue rounded-lg  px-3 ">
                                                <svg width="16" class="dark:text-toggledark  text-white-100"
                                                    height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.33333 4.66667V2M10.6667 4.66667V2M4.66667 7.33333H11.3333M3.33333 14H12.6667C13.403 14 14 13.403 14 12.6667V4.66667C14 3.93029 13.403 3.33333 12.6667 3.33333H3.33333C2.59695 3.33333 2 3.93029 2 4.66667V12.6667C2 13.403 2.59695 14 3.33333 14Z"
                                                        stroke="Currentcolor" stroke-width="Currentcolor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div
                                                    class="dark:text-toggledark  text-white-100 font-inter font-semibold text-sm w-auto pl-1">
                                                    Semana 1
                                                </div>

                                            </span>

                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Ver curso
                                                </button>
                                            </div>

                                        </div>
                                    </div>

                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/management-miniatura.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">

                                            <span
                                                class="inline-flex dark:bg-celeste_panel bg-bgbtnblue rounded-lg  px-3 ">
                                                <svg width="16" class="dark:text-toggledark  text-white-100"
                                                    height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.33333 4.66667V2M10.6667 4.66667V2M4.66667 7.33333H11.3333M3.33333 14H12.6667C13.403 14 14 13.403 14 12.6667V4.66667C14 3.93029 13.403 3.33333 12.6667 3.33333H3.33333C2.59695 3.33333 2 3.93029 2 4.66667V12.6667C2 13.403 2.59695 14 3.33333 14Z"
                                                        stroke="Currentcolor" stroke-width="Currentcolor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div
                                                    class="dark:text-toggledark  text-white-100 font-inter font-semibold text-sm w-auto pl-1">
                                                    Semana 1
                                                </div>

                                            </span>

                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Ver curso
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/management-miniatura.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">

                                            <span
                                                class="inline-flex dark:bg-celeste_panel bg-bgbtnblue rounded-lg  px-3 ">
                                                <svg width="16" class="dark:text-toggledark  text-white-100"
                                                    height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.33333 4.66667V2M10.6667 4.66667V2M4.66667 7.33333H11.3333M3.33333 14H12.6667C13.403 14 14 13.403 14 12.6667V4.66667C14 3.93029 13.403 3.33333 12.6667 3.33333H3.33333C2.59695 3.33333 2 3.93029 2 4.66667V12.6667C2 13.403 2.59695 14 3.33333 14Z"
                                                        stroke="Currentcolor" stroke-width="Currentcolor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div
                                                    class="dark:text-toggledark  text-white-100 font-inter font-semibold text-sm w-auto pl-1">
                                                    Semana 1
                                                </div>

                                            </span>

                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Ver curso
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/management-miniatura.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">

                                            <span class="inline-flex dark:bg-redbuscador bg-red_panel rounded-lg  px-3 ">
                                                <svg width="16" class="dark:text-redbolsa  text-white-100"
                                                    height="16" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5.33333 4.66667V2M10.6667 4.66667V2M4.66667 7.33333H11.3333M3.33333 14H12.6667C13.403 14 14 13.403 14 12.6667V4.66667C14 3.93029 13.403 3.33333 12.6667 3.33333H3.33333C2.59695 3.33333 2 3.93029 2 4.66667V12.6667C2 13.403 2.59695 14 3.33333 14Z"
                                                        stroke="Currentcolor" stroke-width="Currentcolor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <div
                                                    class="dark:text-redbolsa  text-white-100 font-inter font-semibold text-sm w-auto pl-1">
                                                    Semana 1
                                                </div>

                                            </span>

                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Ver curso
                                                </button>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </template>
                            <template x-if="tipo == 3">
                                <div
                                    class="grid xl:grid-cols-4 ml:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 pt-6 gap-x-5 gap-y-6 ">
                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/planificacion-control-produccion.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">



                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería <span
                                                    class="dark:text-borderconcours text-txtcommentply">25%</span>
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Ver curso
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/planificacion-control-produccion.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">



                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería <span
                                                    class="dark:text-borderconcours text-txtcommentply">25%</span>
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Ver curso
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/planificacion-control-produccion.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">



                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería <span
                                                    class="dark:text-borderconcours text-txtcommentply">25%</span>
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Ver curso
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <img class="rounded-t-lg "
                                                src="https://www.mayugo.net/admin/images/miniaturas/planificacion-control-produccion.jpg"
                                                alt="">
                                        </div>
                                        <div class="w-full flex">
                                            <div class="w-3/4 py-1 dark:bg-green bg-green ">

                                            </div>
                                            <div class="w-1/4 py-1 dark:bg-colheaderdark bg-bgprogresb ">

                                            </div>
                                        </div>
                                        <div class="dark:bg-gray14 bg-colheaderwhite rounded-b-lg p-3">



                                            <div class="dark:text-bordersec text-gray-650 font-inter text-lg font-medium">
                                                Project Management para Proyectos de Ingeniería <span
                                                    class="dark:text-borderconcours text-txtcommentply">25%</span>
                                            </div>
                                            <div class="flex items-center pt-4">
                                                <div>
                                                    <svg width="20" class="-mt-0.5" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>
                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    10/10 proyectos completadas

                                                </div>
                                            </div>
                                            <div class="flex items-center pt-2">
                                                <div>
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </div>
                                                <div
                                                    class="dark:text-borderconcours text-txtcommentply font-medium font-inter text-sm pl-1">
                                                    Exámen

                                                </div>
                                            </div>
                                            <div class="pt-4">
                                                <button
                                                    class="dark:bg-checkpricingdark bg-pricingtextduowhite text-white-100 w-full focus:outline-none rounded-lg dark:text-green_home py-2 font-inter font-medium text-sixteen">
                                                    Ver curso
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </template>
                            <template x-if="tipo == 4">
                                <div>
                                    <div
                                        class="py-5 px-6 flex sm:flex-row flex-col justify-between items-center dark:bg-gray14 bg-colheaderwhite rounded-lg mt-6 ">
                                        <div class="flex">
                                            <div>
                                                <img class="h-20 w-20"
                                                    src="https://www.mayugo.net/admin/images/prods/cono-costos-de-transporte-aplicado-en-logistica.svg"
                                                    alt="">
                                            </div>
                                            <div class="pl-4">
                                                <div
                                                    class="text-txtcommentply dark:text-borderconcours text-lg font-medium font-inter ">
                                                    Especialización en gestión industrial
                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>

                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2">
                                                        00/04 Cursos completados
                                                    </div>

                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>


                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2">
                                                        06/10 Proyectos
                                                    </div>

                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>


                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2S">
                                                        00/04 Exámenes
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="sm:w-auto w-full sm:pt-0 pt-3">
                                            <button id="uno"
                                                class=" focus:outline-none w-full justify-center   flex font-medium font-inter text-sm py-2 bg-transparent border dark:border-pricingtextduowhite border-checkpricingdark text-pricingtextduowhite dark:text-checkpricingdark px-4 rounded-lg ">
                                                <div>Ver menos
                                                </div>
                                                <svg class="pl-2 text-pricingtextduowhite dark:text-checkpricingdark "
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.6668 9.99951H3.3335" stroke="Currentcolor"
                                                        stroke-width="Currentcolor" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <svg id=""
                                                    class="pl-2 text-pricingtextduowhite dark:text-checkpricingdark hidden"
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.0002 3.3335V16.6668M16.6668 10.0002L3.3335 10.0002"
                                                        stroke="Currentcolor" stroke-width="Currentcolor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>


                                            </button>
                                        </div>
                                    </div>
                                    <div class="py-4 px-6 dark:bg-panel1 bg-celeste_panel hidden " id="carta">
                                        <div class="flex ">

                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16 32.0011C24.8366 32.0011 32.0001 24.8376 32.0001 16.001C32.0001 7.16444 24.8366 0.000976562 16 0.000976562C7.16346 0.000976562 0 7.16444 0 16.001C0 24.8376 7.16346 32.0011 16 32.0011Z"
                                                    fill="#FA4658" />
                                                <path
                                                    d="M15.9997 29.9877C23.7247 29.9877 29.987 23.7254 29.987 16.0005C29.987 8.2755 23.7247 2.01318 15.9997 2.01318C8.27476 2.01318 2.01245 8.2755 2.01245 16.0005C2.01245 23.7254 8.27476 29.9877 15.9997 29.9877Z"
                                                    fill="#B00303" />
                                                <path d="M5.93896 23.5391H26.1516" stroke="white"
                                                    stroke-width="0.568862" stroke-miterlimit="22.9256"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M26.8982 12.1587C25.2452 23.2199 19.8428 25.8687 6.2915 18.7017"
                                                    stroke="white" stroke-width="0.568862" stroke-miterlimit="22.9256"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.33057 7.70459V25.0134" stroke="white"
                                                    stroke-width="0.568862" stroke-miterlimit="22.9256"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M13.5891 16.4072H13.589C13.2585 16.4072 12.9905 16.6752 12.9905 17.0058V17.5386C12.9905 17.8692 13.2585 18.1372 13.589 18.1372H13.5891C13.9196 18.1372 14.1876 17.8692 14.1876 17.5386V17.0058C14.1876 16.6752 13.9196 16.4072 13.5891 16.4072Z"
                                                    fill="white" />
                                                <path
                                                    d="M15.2131 15.5967H15.2131C14.8825 15.5967 14.6145 15.9902 14.6145 16.4757V17.2581C14.6145 17.7436 14.8825 18.1372 15.2131 18.1372H15.2131C15.5437 18.1372 15.8116 17.7436 15.8116 17.2581V16.4757C15.8116 15.9902 15.5437 15.5967 15.2131 15.5967Z"
                                                    fill="white" />
                                                <path
                                                    d="M16.8381 14.7876H16.8381C16.5075 14.7876 16.2395 15.3067 16.2395 15.9471V16.9792C16.2395 17.6195 16.5075 18.1387 16.8381 18.1387H16.8381C17.1687 18.1387 17.4366 17.6195 17.4366 16.9792V15.9471C17.4366 15.3067 17.1687 14.7876 16.8381 14.7876Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12.9676 15.9683L14.4254 14.5105L14.9261 15.0112L15.4046 15.4897L15.8832 15.0112L17.341 13.5533L17.7243 13.9366L17.99 12.4258L16.4411 12.6534L16.8624 13.0748L15.4046 14.5326L14.9039 14.0319L14.4254 13.5533L13.9468 14.0319L12.489 15.4897L12.9676 15.9683Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M15.2393 11.0259C17.5902 11.0259 19.4959 12.9317 19.4959 15.2825C19.4959 17.6334 17.5902 19.5391 15.2393 19.5391C12.8884 19.5391 10.9827 17.6334 10.9827 15.2825C10.9827 12.9317 12.8884 11.0259 15.2393 11.0259ZM16.1167 9.35449C16.6781 9.43689 17.2142 9.59689 17.7137 9.8237L17.6451 10.5956L18.7133 11.3219L19.4039 10.9752C19.813 11.371 20.166 11.8244 20.4494 12.3225L19.9402 12.9063L20.3757 14.1221L21.1412 14.249C21.1994 14.5843 21.2301 14.9291 21.2301 15.2811C21.2301 15.5083 21.217 15.7323 21.1924 15.9529L20.4354 16.1245L20.0732 17.3663L20.6191 17.919C20.3661 18.4339 20.0416 18.9074 19.6581 19.326L18.9437 19.0198L17.9205 19.8097L18.0363 20.5798C17.5386 20.843 16.9994 21.0384 16.431 21.1532L16.0335 20.483L14.7418 20.5187L14.3824 21.2106C13.8071 21.1282 13.2581 20.9643 12.7477 20.7305L12.82 19.9532L11.7539 19.2238L11.0577 19.5704C10.6497 19.1725 10.2981 18.717 10.0164 18.2168L10.5309 17.6323L10.0992 16.4151L9.3329 16.286C9.27772 15.9592 9.24854 15.6236 9.24854 15.2811C9.24854 15.0449 9.26265 14.812 9.28927 14.5829L10.046 14.4124L10.4128 13.1744L9.87086 12.6204C10.1262 12.1063 10.453 11.634 10.8387 11.2167L11.5488 11.5233L12.5756 10.7378L12.4626 9.97177C12.9618 9.71019 13.5023 9.51693 14.0719 9.40438L14.4654 10.0711L15.7574 10.0408L16.1167 9.35449Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M23.2657 7.1673L18.7134 11.3223L19.9403 12.9067C21.71 11.6458 23.458 10.6136 25.2495 9.12422C25.9364 8.55317 23.9517 6.54111 23.2657 7.1673Z"
                                                    fill="white" />
                                            </svg>

                                            <div class="flex justify-between sm:flex-row flex-col w-full 6">
                                                <div class="w-full pl-3 pr-6">
                                                    <div
                                                        class="font-inter font-medium text-sixteen text-txtcommentply dark:text-borderconcours">
                                                        Optimización Industrial con Modelamiento Matemático
                                                    </div>
                                                    <div class="flex w-full pt-3">

                                                        <div class="py-1 rounded-l-md bg-green w-3/4">

                                                        </div>
                                                        <div
                                                            class="py rounded-r-md bg-bgprogresb dark:bg-txtnamecomntpkyr w-1/4">

                                                        </div>
                                                    </div>
                                                    <div
                                                        class="pt-1 font-inter font-medium text-sm dark:text-pricingdarkstudents text-txtcommentply">
                                                        60% completado
                                                    </div>

                                                </div>
                                                <div>
                                                    <button
                                                        class="font-inter focus:outline-none w-36 font-medium text-sm py-2 px-4 rounded-lg bg-pricingtextduowhite text-white-100 dark:text-green_home dark:bg-checkpricingdark">
                                                        Empezar curso
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex pt-4">

                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16 32.0011C24.8366 32.0011 32.0001 24.8376 32.0001 16.001C32.0001 7.16444 24.8366 0.000976562 16 0.000976562C7.16346 0.000976562 0 7.16444 0 16.001C0 24.8376 7.16346 32.0011 16 32.0011Z"
                                                    fill="#FA4658" />
                                                <path
                                                    d="M15.9997 29.9877C23.7247 29.9877 29.987 23.7254 29.987 16.0005C29.987 8.2755 23.7247 2.01318 15.9997 2.01318C8.27476 2.01318 2.01245 8.2755 2.01245 16.0005C2.01245 23.7254 8.27476 29.9877 15.9997 29.9877Z"
                                                    fill="#B00303" />
                                                <path d="M5.93896 23.5391H26.1516" stroke="white"
                                                    stroke-width="0.568862" stroke-miterlimit="22.9256"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M26.8982 12.1587C25.2452 23.2199 19.8428 25.8687 6.2915 18.7017"
                                                    stroke="white" stroke-width="0.568862" stroke-miterlimit="22.9256"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.33057 7.70459V25.0134" stroke="white"
                                                    stroke-width="0.568862" stroke-miterlimit="22.9256"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M13.5891 16.4072H13.589C13.2585 16.4072 12.9905 16.6752 12.9905 17.0058V17.5386C12.9905 17.8692 13.2585 18.1372 13.589 18.1372H13.5891C13.9196 18.1372 14.1876 17.8692 14.1876 17.5386V17.0058C14.1876 16.6752 13.9196 16.4072 13.5891 16.4072Z"
                                                    fill="white" />
                                                <path
                                                    d="M15.2131 15.5967H15.2131C14.8825 15.5967 14.6145 15.9902 14.6145 16.4757V17.2581C14.6145 17.7436 14.8825 18.1372 15.2131 18.1372H15.2131C15.5437 18.1372 15.8116 17.7436 15.8116 17.2581V16.4757C15.8116 15.9902 15.5437 15.5967 15.2131 15.5967Z"
                                                    fill="white" />
                                                <path
                                                    d="M16.8381 14.7876H16.8381C16.5075 14.7876 16.2395 15.3067 16.2395 15.9471V16.9792C16.2395 17.6195 16.5075 18.1387 16.8381 18.1387H16.8381C17.1687 18.1387 17.4366 17.6195 17.4366 16.9792V15.9471C17.4366 15.3067 17.1687 14.7876 16.8381 14.7876Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12.9676 15.9683L14.4254 14.5105L14.9261 15.0112L15.4046 15.4897L15.8832 15.0112L17.341 13.5533L17.7243 13.9366L17.99 12.4258L16.4411 12.6534L16.8624 13.0748L15.4046 14.5326L14.9039 14.0319L14.4254 13.5533L13.9468 14.0319L12.489 15.4897L12.9676 15.9683Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M15.2393 11.0259C17.5902 11.0259 19.4959 12.9317 19.4959 15.2825C19.4959 17.6334 17.5902 19.5391 15.2393 19.5391C12.8884 19.5391 10.9827 17.6334 10.9827 15.2825C10.9827 12.9317 12.8884 11.0259 15.2393 11.0259ZM16.1167 9.35449C16.6781 9.43689 17.2142 9.59689 17.7137 9.8237L17.6451 10.5956L18.7133 11.3219L19.4039 10.9752C19.813 11.371 20.166 11.8244 20.4494 12.3225L19.9402 12.9063L20.3757 14.1221L21.1412 14.249C21.1994 14.5843 21.2301 14.9291 21.2301 15.2811C21.2301 15.5083 21.217 15.7323 21.1924 15.9529L20.4354 16.1245L20.0732 17.3663L20.6191 17.919C20.3661 18.4339 20.0416 18.9074 19.6581 19.326L18.9437 19.0198L17.9205 19.8097L18.0363 20.5798C17.5386 20.843 16.9994 21.0384 16.431 21.1532L16.0335 20.483L14.7418 20.5187L14.3824 21.2106C13.8071 21.1282 13.2581 20.9643 12.7477 20.7305L12.82 19.9532L11.7539 19.2238L11.0577 19.5704C10.6497 19.1725 10.2981 18.717 10.0164 18.2168L10.5309 17.6323L10.0992 16.4151L9.3329 16.286C9.27772 15.9592 9.24854 15.6236 9.24854 15.2811C9.24854 15.0449 9.26265 14.812 9.28927 14.5829L10.046 14.4124L10.4128 13.1744L9.87086 12.6204C10.1262 12.1063 10.453 11.634 10.8387 11.2167L11.5488 11.5233L12.5756 10.7378L12.4626 9.97177C12.9618 9.71019 13.5023 9.51693 14.0719 9.40438L14.4654 10.0711L15.7574 10.0408L16.1167 9.35449Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M23.2657 7.1673L18.7134 11.3223L19.9403 12.9067C21.71 11.6458 23.458 10.6136 25.2495 9.12422C25.9364 8.55317 23.9517 6.54111 23.2657 7.1673Z"
                                                    fill="white" />
                                            </svg>

                                            <div class="flex justify-between w-full 6">
                                                <div class="w-full pl-3 pr-6">
                                                    <div
                                                        class="font-inter font-medium text-sixteen text-txtcommentply dark:text-borderconcours">
                                                        Optimización Industrial con Modelamiento Matemático
                                                    </div>
                                                    <div class="flex w-full pt-3">

                                                        <div class="py-1 rounded-l-md bg-green w-3/4">

                                                        </div>
                                                        <div
                                                            class="py rounded-r-md bg-bgprogresb dark:bg-txtnamecomntpkyr w-1/4">

                                                        </div>
                                                    </div>
                                                    <div
                                                        class="pt-1 font-inter font-medium text-sm dark:text-pricingdarkstudents text-txtcommentply">
                                                        60% completado
                                                    </div>

                                                </div>
                                                <div>
                                                    <button
                                                        class="font-inter focus:outline-none w-36 font-medium text-sm py-2 px-4 rounded-lg bg-pricingtextduowhite text-white-100 dark:text-green_home dark:bg-checkpricingdark">
                                                        Empezar curso
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex pt-4 ">

                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16 32.0011C24.8366 32.0011 32.0001 24.8376 32.0001 16.001C32.0001 7.16444 24.8366 0.000976562 16 0.000976562C7.16346 0.000976562 0 7.16444 0 16.001C0 24.8376 7.16346 32.0011 16 32.0011Z"
                                                    fill="#FA4658" />
                                                <path
                                                    d="M15.9997 29.9877C23.7247 29.9877 29.987 23.7254 29.987 16.0005C29.987 8.2755 23.7247 2.01318 15.9997 2.01318C8.27476 2.01318 2.01245 8.2755 2.01245 16.0005C2.01245 23.7254 8.27476 29.9877 15.9997 29.9877Z"
                                                    fill="#B00303" />
                                                <path d="M5.93896 23.5391H26.1516" stroke="white"
                                                    stroke-width="0.568862" stroke-miterlimit="22.9256"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M26.8982 12.1587C25.2452 23.2199 19.8428 25.8687 6.2915 18.7017"
                                                    stroke="white" stroke-width="0.568862" stroke-miterlimit="22.9256"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7.33057 7.70459V25.0134" stroke="white"
                                                    stroke-width="0.568862" stroke-miterlimit="22.9256"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path
                                                    d="M13.5891 16.4072H13.589C13.2585 16.4072 12.9905 16.6752 12.9905 17.0058V17.5386C12.9905 17.8692 13.2585 18.1372 13.589 18.1372H13.5891C13.9196 18.1372 14.1876 17.8692 14.1876 17.5386V17.0058C14.1876 16.6752 13.9196 16.4072 13.5891 16.4072Z"
                                                    fill="white" />
                                                <path
                                                    d="M15.2131 15.5967H15.2131C14.8825 15.5967 14.6145 15.9902 14.6145 16.4757V17.2581C14.6145 17.7436 14.8825 18.1372 15.2131 18.1372H15.2131C15.5437 18.1372 15.8116 17.7436 15.8116 17.2581V16.4757C15.8116 15.9902 15.5437 15.5967 15.2131 15.5967Z"
                                                    fill="white" />
                                                <path
                                                    d="M16.8381 14.7876H16.8381C16.5075 14.7876 16.2395 15.3067 16.2395 15.9471V16.9792C16.2395 17.6195 16.5075 18.1387 16.8381 18.1387H16.8381C17.1687 18.1387 17.4366 17.6195 17.4366 16.9792V15.9471C17.4366 15.3067 17.1687 14.7876 16.8381 14.7876Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M12.9676 15.9683L14.4254 14.5105L14.9261 15.0112L15.4046 15.4897L15.8832 15.0112L17.341 13.5533L17.7243 13.9366L17.99 12.4258L16.4411 12.6534L16.8624 13.0748L15.4046 14.5326L14.9039 14.0319L14.4254 13.5533L13.9468 14.0319L12.489 15.4897L12.9676 15.9683Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M15.2393 11.0259C17.5902 11.0259 19.4959 12.9317 19.4959 15.2825C19.4959 17.6334 17.5902 19.5391 15.2393 19.5391C12.8884 19.5391 10.9827 17.6334 10.9827 15.2825C10.9827 12.9317 12.8884 11.0259 15.2393 11.0259ZM16.1167 9.35449C16.6781 9.43689 17.2142 9.59689 17.7137 9.8237L17.6451 10.5956L18.7133 11.3219L19.4039 10.9752C19.813 11.371 20.166 11.8244 20.4494 12.3225L19.9402 12.9063L20.3757 14.1221L21.1412 14.249C21.1994 14.5843 21.2301 14.9291 21.2301 15.2811C21.2301 15.5083 21.217 15.7323 21.1924 15.9529L20.4354 16.1245L20.0732 17.3663L20.6191 17.919C20.3661 18.4339 20.0416 18.9074 19.6581 19.326L18.9437 19.0198L17.9205 19.8097L18.0363 20.5798C17.5386 20.843 16.9994 21.0384 16.431 21.1532L16.0335 20.483L14.7418 20.5187L14.3824 21.2106C13.8071 21.1282 13.2581 20.9643 12.7477 20.7305L12.82 19.9532L11.7539 19.2238L11.0577 19.5704C10.6497 19.1725 10.2981 18.717 10.0164 18.2168L10.5309 17.6323L10.0992 16.4151L9.3329 16.286C9.27772 15.9592 9.24854 15.6236 9.24854 15.2811C9.24854 15.0449 9.26265 14.812 9.28927 14.5829L10.046 14.4124L10.4128 13.1744L9.87086 12.6204C10.1262 12.1063 10.453 11.634 10.8387 11.2167L11.5488 11.5233L12.5756 10.7378L12.4626 9.97177C12.9618 9.71019 13.5023 9.51693 14.0719 9.40438L14.4654 10.0711L15.7574 10.0408L16.1167 9.35449Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M23.2657 7.1673L18.7134 11.3223L19.9403 12.9067C21.71 11.6458 23.458 10.6136 25.2495 9.12422C25.9364 8.55317 23.9517 6.54111 23.2657 7.1673Z"
                                                    fill="white" />
                                            </svg>

                                            <div class="flex justify-between w-full 6">
                                                <div class="w-full pl-3 pr-6">
                                                    <div
                                                        class="font-inter font-medium text-sixteen text-txtcommentply dark:text-borderconcours">
                                                        Optimización Industrial con Modelamiento Matemático
                                                    </div>
                                                    <div class="flex w-full pt-3">

                                                        <div class="py-1 rounded-l-md bg-green w-3/4">

                                                        </div>
                                                        <div
                                                            class="py rounded-r-md bg-bgprogresb dark:bg-txtnamecomntpkyr w-1/4">

                                                        </div>
                                                    </div>
                                                    <div
                                                        class="pt-1 font-inter font-medium text-sm dark:text-pricingdarkstudents text-txtcommentply">
                                                        60% completado
                                                    </div>

                                                </div>
                                                <div>
                                                    <button
                                                        class="font-inter focus:outline-none w-36 font-medium text-sm py-2 px-4 rounded-lg bg-pricingtextduowhite text-white-100 dark:text-green_home dark:bg-checkpricingdark">
                                                        Empezar curso
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <script>
                                        var uno = document.getElementById('uno');
                                        var carta = document.getElementById('carta');


                                        uno.addEventListener('click', function() {
                                            // carta.classList.remove('hidden');
                                            carta.classList.toggle('hidden');

                                        });
                                    </script>
                                    <div
                                        class="py-5 px-6 sm:flex-row flex-col flex justify-between items-center dark:bg-gray14 bg-colheaderwhite rounded-lg mt-6 ">
                                        <div class="flex">
                                            <div>
                                                <img class="h-20 w-20"
                                                    src="https://www.mayugo.net/admin/images/prods/cono-costos-de-transporte-aplicado-en-logistica.svg"
                                                    alt="">
                                            </div>
                                            <div class="pl-4">
                                                <div
                                                    class="text-txtcommentply dark:text-borderconcours text-lg font-medium font-inter ">
                                                    Especialización en gestión industrial
                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>

                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2">
                                                        00/04 Cursos completados
                                                    </div>

                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>


                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2">
                                                        06/10 Proyectos
                                                    </div>

                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>


                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2S">
                                                        00/04 Exámenes
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="  sm:w-auto w-full sm:pt-0 pt-3">
                                            <button id="uno"
                                                class=" focus:outline-none justify-center w-full flex font-medium font-inter text-sm py-2 bg-transparent border dark:border-pricingtextduowhite border-checkpricingdark text-pricingtextduowhite dark:text-checkpricingdark px-4 rounded-lg ">
                                                <div>Ver menos
                                                </div>
                                                <svg class="pl-2 text-pricingtextduowhite dark:text-checkpricingdark "
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.6668 9.99951H3.3335" stroke="Currentcolor"
                                                        stroke-width="Currentcolor" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <svg id=""
                                                    class="pl-2 text-pricingtextduowhite dark:text-checkpricingdark hidden"
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.0002 3.3335V16.6668M16.6668 10.0002L3.3335 10.0002"
                                                        stroke="Currentcolor" stroke-width="Currentcolor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>


                                            </button>
                                        </div>
                                    </div>
                                    <div
                                        class="py-5 px-6 flex sm:flex-row flex-col justify-between items-center dark:bg-gray14 bg-colheaderwhite rounded-lg mt-6 ">
                                        <div class="flex">
                                            <div>
                                                <img class="h-20 w-20"
                                                    src="https://www.mayugo.net/admin/images/prods/cono-costos-de-transporte-aplicado-en-logistica.svg"
                                                    alt="">
                                            </div>
                                            <div class="pl-4">
                                                <div
                                                    class="text-txtcommentply dark:text-borderconcours text-lg font-medium font-inter ">
                                                    Especialización en gestión industrial
                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.99983 9.16715C9.5396 9.16715 9.1665 9.54025 9.1665 10.0005C9.1665 10.4607 9.5396 10.8338 9.99983 10.8338V9.16715ZM12.4998 10.8338C12.9601 10.8338 13.3332 10.4607 13.3332 10.0005C13.3332 9.54025 12.9601 9.16715 12.4998 9.16715V10.8338ZM9.99983 12.5005C9.5396 12.5005 9.1665 12.8736 9.1665 13.3338C9.1665 13.7941 9.5396 14.1671 9.99983 14.1671V12.5005ZM12.4998 14.1671C12.9601 14.1671 13.3332 13.7941 13.3332 13.3338C13.3332 12.8736 12.9601 12.5005 12.4998 12.5005V14.1671ZM7.49984 9.16715C7.0396 9.16715 6.6665 9.54025 6.6665 10.0005C6.6665 10.4607 7.0396 10.8338 7.49984 10.8338V9.16715ZM7.50817 10.8338C7.96841 10.8338 8.3415 10.4607 8.3415 10.0005C8.3415 9.54025 7.96841 9.16715 7.50817 9.16715V10.8338ZM7.49984 12.5005C7.0396 12.5005 6.6665 12.8736 6.6665 13.3338C6.6665 13.7941 7.0396 14.1671 7.49984 14.1671V12.5005ZM7.50817 14.1671C7.96841 14.1671 8.3415 13.7941 8.3415 13.3338C8.3415 12.8736 7.96841 12.5005 7.50817 12.5005V14.1671ZM14.9998 5.83382V15.8338H16.6665V5.83382H14.9998ZM14.1665 16.6671H5.83317V18.3338H14.1665V16.6671ZM4.99984 15.8338V5.83382H3.33317V15.8338H4.99984ZM5.83317 5.00049H7.49984V3.33382H5.83317V5.00049ZM12.4998 5.00049H14.1665V3.33382H12.4998V5.00049ZM5.83317 16.6671C5.37293 16.6671 4.99984 16.2941 4.99984 15.8338H3.33317C3.33317 17.2145 4.45246 18.3338 5.83317 18.3338V16.6671ZM14.9998 15.8338C14.9998 16.2941 14.6267 16.6671 14.1665 16.6671V18.3338C15.5472 18.3338 16.6665 17.2145 16.6665 15.8338H14.9998ZM16.6665 5.83382C16.6665 4.45311 15.5472 3.33382 14.1665 3.33382V5.00049C14.6267 5.00049 14.9998 5.37358 14.9998 5.83382H16.6665ZM4.99984 5.83382C4.99984 5.37358 5.37293 5.00049 5.83317 5.00049V3.33382C4.45246 3.33382 3.33317 4.45311 3.33317 5.83382H4.99984ZM9.99983 10.8338H12.4998V9.16715H9.99983V10.8338ZM9.99983 14.1671H12.4998V12.5005H9.99983V14.1671ZM9.1665 3.33382H10.8332V1.66716H9.1665V3.33382ZM10.8332 5.00049H9.1665V6.66715H10.8332V5.00049ZM9.1665 5.00049C8.70626 5.00049 8.33317 4.62739 8.33317 4.16715H6.6665C6.6665 5.54787 7.78579 6.66715 9.1665 6.66715V5.00049ZM11.6665 4.16715C11.6665 4.62739 11.2934 5.00049 10.8332 5.00049V6.66715C12.2139 6.66715 13.3332 5.54787 13.3332 4.16715H11.6665ZM10.8332 3.33382C11.2934 3.33382 11.6665 3.70692 11.6665 4.16715H13.3332C13.3332 2.78644 12.2139 1.66716 10.8332 1.66716V3.33382ZM9.1665 1.66716C7.78579 1.66716 6.6665 2.78644 6.6665 4.16715H8.33317C8.33317 3.70692 8.70626 3.33382 9.1665 3.33382V1.66716ZM7.49984 10.8338H7.50817V9.16715H7.49984V10.8338ZM7.49984 14.1671H7.50817V12.5005H7.49984V14.1671Z"
                                                            fill="#697586" />
                                                    </svg>

                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2">
                                                        00/04 Cursos completados
                                                    </div>

                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>


                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2">
                                                        06/10 Proyectos
                                                    </div>

                                                </div>
                                                <div class="flex pt-3">
                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M9.16707 4.16716H5.00041C4.07993 4.16716 3.33374 4.91335 3.33374 5.83382V15.0005C3.33374 15.921 4.07993 16.6672 5.00041 16.6672H14.1671C15.0875 16.6672 15.8337 15.921 15.8337 15.0005V10.8338M14.6552 2.98864C15.3061 2.33777 16.3614 2.33777 17.0122 2.98864C17.6631 3.63952 17.6631 4.69479 17.0122 5.34567L9.85742 12.5005H7.50041L7.50041 10.1435L14.6552 2.98864Z"
                                                            stroke="#697586" stroke-width="1.66667"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>


                                                    <div
                                                        class="dark:text-pricingdarkstudents text-gray-600 font-inter font-medium text-sm pl-2S">
                                                        00/04 Exámenes
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="sm:w-auto w-full sm:pt-0 pt-3">
                                            <button id="uno"
                                                class=" focus:outline-none w-full justify-center flex font-medium font-inter text-sm py-2 bg-transparent border dark:border-pricingtextduowhite border-checkpricingdark text-pricingtextduowhite dark:text-checkpricingdark px-4 rounded-lg ">
                                                <div>Ver menos
                                                </div>
                                                <svg class="pl-2 text-pricingtextduowhite dark:text-checkpricingdark "
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.6668 9.99951H3.3335" stroke="Currentcolor"
                                                        stroke-width="Currentcolor" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                                <svg id=""
                                                    class="pl-2 text-pricingtextduowhite dark:text-checkpricingdark hidden"
                                                    width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10.0002 3.3335V16.6668M16.6668 10.0002L3.3335 10.0002"
                                                        stroke="Currentcolor" stroke-width="Currentcolor"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>


                                            </button>
                                        </div>
                                    </div>
                                    <div class="dark:bg-bgbtnblue bg-bgbtnblue px-5 rounded-lg mt-3 py-5">
                                        <div class="justify-center ">
                                            <svg width="48" class="mx-auto" height="48" viewBox="0 0 48 48"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="48" height="48" rx="24" fill="#003462" />
                                                <path
                                                    d="M24 27V29M18 33H30C31.1046 33 32 32.1046 32 31V25C32 23.8954 31.1046 23 30 23H18C16.8954 23 16 23.8954 16 25V31C16 32.1046 16.8954 33 18 33ZM28 23V19C28 16.7909 26.2091 15 24 15C21.7909 15 20 16.7909 20 19V23H28Z"
                                                    stroke="#B3DAFC" stroke-width="2" stroke-linecap="round" />
                                            </svg>

                                        </div>
                                        <div
                                            class="dark:text-bordersec text-bgprogresb font-inter font-medium text-sm text-center mt-4">
                                            No tienes acceso a esta sección
                                        </div>
                                        <div
                                            class="dark:text-bordersec text-bgprogresb font-inter font-medium text-xl text-center mt-4">
                                            Adquiere un plan Duo, Premium o Básico para ver esta sección
                                        </div>
                                        <div class="text-center mt-5">
                                            <button
                                                class="bg-benefitstalkssmarger px-5  py-2 dark:text-toggledark text-toggledark font-inter font-normal text-sixteen rounded-lg">
                                                ¡Sube a Premium!
                                            </button>
                                        </div>

                                    </div>

                                </div>
                            </template>
                        </div>
                    </template>
                    <template x-if="tipo == 3">
                        <div>
                            <div class="font-inter font-normal text-lg pt-6 dark:text-bgprogresb text-txtnamecomntpkyr">

                                Desde aquí podrás administrar o cambiar tu suscripción.
                            </div>
                            <div class="flex  justify-center items-start pt-6">
                                <div class="flex justify-between   " >
                                    <div class="" >
                                        <img class="h-8 w-8 rounded-full"
                                            src="https://www.mayugo.net/admin/images/miniaturas/lean-manufacturing.jpg"
                                            alt="">
                                    </div>
                                    
                                </div>
        
                                <div class="flex justify-between lg:flex-row flex-col items-center w-full pl-3">
                                    <div class="  lg:w-1/3 w-full text-sixteen font-medium font-inter dark:text-borderconcours text-txtcommentply">
                                        <div class="text-left">
                                            Modelos matemáticos aplicados en los inventarios
                                        </div>
        
                                    </div>

                                    <div class="flex  justify-between lg:w-2/3 w-full">
                                        <div class="text-txtnamecomntpkyr dark:text-bgprogresb text-sm fon-inter font-normal ">2 apuntes</div>
        
                                       <button id="aplicar" class="flex focus:outline-none text-gray-650 dark:text-bordersec text-sm fon-inter font-normal items-center">
                                        <div >
                                            Mostrar 
                                        </div>
                                        <svg id="solo1" class="ml-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2.39893 8.00024C2.39893 7.55839 2.75712 7.2002 3.19897 7.2002L12.7995 7.2002C13.2414 7.2002 13.5996 7.55839 13.5996 8.00024C13.5996 8.44209 13.2414 8.80029 12.7995 8.80029L3.19897 8.80029C2.75712 8.80029 2.39893 8.44209 2.39893 8.00024Z"
                                                fill="#E3E8EF" />
                                            
                                        </svg>
                                        <svg id="solo2" class="hidden ml-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99973 2.40039C8.44159 2.40039 8.79978 2.75858 8.79978 3.20044V7.20066H12.8C13.2419 7.20066 13.6 7.55886 13.6 8.00071C13.6 8.44256 13.2419 8.80075 12.8 8.80075H8.79978V12.801C8.79978 13.2428 8.44159 13.601 7.99973 13.601C7.55788 13.601 7.19969 13.2428 7.19969 12.801V8.80075H3.19946C2.75761 8.80075 2.39941 8.44256 2.39941 8.00071C2.39941 7.55886 2.75761 7.20066 3.19946 7.20066L7.19969 7.20066V3.20044C7.19969 2.75858 7.55788 2.40039 7.99973 2.40039Z" fill="Currentcolor"/>
                                            </svg>
                                            
        
                                      </button>
                                    </div>
                                     
                                </div>
                                <script>
                                    let aplicar =document.getElementById("aplicar");
                                    let mostrar =document.getElementById("mostrar");
                                    let solo1 =document.getElementById("solo1");
                                    let solo2 =document.getElementById("solo2");
                                    
                                    aplicar.addEventListener('click', function() {
                                      // icon.classList.remove('hidden');
                                      mostrar.classList.toggle('hidden');
                                      solo1.classList.toggle('hidden');
                                      solo2.classList.toggle('hidden');
        
                                     });
                                </script>
                            </div>
                            <div class="pt-4  hidden" id="mostrar">
                                <div class="text-right pb-2.5">
                                   <button class="focus:outline-none text-gray-600 dark:text-pricingdarkstudents">
                                    <svg class="text-gray-600 dark:text-pricingdarkstudents" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.16683 4.16765H5.00016C4.07969 4.16765 3.3335 4.91384 3.3335 5.83431V15.001C3.3335 15.9214 4.07969 16.6676 5.00016 16.6676H14.1668C15.0873 16.6676 15.8335 15.9214 15.8335 15.001V10.8343M14.655 2.98913C15.3059 2.33826 16.3611 2.33826 17.012 2.98913C17.6629 3.64001 17.6629 4.69528 17.012 5.34615L9.85718 12.501H7.50016L7.50016 10.144L14.655 2.98913Z" stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                   </button>
                                   <button class="pl-4 focus:outline-none text-gray-600 dark:text-pricingdarkstudents">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.8335 5.83333L15.1107 15.9521C15.0484 16.8242 14.3227 17.5 13.4483 17.5H6.55203C5.67763 17.5 4.95189 16.8242 4.8896 15.9521L4.16683 5.83333M8.33349 9.16666V14.1667M11.6668 9.16666V14.1667M12.5002 5.83333V3.33333C12.5002 2.8731 12.1271 2.5 11.6668 2.5H8.33349C7.87326 2.5 7.50016 2.8731 7.50016 3.33333V5.83333M3.3335 5.83333H16.6668" stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        
                                   </button>
                                        
                                </div>
                                <input type="text" placeholder="Escribir apuntes aqui" class="h-16 w-full shadow-xl dark:placeholder-white-300  placeholder-txtcommentply font-inter font-normal text-sm bg-bgfondopricingwhite focus:outline-none rounded-lg dark:bg-pricingcintadark pl-6">
                            </div>

                           
                        </div>
                        
                    </template>
                    <template x-if="tipo == 4">
                      <div class="pt-6  ">
                                <div class=" text-txtnamecomntpkyr   dark:text-bgprogresb font-inter text-lg font-normal">
                                    Desde aquí podrás administrar o cambiar tu suscripción.
                                </div>
                                <div class=" font-inter text-sixteen font-normal pt-6">
                                   <span class=" dark:text-borderconcours text-txtcommentply">
                                    Tu suscripción se renovará automáticamente el 
                                    </span> 
                                    <span class="text-txtnamecomntpkyr   dark:text-bgprogresb font-semibold">
                                    20 de abril de 2023.
                                    </span>
                                    <span class="text-pricingtextduowhite dark:text-checkpricingdark">
                                    Cancelar mi suscripción
                                    </span>

                                </div>

                                <div>
                                    <div class="flex lg:flex-row flex-col justify-between p-6 dark:bg-textnavmembership bg-bgbtnblue rounded-t-lg mt-6">
                                        <div class="text-bgprogresb font-inter sm:text-xl text-sixteen font-bold">
                                            Membresía DUO
                                        </div>
                                        <div>
                                           <span class="text-bgprogresb font-inter sm:text-xl text-sixteen font-bold"> Válido hasta:</span> 
                                           <span class="text-bgprogresb font-inter sm:text-xl text-sixteen font-medium">20 de Abril de 2023</span>
                                        </div>
                                    </div>
                                    <div class="bg-whiteheader dark:bg-gray14 px-7 py-5 ">
                                        <div class="flex items-center pb-4">
                                            <svg width="20" height="20" style="min-width: 20px" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 2C14.4183 2 18 5.58172 18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2ZM13.3584 7.64645C13.1849 7.47288 12.9154 7.4536 12.7206 7.58859L12.6513 7.64645L9 11.298L7.35355 9.65131L7.28431 9.59346C7.08944 9.45846 6.82001 9.47775 6.64645 9.65131C6.47288 9.82488 6.4536 10.0943 6.58859 10.2892L6.64645 10.3584L8.64645 12.3584L8.71569 12.4163C8.8862 12.5344 9.1138 12.5344 9.28431 12.4163L9.35355 12.3584L13.3584 8.35355L13.4163 8.28431C13.5513 8.08944 13.532 7.82001 13.3584 7.64645Z" fill="#33CC66"/>
                                                </svg>
                                            <div class="dark:text-borderconcours text-txtcommentply ml-2">
                                                Acceso a todos los cursos de 1 especialización.
                                            </div>
                                                
                                        </div>
                                        <div class="flex items-center pb-4">
                                            <svg width="20" height="20" viewBox="0 0 20 20"style="min-width: 20px"  fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 2C14.4183 2 18 5.58172 18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2ZM13.3584 7.64645C13.1849 7.47288 12.9154 7.4536 12.7206 7.58859L12.6513 7.64645L9 11.298L7.35355 9.65131L7.28431 9.59346C7.08944 9.45846 6.82001 9.47775 6.64645 9.65131C6.47288 9.82488 6.4536 10.0943 6.58859 10.2892L6.64645 10.3584L8.64645 12.3584L8.71569 12.4163C8.8862 12.5344 9.1138 12.5344 9.28431 12.4163L9.35355 12.3584L13.3584 8.35355L13.4163 8.28431C13.5513 8.08944 13.532 7.82001 13.3584 7.64645Z" fill="#33CC66"/>
                                                </svg>
                                            <div class="dark:text-borderconcours text-txtcommentply ml-2">
                                                Acceso a 1 especialización
                                            </div>
                                                
                                        </div>
                                        <div class="flex items-center pb-4">
                                            <svg width="20" height="20" viewBox="0 0 20 20" style="min-width: 20px" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 2C14.4183 2 18 5.58172 18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2ZM13.3584 7.64645C13.1849 7.47288 12.9154 7.4536 12.7206 7.58859L12.6513 7.64645L9 11.298L7.35355 9.65131L7.28431 9.59346C7.08944 9.45846 6.82001 9.47775 6.64645 9.65131C6.47288 9.82488 6.4536 10.0943 6.58859 10.2892L6.64645 10.3584L8.64645 12.3584L8.71569 12.4163C8.8862 12.5344 9.1138 12.5344 9.28431 12.4163L9.35355 12.3584L13.3584 8.35355L13.4163 8.28431C13.5513 8.08944 13.532 7.82001 13.3584 7.64645Z" fill="#33CC66"/>
                                                </svg>
                                            <div class="dark:text-borderconcours text-txtcommentply ml-2">
                                                Certificado digital por cada curso y especialización finalizada
                                            </div>
                                                
                                        </div>
                                        <div class="flex items-center pb-4">
                                            <svg width="20" height="20" viewBox="0 0 20 20" style="min-width: 20px"  fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 2C14.4183 2 18 5.58172 18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2ZM13.3584 7.64645C13.1849 7.47288 12.9154 7.4536 12.7206 7.58859L12.6513 7.64645L9 11.298L7.35355 9.65131L7.28431 9.59346C7.08944 9.45846 6.82001 9.47775 6.64645 9.65131C6.47288 9.82488 6.4536 10.0943 6.58859 10.2892L6.64645 10.3584L8.64645 12.3584L8.71569 12.4163C8.8862 12.5344 9.1138 12.5344 9.28431 12.4163L9.35355 12.3584L13.3584 8.35355L13.4163 8.28431C13.5513 8.08944 13.532 7.82001 13.3584 7.64645Z" fill="#33CC66"/>
                                                </svg>
                                            <div class="dark:text-borderconcours text-txtcommentply ml-2">
                                                Acceso a eventos o talleres en vivo
                                            </div>
                                                
                                        </div>

                                    </div>
                                </div>
                                <div class="dark:text-bordersec text-gray-650 text-xl font-inter font-bold pt-8 ">
                                    Usuarios 2/2
                                </div>
                                <div class="grid lg:grid-cols-2 grid-cols-1 gap-x-6 gap-y-6 pt-6">
                                    <div class="bg-whiteheader dark:bg-gray14 rounded-lg p-6 flex">
                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <circle cx="24" cy="24" r="24" fill="url(#pattern0)"/>
                                            <defs>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_5575_247056" transform="scale(0.0153846)"/>
                                            </pattern>
                                            <image id="image0_5575_247056" width="65" height="65" xlink:href="data:image/png;base64,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"/>
                                            </defs>
                                            </svg>

                                            <div class="pl-4">
                                                <div class="dark:text-borderconcours text-sixteen text-txtcommentply font-medium font-inter">
                                                    correodeltitular@hotmail.com
                                                </div>
                                                <div class="text-gray-600 dark:text-pricingdarkstudents font-inter text-sm font-medium ">
                                                    Titular
                                                </div>
                                            </div>
                                            

                                    </div>
                                    <div class="border-bluefacebook border-dashed border-4 rounded-lg p-6 flex items-center">
                                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <circle cx="24" cy="24" r="24" fill="url(#pattern0)"/>
                                            <defs>
                                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_5575_248372" transform="scale(0.00126904)"/>
                                            </pattern>
                                            <image id="image0_5575_248372" width="788" height="788" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAxQAAAMUCAIAAACq4fbGAAAgAElEQVR4nOzdWXBk2Xkn9v/3nXPvzUygUEsv7IWkmtQ2EhdpRIVCojYPPdZo7NGEHIpRWOF9CT/ZDxPhVz/4xWE/2HKEPZbFkEYxskSNFkpDcRHZw+E63c0W2c3em+x9X6q6qlAAcrn3nPN9friZCaCqSPdtsqtRXf9fIBBAIgFkJnDz/vOc73xH3B1ERERE9ProW30DiIiIiK4mDE9EREREAzA8EREREQ3A8EREREQ0AMMTERER0QAMT0REREQDMDwRERERDcDwRERERDQAwxMRERHRAAxPRERERAMwPBERERENwPBERERENADDExEREdEADE9EREREAzA8EREREQ3A8EREREQ0AMMTERER0QAMT0REREQDMDwRERERDcDwRERERDQAwxMRERHRAAxPRERERAMwPBERERENwPBERERENADDExEREdEADE9EREREAzA8EREREQ3A8EREREQ0AMMTERER0QAMT0REREQDMDwRERERDcDwRERERDQAwxMRERHRAAxPRERERAMwPBERERENwPBERERENADDExEREdEADE9EREREAzA8EREREQ3A8EREREQ0AMMTERER0QAMT0REREQDMDwRERERDcDwRERERDQAwxMRERHRAAxPRERERAMwPBERERENwPBERERENADDExEREdEADE9EREREAzA8EREREQ3A8EREREQ0AMMTERER0QAMT0REREQDMDwRERERDcDwRERERDQAwxMRERHRAAxPRERERAMwPBERERENwPBERERENADDExEREdEADE9EREREAzA8EREREQ3A8EREREQ0AMMTERER0QAMT0REREQDMDwRERERDcDwRERERDQAwxMRERHRAAxPRERERAMwPBERERENwPBERERENADDExEREdEADE9EREREAzA8EREREQ3A8EREREQ0AMMTERER0QAMT0REREQDMDwRERERDcDwRERERDQAwxMRERHRAAxPRERERAMwPBERERENwPBERERENADDExEREdEADE9EREREAzA8EREREQ3A8EREREQ0AMMTERER0QAMT0REREQDMDwRERERDcDwRERERDQAwxMRERHRAAxPRERERAMwPBERERENwPBERERENADDExEREdEADE9EREREAzA8EREREQ3A8EREREQ0AMMTERER0QAMT0REREQDMDwRERERDcDwRERERDQAwxMRERHRAAxPRERERAMwPBERERENwPBERERENADDExEREdEADE9EREREAzA8EREREQ3A8EREREQ0AMMTERER0QAMT0REREQDMDwRERERDcDwRERERDQAwxMRERHRAAxPRERERAMwPBERERENwPBERERENADDExEREdEADE9EREREAzA8EREREQ3A8EREREQ0AMMTERER0QAMT0REREQDMDwRERERDcDwRERERDQAwxMRERHRAAxPRERERAMwPBERERENwPBERERENADDExEREdEADE9EREREAzA8EREREQ3A8EREREQ0AMMTERER0QAMT0REREQDMDwRERERDcDwRERERDQAwxMRERHRAAxPRERERAMwPBERERENwPBERERENADDExEREdEADE9EREREAzA8EREREQ3A8EREREQ0AMMTERER0QAMT0REREQDMDwRERERDcDwRERERDQAwxMRERHRAAxPRERERAMwPBERERENwPBERERENADDExEREdEADE9EREREAzA8EREREQ3A8EREREQ0AMMTERER0QAMT0REREQDMDwRERERDcDwRERERDQAwxMRERHRAAxPRERERAMwPBERERENwPBERERENADDExEREdEADE9EREREAzA8EREREQ3A8EREREQ0AMMTERER0QAMT0REREQDxLf6BhDRleMAAAEAAwC3QxdL/2pKffnl5aur/esf+lkKWX7n+mvhstdc/q5LLhbtf5c4XC669qEbfFkHvmP/VeBlbqrrxdd+/T/cAVn9tO94fy+55iF68Bdd7lYQ0dWH4YnoWrGORAF9bCrwDF9dLAGIkODQdCA8KVwBsSxugEMVAAzQClADkiM7oIiAuouU1e8zuAOA+PLX40BWc4cHhIkJFCi+n0v6IOVAAcxhgMihQfJ1pFt+o6EOAOAlB/GgByJUkf7HuYpI7H+sO4qZiLpCDscZAxRwgwJBANjyXiyvp9bfKsCAAOjqzi2vCd9PUaJ9WHKorfJTYH4ielsQ9+/y6ouI3lYOjTx5WZ3y+0u1DwOQWFbXtJyiSp+X9mOWARpKl9vkoW5ivRypckMFgyd3cUBChKy+tIpu+wkJKEALJGBhmM0wnWG6wKK1ZLZok7kUiBtcFKoiISrGI9QRoxob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"/>
                                            </defs>
                                            </svg>
                                            

                                            <div class="dark:text-bgbtngreen text-bcklightbuscador text-sixteen font-inter font-medium pl-6">
                                                Agregar

                                            </div>
                                            

                                    </div>

                                </div>
                                <div>
                                    <div class="dark:text-bordersec text-gray-650 text-xl font-inter font-bold pt-8 ">
                                        Método de pago
                                    </div>
                                    <div class="dark:text-borderconcours font-normal font-inter text-sixteen text-txtcommentply pt-6">
                                        Visa terminada en 0021 - 10/2025
                                    </div>
                                </div>


                                <div class="pt-6">
                                    <div class="p-6 dark:text-redbuscador dark:bg-red_limpiar bg-redbuscador text-red_limpiar  font-inter font-semibold text-sm">
                                        No cuentas con una membresía activa
                                    </div>
                                    <div>
                                       
                                    </div>
                                </div>


                        </div>
                           
                    </template>
                </div>








            </div>

        </div>

        {{-- <script>
            let one =document.getElementsByClassName('oneoption');

            for (let one = 0; one < array.length; one++) {
                one.addEventListener('click', function() {
                
                one.classList.remove('optionlateral');
                one.classList.toggle('optionNormal');
                
            });
            one.classList.toggle('optionNormal');
            }
        </script> --}}
       
        <script>
            var play = document.getElementById("play");
            var icon = document.getElementById("icon");


            play.addEventListener('click', function() {
                // icon.classList.remove('hidden');
                icon.classList.toggle('hidden');
               
            });

            var play1 = document.getElementById("play1");
            var icon1 = document.getElementById("icon1");


            play1.addEventListener('click', function() {
                // icon.classList.remove('hidden');
                icon1.classList.toggle('hidden');
               
            });

            var boton2 = document.getElementById('boton2');
            var card2 = document.getElementById('card2');


            boton2.addEventListener('click', function() {
                // card2.classList.remove('hidden');
                card2.classList.toggle('hidden');
                console.log("si funciona");
            });
        </script>

        <script>
            function general() {
                return {
                    tipo: 1,
                    seccion(type) {
                        this.tipo = type
                        console.log(this.tipo)
                    },
                }
            }
        </script>

        <script>
            function tipoboton() {
                return {
                    tipo: 1,
                    showNow(type) {
                        this.tipo = type
                        console.log(this.tipo)
                    },
                }
            }
        </script>


    </div>
@endsection
