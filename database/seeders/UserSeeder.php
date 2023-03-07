<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;
use Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
    	User::truncate();
    	DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $data = [
    	    [
                'name' => 'Aamer',
                'email' => 'aamer.rabih@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),
    	    ],

    	];

    	foreach ($data as $user) {
    	    User::create($user);
    	}
    }
}
