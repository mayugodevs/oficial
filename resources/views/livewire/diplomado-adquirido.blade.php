<div>
    {{-- Be like water. --}}
 
  
<div class="border">
  @if ($estado_fecha==1)
  
       @foreach ($diplomado_adquirido as $item) 
      
       <script type="text/javascript">
      function showRemaining(){
        var end = new Date('{{($item->fecha_termino)->format("Y-m-d H:i:s")}}');
        var now = new Date();
        var r={};
        var s={
          year: 31536000,
          month: 2592000,
          day: 86400,   // feel free to add your own row
          hour: 3600,
          minute: 60,
          second: 1
        };
        var d = Math.abs(end - now)/1000;      
        var timer;
        Object.keys(s).forEach(function(key){
                     r[key] = Math.floor(d/s[key]);
                     d -= r[key] * s[key];
                                       }); 
             document.getElementById("finished{{$item->iddiplomado}}").innerHTML ='Mis clases terminan en:<br> '+r['day'] +'D- ' +r['hour']+'h: '+r['minute']+'m: ' + r['second']+'s';      
            }
     timer = setInterval(showRemaining, 1000);
          </script>
        
       @endforeach
       <div id="finished{{$item->iddiplomado}}" class="text-gray-700 dark:text-white"></div>
  @else
  <span class="text-gray-700 dark:text-white text-sm font-medium" >Finalizado</span>
  @endif
</div>

</div>
