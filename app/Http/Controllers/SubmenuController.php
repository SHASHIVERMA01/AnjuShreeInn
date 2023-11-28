<?php

namespace App\Http\Controllers;

use App\Models\submenu;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $submenu = submenu::all();
        return view('admin.submenu.submenu', compact('submenu'));
    }


    
    public function add()
    {
 
        return view('admin.submenu.submenuAdd');
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
        $menu = $request->all();
        // return $menu;
        $data = submenu::updateorcreate(['id'=>$id],$menu);
       
        return redirect()->route('submenu.index')->with('Successfully Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function show(submenu $submenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $submenu = submenu::find($id);
        return view('admin.submenu.submenuAdd', compact('submenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, submenu $submenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\submenu  $submenu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $submenu = submenu::find($id);
        $submenu->delete();
        return back()->with('success', 'Delete Succcessfully');
    }
}
