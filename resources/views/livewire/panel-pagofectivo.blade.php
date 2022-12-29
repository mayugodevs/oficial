<div>
    @push('css')        
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
        <script>
            datatable()
            function datatable(){
                jQuery(document).ready(function($) {
                    table = $('#example').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'excel', 
                        ],
                    });        
                });
            }        
            window.addEventListener('table', event => { 
                console.log('hiiiii');
                datatable();
                
            })
        </script>
        
    @endpush
    <br>
    <br>
    <br>
    <br>  

    <div class="container p-5" >
        <div class="grid grid-cols-3">
            <div>
                <label for="">Inicio {{$inicio}}</label>
                <input type="date" name="" id="" wire:model="inicio">
            </div>
            <div>
                <label for="">Fin {{$fin}}</label>
                <input type="date" name="" id="" wire:model="fin">
            </div>
            <div>
                <label for="">Tipo</label>
                <select name="" id="" wire:model="tipo">
                    <option value="1" selected>Mes actual</option>
                    <option value="2" >Culqui</option>
                    <option value="3" >PayPal</option>
                    <option value="4" >Pago Efectivo</option>
                    <option value="5" >Transferencia</option>
                    <option value="6" >Todo</option>
                </select>
            </div>
        </div>
        <table id="example" class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>Alumno</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>CIP</th>
                    <th>Fecha Pago</th>
                    <th>Monto</th>
                    <th>Tipo</th>
                    <th>Concepto</th>                
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $item)                    
                    <tr>
                        <td>{{$item->alumno->nombres}} {{$item->alumno->apellidos}}</td>
                        <td>{{$item->alumno->email}}</td>
                        <td>{{$item->alumno->telf}}</td>
                        <td>CIP</td>
                        <td>{{$item->fecha}}</td>
                        <td>{{$item->monto}}</td>
                        <td>{{$item->servicio}}</td>                        
                        <td>{{$item->servicio}}</td>                        
                    </tr>
                @endforeach
                
            </tbody>
            <tfoot>
                <tr>
                    <th>Alumno</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>CIP</th>
                    <th>Fecha Pago</th>
                    <th>Monto</th>
                    <th>Tipo</th>
                    <th>Concepto</th>                
                </tr>
            </tfoot>
        </table>
    </div>
 
    {{-- @push('js')
        <script>
            
        </script>
    @endpush --}}
</div>
