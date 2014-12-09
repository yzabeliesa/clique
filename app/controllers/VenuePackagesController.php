<?php

class VenuePackagesController extends \BaseController {

	/**
	 * Display a listing of venuepackages
	 *
	 * @return Response
	 */
	public function index()
	{
		$venuepackages = Venuepackage::all();

		return View::make('venuepackages.index', compact('venuepackages'));
	}

	/**
	 * Show the form for creating a new venuepackage
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('venuepackages.create');
	}

	/**
	 * Store a newly created venuepackage in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Venuepackage::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Venuepackage::create($data);

		return Redirect::route('venuepackages.index');
	}

	/**
	 * Display the specified venuepackage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$venuepackage = Venuepackage::findOrFail($id);

		return View::make('venuepackages.show', compact('venuepackage'));
	}

	/**
	 * Show the form for editing the specified venuepackage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$venuepackage = Venuepackage::find($id);

		return View::make('venuepackages.edit', compact('venuepackage'));
	}

	/**
	 * Update the specified venuepackage in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$venuepackage = Venuepackage::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Venuepackage::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$venuepackage->update($data);

		return Redirect::route('venuepackages.index');
	}

	/**
	 * Remove the specified venuepackage from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Venuepackage::destroy($id);

		return Redirect::route('venuepackages.index');
	}

}
