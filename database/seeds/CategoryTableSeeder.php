<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
 
            array (
                array(
                    'id' => 1,
                    'title' => 'Business',
                    'description' => 'blablabla1',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ),
                array(
                    'id' => 2,
                    'title' => 'Technique',
                    'description' => 'blablabla2',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ),
                array(
                    'id' => 3,
                    'title' => 'Concepts',
                    'description' => 'blablabla3',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ),
                array(
                    'id' => 4,
                    'title' => 'Evenements',
                    'description' => 'blablabla4',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                )
            )
        );
    }
}
