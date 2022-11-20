<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title' => 'Ini adalah judul',
            'description' => 'Ini adalah bagian dari deskripsi about  bagian dari deskripsi about  bagian dari deskripsi about  bagian dari deskripsi about  bagian dari deskripsi about  bagian dari deskripsi about  bagian dari deskripsi about  bagian dari deskripsi about  bagian dari deskripsi about  bagian dari deskripsi about  bagian dari deskripsi about  bagian dari deskripsi about  bagian dari deskripsi about'
        ]);
    }
}
