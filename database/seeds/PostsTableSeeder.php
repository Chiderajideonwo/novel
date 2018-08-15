<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('posts')->insert([

            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'subject' => str_random(10),
            'slug' => str_random(10),
            'content' => str_random(100),
            'created_at'=> Carbon::now(+1),
            'updated_at'=> Carbon::now(+1),
            // 'deleted_at'=> Carbon::now(+1),

        ]);
    }
}
