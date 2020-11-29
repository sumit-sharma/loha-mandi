<!-- Inne Page Banner Area Start Here -->
       
@extends('layouts.home')
@section('content')
        <section class="inner-page-banner bg-common layoutcolor" data-bg-image="img/figure/inner-page-banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Contact With Us</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Contact Page Area Start Here -->
        <section class="contact-page-wrap bg--accent">
            <div class="single-item">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-box">
                                 <h2 class="item-heading">Contact Detail</h2>
                                  <div class="widget widget-information widget-box-padding">
                            <h3 class="widget-title">Address</h3>
                            <ul class="block-list">
                                <li class="block-list-item"><i class="fas fa-map-marker-alt"></i>59 Street, Mk tower,
                                    Brooklyn</li>
                                <li class="block-list-item"><i class="fas fa-phone"></i>+ 132 899 6330</li>
                                <li class="block-list-item"><i class="far fa-clock"></i><span>Sat - Mon:</span> 09.00am
                                    - 10.00pm</li>
                                <li class="block-list-item"><i class="far fa-envelope"></i>info@steelgide.com</li>
                               
                            </ul>
                       
   </div>
                                <h2 class="item-heading" style="margin-top: 50px;">Get In Touch</h2>
                               @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert">×</button> 
                       <strong>{{ $message }}</strong>
                     </div>
                   @endif
                                <form class="contact-form-box" id="contact-form" method="post" action="{{Route('contacts')}}">
                                     @csrf
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <input type="text" placeholder="Your Name *" class="form-control" name="name"
                                                data-error="Name field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <input type="email" placeholder="Your E-mail *" class="form-control" name="email"
                                                data-error="E-mail field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <input type="Phone" placeholder="Your Phone No *" class="form-control" name="phone"
                                                data-error="Phone no. field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <input type="text" placeholder="Subject *" class="form-control" name="subject"
                                                data-error="Subject field is required" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <textarea placeholder="Message*" class="textarea form-control" name="description"
                                                id="form-message" rows="5" cols="10" data-error="Message field is required"
                                                required></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-12 form-group mb-0 mt-3">
                                            <button type="submit"  class="item-btn">Submit Message</button>
                                        </div>
                                    </div>
                                    <div class="form-response"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-item">
                <div class="google-map-wrap-layout2">
                    <iframe src="https://maps.google.com/maps?q=-37.81618%2C%20144.95692&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                </div>
            </div>
        </section>
        @endsection