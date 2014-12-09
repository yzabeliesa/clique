<?php

class AlumnusDegree extends \Eloquent {
	
	protected $table = 'alumnus_degrees';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}