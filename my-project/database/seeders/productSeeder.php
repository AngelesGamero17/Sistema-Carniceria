<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = new product();

        $products->name='Foca';
        $products->unit_price=2.8;
        $products->stock=9;
        $products->id_condition=1;
        $products->status=1;
        $products->save();
    }
}
