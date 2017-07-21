@extends('layouts.master')

@section('title', 'Scheduled Events')

@section('content')

<div class="col-xs-12 col-md-8 col-md-offset-2">

	<div class="row">
		<div class="jumbotron">
		    <h1>Scheduled Events</h1>
			<h3></h3>
		    <p><a href="{{ action('EventController@create') }}"
						class="btn btn-primary pull-right">Add New Event</a></p>
		</div>
		<hr>
	</div>
</div>
<div class="col-xs-12 col-md-8 col-md-offset-2">
	<div class="list-group">
		@foreach ($event as $events)

		<div class="panel-group">
			<div class="panel panel-default"> 
			<!--<a href="{{ url('events', [$events->id]) }}" class="list-group-item">
				<h2 class="list-group-item-heading">{{ $events->event_name }}</h2>
				<p class="list-group-item-text"> 
				<div class="media">
					<div class="media-left"> 
					<img src="shared/getImage.blade.php?id={{$events->id}}" class="media-object" 
						style="width:60px">
					</div>-->
				<div class="panel-heading"><h3>
					{{ $events->event_name }} </h3></div>
				<div class="panel-body">
					Event Date: {{ $events->event_start_date }}<br>
					Start Time: {{ $events->event_start_time }}
				
					<a href="{{ action('EventController@show', $events->id) }}"
					class="btn btn-primary pull-right form-button">Open</a>
				</div>
				<!--</p> 
				</div>
				</a> -->
			</div>
		</div>
		@endforeach


	</div>
</div>
@endsection