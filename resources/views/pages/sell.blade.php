 @extends('layouts.home')
@section('content')
 <section class="inner-page-banner bg-common  layoutcolor" data-bg-image="img/figure/inner-page-banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Sell</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Sell</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Blog Area Start Here -->
        <section class="padding-top-6 padding-bottom-7 bg--accent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="listing-form">
                            <div class="inner-box">
                                <h3 class="inner-item-heading2">Fill Information</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name of firm</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Name Of Firm" class="form-control" name="name">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label>GST/CIN No.</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="GST/CIN No." class="form-control" name="name">
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                       <div class="form-group">
                                         <label>Your Name.</label>
                                            <input type="text" placeholder="Your name" class="form-control" name="name">
                                        </div>
                                        
                                    </div>
                                     <div class="col-md-6">
                                         <label>Designation</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Designation" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Contact No.</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Contact no." class="form-control" name="name">
                                        </div>
                                        
                                    </div>
                                   
                          
                                    <div class="col-md-6">
                                       <label>Address</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Address" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Type Of Scrap</label>
                                        <div class="form-group">
                                            <select class="select2" name="filter-by">
                                                 <option value="0">Type Of Scrap</option>
                                                <option value="0">HSMI</option>
                                                <option value="1">Light</option>
                                               
                                            </select>
                                        </div>
                                    </div>
                                   
                                   
                                    <div class="col-md-6">
                                        <label>Quantity</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Quantity" class="form-control" name="name">
                                        </div>
                                    </div>
                                
                              <div class="col-12">
                                     <label>Upload Picture</label>
                              </div>
                              <div class="col-md-4">
                                     
                                        <div class="form-group">
                                            <input type="file" placeholder="Upload Picture" class="form-control img-upload-box" name="picture[]">
                                        </div>
                                    </div>

                              <div class="col-md-4">
                                       
                                        <div class="form-group">
                                            <input type="file" placeholder="Upload Picture" class="form-control img-upload-box"name="picture[]">
                                        </div>
                                    </div>

                              <div class="col-md-4">
                                        
                                        <div class="form-group">
                                            <input type="file" placeholder="Upload Picture" class="form-control img-upload-box" name="picture[]">
                                        </div>
                                    </div>
                            
                            <div class="inner-box">
                                <button type="submit" class="btn-upload">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                    <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                       
                        
                        <div class="widget widget-box-padding widget-follow-us">
                            <h3 class="widget-title">Follow Us</h3>
                            <ul class="inline-list">
                                <li class="single-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li class="single-item"><a href="#"><i class="fab fa-skype"></i></a></li>
                                
                               
                            </ul>
                        </div>
                       
                        <div class="widget widget-box-padding widget-newsletter-subscribe">
                            <h3>Newsletter Subscriber</h3>
                            <p>Subscribe us for new articles</p>
                            <form class="newsletter-subscribe-form">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter your e-mail" class="form-control" name="email"
                                        data-error="E-mail field is required" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="item-btn">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
          @endsection