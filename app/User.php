<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Ad;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email',
        'password',
        'company_name', 
        'user_type',
        'contact_no',
        'type_of_scrap',
        'products',
        'monthly_scrap_required',
        'monthly_production',
        'cin_no_or_gst',
        'is_approve',
        'address',
        'city',
        'state',
        'country',
        'zipcode',
        'website',
        'is_verified',
        'is_subcribe',
        'is_blocked',
        'is_loggedin',
        'description',
        'images',
        'type_of_unit',
        'installed_capacity',
        'established_year',
        'designation',
        'monthly_capacity_tons',
        'monthly_scrap_production',
    ]; 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function ads()
    {
        return $this->hasMany(Ad::class);
    }
}

