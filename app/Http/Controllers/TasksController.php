<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
    	// $tasks = DB::table('tasks')->get();
    
	$tasks = Task::all();

    return view('tasks.index', compact('tasks')); 
	}

   public function show(Task $theTasks) 
   // public function show($id) 
    {


	// $task = DB::table('tasks')->latest()->get();
	// dd($task);

	// $task = DB::table('tasks')->find($id);
	// $task = Task::find($id);
	// return $task;
    return view('tasks.show', compact('theTasks')); 



	}	
}
