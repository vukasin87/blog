<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PagesController extends Controller { 

	
	public function getIndex() {
		$posts = Post::orderBy('created_at','desc')->limit(4)->get();
		return view('pages.welcome',compact('posts'));
	}

	public function getAbout() {
		return view('pages.about');
	}

	public function getContact() {
		return view('pages.contact');
	}


}
