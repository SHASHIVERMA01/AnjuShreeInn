<?php

namespace App\Http\Controllers;

use App\Models\events;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $eventbanquet = events::all();
        return view('admin.eventbanquet.eventbanquet', compact('eventbanquet'));
    }

    public function add()
    {
 
        return view('admin.eventbanquet.eventbanquetAdd');
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
        $eventbanquet = $request->all();
 
        if($request->hasFile('banner_image')){
            $user_img_names = $request->file('banner_image');
            $user_names = 'banner_image_'.time().'.'.$user_img_names->getClientOriginalExtension();
            $destinationPath = public_path('/storage/homepage');
            $user_img_names->move($destinationPath, $user_names);
            $eventbanquet['banner_image'] = $user_names;
        //  return $user;
          }

          if($request->hasFile('background_image')){
            $user_img_names = $request->file('background_image');
            $user_names = 'background_image_'.time().'.'.$user_img_names->getClientOriginalExtension();
            $destinationPath = public_path('/storage/homepage');
            $user_img_names->move($destinationPath, $user_names);
            $eventbanquet['background_image'] = $user_names;
        //  return $user;
          }

        if($request->hasFile('image')){
            $user_img_names = $request->file('image');
            $user_names = 'image_'.time().'.'.$user_img_names->getClientOriginalExtension();
            $destinationPath = public_path('/storage/homepage');
            $user_img_names->move($destinationPath, $user_names);
            $eventbanquet['image'] = $user_names;
        //  return $user;
          }
        //    return $accommodation;

          $data = events::updateorcreate(['id'=>$id],$eventbanquet);
       return redirect()->route('eventbanquet.index')->with('Successfully accommodation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $eventbanquet = events::find($id);
        return view('admin.eventbanquet.eventbanquetAdd', compact('eventbanquet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, events $events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $accommodation = events::find($id);
        $accommodation->delete();
        return back()->with('success', 'Delete Succcessfully');
    }
}
