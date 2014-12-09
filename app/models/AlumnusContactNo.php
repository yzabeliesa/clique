<?php

class AlumnusContactNo extends \Eloquent {
	
	protected $table = 'alumnus_contact_nos';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}