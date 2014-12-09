<?php

class UserContactNo extends \Eloquent {
	
	protected $table = 'user_contact_nos';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}