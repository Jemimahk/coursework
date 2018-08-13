<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Table Name
    protected $table = 'category';

    //(change) primary key
    public $primaryKey = 'id';
    
    //timeStamps, add / remove them
    public $timestamps = false;


    // this is used to link the relationships
    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
//Post::all(); returns all posts
