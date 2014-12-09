<?php

class MeetingAttendance extends \Eloquent {
	
	protected $table = 'meeting_attendances';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}