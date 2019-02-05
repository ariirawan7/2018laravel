<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;


class CommentsController extends Controller
{
    public function store(Post $post)
    {
    	// print_r(tambahKomen(request('body')));
    	$this->validate(request(),['sbody'=>'required|min:2']);
    	$post->tambahKomen(request('sbody'));
    	return back();
    }
}
