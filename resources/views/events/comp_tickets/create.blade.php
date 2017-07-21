@extends('layouts.master')

@section('title', 'Comp Tickets')

@section('content')

<div class="col-md-8 col-md-offset-2">
<div class="page-header">
	<h1>Add Comp Tickets for a Guest</h1>
</div>

<div class="create-form"> 
	{!! Form::open(['route' => ['events.comp_tickets.store', $event_id]]) !!}
		
		@include('events.comp_tickets.partials.comp_ticket_form')
		
		<button class="btn btn-primary form-button">Add Guest</button>

	{!! Form::close() !!}
</div>

</div>


@endsection