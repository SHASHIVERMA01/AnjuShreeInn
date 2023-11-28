<?php

namespace App\Http\Controllers\ui;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubMenu;
use App\Models\Menu;
use App\Models\News;
use App\Models\Contactpage;
use App\Models\CSR;
use App\Models\HomePage;
use App\Models\Property;


class APIController extends Controller
{
   
    public function pageData(){
        try{
            $data =Product::where('status', '=',1)->get();
            return response()->json(['data'=>$data,'status_code'=>200]);
        }catch(\Excaption $e){
            return response()->json(['error'=>'somthing want wrong!']);
        }
    }
    
}
