<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';

    //(change) primary key
    public $primaryKey = 'id';
    //timeStamps, add / remove them
    public $timestamps = true;
}
//Post::all(); returns all posts
