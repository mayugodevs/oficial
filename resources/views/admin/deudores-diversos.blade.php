@extends('layout')

@section('content')
  @push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css"> 
  @endpush
  <br>
  <br>
  <br>
  <br>
  <br> 
  <div class="p-8" x-data="abril_modal()"> 
     <table class="table-fixed" id="table-deudores">
      <thead>
        <tr>
          <th>ID Pay</th>
          <th>Email</th>
          <th>Alumno</th> 
          <th>Teléfono</th> 
          <th>Producto</th> 
          <th>Fecha Ult. Pago</th> 
          <th>Fecha Cobro</th> 
          <th>Pagado</th> 
          <th>Pendiente</th> 
          <th>Estado</th> 
          <th>Acción</th> 
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table> 
    <div  class=" overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" style="background-color: rgba(0,0,0,0.5)" x-show="modal" 
        :class="{ 'absolute inset-0 z-10 flex items-start justify-center': modal }">
        <div class="modal relative w-auto my-6 mx-auto max-w-6xl bg bg-gray-400" 
            {{-- @click.away="modal = false" --}}>
                              
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                
                <!-- Aqui empieza el modal -->
                <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                        Detalles de entregas de tareas y examen
                    </h3> 
                    <button
                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                        <span x-on:click="cerrar_modal()"
                            class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                            x
                        </span>
                    </button>
                </div>
                <div class="relative p-6 flex-auto   overflow-y-auto dark:bg-gray-500 bg-white-700" style="overflow:hidden" id="bodyemail">  
                    
                </div>
                <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                    <button
                        class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" x-on:click="cerrar_modal()" >
                        Cerrar
                    </button>
                    <button
                        class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" x-on:click="enviar_email()" >
                        Enviar 
                    </button>
                </div>
                <!-- Aqui empieza el modal -->
            </div>
        </div>
    </div>  
    
  </div> 
  @push('js') 
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
              
    <script>   

      api();

      function api(){  
        $('#table-deudores').DataTable({  
          "ajax":{            
            "url": '../fetch_deudores', 
            "method": 'GET', //usamos el metodo POST 
            "dataSrc":"",
          },     
          "lengthMenu": [[100,500,1000, -1], [100,500,1000, "All"]],   
          destroy: true,
          cache: false,
          dom: 'Bfrtip', 
          buttons: [
            'excel', 'pdf', 'print',  
          ], 
          "columns":[
            {"data": "idpay"},
            {"data": "email"},
            {"data": "alumno"}, 
            {"data": "telf"}, 
            {"data": "producto"}, 
            {"data": "last_pago"}, 
            {"data": "day_pay"}, 
            {"data": "paid"}, 
            {"data": "pending"}, 
            {"data": "status"}, 
            {"data": "action"}, 
          ],
          "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
          },
        });     
      } 
      function open_modal(id_pay){
        console.log(id_pay);
      }
      function openModal(modalId) {
        modal = document.getElementById(modalId)
        modal.classList.remove('hidden')
      }
      function closeModal() {
        modal = document.getElementById('modal')
        modal.classList.add('hidden')
      }
      function abril_modal(){
        return {
          modal : false,
          contenido : '',
          abrir_modal(id_pay){
            this.modal = true;
            this.buscar_pay(id_pay) 
            
          },
          cerrar_modal(){
            this.modal = false;
          },
          buscar_pay(id_pay){
            fetch(`../deudor/${id_pay}`)
              .then(response => response.json())
              .then(data => this.pintar_email(data));
          },
          pintar_email(data){
            document.getElementById('bodyemail').innerHTML = data
            ClassicEditor
              .create( document.querySelector( '#e_mensj' ) )
              .then( editor => {
                  editor.model.document.on('change:data', () => {
                      this.contenido = editor.getData();
                  })
                  console.log('aaaaaaaaa');
              })
              .catch( error => {
                  console.error( error );
              }); 
          },
          enviar_email(){
            console.log('enviandooooooooooooo........');
            e_remit = document.getElementById('e_remit').value
            e_dest = document.getElementById('e_dest').value
            e_asunt = document.getElementById('e_asunt').value
            e_mensj = document.getElementById('e_mensj').value 
            console.log(e_mensj);
            console.log('aaaaaaaaaaa');
            console.log(this.contenido);
            let data={
              'e_remit': e_remit,
              'e_dest': e_dest,
              'e_asunt': e_asunt,
              'e_mensj': e_mensj,
            } 
            fetch('../email_send',{             
              headers:{
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
              },
              method:'POST',
              body: JSON.stringify(data) 
            })
              .then(response => response.json())
              .then(response => console.log(response));
          },          
        }
      }
      
    </script> 
  @endpush
@endsection
  