<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\condition;

class conditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $condition = new condition();
      
      $condition->conditions_products='disponible';
      $condition->save();
      

      $condition2 = new condition();
      $condition2->conditions_products='no disponible';
      $condition2->save();
    }
}
