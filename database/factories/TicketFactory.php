<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TicketFactory extends Factory{
  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition(){
    return [
      'author' => rand(0, 10),
      'assignee' => rand(0, 10),
      'title' => $this->faker->text(128),
      'text' => $this->faker->text(1280),
      'category_id' => 0,
      'project_id' => 0
    ];
  }
}
