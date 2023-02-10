<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PacijentSeeder;
use Database\Seeders\GradSeeder;
use Database\Seeders\LekarSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $lseeder = new LekarSeeder();
        $gseeder = new GradSeeder();
        $pseeder = new PacijentSeeder();

        $gseeder->run();
        $lseeder->run();
        $pseeder->run();
    }
}
