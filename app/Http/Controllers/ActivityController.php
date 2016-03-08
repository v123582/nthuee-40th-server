<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$activities = Activity::orderBy('id', 'desc')->paginate(10);
		return view('activities.index', compact('activities'));
	}

    public function indexApi()
    {
		$activities = Activity::all();
        return $activities;
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('activities.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$activity = new Activity();

		$activity->topic = $request->input("topic");
		$activity->title = $request->input("title");
		$activity->time = $request->input("time");
		$activity->location = $request->input("location");
        $activity->introduction = $request->input("introduction");
        $activity->content = $request->input("content");
        $activity->others = $request->input("others");
        $activity->url = $request->input("url");

		$activity->save();

		return redirect()->route('activities.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$activity = Activity::findOrFail($id);

		return view('activities.show', compact('activity'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$activity = Activity::findOrFail($id);

		return view('activities.edit', compact('activity'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$activity = Activity::findOrFail($id);

		$activity->topic = $request->input("topic");
		$activity->title = $request->input("title");
		$activity->time = $request->input("time");
		$activity->location = $request->input("location");
        $activity->introduction = $request->input("introduction");
        $activity->content = $request->input("content");
        $activity->others = $request->input("others");
        $activity->url = $request->input("url");

		$activity->save();

		return redirect()->route('activities.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$activity = Activity::findOrFail($id);
		$activity->delete();

		return redirect()->route('activities.index')->with('message', 'Item deleted successfully.');
	}

}
