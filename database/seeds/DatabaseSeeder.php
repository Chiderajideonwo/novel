<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PostsTableSeeder::class);

        
        // DB::table('posts')->insert([
        //     'name' => str_random(10),
        //     'email' => str_random(10).'@gmail.com',
        //     'subject' => str_random(10),
        //     'slug' => str_random(10),
        //     'content' => str_random(10),
        //     'password' => bcrypt('secret'),
        // ]);
    }
}
