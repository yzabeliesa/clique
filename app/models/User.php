<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public static $rules = array(
	    'student_no'=>'required|regex:/\d{4}-\d{5}/',
	    'first_name'=>'required|alpha_spaces|min:2',
	    'middle_name'=>'required|alpha_spaces|min:2',
	    'last_name'=>'required|alpha_spaces|min:2',
	    'email_address'=>'required|email|unique:users',
	    'password'=>'required|alpha_num|between:6,12|confirmed',
	    'password_confirmation'=>'required|alpha_num|between:6,12',
	    'current_committee'=>'required|alpha_num|min:2',
	    'birth_date'=>'required|date',
	    'sem_accepted'=>'required|alpha_num_spaces|min:2',
	    'college'=>'required|alpha_num|min:2',
	    'degree'=>'required|alpha_spaces|min:2'
    );

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
    
}
