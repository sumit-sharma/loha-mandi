@extends('layouts.home')
@section('after-style')

@endsection

@section('content')



@include('include.banner')
@include('include.search')
@include('include.steelplant')
@include('include.scrapsupplier')
@include('include.scrapsaleoffer')
 
    
@endsection
@yield('after-script')

