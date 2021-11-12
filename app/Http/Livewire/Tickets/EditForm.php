<?php

namespace App\Http\Livewire\Tickets;

use \Illuminate\Http\Request;
use Livewire\Component;

class EditForm extends Component{
  public $message;
  public $time;


  public $listeners = [
    'work_time_elapsed'
  ];

  public function work_time_elapsed($time){
    $this->time = $time;
  }

  public function save(Request $r){
    dd($this);
  }

  public function render(){
    return view('livewire.tickets.edit-form');
  }
}
