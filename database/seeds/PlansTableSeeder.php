<?php

use App\Entities\Plan;
use Illuminate\Database\Seeder;

class PlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Basic',
                'credits' => 100,
                'price' => 4.99
            ],
            [
                'name' => 'Medium',
                'credits' => 250,
                'price' => 9.99
            ],
            [
                'name' => 'Premium',
                'credits' => 1000,
                'price' => 19.99
            ],
        ];

        foreach ($plans as $plan) {
            Plan::create([
                'name' => $plan['name'],
                'credits' => $plan['credits'],
                'price' => $plan['price'],
            ]);
        }
    }
}
