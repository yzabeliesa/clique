@extends('main')

@section('content')

{{ $shit = Route::currentRouteName() }}

	<h1>Projects</h1>

	<table class="table table-striped table-hover ">
		<thead>
			<tr>
			  <!--<th>#</th>-->
			  <th>Name</th>
			  <th>Description </th>
			  <th>Approved</th>
			  <th>Start Date </th>
			  <th>Start Time </th>
			  <th>End Date </th>
			  <th>End Time</th>
			  <td></td>
			</tr>
		</thead>
		<tbody>
		    @foreach($projects as $project)
		        <tr>
		        	<!--<td>{{$project->id 			}}</td>-->
		        	<td>{{$project->name 		}}</td>
		        	<td>{{$project->description	}}</td>
		        	<td>{{$project->approval_ts	}}</td>
		        	<td>{{$project->start_date 	}}</td>
		        	<td>{{$project->start_time 	}}</td>
		        	<td>{{$project->end_date 	}}</td>
		        	<td>{{$project->end_time	}}</td>
		        	<td>{{ HTML::link('projects/show/'.$project->id, 'View', ['class' => 'btn btn-xs btn-primary btn-info']) }}</td>

		        </tr>
		    @endforeach
	    </tbody>
	 </table>


	{{ link_to('', 'Submit a Project', ['class' => 'btn btn-large btn-success pull-right']) }}


@stop
