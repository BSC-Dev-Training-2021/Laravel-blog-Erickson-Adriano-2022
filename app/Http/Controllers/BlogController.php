<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;	

class BlogController extends Controller
{
    //
    function show(){
    	$data =  Post::all();
    	return view('home',['data'=>$data]);
    }
}
