<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = ['posts' => [
            [
                'id' => 1,
                'title' => 'sdfasdfas',
                'description' => 'this is where the description goes',
                'comments' => 'sdfasdfas',
                'created_at' => date('d/m/Y'),
                'category' => 'Marketing'
            ],

            [
                'id' => 2,
                'title' => 'Looking good',
                'description' => 'this is where the description goes',
                'comments' => 'sdfasdfas',
                'created_at' => date('d/m/Y'),
                'category' => 'Marketing'
            ]
        ]];

        return view('home', $posts);
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
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string|description',
            'category' => 'required|string|description'
        ]);

        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'user_id' => User::find(Auth::id())
        ]);

    }


    /**
     * Display a post
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $post = Post::findOrFail($id);
        $post = [
            'id' => $id,
            'title' => 'Looking good',
            'description' => 'this is where the description goes',
            'comments' => 'sdfasdfas',
            'created_at' => date('d/m/Y'),
            'category' => 'Marketing'
        ];

        return view('view_post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
//        $this->middleware('auth');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
