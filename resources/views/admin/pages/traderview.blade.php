@extends('admin.layout.auth')

@include('admin.layout.sidebar')
@section('after-style')

@endsection
@section('content')
  
         
                <!-- page users view start -->
                <section class="page-users-view">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Plant Deatail</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                       <div class="users-view-image">
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
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-bold">Name :</td>
                                                    <td>{{$user->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Phone :</td>
                                                    <td>{{$user->contact_no}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Email :</td>
                                                    <td>{{$user->email}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                                <tr> 
                                                    <td class="font-weight-bold">Status :</td>
                                                    <td>
                                                   @if ($user->is_blocked == 0)
                                                    Blocked
                                                   @elseif ($user->is_blocked == 1)
                                                    Active
                                                   
                                                  @endif
                                                  </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Verified or Not :</td>
                                                    <td>
                                                     @if ($user->is_verified== 0)
                                                    Unverified
                                                    @elseif ($user->is_verified == 1)
                                                    Verified
                                                   
                                                    @endif
                                                </td> 
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Company Name :</td>
                                                    <td>{{$user->company_name}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <a href="{{url('admin/edit/user/'.$user->id)}}" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Edit</a>
                                            <a href="{{url('admin/delete/user/'.$user->id)}}" class="btn btn-outline-danger"><i class="feather icon-trash-2"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- account end -->

                        <!-- information start -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Location :</div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td class="font-weight-bold">Address : </td>
                                            <td>{{$user->address}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">city :</td>
                                            <td>{{$user->city}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">State :</td>
                                            <td>{{$user->state}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Postal Code :</td>
                                            <td>{{$user->zipcode}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Established Year:</td>
                                            <td>{{$user->established_year}}</td>
                                        </tr>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- information start -->
                        <!-- social links end -->
                        <div class="col-md-6 col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Plant Info :</div>
                                </div>
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td class="font-weight-bold">Type Of Scrap :</td>
                                            <td>{{$user->type_of_scrap}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Type Of unit</td>
                                            <td>{{$user->type_of_unit}}
                                            </td>
                                        </tr>
                                       
                                       
                                        <tr>
                                            <td class="font-weight-bold">GST/CIN No. :</td>
                                            <td>{{$user->cin_no_or_gst}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Website :</td>
                                            <td>{{$user->website}}
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                         <div class=" col-12 ">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title mb-2">Description:</div>
                                </div>
                                <div class="card-body">
                               <p>{{$user->description}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- social links end -->
                        <!-- permissions start -->
                        
                        <!-- permissions end -->
                    </div>
                </section>
                <!-- page users view end -->

           


 @endsection
