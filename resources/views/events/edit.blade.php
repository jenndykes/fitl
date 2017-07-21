@extends('layouts.master')

@section('title', 'Edit a Scheduled Event')

@section('content')

<div class="col-md-8 col-md-offset-2">

<div class="page-header">
	<h1>Edit this Event</h1>
</div>

{!! Form::model($event, 
	[
		'action' => ['EventController@update', $event->id],
		'method' => 'put'
	]) !!}
	
	@include('events.partials.event_form')
	
	<button class="btn btn-primary form-button">Update Event</button>

{!! Form::close() !!}

@include('events.partials.delete_object')

</div>

@endsection