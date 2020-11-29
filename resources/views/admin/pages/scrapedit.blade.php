@extends('admin.layout.auth')

@include('admin.layout.sidebar')
@section('after-style')

@endsection
@section('content')
<section class="users-edit">
                    <div class="card">
                         @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
                                            
                                        </a>
                                    </li>
                                   <!--  <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="social-tab" data-toggle="tab" href="#social" aria-controls="social" role="tab" aria-selected="false">
                                            <i class="feather icon-share-2 mr-25"></i><span class="d-none d-sm-block">Plant detail</span>
                                        </a>
                                    </li> -->
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                        <!-- users edit media object start -->
                                        <div class="media mb-2">
                                            <div class="col-md-6">
                                            @empty($user->images)
                                            <?php  $images = json_decode($user->images);?>
                                           <div class="users-avatar-shadowrounded mb-2 pr-2 ml-1"  style="height:80px; width:80px">
                                            <p>{{$user->name}}</p>
                                           </div>
                                                  @endempty
                                           
                                              
                                               @isset($user->images)
                                                 <?php foreach (json_decode($user->images)as $picture) { ?>
                                   <img src="{{ url('/images/'.$picture) }}" class="users-avatar-shadowrounded mb-2 pr-2 ml-1" style="height:80px; width:80px"/>
                                             <?php } ?>

                                                @endisset
                                                </div>
                                         <div class="col-md-6">
                                            <a class="btn btn-primary mr-1 waves-effect waves-light right" href="{{url('/admin/image/upload/'.$user->id)}}">Upload Images</a>
                                        </div>
                                           
                                        </div>
                                        <!-- users edit media object ends -->
                                        <!-- users edit account form start -->
                                        <form novalidate  method="post" action="{{url('/admin/update/'.$user->id)}}">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Company name</label>
                                                            <input type="text" class="form-control" placeholder="Username" value="{{$user->company_name}}" name="company_name" required data-validation-required-message="This username field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Name</label>
                                                             <input type="text" class="form-control" placeholder="Name" value="{{$user->name}}" name="name" required data-validation-required-message="This username field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>E-mail</label>
                                                            <input type="email" class="form-control" placeholder="Email" value="{{$user->email}}"  name ="email" required data-validation-required-message="This email field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">

                                                   <div class="form-group">
                                                        <div class="controls">
                                                            <label>Phone No.</label>
                                                            <input type="number" class="form-control" placeholder="Mobile number" value="{{$user->contact_no}}"  name ="contact_no" required data-validation-required-message="This email field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Established year.</label>
                                                            <input type="email" class="form-control" placeholder="Email" value="{{$user->established_year}}"  name ="established_year" required data-validation-required-message="This email field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Website</label>
                                                        <input type="text" class="form-control" placeholder="Website" value="{{$user->website}}"  name ="website" required data-validation-required-message="This email field is required">
                                                    </div>
                                                </div>
                                                    
                                                <div class="col-12 col-sm-6">
                                                     <div class="form-group">
                                                                <div class="controls">
                                                                    <label>Type of scrap</label>
                                                                    <input type="text" class="form-control " required placeholder="Type of scrap" Name ="type_of_scrap" value="{{$user->type_of_scrap}}"data-validation-required-message="This birthdate field is required">
                                                                </div>
                                                            </div>
                                                        
                                            
                                                 
                                                </div>
                                                 <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Monthly scrap production</label>
                                                            <input type="text" class="form-control" required placeholder="Monthly scrap production..." name="monthly_scrap_required" value="{{$user->monthly_scrap_required}}" data-validation-required-message="This monthly scrap required field is required">
                                                        </div>
                                                    </div>

                                                </div>
                                                 <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Type Of unit</label>
                                                            <input type="text" class="form-control" required placeholder="Type Of unit..." value="{{$user->type_of_unit}}" name="type_of_unit"data-validation-required-message="This monthly scrap required field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Installed Capacity</label>
                                                            <input type="text" class="form-control" required placeholder="Installed Capacity..." value="{{$user->installed_capacity}}" name ="installed_capacity" data-validation-required-message="This monthly scrap required field is required">
                                                        </div>
                                                    </div> 
                                                    
                                                </div>
                                                    
                                                <div class="col-12 col-sm-6">
                                                   
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Address </label>
                                                            <input type="text" class="form-control" value="{{$user->address}}" name="address" required placeholder="Address" data-validation-required-message="This Address field is required">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Postal Code</label>
                                                            <input type="text" class="form-control" required placeholder="postcode" value="{{$user->zipcode}}" data-validation-required-message="This Postcode field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                  <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>City</label>
                                                            <select class="form-control">
                                                             @foreach($city as $city)
                                                                <option value="{{$city->id}}">{{$city->name}} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>State</label>
                                                            <select class="form-control">
                                                             @foreach($state as $state)
                                                                <option value="{{$state->id}}">{{$state->name}} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                   <div class="col-12 col-sm-6">
                                                   <div class="form-group">
                                                        <div class="controls">
                                                            <label>GST/CIN</label>
                                                            <input type="text" class="form-control" required value="{{$user->cin_no_or_gst}}" name ="cin_no_or_gst" data-validation-required-message="This GST/CIN field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Country</label>
                                                            <input type="text" class="form-control" required value="India" name ="country" data-validation-required-message="This Time Zone field is required" disabled>
                                                        </div>
                                                    </div>

                                                </div>
                                               
                                                 <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Description</label>
                                                             <textarea type="text_area" id="email-icon" class="form-control" name="description" value="" placeholder="Description" rows="4" cols="50" required>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                        Changes</button>
                                                    
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit account form ends -->
                                    </div>
                                   
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


@endsection
