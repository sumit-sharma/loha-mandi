 <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ScrollUp End Here -->
        <!--top header  start  here-->
        <div>
           <div class="top-header-background">
            <div class="container">
                <div class="row">
                 <div class="col-xl-9 col-lg-6 col-md-6 col-12 no-equal-item">
                <marquee  direction="left" >
                   <h6 class="p-3 text-white">Ingot Mandi Gobindgarh 32800 , &nbsp;  Ingot Ludhiana 32800,  &nbsp;  Ingot Ghaziabad 33600 &nbsp;Ingot Ghaziabad 33600 &nbsp;Ingot Bhavnagar 33200,&nbsp;Ingot Durgapur 32900,&nbsp;Ingot Kolkata 32600,&nbsp;Ingot Muzaffarpur 33450,&nbsp;Ingot Raipur 32400,&nbsp;Ingot Mumbai 31400,&nbsp;Scrap Mandi Gobindgarh 22300,&nbsp;Scrap Ludhiana 22400,&nbsp;Scrap Ghaziabad 22100,&nbsp;Billet Mandi Gobindgarh 32900</h6>
              </marquee>
               
              
                  </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-12 no-equal-item">
                <input type="submit" class="search-btn2" value="Subscribe for latest rate">
                </div>
                </div>
             </div>
           </div>
          </div>
            <!--top  header  end here-->
    
    <div >
        <!-- Header Area Start Here -->
        <header id="site-header" class="header-one">
            <div class="header-main header-sticky">
                <div class="container-fluid">
                    <div class="mob-menu-open toggle-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-12">
                            <div class="site-logo">
                                <a href="{{url('/')}}" class="main-logo"  ><h2 class="main-logo">Steelguide</h2></a>
                                <a href="{{url('/')}}" class="sticky-logo"><h2 class="sticky-logo">Steelugide</h2></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-12 possition-static">


                            <nav class="site-nav">
                                <ul class="site-menu">
                                    <li><a href="{{url('/')}}">Home</a>
                                        <!-- <ul class="dropdown-menu-col-1">
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index2.html">Home 2</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="{{url('about')}}">About</a></li>
                                    
                                   
                                    <li><a href="{{url('listing')}}">listing</a></li>
                                    
                                   
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-lg-3 d-none d-lg-flex align-items-center justify-content-end">
                            <div class="nav-action-elements">
                                     <ul>
                                      @guest
                                    @if (Route::has('register'))
                                        <li>
                                                <button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                                                    <i class="flaticon-profile"></i>Login
                                                </button>
                                            </li>
                                            <li>
                                                <a href="{{url('registration')}}" class="ghost-btn">Join now</a>
                                            </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <?php $name = Auth::user()->name; ?>
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle java-text" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            <?php echo substr($name,0,1); ?>                                    
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                             <a href="{{url('dashboard')}}" class="dropdown-item" style="color: #930e08;">Dashboard</a>
                                            
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();" style="color: #930e08;">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                                </ul>      
                                
                            </div><!--.nav-action-elements-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        