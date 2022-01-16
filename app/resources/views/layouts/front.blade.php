<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{config("app.description")}}">
    <meta name="author" content="{{config("app.author")}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <title>{{config("app.name")}} - @yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset("vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset("assets/css/fontawesome.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/tooplate-main.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/owl.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    @yield('css')
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>

  <body>
    
    <!-- Pre Header -->
    <div id="pre-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span>Suspendisse laoreet magna vel diam lobortis imperdiet</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="{{ route("front.home") }}">
            <img src="{{ asset("assets/images/logo-removebg-preview.png") }}" class="img img-responsive" height="70" alt="{{ config("app.name") }}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route("front.home") }}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route("front.products") }}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route("front.about") }}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route("front.contact") }}">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    @yield('content')


     
    <!-- Footer Starts Here -->
    <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="logo">
                <img src="{{ asset("assets/images/logo-removebg-preview.png") }}" class="img img-responsive" height="70" alt="{{ config("app.name") }}">
              </div>
            </div>
            <div class="col-md-12">
              <div class="footer-menu">
                <ul>
                  <li><a href="{{ route("front.home") }}">Home</a></li>
                  <li><a href="#">Help</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">How It Works ?</a></li>
                  <li><a href="{{ route("front.contact") }}">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-12">
              <div class="social-icons">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Ends Here -->
  
  
      <!-- Sub Footer Starts Here -->
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-text">
                <p>Copyright &copy; 2019 {{config("app.name")}} - Design: <a rel="dofollow" target="_blank" href="">{{config("app.author")}}</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Sub Footer Ends Here -->
  
  
      <!-- Bootstrap core JavaScript -->
      <script src="{{ asset("vendor/jquery/jquery.min.js") }}"></script>
      <script src="{{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
  
  
      <!-- Additional Scripts -->
      <script src="{{ asset("assets/js/custom.js") }}"></script>
      <script src="{{ asset("assets/js/owl.js") }}"></script>
  
  
      <script language = "text/Javascript"> 
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
            }
        }
      </script>
      @yield('js')
    </body>
  
  </html>