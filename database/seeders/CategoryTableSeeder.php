<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Pengaspalan jalan baru',
        ]);

        Category::create([
            'name' => 'Perbaikan jembatan',
        ]);

        Category::create([
            'name' => 'Rehabilitasi saluran',
        ]);

        Category::create([
            'name' => 'Perbaikan taman lingkungan',
        ]);
    }
}
