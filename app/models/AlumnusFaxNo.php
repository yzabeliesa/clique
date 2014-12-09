<?php

class AlumnusFaxNo extends \Eloquent {
	
	protected $table = 'alumnus_fax_nos';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}