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
      <!-- <ul class="nav navbar-nav visible-xs"> visible-xs will make menu collapse on phone -->

        <li><a href="#">Home</a></li>
        <li><a href="{{ url('events') }}">Events</a></li>
     		<li><a href="#">Calendar</a></li>
     		<li><a href="#">Brainstorm</a></li>
     		<li><a href="#">Contacts</a></li>
     		<li><a href="#">Reports</a></li>
      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- End of Header -->
