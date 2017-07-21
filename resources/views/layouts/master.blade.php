<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
   		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ConcertMP - @yield('title')</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
	</head>
	<body>
		<div class="wrapper">

			@include('shared.header')
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
					
  					
						@include('shared.errors')
						@include('shared.message')

						@yield('content')
					</div>
				</div>
			</div>

			
			@include('shared.footer') 

			<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js') }}"></script>
			<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
			<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
		</div>
	</body>
</html>