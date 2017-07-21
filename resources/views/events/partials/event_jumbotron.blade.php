<div class="jumbotron">

    <h1>{{ $event->event_name }}</h1>
    
    <hr>
    <div class="row">
	    <div class="col-xs-12 col-md-6 text-muted">
			<h3>{{ $event->event_start_date }}</h3>
			<h3>{{ $event->event_start_time }}</h3>
		</div>
		<div class="col-xs-12 col-md-6">
			<label class="label label-success">
			<span class="glyphicon glyphicon-hourglass">
			{{ $event->created_at->diffForHumans() }} until event</span></label> 
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		<hr>
	    	<p><a href="{{ action('EventController@edit', $event->id) }}"
				class="btn btn-default pull-right form-button">Edit Event Info</a></p>
		</div>
	</div>
</div>