<?php

class CompanyContactPersonsController extends \BaseController {

	/**
	 * Display a listing of companycontactpersons
	 *
	 * @return Response
	 */
	public function index()
	{
		$companycontactpersons = Companycontactperson::all();

		return View::make('companycontactpersons.index', compact('companycontactpersons'));
	}

	/**
	 * Show the form for creating a new companycontactperson
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('companycontactpersons.create');
	}

	/**
	 * Store a newly created companycontactperson in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Companycontactperson::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Companycontactperson::create($data);

		return Redirect::route('companycontactpersons.index');
	}

	/**
	 * Display the specified companycontactperson.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$companycontactperson = Companycontactperson::findOrFail($id);

		return View::make('companycontactpersons.show', compact('companycontactperson'));
	}

	/**
	 * Show the form for editing the specified companycontactperson.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$companycontactperson = Companycontactperson::find($id);

		return View::make('companycontactpersons.edit', compact('companycontactperson'));
	}

	/**
	 * Update the specified companycontactperson in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$companycontactperson = Companycontactperson::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Companycontactperson::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$companycontactperson->update($data);

		return Redirect::route('companycontactpersons.index');
	}

	/**
	 * Remove the specified companycontactperson from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Companycontactperson::destroy($id);

		return Redirect::route('companycontactpersons.index');
	}

}
