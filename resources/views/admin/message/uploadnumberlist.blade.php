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
                                	<h4 class="card-title">Upload List</h4>
                                   </div>
                                    <div class="card-content">
                                        
                                   
                                     	
                                     	<div class="card-body">
                                          <form method="post" action="{{url('uploadlist')}}" enctype="multipart/form-data">
                                               @csrf
                                                 <div class="col-12">
                                                           <div class="row">
                                                            <div class="col-md-3 text-right">
                                                               Select File : 
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="position-relative has-icon-left">
                                                                   <input type="file" name="select_file"  required>
                                                                    
                                                                </div>
                                                           
                                                        </div>
                                                        <div class="col-md-3">
                                                        	 <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Upload</button>
                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light">Reset</button>
                                                        </div>
                                                    </div>
                                          
                                       
                                                     </form>
                                           </div>
          <div class="col-12">
           <div class="card">
                              <div class="row mt-5 mb-5 pl-5 pr-5">
                                        <div class="col-12">
                                            <div class="ag-grid-btns justify-content-between flex-wrap mb-1">
                                              <div class="col-md-12"> <h2 class="mb-4 text-center">All List </h2></div>

            <table class="table table-bordered yajra-datatable">
            <thead>
            <tr>
                <th>id</th>
                <th>List name</th>
               
                <th>action</th>
                
             </tr>
             @foreach($bulk as $bulk)
              <tr>
                <th>{{$bulk->id}}</th>
                <th>{{$bulk->listname}}</th>
               
                <th> <a  href="#" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Sendsms</button></th>
                
             </tr>
            @endforeach
            </thead>
            <tbody>
           </tbody>
            </table>
                                    
                                             </div> 
                                         </div>
                                    </div>
                                 </div>
                            </div>
</div>
    
           


            </div>

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
         </section>
  @endsection