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


class TradersImport implements ToModel,  SkipsOnFailure, WithHeadingRow
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
            
           'company_name'=>$row['company_name'],
           
           'contact_no'=>$row['contact_no'],
           'type_of_scrap'=>$row['type_of_scrap'],
           
          'monthly_capacity_tons'=> $row['monthly_capacity_tons'],

          'established_year'=> $row['established_year'],
           
           'address'=>$row['address'],
           'city'=>$row['city'],
           'state'=>$row['state'],
           'contact_no'=>$row['contact_no'],
           'zipcode'=>$row['zipcode'],
           'website'=>$row['website'],
           'user_type'=>$row['user_type'],
            
           'password' => Hash::make('steelguide'), 


            
        ]);
    }

   
    public function onFailure(Failure ...$failure)
    {
    
    }
}
