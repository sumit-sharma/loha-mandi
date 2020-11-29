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
                                    <h4 class="card-title">Edit Plan</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" method="post" action="{{url('/plan/update/'.$plan->id)}}" enctype="multipart/form-data">
                                              @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>Plan Title</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="text" id="fname-icon" class="form-control" name="PlanName" value="{{$plan->PlanName}}" placeholder="Title">
                                                                    <div class="form-control-position">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>Price</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                    <input type="text" id="email-icon" class="form-control" name="price" placeholder="Price"
                                                                     value="{{$plan->price}}">
                                                                    <div class="form-control-position">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                     <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>Plan create for</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                    
                                                                    <select class="form-control" name="PlanType">
                                                                        <option value="1">Steel Plant</option>
                                                                        <option value="2">Steel Trader</option>
                                                                        <option value="3">Scrap Generator </option>
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
                                                                <span>Description</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea type="text_area" id="email-icon" class="form-control" name="description" placeholder="Description" rows="4" cols="50">
                                                                       {{$plan->description}} </textarea>
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


@endsection
