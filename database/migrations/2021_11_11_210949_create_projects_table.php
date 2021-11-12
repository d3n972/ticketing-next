<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('projects', function(Blueprint $table){
      $table->id();
      $table->timestamps();
      $table->softDeletes();
      $table->string('name');
    });
    Schema::table('tickets', function(Blueprint $table){
      $table->unsignedBigInteger('project_id');

    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::dropIfExists('projects');
  }
}
