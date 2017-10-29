<?php
namespace App\blog;
use App\blog\category;
use App\blog\tag;
use Illuminate\Database\Eloquent\Model;
class post extends Model
{
	
public function tags(){
	return $this->belongsToMany('App\blog\tag', 'post_tags')->withTimestamps();
}

public function categories(){
	return $this->belongsToMany('App\blog\category', 'category_posts')->withTimestamps();;
}

public function getRouteKeyName(){
	return 'slug';
}

}