<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => '給料',
            'color' => '#E85A70',
            'is_income' => true,
        ]);
        Category::create([
            'name' => '不労所得',
            'color' => '#4EA1D5',
            'is_income' => true,
        ]);
        Category::create([
            'name' => '臨時収入',
            'color' => '#45455',
            'is_income' => true,
        ]);
        Category::create([
            'name' => '食費',
            'color' => '#E85A70',
            'is_income' => false,
        ]);
        Category::create([
            'name' => '日用日',
            'color' => '#4EA1D5',
            'is_income' => false,
        ]);
        Category::create([
            'name' => '交通費',
            'color' => '#45455',
            'is_income' => false,
        ]);
    }
}
