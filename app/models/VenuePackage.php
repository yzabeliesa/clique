<?php

class VenuePackage extends \Eloquent {
	
	protected $table = 'venue_packages';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}