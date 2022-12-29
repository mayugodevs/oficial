<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MayuGo</title>
    @include('inc.css')
    @stack('css')
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    @livewireStyles    
    
  </head>
  <body>
    @include('menu.header')
    
    <div class ="">
      @yield('content')
    </div>
    @include('menu.footer')
    @livewireScripts
  </body>
  
  
  @isset($js)
  {{$js}}
  @endisset
  
  @include('inc.js')
  
  @stack('js')
</html>