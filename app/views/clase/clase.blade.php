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
        <nav class="navbar navbar-tokin navbar-fixed-top" role="navigation">
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
          <section class="subnav-tokin">
              <span class="info"><span class="title">Asignatura:</span> Matemáticas</span>
              <span class="info"><span class="title">Nivel:</span> 2˚ Básico</span>
          </section>
        </nav>
    </header>
    
    
    
    
    
    
    
        
    <div id="principal-container" class="container">



      <div class="row">
        <div class="col-sm-6">

          <span class="title-clase">Clase 1</span>
          <button class="btn btn-grey pull-right">17 Oct, 2014 <span class="glyphicon glyphicon-calendar"></span></button>

        </div>
        <div class="col-sm-6">

          <button class="btn btn-grey">Imprimir <span class="glyphicon glyphicon-print"></span></button>

          <div class="checkbox-green pull-right">
            <input type="checkbox" value="None" id="check" name="check" />
            <label for="check"></label>
          </div>

        </div>
      </div>



      <div class="row">
        <div class="col-sm-6">
            <section class="greybox">
              <span class="title-greybox">Objetivo de la Clase</span>
              <textarea name="obj-clase" id="obj-clase" ></textarea>
            </section>


            <section class="greybox">
              <div class="row row-oa-box">
                <div class="col-sm-12">
                  <span class="title-greybox">Objetivos de Aprendizaje</span>
                  <button type="button" class="btn btn-blue btn-sm pull-right">Agregar o Quitar</button>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">


                  <div class="oa-item oa-red">
                    <span class="title-oa">OA 01</span>
                    <span class="description">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, modi est molestias aliquid odio omnis nemo asperiores. Voluptas doloribus veniam accusantium architecto porro ratione magni natus. Ipsum, doloremque dolore blanditiis.
                    </span>
                  </div>


                  <div class="oa-item oa-green">
                    <span class="title-oa">0A 02</span>
                    <span class="description">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, modi est molestias aliquid odio omnis nemo asperiores. Voluptas doloribus veniam accusantium architecto porro ratione magni natus. Ipsum, doloremque dolore blanditiis.
                    </span>
                  </div>


                  <div class="oa-item oa-blue">
                    <span class="title-oa">OA 03</span>
                    <span class="description">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, modi est molestias aliquid odio omnis nemo asperiores. Voluptas doloribus veniam accusantium architecto porro ratione magni natus. Ipsum, doloremque dolore blanditiis.
                    </span>
                  </div>


                </div>
              </div>
            </section>
        </div>
        <div class="col-sm-6">

            <section class="greybox">
              <span class="title-greybox">Inicio</span>
              <textarea name="obj-clase" id="obj-clase" ></textarea>
              <a href="" class="suggestion-greybox">Sugerencia</a>
            </section>


            <section class="greybox">
              <span class="title-greybox">Desarrollo</span>
              <textarea name="obj-clase" id="obj-clase" ></textarea>
              <a href="" class="suggestion-greybox">Sugerencia</a>
            </section>


            <section class="greybox">
              <span class="title-greybox">Cierre</span>
              <textarea name="obj-clase" id="obj-clase" ></textarea>
              <a href="" class="suggestion-greybox">Sugerencia</a>
            </section>

        </div>
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