<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            "Leads",
            "Prosect",
            "Client"
        ];
        
        foreach($datas as $data) {
            \DB::table('status')->insert(['name'=>$data]);
        }
    }
}
