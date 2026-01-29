<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => '買い物']);
        Category::create(['name' => '仕事']);
        Category::create(['name' => '勉強']);
    }
}
