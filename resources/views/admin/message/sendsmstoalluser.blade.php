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
                                        
                                     <div class="container">
  <h2>Send Sms</h2>
  

  <ul class="nav nav-tabs">
    <li class="active"><a class="btn btn-primary mr-1 mb-1 waves-effect waves-light" data-toggle="tab" href="#home">Custom Sms</a></li>
    <li><a class="btn btn-primary mr-1 mb-1 waves-effect waves-light" data-toggle="tab" href="#menu1">Subsciber</a></li>
      <li>
      <a class="btn btn-primary mr-1 mb-1 waves-effect waves-light" data-toggle="tab" href="#menu2">Non Subsciber</a></li>
     <li>
      <a  class="btn btn-primary mr-1 mb-1 waves-effect waves-light" data-toggle="tab" href="#menu3">Input Manually</a>
     </li>
     <li>
      <a class="btn btn-primary mr-1 mb-1 waves-effect waves-light" data-toggle="tab" href="#menu4">All</a>
     </li>
      <li>
      <a class="btn btn-primary mr-1 mb-1 waves-effect waves-light" data-toggle="tab" href="#menu5">Notification</a></li>
       
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
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
    <div id="menu1" class="tab-pane fade">
      <div class="card-body">
                                    <form method="post" action="{{url('sendsmstosubcriber')}}">
                                        @csrf
                                        <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>To Subsciber</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                  @foreach($user as $u)
                                                                  <label>{{$u}}</label>
                                                                  @endforeach
                                                                   <!--  <input type="text" id="fname-icon" class="form-control" value="" name="number" placeholder="mobile number"> -->
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
                                                                    <textarea type="text_area" id="email-icon" class="form-control" name="message" placeholder="Description" rows="4" cols="50">{{$msg}}
                                                                </textarea>
                                                                
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
    <div id="menu2" class="tab-pane fade">
     
      <div class="card-body">
                                    <form method="post" action="{{url('sendsmsnonsubscriber')}}">
                                        @csrf
                                        <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>To All Non Subsciber</span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                   @foreach($user as $u)
                                                                  <label>{{$u}}</label>
                                                                  @endforeach
                                                                  .....
                                                                    <!-- <input type="text" id="fname-icon" class="form-control" name="number" placeholder="mobile number"> -->
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
                                                                    <textarea type="text_area" id="email-icon" class="form-control" name="message" placeholder="Description" rows="4" cols="50"> {{$msg}}                                        </textarea>
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
    <div id="menu3" class="tab-pane fade">
     <div class="card-body">
                                    <form method="post" action="{{url('inputmanually')}}">
                                        @csrf
                                        <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>Input Manually</span>
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
    <div id="menu4" class="tab-pane fade">
     <div class="card-body">
                                    <form method="post" action="{{url('sendtoall')}}">
                                        @csrf
                                        <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-2">
                                                                <span>Send SMS to all </span>
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="position-relative has-icon-left">
                                                                     @foreach($user as $u)
                                                                  <label>{{$u}}</label>
                                                                  @endforeach
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
    
                                 <div id="menu5" class="tab-pane fade">
                                     <div class="card-body">
                                    <form method="post" action="{{url('notification')}}">
                                        @csrf
                                        <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-3">
                                                                <span>Notification for Subcriber</span>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="position-relative has-icon-left">
                                                                     @foreach($user as $u)
                                                                  <label>{{$u}}</label>
                                                                  @endforeach
                                                                    <div class="form-control-position">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                           <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-3">
                                                                <span>Description</span>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="position-relative has-icon-left">
                                                                    <textarea type="text_area" id="email-icon" class="form-control" name="message" placeholder="Description" rows="4" cols="50">Hi Dear 
                                                                  {{$notification}}   </textarea>
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
                           <div id="menu6" class="tab-pane fade">
                                  
                                           
                            </div>
                                                 

  </div>
</div>
                        
@section('after-script')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="{{url('js/jquery.dependent.fields.js')}}"></script>


     
@endsection




@endsection
