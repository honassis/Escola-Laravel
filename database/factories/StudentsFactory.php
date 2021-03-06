<?php

namespace Database\Factories;

use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory {
 /**
  * The name of the factory's corresponding model.
  *
  * @var string
  */
 protected $model = Students::class;

 /**
  * Define the model's default state.
  *    protected $fillable = [
  * @return array
  */
 public function definition() {
  return [
   'name'     => $this->faker->name(),
   'email'    => $this->faker->email(),
   'tel'      => "(85) 00000-0000",
   'birthday' => $this->faker->date(),
   'genre'    => "M",
  ];
 }
}
