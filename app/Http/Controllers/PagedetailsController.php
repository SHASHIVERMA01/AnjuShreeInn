<?php

namespace App\Http\Controllers;

use App\Models\pagedetails;
use App\Models\submenu;
use Illuminate\Http\Request;
use DB;

class PagedetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pagedetails = pagedetails::all();
        return view('admin.pagedetails.pagedetails', compact('pagedetails'));
    }


    public function add()
    {
 
        return view('admin.pagedetails.pagedetailsAdd');
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

    function pagedetailindex(request $request)
    {
        // dump($request->id);

        $data = submenu::where('menu_slug',$request->id)->get();
        // dd($data);
        return response()->json($data);
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
        $pagedetails = $request->all();

        if($request->hasFile('image')) {
            $user_img_names = $request->file('image');
            $user_names = 'image_'.time().'.'.$user_img_names->getClientOriginalExtension();
            $destinationPath = public_path('/storage/homepage');
            $user_img_names->move($destinationPath, $user_names);
            $pagedetails['image'] = $user_names;
        //  return $user;
          }
        //   return $pagedetails;  
        $data = pagedetails::updateorcreate(['id'=>$id],$pagedetails);
        return redirect()->route('pagedetails.index')->with('Successfully Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pagedetails  $pagedetails
     * @return \Illuminate\Http\Response
     */
    public function show(pagedetails $pagedetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pagedetails  $pagedetails
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pagedetails = pagedetails::find($id);
        return view('admin.pagedetails.pagedetailsAdd', compact('pagedetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pagedetails  $pagedetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pagedetails $pagedetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pagedetails  $pagedetails
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $menu = pagedetails::find($id);
        $menu->delete();
        return back()->with('success', 'Delete Succcessfully');
    }
}
