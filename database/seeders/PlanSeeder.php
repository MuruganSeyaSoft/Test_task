<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
  
class PlanSeeder extends Seeder
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
                'name' => 'BasicProductName Details', 
                'slug' => 'basic', 
                'stripe_plan' => 'price_1MvO7RSHxDhBCF0WW89URPeW', 
                'price' => 20, 
                'description' => 'Basic product Description'
            ]
           
        ];
  
        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}