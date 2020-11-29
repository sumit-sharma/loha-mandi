<?php

use Illuminate\Database\Seeder;

class typeofscraptableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {

    	DB::table('typeofscraps')->insert([
        	
        	['id' => 1,'name' => 'HMS 1&2' ],
        	['id' => 2,'name' => 'End Cutting' ],
        	['id' => 3,'name' => 'Shredded' ],
        	['id' => 4,'name' => 'ReRolling' ],
        	['id' => 5,'name' => 'CRC' ],
        	['id' => 6,'name' => 'Turning' ],
        	['id' => 7,'name' => 'Other' ],
        	
        	
          






            ]);
       
    }
}
