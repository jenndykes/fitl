<div class="row">
	<div class="form-group form-group-lg">
		<div class="col-sm-6">
	    	{!! Form::label('first_name', 'First Name') !!}
			{!! Form::text('first_name', null, ['class' => 'form-control']) !!}
		</div>  
		<div class="col-sm-6">
	    	{!! Form::label('last_name', 'Last Name') !!}
			{!! Form::text('last_name', null, ['class' => 'form-control']) !!}
		</div>  
  	</div>
</div>

<div class="row">
  	<div class="form-group form-group-lg">
  		<div class="col-sm-12">
  			{!! Form::label('street_address_1', 'Address Line 1') !!}
	  		{!! Form::text('street_address_1', null, ['class' => 'form-control']) !!}
  		</div>
  	</div>
</div>
<div class="row">
  	<div class="form-group form-group-lg">
  		<div class="col-sm-12">
  			{!! Form::label('street_address_2', 'Address Line 2') !!}
	  		{!! Form::text('street_address_2', null, ['class' => 'form-control']) !!}
  		</div>
  	</div>
</div>
<div class="row">
	<div class="form-group form-group-lg">
		<div class="col-sm-6">	
			{!! Form::label('city', 'City') !!}
			{!! Form::text('city', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-sm-2">
			{!! Form::label('state', 'State') !!}
			{!! Form::text('state', null, ['class' => 'form-control']) !!}
		</div>
		<div class="col-sm-4">
			{!! Form::label('zip_code', 'Zip') !!}
			{!! Form::text('zip_code', null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<div class="row">
  	<div class="form-group form-group-lg">
  		<div class="col-sm-12">
  			{!! Form::label('phone', 'Phone') !!}
	  		{!! Form::text('phone', null, ['class' => 'form-control']) !!}
  		</div>
  	</div>
</div>
<div class="row">
  	<div class="form-group form-group-lg">
  		<div class="col-sm-12">
  			{!! Form::label('email', 'Email') !!}
	  		{!! Form::text('email', null, ['class' => 'form-control']) !!}
  		</div>
  	</div>
</div>
<div class="row">
  	<div class="form-group form-group-lg">
  		<div class="col-sm-2">
  			{!! Form::label('num_tickets', 'Number of Tickets') !!}
	  		{!! Form::text('num_tickets', null, ['class' => 'form-control']) !!}
  		</div>
  	</div>
  	<div class="col-sm-10"></div>
</div>
<hr>