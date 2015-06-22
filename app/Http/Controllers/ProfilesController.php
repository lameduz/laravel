<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        $user = User::with('profile')->find(Auth::user()->id);


        return view('profiles.index')->with(['user' => $user]);
	}


    public function postProfilePic(Request $requests)
    {
        $file = $requests->file('new-profile-pic');
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $storageDir = 'storage/';
        $file->move($storageDir,$filename);

        if($requests->ajax())
        {
            $profile = Profile::find(Auth::user()->id);
            $profile->profilepic = $storageDir.$filename;
            $profile->save();
            return response()->json(['file' => $storageDir.$filename]);
        }


    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//return view('profiles.show')->with(['profile' => Profile::find($id)]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
