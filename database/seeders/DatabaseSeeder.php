<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Aziz Muslim',
            'email' => 'azizmuslim@mail.com',
            'password' => bcrypt('azizmuslim'),
        ]);

        Product::factory()->count(20)->create();
        Customer::factory()->count(20)->create();
    }
}
