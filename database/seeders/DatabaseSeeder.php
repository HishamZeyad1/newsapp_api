<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\User;
use App\Models\Category;
use  App\Models\Post;
use App\Models\Comment;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(50)->create();
        // \App\Models\Category::factory(15)->create();

        User::factory()->count(50)->create();
         Category::factory()->count(50)->create();
         Post::factory()->count(50)->create();
         Comment::factory()->count(50)->create();
        // \App\Models\Post::factory(500)->create();
        // \App\Models\Comment::factory(1500)->create();

                // $this->call(UsersTableSeeder::class);

                // factory( \App\User::class , 50 )->create();
                // factory( \App\Category::class , 15 )->create();
                // factory( \App\Post::class , 500 )->create();
                // factory( \App\Comment::class , 1500 )->create();
    }
}