<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Clique</title>

	 {{ HTML::style('css/base.css')}}
	 {{ HTML::script('js/min/expanded/scripts_header.min.js') }}

</head>
<body>
	<div>

		<div class="navbar navbar-inverse">
		  <div class="navbar-header">
		    <a class="navbar-brand" href="/">Clique</a>
		  </div>
		  <div class="navbar-collapse collapse navbar-inverse-collapse">
		    <ul class="nav navbar-nav navbar-right">


                @if(!Auth::check())
                    <li>{{ HTML::link('users/register', 'Register') }}</li>   
                    <li>{{ HTML::link('users/login', 'Login') }}</li>   
                @else
                    <li>{{ HTML::link('users/logout', 'Logout') }}</li>
                @endif


		      <!-- For future use
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Action</a></li>
		          <li><a href="#">Another action</a></li>
		          <li><a href="#">Something else here</a></li>
		          <li class="divider"></li>
		          <li><a href="#">Separated link</a></li>
		        </ul>
		      </li>
		  	  -->
		    </ul>
		  </div>
		</div>
		      
		<div class="container">
			@if(Session::has('message'))
				<div class="alert alert-dismissable alert-info">
					<button type="button" class="close" data-dismiss="alert">×</button>
		  			<h4>Warning!</h4>
			            <p>{{ Session::get('message') }}</p>
			    </div>
		    @endif
	        {{ $content }}
	        
	    </div>
	</div>
</body>
<footer>

	 {{ HTML::script('js/min/expanded/scripts_footer.min.js') }}

</footer>
</html>
