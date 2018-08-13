<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import model so you can use any of the model functions

use App\Event;
use DB;

class EventsController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  * Return functions that can be run using Eloquent:
  * 1.return all the data for the table(posts) in this model  $posts = Post::all();
  * 2.  //order by title in descending order and then call get method to return all from desc is most recent
  * $posts = Post::orderBy('title','desc')->get();
  * 3. get the post by title and 'return' it will return post two  return  $post = Post::where('title', 'Post Two')->get();
  * Using SQL
  *  //order by title in descending order and then call get method to return all from desc is most recent
  *  // take one, returns only one post
  *$posts = Post::orderBy('title','desc')->take(1)->get();
  * 1. //Return Method that can be run using SQL $posts = DB::select('SELECT *FROM posts');
  */
  public function index()
  {
    //paginate(num of table items to be listed eeg.evnt category before) per page
    $events = Event::orderBy('created_at','desc')->paginate(10);
    //load the view, pass $post using with cmd
    return view('events.index')->with('events',$events);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //load a view from the posts folder in in a template called created
    return view('events.create');
  }

  /**
  * Store a newly created resource in storage.
  *it requires objects from the form so it takes a request
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    //validation, pass in the request that has been passed to the store function then rules
    // change title to event and body to description, variables must match table
    $this->validate($request,[
      'title' => 'required',
      'body' =>'required'
    ]);

    return 123;
  }

  /**
  * Display the specified resource.
  *id of whch post to show
  * @param  int  $id
  * @return \Illuminate\Http\Response     // return post model and find the page associated with that id *using Eloquent
  */
  public function show($id)
  {
    //  return Post::find($id); every page is returned
    $event = Event::find($id);
    return view('events.show')->with('event',$event);
  }

  /**
  * Show the form for editing the specified resource.
  *edit need to know whic post to show in the form
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *request because were submitting the form to Update and we need id to see whicj
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *id for which post to delete
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }

}
/*
//list all the posts / post table data
index
//represents the create form which will submit to the function store
create
// function that submits the form data to the model then data base
store
//edit form which submits to update
edit
// update formm
update
// show a single post
show
//delete form
destroy
*/
