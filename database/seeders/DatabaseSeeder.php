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
        \App\Models\User::factory()->create([
            'name'=> 'admin',
            'email' => 'admin@estore.com',
            'gender' => 'M',
            'password' => 'admin123',
            'role' => 'admin',
        ]);

        \App\Models\Products::factory()->create([

        ]);
    }
}
