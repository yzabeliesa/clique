<?php

class UserSchedulesController extends \BaseController {

	/**
	 * Display a listing of userschedules
	 *
	 * @return Response
	 */
	public function index()
	{
		$userschedules = Userschedule::all();

		return View::make('userschedules.index', compact('userschedules'));
	}

	/**
	 * Show the form for creating a new userschedule
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('userschedules.create');
	}

	/**
	 * Store a newly created userschedule in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Userschedule::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Userschedule::create($data);

		return Redirect::route('userschedules.index');
	}

	/**
	 * Display the specified userschedule.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$userschedule = Userschedule::findOrFail($id);

		return View::make('userschedules.show', compact('userschedule'));
	}

	/**
	 * Show the form for editing the specified userschedule.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$userschedule = Userschedule::find($id);

		return View::make('userschedules.edit', compact('userschedule'));
	}

	/**
	 * Update the specified userschedule in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$userschedule = Userschedule::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Userschedule::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$userschedule->update($data);

		return Redirect::route('userschedules.index');
	}

	/**
	 * Remove the specified userschedule from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Userschedule::destroy($id);

		return Redirect::route('userschedules.index');
	}

}
