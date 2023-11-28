<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $service = services::all();
        return view('admin.services.services', compact('service'));
    }


    public function add()
    {
 
        return view('admin.services.servicesAdd');
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
        $services = $request->all();

        if($request->hasFile('image')) {
            $user_img_names = $request->file('image');
            $user_names = 'image_'.time().'.'.$user_img_names->getClientOriginalExtension();
            $destinationPath = public_path('/storage/homepage');
            $user_img_names->move($destinationPath, $user_names);
            $services['image'] = $user_names;
        //  return $user;
          }
        //   return $pagedetails;  
        $data = services::updateorcreate(['id'=>$id],$services);
        return redirect()->route('service.index')->with('Successfully Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function show(services $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $services = services::find($id);
        return view('admin.services.servicesAdd', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, services $services)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $services = services::find($id);
        $services->delete();
        return back()->with('success', 'Delete Succcessfully');
    }
}
