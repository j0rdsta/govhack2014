<?php

class City extends \Eloquent {
	protected $fillable = [];
	protected $guarded = array();

	public static $rules = [
		'name' => 'required',
		'lat' => 'required',
		'long' => 'required'
	];

}