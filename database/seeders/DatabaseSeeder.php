<?php

namespace Database\Seeders;

use Database\Factories\TemplatesFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run(){
    \App\Models\User::factory(10)->create();
    $this->call([
      ProjectSeeder::class,
      CategoriesSeeder::class,
      TemplatesSeeder::class,
      TicketSeeder::class
    ]);

  }
}
