<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pacijent;

class PacijentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Pacijent::factory()->count(50)->create();
    }
}
