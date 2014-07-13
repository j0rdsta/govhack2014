<?php

class AmenityLocation extends \Eloquent {
	protected $fillable = [];
	protected $guarded = array();

	public function amenity() {
		return $this->belongsTo('Amenity', 'amenity_id');
	}
}