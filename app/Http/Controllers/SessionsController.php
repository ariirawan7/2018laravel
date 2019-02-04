<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except' => 'destroy']);
    }

    public function create()
    {
    	return view('auth.login');
    }

    public function store()
    {
    	//attemp to authenticate user
       	if(! auth()->attempt(request(['email','password']))) {
            return back()->withErrors([
                'message' => 'cek lagi deh'

                ]);
        };

    	// if not redirect back.


    	//if so, sign them in


    	//redirect to the home page
        return redirect()->home();
    }

    public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }

}
