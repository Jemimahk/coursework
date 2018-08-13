<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //Table Name
    protected $table = 'events';

    //(change) primary key
    public $primaryKey = 'id';

    //timeStamps, add / remove them
    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
//Post::all(); returns all posts
