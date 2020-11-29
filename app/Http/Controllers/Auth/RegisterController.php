<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function userregi(Request $request)
    {


        $user= new User();
            $user->name = $request['name'];
            $user->email = $request['email'];

           $user->company_name = $request['company_name'];
            $user->user_type  =  $request['user_type'];
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
            $user->password = Hash::make($request['password']);


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
            return back()->with('success','profile register successfully');

    }

}




