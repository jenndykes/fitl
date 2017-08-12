<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


use App\Comp_ticket;

class EventCompTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  int  $eventId
     * @return \Illuminate\Http\Response
     */
    public function index($eventId)
    {

        $comp_tickets = Comp_ticket::where('event_id',$eventId)->get();

        $data = array();
        $data = $comp_tickets;
        //dd($data);

        return view('events.comp_tickets.index', compact('data', 'eventId'));

    }

    /**
     * Show the form for creating a new resource.
     * @param  int  $eventId
     * @return \Illuminate\Http\Response
     */
    public function create($eventId)
    {
        //$event_id = $eventId;
        //dd($event_id);
        $ticket = new Comp_ticket;
        $data = array();
        $data['ticket'] = $ticket; 
        //dd($ticket);       
        return view('events.comp_tickets.create', compact('data', 'eventId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $eventId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $eventId)
    {
        $ticket = new Comp_ticket;

        $ticket->event_id = $eventId;
        $ticket->first_name = $request->first_name;
        $ticket->last_name = $request->last_name;
        $ticket->street_address_1 = $request->street_address_1;
        $ticket->street_address_2 = $request->street_address_2;
        $ticket->city = $request->city;
        $ticket->state = $request->state;
        $ticket->zip_code = $request->zip_code;
        $ticket->phone = $request->phone;
        $ticket->email = $request->email;
        $ticket->num_tickets = $request->num_tickets;

        if (!$ticket->save()) {
            $errors = $ticket->getErrors();
            return redirect()
                ->action('EventCompTicketController@create')
                ->with('errors', $errors)
                ->withInput();  
        }

        return redirect()
            ->action('EventCompTicketController@index', $eventId)
            ->with('message', '<div class="alert alert-success">Comp Tickets added!</div>');
    }


    /**
     * Show the form for editing the specified resource.
     * @param  int  $eventId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($eventId, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $eventId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $eventId, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $eventId
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($eventId, $id)
    {
        //
    }
}
