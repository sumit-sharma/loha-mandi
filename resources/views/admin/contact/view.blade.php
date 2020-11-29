

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
                                    <div class="card-title">Inquiry Deatail</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-bold">Name</td>
                                                    <td>{{$inq->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Phone</td>
                                                    <td>{{$inq->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Email</td>
                                                    <td>{{$inq->email}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                                <tr> 
                                                    <td class="font-weight-bold">Description</td>
                                                    <td>
                                                   {{$inq->description}}

                                                  </td>
                                                
                                               
                                            </table>
                                        </div>
                                        <div class="col-12 mt-3">
                                            <a href="{{ URL::previous() }}" class="btn btn-primary mr-1"><i class="feather icon-skip-back"></i> Back</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- account end -->

                        <!-- information start -->
                        
                        <!-- information start -->
                        <!-- social links end -->
                       
                        <!-- social links end -->
                        <!-- permissions start -->
                        
                        <!-- permissions end -->
                    </div>
                </section>
                <!-- page users view end -->

           


 @endsection
