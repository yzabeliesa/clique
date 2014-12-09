<?php

class MaterialSource extends \Eloquent {
	
	protected $table = 'material_sources';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}