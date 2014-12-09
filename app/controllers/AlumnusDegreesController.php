<?php

class AlumnusDegreesController extends \BaseController {

	/**
	 * Display a listing of alumnusdegrees
	 *
	 * @return Response
	 */
	public function index()
	{
		$alumnusdegrees = Alumnusdegree::all();

		return View::make('alumnusdegrees.index', compact('alumnusdegrees'));
	}

	/**
	 * Show the form for creating a new alumnusdegree
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('alumnusdegrees.create');
	}

	/**
	 * Store a newly created alumnusdegree in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Alumnusdegree::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Alumnusdegree::create($data);

		return Redirect::route('alumnusdegrees.index');
	}

	/**
	 * Display the specified alumnusdegree.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$alumnusdegree = Alumnusdegree::findOrFail($id);

		return View::make('alumnusdegrees.show', compact('alumnusdegree'));
	}

	/**
	 * Show the form for editing the specified alumnusdegree.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$alumnusdegree = Alumnusdegree::find($id);

		return View::make('alumnusdegrees.edit', compact('alumnusdegree'));
	}

	/**
	 * Update the specified alumnusdegree in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$alumnusdegree = Alumnusdegree::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Alumnusdegree::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$alumnusdegree->update($data);

		return Redirect::route('alumnusdegrees.index');
	}

	/**
	 * Remove the specified alumnusdegree from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Alumnusdegree::destroy($id);

		return Redirect::route('alumnusdegrees.index');
	}

}
