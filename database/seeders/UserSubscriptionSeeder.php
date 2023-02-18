<?php

namespace Database\Seeders;

use App\Models\UserSubscrption;
use Illuminate\Database\Seeder;

class UserSubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserSubscrption::create([
            'name' => 'Gold', 
            'can_access' => '[1,2,3]'
        ]);

        UserSubscrption::create([
            'name' => 'Silver', 
            'can_access' => '[2,3]'
        ]);


        UserSubscrption::create([
            'name' => 'Bronze', 
            'can_access' => '[3]'
        ]);
    }
}
