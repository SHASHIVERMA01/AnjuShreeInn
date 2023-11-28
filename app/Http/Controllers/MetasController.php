<?php

namespace App\Http\Controllers;

use App\Models\metas;
use Illuminate\Http\Request;

class MetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $metas = metas::all();
        return view('admin.meta.meta', compact('metas'));
    }



    public function add()
    {
 
        return view('admin.meta.metaAdd');
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
        $meta = $request->all();
        // return $menu;
        $data = metas::updateorcreate(['id'=>$id],$meta);
       
        return redirect()->route('meta.index')->with('Successfully Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\metas  $metas
     * @return \Illuminate\Http\Response
     */
    public function show(metas $metas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\metas  $metas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $meta = metas::find($id);
        return view('admin.meta.metaAdd', compact('meta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\metas  $metas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, metas $metas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\metas  $metas
     * @return \Illuminate\Http\Response
     */
    public function destroy(metas $metas)
    {
        //
    }
}
