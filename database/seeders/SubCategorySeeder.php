<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create([
            'category_id' => '1',
            'name' => 'Pemukiman',
        ]);
        SubCategory::create([
            'category_id' => '2',
            'name' => 'Non Pemukiman',
        ]);
        SubCategory::create([
            'category_id' => '2',
            'name' => 'Pendidikan',
        ]);
        SubCategory::create([
            'category_id' => '2',
            'name' => 'Kesehatan',
        ]);
        SubCategory::create([
            'category_id' => '2',
            'name' => 'Sosial',
        ]);
        SubCategory::create([
            'category_id' => '2',
            'name' => 'Budaya',
        ]);
        SubCategory::create([
            'category_id' => '2',
            'name' => 'Perekonomian',
        ]);
        SubCategory::create([
            'category_id' => '2',
            'name' => 'Mediasi',
        ]);
    }
}
