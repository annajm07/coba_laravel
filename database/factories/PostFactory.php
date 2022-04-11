<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title'=>$this->faker->sentence(mt_rand(2,5)),
            'slug'=>$this->faker->slug(),
            'exerpt'=>$this->faker->sentence(mt_rand(10,15)),
            'body'=>$this->faker->paragraph(mt_rand(10,20)),
            'user_id'=>mt_rand(1,5),
            'category_id'=>mt_rand(1,3)
        ];
    }
}
