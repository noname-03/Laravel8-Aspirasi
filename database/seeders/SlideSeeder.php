<?php

namespace Database\Seeders;

use App\Models\Slide;
use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slide::create([
            'title' => 'test',
            'description' => 'ini adalah description',
            'photo' => 'photo'
        ]);
        Slide::create([
            'title' => 'test',
            'description' => 'ini adalah description',
            'photo' => 'photo'
        ]);
        Slide::create([
            'title' => 'test',
            'description' => 'ini adalah description',
            'photo' => 'photo'
        ]);
        Slide::create([
            'title' => 'test',
            'description' => 'ini adalah description',
            'photo' => 'photo'
        ]);
    }
}
