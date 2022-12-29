<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.css" integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />   
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.2/axios.min.js" integrity="sha512-bHeT+z+n8rh9CKrSrbyfbINxu7gsBmSHlDCb3gUF1BjmjDzKhoKspyB71k0CIRBSjE5IVQiMMVBgCWjF60qsvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <style>
    .banner{
    background: url('{{asset("img/baner.png")}}');
    /* width: 120px; */
    width: 100%;
    height: 400px;  
    }
    li>ul { transform: translatex(100%) scale(0) }
    li:hover>ul { transform: translatex(101%) scale(1) }
    li > span svg { transform: rotate(-90deg) }
    li:hover > span svg { transform: rotate(-270deg) }
    .group:hover .group-hover\:scale-100 { transform: scale(1) }
    .group:hover .group-hover\:-rotate-180 { transform: rotate(180deg) }
    .scale-0 { transform: scale(0) }
    .min-w-32 { min-width: 8rem }
</style>

<script>
    
    let ip_usuario = false; 
    let datos_user = []; 
    let errors = [
        {
            error : 'Minimo 10 caracteres, máximo 20 ',
            estado : 0
        },
        {
            error : 'Al menos un caracter número',
            estado : 0
        },
        {
            error : 'Al menos un caracter letra minuscula',
            estado : 0
        },
        {
            error : 'Al menos un caracter letra mayuscula',
            estado : 0
        },
        {
            error : 'Al menos un caracter especial ("!@#$%^&*()")',
            estado : 0
        },

    ];
    const regular_expressions = {
        string : /^[a-zA-ZÀ-ÿ\s]{3,40}$/,
        integer : /^\d{7,14}$/,
        email : /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i,
        text : /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.\/?~]/
    };

    const validarCampoPrueb = (expresion, input, input_estado) => {  
        if(expresion.test(input.value)){ 
            document.getElementById(`validate_${input.name}`).classList.add('text-green');
            document.getElementById(`validate_${input.name}`).classList.remove('text-red-500');
            document.getElementById(`validate_${input.name}`).innerHTML = '¡Correcto!' 
            input_estado.estado = true;
        } else { 
            document.getElementById(`validate_${input.name}`).classList.add('text-red-500');
            document.getElementById(`validate_${input.name}`).classList.remove('text-green');
            document.getElementById(`validate_${input.name}`).innerHTML = input_estado.mensaje 
            input_estado.estado = false;
        }
    }

    const validate_expressions = (expresion, texto) => {
        if (expresion.test(texto)) return 1;
        return 0;
    }


    // if (localStorage.getItem('ip')) {
    //     ip_usuario = localStorage.getItem('ip');/* existe */
    //     datos_user = JSON.parse(localStorage.getItem('datos_ip'));
    // }
    // else getIpClient();   /* No existe */ 
         

    async function getIpClient() {
        try {
            const response = await axios.get('https://api.ipify.org?format=json'); 
            localStorage.setItem('ip', response.data.ip)
            ip_usuario = response.data.ip 
            getIpPais()
            console.log('probandooo');
        } catch (error) {
            console.log('error');            
        }
    }
    async function getIpPais() {
        console.log('getpaisss');
        try {
            const pais_ip = await axios.get(`http://ip-api.com/json/${ip_usuario}`);
            console.log(pais_ip.data);
            datos_user = pais_ip.data;
            localStorage.setItem('datos_ip', JSON.stringify(pais_ip.data))
        } catch (error) {
            console.error(error);
        }
        console.log('getpaisss222');
    }    
    async function searchEmailDB(email){
        const res = await axios.get('/api/searchEmailDB/'+ email);  
        return res.data;
    }
    function validateEmailt(email){
        emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
        if (emailRegex.test(email)) return 1;
        return 0; 
    }
    function validarPassword(pass_one,div_draw){ 
        let contentPattern = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
        
        if (pass_one.length >= 10 && pass_one.length < 20) errors[0].estado = 1;
        else errors[0].estado = 0 
        if (haveNumber1(pass_one)) errors[1].estado = 1;
        else errors[1].estado = 0;
        if (type_letters1(pass_one, 0)) errors[2].estado = 1;
        else errors[2].estado = 0;
        if (type_letters1(pass_one, 1)) errors[3].estado = 1;
        else errors[3].estado = 0;
        if(contentPattern.exec(pass_one))errors[4].estado = 1;
        else errors[4].estado = 0;    
        let cont = errors.reduce( (a,b) => a + b.estado, 0);
        if (cont === 5) div_draw.innerHTML = '<ul><li class="text-green">Contraseña aceptable</li></ul>'; 
        else drawErrorsDiv(div_draw)
        return cont === 5 ? 1 : 0; 
    }
    function haveNumber1(texto){
        let numeros="0123456789";
        for(i=0; i<texto.length; i++){
            if (numeros.indexOf(texto.charAt(i),0)!=-1) return 1;
        }
        return 0;
    }
    function haveNumber(texto){
        let numeros="0123456789";
        for(i=0; i<texto.length; i++){
            if (numeros.indexOf(texto.charAt(i),0)!=-1){
                return 1;
            }
        }
        return 0;
    }            
    function type_letters(texto, type){
        letras = type ? "ABCDEFGHYJKLMNÑOPQRSTUVWXYZ" : "abcdefghyjklmnñopqrstuvwxyz";
        for(i=0; i<texto.length; i++){
            if (letras.indexOf(texto.charAt(i),0)!=-1) return 1;
        }
        return 0;
    }
    function drawErrors(){
        let max = 5;
        let count =0;
        let bodyError = '<ul>'
        errors.forEach(error => {
            text_color = !error.estado ? 'text-red-500' : 'text-green';
            if (error.estado) count ++;
            bodyError += `<li class="${text_color}">${error.error}</li>`
        });
        if (count == max) count_errors ++;
        bodyError += `</ul>`
        error_password.innerHTML = bodyError;
    }
    
    function type_letters1(texto, type){
        letras = type ? "ABCDEFGHYJKLMNÑOPQRSTUVWXYZ" : "abcdefghyjklmnñopqrstuvwxyz";
        for(i=0; i<texto.length; i++){
            if (letras.indexOf(texto.charAt(i),0)!=-1){
                return 1;
            }
        }
        return 0;
    }
    function drawErrorsDiv(div_draw){
        div_draw.innerHTML = ''; 
        let max = 5;
        let count =0;
        let bodyError = '<ul>'
        errors.forEach(error => {
            text_color = !error.estado ? 'text-red-500' : 'text-green';
            if (error.estado) count ++;
            bodyError += `<li class="${text_color}">${error.error}</li>`
        });
        // if (count == max) count_errors ++;
        bodyError += `</ul>`
        div_draw.innerHTML = bodyError;
    }
    function mostrar_notification(title){
        let timerInterval;
        Swal.fire({
            title: title,
            html: 'Sea paciente, esto puede tomar unos segundos! <br> No cierre esta ventana',
            timer: 60000,
            allowOutsideClick: false,
            onBeforeOpen: () => {
                Swal.showLoading()
                timerInterval = setInterval(() => {
                const content = Swal.getContent()
                if (content) {
                    const b = content.querySelector('b')
                    if (b) {
                    b.textContent = Swal.getTimerLeft()
                    }
                }
                }, 100)
            },
            onClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                console.log('I was closed by the timer')
            }
        })
    }
</script>