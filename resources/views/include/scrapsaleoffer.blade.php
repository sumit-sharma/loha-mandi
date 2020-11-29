 <section class="listing-wrap-layout1 padding-top-9p6 padding-bottom-7 bg--light">
            <div class="container">
                <div class="section-heading heading-dark heading-center">
                   
                    <h2 class="item-title">Most Recent Scrap sale offer</h2>
                </div>
                 <div class="row">
                    
                     
                   @foreach($ad as $key => $ad)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-12 no-equal-item">
                        <div class="listing-box-grid">
                            <div class="product-box border-box">
                                <div class="item-img  titlebox background-title">
                                    <div >
                                         <div class="settitle">
                                  <h3 class="text-white">{{$ad->title}}</h3>
                                         </div>
                              </div>
                                   <!--  <img src="{{url('ad/'.$ad->image)}}" alt="Listing" class="img-fluid grid-view-img">
                                    <img src="{{url('ad/'.$ad->image)}}" alt="Listing" class="img-fluid list-view-img"> -->
                                   
                                </div>
                                <div class="item-content">
                                    <h3 class="item-title"><a href="#">{{$ad->title}}</a></h3>
                                    <p class="item-paragraph dtext" >{{$ad->description}} </p>
                                    <ul class="contact-info">
                                         <li><i class="fas fa-map-marker-alt"></i>{{$ad->quantity}}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{$ad->cities->name}},{{$ad->states->name}}</li>
                                     
                                        
                                    </ul>
                                    <ul class="meta-item">
                                        
                                        <li class="entry-meta">
                                            <ul>
                                                <li class="tooltip-item ctg-icon" data-tips="Restaurant"><a href="#"><i class="flaticon-chef"></i></a></li>
                                                <li class="tooltip-item" data-tips="My Favourite"><a href="#"><i class="fas fa-heart"></i></a></li>
                                                <li class="tooltip-item" data-tips="Gallery"><a href="#"><i class="far fa-image"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                  </div>
                 </div>
                    
                   @endforeach
                 
                </div>
                 
            </div>

        </section>
      
        <!-- Listing Area End Here --