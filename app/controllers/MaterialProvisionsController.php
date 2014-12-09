<?php

class MaterialProvisionsController extends \BaseController {

	/**
	 * Display a listing of materialprovisions
	 *
	 * @return Response
	 */
	public function index()
	{
		$materialprovisions = Materialprovision::all();

		return View::make('materialprovisions.index', compact('materialprovisions'));
	}

	/**
	 * Show the form for creating a new materialprovision
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('materialprovisions.create');
	}

	/**
	 * Store a newly created materialprovision in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Materialprovision::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Materialprovision::create($data);

		return Redirect::route('materialprovisions.index');
	}

	/**
	 * Display the specified materialprovision.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$materialprovision = Materialprovision::findOrFail($id);

		return View::make('materialprovisions.show', compact('materialprovision'));
	}

	/**
	 * Show the form for editing the specified materialprovision.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$materialprovision = Materialprovision::find($id);

		return View::make('materialprovisions.edit', compact('materialprovision'));
	}

	/**
	 * Update the specified materialprovision in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$materialprovision = Materialprovision::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Materialprovision::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$materialprovision->update($data);

		return Redirect::route('materialprovisions.index');
	}

	/**
	 * Remove the specified materialprovision from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Materialprovision::destroy($id);

		return Redirect::route('materialprovisions.index');
	}

}
