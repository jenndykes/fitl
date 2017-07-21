@extends('layouts.master')

@section('title', $event->event_name)
	
@section('content')

<div class="col-md-2"></div>
<div class="col-md-10"> 
	@include('events.partials.event_jumbotron')
</div>
<div class="col-md-2"></div>
<div class="col-md-10">

		
			<p>{{ $event->notes }}</p>
			<p>{{ $event->location }}</p>
			
			<p>Time: {{$event->event_start_time }}</p>
			<p>{{ $event->budget }}</p>
			<p>{{ $event->ticket_vendor }}</p>
			<p>{{ $event->tickets_sold }}</p>

	<div>
		<a href="{{ action('EventCompTicketController@index', $event->id) }}"
			class="btn btn-default pull-right">Comp Tickets</a>
	</div>
</div>


@endsection