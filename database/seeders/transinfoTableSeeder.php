<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class transinfoTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\transinfo::class,4)->create();
    }
}
