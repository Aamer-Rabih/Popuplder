<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PopupType;
use DB;

class PopupTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
    	PopupType::truncate();
    	DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $data = [
    	    [
    	        'name' => 'question',
    	    ],
            [
    	        'name' => 'alert',
    	    ],
    	];

    	foreach ($data as $popupType) {
    	    PopupType::create($popupType);
    	}
    }
}
