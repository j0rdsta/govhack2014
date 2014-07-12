<?php

class Amenity extends \Eloquent {
	protected $fillable = [];
	protected $guarded = array();

	public static $rules = [
		'name' => 'required',
		'city_id' => 'required|exists:cities,id'
	];

	public static $imageRules = [
		'header' => 'mimes:jpeg,gif,png,x-png | max:2000'
	];


	public function locations() {
		return $this->hasMany('Amenity', 'amenity_id');
	}
}