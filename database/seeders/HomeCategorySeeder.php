<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeCategory;

class HomeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $HomeCategory = [
            [
                'sel_categories'    => 1,
                'no_of_products' => 5,
            ]
        ];

        HomeCategory::insert($HomeCategory);
    }
}
