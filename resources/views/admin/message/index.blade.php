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
                        <div class="col-md-12 col-12">
                            
                                <div class="card-header">
                                   
                                    <div class="card-content">
                                         <div class="row text-center d-block"><h4 class="text-center">Send SMS</h4></div>
                                     <div class="card-body">
                                    <form method="post" action="{{url('sendsms')}}">
                                        @csrf
                                        <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>To</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="text" id="fname-icon" class="form-control" name="number" placeholder="mobile number">
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
                                                                    <textarea type="text_area" id="email-icon" class="form-control" name="message" placeholder="Description" rows="4" cols="50">                                                                        </textarea>
                                                                    <div class="form-control-position">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                       <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Send</button>
                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                                    </div>
                                    </form>
                                 </div>
                                </div>
                              </div>
                        </div>


@endsection
