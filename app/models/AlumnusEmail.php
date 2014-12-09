<?php

class AlumnusEmail extends \Eloquent {
	
	protected $table = 'alumnus_emails';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}