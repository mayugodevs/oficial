<h1>Hi, how are you?</h1>

<button onclick="mandar_api()">MANDAR</button>
<?php 
    $ch = curl_init();
    $array = [
        'fname' => 'Soto Chahua',
        'email' => 'jlsc.hco96@gmail.com',
        'input_channel_id' => 2,
        'source_id' => 1,
        'interest_type_id' => 4,
    ];

    $data = http_build_query($array);

    curl


?>
<script>

    function mandar_api()
    {
        data = {
            fname : 'Soto Chahua',
            email : 'jlsc.hco96@gmail.com',
            input_channel_id : 2,
            source_id : 1,
            interest_type_id : 4,
        }
        console.log(JSON.stringify(data))
        
        fetch('https://api.eterniasoft.com/v3/clients', {
        // fetch('https://api.sperant.com/v3/clients', {
            method: 'POST',
            mode: 'no-cors', 
            headers: {
                'Content-Type' : 'application/json',
                'Authorization' : '9oQYyBiFv61KQMENN6CYe36ZJE3eGxxl6B7YcDRP',
            },
            body: JSON.stringify(data),
        })    
        .then(r => console.log(r))
        .catch((err) => console.log(err));
        
        // fetch('https://api.sperant.com/v3/input_channels', {
        //     method: 'GET',
        //     mode: 'no-cors', 
        //     headers: {
        //         'Authorization' : '9oQYyBiFv61KQMENN6CYe36ZJE3eGxxl6B7YcDRP'
        //     }
        // })
        // // .then(r => r.json())
        // .then(r => console.log(r))
        // .catch((err) => console.log(err));
    }
</script>