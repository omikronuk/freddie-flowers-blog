<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\PostComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('home', compact('posts'));
//        return view('home', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $this->middleware('auth');

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->middleware('auth');
        $user = User::find(Auth::id());

        $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string',
            'category' => 'required|string'
        ]);

        $post = new Post([
            'title' => $request['title'],
            'content' => $request['content'],
            'category' => $request['category'],
            'enable_comments' => empty($request['enable_comments']) ? false : $request['enable_comments'],
            'user_id' => $user->id
        ]);

        $post->save();

        return redirect('/admin')->with('success', 'Post has been created');

    }


    /**
     * Display a post
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('view_post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $this->middleware('auth');
        $post = Post::find($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string',
            'category' => 'required|string'
        ]);

        $post = Post::find($id);
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->category = $request['category'];
        $post->enable_comments = empty($request['enable_comments']) ? false : $request['enable_comments'];

        $post->save();

        return redirect("/post/$id/edit")->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect("/admin")->with('success', 'Post has been deleted');
    }

    public function comments($id) {
        $comments = PostComment::find($id);

        return view('admin.comments', compact('comments'));
    }
}
