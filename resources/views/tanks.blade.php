@extends('layout')
<style>
    .contentmygo {
        display: none !important;
    }

    .footeracceso {
        display: none !important;
    }
</style>
@section('content')

    <body class="bg-bgtanks text-white font-sans">
        <div class="container mx-auto px-4 pt-16">
            <h1 class="text-4xl font-bold text-center text-white-100 ">¡Gracias por tu compra!</h1>
            <p class="text-lg text-center text-white-100 pt-5">Estamos muy contentos de que hayas elegido nuestro producto.
                Esperamos que lo
                disfrutes al máximo y que vuelvas a visitarnos pronto.</p>
            <p class="text-lg text-center text-white-100">Si tienes alguna duda o necesitas ayuda, no dudes en contactarnos a
                través de
                nuestro correo electrónico o nuestro número de teléfono.</p>
        </div>
        <div class="justify-center pt-10">
            <div>
                <img src="https://images.emojiterra.com/google/android-pie/512px/1f973.png" class="h-40 w-40 mx-auto "
                    alt="">
            </div>
            <div class="text-center pt-8">
                <a href="/"
                    class="rounded-md bg-white-100 py-2.5 text-center  px-4 text-pricingtextduowhite  font-inter text-lg font-medium">volver al inicio</a>

            </div>
        </div>

    </body>

    </html>



    <script>
        $(document).ready(function(e) {
            if (localStorage.getItem("miArreglo")) {


                carritoV = JSON.parse(localStorage.getItem("miArreglo"));

                if (carritoV.length > 0) {
                    url = 'include/crud-lite.php'
                    datos = new FormData()

                    carritoV.forEach(curso => {
                        console.log('id: ' + curso);
                        datos.append('id', curso)
                        fetch(url, {
                                method: 'post',
                                body: datos
                            })
                            .then(r =>
                                localStorage.clear())
                            .then(r => {})
                        var id = curso;
                        $.ajax({
                            type: 'POST',
                            url: 'include/crud-lite.php',
                            data: {
                                id: id
                            },
                            success: function(response) {
                                localStorage.clear();
                            }
                        });
                    });
                }
            }
        });
    </script>
@endsection
