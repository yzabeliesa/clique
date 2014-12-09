<?php

class CompanyContactPerson extends \Eloquent {
	
	protected $table = 'company_contact_persons';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}