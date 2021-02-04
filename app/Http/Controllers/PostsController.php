<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Fetch All Our Posts
        // Add Pagination
       $posts =  Post::orderBy('created_at', 'desc')->paginate(10);

        //Fetch By Condition
         //return Post::where('title', 'Post Two')->get();

        //return Page
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        //return Create View
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
        //Store Function
        //Validate Form Values
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
       
        //Insert into The Database
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;

        //Insert into DataBase
        $post->save();

        //Display Message and Redirect
        return redirect('/posts')->with('success', 'Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Return All Posts
        $post = Post::find($id);

        //Return View
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Edit Function
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Update Function
          //Validate Form Values
          $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
       
        //Insert into The Database
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        //Display Message and Redirect
         return redirect('/posts')->with('success', 'Post Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Destroy Function

        //Find The Post
        $post = Post::find($id);
        $post->delete();


        //Display Message and Redirect
        return redirect('/posts')->with('success', 'Post Removed');
    }
}
