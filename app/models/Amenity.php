<?php

class Amenity extends \Eloquent {
	
	protected $table = 'amenities';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}