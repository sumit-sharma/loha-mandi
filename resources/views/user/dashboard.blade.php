@extends('layouts.home')
@section('after-style')
<style type="text/css">
.nav{
    display:inline !important;
}
.tab-content>.active {
    display:inline !important;

}
.nav>li>a:hover{
    background-color: #fff;
    border: 1px solid;
    color: #000;
}
.tabbtn{
    border-radius: 4px;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding: 12px 20px 12px 15px;
    font-size: 13px;
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    color: #ffffff;
    border: 1px solid #fff;
    background-color: #930e08;
    width: 100%;
    border-radius: 4px;
}
.avtar{
    height: 150px;
    width: 150px;
    border-radius: 50%;
    background-color: #fff;
    position: absolute;
    top:-100px;

}
.avtartitle{
    font-weight: 400;
    font-family: 'Poppins', sans-serif;
    margin: 20px 0 0 0;
    color: #111111;
    font-size: 30px;
    padding: 10px;
}
.listing-form {
  padding: 5px;
  background-color: #ffffff;
  border-radius: 4px;
  margin-bottom: 3rem;
}
</style>
@endsection
@section('content')
 <section class="inner-page-banner bg-common layoutcolor ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>DashBoard</h1>
                            <ul>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <div class="container">
                <div class="row">


        <div class="col-md-3">
             <?php
              if(!empty(Auth::user()->images)) { ?>
           
           

                 <?php foreach (json_decode(Auth::user()->images)as $picture) { ?>
                      <div class="avtar" style="background-image:url({{ url('/images/'.$picture) }});background-size:cover;">
                                  <!--  <img src="{{ url('/images/'.$picture) }}" class="users-avatar-shadowrounded mb-2 pr-2 ml-1" style="height:80px; width:80px"/> -->
                                             

                  <?php } ?>
                 
               
             <?php } else { ?>
                 <?php $name = Auth::user()->name; ?>
                <h2 class="avtartitle pt-5 text-center"><?php echo substr($name,0,1); ?></h2>
             <?php } ?>
           
            </div>
        </div>
        <div class="col-md-9"></div>
    </div>
</div>
        <!-- Inne Page Banner Area End Here -->
        <!-- About Us Area Start Here -->
        <section class="about-wrap-layout1 padding-top-10 padding-bottom-7 bg--accent">
            <div class="container">
  
<div class="row">
    <div class="col-md-3 padd-20">
        <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home" class="tabbtn">Dashboard</a></li>
        <li><a data-toggle="tab" href="#menu1" class="tabbtn">Edit Profile</a></li>
        <li><a data-toggle="tab" href="#menu2" class="tabbtn">Add Management</a></li>
        <li><a data-toggle="tab" href="#menu3" class="tabbtn">Claim Profile</a></li>
        <li><a data-toggle="tab" href="#menu4" class="tabbtn">Subscribe sms Plan</a></li>
        <li><a data-toggle="tab" href="#menu5"class="tabbtn">Subscribe Plan</a></li>
        <li><a data-toggle="tab" href="#menu6"class="tabbtn">Delete Profile</a></li>
        <li><a data-toggle="tab" href="#menu7"class="tabbtn">Logout</a></li>
       </ul>

    
    </div>
    <div class="col-md-9 padd-20">
        <div class="tab-content bg--white padd-20 height100">
    <div id="home" class="tab-pane fade in active">
      <h3>Description</h3>
      <p>{{Auth::user()->description}}</p>
    </div>
     <div id="menu1" class="tab-pane fade">
    
      
                   
                 <div class="col-lg-12">
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

                                    <div class="col-6">
                                        <label>Name of firm</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="company_name" required>
                                        </div>
                                    </div>
                                    
                                     <div class="col-md-6">
                                        <label for="">Contact No.</label>
                                        <div class="form-group">
                                            <input type="number" min="1" max="" placeholder="" class="form-control" name="contact_no">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Established Year</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="established_year">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <p>  
                                            <label>Category</label>
                                            <select class="select2 form-control height-50" name="user_type" id="master-dropdown" required>
                                                <option value="">-- Select a category --</option>
                                                <option value="1">Steel plant</option>
                                                <option value="2">Scrap yard/Scrap Trader</option>
                                                <option value="3">scrap generator</option>
                                            </select>
                                           </p> 
                                        </div>

                                    </div><!--.col-->
                                     
                                     
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
                                      <div class="form-group">
                                         <p>
                                            <label for="dependent-dropdown">Type Of Scrap (Required) </label>
                                           <input type="text" placeholder="Type Of Scrap*" class="dependent-dropdown-steel-plant  form-control" name="type_of_scrap">
                                        </p>
                                      </div>
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

                                    <div class="form-group">
                                         <p>   
                                          <label>Monthly scrap Requirment</label>
                                          <input type="text" placeholder="Monthly scrap Requirment" class="dependent-dropdown-steel-plant form-control" name="monthly_scrap_required">
                                         </p>
                                       </div> 
                                    <div class="form-group">
                                             <p>
                                            <label>Installed Capacity</label>
                                            <input type="text" placeholder="Installed Capacity" class="dependent-dropdown-steel-plant form-control" name="installed_capacity">
                                          </p>  
                                    </div>

                                    <div class="form-group">
                                         <p>
                                            <label>Monthly Production</label>
                                            <input type="number" placeholder="Monthly Production" class="form-control" min="1" max="9999999" name="monthly_production">
                                          </p>  
                                    </div><!--.form-group-->
                                       <!--.form-group-->
                                        
                                </div><!--.col-->
                                    
                            </div>
                            <div class="inner-box">
                                <h3 class="inner-item-heading2">Add Location</h3>
                                <div class="row">
                                    <div class="col-12">
                                        <label>Address</label>
                                        <div class="form-group">
                                            <input type="text" placeholder="" class="form-control" name="address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>City</label>
                                        <div class="form-group">
                                            <select class="select2 form-control height-50"  name="city">
                                                <option value="Noida<">Select </option>
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
                                                <option value="0">Select</option>
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
                                                <option value="0">Select</option>
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
                   
       </div>

       <div id="menu2" class="tab-pane fade">
      <h4 class="text-center">Add Managemnt</h4>
     
     <div class="row">
       <div class="col-md-12">
         <h6 class="text-center">Create Add</h6>
         <form class="form form-horizontal" method="post" action="{{url('admin/scrap/ad')}}" enctype="multipart/form-data">
                                              @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>Ad Title</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="text" id="fname-icon" class="form-control" name="title" placeholder="Title" required>
                                                                    <div class="form-control-position">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                     </div>
                                                 </div>
                                                     
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>Quantity</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="text" id="email-icon" class="form-control" name="quantity" placeholder="Quantity" required>
                                                                    <div class="form-control-position">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>State</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                    <select class="form-control" name="state_id" required>
                                                                        <option value="0">Select State</option>
                                                                       
                                                                    </select>
                                                                    <div class="form-control-position">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>City</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                    <select class="form-control" name="city_id" required>
                                                                         
                                                                    </select>
                                                                    <div class="form-control-position">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>Address</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="text" id="email-icon" class="form-control" name="address" placeholder="Address" required>
                                                                    <div class="form-control-position">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>Payment term</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="text" id="email-icon" class="form-control" name="payment_term" placeholder="payment term" required>
                                                                    <div class="form-control-position">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>Shipment term</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="text" id="email-icon" class="form-control" name="shipment_term" placeholder="Shipment term" required>
                                                                    <div class="form-control-position">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>Upload image</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="file" id="email-icon" class="" name="image" placeholder="Image">
                                                                    <div class="form-control-position">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>Description</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea type="text_area" id="email-icon" class="form-control" name="description" placeholder="Description" rows="4" cols="50" required>
                                                                        </textarea>
                                                                    <div class="form-control-position">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
       </div>
       
     </div>
    </div>
    <div id="menu5" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>{{Auth::id()}}</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      
     write Note For admin
      <div class="row">
        <div class="col-md-12 mt-5">
          <form>

          <textarea class="col-md-12" wrap="off" maxlength="200" rows="4" cols="50" required></textarea>
          <button class="right">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
        
    </div>
</div>
  
  
</div>

        </section>

    


  
        <!-- Banner Area Start Here -->
    
        <!-- Banner Area End Here -->
        <!-- Team Area Start Here -->
       
    @endsection
 @section('after-script')

      <script type="text/javascript">
        
      
       $('.dependent-dropdown-steel-plant').dependsOn('#master-dropdown', ['1']);
       $('.dependent-dropdown-steel-trader').dependsOn('#master-dropdown', ['2']);
       $('.dependent-dropdown-steel-gen').dependsOn('#master-dropdown', ['3']);
      
      
</script>
      
  

       @endsection
