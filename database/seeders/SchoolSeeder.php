<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\Schools;
use App\Models\Students;
use App\Models\StudentsClasses;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder {
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run() {
  $qtd      = 20;
  $students = Students::factory()
   ->count($qtd)
   ->create();
  $schools = Schools::factory()
   ->count($qtd)
   ->create();
  $classes = Classes::factory()
   ->count($qtd)
   ->create();
  $classesofstudents = StudentsClasses::factory()
   ->count($qtd)->create();

 }
}
