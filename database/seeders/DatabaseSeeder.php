<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**  
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {// 

        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        // DB::table('users')->truncate();
        // $this->call([ UsersTableSeeder::class]);
        // DB::statement('SET FOREIGN_KEY_CHECKS=1');

        $users = User::factory()->count(100)->create();
        $category=Category::factory()->count(5)->create();
        $post=Post::factory()->count(100)->create();
        $comment=Comment::factory()->count(100)->create();


        // factory( \App\Models\User::class , 50 )->create();
        // factory( \App\Models\Category::class , 15 )->create();
        // factory( \App\Models\Post::class , 500 )->create();
        // factory( \App\Models\Comment::class , 1500 )->create();
    }
}
