<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){

    	return view('post');
    }
    public function store(Request $request){

    	 request()->validate([
    		'title' => 'required',
    		'description' => 'required',
    		'content' => 'required'


    	]);

    	Post::create($request->all());
    	return redirect()->route('home')->with('success','post successfull.');
    	//dd(request()->all());
    }
    
}
