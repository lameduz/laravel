<?php namespace App\Http\Controllers;

use App\Blog;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersBlogsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($route)
	{

		return view('userblog.index')->with('blog',Blog::whereSubdomain($route)->first());
	}

    public function blogDashBoard($id)
    {
        $blogs = User::find(Auth::user()->id)->blogs()->whereId($id)->first();
        return view('userblog.dashboard')->with(['id' => $id,'blogs' => $blogs]);
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
	public function store(Request $request)
	{

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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

    public function settings($id)
    {
        $blog = Blog::find($id);
        return view('userblog.settings')->with(['id' => $id, 'blog' => $blog]);
    }

    public function editBlogImage($id,Request $request)
    {
        $file = $request->file('blog-image');
        $filename = $file->getClientOriginalName();
        $storageDir = 'storage/';
        $file->move($storageDir,$filename);

        if($request->ajax())
        {
            $blog = Blog::find($id);
            $blog->image = $storageDir.$filename;
            $blog->save();
            return response()->json(['file' => $storageDir.$filename]);
        }
    }
    public function editBlogBackground($id, Request $request)
    {
        $blog = Blog::find($id);
        $file = $request->file('new-profile-pic');
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $storageDir = 'storage/';
        $file->move($storageDir,$filename);

        if($request->ajax())
        {
            $blog = Blog::find(Auth::user()->id);
            $blog->image = $storageDir.$filename;
            $blog->save();
            return response()->json(['file' => $storageDir.$filename]);
        }
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
