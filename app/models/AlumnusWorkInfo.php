<?php

class AlumnusWorkInfo extends \Eloquent {
	
	protected $table = 'alumnus_work_info';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}