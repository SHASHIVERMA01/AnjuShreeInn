<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blog = blog::all();
        return view('admin.blog.blog', compact('blog'));
    }


    public function add()
    {
 
        return view('admin.blog.blogAdd');
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
       
       $id =  $request->id;
       $blog = $request->all();

       if($request->hasFile('image')){
           $user_img_names = $request->file('image');
           $user_names = 'image_'.time().'.'.$user_img_names->getClientOriginalExtension();
           $destinationPath = public_path('/storage/homepage');
           $user_img_names->move($destinationPath, $user_names);
           $blog['image'] = $user_names;
       //  return $user;
         }

         if($request->hasFile('image_two')){
            $user_img_namess = $request->file('image_two');
            $user_namess = 'imagetwo_'.time().'.'.$user_img_namess->getClientOriginalExtension();
            $destinationPath = public_path('/storage/homepage');
            $user_img_namess->move($destinationPath, $user_namess);
            $blog['image_two'] = $user_namess;
        //  return $user;
          }
        //  return $blog;  
       $data = blog::updateorcreate(['id'=>$id],$blog);
       return redirect()->route('blog.index')->with('Successfully Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog = blog::find($id);
        return view('admin.blog.blogAdd', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $menu = blog::find($id);
        $menu->delete();
        return back()->with('success', 'Delete Succcessfully');
    }


    // Blog Details

    public function blogdetail($id)
    {
        $blog = blog::find($id);
        return view('ui.blogdetail', compact('blog'));
    }
}
