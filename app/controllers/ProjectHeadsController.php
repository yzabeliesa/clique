<?php

class ProjectHeadsController extends \BaseController {

	/**
	 * Display a listing of projectheads
	 *
	 * @return Response
	 */
	public function index()
	{
		$projectheads = Projecthead::all();

		return View::make('projectheads.index', compact('projectheads'));
	}

	/**
	 * Show the form for creating a new projecthead
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('projectheads.create');
	}

	/**
	 * Store a newly created projecthead in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Projecthead::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Projecthead::create($data);

		return Redirect::route('projectheads.index');
	}

	/**
	 * Display the specified projecthead.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$projecthead = Projecthead::findOrFail($id);

		return View::make('projectheads.show', compact('projecthead'));
	}

	/**
	 * Show the form for editing the specified projecthead.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$projecthead = Projecthead::find($id);

		return View::make('projectheads.edit', compact('projecthead'));
	}

	/**
	 * Update the specified projecthead in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$projecthead = Projecthead::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Projecthead::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$projecthead->update($data);

		return Redirect::route('projectheads.index');
	}

	/**
	 * Remove the specified projecthead from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Projecthead::destroy($id);

		return Redirect::route('projectheads.index');
	}

}
