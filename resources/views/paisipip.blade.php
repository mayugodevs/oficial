@extends('layout')
@section('content')
<br>
<br>
<br>
<br>
<br>
    {{-- @foreach ($alums as $alum)
        {{$alum->nombres}}-{{$alum->ip}}-{{$alum->pais}}
        <hr>
    @endforeach --}}

    <script>
        alums = @json($alums);
        console.log(alums);
        ipVa = []
        alumsFil = alums.filter( alum => alum.pais == null && alum.ip != null)
        alll = []
        alumsFil.forEach(element => {
            // console.log();
            alll.push({
                ip : element.ip.split(",", 1).join(''),
                idalum : element.idalum,
            })
        });
        // a = alumsFil.filter( alum => )
        console.log(alumsFil);
        console.log(alll);
        function salvarIP(){
            alll.forEach(element => {
                console.log(element);
            // url = `http://api.ipstack.com/${element.ip}1?access_key=cc71d43ecf1523ea5a506b8c43a44a09`
            // url = `https://geo.ipify.org/api/v1?apiKey=at_rcgR2xf9apkiIellf9UzlNajrecGE&ipAddress=${element.ip}`
            // url = `https://ipwhois.app/json/${element.ip}`
            url = `https://ipinfo.io/${element.ip}?token=498e9bc378101b`

            
            // url = `https://api.ipregistry.co/181.64.57.135?key=9rxle8s56fh5064s`
            // console.log(url);
            fetch(url)
            .then(r => r.json())
            .then(r => {
                // console.log(r);
                if(r.country){
                    ipVa.push({
                        idAlumno : element.idalum,
                        ip : element.ip,
                        pais : r.country,
                    })
                }else{
                    // console.log('mal');
                }
                
            })
            
        });
        }

        function guardarPais(){
            ipVa.forEach(element => {
                axios.post('../savePais',element)
                .then( response => {
                    
                    console.log(response.data.resultado);
                })
            });
        }
        
    </script>
@endsection