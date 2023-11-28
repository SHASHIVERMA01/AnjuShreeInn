<?php

namespace App\Http\Controllers;

use App\Models\aboutlocation;
use App\Traits\ImageTrait; 
use App\Traits\curdTrait; 
use Illuminate\Http\Request;

class AboutlocationController extends Controller
{
    use ImageTrait;
    use curdTrait;

    public function index()
    {
        //
        $aboutlocation = aboutlocation::all();
        return view('admin.aboutlocation.aboutlocation', compact('aboutlocation'));
    }

    public function add()
    {
 
        return view('admin.aboutlocation.aboutlocationAdd');
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
        try{
            $data = $request->all();
          
             $image = $request->file('image');
          
             if(!empty($image))
             {
                 $data['image'] = $this->uploadFileWebsite('image_',$image);
             }


            //  return $data;
             $this->StoreUpdate($data,aboutlocation::class);
            
        return redirect()->route('aboutlocation.index')->with('success','Record Insert     ');
       
    }catch (\Exception $e) {
        return $e;
        return redirect()->back()->with('error','Server Error');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aboutlocation  $aboutlocation
     * @return \Illuminate\Http\Response
     */
    public function show(aboutlocation $aboutlocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aboutlocation  $aboutlocation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $aboutlocation = aboutlocation::find($id);
        return view('admin.aboutlocation.aboutlocationAdd', compact('aboutlocation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\aboutlocation  $aboutlocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, aboutlocation $aboutlocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aboutlocation  $aboutlocation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $aboutlocation = aboutlocation::find($id);
        $aboutlocation->delete();
        return back()->with('success', 'Delete Succcessfully');
    }

    public function popups($id)
    {
        // return $id;
        $aboutlocation = aboutlocation::where('id',$id)->first();
        // return $aboutlocation;
        return view('ui.about', compact('aboutlocation'));
    }
}
