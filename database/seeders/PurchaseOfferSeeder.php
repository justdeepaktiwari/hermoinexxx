<?php

namespace Database\Seeders;
use App\Models\PurchaseOffer;

use Illuminate\Database\Seeder;

class PurchaseOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offer_plans = [
            ["subscription_id" => 1, "name" => 'Gold', "real_amount" => 200, "percentage_off" => 10, "discounted_amount" => 180, "duration" => 180],
            ["subscription_id" => 2, "name" => 'Silver', "real_amount" => 200, "percentage_off" => 10, "discounted_amount" => 180, "duration" => 180],
            ["subscription_id" => 3, "name" => 'Bronze', "real_amount" => 200, "percentage_off" => 10, "discounted_amount" => 180, "duration" => 180],
         ];
 
         foreach ($offer_plans as $plan) {
            PurchaseOffer::create($plan);
         }
    }
}
