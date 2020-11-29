<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Typeofscrap;
use App\State;
use App\City;
use App\User;
use App\Ad;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
         $state = State::All()->first();
        
        $scrap = Typeofscrap::All();
        $users = DB::table('users')->where('user_type',1)->take(6)->get();
         $trader = DB::table('users')->where('user_type',2)->take(6)->get();
          $scrap = DB::table('users')->where('user_type',3)->take(6)->get();
          $ad=Ad::where('is_approve',1)
          ->with('cities')
          ->with('states')->take(6)->get();
         
        
          $city =City::All();
 
        return view('home')->with('state',$state)->with('scrap',$scrap)->with('users',$users)->with('trader',$trader)->with('scrap',$scrap)->with('city',$city)->with('ad',$ad);
    }
    public function showfrom()
    {  
      $city=City::All();
      $state=State::All();
        return view('registration')->with('city',$city)->with('state',$state);
    }
  public function aboutus()
    {
        return view('pages.about');
    }

     public function ShowUser($id)
    {   $user = DB::table('users')->where('id',$id)->first();
        
        $users=User::All();
        return view('pages.singlepage')->with('user',$user)->with('users',$users);
    }
   public function BussinessListing()
   {
    $users = DB::table('users')->paginate(4);
    return view('pages.listing')->with('users',$users);
   }

}
