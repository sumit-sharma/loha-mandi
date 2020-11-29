   
@extends('layouts.home')
@section('after-style')
  <script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
   <script src="{{url('js/main.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <!-- Bootstrap Js -->
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <!-- Plugins Js -->
    <script src="{{url('js/plugins.js')}}"></script>
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
    <script src="{{url('js/main.js')}}"></script>
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
    <!-- Slick Caousel CSS -->
    <link rel="stylesheet" href="{{url('css/slick.css')}}">
    <link rel="stylesheet" href="{{url('css/slick-theme.css')}}">
    <!-- Nouislider Style CSS -->
    <link rel="stylesheet" href="{{url('css/nouislider.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{url('style.css')}}">

    <!-- Modernizr Js -->
    <script src="{{url('js/modernizr-3.6.0.min.js')}}"></script>
@endsection
@section('content')



   <section class="single-listing-carousel-wrap">
            <div class="slick-carousel slick-navigation-layout2" data-slick='{
                "slidesToShow": 3,
                "slidesToShowTab": 3,
                "slidesToShowMobile": 2,
                "slidesToScroll": 1,
                "speed": 600,
                "autoplaySpeed": 2000,
                "dots": false,
                "arrows": true,
                "infinite": true,
                "lazyLoad": "progressive",
                "pauseOnHover": true,
                "autoplay": false,
                "centerMode": true,
                "adaptiveHeight": false,
                "rtl": false,
                "prevArrow": "<span class=\"slick-prev slick-navigation\"><i class=\"flaticon-back\"></i></span>",
                "nextArrow": "<span class=\"slick-next slick-navigation\"><i class=\"flaticon-right-arrow\"></i></span>"
            }'>
                <div class="nav-item"><img src="{{url('img/listing/1img.jpg')}}" alt="Listing" class="img-fluid"></div>
                <div class="nav-item"><img src="{{url('img/listing/listing-3-1.jpg')}}" alt="Listing" class="img-fluid"></div>
                <div class="nav-item"><img src="{{url('img/listing/listing-6-1.jpg')}}" alt="Listing"  class="img-fluid"></div>
                <div class="nav-item"><img src="{{url('img/listing/listing-5-1.jpg')}}" alt="Listing"  class="img-fluid"></div>
                <div class="nav-item"><img src="{{url('img/listing/1img.jpg')}}" alt="Listing" class="img-fluid"></div>
                <div class="nav-item"><img src="{{url('img/listing/listing-3-1.jpg')}}" alt="Listing" class="img-fluid"></div>
            </div>
        </section>
        <!-- Listing Banner Area End Here -->
        <!-- Single Listing Area Start Here -->
        <section class="single-listing-wrap-layout2 padding-bottom-7 bg--accent">
            <div class="single-listing-summary-wrap2">
                
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-listing-box-layout2">
                            <div class="listygo-text-box listing-details-info">
                                <h2 class="tab-content-title">{{$user->company_name}}</h2>
                                <p>{{$user->company_name}} is a Steel Plant located at {{$user->city}}  in the state of {{$user->state}}. {{$user->company_name}} {{$user->city}} was established the year {{$user->established_year}}. {{$user->company_name}} CIN number is {{$user->cin_no_or_gst}}. 
                                    </p>
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="gallery-box-layout2 titlebox background-title">
                                            <!-- <img src="{{url('img/listing/1img.jpg')}}" alt="listing" class="rounded img-fluid"> -->
                                            <div class="settitle">
                                           <h3 class="text-white"> {{$user->company_name}}</h3>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="widget widget-information widget-box-padding">
                            <h3 class="widget-title">Address</h3>
                            <ul class="block-list">
                                <li class="block-list-item"><i class="fas fa-map-marker-alt"></i>{{$user->city}},{{$user->state}}</li>
                               <!--  <li class="block-list-item"><i class="fas fa-phone"></i>{{$user->contact_no}}</li> -->
                                  <li class="block-list-item"><i class="fas fa-phone"></i>+91 xxxxxxxxxx </li> 
                                <li class="block-list-item"><i class="far fa-clock"></i><span>Sat - Mon:</span> 09.00am
                                    - 10.00pm</li>
                                <li class="block-list-item"> <input type="submit" class="search-btn2" value="{{$user->monthly_capacity_tons}} Tons"> </li>
                               
                            </ul>
                        </div>
                        </div>
                        </div>
                             <div class="row">

                                    </p>{{$user->company_name}} in {{$user->city}} has annual capacity of {{$user->monthly_production}} tons of MS Ingot, MS billet and TMT Bar.</p>
                                     </div> 
                                     <div class="row ">
                                        <div >
                                     <button type="submit" class="ghost-btn" data-toggle="modal" data-target="#myModal1" style="background-color: #930e08;
color: #ffffff;padding: 15px 30px;border: none;">Get detail now</button>
                                     </div>
                                     </div>  
                            </div>
                           
                            <div class="related-listing">
                                <h2 class="related-title">May You Also Like</h2>
                                <div id="owl-nav1" class="nav-control-layout3">
                                    <span class="rt-prev">
                                        <i class="fas fa-chevron-left"></i>
                                    </span>
                                    <span class="rt-next">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="rc-carousel listing-box-grid" data-custom-nav="#owl-nav1" data-loop="true"
                                data-items="4" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000"
                                data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false"
                                data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="false"
                                data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="false"
                                data-r-small="1" data-r-small-nav="false" data-r-small-dots="false" data-r-medium="2"
                                data-r-medium-nav="false" data-r-medium-dots="false" data-r-large="2" data-r-large-nav="false"
                                data-r-large-dots="false" data-r-extra-large="2" data-r-extra-large-nav="false"
                                data-r-extra-large-dots="false">
                               
                              @foreach($users as $u)
                                <div class="product-box">
                                    <div class="item-img  titlebox background-title">
                                        
                                        <!-- <img src="{{url('img/listing/listing-1-1.jpg')}}" alt="Listing" class="img-fluid grid-view-img">
                                        <img src="{{url('img/listing/listing-1-2.jpg')}}" alt="Listing" class="img-fluid list-view-img"> -->
                                     <div class="settitle">
                                      <h3 class="text-white"> {{$u->company_name}}</h3>
                                         </div>
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title"><a href="{{url('/view/'.$user->id)}}">{{$u->company_name}}</a></h3>
                                        <p class="item-paragraph">{{$u->company_name}} is a Steel Plant located ...
                                        </p>
                                        <ul class="contact-info">
                                            <li><i class="fas fa-map-marker-alt"></i>{{$u->city}}, {{$u->state}}</li>
                                            <li><i class="flaticon-phone-call"></i>+ 91 xxxxxxxx</li>
                                            <li><i class="fas fa-globe"></i>{{$u->website}}</li>
                                        </ul>
                                        <ul class="meta-item">
                                            <li class="item-btn"><a href="#" class="btn-fill">Details</a></li>
                                            
                                            <li class="entry-meta">
                                                <ul>
                                                    <li class="tooltip-item ctg-icon" data-tips="Nightlife"><a href="#"><i
                                                                class="flaticon-musical-note"></i></a></li>
                                                    <li class="tooltip-item" data-tips="My Favourite"><a href="#"><i
                                                                class="fas fa-heart"></i></a></li>
                                                  
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                        
                        
                        
                        <div class="widget widget-contact-form widget-box-padding">
                            <h3 class="widget-title">Contact us</h3>
                            @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert">×</button> 
                       <strong>{{ $message }}</strong>
                     </div>
                   @endif
                            <form class="contact-form-box"  method="post" action="{{Route('contacts')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <label>Your Name*</label>
                                        <input type="text" placeholder="Name" class="form-control" name="name" data-error="Name field is required"
                                            required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label>Phone No.*</label>
                                        <input type="phone" placeholder="Phone No." class="form-control" name="phone" data-error="E-mail field is required"
                                            required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label>Email *</label>
                                        <input type="email" placeholder="email" class="form-control" name="email" data-error="E-mail field is required"
                                            required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label>Your Message</label>
                                        <textarea placeholder="" class="textarea form-control" name="description" rows="7"
                                            cols="20" data-error="Message field is required" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group mb-0">
                                        <button type="submit" class="item-btn">Submit Message</button>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
        @endsection
       
 @section('after-script')

    <!-- Plugins Js -->
<!--     <script src="{{url('js/plugins.js')}}"></script> -->
    <!-- Imagesloaded Js -->
   
    <!-- Silk Cauosel JS -->
    <script src="{{url('js/slick.min.js')}}"></script>
    
    <!-- Smoothscroll Js -->
   
    <!-- Custom Js -->
    <script src="{{url('js/main.js')}}"></script>
  
    <!-- Bootstrap Js -->
   
    <!-- Owl Carousel Js -->
  <!--   <script src="{{url('js/owl.carousel.min.js')}}"></script> -->
    <!-- Counterup Js -->
    
    <!-- Magnific Popup Js -->
   
    <!-- Google Map js -->
  
    <!-- Validator js -->
    <script src="{{url('js/validator.min.js')}}"></script>
 @endsection
    <!-- Bootstrap Js -->
   
