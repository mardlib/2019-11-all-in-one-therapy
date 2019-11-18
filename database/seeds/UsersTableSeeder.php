<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            ['name'=>'admin',
                'password' => Hash::make('admin'),
                'email' => 'admin@gmail.com',
                'created_at' => Carbon::now()
            ]
        );


    }
}
