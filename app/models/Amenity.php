<?php

class Amenity extends \Eloquent {
	protected $fillable = [];
	protected $guarded = array();

	public static $rules = [
		'name' => 'required',
		'url' => 'required|url',
		'type' => 'required|in:JSON,KMZ',
		'city_id' => 'required|exists:cities,id'
	];

	public static $imageRules = [
		'header' => 'mimes:jpeg,gif,png,x-png | max:2000'
	];
}