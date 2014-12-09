<?php

class FinancialStatement extends \Eloquent {
	
	protected $table = 'financial_statements';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}