<?php

namespace Database\Seeders;

use App\Models\Dprd;
use Illuminate\Database\Seeder;

class DprdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dprd::create([
            'name' => 'Kota Cirebon 1',
        ]);

        Dprd::create([
            'name' => 'Kota Cirebon 2',
        ]);

        Dprd::create([
            'name' => 'Kota Cirebon 3',
        ]);
    }
}
