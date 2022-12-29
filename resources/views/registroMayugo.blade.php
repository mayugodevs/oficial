<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <script src="https://kit.fontawesome.com/d8fff4c099.js" crossorigin="anonymous"></script>

    <title>MayuGo</title>
</head>

<body>
  




    <div class="w-full h-full grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1  bg-gray-900 " id="icon4">



        <div class=" h-full col-span-1 order-2 xl:order-1 md:order-1 xl:w-1/2 lg:w-1/2 md:w-1/2 sm:w-full  mx-auto my-1">
            <div id="icon1" class="h-screen xl:px-9 ">
                <br>
                <br><br>
               
                <div
                    class="mt-4 text-sm font-family: Nunito, Arial, sans-serif; font-semibold text-gray-700 text-center  ">

                    <button
                        class="transition duration-200 ease-in-out flex justify-center items-center w-full text-base focus:outline-none bg-bluefacebook hover:bg-blue text-white-300 font-semibold hover:text-white py-3 px-4 border border-blue hover:border-transparent rounded  ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                            class="bi bi-facebook inline " viewBox="0 0 16 16">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>&nbsp;
                        Entrar con facebook

                    </button>


                </div>
                <div
                    class="mt-4 text-sm font-family: Nunito, Arial, sans-serif; font-semibold text-gray-700 text-center  ">

                    <button
                        class="transition duration-200 ease-in-out flex justify-center items-center w-full text-base focus:outline-none bg-bluefacebook hover:bg-blue text-white-300 font-semibold hover:text-white py-3 px-4 border border-blue hover:border-transparent rounded  ">
                        <i class="fab fa-google"></i>
                        &nbsp;
                        Continuar con Google

                    </button>


                </div>
                <br>
                <div class="text-center">
                    <span class="text-white-500 text-xl text-serif ">O continua con</span>
                </div>
                <br>

                <div class="m-1">
                    <label class="block text-white-500 text-xl font-bold text-left w-full " for="name">Correo
                        Electrónico</label>
                    <input
                        class="shadow appearance-none border-transparent bg-gray-300 focus:border-green rounded w-full py-4 px-3 text-white-500 leading-tight focus:outline-none focus:shadow-outline text-lg"
                        type="text" placeholder="@gmail" required>

                </div>
                <div class="m-1">
                    <label class="block text-white-500 text-xl font-bold text-left  " for="password"> Contraseña</label>
                    <input
                        class="shadow appearance-none border-transparent  bg-gray-300 focus:border-green rounded w-full py-4 PX-3  text-white-500 leading-tight focus:outline-none focus:shadow-outline text-lg"
                        type="password" required>

                </div>
                <br>

                <div class="flex flex-row items-center">
                    <input type="checkbox"
                        class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded-lg ">
                    <label for="comments" class="ml-2 text-sm font-normal text-gray-400">Aceptar Terminos y Condiciones
                        MayuGo</label>
                </div>
                <br>

                <div class=" flex justify-end items-center w-full bg-transparent my-4 ">
                    <button type="button" id="play1"
                        class="bg-green text-xl font-semibold w-full hover:bg-green_hover focus:outline-none hover:text-white-500 dark:text-white-500 border border-green_hover text-white-500 font-serif py-4  rounded "
                        wire:click="createPost">
                        Continuar
                    </button>
                    <div>

                    </div>
                </div>
                
                <br>
                <br>
             
            </div>

            <div id="icon2" class=" px-9  hidden h-screen">
                <br>
                <br><br>
               

                <br>
                <div class="flex ">
                    <div>
                        <img class="sm:h-16 md:h-16 xl:h-16 ml:h-20 lg:h-16 w-28"
                            src="https://images.emojiterra.com/google/android-11/512px/1f973.png" alt="">
                    </div>
                    <div class="flex-col justify-center items-center mx-3">
                        <div class="text-white-500 text-xl font-semibold leading-5 py-1">
                            Gracias por unirte a MayuGo
                        </div>
                        <div class="text-celeste text-base font-serif leading-5 py-1">
                            Certifícate en los cursos
                            de mayor demanda en
                            la Industria
                        </div>
                    </div>
                </div>
                <br>
                <div class="text-center ">
                    <span class="text-white-500 text-xl text-serif ">Completa tus datos </span>
                </div>
                <br>

                <div class="m-1">
                    <label class="block text-white-500 text-xl font-bold text-left " for="name">Nombes</label>
                    <input
                        class=" shadow appearance-none border-transparent bg-gray-300 focus:border-green rounded w-full py-4 px-3 text-white-500 leading-tight focus:outline-none focus:shadow-outline text-lg"
                        type="text" required>

                </div>
                <div class="m-1">
                    <label class="block text-white-500 text-xl font-bold text-left  " for="password"> Apellidoss</label>
                    <input
                        class=" shadow appearance-none border-transparent bg-gray-300 focus:border-green rounded w-full py-4 px-3 text-white-500 leading-tight focus:outline-none focus:shadow-outline text-lg"
                        type="password" required>

                </div>







                <br>

                <div class=" flex justify-end items-center w-full bg-transparent my-4 ">
                    <button type="button" id="play2"
                        class="bg-green text-xl font-semibold w-full hover:bg-green_hover focus:outline-none hover:text-white-500 dark:text-white-500 border border-green_hover text-white-500 font-serif py-4  rounded "
                        wire:click="createPost">
                        Continuar
                    </button>

                </div>
                <br>
                <br>
              
            </div>

            <div id="icon3" class=" px-9  hidden h-screen">
                <br>
                <br><br>
               

                <br>
                <div class="flex justify-center items-start">
                    <div>
                        <img class="h-16 sm:h-16 md:h-16 xl:h-16 ml:h-20 lg:h-16 w-27" src="https://assets.wprock.fr/emoji/joypixels/512/1f38a.png" alt="">
                    </div>
                    <div class="flex-col justify-center items-center mx-3">
                        <div class="text-white-500 text-2xl font-semibold leading-5 py-1">
                            Gracias por unirte a MayuGo
                        </div>
                        <div class="text-celeste text-base font-serif leading-5 py-1">
                            Certifícate en los cursos
                            de mayor demanda en
                            la Industria
                        </div>
                    </div>
                </div>
                <br>
                <div class="text-center">
                    <span class="text-white-500 text-xl text-serif ">Completa tus datos </span>
                </div>
                <br>


                <div class="m-1 w-full">
                    <form id="login" onsubmit="process(event)" class="w-full">
                        <label class="block text-white-500 text-xl font-bold text-left  " for="password"> Número
                            Telefónico</label>
                        <input id="phone" type="tel" name="phone "
                            class="shadow appearance-none border-transparent bg-gray-300 focus:border-green rounded w-full py-4 px-3 text-white-500 leading-tight focus:outline-none focus:shadow-outline text-lg" />

                    </form>
                </div>

                <div class="m-1">
                    <label class="block text-white-500 text-xl font-bold text-left  " for="pais"> País</label>

                    <select name="pais"
                        class="w-full  shadow appearance-none border-transparent bg-gray-300 focus:border-green rounded w-full py-4 px-3 text-white-500 leading-tight focus:outline-none focus:shadow-outline text-lg"
                        :value="old('pais')" placeholder="pais">

                        <option disabled selected>País</option>
                        <option value="Afganistán" id="AF">Afganistán</option>
                        <option value="Albania" id="AL">Albania</option>
                        <option value="Alemania" id="DE">Alemania</option>
                        <option value="Andorra" id="AD">Andorra</option>
                        <option value="Angola" id="AO">Angola</option>
                        <option value="Anguila" id="AI">Anguila</option>
                        <option value="Antártida" id="AQ">Antártida</option>
                        <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                        <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                        <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                        <option value="Argelia" id="DZ">Argelia</option>
                        <option value="Argentina" id="AR">Argentina</option>
                        <option value="Armenia" id="AM">Armenia</option>
                        <option value="Aruba" id="AW">Aruba</option>
                        <option value="Australia" id="AU">Australia</option>
                        <option value="Austria" id="AT">Austria</option>
                        <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                        <option value="Bahamas" id="BS">Bahamas</option>
                        <option value="Bahrein" id="BH">Bahrein</option>
                        <option value="Bangladesh" id="BD">Bangladesh</option>
                        <option value="Barbados" id="BB">Barbados</option>
                        <option value="Bélgica" id="BE">Bélgica</option>
                        <option value="Belice" id="BZ">Belice</option>
                        <option value="Benín" id="BJ">Benín</option>
                        <option value="Bermudas" id="BM">Bermudas</option>
                        <option value="Bhután" id="BT">Bhután</option>
                        <option value="Bielorrusia" id="BY">Bielorrusia</option>
                        <option value="Birmania" id="MM">Birmania</option>
                        <option value="Bolivia" id="BO">Bolivia</option>
                        <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                        <option value="Botsuana" id="BW">Botsuana</option>
                        <option value="Brasil" id="BR">Brasil</option>
                        <option value="Brunei" id="BN">Brunei</option>
                        <option value="Bulgaria" id="BG">Bulgaria</option>
                        <option value="Burkina Faso" id="BF">Burkina Faso</option>
                        <option value="Burundi" id="BI">Burundi</option>
                        <option value="Cabo Verde" id="CV">Cabo Verde</option>
                        <option value="Camboya" id="KH">Camboya</option>
                        <option value="Camerún" id="CM">Camerún</option>
                        <option value="Canadá" id="CA">Canadá</option>
                        <option value="Chad" id="TD">Chad</option>
                        <option value="Chile" id="CL">Chile</option>
                        <option value="China" id="CN">China</option>
                        <option value="Chipre" id="CY">Chipre</option>
                        <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                        <option value="Colombia" id="CO">Colombia</option>
                        <option value="Comores" id="KM">Comores</option>
                        <option value="Congo" id="CG">Congo</option>
                        <option value="Corea" id="KR">Corea</option>
                        <option value="Corea del Norte" id="KP">Corea del Norte</option>
                        <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                        <option value="Costa Rica" id="CR">Costa Rica</option>
                        <option value="Croacia" id="HR">Croacia</option>
                        <option value="Cuba" id="CU">Cuba</option>
                        <option value="Dinamarca" id="DK">Dinamarca</option>
                        <option value="Djibouri" id="DJ">Djibouri</option>
                        <option value="Dominica" id="DM">Dominica</option>
                        <option value="Ecuador" id="EC">Ecuador</option>
                        <option value="Egipto" id="EG">Egipto</option>
                        <option value="El Salvador" id="SV">El Salvador</option>
                        <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                        <option value="Eritrea" id="ER">Eritrea</option>
                        <option value="Eslovaquia" id="SK">Eslovaquia</option>
                        <option value="Eslovenia" id="SI">Eslovenia</option>
                        <option value="España" id="ES">España</option>
                        <option value="Estados Unidos" id="US">Estados Unidos</option>
                        <option value="Estonia" id="EE">Estonia</option>
                        <option value="c" id="ET">Etiopía</option>
                        <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia
                        </option>
                        <option value="Filipinas" id="PH">Filipinas</option>
                        <option value="Finlandia" id="FI">Finlandia</option>
                        <option value="Francia" id="FR">Francia</option>
                        <option value="Gabón" id="GA">Gabón</option>
                        <option value="Gambia" id="GM">Gambia</option>
                        <option value="Georgia" id="GE">Georgia</option>
                        <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas
                            Sandwich del Sur</option>
                        <option value="Ghana" id="GH">Ghana</option>
                        <option value="Gibraltar" id="GI">Gibraltar</option>
                        <option value="Granada" id="GD">Granada</option>
                        <option value="Grecia" id="GR">Grecia</option>
                        <option value="Groenlandia" id="GL">Groenlandia</option>
                        <option value="Guadalupe" id="GP">Guadalupe</option>
                        <option value="Guam" id="GU">Guam</option>
                        <option value="Guatemala" id="GT">Guatemala</option>
                        <option value="Guayana" id="GY">Guayana</option>
                        <option value="Guayana francesa" id="GF">Guayana francesa</option>
                        <option value="Guinea" id="GN">Guinea</option>
                        <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                        <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                        <option value="Haití" id="HT">Haití</option>
                        <option value="Holanda" id="NL">Holanda</option>
                        <option value="Honduras" id="HN">Honduras</option>
                        <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                        <option value="Hungría" id="HU">Hungría</option>
                        <option value="India" id="IN">India</option>
                        <option value="Indonesia" id="ID">Indonesia</option>
                        <option value="Irak" id="IQ">Irak</option>
                        <option value="Irán" id="IR">Irán</option>
                        <option value="Irlanda" id="IE">Irlanda</option>
                        <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                        <option value="Isla Christmas" id="CX">Isla Christmas</option>
                        <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                        <option value="Islandia" id="IS">Islandia</option>
                        <option value="Islas Caimán" id="KY">Islas Caimán</option>
                        <option value="Islas Cook" id="CK">Islas Cook</option>
                        <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                        <option value="Islas Faroe" id="FO">Islas Faroe</option>
                        <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                        <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                        <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                        <option value="Islas Marshall" id="MH">Islas Marshall</option>
                        <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                        <option value="Islas Palau" id="PW">Islas Palau</option>
                        <option value="Islas Salomón" d="SB">Islas Salomón</option>
                        <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                        <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                        <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                        <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                        <option value="Israel" id="IL">Israel</option>
                        <option value="Italia" id="IT">Italia</option>
                        <option value="Jamaica" id="JM">Jamaica</option>
                        <option value="Japón" id="JP">Japón</option>
                        <option value="Jordania" id="JO">Jordania</option>
                        <option value="Kazajistán" id="KZ">Kazajistán</option>
                        <option value="Kenia" id="KE">Kenia</option>
                        <option value="Kirguizistán" id="KG">Kirguizistán</option>
                        <option value="Kiribati" id="KI">Kiribati</option>
                        <option value="Kuwait" id="KW">Kuwait</option>
                        <option value="Laos" id="LA">Laos</option>
                        <option value="Lesoto" id="LS">Lesoto</option>
                        <option value="Letonia" id="LV">Letonia</option>
                        <option value="Líbano" id="LB">Líbano</option>
                        <option value="Liberia" id="LR">Liberia</option>
                        <option value="Libia" id="LY">Libia</option>
                        <option value="Liechtenstein" id="LI">Liechtenstein</option>
                        <option value="Lituania" id="LT">Lituania</option>
                        <option value="Luxemburgo" id="LU">Luxemburgo</option>
                        <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                        <option value="Madagascar" id="MG">Madagascar</option>
                        <option value="Malasia" id="MY">Malasia</option>
                        <option value="Malawi" id="MW">Malawi</option>
                        <option value="Maldivas" id="MV">Maldivas</option>
                        <option value="Malí" id="ML">Malí</option>
                        <option value="Malta" id="MT">Malta</option>
                        <option value="Marruecos" id="MA">Marruecos</option>
                        <option value="Martinica" id="MQ">Martinica</option>
                        <option value="Mauricio" id="MU">Mauricio</option>
                        <option value="Mauritania" id="MR">Mauritania</option>
                        <option value="Mayotte" id="YT">Mayotte</option>
                        <option value="México" id="MX">México</option>
                        <option value="Micronesia" id="FM">Micronesia</option>
                        <option value="Moldavia" id="MD">Moldavia</option>
                        <option value="Mónaco" id="MC">Mónaco</option>
                        <option value="Mongolia" id="MN">Mongolia</option>
                        <option value="Montserrat" id="MS">Montserrat</option>
                        <option value="Mozambique" id="MZ">Mozambique</option>
                        <option value="Namibia" id="NA">Namibia</option>
                        <option value="Nauru" id="NR">Nauru</option>
                        <option value="Nepal" id="NP">Nepal</option>
                        <option value="Nicaragua" id="NI">Nicaragua</option>
                        <option value="Níger" id="NE">Níger</option>
                        <option value="Nigeria" id="NG">Nigeria</option>
                        <option value="Niue" id="NU">Niue</option>
                        <option value="Norfolk" id="NF">Norfolk</option>
                        <option value="Noruega" id="NO">Noruega</option>
                        <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                        <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                        <option value="Omán" id="OM">Omán</option>
                        <option value="Panamá" id="PA">Panamá</option>
                        <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                        <option value="Paquistán" id="PK">Paquistán</option>
                        <option value="Paraguay" id="PY">Paraguay</option>
                        <option value="Perú" id="PE">Perú</option>
                        <option value="Pitcairn" id="PN">Pitcairn</option>
                        <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                        <option value="Polonia" id="PL">Polonia</option>
                        <option value="Portugal" id="PT">Portugal</option>
                        <option value="Puerto Rico" id="PR">Puerto Rico</option>
                        <option value="Qatar" id="QA">Qatar</option>
                        <option value="Reino Unido" id="UK">Reino Unido</option>
                        <option value="República Centroafricana" id="CF">República Centroafricana</option>
                        <option value="República Checa" id="CZ">República Checa</option>
                        <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                        <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo
                            Zaire</option>
                        <option value="República Dominicana" id="DO">República Dominicana</option>
                        <option value="Reunión" id="RE">Reunión</option>
                        <option value="Ruanda" id="RW">Ruanda</option>
                        <option value="Rumania" id="RO">Rumania</option>
                        <option value="Rusia" id="RU">Rusia</option>
                        <option value="Samoa" id="WS">Samoa</option>
                        <option value="Samoa occidental" id="AS">Samoa occidental</option>
                        <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                        <option value="San Marino" id="SM">San Marino</option>
                        <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                        <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                        <option value="Santa Helena" id="SH">Santa Helena</option>
                        <option value="Santa Lucía" id="LC">Santa Lucía</option>
                        <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                        <option value="Senegal" id="SN">Senegal</option>
                        <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                        <option value="Sychelles" id="SC">Seychelles</option>
                        <option value="Sierra Leona" id="SL">Sierra Leona</option>
                        <option value="Singapur" id="SG">Singapur</option>
                        <option value="Siria" id="SY">Siria</option>
                        <option value="Somalia" id="SO">Somalia</option>
                        <option value="Sri Lanka" id="LK">Sri Lanka</option>
                        <option value="Suazilandia" id="SZ">Suazilandia</option>
                        <option value="Sudán" id="SD">Sudán</option>
                        <option value="Suecia" id="SE">Suecia</option>
                        <option value="Suiza" id="CH">Suiza</option>
                        <option value="Surinam" id="SR">Surinam</option>
                        <option value="Svalbard" id="SJ">Svalbard</option>
                        <option value="Tailandia" id="TH">Tailandia</option>
                        <option value="Taiwán" id="TW">Taiwán</option>
                        <option value="Tanzania" id="TZ">Tanzania</option>
                        <option value="Tayikistán" id="TJ">Tayikistán</option>
                        <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del
                            océano Indico</option>
                        <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                        <option value="Timor Oriental" id="TP">Timor Oriental</option>
                        <option value="Togo" id="TG">Togo</option>
                        <option value="Tonga" id="TO">Tonga</option>
                        <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                        <option value="Túnez" id="TN">Túnez</option>
                        <option value="Turkmenistán" id="TM">Turkmenistán</option>
                        <option value="Turquía" id="TR">Turquía</option>
                        <option value="Tuvalu" id="TV">Tuvalu</option>
                        <option value="Ucrania" id="UA">Ucrania</option>
                        <option value="Uganda" id="UG">Uganda</option>
                        <option value="Uruguay" id="UY">Uruguay</option>
                        <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                        <option value="Vanuatu" id="VU">Vanuatu</option>
                        <option value="Venezuela" id="VE">Venezuela</option>
                        <option value="Vietnam" id="VN">Vietnam</option>
                        <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                        <option value="Yemen" id="YE">Yemen</option>
                        <option value="Zambia" id="ZM">Zambia</option>
                        <option value="Zimbabue" id="ZW">Zimbabue</option>
                    </select>
                </div>




                <br>

                <div class=" flex justify-end items-center w-full bg-transparent my-4 ">
                    <button type="button" id="play3"
                        class="bg-green text-xl font-semibold w-full hover:bg-green_hover focus:outline-none hover:text-white-500 dark:text-white-500 border border-green_hover text-white-500 font-serif py-4  rounded "
                        wire:click="createPost">
                        Continuar
                    </button>

                </div>
                <br>
                <br>
                
               
               
            </div>

        </div>


        <div class="col-span-1 order-1 xl:order2 md:order-2 object-contain bg-gradient-to-t  via-gray-900 xl:relative lg:relative md:relative sm:relative  ">
            <img class="w-full absolute xl:h-full md:h-full lg:h-full sm:h-screen xl:object-cover sm:object-cover object-right-bottom  opacity-30"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAMWIkL9fcBYOW_PN03-GPgOZifUwi9A_KRQ&usqp=CAU"
                alt="">
                <div class="xl:absolute sm:absolute xl:top-56 xl:left-32 md:top-60 px-10 my-1 mx-12 md:left-96 sm:left-6 sm:top-4 flex items-center">
                    <div class="px-1  py-5">
                        <img class=" h-10 w-10" src="http://www.mayugo.net/asset/img/favicon.png" alt="Industria">
                    </div>
                    <div class=" text-white-500 font-semibold xl:text-4xl ml:5xl lg:text-5xl md:text-4xl sm:text-xl">
                        MayuGo 
                    </div>
                   {{--  ml:h-20 ml:w-20 xl:h-20 xl:w-20 md:h-20 md:w-20 lg:h-20 lg:w-20 sm:h-3 --}}
                  
                </div>

            <div class="xl:absolute sm:absolute xl:top-80 xl:left-48 mx-12   md:left-60  sm:top-0 sm:left-20 px-8">
                <span class="font-semibold text-white-500 xl:text-4xl ml:5xl lg:text-5xl md:text-4xl sm:text-lg mx-9"> Unete hoy
                </span>
            </div>
            <div class="xl:absolute sm:absolute  xl:top-96 xl:left-44 mx-11 md:top-72 md:left-60 px-7">
                <span class="font-semibold text-white-500 xl:text-4xl ml:5xl lg:text-5xl md:text-4xl sm:text-lg mx-9">Con Nosotros y con frankdjvasjuhdishdoiashdoijhhijuhmj
                </span>
            </div>

           
              
            
           
           
            
        </div>
       






    </div>





    <div class="bg-gray-900 px-6  hidden" id="icon5">


        <br>
        <br>

        <div class="xl:w-3/5 sm:w-4/5 bg-gray-900   m-auto">
            <div class="flex justify-center">
                <div class="h-20 w-24">
                    <img src="https://images.emojiterra.com/google/android-oreo/512px/1f389.png" alt="">
                </div>

                <div class="flex-col px-3 justify-center items-center mx-3 ">
                    <div class="text-white-500 text-2xl font-semibold leading-5 py-1">
                        Gracias por unirte a MayuGo
                    </div>
                    <div class="text-celeste text-base font-serif leading-5 py-1">
                        Certifícate en los cursos
                        de mayor demanda en
                        la Industria
                    </div>
                </div>

            </div>
            <div class="text-white-500 xl:text-xl sm:text-medio font-semibold my-7 text-center">
                ¿Qué temas te gustaría aprender ?
            </div>
            <div class="grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 grid-cols-3" id="myDIV">
              
                    <div class="text-center col-span-1 my-2 px-1 ">
                        <button id="aplicar"
                            class="bg-indigo-900 flex-col  xl:flex-row  md:flex-row lg:flex-row py-2  rounded-lg aplicar focus:bg-indigo-600 focus:outline-none  px-6  w-full h-24 text-white-500 flex  items-center">

                            <div>
                                <i class="fa fa-cogs text-3xl" aria-hidden="true"></i>

                            </div>
                            <div class="xl:text-2xl px-2 sm:text-xs">

                                Gestion de Operaciones
                            </div>

                        </button>

                    </div>
                    <div class="text-center col-span-1 my-2 px-1">
                        <button
                            class="bg-indigo-900 flex-col xl:flex-row  md:flex-row lg:flex-row py-2 h-24 aplicar focus:bg-indigo-600 focus:outline-none  w-full px-6  rounded-lg text-white-500 flex  items-center ">
                            <div>
                                <i class="fa fa-line-chart text-3xl" aria-hidden="true"></i>

                            </div>
                            <div class="xl:text-2xl px-2 sm:text-sm">
                                Desarrollo Industrial
                            </div>
                        </button>
                    </div>
                    <div class="text-center col-span-1 my-2 px-1">
                        <button
                            class="bg-indigo-900 flex-col xl:flex-row  md:flex-row lg:flex-row py-2 h-24 aplicar focus:bg-indigo-600 focus:outline-none w-full px-6  rounded-lg text-white-500 flex  items-center">

                            <div>
                                <i class="fa fa-recycle text-3xl" aria-hidden="true"></i>

                            </div>
                            <div class="xl:text-2xl px-2 sm:text-sm">
                                Seguridad Industrial
                            </div>
                        </button>

                    </div>
                    <div class="text-center col-span-1 my-2 px-1">
                        <button
                            class="bg-indigo-900 flex-col xl:flex-row  md:flex-row lg:flex-row py-2 h-24 aplicar focus:bg-indigo-600 focus:outline-none w-full px-6  rounded-lg text-white-500 flex  items-center">
                            <div>
                                <i class="fa fa-line-chart text-3xl" aria-hidden="true"></i>
                            </div>
                            <div class="xl:text-2xl px-2 sm:text-sm">
                                Ing Financiera
                            </div>


                        </button>
                    </div>
                    {{-- <div class="text-center col-span-1 my-2 px-1">
                        <button
                            class="bg-indigo-900 h-24 aplicar focus:bg-indigo-600 focus:outline-none w-full px-6  rounded-lg text-white-500 flex  items-center">
                            <div>
                                <i class="fa fa-graduation-cap text-3xl" aria-hidden="true"></i>
                            </div>
                            <div class="xl:text-2xl px-2 sm:text-sm">
                                Gerecia de Negocios
                            </div>
                        </button>
                    </div>
           
                
                    <div class="text-center col-span-1 my-2 px-1">
                        <button
                            class="bg-indigo-900 h-24 aplicar focus:bg-indigo-600 focus:outline-none w-full px-6  rounded-lg text-white-500 flex  items-center">
                            <div>
                                <i class="fa fa-area-chart text-3xl" aria-hidden="true"></i>

                            </div>
                            <div class="xl:text-2xl px-2 sm:text-sm">
                                Power By
                            </div>
                        </button>
                    </div>
                    <div class="text-center col-span-1 my-2 px-1">
                        <button
                            class="bg-indigo-900 h-24 aplicar focus:bg-indigo-600 focus:outline-none w-full px-6  rounded-lg text-white-500 flex  items-center">
                            <div>
                                <i class="fa fa-graduation-cap text-3xl" aria-hidden="true"></i>
                            </div>
                            <div class="xl:text-2xl px-2 sm:text-sm">
                                Gerecia de Negocios
                            </div>
                        </button>
                    </div>
           
                
                    <div class="text-center col-span-1 my-2 px-1">
                        <button
                            class="bg-indigo-900 h-24 aplicar focus:bg-indigo-600 focus:outline-none w-full px-6  rounded-lg text-white-500 flex  items-center">
                            <div>
                                <i class="fa fa-area-chart text-3xl" aria-hidden="true"></i>

                            </div>
                            <div class="xl:text-2xl px-2 sm:text-sm">
                                Power By
                            </div>
                        </button>
                    </div> --}}
                    <div class="text-center col-span-1 my-2 px-1">
                        <button
                            class="bg-indigo-900 flex-col xl:flex-row  md:flex-row lg:flex-row py-2 h-24 aplicar focus:bg-indigo-600 focus:outline-none w-full px-6  rounded-lg text-white-500 flex  items-center">
                            <i class="fa fa-table text-3xl" aria-hidden="true"></i>

                            <div class="xl:text-2xl px-2 sm:text-sm">
                                Gestión de Operaciones
                            </div>
                        </button>
                    </div>
                    <div class="text-center col-span-1 my-2 px-1">
                        <button
                            class="bg-indigo-900 flex-col xl:flex-row  md:flex-row lg:flex-row py-2  h-24 aplicar focus:bg-indigo-600 focus:outline-none w-full px-6  rounded-lg text-white-500 flex  items-center">
                            <div>
                                <i class="fa fa-microchip text-3xl" aria-hidden="true"></i>

                            </div>
                            <div class="xl:text-2xl px-2 sm:text-sm ">
                                Ingeniería y Diseño
                            </div>
                        </button>
                    </div>
                    <div class="text-center col-span-1 my-2 px-1">
                        <button
                            class="bg-indigo-900 flex-col xl:flex-row  md:flex-row lg:flex-row py-2 h-24 aplicar focus:bg-indigo-600 focus:outline-none w-full px-6  rounded-lg text-white-500 flex  items-center">

                            <div>
                                <i class="fa fa-code-fork text-3xl" aria-hidden="true"></i>
                            </div>
                            <div class="xl:text-2xl px-2 sm:text-sm">
                                Ingenieria Calidad
                            </div>
                        </button>
                    </div>
                    <div class="text-center col-span-1 my-2 px-1">
                        <button
                            class="bg-indigo-900 flex-col xl:flex-row  md:flex-row lg:flex-row py-2 h-24 aplicar focus:bg-indigo-600 focus:outline-none w-full px-6  rounded-lg text-white-500 flex  items-center">
                            <div>
                                <i class="fa fa-database text-3xl" aria-hidden="true"></i>
                            </div>
                            <div class="xl:text-2xl px-2 sm:text-sm">
                                <div class="xl:text-2xl px-2 ">
                                Metodologias Lean
                            </div>
                        </button>
                    </div>

                

            </div>
            <br>

            <div class="text-center  my-2 px-1">
                <button class="px-5 py-3 text-white-500 bg-green   rounded-lg text-xl font-semibold" id="iniciar">
                    Continuar
                </button>
            </div>
            
            
            <br><br>
            <br>
            <br>

        </div>
        

    </div>









    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script>


    <script>
        var play1 = document.getElementById('play1');
        var icon1 = document.getElementById('icon1');
        var icon2 = document.getElementById('icon2');

        var play2 = document.getElementById('play2');
        var icon3 = document.getElementById('icon3');

        var play3 = document.getElementById('play3');
        var icon4 = document.getElementById('icon4');





        play1.addEventListener('click', function() {
            icon2.classList.remove('hidden');
            icon1.classList.toggle('hidden');
        });

        play2.addEventListener('click', function() {
            icon3.classList.remove('hidden');
            icon2.classList.toggle('hidden');
        });

        play3.addEventListener('click', function() {
            icon5.classList.remove('hidden');
            icon4.classList.toggle('hidden');
        });
    </script>


</body>

</html>
