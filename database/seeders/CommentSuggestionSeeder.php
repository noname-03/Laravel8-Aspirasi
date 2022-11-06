<?php

namespace Database\Seeders;

use App\Models\CommentSuggestion;
use Illuminate\Database\Seeder;

class CommentSuggestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CommentSuggestion::factory(20)->create();
    }
}
