<?php

namespace App\Imports;

use App\User;


use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\RegistersEventListeners;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Events\AfterImport;
use Maatwebsite\Excel\Validators\Failure;

class ScrapImport implements ToModel, WithValidation, SkipsOnFailure, WithHeadingRow
{
    
use Importable, SkipsErrors, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name'     => $row['name'],
           'email'    => $row['email'],
           'email_verified_at'=>$row['email_verified_at'], 
           'company_name'=>$row['company_name'],
           'user_type'=>$row['user_type'],
           'contact_no'=>$row['contact_no'],
           'type_of_scrap'=>$row['type_of_scrap'],
           'products'=>$row['products'],
           'monthly_scrap_required'=>$row['monthly_scrap_required'],
           'monthly_production'=>$row['monthly_production'],
           'address'=>$row['address'],
           'city'=>$row['city'],
           'state'=>$row['state'],
           'country'=>$row['country'],
           'zipcode'=>$row['zipcode'],
           'website'=>$row['website'],
           'is_subcribe'=>$row['is_subcribe'],
           'is_verified'=>$row['is_verified'],
           
           'is_blocked' =>$row['is_blocked'],
           
           'images'=>$row['images'],
            'subscription_plan'=>$row['subscription_plan'],
           'password' => Hash::make($row['password']), 


            
        ]);
    }

       public function rules(): array
    {
        return [
            '*.email' => ['email', 'unique:users,email']
        ];
    }
    public function onFailure(Failure ...$failure)
    {
    }
}
