<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order1 = new order();
      
        $order1->overall_weight=1.8;
        $order1->total_price=1.9;
        $order1->status=1;
        $order1->save();
    }
}
