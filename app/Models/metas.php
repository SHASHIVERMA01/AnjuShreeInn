<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class metas extends Model
{
    use HasFactory;

    protected $table = 'meta';
    protected $guarded = [''];
}
