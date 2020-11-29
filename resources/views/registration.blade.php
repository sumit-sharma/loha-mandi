@extends('layouts.home')
@section('content')

 <section class="inner-page-banner bg-common  layoutcolor" data-bg-image="img/figure/inner-page-banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Registration</h1>
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>Register</li>
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
                         @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>{{ $message }}</strong>
                     </div>
                   @endif
                        	 <form  class="listing-form" method="POST" action="{{ route('registration') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="inner-box">
                                <h3 class="inner-item-heading2">General Information</h3>
                                <div class="row">

                                    <div class="col-12">
                                        <label>Name of firm</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Name of firm" class="form-control" name="company_name" required>
                                        </div>
                                    </div>

                                     <div class="col-md-6">
                                        <label for="">Contact No.</label>
                                        <div class="form-group">
                                            <input type="text" min="1" max="" placeholder="Contact No" class="form-control" name="contact_no">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Established Year</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Established Year" class="form-control" name="established_year">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">GST/CIN</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="GST/CIN" class="form-control" name="cin_no_or_gst">
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                       <label>Category</label>
                                        <div class="form-group">
                                             <select class="select2 form-control height-50" name="user_type" id="master-dropdown" required>
                                                <option value="">-- Select a category --</option>
                                                <option value="1">Steel Plant</option>
                                                <option value="2">Scrap yard/Scrap Trader</option>
                                                <option value="3">scrap Generator</option>
                                            </select>
                                        </div>
                                    </div>






                                    <div class="col-md-6">
                                        <div class="form-group">
                                         <p>
                                            <label>Monthly Capacity Tons</label>
                                            <input type="text" placeholder="Monthly Capacity Tons" class="dependent-dropdown-steel-trader form-control" name="monthly_capacity_tons">
                                          </p>
                                        </div>
                                      <div class="form-group">
                                         <p>
                                            <label for="dependent-dropdown">Type Of Scrap (Required) </label>
                                           <input type="text" placeholder="Type Of Scrap*" class="dependent-dropdown-steel-trader  form-control" name="type_of_scrap">
                                        </p>
                                      </div>
                                      <!-- <div class="form-group">
                                         <p>
                                            <label for="dependent-dropdown">Type Of Scrap (Required) </label>
                                           <input type="text" placeholder="Type Of Scrap*" class="dependent-dropdown-steel-plant  form-control" name="type_of_scrap">
                                        </p>
                                      </div> -->
                                      <div class="form-group">
                                         <p>
                                            <label for="dependent-dropdown">Type Of unit (Required) </label>
                                           <input type="text" placeholder="Type Of Unit*" class="dependent-dropdown-steel-plant form-control" name="type_of_unit">
                                         </p>
                                      </div>

                                      <div class="form-group">
                                     <p>
                                        <label>Products</label>
                                        <input type="text" placeholder="Products" class="dependent-dropdown-steel-plant form-control" name="products">
                                     </p>
                                       </div>
                                    </div>

                                <div class="col-md-6">

                                  <!--   <div class="form-group">
                                         <p>
                                          <label>Monthly scrap Requirment</label>
                                          <input type="text" placeholder="Monthly scrap Requirment" class="dependent-dropdown-steel-plant form-control" name="monthly_scrap_required">
                                         </p>
                                       </div>  -->
                                    <div class="form-group">
                                             <p>
                                            <label>Installed Capacity</label>
                                            <input type="text" placeholder="Installed Capacity" class="dependent-dropdown-steel-plant form-control" name="installed_capacity">
                                          </p>
                                    </div>

                                     <div class="form-group">
                                         <p>
                                            <label>Monthly Scrap Production</label>
                                            <input type="number" placeholder="Monthly Production" class=" dependent-dropdown-steel-gen form-control" min="1" max="9999999" name="monthly_scrap_production ">
                                          </p>
                                    </div> <!--.form-group
                                       <!-  .form-group-->

                                </div><!--.col-->

                            </div>
                            <div class="inner-box">
                                <h3 class="inner-item-heading2">Add Location</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <label>Address</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="Address" class="form-control" name="address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>City</label>
                                        <div class="form-group">
                                            <select class=" select2 form-control height-50"  name="city">
                                               @foreach($city as $city)
                                                <option value="{{$city->id}}">{{$city->name}}</option>
                                              @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>State</label>
                                        <div class="form-group">
                                            <select class="select2 form-control height-50" name="state">
                                                @foreach($state as $state)
                                                <option value="{{$state->id}}">{{$state->name}}</option>
                                              @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Country</label>
                                        <div class="form-group">
                                            <select class="select2 form-control height-50" name="country">

                                                <option value="India">India</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Zip Code</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="zipcode">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-box">
                                <h3 class="inner-item-heading2">Details Information</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Name</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>E-mail</label>
                                        <div class="form-group">
                                            <input type="email"   placeholder="" class="form-control" name="email" required>
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <label>Designation</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="designation" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label>Website</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="website">
                                        </div>
                                    </div>
                                     <div class="col-sm-6">
                                        <label>Password</label>
                                        <div class="form-group">
                                             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                             @error('password')
                                           <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                          </span>
                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Confirm Password </label>
                                        <div class="form-group">
                                           <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    </div>
                                   </div>
                            </div>
                             <div class="inner-box">
                                <h3 class="inner-item-heading2">Description</h3>
                                <div class="col-sm-12">
                                        <label>Describe About Company  </label>
                                        <div class="form-group">
                                           <textarea name="description" class="form-control"></textarea>
                                        </div>
                                    </div>
                              </div>
                            <div class="inner-box menu-list-wrapper">
                                <h3 class="inner-item-heading2">Upload Images</h3>
                                <label>Click here or drope files to upload</label>
                                <div class="row menu-list">
                                    <div class="col-sm-4 col-12 menu-item">
                                        <div class="form-group">
                                            <input type="file" id="img-upload1" class="form-control img-upload-box" name="images[]">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 menu-item">
                                        <div class="form-group">
                                            <input type="file" id="img-upload2" name="images[]"  class="form-control img-upload-box">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 menu-item">
                                        <div class="form-group">
                                            <input type="file" id="img-upload3" name="images[]" class="form-control img-upload-box">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 menu-item hidden">
                                        <div class="form-group">
                                            <input type="file" id="img-upload4" name="images[]" class="form-control img-upload-box">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-12 menu-item hidden">
                                        <div class="form-group">
                                            <input type="file" id="img-upload5" name="images[]" class="form-control img-upload-box">
                                        </div>
                                    </div>



                                    <div class="col-sm-4 col-12 menu-item hidden">
                                        <div class="form-group">
                                            <input type="file" id="img-upload9" name="images[]"  class="form-control img-upload-box">
                                        </div>
                                    </div>
                                </div>
                                <div class="loadmore" data-sm="1" data-md="2" data-lg="3">
                                    <a href="#" class="btn-add-more"><i class="fas fa-plus"></i>ADD MORE</a>
                                </div>
                            </div>



                            <div class="inner-box">
                                <button type="submit" class="btn-upload">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                        <div class="widget widget-box-padding widget-search">
                           <!--  <h3 class="widget-title">Search</h3> -->
                            <!-- <div class="input-group stylish-input-group">
                                <input type="text" class="form-control" placeholder="What are you looking For?">
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <span class="flaticon-search" aria-hidden="true"></span>
                                    </button>
                                </span>
                            </div> -->
                        </div>

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
        <!-- Blog Area End Here -->
        <!-- Footer Area Start Here -->

      @endsection
      @section('after-script')

      <script type="text/javascript">


       $('.dependent-dropdown-steel-plant').dependsOn('#master-dropdown', ['1']);
       $('.dependent-dropdown-steel-trader').dependsOn('#master-dropdown', ['2']);
       $('.dependent-dropdown-steel-gen').dependsOn('#master-dropdown', ['3']);


</script>



       @endsection
