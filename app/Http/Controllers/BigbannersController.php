<?php

namespace App\Http\Controllers;

use App\Models\bigbanners;
use Illuminate\Http\Request;

class BigbannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $allbanners = bigbanners::all();
        return view('admin.allbanners.allbanners', compact('allbanners'));

    }

    public function add()
    {
 
        return view('admin.allbanners.allbannersAdd');
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
        $bigbanners = $request->all();
 
        if($request->hasFile('banner')){
            $user_img_names = $request->file('banner');
            $user_names = 'banner_'.time().'.'.$user_img_names->getClientOriginalExtension();
            $destinationPath = public_path('/storage/homepage');
            $user_img_names->move($destinationPath, $user_names);
            $bigbanners['banner'] = $user_names;
        //  return $user;
          }
 
        
         //  return $blog;  
        $data = bigbanners::updateorcreate(['id'=>$id],$bigbanners);
        return redirect()->route('allbanners.index')->with('Successfully Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bigbanners  $bigbanners
     * @return \Illuminate\Http\Response
     */
    public function show(bigbanners $bigbanners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bigbanners  $bigbanners
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $bigbanners = bigbanners::find($id);
        return view('admin.allbanners.allbannersAdd', compact('bigbanners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bigbanners  $bigbanners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bigbanners $bigbanners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bigbanners  $bigbanners
     * @return \Illuminate\Http\Response
     */
    public function destroy(bigbanners $bigbanners)
    {
        //
    }
}
