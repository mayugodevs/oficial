<div>
    @if ($porcentaje <= 25)
    
        <div class="progess-container shadow w-full border-2 border-red-400 dark:bg-red-300 bg-red-400 mt-1 rounded-md">
                <div class="dark:text-gray-200 text-white-100 dark:bg-green-400 leading-none h-3  text-center  rounded-md" 
                 style="width: {{$porcentaje}}%;font-size:15px">{{$porcentaje}}%</div>
        </div>
    
    @elseif($porcentaje <= 50)
    
        <div class="progess-container shadow w-full border-2 border-yellow-500 dark:bg-yellow-300 mt-1 rounded-md">
                <div class= "dark:text-gray-200 bg-yellow-600 dark:bg-yellow-600 leading-none h-3  text-center text-black rounded-md" role="progressbar" aria-valuenow="1456"
                aria-valuemin="0" aria-valuemax="4550" style="width: {{$porcentaje}}%;font-size:15px">{{$porcentaje}}%</div>
        </div>
        
    @elseif($porcentaje <= 75)
    
        <div class="progess-container shadow w-full border-2 border-indigo-600 dark:border-indigo-400  mt-1 rounded-md ">
                <div class="dark:text-gray-200 text-white-100 bg-indigo-700 dark:bg-indigo-700 leading-none h-3  text-center text-white rounded-md" role="progressbar" aria-valuenow="1456"
                aria-valuemin="0" aria-valuemax="4550" style="width: {{$porcentaje}}%;font-size:15px">{{$porcentaje}}%</div>
        </div>
        
    @elseif($porcentaje <= 100)
    
        <div class="progess-container shadow w-full border-2 border-green dark:bg-green bg-green mt-1 rounded-md ">
                <div class="dark:text-gray-200 text-white-100 dark:bg-green-400 leading-none h-3  text-center  rounded-md" style="width: {{$porcentaje}}%;font-size:15px">{{$porcentaje}}%</div>
        </div>
        
    @endif
   


</div>