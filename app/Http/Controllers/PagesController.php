<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /*when you have a function inside a class it's also called a method
      The index function will load a view. look in the view folder under the pages folder for an
      index.blade.php
  */
    public function index(){
      $title = 'welcome to Laravel!';

          //return view('pages.index', compact('title')); [pass a value into balde]
          // add a title to the page using with bu passing in variable name for the fuction and the actually variable
      return view('pages.index')->with('title',$title);
    }

// return about page

    public function about(){
      // dynamic title  but echo can be used too
        $title = 'About Us';
      return view('pages.about')->with('title',$title);
    }

    public function services(){
      $data = array(
        'title' => 'Services',
        // add another array called services which is added into the data array
        'services' => ['Sport', 'Culture', 'Other']

      );
      return view('pages.services')->with($data);
    }
}
