<div align='center'>
	{{ Form::button('Projects', array('class'=>'btn btn-large btn-danger btn-block'))}}
	{{ Form::button('Logistics', array('class'=>'btn btn-large btn-primary btn-block'))}}
	{{ Form::button('Finance', array('class'=>'btn btn-large btn-warning btn-block'))}}
	{{ Form::button('Marketing', array('class'=>'btn btn-large btn-success btn-block'))}}
	{{ Form::button('Externals', array('class'=>'btn btn-large btn-info btn-block'))}}
	{{ Form::button('Internals', array('class'=>'btn btn-large btn-default btn-block'))}}
	fuck yeah rainbows

	<br/><br/>
	{{ HTML::link('users/{Auth::user()->id}', Auth::user()->first_name)}}
</div>