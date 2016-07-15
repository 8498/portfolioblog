<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function postCategories()
    {
    	return $this->hasMany('App\PostCategory');
    }
}
