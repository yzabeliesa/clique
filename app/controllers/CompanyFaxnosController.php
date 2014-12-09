<?php

class CompanyFaxnosController extends \BaseController {

	/**
	 * Display a listing of companyfaxnos
	 *
	 * @return Response
	 */
	public function index()
	{
		$companyfaxnos = Companyfaxno::all();

		return View::make('companyfaxnos.index', compact('companyfaxnos'));
	}

	/**
	 * Show the form for creating a new companyfaxno
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('companyfaxnos.create');
	}

	/**
	 * Store a newly created companyfaxno in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Companyfaxno::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Companyfaxno::create($data);

		return Redirect::route('companyfaxnos.index');
	}

	/**
	 * Display the specified companyfaxno.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$companyfaxno = Companyfaxno::findOrFail($id);

		return View::make('companyfaxnos.show', compact('companyfaxno'));
	}

	/**
	 * Show the form for editing the specified companyfaxno.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$companyfaxno = Companyfaxno::find($id);

		return View::make('companyfaxnos.edit', compact('companyfaxno'));
	}

	/**
	 * Update the specified companyfaxno in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$companyfaxno = Companyfaxno::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Companyfaxno::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$companyfaxno->update($data);

		return Redirect::route('companyfaxnos.index');
	}

	/**
	 * Remove the specified companyfaxno from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Companyfaxno::destroy($id);

		return Redirect::route('companyfaxnos.index');
	}

}
