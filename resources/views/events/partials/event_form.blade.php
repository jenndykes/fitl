<div class="row">
	<div class="form-group form-group-lg">
		<div class="col-sm-12">
    	{!! Form::label('event_name', 'Event Name') !!}
		{!! Form::text('event_name', null, ['class' => 'form-control']) !!}
		</div>  
  	</div>
</div>

<div class="row">
  	<div class="form-group form-group-lg">
  		<div class="col-sm-6">
  			{!! Form::label('event_type', 'Event Type') !!}
	  		{!! Form::text('event_type', null, ['class' => 'form-control']) !!}
  		</div>
  		<div class="col-sm-6">
  		  		{!! Form::label('budget', 'Total Budget') !!}
	  		<div class="input-group">
	  			<span class="input-group-addon">$</span> 
  				{!! Form::text('budget', null, ['class' => 'form-control']) !!}
	  			<span class="input-group-addon">.00</span>
	  		</div>
  		</div>
	</div>
</div>


<div class="row">
	<div class="form-group form-group-lg">
		<div class="col-sm-3">	
			{!! Form::label('event_start_date', 'Start Date') !!}
			{!! Form::text('event_start_date', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-sm-3">
			{!! Form::label('event_start_time', 'Start Time') !!}
			{!! Form::text('event_start_time', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-sm-3">
			{!! Form::label('event_end_date', 'End Date') !!}
			{!! Form::text('event_end_date', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-sm-3">
			{!! Form::label('event_end_time', 'End Time') !!}
			{!! Form::text('event_end_time', null, ['class' => 'form-control']) !!}
		</div>

	</div>
</div>
<hr>