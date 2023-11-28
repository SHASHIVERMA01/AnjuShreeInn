<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Traits\ImageTrait; 
use App\Traits\curdTrait; 
use Illuminate\Http\Request;

class AboutController extends Controller
{
    use ImageTrait;
    use curdTrait;

    public function index()
    {
        //
        $aboutpage = about::all();
        return view('admin.aboutpage.aboutpage', compact('aboutpage'));
    }

    public function add()
    {
 
        return view('admin.aboutpage.aboutpageAdd');
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
          
             $banner = $request->file('banner');
             $image_one = $request->file('image_one');
             $image_two = $request->file('image_two');
             $image_three = $request->file('image_three');
             $image_four = $request->file('image_four');

          
             if(!empty($banner))
             {
                 $data['banner'] = $this->uploadFileWebsite('banner_',$banner);
             }

             if(!empty($image_one))
             {
                 $data['image_one'] = $this->uploadFileWebsite('image_one_',$image_one);
             }

             if(!empty($image_two))
             {
                 $data['image_two'] = $this->uploadFileWebsite('image_two_',$image_two);
             }

             if(!empty($image_three))
             {
                 $data['image_three'] = $this->uploadFileWebsite('image_three_',$image_three);
             }

             if(!empty($image_four))
             {
                 $data['image_four'] = $this->uploadFileWebsite('image_four_',$image_four);
             }

            //  return $data;
             $this->StoreUpdate($data,about::class);
            
        return redirect()->route('aboutpage.index')->with('success','Record Insert     ');
       
    }catch (\Exception $e) {
        return $e;
        return redirect()->back()->with('error','Server Error');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function show(about $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $aboutpage = about::find($id);
        return view('admin.aboutpage.aboutpageAdd', compact('aboutpage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, about $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\about  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(about $about)
    {
        //
    }
}
