@if ($errors->any())
    <div {{ $attributes }}>

        
      <div class="grid grid-cols-1 gap-4 w-full    rounded-sm">

        

        <div class=" text-sm text-red-600 bg-red-200 border border-red-400 h-12 flex items-center p-4 rounded-sm relative" role="alert">
            {{ __('Email y/o passsword incorecto.') }}
          <button type="button" data-dismiss="alert" aria-label="Close" onclick="this.parentElement.remove();">
              <span class="absolute top-0 bottom-0 right-0 text-2xl px-3 py-1 hover:text-red-900" aria-hidden="true" >×</span>
          </button>
        </div>

      </div>


        
      

       {{-- <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>--}}
    </div>
@endif
