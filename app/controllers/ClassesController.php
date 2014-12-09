<?php

class ClassesController extends \BaseController {

	/**
	 * Display a listing of classes
	 *
	 * @return Response
	 */
	public function index()
	{
		$classes = Class::all();

		return View::make('classes.index', compact('classes'));
	}

	/**
	 * Show the form for creating a new class
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('classes.create');
	}

	/**
	 * Store a newly created class in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Class::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Class::create($data);

		return Redirect::route('classes.index');
	}

	/**
	 * Display the specified class.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$class = Class::findOrFail($id);

		return View::make('classes.show', compact('class'));
	}

	/**
	 * Show the form for editing the specified class.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$class = Class::find($id);

		return View::make('classes.edit', compact('class'));
	}

	/**
	 * Update the specified class in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$class = Class::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Class::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$class->update($data);

		return Redirect::route('classes.index');
	}

	/**
	 * Remove the specified class from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Class::destroy($id);

		return Redirect::route('classes.index');
	}

}
