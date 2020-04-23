<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert(

            array (
                array(
                    'id' => 1,
                    'title' => 'Article 1',
                    'user_id' => '1',
                    'category_id' => '1',
                    'intro_text' => 'Intro 1',
                    'full_text' => 'blablabla',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ),
                array(
                    'id' => 2,
                    'title' => 'Article 2',
                    'user_id' => '1',
                    'category_id' => '1',
                    'intro_text' => 'Intro 2',
                    'full_text' => 'blablabla',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ),
                array(
                    'id' => 3,
                    'title' => 'Article 3',
                    'user_id' => '1',
                    'category_id' => '2',
                    'intro_text' => 'Intro 3',
                    'full_text' => 'blablabla',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ),
                array(
                    'id' => 4,
                    'title' => 'Article 4',
                    'user_id' => '1',
                    'category_id' => '2',
                    'intro_text' => 'Intro 4',
                    'full_text' => 'blablabla',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ),
                array(
                    'id' => 5,
                    'title' => 'Article 5',
                    'user_id' => '1',
                    'category_id' => '3',
                    'intro_text' => 'Intro 5',
                    'full_text' => 'blablabla',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ),
                array(
                    'id' => 6,
                    'title' => 'Article 6',
                    'user_id' => '1',
                    'category_id' => '4',
                    'intro_text' => 'Intro 6',
                    'full_text' => 'blablabla',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                )
            )
        );
    }
}
