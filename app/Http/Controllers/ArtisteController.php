<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtisteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {   
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('music.new_artiste');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       try {
            

            $data = request()->validate([
                'full_name' => 'required',
                'stage_name' => 'required',
                'dp' => ['required', 'image'],
                'bio' => 'required',
            ]); 
    
            $imagePath = request('dp')->store('artiste_pics', 'public');
    
            auth()->user()->artiste()->create([
                'full_name' => $data['full_name'],
                'stage_name' => $data['stage_name'], 
                'dp' => $imagePath,
                'bio' => $data['bio'],
                'creator_id' => auth()->user()->id
            ]);
    
            return redirect()->route('music.index')->with('success', 'New Artiste Created!');


         } catch (\Exception $e) { 
            // It's actually a QueryException but this works too
           if ($e->getCode() == 23000) {   return redirect()->route('artiste.create')->with('error', 'Error: An entry that can conflict with pre-existing records detected, pls modify your entries ...');  }
           
         }
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
