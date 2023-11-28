<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Footer extends Model
{
    
     protected $table = 'footer';

    protected $guarded = [''];
   
    // public function menu(){
    //     return $this->belongsTo(Menu::Class,'menu_slug','id');
    // }

    // public function submenu(){
    //     return $this->belongsTo(SubMenu::Class,'submenu_slug','slug');
    // }
}
