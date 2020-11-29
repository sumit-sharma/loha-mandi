<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

   public $fillable = ['ad_id','transaction_id','currency_code','payment_status'];

}
