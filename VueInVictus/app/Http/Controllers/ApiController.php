<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ApiController extends Controller
{
    public function __construct()
    {

    }


    public function index()
    {
        $industries = DB::table('industries')->get();
        $posts = DB::table('posts')->limit(4)->get();
        $content = DB::table('data')->first();
        $reviews = DB::table('reviews')->get();
        $portfolio = DB::table('portfolio')->get();
        $data = ['industries' => $industries, 'posts' => $posts, 'content' => $content,
      'reviews' => $reviews, 'portfolio' => $portfolio ];
        return response()->json($data);
    }
    public function blogData()
    {
        $posts = DB::table('posts')->get();
        return response()->json(['posts' => $posts]);
    }
    public function postData($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        return response()->json($post);
    }
    public function portfoliosData()
    {
        $portfolios = DB::table('portfolio')->get();
        return response()->json(['portfolios' => $portfolios]);
    }
    public function portfolioData($id)
    {
        $portfolio = DB::table('portfolio')->where('id',$id)->first();
        return response()->json($portfolio);
    }
}
