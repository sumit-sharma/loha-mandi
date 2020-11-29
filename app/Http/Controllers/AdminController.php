<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use App\User;
use App\State;
use App\City;
use App\Bid;
use DB;
 use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

use Yajra\Datatables\Datatables;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Hesto\MultiAuth\Traits\LogsoutGuard;


class AdminController extends Controller
{
    
  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.pages.steelplant');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getsteelplantlist()
    {
         $users = DB::table('users')->where('user_type', '=', 1)->get();
 
        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="/admin/edit/user/'.$user->id.'"><i class="feather icon-edit"></i> </a>  <a href="/admin/view/user/'.$user->id.'" ><i class="fa fa-eye"></i></a><a href="/admin/delete/'.$user->id.'"><i class="feather icon-trash"></i></a>'
                ;
            })
            
           

            ->removeColumn('password')
            ->make(true);
    
    }
  
   public function GettraderList()
    {
        $users = DB::table('users')->where('user_type', '=', 2)->get();
 
        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="/admin/edit/user/'.$user->id.'"><i class="feather icon-edit"></i> </a>  <a href="/admin/view/user/'.$user->id.'" ><i class="fa fa-eye"></i></a><a href="/admin/delete/'.$user->id.'"><i class="feather icon-trash"></i></a>'
                ;
            })
            
           

            ->removeColumn('password')
            ->make(true);
    
    }
    public function GetgenratorList()
    {
        $users = DB::table('users')->where('user_type', '=', 3)->get();
 
        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="/admin/edit/user/'.$user->id.'"><i class="feather icon-edit"></i> </a>  <a href="/admin/view/user/'.$user->id.'" ><i class="fa fa-eye"></i></a><a href="/admin/delete/'.$user->id.'"><i class="feather icon-trash"></i></a>'
                ;
            })
            
           

            ->removeColumn('password')
            ->make(true);
    
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function importcsv()

    {  
        return view ('admin.pages.import');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function import(Request $request)
    {

     $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
     ]);
 
     $path = $request->file('select_file')->getRealPath();
    
     $data = Excel::import(new UsersImport, $request->file('select_file') );
     $import = new UsersImport;
    if ($import->failures()->isNotEmpty()) {
            return back()->withFailures($import->failures());
        }

    

     return back()->with('success', 'Data Imported successfully.');
    } 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
       $state =State::All();
       $city=City::All();
       $user=User::find($id);
   
 
       if ($user->user_type == '1') 
       {
        
         return view('admin.pages.edit')->with('user',$user)->with('city',$city)->with('state',$state);

       } elseif ($user->user_type == '2') {
           
           return view('admin.pages.traderedit')->with('user',$user)->with('city',$city)->with('state',$state);
       }
     
     return view('admin.pages.scrapedit')->with('user',$user)->with('city',$city)->with('state',$state);
   
    }
    

    public function view($id)
    {
       $user=User::find($id);   
       
       
       if ($user->user_type == '1') 
       {
        
         return view('admin.pages.view')->with('user',$user);

       } elseif ($user->user_type == '2') {
           
           return view('admin.pages.traderview')->with('user',$user);
       }
     
     return view('admin.pages.scrapview')->with('user',$user);
   
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
        
        $user = User::find($id);
        $user_type =User::where('id',$id)->pluck('user_type');
      
        $user->name = $request['name'];
        $user->email = $request['email'];
         
           $user->company_name = $request['company_name'];
            $user->user_type  =  $user_type;
            $user->contact_no =  $request['contact_no'];
            $user->type_of_scrap = $request['type_of_scrap'];
            $user->products =  $request['products'];
            $user->monthly_scrap_required = $request['monthly_scrap_required'];
            $user->monthly_production = $request['monthly_production'];
            $user->address = $request['address'];
            $user->city = $request ['city'];
            $user->state =  $request['state'];
            $user->country = $request['country'];
            $user->zipcode = $request['zipcode'];
            $user->website = $request['website'];
            $user->description= $request['description'];
            $user->cin_no_or_gst = $request['cin_no_or_gst'];  
            $user->type_of_unit= $request['type_of_unit'];
            $user->installed_capacity= $request['installed_capacity'];
            $user->established_year= $request['established_year'];
            $user->designation= $request['designation'];
            $user->monthly_capacity_tons= $request['monthly_capacity_tons'];
            $user->monthly_scrap_production= $request['monthly_scrap_production'];
            $user->save();
            return back()->with('success','Profile Edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function destroy($id)

    {  
       
        $us=User::find($id);
        
        $us->delete($id);
        
      return back()->with('success','user delete successfully');
        }

public function ScrapgeneratorList()
{
  return view('admin.pages.Scrapgeneratorlist');
}
public function SteeltraderList()
{
  return view('admin.pages.scraptraderlist');
}

public function AddCity()
{ 
    $state=State::All();
  return view('admin.city.create')->with('state',$state);
}
public function FillCity(Request $request){

    $city = new City;
    $city->name = $request['name'];
    $city->state_id=$request['state_id'];
    $city->save();
    return back()->with('success','City add successfully');
}
public function CityList()
{
    return view('admin.city.citylist');
}
public function GetCityList()
{
     $users = City::latest()->get();
 
        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '</i></a><a href="/admin/city/'.$user->id.'"><i class="feather icon-trash"></i></a>'
                ;
            })
            
           

         
            ->make(true);
    
}
public function DeleteCity($id)
{
   $city=City::find($id);
   $city->destroy($id);
   return back()->with('success', 'City Delete successfully');
}

public function GetBidList()
{
   return view('admin.bid.list');
}
public function GetBidListing(){

     $users = Bid::latest()->get();
 
        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '</i></a><a href="/admin/bid/delete/'.$user->id.'"><i class="feather icon-trash"></i></a>'
                ;
            })
             ->make(true); 
}
public function DeleteBid($id)
{
 $bid=Bid::find($id);
 $bid->destroy($id);
 return back()->with('success', 'Bid Delete successfully');

}

public function UploadImage($id)
{
    $user=User::find($id);
    return view('admin.pages.uploadimage')->with('user',$user);
  
 
}
public function UpdateImages(Request $request, $id)
{
       $user=User::find($id);
     if($request->hasFile('images')) 
            {  
                foreach($request->file('images') as $image)
                { 
                    $name=$image->getClientOriginalName();
                    $image->move(public_path().'/images/', $name);  
                    $data[] = $name;  
                }
       
                $user->images=json_encode($data);
            }
        
           
            $user->save();
            return back()->with('success','Images uploaded successfully');


}




}
