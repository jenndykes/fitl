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
		<p><a href="{{ action('EventCompTicketController@create', $eventId) }}"
						class="btn btn-primary pull-left form-button">Add New Guest</a></p>
	
	</div>
	<hr>
	<div class="panel panel-default">
  	<!-- Default panel contents -->
  	<div class="panel-heading">Number of Comp Tickets assigned for this event: </div>
  	<div class="panel-body">

  	<!-- Table -->
  	<table class="table table-condensed" style="border-collapse: collapse;">
    	<thead>
    	<tr>
    		<th>Name</th><th>Tickets</th><th>Notified</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
    	</tr>
    	</thead>
  		<tbody>
  		<?php $i=0; ?>
		@foreach ($data as $comp_tickets)
		
			<tr data-toggle="collapse" data-target="#details{{$i}}" class="accordion-toggle"> 
				<td>{{ $comp_tickets->first_name.' '.$comp_tickets->last_name }}</td>			
				<td>{{ $comp_tickets->num_tickets }}</td>
				<td>{{ $comp_tickets->notified }}</td>
				<td><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true">
				</span></a></td>
				<td><a href="#details{{$i}}">Details</a></td>
				<td><a href="{{ action('EventCompTicketController@edit', $eventId, $comp_tickets->id) }}">Edit</a></td>
			</tr>
			<tr>
				<td colspan="12" class="hiddenRow">
					<div class="accordion-body collapse" id="details{{$i}}">
						<table class="table">
							<tr><td>{{ $comp_tickets->street_address_1 }}</td><td>{{ $comp_tickets->street_address_2 }}</td></tr>
							<tr><td>{{ $comp_tickets->city.' '.$comp_tickets->state.' '.$comp_tickets->zip_code }}</td><td></td></tr>
							<tr><td>{{ $comp_tickets->email }}</td><td>{{ $comp_tickets->phone }}</td></tr>
						</table>
					</div>
				</td>
			</tr>
			<?php $i++; ?>
		@endforeach
		</tbody>
	</table>	
	</div>

	</div>

</div>
@endsection


  

  
