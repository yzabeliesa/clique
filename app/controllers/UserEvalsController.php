<?php

class UserEvalsController extends \BaseController {

	/**
	 * Display a listing of userevals
	 *
	 * @return Response
	 */
	public function index()
	{
		$userevals = Usereval::all();

		return View::make('userevals.index', compact('userevals'));
	}

	/**
	 * Show the form for creating a new usereval
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('userevals.create');
	}

	/**
	 * Store a newly created usereval in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Usereval::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Usereval::create($data);

		return Redirect::route('userevals.index');
	}

	/**
	 * Display the specified usereval.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$usereval = Usereval::findOrFail($id);

		return View::make('userevals.show', compact('usereval'));
	}

	/**
	 * Show the form for editing the specified usereval.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usereval = Usereval::find($id);

		return View::make('userevals.edit', compact('usereval'));
	}

	/**
	 * Update the specified usereval in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usereval = Usereval::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Usereval::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$usereval->update($data);

		return Redirect::route('userevals.index');
	}

	/**
	 * Remove the specified usereval from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Usereval::destroy($id);

		return Redirect::route('userevals.index');
	}

}
