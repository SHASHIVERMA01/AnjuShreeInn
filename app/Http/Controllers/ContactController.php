<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use App\Models\enquire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class ContactController extends Controller
{
    public function index()
    {
        $AContact = ContactPage::all();
        return view ('admin.contact',compact('AContact'));
        // return view ('admin.index',compact('AContact'));
    }



    public function show($page)
    {
        $AContact = ContactPage::select('*')->where('page',$page)->get();
        return view ('admin.contact.contacts',compact('AContact','page'));
        // return view ('admin.index.contacts',compact('AContact','page'));
    }

    public function stores(Request $req){
        
        $data = $req->all();
        unset($data['_token']);
        
    //      Mail::send('ui.testmail', $data, function($message) use ($data){
    //         $message->from('ravindra77065@gmail.com')->subject('Anju Shree Inn');
    //       // $message->from($data['email'])->subject('');     already commnted
    //            $message->to('kk6711702@gmail.com')->cc('kk6711702@gmail.com');
    //    });
        $datas = ContactPage::create($data);

        //  ContactPage::create($data);
        return redirect()->back()->with('message', 'Thanks For Contacting Us!'); 
       } 
       


    public function destroy($id)
    {
        $del = ContactPage::findOrFail($id);
        $del->delete(); 
        return back()->with('delete', 'Record is successfully deleted');
    }



    // Enquire

    public function enqindex()
    {
        $enquire = enquire::all();
        return view ('admin.enquire',compact('enquire'));
    }

    public function enqstores(Request $req){
        $data = new enquire();
        $data->name = $req->input('name');
        $data->email = $req->input('email');
        $data->mobile = $req->input('mobile');
        $data->save();
        return redirect()->back()->with('message', 'Thanks For Contacting Us!'); 
       } 
}
