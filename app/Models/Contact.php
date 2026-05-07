<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'email',
        'github_link',
        'linkedin_link',
        'facebook_link',
        'phone_one',
        'phone_two',
        'cv',
        'location',
    ];
}