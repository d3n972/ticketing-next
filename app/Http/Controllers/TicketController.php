<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller{

  public function __construct(){
    $this->authorizeResource(Ticket::class, 'ticket');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(){
    return view('tickets.index', ['tickets' => Ticket::paginate(15)->withQueryString()]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request){
    //
  }

  /**
   * Display the specified resource.
   *
   * @param \App\Models\Ticket $ticket
   * @return \Illuminate\Http\Response
   */
  public function show(Ticket $ticket){
    $this->authorize('view', $ticket);
    return view('tickets.view',['ticket'=>$ticket]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param \App\Models\Ticket $ticket
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Ticket $ticket){
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param \App\Models\Ticket $ticket
   * @return \Illuminate\Http\Response
   */
  public function destroy(Ticket $ticket){
    //
  }
}
