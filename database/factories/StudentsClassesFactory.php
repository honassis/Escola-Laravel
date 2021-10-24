<?php

namespace Database\Factories;

use App\Models\Classes;
use App\Models\Students;
use App\Models\StudentsClasses;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsClassesFactory extends Factory {
 /**
  * The name of the factory's corresponding model.
  *
  * @var string
  */
 protected $model = StudentsClasses::class;

 /**
  * Define the model's default state.
  *
  * @return array
  */
 public function definition() {
  return [
   'student_id' => Students::inRandomOrder()->first()->id,
   'classes_id' => Classes::inRandomOrder()->first()->id,
  ];
 }
}
