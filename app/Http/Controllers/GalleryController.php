<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Traits\ImageTrait; 
use App\Traits\curdTrait; 
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    use ImageTrait;
    use curdTrait;

    public function index()
    {
        //
        $gallery = gallery::all();
        return view('admin.gallery.gallery', compact('gallery'));
    }

    public function add()
    {
 
        return view('admin.gallery.galleryAdd');
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
                 $data['image'] = $this->uploadFileWebsite('gallery_',$image);
             }
           
             $this->StoreUpdate($data,gallery::class);
            //   return $data;
        return redirect()->route('gallery.index')->with('success','Record Insert     ');
       
    }catch (\Exception $e) {
        return $e;
        return redirect()->back()->with('error','Server Error');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $gallery = gallery::find($id);
        return view('admin.gallery.galleryAdd', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $menu = gallery::find($id);
        $menu->delete();
        return back()->with('success', 'Delete Succcessfully');
    }
}
