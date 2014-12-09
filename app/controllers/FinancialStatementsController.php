<?php

class FinancialStatementsController extends \BaseController {

	/**
	 * Display a listing of financialstatements
	 *
	 * @return Response
	 */
	public function index()
	{
		$financialstatements = Financialstatement::all();

		return View::make('financialstatements.index', compact('financialstatements'));
	}

	/**
	 * Show the form for creating a new financialstatement
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('financialstatements.create');
	}

	/**
	 * Store a newly created financialstatement in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Financialstatement::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Financialstatement::create($data);

		return Redirect::route('financialstatements.index');
	}

	/**
	 * Display the specified financialstatement.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$financialstatement = Financialstatement::findOrFail($id);

		return View::make('financialstatements.show', compact('financialstatement'));
	}

	/**
	 * Show the form for editing the specified financialstatement.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$financialstatement = Financialstatement::find($id);

		return View::make('financialstatements.edit', compact('financialstatement'));
	}

	/**
	 * Update the specified financialstatement in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$financialstatement = Financialstatement::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Financialstatement::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$financialstatement->update($data);

		return Redirect::route('financialstatements.index');
	}

	/**
	 * Remove the specified financialstatement from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Financialstatement::destroy($id);

		return Redirect::route('financialstatements.index');
	}

}
