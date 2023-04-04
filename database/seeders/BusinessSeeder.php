<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            "Pas d'entreprise",
        ];

        foreach($datas as $data) {
            \DB::table('business')->insert(['name'=>$data]);
        }
    }
}
