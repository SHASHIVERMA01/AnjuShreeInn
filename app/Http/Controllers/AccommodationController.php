<?php

namespace App\Http\Controllers;

use App\Models\accommodation;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $accommodation = accommodation::all();
        return view('admin.accommodation.accommodation', compact('accommodation'));
    }

    public function add()
    {
 
        return view('admin.accommodation.accommodationAdd');
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
        $accommodation = $request->all();
 
        if($request->hasFile('image')){
            $user_img_names = $request->file('image');
            $user_names = 'image_'.time().'.'.$user_img_names->getClientOriginalExtension();
            $destinationPath = public_path('/storage/homepage');
            $user_img_names->move($destinationPath, $user_names);
            $accommodation['image'] = $user_names;
        //  return $user;
          }

          if($request->hasFile('image_one')){
            $user_img_names = $request->file('image_one');
            $user_names = 'image_one_'.time().'.'.$user_img_names->getClientOriginalExtension();
            $destinationPath = public_path('/storage/homepage');
            $user_img_names->move($destinationPath, $user_names);
            $accommodation['image_one'] = $user_names;
        //  return $user;
          }

          if($request->hasFile('image_two')){
            $user_img_names = $request->file('image_two');
            $user_names = 'image_two_'.time().'.'.$user_img_names->getClientOriginalExtension();
            $destinationPath = public_path('/storage/homepage');
            $user_img_names->move($destinationPath, $user_names);
            $accommodation['image_two'] = $user_names;
        //  return $user;
          }

          if($request->hasFile('image_three')){
            $user_img_names = $request->file('image_three');
            $user_names = 'image_three_'.time().'.'.$user_img_names->getClientOriginalExtension();
            $destinationPath = public_path('/storage/homepage');
            $user_img_names->move($destinationPath, $user_names);
            $accommodation['image_three'] = $user_names;
        //  return $user;
          }

          if($request->hasFile('image_four')){
            $user_img_names = $request->file('image_four');
            $user_names = 'image_four_'.time().'.'.$user_img_names->getClientOriginalExtension();
            $destinationPath = public_path('/storage/homepage');
            $user_img_names->move($destinationPath, $user_names);
            $accommodation['image_four'] = $user_names;
        //  return $user;
          }

          if($request->hasFile('image_five')){
            $user_img_names = $request->file('image_five');
            $user_names = 'image_five_'.time().'.'.$user_img_names->getClientOriginalExtension();
            $destinationPath = public_path('/storage/homepage');
            $user_img_names->move($destinationPath, $user_names);
            $accommodation['image_five'] = $user_names;
        //  return $user;
          }

          if($request->hasFile('image_video')){
            $user_img_names = $request->file('image_video');
            $user_names = 'image_video_'.time().'.'.$user_img_names->getClientOriginalExtension();
            $destinationPath = public_path('/storage/homepage');
            $user_img_names->move($destinationPath, $user_names);
            $accommodation['image_video'] = $user_names;
        //  return $user;
          }
        //    return $accommodation;

          $data = accommodation::updateorcreate(['id'=>$id],$accommodation);
       return redirect()->route('accommodation.index')->with('Successfully accommodation');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\accommodation  $accommodation
     * @return \Illuminate\Http\Response
     */
    public function show(accommodation $accommodation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\accommodation  $accommodation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $accommodation = accommodation::find($id);
        return view('admin.accommodation.accommodationAdd', compact('accommodation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\accommodation  $accommodation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accommodation $accommodation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\accommodation  $accommodation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $accommodation = accommodation::find($id);
        $accommodation->delete();
        return back()->with('success', 'Delete Succcessfully');
    }

    public function accommodationDetail($slug)
    {
        //
        // return $slug;
        $accommodationdetailpage = accommodation::where('slug', $slug)->first();
        // return $accommodationdetailpage;
        return view('ui.accommodations-detailpage', compact('accommodationdetailpage'));
    }
}
