<?php

class AmenitiesController extends \BaseController {

	/**
	 * Display a listing of amenities
	 *
	 * @return Response
	 */
	public function index()
	{
		$amenities = Amenity::all();

		return View::make('amenities.index', compact('amenities'));
	}

	/**
	 * Show the form for creating a new amenity
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('amenities.create');
	}

	/**
	 * Store a newly created amenity in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Amenity::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Amenity::create($data);

		return Redirect::route('amenities.index');
	}

	/**
	 * Display the specified amenity.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$amenity = Amenity::findOrFail($id);

		return View::make('amenities.show', compact('amenity'));
	}

	/**
	 * Show the form for editing the specified amenity.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$amenity = Amenity::find($id);

		return View::make('amenities.edit', compact('amenity'));
	}

	/**
	 * Update the specified amenity in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$amenity = Amenity::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Amenity::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$amenity->update($data);

		return Redirect::route('amenities.index');
	}

	/**
	 * Remove the specified amenity from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Amenity::destroy($id);

		return Redirect::route('amenities.index');
	}

}
