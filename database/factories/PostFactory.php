<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->title,
            'user_id'=>User::factory(),
            'category_id'=>Category::factory(),
            'excerpt'=>implode($this->faker->paragraphs(2)),
            'body'=>implode($this->faker->paragraphs(6)),
            'slug'=>$this->faker->slug 
        ];
    }
}
