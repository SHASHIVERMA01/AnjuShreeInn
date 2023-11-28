<?php

namespace App\Http\Controllers;

use App\Models\banners;
use App\Traits\ImageTrait; 
use App\Traits\curdTrait; 
use Illuminate\Http\Request;

class BannersController extends Controller
{

    use ImageTrait;
    use curdTrait;

    public function index()
    {
        //
        $banner = banners::all();
        return view('admin.banner.banner', compact('banner'));

    }

    public function add()
    {
 
        return view('admin.banner.bannerAdd');
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
        try{
            $data = $request->all();
          
             $image = $request->file('image');
             $mobile_banner = $request->file('mobile_banner');

          
             if(!empty($image))
             {
                 $data['image'] = $this->uploadFileWebsite('banner_',$image);
             }

             if(!empty($mobile_banner))
             {
                 $data['mobile_banner'] = $this->uploadFileWebsite('mobilebanner_',$mobile_banner);
             }

           
             $this->StoreUpdate($data,banners::class);
            //   return $data;
        return redirect()->route('banner.index')->with('success','Record Insert     ');
       
    }catch (\Exception $e) {
        return $e;
        return redirect()->back()->with('error','Server Error');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function show(banners $banners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $banner = banners::find($id);
        return view('admin.banner.bannerAdd', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, banners $banners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banners  $banners
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $menu = banners::find($id);
        $menu->delete();
        return back()->with('success', 'Delete Succcessfully');
    }
}
