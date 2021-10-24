<?php

namespace Database\Factories;

use App\Models\Classes;
use App\Models\Schools;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClassesFactory extends Factory {
 /**
  * The name of the factory's corresponding model.
  *
  * @var string
  */
 protected $model = Classes::class;

 /**
  * Define the model's default state.
  *
  * @return array
  */
 public function definition() {
  return [

   'year'      => $this->faker->year(),
   'level'     => $this->faker->city(),
   'serie'     => Str::random(1),
   'level'     => Str::random(1),
   'turn'      => "M",
   'school_id' => Schools::inRandomOrder()->first()->id,

  ];
 }
}
