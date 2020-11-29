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
                            	 @if ($message = Session::get('success'))
                         <div class="alert alert-success alert-block">
                          <button type="button" class="close" data-dismiss="alert">×</button> 
                          <strong>{{ $message }}</strong>
                          </div>
                          @endif
                                <div class="card-header">
                                    <div class="card-title"> Click here files to upload for {{$user->name}} User id is :{{$user->id}}</div>
                                </div>
                                
                                <div class="card-body">
                                	<form action="{{url('/admin/update/images/'.$user->id)}}" enctype="multipart/form-data" method="post">
                                		 @csrf
                                	<div class="row">
                                         <div class="col-md-6">
                                         <div class="form-group">
                                            <input type="file" id="img-upload1" class="form-control img-upload-box" name="images[]">
                                          </div>
                                          </div>
                                         <div class="col-md-6">
                                         <div class="form-group">
                                            <input type="file" id="img-upload1" class="form-control img-upload-box" name="images[]">
                                          </div>
                                          </div>
                                          <div class="col-md-6">
                                         <div class="form-group">
                                            <input type="file" id="img-upload1" class="form-control img-upload-box" name="images[]">
                                          </div>
                                          </div>
                                         <div class="col-md-6">
                                         <div class="form-group">
                                            <input type="file" id="img-upload1" class="form-control img-upload-box" name="images[]">
                                          </div>
                                          </div>
                                          
                                          <div class="col-md-6">
                                         <div class="form-group">
                                            <input type="file" id="img-upload1" class="form-control img-upload-box" name="images[]">
                                          </div>
                                          </div>
                                           <div class="col-md-6">
                                          <div class="form-group">
                                            <input type="file" id="img-upload1" class="form-control img-upload-box" name="images[]">
                                          </div>
                                          </div>
                                         
                                         
                     </div>
                                          <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-light">Upload Images</button>
                                                    
                                           </div>
                                       </form>
                    </div>
                </section>


                              
                             
                               
                                @endsection