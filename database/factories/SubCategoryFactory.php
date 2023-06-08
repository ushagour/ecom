<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use app\Models\SubCategory;
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model= SubCategory::class;

    public function definition()
    {
        $subcategory_name= $this->faker->unique()->words($nb=4,$asText=true);
        $slug =str::slug($subcategory_name);
        return [
            //
            'name'=> $subcategory_name,
            'slug'=> $slug,
            'category_id'=> 1,
        ];
    }
}
