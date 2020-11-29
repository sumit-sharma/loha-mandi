@extends('admin.layout.auth')

@include('admin.layout.sidebar')
@section('after-style')

@endsection
@section('content')

<section class="page-users-view">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Plant Deatail</div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-bold">Plan name &nbsp;:</td>
                                                    <td>{{$plan->PlanName}}</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td class="font-weight-bold">Plan Price&nbsp;:</td>
                                                    <td>{{$plan->price}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                                <tr>
                                                    <td class="font-weight-bold">Plan for&nbsp;:</td>

                                                    <td>
                                                    @if ($plan->PlanType == 1)
                                                   Steel Plant
                                                 @elseif ($plan->PlanType == 2)
                                                  Steel Trader
                                                  @else
                                                   Scrap Generator
                                                    @endif
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Plan Description:&nbsp;</td>
                                                    <td>{{$plan->description}}</td>
                                                </tr>
                                               
                                            </table>
                                        </div>
                                      
                                    </div>
                                    <a href="{{ url()->previous() }}"  class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Back</a>
                                </div>
                                 
                            </div>

                        </div>
                        @endsection