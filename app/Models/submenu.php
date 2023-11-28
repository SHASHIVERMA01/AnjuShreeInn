<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class submenu extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'submenu';
    protected $guarded = [''];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'submenu'
            ]
        ];
    }

    public function menu(){
        return $this->belongsTo(Menu::Class,'menu_slug','slug');
    }
}
