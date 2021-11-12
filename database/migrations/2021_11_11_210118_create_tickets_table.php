<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up(){
    Schema::create('tickets', function(Blueprint $table){
      $table->id();
      $table->timestamps();
      $table->softDeletes();
      //fields
      $table->foreignId('author')->constrained('users', 'id');
      $table->foreignId('assignee');
      $table->string('title');
      $table->longText('text');
      $table->timestamp('due_at')->nullable();

    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down(){
    Schema::dropIfExists('tickets');
  }
}
