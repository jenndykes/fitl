@extends('layouts.master')

@section('title', $event->event_name)
	
@section('content')
	<h1><?php echo $event->event_name; ?></h1>
		<p><?php echo $event->notes; ?></p>
		<p><?php echo $event->location; ?></p>
		<p>Date: <?php echo $event->event_date; ?></p>
		<p>Time: <?php echo $event->start_time; ?></p>
		<p><?php echo $event->event_budget; ?></p>
		<p><?php echo $event->ticket_vendor; ?></p>
		<p><?php echo $event->tickets_sold; ?></p>
@endsection