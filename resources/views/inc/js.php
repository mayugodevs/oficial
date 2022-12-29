<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js" integrity="sha512-tHimK/KZS+o34ZpPNOvb/bTHZb6ocWFXCtdGqAlWYUcz+BGHbNbHMKvEHUyFxgJhQcEO87yg5YqaJvyQgAEEtA==" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script>
  if (localStorage.theme === 'dark' || (!'theme' in localStorage && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
      document.querySelector('html').classList.add('dark')
  } else if (localStorage.theme === 'dark') {
      document.querySelector('html').classList.add('dark')
  }
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.2/jquery-migrate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://cdn.plyr.io/3.6.8/plyr.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
  integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" 
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
        
<script>
  window.addEventListener('resolve', event => {
    // alertify.success();
    toastr.success(event.detail.message+'...', '¡Bien!.', {timeOut: 3000})
  })
  window.addEventListener('reject', event => {
    // alertify.error(event.detail.message);
    toastr.error(event.detail.message, '¡Error!', {timeOut: 2000})
  })
  window.addEventListener('warning', event => {
    // alertify.error(event.detail.message);
    toastr.warning(event.detail.message, '¡Alerta!', {timeOut: 2000})
  })
</script>
<script>
  $(document).ready(function(){
    $('.your-class').slick({
      prevArrow: $('.btnsprev'),
      nextArrow: $('.btnsnext'),
      slidesToShow: 1,
      dots: true,
      slidesToScroll: 1,
      appendDots:$('.divsdots'),
      autoplay: true,
      autoplaySpeed: 10000,
      customPaging : function(slider, i) {
        var thumb = $(slider.$slides[i]).data();
        return '<div class="ndot w-25pe xl:w-40pe h-25pe xl:h-40pe">'+(i+1)+'</div>';
        },
        
      });
  });
</script>
<script>
  $(document).ready(function(){
    var input = document.querySelector("#telf");
    window.intlTelInput(input, {
      initialCountry: "MX",
      autoHideDialCode: false,
      nationalMode: false,
      localizedCountries: { 'MX': 'Deutschland' },
      formatOnDisplay: false,
      preferredCountries: []
    });
  });
</script>
<script>
  document.getElementById('switchTheme').addEventListener('click', function() {
    let htmlClasses = document.querySelector('html').classList;
    if(localStorage.theme == 'dark') {
      htmlClasses.remove('dark');
      localStorage.removeItem('theme')
    } else {
      htmlClasses.add('dark');
      localStorage.theme = 'dark';
    }
  });
</script>
<script>
  let moneyId=0;
</script>