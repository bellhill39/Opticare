<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('Users')->insert([

            'name' => 'Rashinda',
            'email'=> 's.rashi@hotmail.com',
            'password'=>Hash::make('rashinda119'),

        ]);
    }
}
