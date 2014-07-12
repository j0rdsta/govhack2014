<?php

class AmenitiesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /amenities
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /amenities/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /amenities
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::except('icon');

		$validator = Validator::make($data, Amenity::$rules);

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$amenity = Amenity::create($data);

		if (Input::hasFile('icon')) {

			$icon_image = Input::file('icon');

			$icon_validator = Validator::make(array('icon' => $icon_image), Amenity::$imageRules);

			if (!$icon_validator->fails()) {
				$image = Image::make($icon_image->getRealPath());

				$image->resize(32, null, function ($constraint) {
				    $constraint->aspectRatio();
				});

				$image->encode('png');

				// check if user directory has been created
				if (!File::isDirectory(public_path('assets/amenities/icons'))) {
					// create directory for user files
					File::makeDirectory(public_path('assets/amenities/icons'), 0700, true);
				}				

				try {
					$image->save(public_path('assets/amenities/icons/') . $amenity->id . ".png");
				} catch(Exception $e) {
					error_log("image could not be saved");
				}

			}

		}

		Session::flash('success', 'Amenity added successfully');

		return Redirect::to('/admin');

	}

	/**
	 * Display the specified resource.
	 * GET /amenities/{id}
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
	 * GET /amenities/{id}/edit
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
	 * PUT /amenities/{id}
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
	 * DELETE /amenities/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}