<?php

namespace App\Http\Controllers;

use App\Models\specialofferc;
use Illuminate\Http\Request;

class SpecialoffercController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $specialofferc = specialofferc::all();
        return view('admin.specialoffers.specialoffers', compact('specialofferc'));
    }


    public function add()
    {
 
        return view('admin.specialoffers.specialoffersAdd');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

          
       $id =  $request->id;
       $specialofferc = $request->all();
        //  return $blog;  
       $data = specialofferc::updateorcreate(['id'=>$id],$specialofferc);
       return redirect()->route('specialoffers.index')->with('Successfully Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\specialofferc  $specialofferc
     * @return \Illuminate\Http\Response
     */
    public function show(specialofferc $specialofferc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\specialofferc  $specialofferc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $specialofferc = specialofferc::find($id);
        return view('admin.specialoffers.specialoffersAdd', compact('specialofferc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\specialofferc  $specialofferc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, specialofferc $specialofferc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\specialofferc  $specialofferc
     * @return \Illuminate\Http\Response
     */
    public function destroy(specialofferc $specialofferc)
    {
        //
    }
}
