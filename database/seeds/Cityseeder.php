<?php

use Illuminate\Database\Seeder;

class Cityseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
        	
        	['id' => 3,'name' => 'ghaziabad', 'state_id'=>'31' ],
        	['id' => 4,'name' => 'greater noida' , 'state_id'=>'31' ],
        	['id' => 5,'name' => 'noida', 'state_id'=>'31'],
        	['id' => 6,'name' => 'faridabad','state_id'=>'11' ],
        	['id' => 7,'name' => 'gurgaon','state_id'=>'11'],
        	['id' => 8,'name' => 'delhi','state_id'=>'8'],
        	
      
        	
            



            ]);
    }
}
