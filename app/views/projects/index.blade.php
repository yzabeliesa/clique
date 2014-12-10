@extends('main')

@section('content')

{{ $shit = Route::currentRouteName() }}

	<h1>Projects</h1>

	<table class="table table-striped table-hover ">
		<thead>
			<tr>
			  <th>#</th>
			  <th>Name</th>
			  <th>Description </th>
			  <th>Approved</th>
			  <th>Start Date </th>
			  <th>Start Time </th>
			  <th>End Date </th>
			  <th>End Time</th>
			</tr>
		</thead>
		<tbody>
		    @foreach($projects as $project)
		        <tr>
		        	<td>{{$project->id 			}}</td>
		        	<td>{{$project->name 		}}</td>
		        	<td>{{$project->description	}}</td>
		        	<td>{{$project->approval_ts	}}</td>
		        	<td>{{$project->start_date 	}}</td>
		        	<td>{{$project->start_time 	}}</td>
		        	<td>{{$project->end_date 	}}</td>
		        	<td>{{$project->end_time	}}</td>
		        </tr>
		    @endforeach
	    </tbody>
@stop
