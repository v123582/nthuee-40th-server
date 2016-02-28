<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Basic;
use Illuminate\Http\Request;

class BasicController extends Controller {

    public function indexApi()
    {
		$basic = Basic::all();
        return $basic;
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		$basic = Basic::all()[0];

		return view('basics.edit', compact('basic'));
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
		$basic = Basic::findOrFail($id);

		$basic->headerTitle = $request->input("headerTitle");
		$basic->headerDescription = $request->input("headerDescription");
		$basic->headerContent = $request->input("headerContent");
		$basic->state1Title = $request->input("state1Title");
		$basic->state1Description = $request->input("state1Description");
		$basic->state1Content = $request->input("state1Content");
		$basic->state2Title = $request->input("state2Title");
		$basic->state2Description = $request->input("state2Description");
		$basic->state2Content = $request->input("state2Content");
		$basic->state3Title = $request->input("state3Title");
		$basic->state3Description = $request->input("state3Description");
		$basic->state3Content = $request->input("state3Content");		

		$basic->save();

		return redirect('basic/edit')->with('message', 'Item updated successfully.');
	}


}
