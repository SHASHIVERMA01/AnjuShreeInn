<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bigbanners extends Model
{
    use HasFactory;

    protected $table = 'allbanners';
    protected $guarded = [''];
}
