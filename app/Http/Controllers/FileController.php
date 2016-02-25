<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Auth; 
use Log;

class FileController extends Controller {

	public function upload()
	{		
		return view('uploads.upload', ['api_token' => Auth::user()->api_token]);
	}

	public function index()
	{
		$files = File::orderBy('id', 'desc')->paginate(10);
		Log::info('===== FileController: index ====='); 
		Log::info($files);
		Log::info('=============================\n\n');
		return view('uploads.index', compact('files'));
	}	

    public function indexApi()
	{
		$files = File::all();
		return $files;
	}	

	public function storeApi(Request $request)
	{
		// Grab our files input
	    $files = Input::file('files');
	    // We will store our uploads in public/uploads/basic
	    $assetPath = '/uploads/basic';
	    $uploadPath = public_path($assetPath);
	    // We need an empty arry for us to put the files back into
	    $results = array();

	    foreach ($files as $file) {
	    	$fileName = time().'-'.str_random(3).'-'.$file->getClientOriginalName();
	        // store our uploaded file in our uploads folder
	        $file->move($uploadPath, $fileName);
	        // set our results to have our asset path
	        $name = $assetPath . '/' . $fileName;
	        $results[] = compact('name');

	        $file = new File();
			$file->url = $name;
			$file->save();
			
			Log::info('===== FileController: store ====='); 
			Log::info($file);
			Log::info('==============================\n\n');

	    }

	    // return our results in a files object
	    return array(
	        'files' => $results
	    );
	}

	public function destroy($id)
	{
		$file = File::findOrFail($id);
		$file->delete();

		Log::info('===== FileController: delete ====='); 
		Log::info($file);
		Log::info('==============================\n\n');

		return redirect('photos');
	}
}
