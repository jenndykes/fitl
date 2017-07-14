@extends('layouts.master')

@section('title', 'Create a New Event')

@section('content')

<div class="page-header">
	<h1>Create a New Event</h1>
</div>

{!! Form::model($event, ['action' => 'EventController@store']) !!}
	<div class="form-group">
    	{!! Form::label('event_name', 'Event Name') !!}
		{!! Form::text('event_name', '', ['class' => 'form-control']) !!}    
  	</div>

  	<div class="form-group">
  		{!! Form::label('event_type', 'Event Type') !!}
  		{!! Form::text('event_type', '', ['class' => 'form-control']) !!}
  	</div>

  	<div class="form-group">
  		{!! Form::label('budget', 'Total Budget') !!}
  		{!! Form::text('budget', '', ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('start_date', 'Start Date') !!}
		{!! Form::text('start_date', '', ['class' => 'form-control']) !!}
	</div>

	<button class="btn btn-primary">Create Event</button>

{!! Form::close() !!}

@endsection