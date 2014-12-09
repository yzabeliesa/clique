<?php

class CompanyContactNo extends \Eloquent {
	
	protected $table = 'company_contact_nos';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}