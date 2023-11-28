<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class menus extends Model
{
    use HasFactory;
      use Sluggable;

    protected $table = 'menu';
    protected $guarded = [''];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'menu'
            ]
        ];
    }

    public function submenu(){
        return $this->hasMany(subMenu::Class,'menu_slug','slug');
    }

}

