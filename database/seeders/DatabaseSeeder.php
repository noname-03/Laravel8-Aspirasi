<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call([
            UserTableSeeder::class,
            CategoryTableSeeder::class,
            DprdSeeder::class,
            AspirationTableSeeder::class,
            CommentAspirationTableSeeder::class,
            SuggestionTableSeeder::class,
            CommentSuggestionSeeder::class,
        ]);
    }
}
