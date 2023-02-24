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

        \App\Models\Products::create([
            'name' => 'iPhone 14 Pro',
            'detail' => 'The iPhone 14 Pro is the best iPhone ever. It has a 6.1-inch Super Retina XDR display, the A14 Bionic chip, a 12MP Ultra Wide camera, a 12MP Wide camera, and a LiDAR Scanner for Night mode portraits and all-new Night mode on video.',
            'price' => 900,
        ]);

        \App\Models\Products::create([
            'name' => 'iPhone 14',
            'detail' => 'The iPhone 14 is the best iPhone ever. It has a 6.1-inch Super Retina XDR display, the A14 Bionic chip, a 12MP Ultra Wide camera, a 12MP Wide camera, and a LiDAR Scanner for Night mode portraits and all-new Night mode on video.',
            'price' => 800,
        ]);

        \App\Models\Products::create([
            'name' => 'iPhone 14 Mini',
            'detail' => 'The iPhone 14 Mini is the best iPhone ever. It has a 5.4-inch Super Retina XDR display, the A14 Bionic chip, a 12MP Ultra Wide camera, a 12MP Wide camera, and a LiDAR Scanner for Night mode portraits and all-new Night mode on video.',
            'price' => 700,
        ]);

        \App\Models\Products::create([
            'name' => 'iPhone 14 SE',
            'detail' => 'The iPhone 14 SE is the best iPhone ever. It has a 4.7-inch Super Retina XDR display, the A14 Bionic chip, a 12MP Ultra Wide camera, a 12MP Wide camera, and a LiDAR Scanner for Night mode portraits and all-new Night mode on video.',
            'price' => 600,
        ]);

        \App\Models\Products::create([
            'name' => 'Macbook Air',
            'detail' => 'The MacBook Air is a line of Macintosh portable computers developed and manufactured by Apple Inc. It consists of a full-size keyboard, a machined aluminum case, and a thin light structure. The Air is available in 13- and 16-inch screen sizes.',
            'price' => 500,
        ]);

        \App\Models\Products::create([
            'name' => 'Macbook Pro',
            'detail' => 'The MacBook Pro is a line of Macintosh portable computers introduced in January 2006 by Apple Inc. It is the high-end model of the MacBook family and is currently available in 13- and 16-inch screen sizes. A 17-inch version was available between April 2006 and June 2012.',
            'price' => 400,
        ]);

        \App\Models\Products::create([
            'name' => 'Macbook Pro 16',
            'detail' => 'The MacBook Pro 16 is a line of Macintosh portable computers introduced in January 2006 by Apple Inc. It is the high-end model of the MacBook family and is currently available in 13- and 16-inch screen sizes. A 17-inch version was available between April 2006 and June 2012.',
            'price' => 300,
        ]);

        \App\Models\Products::create([
            'name' => 'Macbook Pro 13',
            'detail' => 'The MacBook Pro 13 is a line of Macintosh portable computers introduced in January 2006 by Apple Inc. It is the high-end model of the MacBook family and is currently available in 13- and 16-inch screen sizes. A 17-inch version was available between April 2006 and June 2012.',
            'price' => 200,
        ]);

        \App\Models\Products::create([
            'name' => 'Macbook Pro 13 Touch Bar',
            'detail' => 'The MacBook Pro 13 Touch Bar is a line of Macintosh portable computers introduced in January 2006 by Apple Inc. It is the high-end model of the MacBook family and is currently available in 13- and 16-inch screen sizes. A 17-inch version was available between April 2006 and June 2012.',
            'price' => 100,
        ]);

        \App\Models\Products::create([
            'name' => 'Samsung s22',
            'detail' => 'The Samsung s22 is a line of Macintosh portable computers introduced in January 2006 by Apple Inc. It is the high-end model of the MacBook family and is currently available in 13- and 16-inch screen sizes. A 17-inch version was available between April 2006 and June 2012.',
            'price' => 50,
        ]);

        \App\Models\Products::create([
            'name' => 'Samsung s21',
            'detail' => 'The Samsung s21 is a line of Macintosh portable computers introduced in January 2006 by Apple Inc. It is the high-end model of the MacBook family and is currently available in 13- and 16-inch screen sizes. A 17-inch version was available between April 2006 and June 2012.',
            'price' => 40,
        ]);

        \App\Models\Products::create([
            'name' => 'Samsung s20',
            'detail' => 'The Samsung s20 is a line of Macintosh portable computers introduced in January 2006 by Apple Inc. It is the high-end model of the MacBook family and is currently available in 13- and 16-inch screen sizes. A 17-inch version was available between April 2006 and June 2012.',
            'price' => 30,
        ]);

        
    }
}
