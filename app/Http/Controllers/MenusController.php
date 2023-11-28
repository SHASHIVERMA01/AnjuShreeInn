<?php

namespace App\Http\Controllers;

use App\Models\menus;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menu = menus::all();
        return view('admin.menu.menu', compact('menu'));
    }



    public function add()
    {
 
        return view('admin.menu.menuAdd');
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
        $data = menus::updateorcreate(['id'=>$id],$menu);
       
        return redirect()->route('menu.index')->with('Successfully Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\menus  $menus
     * @return \Illuminate\Http\Response
     */
    public function show(menus $menus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menus  $menus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $menu = menus::find($id);
        return view('admin.menu.menuAdd', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menus  $menus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, menus $menus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menus  $menus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $menu = menus::find($id);
        $menu->delete();
        return back()->with('success', 'Delete Succcessfully');

    }
}
