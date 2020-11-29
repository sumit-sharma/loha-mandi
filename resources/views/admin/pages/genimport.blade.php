@extends('admin.layout.auth')

@include('admin.layout.sidebar')

@section('content')
    

@if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
    <div class="card">                               <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                     
                                        <div class="col-12">

                                            <div class="ag-grid-btns d-flex justify-content-between flex-wrap mb-1">
    
   

   <form method="post" enctype="multipart/form-data" action="{{ url('/scrapexcel') }}">
    {{ csrf_field() }}
   
      <div class="row">   
       
     <div class="px-md-5 mt-3"><label>Select File for Upload</label></div>
     <div class=""><input type="file" name="select_file"  required="">
      <input type="submit" name="upload" class="btn btn-primary" value="Upload"></div>
     
      </div>

   </form>

    </div> 
                                         </div>
                                    </div>
                                 </div>
                            </div>
</div>
   @endsection