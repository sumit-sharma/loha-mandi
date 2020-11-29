
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
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Normalize Css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main Css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Slick Caousel CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernizr Js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
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
       
   <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins Js -->
    <script src="js/plugins.js"></script>
    <!-- Imagesloaded Js -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- Owl Carousel Js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Silk Cauosel JS -->
    <script src="js/slick.min.js"></script>
    <!-- Smoothscroll Js -->
    <script src="js/smoothscroll.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
    <script type="text/javascript">

    @yield('after-script')
</script>
</body>


</html>