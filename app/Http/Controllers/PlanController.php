<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plan;
use Yajra\Datatables\Datatables;

class PlanController extends Controller
{
   

 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.plan.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plan = new Plan();
        $plan->PlanName = $request['PlanName'];
        $plan->PlanType = $request['PlanType'];
        $plan->price = $request['price'];
        $plan->description = $request['description'];
        $plan->save();
        return back()->with('success','Subscription Plan Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan=Plan::find($id);
         return view('admin.plan.view')->with('plan',$plan);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan=Plan::find($id);
        return view('admin.plan.edit')->with('plan',$plan);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $plan=Plan::find($id);
         $plan->PlanName = $request['PlanName'];
        $plan->PlanType = $request['PlanType'];
        $plan->price = $request['price'];
        $plan->description = $request['description'];
        $plan->save();
        return back()->with('success','Subscription Plan Edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan=Plan::find($id);
        $plan->destroy($id);
        return back()->with('success','Subscription Plan Delete successfully');
    }
    public function PlanList()
    { 
   $plan = Plan::select(['id', 'PlanName', 'PlanType', 'description',  'price']);

     return view('admin.plan.list');
    }

    public function AllPlanList()
    {
     
     $plan = Plan::select(['id', 'PlanName', 'PlanType', 'description',  'price']);
 
        return Datatables::of($plan)
            ->addColumn('action', function ($plan) {
                return '<a href="/plan/edit/'.$plan->id.'"><i class="feather icon-edit"></i> </a>  <a href="/plan/view/'.$plan->id.'" ><i class="fa fa-eye"></i></a><a href="/plan/delete/'.$plan->id.'"><i class="feather icon-trash"></i></a>'
                ;
            })
            
           

         
            ->make(true);
     }
}
