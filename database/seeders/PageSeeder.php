<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Popup;
use App\Models\Page;
use DB;

class PageSeeder extends Seeder
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
    	Page::truncate();
    	DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $data = [
    	    [
    	        'name' => 'popuptypes.index',
				'popup_id' => Popup::firstWhere('name', 'on (popuptypes.index) page')->id,
    	    ],
            [
    	        'name' => 'popuptypes.create',
    	    ],
            [
    	        'name' => 'popups.index',
    	    ],
            [
    	        'name' => 'popups.create',
    	    ],
            [
    	        'name' => 'pages.index',
    	    ],
            [
    	        'name' => 'pages.create',
				'popup_id' => Popup::firstWhere('name', 'on (page.create) page')->id,

    	    ],

    	];

    	foreach ($data as $page) {
    	    Page::create($page);
    	}
    }
}
