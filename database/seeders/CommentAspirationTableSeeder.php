<?php

namespace Database\Seeders;

use App\Models\CommentAspirations;
use Illuminate\Database\Seeder;

class CommentAspirationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CommentAspirations::factory(20)->create();
    }
}
