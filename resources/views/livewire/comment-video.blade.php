<div>
    <div wire:ignore class="relative">
        <div class="flex items-center cmntarealo">
            <div class="h-10 w-10 mr-2 flex items-center">
                <img class="rounded-full"
                    src="https://www.mayugo.net/admin/images/picture/20200605040819perfil.jpeg"
                    alt="">
            </div>
            <textarea id="inp_coment" cols="30" rows="2" placeholder="Agregar comentario"></textarea>
        </div>
        <input type="file" id="inp_img" wire:model.defer="files" style="display:none">
        <label for="inp_img" class="absolute right-7 top-3 cursor-pointer"
            style="color:#ADADAD"><svg xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
            </svg></label>
    
    </div>
    @if ($files)
        <div
            class="pt-2 pb-4 px-4 rounded-lg text-left progresslabel text-txtcommentply bg-pricingcintawhite mt-3">
            <div class="mb-2">Imagen Adjunta</div>
            <img class="rounded-lg" src="{{ $files->temporaryUrl() }}">
        </div>
    @endif
    
    
    <div class="w-full text-right mt-2">
        @if ($files)
            <button
                class="btnresplyr px-2.5 py-1.5  text-reddeltetext rounded-md  bg-reddeletefile mr-2 outline-none"
                wire:click="$set('files',false)">Cancelar</button>
        @endif
        <button type="button" value="Comentar" onclick="validar()"
            class="btnresplyr px-2.5 py-1.5 bg-bgbtngreen text-btncomentresply rounded-md ">Comentar</button>
    </div>
    
    <!--inicio comments-->
    <div class="mt-4">
        @forelse ($coments  as $coment)
            <div class="mb-2 flex text-left">
                <div class="h-10 w-10 mr-2 flex items-center">
                    <img class="rounded-full"
                        src="https://www.mayugo.net/admin/images/picture/20200605040819perfil.jpeg"
                        alt="">
                </div>
                <div class="dvcomentplyrc">
                    <div class=" p-3 bg-pricingcintawhite rounded-lg">
                        <div>
                            <div class="flex justify-between items-center">
                                <div class="studentnamerplyr">Franklin Espinoza</div>
                                <div class="studentschedplyr text-gray-600">Hace 5
                                    meses</div>
                            </div>
                            <div class="studentgradeplyr">
                                Estudiante
                            </div>
                        </div>
                        <div
                            class="studentsbcomplyr mt-2 text-txtcommentply break-words">
                            {{ $coment->comentario }}
                            @if ($coment->img)
                                <div
                                    class="text-md italic text-gray-400 py-3 cursor-pointer">
                                    <img class="rounded-md"
                                        src="{{ asset('images/comments/' . $coment->img) }}"
                                        alt="" width="100px">
                                </div>
                            @endif
                        </div>
                    </div>
                    <div
                        class="flex items-center px-3 py-2 descriptiondiplp text-gray-600">
    
    
                        <div class="cursor-pointer"
                            wire:click="likeComment({{ $coment->idpreguntas }})">
                            @if ($coment->like_user)
                                <svg width="16" height="14" viewBox="0 0 16 14"
                                    fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M1.17157 1.17145C2.73367 -0.390646 5.26633 -0.390646 6.82843 1.17145L8 2.34302L9.17157 1.17145C10.7337 -0.390646 13.2663 -0.390646 14.8284 1.17145C16.3905 2.73355 16.3905 5.26621 14.8284 6.8283L8 13.6567L1.17157 6.8283C-0.390524 5.26621 -0.390524 2.73355 1.17157 1.17145Z"
                                        fill="#29A352" />
                                </svg>
                            @else
                                <svg width="18" height="15" viewBox="0 0 18 15"
                                    fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.59762 2.2647C1.13315 3.72917 1.13315 6.10353 2.59762 7.568L8.99931 13.9697L15.4009 7.568C16.8654 6.10353 16.8654 3.72917 15.4009 2.2647C13.9364 0.800235 11.5621 0.800235 10.0976 2.2647L8.99931 3.36309L7.90091 2.2647C6.43645 0.800235 4.06208 0.800235 2.59762 2.2647Z"
                                        stroke="#4B5565" stroke-width="1.66667"
                                        stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            @endif
    
                        </div>
                        &nbsp;&nbsp;<div>{{ count($coment->cursContPregComenLikes) }}
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
                        <div class="descriptiondiplp text-gray-600 cursor-pointer"
                            wire:click="showAnswer({{ $coment->idpreguntas }})">
                            Responder</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        @if ($coment->idcliente == $user->idalum)
                            <div class="text-gray-600 cursor-pointer"
                                wire:click="removeComment({{ $coment->idpreguntas }},1)">
                                <svg width="18" height="15" viewBox="0 0 18 20"
                                    fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16 5.00006L15.1327 17.1425C15.0579 18.1892 14.187 19.0001 13.1378 19.0001H4.86224C3.81296 19.0001 2.94208 18.1892 2.86732 17.1425L2 5.00006M7 9.00006V15.0001M11 9.00006V15.0001M12 5.00006V2.00006C12 1.44778 11.5523 1.00006 11 1.00006H7C6.44771 1.00006 6 1.44778 6 2.00006V5.00006M1 5.00006H17"
                                        stroke="#4B5565" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        @endif
                    </div>
                    @if ($coment->idpreguntas === $id_post)
                        <div class="flex relative rplyy ">
                            <input type="text" placeholder="Agregar respuesta"
                                id="inp_resp_{{ $id_post }}">
                        </div>
                        <div class="w-full text-right mt-2">
                            <button type="button" value="Comentar"
                                onclick="validar({{ $id_post }})"
                                class="btnresplyr px-2.5 py-1.5 bg-bgbtngreen text-btncomentresply rounded-md ">Responder</button>
                        </div>
                        <div class="mt-4">
                            @forelse ($answers as $answer)
                                <!--test-->
                                <div class="mb-2 flex text-left">
                                    <div class="h-10 w-10 mr-2 flex items-center"> 
                                        <img class="rounded-full"
                                            {{-- src="{{ $answer->alumno->avatar ? $answer->alumno->avatar : 'images/picture/avatar1829957385.jpg' }}" --}}
                                            src="{{ asset('images/picture/avatar1829957385.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="dvcomentplyrc">
                                        <div class=" p-3 bg-pricingcintawhite rounded-lg">
                                            <div>
                                                <div class="flex justify-between items-center">
                                                    <div class="studentnamerplyr">
                                                        {{ $answer->alumno->nombres }}
                                                    </div>
                                                    <div class="studentschedplyr text-gray-600">
                                                        Hace 5 meses</div>
                                                </div>
                                                <div class="studentgradeplyr">
                                                    {{ $answer->alumno->grado->nivel }}
                                                </div>
                                            </div>
                                            <div class="studentsbcomplyr mt-2 text-txtcommentply break-words">
                                                {{ $answer->respuesta }}
                                            </div>
                                        </div>
                                        <div class="flex items-center px-3 py-2 descriptiondiplp text-gray-600">
                                            @if ($answer->idalumno == $user->idalum)
                                                <div class="text-gray-600 cursor-pointer"
                                                    wire:click="removeComment({{ $answer->idrespuestas }})">
                                                    <svg width="18" height="15"
                                                        viewBox="0 0 18 20"
                                                        fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16 5.00006L15.1327 17.1425C15.0579 18.1892 14.187 19.0001 13.1378 19.0001H4.86224C3.81296 19.0001 2.94208 18.1892 2.86732 17.1425L2 5.00006M7 9.00006V15.0001M11 9.00006V15.0001M12 5.00006V2.00006C12 1.44778 11.5523 1.00006 11 1.00006H7C6.44771 1.00006 6 1.44778 6 2.00006V5.00006M1 5.00006H17"
                                                            stroke="#4B5565"
                                                            stroke-width="2"
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                        </path>
                                                    </svg>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--test-->
                            @empty
                                <div class="bg-pricingcintawhite mt-3 p-1 rounded-lg text-center progresslabel mb-5">
                                    Se el primero en responder</div>
                            @endforelse
                        </div>
                    @endif
                </div>
            </div>     
        @empty
            Se el primero en comentar esta clase
        @endforelse 
    
    </div>

    @push('js')
        <script>
            function validar(type) {
                if (type) { //RESPONSE
                    inp_resp = document.getElementById(`inp_resp_${type}`).value
                    if (inp_resp.trim().length > 0) { 
                        Livewire.emit('saveComent', inp_resp.trim(), 1);
                        document.querySelector('.emojionearea-editor').innerHTML = '';
                    } else alertify.error('vacio');
                } else {/* COMMENTS */                    
                    inp_coment = document.getElementById('inp_coment').value 
                    if (inp_coment.trim().length > 0) { 
                        Livewire.emit('saveComent', inp_coment.trim());
                        document.querySelector('.emojionearea-editor').innerHTML = '';
                    } else alertify.error('vacio');
                }
            }
            window.addEventListener('showRes', event => {
                $(`#inp_resp_${event.detail.id_c}`).emojioneArea({
                    pickerPosition: "bottom",
                    tonesStyle: "bullet",
                    recentEmojis: false,
                    search: false,
                    useInternalCDN: true,
                    tones: false,
                    shortcuts: false,
                    inline: false,
                })
            });
    
        </script>
    @endpush
</div>