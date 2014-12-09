<?php

class StatementEntriesController extends \BaseController {

	/**
	 * Display a listing of statemententries
	 *
	 * @return Response
	 */
	public function index()
	{
		$statemententries = Statemententry::all();

		return View::make('statemententries.index', compact('statemententries'));
	}

	/**
	 * Show the form for creating a new statemententry
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('statemententries.create');
	}

	/**
	 * Store a newly created statemententry in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Statemententry::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Statemententry::create($data);

		return Redirect::route('statemententries.index');
	}

	/**
	 * Display the specified statemententry.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$statemententry = Statemententry::findOrFail($id);

		return View::make('statemententries.show', compact('statemententry'));
	}

	/**
	 * Show the form for editing the specified statemententry.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$statemententry = Statemententry::find($id);

		return View::make('statemententries.edit', compact('statemententry'));
	}

	/**
	 * Update the specified statemententry in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$statemententry = Statemententry::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Statemententry::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$statemententry->update($data);

		return Redirect::route('statemententries.index');
	}

	/**
	 * Remove the specified statemententry from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Statemententry::destroy($id);

		return Redirect::route('statemententries.index');
	}

}
