<hr>

<h2>Delete this event:</h2>

{!! Form::open([
	'action' => ['EventController@destroy', $event->id],
	'method' => 'delete',
	'class' => 'delete-object'
]) !!}

<button type="submit" class="btn btn-danger form-button">Delete Event</button>

{!! Form::close() !!}