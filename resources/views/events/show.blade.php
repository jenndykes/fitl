@extends('layouts.master')

@section('title', $event->event_name)
	
@section('content')

<div class="page-header">
	<a href="{{ action('EventController@edit', $event->id) }}"
		class="btn btn-info pull-right">Edit</a>
	<h1><?php echo $event->event_name; ?></h1>
</div>
		<p><?php echo $event->notes; ?></p>
		<p><?php echo $event->location; ?></p>
		<p>Date: <?php echo $event->event_start_date; ?></p>
		<p>Time: <?php echo $event->event_start_time; ?></p>
		<p><?php echo $event->budget; ?></p>
		<p><?php echo $event->ticket_vendor; ?></p>
		<p><?php echo $event->tickets_sold; ?></p>

<h2>Comp Tickets</h2>

@foreach ($event->comp_tickets as $ticket)
	<p>{{ $ticket->last_name }}</p>
	<p>{{ $ticket->num_tickets }}</p><br>
	<div><small>{{ $ticket->created_at->diffForHumans() }}</small></div>
@endforeach


@endsection