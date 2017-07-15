@extends('layouts.master')

@section('title', 'Edit a Scheduled Event')

@section('content')

<div class="page-header">
	<h1>Edit this Event</h1>
</div>

{!! Form::model($event, 
	[
		'action' => ['EventController@update', $event->id],
		'method' => 'put'
	]) !!}
	
	@include('events.partials.object_form')
	
	<button class="btn btn-primary">Update Event</button>

{!! Form::close() !!}

@endsection