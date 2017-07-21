<!-- Header -->
<nav class="navbar navbar-inverse navbar-fixed-top navbar-stacked-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_menu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Concert Master Plan</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main_menu">
      <ul class="nav navbar-nav">
      <ul class="nav navbar-nav visible-xs visible-sm"> 
        <!--visible-xs, sm will make menu collapse on phone and small small tablets-->
        <li><a href="#">Home</a></li>
        <li><a href="{{ url('events') }}">Concerts</a></li>
     		<li><a href="#">Calendar</a></li>
     		<li><a href="#">Brainstorm</a></li>
     		<li><a href="#">Contacts</a></li>
     		<li><a href="#">Reports</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->


<div  class="container-fluid nav-buttons">
  <div class="col-md-12 hidden-xs hidden-sm nav-no-gutter">
      <div class="btn-group btn-group-lg btn-group-justified"  
        role="group" aria-label="...">
        <a href="{{ url('events') }}" class="btn btn-default active my-lg-btn"> 
        <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
        <a href="{{ url('events') }}" class="btn btn-default active my-lg-btn"> 
        <span class="glyphicon glyphicon-music" aria-hidden="true"></span> Concerts</a>
        <a href="{{ url('events') }}" class="btn btn-default active my-lg-btn"> 
        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Calendar</a>
        <a href="{{ url('events') }}" class="btn btn-default active my-lg-btn"> 
        <span class="glyphicon glyphicon-flash" aria-hidden="true"></span> Brainstorm</a>
        <a href="{{ url('events') }}" class="btn btn-default active my-lg-btn"> 
        <span class="glyphicon glyphicon-book" aria-hidden="true"></span> Contacts</a>
        <a href="{{ url('events') }}" class="btn btn-default active my-lg-btn"> 
        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Reports</a>
      </div>
  </div>
</div>
</nav>

<!-- End of Header -->
