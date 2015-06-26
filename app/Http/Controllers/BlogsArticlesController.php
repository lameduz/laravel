<?php namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogsArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($id)
	{
        return view('articles.create')->with('id',$id);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */


    public function postArticle($id,Request $request)
    {
        $file = $request->file('image');

        $post = new Post($request->only('title','body'));

        $filename = $file->getClientOriginalName();
        $postImgDir = 'storage/'.$id.'/img';

        if(!file_exists($postImgDir)) mkdir($postImgDir,777,true);

        $file->move($postImgDir, $filename);

        $post->image = $postImgDir.'/'.$filename;
        $blog = Blog::find($id);


        if($blog->posts()->save($post))
        {
            return redirect()->route('blog.dashboard',['id' => $id]);
        };



    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($blogid,$postid)
	{
        $post = Blog::find($blogid)->posts()->whereId($postid)->first();
        $comment = Comment::wherePost_id($postid)->first();

		return view('articles.show')->with(['blogid' => $blogid, 'post' => $post]);

	}

    public function comment($blogid,$postid, Request $request)
    {
        $comment = new Comment($request->all());
        $post = Post::find($postid)->whereBlog_id($blogid)->first();

        $user = User::find(Auth::user()->id);
        $comment->blog_id = $blogid;
        $comment->post_id = $post->id;
        $comment->user_id = $user->id;
        $comment->author = $user->username;
        $comment->body = $request->only('body')['body'];

        $comment->save();
        return redirect()->back();


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
