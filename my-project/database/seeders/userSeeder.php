<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usertwo;

class userSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new usertwo();

        $user->name='Angeles';
        $user->surname='Gamero';
        $user->cell='987654321';
        $user->address='Cooperativa Santa Isabel';
        $user->id_marital=2;
        $user->status=1;
        $user->save();
    }
}
