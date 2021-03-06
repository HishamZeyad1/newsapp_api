<?php
namespace Database\Factories;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
class CategoryFactory extends Factory
{
/**
* The name of the factory's corresponding model.
*
* @var string
*/
protected $model = Category::class;
/**
* Define the model's default state.
* 
* @return array
*/
public function definition()
{
return [
// 'title' => $faker->word,
'title' => $this->faker->name,

];

}
}
 
