<div align='center'>
	{{ link_to('projects/index', 'Projects', ['class' => 'btn btn-large btn-danger btn-block']) }}
	{{ link_to('', 'Logistics', ['class' => 'btn btn-large btn-primary btn-block']) }}
	{{ link_to('', 'Finance', ['class' => 'btn btn-large btn-warning btn-block']) }}
	{{ link_to('', 'Marketing', ['class' => 'btn btn-large btn-success btn-block']) }}
	{{ link_to('', 'Externals', ['class' => 'btn btn-large btn-info btn-block']) }}
	{{ link_to('', 'Internals', ['class' => 'btn btn-large btn-default btn-block']) }}
	fuck yeah rainbows

	<br/><br/>
	{{ HTML::link('users/{Auth::user()->id}', Auth::user()->first_name)}}
</div>