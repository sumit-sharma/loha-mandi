<section class="listing-wrap-layout1 padding-top-7 padding-bottom-10 bg--green">
            <div class="section-heading heading-dark heading-center">
                   
                    <h2 class="item-title text-white">I am looking for</h2>
                </div>
          <div class="container">      
             <div class="row">
               
                 <div class="col-md-3">  <form method="post" action="homesearch">    
                 @csrf              
                                        <div class="input-group stylish-input-group">
                                                <select class="form-control dropdown-style" required="" name="user_type">
                                                    <option value="0">Select Category</option>
                                                    <option value="1">Steel Plant </option>
                                                    <option value="2">Scrap Trader</option>
                                                    <option value="3">Industrial Scrap</option>
                                                </select>                                                  
                                        </div>
                  </div>
                  <div class="col-md-6">
                     
                                        <div class="input-group stylish-input-group">
                                                <select class="form-control dropdown-style" required="" name="city">
                                                  @foreach($city as $c)
                                                    <option value="{{$c->name}}" selected="">{{$c->name}}</option>
                                                   @endforeach 
                                                </select>
                                        </div>

                  </div>
                  
                  <div class="col-md-3"><input type="submit" class="search-btn" value="Submit"></div>
                  </form> 
             </div>
            </div><!--.container-->

          </section>