<?php

class MaterialProvision extends \Eloquent {
	
	protected $table = 'material_provisions';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}