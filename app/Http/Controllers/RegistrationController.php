<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
class RegistrationController extends Controller
{
   public function create()
   {
   	return view('registration.create');
   }

   public function store(Request $request)
   {
   	//validate the form
   	$this->validate(request(),[
   		'name' => 'required',
   		'email' => 'required|email',
   		'password' => 'required|confirmed'

   		]);


      $user = New User;
      $user->name = $request->input('name');
      $user->email = $request->input('email');

    $user->password = bcrypt($request->input('password'));
    $user->save();

   





   	//sign them all
   	auth()->login($user);


   	// redirect to home page
   	return redirect()->home();
   }   

}
