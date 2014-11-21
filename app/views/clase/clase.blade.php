<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clase 1 de 15</title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.) css/vendor.css -->
    <!-- bower:css -->
    <!-- endbower -->
    <!-- endbuild -->

    <!-- build:css(public/) css/clase/clase.css -->
    @if (\Config::get("app.debug"))
      <link rel="stylesheet" href="/css/clase/clase.css">
    @else
      <link rel="stylesheet" href="/dist/css/clase/clase.css?v=1.0.0">
    @endif
    <!-- endbuild -->

</head>
<body>
   
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
   
   
   
   
   
   
   
    <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Tokin</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav nav-center">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right" id="login-info" >
                <li><a href="../navbar/">Default</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
        
    </header>
    
    
    
    
    
    
    
        
    <div id="principal-container" class="container">
        
        <div class="col-sm-6">
            <section class="greybox"></section>
            <span class="title-greybox">Objetivo de la Clase</span>
            <textarea name="obj-clase" id="obj-clase" ></textarea>
        </div>
        
    </div>
       
       
       
       
       
       
        
    
    
    
    
    
    
      <footer>
        <p>&copy; Lirmi 2014</p>
      </footer>
      
      
      
      
      
      
      
      
    <!-- build:js(.) scripts/oldieshim.js -->
    <!--[if lt IE 9]>
    <script src="bower_components/es5-shim/es5-shim.js"></script>
    <script src="bower_components/json3/lib/json3.js"></script>
    <![endif]-->
    <!-- endbuild -->
    @if (\Config::get("app.debug"))
      <!-- build:js(public/) js/vendor-clase.js -->
      <!-- bower:js -->
      <script src="/bower_components/jquery/dist/jquery.js"></script>
      <script src="/bower_components/angular/angular.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/affix.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/alert.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/button.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/collapse.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/dropdown.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/transition.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/scrollspy.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/modal.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/tooltip.js"></script>
      <script src="/bower_components/bootstrap-sass-official/assets/javascripts/bootstrap/popover.js"></script>
      <script src="/bower_components/angular-animate/angular-animate.js"></script>
      <!-- endbower -->
      <!-- endbuild -->

    @else
      <script src= "/dist/js/vendor-clase.js?v=1.0.0"></script>
    @endif

    @if (\Config::get("app.debug"))
        <!-- build:js(public/) js/scripts-clase.js -->
        <script src="/scripts/clase/app.js"></script>
        <script src="/scripts/clase/controllers/main.js"></script>
        <script src="/scripts/clase/controllers/about.js"></script>
        <!-- endbuild -->
    @else
      <script src= "/dist/js/scripts-clase.js?v=1.0.0"></script>
    @endif


</body>
</html>