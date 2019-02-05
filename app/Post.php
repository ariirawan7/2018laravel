<?php

namespace App;




class Post extends Model
{
    public function comments() 
    {
    	return $this->hasMany(Comment::class);
    }

    public function user() // $comment->post->user
    {
    	return $this->belongsTo(User::class);
    }


    public function tambahKomen($body)
    {
	    $this->comments()->create(compact('sbody'));
    }

    public function tambahKomensss($body)
    {
    
        // print_r($body);
        // exit();
  //   	Comment::create([
  //   		'body' => $body,
  //   		'post_id' => $this->id,
  //           'user_id' => $this->user_id
		// ]);

    }    
}
