<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use app\Models\Category;


class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model= Category::class;
    public function definition()
    {
        $category_name= $this->faker->unique()->words($nb=4,$asText=true);
        $slug =str::slug($category_name);
        return [
            //
            'name'=> $category_name,
            'slug'=> $slug,
        ];
    }
}
