<?php

namespace Database\Seeders;

use App\Models\Home;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Home::insert([
            [
                "name" => "achraf",
                "age" => 24,
                "passed" => true,
                "created_at"=> Carbon::now()
            ],
            [
                "name" => "zack",
                "age" => 22,
                "passed" => true,
                "created_at"=> Carbon::now()

            ]

            ]);
    }
}
