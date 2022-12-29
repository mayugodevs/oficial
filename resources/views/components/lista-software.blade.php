<div class="">
    
   
        <ul class="text-xs lg:text-sm fotes leading-6 sm:leading-6 xl:leading-8 sm:grid hidden justify-start xl:justify-around ">
            <li class="font-semibold font-inter pb-2 dark:text-bordersec text-gray-650 text-lg">Software</li> 
            @foreach ($softwares as $software)
                <li><a href="#"><div class="font-inter font-normal text-gray-600 dark:text-borderconcours text-sixteen">{{$software->nombre}}</div></a></li>
            @endforeach
            
        </ul>
 

  
        <ul class="text-xs lg:text-sm fotes leading-6 sm:leading-6 xl:leading-8 sm:hidden flex flex-col justify-start xl:justify-around">
            <li class="font-semibold font-inter pb-2 dark:text-bordersec text-gray-650 text-lg">
                <button class="flex justify-between w-full focus:outline-none buton2" id="">
                    <div class="dark:text-bordersec text-gray-650 text-lg">
                        software
                    </div>
                    <div>
                        <svg class="arrow3" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.32805 9.71599C7.79671 9.24734 8.55655 9.24734 9.02521 9.71599L12.9769 13.6677L16.9286 9.71599C17.3973 9.24734 18.1571 9.24734 18.6258 9.71599C19.0944 10.1847 19.0944 10.9445 18.6258 11.4131L13.8255 16.2134C13.3568 16.6821 12.597 16.6821 12.1283 16.2134L7.32805 11.4131C6.8594 10.9445 6.8594 10.1847 7.32805 9.71599Z" fill="Currentcolor"/>
                            </svg>
                        <svg class="hidden arrow4" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.6257 16.2134C18.157 16.6821 17.3972 16.6821 16.9285 16.2134L12.9768 12.2617L9.02515 16.2134C8.55649 16.6821 7.79665 16.6821 7.32799 16.2134C6.85934 15.7448 6.85934 14.9849 7.32799 14.5163L12.1283 9.71599C12.5969 9.24734 13.3568 9.24734 13.8254 9.71599L18.6257 14.5163C19.0944 14.9849 19.0944 15.7448 18.6257 16.2134Z" fill="Currentcolor"/>
                        </svg>
                                 

                    </div>
                </button>

                
                
            </li> 
            <div class="card2">
                @foreach ($softwares as $software)
                <li><a href="#"><div class="font-inter font-normal text-gray-600 dark:text-borderconcours text-sixteen">{{$software->nombre}}</div></a></li>
            @endforeach
            </div>

            <script>
                let buton2=document.querySelector(".buton2");
                let card2=document.querySelector(".card2");
                let arrow3=document.querySelector(".arrow3");
                let arrow4=document.querySelector(".arrow4");
          
                buton2.addEventListener('click',function(){
                             // icon.classList.remove('hidden');
                              card2.classList.toggle('hidden');
                              arrow3.classList.toggle('hidden');
                              arrow4.classList.toggle('hidden');
                              
                              });
          
              </script>
            
        </ul>
   
</div>
