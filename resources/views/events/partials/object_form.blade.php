<div class="form-group">
    	{!! Form::label('event_name', 'Event Name') !!}
		{!! Form::text('event_name', null, ['class' => 'form-control']) !!}    
  	</div>

  	<div class="form-group">
  		{!! Form::label('event_type', 'Event Type') !!}
  		{!! Form::text('event_type', null, ['class' => 'form-control']) !!}
  	</div>

  	<div class="form-group">
  		{!! Form::label('budget', 'Total Budget') !!}
  		{!! Form::text('budget', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('event_start_date', 'Start Date') !!}
		{!! Form::text('event_start_date', null, ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('event_end_date', 'End Date') !!}
		{!! Form::text('event_end_date', null, ['class' => 'form-control']) !!}
	</div>
