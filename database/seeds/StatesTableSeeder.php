<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	DB::table('states')->insert([
        	
        	['id' => 1,'name' => 'Andaman and Nicobar Islands' ],
        	['id' => 2,'name' => 'Andhra Pradesh' ],
        	['id' => 3,'name' => 'Assam' ],
        	['id' => 4,'name' => 'Chandigarh' ],
        	['id' => 5,'name' => 'Chhattisgarh' ],
        	['id' => 6,'name' => 'Dadra and Nagar Haveli' ],
        	['id' => 7,'name' => 'Daman and Diu' ],
        	['id' => 8,'name' => 'Delhi' ],
        	['id' => 9,'name' => 'Goa' ],
        	['id' => 10,'name' => 'Gujarat' ],
        	['id' => 11,'name' => 'Haryana' ],
        	['id' => 12,'name' => 'Himachal Pradesh' ],
            ['id' => 13,'name' => 'Jammu and Kashmirr' ],
        	
            ['id' => 14,'name' => 'Jharkhand' ],
            ['id' => 15,'name' => 'Karnataka' ],
            ['id' => 16,'name' => 'Kerala' ],
            ['id' => 17,'name' => 'Lakshadweep' ],
            ['id' => 18,'name' => 'Madhya Pradesh' ],
            ['id' => 19,'name' => 'Maharashtra' ],
            ['id' => 20,'name' => 'Manipur' ],
            ['id' => 21,'name' => 'Meghalaya' ],

            ['id' => 22,'name' => 'Mizoram' ],
            ['id' => 23,'name' => 'Nagaland' ],
            ['id' => 24,'name' => 'Odisha' ],
            ['id' => 25,'name' => 'Puducherry' ],
            ['id' => 26,'name' => 'Punjab' ],
            ['id' => 27,'name' => 'Rajasthan' ],
            ['id' => 28,'name' => 'Sikkim' ],
            ['id' => 29,'name' => 'Tamil Nadu' ],


            ['id' =>30,'name' => 'Tripura' ],
            ['id' => 31,'name' => 'Uttar Pradesh' ],
            ['id' => 32,'name' => 'Uttarakhand' ],
            ['id' => 33,'name' => 'West Bengal' ],
            ['id' => 34,'name' => 'Arunachal Pradesh' ],
            ['id' => 35,'name' => 'Bihar' ],
            






            ]);
       
    }
}





































