@extends('main')

@section('content')
{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}   
    <h2 class="form-signup-heading">Please Register</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    {{ Form::text('student_no', null, array('class'=>'form-control','placeholder'=>'Student No (i.e. 2000-12345)')); }}
    {{ Form::text('first_name', null, array('class'=>'form-control','placeholder'=>'First Name')); }}
    {{ Form::text('middle_name', null, array('class'=>'form-control','placeholder'=>'Middle Name')); }}
    {{ Form::text('last_name', null, array('class'=>'form-control','placeholder'=>'Last Name')); }}
    {{ Form::text('email_address', null, array('class'=>'form-control','placeholder'=>'Email Address')); }}

    {{ Form::password('password', array('class'=>'form-control','placeholder'=>'Password')); }}
    {{ Form::password('password_confirmation', array('class'=>'form-control','placeholder'=>'Confirm Password')); }}
  
    {{ Form::text('current_committee', null, array('class'=>'form-control','placeholder'=>'Committee')); }}
    {{ Form::text('birth_date', null, array('class'=>'form-control','placeholder'=>'Birth Date')); }}
    {{ Form::text('sem_accepted', null, array('class'=>'form-control','placeholder'=>'Sem Accepted')); }}
    {{ Form::text('college', null, array('class'=>'form-control','placeholder'=>'College')); }}
    {{ Form::text('degree', null, array('class'=>'form-control','placeholder'=>'Degree')); }}

    {{ Form::select('status_id', array('1' => 'Active', '2' => 'Inactive'), '1', array('class' => 'form-control')) }}
    
    {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}
@stop




