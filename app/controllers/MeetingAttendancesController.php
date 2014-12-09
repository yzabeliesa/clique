<?php

class MeetingAttendancesController extends \BaseController {

	/**
	 * Display a listing of meetingattendances
	 *
	 * @return Response
	 */
	public function index()
	{
		$meetingattendances = Meetingattendance::all();

		return View::make('meetingattendances.index', compact('meetingattendances'));
	}

	/**
	 * Show the form for creating a new meetingattendance
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('meetingattendances.create');
	}

	/**
	 * Store a newly created meetingattendance in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Meetingattendance::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Meetingattendance::create($data);

		return Redirect::route('meetingattendances.index');
	}

	/**
	 * Display the specified meetingattendance.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$meetingattendance = Meetingattendance::findOrFail($id);

		return View::make('meetingattendances.show', compact('meetingattendance'));
	}

	/**
	 * Show the form for editing the specified meetingattendance.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$meetingattendance = Meetingattendance::find($id);

		return View::make('meetingattendances.edit', compact('meetingattendance'));
	}

	/**
	 * Update the specified meetingattendance in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$meetingattendance = Meetingattendance::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Meetingattendance::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$meetingattendance->update($data);

		return Redirect::route('meetingattendances.index');
	}

	/**
	 * Remove the specified meetingattendance from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Meetingattendance::destroy($id);

		return Redirect::route('meetingattendances.index');
	}

}
