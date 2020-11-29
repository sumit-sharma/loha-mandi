<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ad;

class City extends Model
{
      
    protected $fillable = ['state_id','name'
        
    ]; 


   public function ads()
    {
    	return $this->hasMany(Ad::class);
    }

}
