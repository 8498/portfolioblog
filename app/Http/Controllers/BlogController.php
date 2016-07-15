<?php

namespace App\Http\Controllers;

use App\PostCategory;
use App\Post;

class BlogController extends Controller
{
	public function index()
	{	
		$postCategories = PostCategory::all();
		
		$posts = Post::all();
		
		return view('blog.index',['postCategories' => $postCategories, 'posts' => $posts]);
	}
}