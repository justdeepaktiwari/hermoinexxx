<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Stripe\Service\ProductService;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call([
            PermissionTableSeeder::class,
            CreateAdminUserSeeder::class,
            UserSubscriptionSeeder::class,
            PurchaseOfferSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
