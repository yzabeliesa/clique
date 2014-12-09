<?php

class AlumnusFaxNosController extends \BaseController {

	/**
	 * Display a listing of alumnusfaxnos
	 *
	 * @return Response
	 */
	public function index()
	{
		$alumnusfaxnos = Alumnusfaxno::all();

		return View::make('alumnusfaxnos.index', compact('alumnusfaxnos'));
	}

	/**
	 * Show the form for creating a new alumnusfaxno
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('alumnusfaxnos.create');
	}

	/**
	 * Store a newly created alumnusfaxno in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Alumnusfaxno::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Alumnusfaxno::create($data);

		return Redirect::route('alumnusfaxnos.index');
	}

	/**
	 * Display the specified alumnusfaxno.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$alumnusfaxno = Alumnusfaxno::findOrFail($id);

		return View::make('alumnusfaxnos.show', compact('alumnusfaxno'));
	}

	/**
	 * Show the form for editing the specified alumnusfaxno.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$alumnusfaxno = Alumnusfaxno::find($id);

		return View::make('alumnusfaxnos.edit', compact('alumnusfaxno'));
	}

	/**
	 * Update the specified alumnusfaxno in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$alumnusfaxno = Alumnusfaxno::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Alumnusfaxno::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$alumnusfaxno->update($data);

		return Redirect::route('alumnusfaxnos.index');
	}

	/**
	 * Remove the specified alumnusfaxno from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Alumnusfaxno::destroy($id);

		return Redirect::route('alumnusfaxnos.index');
	}

}
