<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\City;
use App\State;
use App\User;

class Ad extends Model
{
     
    protected $fillable = ['title','quantity','user_id','state_id','city_id','address','payment_term','shipment_term','image','description',
        
    ]; 

    public function cities()
    {
        
         return $this->belongsTo(City::class,'city_id');
    }
     public function states()
    {
        
         return $this->belongsTo(State::class,'state_id');
    }

     public function users()
    {
        
         return $this->belongsTo(User::class,'user_id');
    }


}

