<?php
  
namespace App\Traits;
  
use Illuminate\Http\Request;
  
trait curdTrait {
  
    /**
     * @param Request $request
     * @return $this|false|string
     */
    function StoreUpdate(array $data, $modelName){
        if(empty($data['id'])){
            $data = array_filter($data);
            $modelName::create($data);
            return;
        }
        else{
            $id = $modelName::where('id',$data['id'])->first();
            unset($data['id']);
            return $id->update($data);
        }
    }
  
}