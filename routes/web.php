<?php

use App\Task;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome',[
//     	'name' => 'Dimas'
//     	]);
// });
Route::group(['middleware' => ['web']], function () {

Route::get('about', function () {
    return view('about');
});


// Route::get('/', function () {
//     return view('welcome')->with('name','Duniaku!');
// });

// Route::get('/', function () {
// 	$name = 'Jefri';
//     return view('welcome')->with(['name' => $name]); 
// });

// Route::get('/', function () {
// 	$name = 'Jefri';
// 	$age = 31;
// 	$tasks = [
// 		'Pergi ke toko',
// 		'Menyelesaikan tugas dilayar',
// 		'Membersihkan rumah'
// 		];
//     return view('welcome', compact('name','age','tasks')); 
// });

Route::get('/tes', function () {
	$name = 'Jefri';
	$age = 31;
	$tasks = DB::table('tasks')->get();
	// return $tasks;
    return view('welcome', compact('name','age','tasks')); 
});

 

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{theTasks}', 'TasksController@show');

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/{post}/comments', 'CommentsController@store');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

});