<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|---------------------------------
-----------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
Route::get('/hello', function () {
  //  return view('welcome');

  return '<h2> Hello world</h2>';
});

// get request to users for a specific id, variable to rep id is passed in function
Route::get('/users/{id}/{name}',function($id, $name){
  return 'This is user '.$name. ' with the id '.$id;
});


*/
// instead of a function/ closer put controller and reuired method in quotes
Route::get('/', 'PagesController@index');
Route::get('/login', function() {
 return view('login.index');
});



//Create all the routes needed for posts, if a get request is make to posts.name it returns the function
Route::resource('events','EventsController');

/*
Route::get('/users', function () {
  return App\users::all();
});
*/

Auth::routes();

Route::get('/profile', 'ProfileController@index')->name('profile');
