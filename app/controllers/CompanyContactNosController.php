<?php

class CompanyContactNosController extends \BaseController {

	/**
	 * Display a listing of companycontactnos
	 *
	 * @return Response
	 */
	public function index()
	{
		$companycontactnos = Companycontactno::all();

		return View::make('companycontactnos.index', compact('companycontactnos'));
	}

	/**
	 * Show the form for creating a new companycontactno
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('companycontactnos.create');
	}

	/**
	 * Store a newly created companycontactno in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Companycontactno::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Companycontactno::create($data);

		return Redirect::route('companycontactnos.index');
	}

	/**
	 * Display the specified companycontactno.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$companycontactno = Companycontactno::findOrFail($id);

		return View::make('companycontactnos.show', compact('companycontactno'));
	}

	/**
	 * Show the form for editing the specified companycontactno.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$companycontactno = Companycontactno::find($id);

		return View::make('companycontactnos.edit', compact('companycontactno'));
	}

	/**
	 * Update the specified companycontactno in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$companycontactno = Companycontactno::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Companycontactno::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$companycontactno->update($data);

		return Redirect::route('companycontactnos.index');
	}

	/**
	 * Remove the specified companycontactno from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Companycontactno::destroy($id);

		return Redirect::route('companycontactnos.index');
	}

}
