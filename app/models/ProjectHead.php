<?php

class ProjectHead extends \Eloquent {
	
	protected $table = 'project_heads';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}