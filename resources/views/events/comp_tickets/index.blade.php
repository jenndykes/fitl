@extends('layouts.master')

@section('title', 'Comp Tickets')

@section('content')

<div class="col-xs-12 col-md-6 col-md-offset-3">
	<div>
		<div class="page-header">
			<h1>Comp Tickets</h1>
		</div>
	</div>
	
	<div class="row">
		<p><a href="{{ action('EventCompTicketController@create', $ticket->event_id) }}"
						class="btn btn-primary pull-left form-button">Add New Guest</a></p>
	
	</div>
	<hr>

	<div class="panel panel-default">
  	<!-- Default panel contents -->
  	<div class="panel-heading">Number of Comp Tickets assigned for this event: </div>
  	<div class="panel-body"></div>

  	<!-- Table -->
  	<table class="table">
    	<tr>
    		<td>Name</td><td># of Tickets</td><td>Notified</td><td></td><td></td>
    	</tr>
  
			@foreach ($ticket as $comp_tickets)
			<tr> 
				<td>{{ $comp_tickets->first_name.' '.$comp_tickets->last_name }}</td>			
				<td>{{ $comp_tickets->num_tickets }}</td>
				<td>{{ $comp_tickets->notified }}</td>
				<td><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true">
				</span></a></td>
				<td><a href="{{ action('EventCompTicketController@edit', $comp_tickets->id) }}">Edit</a></td>
			</tr>
			
		@endforeach
	</table>	

	</div>

</div>
@endsection


  

  
