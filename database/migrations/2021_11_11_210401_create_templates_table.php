<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatesTable extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('templates', function(Blueprint $table){
      $table->id();
      $table->timestamps();
      $table->softDeletes(); //quasi "disabled" field
      $table->string('name');
      $table->longText('text');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::dropIfExists('templates');
  }
}
