<?php

namespace Database\Seeders;

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
        
         \App\Models\Category::factory(5)->create();
         \App\Models\SubCategory::factory(2)->create();
         \App\Models\Product::factory(20)->create();
         $this->call([UserSeeder::class,HomeCategorySeeder::class,]);
      
    }
}
