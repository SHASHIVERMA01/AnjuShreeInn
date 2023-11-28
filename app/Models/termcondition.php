<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\SubMenu;
use App\Models\Menu;

class termcondition extends Model
{
    use SoftDeletes;
     use Sluggable;
     protected $table = 'term&condition';

    protected $guarded = [''];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


   
    public function menu(){
        return $this->belongsTo(Menu::Class,'menu_slug','id');
    }

    public function submenu(){
        return $this->belongsTo(SubMenu::Class,'submenu_slug','slug');
    }
}
