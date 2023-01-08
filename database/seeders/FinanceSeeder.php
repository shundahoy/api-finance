<?php

namespace Database\Seeders;

use App\Models\Finance;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class FinanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 10; $i = $i + 1) {
            Finance::create([
                'user_id' => 1,
                'category_id' => 1,
                'is_income' => true,
                'price' => 1000,
                'memo' => "memo",
                'date' =>  date('2023-01-01'),
                'created_at' => new DateTime(),
            ]);
            Finance::create([
                'user_id' => 1,
                'category_id' => 2,
                'is_income' => true,
                'price' => 2000,
                'memo' => "memo",
                'date' =>  date('2023-01-02'),
                'created_at' => new DateTime(),
            ]);
            Finance::create([
                'user_id' => 1,
                'category_id' => 3,
                'is_income' => true,
                'price' => 3000,
                'memo' => "memo",
                'date' =>  date('2023-01-03'),
                'created_at' => new DateTime(),
            ]);
        }

        for ($i = 0; $i < 10; $i = $i + 1) {
            Finance::create([
                'user_id' => 1,
                'category_id' => 1,
                'is_income' => true,
                'price' => 1000,
                'memo' => "memo",
                'date' =>  date('2023-02-01'),
                'created_at' => new DateTime(),
            ]);
            Finance::create([
                'user_id' => 1,
                'category_id' => 2,
                'is_income' => true,
                'price' => 2000,
                'memo' => "memo",
                'date' =>  date('2023-02-02'),
                'created_at' => new DateTime(),
            ]);
            Finance::create([
                'user_id' => 1,
                'category_id' => 3,
                'is_income' => true,
                'price' => 3000,
                'memo' => "memo",
                'date' =>  date('2023-02-03'),
                'created_at' => new DateTime(),
            ]);
        }



        // 支出
        for ($i = 0; $i < 10; $i = $i + 1) {
            Finance::create([
                'user_id' => 1,
                'category_id' => 4,
                'is_income' => false,
                'price' => 1000,
                'memo' => "memo",
                'date' =>  date('2023-01-01'),
                'created_at' => new DateTime(),
            ]);
            Finance::create([
                'user_id' => 1,
                'category_id' => 5,
                'is_income' => false,
                'price' => 2000,
                'memo' => "memo",
                'date' =>  date('2023-01-02'),
                'created_at' => new DateTime(),
            ]);
            Finance::create([
                'user_id' => 1,
                'category_id' => 6,
                'is_income' => false,
                'price' => 1000,
                'memo' => "memo",
                'date' =>  date('2023-01-03'),
                'created_at' => new DateTime(),
            ]);
        }
        for ($i = 0; $i < 10; $i = $i + 1) {
            Finance::create([
                'user_id' => 1,
                'category_id' => 4,
                'is_income' => false,
                'price' => 1000,
                'memo' => "memo",
                'date' =>  date('2023-02-01'),
                'created_at' => new DateTime(),
            ]);
            Finance::create([
                'user_id' => 1,
                'category_id' => 5,
                'is_income' => false,
                'price' => 2000,
                'memo' => "memo",
                'date' =>  date('2023-02-02'),
                'created_at' => new DateTime(),
            ]);
            Finance::create([
                'user_id' => 1,
                'category_id' => 6,
                'is_income' => false,
                'price' => 1000,
                'memo' => "memo",
                'date' =>  date('2023-02-03'),
                'created_at' => new DateTime(),
            ]);
        }
    }
}
