<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
 
            array(
                array(
                    'id' => 1,
                    'name' => 'admin',
                    'password' => Hash::make('admin'),
                    'email' => 'admin@plop.fr',
                    'status' => 'admin',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
 
                array(
                    'id' => 2,
                    'name' => 'Dupont',
                    'password' => Hash::make('dupont'),
                    'email' => 'dupont@plop.fr',
                    'status' => 'user',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
 
                array(
                    'id' => 3,
                    'name' => 'Durand',
                    'password' => Hash::make('durand'),
                    'email' => 'durand@plop.fr',
                    'status' => 'user',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                )
            )
        );
    }
}
