<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TransactionInfo;
class TransactionInfoTableSeeder extends Seeder
{
    protected $model = TransactionInfo::class;

    public function run()
    {

        \App\Models\TransactionInfo::factory()->count(10)->create();
    }
}
