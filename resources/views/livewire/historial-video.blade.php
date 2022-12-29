<div>
        {{-- -{{$curso_id}}------ --}}
       {{--tmr{{$porcentaje}}--}} 
    @if ($porcentaje <= 25)
       
            <div class="shadow w-full border border-red-500 dark:bg-red-400 mt-2 rounded-full"> 
                <div class="dark:text-gray-200 bg-red-600 dark:bg-red-600 leading-none h-1.9 text-center text-white rounded-full" role="progressbar" aria-valuenow="1456"
                    aria-valuemin="0" aria-valuemax="4550" style="width: {{$porcentaje}}%;font-size:11px">{{$porcentaje}}%</div>
            </div>
      
    @elseif($porcentaje <= 50)
       
            <div class="shadow w-full border border-yellow-500 dark:bg-yellow-300 mt-2 rounded-full">
                <div class="dark:text-gray-200 bg-yellow-500 dark:bg-yellow-400 leading-none h-1.9 text-center text-white rounded-full" role="progressbar" aria-valuenow="1456"
                    aria-valuemin="0" aria-valuemax="4550" style="width: {{$porcentaje}}%;font-size:11px">{{$porcentaje}}%</div>
            </div>
        
    @elseif($porcentaje <= 75)
       
            <div class="shadow w-full border border-indigo-600 dark:border-indigo-400  mt-2 rounded-full ">
                <div class="dark:text-gray-200 bg-indigo-700 dark:bg-indigo-700 leading-none h-1.9 text-center text-white rounded-full" role="progressbar" aria-valuenow="1456"
                    aria-valuemin="0" aria-valuemax="4550" style="width: {{$porcentaje}}%;font-size:11px">{{$porcentaje}}%</div>
            </div>
        
    @elseif($porcentaje <= 100)
      
    <div class="shadow w-full border border-green dark:bg-green bg-green mt-2 rounded-full ">
      <div class="dark:text-gray-200 bg-green-500 dark:bg-green-400 leading-none h-1.9  text-center text-white rounded-full" style="width: {{$porcentaje}}%;font-size:11px">{{$porcentaje}}%</div>
    </div>
        
    @endif

</div>
