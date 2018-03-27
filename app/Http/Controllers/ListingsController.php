<?php

namespace App\Http\Controllers;

use App\listing;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth',['except'=>['index','show']]);
    }

    public function index()
    {
        $listings=Listing::orderBy('created_at','desc')->get();
        return view('layouts.listing')->with('listings',$listings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.createListing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'email'
        ]);
        //Create Listing
        $listings=new Listing;
        $listings->name=$request->input('name');
        $listings->email=$request->input('email');
        $listings->website=$request->input('website');
        $listings->phone=$request->input('phone');
        $listings->address=$request->input('address');
        $listings->bio=$request->input('bio');
        $listings->user_id=auth()->user()->id;
        $listings->save();
        return redirect('/dashboard')->with('success','Listing Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing=Listing::find($id);
        return view('layouts.show')->with('listing',$listing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing=Listing::find($id);
        return view('layouts.edit')->with('listing',$listing);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'email'
        ]);
        //Create Listing
        $listings=Listing::find($id);
        $listings->name=$request->input('name');
        $listings->email=$request->input('email');
        $listings->website=$request->input('website');
        $listings->phone=$request->input('phone');
        $listings->address=$request->input('address');
        $listings->bio=$request->input('bio');
        $listings->user_id=auth()->user()->id;
        $listings->save();
        return redirect('/dashboard')->with('success','Listing updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing=Listing::find($id)->delete();
        return redirect('/dashboard')->with('success','Listing has been deleted');

    }
}
