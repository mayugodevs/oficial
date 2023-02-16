@extends('layout')
@section('content')
    <div
        class="bg-gradient-to-r from-bgfondopricingwhite dark:from-pricingtextduowhite via-moradopromocion dark:via-moradopromocion to-bgfondopricingwhite  dark:to-pricingtextduowhite">
        <div class=" containermygo mx-auto pt-10">
            <div
                class="grid lg:grid-cols-2 grid-cols-1 pt-28 pb-20 items-center justify-between ml:px-0 xl:px-0 lg:px-8 md:px-8 px-4">
                <div class="lg:order-1 order-2">
                    <div class=" lg:text-left text-center">
                        <div class="text-pricingtextduowhite dark:text-checkpricingdark font-inter font-semibold text-sm">
                            ¡Solo por hoy!
                        </div>
                        <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-twenty-eight font-bold font-inter">
                            Cursos de especialidad:
                        </div>
                        <div class="dark:text-bgprogresb text-txtnamecomntpkyr text-thirty-six italic font-inter font-bold">
                            Ingeniería de Mantenimiento
                        </div>
                        <div
                            class="text-bcklightbuscador dark:text-bgbtngreen font-inter font-bold italic text-thirty-two pt-3">
                            ¡A tan solo usd 9.99 cada uno!
                        </div>
                        <div class="dark:text-borderconcours text-txtcommentply font-inter font-normal text-lg pt-3">
                            Promoción termina en:
                        </div>


                        <script type="text/javascript">
                            const getRemainingTime = deadline => {
                                let now = new Date(),
                                    remainTime = (new Date(deadline) - now + 1000) / 1000,
                                    remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
                                    remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2),
                                    remainHours = ('0' + Math.floor(remainTime / 3600 % 2)).slice(-
                                        2), //ese % 2 se cambia por 24 para que funcione normal
                                    remainDays = Math.floor(remainTime / (3600 * 24));
                                return {
                                    remainSeconds,
                                    remainMinutes,
                                    remainHours,
                                    remainDays,
                                    remainTime
                                }
                            };
                            const countdown = (deadline, elem, finalMessage) => {
                                const el = document.getElementById(elem);
                                const timerUpdate = setInterval(() => {
                                    let t = getRemainingTime(deadline);
                                    document.getElementById('hrs').innerHTML = `${t.remainHours}`;
                                    document.getElementById('min').innerHTML = `${t.remainMinutes}`;
                                    document.getElementById('sec').innerHTML = `${t.remainSeconds}`;

                                    if (t.remainTime <= 1) {
                                        clearInterval(timerUpdate);
                                        el.innerHTML = finalMessage;
                                    }
                                }, 1000)
                            };
                            countdown('February 28 2023 9:50:00 GMT-0500', 'clock1', '¡Agotado!');
                        </script>

                        <div class="sm:w-1/2 w-full pt-2 " id="clock">

                            <div class="flex text-center items-center justify-between">
                                <div class="">
                                    <p
                                        class="text-1xl dark:bg-gray-500 p-6 bg-celeste rounded-md dark:text-white-500 text-gray-300 font-bold">
                                        00</p>
                                    <p class="text-sm dark:text-white-500 text-gray-300 font-inter pt-2">Días</p>
                                </div>
                                <div class="">
                                    <p class="text-1xl dark:bg-gray-500 p-6 bg-celeste  rounded-md dark:text-white-500 text-gray-300 font-bold"
                                        id="hrs">00</p>
                                    <p class="text-sm dark:text-white-500 text-gray-300 font-inter pt-2">Horas</p>
                                </div>
                                <div class="">
                                    <p class="text-1xl dark:bg-gray-500 p-6 bg-celeste  rounded-md dark:text-white-500 text-gray-300 font-bold"
                                        id="min">00</p>
                                    <p class="text-sm dark:text-white-500 text-gray-300 font-inter pt-2">Minutos</p>
                                </div>
                                <div>
                                    <p class="text-1xl dark:bg-gray-500 p-6 bg-celeste  rounded-md dark:text-white-500 text-gray-300 font-bold"
                                        id="sec">00</p>
                                    <p class="text-sm dark:text-white-500 text-gray-300 font-inter pt-2">Seg</p>
                                </div>
                            </div>
                           
                            <div class="pt-4">
                                <button class="bg-bgbtngreen text-btncomentresply h-10 rounded-lg font-bold w-full px-4">
                                    ¡Arma tu pack, por tiempo limitado!
                                </button>
                            </div>

                        </div>
                        <div class="dark:text-borderconcours text-txtcommentply font-inter font-normal text-sm pt-3">
                            *Se aplican terminos y condiciones
                        </div>
                    </div>
                </div>
                <div class="flow-root lg:order-2 order-1">
                    <div class="float-left">
                        <img class="text-right" src="{{ asset('/images/metodologia/promociones.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dark:bg-gray14 bg-whiteheader">
        <div class="containermygo mx-auto pt-10 pb-40">
            <div
                class="grid xl:grid-cols-4 ml:grid-cols-4 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 ml:px-0 xl:px-0 lg:px-8 md:px-8 px-4 gap-x-5">
                <div
                    class="xl:col-span-3 ml:col-span-3 lg:col-span-2 md:col-span-2 col-span-1 xl:grid-cols-3 ml:grid-cols-3 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-x-5 grid gap-y-10">
                    <div>
                        <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite pt-5 pb-7 rounded-t-xl ">
                            <svg class="mx-auto" width="81" height="80" viewBox="0 0 81 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M40.5001 80.0001C62.5915 80.0001 80.5002 62.0914 80.5002 40C80.5002 17.9085 62.5915 -0.00012207 40.5001 -0.00012207C18.4087 -0.00012207 0.5 17.9085 0.5 40C0.5 62.0914 18.4087 80.0001 40.5001 80.0001Z"
                                    fill="#999999" />
                                <path
                                    d="M40.4999 74.9682C59.8123 74.9682 75.4681 59.3124 75.4681 40C75.4681 20.6876 59.8123 5.0318 40.4999 5.0318C21.1875 5.0318 5.53174 20.6876 5.53174 40C5.53174 59.3124 21.1875 74.9682 40.4999 74.9682Z"
                                    fill="#424F4F" />
                                <path
                                    d="M40.5001 72.192C58.2793 72.192 72.6921 57.7791 72.6921 40C72.6921 22.2208 58.2793 7.80798 40.5001 7.80798C22.721 7.80798 8.30811 22.2208 8.30811 40C8.30811 57.7791 22.721 72.192 40.5001 72.192Z"
                                    fill="#424F4F" />
                                <path d="M52.4496 58.7395H21.6689V18.3262H47.1923L52.4496 24.5895V40.2117" stroke="white"
                                    stroke-width="1.42404" stroke-miterlimit="22.9256" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M47.1921 18.3262L46.2534 24.6682L52.4494 24.5895L47.1921 18.3262Z" stroke="white"
                                    stroke-width="1.42404" stroke-miterlimit="22.9256" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M41.4626 34.5383L42.6641 28.606M23.0801 41.9061L26.9162 33.691L23.0801 41.9061ZM28.0696 33.5594L30.8957 37.9438L32.1593 37.9864L33.9366 34.5072L28.0696 33.5594ZM35.5521 33.5172L40.0252 35.6005L35.5521 33.5172Z"
                                    stroke="white" stroke-width="0.711966" stroke-miterlimit="22.9256"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M27.3859 33.7948C27.9995 33.7948 28.4968 33.2974 28.4968 32.6838C28.4968 32.0702 27.9995 31.5728 27.3859 31.5728C26.7723 31.5728 26.2749 32.0702 26.2749 32.6838C26.2749 33.2974 26.7723 33.7948 27.3859 33.7948Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M31.4967 39.9892C32.1103 39.9892 32.6077 39.4918 32.6077 38.8782C32.6077 38.2647 32.1103 37.7673 31.4967 37.7673C30.8831 37.7673 30.3857 38.2647 30.3857 38.8782C30.3857 39.4918 30.8831 39.9892 31.4967 39.9892Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M34.4415 34.6282C35.0551 34.6282 35.5525 34.1308 35.5525 33.5172C35.5525 32.9037 35.0551 32.4062 34.4415 32.4062C33.828 32.4062 33.3306 32.9037 33.3306 33.5172C33.3306 34.1308 33.828 34.6282 34.4415 34.6282Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M41.1359 36.7114C41.7495 36.7114 42.2468 36.214 42.2468 35.6005C42.2468 34.9869 41.7495 34.4895 41.1359 34.4895C40.5223 34.4895 40.0249 34.9869 40.0249 35.6005C40.0249 36.214 40.5223 36.7114 41.1359 36.7114Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M42.8859 28.6282C43.4995 28.6282 43.9969 28.1308 43.9969 27.5172C43.9969 26.9037 43.4995 26.4062 42.8859 26.4062C42.2723 26.4062 41.7749 26.9037 41.7749 27.5172C41.7749 28.1308 42.2723 28.6282 42.8859 28.6282Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 44.3875H25.6845V45.8873H24.1847V44.3875ZM23.5874 43.7902H26.2818V46.4846H23.5874V43.7902Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 47.7208H25.6845V49.2207H24.1847V47.7208ZM23.5874 47.1235H26.2818V49.8179H23.5874V47.1235Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 51.0542H25.6845V52.554H24.1847V51.0542ZM23.5874 50.4569H26.2818V53.1513H23.5874V50.4569Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 54.3875H25.6845V55.8873H24.1847V54.3875ZM23.5874 53.7902H26.2818V56.4846H23.5874V53.7902Z"
                                    fill="white" />
                                <path
                                    d="M32.9829 44.4149H27.1634C27.033 44.4149 26.9272 44.5206 26.9272 44.651C26.9272 44.7814 27.033 44.8871 27.1634 44.8871H32.9829C33.1133 44.8871 33.219 44.7814 33.219 44.651C33.219 44.5206 33.1133 44.4149 32.9829 44.4149Z"
                                    fill="white" />
                                <path
                                    d="M32.008 45.3878H27.1258C27.0164 45.3878 26.9277 45.4935 26.9277 45.6239C26.9277 45.7543 27.0164 45.86 27.1258 45.86H32.008C32.1174 45.86 32.2061 45.7543 32.2061 45.6239C32.2061 45.4935 32.1174 45.3878 32.008 45.3878Z"
                                    fill="white" />
                                <path
                                    d="M32.9546 47.7482H27.135C27.0046 47.7482 26.8989 47.8539 26.8989 47.9843C26.8989 48.1148 27.0046 48.2205 27.135 48.2205H32.9546C33.085 48.2205 33.1907 48.1148 33.1907 47.9843C33.1907 47.8539 33.085 47.7482 32.9546 47.7482Z"
                                    fill="white" />
                                <path
                                    d="M31.9791 48.7211H27.097C26.9876 48.7211 26.8989 48.8268 26.8989 48.9572C26.8989 49.0877 26.9876 49.1934 27.097 49.1934H31.9791C32.0886 49.1934 32.1773 49.0877 32.1773 48.9572C32.1773 48.8268 32.0886 48.7211 31.9791 48.7211Z"
                                    fill="white" />
                                <path
                                    d="M32.9263 51.0815H27.1067C26.9763 51.0815 26.8706 51.1873 26.8706 51.3177C26.8706 51.4481 26.9763 51.5538 27.1067 51.5538H32.9263C33.0567 51.5538 33.1624 51.4481 33.1624 51.3177C33.1624 51.1873 33.0567 51.0815 32.9263 51.0815Z"
                                    fill="white" />
                                <path
                                    d="M31.9508 52.0544H27.0687C26.9593 52.0544 26.8706 52.1602 26.8706 52.2906C26.8706 52.421 26.9593 52.5267 27.0687 52.5267H31.9508C32.0602 52.5267 32.1489 52.421 32.1489 52.2906C32.1489 52.1602 32.0602 52.0544 31.9508 52.0544Z"
                                    fill="white" />
                                <path
                                    d="M32.8975 54.4149H27.0779C26.9475 54.4149 26.8418 54.5206 26.8418 54.651C26.8418 54.7814 26.9475 54.8871 27.0779 54.8871H32.8975C33.0279 54.8871 33.1336 54.7814 33.1336 54.651C33.1336 54.5206 33.0279 54.4149 32.8975 54.4149Z"
                                    fill="white" />
                                <path
                                    d="M31.9225 55.3878H27.0404C26.931 55.3878 26.8423 55.4935 26.8423 55.6239C26.8423 55.7543 26.931 55.86 27.0404 55.86H31.9225C32.0319 55.86 32.1206 55.7543 32.1206 55.6239C32.1206 55.4935 32.0319 55.3878 31.9225 55.3878Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M44.2147 37.9382C49.0091 37.9382 52.8957 41.8249 52.8957 46.6192C52.8957 48.5299 52.278 50.2958 51.232 51.7297L58.9188 59.3C59.4625 59.8353 59.4692 60.718 58.9339 61.2617C58.3984 61.8053 57.5157 61.812 56.9721 61.2767L49.2616 53.6829C47.8394 54.701 46.0971 55.3003 44.2147 55.3003C39.4203 55.3003 35.5337 51.4136 35.5337 46.6192C35.5337 41.8249 39.4203 37.9382 44.2147 37.9382ZM44.2147 40.4441C47.6252 40.4441 50.3899 43.2087 50.3899 46.6192C50.3899 50.0297 47.6252 52.7944 44.2147 52.7944C40.8042 52.7944 38.0395 50.0297 38.0395 46.6192C38.0395 43.2087 40.8042 40.4441 44.2147 40.4441Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M42.2513 42.8722C41.7923 42.8722 41.6262 42.215 41.1924 42.215C40.7398 42.215 40.7137 42.2738 40.2888 42.6987C39.825 43.1625 39.536 43.5418 40.1244 44.1228C40.4894 44.4833 40.5999 44.4822 40.2324 45.2346C39.9818 45.7477 39.3643 45.2928 38.9276 45.6457C38.5942 45.9152 38.6732 46.5212 38.6732 46.9979C38.6732 47.5575 39.1077 47.7334 39.6223 47.7283C39.9808 47.7246 40.1045 47.697 40.2325 47.9579C40.2962 48.0879 40.4622 48.4759 40.4622 48.6044C40.4622 49.0932 39.805 48.9965 39.805 49.8092C39.805 50.1189 40.6336 50.8741 40.8222 50.9464C41.1231 51.0617 41.3802 50.981 41.5857 50.7865C42.1929 50.2115 42.0115 50.2219 42.7954 50.543C43.3402 50.7661 42.9041 51.3493 43.2003 51.8175C43.45 52.2126 44.0702 52.1094 44.6244 52.1094C44.8715 52.1094 45.0684 51.9718 45.1792 51.8244C45.513 51.38 45.074 50.7588 45.5793 50.5451C46.6781 50.0801 46.2042 50.4475 46.9384 50.8908C47.5234 51.2439 47.8588 50.7297 48.3953 50.1845C48.4633 50.1155 48.4942 50.0815 48.5324 49.9929C48.873 49.2004 47.8242 49.015 47.9312 48.5171C47.9619 48.3741 48.0603 48.1864 48.1187 48.0458C48.3227 47.5544 48.5308 47.7965 49.0708 47.7201C49.8467 47.6102 49.6995 46.8509 49.6995 46.1581C49.6995 45.8021 49.4277 45.5143 49.0801 45.4996C48.1378 45.46 48.3205 45.5472 48.0443 44.9654C47.9978 44.8675 47.9736 44.8431 47.9431 44.7346C47.8871 44.5358 47.9539 44.4156 48.0826 44.2857C48.7268 43.6356 48.8416 43.4565 48.1204 42.7353C47.7706 42.3855 47.7009 42.215 47.2532 42.215C46.7511 42.215 46.5706 42.8722 46.2309 42.8722C46.1107 42.8722 45.4771 42.6936 45.3584 42.4668C45.2962 42.3483 45.3161 42.2397 45.318 42.0691C45.3309 40.9409 44.7144 41.0831 43.7847 41.0831C43.5714 41.0831 43.3308 41.2201 43.2359 41.3375C43.0711 41.5413 43.088 41.6721 43.0915 42.0329C43.0946 42.3562 43.0681 42.512 42.8491 42.6302C42.7884 42.6628 42.2847 42.8722 42.2513 42.8722ZM44.1878 49.117C45.5782 49.117 46.7054 47.9899 46.7054 46.5994C46.7054 45.209 45.5782 44.0818 44.1878 44.0818C42.7974 44.0818 41.6702 45.209 41.6702 46.5994C41.6702 47.9899 42.7974 49.117 44.1878 49.117Z"
                                    fill="white" />
                            </svg>


                        </div>
                        <div class="dark:bg-colheaderdark bg-bgfondopricingwhite p-3 " style="min-height: 157px;">
                            <div class="text-lg dark:text-bgprogresb text-txtnamecomntpkyr  font-inter font-medium leading-7"
                                style="min-height: 50px;">
                                Planificación y Programación de Mantenimiento de plataformas industriales de produccion
                            </div>
                            <div class="font-inter font-normal text-sm">
                                <span class="dark:text-borderconcours text-gray-650"> Por:</span> <span
                                    class="italic text-greenactivo">Franklin
                                    Espinoza</span>
                            </div>
                            <div class="flex gap-x-6 pt-2">
                                <div class="flex items-center">

                                    <svg class="dark:text-pricingdarkstudents text-gray-650" width="16"
                                        height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.8777 4.21114C1.70613 5.38271 1.70613 7.2822 2.8777 8.45378L7.99905 13.5751L13.1203 8.45378C14.2919 7.2822 14.2919 5.38271 13.1203 4.21114C11.9488 3.03957 10.0493 3.03957 8.8777 4.21114L7.99905 5.08985L7.12034 4.21114C5.94877 3.03957 4.04927 3.03957 2.8777 4.21114Z"
                                            stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <div
                                        class="dark:text-pricingdarkstudents text-gray-650  font-inter font-normal text-sm pl-2">
                                        5
                                    </div>

                                </div>
                                <div class="flex items-center">

                                    <svg class="dark:text-pricingdarkstudents text-gray-650  font-inter font-medium text-sm "
                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.3335 13.3335H14.6668V12.0002C14.6668 10.8956 13.7714 10.0002 12.6668 10.0002C12.0298 10.0002 11.4623 10.2981 11.096 10.7621M11.3335 13.3335H4.66683M11.3335 13.3335V12.0002C11.3335 11.5627 11.2492 11.1449 11.096 10.7621M4.66683 13.3335H1.3335V12.0002C1.3335 10.8956 2.22893 10.0002 3.3335 10.0002C3.97057 10.0002 4.53807 10.2981 4.90432 10.7621M4.66683 13.3335V12.0002C4.66683 11.5627 4.75111 11.1449 4.90432 10.7621M4.90432 10.7621C5.39583 9.53422 6.5967 8.66687 8.00016 8.66687C9.40361 8.66687 10.6045 9.53422 11.096 10.7621M10.0002 4.66687C10.0002 5.77144 9.10473 6.66687 8.00016 6.66687C6.89559 6.66687 6.00016 5.77144 6.00016 4.66687C6.00016 3.5623 6.89559 2.66687 8.00016 2.66687C9.10473 2.66687 10.0002 3.5623 10.0002 4.66687ZM14.0002 6.66687C14.0002 7.40325 13.4032 8.0002 12.6668 8.0002C11.9304 8.0002 11.3335 7.40325 11.3335 6.66687C11.3335 5.93049 11.9304 5.33354 12.6668 5.33354C13.4032 5.33354 14.0002 5.93049 14.0002 6.66687ZM4.66683 6.66687C4.66683 7.40325 4.06987 8.0002 3.3335 8.0002C2.59712 8.0002 2.00016 7.40325 2.00016 6.66687C2.00016 5.93049 2.59712 5.33354 3.3335 5.33354C4.06987 5.33354 4.66683 5.93049 4.66683 6.66687Z"
                                            stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <div
                                        class="dark:text-pricingdarkstudents text-gray-650 font-inter font-normal text-sm pl-2">
                                        378
                                    </div>

                                </div>
                            </div>





                        </div>
                        <div
                            class="dark:bg-pricingdark bg-pricingcintawhite p-3 rounded-b-xl  items-center flex justify-between ">
                            <div class="flex flex-col font-inter font-medium ">

                                <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                    370 PEN
                                </div>
                                <div class="text-gray-400 line-through text-sm">
                                    740 PEN
                                </div>



                            </div>
                            <div>

                                <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                    Comprar
                                </button>


                            </div>
                        </div>

                    </div>

                    <div>
                        <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite pt-5 pb-7 rounded-t-xl ">
                            <svg class="mx-auto" width="81" height="80" viewBox="0 0 81 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M40.5001 80.0001C62.5915 80.0001 80.5002 62.0914 80.5002 40C80.5002 17.9085 62.5915 -0.00012207 40.5001 -0.00012207C18.4087 -0.00012207 0.5 17.9085 0.5 40C0.5 62.0914 18.4087 80.0001 40.5001 80.0001Z"
                                    fill="#999999" />
                                <path
                                    d="M40.4999 74.9682C59.8123 74.9682 75.4681 59.3124 75.4681 40C75.4681 20.6876 59.8123 5.0318 40.4999 5.0318C21.1875 5.0318 5.53174 20.6876 5.53174 40C5.53174 59.3124 21.1875 74.9682 40.4999 74.9682Z"
                                    fill="#424F4F" />
                                <path
                                    d="M40.5001 72.192C58.2793 72.192 72.6921 57.7791 72.6921 40C72.6921 22.2208 58.2793 7.80798 40.5001 7.80798C22.721 7.80798 8.30811 22.2208 8.30811 40C8.30811 57.7791 22.721 72.192 40.5001 72.192Z"
                                    fill="#424F4F" />
                                <path d="M52.4496 58.7395H21.6689V18.3262H47.1923L52.4496 24.5895V40.2117" stroke="white"
                                    stroke-width="1.42404" stroke-miterlimit="22.9256" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M47.1921 18.3262L46.2534 24.6682L52.4494 24.5895L47.1921 18.3262Z" stroke="white"
                                    stroke-width="1.42404" stroke-miterlimit="22.9256" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M41.4626 34.5383L42.6641 28.606M23.0801 41.9061L26.9162 33.691L23.0801 41.9061ZM28.0696 33.5594L30.8957 37.9438L32.1593 37.9864L33.9366 34.5072L28.0696 33.5594ZM35.5521 33.5172L40.0252 35.6005L35.5521 33.5172Z"
                                    stroke="white" stroke-width="0.711966" stroke-miterlimit="22.9256"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M27.3859 33.7948C27.9995 33.7948 28.4968 33.2974 28.4968 32.6838C28.4968 32.0702 27.9995 31.5728 27.3859 31.5728C26.7723 31.5728 26.2749 32.0702 26.2749 32.6838C26.2749 33.2974 26.7723 33.7948 27.3859 33.7948Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M31.4967 39.9892C32.1103 39.9892 32.6077 39.4918 32.6077 38.8782C32.6077 38.2647 32.1103 37.7673 31.4967 37.7673C30.8831 37.7673 30.3857 38.2647 30.3857 38.8782C30.3857 39.4918 30.8831 39.9892 31.4967 39.9892Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M34.4415 34.6282C35.0551 34.6282 35.5525 34.1308 35.5525 33.5172C35.5525 32.9037 35.0551 32.4062 34.4415 32.4062C33.828 32.4062 33.3306 32.9037 33.3306 33.5172C33.3306 34.1308 33.828 34.6282 34.4415 34.6282Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M41.1359 36.7114C41.7495 36.7114 42.2468 36.214 42.2468 35.6005C42.2468 34.9869 41.7495 34.4895 41.1359 34.4895C40.5223 34.4895 40.0249 34.9869 40.0249 35.6005C40.0249 36.214 40.5223 36.7114 41.1359 36.7114Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M42.8859 28.6282C43.4995 28.6282 43.9969 28.1308 43.9969 27.5172C43.9969 26.9037 43.4995 26.4062 42.8859 26.4062C42.2723 26.4062 41.7749 26.9037 41.7749 27.5172C41.7749 28.1308 42.2723 28.6282 42.8859 28.6282Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 44.3875H25.6845V45.8873H24.1847V44.3875ZM23.5874 43.7902H26.2818V46.4846H23.5874V43.7902Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 47.7208H25.6845V49.2207H24.1847V47.7208ZM23.5874 47.1235H26.2818V49.8179H23.5874V47.1235Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 51.0542H25.6845V52.554H24.1847V51.0542ZM23.5874 50.4569H26.2818V53.1513H23.5874V50.4569Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 54.3875H25.6845V55.8873H24.1847V54.3875ZM23.5874 53.7902H26.2818V56.4846H23.5874V53.7902Z"
                                    fill="white" />
                                <path
                                    d="M32.9829 44.4149H27.1634C27.033 44.4149 26.9272 44.5206 26.9272 44.651C26.9272 44.7814 27.033 44.8871 27.1634 44.8871H32.9829C33.1133 44.8871 33.219 44.7814 33.219 44.651C33.219 44.5206 33.1133 44.4149 32.9829 44.4149Z"
                                    fill="white" />
                                <path
                                    d="M32.008 45.3878H27.1258C27.0164 45.3878 26.9277 45.4935 26.9277 45.6239C26.9277 45.7543 27.0164 45.86 27.1258 45.86H32.008C32.1174 45.86 32.2061 45.7543 32.2061 45.6239C32.2061 45.4935 32.1174 45.3878 32.008 45.3878Z"
                                    fill="white" />
                                <path
                                    d="M32.9546 47.7482H27.135C27.0046 47.7482 26.8989 47.8539 26.8989 47.9843C26.8989 48.1148 27.0046 48.2205 27.135 48.2205H32.9546C33.085 48.2205 33.1907 48.1148 33.1907 47.9843C33.1907 47.8539 33.085 47.7482 32.9546 47.7482Z"
                                    fill="white" />
                                <path
                                    d="M31.9791 48.7211H27.097C26.9876 48.7211 26.8989 48.8268 26.8989 48.9572C26.8989 49.0877 26.9876 49.1934 27.097 49.1934H31.9791C32.0886 49.1934 32.1773 49.0877 32.1773 48.9572C32.1773 48.8268 32.0886 48.7211 31.9791 48.7211Z"
                                    fill="white" />
                                <path
                                    d="M32.9263 51.0815H27.1067C26.9763 51.0815 26.8706 51.1873 26.8706 51.3177C26.8706 51.4481 26.9763 51.5538 27.1067 51.5538H32.9263C33.0567 51.5538 33.1624 51.4481 33.1624 51.3177C33.1624 51.1873 33.0567 51.0815 32.9263 51.0815Z"
                                    fill="white" />
                                <path
                                    d="M31.9508 52.0544H27.0687C26.9593 52.0544 26.8706 52.1602 26.8706 52.2906C26.8706 52.421 26.9593 52.5267 27.0687 52.5267H31.9508C32.0602 52.5267 32.1489 52.421 32.1489 52.2906C32.1489 52.1602 32.0602 52.0544 31.9508 52.0544Z"
                                    fill="white" />
                                <path
                                    d="M32.8975 54.4149H27.0779C26.9475 54.4149 26.8418 54.5206 26.8418 54.651C26.8418 54.7814 26.9475 54.8871 27.0779 54.8871H32.8975C33.0279 54.8871 33.1336 54.7814 33.1336 54.651C33.1336 54.5206 33.0279 54.4149 32.8975 54.4149Z"
                                    fill="white" />
                                <path
                                    d="M31.9225 55.3878H27.0404C26.931 55.3878 26.8423 55.4935 26.8423 55.6239C26.8423 55.7543 26.931 55.86 27.0404 55.86H31.9225C32.0319 55.86 32.1206 55.7543 32.1206 55.6239C32.1206 55.4935 32.0319 55.3878 31.9225 55.3878Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M44.2147 37.9382C49.0091 37.9382 52.8957 41.8249 52.8957 46.6192C52.8957 48.5299 52.278 50.2958 51.232 51.7297L58.9188 59.3C59.4625 59.8353 59.4692 60.718 58.9339 61.2617C58.3984 61.8053 57.5157 61.812 56.9721 61.2767L49.2616 53.6829C47.8394 54.701 46.0971 55.3003 44.2147 55.3003C39.4203 55.3003 35.5337 51.4136 35.5337 46.6192C35.5337 41.8249 39.4203 37.9382 44.2147 37.9382ZM44.2147 40.4441C47.6252 40.4441 50.3899 43.2087 50.3899 46.6192C50.3899 50.0297 47.6252 52.7944 44.2147 52.7944C40.8042 52.7944 38.0395 50.0297 38.0395 46.6192C38.0395 43.2087 40.8042 40.4441 44.2147 40.4441Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M42.2513 42.8722C41.7923 42.8722 41.6262 42.215 41.1924 42.215C40.7398 42.215 40.7137 42.2738 40.2888 42.6987C39.825 43.1625 39.536 43.5418 40.1244 44.1228C40.4894 44.4833 40.5999 44.4822 40.2324 45.2346C39.9818 45.7477 39.3643 45.2928 38.9276 45.6457C38.5942 45.9152 38.6732 46.5212 38.6732 46.9979C38.6732 47.5575 39.1077 47.7334 39.6223 47.7283C39.9808 47.7246 40.1045 47.697 40.2325 47.9579C40.2962 48.0879 40.4622 48.4759 40.4622 48.6044C40.4622 49.0932 39.805 48.9965 39.805 49.8092C39.805 50.1189 40.6336 50.8741 40.8222 50.9464C41.1231 51.0617 41.3802 50.981 41.5857 50.7865C42.1929 50.2115 42.0115 50.2219 42.7954 50.543C43.3402 50.7661 42.9041 51.3493 43.2003 51.8175C43.45 52.2126 44.0702 52.1094 44.6244 52.1094C44.8715 52.1094 45.0684 51.9718 45.1792 51.8244C45.513 51.38 45.074 50.7588 45.5793 50.5451C46.6781 50.0801 46.2042 50.4475 46.9384 50.8908C47.5234 51.2439 47.8588 50.7297 48.3953 50.1845C48.4633 50.1155 48.4942 50.0815 48.5324 49.9929C48.873 49.2004 47.8242 49.015 47.9312 48.5171C47.9619 48.3741 48.0603 48.1864 48.1187 48.0458C48.3227 47.5544 48.5308 47.7965 49.0708 47.7201C49.8467 47.6102 49.6995 46.8509 49.6995 46.1581C49.6995 45.8021 49.4277 45.5143 49.0801 45.4996C48.1378 45.46 48.3205 45.5472 48.0443 44.9654C47.9978 44.8675 47.9736 44.8431 47.9431 44.7346C47.8871 44.5358 47.9539 44.4156 48.0826 44.2857C48.7268 43.6356 48.8416 43.4565 48.1204 42.7353C47.7706 42.3855 47.7009 42.215 47.2532 42.215C46.7511 42.215 46.5706 42.8722 46.2309 42.8722C46.1107 42.8722 45.4771 42.6936 45.3584 42.4668C45.2962 42.3483 45.3161 42.2397 45.318 42.0691C45.3309 40.9409 44.7144 41.0831 43.7847 41.0831C43.5714 41.0831 43.3308 41.2201 43.2359 41.3375C43.0711 41.5413 43.088 41.6721 43.0915 42.0329C43.0946 42.3562 43.0681 42.512 42.8491 42.6302C42.7884 42.6628 42.2847 42.8722 42.2513 42.8722ZM44.1878 49.117C45.5782 49.117 46.7054 47.9899 46.7054 46.5994C46.7054 45.209 45.5782 44.0818 44.1878 44.0818C42.7974 44.0818 41.6702 45.209 41.6702 46.5994C41.6702 47.9899 42.7974 49.117 44.1878 49.117Z"
                                    fill="white" />
                            </svg>


                        </div>
                        <div class="dark:bg-colheaderdark bg-bgfondopricingwhite p-3 " style="min-height: 157px;">
                            <div
                                class="text-lg dark:text-bgprogresb text-txtnamecomntpkyr max-h-20 font-inter font-medium leading-7">
                                Mantenimiento Productivo aplicado en Procesos Industriales
                            </div>
                            <div class="font-inter font-normal text-sm">
                                <span class="dark:text-borderconcours text-gray-650"> Por:</span> <span
                                    class="italic text-greenactivo">Franklin
                                    Espinoza</span>
                            </div>
                            <div class="flex gap-x-6 pt-2">
                                <div class="flex items-center">

                                    <svg class="dark:text-pricingdarkstudents text-gray-650" width="16"
                                        height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.8777 4.21114C1.70613 5.38271 1.70613 7.2822 2.8777 8.45378L7.99905 13.5751L13.1203 8.45378C14.2919 7.2822 14.2919 5.38271 13.1203 4.21114C11.9488 3.03957 10.0493 3.03957 8.8777 4.21114L7.99905 5.08985L7.12034 4.21114C5.94877 3.03957 4.04927 3.03957 2.8777 4.21114Z"
                                            stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <div
                                        class="dark:text-pricingdarkstudents text-gray-650  font-inter font-normal text-sm pl-2">
                                        5
                                    </div>

                                </div>
                                <div class="flex items-center">

                                    <svg class="dark:text-pricingdarkstudents text-gray-650  font-inter font-medium text-sm "
                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.3335 13.3335H14.6668V12.0002C14.6668 10.8956 13.7714 10.0002 12.6668 10.0002C12.0298 10.0002 11.4623 10.2981 11.096 10.7621M11.3335 13.3335H4.66683M11.3335 13.3335V12.0002C11.3335 11.5627 11.2492 11.1449 11.096 10.7621M4.66683 13.3335H1.3335V12.0002C1.3335 10.8956 2.22893 10.0002 3.3335 10.0002C3.97057 10.0002 4.53807 10.2981 4.90432 10.7621M4.66683 13.3335V12.0002C4.66683 11.5627 4.75111 11.1449 4.90432 10.7621M4.90432 10.7621C5.39583 9.53422 6.5967 8.66687 8.00016 8.66687C9.40361 8.66687 10.6045 9.53422 11.096 10.7621M10.0002 4.66687C10.0002 5.77144 9.10473 6.66687 8.00016 6.66687C6.89559 6.66687 6.00016 5.77144 6.00016 4.66687C6.00016 3.5623 6.89559 2.66687 8.00016 2.66687C9.10473 2.66687 10.0002 3.5623 10.0002 4.66687ZM14.0002 6.66687C14.0002 7.40325 13.4032 8.0002 12.6668 8.0002C11.9304 8.0002 11.3335 7.40325 11.3335 6.66687C11.3335 5.93049 11.9304 5.33354 12.6668 5.33354C13.4032 5.33354 14.0002 5.93049 14.0002 6.66687ZM4.66683 6.66687C4.66683 7.40325 4.06987 8.0002 3.3335 8.0002C2.59712 8.0002 2.00016 7.40325 2.00016 6.66687C2.00016 5.93049 2.59712 5.33354 3.3335 5.33354C4.06987 5.33354 4.66683 5.93049 4.66683 6.66687Z"
                                            stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <div
                                        class="dark:text-pricingdarkstudents text-gray-650 font-inter font-normal text-sm pl-2">
                                        378
                                    </div>

                                </div>
                            </div>





                        </div>
                        <div
                            class="dark:bg-pricingdark bg-pricingcintawhite p-3 rounded-b-xl  items-center flex justify-between ">
                            <div class="flex flex-col font-inter font-medium ">

                                <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                    370 PEN
                                </div>
                                <div class="text-gray-400 line-through text-sm">
                                    740 PEN
                                </div>



                            </div>
                            <div>

                                <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                    Comprar
                                </button>


                            </div>
                        </div>

                    </div>
                    <div>
                        <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite pt-5 pb-7 rounded-t-xl ">
                            <svg class="mx-auto" width="81" height="80" viewBox="0 0 81 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M40.5001 80.0001C62.5915 80.0001 80.5002 62.0914 80.5002 40C80.5002 17.9085 62.5915 -0.00012207 40.5001 -0.00012207C18.4087 -0.00012207 0.5 17.9085 0.5 40C0.5 62.0914 18.4087 80.0001 40.5001 80.0001Z"
                                    fill="#999999" />
                                <path
                                    d="M40.4999 74.9682C59.8123 74.9682 75.4681 59.3124 75.4681 40C75.4681 20.6876 59.8123 5.0318 40.4999 5.0318C21.1875 5.0318 5.53174 20.6876 5.53174 40C5.53174 59.3124 21.1875 74.9682 40.4999 74.9682Z"
                                    fill="#424F4F" />
                                <path
                                    d="M40.5001 72.192C58.2793 72.192 72.6921 57.7791 72.6921 40C72.6921 22.2208 58.2793 7.80798 40.5001 7.80798C22.721 7.80798 8.30811 22.2208 8.30811 40C8.30811 57.7791 22.721 72.192 40.5001 72.192Z"
                                    fill="#424F4F" />
                                <path d="M52.4496 58.7395H21.6689V18.3262H47.1923L52.4496 24.5895V40.2117" stroke="white"
                                    stroke-width="1.42404" stroke-miterlimit="22.9256" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M47.1921 18.3262L46.2534 24.6682L52.4494 24.5895L47.1921 18.3262Z" stroke="white"
                                    stroke-width="1.42404" stroke-miterlimit="22.9256" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M41.4626 34.5383L42.6641 28.606M23.0801 41.9061L26.9162 33.691L23.0801 41.9061ZM28.0696 33.5594L30.8957 37.9438L32.1593 37.9864L33.9366 34.5072L28.0696 33.5594ZM35.5521 33.5172L40.0252 35.6005L35.5521 33.5172Z"
                                    stroke="white" stroke-width="0.711966" stroke-miterlimit="22.9256"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M27.3859 33.7948C27.9995 33.7948 28.4968 33.2974 28.4968 32.6838C28.4968 32.0702 27.9995 31.5728 27.3859 31.5728C26.7723 31.5728 26.2749 32.0702 26.2749 32.6838C26.2749 33.2974 26.7723 33.7948 27.3859 33.7948Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M31.4967 39.9892C32.1103 39.9892 32.6077 39.4918 32.6077 38.8782C32.6077 38.2647 32.1103 37.7673 31.4967 37.7673C30.8831 37.7673 30.3857 38.2647 30.3857 38.8782C30.3857 39.4918 30.8831 39.9892 31.4967 39.9892Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M34.4415 34.6282C35.0551 34.6282 35.5525 34.1308 35.5525 33.5172C35.5525 32.9037 35.0551 32.4062 34.4415 32.4062C33.828 32.4062 33.3306 32.9037 33.3306 33.5172C33.3306 34.1308 33.828 34.6282 34.4415 34.6282Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M41.1359 36.7114C41.7495 36.7114 42.2468 36.214 42.2468 35.6005C42.2468 34.9869 41.7495 34.4895 41.1359 34.4895C40.5223 34.4895 40.0249 34.9869 40.0249 35.6005C40.0249 36.214 40.5223 36.7114 41.1359 36.7114Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M42.8859 28.6282C43.4995 28.6282 43.9969 28.1308 43.9969 27.5172C43.9969 26.9037 43.4995 26.4062 42.8859 26.4062C42.2723 26.4062 41.7749 26.9037 41.7749 27.5172C41.7749 28.1308 42.2723 28.6282 42.8859 28.6282Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 44.3875H25.6845V45.8873H24.1847V44.3875ZM23.5874 43.7902H26.2818V46.4846H23.5874V43.7902Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 47.7208H25.6845V49.2207H24.1847V47.7208ZM23.5874 47.1235H26.2818V49.8179H23.5874V47.1235Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 51.0542H25.6845V52.554H24.1847V51.0542ZM23.5874 50.4569H26.2818V53.1513H23.5874V50.4569Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 54.3875H25.6845V55.8873H24.1847V54.3875ZM23.5874 53.7902H26.2818V56.4846H23.5874V53.7902Z"
                                    fill="white" />
                                <path
                                    d="M32.9829 44.4149H27.1634C27.033 44.4149 26.9272 44.5206 26.9272 44.651C26.9272 44.7814 27.033 44.8871 27.1634 44.8871H32.9829C33.1133 44.8871 33.219 44.7814 33.219 44.651C33.219 44.5206 33.1133 44.4149 32.9829 44.4149Z"
                                    fill="white" />
                                <path
                                    d="M32.008 45.3878H27.1258C27.0164 45.3878 26.9277 45.4935 26.9277 45.6239C26.9277 45.7543 27.0164 45.86 27.1258 45.86H32.008C32.1174 45.86 32.2061 45.7543 32.2061 45.6239C32.2061 45.4935 32.1174 45.3878 32.008 45.3878Z"
                                    fill="white" />
                                <path
                                    d="M32.9546 47.7482H27.135C27.0046 47.7482 26.8989 47.8539 26.8989 47.9843C26.8989 48.1148 27.0046 48.2205 27.135 48.2205H32.9546C33.085 48.2205 33.1907 48.1148 33.1907 47.9843C33.1907 47.8539 33.085 47.7482 32.9546 47.7482Z"
                                    fill="white" />
                                <path
                                    d="M31.9791 48.7211H27.097C26.9876 48.7211 26.8989 48.8268 26.8989 48.9572C26.8989 49.0877 26.9876 49.1934 27.097 49.1934H31.9791C32.0886 49.1934 32.1773 49.0877 32.1773 48.9572C32.1773 48.8268 32.0886 48.7211 31.9791 48.7211Z"
                                    fill="white" />
                                <path
                                    d="M32.9263 51.0815H27.1067C26.9763 51.0815 26.8706 51.1873 26.8706 51.3177C26.8706 51.4481 26.9763 51.5538 27.1067 51.5538H32.9263C33.0567 51.5538 33.1624 51.4481 33.1624 51.3177C33.1624 51.1873 33.0567 51.0815 32.9263 51.0815Z"
                                    fill="white" />
                                <path
                                    d="M31.9508 52.0544H27.0687C26.9593 52.0544 26.8706 52.1602 26.8706 52.2906C26.8706 52.421 26.9593 52.5267 27.0687 52.5267H31.9508C32.0602 52.5267 32.1489 52.421 32.1489 52.2906C32.1489 52.1602 32.0602 52.0544 31.9508 52.0544Z"
                                    fill="white" />
                                <path
                                    d="M32.8975 54.4149H27.0779C26.9475 54.4149 26.8418 54.5206 26.8418 54.651C26.8418 54.7814 26.9475 54.8871 27.0779 54.8871H32.8975C33.0279 54.8871 33.1336 54.7814 33.1336 54.651C33.1336 54.5206 33.0279 54.4149 32.8975 54.4149Z"
                                    fill="white" />
                                <path
                                    d="M31.9225 55.3878H27.0404C26.931 55.3878 26.8423 55.4935 26.8423 55.6239C26.8423 55.7543 26.931 55.86 27.0404 55.86H31.9225C32.0319 55.86 32.1206 55.7543 32.1206 55.6239C32.1206 55.4935 32.0319 55.3878 31.9225 55.3878Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M44.2147 37.9382C49.0091 37.9382 52.8957 41.8249 52.8957 46.6192C52.8957 48.5299 52.278 50.2958 51.232 51.7297L58.9188 59.3C59.4625 59.8353 59.4692 60.718 58.9339 61.2617C58.3984 61.8053 57.5157 61.812 56.9721 61.2767L49.2616 53.6829C47.8394 54.701 46.0971 55.3003 44.2147 55.3003C39.4203 55.3003 35.5337 51.4136 35.5337 46.6192C35.5337 41.8249 39.4203 37.9382 44.2147 37.9382ZM44.2147 40.4441C47.6252 40.4441 50.3899 43.2087 50.3899 46.6192C50.3899 50.0297 47.6252 52.7944 44.2147 52.7944C40.8042 52.7944 38.0395 50.0297 38.0395 46.6192C38.0395 43.2087 40.8042 40.4441 44.2147 40.4441Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M42.2513 42.8722C41.7923 42.8722 41.6262 42.215 41.1924 42.215C40.7398 42.215 40.7137 42.2738 40.2888 42.6987C39.825 43.1625 39.536 43.5418 40.1244 44.1228C40.4894 44.4833 40.5999 44.4822 40.2324 45.2346C39.9818 45.7477 39.3643 45.2928 38.9276 45.6457C38.5942 45.9152 38.6732 46.5212 38.6732 46.9979C38.6732 47.5575 39.1077 47.7334 39.6223 47.7283C39.9808 47.7246 40.1045 47.697 40.2325 47.9579C40.2962 48.0879 40.4622 48.4759 40.4622 48.6044C40.4622 49.0932 39.805 48.9965 39.805 49.8092C39.805 50.1189 40.6336 50.8741 40.8222 50.9464C41.1231 51.0617 41.3802 50.981 41.5857 50.7865C42.1929 50.2115 42.0115 50.2219 42.7954 50.543C43.3402 50.7661 42.9041 51.3493 43.2003 51.8175C43.45 52.2126 44.0702 52.1094 44.6244 52.1094C44.8715 52.1094 45.0684 51.9718 45.1792 51.8244C45.513 51.38 45.074 50.7588 45.5793 50.5451C46.6781 50.0801 46.2042 50.4475 46.9384 50.8908C47.5234 51.2439 47.8588 50.7297 48.3953 50.1845C48.4633 50.1155 48.4942 50.0815 48.5324 49.9929C48.873 49.2004 47.8242 49.015 47.9312 48.5171C47.9619 48.3741 48.0603 48.1864 48.1187 48.0458C48.3227 47.5544 48.5308 47.7965 49.0708 47.7201C49.8467 47.6102 49.6995 46.8509 49.6995 46.1581C49.6995 45.8021 49.4277 45.5143 49.0801 45.4996C48.1378 45.46 48.3205 45.5472 48.0443 44.9654C47.9978 44.8675 47.9736 44.8431 47.9431 44.7346C47.8871 44.5358 47.9539 44.4156 48.0826 44.2857C48.7268 43.6356 48.8416 43.4565 48.1204 42.7353C47.7706 42.3855 47.7009 42.215 47.2532 42.215C46.7511 42.215 46.5706 42.8722 46.2309 42.8722C46.1107 42.8722 45.4771 42.6936 45.3584 42.4668C45.2962 42.3483 45.3161 42.2397 45.318 42.0691C45.3309 40.9409 44.7144 41.0831 43.7847 41.0831C43.5714 41.0831 43.3308 41.2201 43.2359 41.3375C43.0711 41.5413 43.088 41.6721 43.0915 42.0329C43.0946 42.3562 43.0681 42.512 42.8491 42.6302C42.7884 42.6628 42.2847 42.8722 42.2513 42.8722ZM44.1878 49.117C45.5782 49.117 46.7054 47.9899 46.7054 46.5994C46.7054 45.209 45.5782 44.0818 44.1878 44.0818C42.7974 44.0818 41.6702 45.209 41.6702 46.5994C41.6702 47.9899 42.7974 49.117 44.1878 49.117Z"
                                    fill="white" />
                            </svg>


                        </div>
                        <div class="dark:bg-colheaderdark bg-bgfondopricingwhite p-3 " style="min-height: 157px;">
                            <div
                                class="text-lg dark:text-bgprogresb text-txtnamecomntpkyr max-h-20 font-inter font-medium leading-7">
                                Mantenimiento Productivo aplicado en Procesos Industriales
                            </div>
                            <div class="font-inter font-normal text-sm">
                                <span class="dark:text-borderconcours text-gray-650"> Por:</span> <span
                                    class="italic text-greenactivo">Franklin
                                    Espinoza</span>
                            </div>
                            <div class="flex gap-x-6 pt-2">
                                <div class="flex items-center">

                                    <svg class="dark:text-pricingdarkstudents text-gray-650" width="16"
                                        height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.8777 4.21114C1.70613 5.38271 1.70613 7.2822 2.8777 8.45378L7.99905 13.5751L13.1203 8.45378C14.2919 7.2822 14.2919 5.38271 13.1203 4.21114C11.9488 3.03957 10.0493 3.03957 8.8777 4.21114L7.99905 5.08985L7.12034 4.21114C5.94877 3.03957 4.04927 3.03957 2.8777 4.21114Z"
                                            stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <div
                                        class="dark:text-pricingdarkstudents text-gray-650  font-inter font-normal text-sm pl-2">
                                        5
                                    </div>

                                </div>
                                <div class="flex items-center">

                                    <svg class="dark:text-pricingdarkstudents text-gray-650  font-inter font-medium text-sm "
                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.3335 13.3335H14.6668V12.0002C14.6668 10.8956 13.7714 10.0002 12.6668 10.0002C12.0298 10.0002 11.4623 10.2981 11.096 10.7621M11.3335 13.3335H4.66683M11.3335 13.3335V12.0002C11.3335 11.5627 11.2492 11.1449 11.096 10.7621M4.66683 13.3335H1.3335V12.0002C1.3335 10.8956 2.22893 10.0002 3.3335 10.0002C3.97057 10.0002 4.53807 10.2981 4.90432 10.7621M4.66683 13.3335V12.0002C4.66683 11.5627 4.75111 11.1449 4.90432 10.7621M4.90432 10.7621C5.39583 9.53422 6.5967 8.66687 8.00016 8.66687C9.40361 8.66687 10.6045 9.53422 11.096 10.7621M10.0002 4.66687C10.0002 5.77144 9.10473 6.66687 8.00016 6.66687C6.89559 6.66687 6.00016 5.77144 6.00016 4.66687C6.00016 3.5623 6.89559 2.66687 8.00016 2.66687C9.10473 2.66687 10.0002 3.5623 10.0002 4.66687ZM14.0002 6.66687C14.0002 7.40325 13.4032 8.0002 12.6668 8.0002C11.9304 8.0002 11.3335 7.40325 11.3335 6.66687C11.3335 5.93049 11.9304 5.33354 12.6668 5.33354C13.4032 5.33354 14.0002 5.93049 14.0002 6.66687ZM4.66683 6.66687C4.66683 7.40325 4.06987 8.0002 3.3335 8.0002C2.59712 8.0002 2.00016 7.40325 2.00016 6.66687C2.00016 5.93049 2.59712 5.33354 3.3335 5.33354C4.06987 5.33354 4.66683 5.93049 4.66683 6.66687Z"
                                            stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <div
                                        class="dark:text-pricingdarkstudents text-gray-650 font-inter font-normal text-sm pl-2">
                                        378
                                    </div>

                                </div>
                            </div>





                        </div>
                        <div
                            class="dark:bg-pricingdark bg-pricingcintawhite p-3 rounded-b-xl  items-center flex justify-between ">
                            <div class="flex flex-col font-inter font-medium ">

                                <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                    370 PEN
                                </div>
                                <div class="text-gray-400 line-through text-sm">
                                    740 PEN
                                </div>



                            </div>
                            <div>

                                <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                    Comprar
                                </button>


                            </div>
                        </div>

                    </div>
                    <div>
                        <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite pt-5 pb-7 rounded-t-xl ">
                            <svg class="mx-auto" width="81" height="80" viewBox="0 0 81 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M40.5001 80.0001C62.5915 80.0001 80.5002 62.0914 80.5002 40C80.5002 17.9085 62.5915 -0.00012207 40.5001 -0.00012207C18.4087 -0.00012207 0.5 17.9085 0.5 40C0.5 62.0914 18.4087 80.0001 40.5001 80.0001Z"
                                    fill="#999999" />
                                <path
                                    d="M40.4999 74.9682C59.8123 74.9682 75.4681 59.3124 75.4681 40C75.4681 20.6876 59.8123 5.0318 40.4999 5.0318C21.1875 5.0318 5.53174 20.6876 5.53174 40C5.53174 59.3124 21.1875 74.9682 40.4999 74.9682Z"
                                    fill="#424F4F" />
                                <path
                                    d="M40.5001 72.192C58.2793 72.192 72.6921 57.7791 72.6921 40C72.6921 22.2208 58.2793 7.80798 40.5001 7.80798C22.721 7.80798 8.30811 22.2208 8.30811 40C8.30811 57.7791 22.721 72.192 40.5001 72.192Z"
                                    fill="#424F4F" />
                                <path d="M52.4496 58.7395H21.6689V18.3262H47.1923L52.4496 24.5895V40.2117" stroke="white"
                                    stroke-width="1.42404" stroke-miterlimit="22.9256" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M47.1921 18.3262L46.2534 24.6682L52.4494 24.5895L47.1921 18.3262Z" stroke="white"
                                    stroke-width="1.42404" stroke-miterlimit="22.9256" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M41.4626 34.5383L42.6641 28.606M23.0801 41.9061L26.9162 33.691L23.0801 41.9061ZM28.0696 33.5594L30.8957 37.9438L32.1593 37.9864L33.9366 34.5072L28.0696 33.5594ZM35.5521 33.5172L40.0252 35.6005L35.5521 33.5172Z"
                                    stroke="white" stroke-width="0.711966" stroke-miterlimit="22.9256"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M27.3859 33.7948C27.9995 33.7948 28.4968 33.2974 28.4968 32.6838C28.4968 32.0702 27.9995 31.5728 27.3859 31.5728C26.7723 31.5728 26.2749 32.0702 26.2749 32.6838C26.2749 33.2974 26.7723 33.7948 27.3859 33.7948Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M31.4967 39.9892C32.1103 39.9892 32.6077 39.4918 32.6077 38.8782C32.6077 38.2647 32.1103 37.7673 31.4967 37.7673C30.8831 37.7673 30.3857 38.2647 30.3857 38.8782C30.3857 39.4918 30.8831 39.9892 31.4967 39.9892Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M34.4415 34.6282C35.0551 34.6282 35.5525 34.1308 35.5525 33.5172C35.5525 32.9037 35.0551 32.4062 34.4415 32.4062C33.828 32.4062 33.3306 32.9037 33.3306 33.5172C33.3306 34.1308 33.828 34.6282 34.4415 34.6282Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M41.1359 36.7114C41.7495 36.7114 42.2468 36.214 42.2468 35.6005C42.2468 34.9869 41.7495 34.4895 41.1359 34.4895C40.5223 34.4895 40.0249 34.9869 40.0249 35.6005C40.0249 36.214 40.5223 36.7114 41.1359 36.7114Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M42.8859 28.6282C43.4995 28.6282 43.9969 28.1308 43.9969 27.5172C43.9969 26.9037 43.4995 26.4062 42.8859 26.4062C42.2723 26.4062 41.7749 26.9037 41.7749 27.5172C41.7749 28.1308 42.2723 28.6282 42.8859 28.6282Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 44.3875H25.6845V45.8873H24.1847V44.3875ZM23.5874 43.7902H26.2818V46.4846H23.5874V43.7902Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 47.7208H25.6845V49.2207H24.1847V47.7208ZM23.5874 47.1235H26.2818V49.8179H23.5874V47.1235Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 51.0542H25.6845V52.554H24.1847V51.0542ZM23.5874 50.4569H26.2818V53.1513H23.5874V50.4569Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 54.3875H25.6845V55.8873H24.1847V54.3875ZM23.5874 53.7902H26.2818V56.4846H23.5874V53.7902Z"
                                    fill="white" />
                                <path
                                    d="M32.9829 44.4149H27.1634C27.033 44.4149 26.9272 44.5206 26.9272 44.651C26.9272 44.7814 27.033 44.8871 27.1634 44.8871H32.9829C33.1133 44.8871 33.219 44.7814 33.219 44.651C33.219 44.5206 33.1133 44.4149 32.9829 44.4149Z"
                                    fill="white" />
                                <path
                                    d="M32.008 45.3878H27.1258C27.0164 45.3878 26.9277 45.4935 26.9277 45.6239C26.9277 45.7543 27.0164 45.86 27.1258 45.86H32.008C32.1174 45.86 32.2061 45.7543 32.2061 45.6239C32.2061 45.4935 32.1174 45.3878 32.008 45.3878Z"
                                    fill="white" />
                                <path
                                    d="M32.9546 47.7482H27.135C27.0046 47.7482 26.8989 47.8539 26.8989 47.9843C26.8989 48.1148 27.0046 48.2205 27.135 48.2205H32.9546C33.085 48.2205 33.1907 48.1148 33.1907 47.9843C33.1907 47.8539 33.085 47.7482 32.9546 47.7482Z"
                                    fill="white" />
                                <path
                                    d="M31.9791 48.7211H27.097C26.9876 48.7211 26.8989 48.8268 26.8989 48.9572C26.8989 49.0877 26.9876 49.1934 27.097 49.1934H31.9791C32.0886 49.1934 32.1773 49.0877 32.1773 48.9572C32.1773 48.8268 32.0886 48.7211 31.9791 48.7211Z"
                                    fill="white" />
                                <path
                                    d="M32.9263 51.0815H27.1067C26.9763 51.0815 26.8706 51.1873 26.8706 51.3177C26.8706 51.4481 26.9763 51.5538 27.1067 51.5538H32.9263C33.0567 51.5538 33.1624 51.4481 33.1624 51.3177C33.1624 51.1873 33.0567 51.0815 32.9263 51.0815Z"
                                    fill="white" />
                                <path
                                    d="M31.9508 52.0544H27.0687C26.9593 52.0544 26.8706 52.1602 26.8706 52.2906C26.8706 52.421 26.9593 52.5267 27.0687 52.5267H31.9508C32.0602 52.5267 32.1489 52.421 32.1489 52.2906C32.1489 52.1602 32.0602 52.0544 31.9508 52.0544Z"
                                    fill="white" />
                                <path
                                    d="M32.8975 54.4149H27.0779C26.9475 54.4149 26.8418 54.5206 26.8418 54.651C26.8418 54.7814 26.9475 54.8871 27.0779 54.8871H32.8975C33.0279 54.8871 33.1336 54.7814 33.1336 54.651C33.1336 54.5206 33.0279 54.4149 32.8975 54.4149Z"
                                    fill="white" />
                                <path
                                    d="M31.9225 55.3878H27.0404C26.931 55.3878 26.8423 55.4935 26.8423 55.6239C26.8423 55.7543 26.931 55.86 27.0404 55.86H31.9225C32.0319 55.86 32.1206 55.7543 32.1206 55.6239C32.1206 55.4935 32.0319 55.3878 31.9225 55.3878Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M44.2147 37.9382C49.0091 37.9382 52.8957 41.8249 52.8957 46.6192C52.8957 48.5299 52.278 50.2958 51.232 51.7297L58.9188 59.3C59.4625 59.8353 59.4692 60.718 58.9339 61.2617C58.3984 61.8053 57.5157 61.812 56.9721 61.2767L49.2616 53.6829C47.8394 54.701 46.0971 55.3003 44.2147 55.3003C39.4203 55.3003 35.5337 51.4136 35.5337 46.6192C35.5337 41.8249 39.4203 37.9382 44.2147 37.9382ZM44.2147 40.4441C47.6252 40.4441 50.3899 43.2087 50.3899 46.6192C50.3899 50.0297 47.6252 52.7944 44.2147 52.7944C40.8042 52.7944 38.0395 50.0297 38.0395 46.6192C38.0395 43.2087 40.8042 40.4441 44.2147 40.4441Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M42.2513 42.8722C41.7923 42.8722 41.6262 42.215 41.1924 42.215C40.7398 42.215 40.7137 42.2738 40.2888 42.6987C39.825 43.1625 39.536 43.5418 40.1244 44.1228C40.4894 44.4833 40.5999 44.4822 40.2324 45.2346C39.9818 45.7477 39.3643 45.2928 38.9276 45.6457C38.5942 45.9152 38.6732 46.5212 38.6732 46.9979C38.6732 47.5575 39.1077 47.7334 39.6223 47.7283C39.9808 47.7246 40.1045 47.697 40.2325 47.9579C40.2962 48.0879 40.4622 48.4759 40.4622 48.6044C40.4622 49.0932 39.805 48.9965 39.805 49.8092C39.805 50.1189 40.6336 50.8741 40.8222 50.9464C41.1231 51.0617 41.3802 50.981 41.5857 50.7865C42.1929 50.2115 42.0115 50.2219 42.7954 50.543C43.3402 50.7661 42.9041 51.3493 43.2003 51.8175C43.45 52.2126 44.0702 52.1094 44.6244 52.1094C44.8715 52.1094 45.0684 51.9718 45.1792 51.8244C45.513 51.38 45.074 50.7588 45.5793 50.5451C46.6781 50.0801 46.2042 50.4475 46.9384 50.8908C47.5234 51.2439 47.8588 50.7297 48.3953 50.1845C48.4633 50.1155 48.4942 50.0815 48.5324 49.9929C48.873 49.2004 47.8242 49.015 47.9312 48.5171C47.9619 48.3741 48.0603 48.1864 48.1187 48.0458C48.3227 47.5544 48.5308 47.7965 49.0708 47.7201C49.8467 47.6102 49.6995 46.8509 49.6995 46.1581C49.6995 45.8021 49.4277 45.5143 49.0801 45.4996C48.1378 45.46 48.3205 45.5472 48.0443 44.9654C47.9978 44.8675 47.9736 44.8431 47.9431 44.7346C47.8871 44.5358 47.9539 44.4156 48.0826 44.2857C48.7268 43.6356 48.8416 43.4565 48.1204 42.7353C47.7706 42.3855 47.7009 42.215 47.2532 42.215C46.7511 42.215 46.5706 42.8722 46.2309 42.8722C46.1107 42.8722 45.4771 42.6936 45.3584 42.4668C45.2962 42.3483 45.3161 42.2397 45.318 42.0691C45.3309 40.9409 44.7144 41.0831 43.7847 41.0831C43.5714 41.0831 43.3308 41.2201 43.2359 41.3375C43.0711 41.5413 43.088 41.6721 43.0915 42.0329C43.0946 42.3562 43.0681 42.512 42.8491 42.6302C42.7884 42.6628 42.2847 42.8722 42.2513 42.8722ZM44.1878 49.117C45.5782 49.117 46.7054 47.9899 46.7054 46.5994C46.7054 45.209 45.5782 44.0818 44.1878 44.0818C42.7974 44.0818 41.6702 45.209 41.6702 46.5994C41.6702 47.9899 42.7974 49.117 44.1878 49.117Z"
                                    fill="white" />
                            </svg>


                        </div>
                        <div class="dark:bg-colheaderdark bg-bgfondopricingwhite p-3 " style="min-height: 157px;">
                            <div
                                class="text-lg dark:text-bgprogresb text-txtnamecomntpkyr max-h-20 font-inter font-medium leading-7">
                                Mantenimiento Productivo aplicado en Procesos Industriales
                            </div>
                            <div class="font-inter font-normal text-sm">
                                <span class="dark:text-borderconcours text-gray-650"> Por:</span> <span
                                    class="italic text-greenactivo">Franklin
                                    Espinoza</span>
                            </div>
                            <div class="flex gap-x-6 pt-2">
                                <div class="flex items-center">

                                    <svg class="dark:text-pricingdarkstudents text-gray-650" width="16"
                                        height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.8777 4.21114C1.70613 5.38271 1.70613 7.2822 2.8777 8.45378L7.99905 13.5751L13.1203 8.45378C14.2919 7.2822 14.2919 5.38271 13.1203 4.21114C11.9488 3.03957 10.0493 3.03957 8.8777 4.21114L7.99905 5.08985L7.12034 4.21114C5.94877 3.03957 4.04927 3.03957 2.8777 4.21114Z"
                                            stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <div
                                        class="dark:text-pricingdarkstudents text-gray-650  font-inter font-normal text-sm pl-2">
                                        5
                                    </div>

                                </div>
                                <div class="flex items-center">

                                    <svg class="dark:text-pricingdarkstudents text-gray-650  font-inter font-medium text-sm "
                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.3335 13.3335H14.6668V12.0002C14.6668 10.8956 13.7714 10.0002 12.6668 10.0002C12.0298 10.0002 11.4623 10.2981 11.096 10.7621M11.3335 13.3335H4.66683M11.3335 13.3335V12.0002C11.3335 11.5627 11.2492 11.1449 11.096 10.7621M4.66683 13.3335H1.3335V12.0002C1.3335 10.8956 2.22893 10.0002 3.3335 10.0002C3.97057 10.0002 4.53807 10.2981 4.90432 10.7621M4.66683 13.3335V12.0002C4.66683 11.5627 4.75111 11.1449 4.90432 10.7621M4.90432 10.7621C5.39583 9.53422 6.5967 8.66687 8.00016 8.66687C9.40361 8.66687 10.6045 9.53422 11.096 10.7621M10.0002 4.66687C10.0002 5.77144 9.10473 6.66687 8.00016 6.66687C6.89559 6.66687 6.00016 5.77144 6.00016 4.66687C6.00016 3.5623 6.89559 2.66687 8.00016 2.66687C9.10473 2.66687 10.0002 3.5623 10.0002 4.66687ZM14.0002 6.66687C14.0002 7.40325 13.4032 8.0002 12.6668 8.0002C11.9304 8.0002 11.3335 7.40325 11.3335 6.66687C11.3335 5.93049 11.9304 5.33354 12.6668 5.33354C13.4032 5.33354 14.0002 5.93049 14.0002 6.66687ZM4.66683 6.66687C4.66683 7.40325 4.06987 8.0002 3.3335 8.0002C2.59712 8.0002 2.00016 7.40325 2.00016 6.66687C2.00016 5.93049 2.59712 5.33354 3.3335 5.33354C4.06987 5.33354 4.66683 5.93049 4.66683 6.66687Z"
                                            stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <div
                                        class="dark:text-pricingdarkstudents text-gray-650 font-inter font-normal text-sm pl-2">
                                        378
                                    </div>

                                </div>
                            </div>





                        </div>
                        <div
                            class="dark:bg-pricingdark bg-pricingcintawhite p-3 rounded-b-xl  items-center flex justify-between ">
                            <div class="flex flex-col font-inter font-medium ">

                                <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                    370 PEN
                                </div>
                                <div class="text-gray-400 line-through text-sm">
                                    740 PEN
                                </div>



                            </div>
                            <div>

                                <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                    Comprar
                                </button>


                            </div>
                        </div>

                    </div>
                    <div>
                        <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite pt-5 pb-7 rounded-t-xl ">
                            <svg class="mx-auto" width="81" height="80" viewBox="0 0 81 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M40.5001 80.0001C62.5915 80.0001 80.5002 62.0914 80.5002 40C80.5002 17.9085 62.5915 -0.00012207 40.5001 -0.00012207C18.4087 -0.00012207 0.5 17.9085 0.5 40C0.5 62.0914 18.4087 80.0001 40.5001 80.0001Z"
                                    fill="#999999" />
                                <path
                                    d="M40.4999 74.9682C59.8123 74.9682 75.4681 59.3124 75.4681 40C75.4681 20.6876 59.8123 5.0318 40.4999 5.0318C21.1875 5.0318 5.53174 20.6876 5.53174 40C5.53174 59.3124 21.1875 74.9682 40.4999 74.9682Z"
                                    fill="#424F4F" />
                                <path
                                    d="M40.5001 72.192C58.2793 72.192 72.6921 57.7791 72.6921 40C72.6921 22.2208 58.2793 7.80798 40.5001 7.80798C22.721 7.80798 8.30811 22.2208 8.30811 40C8.30811 57.7791 22.721 72.192 40.5001 72.192Z"
                                    fill="#424F4F" />
                                <path d="M52.4496 58.7395H21.6689V18.3262H47.1923L52.4496 24.5895V40.2117" stroke="white"
                                    stroke-width="1.42404" stroke-miterlimit="22.9256" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M47.1921 18.3262L46.2534 24.6682L52.4494 24.5895L47.1921 18.3262Z" stroke="white"
                                    stroke-width="1.42404" stroke-miterlimit="22.9256" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M41.4626 34.5383L42.6641 28.606M23.0801 41.9061L26.9162 33.691L23.0801 41.9061ZM28.0696 33.5594L30.8957 37.9438L32.1593 37.9864L33.9366 34.5072L28.0696 33.5594ZM35.5521 33.5172L40.0252 35.6005L35.5521 33.5172Z"
                                    stroke="white" stroke-width="0.711966" stroke-miterlimit="22.9256"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M27.3859 33.7948C27.9995 33.7948 28.4968 33.2974 28.4968 32.6838C28.4968 32.0702 27.9995 31.5728 27.3859 31.5728C26.7723 31.5728 26.2749 32.0702 26.2749 32.6838C26.2749 33.2974 26.7723 33.7948 27.3859 33.7948Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M31.4967 39.9892C32.1103 39.9892 32.6077 39.4918 32.6077 38.8782C32.6077 38.2647 32.1103 37.7673 31.4967 37.7673C30.8831 37.7673 30.3857 38.2647 30.3857 38.8782C30.3857 39.4918 30.8831 39.9892 31.4967 39.9892Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M34.4415 34.6282C35.0551 34.6282 35.5525 34.1308 35.5525 33.5172C35.5525 32.9037 35.0551 32.4062 34.4415 32.4062C33.828 32.4062 33.3306 32.9037 33.3306 33.5172C33.3306 34.1308 33.828 34.6282 34.4415 34.6282Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M41.1359 36.7114C41.7495 36.7114 42.2468 36.214 42.2468 35.6005C42.2468 34.9869 41.7495 34.4895 41.1359 34.4895C40.5223 34.4895 40.0249 34.9869 40.0249 35.6005C40.0249 36.214 40.5223 36.7114 41.1359 36.7114Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M42.8859 28.6282C43.4995 28.6282 43.9969 28.1308 43.9969 27.5172C43.9969 26.9037 43.4995 26.4062 42.8859 26.4062C42.2723 26.4062 41.7749 26.9037 41.7749 27.5172C41.7749 28.1308 42.2723 28.6282 42.8859 28.6282Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 44.3875H25.6845V45.8873H24.1847V44.3875ZM23.5874 43.7902H26.2818V46.4846H23.5874V43.7902Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 47.7208H25.6845V49.2207H24.1847V47.7208ZM23.5874 47.1235H26.2818V49.8179H23.5874V47.1235Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 51.0542H25.6845V52.554H24.1847V51.0542ZM23.5874 50.4569H26.2818V53.1513H23.5874V50.4569Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 54.3875H25.6845V55.8873H24.1847V54.3875ZM23.5874 53.7902H26.2818V56.4846H23.5874V53.7902Z"
                                    fill="white" />
                                <path
                                    d="M32.9829 44.4149H27.1634C27.033 44.4149 26.9272 44.5206 26.9272 44.651C26.9272 44.7814 27.033 44.8871 27.1634 44.8871H32.9829C33.1133 44.8871 33.219 44.7814 33.219 44.651C33.219 44.5206 33.1133 44.4149 32.9829 44.4149Z"
                                    fill="white" />
                                <path
                                    d="M32.008 45.3878H27.1258C27.0164 45.3878 26.9277 45.4935 26.9277 45.6239C26.9277 45.7543 27.0164 45.86 27.1258 45.86H32.008C32.1174 45.86 32.2061 45.7543 32.2061 45.6239C32.2061 45.4935 32.1174 45.3878 32.008 45.3878Z"
                                    fill="white" />
                                <path
                                    d="M32.9546 47.7482H27.135C27.0046 47.7482 26.8989 47.8539 26.8989 47.9843C26.8989 48.1148 27.0046 48.2205 27.135 48.2205H32.9546C33.085 48.2205 33.1907 48.1148 33.1907 47.9843C33.1907 47.8539 33.085 47.7482 32.9546 47.7482Z"
                                    fill="white" />
                                <path
                                    d="M31.9791 48.7211H27.097C26.9876 48.7211 26.8989 48.8268 26.8989 48.9572C26.8989 49.0877 26.9876 49.1934 27.097 49.1934H31.9791C32.0886 49.1934 32.1773 49.0877 32.1773 48.9572C32.1773 48.8268 32.0886 48.7211 31.9791 48.7211Z"
                                    fill="white" />
                                <path
                                    d="M32.9263 51.0815H27.1067C26.9763 51.0815 26.8706 51.1873 26.8706 51.3177C26.8706 51.4481 26.9763 51.5538 27.1067 51.5538H32.9263C33.0567 51.5538 33.1624 51.4481 33.1624 51.3177C33.1624 51.1873 33.0567 51.0815 32.9263 51.0815Z"
                                    fill="white" />
                                <path
                                    d="M31.9508 52.0544H27.0687C26.9593 52.0544 26.8706 52.1602 26.8706 52.2906C26.8706 52.421 26.9593 52.5267 27.0687 52.5267H31.9508C32.0602 52.5267 32.1489 52.421 32.1489 52.2906C32.1489 52.1602 32.0602 52.0544 31.9508 52.0544Z"
                                    fill="white" />
                                <path
                                    d="M32.8975 54.4149H27.0779C26.9475 54.4149 26.8418 54.5206 26.8418 54.651C26.8418 54.7814 26.9475 54.8871 27.0779 54.8871H32.8975C33.0279 54.8871 33.1336 54.7814 33.1336 54.651C33.1336 54.5206 33.0279 54.4149 32.8975 54.4149Z"
                                    fill="white" />
                                <path
                                    d="M31.9225 55.3878H27.0404C26.931 55.3878 26.8423 55.4935 26.8423 55.6239C26.8423 55.7543 26.931 55.86 27.0404 55.86H31.9225C32.0319 55.86 32.1206 55.7543 32.1206 55.6239C32.1206 55.4935 32.0319 55.3878 31.9225 55.3878Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M44.2147 37.9382C49.0091 37.9382 52.8957 41.8249 52.8957 46.6192C52.8957 48.5299 52.278 50.2958 51.232 51.7297L58.9188 59.3C59.4625 59.8353 59.4692 60.718 58.9339 61.2617C58.3984 61.8053 57.5157 61.812 56.9721 61.2767L49.2616 53.6829C47.8394 54.701 46.0971 55.3003 44.2147 55.3003C39.4203 55.3003 35.5337 51.4136 35.5337 46.6192C35.5337 41.8249 39.4203 37.9382 44.2147 37.9382ZM44.2147 40.4441C47.6252 40.4441 50.3899 43.2087 50.3899 46.6192C50.3899 50.0297 47.6252 52.7944 44.2147 52.7944C40.8042 52.7944 38.0395 50.0297 38.0395 46.6192C38.0395 43.2087 40.8042 40.4441 44.2147 40.4441Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M42.2513 42.8722C41.7923 42.8722 41.6262 42.215 41.1924 42.215C40.7398 42.215 40.7137 42.2738 40.2888 42.6987C39.825 43.1625 39.536 43.5418 40.1244 44.1228C40.4894 44.4833 40.5999 44.4822 40.2324 45.2346C39.9818 45.7477 39.3643 45.2928 38.9276 45.6457C38.5942 45.9152 38.6732 46.5212 38.6732 46.9979C38.6732 47.5575 39.1077 47.7334 39.6223 47.7283C39.9808 47.7246 40.1045 47.697 40.2325 47.9579C40.2962 48.0879 40.4622 48.4759 40.4622 48.6044C40.4622 49.0932 39.805 48.9965 39.805 49.8092C39.805 50.1189 40.6336 50.8741 40.8222 50.9464C41.1231 51.0617 41.3802 50.981 41.5857 50.7865C42.1929 50.2115 42.0115 50.2219 42.7954 50.543C43.3402 50.7661 42.9041 51.3493 43.2003 51.8175C43.45 52.2126 44.0702 52.1094 44.6244 52.1094C44.8715 52.1094 45.0684 51.9718 45.1792 51.8244C45.513 51.38 45.074 50.7588 45.5793 50.5451C46.6781 50.0801 46.2042 50.4475 46.9384 50.8908C47.5234 51.2439 47.8588 50.7297 48.3953 50.1845C48.4633 50.1155 48.4942 50.0815 48.5324 49.9929C48.873 49.2004 47.8242 49.015 47.9312 48.5171C47.9619 48.3741 48.0603 48.1864 48.1187 48.0458C48.3227 47.5544 48.5308 47.7965 49.0708 47.7201C49.8467 47.6102 49.6995 46.8509 49.6995 46.1581C49.6995 45.8021 49.4277 45.5143 49.0801 45.4996C48.1378 45.46 48.3205 45.5472 48.0443 44.9654C47.9978 44.8675 47.9736 44.8431 47.9431 44.7346C47.8871 44.5358 47.9539 44.4156 48.0826 44.2857C48.7268 43.6356 48.8416 43.4565 48.1204 42.7353C47.7706 42.3855 47.7009 42.215 47.2532 42.215C46.7511 42.215 46.5706 42.8722 46.2309 42.8722C46.1107 42.8722 45.4771 42.6936 45.3584 42.4668C45.2962 42.3483 45.3161 42.2397 45.318 42.0691C45.3309 40.9409 44.7144 41.0831 43.7847 41.0831C43.5714 41.0831 43.3308 41.2201 43.2359 41.3375C43.0711 41.5413 43.088 41.6721 43.0915 42.0329C43.0946 42.3562 43.0681 42.512 42.8491 42.6302C42.7884 42.6628 42.2847 42.8722 42.2513 42.8722ZM44.1878 49.117C45.5782 49.117 46.7054 47.9899 46.7054 46.5994C46.7054 45.209 45.5782 44.0818 44.1878 44.0818C42.7974 44.0818 41.6702 45.209 41.6702 46.5994C41.6702 47.9899 42.7974 49.117 44.1878 49.117Z"
                                    fill="white" />
                            </svg>


                        </div>
                        <div class="dark:bg-colheaderdark bg-bgfondopricingwhite p-3 " style="min-height: 157px;">
                            <div
                                class="text-lg dark:text-bgprogresb text-txtnamecomntpkyr max-h-20 font-inter font-medium leading-7">
                                Mantenimiento Productivo aplicado en Procesos Industriales
                            </div>
                            <div class="font-inter font-normal text-sm">
                                <span class="dark:text-borderconcours text-gray-650"> Por:</span> <span
                                    class="italic text-greenactivo">Franklin
                                    Espinoza</span>
                            </div>
                            <div class="flex gap-x-6 pt-2">
                                <div class="flex items-center">

                                    <svg class="dark:text-pricingdarkstudents text-gray-650" width="16"
                                        height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.8777 4.21114C1.70613 5.38271 1.70613 7.2822 2.8777 8.45378L7.99905 13.5751L13.1203 8.45378C14.2919 7.2822 14.2919 5.38271 13.1203 4.21114C11.9488 3.03957 10.0493 3.03957 8.8777 4.21114L7.99905 5.08985L7.12034 4.21114C5.94877 3.03957 4.04927 3.03957 2.8777 4.21114Z"
                                            stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <div
                                        class="dark:text-pricingdarkstudents text-gray-650  font-inter font-normal text-sm pl-2">
                                        5
                                    </div>

                                </div>
                                <div class="flex items-center">

                                    <svg class="dark:text-pricingdarkstudents text-gray-650  font-inter font-medium text-sm "
                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.3335 13.3335H14.6668V12.0002C14.6668 10.8956 13.7714 10.0002 12.6668 10.0002C12.0298 10.0002 11.4623 10.2981 11.096 10.7621M11.3335 13.3335H4.66683M11.3335 13.3335V12.0002C11.3335 11.5627 11.2492 11.1449 11.096 10.7621M4.66683 13.3335H1.3335V12.0002C1.3335 10.8956 2.22893 10.0002 3.3335 10.0002C3.97057 10.0002 4.53807 10.2981 4.90432 10.7621M4.66683 13.3335V12.0002C4.66683 11.5627 4.75111 11.1449 4.90432 10.7621M4.90432 10.7621C5.39583 9.53422 6.5967 8.66687 8.00016 8.66687C9.40361 8.66687 10.6045 9.53422 11.096 10.7621M10.0002 4.66687C10.0002 5.77144 9.10473 6.66687 8.00016 6.66687C6.89559 6.66687 6.00016 5.77144 6.00016 4.66687C6.00016 3.5623 6.89559 2.66687 8.00016 2.66687C9.10473 2.66687 10.0002 3.5623 10.0002 4.66687ZM14.0002 6.66687C14.0002 7.40325 13.4032 8.0002 12.6668 8.0002C11.9304 8.0002 11.3335 7.40325 11.3335 6.66687C11.3335 5.93049 11.9304 5.33354 12.6668 5.33354C13.4032 5.33354 14.0002 5.93049 14.0002 6.66687ZM4.66683 6.66687C4.66683 7.40325 4.06987 8.0002 3.3335 8.0002C2.59712 8.0002 2.00016 7.40325 2.00016 6.66687C2.00016 5.93049 2.59712 5.33354 3.3335 5.33354C4.06987 5.33354 4.66683 5.93049 4.66683 6.66687Z"
                                            stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <div
                                        class="dark:text-pricingdarkstudents text-gray-650 font-inter font-normal text-sm pl-2">
                                        378
                                    </div>

                                </div>
                            </div>





                        </div>
                        <div
                            class="dark:bg-pricingdark bg-pricingcintawhite p-3 rounded-b-xl  items-center flex justify-between ">
                            <div class="flex flex-col font-inter font-medium ">

                                <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                    370 PEN
                                </div>
                                <div class="text-gray-400 line-through text-sm">
                                    740 PEN
                                </div>



                            </div>
                            <div>

                                <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                    Comprar
                                </button>


                            </div>
                        </div>

                    </div>
                    <div>
                        <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite pt-5 pb-7 rounded-t-xl ">
                            <svg class="mx-auto" width="81" height="80" viewBox="0 0 81 80" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M40.5001 80.0001C62.5915 80.0001 80.5002 62.0914 80.5002 40C80.5002 17.9085 62.5915 -0.00012207 40.5001 -0.00012207C18.4087 -0.00012207 0.5 17.9085 0.5 40C0.5 62.0914 18.4087 80.0001 40.5001 80.0001Z"
                                    fill="#999999" />
                                <path
                                    d="M40.4999 74.9682C59.8123 74.9682 75.4681 59.3124 75.4681 40C75.4681 20.6876 59.8123 5.0318 40.4999 5.0318C21.1875 5.0318 5.53174 20.6876 5.53174 40C5.53174 59.3124 21.1875 74.9682 40.4999 74.9682Z"
                                    fill="#424F4F" />
                                <path
                                    d="M40.5001 72.192C58.2793 72.192 72.6921 57.7791 72.6921 40C72.6921 22.2208 58.2793 7.80798 40.5001 7.80798C22.721 7.80798 8.30811 22.2208 8.30811 40C8.30811 57.7791 22.721 72.192 40.5001 72.192Z"
                                    fill="#424F4F" />
                                <path d="M52.4496 58.7395H21.6689V18.3262H47.1923L52.4496 24.5895V40.2117" stroke="white"
                                    stroke-width="1.42404" stroke-miterlimit="22.9256" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M47.1921 18.3262L46.2534 24.6682L52.4494 24.5895L47.1921 18.3262Z" stroke="white"
                                    stroke-width="1.42404" stroke-miterlimit="22.9256" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M41.4626 34.5383L42.6641 28.606M23.0801 41.9061L26.9162 33.691L23.0801 41.9061ZM28.0696 33.5594L30.8957 37.9438L32.1593 37.9864L33.9366 34.5072L28.0696 33.5594ZM35.5521 33.5172L40.0252 35.6005L35.5521 33.5172Z"
                                    stroke="white" stroke-width="0.711966" stroke-miterlimit="22.9256"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M27.3859 33.7948C27.9995 33.7948 28.4968 33.2974 28.4968 32.6838C28.4968 32.0702 27.9995 31.5728 27.3859 31.5728C26.7723 31.5728 26.2749 32.0702 26.2749 32.6838C26.2749 33.2974 26.7723 33.7948 27.3859 33.7948Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M31.4967 39.9892C32.1103 39.9892 32.6077 39.4918 32.6077 38.8782C32.6077 38.2647 32.1103 37.7673 31.4967 37.7673C30.8831 37.7673 30.3857 38.2647 30.3857 38.8782C30.3857 39.4918 30.8831 39.9892 31.4967 39.9892Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M34.4415 34.6282C35.0551 34.6282 35.5525 34.1308 35.5525 33.5172C35.5525 32.9037 35.0551 32.4062 34.4415 32.4062C33.828 32.4062 33.3306 32.9037 33.3306 33.5172C33.3306 34.1308 33.828 34.6282 34.4415 34.6282Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M41.1359 36.7114C41.7495 36.7114 42.2468 36.214 42.2468 35.6005C42.2468 34.9869 41.7495 34.4895 41.1359 34.4895C40.5223 34.4895 40.0249 34.9869 40.0249 35.6005C40.0249 36.214 40.5223 36.7114 41.1359 36.7114Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path
                                    d="M42.8859 28.6282C43.4995 28.6282 43.9969 28.1308 43.9969 27.5172C43.9969 26.9037 43.4995 26.4062 42.8859 26.4062C42.2723 26.4062 41.7749 26.9037 41.7749 27.5172C41.7749 28.1308 42.2723 28.6282 42.8859 28.6282Z"
                                    stroke="white" stroke-width="0.890036" stroke-miterlimit="22.9256" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 44.3875H25.6845V45.8873H24.1847V44.3875ZM23.5874 43.7902H26.2818V46.4846H23.5874V43.7902Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 47.7208H25.6845V49.2207H24.1847V47.7208ZM23.5874 47.1235H26.2818V49.8179H23.5874V47.1235Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 51.0542H25.6845V52.554H24.1847V51.0542ZM23.5874 50.4569H26.2818V53.1513H23.5874V50.4569Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M24.1847 54.3875H25.6845V55.8873H24.1847V54.3875ZM23.5874 53.7902H26.2818V56.4846H23.5874V53.7902Z"
                                    fill="white" />
                                <path
                                    d="M32.9829 44.4149H27.1634C27.033 44.4149 26.9272 44.5206 26.9272 44.651C26.9272 44.7814 27.033 44.8871 27.1634 44.8871H32.9829C33.1133 44.8871 33.219 44.7814 33.219 44.651C33.219 44.5206 33.1133 44.4149 32.9829 44.4149Z"
                                    fill="white" />
                                <path
                                    d="M32.008 45.3878H27.1258C27.0164 45.3878 26.9277 45.4935 26.9277 45.6239C26.9277 45.7543 27.0164 45.86 27.1258 45.86H32.008C32.1174 45.86 32.2061 45.7543 32.2061 45.6239C32.2061 45.4935 32.1174 45.3878 32.008 45.3878Z"
                                    fill="white" />
                                <path
                                    d="M32.9546 47.7482H27.135C27.0046 47.7482 26.8989 47.8539 26.8989 47.9843C26.8989 48.1148 27.0046 48.2205 27.135 48.2205H32.9546C33.085 48.2205 33.1907 48.1148 33.1907 47.9843C33.1907 47.8539 33.085 47.7482 32.9546 47.7482Z"
                                    fill="white" />
                                <path
                                    d="M31.9791 48.7211H27.097C26.9876 48.7211 26.8989 48.8268 26.8989 48.9572C26.8989 49.0877 26.9876 49.1934 27.097 49.1934H31.9791C32.0886 49.1934 32.1773 49.0877 32.1773 48.9572C32.1773 48.8268 32.0886 48.7211 31.9791 48.7211Z"
                                    fill="white" />
                                <path
                                    d="M32.9263 51.0815H27.1067C26.9763 51.0815 26.8706 51.1873 26.8706 51.3177C26.8706 51.4481 26.9763 51.5538 27.1067 51.5538H32.9263C33.0567 51.5538 33.1624 51.4481 33.1624 51.3177C33.1624 51.1873 33.0567 51.0815 32.9263 51.0815Z"
                                    fill="white" />
                                <path
                                    d="M31.9508 52.0544H27.0687C26.9593 52.0544 26.8706 52.1602 26.8706 52.2906C26.8706 52.421 26.9593 52.5267 27.0687 52.5267H31.9508C32.0602 52.5267 32.1489 52.421 32.1489 52.2906C32.1489 52.1602 32.0602 52.0544 31.9508 52.0544Z"
                                    fill="white" />
                                <path
                                    d="M32.8975 54.4149H27.0779C26.9475 54.4149 26.8418 54.5206 26.8418 54.651C26.8418 54.7814 26.9475 54.8871 27.0779 54.8871H32.8975C33.0279 54.8871 33.1336 54.7814 33.1336 54.651C33.1336 54.5206 33.0279 54.4149 32.8975 54.4149Z"
                                    fill="white" />
                                <path
                                    d="M31.9225 55.3878H27.0404C26.931 55.3878 26.8423 55.4935 26.8423 55.6239C26.8423 55.7543 26.931 55.86 27.0404 55.86H31.9225C32.0319 55.86 32.1206 55.7543 32.1206 55.6239C32.1206 55.4935 32.0319 55.3878 31.9225 55.3878Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M44.2147 37.9382C49.0091 37.9382 52.8957 41.8249 52.8957 46.6192C52.8957 48.5299 52.278 50.2958 51.232 51.7297L58.9188 59.3C59.4625 59.8353 59.4692 60.718 58.9339 61.2617C58.3984 61.8053 57.5157 61.812 56.9721 61.2767L49.2616 53.6829C47.8394 54.701 46.0971 55.3003 44.2147 55.3003C39.4203 55.3003 35.5337 51.4136 35.5337 46.6192C35.5337 41.8249 39.4203 37.9382 44.2147 37.9382ZM44.2147 40.4441C47.6252 40.4441 50.3899 43.2087 50.3899 46.6192C50.3899 50.0297 47.6252 52.7944 44.2147 52.7944C40.8042 52.7944 38.0395 50.0297 38.0395 46.6192C38.0395 43.2087 40.8042 40.4441 44.2147 40.4441Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M42.2513 42.8722C41.7923 42.8722 41.6262 42.215 41.1924 42.215C40.7398 42.215 40.7137 42.2738 40.2888 42.6987C39.825 43.1625 39.536 43.5418 40.1244 44.1228C40.4894 44.4833 40.5999 44.4822 40.2324 45.2346C39.9818 45.7477 39.3643 45.2928 38.9276 45.6457C38.5942 45.9152 38.6732 46.5212 38.6732 46.9979C38.6732 47.5575 39.1077 47.7334 39.6223 47.7283C39.9808 47.7246 40.1045 47.697 40.2325 47.9579C40.2962 48.0879 40.4622 48.4759 40.4622 48.6044C40.4622 49.0932 39.805 48.9965 39.805 49.8092C39.805 50.1189 40.6336 50.8741 40.8222 50.9464C41.1231 51.0617 41.3802 50.981 41.5857 50.7865C42.1929 50.2115 42.0115 50.2219 42.7954 50.543C43.3402 50.7661 42.9041 51.3493 43.2003 51.8175C43.45 52.2126 44.0702 52.1094 44.6244 52.1094C44.8715 52.1094 45.0684 51.9718 45.1792 51.8244C45.513 51.38 45.074 50.7588 45.5793 50.5451C46.6781 50.0801 46.2042 50.4475 46.9384 50.8908C47.5234 51.2439 47.8588 50.7297 48.3953 50.1845C48.4633 50.1155 48.4942 50.0815 48.5324 49.9929C48.873 49.2004 47.8242 49.015 47.9312 48.5171C47.9619 48.3741 48.0603 48.1864 48.1187 48.0458C48.3227 47.5544 48.5308 47.7965 49.0708 47.7201C49.8467 47.6102 49.6995 46.8509 49.6995 46.1581C49.6995 45.8021 49.4277 45.5143 49.0801 45.4996C48.1378 45.46 48.3205 45.5472 48.0443 44.9654C47.9978 44.8675 47.9736 44.8431 47.9431 44.7346C47.8871 44.5358 47.9539 44.4156 48.0826 44.2857C48.7268 43.6356 48.8416 43.4565 48.1204 42.7353C47.7706 42.3855 47.7009 42.215 47.2532 42.215C46.7511 42.215 46.5706 42.8722 46.2309 42.8722C46.1107 42.8722 45.4771 42.6936 45.3584 42.4668C45.2962 42.3483 45.3161 42.2397 45.318 42.0691C45.3309 40.9409 44.7144 41.0831 43.7847 41.0831C43.5714 41.0831 43.3308 41.2201 43.2359 41.3375C43.0711 41.5413 43.088 41.6721 43.0915 42.0329C43.0946 42.3562 43.0681 42.512 42.8491 42.6302C42.7884 42.6628 42.2847 42.8722 42.2513 42.8722ZM44.1878 49.117C45.5782 49.117 46.7054 47.9899 46.7054 46.5994C46.7054 45.209 45.5782 44.0818 44.1878 44.0818C42.7974 44.0818 41.6702 45.209 41.6702 46.5994C41.6702 47.9899 42.7974 49.117 44.1878 49.117Z"
                                    fill="white" />
                            </svg>


                        </div>
                        <div class="dark:bg-colheaderdark bg-bgfondopricingwhite p-3 " style="min-height: 157px;">
                            <div
                                class="text-lg dark:text-bgprogresb text-txtnamecomntpkyr max-h-20 font-inter font-medium leading-7">
                                Mantenimiento Productivo aplicado en Procesos Industriales
                            </div>
                            <div class="font-inter font-normal text-sm">
                                <span class="dark:text-borderconcours text-gray-650"> Por:</span> <span
                                    class="italic text-greenactivo">Franklin
                                    Espinoza</span>
                            </div>
                            <div class="flex gap-x-6 pt-2">
                                <div class="flex items-center">

                                    <svg class="dark:text-pricingdarkstudents text-gray-650" width="16"
                                        height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.8777 4.21114C1.70613 5.38271 1.70613 7.2822 2.8777 8.45378L7.99905 13.5751L13.1203 8.45378C14.2919 7.2822 14.2919 5.38271 13.1203 4.21114C11.9488 3.03957 10.0493 3.03957 8.8777 4.21114L7.99905 5.08985L7.12034 4.21114C5.94877 3.03957 4.04927 3.03957 2.8777 4.21114Z"
                                            stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <div
                                        class="dark:text-pricingdarkstudents text-gray-650  font-inter font-normal text-sm pl-2">
                                        5
                                    </div>

                                </div>
                                <div class="flex items-center">

                                    <svg class="dark:text-pricingdarkstudents text-gray-650  font-inter font-medium text-sm "
                                        width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.3335 13.3335H14.6668V12.0002C14.6668 10.8956 13.7714 10.0002 12.6668 10.0002C12.0298 10.0002 11.4623 10.2981 11.096 10.7621M11.3335 13.3335H4.66683M11.3335 13.3335V12.0002C11.3335 11.5627 11.2492 11.1449 11.096 10.7621M4.66683 13.3335H1.3335V12.0002C1.3335 10.8956 2.22893 10.0002 3.3335 10.0002C3.97057 10.0002 4.53807 10.2981 4.90432 10.7621M4.66683 13.3335V12.0002C4.66683 11.5627 4.75111 11.1449 4.90432 10.7621M4.90432 10.7621C5.39583 9.53422 6.5967 8.66687 8.00016 8.66687C9.40361 8.66687 10.6045 9.53422 11.096 10.7621M10.0002 4.66687C10.0002 5.77144 9.10473 6.66687 8.00016 6.66687C6.89559 6.66687 6.00016 5.77144 6.00016 4.66687C6.00016 3.5623 6.89559 2.66687 8.00016 2.66687C9.10473 2.66687 10.0002 3.5623 10.0002 4.66687ZM14.0002 6.66687C14.0002 7.40325 13.4032 8.0002 12.6668 8.0002C11.9304 8.0002 11.3335 7.40325 11.3335 6.66687C11.3335 5.93049 11.9304 5.33354 12.6668 5.33354C13.4032 5.33354 14.0002 5.93049 14.0002 6.66687ZM4.66683 6.66687C4.66683 7.40325 4.06987 8.0002 3.3335 8.0002C2.59712 8.0002 2.00016 7.40325 2.00016 6.66687C2.00016 5.93049 2.59712 5.33354 3.3335 5.33354C4.06987 5.33354 4.66683 5.93049 4.66683 6.66687Z"
                                            stroke="currentcolor" stroke-width="1.33333" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>

                                    <div
                                        class="dark:text-pricingdarkstudents text-gray-650 font-inter font-normal text-sm pl-2">
                                        378
                                    </div>

                                </div>
                            </div>





                        </div>
                        <div
                            class="dark:bg-pricingdark bg-pricingcintawhite p-3 rounded-b-xl  items-center flex justify-between ">
                            <div class="flex flex-col font-inter font-medium ">

                                <div class="dark:text-checkpricingdark  text-green_hover text-sixteen">
                                    370 PEN
                                </div>
                                <div class="text-gray-400 line-through text-sm">
                                    740 PEN
                                </div>



                            </div>
                            <div>

                                <button class="rounded-lg px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                    Comprar
                                </button>


                            </div>
                        </div>

                    </div>

                </div>
                <div
                    class="sm:flex hidden flex-col  xl:col-span-1 ml:col-span-1 lg:col-span-2 md:col-span-2 xsm:col-span-2 col-span-1 xl:pt-0 pt-10  ">
                    <div>
                        <div class=" py-4 bg-white2 dark:bg-gray12 rounded-t-lg">
                            <div class="mx-auto flex">


                                <div
                                    class="dark:text-bgbtngreen mx-auto flex items-center text-bcklightbuscador text-lg font-inter font-medium">
                                    <svg class="" width="20" height="20" viewBox="0 0 20 20"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.99957 0.999329C2.44725 0.999329 1.99951 1.44707 1.99951 1.99939C1.99951 2.5517 2.44725 2.99944 2.99957 2.99944H4.21886L4.52444 4.22175C4.52765 4.23589 4.53115 4.24991 4.53495 4.2638L5.89226 9.69303L4.99963 10.5857C3.73964 11.8457 4.63201 14.0001 6.41393 14.0001H15.0002C15.5525 14.0001 16.0003 13.5523 16.0003 13C16.0003 12.4477 15.5525 12 15.0002 12L6.41393 12L7.41398 10.9999H14.0002C14.379 10.9999 14.7253 10.7859 14.8947 10.4471L17.8948 4.44674C18.0498 4.13673 18.0333 3.76857 17.8511 3.47374C17.6688 3.1789 17.347 2.99944 17.0004 2.99944H6.28053L5.96988 1.75684C5.85858 1.31164 5.45858 0.999329 4.99968 0.999329H2.99957Z"
                                            fill="#5CD685" />
                                        <path
                                            d="M16.0003 16.5002C16.0003 17.3287 15.3287 18.0003 14.5002 18.0003C13.6717 18.0003 13.0001 17.3287 13.0001 16.5002C13.0001 15.6717 13.6717 15.0001 14.5002 15.0001C15.3287 15.0001 16.0003 15.6717 16.0003 16.5002Z"
                                            fill="#5CD685" />
                                        <path
                                            d="M6.49977 18.0003C7.32824 18.0003 7.99985 17.3287 7.99985 16.5002C7.99985 15.6717 7.32824 15.0001 6.49977 15.0001C5.67129 15.0001 4.99968 15.6717 4.99968 16.5002C4.99968 17.3287 5.67129 18.0003 6.49977 18.0003Z"
                                            fill="#5CD685" />
                                    </svg> <span class="pl-2">Tu carrito de compras</span>
                                </div>
                            </div>
                        </div>
                        <div class="px-5 bg-bgfondopricingwhite dark:bg-pricingcintadark ">
                            <div class="flex  items-center pt-4 ">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.0001 48C37.2549 48 48.0001 37.2548 48.0001 23.9999C48.0001 10.7451 37.2549 -0.00012207 24.0001 -0.00012207C10.7452 -0.00012207 0 10.7451 0 23.9999C0 37.2548 10.7452 48 24.0001 48Z"
                                        fill="#999999" />
                                    <path
                                        d="M23.9995 44.9809C35.5869 44.9809 44.9804 35.5874 44.9804 23.9999C44.9804 12.4125 35.5869 3.01904 23.9995 3.01904C12.412 3.01904 3.01855 12.4125 3.01855 23.9999C3.01855 35.5874 12.412 44.9809 23.9995 44.9809Z"
                                        fill="#424F4F" />
                                    <path
                                        d="M24.0003 43.3151C34.6678 43.3151 43.3155 34.6674 43.3155 23.9999C43.3155 13.3324 34.6678 4.68469 24.0003 4.68469C13.3328 4.68469 4.68506 13.3324 4.68506 23.9999C4.68506 34.6674 13.3328 43.3151 24.0003 43.3151Z"
                                        fill="#424F4F" />
                                    <path d="M31.1686 35.2437H12.7002V10.9957H28.0142L31.1686 14.7537V24.127"
                                        stroke="white" stroke-width="0.854422" stroke-miterlimit="22.9256"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M28.0139 10.9957L27.4507 14.8009L31.1683 14.7537L28.0139 10.9957Z"
                                        stroke="white" stroke-width="0.854422" stroke-miterlimit="22.9256"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M24.5769 20.7229L25.2978 17.1635M13.5474 25.1436L15.849 20.2145L13.5474 25.1436ZM16.5411 20.1356L18.2368 22.7662L18.9949 22.7917L20.0613 20.7042L16.5411 20.1356ZM21.0306 20.1102L23.7144 21.3602L21.0306 20.1102Z"
                                        stroke="white" stroke-width="0.427179" stroke-miterlimit="22.9256"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M16.13 20.2768C16.4981 20.2768 16.7965 19.9783 16.7965 19.6102C16.7965 19.242 16.4981 18.9436 16.13 18.9436C15.7618 18.9436 15.4634 19.242 15.4634 19.6102C15.4634 19.9783 15.7618 20.2768 16.13 20.2768Z"
                                        stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                    <path
                                        d="M18.5968 23.9935C18.9649 23.9935 19.2633 23.6951 19.2633 23.3269C19.2633 22.9588 18.9649 22.6603 18.5968 22.6603C18.2286 22.6603 17.9302 22.9588 17.9302 23.3269C17.9302 23.6951 18.2286 23.9935 18.5968 23.9935Z"
                                        stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                    <path
                                        d="M20.3638 20.7769C20.732 20.7769 21.0304 20.4785 21.0304 20.1103C21.0304 19.7422 20.732 19.4437 20.3638 19.4437C19.9957 19.4437 19.6973 19.7422 19.6973 20.1103C19.6973 20.4785 19.9957 20.7769 20.3638 20.7769Z"
                                        stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                    <path
                                        d="M24.38 22.0268C24.7481 22.0268 25.0465 21.7284 25.0465 21.3602C25.0465 20.9921 24.7481 20.6937 24.38 20.6937C24.0118 20.6937 23.7134 20.9921 23.7134 21.3602C23.7134 21.7284 24.0118 22.0268 24.38 22.0268Z"
                                        stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                    <path
                                        d="M25.4303 17.1769C25.7984 17.1769 26.0968 16.8784 26.0968 16.5103C26.0968 16.1421 25.7984 15.8437 25.4303 15.8437C25.0621 15.8437 24.7637 16.1421 24.7637 16.5103C24.7637 16.8784 25.0621 17.1769 25.4303 17.1769Z"
                                        stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.2094 26.6325H15.1093V27.5324H14.2094V26.6325ZM13.8511 26.2741H15.4677V27.8907H13.8511V26.2741Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.2094 28.6325H15.1093V29.5324H14.2094V28.6325ZM13.8511 28.2741H15.4677V29.8907H13.8511V28.2741Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.2094 30.6325H15.1093V31.5324H14.2094V30.6325ZM13.8511 30.2742H15.4677V31.8908H13.8511V30.2742Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.2094 32.6325H15.1093V33.5324H14.2094V32.6325ZM13.8511 32.2741H15.4677V33.8907H13.8511V32.2741Z"
                                        fill="white" />
                                    <path
                                        d="M19.4884 26.6489H15.9967C15.9184 26.6489 15.855 26.7123 15.855 26.7905C15.855 26.8688 15.9184 26.9322 15.9967 26.9322H19.4884C19.5666 26.9322 19.63 26.8688 19.63 26.7905C19.63 26.7123 19.5666 26.6489 19.4884 26.6489Z"
                                        fill="white" />
                                    <path
                                        d="M18.9031 27.2326H15.9738C15.9082 27.2326 15.855 27.296 15.855 27.3743C15.855 27.4525 15.9082 27.5159 15.9738 27.5159H18.9031C18.9688 27.5159 19.022 27.4525 19.022 27.3743C19.022 27.296 18.9688 27.2326 18.9031 27.2326Z"
                                        fill="white" />
                                    <path
                                        d="M19.4718 28.6489H15.98C15.9018 28.6489 15.8384 28.7124 15.8384 28.7906C15.8384 28.8688 15.9018 28.9323 15.98 28.9323H19.4718C19.55 28.9323 19.6134 28.8688 19.6134 28.7906C19.6134 28.7124 19.55 28.6489 19.4718 28.6489Z"
                                        fill="white" />
                                    <path
                                        d="M18.8865 29.2327H15.9572C15.8916 29.2327 15.8384 29.2961 15.8384 29.3743C15.8384 29.4526 15.8916 29.516 15.9572 29.516H18.8865C18.9522 29.516 19.0054 29.4526 19.0054 29.3743C19.0054 29.2961 18.9522 29.2327 18.8865 29.2327Z"
                                        fill="white" />
                                    <path
                                        d="M19.4542 30.6489H15.9625C15.8842 30.6489 15.8208 30.7123 15.8208 30.7905C15.8208 30.8688 15.8842 30.9322 15.9625 30.9322H19.4542C19.5324 30.9322 19.5959 30.8688 19.5959 30.7905C19.5959 30.7123 19.5324 30.6489 19.4542 30.6489Z"
                                        fill="white" />
                                    <path
                                        d="M18.8689 31.2326H15.9397C15.874 31.2326 15.8208 31.296 15.8208 31.3743C15.8208 31.4525 15.874 31.5159 15.9397 31.5159H18.8689C18.9346 31.5159 18.9878 31.4525 18.9878 31.3743C18.9878 31.296 18.9346 31.2326 18.8689 31.2326Z"
                                        fill="white" />
                                    <path
                                        d="M19.4381 32.6489H15.9464C15.8681 32.6489 15.8047 32.7123 15.8047 32.7905C15.8047 32.8688 15.8681 32.9322 15.9464 32.9322H19.4381C19.5163 32.9322 19.5798 32.8688 19.5798 32.7905C19.5798 32.7123 19.5163 32.6489 19.4381 32.6489Z"
                                        fill="white" />
                                    <path
                                        d="M18.8528 33.2326H15.9236C15.8579 33.2326 15.8047 33.296 15.8047 33.3743C15.8047 33.4525 15.8579 33.5159 15.9236 33.5159H18.8528C18.9185 33.5159 18.9717 33.4525 18.9717 33.3743C18.9717 33.296 18.9185 33.2326 18.8528 33.2326Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M26.2281 22.7629C29.1048 22.7629 31.4368 25.0949 31.4368 27.9715C31.4368 29.1179 31.0661 30.1774 30.4385 31.0377L35.0506 35.5799C35.3768 35.9011 35.3808 36.4308 35.0596 36.7569C34.7384 37.0831 34.2087 37.0871 33.8826 36.7659L29.2563 32.2097C28.403 32.8205 27.3576 33.1801 26.2281 33.1801C23.3515 33.1801 21.0195 30.8481 21.0195 27.9715C21.0195 25.0949 23.3515 22.7629 26.2281 22.7629ZM26.2281 24.2664C28.2744 24.2664 29.9333 25.9252 29.9333 27.9715C29.9333 30.0178 28.2744 31.6766 26.2281 31.6766C24.1818 31.6766 22.523 30.0178 22.523 27.9715C22.523 25.9252 24.1818 24.2664 26.2281 24.2664Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M25.0497 25.7233C24.7743 25.7233 24.6746 25.329 24.4144 25.329C24.1428 25.329 24.1272 25.3643 23.8722 25.6193C23.5939 25.8975 23.4205 26.1251 23.7735 26.4737C23.9926 26.69 24.0589 26.6893 23.8384 27.1408C23.688 27.4486 23.3175 27.1757 23.0555 27.3875C22.8554 27.5492 22.9029 27.9128 22.9029 28.1987C22.9029 28.5345 23.1635 28.6401 23.4723 28.637C23.6874 28.6348 23.7616 28.6182 23.8384 28.7747C23.8767 28.8528 23.9762 29.0855 23.9762 29.1626C23.9762 29.4559 23.5819 29.3979 23.5819 29.8855C23.5819 30.0714 24.0791 30.5245 24.1922 30.5679C24.3728 30.637 24.527 30.5886 24.6503 30.4719C25.0147 30.1269 24.9058 30.1332 25.3762 30.3258C25.7031 30.4597 25.4414 30.8096 25.6191 31.0905C25.7689 31.3276 26.141 31.2656 26.4736 31.2656C26.6218 31.2656 26.74 31.1831 26.8064 31.0947C27.0067 30.828 26.7433 30.4553 27.0465 30.3271C27.7058 30.0481 27.4214 30.2685 27.862 30.5345C28.213 30.7463 28.4142 30.4379 28.7361 30.1107C28.7769 30.0693 28.7955 30.0489 28.8183 29.9958C29.0227 29.5203 28.3935 29.409 28.4576 29.1103C28.476 29.0245 28.5351 28.9119 28.5701 28.8275C28.6925 28.5327 28.8174 28.6779 29.1414 28.6321C29.6069 28.5662 29.5186 28.1106 29.5186 27.6949C29.5186 27.4813 29.3555 27.3086 29.147 27.2998C28.5816 27.276 28.6912 27.3284 28.5255 26.9793C28.4976 26.9205 28.4831 26.9059 28.4648 26.8408C28.4312 26.7215 28.4713 26.6494 28.5485 26.5715C28.935 26.1814 29.0039 26.0739 28.5712 25.6412C28.3613 25.4313 28.3194 25.329 28.0508 25.329C27.7496 25.329 27.6413 25.7233 27.4375 25.7233C27.3654 25.7233 26.9852 25.6162 26.914 25.4801C26.8767 25.409 26.8886 25.3439 26.8897 25.2415C26.8975 24.5646 26.5276 24.6499 25.9698 24.6499C25.8418 24.6499 25.6974 24.7321 25.6404 24.8025C25.5416 24.9248 25.5517 25.0033 25.5538 25.2198C25.5557 25.4137 25.5398 25.5072 25.4084 25.5781C25.372 25.5977 25.0697 25.7233 25.0497 25.7233ZM26.2116 29.4702C27.0459 29.4702 27.7221 28.794 27.7221 27.9597C27.7221 27.1254 27.0459 26.4491 26.2116 26.4491C25.3774 26.4491 24.701 27.1254 24.701 27.9597C24.701 28.794 25.3774 29.4702 26.2116 29.4702Z"
                                        fill="white" />
                                </svg>
                                <div class="flex flex-col pl-2">
                                    <div
                                        class="dark:text-borderconcours text-xs text-txtcommentply font-bold font-inter leading-5 ">
                                        Planificación y Programación de Mantenimiento
                                    </div>
                                    <div
                                        class="text-gray-600 dark:text-pricingdarkstudents font-medium font-inter text-xs pt-4">
                                        USD 9.99
                                    </div>
                                </div>
                                <div>
                                    <button>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.8335 5.83333L15.1107 15.9521C15.0484 16.8242 14.3227 17.5 13.4483 17.5H6.55203C5.67763 17.5 4.95189 16.8242 4.8896 15.9521L4.16683 5.83333M8.33349 9.16666V14.1667M11.6668 9.16666V14.1667M12.5002 5.83333V3.33333C12.5002 2.8731 12.1271 2.5 11.6668 2.5H8.33349C7.87326 2.5 7.50016 2.8731 7.50016 3.33333V5.83333M3.3335 5.83333H16.6668"
                                                stroke="#FF897A" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </button>
                                </div>

                            </div>
                            <div class="bg-borderconcours  dark:bg-txtcommentply h-0.5 mt-3">

                            </div>
                        </div>
                        <div class="px-5 bg-bgfondopricingwhite dark:bg-pricingcintadark ">
                            <div class="flex  items-center pt-4 ">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.0001 48C37.2549 48 48.0001 37.2548 48.0001 23.9999C48.0001 10.7451 37.2549 -0.00012207 24.0001 -0.00012207C10.7452 -0.00012207 0 10.7451 0 23.9999C0 37.2548 10.7452 48 24.0001 48Z"
                                        fill="#999999" />
                                    <path
                                        d="M23.9995 44.9809C35.5869 44.9809 44.9804 35.5874 44.9804 23.9999C44.9804 12.4125 35.5869 3.01904 23.9995 3.01904C12.412 3.01904 3.01855 12.4125 3.01855 23.9999C3.01855 35.5874 12.412 44.9809 23.9995 44.9809Z"
                                        fill="#424F4F" />
                                    <path
                                        d="M24.0003 43.3151C34.6678 43.3151 43.3155 34.6674 43.3155 23.9999C43.3155 13.3324 34.6678 4.68469 24.0003 4.68469C13.3328 4.68469 4.68506 13.3324 4.68506 23.9999C4.68506 34.6674 13.3328 43.3151 24.0003 43.3151Z"
                                        fill="#424F4F" />
                                    <path d="M31.1686 35.2437H12.7002V10.9957H28.0142L31.1686 14.7537V24.127"
                                        stroke="white" stroke-width="0.854422" stroke-miterlimit="22.9256"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M28.0139 10.9957L27.4507 14.8009L31.1683 14.7537L28.0139 10.9957Z"
                                        stroke="white" stroke-width="0.854422" stroke-miterlimit="22.9256"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M24.5769 20.7229L25.2978 17.1635M13.5474 25.1436L15.849 20.2145L13.5474 25.1436ZM16.5411 20.1356L18.2368 22.7662L18.9949 22.7917L20.0613 20.7042L16.5411 20.1356ZM21.0306 20.1102L23.7144 21.3602L21.0306 20.1102Z"
                                        stroke="white" stroke-width="0.427179" stroke-miterlimit="22.9256"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M16.13 20.2768C16.4981 20.2768 16.7965 19.9783 16.7965 19.6102C16.7965 19.242 16.4981 18.9436 16.13 18.9436C15.7618 18.9436 15.4634 19.242 15.4634 19.6102C15.4634 19.9783 15.7618 20.2768 16.13 20.2768Z"
                                        stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                    <path
                                        d="M18.5968 23.9935C18.9649 23.9935 19.2633 23.6951 19.2633 23.3269C19.2633 22.9588 18.9649 22.6603 18.5968 22.6603C18.2286 22.6603 17.9302 22.9588 17.9302 23.3269C17.9302 23.6951 18.2286 23.9935 18.5968 23.9935Z"
                                        stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                    <path
                                        d="M20.3638 20.7769C20.732 20.7769 21.0304 20.4785 21.0304 20.1103C21.0304 19.7422 20.732 19.4437 20.3638 19.4437C19.9957 19.4437 19.6973 19.7422 19.6973 20.1103C19.6973 20.4785 19.9957 20.7769 20.3638 20.7769Z"
                                        stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                    <path
                                        d="M24.38 22.0268C24.7481 22.0268 25.0465 21.7284 25.0465 21.3602C25.0465 20.9921 24.7481 20.6937 24.38 20.6937C24.0118 20.6937 23.7134 20.9921 23.7134 21.3602C23.7134 21.7284 24.0118 22.0268 24.38 22.0268Z"
                                        stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                    <path
                                        d="M25.4303 17.1769C25.7984 17.1769 26.0968 16.8784 26.0968 16.5103C26.0968 16.1421 25.7984 15.8437 25.4303 15.8437C25.0621 15.8437 24.7637 16.1421 24.7637 16.5103C24.7637 16.8784 25.0621 17.1769 25.4303 17.1769Z"
                                        stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.2094 26.6325H15.1093V27.5324H14.2094V26.6325ZM13.8511 26.2741H15.4677V27.8907H13.8511V26.2741Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.2094 28.6325H15.1093V29.5324H14.2094V28.6325ZM13.8511 28.2741H15.4677V29.8907H13.8511V28.2741Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.2094 30.6325H15.1093V31.5324H14.2094V30.6325ZM13.8511 30.2742H15.4677V31.8908H13.8511V30.2742Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.2094 32.6325H15.1093V33.5324H14.2094V32.6325ZM13.8511 32.2741H15.4677V33.8907H13.8511V32.2741Z"
                                        fill="white" />
                                    <path
                                        d="M19.4884 26.6489H15.9967C15.9184 26.6489 15.855 26.7123 15.855 26.7905C15.855 26.8688 15.9184 26.9322 15.9967 26.9322H19.4884C19.5666 26.9322 19.63 26.8688 19.63 26.7905C19.63 26.7123 19.5666 26.6489 19.4884 26.6489Z"
                                        fill="white" />
                                    <path
                                        d="M18.9031 27.2326H15.9738C15.9082 27.2326 15.855 27.296 15.855 27.3743C15.855 27.4525 15.9082 27.5159 15.9738 27.5159H18.9031C18.9688 27.5159 19.022 27.4525 19.022 27.3743C19.022 27.296 18.9688 27.2326 18.9031 27.2326Z"
                                        fill="white" />
                                    <path
                                        d="M19.4718 28.6489H15.98C15.9018 28.6489 15.8384 28.7124 15.8384 28.7906C15.8384 28.8688 15.9018 28.9323 15.98 28.9323H19.4718C19.55 28.9323 19.6134 28.8688 19.6134 28.7906C19.6134 28.7124 19.55 28.6489 19.4718 28.6489Z"
                                        fill="white" />
                                    <path
                                        d="M18.8865 29.2327H15.9572C15.8916 29.2327 15.8384 29.2961 15.8384 29.3743C15.8384 29.4526 15.8916 29.516 15.9572 29.516H18.8865C18.9522 29.516 19.0054 29.4526 19.0054 29.3743C19.0054 29.2961 18.9522 29.2327 18.8865 29.2327Z"
                                        fill="white" />
                                    <path
                                        d="M19.4542 30.6489H15.9625C15.8842 30.6489 15.8208 30.7123 15.8208 30.7905C15.8208 30.8688 15.8842 30.9322 15.9625 30.9322H19.4542C19.5324 30.9322 19.5959 30.8688 19.5959 30.7905C19.5959 30.7123 19.5324 30.6489 19.4542 30.6489Z"
                                        fill="white" />
                                    <path
                                        d="M18.8689 31.2326H15.9397C15.874 31.2326 15.8208 31.296 15.8208 31.3743C15.8208 31.4525 15.874 31.5159 15.9397 31.5159H18.8689C18.9346 31.5159 18.9878 31.4525 18.9878 31.3743C18.9878 31.296 18.9346 31.2326 18.8689 31.2326Z"
                                        fill="white" />
                                    <path
                                        d="M19.4381 32.6489H15.9464C15.8681 32.6489 15.8047 32.7123 15.8047 32.7905C15.8047 32.8688 15.8681 32.9322 15.9464 32.9322H19.4381C19.5163 32.9322 19.5798 32.8688 19.5798 32.7905C19.5798 32.7123 19.5163 32.6489 19.4381 32.6489Z"
                                        fill="white" />
                                    <path
                                        d="M18.8528 33.2326H15.9236C15.8579 33.2326 15.8047 33.296 15.8047 33.3743C15.8047 33.4525 15.8579 33.5159 15.9236 33.5159H18.8528C18.9185 33.5159 18.9717 33.4525 18.9717 33.3743C18.9717 33.296 18.9185 33.2326 18.8528 33.2326Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M26.2281 22.7629C29.1048 22.7629 31.4368 25.0949 31.4368 27.9715C31.4368 29.1179 31.0661 30.1774 30.4385 31.0377L35.0506 35.5799C35.3768 35.9011 35.3808 36.4308 35.0596 36.7569C34.7384 37.0831 34.2087 37.0871 33.8826 36.7659L29.2563 32.2097C28.403 32.8205 27.3576 33.1801 26.2281 33.1801C23.3515 33.1801 21.0195 30.8481 21.0195 27.9715C21.0195 25.0949 23.3515 22.7629 26.2281 22.7629ZM26.2281 24.2664C28.2744 24.2664 29.9333 25.9252 29.9333 27.9715C29.9333 30.0178 28.2744 31.6766 26.2281 31.6766C24.1818 31.6766 22.523 30.0178 22.523 27.9715C22.523 25.9252 24.1818 24.2664 26.2281 24.2664Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M25.0497 25.7233C24.7743 25.7233 24.6746 25.329 24.4144 25.329C24.1428 25.329 24.1272 25.3643 23.8722 25.6193C23.5939 25.8975 23.4205 26.1251 23.7735 26.4737C23.9926 26.69 24.0589 26.6893 23.8384 27.1408C23.688 27.4486 23.3175 27.1757 23.0555 27.3875C22.8554 27.5492 22.9029 27.9128 22.9029 28.1987C22.9029 28.5345 23.1635 28.6401 23.4723 28.637C23.6874 28.6348 23.7616 28.6182 23.8384 28.7747C23.8767 28.8528 23.9762 29.0855 23.9762 29.1626C23.9762 29.4559 23.5819 29.3979 23.5819 29.8855C23.5819 30.0714 24.0791 30.5245 24.1922 30.5679C24.3728 30.637 24.527 30.5886 24.6503 30.4719C25.0147 30.1269 24.9058 30.1332 25.3762 30.3258C25.7031 30.4597 25.4414 30.8096 25.6191 31.0905C25.7689 31.3276 26.141 31.2656 26.4736 31.2656C26.6218 31.2656 26.74 31.1831 26.8064 31.0947C27.0067 30.828 26.7433 30.4553 27.0465 30.3271C27.7058 30.0481 27.4214 30.2685 27.862 30.5345C28.213 30.7463 28.4142 30.4379 28.7361 30.1107C28.7769 30.0693 28.7955 30.0489 28.8183 29.9958C29.0227 29.5203 28.3935 29.409 28.4576 29.1103C28.476 29.0245 28.5351 28.9119 28.5701 28.8275C28.6925 28.5327 28.8174 28.6779 29.1414 28.6321C29.6069 28.5662 29.5186 28.1106 29.5186 27.6949C29.5186 27.4813 29.3555 27.3086 29.147 27.2998C28.5816 27.276 28.6912 27.3284 28.5255 26.9793C28.4976 26.9205 28.4831 26.9059 28.4648 26.8408C28.4312 26.7215 28.4713 26.6494 28.5485 26.5715C28.935 26.1814 29.0039 26.0739 28.5712 25.6412C28.3613 25.4313 28.3194 25.329 28.0508 25.329C27.7496 25.329 27.6413 25.7233 27.4375 25.7233C27.3654 25.7233 26.9852 25.6162 26.914 25.4801C26.8767 25.409 26.8886 25.3439 26.8897 25.2415C26.8975 24.5646 26.5276 24.6499 25.9698 24.6499C25.8418 24.6499 25.6974 24.7321 25.6404 24.8025C25.5416 24.9248 25.5517 25.0033 25.5538 25.2198C25.5557 25.4137 25.5398 25.5072 25.4084 25.5781C25.372 25.5977 25.0697 25.7233 25.0497 25.7233ZM26.2116 29.4702C27.0459 29.4702 27.7221 28.794 27.7221 27.9597C27.7221 27.1254 27.0459 26.4491 26.2116 26.4491C25.3774 26.4491 24.701 27.1254 24.701 27.9597C24.701 28.794 25.3774 29.4702 26.2116 29.4702Z"
                                        fill="white" />
                                </svg>
                                <div class="flex flex-col pl-2">
                                    <div
                                        class="dark:text-borderconcours text-xs text-txtcommentply font-bold font-inter leading-5 ">
                                        Planificación y Programación de Mantenimiento
                                    </div>
                                    <div
                                        class="text-gray-600 dark:text-pricingdarkstudents font-medium font-inter text-xs pt-4">
                                        USD 9.99
                                    </div>
                                </div>
                                <div>
                                    <button>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.8335 5.83333L15.1107 15.9521C15.0484 16.8242 14.3227 17.5 13.4483 17.5H6.55203C5.67763 17.5 4.95189 16.8242 4.8896 15.9521L4.16683 5.83333M8.33349 9.16666V14.1667M11.6668 9.16666V14.1667M12.5002 5.83333V3.33333C12.5002 2.8731 12.1271 2.5 11.6668 2.5H8.33349C7.87326 2.5 7.50016 2.8731 7.50016 3.33333V5.83333M3.3335 5.83333H16.6668"
                                                stroke="#FF897A" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </button>
                                </div>

                            </div>
                            <div class="bg-borderconcours  dark:bg-txtcommentply h-0.5 mt-3">

                            </div>
                        </div>
                        <div class="px-5 bg-bgfondopricingwhite dark:bg-pricingcintadark pb-6">
                            <div class="flex  items-center pt-4 ">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.0001 48C37.2549 48 48.0001 37.2548 48.0001 23.9999C48.0001 10.7451 37.2549 -0.00012207 24.0001 -0.00012207C10.7452 -0.00012207 0 10.7451 0 23.9999C0 37.2548 10.7452 48 24.0001 48Z"
                                        fill="#999999" />
                                    <path
                                        d="M23.9995 44.9809C35.5869 44.9809 44.9804 35.5874 44.9804 23.9999C44.9804 12.4125 35.5869 3.01904 23.9995 3.01904C12.412 3.01904 3.01855 12.4125 3.01855 23.9999C3.01855 35.5874 12.412 44.9809 23.9995 44.9809Z"
                                        fill="#424F4F" />
                                    <path
                                        d="M24.0003 43.3151C34.6678 43.3151 43.3155 34.6674 43.3155 23.9999C43.3155 13.3324 34.6678 4.68469 24.0003 4.68469C13.3328 4.68469 4.68506 13.3324 4.68506 23.9999C4.68506 34.6674 13.3328 43.3151 24.0003 43.3151Z"
                                        fill="#424F4F" />
                                    <path d="M31.1686 35.2437H12.7002V10.9957H28.0142L31.1686 14.7537V24.127"
                                        stroke="white" stroke-width="0.854422" stroke-miterlimit="22.9256"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M28.0139 10.9957L27.4507 14.8009L31.1683 14.7537L28.0139 10.9957Z"
                                        stroke="white" stroke-width="0.854422" stroke-miterlimit="22.9256"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M24.5769 20.7229L25.2978 17.1635M13.5474 25.1436L15.849 20.2145L13.5474 25.1436ZM16.5411 20.1356L18.2368 22.7662L18.9949 22.7917L20.0613 20.7042L16.5411 20.1356ZM21.0306 20.1102L23.7144 21.3602L21.0306 20.1102Z"
                                        stroke="white" stroke-width="0.427179" stroke-miterlimit="22.9256"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M16.13 20.2768C16.4981 20.2768 16.7965 19.9783 16.7965 19.6102C16.7965 19.242 16.4981 18.9436 16.13 18.9436C15.7618 18.9436 15.4634 19.242 15.4634 19.6102C15.4634 19.9783 15.7618 20.2768 16.13 20.2768Z"
                                        stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                    <path
                                        d="M18.5968 23.9935C18.9649 23.9935 19.2633 23.6951 19.2633 23.3269C19.2633 22.9588 18.9649 22.6603 18.5968 22.6603C18.2286 22.6603 17.9302 22.9588 17.9302 23.3269C17.9302 23.6951 18.2286 23.9935 18.5968 23.9935Z"
                                        stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                    <path
                                        d="M20.3638 20.7769C20.732 20.7769 21.0304 20.4785 21.0304 20.1103C21.0304 19.7422 20.732 19.4437 20.3638 19.4437C19.9957 19.4437 19.6973 19.7422 19.6973 20.1103C19.6973 20.4785 19.9957 20.7769 20.3638 20.7769Z"
                                        stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                    <path
                                        d="M24.38 22.0268C24.7481 22.0268 25.0465 21.7284 25.0465 21.3602C25.0465 20.9921 24.7481 20.6937 24.38 20.6937C24.0118 20.6937 23.7134 20.9921 23.7134 21.3602C23.7134 21.7284 24.0118 22.0268 24.38 22.0268Z"
                                        stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                    <path
                                        d="M25.4303 17.1769C25.7984 17.1769 26.0968 16.8784 26.0968 16.5103C26.0968 16.1421 25.7984 15.8437 25.4303 15.8437C25.0621 15.8437 24.7637 16.1421 24.7637 16.5103C24.7637 16.8784 25.0621 17.1769 25.4303 17.1769Z"
                                        stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.2094 26.6325H15.1093V27.5324H14.2094V26.6325ZM13.8511 26.2741H15.4677V27.8907H13.8511V26.2741Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.2094 28.6325H15.1093V29.5324H14.2094V28.6325ZM13.8511 28.2741H15.4677V29.8907H13.8511V28.2741Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.2094 30.6325H15.1093V31.5324H14.2094V30.6325ZM13.8511 30.2742H15.4677V31.8908H13.8511V30.2742Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.2094 32.6325H15.1093V33.5324H14.2094V32.6325ZM13.8511 32.2741H15.4677V33.8907H13.8511V32.2741Z"
                                        fill="white" />
                                    <path
                                        d="M19.4884 26.6489H15.9967C15.9184 26.6489 15.855 26.7123 15.855 26.7905C15.855 26.8688 15.9184 26.9322 15.9967 26.9322H19.4884C19.5666 26.9322 19.63 26.8688 19.63 26.7905C19.63 26.7123 19.5666 26.6489 19.4884 26.6489Z"
                                        fill="white" />
                                    <path
                                        d="M18.9031 27.2326H15.9738C15.9082 27.2326 15.855 27.296 15.855 27.3743C15.855 27.4525 15.9082 27.5159 15.9738 27.5159H18.9031C18.9688 27.5159 19.022 27.4525 19.022 27.3743C19.022 27.296 18.9688 27.2326 18.9031 27.2326Z"
                                        fill="white" />
                                    <path
                                        d="M19.4718 28.6489H15.98C15.9018 28.6489 15.8384 28.7124 15.8384 28.7906C15.8384 28.8688 15.9018 28.9323 15.98 28.9323H19.4718C19.55 28.9323 19.6134 28.8688 19.6134 28.7906C19.6134 28.7124 19.55 28.6489 19.4718 28.6489Z"
                                        fill="white" />
                                    <path
                                        d="M18.8865 29.2327H15.9572C15.8916 29.2327 15.8384 29.2961 15.8384 29.3743C15.8384 29.4526 15.8916 29.516 15.9572 29.516H18.8865C18.9522 29.516 19.0054 29.4526 19.0054 29.3743C19.0054 29.2961 18.9522 29.2327 18.8865 29.2327Z"
                                        fill="white" />
                                    <path
                                        d="M19.4542 30.6489H15.9625C15.8842 30.6489 15.8208 30.7123 15.8208 30.7905C15.8208 30.8688 15.8842 30.9322 15.9625 30.9322H19.4542C19.5324 30.9322 19.5959 30.8688 19.5959 30.7905C19.5959 30.7123 19.5324 30.6489 19.4542 30.6489Z"
                                        fill="white" />
                                    <path
                                        d="M18.8689 31.2326H15.9397C15.874 31.2326 15.8208 31.296 15.8208 31.3743C15.8208 31.4525 15.874 31.5159 15.9397 31.5159H18.8689C18.9346 31.5159 18.9878 31.4525 18.9878 31.3743C18.9878 31.296 18.9346 31.2326 18.8689 31.2326Z"
                                        fill="white" />
                                    <path
                                        d="M19.4381 32.6489H15.9464C15.8681 32.6489 15.8047 32.7123 15.8047 32.7905C15.8047 32.8688 15.8681 32.9322 15.9464 32.9322H19.4381C19.5163 32.9322 19.5798 32.8688 19.5798 32.7905C19.5798 32.7123 19.5163 32.6489 19.4381 32.6489Z"
                                        fill="white" />
                                    <path
                                        d="M18.8528 33.2326H15.9236C15.8579 33.2326 15.8047 33.296 15.8047 33.3743C15.8047 33.4525 15.8579 33.5159 15.9236 33.5159H18.8528C18.9185 33.5159 18.9717 33.4525 18.9717 33.3743C18.9717 33.296 18.9185 33.2326 18.8528 33.2326Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M26.2281 22.7629C29.1048 22.7629 31.4368 25.0949 31.4368 27.9715C31.4368 29.1179 31.0661 30.1774 30.4385 31.0377L35.0506 35.5799C35.3768 35.9011 35.3808 36.4308 35.0596 36.7569C34.7384 37.0831 34.2087 37.0871 33.8826 36.7659L29.2563 32.2097C28.403 32.8205 27.3576 33.1801 26.2281 33.1801C23.3515 33.1801 21.0195 30.8481 21.0195 27.9715C21.0195 25.0949 23.3515 22.7629 26.2281 22.7629ZM26.2281 24.2664C28.2744 24.2664 29.9333 25.9252 29.9333 27.9715C29.9333 30.0178 28.2744 31.6766 26.2281 31.6766C24.1818 31.6766 22.523 30.0178 22.523 27.9715C22.523 25.9252 24.1818 24.2664 26.2281 24.2664Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M25.0497 25.7233C24.7743 25.7233 24.6746 25.329 24.4144 25.329C24.1428 25.329 24.1272 25.3643 23.8722 25.6193C23.5939 25.8975 23.4205 26.1251 23.7735 26.4737C23.9926 26.69 24.0589 26.6893 23.8384 27.1408C23.688 27.4486 23.3175 27.1757 23.0555 27.3875C22.8554 27.5492 22.9029 27.9128 22.9029 28.1987C22.9029 28.5345 23.1635 28.6401 23.4723 28.637C23.6874 28.6348 23.7616 28.6182 23.8384 28.7747C23.8767 28.8528 23.9762 29.0855 23.9762 29.1626C23.9762 29.4559 23.5819 29.3979 23.5819 29.8855C23.5819 30.0714 24.0791 30.5245 24.1922 30.5679C24.3728 30.637 24.527 30.5886 24.6503 30.4719C25.0147 30.1269 24.9058 30.1332 25.3762 30.3258C25.7031 30.4597 25.4414 30.8096 25.6191 31.0905C25.7689 31.3276 26.141 31.2656 26.4736 31.2656C26.6218 31.2656 26.74 31.1831 26.8064 31.0947C27.0067 30.828 26.7433 30.4553 27.0465 30.3271C27.7058 30.0481 27.4214 30.2685 27.862 30.5345C28.213 30.7463 28.4142 30.4379 28.7361 30.1107C28.7769 30.0693 28.7955 30.0489 28.8183 29.9958C29.0227 29.5203 28.3935 29.409 28.4576 29.1103C28.476 29.0245 28.5351 28.9119 28.5701 28.8275C28.6925 28.5327 28.8174 28.6779 29.1414 28.6321C29.6069 28.5662 29.5186 28.1106 29.5186 27.6949C29.5186 27.4813 29.3555 27.3086 29.147 27.2998C28.5816 27.276 28.6912 27.3284 28.5255 26.9793C28.4976 26.9205 28.4831 26.9059 28.4648 26.8408C28.4312 26.7215 28.4713 26.6494 28.5485 26.5715C28.935 26.1814 29.0039 26.0739 28.5712 25.6412C28.3613 25.4313 28.3194 25.329 28.0508 25.329C27.7496 25.329 27.6413 25.7233 27.4375 25.7233C27.3654 25.7233 26.9852 25.6162 26.914 25.4801C26.8767 25.409 26.8886 25.3439 26.8897 25.2415C26.8975 24.5646 26.5276 24.6499 25.9698 24.6499C25.8418 24.6499 25.6974 24.7321 25.6404 24.8025C25.5416 24.9248 25.5517 25.0033 25.5538 25.2198C25.5557 25.4137 25.5398 25.5072 25.4084 25.5781C25.372 25.5977 25.0697 25.7233 25.0497 25.7233ZM26.2116 29.4702C27.0459 29.4702 27.7221 28.794 27.7221 27.9597C27.7221 27.1254 27.0459 26.4491 26.2116 26.4491C25.3774 26.4491 24.701 27.1254 24.701 27.9597C24.701 28.794 25.3774 29.4702 26.2116 29.4702Z"
                                        fill="white" />
                                </svg>
                                <div class="flex flex-col pl-2">
                                    <div
                                        class="dark:text-borderconcours text-xs text-txtcommentply font-bold font-inter leading-5 ">
                                        Planificación y Programación de Mantenimiento
                                    </div>
                                    <div
                                        class="text-gray-600 dark:text-pricingdarkstudents font-medium font-inter text-xs pt-4">
                                        USD 9.99
                                    </div>
                                </div>
                                <div>
                                    <button>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.8335 5.83333L15.1107 15.9521C15.0484 16.8242 14.3227 17.5 13.4483 17.5H6.55203C5.67763 17.5 4.95189 16.8242 4.8896 15.9521L4.16683 5.83333M8.33349 9.16666V14.1667M11.6668 9.16666V14.1667M12.5002 5.83333V3.33333C12.5002 2.8731 12.1271 2.5 11.6668 2.5H8.33349C7.87326 2.5 7.50016 2.8731 7.50016 3.33333V5.83333M3.3335 5.83333H16.6668"
                                                stroke="#FF897A" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </button>
                                </div>

                            </div>

                        </div>
                        <div class="py-6 px-5 bg-white2 dark:bg-gray12 rounded-b-lg ">
                            <div class="flex justify-between  ">
                                <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                    Total (3 cursos)
                                </div>
                                <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                    USD 27
                                </div>
                            </div>
                            <div class=" pt-3">

                                <button class="rounded-lg w-full py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                    Procede al pago
                                </button>


                            </div>

                        </div>


                    </div>
                </div>
                <div class="sm:hidden flex">
                    <div class=" inset-x-0 w-full  dark:bg-gray12 bg-white2 fixed bottom-0 py-6">
                        <div class="containermygo mx-auto ">
                            <div class=" px-4 gap-x-2 items-center">
                                <div
                                    class="text-sixteen gap-x-2 flex dark:text-bgprogresb text-txtnamecomntpkyr  font-inter font-medium leading-7">
                                    <div>Tienes </div><div class="h-6 w-6 bg-green rounded-full  items-center text-center my-auto"><div class="-mt-0.5">
                                        3
                                    </div>
                                    </div> <div>cursos en tu carro</div>
                                </div>

                                <div class="pt-1">
                                    <div>
                                        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
                                        <div x-data="{ modelOpen: false }">
                                            <button @click="modelOpen =!modelOpen" 
                                            class="bg-transparent w-full focus:outline-none border border-bgbtngreen  font-medium font-inter text-sm px-6 h-11 text-green_especialidad dark:text-delesteicono rounded-lg">
                                            ir a mi carrito
                                          </button> 
                                            
                    
                                            <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto " 
                                                aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                <div
                                                    class="flex items-end  justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                                    <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                                                        x-transition:enter="transition ease-out duration-300 transform"
                                                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                                        x-transition:leave="transition ease-in duration-200 transform"
                                                        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                                        class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-40"
                                                        aria-hidden="true"></div>
                    
                                                    <div x-cloak x-show="modelOpen"
                                                        x-transition:enter="transition ease-out duration-300 transform"
                                                        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                                        x-transition:leave="transition ease-in duration-200 transform"
                                                        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                                        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                                        class="inline-block w-full max-w-xl p-4 mt-28 sm:mb-9 mb-36 overflow-hidden dark:bg-pricingcintadark bg-bgfondopricingwhite text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                                        <div class="">
                                                            <div class="flex items-center justify-between space-x-4">
                                                             
                    
                                                               
                                                            </div>
                                    
                                                            <form class=" flex sm:flex-row flex-col w-full gap-x-3 gap-y-3 " id="carrito ">
                                                                <div>
                                                                    <div class=" py-4 bg-transparent rounded-t-lg">
                                                                        <div class="justify-between flex">
                                            
                                            
                                                                            <div
                                                                                class="dark:text-bgbtngreen  flex items-center text-bcklightbuscador text-lg font-inter font-medium">
                                                                                <svg class="" width="20" height="20" viewBox="0 0 20 20"
                                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M2.99957 0.999329C2.44725 0.999329 1.99951 1.44707 1.99951 1.99939C1.99951 2.5517 2.44725 2.99944 2.99957 2.99944H4.21886L4.52444 4.22175C4.52765 4.23589 4.53115 4.24991 4.53495 4.2638L5.89226 9.69303L4.99963 10.5857C3.73964 11.8457 4.63201 14.0001 6.41393 14.0001H15.0002C15.5525 14.0001 16.0003 13.5523 16.0003 13C16.0003 12.4477 15.5525 12 15.0002 12L6.41393 12L7.41398 10.9999H14.0002C14.379 10.9999 14.7253 10.7859 14.8947 10.4471L17.8948 4.44674C18.0498 4.13673 18.0333 3.76857 17.8511 3.47374C17.6688 3.1789 17.347 2.99944 17.0004 2.99944H6.28053L5.96988 1.75684C5.85858 1.31164 5.45858 0.999329 4.99968 0.999329H2.99957Z"
                                                                                        fill="#5CD685" />
                                                                                    <path
                                                                                        d="M16.0003 16.5002C16.0003 17.3287 15.3287 18.0003 14.5002 18.0003C13.6717 18.0003 13.0001 17.3287 13.0001 16.5002C13.0001 15.6717 13.6717 15.0001 14.5002 15.0001C15.3287 15.0001 16.0003 15.6717 16.0003 16.5002Z"
                                                                                        fill="#5CD685" />
                                                                                    <path
                                                                                        d="M6.49977 18.0003C7.32824 18.0003 7.99985 17.3287 7.99985 16.5002C7.99985 15.6717 7.32824 15.0001 6.49977 15.0001C5.67129 15.0001 4.99968 15.6717 4.99968 16.5002C4.99968 17.3287 5.67129 18.0003 6.49977 18.0003Z"
                                                                                        fill="#5CD685" />
                                                                                </svg> <span class="pl-2">Tu carrito de compras</span>
                                                                            </div>
                                                                            <button @click="modelOpen = false"
                                                                            class="dark:text-borderconcours text-txtcommentply focus:outline-none ">
                                                                            <svg width="20" height="20" viewBox="0 0 20 20"
                                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M5.00049 15.0001L15.0005 5.00011M5.00049 5.00011L15.0005 15.0001"
                                                                                    stroke="Currentcolor" stroke-width="1.66667"
                                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                            </svg>
                            
                                                                        </button>
                                                                        </div>
                                                                    </div>
                                                                    <div class=" bg-bgfondopricingwhite dark:bg-pricingcintadark ">
                                                                        <div class="flex  items-center pt-4 ">
                                                                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M24.0001 48C37.2549 48 48.0001 37.2548 48.0001 23.9999C48.0001 10.7451 37.2549 -0.00012207 24.0001 -0.00012207C10.7452 -0.00012207 0 10.7451 0 23.9999C0 37.2548 10.7452 48 24.0001 48Z"
                                                                                    fill="#999999" />
                                                                                <path
                                                                                    d="M23.9995 44.9809C35.5869 44.9809 44.9804 35.5874 44.9804 23.9999C44.9804 12.4125 35.5869 3.01904 23.9995 3.01904C12.412 3.01904 3.01855 12.4125 3.01855 23.9999C3.01855 35.5874 12.412 44.9809 23.9995 44.9809Z"
                                                                                    fill="#424F4F" />
                                                                                <path
                                                                                    d="M24.0003 43.3151C34.6678 43.3151 43.3155 34.6674 43.3155 23.9999C43.3155 13.3324 34.6678 4.68469 24.0003 4.68469C13.3328 4.68469 4.68506 13.3324 4.68506 23.9999C4.68506 34.6674 13.3328 43.3151 24.0003 43.3151Z"
                                                                                    fill="#424F4F" />
                                                                                <path d="M31.1686 35.2437H12.7002V10.9957H28.0142L31.1686 14.7537V24.127"
                                                                                    stroke="white" stroke-width="0.854422" stroke-miterlimit="22.9256"
                                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M28.0139 10.9957L27.4507 14.8009L31.1683 14.7537L28.0139 10.9957Z"
                                                                                    stroke="white" stroke-width="0.854422" stroke-miterlimit="22.9256"
                                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M24.5769 20.7229L25.2978 17.1635M13.5474 25.1436L15.849 20.2145L13.5474 25.1436ZM16.5411 20.1356L18.2368 22.7662L18.9949 22.7917L20.0613 20.7042L16.5411 20.1356ZM21.0306 20.1102L23.7144 21.3602L21.0306 20.1102Z"
                                                                                    stroke="white" stroke-width="0.427179" stroke-miterlimit="22.9256"
                                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M16.13 20.2768C16.4981 20.2768 16.7965 19.9783 16.7965 19.6102C16.7965 19.242 16.4981 18.9436 16.13 18.9436C15.7618 18.9436 15.4634 19.242 15.4634 19.6102C15.4634 19.9783 15.7618 20.2768 16.13 20.2768Z"
                                                                                    stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                                                                <path
                                                                                    d="M18.5968 23.9935C18.9649 23.9935 19.2633 23.6951 19.2633 23.3269C19.2633 22.9588 18.9649 22.6603 18.5968 22.6603C18.2286 22.6603 17.9302 22.9588 17.9302 23.3269C17.9302 23.6951 18.2286 23.9935 18.5968 23.9935Z"
                                                                                    stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                                                                <path
                                                                                    d="M20.3638 20.7769C20.732 20.7769 21.0304 20.4785 21.0304 20.1103C21.0304 19.7422 20.732 19.4437 20.3638 19.4437C19.9957 19.4437 19.6973 19.7422 19.6973 20.1103C19.6973 20.4785 19.9957 20.7769 20.3638 20.7769Z"
                                                                                    stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                                                                <path
                                                                                    d="M24.38 22.0268C24.7481 22.0268 25.0465 21.7284 25.0465 21.3602C25.0465 20.9921 24.7481 20.6937 24.38 20.6937C24.0118 20.6937 23.7134 20.9921 23.7134 21.3602C23.7134 21.7284 24.0118 22.0268 24.38 22.0268Z"
                                                                                    stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                                                                <path
                                                                                    d="M25.4303 17.1769C25.7984 17.1769 26.0968 16.8784 26.0968 16.5103C26.0968 16.1421 25.7984 15.8437 25.4303 15.8437C25.0621 15.8437 24.7637 16.1421 24.7637 16.5103C24.7637 16.8784 25.0621 17.1769 25.4303 17.1769Z"
                                                                                    stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M14.2094 26.6325H15.1093V27.5324H14.2094V26.6325ZM13.8511 26.2741H15.4677V27.8907H13.8511V26.2741Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M14.2094 28.6325H15.1093V29.5324H14.2094V28.6325ZM13.8511 28.2741H15.4677V29.8907H13.8511V28.2741Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M14.2094 30.6325H15.1093V31.5324H14.2094V30.6325ZM13.8511 30.2742H15.4677V31.8908H13.8511V30.2742Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M14.2094 32.6325H15.1093V33.5324H14.2094V32.6325ZM13.8511 32.2741H15.4677V33.8907H13.8511V32.2741Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M19.4884 26.6489H15.9967C15.9184 26.6489 15.855 26.7123 15.855 26.7905C15.855 26.8688 15.9184 26.9322 15.9967 26.9322H19.4884C19.5666 26.9322 19.63 26.8688 19.63 26.7905C19.63 26.7123 19.5666 26.6489 19.4884 26.6489Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M18.9031 27.2326H15.9738C15.9082 27.2326 15.855 27.296 15.855 27.3743C15.855 27.4525 15.9082 27.5159 15.9738 27.5159H18.9031C18.9688 27.5159 19.022 27.4525 19.022 27.3743C19.022 27.296 18.9688 27.2326 18.9031 27.2326Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M19.4718 28.6489H15.98C15.9018 28.6489 15.8384 28.7124 15.8384 28.7906C15.8384 28.8688 15.9018 28.9323 15.98 28.9323H19.4718C19.55 28.9323 19.6134 28.8688 19.6134 28.7906C19.6134 28.7124 19.55 28.6489 19.4718 28.6489Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M18.8865 29.2327H15.9572C15.8916 29.2327 15.8384 29.2961 15.8384 29.3743C15.8384 29.4526 15.8916 29.516 15.9572 29.516H18.8865C18.9522 29.516 19.0054 29.4526 19.0054 29.3743C19.0054 29.2961 18.9522 29.2327 18.8865 29.2327Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M19.4542 30.6489H15.9625C15.8842 30.6489 15.8208 30.7123 15.8208 30.7905C15.8208 30.8688 15.8842 30.9322 15.9625 30.9322H19.4542C19.5324 30.9322 19.5959 30.8688 19.5959 30.7905C19.5959 30.7123 19.5324 30.6489 19.4542 30.6489Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M18.8689 31.2326H15.9397C15.874 31.2326 15.8208 31.296 15.8208 31.3743C15.8208 31.4525 15.874 31.5159 15.9397 31.5159H18.8689C18.9346 31.5159 18.9878 31.4525 18.9878 31.3743C18.9878 31.296 18.9346 31.2326 18.8689 31.2326Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M19.4381 32.6489H15.9464C15.8681 32.6489 15.8047 32.7123 15.8047 32.7905C15.8047 32.8688 15.8681 32.9322 15.9464 32.9322H19.4381C19.5163 32.9322 19.5798 32.8688 19.5798 32.7905C19.5798 32.7123 19.5163 32.6489 19.4381 32.6489Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M18.8528 33.2326H15.9236C15.8579 33.2326 15.8047 33.296 15.8047 33.3743C15.8047 33.4525 15.8579 33.5159 15.9236 33.5159H18.8528C18.9185 33.5159 18.9717 33.4525 18.9717 33.3743C18.9717 33.296 18.9185 33.2326 18.8528 33.2326Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M26.2281 22.7629C29.1048 22.7629 31.4368 25.0949 31.4368 27.9715C31.4368 29.1179 31.0661 30.1774 30.4385 31.0377L35.0506 35.5799C35.3768 35.9011 35.3808 36.4308 35.0596 36.7569C34.7384 37.0831 34.2087 37.0871 33.8826 36.7659L29.2563 32.2097C28.403 32.8205 27.3576 33.1801 26.2281 33.1801C23.3515 33.1801 21.0195 30.8481 21.0195 27.9715C21.0195 25.0949 23.3515 22.7629 26.2281 22.7629ZM26.2281 24.2664C28.2744 24.2664 29.9333 25.9252 29.9333 27.9715C29.9333 30.0178 28.2744 31.6766 26.2281 31.6766C24.1818 31.6766 22.523 30.0178 22.523 27.9715C22.523 25.9252 24.1818 24.2664 26.2281 24.2664Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M25.0497 25.7233C24.7743 25.7233 24.6746 25.329 24.4144 25.329C24.1428 25.329 24.1272 25.3643 23.8722 25.6193C23.5939 25.8975 23.4205 26.1251 23.7735 26.4737C23.9926 26.69 24.0589 26.6893 23.8384 27.1408C23.688 27.4486 23.3175 27.1757 23.0555 27.3875C22.8554 27.5492 22.9029 27.9128 22.9029 28.1987C22.9029 28.5345 23.1635 28.6401 23.4723 28.637C23.6874 28.6348 23.7616 28.6182 23.8384 28.7747C23.8767 28.8528 23.9762 29.0855 23.9762 29.1626C23.9762 29.4559 23.5819 29.3979 23.5819 29.8855C23.5819 30.0714 24.0791 30.5245 24.1922 30.5679C24.3728 30.637 24.527 30.5886 24.6503 30.4719C25.0147 30.1269 24.9058 30.1332 25.3762 30.3258C25.7031 30.4597 25.4414 30.8096 25.6191 31.0905C25.7689 31.3276 26.141 31.2656 26.4736 31.2656C26.6218 31.2656 26.74 31.1831 26.8064 31.0947C27.0067 30.828 26.7433 30.4553 27.0465 30.3271C27.7058 30.0481 27.4214 30.2685 27.862 30.5345C28.213 30.7463 28.4142 30.4379 28.7361 30.1107C28.7769 30.0693 28.7955 30.0489 28.8183 29.9958C29.0227 29.5203 28.3935 29.409 28.4576 29.1103C28.476 29.0245 28.5351 28.9119 28.5701 28.8275C28.6925 28.5327 28.8174 28.6779 29.1414 28.6321C29.6069 28.5662 29.5186 28.1106 29.5186 27.6949C29.5186 27.4813 29.3555 27.3086 29.147 27.2998C28.5816 27.276 28.6912 27.3284 28.5255 26.9793C28.4976 26.9205 28.4831 26.9059 28.4648 26.8408C28.4312 26.7215 28.4713 26.6494 28.5485 26.5715C28.935 26.1814 29.0039 26.0739 28.5712 25.6412C28.3613 25.4313 28.3194 25.329 28.0508 25.329C27.7496 25.329 27.6413 25.7233 27.4375 25.7233C27.3654 25.7233 26.9852 25.6162 26.914 25.4801C26.8767 25.409 26.8886 25.3439 26.8897 25.2415C26.8975 24.5646 26.5276 24.6499 25.9698 24.6499C25.8418 24.6499 25.6974 24.7321 25.6404 24.8025C25.5416 24.9248 25.5517 25.0033 25.5538 25.2198C25.5557 25.4137 25.5398 25.5072 25.4084 25.5781C25.372 25.5977 25.0697 25.7233 25.0497 25.7233ZM26.2116 29.4702C27.0459 29.4702 27.7221 28.794 27.7221 27.9597C27.7221 27.1254 27.0459 26.4491 26.2116 26.4491C25.3774 26.4491 24.701 27.1254 24.701 27.9597C24.701 28.794 25.3774 29.4702 26.2116 29.4702Z"
                                                                                    fill="white" />
                                                                            </svg>
                                                                            <div class="flex flex-col pl-2">
                                                                                <div
                                                                                    class="dark:text-borderconcours text-xs text-txtcommentply font-bold font-inter leading-5 ">
                                                                                    Planificación y Programación de Mantenimiento
                                                                                </div>
                                                                                <div
                                                                                    class="text-gray-600 dark:text-pricingdarkstudents font-medium font-inter text-xs pt-4">
                                                                                    USD 9.99
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <button>
                                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M15.8335 5.83333L15.1107 15.9521C15.0484 16.8242 14.3227 17.5 13.4483 17.5H6.55203C5.67763 17.5 4.95189 16.8242 4.8896 15.9521L4.16683 5.83333M8.33349 9.16666V14.1667M11.6668 9.16666V14.1667M12.5002 5.83333V3.33333C12.5002 2.8731 12.1271 2.5 11.6668 2.5H8.33349C7.87326 2.5 7.50016 2.8731 7.50016 3.33333V5.83333M3.3335 5.83333H16.6668"
                                                                                            stroke="#FF897A" stroke-width="1.66667" stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                    </svg>
                                            
                                                                                </button>
                                                                            </div>
                                            
                                                                        </div>
                                                                        <div class="bg-borderconcours  dark:bg-txtcommentply h-0.5 mt-3">
                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class=" bg-bgfondopricingwhite dark:bg-pricingcintadark ">
                                                                        <div class="flex  items-center pt-4 ">
                                                                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M24.0001 48C37.2549 48 48.0001 37.2548 48.0001 23.9999C48.0001 10.7451 37.2549 -0.00012207 24.0001 -0.00012207C10.7452 -0.00012207 0 10.7451 0 23.9999C0 37.2548 10.7452 48 24.0001 48Z"
                                                                                    fill="#999999" />
                                                                                <path
                                                                                    d="M23.9995 44.9809C35.5869 44.9809 44.9804 35.5874 44.9804 23.9999C44.9804 12.4125 35.5869 3.01904 23.9995 3.01904C12.412 3.01904 3.01855 12.4125 3.01855 23.9999C3.01855 35.5874 12.412 44.9809 23.9995 44.9809Z"
                                                                                    fill="#424F4F" />
                                                                                <path
                                                                                    d="M24.0003 43.3151C34.6678 43.3151 43.3155 34.6674 43.3155 23.9999C43.3155 13.3324 34.6678 4.68469 24.0003 4.68469C13.3328 4.68469 4.68506 13.3324 4.68506 23.9999C4.68506 34.6674 13.3328 43.3151 24.0003 43.3151Z"
                                                                                    fill="#424F4F" />
                                                                                <path d="M31.1686 35.2437H12.7002V10.9957H28.0142L31.1686 14.7537V24.127"
                                                                                    stroke="white" stroke-width="0.854422" stroke-miterlimit="22.9256"
                                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M28.0139 10.9957L27.4507 14.8009L31.1683 14.7537L28.0139 10.9957Z"
                                                                                    stroke="white" stroke-width="0.854422" stroke-miterlimit="22.9256"
                                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M24.5769 20.7229L25.2978 17.1635M13.5474 25.1436L15.849 20.2145L13.5474 25.1436ZM16.5411 20.1356L18.2368 22.7662L18.9949 22.7917L20.0613 20.7042L16.5411 20.1356ZM21.0306 20.1102L23.7144 21.3602L21.0306 20.1102Z"
                                                                                    stroke="white" stroke-width="0.427179" stroke-miterlimit="22.9256"
                                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M16.13 20.2768C16.4981 20.2768 16.7965 19.9783 16.7965 19.6102C16.7965 19.242 16.4981 18.9436 16.13 18.9436C15.7618 18.9436 15.4634 19.242 15.4634 19.6102C15.4634 19.9783 15.7618 20.2768 16.13 20.2768Z"
                                                                                    stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                                                                <path
                                                                                    d="M18.5968 23.9935C18.9649 23.9935 19.2633 23.6951 19.2633 23.3269C19.2633 22.9588 18.9649 22.6603 18.5968 22.6603C18.2286 22.6603 17.9302 22.9588 17.9302 23.3269C17.9302 23.6951 18.2286 23.9935 18.5968 23.9935Z"
                                                                                    stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                                                                <path
                                                                                    d="M20.3638 20.7769C20.732 20.7769 21.0304 20.4785 21.0304 20.1103C21.0304 19.7422 20.732 19.4437 20.3638 19.4437C19.9957 19.4437 19.6973 19.7422 19.6973 20.1103C19.6973 20.4785 19.9957 20.7769 20.3638 20.7769Z"
                                                                                    stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                                                                <path
                                                                                    d="M24.38 22.0268C24.7481 22.0268 25.0465 21.7284 25.0465 21.3602C25.0465 20.9921 24.7481 20.6937 24.38 20.6937C24.0118 20.6937 23.7134 20.9921 23.7134 21.3602C23.7134 21.7284 24.0118 22.0268 24.38 22.0268Z"
                                                                                    stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                                                                <path
                                                                                    d="M25.4303 17.1769C25.7984 17.1769 26.0968 16.8784 26.0968 16.5103C26.0968 16.1421 25.7984 15.8437 25.4303 15.8437C25.0621 15.8437 24.7637 16.1421 24.7637 16.5103C24.7637 16.8784 25.0621 17.1769 25.4303 17.1769Z"
                                                                                    stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M14.2094 26.6325H15.1093V27.5324H14.2094V26.6325ZM13.8511 26.2741H15.4677V27.8907H13.8511V26.2741Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M14.2094 28.6325H15.1093V29.5324H14.2094V28.6325ZM13.8511 28.2741H15.4677V29.8907H13.8511V28.2741Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M14.2094 30.6325H15.1093V31.5324H14.2094V30.6325ZM13.8511 30.2742H15.4677V31.8908H13.8511V30.2742Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M14.2094 32.6325H15.1093V33.5324H14.2094V32.6325ZM13.8511 32.2741H15.4677V33.8907H13.8511V32.2741Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M19.4884 26.6489H15.9967C15.9184 26.6489 15.855 26.7123 15.855 26.7905C15.855 26.8688 15.9184 26.9322 15.9967 26.9322H19.4884C19.5666 26.9322 19.63 26.8688 19.63 26.7905C19.63 26.7123 19.5666 26.6489 19.4884 26.6489Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M18.9031 27.2326H15.9738C15.9082 27.2326 15.855 27.296 15.855 27.3743C15.855 27.4525 15.9082 27.5159 15.9738 27.5159H18.9031C18.9688 27.5159 19.022 27.4525 19.022 27.3743C19.022 27.296 18.9688 27.2326 18.9031 27.2326Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M19.4718 28.6489H15.98C15.9018 28.6489 15.8384 28.7124 15.8384 28.7906C15.8384 28.8688 15.9018 28.9323 15.98 28.9323H19.4718C19.55 28.9323 19.6134 28.8688 19.6134 28.7906C19.6134 28.7124 19.55 28.6489 19.4718 28.6489Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M18.8865 29.2327H15.9572C15.8916 29.2327 15.8384 29.2961 15.8384 29.3743C15.8384 29.4526 15.8916 29.516 15.9572 29.516H18.8865C18.9522 29.516 19.0054 29.4526 19.0054 29.3743C19.0054 29.2961 18.9522 29.2327 18.8865 29.2327Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M19.4542 30.6489H15.9625C15.8842 30.6489 15.8208 30.7123 15.8208 30.7905C15.8208 30.8688 15.8842 30.9322 15.9625 30.9322H19.4542C19.5324 30.9322 19.5959 30.8688 19.5959 30.7905C19.5959 30.7123 19.5324 30.6489 19.4542 30.6489Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M18.8689 31.2326H15.9397C15.874 31.2326 15.8208 31.296 15.8208 31.3743C15.8208 31.4525 15.874 31.5159 15.9397 31.5159H18.8689C18.9346 31.5159 18.9878 31.4525 18.9878 31.3743C18.9878 31.296 18.9346 31.2326 18.8689 31.2326Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M19.4381 32.6489H15.9464C15.8681 32.6489 15.8047 32.7123 15.8047 32.7905C15.8047 32.8688 15.8681 32.9322 15.9464 32.9322H19.4381C19.5163 32.9322 19.5798 32.8688 19.5798 32.7905C19.5798 32.7123 19.5163 32.6489 19.4381 32.6489Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M18.8528 33.2326H15.9236C15.8579 33.2326 15.8047 33.296 15.8047 33.3743C15.8047 33.4525 15.8579 33.5159 15.9236 33.5159H18.8528C18.9185 33.5159 18.9717 33.4525 18.9717 33.3743C18.9717 33.296 18.9185 33.2326 18.8528 33.2326Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M26.2281 22.7629C29.1048 22.7629 31.4368 25.0949 31.4368 27.9715C31.4368 29.1179 31.0661 30.1774 30.4385 31.0377L35.0506 35.5799C35.3768 35.9011 35.3808 36.4308 35.0596 36.7569C34.7384 37.0831 34.2087 37.0871 33.8826 36.7659L29.2563 32.2097C28.403 32.8205 27.3576 33.1801 26.2281 33.1801C23.3515 33.1801 21.0195 30.8481 21.0195 27.9715C21.0195 25.0949 23.3515 22.7629 26.2281 22.7629ZM26.2281 24.2664C28.2744 24.2664 29.9333 25.9252 29.9333 27.9715C29.9333 30.0178 28.2744 31.6766 26.2281 31.6766C24.1818 31.6766 22.523 30.0178 22.523 27.9715C22.523 25.9252 24.1818 24.2664 26.2281 24.2664Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M25.0497 25.7233C24.7743 25.7233 24.6746 25.329 24.4144 25.329C24.1428 25.329 24.1272 25.3643 23.8722 25.6193C23.5939 25.8975 23.4205 26.1251 23.7735 26.4737C23.9926 26.69 24.0589 26.6893 23.8384 27.1408C23.688 27.4486 23.3175 27.1757 23.0555 27.3875C22.8554 27.5492 22.9029 27.9128 22.9029 28.1987C22.9029 28.5345 23.1635 28.6401 23.4723 28.637C23.6874 28.6348 23.7616 28.6182 23.8384 28.7747C23.8767 28.8528 23.9762 29.0855 23.9762 29.1626C23.9762 29.4559 23.5819 29.3979 23.5819 29.8855C23.5819 30.0714 24.0791 30.5245 24.1922 30.5679C24.3728 30.637 24.527 30.5886 24.6503 30.4719C25.0147 30.1269 24.9058 30.1332 25.3762 30.3258C25.7031 30.4597 25.4414 30.8096 25.6191 31.0905C25.7689 31.3276 26.141 31.2656 26.4736 31.2656C26.6218 31.2656 26.74 31.1831 26.8064 31.0947C27.0067 30.828 26.7433 30.4553 27.0465 30.3271C27.7058 30.0481 27.4214 30.2685 27.862 30.5345C28.213 30.7463 28.4142 30.4379 28.7361 30.1107C28.7769 30.0693 28.7955 30.0489 28.8183 29.9958C29.0227 29.5203 28.3935 29.409 28.4576 29.1103C28.476 29.0245 28.5351 28.9119 28.5701 28.8275C28.6925 28.5327 28.8174 28.6779 29.1414 28.6321C29.6069 28.5662 29.5186 28.1106 29.5186 27.6949C29.5186 27.4813 29.3555 27.3086 29.147 27.2998C28.5816 27.276 28.6912 27.3284 28.5255 26.9793C28.4976 26.9205 28.4831 26.9059 28.4648 26.8408C28.4312 26.7215 28.4713 26.6494 28.5485 26.5715C28.935 26.1814 29.0039 26.0739 28.5712 25.6412C28.3613 25.4313 28.3194 25.329 28.0508 25.329C27.7496 25.329 27.6413 25.7233 27.4375 25.7233C27.3654 25.7233 26.9852 25.6162 26.914 25.4801C26.8767 25.409 26.8886 25.3439 26.8897 25.2415C26.8975 24.5646 26.5276 24.6499 25.9698 24.6499C25.8418 24.6499 25.6974 24.7321 25.6404 24.8025C25.5416 24.9248 25.5517 25.0033 25.5538 25.2198C25.5557 25.4137 25.5398 25.5072 25.4084 25.5781C25.372 25.5977 25.0697 25.7233 25.0497 25.7233ZM26.2116 29.4702C27.0459 29.4702 27.7221 28.794 27.7221 27.9597C27.7221 27.1254 27.0459 26.4491 26.2116 26.4491C25.3774 26.4491 24.701 27.1254 24.701 27.9597C24.701 28.794 25.3774 29.4702 26.2116 29.4702Z"
                                                                                    fill="white" />
                                                                            </svg>
                                                                            <div class="flex flex-col pl-2">
                                                                                <div
                                                                                    class="dark:text-borderconcours text-xs text-txtcommentply font-bold font-inter leading-5 ">
                                                                                    Planificación y Programación de Mantenimiento
                                                                                </div>
                                                                                <div
                                                                                    class="text-gray-600 dark:text-pricingdarkstudents font-medium font-inter text-xs pt-4">
                                                                                    USD 9.99
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <button>
                                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M15.8335 5.83333L15.1107 15.9521C15.0484 16.8242 14.3227 17.5 13.4483 17.5H6.55203C5.67763 17.5 4.95189 16.8242 4.8896 15.9521L4.16683 5.83333M8.33349 9.16666V14.1667M11.6668 9.16666V14.1667M12.5002 5.83333V3.33333C12.5002 2.8731 12.1271 2.5 11.6668 2.5H8.33349C7.87326 2.5 7.50016 2.8731 7.50016 3.33333V5.83333M3.3335 5.83333H16.6668"
                                                                                            stroke="#FF897A" stroke-width="1.66667" stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                    </svg>
                                            
                                                                                </button>
                                                                            </div>
                                            
                                                                        </div>
                                                                        <div class="bg-borderconcours  dark:bg-txtcommentply h-0.5 mt-3">
                                            
                                                                        </div>
                                                                    </div>
                                                                    <div class=" bg-bgfondopricingwhite dark:bg-pricingcintadark pb-6">
                                                                        <div class="flex  items-center pt-4 ">
                                                                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M24.0001 48C37.2549 48 48.0001 37.2548 48.0001 23.9999C48.0001 10.7451 37.2549 -0.00012207 24.0001 -0.00012207C10.7452 -0.00012207 0 10.7451 0 23.9999C0 37.2548 10.7452 48 24.0001 48Z"
                                                                                    fill="#999999" />
                                                                                <path
                                                                                    d="M23.9995 44.9809C35.5869 44.9809 44.9804 35.5874 44.9804 23.9999C44.9804 12.4125 35.5869 3.01904 23.9995 3.01904C12.412 3.01904 3.01855 12.4125 3.01855 23.9999C3.01855 35.5874 12.412 44.9809 23.9995 44.9809Z"
                                                                                    fill="#424F4F" />
                                                                                <path
                                                                                    d="M24.0003 43.3151C34.6678 43.3151 43.3155 34.6674 43.3155 23.9999C43.3155 13.3324 34.6678 4.68469 24.0003 4.68469C13.3328 4.68469 4.68506 13.3324 4.68506 23.9999C4.68506 34.6674 13.3328 43.3151 24.0003 43.3151Z"
                                                                                    fill="#424F4F" />
                                                                                <path d="M31.1686 35.2437H12.7002V10.9957H28.0142L31.1686 14.7537V24.127"
                                                                                    stroke="white" stroke-width="0.854422" stroke-miterlimit="22.9256"
                                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M28.0139 10.9957L27.4507 14.8009L31.1683 14.7537L28.0139 10.9957Z"
                                                                                    stroke="white" stroke-width="0.854422" stroke-miterlimit="22.9256"
                                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M24.5769 20.7229L25.2978 17.1635M13.5474 25.1436L15.849 20.2145L13.5474 25.1436ZM16.5411 20.1356L18.2368 22.7662L18.9949 22.7917L20.0613 20.7042L16.5411 20.1356ZM21.0306 20.1102L23.7144 21.3602L21.0306 20.1102Z"
                                                                                    stroke="white" stroke-width="0.427179" stroke-miterlimit="22.9256"
                                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M16.13 20.2768C16.4981 20.2768 16.7965 19.9783 16.7965 19.6102C16.7965 19.242 16.4981 18.9436 16.13 18.9436C15.7618 18.9436 15.4634 19.242 15.4634 19.6102C15.4634 19.9783 15.7618 20.2768 16.13 20.2768Z"
                                                                                    stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                                                                <path
                                                                                    d="M18.5968 23.9935C18.9649 23.9935 19.2633 23.6951 19.2633 23.3269C19.2633 22.9588 18.9649 22.6603 18.5968 22.6603C18.2286 22.6603 17.9302 22.9588 17.9302 23.3269C17.9302 23.6951 18.2286 23.9935 18.5968 23.9935Z"
                                                                                    stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                                                                <path
                                                                                    d="M20.3638 20.7769C20.732 20.7769 21.0304 20.4785 21.0304 20.1103C21.0304 19.7422 20.732 19.4437 20.3638 19.4437C19.9957 19.4437 19.6973 19.7422 19.6973 20.1103C19.6973 20.4785 19.9957 20.7769 20.3638 20.7769Z"
                                                                                    stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                                                                <path
                                                                                    d="M24.38 22.0268C24.7481 22.0268 25.0465 21.7284 25.0465 21.3602C25.0465 20.9921 24.7481 20.6937 24.38 20.6937C24.0118 20.6937 23.7134 20.9921 23.7134 21.3602C23.7134 21.7284 24.0118 22.0268 24.38 22.0268Z"
                                                                                    stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                                                                <path
                                                                                    d="M25.4303 17.1769C25.7984 17.1769 26.0968 16.8784 26.0968 16.5103C26.0968 16.1421 25.7984 15.8437 25.4303 15.8437C25.0621 15.8437 24.7637 16.1421 24.7637 16.5103C24.7637 16.8784 25.0621 17.1769 25.4303 17.1769Z"
                                                                                    stroke="white" stroke-width="0.534021" stroke-miterlimit="22.9256" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M14.2094 26.6325H15.1093V27.5324H14.2094V26.6325ZM13.8511 26.2741H15.4677V27.8907H13.8511V26.2741Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M14.2094 28.6325H15.1093V29.5324H14.2094V28.6325ZM13.8511 28.2741H15.4677V29.8907H13.8511V28.2741Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M14.2094 30.6325H15.1093V31.5324H14.2094V30.6325ZM13.8511 30.2742H15.4677V31.8908H13.8511V30.2742Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M14.2094 32.6325H15.1093V33.5324H14.2094V32.6325ZM13.8511 32.2741H15.4677V33.8907H13.8511V32.2741Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M19.4884 26.6489H15.9967C15.9184 26.6489 15.855 26.7123 15.855 26.7905C15.855 26.8688 15.9184 26.9322 15.9967 26.9322H19.4884C19.5666 26.9322 19.63 26.8688 19.63 26.7905C19.63 26.7123 19.5666 26.6489 19.4884 26.6489Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M18.9031 27.2326H15.9738C15.9082 27.2326 15.855 27.296 15.855 27.3743C15.855 27.4525 15.9082 27.5159 15.9738 27.5159H18.9031C18.9688 27.5159 19.022 27.4525 19.022 27.3743C19.022 27.296 18.9688 27.2326 18.9031 27.2326Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M19.4718 28.6489H15.98C15.9018 28.6489 15.8384 28.7124 15.8384 28.7906C15.8384 28.8688 15.9018 28.9323 15.98 28.9323H19.4718C19.55 28.9323 19.6134 28.8688 19.6134 28.7906C19.6134 28.7124 19.55 28.6489 19.4718 28.6489Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M18.8865 29.2327H15.9572C15.8916 29.2327 15.8384 29.2961 15.8384 29.3743C15.8384 29.4526 15.8916 29.516 15.9572 29.516H18.8865C18.9522 29.516 19.0054 29.4526 19.0054 29.3743C19.0054 29.2961 18.9522 29.2327 18.8865 29.2327Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M19.4542 30.6489H15.9625C15.8842 30.6489 15.8208 30.7123 15.8208 30.7905C15.8208 30.8688 15.8842 30.9322 15.9625 30.9322H19.4542C19.5324 30.9322 19.5959 30.8688 19.5959 30.7905C19.5959 30.7123 19.5324 30.6489 19.4542 30.6489Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M18.8689 31.2326H15.9397C15.874 31.2326 15.8208 31.296 15.8208 31.3743C15.8208 31.4525 15.874 31.5159 15.9397 31.5159H18.8689C18.9346 31.5159 18.9878 31.4525 18.9878 31.3743C18.9878 31.296 18.9346 31.2326 18.8689 31.2326Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M19.4381 32.6489H15.9464C15.8681 32.6489 15.8047 32.7123 15.8047 32.7905C15.8047 32.8688 15.8681 32.9322 15.9464 32.9322H19.4381C19.5163 32.9322 19.5798 32.8688 19.5798 32.7905C19.5798 32.7123 19.5163 32.6489 19.4381 32.6489Z"
                                                                                    fill="white" />
                                                                                <path
                                                                                    d="M18.8528 33.2326H15.9236C15.8579 33.2326 15.8047 33.296 15.8047 33.3743C15.8047 33.4525 15.8579 33.5159 15.9236 33.5159H18.8528C18.9185 33.5159 18.9717 33.4525 18.9717 33.3743C18.9717 33.296 18.9185 33.2326 18.8528 33.2326Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M26.2281 22.7629C29.1048 22.7629 31.4368 25.0949 31.4368 27.9715C31.4368 29.1179 31.0661 30.1774 30.4385 31.0377L35.0506 35.5799C35.3768 35.9011 35.3808 36.4308 35.0596 36.7569C34.7384 37.0831 34.2087 37.0871 33.8826 36.7659L29.2563 32.2097C28.403 32.8205 27.3576 33.1801 26.2281 33.1801C23.3515 33.1801 21.0195 30.8481 21.0195 27.9715C21.0195 25.0949 23.3515 22.7629 26.2281 22.7629ZM26.2281 24.2664C28.2744 24.2664 29.9333 25.9252 29.9333 27.9715C29.9333 30.0178 28.2744 31.6766 26.2281 31.6766C24.1818 31.6766 22.523 30.0178 22.523 27.9715C22.523 25.9252 24.1818 24.2664 26.2281 24.2664Z"
                                                                                    fill="white" />
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M25.0497 25.7233C24.7743 25.7233 24.6746 25.329 24.4144 25.329C24.1428 25.329 24.1272 25.3643 23.8722 25.6193C23.5939 25.8975 23.4205 26.1251 23.7735 26.4737C23.9926 26.69 24.0589 26.6893 23.8384 27.1408C23.688 27.4486 23.3175 27.1757 23.0555 27.3875C22.8554 27.5492 22.9029 27.9128 22.9029 28.1987C22.9029 28.5345 23.1635 28.6401 23.4723 28.637C23.6874 28.6348 23.7616 28.6182 23.8384 28.7747C23.8767 28.8528 23.9762 29.0855 23.9762 29.1626C23.9762 29.4559 23.5819 29.3979 23.5819 29.8855C23.5819 30.0714 24.0791 30.5245 24.1922 30.5679C24.3728 30.637 24.527 30.5886 24.6503 30.4719C25.0147 30.1269 24.9058 30.1332 25.3762 30.3258C25.7031 30.4597 25.4414 30.8096 25.6191 31.0905C25.7689 31.3276 26.141 31.2656 26.4736 31.2656C26.6218 31.2656 26.74 31.1831 26.8064 31.0947C27.0067 30.828 26.7433 30.4553 27.0465 30.3271C27.7058 30.0481 27.4214 30.2685 27.862 30.5345C28.213 30.7463 28.4142 30.4379 28.7361 30.1107C28.7769 30.0693 28.7955 30.0489 28.8183 29.9958C29.0227 29.5203 28.3935 29.409 28.4576 29.1103C28.476 29.0245 28.5351 28.9119 28.5701 28.8275C28.6925 28.5327 28.8174 28.6779 29.1414 28.6321C29.6069 28.5662 29.5186 28.1106 29.5186 27.6949C29.5186 27.4813 29.3555 27.3086 29.147 27.2998C28.5816 27.276 28.6912 27.3284 28.5255 26.9793C28.4976 26.9205 28.4831 26.9059 28.4648 26.8408C28.4312 26.7215 28.4713 26.6494 28.5485 26.5715C28.935 26.1814 29.0039 26.0739 28.5712 25.6412C28.3613 25.4313 28.3194 25.329 28.0508 25.329C27.7496 25.329 27.6413 25.7233 27.4375 25.7233C27.3654 25.7233 26.9852 25.6162 26.914 25.4801C26.8767 25.409 26.8886 25.3439 26.8897 25.2415C26.8975 24.5646 26.5276 24.6499 25.9698 24.6499C25.8418 24.6499 25.6974 24.7321 25.6404 24.8025C25.5416 24.9248 25.5517 25.0033 25.5538 25.2198C25.5557 25.4137 25.5398 25.5072 25.4084 25.5781C25.372 25.5977 25.0697 25.7233 25.0497 25.7233ZM26.2116 29.4702C27.0459 29.4702 27.7221 28.794 27.7221 27.9597C27.7221 27.1254 27.0459 26.4491 26.2116 26.4491C25.3774 26.4491 24.701 27.1254 24.701 27.9597C24.701 28.794 25.3774 29.4702 26.2116 29.4702Z"
                                                                                    fill="white" />
                                                                            </svg>
                                                                            <div class="flex flex-col pl-2">
                                                                                <div
                                                                                    class="dark:text-borderconcours text-xs text-txtcommentply font-bold font-inter leading-5 ">
                                                                                    Planificación y Programación de Mantenimiento
                                                                                </div>
                                                                                <div
                                                                                    class="text-gray-600 dark:text-pricingdarkstudents font-medium font-inter text-xs pt-4">
                                                                                    USD 9.99
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                <button>
                                                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M15.8335 5.83333L15.1107 15.9521C15.0484 16.8242 14.3227 17.5 13.4483 17.5H6.55203C5.67763 17.5 4.95189 16.8242 4.8896 15.9521L4.16683 5.83333M8.33349 9.16666V14.1667M11.6668 9.16666V14.1667M12.5002 5.83333V3.33333C12.5002 2.8731 12.1271 2.5 11.6668 2.5H8.33349C7.87326 2.5 7.50016 2.8731 7.50016 3.33333V5.83333M3.3335 5.83333H16.6668"
                                                                                            stroke="#FF897A" stroke-width="1.66667" stroke-linecap="round"
                                                                                            stroke-linejoin="round" />
                                                                                    </svg>
                                            
                                                                                </button>
                                                                            </div>
                                            
                                                                        </div>
                                            
                                                                    </div>
                                                                    <div class="py-4  bg-transparent rounded-b-lg ">
                                                                        <div class="flex justify-between  ">
                                                                            <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                                                                Total (3 cursos)
                                                                            </div>
                                                                            <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-medium text-sm">
                                                                                USD 27
                                                                            </div>
                                                                        </div>
                                                                        <div class=" pt-3">
                                            
                                                                            <button class="rounded-lg w-full py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                                                                Procede al pago
                                                                            </button>
                                            
                                            
                                                                        </div>
                                            
                                                                    </div>
                                            
                                            
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>







                                    </div>

                                    <script>
                                        var carrito=document.getElementById('carrito');

                                        carrito.addEventListener('click', function() {
                                         carrito.classList.toggle('hidden');})
                                    </script>
                                    <div class="pt-2">


                                        <button
                                            class="  rounded-lg w-full px-5 h-11 bg-bgbtngreen text-green_especialidad font-inter text-sm font-medium focus:outline-none">
                                            proceder a Pagar
                                        </button>
                                    </div>
                                    
                                </div>

                            </div>

                        </div>


                    </div>
                    

                   
                </div>

            </div>
        </div>

    </div>
@endsection
