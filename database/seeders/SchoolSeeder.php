<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Schools;
use App\Models\Classes;
use App\Models\Students;
use App\Models\StudentsClasses;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $schools=  Schools::factory()
            ->count(50)
            ->create();
            $classes = Classes::factory()
            ->count(3)
            ->create();

    }
}
