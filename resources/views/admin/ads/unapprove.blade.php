@extends('admin.layout.auth')

@include('admin.layout.sidebar')
@section('after-style')

@endsection
@section('content')
    

    
<div class="card">
   @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif  
                                    <div class="row mt-5 mb-5 pl-5 pr-5">
                                        <div class="col-12">
                                            <div class="ag-grid-btns justify-content-between flex-wrap mb-1">
                                              <div class="col-md-12"> <h2 class="mb-4 text-center">All Unaprrove Ads</h2></div>

            <table class="table table-bordered yajra-datatable">
            <thead>
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Quantity</th>
                <th>Address</th>
               
                <th>Payment term</th>
                <th>Shipment term</th>
                <th>Action</th>
                
             </tr>
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
    
    
    
   
@endsection
  @section('after-script') 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(function() {

            $('.yajra-datatable').DataTable({

                processing: true,

                serverSide: true,


                ajax: '{{url('unapproveadlist') }}',

                columns: [

                    { data: 'id', name: 'id' },

                    { data: 'title', name: 'title' },

                    { data: 'quantity', name: 'quantity' },
                    
                   { data: 'address', name: 'address' },
                    

                   

                    { data: 'payment_term', name: 'payment_term' },
                    { data: 'shipment_term', name: 'shipment_term' },
                     {data: 'action', name: 'action', orderable: false, searchable: false}
                    
                ]

            });

        });
  
</script>
@endsection
