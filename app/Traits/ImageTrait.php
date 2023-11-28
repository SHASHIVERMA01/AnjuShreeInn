<?php
  
namespace App\Traits;
  
use Illuminate\Http\Request;
  
trait ImageTrait {
  
    /**
     * @param Request $request
     * @return $this|false|string
     */
    function uploadFileWebsite($source,$file){
        // $source = mean which module related file  
        $name = $source.time().''.'.'.$file->getClientOriginalExtension();
        $destinationPath = public_path('storage/homepage');
        $file->move($destinationPath,$name);
        return $name;
    }
  
}
