<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
{
    use SoftDeletes,Sluggable;
    Protected $guarded= [''];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
    public function comment(){
        return $this->hasMany(Comment::Class,'blog_id','id');
    }

    // public function submenu(){
    //     return $this->belongsTo(Submenu::Class,'submenu_slug','slug');
    // }

}