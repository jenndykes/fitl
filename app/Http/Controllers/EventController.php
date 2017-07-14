<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        $data = array();
        $data['object'] = $events;

        return view('events/index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = new Event;
        $data = array();
        $data['event'] = $event;
        return view('events.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;

        //set the event's data from the form data
        $event->event_name = $request->event_name;
        $event->event_type = $request->event_type;
        $event->budget = $request->budget;
        $event->event_start_date = $request->event_start_date;
        $event->event_end_date = $request->event_end_date;

        //create the new event in the database
        if (!$event->save()) {
            $errors = $event->getErrors();
            
            // redirect back to the create page
            // and pass along the errors
            return redirect()
                ->action('EventController@create')
                ->with('errors', $errors)
                ->withInput();  
                //passes info on form back to the form on redirect, and repopulate form
        }

        // successfully added new event
        return redirect()
            ->action('EventController@index')
            ->with('message', '<div class="alert alert-success">New Event Added</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = array();
        $event = Event::findOrFail($id);
        $data['event'] = $event;
       
        return view('events/show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
