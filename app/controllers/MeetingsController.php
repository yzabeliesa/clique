<?php

class MeetingsController extends \BaseController {

	/**
	 * Display a listing of meetings
	 *
	 * @return Response
	 */
	public function index()
	{
		$meetings = Meeting::all();

		return View::make('meetings.index', compact('meetings'));
	}

	/**
	 * Show the form for creating a new meeting
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('meetings.create');
	}

	/**
	 * Store a newly created meeting in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Meeting::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Meeting::create($data);

		return Redirect::route('meetings.index');
	}

	/**
	 * Display the specified meeting.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$meeting = Meeting::findOrFail($id);

		return View::make('meetings.show', compact('meeting'));
	}

	/**
	 * Show the form for editing the specified meeting.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$meeting = Meeting::find($id);

		return View::make('meetings.edit', compact('meeting'));
	}

	/**
	 * Update the specified meeting in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$meeting = Meeting::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Meeting::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$meeting->update($data);

		return Redirect::route('meetings.index');
	}

	/**
	 * Remove the specified meeting from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Meeting::destroy($id);

		return Redirect::route('meetings.index');
	}

}
