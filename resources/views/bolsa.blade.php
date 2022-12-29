@extends('layout')

@section('content')
{{-- md:bg-fondobolsa md:dark:bg-gray14 bg-fondobolsa dark:bg-fondobolsa --}}
    <div class="pt-24 ul:bg-fondobolsa ul:dark:bg-fondobolsa ml:bg-fondobolsa ml:dark:bg-fondobolsa xl:bg-fondobolsa xl:dark:bg-fondobolsa lg:bg-fondobolsa lg:dark:bg-fondobolsa md:bg-fondobolsa md:dark:bg-gray14 bg-fondobolsa dark:bg-gray14">
        <div class="containermygo mx-auto md:px-0 px-4">
            <div class=" grid ml:grid-cols-2  md:grid-cols-2  lg:grid-cols-2  xl:grid-cols-2  grid-cols-1  items-center">
                <div class=" xl:pb-0 lg:pb-0 ml:pb-0 md:pb-12 sm:pb-12">
                    <div class="ml:text-txtnamecomntpkyr ml:dark:text-txtnamecomntpkyr xl:text-txtnamecomntpkyr xl:dark:text-txtnamecomntpkyr lg:text-txtnamecomntpkyr lg:dark:text-txtnamecomntpkyr md:text-txtnamecomntpkyr md:dark:text-bgprogresb text-txtnamecomntpkyr dark:text-bgprogresb  ml:pt-0 xl:pt-0 lg:pt-0 md:pt-20 pt-11 font-bold font-inter md:text-6xl text-4xl md:text-left text-center">
                        Más flexibilidad. Un trabajo que amas. Una nueva carrera. Todo comienza aquí.
                    </div>
                    <div class="flex  sm:flex-row md:justify-start justify-center flex-col gap-x-4 gap-y-4 pt-12">
                        <div class="relative">

                            <input type="text"
                                class="text-sm pl-10 py-2.5  ml:bg-white-100 ml:dark:bg-white-100 xl:bg-white-100 xl:dark:bg-white-100 lg:bg-white-100 lg:dark:bg-white-100 md:bg-white-100 md:dark:bg-black bg-white-100 dark:bg-black  text-txtcommentply dark:text-borderconcours border-borderconcours w-full font-normal border focus:outline-none rounded-lg"
                                placeholder="Cargo, categoría">

                            <div class="absolute left-3 top-3">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.4997 11.0462C14.1836 11.9837 11.652 12.5 8.99973 12.5C6.34747 12.5 3.8158 11.9837 1.49973 11.0462M12.3331 5.00002V3.33335C12.3331 2.41288 11.5869 1.66669 10.6664 1.66669H7.33306C6.41258 1.66669 5.66639 2.41288 5.66639 3.33335V5.00002M8.99972 10H9.00806M3.16639 16.6667H14.8331C15.7535 16.6667 16.4997 15.9205 16.4997 15V6.66668C16.4997 5.74621 15.7535 5.00002 14.8331 5.00002H3.16639C2.24592 5.00002 1.49973 5.74621 1.49973 6.66668V15C1.49973 15.9205 2.24592 16.6667 3.16639 16.6667Z"
                                        stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            </div>
                        </div>
                        <div class="relative ">

                            <input type="text"
                                class="text-sm pl-10 py-2.5 ml:bg-white-100 ml:dark:bg-white-100 xl:bg-white-100 xl:dark:bg-white-100 lg:bg-white-100 lg:dark:bg-white-100 md:bg-white-100 md:dark:bg-black bg-white-100 dark:bg-black    text-txtcommentply dark:text-borderconcours border-borderconcours w-full  border font-normal focus:outline-none rounded-lg"
                                placeholder="Ciudad, región">

                            <div class="absolute left-3 top-3">
                                <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.7144 12.8812C11.9338 13.6617 10.3016 15.2939 9.17847 16.4171C8.5276 17.0679 7.47338 17.0683 6.8225 16.4174C5.71893 15.3139 4.11831 13.7132 3.28627 12.8812C0.682775 10.2777 0.682775 6.0566 3.28627 3.45311C5.88976 0.849615 10.1109 0.849615 12.7144 3.45311C15.3178 6.0566 15.3178 10.2777 12.7144 12.8812Z"
                                        stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M10.5003 8.16715C10.5003 9.54786 9.38102 10.6672 8.00031 10.6672C6.6196 10.6672 5.50031 9.54786 5.50031 8.16715C5.50031 6.78644 6.6196 5.66715 8.00031 5.66715C9.38102 5.66715 10.5003 6.78644 10.5003 8.16715Z"
                                        stroke="#697586" stroke-width="1.66667" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>


                            </div>
                        </div>

                        <button
                            class="text-green_especialidad py-2 rounded-lg bg-bgbtngreen px-5  focus:outline-none text-sixteen font-medium">
                            Buscar
                        </button>
                    </div>
                </div>
                <div class=" xl:pt-0 lg:pt-0 ml:pt-0 md:pt-12 pt-8">
                    <img src="../images/metodologia/imagebolsa.png" alt="">

                </div>
            </div>
        </div>
    </div>
<div class="bg-fondobolsa dark:bg-gray14">
    <div class="containermygo mx-auto md:px-0 px-4">
    
        <div class="text-center md:text-4xl text-3xl text-txtnamecomntpkyr dark:text-bgprogresb font-bold font-inter pt-20">
            ¿No sabes por dónde empezar?
        </div>
        <div class="text-center text-lg text-gray-600 dark:text-pricingdarkstudents font-normal font-inter pt-4">
            Búsquedas populares
        </div>

       {{--  2xl:grid-cols-4 ml:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 md:grid-cols-4 grid-cols-2  --}}
    
        <div class="grid sm:grid-cols-4 grid-cols-2 md:gap-x-6 gap-x-3 gap-y-6 md:w-2/3  w-full mx-auto pt-10">
            <div>
                <button
                class="font-inter font-medium text-sm border w-auto px-3 dark:bg-black bg-white-100 text-txtcommentply dark:text-borderconcours  border-borderconcours rounded-2xl text-center py-2 focus:outline-none">
                Gestión de procesos
            </button>
            </div>
            <div>
                <button
                class="font-inter font-medium text-sm border px-3 dark:bg-black bg-white-100 text-txtcommentply dark:text-borderconcours border-borderconcours rounded-2xl text-center py-2 focus:outline-none">
                Ingeneiría industrial
            </button>
            </div>
           <div>
            <button
            class="font-inter w-auto font-medium text-sm border dark:bg-black px-3 bg-white-100 text-txtcommentply dark:text-borderconcours border-borderconcours rounded-2xl text-center py-2 focus:outline-none">
            Mantenimiento
        </button>
           </div>
            <div>
                <button
                class="font-inter font-medium text-sm border px-3 dark:bg-black bg-white-100 text-txtcommentply dark:text-borderconcours border-borderconcours rounded-2xl text-center py-2 focus:outline-none">
                Gestión industrial
            </button>
            </div>
    
    
        </div>
    
       {{--  md:w-2/3 ml::w-2/3 xl::w-2/3 lg:w-2/3 sm:w-4/5 --}} 
        <div class="grid sm:grid-cols-3 grid-cols-2 md:gap-x-6 gap-x-2 gap-y-6 md:w-3/5 ml:w-3/5 xl:w-3/5 lg:w-4/5 sm:w-4/5   mx-auto pt-6 pb-32">
            <div>
                <button
                class="font-inter font-medium text-sm px-3  border dark:bg-black bg-white-100 text-txtcommentply dark:text-borderconcours border-borderconcours rounded-2xl text-center py-2 focus:outline-none ">
                Gestión de procesos
            </button>
            </div>
            <div>
                <button
                class="font-inter font-medium text-sm border px-3 dark:bg-black bg-white-100 text-txtcommentply dark:text-borderconcours border-borderconcours rounded-2xl text-center py-2 focus:outline-none ">
                Ingeneiría industrial
            </button>
            </div>
            <div>
                <button
                class="font-inter font-medium text-sm border px-3 dark:bg-black bg-white-100 text-txtcommentply dark:text-borderconcours border-borderconcours rounded-2xl text-center py-2 focus:outline-none ">
                Mantenimiento
            </button>
            </div>
    
        </div>
    
        <div class="text-center md:text-4xl text-3xl text-txtnamecomntpkyr dark:text-bgprogresb font-bold font-inter">
            Empleos agregados recientemente
    
        </div>
    
        <div class="grid ml:grid-cols-4 xl:grid-cols-4 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-3 md:gap-x-8  gap-x-3 gap-y-8 pt-10 pb-10 ">
            <button class="bg-bgprogresb dark:bg-pricingcintadark p-4 md:pr-20 w-full mx-auto py-6 rounded-xl focus:outline-none">
                <div class="flex">
                    <div>
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="8" fill="white" />
                            <g clip-path="url(#clip0_2193_135899)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M35.203 30.2037V34.5701V35.4261C35.1412 35.4869 35.0788 35.5472 35.0158 35.6069C28.6046 41.689 18.4761 41.4229 12.3935 35.0128C6.31081 28.6021 6.57694 18.4752 12.9881 12.3931C19.3988 6.31096 29.5273 6.57709 35.6099 12.9872C38.4462 15.9765 39.9022 19.7739 39.9982 23.592L39.9993 23.6277L39.9998 23.6534H39.9993C39.9993 24.5371 39.283 25.2533 38.3993 25.2533C37.5155 25.2533 36.7993 24.5371 36.7993 23.6534H36.7987C36.7172 20.6059 35.5529 17.576 33.2884 15.1899C28.4222 10.0619 20.3193 9.84912 15.1908 14.7142C10.0617 19.5798 9.84891 27.6816 14.715 32.8101C19.3295 37.6731 26.8537 38.1157 31.9934 33.9989V26.4H35.203V30.2038V30.2038L35.203 30.2037Z"
                                    fill="#0083F5" />
                                <path
                                    d="M37.1022 30.1021C36.2717 29.7998 35.8436 28.8816 36.1458 28.0512C36.4481 27.2207 37.3663 26.7926 38.1967 27.0948C39.0272 27.3971 39.4554 28.3153 39.1531 29.1457C38.8508 29.9762 37.9326 30.4043 37.1022 30.1021Z"
                                    fill="#33CC66" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M35.203 26.4H35.194L35.1934 26.4416C35.1929 26.4554 35.1924 26.4688 35.1918 26.4826L35.1892 26.5232L35.1855 26.5637L35.1812 26.6042L35.1753 26.6437L35.1689 26.6832L35.1614 26.7227L35.1529 26.7616L35.1438 26.8H35.1433L35.1332 26.8384L35.122 26.8763L35.1097 26.9136L35.0969 26.9504L35.0831 26.9872L35.0681 27.023L35.0527 27.0587L35.0361 27.0939L35.019 27.1286H35.0185L35.0009 27.1632L34.9817 27.1968C34.9561 27.2416 34.9284 27.2848 34.8985 27.3264L34.8761 27.3579L34.8526 27.3883L34.8286 27.4182L34.8036 27.4475L34.7785 27.4763H34.778L34.7519 27.504C34.7343 27.5227 34.7161 27.5409 34.698 27.5584L34.6697 27.5846L34.6409 27.6102L34.6116 27.6347V27.6352L34.5817 27.6592L34.5513 27.6827L34.5199 27.7051C34.4783 27.7349 34.4351 27.7627 34.3903 27.7883L34.3567 27.8069V27.8075L34.322 27.8251L34.2874 27.8427L34.2522 27.8592L34.2164 27.8747L34.1807 27.8896L34.1439 27.9035L34.107 27.9163L34.0697 27.9285L34.0318 27.9397L33.9934 27.9499L33.955 27.9595L33.9161 27.968L33.8772 27.9755L33.8377 27.9819L33.7977 27.9878L33.7572 27.992L33.7166 27.9957L33.6761 27.9984L33.635 28L33.594 28.0005L33.5524 28C33.5385 27.9995 33.5252 27.9989 33.5113 27.9984L33.4708 27.9957L33.4302 27.992L33.3897 27.9878L33.3502 27.9819L33.3108 27.9755L33.2713 27.968L33.2324 27.9595L33.194 27.9499L33.1556 27.9397L33.1177 27.9285L33.0803 27.9163L33.0435 27.9035L33.0067 27.8896L32.971 27.8747L32.9352 27.8592L32.9 27.8427L32.8654 27.8251H32.8649L32.8307 27.8075V27.8069L32.7971 27.7883L32.7641 27.7685L32.731 27.7483L32.699 27.727L32.6676 27.7051L32.6361 27.6827L32.6057 27.6592L32.5758 27.6352V27.6347L32.5465 27.6102L32.5177 27.5846L32.49 27.5585H32.4894L32.4622 27.5318L32.4356 27.504L32.4094 27.4763L32.3838 27.4475L32.3587 27.4182L32.3347 27.3883L32.3113 27.3579L32.2889 27.3264L32.267 27.295L32.2457 27.263V27.2624L32.2255 27.2299L32.2057 27.1969L32.1865 27.1633L32.1684 27.1286L32.1513 27.0939L32.1347 27.0588L32.1193 27.023L32.1043 26.9873L32.0905 26.9504L32.0777 26.9136L32.0654 26.8763L32.0542 26.8384L32.0441 26.8L32.0345 26.7616L32.0259 26.7227L32.0185 26.6832L32.0121 26.6437L32.0062 26.6043L32.0019 26.5637L31.9982 26.5232L31.9956 26.4827C31.995 26.4688 31.9945 26.4555 31.994 26.4416L31.9934 26.4L31.994 26.3589C31.9945 26.3451 31.995 26.3317 31.9956 26.3179L31.9982 26.2773L31.9993 26.2624C31.9262 24.5654 30.5166 23.2 28.8025 23.2C27.0419 23.2 25.602 24.64 25.602 26.4C25.602 27.2837 24.8857 28.0005 24.002 28.0005C23.1182 28.0005 22.402 27.2837 22.402 26.4C22.402 24.64 20.9614 23.2 19.2014 23.2C17.4409 23.2 16.0009 24.64 16.0009 26.4C16.0009 27.2837 15.2847 28.0005 14.4009 28.0005C13.5172 28.0005 12.8009 27.2837 12.8009 26.4H12.8004C12.8004 22.8795 15.6809 19.9995 19.2015 19.9995C21.1081 19.9995 22.8265 20.8443 24.002 22.1782C25.2196 20.7963 26.9583 19.9995 28.8025 19.9995C32.323 19.9995 35.203 22.88 35.203 26.4L35.203 26.4V26.4Z"
                                    fill="#33CC66" />
                            </g>
                            <defs>
                                <clipPath id="clip0_2193_135899">
                                    <rect width="31.9998" height="32" fill="white" transform="translate(8 8)" />
                                </clipPath>
                            </defs>
                        </svg>
    
    
                    </div>
                    <div class="flex-col flex pl-2">
                        <div class="font-inter font-medium text-sixteen text-txtcommentply dark:text-borderconcours text-left">
                            MayuGo
                        </div>
                        <div class="font-inter font-medium text-sixteen text-txtcommentply dark:text-borderconcours text-left">
                            Huánuco, Perú
                        </div>
                    </div>
                </div>
                <div class="font-inter font-bold text-lg text-txtcommentply dark:text-borderconcours text-left">
                    Ingeniero Industrial
                </div>
                <div class="flex font-inter font-medium text-sixteen text-gray-600 dark:text-pricingdarkstudents pt-2 items-center">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.99932 6.66605V9.99939L12.4993 12.4994M17.4993 9.99939C17.4993 14.1415 14.1415 17.4994 9.99932 17.4994C5.85719 17.4994 2.49933 14.1415 2.49933 9.99939C2.49933 5.85725 5.85719 2.49939 9.99932 2.49939C14.1415 2.49939 17.4993 5.85725 17.4993 9.99939Z"
                            stroke="#697586" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="font-inter font-medium text-sixteen text-gray-600 dark:text-pricingdarkstudents pl-2.5">
                        Tiempo completo
                    </div>
    
                </div>
    
                <div class="pt-8 text-left">
                    <span class="font-inter font-medium text-sm text-red_limpiar dark:text-redbuscador py-1 px-3 rounded-xl bg-red_bosa dark:bg-redbolsa">
                        Contratación urgente
                    </span>
                </div>
    
            </button>
            <button class="bg-bgprogresb dark:bg-pricingcintadark p-4 md:pr-20 w-full mx-auto py-6 rounded-xl focus:outline-none">
                <div class="flex">
                    <div>
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="8" fill="white" />
                            <g clip-path="url(#clip0_2193_135899)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M35.203 30.2037V34.5701V35.4261C35.1412 35.4869 35.0788 35.5472 35.0158 35.6069C28.6046 41.689 18.4761 41.4229 12.3935 35.0128C6.31081 28.6021 6.57694 18.4752 12.9881 12.3931C19.3988 6.31096 29.5273 6.57709 35.6099 12.9872C38.4462 15.9765 39.9022 19.7739 39.9982 23.592L39.9993 23.6277L39.9998 23.6534H39.9993C39.9993 24.5371 39.283 25.2533 38.3993 25.2533C37.5155 25.2533 36.7993 24.5371 36.7993 23.6534H36.7987C36.7172 20.6059 35.5529 17.576 33.2884 15.1899C28.4222 10.0619 20.3193 9.84912 15.1908 14.7142C10.0617 19.5798 9.84891 27.6816 14.715 32.8101C19.3295 37.6731 26.8537 38.1157 31.9934 33.9989V26.4H35.203V30.2038V30.2038L35.203 30.2037Z"
                                    fill="#0083F5" />
                                <path
                                    d="M37.1022 30.1021C36.2717 29.7998 35.8436 28.8816 36.1458 28.0512C36.4481 27.2207 37.3663 26.7926 38.1967 27.0948C39.0272 27.3971 39.4554 28.3153 39.1531 29.1457C38.8508 29.9762 37.9326 30.4043 37.1022 30.1021Z"
                                    fill="#33CC66" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M35.203 26.4H35.194L35.1934 26.4416C35.1929 26.4554 35.1924 26.4688 35.1918 26.4826L35.1892 26.5232L35.1855 26.5637L35.1812 26.6042L35.1753 26.6437L35.1689 26.6832L35.1614 26.7227L35.1529 26.7616L35.1438 26.8H35.1433L35.1332 26.8384L35.122 26.8763L35.1097 26.9136L35.0969 26.9504L35.0831 26.9872L35.0681 27.023L35.0527 27.0587L35.0361 27.0939L35.019 27.1286H35.0185L35.0009 27.1632L34.9817 27.1968C34.9561 27.2416 34.9284 27.2848 34.8985 27.3264L34.8761 27.3579L34.8526 27.3883L34.8286 27.4182L34.8036 27.4475L34.7785 27.4763H34.778L34.7519 27.504C34.7343 27.5227 34.7161 27.5409 34.698 27.5584L34.6697 27.5846L34.6409 27.6102L34.6116 27.6347V27.6352L34.5817 27.6592L34.5513 27.6827L34.5199 27.7051C34.4783 27.7349 34.4351 27.7627 34.3903 27.7883L34.3567 27.8069V27.8075L34.322 27.8251L34.2874 27.8427L34.2522 27.8592L34.2164 27.8747L34.1807 27.8896L34.1439 27.9035L34.107 27.9163L34.0697 27.9285L34.0318 27.9397L33.9934 27.9499L33.955 27.9595L33.9161 27.968L33.8772 27.9755L33.8377 27.9819L33.7977 27.9878L33.7572 27.992L33.7166 27.9957L33.6761 27.9984L33.635 28L33.594 28.0005L33.5524 28C33.5385 27.9995 33.5252 27.9989 33.5113 27.9984L33.4708 27.9957L33.4302 27.992L33.3897 27.9878L33.3502 27.9819L33.3108 27.9755L33.2713 27.968L33.2324 27.9595L33.194 27.9499L33.1556 27.9397L33.1177 27.9285L33.0803 27.9163L33.0435 27.9035L33.0067 27.8896L32.971 27.8747L32.9352 27.8592L32.9 27.8427L32.8654 27.8251H32.8649L32.8307 27.8075V27.8069L32.7971 27.7883L32.7641 27.7685L32.731 27.7483L32.699 27.727L32.6676 27.7051L32.6361 27.6827L32.6057 27.6592L32.5758 27.6352V27.6347L32.5465 27.6102L32.5177 27.5846L32.49 27.5585H32.4894L32.4622 27.5318L32.4356 27.504L32.4094 27.4763L32.3838 27.4475L32.3587 27.4182L32.3347 27.3883L32.3113 27.3579L32.2889 27.3264L32.267 27.295L32.2457 27.263V27.2624L32.2255 27.2299L32.2057 27.1969L32.1865 27.1633L32.1684 27.1286L32.1513 27.0939L32.1347 27.0588L32.1193 27.023L32.1043 26.9873L32.0905 26.9504L32.0777 26.9136L32.0654 26.8763L32.0542 26.8384L32.0441 26.8L32.0345 26.7616L32.0259 26.7227L32.0185 26.6832L32.0121 26.6437L32.0062 26.6043L32.0019 26.5637L31.9982 26.5232L31.9956 26.4827C31.995 26.4688 31.9945 26.4555 31.994 26.4416L31.9934 26.4L31.994 26.3589C31.9945 26.3451 31.995 26.3317 31.9956 26.3179L31.9982 26.2773L31.9993 26.2624C31.9262 24.5654 30.5166 23.2 28.8025 23.2C27.0419 23.2 25.602 24.64 25.602 26.4C25.602 27.2837 24.8857 28.0005 24.002 28.0005C23.1182 28.0005 22.402 27.2837 22.402 26.4C22.402 24.64 20.9614 23.2 19.2014 23.2C17.4409 23.2 16.0009 24.64 16.0009 26.4C16.0009 27.2837 15.2847 28.0005 14.4009 28.0005C13.5172 28.0005 12.8009 27.2837 12.8009 26.4H12.8004C12.8004 22.8795 15.6809 19.9995 19.2015 19.9995C21.1081 19.9995 22.8265 20.8443 24.002 22.1782C25.2196 20.7963 26.9583 19.9995 28.8025 19.9995C32.323 19.9995 35.203 22.88 35.203 26.4L35.203 26.4V26.4Z"
                                    fill="#33CC66" />
                            </g>
                            <defs>
                                <clipPath id="clip0_2193_135899">
                                    <rect width="31.9998" height="32" fill="white" transform="translate(8 8)" />
                                </clipPath>
                            </defs>
                        </svg>
    
    
                    </div>
                    <div class="flex-col flex pl-2">
                        <div class="font-inter font-medium text-sixteen text-txtcommentply dark:text-borderconcours text-left">
                            MayuGo
                        </div>
                        <div class="font-inter font-medium text-sixteen text-txtcommentply dark:text-borderconcours text-left">
                            Huánuco, Perú
                        </div>
                    </div>
                </div>
                <div class="font-inter font-bold text-lg text-txtcommentply dark:text-borderconcours text-left">
                    Ingeniero Industrial
                </div>
                <div class="flex font-inter font-medium text-sixteen text-gray-600 dark:text-pricingdarkstudents pt-2">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.99932 6.66605V9.99939L12.4993 12.4994M17.4993 9.99939C17.4993 14.1415 14.1415 17.4994 9.99932 17.4994C5.85719 17.4994 2.49933 14.1415 2.49933 9.99939C2.49933 5.85725 5.85719 2.49939 9.99932 2.49939C14.1415 2.49939 17.4993 5.85725 17.4993 9.99939Z"
                            stroke="#697586" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="font-inter font-medium text-sixteen text-gray-600 dark:text-pricingdarkstudents pl-2.5">
                        Tiempo completo
                    </div>
    
                </div>
    
                <div class="pt-8 text-left">
                    <span class="font-inter font-medium text-sm text-red_limpiar dark:text-redbuscador py-1 px-3 rounded-xl bg-red_bosa dark:bg-redbolsa">
                        Contratación urgente
                    </span>
                </div>
    
            </button>
            <button class="bg-bgprogresb dark:bg-pricingcintadark p-4 md:pr-20 w-full mx-auto py-6 rounded-xl focus:outline-none">
                <div class="flex">
                    <div>
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="8" fill="white" />
                            <g clip-path="url(#clip0_2193_135899)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M35.203 30.2037V34.5701V35.4261C35.1412 35.4869 35.0788 35.5472 35.0158 35.6069C28.6046 41.689 18.4761 41.4229 12.3935 35.0128C6.31081 28.6021 6.57694 18.4752 12.9881 12.3931C19.3988 6.31096 29.5273 6.57709 35.6099 12.9872C38.4462 15.9765 39.9022 19.7739 39.9982 23.592L39.9993 23.6277L39.9998 23.6534H39.9993C39.9993 24.5371 39.283 25.2533 38.3993 25.2533C37.5155 25.2533 36.7993 24.5371 36.7993 23.6534H36.7987C36.7172 20.6059 35.5529 17.576 33.2884 15.1899C28.4222 10.0619 20.3193 9.84912 15.1908 14.7142C10.0617 19.5798 9.84891 27.6816 14.715 32.8101C19.3295 37.6731 26.8537 38.1157 31.9934 33.9989V26.4H35.203V30.2038V30.2038L35.203 30.2037Z"
                                    fill="#0083F5" />
                                <path
                                    d="M37.1022 30.1021C36.2717 29.7998 35.8436 28.8816 36.1458 28.0512C36.4481 27.2207 37.3663 26.7926 38.1967 27.0948C39.0272 27.3971 39.4554 28.3153 39.1531 29.1457C38.8508 29.9762 37.9326 30.4043 37.1022 30.1021Z"
                                    fill="#33CC66" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M35.203 26.4H35.194L35.1934 26.4416C35.1929 26.4554 35.1924 26.4688 35.1918 26.4826L35.1892 26.5232L35.1855 26.5637L35.1812 26.6042L35.1753 26.6437L35.1689 26.6832L35.1614 26.7227L35.1529 26.7616L35.1438 26.8H35.1433L35.1332 26.8384L35.122 26.8763L35.1097 26.9136L35.0969 26.9504L35.0831 26.9872L35.0681 27.023L35.0527 27.0587L35.0361 27.0939L35.019 27.1286H35.0185L35.0009 27.1632L34.9817 27.1968C34.9561 27.2416 34.9284 27.2848 34.8985 27.3264L34.8761 27.3579L34.8526 27.3883L34.8286 27.4182L34.8036 27.4475L34.7785 27.4763H34.778L34.7519 27.504C34.7343 27.5227 34.7161 27.5409 34.698 27.5584L34.6697 27.5846L34.6409 27.6102L34.6116 27.6347V27.6352L34.5817 27.6592L34.5513 27.6827L34.5199 27.7051C34.4783 27.7349 34.4351 27.7627 34.3903 27.7883L34.3567 27.8069V27.8075L34.322 27.8251L34.2874 27.8427L34.2522 27.8592L34.2164 27.8747L34.1807 27.8896L34.1439 27.9035L34.107 27.9163L34.0697 27.9285L34.0318 27.9397L33.9934 27.9499L33.955 27.9595L33.9161 27.968L33.8772 27.9755L33.8377 27.9819L33.7977 27.9878L33.7572 27.992L33.7166 27.9957L33.6761 27.9984L33.635 28L33.594 28.0005L33.5524 28C33.5385 27.9995 33.5252 27.9989 33.5113 27.9984L33.4708 27.9957L33.4302 27.992L33.3897 27.9878L33.3502 27.9819L33.3108 27.9755L33.2713 27.968L33.2324 27.9595L33.194 27.9499L33.1556 27.9397L33.1177 27.9285L33.0803 27.9163L33.0435 27.9035L33.0067 27.8896L32.971 27.8747L32.9352 27.8592L32.9 27.8427L32.8654 27.8251H32.8649L32.8307 27.8075V27.8069L32.7971 27.7883L32.7641 27.7685L32.731 27.7483L32.699 27.727L32.6676 27.7051L32.6361 27.6827L32.6057 27.6592L32.5758 27.6352V27.6347L32.5465 27.6102L32.5177 27.5846L32.49 27.5585H32.4894L32.4622 27.5318L32.4356 27.504L32.4094 27.4763L32.3838 27.4475L32.3587 27.4182L32.3347 27.3883L32.3113 27.3579L32.2889 27.3264L32.267 27.295L32.2457 27.263V27.2624L32.2255 27.2299L32.2057 27.1969L32.1865 27.1633L32.1684 27.1286L32.1513 27.0939L32.1347 27.0588L32.1193 27.023L32.1043 26.9873L32.0905 26.9504L32.0777 26.9136L32.0654 26.8763L32.0542 26.8384L32.0441 26.8L32.0345 26.7616L32.0259 26.7227L32.0185 26.6832L32.0121 26.6437L32.0062 26.6043L32.0019 26.5637L31.9982 26.5232L31.9956 26.4827C31.995 26.4688 31.9945 26.4555 31.994 26.4416L31.9934 26.4L31.994 26.3589C31.9945 26.3451 31.995 26.3317 31.9956 26.3179L31.9982 26.2773L31.9993 26.2624C31.9262 24.5654 30.5166 23.2 28.8025 23.2C27.0419 23.2 25.602 24.64 25.602 26.4C25.602 27.2837 24.8857 28.0005 24.002 28.0005C23.1182 28.0005 22.402 27.2837 22.402 26.4C22.402 24.64 20.9614 23.2 19.2014 23.2C17.4409 23.2 16.0009 24.64 16.0009 26.4C16.0009 27.2837 15.2847 28.0005 14.4009 28.0005C13.5172 28.0005 12.8009 27.2837 12.8009 26.4H12.8004C12.8004 22.8795 15.6809 19.9995 19.2015 19.9995C21.1081 19.9995 22.8265 20.8443 24.002 22.1782C25.2196 20.7963 26.9583 19.9995 28.8025 19.9995C32.323 19.9995 35.203 22.88 35.203 26.4L35.203 26.4V26.4Z"
                                    fill="#33CC66" />
                            </g>
                            <defs>
                                <clipPath id="clip0_2193_135899">
                                    <rect width="31.9998" height="32" fill="white" transform="translate(8 8)" />
                                </clipPath>
                            </defs>
                        </svg>
    
    
                    </div>
                    <div class="flex-col flex pl-2">
                        <div class="font-inter font-medium text-sixteen text-txtcommentply dark:text-borderconcours text-left">
                            MayuGo
                        </div>
                        <div class="font-inter font-medium text-sixteen text-txtcommentply dark:text-borderconcours text-left">
                            Huánuco, Perú
                        </div>
                    </div>
                </div>
                <div class="font-inter font-bold text-lg text-txtcommentply dark:text-borderconcours text-left">
                    Ingeniero Industrial
                </div>
                <div class="flex font-inter font-medium text-sixteen text-gray-600 dark:text-pricingdarkstudents pt-2">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.99932 6.66605V9.99939L12.4993 12.4994M17.4993 9.99939C17.4993 14.1415 14.1415 17.4994 9.99932 17.4994C5.85719 17.4994 2.49933 14.1415 2.49933 9.99939C2.49933 5.85725 5.85719 2.49939 9.99932 2.49939C14.1415 2.49939 17.4993 5.85725 17.4993 9.99939Z"
                            stroke="#697586" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="font-inter font-medium text-sixteen text-gray-600 dark:text-pricingdarkstudents pl-2.5">
                        Tiempo completo
                    </div>
    
                </div>
    
                <div class="pt-8 text-left">
                    <span class="font-inter font-medium text-sm text-red_limpiar dark:text-redbuscador py-1 px-3 rounded-xl bg-red_bosa dark:bg-redbolsa">
                        Contratación urgente
                    </span>
                </div>
    
            </button>
            <button class="bg-bgprogresb dark:bg-pricingcintadark p-4 md:pr-20 w-full mx-auto py-6 rounded-xl focus:outline-none">
                <div class="flex">
                    <div>
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="8" fill="white" />
                            <g clip-path="url(#clip0_2193_135899)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M35.203 30.2037V34.5701V35.4261C35.1412 35.4869 35.0788 35.5472 35.0158 35.6069C28.6046 41.689 18.4761 41.4229 12.3935 35.0128C6.31081 28.6021 6.57694 18.4752 12.9881 12.3931C19.3988 6.31096 29.5273 6.57709 35.6099 12.9872C38.4462 15.9765 39.9022 19.7739 39.9982 23.592L39.9993 23.6277L39.9998 23.6534H39.9993C39.9993 24.5371 39.283 25.2533 38.3993 25.2533C37.5155 25.2533 36.7993 24.5371 36.7993 23.6534H36.7987C36.7172 20.6059 35.5529 17.576 33.2884 15.1899C28.4222 10.0619 20.3193 9.84912 15.1908 14.7142C10.0617 19.5798 9.84891 27.6816 14.715 32.8101C19.3295 37.6731 26.8537 38.1157 31.9934 33.9989V26.4H35.203V30.2038V30.2038L35.203 30.2037Z"
                                    fill="#0083F5" />
                                <path
                                    d="M37.1022 30.1021C36.2717 29.7998 35.8436 28.8816 36.1458 28.0512C36.4481 27.2207 37.3663 26.7926 38.1967 27.0948C39.0272 27.3971 39.4554 28.3153 39.1531 29.1457C38.8508 29.9762 37.9326 30.4043 37.1022 30.1021Z"
                                    fill="#33CC66" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M35.203 26.4H35.194L35.1934 26.4416C35.1929 26.4554 35.1924 26.4688 35.1918 26.4826L35.1892 26.5232L35.1855 26.5637L35.1812 26.6042L35.1753 26.6437L35.1689 26.6832L35.1614 26.7227L35.1529 26.7616L35.1438 26.8H35.1433L35.1332 26.8384L35.122 26.8763L35.1097 26.9136L35.0969 26.9504L35.0831 26.9872L35.0681 27.023L35.0527 27.0587L35.0361 27.0939L35.019 27.1286H35.0185L35.0009 27.1632L34.9817 27.1968C34.9561 27.2416 34.9284 27.2848 34.8985 27.3264L34.8761 27.3579L34.8526 27.3883L34.8286 27.4182L34.8036 27.4475L34.7785 27.4763H34.778L34.7519 27.504C34.7343 27.5227 34.7161 27.5409 34.698 27.5584L34.6697 27.5846L34.6409 27.6102L34.6116 27.6347V27.6352L34.5817 27.6592L34.5513 27.6827L34.5199 27.7051C34.4783 27.7349 34.4351 27.7627 34.3903 27.7883L34.3567 27.8069V27.8075L34.322 27.8251L34.2874 27.8427L34.2522 27.8592L34.2164 27.8747L34.1807 27.8896L34.1439 27.9035L34.107 27.9163L34.0697 27.9285L34.0318 27.9397L33.9934 27.9499L33.955 27.9595L33.9161 27.968L33.8772 27.9755L33.8377 27.9819L33.7977 27.9878L33.7572 27.992L33.7166 27.9957L33.6761 27.9984L33.635 28L33.594 28.0005L33.5524 28C33.5385 27.9995 33.5252 27.9989 33.5113 27.9984L33.4708 27.9957L33.4302 27.992L33.3897 27.9878L33.3502 27.9819L33.3108 27.9755L33.2713 27.968L33.2324 27.9595L33.194 27.9499L33.1556 27.9397L33.1177 27.9285L33.0803 27.9163L33.0435 27.9035L33.0067 27.8896L32.971 27.8747L32.9352 27.8592L32.9 27.8427L32.8654 27.8251H32.8649L32.8307 27.8075V27.8069L32.7971 27.7883L32.7641 27.7685L32.731 27.7483L32.699 27.727L32.6676 27.7051L32.6361 27.6827L32.6057 27.6592L32.5758 27.6352V27.6347L32.5465 27.6102L32.5177 27.5846L32.49 27.5585H32.4894L32.4622 27.5318L32.4356 27.504L32.4094 27.4763L32.3838 27.4475L32.3587 27.4182L32.3347 27.3883L32.3113 27.3579L32.2889 27.3264L32.267 27.295L32.2457 27.263V27.2624L32.2255 27.2299L32.2057 27.1969L32.1865 27.1633L32.1684 27.1286L32.1513 27.0939L32.1347 27.0588L32.1193 27.023L32.1043 26.9873L32.0905 26.9504L32.0777 26.9136L32.0654 26.8763L32.0542 26.8384L32.0441 26.8L32.0345 26.7616L32.0259 26.7227L32.0185 26.6832L32.0121 26.6437L32.0062 26.6043L32.0019 26.5637L31.9982 26.5232L31.9956 26.4827C31.995 26.4688 31.9945 26.4555 31.994 26.4416L31.9934 26.4L31.994 26.3589C31.9945 26.3451 31.995 26.3317 31.9956 26.3179L31.9982 26.2773L31.9993 26.2624C31.9262 24.5654 30.5166 23.2 28.8025 23.2C27.0419 23.2 25.602 24.64 25.602 26.4C25.602 27.2837 24.8857 28.0005 24.002 28.0005C23.1182 28.0005 22.402 27.2837 22.402 26.4C22.402 24.64 20.9614 23.2 19.2014 23.2C17.4409 23.2 16.0009 24.64 16.0009 26.4C16.0009 27.2837 15.2847 28.0005 14.4009 28.0005C13.5172 28.0005 12.8009 27.2837 12.8009 26.4H12.8004C12.8004 22.8795 15.6809 19.9995 19.2015 19.9995C21.1081 19.9995 22.8265 20.8443 24.002 22.1782C25.2196 20.7963 26.9583 19.9995 28.8025 19.9995C32.323 19.9995 35.203 22.88 35.203 26.4L35.203 26.4V26.4Z"
                                    fill="#33CC66" />
                            </g>
                            <defs>
                                <clipPath id="clip0_2193_135899">
                                    <rect width="31.9998" height="32" fill="white" transform="translate(8 8)" />
                                </clipPath>
                            </defs>
                        </svg>
    
    
                    </div>
                    <div class="flex-col flex pl-2">
                        <div class="font-inter font-medium text-sixteen text-txtcommentply dark:text-borderconcours text-left">
                            MayuGo
                        </div>
                        <div class="font-inter font-medium text-sixteen text-txtcommentply dark:text-borderconcours text-left">
                            Huánuco, Perú
                        </div>
                    </div>
                </div>
                <div class="font-inter font-bold text-lg text-txtcommentply dark:text-borderconcours text-left">
                    Ingeniero Industrial
                </div>
                <div class="flex font-inter font-medium text-sixteen text-gray-600 dark:text-pricingdarkstudents pt-2">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M9.99932 6.66605V9.99939L12.4993 12.4994M17.4993 9.99939C17.4993 14.1415 14.1415 17.4994 9.99932 17.4994C5.85719 17.4994 2.49933 14.1415 2.49933 9.99939C2.49933 5.85725 5.85719 2.49939 9.99932 2.49939C14.1415 2.49939 17.4993 5.85725 17.4993 9.99939Z"
                            stroke="#697586" stroke-width="1.66667" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <div class="font-inter font-medium text-sixteen text-gray-600 dark:text-pricingdarkstudents pl-2.5">
                        Tiempo completo
                    </div>
    
                </div>
    
                <div class="pt-8 text-left">
                    <span class="font-inter font-medium text-sm text-red_limpiar dark:text-redbuscador py-1 px-3 rounded-xl bg-red_bosa dark:bg-redbolsa">
                        Contratación urgente
                    </span>
                </div>
    
            </button>
    
           
    
    
    
        </div>
    
        <div class="text-center  pb-20 ">
            <button class="text-green_especialidad rounded-lg bg-bgbtngreen px-6 sm:w-auto w-full  py-2.5 focus:outline-none text-lg font-medium">
                Ver todas las ofertas
            </button>
        </div>
    </div>
</div>
@endsection
