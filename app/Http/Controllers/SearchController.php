<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\Ad;
use App\State;
use App\User;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request['buyorsell']=="buy")
        {   
            $ad=Ad::where('is_approve',1)
          ->with('cities')
          ->with('states')->get();
           $city=City::All();
            $state=state::All();
            return view('pages.buyandsell')->with('ad',$ad)->with('city',$city)->with('state',$state);
            
                
            }
            $city=City::All();
            $state=state::All();
            return view('registration')->with('city',$city)->with('state',$state);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function HomeSearch(Request $request)
    {
        $user_type=$request['user_type'];
        $city =$request['city'];
       $users=User::where('user_type', $user_type)->where('city',$city)->paginate(4);
      
        return view('pages.search')->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
