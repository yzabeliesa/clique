{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}   
    <h2 class="form-signup-heading">Please Register</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>

    {{ Form::text('student_no', null, array('placeholder'=>'Student No')); }}
    {{ Form::text('first_name', null, array('placeholder'=>'First Name')); }}
    {{ Form::text('middle_name', null, array('placeholder'=>'Middle Name')); }}
    {{ Form::text('last_name', null, array('placeholder'=>'Last Name')); }}
    {{ Form::text('email_address', null, array('placeholder'=>'Email Address')); }}
    {{ Form::password('password', null, array('placeholder'=>'Password')); }}
    {{ Form::password('password_confirmation', null, array('placeholder'=>'Confirm Password')); }}
    {{ Form::text('current_committee', null, array('placeholder'=>'Committee')); }}
    {{ Form::text('birth_date', null, array('placeholder'=>'Birth Date')); }}
    {{ Form::text('sem_accepted', null, array('placeholder'=>'Sem Accepted')); }}
    {{ Form::text('college', null, array('placeholder'=>'College')); }}
    {{ Form::text('degree', null, array('placeholder'=>'Degree')); }}
    {{ Form::text('status_id', null, array('placeholder'=>'Status')); }}
    
    {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
{{ Form::close() }}


