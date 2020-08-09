<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Posts\CreatePostRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
     {
       $posts =  DB::table('posts')->get();
         return view('post.index')->with('posts',$posts);
     }
     public function create()
     {
       return view('post.add');

     }
     public function store(CreatePostRequest $request)
     {
       $image = $request->image->store('post');
       //create post
      $post = DB::table('posts')->insert([
         'title' => $request->title,
         'content' => $request->content,
         'description' => $request->description,
         'image' => 'storage/'.$image
       ]);
       session()->flash('success','Post Added Successfully');
       //redirect
       return redirect(route('blog'));
     }
     public function show($id)
     {
       $post = DB::table('posts')->where('post',$post)->first();
       return view('post.show')->with('id',$id);
     }
     public function edit($id)
     {
       $post = DB::table('posts')->where('id',$id)->first();
       return view('post.add')->with('post',$post);
     }
     public function update(UpdatePostRequest $request, $id)
     {
       //storing in array
       $post = DB::table('posts')->where('id',$id)->first();

       $data = $request->only(['title','content','description']);
       //check if new image
         if($request->hasFile('image')){
           //upload image
           Storage::delete($post->image);
           $image = $request->image->store('post');
           //delete previous uploaded

           //adding new image to data array
           $data['image'] = 'storage/'.$image;
         }
         //passing array to update
          DB::table('posts')->where('id',$id)->update($data);
         //flashing a message
         session()->flash('success','Post Updated Successfully');
         //redirect
         return redirect(route('blog'));
     }

     public function destroy($id)
     {
       $post = DB::table('posts')->where('id',$id)->first();
       if($post){
         Storage::delete($post->image);
         DB::table('posts')->where('id',$id)->delete();

         session()->flash('success','Post Deleted Successfully');
         return redirect(route('blog'));

       }
     }

   }
