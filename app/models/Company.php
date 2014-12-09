<?php

class Company extends \Eloquent {
	
	protected $table = 'companies';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}