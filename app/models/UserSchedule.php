<?php

class UserSchedule extends \Eloquent {
	
	protected $table = 'user_schedules';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}