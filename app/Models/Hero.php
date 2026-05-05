<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Hero extends Model
{
    protected $fillable = [
        'description',
        'main_image',
        'additional_image',
        'role',
        //'cv_file',
    ];
}
