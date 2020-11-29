<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ad;

class State extends Model
{
  
   public function ads()
    {
    	return $this->hasMany(Ad::class);
    }
}
