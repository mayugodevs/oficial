<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Api extends Component
{
    public function render()
    {
        return view('livewire.api')->extends('layout');
    }

    public function apppi(){ 
        $ch = curl_init();
        $array1 = array(
            "fname" => "Berrospi Notan",
            "email" => "jlsc.hc341@gmail.com",
            "input_channel_id" => 1,
            "source_id" => 4,
            "interest_type_id" => 5,
        ); 

        $header_data = array(
            'Content-type: application/json',
            'Authorization: 9oQYyBiFv61KQMENN6CYe36ZJE3eGxxl6B7YcDRP'
        );

        $data = json_encode($array1);

        curl_setopt($ch, CURLOPT_URL, 'https://api.eterniasoft.com/v3/clients');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header_data);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            dd(curl_errno($ch));
        } else {
            $decoded = json_decode($response, true);
            dd($decoded);
        }
        curl_close($ch);
        // dd($decoded);
    }
}
/* 

$destinatario = "jlsc.lteamsof@gmail.com";


$ch = curl_init();
        $array1 = array(
            "fname" => $nombre,
            "lname" => $apellido,
            "email" => $email,
            "phone" => $telefono,
            "input_channel_id" => 1,
            "source_id" => 4,
            "interest_type_id" => 5,
        ); 

        $header_data = array(
            'Content-type: application/json',
            'Authorization: 9oQYyBiFv61KQMENN6CYe36ZJE3eGxxl6B7YcDRP'
        );

        $data = json_encode($array1);

        curl_setopt($ch, CURLOPT_URL, 'https://api.eterniasoft.com/v3/clients');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header_data);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            dd(curl_errno($ch));
        } else {
            $decoded = json_decode($response, true);
            dd($decoded);
        }
        curl_close($ch);


*/