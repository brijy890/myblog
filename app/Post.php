<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getImageUrlAttribute($value)
    {
    	$imageUrl = '';
    	if( ! is_null($this->image))
    	{
    		$imagePath = public_path() . "/web/img/" .$this->image;
    		if (file_exists($imagePath)) $imageUrl = asset("web/img/" . $this->image);
    	}
    	return $imageUrl;
    }
}
