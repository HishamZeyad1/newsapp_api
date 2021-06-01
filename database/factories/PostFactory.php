<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            // 'title' => $this->faker->name,

            'title' =>  $this->faker->name,
            'content'   =>  $this->faker->text( 400 ),
            'date_written'  => now(),
            'featured_image'    => $this->faker->imageUrl(),
            'votes_up'  =>  $this->faker->numberBetween( 1 , 100 ),
            'votes_down'    =>  $this->faker->numberBetween( 1 , 100 ),
            'user_id'   =>  $this->faker->numberBetween( 1 , 50 ),
            'category_id'   =>  $this->faker->numberBetween( 1 , 15 ),
        ];
    }
}
