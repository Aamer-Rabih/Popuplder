<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PopupType;
use App\Models\Popup;
use DB;

class PopupSeeder extends Seeder
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
    	Popup::truncate();
    	DB::statement('SET FOREIGN_KEY_CHECKS=1');
        $data = [
    	    [
    	        'name' => 'on (page.create) page',
                'color' => '#ffffff',
                'location' => 'top-end',
                'height' => '1000',
                'width' => '1000',
                'type_id' => PopupType::firstWhere('name', 'question')->id,
    	    ],
            [
    	        'name' => 'on (popuptypes.index) page',
                'color' => '#ff5533',
                'location' => 'top-end',
                'height' => '500',
                'width' => '500',
                'type_id' => PopupType::firstWhere('name', 'alert')->id,
    	    ],

    	];

    	foreach ($data as $popup) {
    	    Popup::create($popup);
    	}
    }
}
