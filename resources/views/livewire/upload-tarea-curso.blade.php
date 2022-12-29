<div>
    {{-- Stop trying to control. --}}

    <a class="bg-indigo-500 hover:bg-indigo-300 focus:outline-none text-white font-bold py-2 px-4 inline-flex items-center"
        wire:click="$set('open',true)">
        <svg fill="#FFF" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none" />
            <path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z" />
        </svg>
        <span class="ml-2">Entregar </span>
    </a>
    <x-jet-dialog-modal wire:model="open">

        <x-slot name='title'>


            {{ $tarea->tarea }}


        </x-slot>

        <x-slot name='content'>
            <form wire:submit.prevent="save" action="" method="POST"  enctype="multipart/form-data" >
                <div class="dropzone" id="dropzone"  style="border:2px dashed #6666FF" >
                <div class="dz-message needsclick" style="color: #b3b3b3;">

                  <span class="lnr lnr-cloud-upload" style="font-size:120px"></span>
                  <br>
                  <strong class="arra12" style="font-size:28px">Arrastra y suelta tus archivos aquí</strong>
                  <br>
                  <span>o</span>
                  <div style="display:flex; width:100%;justify-content: center">
                    <div class="divba arra12" style="border: 1px solid #6666FF;color: #6666FF;width: 250px;font-size: 25px;padding: 10px;font-weight: 400;border-radius: 5px;">Buscar Archivos</div>
                  </div>
                  <span class="note needsclick">
                    <span class="glyphicon glyphicon-open" aria-hidden="true" style="font-size:60px;"></span>
                  </span>
                </div>

               
            </div>
            <button type="submit">Save Photo</button>
              </form>

              

        </x-slot>

        <x-slot name='footer'>

        </x-slot>
    </x-jet-dialog-modal>

</div>
<script type="text/javascript">
    Dropzone.options.dropzone = {
        parallelUploads: 5,
        autoProcessQueue: false,
        addRemoveLinks: true,
        maxFilesize: 25,
        timeout: 3000000,
        //acceptedFiles:"image/*,.doc,.pdf,.zip,.rar,.mp4,.mp3,.txt,.sql,.xlsx,.docx,.ppt,.pptx",
        init: function() {
            dzClosure = this;
            $('#btn_upload').on('click', function(e) {
                dzClosure.processQueue();
            });
            dzClosure.on('success', function(file) {
                //divmsjesuccess = document.getElementById("msj_correcto");
                //divmsjesuccess.style.display = "block";
                //document.getElementById('msj_correcto').innerHTML = 'Archivo Subido con éxito';
               // cargarSeccionTarea();
            });
            dzClosure.on('error', function(file, message) {
                //divmsjerror = document.getElementById("msj_error");
              //  divmsjerror.style.display = "block";
               // document.getElementById('msj_error').innerHTML = message;
            });
            dzClosure.on("queuecomplete", function() {
                this.removeAllFiles();
            });
        },
    }

</script>
