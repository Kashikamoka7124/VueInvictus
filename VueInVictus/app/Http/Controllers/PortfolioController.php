<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Portfolio\CreatePortfolioRequest;
use App\Http\Requests\Portfolio\UpdatePortfolioRequest;
class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
     {
       $portfolios =  DB::table('portfolio')->get();
         return view('portfolio.index')->with('portfolios',$portfolios);
     }
     public function create()
     {
       return view('portfolio.add');

     }
     public function store(CreatePortfolioRequest $request)
     {
       $image = $request->image->store('portfolio');
       //create post
      $portfolio = DB::table('portfolio')->insert([
         'title' => $request->title,
         'content' => $request->content,
         'image' => 'storage/'.$image
       ]);
       session()->flash('success','Portfolio Added Successfully');
       //redirect
       return redirect(route('portfolio'));
     }
     public function show($id)
     {
       $portfolio = DB::table('portfolio')->where('portfolio',$portfolio)->first();
       return view('portfolio.show')->with('id',$id);
     }
     public function edit($id)
     {
       $portfolio = DB::table('portfolio')->where('id',$id)->first();
       return view('portfolio.add')->with('portfolio',$portfolio);
     }
     public function update(UpdatePortfolioRequest $request, $id)
     {
       //storing in array
       $portfolio = DB::table('portfolio')->where('id',$id)->first();

       $data = $request->only(['title','content']);
       //check if new image
         if($request->hasFile('image')){
           //upload image
           Storage::delete($portfolio->image);
           $image = $request->image->store('portfolio');
           //delete previous uploaded

           //adding new image to data array
           $data['image'] = 'storage/'.$image;
         }
         //passing array to update
          DB::table('portfolio')->where('id',$id)->update($data);
         //flashing a message
         session()->flash('success','Portfolio Updated Successfully');
         //redirect
         return redirect(route('portfolio'));
     }

     public function destroy($id)
     {
       $portfolio = DB::table('portfolio')->where('id',$id)->first();
       if($portfolio){
         Storage::delete($portfolio->image);
         DB::table('portfolio')->where('id',$id)->delete();

         session()->flash('success','Portfolio Deleted Successfully');
         return redirect(route('portfolio'));

       }
     }

   }
