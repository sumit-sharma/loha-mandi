

@extends('layouts.home')
@section('after-style')
<link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
  <link
    href="//fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,600&display=swap"
    rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <style type="text/css">
      @charset "UTF-8";

/*--
Author: W3layouts
Author URL: http://w3layouts.com
--*/
/*!
 * Bootstrap v4.4.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #dc3545;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #17a2b8;
  --white: #fff;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #d63447;
  --secondary: #f57b51;
  --success: #28a745;
  --info: #17a2b8;
  --warning: #ffc107;
  --danger: #dc3545;
  --light: #f8f9fa;
  --dark: #343a40;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

article,
aside,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section {
  display: block;
}

body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
}
.w3l-main-slider .banner-view{
    background: url(../img/img2.jpg) no-repeat center;
    background-size: cover;
    height: 100vh;
    position: relative;
    z-index: 0;
    display: grid;
    align-items: center;
}
.w3l-main-slider .banner-info {
    background: url(../images/dots.png);
    height: 100vh;
    display: grid;
   
}
.w3l-main-slider .banner-info-bg {
    max-width: 750px;
    margin-top: 100px;
   
}
.w3l-main-slider .scrollhny-btn {
    position: absolute;
    left: 50%;
    bottom: 10%;
    z-index: 1;
}
.owl-dots{
    display: none;
}
.owl-nav{
    display: none;
}

[tabindex="-1"]:focus:not(:focus-visible) {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}



@media (min-width: 992px) {
  
/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url("../fonts/fontawesome-webfont.eot?v=4.7.0");
  src: url("../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0") format("embedded-opentype"), url("../fonts/fontawesome-webfont.woff2?v=4.7.0") format("woff2"), url("../fonts/fontawesome-webfont.woff?v=4.7.0") format("woff"), url("../fonts/fontawesome-webfont.ttf?v=4.7.0") format("truetype"), url("../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular") format("svg");
  font-weight: normal;
  font-style: normal;
}



/*--//footer--*/
/*sourceMappingURL=style-freedom.css.map */
  </style>
@endsection
@section('content')

<!--slider-->

 

<!--end slider-->
  
        <!-- Inne Page Banner Area End Here -->
        <section class="w3l-main-slider position-relative" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
        <div class="item">
          
            <div class="slider-info banner-view bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg ">
                   
                    <h5 class="text-white"style="font-size: 50px;">Connect Directly with scrap generators</h5>
                    <div class="banner-buttons mt-md-5 mt-4">
                      <a class="ghost-btn" style="border: 1px solid #930e08;
color: #ffffff;
background-color: #930e08; padding: 10px;" href="#plan">Steel plant Subscription</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
        </div>
        <div class="item">
         
            <div class="slider-info  banner-view banner-top1 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg ">
                   
                    <h5 class="text-white"style="font-size: 50px;">Get latest Price alert for Scrap and ingont for just Rs. 20/Day</h5>
                    <div class="banner-buttons mt-md-5 mt-4">
                       <a class="ghost-btn" style="border: 1px solid #930e08;
color: #ffffff;
background-color: #930e08; padding: 10px;" href="#plan">Steel plant Subscription</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
       
        </div>
        <div class="item">
          
            <div class="slider-info banner-view banner-top2 bg bg2">
              <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg ">
                   
                     <h5 class="text-white"style="font-size: 50px;">Purchase Scrap at best price</h5>
                    <div class="banner-buttons mt-md-5 mt-4">
                      <a class="ghost-btn" style="border: 1px solid #930e08;
color: #ffffff;
background-color: #930e08; padding: 10px;" href="#plan">Steel plant Subscription</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         
        </div>
      
      </div>
     
      <div class="scrollhny-btn">
        <a class="btn-btmhny scroll" href="#about">
          <div class="scroll-arrow"></div>
          <div class="scroll-arrow"></div>
          <div class="scroll-arrow"></div>
        </a>

      </div>

    </div>

  </section>
        <!-- Pricing Page Start Here -->
        <section id="plan">
    <div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel">
      <div class="carousel-inner">
    
    <div class="carousel-item active">
       <div class="container-fluid marginbottom-100">
                <div class="section-heading heading-dark heading-center">
                    <div class="item-sub-title margin-top50">Choose your Affordable Price & Package</div>
                    <h2 class="item-title">Steel plant Subscription</h2>
                </div>
                <div class="row gutters-20">
                    <div class="col-xl-2 d-md-none d-lg-none d-block d-xl-block">
                        <div class="pricing-box-layout1">
                            <h3 class="item-title">Scrap Producer</h3>
                            <div class="item-price">
                                <div class="item-currency">Rs.</div>100<div class="item-duration">Company</div>
                            </div>
                            <div class="item-content">
                                <p>Get the contact details of Sale/Purchase manager</p>
                                <a href="#" class="item-btn1">Subscribe</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-2 d-md-none d-lg-none d-block d-xl-block ">
                        <div class="pricing-box-layout1">
                            <h3 class="item-title">Scrap Sale Offer</h3>
                            <div class="item-price">
                                <div class="item-currency">Rs.</div>100<div class="item-duration">Offer</div>
                            </div>
                            <div class="item-content">
                                <p>Check & Bid on scrap sale ads.</p>
                                <a href="#" class="item-btn1">Subscribe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 d-md-none d-lg-none d-block d-xl-block ">
                        <div class="pricing-box-layout1">
                            <h3 class="item-title">Daily SMS for INGOT & Scrap Price</h3>
                            <div class="item-price">
                                <div class="item-currency">Rs.</div>20<div class="item-duration">Day</div>
                            </div>
                            <div class="item-content">
                                <p>Get the contact details of scrap generating company and contact directly to buy scrap.</p>
                                <a href="#" class="item-btn1">Subscribe</a>
                            </div>
                        </div>
                    </div>

                     <div class="col-xl-2 d-md-none d-lg-none d-block d-xl-block ">
                        <div class="pricing-box-layout1">
                            <h3 class="item-title">Daily notification for Scrap sale Offer</h3>
                            <div class="item-price">
                                <div class="item-currency">Rs.</div>10<div class="item-duration">day</div>
                            </div>
                            <div class="item-content">
                                <ul>
                                    
                                </ul>
                                <a href="#" class="item-btn1">Subscribe</a>
                            </div>
                        </div>
                    </div>
                     <div class="col-xl-2 d-md-none d-lg-none d-block d-xl-block">
                        <div class="pricing-box-layout1">
                            <h3 class="item-title">Scrap Sale Notification</h3>
                            <div class="item-price">
                                <div class="item-currency">Rs.</div>10<div class="item-duration">Day</div>
                            </div>
                            <div class="item-content">
                                <p>Don’t miss out the latest scrap sale offer</p>
                                <a href="#" class="item-btn1">Subscribe</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
  </div>
</div>
        
            
        </section>
        
    @endsection
    @section('after-script')
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- stats -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
 <script src="{{url('js/slick.min.js')}}"></script>
    
    <!-- Smoothscroll Js -->
   
    <!-- Custom Js -->
    <script src="{{url('js/main.js')}}"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>

    <!-- Bootstrap Js -->
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <!-- Plugins Js -->
   
   
    <!-- Silk Cauosel JS -->
    <script src="{{url('js/slick.min.js')}}"></script>
    
    <!-- Smoothscroll Js -->
  
    <!-- Custom Js -->
    <script src="{{url('js/main.js')}}"></script>
  
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
<script src="assets/js/bootstrap.min.js"></script>
@endsection
