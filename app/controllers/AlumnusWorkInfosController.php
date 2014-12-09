<?php

class AlumnusWorkInfosController extends \BaseController {

	/**
	 * Display a listing of alumnusworkinfos
	 *
	 * @return Response
	 */
	public function index()
	{
		$alumnusworkinfos = Alumnusworkinfo::all();

		return View::make('alumnusworkinfos.index', compact('alumnusworkinfos'));
	}

	/**
	 * Show the form for creating a new alumnusworkinfo
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('alumnusworkinfos.create');
	}

	/**
	 * Store a newly created alumnusworkinfo in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Alumnusworkinfo::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Alumnusworkinfo::create($data);

		return Redirect::route('alumnusworkinfos.index');
	}

	/**
	 * Display the specified alumnusworkinfo.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$alumnusworkinfo = Alumnusworkinfo::findOrFail($id);

		return View::make('alumnusworkinfos.show', compact('alumnusworkinfo'));
	}

	/**
	 * Show the form for editing the specified alumnusworkinfo.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$alumnusworkinfo = Alumnusworkinfo::find($id);

		return View::make('alumnusworkinfos.edit', compact('alumnusworkinfo'));
	}

	/**
	 * Update the specified alumnusworkinfo in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$alumnusworkinfo = Alumnusworkinfo::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Alumnusworkinfo::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$alumnusworkinfo->update($data);

		return Redirect::route('alumnusworkinfos.index');
	}

	/**
	 * Remove the specified alumnusworkinfo from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Alumnusworkinfo::destroy($id);

		return Redirect::route('alumnusworkinfos.index');
	}

}
