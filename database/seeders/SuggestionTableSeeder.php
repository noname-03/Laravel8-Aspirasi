<?php

namespace Database\Seeders;

use App\Models\Suggestion;
use Illuminate\Database\Seeder;

class SuggestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Suggestion::factory(20)->create();
    }
}
