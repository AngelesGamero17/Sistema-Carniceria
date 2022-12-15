<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marital;

class maritalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marital = new marital();
      
        $marital->users_marital='Soltero';
        $marital->save();

        $marital2 = new marital();
        $marital2->users_marital='Casado';
        $marital2->save();

        $marital3 = new marital();
        $marital3->users_marital='Viudo';
        $marital3->save();

        $marital4 = new marital();
        $marital4->users_marital='Divorciado';
        $marital4->save();
    }
}
