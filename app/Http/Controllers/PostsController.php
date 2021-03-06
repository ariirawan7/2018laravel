<?php

namespace App\Http\Controllers;


use App\Post;

class PostsController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
    	$posts = Post::latest()->get();
        // $posts = Post::all();
        return view('posts.index', compact(['posts']));
    }

    public function alternatifshow($id)
    {
    	$post = Post::find($id);
        return view('posts.show', compact(['post']));
    }

    public function show(Post $post)
    {
        
        return view('posts.show', compact(['post']));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required'
            ]);

        auth()->user()->publish(

            new Post(request(['title','body' ]))

            );


// print_r(auth()->user());
// exit;
        return redirect('/');
        // dd(request(['title','body']));
    }


}
