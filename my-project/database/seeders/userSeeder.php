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

        $user->name='lol';
        $user->surname='lol';
        $user->cell='987654321';
        $user->address='lol';
        $user->id_marital=2;
        $user->save();
    }
}
