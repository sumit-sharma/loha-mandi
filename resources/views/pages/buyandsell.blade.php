

@extends('layouts.home')
@section('after-style')
<style>

       

        /* Clear floats after the columns */
        .rowprd2:after {
        content: "";
        display: table;
        clear: both;
        }

        .btnclsprd{
            width: 100%;
            background: #930e08;
            color: white;
            font-size: 14px;
            padding: 5px 5px;
            margin-top: 3%;
            box-shadow: none;
            border: none;
            transition: 50ms;
        }

        .btnclsprd:hover{
            background: white;
            color: #930e08;
            border: 2px solid #930e08;
            box-shadow: none;
            cursor: pointer;
            padding: 5px 5px;
        }

            .info {
            border-radius: 0%;
            background-image:white;
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: visible;
            }

            .info::before,
            .info::after {
            --scale: 0;
            --arrow-size: 10px;
            --tooltip-color: maroon;
            --tooltip-width: 275px;

            position: absolute;
            top: -.25rem;
            left: 50%;
            transform: translateX(-50%) translateY(var(--translate-y, 0)) scale(var(--scale));
            transition: 150ms transform;
            transform-origin: bottom center;
            }

            .info::before {
            --translate-y: calc(-100% - var(--arrow-size));

            content: attr(data-tooltip);
            color: white;
            padding: .5rem;
            border-radius: .3rem;
            padding: 10px;
            text-align: center;
            width: var(--tooltip-width);
            background: var(--tooltip-color);
            }

            .info:hover::before,
            .info:hover::after {
            --scale: 1;
            }

            .info::after {
            --translate-y: calc(-1 * var(--arrow-size));

            content: '';
            border: var(--arrow-size) solid transparent;
            border-top-color: var(--tooltip-color);
            transform-origin: top center;
            }

  /* Tooltip */
  .test + .tooltip > .tooltip-inner {
    background-color: #73AD21; 
    color: #FFFFFF; 
    border: 1px solid green; 
    padding: 15px;
    font-size: 20px;
  }
  /* Tooltip on top */
  .test + .tooltip.top > .tooltip-arrow {
    border-top: 5px solid green;
  }
  
  /* Tooltip on right */
  .test + .tooltip.right > .tooltip-arrow {
    border-right: 5px solid black;
  }
  .selectborder{
    border: 1px solid #6464646b;
    border-radius: .25em;
  }
  
    </style>

@endsection
@section('content')
 
 <section class="main-banner-wrap-layout3 bg--gradient-top-50">
           
            <div class="container">
                <div class=" ">
                   <h2 class="text-center text-white">Buy &amp; sell</h2>
                </div>
            </div>
        </section>
  
<!-- Search Area start Here -->

<section class="listing-wrap-layout1 padding-top-7 padding-bottom-10 bg--light">
            <div class="section-heading heading-dark heading-center">
                   
                    <h2 class="item-title text-white">Scrap Offer</h2>
                </div>
          <div class="container">      
             <div class="row">
               
               
                 <div class="col-md-5">                     
                                        
                                        
                                        <div class=" input-group stylish-input-group">
                                           
                                            <select class="form-control" required="" name="typeofscrap">
                                                 
                                                     <option value="0">Select Scrap</option>
                                                       <option value="1">  HMS 1&amp;2</option>
                                                          <option value="2"> End Cutting</option>
                                                             <option value="3"> Shredded</option>
                                                                <option value="4">CRC</option>
                                                                   <option value="5">Turning</option>
                                                  
                                                                        <option value="6">Other</option>





                                                </select>
                                        </div>
                  </div>
                  <div class="col-md-5">
                     
                                        <div class="input-group stylish-input-group selectborder">
                                                <select class="form-control select2 " required="">
                                                    <option value="0" selected="">Select City</option>
                                                    @foreach($city as $city)
                                                     <option value="{{$city->id}}" selected="">{{$city->name}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                  </div>
                  
                  <div class="col-md-2  "><input type="submit" class="search-btn" value="Submit"></div>
             </div>
            </div><!--.container-->

          </section>
          <!-- Search Area end Here -->
          <!-- Listing Area start Here -->
          <section class=" padding-top-6 padding-bottom-7 bg--accent">
            <div class="container">
                <div class="row">
                    <div class="order-lg-2 col-lg-12">
                        <div class="item-sorting-wrap">
                            <div class="row">
                                <div class="col-sm-6 col-12 d-flex align-items-center">
                                    <div class="item-sorting-title">
                                        SCRAP Buy Offers
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
                        <div id="listing-view" class="pt-5 pb-5 ">
                           
                            <div class="container">
                                @foreach($ad as $ad)
                            <div class="row bg--white">
                                    <div class="col-sm-3 padd-20">
                                        <a href="#"><button class="btnclsprd">Buy Offer</button></a><br>
                                        <img src="img/listing/1img.jpg" alt="Listing" class="img-fluid list-view-img">
                                    </div>
                                        <div class="col-md-7 padd-20 margin1" >
                                        	<div class="row pt-5"> <p>Location -{{$ad->cities->name}},{{$ad->states->name}}</p></div>
                                            <div class="row margin1">

                                               
                                                <div class="col-md-4 border padd-30 text-center">
                                                	
                                                	
                                                	Quantity </br>{{$ad->quantity}}
                                                
                                                </div>
                                                <div class="col-md-4 border padd-30 text-center" >
                                                    <a class="test" href="#" data-toggle="tooltip" data-placement="top" title="Lorem Ipsum has been the industry's standard dummy text ever since the 1500s!">Payment Terms<br>{{$ad->payment_term}}</a>
                                                </div>
                                                <div class="col-md-4 border padd-30 text-center" > 
                                                <a class="test" href="#" data-toggle="tooltip" data-placement="top" title="Lorem Ipsum has been the industry's standard dummy text ever since the 1500s!">Shipment<br>{{$ad->shipment_term}}</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 padd-20 margin8">
                                            @if (Auth::check())
  <a class=" btnclsprd" href="{{url('/addetail/'.$ad->id)}}">Submit your Rate</a>
     @else
  <button class="btnclsprd" data-toggle="modal" data-target="#myModal1">Submit your Rate</button>
        @endif
                                       
                                        <button class="  btnclsprd mt-5">Check Details</button><br>
                                        </div>
                            </div>
                            @endforeach
                            
                          </div>

                            
                          

                            
                            
                            <ul class="pagination-layout1">
                                <li>
                                    <a href="#"><i class="flaticon-back"></i></a>
                                </li>
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#">6</a>
                                </li>
                                <li>
                                    <a href="#">7</a>
                                </li>
                                <li>
                                    <a href="#"><i class="flaticon-right-arrow"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                   

                   <!-- Listing Area end Here -->
                </div>
            </div>
        </section>

 @endsection
 @section('after-script')
 <script type="text/javascript">
 
 $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
 </script>
 @endsection