<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert(
            [
                [

                    'name' => 'karim',
                    'email' => 'koko@kokffazzo.com',
                    'password' => Hash::make('koko@koko.com'),
                    'role_id' => 1,
                ],
                [

                    'name' => 'kzfzfarim',
                    'email' => 'koko@kokffffffo.com',
                    'password' => Hash::make('koko@koko.com'),
                    'role_id' => 2,
                ],
                [

                    'name' => 'karezzzzzzzzim',
                    'email' => 'koko@kzefzfoko.com',
                    'password' => Hash::make('koko@koko.com'),
                    'role_id' => 2,
                ]
            ]
        );
    }
}
