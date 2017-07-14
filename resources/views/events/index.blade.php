@extends('layouts.master')

@section('title', 'Scheduled Events')

@section('content')
	<div class="page-header">
		<h1>Scheduled Events</h1>
	</div>

	<div class="list-group">
		@foreach ($object as $events)
			<a href="{{ url('events', [$events->id]) }}" class="list-group-item">
				<h2 class="list-group-item-heading">{{ $events->event_name }}</h2>
				<p class="list-group-item-text">
					Event Date: {{ $events->event_date }}
				</p>
			</a>
		@endforeach


	</div>
@endsection