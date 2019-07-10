<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>App Quick Count</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
    <base href="{{ url('/') }}" />
</head>
<body id="app">
    <header>
        <div class="text pull-left">
                PENERIMAAN ZAKAT, INFAQ DAN<br>
                ACARA KALTIM BERZAKAT BERSAMA PROV. KALTIM<br>
                RUANG RUHUI RAHAYU KANTOR SAMARINDA, 22 JUNI
        </div>
        <img src="{{ asset('img/logo.png') }}" id="btn-fullscreen" class="pull-right" alt="Logo BAZNAS">
    </header>
    @yield('content')
    <script src="{{ asset('js/vendor.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script>

    <script>
    (function($) {
        "use strict";

        var FullScreen = function() {
            this.$body = $("body"),
            this.$fullscreenBtn = $("#btn-fullscreen")
        };

        //turn on full screen
        // Thanks to http://davidwalsh.name/fullscreen
        FullScreen.prototype.launchFullscreen  = function(element) {
          if(element.requestFullscreen) {
            element.requestFullscreen();
          } else if(element.mozRequestFullScreen) {
            element.mozRequestFullScreen();
          } else if(element.webkitRequestFullscreen) {
            element.webkitRequestFullscreen();
          } else if(element.msRequestFullscreen) {
            element.msRequestFullscreen();
          }
        },
        FullScreen.prototype.exitFullscreen = function() {
          if(document.exitFullscreen) {
            document.exitFullscreen();
          } else if(document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
          } else if(document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
          }
        },
        //toggle screen
        FullScreen.prototype.toggle_fullscreen  = function() {
          var $this = this;
          var fullscreenEnabled = document.fullscreenEnabled || document.mozFullScreenEnabled || document.webkitFullscreenEnabled;
          if(fullscreenEnabled) {
            if(!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {
              $this.launchFullscreen(document.documentElement);
            } else{
              $this.exitFullscreen();
            }
          }
        },
        //init sidemenu
        FullScreen.prototype.init = function() {
          var $this  = this;
          //bind
          $this.$fullscreenBtn.on('dblclick', function() {
            $this.toggle_fullscreen();
          });
        },
         //init FullScreen
        $.FullScreen = new FullScreen, $.FullScreen.Constructor = FullScreen

    })(window.jQuery)

    $.FullScreen.init();
    </script>
</body>
</html>
