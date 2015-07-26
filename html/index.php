<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <!-- <link rel="stylesheet" href="css/bootstrap-theme.min.css"> -->
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

      <link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
      <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

      <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/js/jPlayer/css/not.the.skin.css">
    <link rel="stylesheet" href="/js/jPlayer/circle.skin/circle.player.css">

    <script type="text/javascript" src="/js/jPlayer/js/jquery.transform.js"></script>
    <script type="text/javascript" src="/js/jPlayer/js/jquery.grab.js"></script>
    <script type="text/javascript" src="/js/jPlayer/js/jquery.jplayer.js"></script>
    <script type="text/javascript" src="/js/jPlayer/js/mod.csstransforms.min.js"></script>
    <script type="text/javascript" src="/js/jPlayer/js/circle.player.js"></script>



    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">

      <div class="logo">
        <img src="/img/logo.png" alt="Tingle" style="width: 151px; height: 136px;" />
      </div>

      <h1>Discover</h1>

        </div>
      </div>
    </nav>


    <div class="container">

      <!-- Example row of columns -->
      <div class="row">

    <!-- The jPlayer div must not be hidden. Keep it at the root of the body element to avoid any such problems. -->
    <div id="jquery_jplayer_1" class="cp-jplayer"></div>

    <div class="prototype-wrapper"> <!-- A wrapper to emulate use in a webpage and center align -->


      <!-- The container for the interface can go where you want to display it. Show and hide it as you need. -->

      <div id="cp_container_1" class="cp-container">
        <div class="cp-buffer-holder"> <!-- .cp-gt50 only needed when buffer is > than 50% -->
          <div class="cp-buffer-1"></div>
          <div class="cp-buffer-2"></div>
        </div>
        <div class="cp-progress-holder"> <!-- .cp-gt50 only needed when progress is > than 50% -->
          <div class="cp-progress-1"></div>
          <div class="cp-progress-2"></div>
        </div>
        <div class="cp-circle-control"></div>
        <ul class="cp-controls">
          <li><a href="#" class="cp-play" tabindex="1">play</a></li>
          <li><a href="#" class="cp-pause" style="display:none;" tabindex="1">pause</a></li> <!-- Needs the inline style here, or jQuery.show() uses display:inline instead of display:block -->
        </ul>
      </div>


      </div>

      <hr>

      <footer>
        <p>&copy; Company 2015</p>
      </footer>
    </div> <!-- /container -->
        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
