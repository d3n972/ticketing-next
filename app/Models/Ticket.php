<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model{
  use HasFactory;
  use SoftDeletes;


  public function Assignee(){
    return $this->hasOne(User::class,  'id','assignee');
  }

  public function Author(){
    return $this->hasOne(User::class, 'id','author');
  }

  public function Category(){
    return $this->hasOne(Categories::class);
  }

  public function Project(){
    return $this->hasOne(Project::class);
  }

}
