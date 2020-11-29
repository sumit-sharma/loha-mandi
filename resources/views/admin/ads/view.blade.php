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
                                    <div class="card-title">Ad Detail</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="users-view-image">
                                            <img src="{{url('/ad/'.$ad->image) }}" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar" style="width: 50px; height: 50px">
                                        </div>
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-bold">Title :</td>
                                                    <td>{{$ad->title}}</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td class="font-weight-bold">Location :</td>
                                                    <td>{{ $ad->address}},&nbsp;{{$ad->city_id}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                                <tr>
                                                    <td class="font-weight-bold">Payment term :</td>
                                                    <td> {{$ad->payment_term}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Shipment term :</td>
                                                    <td>{{$ad->shipment_term}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Approve :</td>
                                                    <td>
                                                    @if ($ad->is_approve == 0)
                                                    Un Approve
                                                   @elseif ($ad->is_approve== 1)
                                                    Approve
                                                   @endif
                                                  </td>
                                                </tr>
                                            </table>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
             <div class="card">             <!-- account end -->
                <div class="col-12">
                    <div class="card-body">
                        <div class="col-12 d-block">
                           <label class="font-weight-bold">Description</label>
                         <p> {{ $ad->description}}</p>
                       </div>
                   </div>
                 </div>
                </div>       
                </section>
                <!-- page users view end -->

           


 @endsection
