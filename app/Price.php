<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
     protected $fillable = ['product_id','city_id','date','time','price'
        
    ]; 
}
