<?php

class VenuesController extends \BaseController {

	/**
	 * Display a listing of venues
	 *
	 * @return Response
	 */
	public function index()
	{
		$venues = Venue::all();

		return View::make('venues.index', compact('venues'));
	}

	/**
	 * Show the form for creating a new venue
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('venues.create');
	}

	/**
	 * Store a newly created venue in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Venue::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Venue::create($data);

		return Redirect::route('venues.index');
	}

	/**
	 * Display the specified venue.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$venue = Venue::findOrFail($id);

		return View::make('venues.show', compact('venue'));
	}

	/**
	 * Show the form for editing the specified venue.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$venue = Venue::find($id);

		return View::make('venues.edit', compact('venue'));
	}

	/**
	 * Update the specified venue in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$venue = Venue::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Venue::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$venue->update($data);

		return Redirect::route('venues.index');
	}

	/**
	 * Remove the specified venue from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Venue::destroy($id);

		return Redirect::route('venues.index');
	}

}
