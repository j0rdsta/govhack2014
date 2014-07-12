<?php

class AmenityLocationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /amenitylocations
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(AmenityLocation::all());
	}


	public static function parseKML($kml)
	{

		try {
			$contents = file_get_contents($kml->getRealPath());
			$xml= new SimpleXMLElement($contents);

			$xmlArray = (array)$xml->Document->Folder;

			$coords   = array();
		} catch(Exception $e) {
			throw new Exception("There was an error in the KML file sent");
		}

		foreach($xmlArray['Placemark'] as $placemark) {
 			$args     = explode(",", (string)$placemark->Point->coordinates);
		    $coords[] = array($args[0], $args[1]);
		}

		return $coords;

	}
	
	/**
	 * Show the form for creating a new resource.
	 * GET /amenitylocations/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /amenitylocations
	 *
	 * @return Response
	 */
	public static function store($coords, $amenity_id)
	{
		foreach($coords as $coord) {
			// die($coord[0]);
			// die();
			AmenityLocation::create(array(
				'amenity_id' => $amenity_id,
				'long' => $coord[0],
				'lat' => $coord[1]
			));
		}
	}

	/**
	 * Display the specified resource.
	 * GET /amenitylocations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /amenitylocations/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /amenitylocations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /amenitylocations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}