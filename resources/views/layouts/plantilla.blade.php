<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('section.head')
<body>
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '331280014145534',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v3.2'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/es_ES/sdk/xfbml.customerchat.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

    <div id="app">
   
    <App ruta="{{route('basepath')}}"></App>
     



 
        
<div class="fb-customerchat"
  attribution="setup_tool"
  page_id="147131702660719"
   theme_color="#ff5ca1"
   logged_in_greeting="Hola como podemos ayudarte?"
  logged_out_greeting="Hola como podemos ayudarte?">
 
</div>
               
                
               
   
   <!-- <script src = "https://code.jquery.com/jquery-2.1.4.min.js" ></script> -->
  <!--  <script src = "https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery .flip.min.js " ></script>
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script> -->
   <!--  <script>
      $(window).scroll(function() {
        if ($("#menu").offset().top > 30) {
            $("#menu").addClass("bg-dark");
        } else {
            $("#menu").removeClass("bg-primary");
        }
      });

     </script>  -->  
    </div>
@include('section.scripts')
    
</body>
</html>
