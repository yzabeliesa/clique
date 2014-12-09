<?php

class StatementEntry extends \Eloquent {
	
	protected $table = 'statement_entries';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}