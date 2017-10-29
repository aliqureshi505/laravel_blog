<?php

namespace App\blog;

use App\blog\post;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function posts(){
    	return $this->belongsToMany('App\blog\post', 'post_tags');
    }
}
