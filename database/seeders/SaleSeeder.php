<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sale = [
            [
                'sale_date' => now(),
                'status'    => 1
            ]
        ];

        Sale::insert($sale);
    }
}
