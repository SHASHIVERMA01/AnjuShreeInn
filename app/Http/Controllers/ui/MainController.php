<?php

namespace App\Http\Controllers\ui;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\subMenu;
use App\Models\menus;
use App\Models\pagedetails;
use App\Models\News;
use App\Models\ContactPage;
use App\Models\HomePage;

class MainController extends Controller
{
   

    function index($menu_name)
    {
      
        if(!empty($menu_name))
        {
        
            $page_datass = pagedetails::select('*')->where('submenu_slug',$menu_name)->orWhere('menu_slug',$menu_name)->get();    
            $page_names = pagedetails::select('*')->where('submenu_slug',$menu_name)->orWhere('menu_slug',$menu_name)->first();

      if(!empty($page_datass)){
          if(!empty($page_names->menu_slug) && (empty($page_names->submenu_slug))){      
                $page_name = $page_names->menu_slug ?? '';  
                // return $page_name;
                return view('ui.allpage',compact('page_datass','page_name')); 
                
          }elseif(!empty($page_names->submenu_slug)){

                $page_name = $page_names->submenu_slug ?? '';    
                // return $page_name;  
                return view('ui.allpage',compact('page_datass','page_name'));      
          } 
        
      }else{
        return view('ui.dummypage');  
      }
    }
           
    }

  
 

    // blog and news
    public function blog(Request $req,$slug=null)
    {
        try {
            
            if(empty($req->s)){
                $data = [];
                // feature 
                $blogfeature = BlogFeature::all();
                //  our project
                $blogfeaturePro = BlogFeaturePro::all();
                // blog read
                if($slug){
                    $datas = News::whereSlug($slug)->where('status',1)->first();
                    $comment = Comment::whereBlog_id($datas->id)->where('status',1)->get();
                    $datas->comment = $comment;
                    return view('ui.blog-read',compact('datas','blogfeature'));
                }else{
                    // blog page
                    $this->publishBLog(News::all());
                    $datas = News::where('status',1)->paginate(4);
                    foreach ($datas as $key => $item) {
                        $count = Comment::whereBlog_id($item->id)->where('status',1)->count();
                        $item->comment = $count;
                    }
                    return view('ui.blog',compact('datas','blogfeaturePro','blogfeature'));
                }
            }else{
                // search blog
                $this->publishBLog(News::all());
                $datas = News::where('title','like','%'.$req->s.'%')->where('status',1)->paginate(4);
                foreach ($datas as $key => $item) {
                    $count = Comment::whereBlog_id($item->id)->where('status',1)->count();
                    $item->comment = $count;
                }
                return view('ui.blog',compact('datas'));
            }     
        } catch (\Excaption $e) {
            return $e;
            return redirect()->back()->with('error','Server Error');
        }
    }


   // blog publish schedular
   function publishBLog($items)  {
    date_default_timezone_set("Asia/Calcutta");
    foreach($items as $item){
        $blog =  News::where('id',$item->id)->first();
        $scdedule_date = new DateTime($blog->schedule_date_time);
        $taday_date = new DateTime(date('Y-m-d H:i:s'));
        if ($taday_date >= $scdedule_date &&  $blog->status == 0) {    
           News::where('id',$item->id)->update(['status'=>1]);
       }
    }
}



    // contact
    public function contact()
    {
        try {
                $datas = ContactPage::all();
                return view('ui.contact',compact('datas'));
                return view('ui.index',compact('datas'));
            } 
         catch (\Excaption $e) {
            return $e;
            return redirect()->back()->with('error','Server Error');
        }
    }


    
}
