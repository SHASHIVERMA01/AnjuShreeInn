<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\SubMenu;
use App\Models\Property;

class HomePage extends Model
{

    
    //  use Sluggable;
     protected $table = 'landing_homepage';

    protected $guarded = [''];

    // public function sluggable()
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'name'
    //         ]
    //     ];
    // }


   
    // public function property(){
    //     return $this->belongsTo(Property::Class,'properties_id','id');
    // }

    // public function submenu(){
    //     return $this->belongsTo(SubMenu::Class,'submenu_slug','slug');
    // }
}
