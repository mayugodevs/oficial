@extends('layout')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    {{-- <div x-data="{open:false}">
        <button x-on:click="open=!open"> 
            Menú
        </button>

        <nav x-show="open" x-on:click.away="open =false">
            <ul>
                <li>Nav. 1</li>
                <li>Nav. 2</li>
                <li>Nav. 3</li>
                <li>Nav. 4</li>
            </ul>
        </nav>

    </div>   --}}
    <style>
        .hidden {
            display: none
        }
    </style>
    <div x-data="data()">{{-- x-init="" --}}
        {{-- <button x-bind:disabled="open" x-on:click="isOpen()"  class="bg bg-red-500"> 
            Menú
        </button> --}}
        <button   x-on:click="isOpen()"  class="bg bg-red-500" x-bind:disabled="open"> 
            Menú
        </button>

        <nav x-on:click.away="close()" x-bind:class="{'hidden':!open}">   {{-- x-show="open"  --}}                                                 
            <ul>
                <li>Nav. 1</li>
                <li>Nav. 2</li>
                <li>Nav. 3</li>
                <li>Nav. 4</li>
            </ul>
        </nav>

    </div>  
    <script>
        function data(){
            return {
                open : false,
                isOpen(){
                    this.open = !this.open
                },
                close(){
                    this.open = false
                }
            }
        }
    </script>
    
@endsection