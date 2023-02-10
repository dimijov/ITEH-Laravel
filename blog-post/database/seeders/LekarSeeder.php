<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lekar;

class LekarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lekar::factory()->count(30)->create();
    }
}
