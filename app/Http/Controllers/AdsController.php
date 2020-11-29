<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\City;
use App\User;
use App\Ad;
use App\Bid;
use Yajra\Datatables\Datatables;
use DB;
use Illuminate\Support\Facades\Auth;
class AdsController extends Controller
{
   
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $state = State:: All();
       $city = City::All();
       $user=User::All();
        return view('admin.ads.create')->with('state',$state)->with('city',$city)->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_ad(Request $request)
    {    
         
         $ad = new Ad;
        
         

        $ad->user_id = $request['user_id'];
        $ad->title   = $request['title'];
        $ad->description = $request['description'];
        $ad->quantity  = $request['quantity'];
        $ad->state_id  = $request['state_id'];
        $ad->city_id   = $request['city_id'];
        $ad->address   = $request['address'];
        $ad->payment_term = $request['payment_term'];
        $ad->shipment_term = $request['shipment_term'];
        if($request->hasFile('image'))
        {
             $name=time().'-a'.$request->image->getClientOriginalName();
             $request->image->move(public_path().'/ad/', $name);  
        }
        $ad->image =$name;
        
        $ad->save();
       
        return back()->with('success','Ad submit successfully');
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
        $ad = ad::find($id);
        return view('admin.ads.view')->with('ad',$ad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
   {
       $id =Ad::find($id);
       $state = State:: All();
       $city = City::All();
       $user=User::All();
     
        return view('admin.ads.edit')->with('state',$state)->with('city',$city)->with('id',$id)->with('user',$user);
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
        
        $ad =Ad::find($id);
        
        $ad->user_id = $request['user_id'];
        $ad->title   = $request['title'];
        $ad->description = $request['description'];
        $ad->quantity  = $request['quantity'];
        $ad->state_id  = $request['state_id'];
        $ad->city_id   = $request['city_id'];
        $ad->address   = $request['address'];
        $ad->payment_term = $request['payment_term'];
        $ad->shipment_term = $request['shipment_term'];
        if($request->hasFile('image'))
        {
             $name=time().'-a'.$request->image->getClientOriginalName();
             $request->image->move(public_path().'/ad/', $name);  
        }
        $ad->image =$name;
       
           
        $ad->save();
        return back()->with('success','Ad edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad=Ad::find($id);
      
        $ad->delete($id);
        
      return back()->with('success','Ad delete successfully');
    }
     public function adlists()
    {
        return view('admin.ads.list');
    }
   
    public function adlist()
    {
     
     $ad = Ad::select(['id', 'title', 'quantity', 'address',  'is_approve','payment_term','shipment_term']);
 
        return Datatables::of($ad)
            ->addColumn('action', function ($ad) {
                return '<a href="/ad/edit/'.$ad->id.'"><i class="feather icon-edit"></i> </a>  <a href="/ad/view/'.$ad->id.'" ><i class="fa fa-eye"></i></a><a href="/ad/delete/'.$ad->id.'"><i class="feather icon-trash"></i></a>'
                ;
            })
            
           

            ->removeColumn('password')
            ->make(true);
     }
    

    public function unapprove()
    {
        return view('admin.ads.unapprove');

    }

    public function approve($id)
    {
        $id = Ad::find($id);
        $id->is_approve=1;
        $id->save();
        return back()->with('success','Ad is approve successfully and live now');
    }
     

     public function unapprovelist()
    {
      $ad = DB::table('ads')->where('is_approve', '=', 0)->get();
    
        return Datatables::of($ad)
            ->addColumn('action', function ($ad) {
                return '<a href="/ad/approve/'.$ad->id.'"><i class="feather icon-check-square"></i> Approve</a>'
                ;
            })
            
           

            ->removeColumn('password')
            ->make(true);
     }
     
     public function BuyandSell()
     {
       $ad=Ad::where('is_approve',1)
          ->with('cities')
          ->with('states')->get();
          $city=City::All();
    
        return view('pages.buyandsell')->with('ad',$ad)->with('city',$city);
     }
   public function view($id)
   {
        $ad =Ad::where('id',$id)->with('cities')
          ->with('states')->first();
          $ads=Ad::All();
     return view('pages.addetail')->with('ad',$ad)->with('ads',$ads);
   }
     
     public function Quote(Request $request)
     {
          $bid =new Bid;
          $bid->name=$request['name'];
            $bid->aid=$request['aid'];
              $bid->uid=$request['uid'];
                $bid->price=$request['qprice'];
                  $bid->mobile=$request['contact_no'];
                    $bid->address=$request['address'];
                    $bid->save();
                return back()->with('success1','Your Quote submit successfully');    
     }
}