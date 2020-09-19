<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">   
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">

    <title>Web Hosting Indonesia Unlimited & Terbaik - Niagahoster</title>

    <link href="{{ asset('appaset/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('appaset/css/costum.css') }}" rel="stylesheet">
    <link href="{{ asset('appaset/fontawesome/css/all.min.css') }}" rel="stylesheet">
  </head>

  <body>
    <span id="app">
      <router-view></router-view>
    </span>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('appaset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('appaset/js/bootstrap.min.js') }}"></script>

    <script>
    $(document).ready(function(){
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();

          var hash = this.hash;

          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){
            window.location.hash = hash;
          });
        }
      });
      
      $(window).scroll(function() {
        $(".slideanim").each(function(){
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
        });
      });
    })
    </script>
  </body>
</html>