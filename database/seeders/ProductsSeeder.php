<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Products::create([
            'name' => 'iPhone 14 Pro Max',
            'detail' => 'The iPhone 14 Pro Max is the best iPhone ever. It has a 6.7-inch Super Retina XDR display, the A14 Bionic chip, a 12MP Ultra Wide camera, a 12MP Wide camera, and a LiDAR Scanner for Night mode portraits and all-new Night mode on video.',
            'price' => 1000,
        ]);
    }
}
