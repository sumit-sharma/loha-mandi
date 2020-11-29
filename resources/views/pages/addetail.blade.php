
   
@extends('layouts.home')
@section('after-style')
 
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
    <style type="text/css">
    	#navbarDropdown:hover .dropdown-menu{
    		display: block;
    	}
    </style>
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
                          @if ($message = Session::get('success1'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif     
                        <div class="single-listing-box-layout2">
                            <div class="listygo-text-box listing-details-info">
                                <h2 class="tab-content-title">{{$ad->title}}</h2>
                                <p>{{$ad->description}}
                                    </p>
                               
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="gallery-box-layout2 titlebox background-title">
                                            <!-- <img src="{{url('img/listing/1img.jpg')}}" alt="listing" class="rounded img-fluid"> -->
                                            <div class="settitle">
                                           <h3 class="text-white"> {{$ad->company_name}}</h3>
                                           </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="widget widget-information widget-box-padding">
                            <h3 class="widget-title">Detail</h3>
                            <ul class="block-list">
                                <li class="block-list-item"><i class="fas fa-map-marker-alt"></i>Payment Term</li>
                               <!--  <li class="block-list-item"><i class="fas fa-phone"></i>{{$ad->contact_no}}</li> -->
                                  <li class="block-list-item"><i class="fas fa-phone"></i>Quantity</li> 
                                <li class="block-list-item"><i class="far fa-clock"></i><span>Shipment</span> </li>
                                <li class="block-list-item"> <button type="submit" class="ghost-btn" data-toggle="modal" data-target="#myModal{{$ad->id}}" style="background-color: #930e08;
color: #ffffff;padding: 15px 30px;border: none;">Bid now</button></li>
                               
                            </ul>
                        </div>
                        </div>
                        </div>
                             <div class="row">

                                    </p></p>
                                     </div> 
                                     <div class="row ">
                                        <div >
                                    
                                     </div>
                                     </div>  
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
         <div class="modal fade" id="myModal{{$ad->id}}" role="dialog">
        <div class="modal-dialog" style="width: 50%;">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="title-default-bold mb-none">Bid Now</div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    
                   <form class="login-form" method="post" action="{{ route('quoteprice') }}">
                   	 @csrf
                    @if (Auth::check())
                    <div class="col-md-12 padd-10">
                    	<label>price</label>
                        <input type="text" name="qprice" placeholder="Price" class="form-control" required="">
                    </div>
                     <div class="col-md-12 padd-10	">
                     	<label>Name</label>
                        <input type="text" name="name" placeholder="{{Auth::user()->name}}" value="{{Auth::user()->name}}" class="form-control">
                    </div>
                     
                        <input type="hidden" name="uid" placeholder="{{Auth::user()->id}}" value="{{Auth::user()->id}}" class="form-control">
                        <input type="hidden" name="aid" placeholder="{{$ad->id}}" value="{{$ad->id}}" class="form-control">
                    
                        <div class="col-md-12 padd-10	">
                        	<label>Conatct No</label>
                           <input type="text" name="contact_no" placeholder="Mobile" class="form-control" required="">
               
                        </div>

                        <div class="col-md-12 padd-10	">
                        	<label>Address</label>
                           <input type="text" name="address" placeholder="Address" class="form-control" required="">
               
                        </div>

                        	
                        <div class="inline-box mb-5 mt-4">
                            <button class="btn-fill"  type="submit" value="Login">Submit</button>
                            @else 
                             <button class="btn-fill" data-toggle="modal" data-target="#myModal" data-dismiss="modal" type="submit" value="Login">Subscribe</button>
                              @endif
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
       
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
   
