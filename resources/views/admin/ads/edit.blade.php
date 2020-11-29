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
                                    <h4 class="card-title">Edit Scrap Ad</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal" method="post" action="{{url('ad/update/'.$id->id)}}" enctype="multipart/form-data">
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
                                                                    <input type="text" id="fname-icon" class="form-control" name="title" value="{{$id->title}}" placeholder="Title" required>
                                                                    <div class="form-control-position">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>Ad create For</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                   <select class="form-control" name="user_id" required>
                                                                    @foreach($user as $user)
                                                                    <option value="{{$user->id}}" > {{$user->company_name}}</option>
                                                                    @endforeach
                                                                    </select>
                                                                        
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
                                                                    <input type="text" id="email-icon" class="form-control" name="quantity" value="{{$id->quantity}}" placeholder="Quantity" required>
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
                                                                        @foreach($state as $s)
                                                                        <option value="{{$s->id}}">{{$s->name}}</option>
                                                                        @endforeach
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
                                                                          @foreach($city as $c)
                                                                        <option value="{{$c->id}}">{{$c->name}}</option>
                                                                        @endforeach
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
                                                                    <input type="text" id="email-icon" class="form-control" name="address" value="{{$id->address}}" placeholder="Address" required> 
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
                                                                    <input type="text" id="email-icon" class="form-control" name="payment_term" value="{{$id->payment_term}}" placeholder="payment term" required>
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
                                                                    <input type="text" id="email-icon" class="form-control" name="shipment_term" value="{{$id->shipment_term}}" placeholder="Shipment term" required>
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
                                                                    <input type="file" id="email-icon" class="" name="image" value="{{$id->image}}" placeholder="Image" required>
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
                                                                    <textarea type="text_area" id="email-icon" class="form-control" name="description" value="" placeholder="Description" rows="4" cols="50" required>{{$id->description}}
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


@endsection
