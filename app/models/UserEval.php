<?php

class UserEval extends \Eloquent {
	
	protected $table = 'user_evals';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}