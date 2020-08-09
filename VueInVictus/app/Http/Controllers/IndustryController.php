<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Industries\CreateIndustryRequest;
use App\Http\Requests\Industries\UpdateIndustryRequest;
class IndustryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
     {
       $industries =  DB::table('industries')->get();
         return view('industry.index')->with('industries',$industries);
     }
     public function create()
     {
       return view('industry.add');

     }
     public function store(CreateIndustryRequest $request)
     {
       $image = $request->image->store('industry');
       //create post
      $portfolio = DB::table('industries')->insert([
         'title' => $request->title,
         'description' => $request->description,
         'image' => 'storage/'.$image
       ]);
       session()->flash('success','Industry Added Successfully');
       //redirect
       return redirect(route('industries'));
     }
     public function show($id)
     {
       $portfolio = DB::table('industries')->where('id',$id)->first();
       return view('portfolio.show')->with('id',$id);
     }
     public function edit($id)
     {
       $industry = DB::table('industries')->where('id',$id)->first();
       return view('industry.add')->with('industry',$industry);
     }
     public function update(UpdateIndustryRequest $request, $id)
     {
       //storing in array
       $industry = DB::table('industries')->where('id',$id)->first();

       $data = $request->only(['title','description']);
       //check if new image
         if($request->hasFile('image')){
           //upload image
           Storage::delete($industry->image);
           $image = $request->image->store('industry');
           //delete previous uploaded

           //adding new image to data array
           $data['image'] = 'storage/'.$image;
         }
         //passing array to update
          DB::table('industries')->where('id',$id)->update($data);
         //flashing a message
         session()->flash('success','Portfolio Updated Successfully');
         //redirect
         return redirect(route('industries'));
     }

     public function destroy($id)
     {
       $industry = DB::table('industries')->where('id',$id)->first();
       if($industry){
         Storage::delete($industry->image);
         DB::table('industries')->where('id',$id)->delete();

         session()->flash('success','Industry Deleted Successfully');
         return redirect(route('industries'));

       }
     }

   }
