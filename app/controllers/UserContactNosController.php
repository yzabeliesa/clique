<?php

class UserContactNosController extends \BaseController {

	/**
	 * Display a listing of usercontactnos
	 *
	 * @return Response
	 */
	public function index()
	{
		$usercontactnos = Usercontactno::all();

		return View::make('usercontactnos.index', compact('usercontactnos'));
	}

	/**
	 * Show the form for creating a new usercontactno
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('usercontactnos.create');
	}

	/**
	 * Store a newly created usercontactno in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Usercontactno::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Usercontactno::create($data);

		return Redirect::route('usercontactnos.index');
	}

	/**
	 * Display the specified usercontactno.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usercontactno = Usercontactno::findOrFail($id);

		return View::make('usercontactnos.show', compact('usercontactno'));
	}

	/**
	 * Show the form for editing the specified usercontactno.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usercontactno = Usercontactno::find($id);

		return View::make('usercontactnos.edit', compact('usercontactno'));
	}

	/**
	 * Update the specified usercontactno in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usercontactno = Usercontactno::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usercontactno::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usercontactno->update($data);

		return Redirect::route('usercontactnos.index');
	}

	/**
	 * Remove the specified usercontactno from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usercontactno::destroy($id);

		return Redirect::route('usercontactnos.index');
	}

}
