 <!-- Footer Area Start Here -->
        <footer>
            <section class="footer-top-wrap">
                <div class="container">
                    <div class="row">
                        <div class="single-item col-lg-3 col-md-6 col-12">
                            <div class="footer-box">
                                <div class="footer-logo">
                                    <a href="{{url('/')}}"><h3 class="text-white">Steelguide</h3></a>
                                </div>
                                <div class="footer-about">
                                    <p>Address</p>
                                </div>
                                <div class="footer-contact-info">
                                    <ul>
                                        <li><i class="fas fa-map-marker-alt"></i>Ghaziabad, Uttar Pradesh</li>
                                       <!--  <li><i class="fas fa-phone"></i>+123 6669 000</li> -->
                                        <li><i class="far fa-envelope"></i>info@steelguide.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-item col-lg-3 col-md-6 col-12">
                            <div class="footer-box">
                                <div class="footer-header">
                                    <h3>Quick Links</h3>
                                </div>
                                <div class="widget_nav_menu">
                                    <ul>
                                        <li><a href="{{url('about')}}">About</a></li>
                                       <!--  <li><a href="{{url('sell')}}">i want to sell</a></li>
                                        <li><a href="{{url('buyandsell')}}">I want to buy</a></li> -->
                                        
                                        <li><a href="{{url('pricing')}}">Steel Plant pricing plan</a></li>
                                         <li><a href="{{url('scrappricing')}}">Scrap trader pricing plan</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-item col-lg-3 col-md-6 col-12">
                            <div class="footer-box">
                                <div class="footer-header">
                                    <h3>Important Links</h3>
                                </div>
                                <div class="widget_nav_menu">
                                    <ul>
                                        <li><a href="{{url('mandirate')}}">Mandirate</a></li>
                                        <li><a href="{{url('city')}}">City</a></li>
                                        <li><a href="{{url('state')}}">State</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-item col-lg-3 col-md-6 col-12">
                            <div class="footer-box">
                                <div class="footer-header">
                                    <h3>Follow Us On</h3>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="footer-bottom-wrap">
                <div class="container">
                    <div class="copyright text-center">2020 Copyright © steelguide.com</div>
                </div>
            </section>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Modal Start-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="title-default-bold mb-none">Login</div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    
                        <form class="login-form" method="POST" action="{{url('logged_in') }}">
                        @csrf
                        <input id="email" type="email" class="main-input-box @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
                         <input id="password" type="password" class="main-input-box @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="inline-box mb-5 mt-4">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Remember Me</label>
                            </div>
                            <label class="lost-password"><a href="#">Lost your password?</a></label>
                        </div>
                        <div class="inline-box mb-5 mt-4">
                            <button class="btn-fill" type="submit" value="Login">Login</button>
                            <a href="{{url('registration')}}" class="btn-register"><i class="fas fa-user"></i>Register Here!</a>
                        </div>
                    </form>
                    <label>Login connect with your Social Network</label>
                    <div class="login-box-social">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="title-default-bold mb-none">Subscribe</div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    
                       <p>You need to subscribe</p>
                        </div>
                        <div class="inline-box mb-5 mt-4">
                            <button class="btn-fill" data-toggle="modal" data-target="#myModal" data-dismiss="modal" type="submit" value="Login">Subscribe</button>
                            
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

   

    
    <!-- Modal End-->
    <!-- Jquery Js -->
