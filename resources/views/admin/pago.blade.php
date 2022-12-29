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
  <div class="p-8">
    <div>
      <div> 
        <div class="grid grid-cols-4">
          <div>
            <input type="date" name="" id="init">
          </div>
          <div>
            <input type="date" name="" id="end">
          </div>
          <div>
            <select name="" id="tipo_pago">
              <option value="1" selected>Todo</option>
              <option value="2" >Culqui</option>
              <option value="3" >PayPal</option>
              <option value="4" >Pago Efectivo</option>
              <option value="5" >Transferencia</option> 
            </select>
          </div>
          <div>
            <input type="button" value="BUSCAR PAGOS" onclick="buscar_pagos()">
          </div>
        </div>
      </div>
    </div>
    <table class="table-fixed" id="table-luis">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Fecha Pago</th>
          <th>Monto</th>
          <th>Tipo</th>
          <th>Concepto</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table> 
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
      let inicio =  @json(date("Y-m-01")); 
      let fin =  @json(date("Y-m-t")); 
      let tipo =  1; 
      document.getElementById('init').value = inicio;
      document.getElementById('end').value = fin; 

      api();

      function api(){  
        $('#table-luis').DataTable({  
          "ajax":{            
            "url": `insc/${tipo}/${inicio}/${fin}`, 
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
            {"data": "idalum"},
            {"data": "nombres"},
            {"data": "apellidos"},
            {"data": "fecha_pago"},
            {"data": "monto_pago"},
            {"data": "tipo"},
            {"data": "servicio"},
          ],
          "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
          },
        });     
      }
      function buscar_pagos(){
        inicio = document.getElementById('init').value;
        fin = document.getElementById('end').value;
        tipo = document.getElementById("tipo_pago").value; 

        api();

      } 
    </script>
  @endpush
@endsection
  