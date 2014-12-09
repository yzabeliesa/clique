<?php

class AlumnusContactNosController extends \BaseController {

	/**
	 * Display a listing of alumnuscontactnos
	 *
	 * @return Response
	 */
	public function index()
	{
		$alumnuscontactnos = Alumnuscontactno::all();

		return View::make('alumnuscontactnos.index', compact('alumnuscontactnos'));
	}

	/**
	 * Show the form for creating a new alumnuscontactno
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('alumnuscontactnos.create');
	}

	/**
	 * Store a newly created alumnuscontactno in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Alumnuscontactno::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Alumnuscontactno::create($data);

		return Redirect::route('alumnuscontactnos.index');
	}

	/**
	 * Display the specified alumnuscontactno.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$alumnuscontactno = Alumnuscontactno::findOrFail($id);

		return View::make('alumnuscontactnos.show', compact('alumnuscontactno'));
	}

	/**
	 * Show the form for editing the specified alumnuscontactno.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$alumnuscontactno = Alumnuscontactno::find($id);

		return View::make('alumnuscontactnos.edit', compact('alumnuscontactno'));
	}

	/**
	 * Update the specified alumnuscontactno in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$alumnuscontactno = Alumnuscontactno::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Alumnuscontactno::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$alumnuscontactno->update($data);

		return Redirect::route('alumnuscontactnos.index');
	}

	/**
	 * Remove the specified alumnuscontactno from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Alumnuscontactno::destroy($id);

		return Redirect::route('alumnuscontactnos.index');
	}

}
