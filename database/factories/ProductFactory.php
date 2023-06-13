<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


use app\Models\Product;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
        protected $model = Product::class;

    public function definition()
    {
        $product_name=$this->faker->unique()->words($nb=4,$asText=true);
        $slug =str::slug($product_name);
        return [
            //
            'name'=> $product_name,
            'slug'=> $slug,
            'short_description' => $this->faker->title(200),
            'description' =>$this->faker->title(500),
            'regular_price' =>$this->faker->numberBetween(10,200),
            'SKU' => 'DIGI'.$this->faker->numberBetween(100,200),
            'stock_status' =>'instock',
            'quantity' =>$this->faker->numberBetween(100,200),
            'image' =>'digital_'.$this->faker->unique()->numberBetween(1,22).'.jpg',
            'category_id' => $this->faker->numberBetween(1,2),
            'created_at' => $this->faker->dateTimeThisMonth()

      
        ];
    }
}
