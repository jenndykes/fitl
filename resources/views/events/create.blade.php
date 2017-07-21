@extends('layouts.master')

@section('title', 'Create a New Event')

@section('content')

<div class="col-md-8 col-md-offset-2">
<div class="page-header">
	<h1>Create a New Event</h1>
</div>

<div class="create-form"> 
	{!! Form::model($event, ['action' => 'EventController@store']) !!}
		
		@include('events.partials.event_form')
		
		<button class="btn btn-primary form-button">Create Event</button>

	{!! Form::close() !!}
</div>

</div>

@endsection