<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    protected $limit = 3;
    
    public function index()
    {

    	$posts = Post::with('author')->latestFirst()->simplePaginate($this->limit);
    	return view('web.index', compact('posts'))->render();
    }
}
