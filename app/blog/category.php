<?php

namespace App\blog;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function posts(){
    	return $this->belongsToMany('App\blog\post', 'category_posts');
    }
}
