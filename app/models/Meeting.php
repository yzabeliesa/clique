<?php

class Meeting extends \Eloquent {
	
	protected $table = 'meetings';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}