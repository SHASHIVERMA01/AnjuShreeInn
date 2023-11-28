<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;
use App\Models\SubMenu;
use App\Models\Menu;
use App\Models\PageData;
use Image;

class HomePageController extends Controller
{

    public function index()
    {
        $datas = HomePage::all();
        return view('admin.homepage.homepage',['datas'=>$datas]);
    }

    public function homepageList()
    {

        $datas = HomePage::all();
        return view('admin.homepage.homepageList',['datas'=>$datas]);
    }

    public function addEdit($id=null)
    {
        try {
            $data = [];
            if($id){
                $data = HomePage::findorfail($id);
            }
            return view('admin.homepage.homepageAdd',compact('data'));
        } catch (\Throwable $th) {
            return $th;
            return redirect()->back()->with('error','Server Error');
        }
    }
  
  


    public function store(Request $request)
    {
        //   return $request->all();
          if(empty($request->get('id'))){
            $this->validate($request,[
                'banner'=>'image|mimes:jpg,jpeg,png,svg',

            ]);
        }
        try{
            // $datas->$request->all();
        $welcome_image = $request->file('welcome_image');
        $event_image_one = $request->file('event_image_one');
        $event_image_two = $request->file('event_image_two');
        $event_image_three = $request->file('event_image_three');
        $event_image_four = $request->file('event_image_four');
        $event_image_five = $request->file('event_image_five');
        $event_image_six = $request->file('event_image_six');

         // submenu empty
    
           
             if(empty($request->get('id'))){
                $data = array_filter($request->all()); 
                unset($data['_token']);
                if(!empty($welcome_image)){
                    $imgname = 'welcome_image_'.time().$welcome_image->getClientOriginalName();
                    $destinationPath = public_path('storage/homepage');
                    $welcome_image->move($destinationPath,$imgname);
                    $data['welcome_image'] = $imgname;
                }
                if(!empty($event_image_one)){
                    $imgname2 = 'event_image_one_'.time().$event_image_one->getClientOriginalName();
                    $destinationPath2 = public_path('storage/homepage');
                    $event_image_one->move($destinationPath2,$imgname2);
                    $data['event_image_one'] = $imgname2;
                }
                if(!empty($event_image_two)){
                    $imgname3 = 'event_image_two_'.time().$event_image_two->getClientOriginalName();
                    $destinationPath3 = public_path('storage/homepage');
                    $event_image_two->move($destinationPath3,$imgname3);
                    $data['event_image_two'] = $imgname3;
                }
                if(!empty($event_image_three)){
                    $pro_imgname3 = 'event_image_three_'.time().$event_image_three->getClientOriginalName();
                    $destinationPath3_pro = public_path('storage/homepage');
                    $event_image_three->move($destinationPath3_pro,$pro_imgname3);
                    $data['event_image_three'] = $pro_imgname3;
                }
                if(!empty($event_image_four)){
                    $imgname3_hp = 'event_image_four_'.time().$event_image_four->getClientOriginalName();
                    $destinationPath3_hp = public_path('storage/homepage');
                    $event_image_four->move($destinationPath3_hp,$imgname3_hp);
                    $data['event_image_four'] = $imgname3_hp;
                }
               
                if(!empty($event_image_five)){
                    $imghp_image2 = 'event_image_five'.time().$event_image_five->getClientOriginalName();
                    $destinationPathhp_image2 = public_path('storage/homepage');
                    $event_image_five->move($destinationPathhp_image2,$imghp_image2);
                    $data['event_image_five'] = $imghp_image2;
                }
                if(!empty($event_image_six)){
                    $imghp_video2 = 'event_image_six_'.time().$event_image_six->getClientOriginalName();
                    $destinationPathhp_video2 = public_path('storage/homepage');
                    $event_image_six->move($destinationPathhp_video2,$imghp_video2);
                    $data['event_image_six'] = $imghp_video2;
                }
                
                // return $data;
                $menu = HomePage::create($data);
                return redirect()->route('homepage.index')->with('update','Record Update Successfully');
            }
            else{
                $data = $request->all(); 
                unset($data['_token']);
                if(!empty($welcome_image)){
                    $imgname = 'welcome_image_'.time().$welcome_image->getClientOriginalName();
                    $destinationPath = public_path('storage/homepage');
                    $welcome_image->move($destinationPath,$imgname);
                    $data['welcome_image'] = $imgname;
                }
                if(!empty($event_image_one)){
                    $imgname2 = 'pro_'.time().$event_image_one->getClientOriginalName();
                    $destinationPath2 = public_path('storage/homepage');
                    $event_image_one->move($destinationPath2,$imgname2);
                    $data['event_image_one'] = $imgname2;
                }
                if(!empty($event_image_two)){
                    $imgname3 = 'pro_'.time().$event_image_two->getClientOriginalName();
                    $destinationPath3 = public_path('storage/homepage');
                    $event_image_two->move($destinationPath3,$imgname3);
                    $data['event_image_two'] = $imgname3;
                }
                if(!empty($event_image_three)){
                    $pro_imgname3 = 'pro_'.time().$event_image_three->getClientOriginalName();
                    $destinationPath3_pro = public_path('storage/homepage');
                    $event_image_three->move($destinationPath3_pro,$pro_imgname3);
                    $data['event_image_three'] = $pro_imgname3;
                }
                if(!empty($event_image_four)){
                    $imgname3_hp = 'pro_'.time().$event_image_four->getClientOriginalName();
                    $destinationPath3_hp = public_path('storage/homepage');
                    $event_image_four->move($destinationPath3_hp,$imgname3_hp);
                    $data['event_image_four'] = $imgname3_hp;
                }
               
                if(!empty($event_image_five)){
                    $imghp_image2 = 'event_image_five'.time().$event_image_five->getClientOriginalName();
                    $destinationPathhp_image2 = public_path('storage/homepage');
                    $event_image_five->move($destinationPathhp_image2,$imghp_image2);
                    $data['event_image_five'] = $imghp_image2;
                }
                if(!empty($event_image_six)){
                    $imghp_video2 = 'event_image_six_'.time().$event_image_six->getClientOriginalName();
                    $destinationPathhp_video2 = public_path('storage/homepage');
                    $event_image_six->move($destinationPathhp_video2,$imghp_video2);
                    $data['event_image_six'] = $imghp_video2;
                }
                
                $menu = HomePage::where('id',$data['id'])->update($data);
                return redirect()->route('homepage.index')->with('update','Update Successfully');
            }
           
           
        }catch (\Exception $e) {
            return $e;
            return redirect()->back()->with('error','Server Error');
        }
    }



    public function homepagedestroy($id)
    {
        $del = HomePage::whereId($id)->delete();
        if($del == True){
            return redirect()->back()->with('delete','Delete Successfully');
        }
        else{
            return redirect()->back()->with('error','Server Error');
        } 
    }

}
