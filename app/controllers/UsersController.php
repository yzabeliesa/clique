<?php
 
class UsersController extends BaseController {

    protected $layout = "main";

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
    	$this->beforeFilter('auth', array('only'=>array('getDashboard')));
	}

    public function getRegister() {
    	$this->layout->content = View::make('users.register');
	}

	public function postCreate() {
	    $validator = Validator::make(Input::all(), User::$rules);
 
	    if ($validator->passes()) {
		    $user = new User;

		    $user->student_no = Input::get('student_no');
		    $user->first_name = Input::get('first_name');
		    $user->middle_name = Input::get('middle_name');
		    $user->last_name = Input::get('last_name');
		    $user->email_address = Input::get('email_address');
		    $user->password = Hash::make(Input::get('password'));
		    $user->current_committee = Input::get('current_committee');
		    $user->birth_date = Input::get('birth_date');
		    $user->sem_accepted = Input::get('sem_accepted');
		    $user->college = Input::get('college');
		    $user->degree = Input::get('degree');
		    $user->status_id = Input::get('status_id');

		    $user->save();
 
		    return Redirect::to('users/login')->with('message', 'Thanks for registering!');
		} else {
		    return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
		}
	}	

	public function getLogin() {
	    $this->layout->content = View::make('users.login');
	}

	public function postSignin() {
        if (Auth::attempt(array('email_address'=>Input::get('email_address'), 'password'=>Input::get('password')))) {
		    return Redirect::to('users/dashboard')
		    	->with('message', 'You are now logged in!');
		} else {
		    return Redirect::to('users/login')
		        ->with('message', 'Your username/password combination was incorrect')
		        ->withInput();
		}
	}

	public function getDashboard() {
    	$this->layout->content = View::make('users.dashboard');
	}
}
?>