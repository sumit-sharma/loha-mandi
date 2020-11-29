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

class GeneratorImport implements ToModel,  SkipsOnFailure, WithHeadingRow
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
           'user_type'=>$row['user_type'],
           'contact_no'=>$row['contact_no'],
           
           'monthly_scrap_production'=>$row['monthly_scrap_production'],
           
           'address'=>$row['address'],
           'city'=>$row['city'],
           'state'=>$row['state'],
          
           'zipcode'=>$row['zipcode'],
           'website'=>$row['website'],
           
           'password' => Hash::make('steelguide'), 


            
        ]);
    }

     
    public function onFailure(Failure ...$failure)
    {
    }
}
