<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
        'year_from',
        'year_to',
        'program',
        'description',
        'institution_name',
    ];
}