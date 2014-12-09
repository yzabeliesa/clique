<?php

class AlumniController extends \BaseController {

	/**
	 * Display a listing of alumni
	 *
	 * @return Response
	 */
	public function index()
	{
		$alumni = Alumni::all();

		return View::make('alumni.index', compact('alumni'));
	}

	/**
	 * Show the form for creating a new alumni
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('alumni.create');
	}

	/**
	 * Store a newly created alumni in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Alumni::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Alumni::create($data);

		return Redirect::route('alumni.index');
	}

	/**
	 * Display the specified alumni.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$alumni = Alumni::findOrFail($id);

		return View::make('alumni.show', compact('alumni'));
	}

	/**
	 * Show the form for editing the specified alumni.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$alumni = Alumni::find($id);

		return View::make('alumni.edit', compact('alumni'));
	}

	/**
	 * Update the specified alumni in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$alumni = Alumni::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Alumni::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$alumni->update($data);

		return Redirect::route('alumni.index');
	}

	/**
	 * Remove the specified alumni from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Alumni::destroy($id);

		return Redirect::route('alumni.index');
	}

}
