<?php

namespace App\Http\Controllers;

use App\Models\homeheading;
use Illuminate\Http\Request;

class HomeheadingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $homeheading = homeheading::all();
        return view('admin.headinghome.headinghome', compact('homeheading'));
    }


    public function add()
    {
 
        return view('admin.headinghome.headinghomeAdd');
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
        $menu = $request->all();
        // return $menu;
        $data = homeheading::updateorcreate(['id'=>$id],$menu);
       
        return redirect()->route('homeheading.index')->with('Successfully Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\homeheading  $homeheading
     * @return \Illuminate\Http\Response
     */
    public function show(homeheading $homeheading)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\homeheading  $homeheading
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $headinghome = homeheading::find($id);
        return view('admin.headinghome.headinghomeAdd', compact('headinghome'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\homeheading  $homeheading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, homeheading $homeheading)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\homeheading  $homeheading
     * @return \Illuminate\Http\Response
     */
    public function destroy(homeheading $homeheading)
    {
        //
    }
}
