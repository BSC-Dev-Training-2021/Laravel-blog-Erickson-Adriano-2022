<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;	
use App\Models\Categories;	

class BlogController extends Controller
{
    //
    function show(){
    	$data =  Post::all();
    	$data2 =  Categories::all();
    	return view('home',['data'=>$data],['data2'=>$data2]);
    }
}
