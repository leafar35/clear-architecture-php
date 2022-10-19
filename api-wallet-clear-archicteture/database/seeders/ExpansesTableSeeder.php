<?php

namespace Database\Seeders;

use App\Models\expanses;
use Illuminate\Database\Seeder;

class ExpansesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        expanses::truncate();
        expanses::insert(
            ["id"=> 4,"description"=> "Uma bala","amount"=> 1.5,"type"=> "Saída","frequency"=> "Recorrente","date"=> "2022-05-01"],
            ["id"=> 5,"description"=> "Uma bala de prata","amount"=> 1.5,"type"=> "Saída","frequency"=> "Recorrente","date"=> "2022-05-01"],
            ["id"=> 6,"description"=> "Uma bala de prata","amount"=> 1.5,"type"=> "Saída","frequency"=> "Recorrente","date"=> "2022-05-01"]
        );
    }
}
