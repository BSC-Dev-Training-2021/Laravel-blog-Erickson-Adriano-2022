<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Categories;
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
    	return redirect()->route('post.index')->with('success','post successfull.');
    	//dd(request()->all());
    }
    function show(){
        
        $data2 =  Categories::all();
        return view('post',['data2'=>$data2]);
    }
    
}
