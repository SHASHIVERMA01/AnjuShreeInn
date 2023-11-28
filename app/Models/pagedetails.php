<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class pagedetails extends Model
{
    use HasFactory;

    use Sluggable;

    protected $table = 'pagesdetails';
    protected $guarded = [''];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'heading'
            ]
        ];
    }
}
