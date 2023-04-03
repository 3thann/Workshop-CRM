<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            StatusSeeder::class,
        ]);
        \App\Models\Business::factory(50)->create();
        \App\Models\Customer::factory(50)->create();
    }
}
