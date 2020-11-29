

@extends('layouts.home')
@section('after-style')
<style type="text/css">
.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #151414;
    border-color: #1b1d1f;
    height: 50px;
    width: 50px;
    padding: 15px 20px;
    border-radius: 48%;
}
.page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    cursor: auto;
    background-color: #f5f5f51f;
    border-color: transparent;
    border: none;
}
</style>
@endsection
@section('content')
<section class=" padding-top-6 padding-bottom-7 bg--accent">
            <div class="container">
                <div class="row">
                    <div class="order-lg-2 col-lg-8">
                        <div class="item-sorting-wrap">
                            <div class="row">
                                <div class="col-sm-6 col-12 d-flex align-items-center">
                                    <div class="item-sorting-title">
                                        Showing 0 - 4 of  {{ $users->Total() }}
                                    </div>
                                </div>
                                <div class="col-sm-6 col-12 d-flex align-items-center justify-content-sm-end">
                                    <div class="layout-switcher">
                                        <ul>
                                            <li class=""><a class="product-view-trigger" href="#" data-type="listing-box-list"><i class="fa fa-list"></i></a></li>

                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="listing-view" class="listing-box-list">
                            <div class="row">
                                @foreach($users as $user)
                                <div class="col-md-6 col-12" style="opacity: 1;">
                                    <div class="product-box">
                                        <div class="item-img titleboxlist ">
                                           
                                        <div class="settitle">
                                          <!--   <img src="{{url('img/index.jpg')}}" alt="Listing" class="img-fluid list-view-img"> -->
                                            
                                            <h3 class="text-white">{{$user->company_name}}</h3>
                                               </div>
                                        </div>
                                        <div class="item-content">
                                           
                                            <h3 class="item-title"><a href="{{url('/view/'.$user->id)}}">{{$user->company_name}}</a></h3>

                                            <p class="item-paragraph">{{$user->company_name}} is a Steel Plant located ...
                                            </p>
                                            <ul class="contact-info">
                                                <li><i class="fas fa-map-marker-alt"></i>{{$user->city}},{{$user->state}}</li>
                                                <li><i class="flaticon-phone-call"></i>Xx xxxxxxxxxx  </li>
                                                <li> <i class="fas fa-globe"></i>{{$user->website}} 
                                                    &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<span>{{$user->monthly_capacity_tons}} Tons</span>
                                                    </li>
                                            </ul>
                                            <ul class="meta-item">
                                                <li class="item-btn"><a href="#" class="btn-fill" data-toggle="modal" data-target="#myModal1">Contact Now</a></li>
                                               
                                                <li class="entry-meta">
                                                    <ul>
                                                        
                                                        <li class="tooltip-item" data-tips="My Favourite"><a href="#"><i class="fas fa-heart"></i></a></li>
                                                        <li class="tooltip-item" data-tips="Gallery"><a href="#"><i class="far fa-image"></i></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                               
                                @endforeach
                            </div>
                 
                            <ul class="pagination-layout1">
                                
                                <li class="active">
                                     {{ $users->links() }}
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- Listing Area End Here -->
        
                    <div class="order-lg-1 col-lg-4 sidebar-widget-area sidebar-break-md">
                        <div class="widget widget-box-padding widget-filter">
                            <h3 class="widget-title">Filter Listings</h3>
                            <div class="input-group stylish-input-group">
                                <input type="text" placeholder="What are you looking for ..." class="form-control" name="website" id="form-website" data-error="Search text required" required="">
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <i class="flaticon-search"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="input-group stylish-input-group">
                                <input type="email" placeholder="Locations" class="form-control" name="email" id="form-email" data-error="Category name is required" required="">
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <i class="flaticon-placeholder"></i>
                                    </button>
                                </span>
                            </div>
                            <div class="input-group">
                                
                            </div>
                            
                            
                           
                            <a href="#" class="item-btn">Submit</a>
                        </div>
                        
                        <div class="widget widget-box-padding widget-new-rated">
                            <h3 class="widget-title">New Rated Listings</h3>
                            <ul class="block-list">
                                <li class="single-item">
                                    <div class="item-img">
                                        <a href="#"><img src="img/listing/1img.jpg" alt="Post" style="width: 110px;height: 100px;"></a>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title"><a href="#">Rathi Industries</a></h4>
                                        <div class="item-place">Ghaziabad</div>
                                        <ul class="item-rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <div class="item-img">
                                        <a href="#"><img src="img/listing/1img.jpg" alt="Post" style="width: 110px;height: 100px;"></a>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title"><a href="#">Aarati steel</a></h4>
                                        <div class="item-place">Delhi</div>
                                        <ul class="item-rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="single-item">
                                    <div class="item-img">
                                        <a href="#"><img src="img/listing/1img.jpg" alt="Post" style="width: 110px;height: 100px;"></a>
                                    </div>
                                    <div class="item-content">
                                        <h4 class="item-title"><a href="#">Tata Steel</a></h4>
                                        <div class="item-place">Noida</div>
                                        <ul class="item-rating">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-contact-info">
                            <div class="bg-icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <h4 class="item-title">Need Any Information?</h4>
                            <p>Please Contact Our Experts</p>
                            <div class="contact-number">+123 895 000 963</div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
@endsection
