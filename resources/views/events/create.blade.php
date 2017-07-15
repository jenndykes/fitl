@extends('layouts.master')

@section('title', 'Create a New Event')

@section('content')

<div class="page-header">
	<h1>Create a New Event</h1>
</div>

{!! Form::model($event, ['action' => 'EventController@store']) !!}
	
	@include('events.partials.object_form')
	
	<button class="btn btn-primary">Create Event</button>

{!! Form::close() !!}

@endsection