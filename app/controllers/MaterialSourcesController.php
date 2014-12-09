<?php

class MaterialSourcesController extends \BaseController {

	/**
	 * Display a listing of materialsources
	 *
	 * @return Response
	 */
	public function index()
	{
		$materialsources = Materialsource::all();

		return View::make('materialsources.index', compact('materialsources'));
	}

	/**
	 * Show the form for creating a new materialsource
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('materialsources.create');
	}

	/**
	 * Store a newly created materialsource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Materialsource::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Materialsource::create($data);

		return Redirect::route('materialsources.index');
	}

	/**
	 * Display the specified materialsource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$materialsource = Materialsource::findOrFail($id);

		return View::make('materialsources.show', compact('materialsource'));
	}

	/**
	 * Show the form for editing the specified materialsource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$materialsource = Materialsource::find($id);

		return View::make('materialsources.edit', compact('materialsource'));
	}

	/**
	 * Update the specified materialsource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$materialsource = Materialsource::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Materialsource::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$materialsource->update($data);

		return Redirect::route('materialsources.index');
	}

	/**
	 * Remove the specified materialsource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Materialsource::destroy($id);

		return Redirect::route('materialsources.index');
	}

}
