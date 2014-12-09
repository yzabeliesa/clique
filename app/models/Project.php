<?php

class Project extends \Eloquent {
	
	protected $table = 'projects';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}