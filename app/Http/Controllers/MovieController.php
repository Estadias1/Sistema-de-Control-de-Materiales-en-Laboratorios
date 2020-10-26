<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
     /**
	     * Display a listing of the resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function index()
	    {
	        $movies = Movie::latest()->paginate(5);
	  
	        return view('index',compact('movies'))
	            ->with('i', (request()->input('page', 1) - 1) * 5);
	    }

	   
	    /**
	     * Show the form for creating a new resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function create()
	    {
	        return view('create');
	    }

	  
	    /**
	     * Store a newly created resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @return \Illuminate\Http\Response
	     */
	    public function store(Request $request)
	    {
	        $request->validate([
	            'name' => 'required',
	            'description' => 'required',
	        ]);
	  
	        Movie::create($request->all());
	   
	        return redirect()->route('movies.index')
	                        ->with('success','Movie created successfully.');
	    }

	   
	    /**
	     * Display the specified resource.
	     *
	     * @param  \App\Movie  $Movie
	     * @return \Illuminate\Http\Response
	     */
	    public function show(Movie $Movie)
	    {
	        return view('show',compact('Movie'));
	    }

	   
	    /**
	     * Show the form for editing the specified resource.
	     *
	     * @param  \App\Movie  $Movie
	     * @return \Illuminate\Http\Response
	     */
	    public function edit(Movie $Movie)
	    {
	        return view('edit',compact('Movie'));
	    }

	  
	    /**
	     * Update the specified resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @param  \App\Movie  $Movie
	     * @return \Illuminate\Http\Response
	     */
	    public function update(Request $request, Movie $Movie)
	    {
	        $request->validate([
	            'name' => 'required',
	            'description' => 'required',
	        ]);
	  
	        $Movie->update($request->all());
	  
	        return redirect()->route('movies.index')
	                        ->with('success','Movie updated successfully');
	    }

	  
	    /**
	     * Remove the specified resource from storage.
	     *
	     * @param  \App\Movie  $Movie
	     * @return \Illuminate\Http\Response
	     */
	    public function destroy(Movie $Movie)
	    {
	        $Movie->delete();
	  
	        return redirect()->route('movies.index')
	                        ->with('success','Movie deleted successfully');
	    }
}
