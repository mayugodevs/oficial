<div>
    
    @if ($navOpen == 2)
        @foreach ($instructor as $item)
            {{ $item->descrip}}
        @endforeach

    @elseif($navOpen == 3)
        @foreach ($instructor as $item)
            {{ $item->nombres}} <br>
            {{ $item->especialidad}} <br>
            {{ $item->experiencia}} <br>

        @endforeach
    @else
        @foreach ($instructor as $item)
            {{ $item->nombres}} <br>
            {{ $item->especialidad}} <br>

        @endforeach
    @endif
</div>
  