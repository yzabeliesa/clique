<?php

class AlumnusEmailsController extends \BaseController {

	/**
	 * Display a listing of alumnusemails
	 *
	 * @return Response
	 */
	public function index()
	{
		$alumnusemails = Alumnusemail::all();

		return View::make('alumnusemails.index', compact('alumnusemails'));
	}

	/**
	 * Show the form for creating a new alumnusemail
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('alumnusemails.create');
	}

	/**
	 * Store a newly created alumnusemail in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Alumnusemail::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Alumnusemail::create($data);

		return Redirect::route('alumnusemails.index');
	}

	/**
	 * Display the specified alumnusemail.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$alumnusemail = Alumnusemail::findOrFail($id);

		return View::make('alumnusemails.show', compact('alumnusemail'));
	}

	/**
	 * Show the form for editing the specified alumnusemail.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$alumnusemail = Alumnusemail::find($id);

		return View::make('alumnusemails.edit', compact('alumnusemail'));
	}

	/**
	 * Update the specified alumnusemail in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$alumnusemail = Alumnusemail::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Alumnusemail::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$alumnusemail->update($data);

		return Redirect::route('alumnusemails.index');
	}

	/**
	 * Remove the specified alumnusemail from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Alumnusemail::destroy($id);

		return Redirect::route('alumnusemails.index');
	}

}
