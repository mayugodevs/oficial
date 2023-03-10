@extends('layout')
@section('content')
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

    <body class="dark:bg-gray14 bg-whiteheader ">


        <div class="mx-auto containermygo pt-28   ">
            <div class="pt-10 md:pt-18 pb-14  ">
                <div class="grid lg:grid-cols-3 grid-cols-1 text-center gap-8 mb-8">

                    <div class="lg:col-span-2 col-span-1  dark:bg-gray14 bg-whiteheader ">
                        <div class="w-full lg:hidden flex mb-5
                               ">
                            <img class=" w-full  "
                                src="https://www.plaremesa.net/wp-content/uploads/2020/10/Industria-metalu%CC%81rgica-2.jpg"
                                alt="">
                        </div>


                        <div class="flex items-end mb-1 sm:px-0 px-4 text-left">
                            <div> <a href="#"
                                    class="text-bgbtnblue  focus:text-bgbtnblue font-inter font-normal text-sm">Inicio</a>
                            </div>
                            <svg width="20" height="20" class="text-black dark:text-white-100" viewBox="0 0 20 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.29279 14.7064C7.10532 14.5189 7 14.2646 7 13.9994C7 13.7343 7.10532 13.48 7.29279 13.2924L10.5858 9.99943L7.29279 6.70643C7.11063 6.51783 7.00983 6.26523 7.01211 6.00303C7.01439 5.74083 7.11956 5.49002 7.30497 5.30461C7.49038 5.1192 7.74119 5.01403 8.00339 5.01176C8.26558 5.00948 8.51818 5.11027 8.70679 5.29243L12.7068 9.29243C12.8943 9.47996 12.9996 9.73427 12.9996 9.99943C12.9996 10.2646 12.8943 10.5189 12.7068 10.7064L8.70679 14.7064C8.51926 14.8939 8.26495 14.9992 7.99979 14.9992C7.73462 14.9992 7.48031 14.8939 7.29279 14.7064Z"
                                    fill="Currentcolor" />
                            </svg>

                            <div> <a href="#"
                                    class="text-bgbtnblue  focus:text-bgbtnblue font-inter font-normal text-sm">Especialidades</a>
                            </div>
                            <svg width="20" height="20" class="text-black dark:text-white-100" viewBox="0 0 20 20"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.29279 14.7064C7.10532 14.5189 7 14.2646 7 13.9994C7 13.7343 7.10532 13.48 7.29279 13.2924L10.5858 9.99943L7.29279 6.70643C7.11063 6.51783 7.00983 6.26523 7.01211 6.00303C7.01439 5.74083 7.11956 5.49002 7.30497 5.30461C7.49038 5.1192 7.74119 5.01403 8.00339 5.01176C8.26558 5.00948 8.51818 5.11027 8.70679 5.29243L12.7068 9.29243C12.8943 9.47996 12.9996 9.73427 12.9996 9.99943C12.9996 10.2646 12.8943 10.5189 12.7068 10.7064L8.70679 14.7064C8.51926 14.8939 8.26495 14.9992 7.99979 14.9992C7.73462 14.9992 7.48031 14.8939 7.29279 14.7064Z"
                                    fill="Currentcolor" />
                            </svg>

                            <div> <a href="#"
                                    class="dark:text-bgprogresb text-txtnamecomntpkyr dark:focus:text-bgbtnblue dark:hover:text-bgbtnblue font-inter font-normal text-sm">Ingenier??a
                                    de costos</a></div>

                        </div>


                        <div
                            class="flex text-left leading-10 sm:text-thirty-two text-twenty-eight  cursor-pointer font-bold font-inter text-txtnamecomntpkyr dark:text-bgprogresb sm:px-0 px-4">
                            {{ $curso->nom }}
                        </div>


                        <div class="flex flex-col  font-serif text-sm mt-4 sm:px-0 px-4">
                            <div>
                                <div
                                    class="text-left dark:text-pricingdarkstudents text-gray-600 leading-6 font-inter text-sixteen font-normal">
                                    Las industrias actuales demandan profesionales competentes; con las herramientas
                                    y pr??cticas aprendidas en este curso podr??s desarrollarte como ingeniero o analista de
                                    costos en cualquier tipo de industria.
                                </div>
                            </div>
                            <div class="flex flex-row mt-6 sm:gap-x-6 gap-x-1.5">


                                <button
                                    class="sm:p-3 p-1 focus:outline-none border border-borderconcours dark:border-txtcommentply rounded-lg dark:bg-pricingdark bg-pricingcintawhite flex flex-col justify-center items-center">
                                    <div class="dark:text-borderconcours text-txtcommentply  ">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.4993 6.66602V9.99935L12.9993 12.4994M17.9993 9.99935C17.9993 14.1415 14.6414 17.4994 10.4993 17.4994C6.35713 17.4994 2.99927 14.1415 2.99927 9.99935C2.99927 5.85722 6.35713 2.49936 10.4993 2.49936C14.6414 2.49936 17.9993 5.85722 17.9993 9.99935Z"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                    <div
                                        class="font-inter font-normal text-sm dark:text-pricingdarkstudents text-gray-600 text-center mt-2">

                                        02 horas
                                    </div>

                                </button>
                                <button
                                    class="sm:p-3 p-1 focus:outline-none border border-borderconcours dark:border-txtcommentply rounded-lg dark:bg-pricingdark bg-pricingcintawhite flex flex-col justify-center items-center">
                                    <div class="dark:text-borderconcours text-txtcommentply  ">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.99933 15.8336V10.8336C7.99933 9.9131 7.25313 9.16691 6.33266 9.16691H4.66599C3.74552 9.16691 2.99933 9.9131 2.99933 10.8336V15.8336C2.99933 16.754 3.74552 17.5002 4.66599 17.5002H6.33266C7.25313 17.5002 7.99933 16.754 7.99933 15.8336ZM7.99933 15.8336V7.50024C7.99933 6.57977 8.74552 5.83358 9.66599 5.83358H11.3327C12.2531 5.83358 12.9993 6.57977 12.9993 7.50024V15.8336M7.99933 15.8336C7.99933 16.754 8.74552 17.5002 9.66599 17.5002H11.3327C12.2531 17.5002 12.9993 16.754 12.9993 15.8336M12.9993 15.8336V4.16691C12.9993 3.24644 13.7455 2.50024 14.666 2.50024H16.3327C17.2531 2.50024 17.9993 3.24644 17.9993 4.16691V15.8336C17.9993 16.754 17.2531 17.5002 16.3327 17.5002H14.666C13.7455 17.5002 12.9993 16.754 12.9993 15.8336Z"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                    </div>
                                    <div
                                        class="font-inter font-normal text-sm dark:text-pricingdarkstudents text-gray-600 text-center mt-2">

                                        Intermedio
                                    </div>

                                </button>

                                <button
                                    class="sm:p-3 p-1 focus:outline-none border border-borderconcours dark:border-txtcommentply rounded-lg dark:bg-pricingdark bg-pricingcintawhite flex flex-col justify-center items-center">
                                    <div class="dark:text-borderconcours text-txtcommentply  ">
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.16648 5.83315V2.49982M13.8331 5.83315V2.49982M6.33315 9.16648H14.6665M4.66648 17.4998H16.3331C17.2536 17.4998 17.9998 16.7536 17.9998 15.8331V5.83315C17.9998 4.91267 17.2536 4.16648 16.3331 4.16648H4.66648C3.74601 4.16648 2.99982 4.91267 2.99982 5.83315V15.8331C2.99982 16.7536 3.74601 17.4998 4.66648 17.4998Z"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                    </div>
                                    <div
                                        class="font-inter font-normal text-sm dark:text-pricingdarkstudents text-gray-600 text-center mt-2">

                                        Certificate
                                    </div>

                                </button>


                                {{-- <button class="bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-700 transition"
                                    onclick="openModal('modal')">Open modal</button>

                                <div id="modal"
                                    class=" hidden z-50 inset-0 bg-gray-900   px-4 modal ">
                                    <div class=" mx-auto shadow-xl rounded-md bg-white ">

                                        <!-- Modal header -->
                                        <div
                                            class="flex justify-between items-center bg-green-500 text-white text-xl rounded-t-md px-4 py-2">
                                            <h3>Modal header</h3>
                                            <button onclick="closeModal('modal')">x</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class=" bg-green p-4">
                                            <p>Scrollable modal body</p>
                                            <p>Scrollable modal body</p>
                                           
                                        </div>

                                        <!-- Modal footer -->
                                        <div
                                            class="px-4 py-2 border-t border-t-gray-500 flex justify-end items-center space-x-4">
                                            <button
                                                class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition"
                                                onclick="closeModal('modal')">Close (ESC)</button>
                                        </div>
                                    </div>
                                </div>

                                <script type="text/javascript">
                                    window.openModal = function(modalId) {
                                        document.getElementById(modalId).style.display = 'block'
                                        document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
                                    }

                                    window.closeModal = function(modalId) {
                                        document.getElementById(modalId).style.display = 'none'
                                        document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
                                    }

                                    // Close all modals when press ESC
                                    document.onkeydown = function(event) {
                                        event = event || window.event;
                                        if (event.keyCode === 27) {
                                            document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
                                            let modals = document.getElementsByClassName('modal');
                                            Array.prototype.slice.call(modals).forEach(i => {
                                                i.style.display = 'none'
                                            })
                                        }
                                    };
                                </script> --}}

                                <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

                                <div x-data="{ modelOpen: false }">
                                    <button @click="modelOpen =!modelOpen"
                                        class="sm:p-3 p-1 focus:outline-none border border-borderconcours dark:border-txtcommentply rounded-lg dark:bg-pricingdark bg-pricingcintawhite flex flex-col justify-center items-center">
                                        <div class="dark:text-borderconcours text-txtcommentply  ">
                                            <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.73628 11.1182C7.90485 10.7817 7.99972 10.4019 7.99972 9.9999C7.99972 9.59793 7.90485 9.21811 7.73628 8.88163M7.73628 11.1182C7.32584 11.9375 6.47846 12.4999 5.49972 12.4999C4.11901 12.4999 2.99973 11.3806 2.99973 9.9999C2.99973 8.61919 4.11901 7.49991 5.49972 7.49991C6.47846 7.49991 7.32584 8.06234 7.73628 8.88163M7.73628 11.1182L13.2632 13.8816M7.73628 8.88163L13.2632 6.11818M13.2632 6.11818C13.6736 6.93748 14.521 7.49991 15.4997 7.49991C16.8804 7.49991 17.9997 6.38062 17.9997 4.99991C17.9997 3.6192 16.8804 2.49991 15.4997 2.49991C14.119 2.49991 12.9997 3.6192 12.9997 4.99991C12.9997 5.40188 13.0946 5.7817 13.2632 6.11818ZM13.2632 13.8816C13.0946 14.2181 12.9997 14.5979 12.9997 14.9999C12.9997 16.3806 14.119 17.4999 15.4997 17.4999C16.8804 17.4999 17.9997 16.3806 17.9997 14.9999C17.9997 13.6192 16.8804 12.4999 15.4997 12.4999C14.521 12.4999 13.6736 13.0623 13.2632 13.8816Z"
                                                    stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>


                                        </div>
                                        <div
                                            class="font-inter font-normal text-sm dark:text-pricingdarkstudents text-gray-600 text-center mt-2">

                                            Comparte
                                        </div>

                                    </button>

                                    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto"
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
                                                class="inline-block w-full max-w-xl p-6 mt-60 sm:mb-9 mb-36 overflow-hidden dark:bg-pricingcintadark bg-bgfondopricingwhite text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                                                <div class="">
                                                    <div class="flex items-center justify-between space-x-4">
                                                        <h1
                                                            class="text-lg sm:text-left text-center font-inter font-medium dark:text-borderconcours text-txtcommentply">
                                                            Recomienda este curso a tus amigos</h1>

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

                                                    <div class="flex mx-auto justify-center gap-x-6 mt-8">
                                                        <button class="focus:outline-none">
                                                            <svg width="33" height="33" viewBox="0 0 33 33"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.998352 16.0046C0.998352 24.8412 8.1618 32.0046 16.9984 32.0046C25.8349 32.0046 32.9984 24.8412 32.9984 16.0046C32.9984 7.16808 25.8349 0.00463867 16.9984 0.00463867C8.1618 0.00463867 0.998352 7.16808 0.998352 16.0046Z"
                                                                    fill="#9AA4B2" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M22.5984 10.3046C21.0984 8.80464 19.0984 8.00464 16.9984 8.00464C12.5984 8.00464 8.99835 11.6046 8.99835 16.0046C8.99835 17.4046 9.39836 18.8046 10.0984 20.0046L8.99835 24.0046L13.1984 22.9046C14.3984 23.5046 15.6984 23.9046 16.9984 23.9046C21.3984 23.9046 24.9984 20.3046 24.9984 15.9046C24.9984 13.8046 24.0984 11.8046 22.5984 10.3046ZM16.9984 22.6046C15.7984 22.6046 14.5984 22.3046 13.5984 21.7046L13.3983 21.6046L10.8983 22.3046L11.5984 19.9046L11.3983 19.6046C10.6983 18.5046 10.3983 17.3046 10.3983 16.1046C10.3983 12.5046 13.3984 9.50464 16.9984 9.50464C18.7984 9.50464 20.3984 10.2046 21.6984 11.4046C22.9984 12.7046 23.5984 14.3046 23.5984 16.1046C23.5984 19.6046 20.6984 22.6046 16.9984 22.6046ZM20.5984 17.6046C20.3984 17.5046 19.3984 17.0046 19.1984 17.0046C18.9984 16.9046 18.8983 16.9046 18.7983 17.1046C18.6983 17.3046 18.2984 17.7046 18.1984 17.9046C18.0984 18.0046 17.9983 18.0046 17.7983 18.0046C17.5983 17.9046 16.9984 17.7046 16.1984 17.0046C15.5984 16.5046 15.1984 15.8046 15.0984 15.6046C14.9984 15.4046 15.0984 15.3046 15.1984 15.2046C15.2984 15.1046 15.3984 15.0046 15.4984 14.9046C15.5984 14.8046 15.5984 14.7046 15.6984 14.6046C15.7984 14.5046 15.6984 14.4046 15.6984 14.3046C15.6984 14.2046 15.2984 13.2046 15.0984 12.8046C14.9984 12.5046 14.7984 12.5046 14.6984 12.5046C14.5984 12.5046 14.4983 12.5046 14.2983 12.5046C14.1983 12.5046 13.9983 12.5046 13.7983 12.7046C13.5983 12.9046 13.0984 13.4046 13.0984 14.4046C13.0984 15.4046 13.7983 16.3046 13.8983 16.5046C13.9983 16.6046 15.2983 18.7046 17.2983 19.5046C18.9983 20.2046 19.2984 20.0046 19.6984 20.0046C20.0984 20.0046 20.8984 19.5046 20.9984 19.1046C21.1984 18.6046 21.1984 18.2046 21.0984 18.2046C20.9984 17.7046 20.7984 17.7046 20.5984 17.6046Z"
                                                                    fill="white" />
                                                            </svg>

                                                        </button>
                                                        <button class="focus:outline-none">
                                                            <svg width="33" height="33" viewBox="0 0 33 33"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.998352 16.0053C0.998352 24.8415 8.16149 32.0046 16.9977 32.0046C25.8338 32.0046 32.997 24.8415 32.997 16.0053C32.997 7.16912 25.8338 0.00598145 16.9977 0.00598145C8.16149 0.00598145 0.998352 7.16912 0.998352 16.0053Z"
                                                                    fill="#9AA4B2" />
                                                                <path
                                                                    d="M24.9973 16.0053C24.9973 11.6055 21.3975 8.00565 16.9976 8.00565C12.5978 8.00565 8.99799 11.6055 8.99799 16.0053C8.99799 20.0051 11.8979 23.305 15.6977 23.905V18.3052H13.6978V16.0053H15.6977V14.2054C15.6977 12.2055 16.8976 11.1055 18.6976 11.1055C19.5975 11.1055 20.4975 11.3055 20.4975 11.3055V13.3054H19.4975C18.4976 13.3054 18.1976 13.9054 18.1976 14.5054V16.0053H20.3975L19.9975 18.3052H18.0976V24.005C22.0974 23.405 24.9973 20.0051 24.9973 16.0053Z"
                                                                    fill="white" />
                                                            </svg>

                                                        </button>
                                                        <button class="focus:outline-none">
                                                            <svg width="33" height="33" viewBox="0 0 33 33"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.996948 16.0046C0.996948 24.8412 8.16039 32.0046 16.9969 32.0046C25.8335 32.0046 32.9969 24.8412 32.9969 16.0046C32.9969 7.16808 25.8335 0.00463867 16.9969 0.00463867C8.16039 0.00463867 0.996948 7.16808 0.996948 16.0046Z"
                                                                    fill="#9AA4B2" />
                                                                <path
                                                                    d="M12.597 24.0046H9.19695V13.3046H12.597V24.0046ZM10.8969 11.8046C9.79695 11.8046 8.99695 11.0046 8.99695 9.90464C8.99695 8.80464 9.89695 8.00464 10.8969 8.00464C11.9969 8.00464 12.797 8.80464 12.797 9.90464C12.797 11.0046 11.9969 11.8046 10.8969 11.8046ZM24.9969 24.0046H21.597V18.2046C21.597 16.5046 20.8969 16.0046 19.8969 16.0046C18.8969 16.0046 17.8969 16.8046 17.8969 18.3046V24.0046H14.4969V13.3046H17.6969V14.8046C17.9969 14.1046 19.1969 13.0046 20.8969 13.0046C22.7969 13.0046 24.797 14.1046 24.797 17.4046V24.0046H24.9969Z"
                                                                    fill="white" />
                                                            </svg>

                                                        </button>
                                                        <button class="focus:outline-none">
                                                            <svg width="34" height="33" viewBox="0 0 34 33"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect x="0.996948" width="32.0047" height="32.0046"
                                                                    rx="16.0023" fill="#9AA4B2" />
                                                                <path
                                                                    d="M25.0004 11.0016C24.4003 11.3016 23.8002 11.4016 23.1001 11.5017C23.8002 11.1016 24.3003 10.5015 24.5003 9.7014C23.9002 10.1015 23.2001 10.3015 22.4 10.5015C21.7999 9.90143 20.8998 9.50137 19.9996 9.50137C17.8993 9.50137 16.2991 11.5017 16.7992 13.502C14.0988 13.4019 11.6984 12.1017 9.99819 10.1015C9.09806 11.6017 9.59813 13.502 10.9983 14.5021C10.4983 14.5021 9.99819 14.3021 9.49812 14.102C9.49812 15.6023 10.5983 17.0025 12.0985 17.4025C11.5984 17.5025 11.0984 17.6025 10.5983 17.5025C10.9983 18.8027 12.1985 19.8029 13.6987 19.8029C12.4986 20.703 10.6983 21.2031 8.99805 21.003C10.4983 21.9032 12.1985 22.5033 13.9988 22.5033C20.0997 22.5033 23.5001 17.4025 23.3001 12.7018C24.0002 12.3018 24.6003 11.7017 25.0004 11.0016Z"
                                                                    fill="white" />
                                                            </svg>

                                                        </button>
                                                    </div>

                                                    <form class="mt-5 flex sm:flex-row flex-col w-full gap-x-3 gap-y-3 ">
                                                        <div class="w-full relative ">

                                                            <input placeholder="https://www.mayugo.net/curso/120"
                                                                type="text"
                                                                class="block  w-full pl-9 py-2.5 rounded-md dark:text-borderconcours text-txtcommentply dark:placeholder-borderconcours placeholder-txtcommentply dark:bg-black bg-white-100 text-sm  font-inter font-normal focus:outline-none ">
                                                            <div class="absolute bottom-2 left-2">
                                                                <svg width="20" height="21" viewBox="0 0 20 21"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M11.5235 8.48083C10.2218 7.17908 8.11121 7.17908 6.80946 8.48083L3.47613 11.8142C2.17438 13.1159 2.17438 15.2265 3.47613 16.5282C4.77787 17.83 6.88842 17.83 8.19017 16.5282L9.10814 15.6102M8.47612 11.5282C9.77787 12.83 11.8884 12.83 13.1902 11.5282L16.5235 8.19488C17.8252 6.89313 17.8252 4.78258 16.5235 3.48083C15.2217 2.17909 13.1112 2.17909 11.8095 3.48083L10.8931 4.39718"
                                                                        stroke="#697586" stroke-width="1.66667"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>

                                                            </div>

                                                        </div>



                                                        <div class=" ">
                                                            <button type="button"
                                                                class="px-5 py-2.5 w-full text-sixteen bg-checkpricingdark dark:text-green_especialidad focus:outline-none rounded-md ">

                                                                Copiar
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="flex flex-row items-center mt-6 sm:px-0 px-4">
                            <div class="flex justify-center">
                                <img src="https://www.mayugo.net/admin/images/picture/2020011122553847682632_605321526566211_8582083275818795008_n.jpg"
                                    alt=""
                                    class="rounded-full mx-auto  w-12 h-12 shadow-2xl border-2 border-green">
                            </div>
                            <div
                                class="font-medium text-sixteen font-inter dark:text-borderconcours text-txtcommentply pl-4">
                                {{ $trabajadores->nombres }}</div>

                        </div>

                        <div class="sm:px-0 px-4">
                            <div class="flex dark:bg-pricingdark bg-bgprogresb p-3 mt-6 gap-x-5 rounded-md items-end ">
                                <div class="sm:flex hidden">
                                    <span
                                        class="dark:bg-yellowdetalle text-sm font-inter font-medium bg-yellowdetalle2 px-3 rounded-xl text-white-100 py-1 dark:text-txtnamecomntpkyr">M??s
                                        popular</span>
                                </div>
                                <div class="flex items-start">
                                    <div class="dark:text-borderconcours text-txtcommentply ">
                                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.3334 4.83382C10.3334 6.67477 8.84103 8.16715 7.00008 8.16715C5.15913 8.16715 3.66675 6.67477 3.66675 4.83382C3.66675 2.99287 5.15913 1.50049 7.00008 1.50049C8.84103 1.50049 10.3334 2.99287 10.3334 4.83382Z"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M7.00008 10.6671C3.77842 10.6671 1.16675 13.2788 1.16675 16.5005H12.8334C12.8334 13.2788 10.2217 10.6671 7.00008 10.6671Z"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                    </div>
                                    <div
                                        class="text-gray-600 dark:text-pricingdarkstudents font-inter font-normal text-sm sm:pl-3 pl-1">
                                        2000 estudiantes
                                    </div>

                                </div>
                                <div class="flex item-start">
                                    <div class="dark:text-borderconcours text-txtcommentply">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.20746 1.43892C8.45694 0.671205 9.54306 0.671206 9.79253 1.43892L11.0582 5.33385C11.1698 5.67717 11.4897 5.90962 11.8507 5.90964L15.9462 5.90979C16.7534 5.90982 17.089 6.94278 16.436 7.41729L13.1228 9.82464C12.8308 10.0368 12.7085 10.4129 12.8201 10.7563L14.0855 14.6513C14.3349 15.419 13.4562 16.0574 12.8031 15.583L9.48979 13.1759C9.19773 12.9637 8.80226 12.9637 8.5102 13.1759L5.19685 15.583C4.54376 16.0574 3.66508 15.419 3.9145 14.6513L5.1799 10.7563C5.29145 10.4129 5.16924 10.0368 4.87719 9.82464L1.56402 7.41729C0.910973 6.94278 1.2466 5.90982 2.05384 5.90979L6.14926 5.90964C6.51025 5.90962 6.83019 5.67717 6.94176 5.33385L8.20746 1.43892Z"
                                                stroke="Currentcolor" stroke-width="1.66667" />
                                        </svg>


                                    </div>
                                    <div
                                        class="text-gray-600 dark:text-pricingdarkstudents font-inter font-normal text-sm sm:pl-3 pl-1">
                                        4.8 de calificaci??n
                                    </div>

                                </div>
                            </div>
                        </div>



                        <div class="rounded-xl lg:hidden flex   bg-bgfondopricingwhite dark:bg-gray11  mt-10">


                            <div class="  px-6 sm:py-8 py-16 lg:w-3/5 md:w-3/5 xl:w-full ml:w-full w-full  mx-auto">
                                <div class="font-inter font-bold  text-lg dark:text-borderconcours text-txtcommentply">
                                    Accede solo a este curso de por vida
                                </div>

                                <div class="flex items-center sm:gap-x-2 gap-x-0.5 mt-3">
                                    <div
                                        class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-bold text-twenty-eight">
                                        USD 9.99
                                    </div>
                                    <div
                                        class="font-inter text-gray-600 dark:text-pricingdarkstudents font-normal text-lg line-through">
                                        USD 19.99
                                    </div>
                                    <div class="bg-redtiket rounded-lg px-3 text-sm font-inter font-medium text-white-100">
                                        50% Dto.
                                    </div>
                                </div>


                                <div class="mt-4">
                                    <button
                                        class="text-green_especialidad py-2 rounded-lg bg-bgbtngreen w-full  focus:outline-none text-lg font-medium">
                                        Comprar ahora
                                    </button>
                                </div>


                                <div
                                    class="dark:text-borderconcours text-txtcommentply font-inter font-bold text-sixteen text-center mt-8 px-6 ">
                                    Accede a todos los cursos y especialidades
                                </div>

                                <button
                                    class="flex bg-morado1 w-full focus:outline-none rounded-lg mt-6 justify-center items-center py-2.5 font-inter font-medium text-lg text-white-100">
                                    <div>
                                        <svg width="21" height="20" class="-mt-1" viewBox="0 0 21 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.4998 6.66709V17.5004M10.4998 6.66709C10.4998 6.66709 10.4998 5.42311 10.4998 5.00043C10.4998 4.07995 11.2459 3.33376 12.1664 3.33376C13.0869 3.33376 13.8331 4.07995 13.8331 5.00043C13.8331 5.9209 13.0869 6.66709 12.1664 6.66709C11.6686 6.66709 10.4998 6.66709 10.4998 6.66709ZM10.4998 6.66709C10.4998 6.66709 10.4998 5.05285 10.4998 4.58376C10.4998 3.43317 9.56701 2.50043 8.41642 2.50043C7.26583 2.50043 6.33309 3.43317 6.33309 4.58376C6.33309 5.73435 7.26583 6.66709 8.41642 6.66709C9.09792 6.66709 10.4998 6.66709 10.4998 6.66709ZM4.66642 10.0004H16.3331M4.66642 10.0004C3.74595 10.0004 2.99976 9.25423 2.99976 8.33376C2.99976 7.41328 3.74595 6.66709 4.66642 6.66709H16.3331C17.2536 6.66709 17.9997 7.41328 17.9997 8.33376C17.9997 9.25423 17.2536 10.0004 16.3331 10.0004M4.66642 10.0004L4.66642 15.8338C4.66642 16.7542 5.41261 17.5004 6.33309 17.5004H14.6664C15.5869 17.5004 16.3331 16.7542 16.3331 15.8338V10.0004"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                    <div class="pl-2">
                                        Subir a Premium
                                    </div>
                                </button>

                                <div class="mt-8 ">
                                    <div
                                        class="dark:text-bgprogresb text-txtnamecomntpkyr font-medium font-inter text-left text-sixteen mb-4">
                                        El curso incluye:
                                    </div>

                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.16699 10.8336L7.50032 14.1669L15.8337 5.83356"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                        <div class="pl-2.5">
                                            Acceso de por vida
                                        </div>
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen mt-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.99932 6.66599V9.99932L12.4993 12.4993M17.4993 9.99932C17.4993 14.1415 14.1415 17.4993 9.99932 17.4993C5.85719 17.4993 2.49933 14.1415 2.49933 9.99932C2.49933 5.85719 5.85719 2.49933 9.99932 2.49933C14.1415 2.49933 17.4993 5.85719 17.4993 9.99932Z"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-2.5">
                                            60 horas acad??micas
                                        </div>
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen mt-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 8.33315V13.3331M10 13.3331L7.50002 10.8331M10 13.3331L12.5 10.8331M14.1667 17.4998H5.83335C4.91288 17.4998 4.16669 16.7536 4.16669 15.8331V4.16648C4.16669 3.24601 4.91288 2.49982 5.83335 2.49982H10.4882C10.7092 2.49982 10.9211 2.58761 11.0774 2.74389L15.5893 7.25574C15.7456 7.41202 15.8333 7.62398 15.8333 7.84499V15.8331C15.8333 16.7536 15.0872 17.4998 14.1667 17.4998Z"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-2.5">
                                            20 Recursos descargables
                                        </div>
                                    </div>

                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen mt-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.99975 11.6666L17.4997 7.49998L9.99975 3.33331L2.49976 7.49998L9.99975 11.6666ZM9.99975 11.6666L15.1323 8.81519C15.5845 9.95547 15.8331 11.1987 15.8331 12.4999C15.8331 13.0844 15.7829 13.6571 15.6867 14.214C13.5117 14.4255 11.5406 15.3338 9.99975 16.7129C8.45889 15.3338 6.48785 14.4255 4.31277 14.214C4.21656 13.6571 4.16642 13.0843 4.16642 12.4999C4.16642 11.1986 4.41496 9.95545 4.86715 8.81518L9.99975 11.6666ZM6.66642 16.6666V10.4166L9.99975 8.56479"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-2.5">
                                            Certificado
                                        </div>
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen mt-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.50024 4.16699L8.0895 3.57774L7.84542 3.33366H7.50024V4.16699ZM9.16691 5.83366L8.57765 6.42291L8.82173 6.66699H9.16691V5.83366ZM13.3336 8.33366C13.3336 8.79389 13.7067 9.16699 14.1669 9.16699C14.6271 9.16699 15.0002 8.79389 15.0002 8.33366H13.3336ZM3.33358 14.167V5.83366H1.66691V14.167H3.33358ZM4.16691 5.00033H7.50024V3.33366H4.16691V5.00033ZM6.91099 4.75625L8.57765 6.42291L9.75616 5.2444L8.0895 3.57774L6.91099 4.75625ZM9.16691 6.66699H12.5002V5.00033H9.16691V6.66699ZM12.5002 6.66699C12.9605 6.66699 13.3336 7.04009 13.3336 7.50032H15.0002C15.0002 6.11961 13.8809 5.00033 12.5002 5.00033V6.66699ZM3.33358 5.83366C3.33358 5.37342 3.70667 5.00033 4.16691 5.00033V3.33366C2.7862 3.33366 1.66691 4.45295
                                                         1.66691 5.83366H3.33358ZM1.66691 14.167C1.66691 15.5477 2.7862 16.667 4.16691 16.667V15.0003C3.70667 15.0003 3.33358 14.6272 3.33358 14.167H1.66691ZM13.3336 7.50032V8.33366H15.0002V7.50032H13.3336ZM6.66691 10.0003C6.66691 9.54009 7.04 9.16699 7.50024 9.16699V7.50032C6.11953 7.50032 5.00024 8.61961 5.00024 10.0003H6.66691ZM7.50024 9.16699H15.8336V7.50032H7.50024V9.16699ZM15.8336 9.16699C16.2938 9.16699 16.6669 9.54009 16.6669 10.0003H18.3336C18.3336 8.61961 17.2143 7.50032 15.8336 7.50032V9.16699ZM16.6669 10.0003V14.167H18.3336V10.0003H16.6669ZM16.6669 14.167C16.6669 14.6272 16.2938 15.0003 15.8336 15.0003V16.667C17.2143 16.667 18.3336 15.5477 18.3336 14.167H16.6669ZM15.8336 15.0003H4.16691V16.667H15.8336V15.
                                                         
                                                         0003ZM4.16691 16.667C5.54762 16.667 6.66691 15.5477 6.66691 14.167H5.00024C5.00024 14.6272 4.62715 15.0003 4.16691 15.0003V16.667ZM6.66691 14.167V10.0003H5.00024V14.167H6.66691Z"
                                                fill="Currentcolor" />
                                        </svg>


                                        <div class="pl-2.5">
                                            10 m??dulos
                                        </div>
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen mt-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.5002 8.33315L16.2942 6.43616C16.8483 6.15911 17.5002 6.56203 17.5002 7.18151V12.8181C17.5002 13.4376 16.8483 13.8405 16.2942 13.5635L12.5002 11.6665M4.16691 14.9998H10.8336C11.754 14.9998 12.5002 14.2536 12.5002 13.3331V6.66648C12.5002 5.74601 11.754 4.99982 10.8336 4.99982H4.16691C3.24644 4.99982 2.50024 5.74601 2.50024 6.66648V13.3331C2.50024 14.2536 3.24644 14.9998 4.16691 14.9998Z"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-2.5">
                                            50 Sesiones de video
                                        </div>
                                    </div>
                                </div>

                                <button
                                    class="mt-8 flex w-full focus:outline-none items-start bg-transparent dark:border-blueintense border-textnavmembership dark:text-blue3 text-blue2 border-2 rounded-lg  justify-center  py-2.5 font-inter font-normal text-lg ">
                                    <div>
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.4998 6.66709V17.5004M10.4998 6.66709C10.4998 6.66709 10.4998 5.42311 10.4998 5.00043C10.4998 4.07995 11.2459 3.33376 12.1664 3.33376C13.0869 3.33376 13.8331 4.07995 13.8331 5.00043C13.8331 5.9209 13.0869 6.66709 12.1664 6.66709C11.6686 6.66709 10.4998 6.66709 10.4998 6.66709ZM10.4998 6.66709C10.4998 6.66709 10.4998 5.05285 10.4998 4.58376C10.4998 3.43317 9.56701 2.50043 8.41642 2.50043C7.26583 2.50043 6.33309 3.43317 6.33309 4.58376C6.33309 5.73435 7.26583 6.66709 8.41642 6.66709C9.09792 6.66709 10.4998 6.66709 10.4998 6.66709ZM4.66642 10.0004H16.3331M4.66642 10.0004C3.74595 10.0004 2.99976 9.25423 2.99976 8.33376C2.99976 7.41328 3.74595 6.66709 4.66642 6.66709H16.3331C17.2536 6.66709 17.9997 7.41328 17.9997 8.33376C17.9997 9.25423 17.2536 10.0004 16.3331 10.0004M4.66642 10.0004L4.66642 15.8338C4.66642 16.7542 5.41261 17.5004 6.33309 17.5004H14.6664C15.5869 17.5004 16.3331 16.7542 16.3331 15.8338V10.0004"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                    <div class="pl-2">
                                        Regalar curso
                                    </div>
                                </button>





                            </div>

                        </div>





                        <div class="sm:px-0 px-4">
                            <div
                                class="dark:text-bgprogresb text-txtnamecomntpkyr  font-inter font-bold sm:text-2xl text-xl sm:mt-10 mt-8 text-left">
                                Descripci??n del curso
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600 text-sixteen leading-6 font-normal font-inter text-left mt-6">
                                {!! nl2br($curso->descrip) !!}
                            </div>


                        </div>

                        <div class="sm:px-0 px-4">
                            <div
                                class="dark:text-bordersec text-gray-650 font-inter font-bold sm:text-2xl text-xl  mt-0 text-left">
                                Lo que aprender??s
                            </div>
                            <div
                                class=" grid sm:grid-cols-2 grid-cols-1 dark:text-pricingdarkstudents text-gray-600 text-sixteen leading-6 font-normal font-inter text-left mt-6 gap-x-3.5">
                                <div class="flex flex-col gap-y-4">
                                    <div class="flex items-start">
                                        <div>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.49975 8.99993L8.16642 10.6666L11.4997 7.33327M16.4997 8.99993C16.4997 13.1421 13.1419 16.4999 8.99975 16.4999C4.85762 16.4999 1.49976 13.1421 1.49976 8.99993C1.49976 4.8578 4.85762 1.49994 8.99975 1.49994C13.1419 1.49994 16.4997 4.8578 16.4997 8.99993Z"
                                                    stroke="#33CC66" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                        <div class="pl-3">
                                            Conocer y aplicar t??cnicas requeridas para el desarrollo y control de programas
                                            de
                                            producci??n,
                                            enmarcado en el contexto de los sistemas producci??n ??? inventarios.
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.49975 8.99993L8.16642 10.6666L11.4997 7.33327M16.4997 8.99993C16.4997 13.1421 13.1419 16.4999 8.99975 16.4999C4.85762 16.4999 1.49976 13.1421 1.49976 8.99993C1.49976 4.8578 4.85762 1.49994 8.99975 1.49994C13.1419 1.49994 16.4997 4.8578 16.4997 8.99993Z"
                                                    stroke="#33CC66" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                        <div class="pl-3">
                                            Conocer y aplicar t??cnicas requeridas para el desarrollo y control
                                            de programas de producci??n, enmarcado en el contexto de los sistemas producci??n
                                            ???
                                            inventarios.
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col gap-y-4">
                                    <div class="flex">
                                        <div>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.49975 8.99993L8.16642 10.6666L11.4997 7.33327M16.4997 8.99993C16.4997 13.1421 13.1419 16.4999 8.99975 16.4999C4.85762 16.4999 1.49976 13.1421 1.49976 8.99993C1.49976 4.8578 4.85762 1.49994 8.99975 1.49994C13.1419 1.49994 16.4997 4.8578 16.4997 8.99993Z"
                                                    stroke="#33CC66" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                        <div class=pl-3>
                                            Aprender a planear y controlar las operaciones, planes maestros e inventarios,
                                            manteniendo
                                            las operaciones eficientes.
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.49975 8.99993L8.16642 10.6666L11.4997 7.33327M16.4997 8.99993C16.4997 13.1421 13.1419 16.4999 8.99975 16.4999C4.85762 16.4999 1.49976 13.1421 1.49976 8.99993C1.49976 4.8578 4.85762 1.49994 8.99975 1.49994C13.1419 1.49994 16.4997 4.8578 16.4997 8.99993Z"
                                                    stroke="#33CC66" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                        <div class="pl-3">
                                            Aprender a planear y controlar las operaciones, planes maestros e inventarios,
                                            manteniendo las operaciones eficientes.
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="sm:px-0 px-4">
                            <div
                                class="dark:text-bordersec text-gray-650 font-inter font-bold sm:text-2xl text-xl  mt-8 text-left">
                                A qui??n va dirigido
                            </div>
                            <div
                                class=" grid sm:grid-cols-2 grid-cols-1 dark:text-pricingdarkstudents text-gray-600 text-sixteen leading-6 font-normal font-inter text-left mt-6 gap-x-3.5">
                                <div class="flex flex-col gap-y-4">
                                    <div class="flex ">
                                        <div>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.49975 8.99993L8.16642 10.6666L11.4997 7.33327M16.4997 8.99993C16.4997 13.1421 13.1419 16.4999 8.99975 16.4999C4.85762 16.4999 1.49976 13.1421 1.49976 8.99993C1.49976 4.8578 4.85762 1.49994 8.99975 1.49994C13.1419 1.49994 16.4997 4.8578 16.4997 8.99993Z"
                                                    stroke="#33CC66" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                        <div class="pl-3">
                                            Directores y profesionales de Operaciones, Calidad, Producci??n con objetivos
                                            alineados
                                            con los de la organizaci??n.
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.49975 8.99993L8.16642 10.6666L11.4997 7.33327M16.4997 8.99993C16.4997 13.1421 13.1419 16.4999 8.99975 16.4999C4.85762 16.4999 1.49976 13.1421 1.49976 8.99993C1.49976 4.8578 4.85762 1.49994 8.99975 1.49994C13.1419 1.49994 16.4997 4.8578 16.4997 8.99993Z"
                                                    stroke="#33CC66" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                        <div class="pl-3">
                                            Profesionales que quieran desarrollar conocimientos
                                            en herramientas estad??sticas para solucionar problemas.
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col gap-y-4">
                                    <div class="flex">
                                        <div>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.49975 8.99993L8.16642 10.6666L11.4997 7.33327M16.4997 8.99993C16.4997 13.1421 13.1419 16.4999 8.99975 16.4999C4.85762 16.4999 1.49976 13.1421 1.49976 8.99993C1.49976 4.8578 4.85762 1.49994 8.99975 1.49994C13.1419 1.49994 16.4997 4.8578 16.4997 8.99993Z"
                                                    stroke="#33CC66" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                        <div class=pl-3>
                                            Empresarios que quieran empezar por la ruta de la mejora continua con las
                                            metodolog??as mas demandadas en la actualidad.
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div>
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6.49975 8.99993L8.16642 10.6666L11.4997 7.33327M16.4997 8.99993C16.4997 13.1421 13.1419 16.4999 8.99975 16.4999C4.85762 16.4999 1.49976 13.1421 1.49976 8.99993C1.49976 4.8578 4.85762 1.49994 8.99975 1.49994C13.1419 1.49994 16.4997 4.8578 16.4997 8.99993Z"
                                                    stroke="#33CC66" stroke-width="1.66667" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </div>
                                        <div class="pl-3">
                                            Estudiantes de las carreras de Ingenier??a Industrial, gesti??n empresarial,
                                            Administraci??n y otras especialidades que tienen relaci??n con el curso.
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="sm:px-0 px-4">
                            <div
                                class="dark:text-bordersec text-gray-650  font-inter font-bold sm:text-2xl text-xl  mt-8 text-left">
                                Qu?? conocimientos previos necesitas
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600 text-sixteen leading-6 font-normal font-inter text-left mt-6">
                                <div class="flex ">
                                    <div>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.49975 8.99993L8.16642 10.6666L11.4997 7.33327M16.4997 8.99993C16.4997 13.1421 13.1419 16.4999 8.99975 16.4999C4.85762 16.4999 1.49976 13.1421 1.49976 8.99993C1.49976 4.8578 4.85762 1.49994 8.99975 1.49994C13.1419 1.49994 16.4997 4.8578 16.4997 8.99993Z"
                                                stroke="#33CC66" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                    <div class="pl-3">
                                        No necesitas saber nada, empezaremos desde cero.
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="sm:px-0 px-4">
                            <div
                                class="dark:text-bordersec text-gray-650  font-inter font-bold sm:text-2xl text-xl  mt-16 text-left">
                                Contenido del curso e
                            </div>


                            <div
                                class="dark:text-pricingdarkstudents text-gray-600 text-sixteen leading-6 font-normal font-inter text-left mt-6">


                                <div id="first" class="py-4">
                                    <div class="block " id="tab-profile">
                                        @foreach ($modulos as $modulo)
                                            <ul class="flex flex-col">
                                                <li class="bg-white pt-3" x-data="accordion({{ $modulo->idc }})">
                                                    <h2 @click="handleClick()"
                                                        class="py-3  w-full  px-4 rounded flex  justify-between dark:bg-gray11 bg-bgprogresb    items-center cursor-pointer ">


                                                        <svg {{-- :class="handleRotate()" --}}
                                                            class="fill-current sm:mt-4 mt-0 h-6 w-6 transform transition-transform duration-500 text-changedarkwhite dark:text-bgprogresb"
                                                            viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M0.293154 0.29291C0.683701 -0.0976366 1.3169 -0.0976366 1.70745 0.29291L5.00053 3.58599L8.29361 0.29291C8.68416 -0.0976366 9.31736 -0.0976366 9.7079 0.29291C10.0984 0.683456 10.0984 1.31666 9.7079 1.7072L5.70768 5.70743C5.31713 6.09798 4.68393 6.09798 4.29338 5.70743L0.293154 1.7072C-0.0973925 1.31666 -0.0973925 0.683456 0.293154 0.29291Z"
                                                                fill="Currentcolor" />
                                                        </svg>


                                                        <div
                                                            class="flex sm:justify-between justify-start sm:flex-row  flex-col w-full sm:items-center items-start  pl-4 ">
                                                            <span
                                                                class="font-inter text-sixteen font-medium dark:text-bgprogresb text-txtnamecomntpkyr ">{{ $modulo->nom }}
                                                            </span>

                                                            <div
                                                                class="font-inter flex items-center text-sixteen font-medium dark:text-bgprogresb text-txtnamecomntpkyr">
                                                                <div>
                                                                    1 clases
                                                                </div>
                                                                <div class="px-1">
                                                                    <svg width="4" height="4"
                                                                        class="text-txtnamecomntpkyr dark:text-bgprogresb"
                                                                        viewBox="0 0 4 4" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="2" cy="2"
                                                                            r="2" fill="Currentcolor" />
                                                                    </svg>

                                                                </div>
                                                                <div>
                                                                    2 h 40 min
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </h2>
                                                    <div class=" px-4  ">
                                                        @foreach ($modulo->cursoContenidos as $contenido)
                                                            <div x-ref="tab" :style="handleToggle()"
                                                                class="  flex flex-row items-center   dark:text-bgprogresb text-txtnamecomntpkyr  cursor-pointer border-purple-600 overflow-hidden  max-h-0 duration-500 transition-all">


                                                                <svg width="20" height="20"
                                                                    class="text-txtnamecomntpkyr dark:text-bgprogresb"
                                                                    viewBox="0 0 20 20" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M13.333 9.16666V10H14.1663V9.16666H13.333ZM6.66634 9.16666H5.83301V10H6.66634V9.16666ZM10.833 12.5C10.833 12.0398 10.4599 11.6667 9.99967 11.6667C9.53943 11.6667 9.16634 12.0398 9.16634 12.5H10.833ZM9.16634 14.1667C9.16634 14.6269 9.53943 15 9.99967 15C10.4599 15 10.833 14.6269 10.833 14.1667H9.16634ZM4.99967 10H14.9997V8.33333H4.99967V10ZM15.833 10.8333V15.8333H17.4997V10.8333H15.833ZM14.9997 16.6667H4.99967V18.3333H14.9997V16.6667ZM4.16634 15.8333V10.8333H2.49967V15.8333H4.16634ZM4.99967 16.6667C4.53944 16.6667 4.16634 16.2936 4.16634 15.8333H2.49967C2.49967 17.214 3.61896 18.3333 4.99967 18.3333V16.6667ZM15.833 15.8333C15.833 16.2936 15.4599 16.6667 14.9997 16.6667V18.3333C16.3804 18.3333 17.4997 17.214 17.4997 15.8333H15.833ZM14.9997 10C15.4599 10 15.833 10.3731 15.833 10.8333H17.4997C17.4997 9.45262 16.3804 8.33333 14.9997 8.33333V10ZM4.99967 8.33333C3.61896 8.33333 2.49967 9.45262 2.49967 10.8333H4.16634C4.16634 10.3731 4.53944 10 4.99967 10V8.33333ZM12.4997 5.83333V9.16666H14.1663V5.83333H12.4997ZM13.333 8.33333H6.66634V10H13.333V8.33333ZM7.49967 9.16666V5.83333H5.83301V9.16666H7.49967ZM9.99967 3.33333C11.3804 3.33333 12.4997 4.45262 12.4997 5.83333H14.1663C14.1663 3.53215 12.3009 1.66667 9.99967 1.66667V3.33333ZM9.99967 1.66667C7.69848 1.66667 5.83301 3.53215 5.83301 5.83333H7.49967C7.49967 4.45262 8.61896 3.33333 9.99967 3.33333V1.66667ZM9.16634 12.5V14.1667H10.833V12.5H9.16634Z"
                                                                        fill="Currentcolor" />
                                                                </svg>


                                                                <div class="justify-between flex w-full my-2  ">
                                                                    <div class="text-left">
                                                                        <p
                                                                            class="font-inter text-sixteen  font-normal dark:text-bgprogresb text-txtnamecomntpkyr  p-4 ">
                                                                            {{ $contenido->modulo }}
                                                                        </p>
                                                                    </div>

                                                                    <div class="">
                                                                        <div
                                                                            class="font-inter text-sixteen  font-normal dark:text-bgprogresb text-txtnamecomntpkyr  p-4 ">
                                                                            00:25

                                                                        </div>
                                                                    </div>

                                                                </div>








                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </li>
                                            </ul>
                                        @endforeach
                                        <script>
                                            document.addEventListener('alpine:init', () => {
                                                Alpine.store('accordion', {
                                                    tab: 0
                                                });

                                                Alpine.data('accordion', (idx) => ({
                                                    init() {
                                                        this.idx = idx;
                                                    },
                                                    idx: -1,
                                                    handleClick() {
                                                        this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                                                    },
                                                    handleRotate() {
                                                        return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                                                    },
                                                    handleToggle() {
                                                        return this.$store.accordion.tab === this.idx ?
                                                            `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                                                    }
                                                }));
                                            })
                                        </script>
                                    </div>
                                </div>
                            </div>



                        </div>


                        <div class="sm:px-0 px-4">
                            <div
                                class="dark:text-bordersec text-gray-650  font-inter font-bold sm:text-2xl text-xl  mt-16 text-left">
                                Instructor(a)
                            </div>
                            <div
                                class="dark:text-pricingdarkstudents text-gray-600 text-sixteen leading-6 font-normal font-inter text-left mt-6">


                                <div class="flex items-left">
                                    <!-- Start of component -->
                                    <div class=" rounded-md tracking-wide ">
                                        <div class="flex">
                                            <img alt="avatar"
                                                class="w-20 h-20 rounded-full border-4 border-bgbtngreen  "
                                                src="https://www.mayugo.net/admin/images/picture/2020011122553847682632_605321526566211_8582083275818795008_n.jpg" />
                                            <div class="leading-5 ml-4 sm">
                                                <h4
                                                    class="font-bold text-lg font-inter dark:text-bgprogresb text-txtnamecomntpkyr ">
                                                    {{ $trabajadores->nombres }}</h4>
                                                <h5
                                                    class="font-medium text-sixteen font-inter dark:text-bordersec text-gray-650 mt-2">
                                                    {!! nl2br($trabajadores->especialidad) !!}
                                                </h5>
                                            </div>
                                        </div>

                                        <div class="mt-4">

                                            {{-- {!! $trabajadores->experiencia !!} --}}

                                            <div
                                                class=" font-medium text-sixteen font-inter dark:text-pricingdarkstudents text-gray-650 leading-6 ">
                                                {!! nl2br($trabajadores->experiencia) !!} </div>
                                        </div>
                                    </div>
                                    <!-- End of component -->
                                </div>
                            </div>



                        </div>


                        <div>
                            <div
                                class="dark:text-bordersec text-gray-650  font-inter font-bold sm:text-2xl text-xl  mt-16 text-left sm:px-0 px-4">
                                Sigue aprendiendo con:
                            </div>
                            <div class="grid sm:grid-cols-3 grid-cols-1 gap-x-5 gap-y-5 sm:px-0 px-4 mt-6">
                                @foreach ($cursos as $curso)
                                    <div class=" ">
                                        <div class=" rounded-2xl">
                                            <img class="rounded-t-2xl"
                                                src="https://www.mayugo.net/admin/images/miniaturas/mejora-continua.jpg"
                                                alt="">
                                        </div>
                                        <div class="dark:bg-pricingcintadark bg-bgfondopricingwhite px-3 pt-3 pb-8">
                                            <div
                                                class="font-inter font-medium text-lg dark:text-bgprogresb text-txtnamecomntpkyr text-left ">
                                                ingeniera de costos aplicado ala industria
                                            </div>
                                            <div class="flex pt-2">
                                                <div
                                                    class="font-inter font-medium text-sm dark:text-gray-400 text-gray-500 ">
                                                    Por :
                                                </div>
                                                <div class="italic font-normal text-sm text-greenhover px-2">
                                                    franklin espinoza
                                                </div>
                                            </div>
                                            <div
                                                class="flex justify-start font-inter font-medium text-sm pt-3 dark:text-gray-400 text-gray-500">
                                                <div class="flex items-center mr-4">
                                                    <button class="focus:outline-none">
                                                        <svg class="" width="14" height="15"
                                                            viewBox="0 0 14 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.36597 1.95109C6.56555 1.33692 7.43444 1.33692 7.63403 1.95109L8.64659 5.06703C8.73584 5.34169 8.99179 5.52765 9.28059 5.52766L12.5569 5.52778C13.2027 5.52781 13.4712 6.35418 12.9488 6.73378L10.2982 8.65966C10.0646 8.82942 9.96684 9.13031 10.0561 9.40498L11.0684 12.521C11.2679 13.1352 10.565 13.6459 10.0425 13.2663L7.39183 11.3407C7.15818 11.1709 6.84181 11.1709 6.60816 11.3407L3.95748 13.2663C3.43501 13.6459 2.73206 13.1352 2.9316 12.521L3.94392 9.40498C4.03316 9.13031 3.93539 8.82942 3.70176 8.65966L1.05122 6.73378C0.528779 6.35418 0.797282 5.52781 1.44307 5.52778L4.7194 5.52766C5.0082 5.52765 5.26415 5.34169 5.35341 5.06703L6.36597 1.95109Z"
                                                                stroke="currentcolor" stroke-width="1.33333" />
                                                        </svg>

                                                    </button>
                                                    <div class="px-1">
                                                        5
                                                    </div>
                                                </div>
                                                <div class="flex items-center mr-4">
                                                    <button class="focus:outline-none">
                                                        <svg width="14" height="14" viewBox="0 0 14 14"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6.99914 4.33284V6.99951L8.99914 8.99951M12.9991 6.99951C12.9991 10.3132 10.3128 12.9995 6.99914 12.9995C3.68544 12.9995 0.999146 10.3132 0.999146 6.99951C0.999146 3.6858 3.68544 0.999512 6.99914 0.999512C10.3128 0.999512 12.9991 3.6858 12.9991 6.99951Z"
                                                                stroke="currentcolor" stroke-width="1.33333"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>

                                                    </button>
                                                    <div class="px-1">
                                                        1h:2m
                                                    </div>
                                                </div>
                                                <div class="flex items-center">
                                                    <button class="focus:outline-none">
                                                        <svg width="16" height="12" viewBox="0 0 16 12"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.3335 11.3337H14.6668V10.0003C14.6668 8.89575 13.7714 8.00032 12.6668 8.00032C12.0298 8.00032 11.4623 8.29819 11.096 8.76225M11.3335 11.3337H4.66683M11.3335 11.3337V10.0003C11.3335 9.56283 11.2492 9.14502 11.096 8.76225M4.66683 11.3337H1.3335V10.0003C1.3335 8.89575 2.22893 8.00032 3.3335 8.00032C3.97057 8.00032 4.53807 8.29819 4.90432 8.76225M4.66683 11.3337V10.0003C4.66683 9.56283 4.75111 9.14502 4.90432 8.76225M4.90432 8.76225C5.39583 7.53434 6.5967 6.66699 8.00016 6.66699C9.40361 6.66699 10.6045 7.53434 11.096 8.76225M10.0002 2.66699C10.0002 3.77156 9.10473 4.66699 8.00016 4.66699C6.89559 4.66699 6.00016 3.77156 6.00016 2.66699C6.00016 1.56242 6.89559 0.666992 8.00016 0.666992C9.10473 0.666992 10.0002 1.56242 10.0002 2.66699ZM14.0002 4.66699C14.0002 5.40337 13.4032 6.00032 12.6668 6.00032C11.9304 6.00032 11.3335 5.40337 11.3335 4.66699C11.3335 3.93061 11.9304 3.33366 12.6668 3.33366C13.4032 3.33366 14.0002 3.93061 14.0002 4.66699ZM4.66683 4.66699C4.66683 5.40337 4.06987 6.00032 3.3335 6.00032C2.59712 6.00032 2.00016 5.40337 2.00016 4.66699C2.00016 3.93061 2.59712 3.33366 3.3335 3.33366C4.06987 3.33366 4.66683 3.93061 4.66683 4.66699Z"
                                                                stroke="currentcolor" stroke-width="1.33333"
                                                                stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>

                                                    </button>
                                                    <div class="px-1">
                                                        5
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div
                                            class="dark:bg-pricingdark bg-pricingcintawhite rounded-b-2xl  items-center flex justify-between p-3">
                                            <div class="flex flex-col   ">
                                                <div
                                                    class="dark:text-checkpricingdark  font-inter text-green_hover text-sixteen font-bold">
                                                    USD 50
                                                </div>
                                                <div class="text-gray-400 line-through text-sm font-normal font-inter">
                                                    USD 100

                                                </div>

                                            </div>
                                            <div>
                                                <button
                                                    class="rounded-lg text-sixteen font-medium px-5 py-2 bg-bgbtngreen text-gray-500 focus:outline-none">
                                                    Comprar
                                                </button>
                                            </div>
                                        </div>


                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div>
                            <div
                                class="dark:text-bordersec text-gray-650  font-inter text-center font-bold sm:text-2xl text-xl  mt-16 mb-6">
                                Preguntas frecuentes
                            </div>

                            <button
                                class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                                id="play1">

                                <div>
                                    <svg id="icon1" class="text-graypricingstrike dark:text-pricingdarkstudents "
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>



                                    <svg id="icon2"
                                        class="text-graypricingstrike dark:text-pricingdarkstudents hidden" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>

                                <div>
                                    <div
                                        class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                                        ??Tengo acceso ilimitado a las clases?

                                    </div>
                                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden"
                                        id="card">
                                        ??S??! Luego de que realices la compra vas a poder acceder a las clases cuando
                                        y donde quieras. El curso se queda en tu cuenta de MayuGo para siempre.

                                    </div>
                                </div>
                            </button>

                            <button
                                class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                                id="play1">

                                <div>
                                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents " width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>



                                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents hidden"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>

                                <div>
                                    <div
                                        class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                                        ??Tengo acceso ilimitado a las clases?

                                    </div>
                                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden"
                                        id="card">
                                        ??S??! Luego de que realices la compra vas a poder acceder a las clases cuando
                                        y donde quieras. El curso se queda en tu cuenta de MayuGo para siempre.

                                    </div>
                                </div>
                            </button>
                            <button
                                class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                                id="play1">

                                <div>
                                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents " width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>



                                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents hidden"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>

                                <div>
                                    <div
                                        class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                                        ??Cu??ndo inicia el curso?

                                    </div>
                                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden"
                                        id="card">
                                        ??S??! Luego de que realices la compra vas a poder acceder a las clases cuando
                                        y donde quieras. El curso se queda en tu cuenta de MayuGo para siempre.

                                    </div>
                                </div>
                            </button>
                            <button
                                class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                                id="play1">

                                <div>
                                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents " width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>



                                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents hidden"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>

                                <div>
                                    <div
                                        class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                                        C??mo obtengo el certificado del curso?

                                    </div>
                                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden"
                                        id="card">
                                        ??S??! Luego de que realices la compra vas a poder acceder a las clases cuando
                                        y donde quieras. El curso se queda en tu cuenta de MayuGo para siempre.

                                    </div>
                                </div>
                            </button>
                            <button
                                class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                                id="play1">

                                <div>
                                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents " width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>



                                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents hidden"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>

                                <div>
                                    <div
                                        class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                                        ??Son cursos grabados o en vivo?

                                    </div>
                                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden"
                                        id="card">
                                        ??S??! Luego de que realices la compra vas a poder acceder a las clases cuando
                                        y donde quieras. El curso se queda en tu cuenta de MayuGo para siempre.

                                    </div>
                                </div>
                            </button>
                            <button
                                class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                                id="play1">

                                <div>
                                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents " width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>



                                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents hidden"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>

                                <div>
                                    <div
                                        class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                                        ??Si subo a PREMIUM tengo acceso a todos los cursos y certificaciones?

                                    </div>
                                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden"
                                        id="card">
                                        ??S??! Luego de que realices la compra vas a poder acceder a las clases cuando
                                        y donde quieras. El curso se queda en tu cuenta de MayuGo para siempre.

                                    </div>
                                </div>
                            </button>

                            <button
                                class="p-8 flex bg-transparent focus:bg-white2 w-full dark:focus:bg-pricingdark rounded-xl gap-x-7 focus:outline-none"
                                id="play1">

                                <div>
                                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents " width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.9997 12H8.99975M20.9997 12C20.9997 16.9706 16.9703 21 11.9998 21C7.02919 21 2.99976 16.9706 2.99976 12C2.99976 7.02943 7.02919 3 11.9998 3C16.9703 3 20.9997 7.02943 20.9997 12Z"
                                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>



                                    <svg class="text-graypricingstrike dark:text-pricingdarkstudents hidden"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0002 9V12M12.0002 12V15M12.0002 12H15.0002M12.0002 12H9.00024M21.0002 12C21.0002 16.9706 16.9708 21 12.0002 21C7.02968 21 3.00024 16.9706 3.00024 12C3.00024 7.02943 7.02968 3 12.0002 3C16.9708 3 21.0002 7.02943 21.0002 12Z"
                                            stroke="Currentcolor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>

                                <div>
                                    <div
                                        class="text-left dark:text-bgprogresb text-lg font-medium font-inter text-txtnamecomntpkyr ">
                                        ??Puedo descargar los videos?

                                    </div>
                                    <div class="dark:text-pricingdarkstudents text-gray-600 font-inter font-normal text-sixteen text-left mt-2 hidden"
                                        id="card">
                                        ??S??! Luego de que realices la compra vas a poder acceder a las clases cuando
                                        y donde quieras. El curso se queda en tu cuenta de MayuGo para siempre.

                                    </div>
                                </div>
                            </button>





                        </div>



                        <!-- Tabs -->


                        <!-- Tab Contents -->



                        <script>
                            document.addEventListener('alpine:init', () => {
                                Alpine.store('accordion', {
                                    tab: 0
                                });

                                Alpine.data('accordion', (idx) => ({
                                    init() {
                                        this.idx = idx;
                                    },
                                    idx: -1,
                                    handleClick() {
                                        this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                                    },
                                    handleRotate() {
                                        return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                                    },
                                    handleToggle() {
                                        return this.$store.accordion.tab === this.idx ?
                                            `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                                    }
                                }));
                            })
                        </script>





                        <script>
                            let tabsContainer = document.querySelector("#tabs");

                            let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

                            console.log(tabTogglers);

                            tabTogglers.forEach(function(toggler) {
                                toggler.addEventListener("click", function(e) {
                                    e.preventDefault();

                                    let tabName = this.getAttribute("href");

                                    let tabContents = document.querySelector("#tab-contents");

                                    for (let i = 0; i < tabContents.children.length; i++) {

                                        tabTogglers[i].parentElement.classList.remove("border-blue");
                                        tabContents.children[i].classList.remove("hidden");
                                        if ("#" + tabContents.children[i].id === tabName) {
                                            continue;
                                        }
                                        tabContents.children[i].classList.add("hidden");

                                    }
                                    e.target.parentElement.classList.add("border-blue");
                                });
                            });
                        </script>

                    </div>

                    {{-- sticky -top-40 --}}

                    <div class="col-span-1 lg:flex  hidden flex-col">

                        <div class="rounded-xl shadow-lg  bg-bgfondopricingwhite dark:bg-colheaderdark ">
                            <div class="w-full 
                              ">
                                <img class=" object-center rounded-t-xl "
                                    src="https://www.plaremesa.net/wp-content/uploads/2020/10/Industria-metalu%CC%81rgica-2.jpg"
                                    alt="">
                            </div>

                            <div class=" px-8 py-8  ">
                                <div class="font-inter font-bold  text-lg dark:text-borderconcours text-txtcommentply">
                                    Accede solo a este curso de por vida
                                </div>

                                <div class="flex items-center justify-center gap-x-2 mt-3">
                                    <div class="dark:text-bgprogresb text-txtnamecomntpkyr font-inter font-bold text-3xl">
                                        USD 9.99
                                    </div>
                                    <div
                                        class="font-inter text-gray-600 dark:text-pricingdarkstudents font-normal text-lg line-through">
                                        USD 19.99
                                    </div>
                                    <div class="bg-redtiket rounded-lg px-3 text-sm font-inter font-medium text-white-100">
                                        50% Dto.
                                    </div>
                                </div>


                                <div class="mt-4">
                                    <button
                                        class="text-green_especialidad py-2 rounded-lg bg-bgbtngreen w-full  focus:outline-none text-lg font-medium">
                                        Comprar ahora
                                    </button>
                                </div>


                                <div
                                    class="dark:text-borderconcours text-txtcommentply font-inter font-bold text-sixteen text-center mt-8 px-6 ">
                                    Accede a todos los cursos y especialidades
                                </div>

                                <button
                                    class="flex bg-morado1 w-full focus:outline-none rounded-lg mt-6 justify-center items-center py-2.5 font-inter font-medium text-lg text-white-100">
                                    <div>
                                        <svg width="21" height="20" viewBox="0 0 21 20" class="-mt-1"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.4998 6.66709V17.5004M10.4998 6.66709C10.4998 6.66709 10.4998 5.42311 10.4998 5.00043C10.4998 4.07995 11.2459 3.33376 12.1664 3.33376C13.0869 3.33376 13.8331 4.07995 13.8331 5.00043C13.8331 5.9209 13.0869 6.66709 12.1664 6.66709C11.6686 6.66709 10.4998 6.66709 10.4998 6.66709ZM10.4998 6.66709C10.4998 6.66709 10.4998 5.05285 10.4998 4.58376C10.4998 3.43317 9.56701 2.50043 8.41642 2.50043C7.26583 2.50043 6.33309 3.43317 6.33309 4.58376C6.33309 5.73435 7.26583 6.66709 8.41642 6.66709C9.09792 6.66709 10.4998 6.66709 10.4998 6.66709ZM4.66642 10.0004H16.3331M4.66642 10.0004C3.74595 10.0004 2.99976 9.25423 2.99976 8.33376C2.99976 7.41328 3.74595 6.66709 4.66642 6.66709H16.3331C17.2536 6.66709 17.9997 7.41328 17.9997 8.33376C17.9997 9.25423 17.2536 10.0004 16.3331 10.0004M4.66642 10.0004L4.66642 15.8338C4.66642 16.7542 5.41261 17.5004 6.33309 17.5004H14.6664C15.5869 17.5004 16.3331 16.7542 16.3331 15.8338V10.0004"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                    <div class="pl-2">
                                        Subir a Premium
                                    </div>
                                </button>

                                <div class="mt-8 ">
                                    <div
                                        class="dark:text-bgprogresb text-txtnamecomntpkyr font-medium font-inter text-left text-sixteen mb-4">
                                        El curso incluye:
                                    </div>

                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.16699 10.8336L7.50032 14.1669L15.8337 5.83356"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                        <div class="pl-2.5">
                                            Acceso de por vida
                                        </div>
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen mt-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.99932 6.66599V9.99932L12.4993 12.4993M17.4993 9.99932C17.4993 14.1415 14.1415 17.4993 9.99932 17.4993C5.85719 17.4993 2.49933 14.1415 2.49933 9.99932C2.49933 5.85719 5.85719 2.49933 9.99932 2.49933C14.1415 2.49933 17.4993 5.85719 17.4993 9.99932Z"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-2.5">
                                            60 horas acad??micas
                                        </div>
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen mt-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 8.33315V13.3331M10 13.3331L7.50002 10.8331M10 13.3331L12.5 10.8331M14.1667 17.4998H5.83335C4.91288 17.4998 4.16669 16.7536 4.16669 15.8331V4.16648C4.16669 3.24601 4.91288 2.49982 5.83335 2.49982H10.4882C10.7092 2.49982 10.9211 2.58761 11.0774 2.74389L15.5893 7.25574C15.7456 7.41202 15.8333 7.62398 15.8333 7.84499V15.8331C15.8333 16.7536 15.0872 17.4998 14.1667 17.4998Z"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-2.5">
                                            20 Recursos descargables
                                        </div>
                                    </div>

                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen mt-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.99975 11.6666L17.4997 7.49998L9.99975 3.33331L2.49976 7.49998L9.99975 11.6666ZM9.99975 11.6666L15.1323 8.81519C15.5845 9.95547 15.8331 11.1987 15.8331 12.4999C15.8331 13.0844 15.7829 13.6571 15.6867 14.214C13.5117 14.4255 11.5406 15.3338 9.99975 16.7129C8.45889 15.3338 6.48785 14.4255 4.31277 14.214C4.21656 13.6571 4.16642 13.0843 4.16642 12.4999C4.16642 11.1986 4.41496 9.95545 4.86715 8.81518L9.99975 11.6666ZM6.66642 16.6666V10.4166L9.99975 8.56479"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-2.5">
                                            Certificado
                                        </div>
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen mt-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.50024 4.16699L8.0895 3.57774L7.84542 3.33366H7.50024V4.16699ZM9.16691 5.83366L8.57765 6.42291L8.82173 6.66699H9.16691V5.83366ZM13.3336 8.33366C13.3336 8.79389 13.7067 9.16699 14.1669 9.16699C14.6271 9.16699 15.0002 8.79389 15.0002 8.33366H13.3336ZM3.33358 14.167V5.83366H1.66691V14.167H3.33358ZM4.16691 5.00033H7.50024V3.33366H4.16691V5.00033ZM6.91099 4.75625L8.57765 6.42291L9.75616 5.2444L8.0895 3.57774L6.91099 4.75625ZM9.16691 6.66699H12.5002V5.00033H9.16691V6.66699ZM12.5002 6.66699C12.9605 6.66699 13.3336 7.04009 13.3336 7.50032H15.0002C15.0002 6.11961 13.8809 5.00033 12.5002 5.00033V6.66699ZM3.33358 5.83366C3.33358 5.37342 3.70667 5.00033 4.16691 5.00033V3.33366C2.7862 3.33366 1.66691 4.45295
                                                         1.66691 5.83366H3.33358ZM1.66691 14.167C1.66691 15.5477 2.7862 16.667 4.16691 16.667V15.0003C3.70667 15.0003 3.33358 14.6272 3.33358 14.167H1.66691ZM13.3336 7.50032V8.33366H15.0002V7.50032H13.3336ZM6.66691 10.0003C6.66691 9.54009 7.04 9.16699 7.50024 9.16699V7.50032C6.11953 7.50032 5.00024 8.61961 5.00024 10.0003H6.66691ZM7.50024 9.16699H15.8336V7.50032H7.50024V9.16699ZM15.8336 9.16699C16.2938 9.16699 16.6669 9.54009 16.6669 10.0003H18.3336C18.3336 8.61961 17.2143 7.50032 15.8336 7.50032V9.16699ZM16.6669 10.0003V14.167H18.3336V10.0003H16.6669ZM16.6669 14.167C16.6669 14.6272 16.2938 15.0003 15.8336 15.0003V16.667C17.2143 16.667 18.3336 15.5477 18.3336 14.167H16.6669ZM15.8336 15.0003H4.16691V16.667H15.8336V15.
                                                         
                                                         0003ZM4.16691 16.667C5.54762 16.667 6.66691 15.5477 6.66691 14.167H5.00024C5.00024 14.6272 4.62715 15.0003 4.16691 15.0003V16.667ZM6.66691 14.167V10.0003H5.00024V14.167H6.66691Z"
                                                fill="Currentcolor" />
                                        </svg>


                                        <div class="pl-2.5">
                                            10 m??dulos
                                        </div>
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen mt-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.5002 8.33315L16.2942 6.43616C16.8483 6.15911 17.5002 6.56203 17.5002 7.18151V12.8181C17.5002 13.4376 16.8483 13.8405 16.2942 13.5635L12.5002 11.6665M4.16691 14.9998H10.8336C11.754 14.9998 12.5002 14.2536 12.5002 13.3331V6.66648C12.5002 5.74601 11.754 4.99982 10.8336 4.99982H4.16691C3.24644 4.99982 2.50024 5.74601 2.50024 6.66648V13.3331C2.50024 14.2536 3.24644 14.9998 4.16691 14.9998Z"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-2.5">
                                            50 Sesiones de video
                                        </div>
                                    </div>
                                </div>

                                <button
                                    class="mt-8 flex w-full focus:outline-none items-center bg-transparent dark:border-blueintense border-textnavmembership dark:text-blue3 text-blue2 border-2 rounded-lg  justify-center  py-2.5 font-inter font-normal text-lg ">
                                    <div>
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            class="-mt-1.5" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.4998 6.66709V17.5004M10.4998 6.66709C10.4998 6.66709 10.4998 5.42311 10.4998 5.00043C10.4998 4.07995 11.2459 3.33376 12.1664 3.33376C13.0869 3.33376 13.8331 4.07995 13.8331 5.00043C13.8331 5.9209 13.0869 6.66709 12.1664 6.66709C11.6686 6.66709 10.4998 6.66709 10.4998 6.66709ZM10.4998 6.66709C10.4998 6.66709 10.4998 5.05285 10.4998 4.58376C10.4998 3.43317 9.56701 2.50043 8.41642 2.50043C7.26583 2.50043 6.33309 3.43317 6.33309 4.58376C6.33309 5.73435 7.26583 6.66709 8.41642 6.66709C9.09792 6.66709 10.4998 6.66709 10.4998 6.66709ZM4.66642 10.0004H16.3331M4.66642 10.0004C3.74595 10.0004 2.99976 9.25423 2.99976 8.33376C2.99976 7.41328 3.74595 6.66709 4.66642 6.66709H16.3331C17.2536 6.66709 17.9997 7.41328 17.9997 8.33376C17.9997 9.25423 17.2536 10.0004 16.3331 10.0004M4.66642 10.0004L4.66642 15.8338C4.66642 16.7542 5.41261 17.5004 6.33309 17.5004H14.6664C15.5869 17.5004 16.3331 16.7542 16.3331 15.8338V10.0004"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                    <div class="pl-2">
                                        Regalar curso
                                    </div>
                                </button>





                            </div>





                            {{-- <div class=" mx-auto ">


                                <div class="mt-4">

                                    <div class="mt-4">
                                        <p class="text-left text-sm   pl-3 pr-3">{!! nl2br($trabajadores->especialidad) !!}</p>
                                    </div>


                                    <div class="col-span-3 row-span-1 mt-4">
                                        <div class="flex items-center justify-between leading-tight pl-3 pr-3">
                                            <h1 class="text-sm">
                                                <span class="no-underline">Precio normal:</span>
                                            </h1>
                                            <p class="line-through text-red-600 text-sm font-serif">{{ $simbolo }}
                                                {{ $curso->predsct * $cambio }} {{ $cod_iso }}</p>
                                        </div>
                                        <div
                                            class="mt-2 pl-3 pr-3 flex items-center justify-between leading-tight border-dashed border-2 border-indigo-500 dark:border-green">
                                            <h1 class="text-lg font-bold">
                                                <span class="no-underline  font-serif"> Precio ahora: </span>
                                            </h1>
                                            <p class="font-bold text-sm font-serif">{{ $simbolo }}
                                                {{ $curso->precio * $cambio }} {{ $cod_iso }}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            @if ($curso->validarCurso($curso->cursoAsignacion->idasig))
                                <button
                                    class="bg-transparent p-1 py-1 px-4 border hover:bg-green-500 text-gray-600 font-semibold hover:text-white  border-green-500 hover:border-transparent rounded">
                                    Seguir Curso
                                </button>
                            @else
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
                                    countdown('November 27 2024 23:59:00 GMT-0500', 'clock1', '??Agotado!');
                                </script>

                                <div
                                    class="mt-4 pl-5 pr-5 pt-2 pb-2 dark:border-gray-900 bg-yellow-300 dark:bg-indigo-700  font-serif rounded">
                                    <h5>% de descuento termina en:</h5>

                                    <div class="flex text-center items-center justify-between">
                                        <div class="">
                                            <p class="text-1xl font-bold">00</p>
                                            <p class="text-sm">D??as</p>
                                        </div>
                                        <div class="">
                                            <p class="text-1xl font-bold" id="hrs">00</p>
                                            <p class="text-sm">Horas</p>
                                        </div>
                                        <div class="">
                                            <p class="text-1xl font-bold" id="min">00</p>
                                            <p class="text-sm">Minutos</p>
                                        </div>
                                        <div>
                                            <p class="text-1xl font-bold" id="sec">00</p>
                                            <p class="text-sm">Seg</p>
                                        </div>
                                    </div>

                                </div>


                                <div class="flex justify-between  w-100 items-center mt-4">
                                    @livewire('boton-comprar', ['curso' => $curso])
                                    <button
                                        class="text-sm lg:text-base outline-none focus:outline-none  p-1 py-1 px-8 bg-blue  hover:bg-blueintense text-whitetext font-semibold hover:text-whitetext dark:text-whitetext duration-200 border-2  border-blue hover:border-transparent rounded">
                                        Comprar ahora &nbsp;<i class="fa fa-credit-card" aria-hidden="true"></i>
                                    </button>
                                </div>
                            @endif --}}
                        </div>



                        <div class="rounded-xl shadow-lg bg-bgfondopricingwhite dark:bg-colheaderdark mt-20">
                            <div class="w-full    ">
                                <img class=" object-center rounded-t-xl "
                                    src="https://www.plaremesa.net/wp-content/uploads/2020/10/Industria-metalu%CC%81rgica-2.jpg"
                                    alt="">
                            </div>

                            <div class=" px-8 py-8  lg:w-full w-3/5  mx-auto">
                                <div class="font-inter font-bold  text-lg dark:text-borderconcours text-txtcommentply">
                                    Gratis
                                </div>




                                <div class="mt-4">
                                    <button
                                        class="text-green_especialidad py-2 rounded-lg bg-bgbtngreen w-full  focus:outline-none text-lg font-medium">
                                        ??Inscr??bete gratis!
                                    </button>
                                </div>


                                <div
                                    class="dark:text-borderconcours text-txtcommentply font-inter font-bold text-sixteen text-center mt-8 px-6 ">
                                    Accede a todos los cursos y especialidades
                                </div>

                                <button
                                    class="flex bg-morado1 w-full focus:outline-none rounded-lg mt-6 justify-center items-center py-2.5 font-inter font-medium text-lg text-white-100">
                                    <div>
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            class="-mt-1" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.4998 6.66709V17.5004M10.4998 6.66709C10.4998 6.66709 10.4998 5.42311 10.4998 5.00043C10.4998 4.07995 11.2459 3.33376 12.1664 3.33376C13.0869 3.33376 13.8331 4.07995 13.8331 5.00043C13.8331 5.9209 13.0869 6.66709 12.1664 6.66709C11.6686 6.66709 10.4998 6.66709 10.4998 6.66709ZM10.4998 6.66709C10.4998 6.66709 10.4998 5.05285 10.4998 4.58376C10.4998 3.43317 9.56701 2.50043 8.41642 2.50043C7.26583 2.50043 6.33309 3.43317 6.33309 4.58376C6.33309 5.73435 7.26583 6.66709 8.41642 6.66709C9.09792 6.66709 10.4998 6.66709 10.4998 6.66709ZM4.66642 10.0004H16.3331M4.66642 10.0004C3.74595 10.0004 2.99976 9.25423 2.99976 8.33376C2.99976 7.41328 3.74595 6.66709 4.66642 6.66709H16.3331C17.2536 6.66709 17.9997 7.41328 17.9997 8.33376C17.9997 9.25423 17.2536 10.0004 16.3331 10.0004M4.66642 10.0004L4.66642 15.8338C4.66642 16.7542 5.41261 17.5004 6.33309 17.5004H14.6664C15.5869 17.5004 16.3331 16.7542 16.3331 15.8338V10.0004"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                    <div class="pl-2">
                                        Subir a Premium
                                    </div>
                                </button>

                                <div class="mt-8 ">
                                    <div
                                        class="dark:text-bgprogresb text-txtnamecomntpkyr font-medium font-inter text-left text-sixteen mb-4">
                                        El curso incluye:
                                    </div>

                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.16699 10.8336L7.50032 14.1669L15.8337 5.83356"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                        <div class="pl-2.5">
                                            Acceso de por vida
                                        </div>
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen mt-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.99932 6.66599V9.99932L12.4993 12.4993M17.4993 9.99932C17.4993 14.1415 14.1415 17.4993 9.99932 17.4993C5.85719 17.4993 2.49933 14.1415 2.49933 9.99932C2.49933 5.85719 5.85719 2.49933 9.99932 2.49933C14.1415 2.49933 17.4993 5.85719 17.4993 9.99932Z"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-2.5">
                                            60 horas acad??micas
                                        </div>
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen mt-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10 8.33315V13.3331M10 13.3331L7.50002 10.8331M10 13.3331L12.5 10.8331M14.1667 17.4998H5.83335C4.91288 17.4998 4.16669 16.7536 4.16669 15.8331V4.16648C4.16669 3.24601 4.91288 2.49982 5.83335 2.49982H10.4882C10.7092 2.49982 10.9211 2.58761 11.0774 2.74389L15.5893 7.25574C15.7456 7.41202 15.8333 7.62398 15.8333 7.84499V15.8331C15.8333 16.7536 15.0872 17.4998 14.1667 17.4998Z"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-2.5">
                                            20 Recursos descargables
                                        </div>
                                    </div>

                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen mt-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.99975 11.6666L17.4997 7.49998L9.99975 3.33331L2.49976 7.49998L9.99975 11.6666ZM9.99975 11.6666L15.1323 8.81519C15.5845 9.95547 15.8331 11.1987 15.8331 12.4999C15.8331 13.0844 15.7829 13.6571 15.6867 14.214C13.5117 14.4255 11.5406 15.3338 9.99975 16.7129C8.45889 15.3338 6.48785 14.4255 4.31277 14.214C4.21656 13.6571 4.16642 13.0843 4.16642 12.4999C4.16642 11.1986 4.41496 9.95545 4.86715 8.81518L9.99975 11.6666ZM6.66642 16.6666V10.4166L9.99975 8.56479"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-2.5">
                                            Certificado
                                        </div>
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen mt-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.50024 4.16699L8.0895 3.57774L7.84542 3.33366H7.50024V4.16699ZM9.16691 5.83366L8.57765 6.42291L8.82173 6.66699H9.16691V5.83366ZM13.3336 8.33366C13.3336 8.79389 13.7067 9.16699 14.1669 9.16699C14.6271 9.16699 15.0002 8.79389 15.0002 8.33366H13.3336ZM3.33358 14.167V5.83366H1.66691V14.167H3.33358ZM4.16691 5.00033H7.50024V3.33366H4.16691V5.00033ZM6.91099 4.75625L8.57765 6.42291L9.75616 5.2444L8.0895 3.57774L6.91099 4.75625ZM9.16691 6.66699H12.5002V5.00033H9.16691V6.66699ZM12.5002 6.66699C12.9605 6.66699 13.3336 7.04009 13.3336 7.50032H15.0002C15.0002 6.11961 13.8809 5.00033 12.5002 5.00033V6.66699ZM3.33358 5.83366C3.33358 5.37342 3.70667 5.00033 4.16691 5.00033V3.33366C2.7862 3.33366 1.66691 4.45295
                                                         1.66691 5.83366H3.33358ZM1.66691 14.167C1.66691 15.5477 2.7862 16.667 4.16691 16.667V15.0003C3.70667 15.0003 3.33358 14.6272 3.33358 14.167H1.66691ZM13.3336 7.50032V8.33366H15.0002V7.50032H13.3336ZM6.66691 10.0003C6.66691 9.54009 7.04 9.16699 7.50024 9.16699V7.50032C6.11953 7.50032 5.00024 8.61961 5.00024 10.0003H6.66691ZM7.50024 9.16699H15.8336V7.50032H7.50024V9.16699ZM15.8336 9.16699C16.2938 9.16699 16.6669 9.54009 16.6669 10.0003H18.3336C18.3336 8.61961 17.2143 7.50032 15.8336 7.50032V9.16699ZM16.6669 10.0003V14.167H18.3336V10.0003H16.6669ZM16.6669 14.167C16.6669 14.6272 16.2938 15.0003 15.8336 15.0003V16.667C17.2143 16.667 18.3336 15.5477 18.3336 14.167H16.6669ZM15.8336 15.0003H4.16691V16.667H15.8336V15.
                                                         
                                                         0003ZM4.16691 16.667C5.54762 16.667 6.66691 15.5477 6.66691 14.167H5.00024C5.00024 14.6272 4.62715 15.0003 4.16691 15.0003V16.667ZM6.66691 14.167V10.0003H5.00024V14.167H6.66691Z"
                                                fill="Currentcolor" />
                                        </svg>


                                        <div class="pl-2.5">
                                            10 m??dulos
                                        </div>
                                    </div>
                                    <div
                                        class="dark:text-borderconcours text-txtcommentply flex font-normal font-inter text-sixteen mt-3">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.5002 8.33315L16.2942 6.43616C16.8483 6.15911 17.5002 6.56203 17.5002 7.18151V12.8181C17.5002 13.4376 16.8483 13.8405 16.2942 13.5635L12.5002 11.6665M4.16691 14.9998H10.8336C11.754 14.9998 12.5002 14.2536 12.5002 13.3331V6.66648C12.5002 5.74601 11.754 4.99982 10.8336 4.99982H4.16691C3.24644 4.99982 2.50024 5.74601 2.50024 6.66648V13.3331C2.50024 14.2536 3.24644 14.9998 4.16691 14.9998Z"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>


                                        <div class="pl-2.5">
                                            50 Sesiones de video
                                        </div>
                                    </div>
                                </div>







                            </div>

                        </div>

                        <div class="rounded-xl shadow-lg bg-bgfondopricingwhite dark:bg-colheaderdark mt-20">
                            <div class="w-full    ">
                                <img class=" object-center rounded-t-xl "
                                    src="https://www.plaremesa.net/wp-content/uploads/2020/10/Industria-metalu%CC%81rgica-2.jpg"
                                    alt="">
                            </div>
                            <div class=" px-8 py-8  lg:w-full w-3/5  mx-auto">



                                <div class="mt-4">
                                    <button
                                        class="text-green_especialidad py-2 rounded-lg bg-bgbtngreen w-full  focus:outline-none text-lg font-medium">
                                        Ir al curso
                                    </button>
                                </div>


                                <div
                                    class="dark:text-borderconcours text-txtcommentply font-inter font-bold text-sixteen text-center mt-8 px-6 ">
                                    Accede a todos los cursos y especialidades
                                </div>

                                <button
                                    class="flex bg-morado1 w-full focus:outline-none rounded-lg mt-6 justify-center items-center py-2.5 font-inter font-medium text-lg text-white-100">
                                    <div>
                                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                            class="-mt-1" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.4998 6.66709V17.5004M10.4998 6.66709C10.4998 6.66709 10.4998 5.42311 10.4998 5.00043C10.4998 4.07995 11.2459 3.33376 12.1664 3.33376C13.0869 3.33376 13.8331 4.07995 13.8331 5.00043C13.8331 5.9209 13.0869 6.66709 12.1664 6.66709C11.6686 6.66709 10.4998 6.66709 10.4998 6.66709ZM10.4998 6.66709C10.4998 6.66709 10.4998 5.05285 10.4998 4.58376C10.4998 3.43317 9.56701 2.50043 8.41642 2.50043C7.26583 2.50043 6.33309 3.43317 6.33309 4.58376C6.33309 5.73435 7.26583 6.66709 8.41642 6.66709C9.09792 6.66709 10.4998 6.66709 10.4998 6.66709ZM4.66642 10.0004H16.3331M4.66642 10.0004C3.74595 10.0004 2.99976 9.25423 2.99976 8.33376C2.99976 7.41328 3.74595 6.66709 4.66642 6.66709H16.3331C17.2536 6.66709 17.9997 7.41328 17.9997 8.33376C17.9997 9.25423 17.2536 10.0004 16.3331 10.0004M4.66642 10.0004L4.66642 15.8338C4.66642 16.7542 5.41261 17.5004 6.33309 17.5004H14.6664C15.5869 17.5004 16.3331 16.7542 16.3331 15.8338V10.0004"
                                                stroke="Currentcolor" stroke-width="1.66667" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>
                                    <div class="pl-2">
                                        Subir a Premium
                                    </div>
                                </button>
                            </div>
                        </div>

                        <div class="rounded-xl shadow-lg bg-bgfondopricingwhite dark:bg-colheaderdark mt-20">
                            <div class="w-full    ">
                                <img class=" object-center rounded-t-xl "
                                    src="https://www.plaremesa.net/wp-content/uploads/2020/10/Industria-metalu%CC%81rgica-2.jpg"
                                    alt="">
                            </div>
                            <div class=" px-8 py-8  lg:w-full w-3/5  mx-auto">



                                <div class="mt-4">
                                    <button
                                        class="text-green_especialidad py-2 rounded-lg bg-bgbtngreen w-full  focus:outline-none text-lg font-medium">
                                        Ir al curso
                                    </button>
                                </div>

                            </div>

                        </div>



                    </div>
                </div>
            </div>

        </div>


        <script>
            var play1 = document.getElementById('play1');
            var icon1 = document.getElementById('icon1');
            var icon2 = document.getElementById('icon2');
            var card = document.getElementById('card');



            play1.addEventListener('click', function() {
                // icon.classList.remove('hidden');
                card.classList.toggle('hidden');
            });


            play1.addEventListener('click', function() {
                // icon.classList.remove('hidden');
                icon2.classList.toggle('hidden')
                icon1.classList.toggle('hidden');
            });
        </script>

        <script>
            var boton = document.getElementById('boton');
            var flecha = document.getElementById('flecha');
            var tema = document.getElementById('tema');



            boton.addEventListener('click', function() {
                // icon.classList.remove('hidden');
                tema.classList.toggle('hidden');
            });


            play1.addEventListener('click', function() {
                // icon.classList.remove('hidden');
                icon2.classList.toggle('hidden')
                icon1.classList.toggle('hidden');
            });
        </script>

    </body>
@endsection
