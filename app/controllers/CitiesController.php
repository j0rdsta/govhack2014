<?php

class CitiesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /cities
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /cities/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /cities
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), City::$rules);

		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$city = City::create(Input::all());

		Session::flash('success', 'City added successfully');

		return Redirect::to('/admin');
	}

	/**
	 * Display the specified resource.
	 * GET /cities/{id}
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
	 * GET /cities/{id}/edit
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
	 * PUT /cities/{id}
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
	 * DELETE /cities/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}