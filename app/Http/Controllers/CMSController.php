<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\CareerJob;
use App\Models\HomePage;
use App\Models\ContactPage;
use App\Models\CSR;
use Illuminate\Http\Request;
use App\Models\SubMenu;
use App\Models\Menu;
use App\Models\termcondition;
use App\Models\Privacy;
use Image;


class CMSController extends Controller
{

    public function index()
    {
        return view('admin.cms.cms');
    }

    
    public function careerlist()
    {
        try {
            $datas = Career::all();
            return view('admin.cms.career.career',compact('datas'));
        } catch (\Throwable $th) {
            return $th;
            return redirect()->back()->with('error','Server Error');
        }
    }


    public function careeraddEdit($id=null)
    {
        try {
            $data = [];
            if($id){
                $data = Career::findorfail($id);
            }
            return view('admin.cms.career.careerAdd',compact('data'));
        } catch (\Throwable $th) {
            return $th;
            return redirect()->back()->with('error','Server Error');
        }
    }
    
  


    public function careerstore(Request $request)
    {
        try{
        $data = array_filter($request->all());
        unset($data['_token']);
            $image = $request->file('image');
            $image2 = $request->file('image2');
            $image3 = $request->file('image3');
     
         // submenu empty
             if(empty($data['id'])){
                $data = array_filter($request->all()); 
                unset($data['_token']);
                if(!empty($image)){
                    $imgname = time().'career1'.'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('storage/career');
                    $image->move($destinationPath,$imgname);
                    $data['image'] = $imgname;
                }
                if(!empty($image2)){
                    $imgname2 = time().'career2'.''.'.'.$image2->getClientOriginalExtension();
                    $destinationPath2 = public_path('storage/career');
                    $image2->move($destinationPath2,$imgname2);
                    $data['image2'] = $imgname2;
                }
                if(!empty($image3)){
                    $imgname3 = time().'career3'.''.'.'.$image3->getClientOriginalExtension();
                    $destinationPath3 = public_path('storage/career');
                    $image3->move($destinationPath3,$imgname3);
                    $data['image3'] = $imgname3;
                }
                $menu = Career::create($data);
            }
            else{
                $data = $request->all(); 
                unset($data['_token']);
                if(!empty($image)){
                    $imgname = time().'career1'.'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('storage/career');
                    $image->move($destinationPath,$imgname);
                    $data['image'] = $imgname;
                }
                if(!empty($image2)){
                    $imgname2 = time().'career2'.''.'.'.$image2->getClientOriginalExtension();
                    $destinationPath2 = public_path('storage/career');
                    $image2->move($destinationPath2,$imgname2);
                    $data['image2'] = $imgname2;
                }
                if(!empty($image3)){
                    $imgname3 = time().'career3'.''.'.'.$image3->getClientOriginalExtension();
                    $destinationPath3 = public_path('storage/career');
                    $image3->move($destinationPath3,$imgname3);
                    $data['image3'] = $imgname3;
                }
                $menu = Career::where('id',$data['id'])->update($data);
            }
            return redirect()->route('career.list')->with('success','Record Insert Successfully');
           
        }catch (\Exception $e) {
            return $e;
            return redirect()->back()->with('error','Server Error');
        }
    }


    public function careerdestroy($id)
    {
        $del = Career::whereId($id)->delete();
        if($del == True){
            return redirect()->back()->with('delete','Delete Successfully');
        }
        else{
            return redirect()->back()->with('error','Server Error');
        } 
    }


    // careerjob
    public function careerjobindex()
    {
        try {
            $datas = CareerJob::all();
            return view('admin.cms.career.careerJob.careerJob',compact('datas'));
        } catch (\Throwable $th) {
            return $th;
            return redirect()->back()->with('error','Server Error');
        }
    }


    public function careerjobaddEdit($id=null)
    {
        try {
            $data = [];
            if($id){
                $data = CareerJob::findorfail($id);
            }
            return view('admin.cms.career.careerJob.careerJobAdd',compact('data'));
        } catch (\Throwable $th) {
            return $th;
            return redirect()->back()->with('error','Server Error');
        }
    }
    
  


    public function careerjobstore(Request $request)
    {
        //   return $request->all();    
        try{
        $data = array_filter($request->all());
        unset($data['_token']);
            $data = array_filter($request->all()); 
            unset($data['_token']);
             if(empty($data['id'])){
                $menu = CareerJob::create($data);
            }
            else{
                $menu = CareerJob::where('id',$data['id'])->update($data);
            }
            return redirect()->route('careerjob.index')->with('success','Record Insert Successfully');
           
        }catch (\Exception $e) {
            return $e;
            return redirect()->back()->with('error','Server Error');
        }
    }


    public function careerjobdestroy($id)
    {
        $del = CareerJob::whereId($id)->delete();
        if($del == True){
            return redirect()->back()->with('delete','Delete Successfully');
        }
        else{
            return redirect()->back()->with('error','Server Error');
        } 
    }
    

    // contact
    public function contactindex()
    {
        try {
            $datas = ContactPage::all();
            return view('admin.cms.contactpage.contactpage',compact('datas'));
        } catch (\Throwable $th) {
            return $th;
            return redirect()->back()->with('error','Server Error');
        }
    }


    public function contactaddEdit($id=null)
    {
        try {
            $data = [];
            if($id){
                $data = ContactPage::findorfail($id);
            }
            return view('admin.cms.contactpage.contactpageAdd',compact('data'));
        } catch (\Throwable $th) {
            return $th;
            return redirect()->back()->with('error','Server Error');
        }
    }
    
  


    public function contactstore(Request $request)
    {
        //   if(empty($request->get('id'))){
            $this->validate($request,[
                'image'=>'image|mimes:jpg,jpeg,png,svg',
            ]);
        // }
        
        try{
        $data = array_filter($request->all());
        unset($data['_token']);
        $image = $request->file('image');
         // submenu empty
       
            $data = array_filter($request->all()); 
            unset($data['_token']);
            $image = $request->file('image');
             if(empty($data['id'])){
                if(!empty($image)){
                    $imgname = 'Contact_'.time().''.'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('storage/etc');
                    $image->move($destinationPath,$imgname);
                    $data['image'] = $imgname;
                }
                $menu = ContactPage::create($data);
            }
            else{
                if(!empty($image)){
                    $imgname = 'Contact_'.time().''.'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('storage/etc');
                    $image->move($destinationPath,$imgname);
                    $data['image'] = $imgname;
                }
                $menu = ContactPage::where('id',$data['id'])->update($data);
            }
            return redirect()->route('contactpage.index')->with('success','Record Insert Successfully');
           
        }catch (\Exception $e) {
            return $e;
            return redirect()->back()->with('error','Server Error');
        }
    }


    public function contactdestroy($id)
    {
        $del = ContactPage::whereId($id)->delete();
        if($del == True){
            return redirect()->back()->with('delete','Delete Successfully');
        }
        else{
            return redirect()->back()->with('error','Server Error');
        } 
    }


    // csr
    public function csrindex()
    {
        try {
            $datas = CSR::all();
            return view('admin.cms.csr.csr',compact('datas'));
        } catch (\Throwable $th) {
            return $th;
            return redirect()->back()->with('error','Server Error');
        }
    }


    public function csraddEdit($id=null)
    {
        try {
            $data = [];
            if($id){
                $data = CSR::findorfail($id);
            }
            return view('admin.cms.csr.csrAdd',compact('data'));
        } catch (\Throwable $th) {
            return $th;
            return redirect()->back()->with('error','Server Error');
        }
    }
    
  


    public function csrstore(Request $request)
    {
        //   return $request->all();
        //   if(empty($request->get('id'))){
            // $this->validate($request,[
            //     'image'=>'image|mimes:jpg,jpeg,png,svg',
            // ]);
        // }
        try{
        $data = array_filter($request->all());
        unset($data['_token']);
        $banner = $request->file('banner');
        $image = $request->file('image');
        $image2 = $request->file('image2');
        $image3 = $request->file('image3');
         // submenu empty
       
            $data = array_filter($request->all()); 
            unset($data['_token']);
             if(empty($data['id'])){
                if(empty($data['id'])){
                    if(!empty($banner)){
                        $imgname = 'CSR_banner'.time().''.'.'.$banner->getClientOriginalExtension();
                        $destinationPath = public_path('storage/banner');
                        $banner->move($destinationPath,$imgname);
                        $data['banner'] = $imgname;
                    }
                    if(!empty($image)){
                        $imgname2 = 'CSR_image'.time().''.'.'.$image->getClientOriginalExtension();
                        $destinationPath2 = public_path('storage/csr');
                        $image->move($destinationPath2,$imgname2);
                        $data['image'] = $imgname2;
                    }
                    if(!empty($image2)){
                        $imgname3 = 'CSR_image2'.time().''.'.'.$image2->getClientOriginalExtension();
                        $destinationPath3 = public_path('storage/csr');
                        $image2->move($destinationPath3,$imgname3);
                        $data['image2'] = $imgname3;
                    }
                    if(!empty($image3)){
                        $bro_imgname = 'CSR_image3'.time().''.'.'.$image3->getClientOriginalExtension();
                        $bro_destinationPath = public_path('storage/csr');
                        $image3->move($bro_destinationPath,$bro_imgname);
                        $data['image3'] = $bro_imgname;
                    }
                }
                $menu = CSR::create($data);
            }
            else{
                if(!empty($image)){
                    $imgname = time().''.'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('storage/csr');
                    $image->move($destinationPath,$imgname);
                    $data['image'] = $imgname;
                }
                $menu = CSR::where('id',$data['id'])->update($data);
            }
            return redirect()->route('csr.index')->with('success','Record Insert Successfully');
           
        }catch (\Exception $e) {
            return $e;
            return redirect()->back()->with('error','Server Error');
        }
    }


    public function csrdestroy($id)
    {
        $del = CSR::whereId($id)->delete();
        if($del == True){
            return redirect()->back()->with('delete','Delete Successfully');
        }
        else{
            return redirect()->back()->with('error','Server Error');
        } 
    }
	
	 // Term & Condition
      public function termindex()
      {
          $productds = termcondition::all();
          return view('admin.cms.Term&Condition.Term&Condition',['productds'=>$productds]);
      }
  
  
  
      public function termaddEdit($id=null)
      {
          try {
              $data = [];
              if($id){
                  $data = termcondition::findorfail($id);
     
              }
              
              return view('admin.cms.Term&Condition.Term&ConditionAdd',compact('data'));
          } catch (\Throwable $th) {
              return $th;
              return redirect()->back()->with('error','Server Error');
          }
      }
      
  
      public function termstore(Request $request)
      {
           $datass = new termcondition;
          $datass->content = $request->input('content');
          $datass->meta = $request->input('meta');
          $datass->save();
          return redirect()->route('term.index')->with('success','Record Insert Successfully');
         
      }
  
      public function termtupdate(Request $request, $id)
      {
      
           $blogs = termcondition::find($id);
          $blogs->content = $request->input('content');
          $blogs->meta = $request->input('meta');
          $blogs->update();
          return redirect()->route('term.index')->with('success','Record Insert Successfully');
         
      }
  
  
      public function termdestroy($id)
      {
          $del = termcondition::find($id);
          $del->delete();
          if($del == True){
              return redirect()->back()->with('delete','Delete Successfully');
          }
          else{
              return redirect()->back()->with('error','Server Error');
          } 
      }


      // privacy policy

      public function privacyindex()
      {
          $datas = Privacy::all();
          return view('admin.cms.privacy-policy.privacy-policy',['datas'=>$datas]);
      }
  
  
  
      public function privacyaddEdit($id=null)
      {
          try {
              $data = [];
              if($id){
                  $data = Privacy::findorfail($id);
              }
              return view('admin.cms.privacy-policy.privacy-policyadd',compact('data'));
          } catch (\Throwable $th) {
              return $th;
              return redirect()->back()->with('error','Server Error');
          }
      }
      
  
      public function privacystore(Request $request)
      {
          try {
            $data= array_filter($request->all());
         
            if(empty($data['id'])){
                Privacy::create($data); 
             }else{
                 unset($data['_token']);
                 Privacy::whereId($data['id'])->update($data); 
             }
             return redirect()->route('privacy.index')->with('success','Insert Successfully');
          } catch (\Excaption $th) {
            return $th;
            return redirect()->back()->with('error','Server Error');
          }
      }
  
  
  
}