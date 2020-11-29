<!doctype html>
<html class="no-js" lang="">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Steelguide</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
     <script src="{{url('js/modernizr-3.6.0.min.js')}}"></script>
      <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
     <script src="{{url('js/main.js')}}"></script>
     <script src="{{url('js/main.js')}}"></script>
    <link rel="shortcut icon" href="{{url('img/favicon.png')}}">
    <!-- Normalize Css -->
    <link rel="stylesheet" href="{{url('css/normalize.css')}}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{url('css/animate.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{url('css/fontawesome-all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{url('fonts/flaticon.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('css/select2.min.css')}}">
    <script src="{{url('js/jquery.dependent.fields.js')}}"></script>
     <script src="{{url('js/popper.min.js')}}"></script>
    <!-- Slick Caousel CSS -->
    <link rel="stylesheet" href="{{url('css/slick.css')}}">
    <link rel="stylesheet" href="{{url('css/slick-theme.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{url('style.css')}}">
  
    <!-- Modernizr Js -->
   
    <!-- Plugins Js -->
   
    <!-- Imagesloaded Js -->
   
    <!-- Silk Cauosel JS -->
    <script src="{{url('js/slick.min.js')}}"></script>
    
    <!-- Smoothscroll Js -->
    <script src="{{url('js/smoothscroll.min.js')}}"></script>
    <script src="{{url('js/select2.full.min.js')}}"></script>
    <!-- Custom Js -->
    
    <script src="{{url('js/jquery.dependent.fields.js')}}"></script>
    
    <!-- Bootstrap Js -->
   
    <!-- Bootstrap Js -->
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <!-- Plugins Js -->
 
    <!-- Owl Carousel Js -->
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <!-- Counterup Js -->
    <script src="{{url('js/jquery.counterup.min.js')}}"></script>
    <!-- Waypoints Js -->
    <script src="{{url('js/waypoints.min.js')}}"></script>
    <!-- Nouislider Js -->
    <script src="{{url('js/nouislider.min.js')}}"></script>
    <!-- wNumb Js -->
    <script src="{{url('js/wNumb.js')}}"></script>
    <!-- Magnific Popup Js -->
    <script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Imagesloaded Js -->
    <script src="{{url('js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Smoothscroll Js -->
    <script src="{{url('js/smoothscroll.min.js')}}"></script>
    <!-- Silk Cauosel JS -->
    <script src="{{url('js/slick.min.js')}}"></script>
    <!-- Google Map js -->
  
    <!-- Validator js -->
    <script src="{{url('js/validator.min.js')}}"></script>
    <!-- Custom Js -->
     <style type="text/css">
       #navbarDropdown:hover .dropdown-menu{
            display: block;
        }
       
    </style>
    @yield('after-style')
</head>


<body>
   <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- ScrollUp End Here -->
    <div id="wrapper" class="wrapper">
         @include('include.header')

        @yield('content')

        @include('include.footer')
    </div>
       
 
  
    <!-- Bootstrap Js -->
  
   
   


  

  @yield('after-script')
</body>


</html>