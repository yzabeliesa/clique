<?php

class Alumni extends \Eloquent {
	
	protected $table = 'alumni';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}