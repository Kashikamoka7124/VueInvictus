<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Reviews\CreateReviewRequest;
use App\Http\Requests\Reviews\UpdateReviewRequest;
class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
     {
       $reviews =  DB::table('reviews')->get();
         return view('review.index')->with('reviews',$reviews);
     }
     public function create()
     {
       return view('review.add');

     }
     public function store(CreateReviewRequest $request)
     {
       $image = $request->image->store('review');
       //create post
      $portfolio = DB::table('reviews')->insert([
         'name' => $request->name,
         'review' => $request->review,
         'image' => 'storage/'.$image
       ]);
       session()->flash('success','Review Added Successfully');
       //redirect
       return redirect(route('reviews'));
     }
     public function show($id)
     {
       $portfolio = DB::table('reviews')->where('id',$id)->first();
       return view('portfolio.show')->with('id',$id);
     }
     public function edit($id)
     {
       $review = DB::table('reviews')->where('id',$id)->first();
       return view('review.add')->with('review',$review);
     }
     public function update(UpdateReviewRequest $request, $id)
     {
       //storing in array
       $review = DB::table('reviews')->where('id',$id)->first();

       $data = $request->only(['name','review']);
       //check if new image
         if($request->hasFile('image')){
           //upload image
           Storage::delete($review->image);
           $image = $request->image->store('review');
           //delete previous uploaded

           //adding new image to data array
           $data['image'] = 'storage/'.$image;
         }
         //passing array to update
          DB::table('reviews')->where('id',$id)->update($data);
         //flashing a message
         session()->flash('success','Review Updated Successfully');
         //redirect
         return redirect(route('reviews'));
     }

     public function destroy($id)
     {
       $review = DB::table('reviews')->where('id',$id)->first();
       if($review){
         Storage::delete($review->image);
         DB::table('reviews')->where('id',$id)->delete();

         session()->flash('success','Review Deleted Successfully');
         return redirect(route('reviews'));

       }
     }

   }
