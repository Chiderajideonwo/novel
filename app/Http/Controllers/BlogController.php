<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class BlogController extends Controller
{
    

	// public function index () {

	// 	$posts= Post::paginate(10);

	// 	return view('blog.archive', compact('posts'));
	// }





	public function public_view ($slug) 
	{

		$post= Post::findorfail($slug);


		return view( 'blog.public_view' , compact('post'));

		// dd($post->slug);



	}




}
