<?php

class CompanyEmailsController extends \BaseController {

	/**
	 * Display a listing of companyemails
	 *
	 * @return Response
	 */
	public function index()
	{
		$companyemails = Companyemail::all();

		return View::make('companyemails.index', compact('companyemails'));
	}

	/**
	 * Show the form for creating a new companyemail
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('companyemails.create');
	}

	/**
	 * Store a newly created companyemail in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Companyemail::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Companyemail::create($data);

		return Redirect::route('companyemails.index');
	}

	/**
	 * Display the specified companyemail.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$companyemail = Companyemail::findOrFail($id);

		return View::make('companyemails.show', compact('companyemail'));
	}

	/**
	 * Show the form for editing the specified companyemail.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$companyemail = Companyemail::find($id);

		return View::make('companyemails.edit', compact('companyemail'));
	}

	/**
	 * Update the specified companyemail in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$companyemail = Companyemail::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Companyemail::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$companyemail->update($data);

		return Redirect::route('companyemails.index');
	}

	/**
	 * Remove the specified companyemail from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Companyemail::destroy($id);

		return Redirect::route('companyemails.index');
	}

}
