<?php

class Item extends \Eloquent {
	
	protected $table = 'items';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}