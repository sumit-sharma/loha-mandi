 <!-- Main Banner Area Start Here -->
        <section class="main-banner-wrap-layout2 bg--gradient-top-50">
           
            <div class="container">
                <div class=" main-head main-banner-box-layout2">
                    <div class="row">
                         <div class="col-md-8">
                                <div class="main-head-content">
                                    <h1 class="text-center text-white">
                                        The Most comprehensive  <br><span><strong>steel plant and scrap yard</strong></span> <br> discovery platform
                                    <p class="lead" style="color:#fff">
                                        
                                    </p>
                                    <a class="btn btn-3d btn-secondary btn-lg mb-2 mt-20" href="{{url('/listing')}}">Find Steel Plant Near Me »</a>
                                    
                                </div>
                            </div>
                        <div class="col-xl-4 d-flex align-items-center">
                            <div class="vertical-center-box">
                               
                                <form id="category-search-form" class="category-search-form" method="post" action="search" enctype="multipart/form-data">
                                     @csrf
                                    <ul class="form-items">
                                        <li>
                                            <h3 class="text-center">I want to<h3>
                                        </li>
                                        <li>
                                            <div class="input-group stylish-input-group">
                                                <select class="form-control " required="" name="buyorsell">
                                                    <option value="buy">Buy</option>
                                                    <option value="sell">Sell</option>
                                                </select>
                                                    
                                                
     
                                              
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </li>
                                         <li>
                                            <div class="input-group stylish-input-group">
                                                <select class="form-control" required="" name="typeofscrap">
                                                 
                                                     <option value="0">Select Scrap</option>
                                                       <option value="1">  HMS 1&2</option>
                                                          <option value="2"> End Cutting</option>
                                                             <option value="3"> Shredded</option>
                                                                <option value="4">CRC</option>
                                                                   <option value="5">Turning</option>
                                                  
                                                                        <option value="6">Other</option>





                                                </select>
                                                    
                                              
                                                

                                              
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </li>
                                         <li>
                                            <div class="input-group stylish-input-group">
                                                <select class="form-control" required="" name="ton">
                                                     <option value="0">quantity</option>
                                                     <option value="1">Less then 50 Ton</option>
                                                     <option value="2">More then 50 Ton</option>
                                                    
                                                </select>
                                                    
                                              
                                                

                                              
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group mb-0">
                                                <button type="submit" class="item-btn">Submit</button>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon fill="white" points="0,100 100,0 100,100"></polygon>
                    </svg>
                </div>
            </div>
            
        </section>
     