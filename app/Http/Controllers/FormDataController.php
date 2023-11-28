<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\HomePage;
use App\Models\ContactPage;
use App\Models\CSR;
use Illuminate\Http\Request;
use App\Models\SubMenu;
use App\Models\Menu;
use App\Models\formdata;
use App\Models\Contact;
use App\Events\CRMEvent;
use DB;
use Image;

class FormDataController extends Controller
{

    public function index()
    {
        return view('admin.formdata.formdata');
    }

    public function facilityIndex()
    {
        try {
            $data = formdata::where('page','facility-management')->get();
            return view('admin.formdata.facilitymanagement.facilitymanagement',compact('data'));
        } catch (\Throwable $th) {
            return $th;
            return redirect()->back()->with('error','Server Error');
        }
    }


        public function stores(Request $req)
        {
            $data = new formdata();
            $data->form_type = $req->input('formty');
            $data->name = $req->input('name');
            $data->email = $req->input('email');
            $data->mobile = $req->input('mobile');
            $data->message = $req->input('message');
            $data->country_code = $req->input('country_code');
            $data->page = $req->input('page');
            $crm =$data->save();
            event(new CRMEvent($crm));
            return redirect()->back()->with('message', 'Thanks For Contacting Us!'); 
        }


        public function distory($id)
        {
            $datas = formdata::find($id);
            $datas->delete();
            return redirect()->back()->with('success', 'Deleted Successfully'); 

        }


        // Become Our Channel Partner
        public function bomechannel()
        {
            try {
                $datas = formdata::where('page','become-our-channel-partner')->get();
                return view('admin.formdata.Become-our-Channel-Partner.Become-our-Channel-Partner',compact('datas'));
            } catch (\Throwable $th) {
                return $th;
                return redirect()->back()->with('error','Server Error');
            }
        }


        public function become(Request $req)
        {
            // return $req;
             $data = new formdata();
             $data->form_type = $req->input('formtyp');
             $data->name = $req->input('name');
             $data->email = $req->input('email');
             $data->mobile = $req->input('mobile');
             $data->message = $req->input('message');
             $data->country_code = $req->input('country_code');
             $data->page = $req->input('page');
             $crm =$data->save();
             event(new CRMEvent($crm));
             return redirect()->back()->with('message', 'Thanks For Contacting Us!'); 
            } 


            public function distorys($id)
            {
                $datass = formdata::find($id);
                $datass->delete();
                return redirect()->back()->with('success', 'Deleted Successfully'); 
    
            }

// Career


            public function carrr()
            {
                try {
                    $datav = formdata::where('page','Career')->get();
                    // return $datav;
                    return view('admin.formdata.career.career',compact('datav'));
                } catch (\Throwable $th) {
                    return $th;
                    return redirect()->back()->with('error','Server Error');
                }
            }


            public function carrw(Request $req)
            {
                // return $req;
                 $data = new formdata();
                 $data->form_type = $req->input('formtye');
                 $data->name = $req->input('name');
                 $data->email = $req->input('email');
                 $data->mobile = $req->input('uPhone');
                 $data->message = $req->input('message');
                 $data->Notice_Period = $req->input('nPeriod');
                 $data->Experience = $req->input('yexperience');
                 $data->Current_CTC = $req->input('uCctc');
                 $data->Expected_CTC = $req->input('uEctc');
                 $data->job_type = $req->input('job_type');
                 $data->image = $req->input('message');
                //  $data->alternate_mobile = $req->input('phone');

                if($req->hasFile('file')) {
                    $user_img_name = $req->file('file');
                    $user_name = time().'.'.$user_img_name->getClientOriginalExtension();
                    $destinationPath = public_path('/images');
                    $user_img_name->move($destinationPath, $user_name);
                    $data->image = $user_name;
           
                  }
                  $crm = $data->save();
                 event(new CRMEvent($crm));
                 return redirect()->back()->with('message', 'Thanks For Contacting Us!'); 
                } 

                public function distoryv($id)
                {
                    $datass = formdata::find($id);
                    $datass->delete();
                    return redirect()->back()->with('success', 'Deleted Successfully'); 
        
                }



// Landing


                public function landingenqri()
                {
                    try {
                        $datavv = formdata::where('page','Landing Page')->get();
                        return view('admin.formdata.Landing.landing',compact('datavv'));
                    } catch (\Throwable $th) {
                        return $th;
                        return redirect()->back()->with('error','Server Error');
                    }
                }



                public function landeq(Request $req)
                {
                    $crm =formdata::create($req->all());
                     event(new CRMEvent($crm));
                     return redirect()->back()->with('message', 'Thanks For Contacting Us!'); 
                    } 



                public function distoryvs($id)
                {
                    $datass = formdata::find($id);
                    $datass->delete();
                    return redirect()->back()->with('success', 'Deleted Successfully'); 
        
                }


                // properties-enquiry
                public function propertiesEnquiry()
                {
                    try {
                        $datas = Contact::select('*')->WhereNotNull('properties_type')->get();
                        return view('admin.formdata.properties-enquiry.properties-enquiry',compact('datas'));
                    } catch (\Throwable $th) {
                        return redirect()->back()->with('error','Server Error');
                    }
                   } 

}